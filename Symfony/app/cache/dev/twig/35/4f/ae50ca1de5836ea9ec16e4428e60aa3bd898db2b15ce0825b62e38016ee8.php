<?php

/* DiabeteBundle:layout:patient_navbar.html.twig */
class __TwigTemplate_354fae50ca1de5836ea9ec16e4428e60aa3bd898db2b15ce0825b62e38016ee8 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("subscriber");
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
        echo $this->env->getExtension('routing')->getPath("glycemie");
        echo ">
                                <i class=\"fa fa-dashboard\"></i>
                                <span class=\"menu-title\"><strong>Glycemie</strong> <!--<span class=\"label label-success pull-right\">New</span>--></span>
                            </a>
                        </li>


                        <!-- Menu list item-->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <li>
                            <a href=";
        // line 89
        echo $this->env->getExtension('routing')->getPath("insuline");
        echo ">
                                <i class=\"fa fa-th\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Injection d'insuline</strong>
\t\t\t\t\t\t\t\t\t\t</span>
                                <!-- <i class=\"fa arrow\"></i>-->
                             </a>

                            <!-- Menu sub -->
                            <!--      <ul class=\"collapse\">
                                      <li>
                                          <a href=\"layouts-collapsed-navigation.html\">Collapsed Navigation</a>
                                      </li>



                                  </ul>
                              </li> -->


                              <!-- Menu list item-->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <li>
                            <a href=";
        // line 112
        echo $this->env->getExtension('routing')->getPath("activite");
        echo ">
                                <i class=\"fa fa-flask\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Activitées physiques</strong>
\t\t\t\t\t\t\t\t\t\t\t<!--<span class=\"pull-right badge badge-warning\">Top</span>-->
\t\t\t\t\t\t\t\t\t\t</span>
                            </a>
                        </li>



                        <!-- Menu list item-->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <li>
                            <a href=";
        // line 126
        echo $this->env->getExtension('routing')->getPath("nutrition");
        echo ">
                                <i class=\"fa fa-flask\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Nutrition</strong>
\t\t\t\t\t\t\t\t\t\t<!--\t<span class=\"pull-right badge badge-warning\">Top</span>-->
\t\t\t\t\t\t\t\t\t\t</span>
                            </a>
                        </li>


                        <li class=\"list-divider\"></li>







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
        return "DiabeteBundle:layout:patient_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 126,  141 => 112,  115 => 89,  102 => 79,  90 => 70,  19 => 1,);
    }
}
