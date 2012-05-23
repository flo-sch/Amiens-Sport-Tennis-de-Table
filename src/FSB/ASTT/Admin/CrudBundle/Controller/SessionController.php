<?php

namespace FSB\ASTT\Admin\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

use FSB\ASTT\Admin\CrudBundle\Form\LoginType;

class SessionController extends Controller
{
    
    public function loginAction()
    {
        $form = $this->createForm(new LoginType(), array());
        
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        if ($error) {
            $session->setFlash('error', $error->getMessage());
        }
        
        return $this->render('FSBASTTAdminCrudBundle:Session:login.html.twig', array(
            'form'          => $form->createView(),
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }
    
    public function logoutAction()
    {
        
    }
}
