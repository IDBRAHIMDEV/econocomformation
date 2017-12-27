<?php

namespace PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use PostBundle\Entity\Tag;

class TagController extends Controller
{
    /**
     * @Route("/tag")
     */
    public function indexAction()
    {
        return $this->render('PostBundle:Tag:index.html.twig', array(
            // ...
        ));
    }


     /**
     * @Route("/tag/create")
     */
    public function createAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tags = ['laravel', 'symfony', 'codeigniter', 'angular'];

        foreach ($tags as $tag) {
        	$newTag = new Tag();
        	$newTag->setTitle($tag);
        	$newTag->setActive(true);

        	$em->persist($newTag);
        	$em->flush();
        }

        return new Response('tag created');
    }


}
