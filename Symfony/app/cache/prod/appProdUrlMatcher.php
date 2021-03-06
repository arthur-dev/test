<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // diabete_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'diabete_homepage');
            }

            return array (  '_controller' => 'DiabeteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'diabete_homepage',);
        }

        // test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'DiabeteBundle\\Controller\\DefaultController::testAction',  '_route' => 'test',);
        }

        // addSubscriber
        if ($pathinfo === '/addSubscriber') {
            return array (  '_controller' => 'DiabeteBundle\\Controller\\SubscriberController::addAction',  '_route' => 'addSubscriber',);
        }

        if (0 === strpos($pathinfo, '/edit')) {
            // editSubscriber
            if ($pathinfo === '/editSubscriber') {
                return array (  '_controller' => 'DiabeteBundle\\Controller\\SubscriberController::editAction',  '_route' => 'editSubscriber',);
            }

            if (0 === strpos($pathinfo, '/editDiabeteProfile')) {
                // editDiabeteProfileSubscriber
                if ($pathinfo === '/editDiabeteProfileSubscriber') {
                    return array (  '_controller' => 'DiabeteBundle\\Controller\\SubscriberController::editDiabeteProfileAction',  '_route' => 'editDiabeteProfileSubscriber',);
                }

                // editDiabeteProfileDoctor
                if (0 === strpos($pathinfo, '/editDiabeteProfileDoctor') && preg_match('#^/editDiabeteProfileDoctor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editDiabeteProfileDoctor')), array (  '_controller' => 'DiabeteBundle\\Controller\\DoctorController::editDiabeteProfileAction',));
                }

            }

        }

        // addDoctor
        if ($pathinfo === '/addDoctor') {
            return array (  '_controller' => 'DiabeteBundle\\Controller\\DoctorController::addAction',  '_route' => 'addDoctor',);
        }

        // editDoctor
        if ($pathinfo === '/editDoctor') {
            return array (  '_controller' => 'DiabeteBundle\\Controller\\DoctorController::editAction',  '_route' => 'editDoctor',);
        }

        // filesServicesDiabetes
        if ($pathinfo === '/filesServicesDiabetes') {
            return array (  '_controller' => 'DiabeteBundle\\Controller\\FilesController::ServiceDiabetesAction',  '_route' => 'filesServicesDiabetes',);
        }

        // subscriber
        if (0 === strpos($pathinfo, '/subscriber') && preg_match('#^/subscriber(?:/(?P<nbDaysAgo>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'subscriber')), array (  '_controller' => 'DiabeteBundle\\Controller\\SubscriberController::indexAction',  'nbDaysAgo' => 7,));
        }

        // glycemie
        if (0 === strpos($pathinfo, '/glycemie') && preg_match('#^/glycemie(?:/(?P<nbDaysAgo>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'glycemie')), array (  '_controller' => 'DiabeteBundle\\Controller\\SubscriberController::glycemieAction',  'nbDaysAgo' => 7,));
        }

        // insuline
        if (0 === strpos($pathinfo, '/releveInsuline') && preg_match('#^/releveInsuline(?:/(?P<nbDaysAgo>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'insuline')), array (  '_controller' => 'DiabeteBundle\\Controller\\SubscriberController::insulinAction',  'nbDaysAgo' => 7,));
        }

        // nutrition
        if (0 === strpos($pathinfo, '/nutrition') && preg_match('#^/nutrition(?:/(?P<nbDaysAgo>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nutrition')), array (  '_controller' => 'DiabeteBundle\\Controller\\SubscriberController::nutritionAction',  'nbDaysAgo' => 7,));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // activite
            if (0 === strpos($pathinfo, '/activite') && preg_match('#^/activite(?:/(?P<nbDaysAgo>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activite')), array (  '_controller' => 'DiabeteBundle\\Controller\\SubscriberController::activiteAction',  'nbDaysAgo' => 7,));
            }

            // addGlucometer
            if ($pathinfo === '/addGlucometer') {
                return array (  '_controller' => 'DiabeteBundle\\Controller\\SubscriberController::addGlucometerAction',  '_route' => 'addGlucometer',);
            }

        }

        if (0 === strpos($pathinfo, '/doctor')) {
            // doctor
            if (rtrim($pathinfo, '/') === '/doctor') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'doctor');
                }

                return array (  '_controller' => 'DiabeteBundle\\Controller\\DoctorController::indexAction',  '_route' => 'doctor',);
            }

            // doctorGet
            if ($pathinfo === '/doctor/get') {
                return array (  '_controller' => 'DiabeteBundle\\Controller\\DoctorController::indexGetAction',  '_route' => 'doctorGet',);
            }

            // doctorViewSubsriber
            if (preg_match('#^/doctor/(?P<id>[^/]++)(?:/(?P<nbDaysAgo>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctorViewSubsriber')), array (  '_controller' => 'DiabeteBundle\\Controller\\DoctorController::viewSubscriberAction',  'nbDaysAgo' => 7,));
            }

        }

        // doctorViewGlycemie
        if (0 === strpos($pathinfo, '/glycemieSub') && preg_match('#^/glycemieSub/(?P<id>[^/]++)(?:/(?P<nbDaysAgo>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctorViewGlycemie')), array (  '_controller' => 'DiabeteBundle\\Controller\\DoctorController::glycemieAction',  'nbDaysAgo' => 7,));
        }

        // doctorViewInsuline
        if (0 === strpos($pathinfo, '/insulineSub') && preg_match('#^/insulineSub/(?P<id>[^/]++)(?:/(?P<nbDaysAgo>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctorViewInsuline')), array (  '_controller' => 'DiabeteBundle\\Controller\\DoctorController::insulinAction',  'nbDaysAgo' => 7,));
        }

        // doctorViewNutrition
        if (0 === strpos($pathinfo, '/nutritionSub') && preg_match('#^/nutritionSub/(?P<id>[^/]++)(?:/(?P<nbDaysAgo>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctorViewNutrition')), array (  '_controller' => 'DiabeteBundle\\Controller\\DoctorController::nutritionAction',  'nbDaysAgo' => 7,));
        }

        // doctorViewActivite
        if (0 === strpos($pathinfo, '/activiteSub') && preg_match('#^/activiteSub/(?P<id>[^/]++)(?:/(?P<nbDaysAgo>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctorViewActivite')), array (  '_controller' => 'DiabeteBundle\\Controller\\DoctorController::activiteAction',  'nbDaysAgo' => 7,));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'OCUserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'OCUserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'OCUserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'OCUserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
