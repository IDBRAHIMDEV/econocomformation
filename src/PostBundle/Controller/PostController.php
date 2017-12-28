<?php

namespace PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PostBundle\Entity\Post;
use PostBundle\Entity\Image;
use PostBundle\Form\PostType;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
    /**
     * @Route("/post/", name="post_index")
     */
    public function indexAction()
    { 
        $em    = $this->getDoctrine()->getManager();
    	$posts = $em->getRepository('PostBundle:Post')->findAll();

        return $this->render('PostBundle:Post:index.html.twig',
          ['posts' => $posts]
        );
    }


     /**
     * @Route("/post/create", name="post-create")
     */
    public function createAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    	$post = new Post();
        
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request); 

            if($form->isSubmitted() && $form->isValid()) {
            
                $tags = $em->getRepository('PostBundle:Tag')->findAll();

                foreach ($tags as $tag) {
                    $post->addTag($tag);
                }


                $file = $post->getImage()->getUrl();

                $fileName = $file->getClientOriginalName();
                $file->move($this->getParameter('upload_files').'/post', $fileName);
                
                $post->getImage()->setUrl($fileName);
                $em->persist($post);
                $em->flush();
                
                //$request->getSession()->getFlashBag()->add('success', 'Post a été bien crée');

                $this->addFlash('success', 'Post a été bien crée');

                return $this->redirectToRoute('post_index');
            }
          
    	
           
        return $this->render('PostBundle:Post:create.html.twig', 
            ['formulaire' => $form->createView()]);
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
