<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_ea5ef70ce7ba83a45c14ed9722344b79f9e04f7dc9b836aa7f59c6de7d06578b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ( !twig_test_empty($this->getAttribute($this->getContext($context, "app"), "session", array()))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ( !twig_test_empty($this->getContext($context, "targetUrl"))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "targetUrl"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  49 => 9,  46 => 8,  44 => 7,  39 => 6,  36 => 5,  11 => 1,);
    }
}
