<?php

/* DiabeteBundle:Doctor:index.html.twig */
class __TwigTemplate_f8e407134904bb8b32370fa320432029377b07eb9d2398a49a0531cb82e52f78 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        // line 5
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getFirstname", array(), "method"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getLastname", array(), "method"), "html", null, true);
        echo "</strong>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "

    <!-- ROW du haut  -->
    <div class=\"row\">

        <!-- Vos info  -->
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\"> 
                <div class=\"panel-control\">
                                    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("editDoctor");
        echo "\"<button class=\"dropdown-toggle btn btn-info\">
                                            <i class=\"fa fa-gear fa-lg\"></i>
                                        </button></a>
                                </div>
                <h3 class=\"panel-title\" >Vos Informations</h3>

                </div>
                <div class=\"panel-body\">
                            <ul class=\"list-unstyled\">
                                <li>
                                    <strong>Né(e) le </strong>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getBirthday", array(), "method"), "d/m/Y"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getAge", array(), "method"), "html", null, true);
        echo " ans)
                                </li>
                                <li>
                                    <strong>Adresse : </strong>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getAddress", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Code Postal : </strong>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getPostalCode", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Ville : </strong>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getCity", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Téléphone : </strong>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getPhone", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Téléphone : </strong>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getCellPhone", array(), "method"), "html", null, true);
        echo "
                                </li>
                            </ul>
                </div>
            </div>
        </div>

    </div>



<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
<div class=\"row\">

        <!-- Vos info  -->
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                <h3 class=\"panel-title\" >Vos patients</h3>

                </div>

            <div class=\"table-responsive\">  
                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"table table-striped table-bordered\" id=\"subscribers-list\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Nom du médecin</th>
                            <th>Téléphone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan=\"5\" class=\"dataTables_empty\">Chargement en cours...</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Nom du médecin</th>
                            <th>Téléphone</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>
        </div>

    </div>



    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/lib/dataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/lib/dataTables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/lib/dataTables/oLanguage.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/Files/dataTablesFilesList.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


";
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:Doctor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 100,  177 => 99,  173 => 98,  169 => 97,  123 => 54,  109 => 43,  103 => 40,  97 => 37,  91 => 34,  85 => 31,  77 => 28,  64 => 18,  52 => 8,  49 => 7,  40 => 5,  37 => 4,  11 => 1,);
    }
}
