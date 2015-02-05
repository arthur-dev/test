<?php

/* DiabeteBundle:layout:doctor_navbar.html.twig */
class __TwigTemplate_4765ff363bf0fda52fd10b4d51dc64af1fd2a1ad76a5565becc823d35e62a853 extends Twig_Template
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
                            <a href=";
        // line 70
        echo $this->env->getExtension('routing')->getPath("doctor");
        echo ">
                                <i class=\"fa fa-dashboard\"></i>
                                <span class=\"menu-title\"><strong>Accueil</strong> <!--<span class=\"label label-success pull-right\">New</span>--></span>
                            </a>
                        </li>

                        <!-- Menu list item -->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <li>
                            <a href=";
        // line 79
        echo $this->env->getExtension('routing')->getPath("editDoctor");
        echo ">
                                <i class=\"fa fa-dashboard\"></i>
                                <span class=\"menu-title\"><strong>Mes coordonnées</strong> <!--<span class=\"label label-success pull-right\">New</span>--></span>
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
        return "DiabeteBundle:layout:doctor_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 79,  90 => 70,  19 => 1,);
    }
}
