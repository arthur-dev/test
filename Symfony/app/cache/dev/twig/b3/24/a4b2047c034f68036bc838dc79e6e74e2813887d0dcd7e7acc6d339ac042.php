<?php

/* DiabeteBundle:Files:ShowServiceDiabetes.html.twig */
class __TwigTemplate_b324a4b2047c034f68036bc838dc79e6e74e2813887d0dcd7e7acc6d339ac042 extends Twig_Template
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
        echo "<div class=\"col-sm-6\">
                    <div class=\"panel\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Service Diabéte</h3>
                        </div>



<div class=\"panel ";
        // line 14
        if ( !twig_test_empty($this->getContext($context, "doctor"))) {
            echo "panel-default";
        } else {
            echo "panel-warning";
        }
        echo "\">
\t<div class=\"panel-heading\"><h3 class=\"panel-title\">Médecin</h3></div>
\t<div class=\"panel-body\">
\t\t";
        // line 17
        if (twig_test_empty($this->getContext($context, "doctor"))) {
            // line 18
            echo "\t\t<div class=\"alert alert-warning\">
\t\t\t<p><strong>Attention !</strong> L'abonné ne dispose pas de médecin</p>
\t\t</div>
\t\t";
        } else {
            // line 22
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t<a href=\"#doctor";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getId", array(), "method"), "html", null, true);
            echo "\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getFullName", array(), "method"), "html", null, true);
            echo "</a>
\t\t\t\t    </li>
\t\t\t    </ul>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
            // line 33
            if (($this->getAttribute($this->getContext($context, "doctor"), "getPhone", array(), "method") != "")) {
                // line 34
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Tel. 1 :</strong> ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getPhone", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getContext($context, "doctor"), "getCellPhone", array(), "method") != "")) {
                // line 39
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Tel. 2 :</strong> ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getCellPhone", array(), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</li>
\t\t    \t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 48
        echo "\t</div>
</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:Files:ShowServiceDiabetes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 48,  115 => 43,  109 => 40,  106 => 39,  103 => 38,  97 => 35,  94 => 34,  92 => 33,  80 => 26,  74 => 22,  68 => 18,  66 => 17,  56 => 14,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
