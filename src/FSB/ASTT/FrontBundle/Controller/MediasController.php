<?php

namespace FSB\ASTT\FrontBundle\Controller;

use FSB\ASTT\FrontBundle\Controller\FrontController;

class MediasController extends FrontController
{
    private static $root = 'images/album/';
    private static $allowedFormats = array('jpg', 'jpeg', 'JPG', 'JPEG', 'png', 'PNG', 'gif', 'GIF');
    
    public function photosAction($dir = '')
    {
        $pageTitle = 'Album Photos';
        
        $dir = self::$root.str_replace('|', '/', $dir);
        
        $menu = $this->buildRecursiveDirectoryNavigation(self::$root);
        
        $files = $this->findImagesForDir($dir);
        
        return $this->render('FSBASTTFrontBundle:Medias:photos.html.twig', array(
            'page_title' => $pageTitle,
            'menu' => $menu,
            'files' => $files,
            'commun_dir' => substr($dir, strlen(self::$root))
        ));
    }
    
    public function videosAction()
    {
        $pageTitle = 'Vidéos';
        
        return $this->render('FSBASTTFrontBundle:Medias:videos.html.twig', array(
            'page_title' => $pageTitle
        ));
    }
    
    private function buildRecursiveDirectoryNavigation($dir = '')
    {
        $subdirs = array();
        foreach (scandir($dir, 1) as $dir_content) {
            if (($dir_content != '.') && ($dir_content != '..') && (is_dir($dir.$dir_content))) {
                $subdirs[substr($dir, strlen(self::$root)).$dir_content] = array(
                    'content' => $this->buildRecursiveDirectoryNavigation($dir.$dir_content.'/'),
                    'label' => $dir_content,
                    'files' => $this->findImagesForDir($dir.$dir_content.'/')
                );
            }
        }
        return $subdirs;
    }
    
    private function findImagesForDir($dir)
    {
        $files = array();
        foreach (scandir($dir) as $dir_content) {
            if (!(preg_match('#\/$#', $dir))) {
                $dir .= '/';
            }
            if (($dir_content != '.') && ($dir_content != '..') && (is_file($dir.$dir_content)) && (in_array(substr($dir_content, strrpos($dir_content, '.') + 1), self::$allowedFormats))) {
                $files[] = $dir.$dir_content;
            }
        }
        return $files;
    }
}