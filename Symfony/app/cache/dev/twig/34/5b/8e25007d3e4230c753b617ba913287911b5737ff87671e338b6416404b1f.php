<?php

/* DiabeteBundle:Form:fields.html.twig */
class __TwigTemplate_345b8e25007d3e4230c753b617ba913287911b5737ff87671e338b6416404b1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'date_widget' => array($this, 'block_date_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <div class=\"form-group ";
        echo (((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) ? ("has-error") : (""));
        echo "\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', array("label_attr" => array("class" => "col-sm-4 control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"col-sm-8\">
        \t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        \t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_form_errors($context, array $blocks = array())
    {
        // line 16
        ob_start();
        // line 17
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 18
            echo "    <span class=\"help-block\">
        ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 20
                echo "            ";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('translator')->trans($this->getAttribute($context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute($context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"))), "html", null, true);
                // line 24
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 31
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 32
        ob_start();
        // line 33
        echo "    ";
        // line 34
        echo "    <div>
    ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 36
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
        ";
            // line 38
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 43
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 44
        ob_start();
        // line 45
        echo "\t<div class=\"checkbox\">
\t    <label for=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">
\t    \t<input type=\"checkbox\" ";
        // line 47
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
        }
        if ($this->getContext($context, "checked")) {
            echo " checked=\"checked\"";
        }
        echo " />
\t    \t";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "
\t    </label>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 54
    public function block_date_widget($context, array $blocks = array())
    {
        // line 55
        ob_start();
        // line 56
        echo "    ";
        if (($this->getContext($context, "widget") == "single_text")) {
            // line 57
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 59
            echo "        ";
            // line 60
            echo "        <div>
            ";
            // line 61
            echo strtr($this->getContext($context, "date_pattern"), array("{{ year }}" =>             // line 62
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "year", array()), 'widget'), "{{ month }}" =>             // line 63
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "month", array()), 'widget'), "{{ day }}" =>             // line 64
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "day", array()), 'widget')));
            // line 65
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 65,  186 => 64,  185 => 63,  184 => 62,  183 => 61,  180 => 60,  178 => 59,  172 => 57,  169 => 56,  167 => 55,  164 => 54,  155 => 48,  143 => 47,  139 => 46,  136 => 45,  134 => 44,  131 => 43,  125 => 39,  119 => 38,  114 => 36,  110 => 35,  107 => 34,  105 => 33,  103 => 32,  100 => 31,  93 => 26,  86 => 24,  83 => 20,  79 => 19,  76 => 18,  73 => 17,  71 => 16,  68 => 15,  59 => 9,  55 => 8,  50 => 6,  45 => 5,  43 => 4,  40 => 3,  11 => 1,);
    }
}
