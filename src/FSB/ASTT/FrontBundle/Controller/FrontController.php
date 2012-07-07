<?php

namespace FSB\ASTT\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FSB\ASTT\CoreBundle\Entity\Event;
use FSB\ASTT\CoreBundle\Entity\News;

/**
 * FrontController : Parent controller for all the front pages
 * 
 * Every render() method of the front controllers will call this controller.
 * 
 * It is a way to render dynamic elements on every pages, like footers elements or news
 * 
 */
class FrontController extends Controller {
    /**
     * render
     * Surcharge rendering function
     * 
     * @param string $view
     * @param array $parameters
     * @param Response $response
     * 
     */
    public function render($view, array $parameters = array(), Response $response = null)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $events = $em->getRepository('FSBASTTCoreBundle:Event')->findAllDisplayedSorteredByDate(false, 11);
        $medias = array();
        $themes = array('base', 'amelia', 'cerulean', 'cyborg', 'journal', 'readable', 'simplex', 'slate', 'spacelab', 'spruce', 'superhero', 'united');
        $news_flux = $em->getRepository('FSBASTTCoreBundle:News')->findAllDisplayedSorteredByDates();
        
        $css_theme = $this->getRequest()->cookies->get('css_theme');
        if (!$css_theme) {
            $css_theme = 'base';
        }
        if (!array_key_exists('css_theme', $parameters)) {
            $parameters['css_theme'] = $css_theme;
        }
        if (!array_key_exists('footer_events', $parameters)) {
            $parameters['footer_events'] = $events;
        }
        if (!array_key_exists('footer_calendar', $parameters)) {
            $parameters['footer_calendar'] = new EventsCalendar($this->getDoctrine(), new \DateTime('now'));
        }
        if (!array_key_exists('footer_medias', $parameters)) {
            $parameters['footer_medias'] = $medias;
        }
        if (!array_key_exists('footer_themes', $parameters)) {
            $parameters['footer_themes'] = $themes;
        }
        if (!array_key_exists('news_flux', $parameters)) {
            $parameters['news_flux'] = $news_flux;
        }
        $parameters['previous_season'] = $this->getSportSeason(-1);
        $parameters['sport_season'] = $this->getSportSeason(0);
        $parameters['next_season'] = $this->getSportSeason(1);
        
        return $this->container->get('templating')->renderResponse($view, $parameters, $response);
    }
    
    /**
     * getSportSeason
     * 
     * @param string $season
     * @return string 
     */
    public function getSportSeason($season = 0)
    {
        $season = (int) $season;
        $sport_season = (date('m') > 8 ? (date('Y') + $season).'-'.(date('Y') + $season + 1) : (date('Y') + $season - 1).'-'.(date('Y') + $season));
        return $sport_season;
    }
    
    /**
     * Send File by HTTP protocol
     * 
     * @param string $filename
     * @param string $dir
     * @param string $downloadedName
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws notFoundException
     */
    public function downloadFile($filename, $dir = '', $downloadedName = '')
    {
        $rep = 'files/'.$dir;
        
        $file = $rep.$filename;
        
        if (!file_exists($file)) {
            throw $this->createNotFoundException('Aie... Le fichier que vous cherchez n\'existe pas, ou plus, ou pas encore...');
        }
        
        $filesize = filesize($file);
        $downloadedName = (empty($downloadedName) ? basename($file) : $downloadedName);
        
        session_write_close();
        
        $response = new Response();
        $response->setStatusCode(200);
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Expires', '0'); 
        $response->headers->set('Cache-Control', 'must-revalidate, post-check=0, pre-check=0'); 
        $response->headers->set('Content-Description', 'File Transfer');
        $response->headers->set('Content-type', 'application/force-download');
        $response->headers->set('Content-Transfer-Encoding', 'binary;');
        $response->headers->set('Content-Disposition', 'attachment; filename='.$downloadedName);
        $response->headers->set('Content-length', $filesize);
        
        $response->setContent(file_get_contents($file));
        
        $response->send();
        
        return $response;
    }
}

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