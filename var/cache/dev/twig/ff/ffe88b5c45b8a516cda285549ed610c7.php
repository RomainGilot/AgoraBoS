<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* lesJeux.html.twig */
class __TwigTemplate_38bab8935738aff785ddf673c03b5569 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'central' => [$this, 'block_central'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesJeux.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesJeux.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lesJeux.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_central($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        // line 3
        echo "<!-- page start-->
<div class=\"col-sm-auto\">
    <section class=\"panel\">
        <div class=\"chat-room-head\">
            <h3><i class=\"fa fa-angle-right\"></i> Gérer les Jeux</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-advance table-hover\">
                <thead>
                    <tr class=\"tableau-entete\">
                        <th><i class=\"fa fa-bullhorn\"></i> Reférence</th>
                        <th><i class=\"fa fa-bookmark\"></i> Plateforme</th>
                        <th><i class=\"fa fa-bookmark\"></i> Pegi</th>
                        <th><i class=\"fa fa-bookmark\"></i> Genre</th>
                        <th><i class=\"fa fa-bookmark\"></i> Marque</th>
                        <th><i class=\"fa fa-bookmark\"></i> Nom</th>
                        <th><i class=\"fa fa-bookmark\"></i> Prix</th>
                        <th><i class=\"fa fa-bookmark\"></i> Date de parution</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 25
        echo twig_include($this->env, $context, "messages.html.twig");
        echo "
                    <!-- formulaire pour ajouter un nouveau Jeu-->
                    <tr>
                        <form action=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeux_ajouter");
        echo "\" method=\"post\">
                            <td>
                                <input type=\"text\" id=\"txtRefJeu\" name=\"txtRefJeu\" size=\"24\" required minlength=\"4\" maxlength=\"24\" placeholder=\"Nouvelle référence\" title=\"De 4 à 24 caractères\" />
                            </td>
                            <td>
                                ";
        // line 33
        list($context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]) =         [(isset($context["tbPlateforme"]) || array_key_exists("tbPlateforme", $context) ? $context["tbPlateforme"] : (function () { throw new RuntimeError('Variable "tbPlateforme" does not exist.', 33, $this->source); })()), "strIdPlateforme", 1, ""];
        // line 34
        echo "                                ";
        echo twig_include($this->env, $context, "liste.html.twig");
        echo "
                            </td>
                            <td>
                                ";
        // line 37
        list($context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]) =         [(isset($context["tbPegi"]) || array_key_exists("tbPegi", $context) ? $context["tbPegi"] : (function () { throw new RuntimeError('Variable "tbPegi" does not exist.', 37, $this->source); })()), "strIdPegi", 1, 0];
        // line 38
        echo "                                       ";
        echo twig_include($this->env, $context, "liste.html.twig");
        echo "
                            </td>
                            <td>
                                ";
        // line 41
        list($context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]) =         [(isset($context["tbGenre"]) || array_key_exists("tbGenre", $context) ? $context["tbGenre"] : (function () { throw new RuntimeError('Variable "tbGenre" does not exist.', 41, $this->source); })()), "strIdGenre", 1, 0];
        // line 42
        echo "                                    ";
        echo twig_include($this->env, $context, "liste.html.twig");
        echo "
                            </td>
                            <td>
                                ";
        // line 45
        list($context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]) =         [(isset($context["tbMarque"]) || array_key_exists("tbMarque", $context) ? $context["tbMarque"] : (function () { throw new RuntimeError('Variable "tbMarque" does not exist.', 45, $this->source); })()), "strIdMarque", 1, 0];
        // line 46
        echo "                                    ";
        echo twig_include($this->env, $context, "liste.html.twig");
        echo "
                            </td>
                            <td>
                                <input type=\"text\" id=\"txtNomJeu\" name=\"txtNomJeu\" size=\"24\" required minlength=\"4\" maxlength=\"24\" placeholder=\"Nom\" title=\"De 4 à 24 caractères\" />
                            </td>
                            <td>
                                <input type=\"number\" id=\"txtPrixJeu\" name=\"txtPrixJeu\" size=\"24\" step=\"any\" required placeholder=\"Prix\" title=\"De 4 à 24 caractères\" />
                            </td>
                            <td>
                                <input type=\"date\" id=\"dateParutionJeu\" name=\"dateParutionJeu\" size=\"24\" required minlength=\"4\" maxlength=\"24\" placeholder=\"Date de Parution\" title=\"De 4 à 24 caractères\" />
                            </td>
                            <td>
                                <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouveauJeu\" title=\"Enregistrer nouveau Jeu\" ><i class=\"fa fa-save\"></i></button>
                                <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
                            </td>
                        </form>
                    </tr>

                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tbJeux"]) || array_key_exists("tbJeux", $context) ? $context["tbJeux"] : (function () { throw new RuntimeError('Variable "tbJeux" does not exist.', 64, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["jeu"]) {
            // line 65
            echo "                        <tr>

                            <!-- formulaire pour modifier et supprimer les Jeux-->
                            <form method=\"post\">
                                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "refJeu", [], "any", false, false, false, 69), "html", null, true);
            echo "<input type=\"hidden\" id=\"txtRefJeu\" name=\"txtRefJeu\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "refJeu", [], "any", false, false, false, 69), "html", null, true);
            echo "\" /></td>
                                ";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, $context["jeu"], "refJeu", [], "any", false, false, false, 70) != (isset($context["idJeuxModif"]) || array_key_exists("idJeuxModif", $context) ? $context["idJeuxModif"] : (function () { throw new RuntimeError('Variable "idJeuxModif" does not exist.', 70, $this->source); })()))) {
                // line 71
                echo "                                    <td>
                                        ";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "libPlateforme", [], "any", false, false, false, 72), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "ageLimite", [], "any", false, false, false, 75), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "libGenre", [], "any", false, false, false, 78), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "nomMarque", [], "any", false, false, false, 81), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                    ";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "libelle", [], "any", false, false, false, 84), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "prix", [], "any", false, false, false, 87), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "dateParution", [], "any", false, false, false, 90), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 93
                if ((((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 93, $this->source); })()) != "rien") && (twig_get_attribute($this->env, $this->source, $context["jeu"], "refJeu", [], "any", false, false, false, 93) == (isset($context["idJeuxModif"]) || array_key_exists("idJeuxModif", $context) ? $context["idJeuxModif"] : (function () { throw new RuntimeError('Variable "idJeuxModif" does not exist.', 93, $this->source); })())))) {
                    // line 94
                    echo "                                        <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i>";
                    echo twig_escape_filter($this->env, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 94, $this->source); })()), "html", null, true);
                    echo "</button>
                                        ";
                }
                // line 96
                echo "                                        <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierJeu\" title=\"Modifier\" formaction=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeux_demandermodifier");
                echo "\"><i class=\"fa fa-pencil\" ></i></button>
                                        <button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerJeu\" title=\"Supprimer\" formaction=\"";
                // line 97
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeux_supprimer");
                echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce Jeu?');\"><i class=\"fa fa-trash-o \"></i></button>
                                    </td>
                                ";
            } else {
                // line 100
                echo "                                    <td>
                                    ";
                // line 101
                list($context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]) =                 [(isset($context["tbPlateforme"]) || array_key_exists("tbPlateforme", $context) ? $context["tbPlateforme"] : (function () { throw new RuntimeError('Variable "tbPlateforme" does not exist.', 101, $this->source); })()), "strIdPlateforme", 1, twig_get_attribute($this->env, $this->source, $context["jeu"], "idPlateforme", [], "any", false, false, false, 101)];
                // line 102
                echo "                                    ";
                echo twig_include($this->env, $context, "liste.html.twig");
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 105
                list($context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]) =                 [(isset($context["tbPegi"]) || array_key_exists("tbPegi", $context) ? $context["tbPegi"] : (function () { throw new RuntimeError('Variable "tbPegi" does not exist.', 105, $this->source); })()), "strIdPegi", 1, twig_get_attribute($this->env, $this->source, $context["jeu"], "idPegi", [], "any", false, false, false, 105)];
                // line 106
                echo "                                            ";
                echo twig_include($this->env, $context, "liste.html.twig");
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 109
                list($context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]) =                 [(isset($context["tbGenre"]) || array_key_exists("tbGenre", $context) ? $context["tbGenre"] : (function () { throw new RuntimeError('Variable "tbGenre" does not exist.', 109, $this->source); })()), "strIdGenre", 0, twig_get_attribute($this->env, $this->source, $context["jeu"], "idGenre", [], "any", false, false, false, 109)];
                // line 110
                echo "                                            ";
                echo twig_include($this->env, $context, "liste.html.twig");
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 113
                list($context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]) =                 [(isset($context["tbMarque"]) || array_key_exists("tbMarque", $context) ? $context["tbMarque"] : (function () { throw new RuntimeError('Variable "tbMarque" does not exist.', 113, $this->source); })()), "strIdMarque", 0, twig_get_attribute($this->env, $this->source, $context["jeu"], "idMarque", [], "any", false, false, false, 113)];
                // line 114
                echo "                                            ";
                echo twig_include($this->env, $context, "liste.html.twig");
                echo "
                                    </td>
                                    <td>
                                        <input type=\"text\" id=\"txtNomJeu\" name=\"txtNomJeu\" size=\"24\" required minlength=\"4\" maxlength=\"24\" value=\"";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "libelle", [], "any", false, false, false, 117), "html", null, true);
                echo "\" />
                                    </td>
                                    <td>
                                        <input type=\"number\" id=\"txtPrix\" name=\"txtPrixJeu\" size=\"24\" required step=\"any\" value=\"";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "prix", [], "any", false, false, false, 120), "html", null, true);
                echo "\" />
                                    </td>
                                    <td>
                                        <input type=\"date\" id=\"dateParutionJeu\" name=\"dateParutionJeu\" size=\"24\" required minlength=\"4\" maxlength=\"24\" value=\"";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "dateParution", [], "any", false, false, false, 123), "html", null, true);
                echo "\" />
                                    </td>
                                    <td>
                                        <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierJeu\" title=\"Enregistrer\" formaction=\"";
                // line 126
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeux_validermodifier");
                echo "\"><i class=\"fa fa-save\"></i></button>
                                        <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
                                        <button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierJeu\" title=\"Annuler\" formaction=\"";
                // line 128
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeux_afficher");
                echo "\"><i class=\"fa fa-undo\"></i></button>
                                    </td>
                               ";
            }
            // line 131
            echo "                            </form>

                        </tr>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                </tbody>
            </table>

        </div><!-- fin div panel-body-->
    </section><!-- fin section Jeux-->
