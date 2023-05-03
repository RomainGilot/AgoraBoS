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

/* lesPlateformes.html.twig */
class __TwigTemplate_ca990070b397a6da8988a3b1d5db9e09 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesPlateformes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesPlateformes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lesPlateformes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_central($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        // line 4
        echo "<!-- page start-->
<div class=\"col-sm-8\">
   <section class=\"panel\">
      <div class=\"chat-room-head\">
         <h3><i class=\"fa fa-angle-right\"></i> Gérer les plateformes</h3>
      </div>
      <div class=\"panel-body\">
         <table class=\"table table-striped table-advance table-hover\">
         <thead>
           <tr class=\"tableau-entete\">
            <th><i class=\"fa fa-bullhorn\"></i> Identifiant</th>
            <th><i class=\"fa fa-bookmark\"></i> Libellé</th>
            <th></th>
           </tr>
         </thead>
         <tbody>
         ";
        // line 20
        echo twig_include($this->env, $context, "messages.html.twig");
        echo "

         <!-- formulaire pour ajouter une nouvelle plateforme-->
         <tr>
         <form action=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateformes_ajouter");
        echo "\" method=\"post\">
            <td>Nouveau</td>
            <td>
               <input type=\"text\" id=\"txtLibPlateforme\" name=\"txtLibPlateforme\" size=\"24\" required minlength=\"4\"  maxlength=\"24\"  placeholder=\"Libellé\" title=\"De 4 à 24 caractères\"  />
            </td>
            <td>
               <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouvellePlateforme\" title=\"Enregistrer nouvelle Plateforme\"><i class=\"fa fa-save\"></i></button>
               <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
            </td>
         </form>
         </tr>

         ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tbPlateforme"]) || array_key_exists("tbPlateforme", $context) ? $context["tbPlateforme"] : (function () { throw new RuntimeError('Variable "tbPlateforme" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["plateforme"]) {
            // line 37
            echo "           <tr>

            <!-- formulaire pour demander la modification et supprimer les plateformes-->
            <form method=\"post\">
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plateforme"], "identifiant", [], "any", false, false, false, 41), "html", null, true);
            echo "<input type=\"hidden\"  name=\"txtIdPlateforme\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plateforme"], "identifiant", [], "any", false, false, false, 41), "html", null, true);
            echo "\" /></td>
                    <td>
               ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["plateforme"], "identifiant", [], "any", false, false, false, 43) != (isset($context["idPlateformeModif"]) || array_key_exists("idPlateformeModif", $context) ? $context["idPlateformeModif"] : (function () { throw new RuntimeError('Variable "idPlateformeModif" does not exist.', 43, $this->source); })()))) {
                // line 44
                echo "                 ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plateforme"], "libelle", [], "any", false, false, false, 44), "html", null, true);
                echo "
                  </td>
                  <td>
                     ";
                // line 47
                if ((((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 47, $this->source); })()) != "rien") && (twig_get_attribute($this->env, $this->source, $context["plateforme"], "identifiant", [], "any", false, false, false, 47) == (isset($context["idPlateformeNotif"]) || array_key_exists("idPlateformeNotif", $context) ? $context["idPlateformeNotif"] : (function () { throw new RuntimeError('Variable "idPlateformeNotif" does not exist.', 47, $this->source); })())))) {
                    // line 48
                    echo "                        <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i> ";
                    echo twig_escape_filter($this->env, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 48, $this->source); })()), "html", null, true);
                    echo "</button>
                     ";
                }
                // line 50
                echo "                     <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierPlateforme\" title=\"Modifier\" formaction=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateformes_demandermodifier");
                echo "\"><i class=\"fa fa-pencil\"></i></button>
                     <button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerPlateforme\" title=\"Supprimer\" formaction=\"";
                // line 51
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateformes_supprimer");
                echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce genre ?');\"><i class=\"fa fa-trash-o \"></i></button>
                  </td>
               ";
            } else {
                // line 54
                echo "                  <input type=\"text\" id=\"txtLibPlateforme\" name=\"txtLibPlateforme\" size=\"24\" required minlength=\"4\"  maxlength=\"24\"   value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plateforme"], "libelle", [], "any", false, false, false, 54), "html", null, true);
                echo "\" />
                  </td>
                  <td>
                     <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierPlateforme\" title=\"Enregistrer\" formaction=\"";
                // line 57
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateformes_validermodifier");
                echo "\"><i class=\"fa fa-save\"></i></button>
                     <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
                     <button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierPlateforme\" title=\"Annuler\" formaction=\"";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateformes_afficher");
                echo "\"><i class=\"fa fa-undo\"></i></button>
                  </td>
               ";
            }
            // line 62
            echo "
            </form>

           </tr>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['plateforme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "         </tbody>
        </table>
              
      </div><!-- fin div panel-body-->
    </section><!-- fin section plateformes-->
</div><!--fin div col-sm-8-->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "lesPlateformes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 67,  171 => 62,  165 => 59,  160 => 57,  153 => 54,  147 => 51,  142 => 50,  136 => 48,  134 => 47,  127 => 44,  125 => 43,  118 => 41,  112 => 37,  108 => 36,  93 => 24,  86 => 20,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block central %}
<!-- page start-->
<div class=\"col-sm-8\">
   <section class=\"panel\">
      <div class=\"chat-room-head\">
         <h3><i class=\"fa fa-angle-right\"></i> Gérer les plateformes</h3>
      </div>
      <div class=\"panel-body\">
         <table class=\"table table-striped table-advance table-hover\">
         <thead>
           <tr class=\"tableau-entete\">
            <th><i class=\"fa fa-bullhorn\"></i> Identifiant</th>
            <th><i class=\"fa fa-bookmark\"></i> Libellé</th>
            <th></th>
           </tr>
         </thead>
         <tbody>
         {{ include('messages.html.twig') }}

         <!-- formulaire pour ajouter une nouvelle plateforme-->
         <tr>
         <form action=\"{{path('plateformes_ajouter')}}\" method=\"post\">
            <td>Nouveau</td>
            <td>
               <input type=\"text\" id=\"txtLibPlateforme\" name=\"txtLibPlateforme\" size=\"24\" required minlength=\"4\"  maxlength=\"24\"  placeholder=\"Libellé\" title=\"De 4 à 24 caractères\"  />
            </td>
            <td>
               <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouvellePlateforme\" title=\"Enregistrer nouvelle Plateforme\"><i class=\"fa fa-save\"></i></button>
               <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
            </td>
         </form>
         </tr>

         {% for key, plateforme in tbPlateforme %}
           <tr>

            <!-- formulaire pour demander la modification et supprimer les plateformes-->
            <form method=\"post\">
                    <td>{{ plateforme.identifiant }}<input type=\"hidden\"  name=\"txtIdPlateforme\" value=\"{{ plateforme.identifiant }}\" /></td>
                    <td>
               {% if plateforme.identifiant != idPlateformeModif %}
                 {{ plateforme.libelle }}
                  </td>
                  <td>
                     {% if notification != 'rien' and plateforme.identifiant == idPlateformeNotif %}
                        <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i> {{ notification }}</button>
                     {% endif %}
                     <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierPlateforme\" title=\"Modifier\" formaction=\"{{path('plateformes_demandermodifier')}}\"><i class=\"fa fa-pencil\"></i></button>
                     <button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerPlateforme\" title=\"Supprimer\" formaction=\"{{path('plateformes_supprimer')}}\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce genre ?');\"><i class=\"fa fa-trash-o \"></i></button>
                  </td>
               {% else %}
                  <input type=\"text\" id=\"txtLibPlateforme\" name=\"txtLibPlateforme\" size=\"24\" required minlength=\"4\"  maxlength=\"24\"   value=\"{{ plateforme.libelle }}\" />
                  </td>
                  <td>
                     <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierPlateforme\" title=\"Enregistrer\" formaction=\"{{path('plateformes_validermodifier')}}\"><i class=\"fa fa-save\"></i></button>
                     <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
                     <button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierPlateforme\" title=\"Annuler\" formaction=\"{{path('plateformes_afficher')}}\"><i class=\"fa fa-undo\"></i></button>
                  </td>
               {% endif %}

            </form>

           </tr>
         {% endfor %}
         </tbody>
        </table>
              
      </div><!-- fin div panel-body-->
    </section><!-- fin section plateformes-->
</div><!--fin div col-sm-8-->

{% endblock %}", "lesPlateformes.html.twig", "/Applications/MAMP/htdocs/École/Symfony/AgoraBoS2/templates/lesPlateformes.html.twig");
    }
}
