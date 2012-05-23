<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;
use AntiMattr\GoogleBundle\Maps\StaticMap;
use AntiMattr\GoogleBundle\Maps\Marker;

class AccessController extends FrontController
{
    public function indexAction()
    {
        $pageTitle = 'Plan d\'accès';
        
        return $this->render('FSBASTTFrontBundle:Access:index.html.twig', array(
            'page_title' => $pageTitle,
        ));
    }
}