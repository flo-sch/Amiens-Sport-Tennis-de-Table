<?php

namespace FSB\ASTT\Admin\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use FSB\ASTT\CoreBundle\Entity\Result;
use FSB\ASTT\Admin\CrudBundle\Form\ResultType;

/**
 * Result controller.
 *
 */
class ResultController extends Controller
{
    /**
     * Lists all Result entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('FSBASTTCoreBundle:Result')->findAllDisplayedSorteredByDate();

        return $this->render('FSBASTTAdminCrudBundle:Result:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Result entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('FSBASTTCoreBundle:Result')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Result entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FSBASTTAdminCrudBundle:Result:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to create a new Result entity.
     *
     */
    public function newAction()
    {
        $entity = new Result();
        $form   = $this->createForm(new ResultType(), $entity);

        return $this->render('FSBASTTAdminCrudBundle:Result:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Result entity.
     *
     */
    public function createAction()
    {
        $entity  = new Result();
        $request = $this->getRequest();
        $form    = $this->createForm(new ResultType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
            $em = $this->getDoctrine()->getEntityManager();
            
            if ($data->getFile() instanceof UploadedFile) {
                $fileTmpName = $data->getFile()->getPathName();
                $fileName = $data->getFile()->getClientOriginalName();
                $file = new File($fileTmpName);
                $file->move(Result::$ResultsUploadDir, $fileName);
                $entity->setFile($fileName);
            }

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('result_show', array('id' => $entity->getId())));
            
        }

        return $this->render('FSBASTTAdminCrudBundle:Result:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Result entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('FSBASTTCoreBundle:Result')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Result entity.');
        }

        $editForm = $this->createForm(new ResultType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FSBASTTAdminCrudBundle:Result:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Result entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('FSBASTTCoreBundle:Result')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Result entity.');
        }

        $last_file = $entity->getFile();

        $editForm   = $this->createForm(new ResultType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $data = $editForm->getData();

            if ($data->getFile() && $data->getFile() instanceof UploadedFile) {
                $fileTmpName = $data->getFile()->getPathName();
                $fileName = $data->getFile()->getClientOriginalName();
                $file = new File($fileTmpName);
                $file->move(Result::$ResultsUploadDir, $fileName);
                $entity->setFile($fileName);
            } else {
                $entity->setFile($last_file);
            }
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('result_edit', array('id' => $id)));
        }

        return $this->render('FSBASTTAdminCrudBundle:Result:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Result entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('FSBASTTCoreBundle:Result')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Result entity.');
            }

            //$em->remove($entity);
            $entity->setDeleted(true);
            $em->persist($entity);
            
            $em->flush();
        }

        return $this->redirect($this->generateUrl('result'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
