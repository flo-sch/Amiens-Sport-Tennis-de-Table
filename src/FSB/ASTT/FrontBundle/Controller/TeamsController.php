<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;

class TeamsController extends FrontController
{
    public function indexAction()
    {
        $pageTitle = 'Equipes';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $teamsArray = array(
            'W' => $em->getRepository('FSBASTTCoreBundle:Team')->findAllDisplayedByCivility('W'),
            'M' => $em->getRepository('FSBASTTCoreBundle:Team')->findAllDisplayedByCivility('M'),
            'Y' => $em->getRepository('FSBASTTCoreBundle:Team')->findAllDisplayedByCivility('Y')
        );
        
        return $this->render('FSBASTTFrontBundle:Teams:index.html.twig', array(
            'page_title' => $pageTitle,
            'teamsArray' => $teamsArray
        ));
    }
    
    public function showAction($id)
    {
        $pageTitle = 'Equipe';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $team = $em->getRepository('FSBASTTCoreBundle:Team')->findOneById($id);
        
        if (!$team) {
            throw $this->createNotFoundException('Cette équipe n\'existe pas.');
        }
        
        $players = $em->getRepository('FSBASTTCoreBundle:Player')->findByTeam($team->getId());
        
        return $this->render('FSBASTTFrontBundle:Teams:show.html.twig', array(
            'page_title' => $pageTitle,
            'team' => $team,
            'players' => $players
        ));
    }
    
    public function resultsAction($id)
    {
        $pageTitle = 'Résumés';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $team = $em->getRepository('FSBASTTCoreBundle:Team')->findOneById($id);
        
        if (!$team) {
            throw $this->createNotFoundException('Cette équipe n\'existe pas.');
        }
        
        $results = $em->getRepository('FSBASTTCoreBundle:Result')->findAllByTeam($team->getId());
        
        return $this->render('FSBASTTFrontBundle:Teams:results.html.twig', array(
            'page_title' => $pageTitle,
            'team' => $team,
            'results' => $results
        ));
    }
}