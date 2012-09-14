<?php

namespace FSB\ASTT\Admin\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use FSB\ASTT\CoreBundle\Entity\Letter;
use FSB\ASTT\Admin\CrudBundle\Form\LetterType;

class LetterController extends Controller
{
    /**
     * Lists all Letter entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('FSBASTTCoreBundle:Letter')->findAllDisplayedSorteredByDate();

        return $this->render('FSBASTTAdminCrudBundle:Letter:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Letter entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('FSBASTTCoreBundle:Letter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Letter entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FSBASTTAdminCrudBundle:Letter:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Letter entity.
     *
     */
    public function newAction()
    {
        $entity = new Letter();
        $form   = $this->createForm(new LetterType(), $entity);

        return $this->render('FSBASTTAdminCrudBundle:Letter:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Letter entity.
     *
     */
    public function createAction()
    {
        $entity  = new Letter();
        $request = $this->getRequest();
        $form    = $this->createForm(new LetterType(), $entity);
        $form->bindRequest($request);
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $data = $form->getData();
            
            if ($data->getFile() instanceof UploadedFile) {
                $fileTmpName = $data->getFile()->getPathName();
                $fileName = $data->getFile()->getClientOriginalName();
                $file = new File($fileTmpName);
                $file->move(Letter::$LettersUploadDir, $fileName);
                $entity->setFile($fileName);
            }
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('letter_show', array('id' => $entity->getId())));
            
        }

        return $this->render('FSBASTTAdminCrudBundle:Letter:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Letter entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('FSBASTTCoreBundle:Letter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Letter entity.');
        }

        $editForm = $this->createForm(new LetterType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FSBASTTAdminCrudBundle:Letter:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Letter entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $entity = $em->getRepository('FSBASTTCoreBundle:Letter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Letter entity.');
        }

        $editForm   = $this->createForm(new LetterType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $data = $editForm->getData();
            
            if ($data->getFile() instanceof UploadedFile) {
                $fileTmpName = $data->getFile()->getPathName();
                $fileName = $data->getFile()->getClientOriginalName();
                $file = new File($fileTmpName);
                $file->move(Letter::$LettersUploadDir, $fileName);
                $entity->setFile($fileName);
            }
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('letter_edit', array('id' => $id)));
        }

        return $this->render('FSBASTTAdminCrudBundle:Letter:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Letter entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('FSBASTTCoreBundle:Letter')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Letter entity.');
            }

            //$em->remove($entity);
            $entity->setDeleted(true);
            $em->persist($entity);
            
            $em->flush();
        }

        return $this->redirect($this->generateUrl('letter'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
