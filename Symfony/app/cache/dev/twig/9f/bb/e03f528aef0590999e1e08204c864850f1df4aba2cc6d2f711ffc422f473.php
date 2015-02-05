<?php

/* OCUserBundle:Profile:show.html.twig */
class __TwigTemplate_9fbbe03f528aef0590999e1e08204c864850f1df4aba2cc6d2f711ffc422f473 extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"pad-ver\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/images//av1.png"), "html", null, true);
        echo "\" alt=\"Profile Picture\">
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 class=\"text-lg text-overflow mar-no\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username", array()), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<p class=\"text-sm\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t<a href=\"edit\" class=\"btn btn-sm btn-primary pull-left\" type=\"submit\"><i class=\"fa fa-pencil fa-fw\"></i>Modifier</a>

    
";
    }

    public function getTemplateName()
    {
        return "OCUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  49 => 8,  43 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}
