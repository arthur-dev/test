<?php

/* DiabeteBundle:layout:general_layout.html.twig */
class __TwigTemplate_d769a1062943a0cf3e551ff2b80163e77200f58a80d9d53aa36fef39c888a380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'include' => array($this, 'block_include'),
            'navbar' => array($this, 'block_navbar'),
            'page_title' => array($this, 'block_page_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'side_bar_menu' => array($this, 'block_side_bar_menu'),
            'additionnal_side_bar' => array($this, 'block_additionnal_side_bar'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Blank page | Nifty - Responsive admin template</title>

";
        // line 8
        $this->displayBlock('include', $context, $blocks);
        // line 9
        echo "

</head>
<body>
<div id=\"container\" class=\"effect mainnav-lg\">

\t";
        // line 15
        $this->displayBlock('navbar', $context, $blocks);
        // line 16
        echo "

    <!-- CONTENT -->
    <!--===================================================-->
    <div class=\"boxed\">


        <!-- CONTENT CONTAINER -->
        <!--===================================================-->
        <div id=\"content-container\">

            <!-- PAGE TITTLE -->
            <!--===================================================-->
            <div id=\"page-title\">
                <h1 class=\"page-header text-overflow\"> ";
        // line 30
        $this->displayBlock('page_title', $context, $blocks);
        echo "</h1>





            </div>
            <!--===================================================-->
            <!-- END OF PAGE TITLE -->

    ";
        // line 40
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 41
        echo "




            <!-- PAGE CONTENT -->
            <!--===================================================-->
            <div id=\"page-content\">

\t\t";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "

            </div>
            <!--===================================================-->
            <!-- END OF PAGE CONTENT -->


        </div>
        <!--===================================================-->
        <!-- END OF CONTENT CONTAINER -->

";
        // line 62
        $this->displayBlock('side_bar_menu', $context, $blocks);
        // line 63
        echo "


";
        // line 66
        $this->displayBlock('additionnal_side_bar', $context, $blocks);
        // line 67
        echo "

    </div>
    <!--===================================================-->
    <!--END OF CONTENT -->






\t<!-- FOOTER -->
\t<!--===================================================-->

\t<!--===================================================-->
\t<!-- END OF FOOTER -->



\t<!-- SCROLL TOP BUTTON -->
\t<!--===================================================-->
\t<button id=\"scroll-top\" class=\"btn\"><i class=\"fa fa-chevron-up\"></i></button>
\t<!--===================================================-->




</div>
<!--===================================================-->
<!-- END OF CONTAINER -->





</body>

";
        // line 104
        $this->displayBlock('script', $context, $blocks);
        // line 105
        echo "</html>";
    }

    // line 8
    public function block_include($context, array $blocks = array())
    {
        echo " ";
    }

    // line 15
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 30
    public function block_page_title($context, array $blocks = array())
    {
    }

    // line 40
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
    }

    // line 62
    public function block_side_bar_menu($context, array $blocks = array())
    {
        echo " ";
    }

    // line 66
    public function block_additionnal_side_bar($context, array $blocks = array())
    {
        echo " ";
    }

    // line 104
    public function block_script($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:layout:general_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 104,  191 => 66,  185 => 62,  180 => 50,  175 => 40,  170 => 30,  165 => 15,  159 => 8,  155 => 105,  153 => 104,  114 => 67,  112 => 66,  107 => 63,  105 => 62,  92 => 51,  90 => 50,  79 => 41,  77 => 40,  64 => 30,  48 => 16,  46 => 15,  38 => 9,  36 => 8,  27 => 1,);
    }
}
