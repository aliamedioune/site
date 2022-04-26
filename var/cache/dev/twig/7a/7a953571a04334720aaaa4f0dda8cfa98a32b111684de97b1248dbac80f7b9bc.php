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

/* security/adminlogin.html.twig */
class __TwigTemplate_1a97f9bc9f8c849de3cdfda750f4a41ce4d5e2425766c912e45da6e9f472161a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/adminlogin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/adminlogin.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/style7.css\" rel=\"stylesheet\">
";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<h1>Authentification</h1>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"container\" id=\"container\">
\t<div class=\"form-container sign-up-container\">
\t\t
\t</div>
\t<div class=\"form-container sign-in-container\">
\t\t<form method=\"post\" action=\"/login\">
\t\t\t";
        // line 15
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "messageKey", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "messageData", [], "any", false, false, false, 16), "security"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 18
        echo "
\t\t\t";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "username", [], "any", false, false, false, 21), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 24
            echo "\t\t\t\tVous n'étes pas connecté
\t\t\t";
        }
        // line 26
        echo "\t\t\t<h1>S'identifier</h1>
\t\t\t
\t\t\t<span> ou Bien </span>
\t\t\t<input placeholder=\"Ecrire votre Email\" type=\"email\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t<input placeholder=\"Votre mot de passe\" type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

\t\t\t<input type=\"hidden\" name=\"_csrf_token\"
\t\t\t\t   value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
\t\t\t>
\t\t\t";
        // line 45
        echo "\t\t\t<button type=\"submit\">S'identifier</button>
\t\t</form>
\t</div>
\t<div class=\"overlay-container\">
\t\t<div class=\"overlay\">
\t\t\t<div class=\"overlay-panel overlay-left\">
\t\t\t\t<h1> BienVenue!</h1>
\t\t\t\t<p>Pour rester connecté avec nous, veuillez vous inscripter avec vos informations personnelles</p>
\t\t\t\t<button class=\"ghost\" id=\"signIn\">Sign In</button>
\t\t\t</div>
\t\t\t<div class=\"overlay-panel overlay-right\">
\t\t\t\t<h1>❤️ BONJOUR ❤️</h1>
\t\t\t\t<p>Entrez vos informations personnelles et commencez votre voyage avec nous</p>
\t\t\t\t<a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"ghost\" id=\"signUp\" style='color:white; border:solid 1 px white; border-raduis:25%'>S'inscrire</a>
\t\t\t\t<strong><a href=\"/\" class=\"ghost\" id=\"signUp\" style='color:white; font-size:27px  border:solid 1 px white; border-raduis:25%'>Accueil</a></strong>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/adminlogin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  186 => 58,  171 => 45,  166 => 33,  159 => 29,  154 => 26,  150 => 24,  142 => 21,  139 => 20,  137 => 19,  134 => 18,  128 => 16,  126 => 15,  118 => 9,  108 => 8,  80 => 5,  75 => 4,  65 => 3,  55 => 8,  52 => 7,  50 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block head %}
<link href=\"{{asset('assets')}}/css/style7.css\" rel=\"stylesheet\">
{% block title %}<h1>Authentification</h1>{% endblock %}
{% endblock %}

{% block body %}
<div class=\"container\" id=\"container\">
\t<div class=\"form-container sign-up-container\">
\t\t
\t</div>
\t<div class=\"form-container sign-in-container\">
\t\t<form method=\"post\" action=\"/login\">
\t\t\t{% if error %}
\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t{% endif %}

\t\t\t{% if app.user %}
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Deconnexion</a>
\t\t\t\t</div>
\t\t\t{% else  %}
\t\t\t\tVous n'étes pas connecté
\t\t\t{% endif %}
\t\t\t<h1>S'identifier</h1>
\t\t\t
\t\t\t<span> ou Bien </span>
\t\t\t<input placeholder=\"Ecrire votre Email\" type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t<input placeholder=\"Votre mot de passe\" type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

\t\t\t<input type=\"hidden\" name=\"_csrf_token\"
\t\t\t\t   value=\"{{ csrf_token('authenticate') }}\"
\t\t\t>
\t\t\t{#
\t\t\t\tUncomment this section and add a remember_me option below your firewall to activate remember me functionality.
\t\t\t\tSee https://symfony.com/doc/current/security/remember_me.html

\t\t\t\t<div class=\"checkbox mb-3\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\">Souviens-toi de moi
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t#}
\t\t\t<button type=\"submit\">S'identifier</button>
\t\t</form>
\t</div>
\t<div class=\"overlay-container\">
\t\t<div class=\"overlay\">
\t\t\t<div class=\"overlay-panel overlay-left\">
\t\t\t\t<h1> BienVenue!</h1>
\t\t\t\t<p>Pour rester connecté avec nous, veuillez vous inscripter avec vos informations personnelles</p>
\t\t\t\t<button class=\"ghost\" id=\"signIn\">Sign In</button>
\t\t\t</div>
\t\t\t<div class=\"overlay-panel overlay-right\">
\t\t\t\t<h1>❤️ BONJOUR ❤️</h1>
\t\t\t\t<p>Entrez vos informations personnelles et commencez votre voyage avec nous</p>
\t\t\t\t<a href=\"{{path('app_register')}}\" class=\"ghost\" id=\"signUp\" style='color:white; border:solid 1 px white; border-raduis:25%'>S'inscrire</a>
\t\t\t\t<strong><a href=\"/\" class=\"ghost\" id=\"signUp\" style='color:white; font-size:27px  border:solid 1 px white; border-raduis:25%'>Accueil</a></strong>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>

{% endblock %}
", "security/adminlogin.html.twig", "/Applications/MAMP/htdocs/site-atypikhouse salma/templates/security/adminlogin.html.twig");
    }
}
