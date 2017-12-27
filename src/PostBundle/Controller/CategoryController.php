<?php

namespace PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use PostBundle\Entity\Category;

class CategoryController extends Controller
{
    /**
     * @Route("/category")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('PostBundle:Category')->findByTitle("premier title");

        dump($categories);


        return $this->render('PostBundle:Category:index.html.twig', 
        	array('categories' => $categories));

       
    }


     /**
     * @Route("/category/create")
     */
    public function createAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $category = new Category();

        $category->setTitle();
        $category->setDescription('première description');

        $em->persist($category);
        $em->flush();

        dump($category);

        return new Response('category created');
    }

    /**
     * @Route("/category/{id}")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        /*$categories = $em->getRepository('PostBundle:Category')
                         ->findBy(['id' => 1], ['title' => "asc"], 1, 0);
        */

        /* $query = $em->createQuery("
				SELECT C FROM PostBundle:Category C
				WHERE C.title like :title
				ORDER BY C.title DESC
         	")
              ->setParameter('title', "%title%");

          $categories = $query->getResult();
          */

          $repository = $em->getRepository('PostBundle:Category');

          $query = $repository->createQueryBuilder('p')
                     ->where("p.id = :id")
                     ->setParameter("id", $id)
                     ->getQuery();
          
          $categories = $query->getResult();
        dump($categories);

        return new Response('search');
    }



   

}
