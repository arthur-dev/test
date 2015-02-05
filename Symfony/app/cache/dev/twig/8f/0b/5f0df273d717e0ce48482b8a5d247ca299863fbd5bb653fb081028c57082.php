<?php

/* DiabeteBundle:Doctor:viewSubscriber.html.twig */
class __TwigTemplate_8f0b5f0df273d717e0ce48482b8a5d247ca299863fbd5bb653fb081028c57082 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "subscriber"), "getFirstname", array(), "method"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "subscriber"), "getLastname", array(), "method"), "html", null, true);
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
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                <h3 class=\"panel-title\" >Les coordonnées de votre patient</h3>

                </div>
                <div class=\"panel-body\">
                            <ul class=\"list-unstyled\">
                                <li>
                                    <strong>Né(e) le </strong>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "subscriber"), "getBirthday", array(), "method"), "d/m/Y"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "subscriber"), "getAge", array(), "method"), "html", null, true);
        echo " ans)
                                </li>
                                <li>
                                    <strong>Adresse : </strong>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "subscriber"), "getAddress", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Code Postal : </strong>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "subscriber"), "getPostalCode", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Ville : </strong>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "subscriber"), "getCity", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Téléphone : </strong>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "subscriber"), "getPhone", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Téléphone : </strong>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "subscriber"), "getCellPhone", array(), "method"), "html", null, true);
        echo "
                                </li>
                            </ul>
                </div>
            </div>
        </div>

        <!-- Votre medecin  -->
        <div class=\"col-md-6\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\"> <h3  class=\"panel-title\" >Vos coordonnées</h3>
                </div>
                <div class=\"panel-body\">
                <ul class=\"list-unstyled\">
                                <li>
                                    <strong></strong>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getFirstname", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getLastname", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Adresse : </strong>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getAddress", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Code Postal : </strong>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getPostalCode", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Ville : </strong>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getCity", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Téléphone : </strong>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getPhone", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Téléphone : </strong>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getCellPhone", array(), "method"), "html", null, true);
        echo "
                                </li>
                            </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- Deuxieme row -->


    <div class=\"row\">

        <!-- glycemie  -->
        <div class=\"col-md-3\">
            <div class=\"panel\">
                <div class=\"panel-heading\"> <h3 class=\"panel-title\" >Glycémie</h3>
                </div>
                <div class=\"panel-body text-center\">
                    <a class=\"btn btn-info\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("doctorViewGlycemie", array("id" => $this->getAttribute($this->getContext($context, "subscriber"), "id", array()))), "html", null, true);
        echo "\">Accéder au données</a>
                </div>
            </div>
        </div>

        <!-- insuline  -->
        <div class=\"col-md-3\">
            <div class=\"panel\">
                <div class=\"panel-heading\"> <h3 class=\"panel-title\" >Injection d'insuline</h3>
                </div>
                <div class=\"panel-body text-center\">
                    <a class=\"btn btn-info\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("doctorViewInsuline", array("id" => $this->getAttribute($this->getContext($context, "subscriber"), "id", array()))), "html", null, true);
        echo "\">Accéder au données</a>
                </div>
            </div>
        </div>

        <!-- activitee  -->
        <div class=\"col-md-3\">
            <div class=\"panel\">
                <div class=\"panel-heading\"> <h3 class=\"panel-title\" >Activitées physiques</h3>
                </div>
                <div class=\"panel-body text-center\">
                    <a class=\"btn btn-info\" href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("doctorViewActivite", array("id" => $this->getAttribute($this->getContext($context, "subscriber"), "id", array()))), "html", null, true);
        echo "\">Accéder au données</a>
                </div>
            </div>
        </div>

        <!-- nutrition  -->
        <div class=\"col-md-3\">
            <div class=\"panel\">
                <div class=\"panel-heading\"> <h3 class=\"panel-title\" >Nutrition</h3>
                </div>
                <div class=\"panel-body text-center\">
                    <a class=\"btn btn-info\" href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("doctorViewNutrition", array("id" => $this->getAttribute($this->getContext($context, "subscriber"), "id", array()))), "html", null, true);
        echo "\">Accéder au données</a>
                </div>
            </div>
        </div>

    </div>
    
<div class=\"row\">
<!-- Vos info  -->
        <div class=\"col-md-12\">
            <div class=\"panel\">
                <div class=\"panel-heading\"> 
                <div class=\"panel-control\">
                                    <a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editDiabeteProfileDoctor", array("id" => $this->getAttribute($this->getContext($context, "subscriber"), "id", array()))), "html", null, true);
        echo "\"<button class=\"dropdown-toggle btn btn-info\">
                                            <i class=\"fa fa-gear fa-lg\"></i>
                                        </button></a>
                                </div>
                <h3 class=\"panel-title\" >Vos Paramètres</h3>

                </div>
                <div class=\"panel-body\">
                            <ul class=\"list-unstyled\">
                                <li>
                                    <strong>Facteur Sensibilite Insuline </strong>";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "diabeteProfile"), "getFacteurSensibiliteInsuline", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Ratio Insuline Glucide : </strong>";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "diabeteProfile"), "getRatioInsulineGlucide", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Glycemie Cible : </strong>";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "diabeteProfile"), "getGlycemieCible", array(), "method"), "html", null, true);
        echo "
                                </li>
                            </ul>
                </div>
            </div>
        </div>            
</div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel\">
                    <div class=\"panel-heading\"> <h3 class=\"panel-title\" >les données des 7 derniers jours</h3>
                    </div>
                    ";
        // line 163
        if (($this->getContext($context, "bloodGlucoseData") != "[]")) {
            // line 164
            echo "                        ";
            // line 165
            echo "                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div id=\"chart-bloodglucose\" data-bloodglucosedata=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->getContext($context, "bloodGlucoseData"), "html", null, true);
            echo "\"></div>
                                </div>
                            </div>
                    ";
        } else {
            // line 171
            echo "                        <div class=\"alert\">
                            <p>Pas de données</p>
                        </div>
                    ";
        }
        // line 175
        echo "                </div>
            </div>
        </div>


    ";
        // line 180
        if (($this->getContext($context, "bloodGlucoseData") != "[]")) {
            // line 181
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/lib/Highcharts/highcharts.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/lib/Highcharts/highcharts-more.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/lib/Highcharts/highcharts-fix-language.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/modules/highcharts-bloodglucose.js"), "html", null, true);
            echo "\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:Doctor:viewSubscriber.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 184,  312 => 183,  308 => 182,  303 => 181,  301 => 180,  294 => 175,  288 => 171,  281 => 167,  277 => 165,  275 => 164,  273 => 163,  257 => 150,  251 => 147,  245 => 144,  232 => 134,  216 => 121,  202 => 110,  188 => 99,  174 => 88,  151 => 68,  145 => 65,  139 => 62,  133 => 59,  127 => 56,  119 => 53,  101 => 38,  95 => 35,  89 => 32,  83 => 29,  77 => 26,  69 => 23,  52 => 8,  49 => 7,  40 => 5,  37 => 4,  11 => 1,);
    }
}
