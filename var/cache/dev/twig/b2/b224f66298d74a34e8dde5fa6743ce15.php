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

/* menu.html.twig */
class __TwigTemplate_b17d6ed3adcc27929f6f04842760c7e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id=\"sidebar\" class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\" id=\"nav-accordion\">
          <p class=\"centered\"><a href=\"profile.html\"><img src=\"assets/img/greece-3348294_1280.jpg\" class=\"img-circle\" width=\"80\"></a></p>
          <h5 class=\"centered\">MJC Agora</h5>

          <li class=\"sub-menu\">
            <!--<?php if (isset(\$menuActif) && \$menuActif == 'Jeux') {echo 'class=\"active\"';} ?> -->
            <a
              ";
        // line 15
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 15, $this->source); })()) == "Jeux"))) {
            echo " class=\"active\"  ";
        }
        // line 16
        echo "              href=\"index.php\" ><i class=\"fa fa-desktop\"></i>
              <span>Jeux vidéos</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeux_afficher");
        echo "\">Jeux</a></li>
              <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres_afficher");
        echo "\">Genres</a></li>
              <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateformes_afficher");
        echo "\">Plateformes</a></li>
              <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marques_afficher");
        echo "\">Marques</a></li>
              <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pegis_afficher");
        echo "\">Pegi</a></li>
           <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipements_afficher");
        echo "\">Equipements</a></li>
            </ul>
          </li>
        <li class=\"sub-menu\">
            <a
              ";
        // line 30
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 30, $this->source); })()) == "Clubs"))) {
            echo " class=\"active\"  ";
        }
        // line 31
        echo "              href=\"javascript:;\">
              <i class=\"fa fa-group\"></i>
              <span>Clubs d'activités</span>
              </a>
            <ul class=\"sub\">
            <li><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 1</a></li>
              <li><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 2</a></li>
              <li><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 3</a></li>
              <li><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 4</a></li>
           <li><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 5</a></li>

            </ul>
          </li>
        
          <li class=\"sub-menu\">
            <a
              ";
        // line 47
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 47, $this->source); })()) == "Formations"))) {
            echo " class=\"active\"  ";
        }
        // line 48
        echo "              href=\"javascript:;\">
              <i class=\"fa fa-th\"></i>
              <span>Formations</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 1</a></li>
              <li><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 2</a></li>
              <li><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 3</a></li>
              <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 4</a></li>
           <li><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 5</a></li>
            </ul>
          </li>
          <li class=\"sub-menu\">
            <a
              ";
        // line 62
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 62, $this->source); })()) == "Membres"))) {
            echo " class=\"active\"  ";
        }
        // line 63
        echo "              href=\"javascript:;\">
              <i class=\"fa fa-user-md\"></i>
              <span>Membres</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 1</a></li>
              <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 2</a></li>
              <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 3</a></li>
              <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 4</a></li>
           <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 5</a></li>
            </ul>
          </li>
        
          <li class=\"sub-menu\">
            <a
              ";
        // line 78
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 78, $this->source); })()) == "Intervenants"))) {
            echo " class=\"active\"  ";
        }
        // line 79
        echo "              href=\"javascript:;\">
              <i class=\"fa fa-smile-o\"></i>
              <span>Intervenants</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 1</a></li>
              <li><a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 2</a></li>
              <li><a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 3</a></li>
              <li><a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 4</a></li>
           <li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">sous-menu 5</a></li>

            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 88,  228 => 87,  224 => 86,  220 => 85,  216 => 84,  209 => 79,  205 => 78,  196 => 72,  192 => 71,  188 => 70,  184 => 69,  180 => 68,  173 => 63,  169 => 62,  161 => 57,  157 => 56,  153 => 55,  149 => 54,  145 => 53,  138 => 48,  134 => 47,  124 => 40,  120 => 39,  116 => 38,  112 => 37,  108 => 36,  101 => 31,  97 => 30,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id=\"sidebar\" class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\" id=\"nav-accordion\">
          <p class=\"centered\"><a href=\"profile.html\"><img src=\"assets/img/greece-3348294_1280.jpg\" class=\"img-circle\" width=\"80\"></a></p>
          <h5 class=\"centered\">MJC Agora</h5>

          <li class=\"sub-menu\">
            <!--<?php if (isset(\$menuActif) && \$menuActif == 'Jeux') {echo 'class=\"active\"';} ?> -->
            <a
              {% if menuActif is defined and menuActif == 'Jeux' %} class=\"active\"  {% endif %}
              href=\"index.php\" ><i class=\"fa fa-desktop\"></i>
              <span>Jeux vidéos</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"{{path('jeux_afficher')}}\">Jeux</a></li>
              <li><a href=\"{{path('genres_afficher')}}\">Genres</a></li>
              <li><a href=\"{{path('plateformes_afficher')}}\">Plateformes</a></li>
              <li><a href=\"{{path('marques_afficher')}}\">Marques</a></li>
              <li><a href=\"{{path('pegis_afficher')}}\">Pegi</a></li>
           <li><a href=\"{{path('equipements_afficher')}}\">Equipements</a></li>
            </ul>
          </li>
        <li class=\"sub-menu\">
            <a
              {% if menuActif is defined and menuActif == 'Clubs' %} class=\"active\"  {% endif %}
              href=\"javascript:;\">
              <i class=\"fa fa-group\"></i>
              <span>Clubs d'activités</span>
              </a>
            <ul class=\"sub\">
            <li><a href=\"{{path('accueil')}}\">sous-menu 1</a></li>
              <li><a href=\"{{path('accueil')}}\">sous-menu 2</a></li>
              <li><a href=\"{{path('accueil')}}\">sous-menu 3</a></li>
              <li><a href=\"{{path('accueil')}}\">sous-menu 4</a></li>
           <li><a href=\"{{path('accueil')}}\">sous-menu 5</a></li>

            </ul>
          </li>
        
          <li class=\"sub-menu\">
            <a
              {% if menuActif is defined and menuActif == 'Formations' %} class=\"active\"  {% endif %}
              href=\"javascript:;\">
              <i class=\"fa fa-th\"></i>
              <span>Formations</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"{{path('accueil')}}\">sous-menu 1</a></li>
              <li><a href=\"{{path('accueil')}}\">sous-menu 2</a></li>
              <li><a href=\"{{path('accueil')}}\">sous-menu 3</a></li>
              <li><a href=\"{{path('accueil')}}\">sous-menu 4</a></li>
           <li><a href=\"{{path('accueil')}}\">sous-menu 5</a></li>
            </ul>
          </li>
          <li class=\"sub-menu\">
            <a
              {% if menuActif is defined and menuActif == 'Membres' %} class=\"active\"  {% endif %}
              href=\"javascript:;\">
              <i class=\"fa fa-user-md\"></i>
              <span>Membres</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"{{path('accueil')}}\">sous-menu 1</a></li>
              <li><a href=\"{{path('accueil')}}\">sous-menu 2</a></li>
              <li><a href=\"{{path('accueil')}}\">sous-menu 3</a></li>
              <li><a href=\"{{path('accueil')}}\">sous-menu 4</a></li>
           <li><a href=\"{{path('accueil')}}\">sous-menu 5</a></li>
            </ul>
          </li>
        
          <li class=\"sub-menu\">
            <a
              {% if menuActif is defined and menuActif == 'Intervenants' %} class=\"active\"  {% endif %}
              href=\"javascript:;\">
              <i class=\"fa fa-smile-o\"></i>
              <span>Intervenants</span>
              </a>
            <ul class=\"sub\">
              <li><a href=\"{{path('accueil')}}\">sous-menu 1</a></li>
              <li><a href=\"{{path('accueil')}}\">sous-menu 2</a></li>
              <li><a href=\"{{path('accueil')}}\">sous-menu 3</a></li>
              <li><a href=\"{{path('accueil')}}\">sous-menu 4</a></li>
           <li><a href=\"{{path('accueil')}}\">sous-menu 5</a></li>

            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
{# {% endblock %}#}
", "menu.html.twig", "/Applications/MAMP/htdocs/École/Symfony/AgoraBoS2/templates/menu.html.twig");
    }
}
