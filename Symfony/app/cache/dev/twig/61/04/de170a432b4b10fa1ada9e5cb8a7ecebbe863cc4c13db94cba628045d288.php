<?php

/* DiabeteBundle:layout:include.html.twig */
class __TwigTemplate_6104de170a432b4b10fa1ada9e5cb8a7ecebbe863cc4c13db94cba628045d288 extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Blank page | Nifty - Responsive admin template</title>



<!-- ================================================= -->
<!--                 STYLESHEET                        -->
<!-- ================================================= -->


<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<!-- Bootstrap Core -->



<!-- Roboto Font -->
<link href=\"http://fonts.googleapis.com/css?family=Roboto:400,700,300,500\" rel=\"stylesheet\" type=\"text/css\">


<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/css/nifty.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />



<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/css/demo/nifty-demo.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />



<!-- Plugins CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/css/plugins.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />





<!--Page load progress bar -->
<link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/pace.min.js"), "html", null, true);
        echo "\" type=\"js\" media=\"all\" />


<!-- jQuery Version 2.1.1 -->
<script src=";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "></script>
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:layout:include.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 41,  69 => 37,  59 => 30,  51 => 25,  44 => 21,  32 => 12,  19 => 1,);
    }
}
