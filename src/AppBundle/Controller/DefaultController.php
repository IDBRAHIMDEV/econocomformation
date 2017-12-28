<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', ['title' => 'salam', 'body' => 'salam les amis']);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function sendMail(Request $request, \Swift_Mailer $mailer) {

       $form = $this->createFormBuilder()
                 ->add('from')
                 ->add('subject')
                 ->add('body', TextareaType::class)
                 ->add('send', SubmitType::class)
                 ->getForm();
        
        $form->handleRequest($request);
       
        if($form->isSubmitted()) {
            //traitement envoi de mail
           
            $data = $form->getData();

            $message = (new \Swift_Message($data['subject']))
            ->setFrom($data['from'])
            ->setTo('idbrahimdev@gmail.com')
            ->setBody($data['body'], 'text/plain');
    
            $mailer->send($message);
            
            
        }

        return $this->render('default/contact.html.twig', ['form' => $form->createView()]);
    }

}
