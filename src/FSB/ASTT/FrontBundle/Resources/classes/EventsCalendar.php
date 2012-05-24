<?php

namespace FSB\ASTT\FrontBundle\Resources\Classes;

use FSB\ASTT\CoreBundle\Entity\Event;

class EventsCalendar
{
    private $_em;
    private $name;
    private $nbDays;
    private $startDay;
    private $events;
    private static $monthsNames = array(
        '01' => 'Janvier',
        '02' => 'Février',
        '03' => 'Mars',
        '04' => 'Avril',
        '05' => 'Mai',
        '06' => 'Juin',
        '07' => 'Juillet',
        '08' => 'Août',
        '09' => 'Septembre',
        '10' => 'Octobre',
        '11' => 'Novembre',
        '12' => 'Décembre',
    );
    
    public function __construct($doctrine = NULL, \DateTime $datetime = NULL)
    {
        if (!$datetime) {
            $datetime = new \DateTime();
        }
        
        $this->_em = $doctrine->getEntityManager();
        
        $time = $datetime->getTimestamp();
        
        
        $this->name = self::$monthsNames[date('m', $time)].' '.date('Y', $time);
        $this->startDay = date('N', mktime(0, 0, 0, date('m', $time), 1, date('Y', $time)));
        $this->nbDays = date('t', $time);
        
        // boucler sur le nombre de jours
        $semaine = 0;
        
        if ($this->startDay != 1) {
            for ($i = 1; $i < $this->startDay; $i++) {
                $this->events[$semaine][($i - $this->startDay + 1)] = date('d', mktime(0, 0, 0, date('m', $time), ($i - $this->startDay + 1), date('Y', $time)));
            }
        }
        
        $month_st = new \DateTime();
        $month_et = new \DateTime();
        $month_st->setTimestamp(mktime(0, 0, 0, date('m', $time), 1, date('Y', $time)));
        $month_et->setTimestamp(mktime(23, 59, 59, date('m', $time), $this->nbDays, date('Y', $time)));
        $monthEvents = $this->_em->getRepository('FSBASTTCoreBundle:Event')->findDisplayedEventsForTimeInterval($month_st, $month_et);
        
        for ($i = $this->startDay; $i <= ($this->nbDays + $this->startDay - 1); $i++) {
            $dayEvents = array();
            $day_st = new \DateTime();
            $day_et = new \DateTime();
            $day_st->setTimestamp(mktime(0, 0, 0, date('m', $time), ($i - $this->startDay + 1), date('Y', $time)));
            $day_et->setTimestamp(mktime(23, 59, 59, date('m', $time), ($i - $this->startDay + 1), date('Y', $time)));
            
            foreach ($monthEvents as $monthEvent) {
                if (($monthEvent->getDate() >= $day_st) && ($monthEvent->getDate() <= $day_et)) {
                    $dayEvents[] = $monthEvent;
                }
            }
            
            $this->events[$semaine][($i - $this->startDay + 1)] = array(
                'starttime' => $day_st,
                'endtime' => $day_et,
                'events' => $dayEvents
            );
            if ($i % 7 == 0) {
                $semaine++;
            }
        }
        
        $nbDaysInLastWeek = count($this->events[$semaine]);
        
        for ($j = 7; $j > $nbDaysInLastWeek; $j--) {
            $this->events[$semaine][($i - $this->startDay + 1)] = date('d', mktime(0, 0, 0, date('m', $time), ($i - $this->startDay + 1), date('Y', $time)));
            $i++;
        }
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name = '')
    {
        $this->name = $name;
    }
    
    public function getNbDays()
    {
        return $this->nbDays;
    }
    
    public function setNbDays($nbDays = 0)
    {
        $this->nbDays = $nbDays;
    }
    
    public function getStartDay()
    {
        return $this->startDay;
    }
    
    public function setStartDay($startDay = 0)
    {
        $this->startDay = $startDay;
    }
    
    public function getEvents()
    {
        return $this->events;
    }
    
    public function setEvents($events = array())
    {
        $this->events = $events;
    }
}
