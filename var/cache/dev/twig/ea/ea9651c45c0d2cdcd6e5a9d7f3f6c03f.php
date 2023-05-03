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

/* base.html.twig */
class __TwigTemplate_e34747f7dd406e9f6fd7f5502454b3f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'menu' => [$this, 'block_menu'],
            'central' => [$this, 'block_central'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"sio\">
\t\t<meta name=\"keyword\" content=\"MJC, Agora\">
\t\t<title>AgorA - Administration</title>
\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "\t\t<!-- =======================================================
\t\t    Template Name: Dashio
\t\t    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
\t\t    Author: TemplateMag.com
\t\t    License: https://templatemag.com/license/
\t\t  ======================================================= -->
\t</head>

\t<body>
\t\t<section id=\"container\">
\t\t\t<!-- **********************************************************************************************************************************************************
\t\t\t        TOP BAR CONTENT & NOTIFICATIONS
\t\t\t        *********************************************************************************************************************************************************** -->
\t\t\t<!--header start-->
\t\t\t\t<header class=\"header black-bg\"> <div class=\"sidebar-toggle-box\">
\t\t\t\t\t<div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
\t\t\t\t</div>
\t\t\t\t<!--logo start-->
\t\t\t\t<a href=\"index.php\" class=\"logo\">
\t\t\t\t\t<b>Ago<span>rA</span>
\t\t\t\t\t</b>
\t\t\t\t</a>
\t\t\t\t<!--logo end-->
\t\t\t\t<div class=\"top-menu\">
\t\t\t\t\t<ul class=\"nav pull-right top-menu\">
      ";
        // line 58
        echo "      ";
        // line 59
        echo "
\t\t\t\t\t\t";
        // line 60
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "has", [0 => "idUtilisateur"], "method", false, false, false, 60)) {
            // line 61
            echo "\t\t\t\t\t\t\t<a href=\"\" class=\"userAgo\">
\t\t\t\t\t\t\t\t";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "session", [], "any", false, false, false, 62), "get", [0 => "prenomUtilisateur"], "method", false, false, false, 62), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "session", [], "any", false, false, false, 63), "get", [0 => "nomUtilisateur"], "method", false, false, false, 63), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"logout\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
            echo "\">Se déconnecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
            // line 68
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"logout\" href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\">Se connecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 72
        echo "
\t\t\t\t\t\t<!-- pour rappel : version PHP <?php
\t\t\t\t\t\t           // Si aucun utilisateur connecté, on affiche la demande de connexionif (!isset(\$_SESSION['idUtilisateur'])){
\t\t\t\t\t\t               echo '<li><a class=\"logout\" href=\"index.php?uc=connexion&action=demanderConnexion\">Se connecter</a></li>';
\t\t\t\t\t\t           }
\t\t\t\t\t\t           else {
\t\t\t\t\t\t               echo '<a href=\"\" class=\"userAgo\">'.\$_SESSION[\"prenomUtilisateur\"].' '.\$_SESSION[\"nomUtilisateur\"].'</a>';
\t\t\t\t\t\t               echo '<li><a class=\"logout\" href=\"index.php?uc=deconnexion&action=demanderDeconnexion\">Se déconnecter</a></li>';
\t\t\t\t\t\t           }
\t\t\t\t\t\t           ?>-->

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<!--header end-->

\t\t\t<!-- **********************************************************************************************************************************************************
\t\t\t           MAIN SIDEBAR MENU
\t\t\t         *********************************************************************************************************************************************************** -->
\t\t\t";
        // line 91
        $this->displayBlock('menu', $context, $blocks);
        // line 96
        echo "
\t\t\t<!-- **********************************************************************************************************************************************************
\t\t\t     MAIN CONTENT
\t\t\t     *********************************************************************************************************************************************************** -->
\t\t\t<section id=\"main-content\">
\t\t\t\t<section class=\"wrapper\"> ";
        // line 101
        $this->displayBlock('central', $context, $blocks);
        // line 102
        echo "
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<!-- /MAIN CONTENT -->
\t\t\t\t<!--main content end-->

\t\t\t\t<!--footer start-->
\t\t\t\t\t<footer class=\"site-footer\"> <div class=\"text-center\">
\t\t\t\t\t\t<p>Crée par Logma avec le template bootstrap Dashio :
\t\t\t\t\t\t\t        &copy; Copyrights
\t\t\t\t\t\t\t<strong>Dashio</strong>. All Rights Reserved
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"credits\">
\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t          You are NOT allowed to delete the credit link to TemplateMag with free version.
\t\t\t\t\t\t\t          You can delete the credit link only if you bought the pro version.
\t\t\t\t\t\t\t          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
\t\t\t\t\t\t\t          Licensing information: https://templatemag.com/license/
\t\t\t\t\t\t\t        -->
\t\t\t\t\t\t\tCreated with Dashio template by
\t\t\t\t\t\t\t<a href=\"https://templatemag.com/\">TemplateMag</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"index.html#\" class=\"go-top\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t\t<!--footer end-->
\t\t\t</section>

\t\t\t<!-- js placed at the end of the document so the pages load faster -->
\t\t\t<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script> 
\t\t\t<!-- pour dérouler menu -->
\t\t\t<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script class=\"include\" type=\"text/javascript\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\"></script> 
\t\t\t<!-- pour dérouler menu -->
\t\t\t  <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script> 
\t\t\t<!-- pour dérouler menu -->

\t\t\t<!--common script for all pages-->
\t    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/common-scripts.js"), "html", null, true);
        echo "\"></script>

      <!--script pour le calendrier-->
      <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/calendar-conf-events.js"), "html", null, true);
        echo "\"></script>

      <!-- pour la connexion -->
      <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libAgora/sha512.js"), "html", null, true);
        echo "\"></script>


\t\t</body>

\t</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t\t<!-- Bootstrap core CSS -->
\t\t\t<!--la fonction asset permet de faire le lien avec les ressources -->
\t\t\t<link
\t\t\thref=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/> <!--external css-->
\t\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<link
\t\t\thref=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/fullcalendar/bootstrap-fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<!--external css  pour les dates dans la gestion des tournois-->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap-fileupload/bootstrap-fileupload.css"), "html", null, true);
        echo "\"/>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap-datepicker/css/datepicker.css"), "html", null, true);
        echo "\"/>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap-datepicker/css/datepicker.css"), "html", null, true);
        echo "\"/>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap-timepicker/compiled/timepicker.css"), "html", null, true);
        echo "\"/>
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap-datetimepicker/css/datetimepicker.css"), "html", null, true);
        echo "\"/>
