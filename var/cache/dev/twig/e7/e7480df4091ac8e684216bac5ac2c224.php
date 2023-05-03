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

/* lesMarque.html.twig */
class __TwigTemplate_ac26eea6a3c3ddeb01b721f2368e2d01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesMarque.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesMarque.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lesMarque.html.twig", 1);
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
         <h3><i class=\"fa fa-angle-right\"></i> Gérer les marques</h3>
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

         <!-- formulaire pour ajouter une nouvelle marque-->
         <tr>
         <form action=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marques_ajouter");
        echo "\" method=\"post\">
            <td>Nouveau</td>
            <td>
               <input type=\"text\" id=\"txtLibMarque\" name=\"txtLibMarque\" size=\"24\" required minlength=\"4\"  maxlength=\"24\"  placeholder=\"Libellé\" title=\"De 4 à 24 caractères\"  />
            </td>
            <td>
               <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouvelleMarque\" title=\"Enregistrer nouveau genre\"><i class=\"fa fa-save\"></i></button>
               <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
            </td>
         </form>
         </tr>

         ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tbMarque"]) || array_key_exists("tbMarque", $context) ? $context["tbMarque"] : (function () { throw new RuntimeError('Variable "tbMarque" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["marque"]) {
            // line 37
            echo "           <tr>

            <!-- formulaire pour demander la modification et supprimer les marques-->
            <form method=\"post\">
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["marque"], "identifiant", [], "any", false, false, false, 41), "html", null, true);
            echo "<input type=\"hidden\"  name=\"txtIdMarque\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["marque"], "identifiant", [], "any", false, false, false, 41), "html", null, true);
            echo "\" /></td>
                    <td>
               ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["marque"], "identifiant", [], "any", false, false, false, 43) != (isset($context["idMarqueModif"]) || array_key_exists("idMarqueModif", $context) ? $context["idMarqueModif"] : (function () { throw new RuntimeError('Variable "idMarqueModif" does not exist.', 43, $this->source); })()))) {
                // line 44
                echo "                 ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["marque"], "libelle", [], "any", false, false, false, 44), "html", null, true);
                echo "
                  </td>
                  <td>
                     ";
                // line 47
                if ((((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 47, $this->source); })()) != "rien") && (twig_get_attribute($this->env, $this->source, $context["marque"], "identifiant", [], "any", false, false, false, 47) == (isset($context["idMarqueNotif"]) || array_key_exists("idMarqueNotif", $context) ? $context["idMarqueNotif"] : (function () { throw new RuntimeError('Variable "idMarqueNotif" does not exist.', 47, $this->source); })())))) {
                    // line 48
                    echo "                        <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i> ";
                    echo twig_escape_filter($this->env, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 48, $this->source); })()), "html", null, true);
                    echo "</button>
                     ";
                }
                // line 50
                echo "                     <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierMarque\" title=\"Modifier\" formaction=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marques_demandermodifier");
                echo "\"><i class=\"fa fa-pencil\"></i></button>
                     <button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerMarque\" title=\"Supprimer\" formaction=\"";
                // line 51
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marques_supprimer");
                echo "\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce genre ?');\"><i class=\"fa fa-trash-o \"></i></button>
                  </td>
               ";
            } else {
                // line 54
                echo "                  <input type=\"text\" id=\"txtLibMarque\" name=\"txtLibMarque\" size=\"24\" required minlength=\"4\"  maxlength=\"24\"   value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["marque"], "libelle", [], "any", false, false, false, 54), "html", null, true);
                echo "\" />
                  </td>
                  <td>
                     <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierMarque\" title=\"Enregistrer\" formaction=\"";
                // line 57
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marques_validermodifier");
                echo "\"><i class=\"fa fa-save\"></i></button>
                     <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
                     <button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierMarque\" title=\"Annuler\" formaction=\"";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marques_afficher");
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['marque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "         </tbody>
        </table>
              
      </div><!-- fin div panel-body-->
    </section><!-- fin section marques-->
</div><!--fin div col-sm-8-->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "lesMarque.html.twig";
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
         <h3><i class=\"fa fa-angle-right\"></i> Gérer les marques</h3>
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

         <!-- formulaire pour ajouter une nouvelle marque-->
         <tr>
         <form action=\"{{path('marques_ajouter')}}\" method=\"post\">
            <td>Nouveau</td>
            <td>
               <input type=\"text\" id=\"txtLibMarque\" name=\"txtLibMarque\" size=\"24\" required minlength=\"4\"  maxlength=\"24\"  placeholder=\"Libellé\" title=\"De 4 à 24 caractères\"  />
            </td>
            <td>
               <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouvelleMarque\" title=\"Enregistrer nouveau genre\"><i class=\"fa fa-save\"></i></button>
               <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
            </td>
         </form>
         </tr>

         {% for key, marque in tbMarque %}
           <tr>

            <!-- formulaire pour demander la modification et supprimer les marques-->
            <form method=\"post\">
                    <td>{{ marque.identifiant }}<input type=\"hidden\"  name=\"txtIdMarque\" value=\"{{ marque.identifiant }}\" /></td>
                    <td>
               {% if marque.identifiant != idMarqueModif %}
                 {{ marque.libelle }}
                  </td>
                  <td>
                     {% if notification != 'rien' and marque.identifiant == idMarqueNotif %}
                        <button class=\"btn btn-success btn-xs\"><i class=\"fa fa-check\"></i> {{ notification }}</button>
                     {% endif %}
                     <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierMarque\" title=\"Modifier\" formaction=\"{{path('marques_demandermodifier')}}\"><i class=\"fa fa-pencil\"></i></button>
                     <button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerMarque\" title=\"Supprimer\" formaction=\"{{path('marques_supprimer')}}\" onclick=\"return confirm('Voulez-vous vraiment supprimer ce genre ?');\"><i class=\"fa fa-trash-o \"></i></button>
                  </td>
               {% else %}
                  <input type=\"text\" id=\"txtLibMarque\" name=\"txtLibMarque\" size=\"24\" required minlength=\"4\"  maxlength=\"24\"   value=\"{{ marque.libelle }}\" />
                  </td>
                  <td>
                     <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierMarque\" title=\"Enregistrer\" formaction=\"{{path('marques_validermodifier')}}\"><i class=\"fa fa-save\"></i></button>
                     <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i></button>
                     <button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierMarque\" title=\"Annuler\" formaction=\"{{path('marques_afficher')}}\"><i class=\"fa fa-undo\"></i></button>
                  </td>
               {% endif %}

            </form>

           </tr>
         {% endfor %}
         </tbody>
        </table>
              
      </div><!-- fin div panel-body-->
    </section><!-- fin section marques-->
</div><!--fin div col-sm-8-->

{% endblock %}", "lesMarque.html.twig", "/Applications/MAMP/htdocs/École/Symfony/AgoraBoS2/templates/lesMarque.html.twig");
    }
}
