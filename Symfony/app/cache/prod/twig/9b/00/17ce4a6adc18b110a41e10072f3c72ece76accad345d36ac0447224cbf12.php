<?php

/* DiabeteBundle:layout:script.html.twig */
class __TwigTemplate_9b0017ce4a6adc18b110a41e10072f3c72ece76accad345d36ac0447224cbf12 extends Twig_Template
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

<!--===================================================-->
<!--                 JAVASCRIPT                        -->
<!--===================================================-->





<!-- MAIN PLUGIN -->
<!-- ================================================= -->




{
<!-- Bootstrap Core JavaScript -->
<script src=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/bootstrap.min.js"), "html", null, true);
        echo "></script>


<!-- ================================================= -->







<!-- ADMIN PLUGIN & DEMO -->
<!-- ================================================= -->



<!-- Plugins -->
<script src=";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/plugins.min.js"), "html", null, true);
        echo "></script>


<!-- Admin Core -->
<script src=";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/nifty.min.js"), "html", null, true);
        echo "></script>


<!-- Demo JavaScript -->
<script src=";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/demo/nifty-demo.min.js"), "html", null, true);
        echo "></script>


<script type=\"text/javascript\"
src=";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/highcharts.js"), "html", null, true);
        echo ">
</script>


<script type=\"text/javascript\"
src=";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/modules/exporting.js"), "html", null, true);
        echo ">
</script>
<!-- ================================================= -->
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:layout:script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 53,  80 => 48,  73 => 44,  66 => 40,  59 => 36,  39 => 19,  19 => 1,);
    }
}
