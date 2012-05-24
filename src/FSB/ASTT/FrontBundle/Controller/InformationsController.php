<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;

class InformationsController extends FrontController
{
    public function presentationAction()
    {
        $pageTitle = 'Amiens Sport Tennis de Table';
        
        return $this->render('FSBASTTFrontBundle:Informations:presentation.html.twig', array(
            'page_title' => $pageTitle
        ));
    }
    
    public function historiqueAction()
    {
        $pageTitle = 'Historique';


        return $this->render('FSBASTTFrontBundle:Informations:historique.html.twig', array(
            'page_title' => $pageTitle
        ));
    }
    
    public function scheduleAction()
    {
        return $this->downloadFile('planning.pdf', $this->getSportSeason(0).'/', 'ASTT-horaires-'.$this->getSportSeason(0).'.pdf');
    }
    
    public function pricesAction()
    {
        $pageTitle = 'Tarifs';
        
        $veteransYear = (date('m') > 08 ? 40 : 39);
        $seniorsYears = 'De '.date('Y', mktime(date('H'), date('i'), date('s'), date('m'), date('d'), (date('Y') - 17))).' à '.date('Y', mktime(date('H'), date('i'), date('s'), date('m'), date('d'), (date('Y') - $veteransYear + 1)));
        $juniorsYear = (date('m') > 08 ? 14 : 13);
        $babypingYear = (date('m') > 08 ? 2 : 1);
        
        $licences = array(
            'Poussins' => array(
                'season' => $this->getSportSeason(-7),
                'price' => 95,
                'criterium' => 25,
            ),
            'Benjamins' => array(
                'season' => $this->getSportSeason(-9),
                'price' => 115,
                'criterium' => 25,
            ),
            'Minimes' => array(
                'season' => $this->getSportSeason(-11),
                'price' => 120,
                'criterium' => 30,
            ),
            'Cadets' => array(
                'season' => $this->getSportSeason(-13),
                'price' => 120,
                'criterium' => 30,
            ),
            'Juniors' => array(
                'season' => $this->getSportSeason(-16).'-'.date('Y', mktime(date('H'), date('i'), date('s'), date('m'), date('d'), (date('Y') - $juniorsYear))),
                'price' => 130,
                'criterium' => 30,
            ),
            'Seniors' => array(
                'season' => $seniorsYears,
                'price' => 130,
                'criterium' => 45,
            ),
            'Vétérans' => array(
                'season' => 'Avant '.date('Y', mktime(date('H'), date('i'), date('s'), date('m'), date('d'), (date('Y') - $veteransYear))),
                'price' => 130,
                'criterium' => 45,
            ),
        );
        
        $babyping = array(
            'season' => $this->getSportSeason(-3).'-'.date('Y', mktime(date('H'), date('i'), date('s'), date('m'), date('d'), (date('Y') - $babypingYear))),
            'price' => '65'
        );
        
        $remises = array(
            '2' => -15,
            '3' => -30
        );
        
        $offres = array(
            'loisirs' => '60',
            'extérieurs' => '80',
            'étudiants' => '60'
        );
        
        return $this->render('FSBASTTFrontBundle:Informations:tarifs.html.twig', array(
            'page_title' => $pageTitle,
            'licences' => $licences,
            'babyping' => $babyping,
            'remises' => $remises,
            'offres' => $offres
        ));
    }
    
    public function babypingAction()
    {
        $pageTitle = 'Babyping';


        return $this->render('FSBASTTFrontBundle:Informations:babyping.html.twig', array(
            'page_title' => $pageTitle
        ));
    }
    
    public function handisportAction()
    {
        $pageTitle = 'Handisport';


        return $this->render('FSBASTTFrontBundle:Informations:handisport.html.twig', array(
            'page_title' => $pageTitle
        ));
    }
}