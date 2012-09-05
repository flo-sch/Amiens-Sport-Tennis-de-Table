<?php

namespace FSB\ASTT\Admin\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FSB\ASTT\CoreBundle\Entity\Interview;
use FSB\ASTT\Admin\CrudBundle\Form\InterviewType;

/**
 * Interview controller.
 *
 */
class InterviewController extends Controller
{
    /**
     * Lists all Interview entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('FSBASTTCoreBundle:Interview')->findAllDisplayedSorteredByDate();

        return $this->render('FSBASTTAdminCrudBundle:Interview:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Interview entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('FSBASTTCoreBundle:Interview')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Interview entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FSBASTTAdminCrudBundle:Interview:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Interview entity.
     *
     */
    public function newAction()
    {
        $entity = new Interview();
        $form   = $this->createForm(new InterviewType(), $entity);

        return $this->render('FSBASTTAdminCrudBundle:Interview:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Interview entity.
     *
     */
    public function createAction()
    {
        $entity  = new Interview();
        $request = $this->getRequest();
        $form    = $this->createForm(new InterviewType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('interview_show', array('id' => $entity->getId())));
            
        }

        return $this->render('FSBASTTAdminCrudBundle:Interview:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Interview entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('FSBASTTCoreBundle:Interview')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Interview entity.');
        }

        $editForm = $this->createForm(new InterviewType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FSBASTTAdminCrudBundle:Interview:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Interview entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('FSBASTTCoreBundle:Interview')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Interview entity.');
        }

        $editForm   = $this->createForm(new InterviewType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('interview_edit', array('id' => $id)));
        }

        return $this->render('FSBASTTAdminCrudBundle:Interview:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Interview entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('FSBASTTCoreBundle:Interview')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Interview entity.');
            }

            //$em->remove($entity);
            $entity->setDeleted(true);
            $em->persist($entity);
            
            $em->flush();
        }

        return $this->redirect($this->generateUrl('interview'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}