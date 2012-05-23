<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;
use FSB\ASTT\CoreBundle\Entity\Partner;

class PartnersController extends FrontController
{
    public function indexAction()
    {
        $pageTitle = 'Partenaires';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $partners = $em->getRepository('FSBASTTCoreBundle:Partner')->findAllDisplayed();
        
        return $this->render('FSBASTTFrontBundle:Partners:index.html.twig', array(
            'page_title' => $pageTitle,
            'partners' => $partners
        ));
    }
}