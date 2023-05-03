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

/* lesPegis.html.twig */
class __TwigTemplate_8314a8ce63c36995a7ad9ee0f3f02c29 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesPegis.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesPegis.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lesPegis.html.twig", 1);
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
<div class=\"col-sm-6\">
\t<section class=\"panel\">
\t\t<div class=\"chat-room-head\">
\t\t\t<h3><i class=\"fa fa-angle-right\"></i> Gérer les Pegis</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<table class=\"table table-striped table-advance table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"tableau-entete\">
\t\t\t\t\t\t<th><i class=\"fa fa-bullhorn\"></i> Identifiant</th>
\t\t\t\t\t\t<th>Age Limite</th>
\t\t\t\t\t\t<th><i class=\"fa fa-bookmark\"></i> Déscription</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
                 ";
        // line 20
        echo twig_include($this->env, $context, "messages.html.twig");
        echo "
\t\t\t\t\t<!-- formulaire pour ajouter un nouveau Pegi-->
\t\t\t\t\t<tr>
\t\t\t\t\t\t<form action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pegis_ajouter");
        echo "\" method=\"post\">
\t\t\t\t\t\t\t<td>Nouveau</td>
                            <td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtAgePegi\" name=\"txtAgePegi\" size=\"24\" required minlength=\"1\" maxlength=\"3\" placeholder=\"Age Limite\" title=\"De 1 à 999 ans\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtLibPegi\" name=\"txtLibPegi\" size=\"24\" required minlength=\"1\" maxlength=\"24\" placeholder=\"Description\" title=\"De 4 à 24 caractères\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouveauPegi\" title=\"Enregistrer nouveau Pegi\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</form>
\t\t\t\t\t</tr>

\t\t\t\t\t ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tbPegis"]) || array_key_exists("tbPegis", $context) ? $context["tbPegis"] : (function () { throw new RuntimeError('Variable "tbPegis" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["pegi"]) {
            // line 40
            echo "\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t<!-- formulaire pour modifier et supprimer les Pegis-->
\t\t\t\t\t\t\t<form  method=\"post\">
\t\t\t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pegi"], "identifiant", [], "any", false, false, false, 44), "html", null, true);
            echo "<input type=\"hidden\" id=\"unIdPegi\" name=\"unIdPegi\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pegi"], "identifiant", [], "any", false, false, false, 44), "html", null, true);
            echo "\" /></td>
\t\t\t\t\t\t\t\t";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, $context["pegi"], "identifiant", [], "any", false, false, false, 45) != (isset($context["idPegiModif"]) || array_key_exists("idPegiModif", $context) ? $context["idPegiModif"] : (function () { throw new RuntimeError('Variable "idPegiModif" does not exist.', 45, $this->source); })()))) {
                // line 46
                echo "\t\t\t\t\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pegi"], "ageLimite", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pegi"], "descriptionPegi", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                // line 49
                if ((((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 49, $this->source); })()) != "rien") && (twig_get_attribute($this->env, $this->source, $context["pegi"], "identifiant", [], "any", false, false, false, 49) == (isset($context["idPegiModif"]) || array_key_exists("idPegiModif", $context) ? $context["idPegiModif"] : (function () { throw new RuntimeError('Variable "idPegiModif" does not exist.', 49, $this->source); })())))) {
                    // line 50
                    echo "\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i>' . \$notification . '</button>';
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierPegi\" title=\"Modifier\" formaction=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pegis_demandermodifier");
                echo "\"><i class=\"fa fa-pencil\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerPegi\" title=\"Supprimer\" formaction=\"";
                // line 53
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pegis_supprimer");
                echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce Pegi?');\"><i class=\"fa fa-trash-o \"></i></button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            } else {
                // line 56
                echo "\t\t\t\t\t\t\t\t\t<td>           
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtAgePegi\" name=\"txtAgePegi\" size=\"24\" required minlength=\"1\" maxlength=\"3\" placeholder=\"Age Limite\" title=\"De 1 à 999 ans\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td><input type=\"text\" id=\"txtLibPegi\" name=\"txtLibPegi\" size=\"24\" required minlength=\"1\" maxlength=\"24\" value=\"";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pegi"], "descriptionPegi", [], "any", false, false, false, 59), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierPegi\" title=\"Enregistrer\" formaction=\"";
                // line 62
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pegis_validermodifier");
                echo "\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierPegi\" title=\"Annuler\"  formaction=\"";
                // line 64
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pegis_afficher");
                echo "\"><i class=\"fa fa-undo\"></i></button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t  ";
            }
            // line 67
            echo "\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t</tr>
