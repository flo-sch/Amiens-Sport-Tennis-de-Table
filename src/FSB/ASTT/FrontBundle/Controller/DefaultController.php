<?php

namespace FSB\ASTT\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FSBASTTFrontBundle:Default:index.html.twig');
    }
}
