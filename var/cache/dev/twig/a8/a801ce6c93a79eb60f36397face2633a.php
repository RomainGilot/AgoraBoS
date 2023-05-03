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

/* lesGenres.html.twig */
class __TwigTemplate_090b008fd79b2915bc69d6943ceb91ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesGenres.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesGenres.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lesGenres.html.twig", 1);
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
         <h3><i class=\"fa fa-angle-right\"></i> Gérer les genres</h3>
      </div>
      <div class=\"panel-body\">
         <table class=\"table table-striped table-advance table-hover\">
         <thead>
           <tr class=\"tableau-entete\">
            <th><i class=\"fa fa-bullhorn\"></i> Identifiant</th>
            <th><i class=\"fa fa-bookmark\"></i> Libellé</th>
            <th><i class=\"fa fa-bookmark\"></i> Spécialiste</th>
            <th><i class=\"fa fa-bookmark\"></i> Nombre jeux</th>
            <th></th>
           </tr>
         </thead>
         <tbody>
         ";
        // line 22
        echo twig_include($this->env, $context, "messages.html.twig");
        echo "

         <!-- formulaire pour ajouter un nouveau genre-->
         <tr>
         <form action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres_ajouter");
        echo "\" method=\"post\">
            <td>Nouveau</td>
            <td>
               <input type=\"text\" id=\"txtLibGenre\" name=\"txtLibGenre\" size=\"24\" required minlength=\"4\"  maxlength=\"24\"  placeholder=\"Libellé\" title=\"De 4 à 24 caractères\"  />
            </td>
            <td>
               ";
        // line 32
        list($context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]) =         [(isset($context["tbMembres"]) || array_key_exists("tbMembres", $context) ? $context["tbMembres"] : (function () { throw new RuntimeError('Variable "tbMembres" does not exist.', 32, $this->source); })()), "lstMembre", 1, ""];
        // line 33
        echo "               ";
        echo twig_include($this->env, $context, "liste.html.twig");
        echo "
            </td>
            <td>
               0
            </td>
            <td>
               <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouveauGenre\" title=\"Enregistrer nouveau genre\"><i class=\"fa fa-save\"></i></button>
               <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
            </td>
         </form>
         </tr>

         ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tbGenres"]) || array_key_exists("tbGenres", $context) ? $context["tbGenres"] : (function () { throw new RuntimeError('Variable "tbGenres" does not exist.', 45, $this->source); })()));
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
        foreach ($context['_seq'] as $context["key"] => $context["genre"]) {
            // line 46
            echo "           <tr>

            <!-- formulaire pour demander la modification et supprimer les genres-->
            <form method=\"post\">
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "identifiant", [], "any", false, false, false, 50), "html", null, true);
            echo "<input type=\"hidden\"  name=\"txtIdGenre\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "identifiant", [], "any", false, false, false, 50), "html", null, true);
            echo "\" /></td>
                    <td>
               ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, $context["genre"], "identifiant", [], "any", false, false, false, 52) != (isset($context["idGenreModif"]) || array_key_exists("idGenreModif", $context) ? $context["idGenreModif"] : (function () { throw new RuntimeError('Variable "idGenreModif" does not exist.', 52, $this->source); })()))) {
                // line 53
                echo "                 ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 53), "html", null, true);
                echo "
                  </td>
                  <td>
                     ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "nomSpecialiste", [], "any", false, false, false, 56), "html", null, true);
                echo "
                  </td>
                  <td>
                     ";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "nbJeux", [], "any", false, false, false, 59), "html", null, true);
                echo "
                  </td>
                  <td>
                     ";
                // line 62
                if ((((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 62, $this->source); })()) != "rien") && (twig_get_attribute($this->env, $this->source, $context["genre"], "identifiant", [], "any", false, false, false, 62) == (isset($context["idGenreNotif"]) || array_key_exists("idGenreNotif", $context) ? $context["idGenreNotif"] : (function () { throw new RuntimeError('Variable "idGenreNotif" does not exist.', 62, $this->source); })())))) {
                    // line 63
                    echo "                        <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i> ";
                    echo twig_escape_filter($this->env, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 63, $this->source); })()), "html", null, true);
                    echo "</button>
                     ";
                }
                // line 65
                echo "                     <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierGenre\" title=\"Modifier\" formaction=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres_demandermodifier");
                echo "\"><i class=\"fa fa-pencil\"></i></button>
                     <button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerGenre\" title=\"Supprimer\" formaction=\"";
                // line 66
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres_supprimer");
                echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce genre ?');\"><i class=\"fa fa-trash-o \"></i></button>
                  </td>
               ";
            } else {
                // line 69
                echo "                  <input type=\"text\" id=\"txtLibGenre\" name=\"txtLibGenre\" size=\"24\" required minlength=\"4\"  maxlength=\"24\"   value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 69), "html", null, true);
                echo "\" />
                  </td>
                  <td>
                     ";
                // line 72
                list($context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]) =                 [(isset($context["tbMembres"]) || array_key_exists("tbMembres", $context) ? $context["tbMembres"] : (function () { throw new RuntimeError('Variable "tbMembres" does not exist.', 72, $this->source); })()), "lstMembre", 1, twig_get_attribute($this->env, $this->source, $context["genre"], "idSpecialiste", [], "any", false, false, false, 72)];
                // line 73
                echo "                     ";
                echo twig_include($this->env, $context, "liste.html.twig");
                echo "
                  </td>
                  <td>
                     ";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "nbJeux", [], "any", false, false, false, 76), "html", null, true);
                echo "
                  </td>
                  <td>
                     <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierGenre\" title=\"Enregistrer\" formaction=\"";
                // line 79
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres_validermodifier");
                echo "\"><i class=\"fa fa-save\"></i></button>
                     <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
                     <button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierGenre\" title=\"Annuler\" formaction=\"";
                // line 81
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres_afficher");
                echo "\"><i class=\"fa fa-undo\"></i></button>
                  </td>
               ";
            }
            // line 84
            echo "
            </form>

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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "         </tbody>
        </table>
              
      </div><!-- fin div panel-body-->
    </section><!-- fin section genres-->
