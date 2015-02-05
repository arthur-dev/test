<?php

namespace  DiabeteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use  OCUserBundle\Entity\User;
use  DiabeteBundle\Entity\Doctor;

use  DiabeteBundle\Form\DoctorType;
use DiabeteBundle\Entity\DataTable2;

use Symfony\Component\HttpFoundation\Response;

class DoctorController extends Controller
{
    
    public function addAction(Request $request)
    {
        $doctor = new Doctor();
        $user = $this->getUser();
        $user->setDoctor($doctor);
        // end dummy code

        $doctorForm = $this->createForm(new DoctorType(), $doctor);

        if ($request->isMethod('POST')) {
            $doctorForm->bind($request);
            if ($doctorForm->isValid()) {
                $doctor = $doctorForm->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($doctor); $em->persist($doctor);
                }

                $em->flush();
                return $this->redirect($this->generateUrl('doctor'));
            }
        
        return $this->render('DiabeteBundle:Doctor:DoctorAdd.html.twig', array(
            'doctorForm' => $doctorForm->createView()
        ));
    }

    public function editAction(Request $request)
    {
        $user = $this->getUser();
        $doctor = $user->getDoctor();
        if(!$doctor) {
            throw $this->createNotFoundException('Docteur inconnu');
        }

        $doctorForm = $this->createForm(new DoctorType(), $doctor);

        if ($request->isMethod('POST')) {
            $doctorForm->bind($request);
            if ($doctorForm->isValid()) {
                $doctor = $doctorForm->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($doctor); $em->persist($doctor);
                }

                $em->flush();
                return $this->redirect($this->generateUrl('doctor'));
            }
        
        return $this->render('DiabeteBundle:Doctor:DoctorEdit.html.twig', array(
            'doctorForm' => $doctorForm->createView()
        ));
    }

    public function indexAction()
    {
        $user = $this->getUser();
        $doctor = $user->getDoctor();
        if(!$doctor) {
            throw $this->createNotFoundException('Docteur inconnu');
        }
        
        
        return $this->render('DiabeteBundle:Doctor:index.html.twig',array(
            'doctor' => $doctor
            ));
    }

    public function indexGetAction(Request $request) {
        $user = $this->getUser();
        $doctor = $user->getDoctor();

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

    
    public function viewSubscriberAction($id, $nbDaysAgo)
    {
        $em = $this->getDoctrine()->getManager();
        $subscriber = $em->getRepository('DiabeteBundle:Subscriber')->findWithJoins($id);
        if(!$subscriber) {
            throw $this->createNotFoundException('Abonné inconnu');
        }
        $doctor = $subscriber->getDoctor();
        
        $blueGlucoseData = $this->getDoctrine()->getRepository('DiabeteBundle:GlucometerData')->getGlucometerData($subscriber, $nbDaysAgo);
        

        $chartsData = $this->get('diabete.charts')->organizeChartsData($blueGlucoseData);
        
        $bloodGlucoseData = json_encode($chartsData['bloodGlucoseData']);
        
        return $this->render('DiabeteBundle:Doctor:viewSubscriber.html.twig',array(
            'bloodGlucoseData' => $bloodGlucoseData,
            'subscriber' => $subscriber,
            'doctor' => $doctor
            ));
    }

    public function glycemieAction($id, $nbDaysAgo)
    {
        $em = $this->getDoctrine()->getManager();
        $subscriber = $em->getRepository('DiabeteBundle:Subscriber')->findWithJoins($id);
        if(!$subscriber) {
            throw $this->createNotFoundException('Abonné inconnu');
        }
        
        
        $blueGlucoseData = $this->getDoctrine()->getRepository('DiabeteBundle:GlucometerData')->getGlucometerData($subscriber, $nbDaysAgo);
        

        $chartsData = $this->get('diabete.charts')->organizeChartsData($blueGlucoseData);
        
        $bloodGlucoseData = json_encode($chartsData['bloodGlucoseData']);
        
        return $this->render('DiabeteBundle:Doctor:glycemie.html.twig',array(
            'bloodGlucoseData' => $bloodGlucoseData,
            'nbDaysAgo' => $nbDaysAgo,
            'subscriber' => $subscriber,
            ));
    }
}