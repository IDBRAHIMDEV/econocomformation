<?php

namespace PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{
    /**
     * @Route("/post/")
     */
    public function indexAction()
    { 
    	$data = [
    	['id' => 1, 'title' => 'Lorem ipsum dolor.', 'body' => 'Lorem ipsum dolor.'],
    	['id' => 2, 'title' => 'Lorem ipsum dolor.', 'body' => 'Lorem ipsum dolor.'],
    	['id' => 3, 'title' => 'Lorem ipsum dolor.', 'body' => 'Lorem ipsum dolor.'],
    	['id' => 4, 'title' => 'Lorem ipsum dolor.', 'body' => 'Lorem ipsum dolor.'],
    	];
        return $this->render('PostBundle:Post:index.html.twig',
          ['posts' => $data]
        );
    }


     /**
     * @Route("/post/create", name="post-create")
     */
    public function createAction()
    {
        return $this->render('PostBundle:Post:create.html.twig');
    }


    /**
     * @Route("/post/{id}", name="post-show")
     */
    public function showAction($id)
    {
    	$data = [
    	['id' => 1, 'title' => 'Lorem ipsum dolor.', 'body' => 'Lorem ipsum dolor.'],
    	['id' => 2, 'title' => 'Lorem ipsum dolor.', 'body' => 'Lorem ipsum dolor.'],
    	['id' => 3, 'title' => 'Lorem ipsum dolor.', 'body' => 'Lorem ipsum dolor.'],
    	['id' => 4, 'title' => 'Lorem ipsum dolor.', 'body' => 'Lorem ipsum dolor.'],
    	];
        return $this->render('PostBundle:Post:show.html.twig', ['post' => $data[$id]]);
    }

   

}
