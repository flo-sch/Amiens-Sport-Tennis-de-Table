<?php

namespace FSB\ASTT\Admin\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use FSB\ASTT\CoreBundle\Entity\News;
use FSB\ASTT\Admin\CrudBundle\Form\NewsType;

/**
 * News controller.
 *
 */
class NewsController extends Controller
{
    /**
     * Lists all News entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('FSBASTTCoreBundle:News')->findAll();

        return $this->render('FSBASTTAdminCrudBundle:News:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a News entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('FSBASTTCoreBundle:News')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FSBASTTAdminCrudBundle:News:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new News entity.
     *
     */
    public function newAction()
    {
        $entity = new News();
        $form   = $this->createForm(new NewsType(), $entity);

        return $this->render('FSBASTTAdminCrudBundle:News:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new News entity.
     *
     */
    public function createAction()
    {
        $entity  = new News();
        $request = $this->getRequest();
        $form    = $this->createForm(new NewsType(), $entity);
        $form->bindRequest($request);
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $data = $form->getData();
            
            if ($data->getScreen() instanceof UploadedFile) {
                $screenTmpName = $data->getScreen()->getPathName();
                $screenFileName = $data->getScreen()->getClientOriginalName();
                $screenFile = new File($screenTmpName);
                $screenFile->move(News::$ScreensUploadDir, $screenFileName);
                $entity->setScreen($screenFileName);
            }
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('news_show', array('id' => $entity->getId())));
            
        }

        return $this->render('FSBASTTAdminCrudBundle:News:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing News entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('FSBASTTCoreBundle:News')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News entity.');
        }

        $editForm = $this->createForm(new NewsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FSBASTTAdminCrudBundle:News:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing News entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('FSBASTTCoreBundle:News')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News entity.');
        }

        $editForm   = $this->createForm(new NewsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);
        
        $request = $this->getRequest();
        
        $editForm->bindRequest($request);
        
        if ($editForm->isValid()) {
            $data = $editForm->getData();
            
            if ($data->getScreen() instanceof UploadedFile) {
                $screenTmpName = $data->getScreen()->getPathName();
                $screenFileName = $data->getScreen()->getClientOriginalName();
                $screenFile = new File($screenTmpName);
                $screenFile->move(News::$ScreensUploadDir, $screenFileName);
                $entity->setScreen($screenFileName);
            }
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('news_edit', array('id' => $id)));
        }

        return $this->render('FSBASTTAdminCrudBundle:News:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
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
            $entity = $em->getRepository('FSBASTTCoreBundle:News')->find($id);
            
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find News entity.');
            }

            //$em->remove($entity);
            $entity->setDeleted(true);
            $em->persist($entity);
            
            $em->flush();
        }

        return $this->redirect($this->generateUrl('news'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
