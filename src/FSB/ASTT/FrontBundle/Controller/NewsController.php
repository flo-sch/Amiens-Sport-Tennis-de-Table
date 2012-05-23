<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;

class NewsController extends FrontController
{
    public function indexAction()
    {
        $pageTitle = 'Actualités';
        
        return $this->render('FSBASTTFrontBundle:News:index.html.twig', array(
            'page_title' => $pageTitle
        ));
    }
    
    public function showAction($id)
    {
        $pageTitle = 'Actualité';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $news = $em->getRepository('FSBASTTCoreBundle:News')->findOneById($id);
        
        return $this->render('FSBASTTFrontBundle:News:show.html.twig', array(
            'page_title' => $pageTitle,
            'news' => $news
        ));
    }
}