<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;
use FSB\ASTT\CoreBundle\Entity\Article;

class ArticlesController extends FrontController
{
    public function indexAction()
    {
        $pageTitle = 'Articles de presse';
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $articles = $em->getRepository('FSBASTTCoreBundle:Article')->findAllDisplayedSorteredByDate();
        
        return $this->render('FSBASTTFrontBundle:Articles:index.html.twig', array(
            'page_title' => $pageTitle,
            'articles' => $articles
        ));
    }
    
    public function downloadAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $article = $em->getRepository('FSBASTTCoreBundle:Article')->findOneById($id);
        
        if (!$article) {
            throw $this->createNotFoundException('L\'article que vous demandez n\'existe pas, ou plus, ou pas encore.');
        }
        
        return $this->downloadFile($article->getFile(), 'articles/', 'ASTT-Article-'.$article->getTitle().'.pdf');
    }
}