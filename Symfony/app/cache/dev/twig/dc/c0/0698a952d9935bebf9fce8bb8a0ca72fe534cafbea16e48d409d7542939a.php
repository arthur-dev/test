<?php

/* OCUserBundle:Resetting:request.html.twig */
class __TwigTemplate_dcc00698a952d9935bebf9fce8bb8a0ca72fe534cafbea16e48d409d7542939a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        try {
            $this->parent = $this->env->loadTemplate("DiabeteBundle:layout:login_layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(3);

            throw $e;
        }

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DiabeteBundle:layout:login_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        echo "Mot de passe oublié";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "\t\t\t
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"panel\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">Réinitialiser son mot de passe</h3>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<!--HORIZONTAL FORM-->
\t\t\t\t\t\t<!--===================================================-->

\t\t\t\t\t\t<form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"form-horizontal\" >
    \t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
        // line 23
        if (array_key_exists("invalid_username", $context)) {
            // line 24
            echo "            \t\t\t\t\t\t\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => $this->getContext($context, "invalid_username"))), "html", null, true);
            echo "</p>
        \t\t\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"demo-hor-inputemail\">Nom d'utilisateur</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"username\" class=\"form-control\" name=\"username\" placeholder=\"Utilisateur\" autofocus />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<div class=\"panel-footer text-right\">
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"submit\" class=\"btn btn-info\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit"), "html", null, true);
        echo "\">Valider</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "OCUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 33,  73 => 26,  67 => 24,  65 => 23,  59 => 20,  46 => 9,  43 => 8,  37 => 5,  11 => 3,);
    }
}
