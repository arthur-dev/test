<?php

/* DiabeteBundle:Doctor:DoctorEdit.html.twig */
class __TwigTemplate_21c28238ce8d6ae73a62a509fddc4d5205dd3b9559f9860892390a8555edeb20 extends Twig_Template
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "doctorForm"), array(0 => "DiabeteBundle:Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        echo "Médecin";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "                    <div class=\"panel\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Modifier mes coordonnées</h3>
                        </div>

<form role=\"form\" novalidate action=\"#\" method=\"post\" class=\"form-horizontal\">
\t<div class=\"row\">
\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "doctorForm"), 'errors');
        echo "
\t\t<div class=\"col-md-4\">
            <legend>Infos générales</legend>
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "doctorForm"), "_token", array()), 'row');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "doctorForm"), "gender", array()), 'row');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "doctorForm"), "lastname", array()), 'row');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "doctorForm"), "firstname", array()), 'row');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "doctorForm"), "birthday", array()), 'row');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "doctorForm"), "address", array()), 'row');
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "doctorForm"), "postalCode", array()), 'row');
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "doctorForm"), "city", array()), 'row');
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "doctorForm"), "phone", array()), 'row');
        echo "
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "doctorForm"), "cellPhone", array()), 'row');
        echo "
        </div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-md-offset-4 col-md-8\">
\t\t\t\t\t<input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:Doctor:DoctorEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  58 => 14,  49 => 7,  46 => 6,  40 => 4,  36 => 1,  34 => 3,  11 => 1,);
    }
}
