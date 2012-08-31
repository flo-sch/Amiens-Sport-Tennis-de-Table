<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;

class InterviewsController extends FrontController
{
    public function indexAction($id)
    {
        $pageTitle = 'Interviews';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $interviews = $em->getRepository('FSBASTTCoreBundle:Interview')->findAllDisplayedSorteredByDate();
        
        if (!$interviews) {
            throw $this->createNotFoundException('Aucune interview n\'a été publiée pour le moment.');
        }
        
        $interview = $em->getRepository('FSBASTTCoreBundle:Interview')->findOneById($id);
        
        return $this->render('FSBASTTFrontBundle:Interviews:index.html.twig', array(
            'page_title' => $pageTitle,
            'interviews' => $interviews,
            'interview' => $interview
        ));
    }
}
