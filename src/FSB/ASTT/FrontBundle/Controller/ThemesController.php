<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Cookie;

/**
 * Description of ThemesController
 *
 * @author fschildknecht
 */
class ThemesController extends FrontController {

    public function indexAction($name) {
        $referer = $this->getRequest()->headers->get('referer');
        $response = new RedirectResponse($referer);
        $response->headers->setCookie(new Cookie('css_theme', $name, time() + (3600 * 24 * 365)));
        return $response;
    }

}