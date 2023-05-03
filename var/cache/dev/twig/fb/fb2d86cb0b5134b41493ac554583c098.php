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

/* liste.html.twig */
class __TwigTemplate_c415027ab35840961dfa576a4b4cdb24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste.html.twig"));

        // line 1
        echo "  <select name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" size=\"";
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" >
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tbObjets"]) || array_key_exists("tbObjets", $context) ? $context["tbObjets"] : (function () { throw new RuntimeError('Variable "tbObjets" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["objet"]) {
            // line 3
            echo "        ";
            // line 4
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["objet"], "identifiant", [], "any", false, false, false, 4) != (isset($context["idSelect"]) || array_key_exists("idSelect", $context) ? $context["idSelect"] : (function () { throw new RuntimeError('Variable "idSelect" does not exist.', 4, $this->source); })()))) {
                // line 5
                echo "        ";
                // line 6
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet"], "identifiant", [], "any", false, false, false, 6), "html", null, true);
                echo "\">
                    ";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet"], "libelle", [], "any", false, false, false, 7), "html", null, true);
                echo "</option>
        ";
            } else {
                // line 9
                echo "           <option selected value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet"], "identifiant", [], "any", false, false, false, 9), "html", null, true);
                echo "\">
                    ";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["objet"], "libelle", [], "any", false, false, false, 10), "html", null, true);
                echo "</option>
        ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['objet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</select>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 13,  83 => 12,  78 => 10,  73 => 9,  68 => 7,  63 => 6,  61 => 5,  58 => 4,  56 => 3,  52 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <select name=\"{{name}}\" id=\"{{ name }}\" size=\"{{ size }}\" >
    {% for key, objet in tbObjets %}
        {#  l'élément en paramètre est présélectionné #}
        {% if objet.identifiant != idSelect %}
        {# si l'identifiant de l'objet n'est pas l'identifiant présélectionné #}
            <option value=\"{{ objet.identifiant }}\">
                    {{ objet.libelle }}</option>
        {% else %}
           <option selected value=\"{{ objet.identifiant }}\">
                    {{ objet.libelle }}</option>
        {% endif %}
    {% endfor %}
</select>
", "liste.html.twig", "/Applications/MAMP/htdocs/École/Symfony/AgoraBoS2/templates/liste.html.twig");
    }
}
