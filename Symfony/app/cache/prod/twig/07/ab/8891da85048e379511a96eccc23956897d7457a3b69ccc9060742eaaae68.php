<?php

/* DiabeteBundle:layout:login_navbar.html.twig */
class __TwigTemplate_07ab8891da85048e379511a96eccc23956897d7457a3b69ccc9060742eaaae68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Menu du coté  -->
<!-- main side bar  -->
<!-- MAIN NAVIGATION -->
<!--===================================================-->

<nav id=\"mainnav-container\" data-sm=\"mainnav-sm\" data-all=\"mainnav-lg\">
    <div id=\"mainnav\">


        <!-- MAIN NAVIGATION : SHORTCUT -->
        <!--===================================================-->
   <!--     <div id=\"mainnav-shortcut\">
            <ul class=\"list-unstyled\">

                <!-- Shortcut buttton-->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!--              <li class=\"col-xs-4\" data-content=\"Additional Sidebar\">
                        <a id=\"demo-toggle-aside\" class=\"shortcut-grid\" href=\"#\" >
                            <i class=\"fa fa-magic\"></i>
                        </a>
                    </li>



                    <!-- Shortcut buttton-->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!--            <li class=\"col-xs-4\" data-content=\"Notification\">
                      <a id=\"demo-alert\" href=\"#\" class=\"shortcut-grid\">
                          <i class=\"fa fa-bullhorn\"></i>
                      </a>
                  </li>



                  <!-- Shortcut buttton-->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!--            <li class=\"col-xs-4\" data-content=\"Page Alerts\">
                      <a id=\"demo-page-alert\" href=\"#\" class=\"shortcut-grid\">
                          <i class=\"fa fa-bell\"></i>
                      </a>
                  </li>


              </ul>
          </div>
          <!--===================================================-->
        <!-- MAIN NAVIGATION : SHORTCUT -->







        <!-- MAIN NAVIGATION : MENU -->
        <!--===================================================-->
        <div id=\"mainnav-menu-wrap\">
            <div class=\"nano\">
                <div class=\"nano-content\">
                    <ul id=\"mainnav-menu\" class=\"list-group\">

                        <!--Category name-->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <li class=\"list-header\">Menu</li>


                        <!-- Menu list item -->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <li>
                            <a href=\"http://estylus.fr\">
                                <i class=\"fa fa-dashboard\"></i>
                                <span class=\"menu-title\"><strong>Blog e-Stylus</strong> <!--<span class=\"label label-success pull-right\">New</span>--></span>
                            </a>
                        </li>

                        <!-- Menu list item -->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <li>
                             <a href=";
        // line 79
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo ">
                                <i class=\"fa fa-dashboard\"></i>
                                <span class=\"menu-title\"><strong>Se connecter</strong> <!--<span class=\"label label-success pull-right\">New</span>--></span>
                            </a>
                        </li>

                        <!-- Menu list item -->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <li>
                            <a href=";
        // line 88
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo ">
                                <i class=\"fa fa-dashboard\"></i>
                                <span class=\"menu-title\"><strong>Créer un compte</strong> <!--<span class=\"label label-success pull-right\">New</span>--></span>
                            </a>
                        </li>

                        <!-- Menu list item -->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <li>
                            <a href=";
        // line 97
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo ">
                                <i class=\"fa fa-dashboard\"></i>
                                <span class=\"menu-title\"><strong>Mot de passe oublié</strong> <!--<span class=\"label label-success pull-right\">New</span>--></span>
                            </a>
                        </li>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!-- END OF MAIN NAVIGATION : MENU -->


    </div>
</nav>
<!--===================================================-->
<!-- END OF MAIN NAVIGATION -->
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:layout:login_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 97,  111 => 88,  99 => 79,  19 => 1,);
    }
}
