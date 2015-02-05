<?php

/* DiabeteBundle:layout:block_navbar.html.twig */
class __TwigTemplate_81ad229c0e2baf2a99f7fc77dd1db9fd8505e7220230903981e79f3f444212fe extends Twig_Template
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
        echo "<!-- NAVBAR -->
<!--===================================================-->
<header id=\"navbar\">
<div id=\"navbar-container\" class=\"boxed\">


<!-- BRAND LOGO & TEXT -->
<!--===================================================-->
<div class=\"navbar-header\">
    <a href=";
        // line 10
        echo $this->env->getExtension('routing')->getPath("diabete_homepage");
        echo " class=\"navbar-brand\">
        <img alt=\"Nifty Admin\" src=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/images/logo.png"), "html", null, true);
        echo " class=\"brand-icon\">
\t\t\t\t\t<span class=\"brand-title\">
\t\t\t\t\t\t<span class=\"brand-text\">E-stylus</span>
\t\t\t\t\t</span>
    </a>
</div>
<!--===================================================-->
<!-- END OF BRAND LOGO & TEXT -->



<!-- NAVBAR DROPDOWN -->
<!--===================================================-->
<div class=\"navbar-content clearfix\">
<ul class=\"nav navbar-top-links pull-left\">


<!-- MAINMENU TOGGLE BUTTON -->
<!--===================================================-->
<li class=\"tgl-menu-btn\">
    <a id=\"demo-toggle-mainnav-btn\" href=\"#\">
        <i class=\"fa fa-navicon fa-lg\"></i>
    </a>
</li>
<!--===================================================-->




<!-- MESSAGES DROPDOWN -->
<!--===================================================-->
<!--  <li class=\"dropdown\">

    <!-- Dropdown button -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!--   <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
     <i class=\"fa fa-envelope fa-lg\"></i>
     <span class=\"badge badge-header badge-warning\">9</span>
 </a>
 <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->



    <!-- Dropdown menu -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!--    <div class=\"dropdown-menu dropdown-menu-md with-arrow\">
          <div class=\"pad-all bord-btm\">
              <p class=\"text-lg text-muted text-thin mar-no\">You have 3 messages.</p>
          </div>
          <div class=\"nano scrollable\">
              <div class=\"nano-content\">
                  <ul class=\"head-list\">

                      <!-- Dropdown list -->
    <!--               <li>
                     <a class=\"media\" href=\"#\">
                                             <span class=\"media-left\">
                                                 <img class=\"img-circle img-sm\" src=\"images/av2.png\" alt=\"Profile Picture\">
                                             </span>
                         <div class=\"media-body\">
                             <div class=\"text-nowrap\">Andy sent you a message</div>
                             <small class=\"text-muted\">15 minutes ago</small>
                         </div>
                     </a>
                 </li>


                 <!-- Dropdown list -->
    <!--               <li>
                     <a class=\"media\" href=\"#\">
                                             <span class=\"media-left\">
                                                 <img class=\"img-circle img-sm\" src=\"images/av4.png\" alt=\"Profile Picture\">
                                             </span>
                         <div class=\"media-body\">
                             <div class=\"text-nowrap\">Lucy sent you a message</div>
                             <small class=\"text-muted\">2 hours ago</small>
                         </div>
                     </a>
                 </li>








             </ul>
         </div>
     </div>


     <!-- Dropdown footer -->
<!--      <div class=\"pad-all bord-top\">
        <a class=\"btn-link text-dark box-block\" href=\"#\">
            <i class=\"fa fa-angle-right fa-lg pull-right\"></i> Show All Messages
        </a>
    </div>
</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<!--  </li>
<!-- END OF MESSAGES DROPDOWN -->
<!--===================================================-->



