<?php

/* DiabeteBundle:layout:main_navbar.html.twig */
class __TwigTemplate_d49dcbd1cb1536d5e55236a0783c05e6980c636b92165731b59d67d48b5fa9a3 extends Twig_Template
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
        echo "
<!-- Menu du coté  -->
<!-- main side bar  -->
<!-- MAIN NAVIGATION -->
<!--===================================================-->

<nav id=\"mainnav-container\" data-sm=\"mainnav-sm\" data-all=\"mainnav-lg\">
    <div id=\"mainnav\">


        <!-- MAIN NAVIGATION : SHORTCUT -->
        <!--===================================================-->
        <div id=\"mainnav-shortcut\">
            <ul class=\"list-unstyled\">

                <!-- Shortcut buttton-->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <li class=\"col-xs-4\" data-content=\"Additional Sidebar\">
                    <a id=\"demo-toggle-aside\" class=\"shortcut-grid\" href=\"#\" >
                        <i class=\"fa fa-magic\"></i>
                    </a>
                </li>



                <!-- Shortcut buttton-->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <li class=\"col-xs-4\" data-content=\"Notification\">
                    <a id=\"demo-alert\" href=\"#\" class=\"shortcut-grid\">
                        <i class=\"fa fa-bullhorn\"></i>
                    </a>
                </li>



                <!-- Shortcut buttton-->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <li class=\"col-xs-4\" data-content=\"Page Alerts\">
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
                        <li class=\"list-header\">test</li>



                        <!-- Menu list item -->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <li>
                            <a href=\"index.html\">
                                <i class=\"fa fa-dashboard\"></i>
                                <span class=\"menu-title\"><strong>Dashboard</strong><span class=\"label label-success pull-right\">New</span></span>
                            </a>
                        </li>


                        <!-- Menu list item-->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-th\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Layouts</strong>
\t\t\t\t\t\t\t\t\t\t</span>
                                <i class=\"fa arrow\"></i>
                            </a>

                            <!-- Menu sub -->
                            <ul class=\"collapse\">
                                <li>
                                    <a href=\"layouts-collapsed-navigation.html\">Collapsed Navigation</a>
                                </li>

                                <li>
                                    <a href=\"layouts-offcanvas-navigation.html\">Off Canvas Navigation</a>
                                </li>

                                <li>
                                    <a href=\"layouts-offcanvas-slide-in-navigation.html\">Slide-in Navigation</a>
                                </li>

                                <li>
                                    <a href=\"layouts-offcanvas-revealing-navigation.html\">Revealing Navigation</a>
                                </li>

                                <li class=\"list-divider\"></li>

                                <li>
                                    <a href=\"layouts-aside-right-side.html\">Aside on the right side</a>
                                </li>

                                <li>
                                    <a href=\"layouts-aside-left-side.html\">Aside on the left side</a>
                                </li>

                                <li>
                                    <a href=\"layouts-aside-bright-theme.html\">Bright aside theme</a>
                                </li>

                                <li class=\"list-divider\"></li>

                                <li>
                                    <a href=\"layouts-fixed-navbar.html\">Fixed Navbar</a>
                                </li>

                                <li>
                                    <a href=\"layouts-fixed-footer.html\">Fixed Footer</a>
                                </li>

                            </ul>
                        </li>


                        <!-- Menu list item-->
                        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                        <li>
                            <a href=\"widgets.html\">
                                <i class=\"fa fa-flask\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"menu-title\">
\t\t\t\t\t\t\t\t\t\t\t<strong>Widgets</strong>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-warning\">Top</span>
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
        return "DiabeteBundle:layout:main_navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
