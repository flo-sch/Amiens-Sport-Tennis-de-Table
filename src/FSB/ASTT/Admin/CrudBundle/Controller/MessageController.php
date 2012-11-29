<?php

namespace FSB\ASTT\Admin\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Message controller.
 *
 */
class MessageController extends Controller
{
    /**
     * Lists all Message entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('FSBASTTCoreBundle:Message')->findAllDisplayedSorteredByCreatedAt();
        $deleteForms = array();

        foreach ($entities as $entity) {
            $deleteForms[] = $this->createDeleteForm($entity->getId())->createView();
        }

        return $this->render('FSBASTTAdminCrudBundle:Message:index.html.twig', array(
            'entities' => $entities,
            'delete_forms' => $deleteForms
        ));
    }

    /**
     * Finds and displays a Message entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('FSBASTTCoreBundle:Message')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Message entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        
        return $this->render('FSBASTTAdminCrudBundle:Message:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a News entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('FSBASTTCoreBundle:Message')->find($id);
            
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Message entity.');
            }

            //$em->remove($entity);
            $entity->setDeleted(true);
            $em->persist($entity);
            
            $em->flush();
        }

        return $this->redirect($this->generateUrl('message'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
