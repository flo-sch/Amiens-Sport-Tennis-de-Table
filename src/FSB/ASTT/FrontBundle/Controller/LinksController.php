<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;

class linksController extends FrontController
{
    public function indexAction()
    {
        $pageTitle = 'Liens';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $linksArray = array(
            'Somme' => $em->getRepository('FSBASTTCoreBundle:Link')->findAllDisplayedByCategory(1),
            'Oise' => $em->getRepository('FSBASTTCoreBundle:Link')->findAllDisplayedByCategory(2),
            'Aisne' => $em->getRepository('FSBASTTCoreBundle:Link')->findAllDisplayedByCategory(3),
        );
        
        return $this->render('FSBASTTFrontBundle:Links:index.html.twig', array(
            'page_title' => $pageTitle,
            'linksArray' => $linksArray
        ));
    }
}
