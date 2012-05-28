<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;

class CalendarController extends FrontController
{
    public function indexAction()
    {
        $pageTitle = 'Calendriers';
        
        $sport_season = $this->getSportSeason('current');
        
        $datetime = new \DateTime();
        
        $season = array(
            1 => array(9, 10, 11, 12),
            2 => array(1, 2, 3, 4, 5, 6),
        );
        
        $calendars = array();
        foreach ($season as $phase => $months) {
            $year = ($phase == 1 ? substr($sport_season, 0, 4) : substr($sport_season, 6, 4));
            foreach ($months as $month) {
                $datetime->setTimestamp(mktime(0, 0, 0, $month, 1, $year));
                $calendars[] = new EventsCalendar($this->getDoctrine(), $datetime);
            }
        }
        
        return $this->render('FSBASTTFrontBundle:Calendar:index.html.twig', array(
            'page_title' => $pageTitle,
            'calendars' => $calendars
        ));
    }
    
    public function showEventsForDateAction($day, $month, $year)
    {
        if (!(checkdate($month, $day, $year))) {
            throw $this->createNotFoundException('Ce jour n\'existe pas...');
        }
        
        $pageTitle = 'Evénements du '.$day.'/'.$month.'/'.$year;
        
        $begin_tmp = mktime(0, 0, 0, $month, $day, $year);
        $end_tmp = mktime(23, 59, 59, $month, $day, $year);
        
        $day_bt = new \DateTime();
        $day_et = new \DateTime();
        $day_bt->setTimestamp($begin_tmp);
        $day_et->setTimestamp($end_tmp);
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $events = $em->getRepository('FSBASTTCoreBundle:Event')->findDisplayedEventsForTimeInterval($day_bt, $day_et);
        
        return $this->render('FSBASTTFrontBundle:Calendar:day.html.twig', array(
            'page_title' => $pageTitle,
            'events' => $events
        ));
    }
    
    public function showAction($id)
    {
        $pageTitle = 'Evénement';

        $em = $this->getDoctrine()->getEntityManager();
        
        $event = $em->getRepository('FSBASTTCoreBundle:Event')->findOneById($id);
        
        
        return $this->render('FSBASTTFrontBundle:Calendar:show.html.twig', array(
            'page_title' => $pageTitle,
            'event' => $event
        ));
    }
}