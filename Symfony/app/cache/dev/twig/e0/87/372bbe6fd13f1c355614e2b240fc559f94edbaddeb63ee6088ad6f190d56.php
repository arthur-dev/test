<?php

/* DiabeteBundle:layout:doctor_layout.html.twig */
class __TwigTemplate_e087372bbe6fd13f1c355614e2b240fc559f94edbaddeb63ee6088ad6f190d56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("DiabeteBundle:layout:bundle_layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'side_bar_menu' => array($this, 'block_side_bar_menu'),
            'additionnal_side_bar' => array($this, 'block_additionnal_side_bar'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DiabeteBundle:layout:bundle_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        echo "Page blank";
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 6
        echo "   <!-- <ol class=\"breadcrumb\">
        <li><a href=\"#\">Home</a></li>
        <li><a href=\"#\">Library</a></li>
        <li class=\"active\">Data</li>
    </ol>-->
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
";
    }

    // line 17
    public function block_side_bar_menu($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo twig_include($this->env, $context, "DiabeteBundle:layout:doctor_navbar.html.twig");
        echo "
";
    }

    // line 21
    public function block_additionnal_side_bar($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        echo twig_include($this->env, $context, "DiabeteBundle:layout:additionnal_side_bar.html.twig");
        echo "
";
    }

    // line 25
    public function block_script($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        echo twig_include($this->env, $context, "DiabeteBundle:layout:script.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:layout:doctor_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  87 => 25,  80 => 22,  77 => 21,  70 => 18,  67 => 17,  62 => 14,  59 => 13,  50 => 6,  47 => 5,  41 => 3,  11 => 1,);
    }
}
