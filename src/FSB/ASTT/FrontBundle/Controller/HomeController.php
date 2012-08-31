<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;

class HomeController extends FrontController
{
    public function indexAction()
    {
        $pageTitle = 'Actualités';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $news = $em->getRepository('FSBASTTCoreBundle:News')->findAllDisplayedOnTime();
        
        return $this->render('FSBASTTFrontBundle::home.html.twig', array(
            'page_title' => $pageTitle,
            'news' => $news
        ));
    }
}