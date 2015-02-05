<?php

namespace  DiabeteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Ob\HighchartsBundle\Highcharts\Highchart;


use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use  OCUserBundle\Entity\User;
use  DiabeteBundle\Entity\Subscriber;

use  DiabeteBundle\Form\SubscriberType;
use  DiabeteBundle\Form\DoctorType;
use  DiabeteBundle\Form\DiabeteProfileType;

use  DiabeteBundle\Entity\ServiceDiabetes;
use  DiabeteBundle\Entity\Glucometer;
use  DiabeteBundle\Entity\DiabeteProfile;

use DiabeteBundle\Form\GlucometerType;

class SubscriberController extends Controller
{
    
    public function addAction(Request $request)
    {
        $subscriber = new Subscriber();
        $user = $this->getUser();
        $user->setSubscriber($subscriber);
        // end dummy code

        $subscriberForm = $this->createForm(new SubscriberType(), $subscriber);

        if ($request->isMethod('POST')) {
            $subscriberForm->bind($request);
            if ($subscriberForm->isValid()) {
                $subscriber = $subscriberForm->getData();
                $diabeteProfile = new DiabeteProfile();
                $subscriber->setDiabeteProfile($diabeteProfile);

                $em = $this->getDoctrine()->getManager();
                $em->persist($subscriber);
                }

                $em->flush();
                return $this->redirect($this->generateUrl('subscriber'));
            }
        
        return $this->render('DiabeteBundle:Subscriber:subscriberAdd.html.twig', array(
            'subscriberForm' => $subscriberForm->createView()
        ));
    }


    
    public function editAction(Request $request)
    {   
        $user = $this->getUser();
        $subscriber = $user->getSubscriber();
        if(!$subscriber) {
            throw $this->createNotFoundException('Abonné inconnu');
        }

        $subscriberForm = $this->createForm(new SubscriberType(), $subscriber);

        if ($request->isMethod('POST')) {
            $subscriberForm->bind($request);
            if ($subscriberForm->isValid()) {
                $subscriber = $subscriberForm->getData();
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($subscriber);

            }
                $em->flush();

                return $this->redirect($this->generateUrl('subscriber'));
            }
        return $this->render('DiabeteBundle:Subscriber:subscriberEdit.html.twig', array(
            'subscriberForm' => $subscriberForm->createView()
        ));
    }

    public function editDiabeteProfileAction(Request $request)
    {   
        $user = $this->getUser();
        $subscriber = $user->getSubscriber();
        if(!$subscriber) {
            throw $this->createNotFoundException('Abonné inconnu');
        }

        $diabeteProfile = $subscriber->getDiabeteProfile();

        $diabeteProfileForm = $this->createForm(new DiabeteProfileType(), $diabeteProfile);

        if ($request->isMethod('POST')) {
            $diabeteProfileForm->bind($request);
            if ($diabeteProfileForm->isValid()) {
                $diabeteProfile = $diabeteProfileForm->getData();
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($diabeteProfile);

            }
                $em->flush();

                return $this->redirect($this->generateUrl('subscriber'));
            }
        return $this->render('DiabeteBundle:Subscriber:diabeteProfileEdit.html.twig', array(
            'diabeteProfileForm' => $diabeteProfileForm->createView()
        ));
    }

    public function indexAction($nbDaysAgo)
    {
        $user = $this->getUser();
        $subscriber = $user->getSubscriber();
        if(!$subscriber) {
            throw $this->createNotFoundException('Abonné inconnu');
        }
        $doctor = $subscriber->getDoctor();
        $diabeteProfile = $subscriber->getDiabeteProfile();

       
        $blueGlucoseData = $this->getDoctrine()->getRepository('DiabeteBundle:GlucometerData')->getGlucometerData($subscriber, $nbDaysAgo);
        

        $chartsData = $this->get('diabete.charts')->organizeChartsData($blueGlucoseData);
        
        $bloodGlucoseData = json_encode($chartsData['bloodGlucoseData']);
        
        return $this->render('DiabeteBundle:Subscriber:index.html.twig',array(
            'bloodGlucoseData' => $bloodGlucoseData,
            'subscriber' => $subscriber,
            'doctor' => $doctor,
            'diabeteProfile' => $diabeteProfile
            ));
    }


