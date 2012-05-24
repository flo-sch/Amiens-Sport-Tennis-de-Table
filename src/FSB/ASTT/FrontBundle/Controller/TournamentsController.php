<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;
use FSB\ASTT\FrontBundle\Form\InscriptionTropheeType;
use FSB\ASTT\CoreBundle\Entity\Summary;
use FSB\ASTT\CoreBundle\Entity\Event;

class TournamentsController extends FrontController
{
    
    
    public function indexAction()
    {
        $pageTitle = 'Compétitions';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $summariesArray = array(
            'I' => array(
                'Cr' => $em->getRepository('FSBASTTCoreBundle:Summary')->findAllDisplayedSorteredByDateWithTypeAndTournament('I', 'Cr', 'ASC', 'DESC'),
                'Ch' => $em->getRepository('FSBASTTCoreBundle:Summary')->findAllDisplayedSorteredByDateWithTypeAndTournament('I', 'Ch', 'ASC', 'DESC'),
                'Fi' => $em->getRepository('FSBASTTCoreBundle:Summary')->findAllDisplayedSorteredByDateWithTypeAndTournament('I', 'Fi', 'ASC', 'DESC'),
                'To' => $em->getRepository('FSBASTTCoreBundle:Summary')->findAllDisplayedSorteredByDateWithTypeAndTournament('I', 'To', 'ASC', 'DESC'),
            ),
            'T' => array(
                'BJ' => $em->getRepository('FSBASTTCoreBundle:Summary')->findAllDisplayedSorteredByDateWithTypeAndTournament('T', 'BJ', 'ASC', 'DESC'),
                'CS' => $em->getRepository('FSBASTTCoreBundle:Summary')->findAllDisplayedSorteredByDateWithTypeAndTournament('T', 'CS', 'ASC', 'DESC'),
                'In' => $em->getRepository('FSBASTTCoreBundle:Summary')->findAllDisplayedSorteredByDateWithTypeAndTournament('T', 'In', 'ASC', 'DESC'),
            ),
        );
        
        return $this->render('FSBASTTFrontBundle:Tournaments:index.html.twig', array(
            'page_title' => $pageTitle,
            'summariesArray' => $summariesArray
        ));
    }
    
    public function showAction($id)
    {
        $pageTitle = 'Résumé d\'une compétition';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $summary = $em->getRepository('FSBASTTCoreBundle:Summary')->findOneById($id);
        
        if (!$summary) {
            throw $this->createNotFoundException('Ce résumé n\'existe pas, ou plus, ou pas encore.');
        }
        
        return $this->render('FSBASTTFrontBundle:Tournaments:show.html.twig', array(
            'page_title' => $pageTitle,
            'summary' => $summary
        ));
    }
    
    public function clubTournamentAction()
    {
        $pageTitle = 'Tournoi d\'Amiens';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $starttime = new \DateTime('now');
        $endtime = new \DateTime();
        $endtime->setTimestamp(mktime(date('H'), date('i'), date('s'), (date('m') + 3), date('d'), date('Y')));
        
        $national_trophee = $em->getRepository('FSBASTTCoreBundle:Event')->findNationalTropheeInTimeInterval($starttime, $endtime);
        
        $infos = array(
            'mode' => 'none'
        );
        
        if ($national_trophee) {
            $infos['mode'] = 'tournament';
        }
        
        return $this->render('FSBASTTFrontBundle:Tournaments:trophee_national.html.twig', array(
            'page_title' => $pageTitle,
            'national_trophee' => $national_trophee,
            'infos' => $infos
        ));
    }
    
    public function getSeriesAction()
    {
        $season = (date('m') > 8 ? $this->getSportSeason(0) : $this->getSportSeason(1));
        return $this->downloadFile('series.pdf', $season.'/trophee_national/', 'ASTT-Trophee-National-Series-'.$season.'.pdf');
    }
    
    public function getRulesAction()
    {
        $season = (date('m') > 8 ? $this->getSportSeason(0) : $this->getSportSeason(1));
        return $this->downloadFile('reglement.pdf', $season.'/trophee_national/', 'ASTT-Trophee-National-Reglement-'.$season.'.pdf');
    }
    
