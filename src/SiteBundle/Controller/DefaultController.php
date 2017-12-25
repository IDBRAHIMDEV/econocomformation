<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteBundle:Default:index.html.twig');
    }

     public function showAction()
    {
        return $this->render('SiteBundle:Default:show.html.twig', 
 					['nom' => $this->lire('Mohamed IDBRAHIM')]
               );
    }

    public function lire($name) {
       return new Response("je suis ".$name);
    }

}
