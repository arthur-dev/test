<?php

/* DiabeteBundle:Subscriber:activite.html.twig */
class __TwigTemplate_f51a7b2fd10aa8b629535a9c25c9c5c9405de572b5522d5ffa4b86c15cf9c52f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        echo " 
Activité ";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
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
        // line 18
        $context["nbDaysArray"] = array(0 => 3, 1 => 7, 2 => 30, 3 => 180);
        // line 19
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "nbDaysArray"));
        foreach ($context['_seq'] as $context["_key"] => $context["nbDays"]) {
            // line 20
            echo "\t\t\t  \t\t\t\t\t\t<option ";
            echo ((($context["nbDays"] == $this->getContext($context, "nbDaysAgo"))) ? ("selected") : (""));
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activite", array("nbDaysAgo" => $context["nbDays"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["nbDays"], "html", null, true);
            echo "</option>
\t\t\t  \t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbDays'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t  \t\t\t\t\t</select>
\t\t  \t\t\t\t\t</div>
\t\t  \t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Appliquer\" />
\t  \t\t\t\t\t</form>
  \t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t";
        // line 30
        if (($this->getContext($context, "activiteData") != "[]")) {
            // line 31
            echo "\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div id=\"chart-activite\" data-activitedata=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getContext($context, "activiteData"), "html", null, true);
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
        if (($this->getContext($context, "activiteData") != "[]")) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/modules/highcharts-activite.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:Subscriber:activite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 62,  141 => 60,  137 => 59,  133 => 58,  128 => 57,  126 => 56,  109 => 41,  103 => 37,  96 => 33,  92 => 31,  90 => 30,  80 => 22,  67 => 20,  62 => 19,  60 => 18,  47 => 7,  44 => 6,  37 => 4,  11 => 1,);
    }
}
