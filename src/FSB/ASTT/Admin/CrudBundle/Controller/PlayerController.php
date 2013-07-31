<?php

namespace FSB\ASTT\Admin\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FSB\ASTT\CoreBundle\Entity\Player;
use FSB\ASTT\Admin\CrudBundle\Form\PlayerType;

ini_set('auto_detect_line_endings', true);

/**
 * Player controller.
 *
 */
class PlayerController extends Controller
{
    /**
     * Lists all Player entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('FSBASTTCoreBundle:Player')->findAll();

        return $this->render('FSBASTTAdminCrudBundle:Player:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Player entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('FSBASTTCoreBundle:Player')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Player entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FSBASTTAdminCrudBundle:Player:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Player entity.
     *
     */
    public function newAction()
    {
        $entity = new Player();
        $form   = $this->createForm(new PlayerType(), $entity);

        return $this->render('FSBASTTAdminCrudBundle:Player:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Player entity.
     *
     */
    public function createAction()
    {
        $entity  = new Player();
        $request = $this->getRequest();
        $form    = $this->createForm(new PlayerType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('player_show', array('id' => $entity->getId())));
            
        }

        return $this->render('FSBASTTAdminCrudBundle:Player:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Player entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('FSBASTTCoreBundle:Player')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Player entity.');
        }

        $editForm = $this->createForm(new PlayerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FSBASTTAdminCrudBundle:Player:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Player entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('FSBASTTCoreBundle:Player')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Player entity.');
        }

        $editForm   = $this->createForm(new PlayerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('player_edit', array('id' => $id)));
        }

        return $this->render('FSBASTTAdminCrudBundle:Player:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Player entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('FSBASTTCoreBundle:Player')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Player entity.');
            }

            //$em->remove($entity);
            $entity->setHidden(true);
            $em->persist($entity);
            
            $em->flush();
        }

        return $this->redirect($this->generateUrl('player'));
    }
    
    
    public function importAction()
    {
        $form = $this->createImportForm();
        
        return $this->render('FSBASTTAdminCrudBundle:Player:import.html.twig', array(
            'import_form' => $form->createView()
        ));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    public function importCheckAction()
    {
        $form = $this->createImportForm();
        $request = $this->getRequest();
        
        $form->bindRequest($request);
        
        $civilities = array(
            'M' => 'M',
            'F' => 'W'
        );
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $data = $form->getData();
            
            $csvFile = $data['file'];
            $csvContent = file($csvFile->getPathName());
            unset($csvContent[0]);
            
            $allreadyMemberIds = array();
            foreach ($csvContent as $playerLine) {
                //
                // Fucking tableau excel de merde !!! C'est vraiment des glands les informaticiens de la ligue !!!!!!
                //
                $playerInfos = explode(';', $playerLine);

                $licence = $playerInfos[0];

                $civility = $civilities[$playerInfos[9]];

                $names = explode(' ', $playerInfos[1]);
                $lastname = ((count($names) == 4) ? utf8_encode($names[0]).' '.utf8_encode($names[1]) : utf8_encode($names[0]));
                $firstname = ((count($names) == 4) ? utf8_encode($names[2]) : utf8_encode($names[1]));

                $birthdateInfos = explode('/', $playerInfos[5]);
                $birthdate = new \DateTime();
                $birthdate->setDate(($birthdateInfos[2] <= date('y') ? '20'.$birthdateInfos[2] : '19'.$birthdateInfos[2]), $birthdateInfos[1], $birthdateInfos[0]);
                $birthdate->setTime(12, 0, 0);

                $categoryInfos = explode(' ', $playerInfos[8]);
                $category = substr($categoryInfos[0], 0, 1).((count($categoryInfos) == 4) ? $categoryInfos[1] : '');

                $pointsInfos = explode(' / ', $playerInfos[10]);
                $classement = ((strlen($pointsInfos[1]) >= 8) ? 'N' : intval(substr($pointsInfos[1], 0)));
                $points = intval(substr($pointsInfos[0], 0, -1));
                
                $player = $em->getRepository('FSBASTTCoreBundle:Player')->findOneByLicence($licence);

                if (!$player) {
                    $player = new Player();
                    $player->setLicence($playerInfos[0]);
                } else {
                    array_push($allreadyMemberIds, $player->getId());
                }

                $player->setCivility($civility);
                $player->setLastname($lastname);
                $player->setFirstname($firstname);
                $player->setBirthday($birthdate);
                $player->setCategory($category);
                $player->setClassement($classement);
                $player->setPoints($points);
                $em->persist($player);
            }

            if (count($allreadyMemberIds) > 0) {
                $leavingPlayersIds = $em->getRepository('FSBASTTCoreBundle:Player')->findPlayersNotInIdArray($allreadyMemberIds);
                $leavingPlayers = array();
                foreach ($leavingPlayersIds as $leavingPlayer) {
                    array_push($leavingPlayers, intval($leavingPlayer['id']));
                }
                $em->getRepository('FSBASTTCoreBundle:Player')->removePlayersByIdArray($leavingPlayers);
            }

            $em->flush();
            
            $session = $this->getRequest()->getSession();
            $session->setFlash('success', 'Les joueurs ont été correctement importés !');
            
            return $this->redirect($this->generateUrl('player'));
        }
        
        return $this->redirect($this->generateUrl('player_import'));
    }
    
    private function createImportForm()
    {
        return $this->createFormBuilder()
            ->add('file', 'file')
            ->getForm()
        ;
    }
}
