<?php

/* DiabeteBundle:Subscriber:subscriberEdit.html.twig */
class __TwigTemplate_b0da6c953868aa489426cdd0b03dbff53d63bd092050c7d4a560775591ecc029 extends Twig_Template
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
                            <h3 class=\"panel-title\">Modifier ses coordonnées</h3>
                        </div>

                        <!--HORIZONTAL FORM-->
                        <!--===================================================-->

                        <form role=\"form\" novalidate action=\"#\" method=\"post\" class=\"form-horizontal\">
                        <div class=\"panel-body\">
                            <div class=\"row\">
                              ";
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

    public function getTemplateName()
    {
        return "DiabeteBundle:Subscriber:subscriberEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 39,  111 => 37,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  61 => 20,  55 => 17,  42 => 6,  39 => 5,  35 => 1,  33 => 3,  11 => 1,);
    }
}
