<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0d82e81bcbe84650b963d73e21e90b1b274c18fd1773f234634c7dcf02533511 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("DiabeteBundle:layout:login_layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        echo "Se connecter";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<div class=\"panel\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">Authentification</h3>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<!--HORIZONTAL FORM-->
\t\t\t\t\t\t<!--===================================================-->

\t\t\t\t\t\t<form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal\" role=\"form\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"demo-hor-inputemail\">Nom d'utilisateur</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 24
        if (isset($context["last_username"])) { $_last_username_ = $context["last_username"]; } else { $_last_username_ = null; }
        echo twig_escape_filter($this->env, $_last_username_, "html", null, true);
        echo "\" placeholder=\"Utilisateur\" autofocus />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"demo-hor-inputpass\">Mot de passe</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Mot de passe\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-checkbox form-normal\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"> Remember me
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 49
        echo "\t\t\t\t\t\t\t<div class=\"panel-footer text-right\">
\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"submit\" class=\"btn btn-info\">S'authentifier</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<!--===================================================-->
\t\t\t\t\t\t<!-- END OF HORIZONTAL FORM  -->

\t\t\t\t\t</div>
\t\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 49,  67 => 24,  59 => 19,  46 => 8,  43 => 7,  37 => 4,  11 => 2,);
    }
}