\t\t\t<!-- Custom styles for this template -->
\t\t\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<!-- Style pour agora -->
\t\t\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styleAgora.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 92
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "session", [], "any", false, false, false, 92), "has", [0 => "idUtilisateur"], "method", false, false, false, 92)) {
            // line 93
            echo "\t\t\t\t\t";
            echo twig_include($this->env, $context, "menu.html.twig");
            echo "
\t\t\t\t";
        }
        // line 95
        echo "\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 101
    public function block_central($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 101,  336 => 95,  330 => 93,  327 => 92,  317 => 91,  305 => 30,  300 => 28,  295 => 26,  290 => 24,  285 => 22,  281 => 21,  277 => 20,  273 => 19,  268 => 17,  263 => 15,  259 => 14,  254 => 11,  244 => 10,  227 => 151,  221 => 148,  217 => 147,  213 => 146,  207 => 143,  200 => 139,  195 => 137,  191 => 136,  186 => 134,  152 => 102,  150 => 101,  143 => 96,  141 => 91,  120 => 72,  114 => 69,  111 => 68,  105 => 65,  100 => 63,  96 => 62,  93 => 61,  91 => 60,  88 => 59,  86 => 58,  59 => 32,  57 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"sio\">
\t\t<meta name=\"keyword\" content=\"MJC, Agora\">
\t\t<title>AgorA - Administration</title>
\t\t{% block stylesheets %}
\t\t\t<!-- Bootstrap core CSS -->
\t\t\t<!--la fonction asset permet de faire le lien avec les ressources -->
\t\t\t<link
\t\t\thref=\"{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\"/> <!--external css-->
\t\t\t<link href=\"{{ asset('assets/lib/font-awesome/css/font-awesome.css') }}\" rel=\"stylesheet\"/>
\t\t\t<link
\t\t\thref=\"{{ asset('assets/lib/fullcalendar/bootstrap-fullcalendar.css') }}\" rel=\"stylesheet\"/>
\t\t\t<!--external css  pour les dates dans la gestion des tournois-->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/lib/bootstrap-fileupload/bootstrap-fileupload.css') }}\"/>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/lib/bootstrap-datepicker/css/datepicker.css') }}\"/>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/lib/bootstrap-datepicker/css/datepicker.css')}}\"/>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/lib/bootstrap-timepicker/compiled/timepicker.css') }}\"/>
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/lib/bootstrap-datetimepicker/css/datetimepicker.css') }}\"/>
\t\t\t<!-- Custom styles for this template -->
\t\t\t<link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"{{ asset('assets/css/style-responsive.css') }}\" rel=\"stylesheet\">
\t\t\t<!-- Style pour agora -->
\t\t\t<link href=\"{{ asset('assets/css/styleAgora.css') }}\" rel=\"stylesheet\">
\t\t{% endblock %}
\t\t<!-- =======================================================
\t\t    Template Name: Dashio
\t\t    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
\t\t    Author: TemplateMag.com
\t\t    License: https://templatemag.com/license/
\t\t  ======================================================= -->
\t</head>

