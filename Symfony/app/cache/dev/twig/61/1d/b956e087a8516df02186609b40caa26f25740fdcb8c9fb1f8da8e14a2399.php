<?php

/* DiabeteBundle:Subscriber:subscriberAdd.html.twig */
class __TwigTemplate_611db956e087a8516df02186609b40caa26f25740fdcb8c9fb1f8da8e14a2399 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DiabeteBundle:layout:bundle_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "subscriberForm"), array(0 => "DiabeteBundle:Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "                    <div class=\"panel\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Authentification</h3>
                        </div>

                        <!--HORIZONTAL FORM-->
                        <!--===================================================-->

                        <form role=\"form\" novalidate action=\"#\" method=\"post\" class=\"form-horizontal\">
                        <div class=\"panel-body\">
                            <div class=\"row\">
\t\t                      ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "subscriberForm"), 'errors');
        echo "
                                <div class=\"col-md-4\">
                                    <legend>Infos générales</legend>
                                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "subscriberForm"), "_token", array()), 'row');
        echo "
                                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "subscriberForm"), "gender", array()), 'row');
        echo "
                                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "subscriberForm"), "lastname", array()), 'row');
        echo "
                                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "subscriberForm"), "firstname", array()), 'row');
        echo "
                                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "subscriberForm"), "birthday", array()), 'row');
        echo "
                                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "subscriberForm"), "address", array()), 'row');
        echo "
                                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "subscriberForm"), "postalCode", array()), 'row');
        echo "
                                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "subscriberForm"), "city", array()), 'row');
        echo "
                                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "subscriberForm"), "phone", array()), 'row');
        echo "
                                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "subscriberForm"), "cellPhone", array()), 'row');
        echo "
                                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "subscriberForm"), "socialSecurityNumber", array()), 'row');
        echo "
                                </div>
                                <div class=\"col-md-4\">
                                    <legend>Médecin</legend>
                                        <div class=\"form-group\">
                                            <label for=\"subscriber_doctor\" class=\"col-sm-4 control-label\">Médecin</label>
                                            <div class=\"col-sm-8\">
                                                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "subscriberForm"), "doctor", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            </div>
                                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "subscriberForm"), "doctor", array()), 'errors');
        echo "
                                        </div>
                                </div>
                            </div>
                        </div>
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"form-group\">
                                        <div class=\"col-md-offset-4 col-md-8\">
                                            <input type=\"submit\" value=\"Ajouter l'abonné\" class=\"btn btn-primary\" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DiabeteBundle/js/subscribersAdd.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:Subscriber:subscriberAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 58,  138 => 57,  117 => 39,  112 => 37,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  56 => 17,  43 => 6,  40 => 5,  36 => 1,  34 => 3,  11 => 1,);
    }
}
