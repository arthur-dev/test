<?php

namespace DiabeteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use DiabeteBundle\Entity\User;
use DiabeteBundle\Entity\Subscriber;
use DiabeteBundle\Entity\DataTable2;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FilesController extends Controller
{

    public function ServiceDiabetesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $subscriber = $user->getSubscriber();
        if(!$subscriber) {
            throw $this->createNotFoundException('Abonné inconnu');
        }
        $doctor = $subscriber->getDoctor();
        
        $service = $this->getDoctrine()->getRepository('DiabeteBundle:ServiceDiabetes')->getActiveService($subscriber);

        return $this->render('DiabeteBundle:Files:ShowServiceDiabetes.html.twig', array(
                    'subscriber' => $subscriber,
                    'doctor' => $doctor,
                    'service' => $service,
        ));
    }


    public function filesListAction() {
        return $this->render('DiabeteBundle:Files:filesList.html.twig', array());
    }

    
     public function filesListGetAction(Request $request) {
        
        $repository = $this->getDoctrine()->getRepository('DiabeteBundle:Subscriber');
        $metadata = $this->getDoctrine()->getManager()->getClassMetadata('DiabeteBundle:Subscriber');
        $dataTable = new Datatable2(
            $request->query->all(),
            $repository,
            $metadata,
            $this->getDoctrine()->getManager()
        );
        $dataTable->setDefaultJoinType(DataTable2::JOIN_LEFT);
        $dataTable->makeSearch();
        $results = $dataTable->getSearchResults();
        return new Response(json_encode($results));
    }
}