<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;

class DesignController extends FrontController
{
    public function indexAction()
    {
        $pageTitle = 'Design';
        
        return $this->render('FSBASTTFrontBundle:Design:index.html.twig', array(
            'page_title' => $pageTitle
        ));
    }
}