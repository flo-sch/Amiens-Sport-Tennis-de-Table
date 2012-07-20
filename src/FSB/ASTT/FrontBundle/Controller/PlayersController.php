<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;
use FSB\ASTT\CoreBundle\Entity\Team;
use FSB\ASTT\CoreBundle\Entity\Player;

class PlayersController extends FrontController
{
    public function indexAction()
    {
        $pageTitle = 'Joueurs';
        
        $dm = $this->getDoctrine()->getEntityManager();
        
        $players = $dm->getRepository('FSBASTTCoreBundle:Player')->findActivePlayers();
        
        return $this->render('FSBASTTFrontBundle:Players:index.html.twig', array(
            'page_title' => $pageTitle,
            'players' => $players
        ));
    }
    
    public function showAction($licence)
    {
        $pageTitle = 'Joueur';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $player = $em->getRepository('FSBASTTCoreBundle:Player')->findOneByLicence($licence);
        
        if (!$player) {
            throw $this->createNotFoundException('Ce joueur n\'existe pas.');
        }
        
        $team = $player->getMainTeam();
        
        if (!$team) {
            throw $this->createNotFoundException('Cette équipe n\'existe pas.');
        }
        
        $rep = 'images/joueurs/';
        $allowed_formats = array('.jpg', '.JPG', '.jpeg', '.JPEG', '.gif', '.png', '.PNG');
        $format = '';
        foreach ($allowed_formats as $af) {
            if (file_exists($rep.$player->getLicence().$af)) {
                $format = $af;
            }
        }
        
        return $this->render('FSBASTTFrontBundle:Players:show.html.twig', array(
            'page_title' => $pageTitle,
            'team' => $team,
            'player' => $player,
            'photo_format' => $format
        ));
    }
}