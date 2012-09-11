<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;
use FSB\ASTT\CoreBundle\Entity\Message;
use FSB\ASTT\FrontBundle\Form\MessageType;

class MessagesController extends FrontController
{
    public function indexAction()
    {
        $pageTitle = 'Livre d\'or';
        
        $entity = new Message();
        $form  = $this->createForm(new MessageType(), $entity);
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $messages = $em->getRepository('FSBASTTCoreBundle:Message')->findAllDisplayedSorteredByCreatedAt();
        
        return $this->render('FSBASTTFrontBundle:Messages:index.html.twig', array(
            'page_title' => $pageTitle,
            'form_anonym' => $form->createView(),
            'messages' => $messages
        ));
    }
    
    public function checkFormAction()
    {
        $pageTitle = 'Livre d\'or';
        
        $request = $this->getRequest();
        $session = $request->getSession();
        
        $entity = new Message();
        $form   = $this->createForm(new MessageType(), $entity);
        $form->bindRequest($request);
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();
            
            $session->setFlash('success', 'Votre message a bien été enregistré.');
            
            return $this->redirect($this->generateUrl('FSBASTTFrontBundle_guestbook_page'));
        } else {
            $session->setFlash('error', 'Votre message n\'a pas pu être inséré.');
        }
        
        return $this->render('FSBASTTFrontBundle:Messages:index.html.twig', array(
            'page_title' => $pageTitle,
            'form' => $form->createView()
        ));
        
    }
}