    public function getResultsAction()
    {
        $season = (date('m') == 9 ? $this->getSportSeason(-1) : $this->getSportSeason(0));
        return $this->downloadFile('resultats.pdf', $season.'/trophee_national/', 'ASTT-Trophee-National-Resultats-'.$season.'.pdf');
    }
    
    public function inscriptionAction()
    {
        $pageTitle = 'Inscription';
        
        $form = $this->createForm(new InscriptionTropheeType(), array());
        
        return $this->render('FSBASTTFrontBundle:Tournaments:inscription.html.twig', array(
            'page_title' => $pageTitle,
            'form' => $form->createView()
        ));
    }
    
    public function inscriptionCheckAction()
    {
        $pageTitle = 'Inscription';
        
        $request = $this->getRequest();
        $session = $request->getSession();
        
        $form = $this->createForm(new InscriptionTropheeType(), array());
        $form->bindRequest($request);
        
        if ($form->isValid()) {
            $data = $form->getData();
            
            if ((empty($data['series_1'])) && (empty($data['series_2']))) {
                $session->setFlash('error', 'Vous devez renseigner au moins une série.');
            } else {
                if ((count($data['series_1']) > 2) || (count($data['series_2']) > 2)) {
                    $session->setFlash('error', 'Vous ne pouvez participer à plus de deux séries par jour.');
                } else {
                    $series = array_merge($data['series_1'], $data['series_2']);
                    
                    $points = (int) $data['points'];
                    if (($points <= 450) && ($points < 5000)) {
                        $session->setFlash('error', 'Nombre de points incorrect.');
                    } else {
                        if (($data['civility'] == 'M') && (in_array('F', $series))) {
                            $session->setFlash('error', 'Un homme ne peut participer à l\'Open Dames.');
                        } else {
                            $errors = self::SeriesAllowedForPoints($points, $series);
                            if (!empty($errors)) {
                                $session->setFlash('error', 'Avec vos points, vous ne pouvez pas participer aux séries : '.$errors);
                            } else {
                                $infos = array(
                                    'civility' => ($data['civility'] == 'M' ? 'Homme' : 'Femme'),
                                    'firstname' => $data['firstname'],
                                    'lastname' => $data['lastname'],
                                    'licence' => $data['licence'],
                                    'points' => $data['points'],
                                    'series' => array(
                                        1 => $data['series_1'],
                                        2 => $data['series_2'],
                                    ),
                                );
                                
                                // Send Mail
                                $messageClub = \Swift_Message::newInstance()
                                    ->setSubject('Nouvelle inscription pour le trophée national')
                                    ->setFrom('site@astt.com')
                                    ->setTo('astt@wanadoo.fr')
                                    ->setBody($this->render('FSBASTTFrontBundle:Tournaments:email.club.html.twig', array(
                                            'infos' => $infos
                                        ))
                                    )
                                ;
                                
                                
                                $messageUser = \Swift_Message::newInstance()
                                    ->setSubject('Confirmation de votre inscription au trophée national')
                                    ->setFrom('site@astt.com')
                                    ->setTo($data['email'])
                                    ->setBody($this->render('FSBASTTFrontBundle:Tournaments:email.confirm.html.twig', array(
                                        'infos' => $infos
                                    ))
                                );
                                
                                $this->get('mailer')->send($messageClub);
                                $this->get('mailer')->send($messageUser);
                                
                                
                                $session->setFlash('success', 'Votre inscription à bien été prise en compte. Un mail de confirmation a été envoyé à l\'adresse que vous avez renseigné.');
                                
                                return $this->redirect($this->generateUrl('FSBASTTFrontBundle_club_tournamentpage'));
                            }
                        }
                    }
                }
            }
        }
        
        return $this->render('FSBASTTFrontBundle:Tournaments:inscription.html.twig', array(
            'page_title' => $pageTitle,
            'form' => $form->createView()
        ));
    }
    
    private static function SeriesAllowedForPoints($points, $series)
    {
        $result = '';
        foreach ($series as $serie) {
            if (($points < InscriptionTropheeType::$series[$serie]['min']) || ($points > InscriptionTropheeType::$series[$serie]['max'])) {
                if (!empty($result)) {
                    $result .= ', ';
                }
                $result .= $serie;
            }
        }
        
        return $result;
    }
}