<!-- NOTIFICATION DROPDOWN -->
<!--===================================================-->
<!--  <li class=\"dropdown\">

    <!-- Dropdown button -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!--   <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
     <i class=\"fa fa-bell fa-lg\"></i>
     <span class=\"badge badge-header badge-danger\">5</span>
 </a>
 <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->



    <!-- Dropdown menu -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!--    <div class=\"dropdown-menu dropdown-menu-md with-arrow\">
          <div class=\"pad-all bord-btm\">
              <p class=\"text-lg text-muted text-thin mar-no\">You have 5 notifications</p>
          </div>
          <div class=\"nano scrollable\">
              <div class=\"nano-content\">
                  <ul class=\"head-list\">


                      <!-- Dropdown list -->
    <!--                <li>
                      <a href=\"#\">
                          <div class=\"clearfix\">
                              <p class=\"pull-left\">Database Repair</p>
                              <p class=\"pull-right\">70%</p>
                          </div>
                          <div class=\"progress progress-sm\">
                              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%;\">
                                  <span class=\"sr-only\">70% Complete</span>
                              </div>
                          </div>
                      </a>
                  </li>








                  <!-- Dropdown list -->
    <!--              <li>
                    <a class=\"media\" href=\"#\">
                        <span class=\"label label-danger pull-right\">New</span>
                        <div class=\"media-left\">
                                                <span class=\"icon-wrap bg-purple\">
                                                    <i class=\"fa fa-comment fa-lg\"></i>
                                                </span>
                        </div>
                        <div class=\"media-body\">
                            <div class=\"text-nowrap\">Comment Sorting</div>
                            <small class=\"text-nowrap text-muted\">Last Update 8 hours ago</small>
                        </div>
                    </a>
                </li>

                <li>
                    <a href=\"#\" class=\"media\">
                        <div class=\"media-left\">
                                                <span class=\"icon-wrap bg-pink\">
                                                <i class=\"fa fa-user fa-lg\"></i>
                                                </span>
                        </div>
                        <div class=\"media-body\">
                            <div class=\"text-nowrap\">New User Registered</div>
                            <small class=\"text-nowrap text-muted\">4 minutes ago</small>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Dropdown footer -->
<!--    <div class=\"pad-all bord-top\">
      <a class=\"btn-link text-dark box-block\" href=\"#\">
          <i class=\"fa fa-angle-right fa-lg pull-right\"></i>Show All Notifications
      </a>
  </div>
</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!--
</li>
<!-- END OF NOTIFICATION DROPDOWN -->
<!--===================================================-->




<!-- MEGA MENU  -->
<!--===================================================-->
<!--  <li class=\"dropdown mega-dropdown\">

    <!-- Megamenu button -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!--  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"fa fa-th-large fa-lg\"></i>
</a>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->



    <!-- Megamenu Dropdown menu -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!--   <div class=\"dropdown-menu mega-dropdown-menu\">
     <div class=\"clearfix\">

         <div class=\"col-sm-12 col-md-3\">
             <div class=\"text-center bg-purple pad-all\">
                 <h3 class=\"text-thin mar-no\">Weekend shopping</h3>
                                     <span class=\"pad-ver box-inline\">
                                         <span class=\"icon-wrap icon-wrap-lg icon-circle bg-trans-light\">
                                             <i class=\"fa fa-shopping-cart fa-4x\"></i>
                                         </span>
                                     </span>

                 <p class=\"pad-btm\">Members get <span class=\"text-lg text-bold\">50%</span> more points. Lorem ipsum dolor sit amet!</p>

                 <a href=\"#\" class=\"btn btn-purple\">Learn More...</a>
             </div>
         </div>


         <div class=\"col-sm-4 col-md-3\">
             <ul class=\"list-unstyled\">
                 <li class=\"dropdown-header\">Pages</li>
                 <li><a href=\"#\">Profile</a></li>
                 <li><a href=\"#\">Search Result</a></li>
                 <li><a href=\"#\">FAQ</a></li>
                 <li><a href=\"#\">Screen Lock</a></li>
                 <li><a href=\"#\" class=\"disabled-link\">Disabled</a></li>



                 <li class=\"divider\"></li>
                 <li class=\"dropdown-header\">Icons</li>

                 <li><a href=\"#\"><span class=\"pull-right badge badge-purple\">479</span> Font Awesome</a></li>
                 <li><a href=\"#\">Skycons</a></li>
             </ul>
         </div>

         <div class=\"col-sm-4 col-md-3\">
             <ul class=\"list-unstyled\">
                 <li class=\"dropdown-header\">Mailbox</li>
                 <li><a href=\"#\"><span class=\"pull-right label label-danger\">Hot</span>Indox</a></li>
                 <li><a href=\"#\">Read Mail</a></li>
                 <li><a href=\"#\">Sent Mail</a></li>



                 <li class=\"divider\"></li>
                 <li class=\"dropdown-header\">Feature</li>

                 <li><a href=\"#\">Smart navigation</a></li>
                 <li><a href=\"#\"><span class=\"pull-right badge badge-success\">6</span>Exclusive plugins</a></li>
                 <li><a href=\"#\">Lot of themes</a></li>
                 <li><a href=\"#\">Transition effects</a></li>
             </ul>
         </div>

         <div class=\"col-sm-4 col-md-3\">
             <ul class=\"list-unstyled\">
                 <li class=\"dropdown-header\">Components</li>
                 <li><a href=\"#\">Table</a></li>
                 <li><a href=\"#\">Charts</a></li>
                 <li><a href=\"#\">Forms</a></li>



                 <li class=\"divider\"></li>
                 <li class=\"dropdown-header\">Newsletter</li>


                 <form role=\"form\" class=\"form\">
                     <div class=\"form-group\">
                         <input type=\"email\" placeholder=\"Enter email\" id=\"email\" class=\"form-control\">
                     </div>
                     <button class=\"btn btn-primary btn-block\" type=\"submit\">Submit</button>
                 </form>
             </ul>
         </div>
     </div>
 </div>
 <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<!--  </li>-->
