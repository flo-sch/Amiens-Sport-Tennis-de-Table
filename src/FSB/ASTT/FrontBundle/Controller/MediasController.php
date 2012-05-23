<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;

class MediasController extends FrontController
{
    public function photosAction()
    {
        $pageTitle = 'Album Photos';
        
        return $this->render('FSBASTTFrontBundle:Medias:photos.html.twig', array(
            'page_title' => $pageTitle
        ));
    }
    
    public function videosAction()
    {
        $pageTitle = 'Vidéos';
        
        return $this->render('FSBASTTFrontBundle:Medias:videos.html.twig', array(
            'page_title' => $pageTitle
        ));
    }
}