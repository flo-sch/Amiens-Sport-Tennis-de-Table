<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;

class NewsController extends FrontController
{
    public function archiveAction()
    {
        $pageTitle = 'Actualités - Archives';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $news = $em->getRepository('FSBASTTCoreBundle:News')->findAllDisplayedSorteredByDates();
        
        return $this->render('FSBASTTFrontBundle:News:archive.html.twig', array(
            'page_title' => $pageTitle,
            'all_news' => $news
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