</div><!--fin div col-sm-8-->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "lesGenres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 89,  225 => 84,  219 => 81,  214 => 79,  208 => 76,  201 => 73,  199 => 72,  192 => 69,  186 => 66,  181 => 65,  175 => 63,  173 => 62,  167 => 59,  161 => 56,  154 => 53,  152 => 52,  145 => 50,  139 => 46,  122 => 45,  106 => 33,  104 => 32,  95 => 26,  88 => 22,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block central %}
<!-- page start-->
<div class=\"col-sm-8\">
   <section class=\"panel\">
      <div class=\"chat-room-head\">
         <h3><i class=\"fa fa-angle-right\"></i> Gérer les genres</h3>
      </div>
      <div class=\"panel-body\">
         <table class=\"table table-striped table-advance table-hover\">
         <thead>
           <tr class=\"tableau-entete\">
            <th><i class=\"fa fa-bullhorn\"></i> Identifiant</th>
            <th><i class=\"fa fa-bookmark\"></i> Libellé</th>
            <th><i class=\"fa fa-bookmark\"></i> Spécialiste</th>
            <th><i class=\"fa fa-bookmark\"></i> Nombre jeux</th>
            <th></th>
           </tr>
         </thead>
         <tbody>
         {{ include('messages.html.twig') }}

         <!-- formulaire pour ajouter un nouveau genre-->
         <tr>
         <form action=\"{{path('genres_ajouter')}}\" method=\"post\">
            <td>Nouveau</td>
            <td>
               <input type=\"text\" id=\"txtLibGenre\" name=\"txtLibGenre\" size=\"24\" required minlength=\"4\"  maxlength=\"24\"  placeholder=\"Libellé\" title=\"De 4 à 24 caractères\"  />
            </td>
            <td>
               {% set tbObjets, name, size, idSelect = tbMembres, 'lstMembre', 1, '' %}
               {{ include('liste.html.twig') }}
            </td>
            <td>
               0
            </td>
            <td>
               <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouveauGenre\" title=\"Enregistrer nouveau genre\"><i class=\"fa fa-save\"></i></button>
               <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
            </td>
         </form>
         </tr>

         {% for key, genre in tbGenres %}
           <tr>

            <!-- formulaire pour demander la modification et supprimer les genres-->
            <form method=\"post\">
                    <td>{{ genre.identifiant }}<input type=\"hidden\"  name=\"txtIdGenre\" value=\"{{ genre.identifiant }}\" /></td>
                    <td>
               {% if genre.identifiant != idGenreModif %}
                 {{ genre.libelle }}
                  </td>
                  <td>
                     {{ genre.nomSpecialiste }}
                  </td>
                  <td>
                     {{genre.nbJeux}}
                  </td>
                  <td>
                     {% if notification != 'rien' and genre.identifiant == idGenreNotif %}
                        <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i> {{ notification }}</button>
                     {% endif %}
                     <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierGenre\" title=\"Modifier\" formaction=\"{{path('genres_demandermodifier')}}\"><i class=\"fa fa-pencil\"></i></button>
                     <button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerGenre\" title=\"Supprimer\" formaction=\"{{path('genres_supprimer')}}\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce genre ?');\"><i class=\"fa fa-trash-o \"></i></button>
                  </td>
               {% else %}
                  <input type=\"text\" id=\"txtLibGenre\" name=\"txtLibGenre\" size=\"24\" required minlength=\"4\"  maxlength=\"24\"   value=\"{{ genre.libelle }}\" />
                  </td>
                  <td>
                     {% set tbObjets, name, size, idSelect = tbMembres, 'lstMembre', 1, genre.idSpecialiste %}
                     {{ include('liste.html.twig') }}
                  </td>
                  <td>
                     {{ genre.nbJeux }}
                  </td>
                  <td>
                     <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierGenre\" title=\"Enregistrer\" formaction=\"{{path('genres_validermodifier')}}\"><i class=\"fa fa-save\"></i></button>
                     <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
                     <button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierGenre\" title=\"Annuler\" formaction=\"{{path('genres_afficher')}}\"><i class=\"fa fa-undo\"></i></button>
                  </td>
               {% endif %}

            </form>

           </tr>
         {% endfor %}
         </tbody>
        </table>
              
      </div><!-- fin div panel-body-->
    </section><!-- fin section genres-->
</div><!--fin div col-sm-8-->

{% endblock %}", "lesGenres.html.twig", "C:\\wamp64\\www\\AgoraBoS\\templates\\lesGenres.html.twig");
    }
}
