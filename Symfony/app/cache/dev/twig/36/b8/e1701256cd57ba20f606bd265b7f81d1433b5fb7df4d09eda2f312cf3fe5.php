<?php

/* DiabeteBundle:Default:index.html.twig */
class __TwigTemplate_36b8e1701256cd57ba20f606bd265b7f81d1433b5fb7df4d09eda2f312cf3fe5 extends Twig_Template
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
            'content' => array($this, 'block_content'),
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
        echo "Médecin";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t\t\t\t
                        <div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("filesServicesDiabetes");
        echo "\">
\t\t\t\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/images/blueGlucometer.jpg"), "html", null, true);
        echo "\" alt='blueGlucometer' />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<h3>Glycémie</h3>
\t\t\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("filesServicesDiabetes");
        echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-eye-open\"></span> Voir</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  56 => 11,  52 => 10,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