 public function glycemieAction($nbDaysAgo)
    {
        $user = $this->getUser();
        $subscriber = $user->getSubscriber();
        if(!$subscriber) {
            throw $this->createNotFoundException('Abonné inconnu');
        }

        $blueGlucoseData = $this->getDoctrine()->getRepository('DiabeteBundle:GlucometerData')->getGlucometerData($subscriber, $nbDaysAgo);
        

        $chartsData = $this->get('diabete.charts')->organizeChartsData($blueGlucoseData);
        
        $bloodGlucoseData = json_encode($chartsData['bloodGlucoseData']);

        return $this->render('DiabeteBundle:Subscriber:glycemie.html.twig',array(
            'bloodGlucoseData' => $bloodGlucoseData,
            'nbDaysAgo' => $nbDaysAgo,
            ));
    }

    public function activiteAction($nbDaysAgo)
    {
        $user = $this->getUser();
        $subscriber = $user->getSubscriber();
        if(!$subscriber) {
            throw $this->createNotFoundException('Abonné inconnu');
        }

        $mesureActiviteData = $this->getDoctrine()->getRepository('DiabeteBundle:Mesureactivite')->getMesureActivite($subscriber, $nbDaysAgo);

        $chartsData = $this->get('activite.charts')->organizeChartsData($mesureActiviteData);

        $activiteData = json_encode($chartsData['activiteData']);

        return $this->render('DiabeteBundle:Subscriber:activite.html.twig',array(
            'activiteData' => $activiteData,
            'nbDaysAgo' => $nbDaysAgo,
            ));
    }


    public function insulinAction($nbDaysAgo)
    {

        $user = $this->getUser();
        $subscriber = $user->getSubscriber();
        if(!$subscriber) {
            throw $this->createNotFoundException('Abonné inconnu');
        }

        $mesureInsulinData = $this->getDoctrine()->getRepository('DiabeteBundle:eStylusInsulinData')->getInsulinData($subscriber, $nbDaysAgo);

        $chartsData = $this->get('insulin.charts')->organizeChartsData($mesureInsulinData);

        $insulinData = json_encode($chartsData['insulinData']);

        return $this->render('DiabeteBundle:Subscriber:insuline.html.twig',array(
            'insulinData' => $insulinData,
            'nbDaysAgo' => $nbDaysAgo,
            ));
    }


    public function nutritionAction($nbDaysAgo)
    {

        $user = $this->getUser();
        $subscriber = $user->getSubscriber();
        if(!$subscriber) {
            throw $this->createNotFoundException('Abonné inconnu');
        }

        $mesureNutritionData = $this->getDoctrine()->getRepository('DiabeteBundle:Mesurenutrition')->getMesureNutrition($subscriber, $nbDaysAgo);

        $chartsData = $this->get('nutrition.charts')->organizeChartsData($mesureNutritionData);
       
        $nutritionData = json_encode($chartsData['nutritionData']);

        return $this->render('DiabeteBundle:Subscriber:nutrition.html.twig',array(
            'nutritionData' => $nutritionData,
            'nbDaysAgo' => $nbDaysAgo,
            ));
    }

    public function addGlucometerAction(Request $request)
    {
        $user = $this->getUser();
        $subscriber = $user->getSubscriber();
        if(!$subscriber) {
            throw $this->createNotFoundException('Abonné inconnu');
        }

        $form = $this->createForm(new GlucometerType());

        if($request->isMethod('POST')) {
            $form->bind($request);
            if($form->isValid()) {
                $glucometer = $form->getData();

                $serviceDiabetes = new ServiceDiabetes();
                $serviceDiabetes->setSubscriber($subscriber);
                $serviceDiabetes->setIsActive(true);
                $serviceDiabetes->setGlucometer($glucometer);
                $glucometer->setServiceDiabetes($serviceDiabetes);
                    
                $em = $this->getDoctrine()->getManager();
                $em->persist($glucometer);
                $em->persist($serviceDiabetes);
                $em->flush();

                return $this->redirect($this->generateUrl('subscriber'));
            }
        }
        return $this->render('DiabeteBundle:Subscriber:addGlucometer.html.twig',array(
            'form' => $form->createView()
            ));
    }
}