</ul>


<ul class=\"nav navbar-top-links pull-right\">

    <!-- LANGUAGE SWITCHER -->
    <!--===================================================-->
    <li class=\"dropdown\">

        <!--SELECTED-->
        <!--===================================================-->
        <a id=\"demo-lang-switch\" class=\"lang-selector dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t<span class=\"lang-selected\">

\t\t\t\t\t\t\t\t<img class=\"lang-flag\" src=";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/images/flags/france.png"), "html", null, true);
        echo " alt=\"French\">
                                <span class=\"lang-id\">FR</span><span class=\"lang-name\">Fran&ccedil;ais</span>
\t\t\t\t\t\t\t</span>
        </a>


        <ul class=\"head-list dropdown-menu with-arrow\">

            <!--ENGLISH-->
            <!--===================================================-->
            <li>
                <a href=\"#\" class=\"active\">
                    <img class=\"lang-flag\" src=";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/images/flags/united-kingdom.png"), "html", null, true);
        echo " alt=\"English\">
                    <span class=\"lang-id\">EN</span><span class=\"lang-name\">English</span>
                </a>
            </li>

            <!--FRANCE-->
            <!--===================================================-->
            <li>
                <a href=\"#\">
                    <img class=\"lang-flag\" src=";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/images/flags/france.png"), "html", null, true);
        echo " alt=\"French\">
                    <span class=\"lang-id\">FR</span><span class=\"lang-name\">Fran&ccedil;ais</span>
                </a>
            </li>









        </ul>
    </li>
    <!--===================================================-->






    <!-- USER DROPDOWN -->
    <!--===================================================-->
    <li id=\"dropdown-user\" class=\"dropdown\">



        <!-- Dropdown button -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle text-right\">
\t\t\t\t\t\t\t<span class=\"pull-right\">

\t\t\t\t\t\t\t\t<img class=\"img-circle img-user media-object\" src=";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/images/av1.png"), "html", null, true);
        echo " alt=\"Profile Picture\">
\t\t\t\t\t\t\t</span>
            <div class=\"username hidden-xs\">";
        // line 382
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "app"), "user", array()), "html", null, true);
        echo "</div>
        </a>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->



        <!-- Dropdown menu -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class=\"dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default\">

            <!-- Dropdown heading  -->
            <div class=\"pad-all bord-btm\">
                <p class=\"text-lg text-muted text-thin mar-btm\">750Gb of 1,000Gb Used</p>
                <div class=\"progress progress-sm\">
                    <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 70%;\">
                        <span class=\"sr-only\">70%</span>
                    </div>
                </div>
            </div>



            <ul class=\"head-list\">

                <!-- Dropdown list -->
                <li>
                    <a href=";
        // line 408
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo ">
                        <i class=\"fa fa-user fa-fw fa-lg\"></i>
                        <span class=\"text-nowrap\">Profile</span>
                    </a>
                </li>




                <!-- Dropdown list -->
                <li>
                    <a href=\"#\">
                        <i class=\"fa fa-question-circle fa-fw fa-lg\"></i>
                        <span>Help</span>
                    </a>
                </li>
            </ul>



            <!-- Dropdown footer -->
            <div class=\"pad-all\">
                <a href=\"";
        // line 430
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-sm btn-primary btn-labeled pull-right fa fa-sign-out icon-lg\">Logout</a>
                <a href=\"pages-lock-screen.html\" class=\"btn btn-sm btn-warning btn-labeled fa fa-lock icon-lg\">Lock Screen</a>
            </div>
        </div>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    </li>
    <!-- END OF USER DROPDOWN -->
    <!--===================================================-->

</ul>
</div>
<!--===================================================-->
<!-- END OF NAVBAR DROPDOWN -->

</div>
</header>
<!--===================================================-->
<!-- END OF NAVBAR -->
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:layout:block_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 430,  449 => 408,  420 => 382,  415 => 380,  379 => 347,  367 => 338,  352 => 326,  34 => 11,  30 => 10,  19 => 1,);
    }
}
