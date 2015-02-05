<?php

/* DiabeteBundle:Subscriber:addGlucometer.html.twig */
class __TwigTemplate_c46f54bdcf2edefa25c907128c0cd67daf090028190f57737f39e27ac92e19c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("DiabeteBundle:layout:patient_layout.html.twig");
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
        return "DiabeteBundle:layout:patient_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "DiabeteBundle:Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        echo " Glycemie  ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
    \t<div class=\"col-md-4\">
\t\t    <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("addGlucometer");
        echo "\" method=\"post\" class=\"form-horizontal\">
\t\t        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t\t\t<input type=\"submit\" value=\"Ajouter le glucomètre et activer le service\" class=\"btn btn-primary\" />
\t\t\t\t</div>
\t\t    </form>
\t    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:Subscriber:addGlucometer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  53 => 10,  49 => 8,  46 => 7,  40 => 4,  36 => 1,  34 => 3,  11 => 1,);
    }
}
