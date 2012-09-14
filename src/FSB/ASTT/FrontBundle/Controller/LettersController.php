<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;
use FSB\ASTT\CoreBundle\Entity\Letter;

class LettersController extends FrontController
{
    public function indexAction()
    {
        $pageTitle = 'Lettres du club';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $letters = $em->getRepository('FSBASTTCoreBundle:Letter')->findAllDisplayedSorteredByDate();
        
        return $this->render('FSBASTTFrontBundle:Letters:index.html.twig', array(
            'page_title' => $pageTitle,
            'letters' => $letters
        ));
    }
    
    public function downloadAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $letter = $em->getRepository('FSBASTTCoreBundle:Letter')->findOneById($id);
        
        if (!$letter) {
            throw $this->createNotFoundException('La lettre que vous demandez n\'existe pas, ou plus, ou pas encore.');
        }
        
        $file_infos = pathinfo(Letter::$LettersUploadDir.'/'.$letter->getFile());
        
        return $this->downloadFile($letter->getFile(), 'letters/', 'ASTT-Letter-'.$letter->getTitle().'.'.$file_infos['extension']);
    }
}