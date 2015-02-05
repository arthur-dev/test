<?php

/* DiabeteBundle:Subscriber:index.html.twig */
class __TwigTemplate_cedc59726fbf89bd432e70f452bf826b17d72fb42bc35b7b961fcea437ee7dc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("DiabeteBundle:layout:patient_layout.html.twig");
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
        return "DiabeteBundle:layout:patient_layout.html.twig";
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
                <div class=\"panel-control\">
                                    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("editSubscriber");
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "subscriber"), "getBirthday", array(), "method"), "d/m/Y"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "subscriber"), "getAge", array(), "method"), "html", null, true);
        echo " ans)
                                </li>
                                <li>
                                    <strong>Adresse : </strong>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "subscriber"), "getAddress", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Code Postal : </strong>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "subscriber"), "getPostalCode", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Ville : </strong>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "subscriber"), "getCity", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Téléphone : </strong>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "subscriber"), "getPhone", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Téléphone : </strong>";
        // line 43
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
                <div class=\"panel-heading\"> <h3  class=\"panel-title\" >Votre medecin</h3>
                </div>
                <div class=\"panel-body\">
                <ul class=\"list-unstyled\">
                                <li>
                                    <strong></strong>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getFirstname", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getLastname", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Adresse : </strong>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getAddress", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Code Postal : </strong>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getPostalCode", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Ville : </strong>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getCity", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Téléphone : </strong>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "doctor"), "getPhone", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Téléphone : </strong>";
        // line 73
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
        // line 93
        echo $this->env->getExtension('routing')->getPath("glycemie");
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
        // line 104
        echo $this->env->getExtension('routing')->getPath("insuline");
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
        // line 115
        echo $this->env->getExtension('routing')->getPath("activite");
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
        // line 126
        echo $this->env->getExtension('routing')->getPath("nutrition");
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
        // line 139
        echo $this->env->getExtension('routing')->getPath("editDiabeteProfileSubscriber");
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
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "diabeteProfile"), "getFacteurSensibiliteInsuline", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Ratio Insuline Glucide : </strong>";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "diabeteProfile"), "getRatioInsulineGlucide", array(), "method"), "html", null, true);
        echo "
                                </li>
                                <li>
                                    <strong>Glycemie Cible : </strong>";
        // line 155
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
        // line 168
        if (($this->getContext($context, "bloodGlucoseData") != "[]")) {
            // line 169
            echo "                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div id=\"chart-bloodglucose\" data-bloodglucosedata=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->getContext($context, "bloodGlucoseData"), "html", null, true);
            echo "\"></div>
                                </div>
                            </div>
                    ";
        } else {
            // line 175
            echo "                        <div class=\"alert\">
                            <p>Pas de données</p>
                        </div>
                    ";
        }
        // line 179
        echo "                </div>
            </div>
        </div>


    ";
        // line 184
        if (($this->getContext($context, "bloodGlucoseData") != "[]")) {
            // line 185
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/lib/Highcharts/highcharts.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/lib/Highcharts/highcharts-more.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/lib/Highcharts/highcharts-fix-language.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Diabete/js/modules/highcharts-bloodglucose.js"), "html", null, true);
            echo "\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "DiabeteBundle:Subscriber:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 188,  318 => 187,  314 => 186,  309 => 185,  307 => 184,  300 => 179,  294 => 175,  287 => 171,  283 => 169,  281 => 168,  265 => 155,  259 => 152,  253 => 149,  240 => 139,  224 => 126,  210 => 115,  196 => 104,  182 => 93,  159 => 73,  153 => 70,  147 => 67,  141 => 64,  135 => 61,  127 => 58,  109 => 43,  103 => 40,  97 => 37,  91 => 34,  85 => 31,  77 => 28,  64 => 18,  52 => 8,  49 => 7,  40 => 5,  37 => 4,  11 => 1,);
    }
}
