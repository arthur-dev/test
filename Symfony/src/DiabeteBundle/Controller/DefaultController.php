<?php

namespace DiabeteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{


    public function indexAction()
    {
        $user = $this->getUser();
        $subscriber = $user->getSubscriber();
        $doctor = $user->getDoctor();
        if($subscriber) {
            return $this->redirect( $this->generateUrl('subscriber'));
        }
        else if ($doctor)
        {
            return $this->redirect( $this->generateUrl('doctor'));
        }

        return $this->render('DiabeteBundle:Default:index.html.twig');
    }

    public function testAction()
    {
       // $repository = $this->getDoctrine()->getManager()->getRepository('OCUserBundle\Entity\User');
        $repository = $this->getDoctrine()->getManager()->getRepository('DiabeteBundle\Entity\service_gluco');


       // $user = $repository->find(1);


        return $this->render('DiabeteBundle:Default:test.html.twig');
    }
}



