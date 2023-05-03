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

/* connexion.html.twig */
class __TwigTemplate_f4a5e21bbdb70067c8f661fb7b9b69c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "connexion.html.twig", 1);
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
        echo "<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id=\"login-page\">
    <div class=\"container connexion\">

      <form class=\"form-login\" method=\"post\" action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion_valider");
        echo "\">
        <h2 class=\"form-login-heading\">Identification utilisateur</h2>
        <div class=\"login-wrap\">
          ";
        // line 12
        echo twig_include($this->env, $context, "messages.html.twig");
        echo "
          <input type=\"text\" class=\"form-control\" name=\"txtLogin\" id=\"txtLogin\" placeholder=\"Login\" required autofocus />
          <br>
          <input type=\"password\" class=\"form-control\" name=\"txtMdp\" id=\"txtMdp\" placeholder=\"Mot de passe\" required />
          <div class=\"pull-right login-social-link\">
            <!--La version 5 du langage HTML a ajouté un nouveau type d'attribut, qui n'est pas interprété par le navigateur.
                Ce sont tous les attributs dont le nom commence par les lettres data.
                L'attribut data-toggle contient le type d'événement qui va être lié à un bouton
                data-toggle=modal /* Bouton qui ouvre une fenêtre modale  -->
            <a data-toggle=\"modal\" href=\"v_connexion.php#myModal\"> Mot de passe oublié ?</a>
            </div>
            <!-- l'événement onclick contient du code javascript pour hacher le mot de passe avec la fonction de hachage SHA512
                le résultat est stocké dans le champ caché   qui sera transmis au serveur
                document.getElementById('hdMdp').value         :  la valeur du champ caché  hdMdp
                document.getElementById('txtMdp').value        :  la valeur du champ saisi txtMdp
                                     qui est mise à ' ' avant transmission au serveur pour ne pas envoyer le mdp en clair
                hex_sha512 : fonction javascript de hachage sha512 avec retour du résultat en hexadecimal
             -->
            <button class=\"btn btn-theme btn-block\"  type=\"submit\" name=\"cmdAction\" value=\"validerConnexion\"
                  title=\"Se connecter\"  onclick=\"document.getElementById('hdMdp').value = hex_sha512(document.getElementById('txtMdp').value);document.getElementById('txtMdp').value = ' ';\">
              <i class=\"fa fa-lock\"></i> Se connecter</button>
            <!--  champ caché pour le mot de passe haché -->
            <input type=\"hidden\"  name=\"hdMdp\" id=\"hdMdp\" />
          <hr>
        </div>
      
        <!-- la fenêtre modale -->
        <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"myModal\" class=\"modal fade\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>  <!-- data-dismiss ferme les fenêtres modales-->
                <h4 class=\"modal-title\">Mot de passe oublié ?</h4>
              </div>
              <div class=\"modal-body\">
                <p>Entrez votre adresse mail pour réinitialiser votre mot de passe.</p>
                <input type=\"text\" name=\"txtEmail\" id=\"txtEmail\" placeholder=\"Email\" autocomplete=\"off\" class=\"form-control placeholder-no-fix\" />
              </div>
              <div class=\"modal-footer\">
                <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Cancel</button>
                <button class=\"btn btn-theme\" type=\"button\">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->

      </form>
    </div>
  </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 12,  76 => 9,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
 {% block central %}
<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id=\"login-page\">
    <div class=\"container connexion\">

      <form class=\"form-login\" method=\"post\" action=\"{{path('connexion_valider')}}\">
        <h2 class=\"form-login-heading\">Identification utilisateur</h2>
        <div class=\"login-wrap\">
          {{ include('messages.html.twig') }}
          <input type=\"text\" class=\"form-control\" name=\"txtLogin\" id=\"txtLogin\" placeholder=\"Login\" required autofocus />
          <br>
          <input type=\"password\" class=\"form-control\" name=\"txtMdp\" id=\"txtMdp\" placeholder=\"Mot de passe\" required />
          <div class=\"pull-right login-social-link\">
            <!--La version 5 du langage HTML a ajouté un nouveau type d'attribut, qui n'est pas interprété par le navigateur.
                Ce sont tous les attributs dont le nom commence par les lettres data.
                L'attribut data-toggle contient le type d'événement qui va être lié à un bouton
                data-toggle=modal /* Bouton qui ouvre une fenêtre modale  -->
            <a data-toggle=\"modal\" href=\"v_connexion.php#myModal\"> Mot de passe oublié ?</a>
            </div>
            <!-- l'événement onclick contient du code javascript pour hacher le mot de passe avec la fonction de hachage SHA512
                le résultat est stocké dans le champ caché   qui sera transmis au serveur
                document.getElementById('hdMdp').value         :  la valeur du champ caché  hdMdp
                document.getElementById('txtMdp').value        :  la valeur du champ saisi txtMdp
                                     qui est mise à ' ' avant transmission au serveur pour ne pas envoyer le mdp en clair
                hex_sha512 : fonction javascript de hachage sha512 avec retour du résultat en hexadecimal
             -->
            <button class=\"btn btn-theme btn-block\"  type=\"submit\" name=\"cmdAction\" value=\"validerConnexion\"
                  title=\"Se connecter\"  onclick=\"document.getElementById('hdMdp').value = hex_sha512(document.getElementById('txtMdp').value);document.getElementById('txtMdp').value = ' ';\">
              <i class=\"fa fa-lock\"></i> Se connecter</button>
            <!--  champ caché pour le mot de passe haché -->
            <input type=\"hidden\"  name=\"hdMdp\" id=\"hdMdp\" />
          <hr>
        </div>
      
        <!-- la fenêtre modale -->
        <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"myModal\" class=\"modal fade\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>  <!-- data-dismiss ferme les fenêtres modales-->
                <h4 class=\"modal-title\">Mot de passe oublié ?</h4>
              </div>
              <div class=\"modal-body\">
                <p>Entrez votre adresse mail pour réinitialiser votre mot de passe.</p>
                <input type=\"text\" name=\"txtEmail\" id=\"txtEmail\" placeholder=\"Email\" autocomplete=\"off\" class=\"form-control placeholder-no-fix\" />
              </div>
              <div class=\"modal-footer\">
                <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Cancel</button>
                <button class=\"btn btn-theme\" type=\"button\">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->

      </form>
    </div>
  </div>

{% endblock %}

", "connexion.html.twig", "C:\\wamp64\\www\\AgoraBoS\\templates\\connexion.html.twig");
    }
}
