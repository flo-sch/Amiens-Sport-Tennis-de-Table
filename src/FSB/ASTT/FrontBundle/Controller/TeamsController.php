<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;
use FSB\ASTT\CoreBundle\Entity\Team;
use FSB\ASTT\CoreBundle\Entity\Player;
use FSB\ASTT\CoreBundle\Entity\Result;

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
        
        foreach ($teamsArray as $civility => $teamByCivility) {
            foreach ($teamByCivility as $key => $team) {
                // Leader is not required
                $leader = $team->getLeader();
                if ($leader) {
                    $teamsArray[$civility][$key]['leader'] = $leader;
                }
            }
        }
        
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
    
    public function playerAction($id, $licence)
    {
        $pageTitle = 'Joueur';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $team = $em->getRepository('FSBASTTCoreBundle:Team')->findOneById($id);
        
        if (!$team) {
            throw $this->createNotFoundException('Cette équipe n\'existe pas.');
        }
        
        $player = $em->getRepository('FSBASTTCoreBundle:Player')->findOneByLicence($licence);
        
        if (!$player) {
            throw $this->createNotFoundException('Ce joueur n\'existe pas.');
        }
        
        $rep = 'images/joueurs/';
        $allowed_formats = array('.jpg', '.JPG', '.jpeg', '.JPEG', '.gif', '.png', '.PNG');
        $format = '';
        foreach ($allowed_formats as $af) {
            if (file_exists($rep.$player->getLicence().$af)) {
                $format = $af;
            }
        }
        
        return $this->render('FSBASTTFrontBundle:Teams:player.html.twig', array(
            'page_title' => $pageTitle,
            'team' => $team,
            'player' => $player,
            'photo_format' => $format
        ));
    }
}