\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['pegi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t\t</tbody>
\t\t\t</table>

\t\t</div><!-- fin div panel-body-->
\t</section><!-- fin section Pegis-->
</div>
<!--fin div col-sm-6-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "lesPegis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 71,  179 => 67,  173 => 64,  168 => 62,  162 => 59,  157 => 56,  151 => 53,  146 => 52,  142 => 50,  140 => 49,  135 => 47,  130 => 46,  128 => 45,  122 => 44,  116 => 40,  112 => 39,  93 => 23,  87 => 20,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\"%}
{% block central %}
<!-- page start-->
<div class=\"col-sm-6\">
\t<section class=\"panel\">
\t\t<div class=\"chat-room-head\">
\t\t\t<h3><i class=\"fa fa-angle-right\"></i> Gérer les Pegis</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<table class=\"table table-striped table-advance table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"tableau-entete\">
\t\t\t\t\t\t<th><i class=\"fa fa-bullhorn\"></i> Identifiant</th>
\t\t\t\t\t\t<th>Age Limite</th>
\t\t\t\t\t\t<th><i class=\"fa fa-bookmark\"></i> Déscription</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
                 {{ include('messages.html.twig') }}
\t\t\t\t\t<!-- formulaire pour ajouter un nouveau Pegi-->
\t\t\t\t\t<tr>
\t\t\t\t\t\t<form action=\"{{path('pegis_ajouter')}}\" method=\"post\">
\t\t\t\t\t\t\t<td>Nouveau</td>
                            <td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtAgePegi\" name=\"txtAgePegi\" size=\"24\" required minlength=\"1\" maxlength=\"3\" placeholder=\"Age Limite\" title=\"De 1 à 999 ans\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtLibPegi\" name=\"txtLibPegi\" size=\"24\" required minlength=\"1\" maxlength=\"24\" placeholder=\"Description\" title=\"De 4 à 24 caractères\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouveauPegi\" title=\"Enregistrer nouveau Pegi\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</form>
\t\t\t\t\t</tr>

\t\t\t\t\t {% for key, pegi in tbPegis %}
\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t<!-- formulaire pour modifier et supprimer les Pegis-->
\t\t\t\t\t\t\t<form  method=\"post\">
\t\t\t\t\t\t\t\t<td>{{ pegi.identifiant }}<input type=\"hidden\" id=\"unIdPegi\" name=\"unIdPegi\" value=\"{{ pegi.identifiant }}\" /></td>
\t\t\t\t\t\t\t\t{% if pegi.identifiant != idPegiModif %}
\t\t\t\t\t\t\t\t\t<td>{{pegi.ageLimite}}</td>
\t\t\t\t\t\t\t\t\t<td>{{ pegi.descriptionPegi }}</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if notification != 'rien' and pegi.identifiant == idPegiModif %}
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i>' . \$notification . '</button>';
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierPegi\" title=\"Modifier\" formaction=\"{{path('pegis_demandermodifier')}}\"><i class=\"fa fa-pencil\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerPegi\" title=\"Supprimer\" formaction=\"{{path('pegis_supprimer')}}\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce Pegi?');\"><i class=\"fa fa-trash-o \"></i></button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<td>           
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtAgePegi\" name=\"txtAgePegi\" size=\"24\" required minlength=\"1\" maxlength=\"3\" placeholder=\"Age Limite\" title=\"De 1 à 999 ans\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td><input type=\"text\" id=\"txtLibPegi\" name=\"txtLibPegi\" size=\"24\" required minlength=\"1\" maxlength=\"24\" value=\"{{ pegi.descriptionPegi }}\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierPegi\" title=\"Enregistrer\" formaction=\"{{path('pegis_validermodifier')}}\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierPegi\" title=\"Annuler\"  formaction=\"{{path('pegis_afficher')}}\"><i class=\"fa fa-undo\"></i></button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t  {% endif %}
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t</tr>
\t\t\t\t\t  {% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>

\t\t</div><!-- fin div panel-body-->
\t</section><!-- fin section Pegis-->
</div>
<!--fin div col-sm-6-->
{% endblock %}", "lesPegis.html.twig", "/Applications/MAMP/htdocs/École/Symfony/AgoraBoS2/templates/lesPegis.html.twig");
    }
}
