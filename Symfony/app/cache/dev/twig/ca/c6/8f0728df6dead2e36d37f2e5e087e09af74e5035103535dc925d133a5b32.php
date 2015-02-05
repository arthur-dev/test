<?php

/* DiabeteBundle:Files:filesList.html.twig */
class __TwigTemplate_cac68f0728df6dead2e36d37f2e5e087e09af74e5035103535dc925d133a5b32 extends Twig_Template
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
            'page_title' => array($this, 'block_page_title'),
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

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        echo "Médecin";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\">

\t<div class=\"page-header\">
\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("addSubscriber");
        echo "\" class=\"btn btn-primary pull-right\">Ajouter un abonné</a>
\t\t<h3>Liste des abonnés</h3>
\t</div>
\t<div class=\"row\">     
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"table-responsive\">  
\t\t\t\t<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"table table-striped table-bordered\" id=\"subscribers-list\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t\t<th>Nom du médecin</th>
\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"5\" class=\"dataTables_empty\">Chargement en cours...</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t\t<th>Nom du médecin</th>
\t\t\t\t\t\t\t<th>Téléphone</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>



\t<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/lib/dataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/lib/dataTables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/lib/dataTables/oLanguage.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/Files/dataTablesFilesList.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:Files:filesList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 48,  101 => 47,  97 => 46,  93 => 45,  55 => 10,  49 => 7,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
