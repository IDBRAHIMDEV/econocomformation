<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/blog", name="list-blog")
     */
    public function indexAction()
    {
        return $this->render('BlogBundle:Default:index.html.twig');
    }

    /**
     * @Route("/blog/{id}/{slug}/{annee}.{ext}", name="show-post",
        requirements={
	      "id": "\d+",
	      "slug": "[a-zA-Z]+"
        } 
       )
     */
    public function showAction($id, $slug, $annee, $ext)
    {
    	dump($slug);
       return new Response("je suis à la page ".$id.' '.$slug);
    }
}
