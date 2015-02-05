<?php

/* DiabeteBundle:layout:bundle_layout.html.twig */
class __TwigTemplate_7b6c3113874d9f7de1ee821a8682631ddc0e1e9c55e19d2a7f8e541b79bb3b6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("DiabeteBundle:layout:general_layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

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

    protected function doGetParent(array $context)
    {
        return "DiabeteBundle:layout:general_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_include($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "DiabeteBundle:layout:include.html.twig");
        echo "
";
    }

    // line 8
    public function block_navbar($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo twig_include($this->env, $context, "DiabeteBundle:layout:block_navbar.html.twig");
        echo "
";
    }

    // line 12
    public function block_page_title($context, array $blocks = array())
    {
        echo "Page blank";
    }

    // line 14
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 15
        echo "<ol class=\"breadcrumb\">
    <li><a href=\"#\">Home</a></li>
    <li><a href=\"#\">Library</a></li>
    <li class=\"active\">Data</li>
</ol>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "
";
    }

    // line 26
    public function block_side_bar_menu($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        echo twig_include($this->env, $context, "DiabeteBundle:layout:main_navbar.html.twig");
        echo "
";
    }

    // line 30
    public function block_additionnal_side_bar($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        echo twig_include($this->env, $context, "DiabeteBundle:layout:additionnal_side_bar.html.twig");
        echo "
";
    }

    // line 34
    public function block_script($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        echo twig_include($this->env, $context, "DiabeteBundle:layout:script.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:layout:bundle_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  109 => 34,  102 => 31,  99 => 30,  92 => 27,  89 => 26,  84 => 23,  81 => 22,  72 => 15,  69 => 14,  63 => 12,  56 => 9,  53 => 8,  46 => 5,  43 => 4,  11 => 1,);
    }
}
