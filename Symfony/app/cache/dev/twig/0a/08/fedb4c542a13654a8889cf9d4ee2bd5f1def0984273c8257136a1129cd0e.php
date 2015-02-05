<?php

/* DiabeteBundle:Subscriber:diabeteProfileEdit.html.twig */
class __TwigTemplate_0a08fedb4c542a13654a8889cf9d4ee2bd5f1def0984273c8257136a1129cd0e extends Twig_Template
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "diabeteProfileForm"), array(0 => "DiabeteBundle:Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "                    <div class=\"panel\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Modifier mes paramètres</h3>
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
        return "DiabeteBundle:Subscriber:diabeteProfileEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  69 => 22,  65 => 21,  61 => 20,  55 => 17,  42 => 6,  39 => 5,  35 => 1,  33 => 3,  11 => 1,);
    }
}