</div>
<!--fin div col-sm-6-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "lesJeux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 135,  320 => 131,  314 => 128,  309 => 126,  303 => 123,  297 => 120,  291 => 117,  284 => 114,  282 => 113,  275 => 110,  273 => 109,  266 => 106,  264 => 105,  257 => 102,  255 => 101,  252 => 100,  246 => 97,  241 => 96,  235 => 94,  233 => 93,  227 => 90,  221 => 87,  215 => 84,  209 => 81,  203 => 78,  197 => 75,  191 => 72,  188 => 71,  186 => 70,  180 => 69,  174 => 65,  157 => 64,  135 => 46,  133 => 45,  126 => 42,  124 => 41,  117 => 38,  115 => 37,  108 => 34,  106 => 33,  98 => 28,  92 => 25,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\"%}
{% block central %}
<!-- page start-->
<div class=\"col-sm-auto\">
    <section class=\"panel\">
        <div class=\"chat-room-head\">
            <h3><i class=\"fa fa-angle-right\"></i> Gérer les Jeux</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-striped table-advance table-hover\">
                <thead>
                    <tr class=\"tableau-entete\">
                        <th><i class=\"fa fa-bullhorn\"></i> Reférence</th>
                        <th><i class=\"fa fa-bookmark\"></i> Plateforme</th>
                        <th><i class=\"fa fa-bookmark\"></i> Pegi</th>
                        <th><i class=\"fa fa-bookmark\"></i> Genre</th>
                        <th><i class=\"fa fa-bookmark\"></i> Marque</th>
                        <th><i class=\"fa fa-bookmark\"></i> Nom</th>
                        <th><i class=\"fa fa-bookmark\"></i> Prix</th>
                        <th><i class=\"fa fa-bookmark\"></i> Date de parution</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                {{include ('messages.html.twig')}}
                    <!-- formulaire pour ajouter un nouveau Jeu-->
                    <tr>
                        <form action=\"{{path('jeux_ajouter')}}\" method=\"post\">
                            <td>
                                <input type=\"text\" id=\"txtRefJeu\" name=\"txtRefJeu\" size=\"24\" required minlength=\"4\" maxlength=\"24\" placeholder=\"Nouvelle référence\" title=\"De 4 à 24 caractères\" />
                            </td>
                            <td>
                                {% set tbObjets, name, size, idSelect = tbPlateforme, 'strIdPlateforme', 1, '' %}
                                {{include('liste.html.twig')}}
                            </td>
                            <td>
                                {% set tbObjets, name, size, idSelect = tbPegi, 'strIdPegi', 1, 0 %}
                                       {{ include('liste.html.twig') }}
                            </td>
                            <td>
                                {% set tbObjets, name, size, idSelect = tbGenre, 'strIdGenre', 1, 0 %}
                                    {{ include('liste.html.twig') }}
                            </td>
                            <td>
                                {% set tbObjets, name, size, idSelect = tbMarque, 'strIdMarque', 1, 0 %}
                                    {{ include('liste.html.twig') }}
                            </td>
                            <td>
                                <input type=\"text\" id=\"txtNomJeu\" name=\"txtNomJeu\" size=\"24\" required minlength=\"4\" maxlength=\"24\" placeholder=\"Nom\" title=\"De 4 à 24 caractères\" />
                            </td>
                            <td>
                                <input type=\"number\" id=\"txtPrixJeu\" name=\"txtPrixJeu\" size=\"24\" step=\"any\" required placeholder=\"Prix\" title=\"De 4 à 24 caractères\" />
                            </td>
                            <td>
                                <input type=\"date\" id=\"dateParutionJeu\" name=\"dateParutionJeu\" size=\"24\" required minlength=\"4\" maxlength=\"24\" placeholder=\"Date de Parution\" title=\"De 4 à 24 caractères\" />
                            </td>
                            <td>
                                <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouveauJeu\" title=\"Enregistrer nouveau Jeu\" ><i class=\"fa fa-save\"></i></button>
                                <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
                            </td>
                        </form>
                    </tr>

                    {% for key, jeu in tbJeux %}
                        <tr>

                            <!-- formulaire pour modifier et supprimer les Jeux-->
                            <form method=\"post\">
                                <td>{{ jeu.refJeu }}<input type=\"hidden\" id=\"txtRefJeu\" name=\"txtRefJeu\" value=\"{{ jeu.refJeu }}\" /></td>
                                {% if jeu.refJeu != idJeuxModif %}
                                    <td>
                                        {{ jeu.libPlateforme }}
                                    </td>
                                    <td>
                                        {{ jeu.ageLimite }}
                                    </td>
                                    <td>
                                        {{ jeu.libGenre }}
                                    </td>
                                    <td>
                                        {{ jeu.nomMarque }}
                                    </td>
                                    <td>
                                    {{ jeu.libelle }}
                                    </td>
                                    <td>
                                        {{ jeu.prix }}
                                    </td>
                                    <td>
                                        {{ jeu.dateParution }}
                                    </td>
                                    <td>
                                        {% if notification != 'rien' and jeu.refJeu == idJeuxModif %}
                                        <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i>{{ notification }}</button>
                                        {% endif %}
                                        <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierJeu\" title=\"Modifier\" formaction=\"{{path('jeux_demandermodifier')}}\"><i class=\"fa fa-pencil\" ></i></button>
                                        <button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerJeu\" title=\"Supprimer\" formaction=\"{{path('jeux_supprimer')}}\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce Jeu?');\"><i class=\"fa fa-trash-o \"></i></button>
                                    </td>
                                {% else %}
                                    <td>
                                    {% set tbObjets, name, size, idSelect = tbPlateforme, 'strIdPlateforme', 1, jeu.idPlateforme %}
                                    {{include('liste.html.twig')}}
                                    </td>
                                    <td>
                                        {% set tbObjets, name, size, idSelect = tbPegi, 'strIdPegi',1, jeu.idPegi %}
                                            {{ include('liste.html.twig') }}
                                    </td>
                                    <td>
                                        {% set tbObjets, name, size, idSelect = tbGenre, 'strIdGenre', 0, jeu.idGenre %}
                                            {{ include('liste.html.twig') }}
                                    </td>
                                    <td>
                                        {% set tbObjets, name, size, idSelect = tbMarque, 'strIdMarque', 0, jeu.idMarque %}
                                            {{ include('liste.html.twig') }}
                                    </td>
                                    <td>
                                        <input type=\"text\" id=\"txtNomJeu\" name=\"txtNomJeu\" size=\"24\" required minlength=\"4\" maxlength=\"24\" value=\"{{jeu.libelle}}\" />
                                    </td>
                                    <td>
                                        <input type=\"number\" id=\"txtPrix\" name=\"txtPrixJeu\" size=\"24\" required step=\"any\" value=\"{{jeu.prix}}\" />
                                    </td>
                                    <td>
                                        <input type=\"date\" id=\"dateParutionJeu\" name=\"dateParutionJeu\" size=\"24\" required minlength=\"4\" maxlength=\"24\" value=\"{{jeu.dateParution}}\" />
                                    </td>
                                    <td>
                                        <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierJeu\" title=\"Enregistrer\" formaction=\"{{path('jeux_validermodifier')}}\"><i class=\"fa fa-save\"></i></button>
                                        <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
                                        <button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierJeu\" title=\"Annuler\" formaction=\"{{path('jeux_afficher')}}\"><i class=\"fa fa-undo\"></i></button>
                                    </td>
                               {% endif %}
                            </form>

                        </tr>
                            {% endfor %}
                </tbody>
            </table>

        </div><!-- fin div panel-body-->
    </section><!-- fin section Jeux-->
</div>
<!--fin div col-sm-6-->
{% endblock %}", "lesJeux.html.twig", "C:\\wamp64\\www\\AgoraBoS\\templates\\lesJeux.html.twig");
    }
}
