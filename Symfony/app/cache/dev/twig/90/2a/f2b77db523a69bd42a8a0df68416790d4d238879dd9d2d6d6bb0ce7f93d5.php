<?php

/* DiabeteBundle:Doctor:glycemie.html.twig */
class __TwigTemplate_902af2b77db523a69bd42a8a0df68416790d4d238879dd9d2d6d6bb0ce7f93d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("DiabeteBundle:layout:doctor_layout.html.twig");
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
        return "DiabeteBundle:layout:doctor_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        echo "<a class=\"btn btn-primary pull-right\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("doctorViewSubsriber", array("id" => $this->getAttribute($this->getContext($context, "subscriber"), "id", array()))), "html", null, true);
        echo "\">Retour à la fiche patient</a> Glycemie  ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<div class=\"panel panel-primary\">
\t\t\t<div class=\"panel-heading\"><h3 class=\"panel-title\">Données</h3></div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<form id=\"nbDaysForm\" class=\"form-inline\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"nbDaysAgo\">Nombre de jours :</label>
\t\t\t\t\t\t\t\t<select id=\"nbDaysAgo\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 17
        $context["nbDaysArray"] = array(0 => 3, 1 => 7, 2 => 30, 3 => 180);
        // line 18
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "nbDaysArray"));
        foreach ($context['_seq'] as $context["_key"] => $context["nbDays"]) {
            // line 19
            echo "\t\t\t  \t\t\t\t\t\t<option ";
            echo ((($context["nbDays"] == $this->getContext($context, "nbDaysAgo"))) ? ("selected") : (""));
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("doctorViewGlycemie", array("id" => $this->getAttribute($this->getContext($context, "subscriber"), "id", array()), "nbDaysAgo" => $context["nbDays"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["nbDays"], "html", null, true);
            echo "</option>
\t\t\t  \t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbDays'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t  \t\t\t\t\t</select>
\t\t  \t\t\t\t\t</div>
\t\t  \t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Appliquer\" />
\t  \t\t\t\t\t</form>
  \t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t";
        // line 29
        if (($this->getContext($context, "bloodGlucoseData") != "[]")) {
            // line 30
            echo "\t\t\t\t\t\t\t";
            // line 31
            echo "\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div id=\"chart-bloodglucose\" data-bloodglucosedata=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getContext($context, "bloodGlucoseData"), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t\t\t<div class=\"alert\">
\t\t\t\t\t\t\t\t<p>Pas de données</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


<script>
\t\$('#nbDaysForm').submit(function(e) {
\t\te.preventDefault();
\t\tvar url = \$(\"#nbDaysAgo option:selected\").val();
\t\twindow.location.href = url;
\t});
</script>
    ";
        // line 56
        if (($this->getContext($context, "bloodGlucoseData") != "[]")) {
            // line 57
            echo "\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/lib/Highcharts/highcharts.js"), "html", null, true);
            echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/lib/Highcharts/highcharts-more.js"), "html", null, true);
            echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/lib/Highcharts/highcharts-fix-language.js"), "html", null, true);
            echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/modules/highcharts-bloodglucose.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:Doctor:glycemie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 62,  144 => 60,  140 => 59,  136 => 58,  131 => 57,  129 => 56,  112 => 41,  106 => 37,  99 => 33,  95 => 31,  93 => 30,  91 => 29,  81 => 21,  68 => 19,  63 => 18,  61 => 17,  48 => 6,  45 => 5,  37 => 4,  11 => 1,);
    }
}