\t<body>
\t\t<section id=\"container\">
\t\t\t<!-- **********************************************************************************************************************************************************
\t\t\t        TOP BAR CONTENT & NOTIFICATIONS
\t\t\t        *********************************************************************************************************************************************************** -->
\t\t\t<!--header start-->
\t\t\t\t<header class=\"header black-bg\"> <div class=\"sidebar-toggle-box\">
\t\t\t\t\t<div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
\t\t\t\t</div>
\t\t\t\t<!--logo start-->
\t\t\t\t<a href=\"index.php\" class=\"logo\">
\t\t\t\t\t<b>Ago<span>rA</span>
\t\t\t\t\t</b>
\t\t\t\t</a>
\t\t\t\t<!--logo end-->
\t\t\t\t<div class=\"top-menu\">
\t\t\t\t\t<ul class=\"nav pull-right top-menu\">
      {#  app.session.has()           nouvelle syntaxe pour tester si une variable de session existe    #}
      {#  app.session.get()           nouvelle syntaxe pour récupérer la valeur d'une variable de session    #}

\t\t\t\t\t\t{% if (app.session.has('idUtilisateur') ) %}
\t\t\t\t\t\t\t<a href=\"\" class=\"userAgo\">
\t\t\t\t\t\t\t\t{{ app.session.get('prenomUtilisateur') }}
\t\t\t\t\t\t\t\t{{ app.session.get('nomUtilisateur') }}</a>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"logout\" href=\"{{ path('deconnexion') }}\">Se déconnecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"logout\" href=\"{{ path('accueil') }}\">Se connecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<!-- pour rappel : version PHP <?php
\t\t\t\t\t\t           // Si aucun utilisateur connecté, on affiche la demande de connexionif (!isset(\$_SESSION['idUtilisateur'])){
\t\t\t\t\t\t               echo '<li><a class=\"logout\" href=\"index.php?uc=connexion&action=demanderConnexion\">Se connecter</a></li>';
\t\t\t\t\t\t           }
\t\t\t\t\t\t           else {
\t\t\t\t\t\t               echo '<a href=\"\" class=\"userAgo\">'.\$_SESSION[\"prenomUtilisateur\"].' '.\$_SESSION[\"nomUtilisateur\"].'</a>';
\t\t\t\t\t\t               echo '<li><a class=\"logout\" href=\"index.php?uc=deconnexion&action=demanderDeconnexion\">Se déconnecter</a></li>';
\t\t\t\t\t\t           }
\t\t\t\t\t\t           ?>-->

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</header>
\t\t\t<!--header end-->

\t\t\t<!-- **********************************************************************************************************************************************************
\t\t\t           MAIN SIDEBAR MENU
\t\t\t         *********************************************************************************************************************************************************** -->
\t\t\t{% block menu %}
\t\t\t\t{% if (app.session.has('idUtilisateur') ) %}
\t\t\t\t\t{{ include('menu.html.twig') }}
\t\t\t\t{% endif %}
\t\t\t{% endblock %}

\t\t\t<!-- **********************************************************************************************************************************************************
\t\t\t     MAIN CONTENT
\t\t\t     *********************************************************************************************************************************************************** -->
\t\t\t<section id=\"main-content\">
\t\t\t\t<section class=\"wrapper\"> {% block central %}{% endblock %}

\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<!-- /MAIN CONTENT -->
\t\t\t\t<!--main content end-->

\t\t\t\t<!--footer start-->
\t\t\t\t\t<footer class=\"site-footer\"> <div class=\"text-center\">
\t\t\t\t\t\t<p>Crée par Logma avec le template bootstrap Dashio :
\t\t\t\t\t\t\t        &copy; Copyrights
\t\t\t\t\t\t\t<strong>Dashio</strong>. All Rights Reserved
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"credits\">
\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t          You are NOT allowed to delete the credit link to TemplateMag with free version.
\t\t\t\t\t\t\t          You can delete the credit link only if you bought the pro version.
\t\t\t\t\t\t\t          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
\t\t\t\t\t\t\t          Licensing information: https://templatemag.com/license/
\t\t\t\t\t\t\t        -->
\t\t\t\t\t\t\tCreated with Dashio template by
\t\t\t\t\t\t\t<a href=\"https://templatemag.com/\">TemplateMag</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"index.html#\" class=\"go-top\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t\t<!--footer end-->
\t\t\t</section>

\t\t\t<!-- js placed at the end of the document so the pages load faster -->
\t\t\t<script src=\"{{ asset('assets/lib/jquery/jquery.min.js') }}\"></script> 
\t\t\t<!-- pour dérouler menu -->
\t\t\t<script src=\"{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}\"></script>
      <script class=\"include\" type=\"text/javascript\" src=\"{{ asset('assets/lib/jquery.dcjqaccordion.2.7.js') }}\"></script> 
\t\t\t<!-- pour dérouler menu -->
\t\t\t  <script src=\"{{ asset('assets/lib/jquery.scrollTo.min.js') }}\"></script> 
\t\t\t<!-- pour dérouler menu -->

\t\t\t<!--common script for all pages-->
\t    <script src=\"{{ asset('assets/lib/common-scripts.js') }}\"></script>

      <!--script pour le calendrier-->
      <script src=\"{{ asset('assets/lib/jquery-ui-1.9.2.custom.min.js') }}\"></script>
      <script src=\"{{ asset('assets/lib/fullcalendar/fullcalendar.min.js') }}\"></script>
      <script src=\"{{ asset('assets/lib/calendar-conf-events.js') }}\"></script>

      <!-- pour la connexion -->
      <script src=\"{{ asset('assets/libAgora/sha512.js') }}\"></script>


\t\t</body>

\t</html>
", "base.html.twig", "C:\\wamp64\\www\\AgoraBoS\\templates\\base.html.twig");
    }
}
