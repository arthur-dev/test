<?php

/* DiabeteBundle:Doctor:diabeteProfileEdit.html.twig */
class __TwigTemplate_e90a1b9ec183d141f0afcd9d4a0aa9d351e2b6d5975fd80546b2815c59d2b726 extends Twig_Template
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
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "diabeteProfileForm"), array(0 => "DiabeteBundle:Form:fields.html.twig"));
        // line 1
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
        echo "                    <div class=\"panel\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Modifier les paramètres</h3>
                        </div>

                        <!--HORIZONTAL FORM-->
                        <!--===================================================-->

                        <form role=\"form\" novalidate action=\"#\" method=\"post\" class=\"form-horizontal\">
                        <div class=\"panel-body\">
                            <div class=\"row\">
                              ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "diabeteProfileForm"), 'errors');
        echo "
                                <div class=\"col-md-4\">
                                    <legend>Paramètres</legend>
                                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "diabeteProfileForm"), "_token", array()), 'row');
        echo "
                                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "diabeteProfileForm"), "facteurSensibiliteInsuline", array()), 'row');
        echo "
                                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "diabeteProfileForm"), "ratioInsulineGlucide", array()), 'row');
        echo "
                                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "diabeteProfileForm"), "glycemieCible", array()), 'row');
        echo "
                                </div>
                            </div>
                        </div>
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"form-group\">
                                        <div class=\"col-md-offset-4 col-md-8\">
                                            <input type=\"submit\" value=\"Modifier\" class=\"btn btn-primary\" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:Doctor:diabeteProfileEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  78 => 22,  74 => 21,  70 => 20,  64 => 17,  51 => 6,  48 => 5,  40 => 4,  36 => 1,  34 => 3,  11 => 1,);
    }
}
