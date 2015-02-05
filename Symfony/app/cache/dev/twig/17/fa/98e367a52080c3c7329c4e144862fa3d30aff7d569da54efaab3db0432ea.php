<?php

/* DiabeteBundle:layout:patient_layout.html.twig */
class __TwigTemplate_17fa98e367a52080c3c7329c4e144862fa3d30aff7d569da54efaab3db0432ea extends Twig_Template
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

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo "Page blank";
    }

    // line 9
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 10
        echo "   <!-- <ol class=\"breadcrumb\">
        <li><a href=\"#\">Home</a></li>
        <li><a href=\"#\">Library</a></li>
        <li class=\"active\">Data</li>
    </ol>-->
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
";
    }

    // line 21
    public function block_side_bar_menu($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        echo twig_include($this->env, $context, "DiabeteBundle:layout:patient_navbar.html.twig");
        echo "
";
    }

    // line 25
    public function block_additionnal_side_bar($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        echo twig_include($this->env, $context, "DiabeteBundle:layout:additionnal_side_bar.html.twig");
        echo "
";
    }

    // line 29
    public function block_script($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        echo twig_include($this->env, $context, "DiabeteBundle:layout:script.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:layout:patient_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  87 => 29,  80 => 26,  77 => 25,  70 => 22,  67 => 21,  62 => 18,  59 => 17,  50 => 10,  47 => 9,  41 => 7,  11 => 1,);
    }
}
