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

/* home/contact.html.twig */
class __TwigTemplate_dda23a988cf597e0bc0b8d53fbfd5b4b0012039b3f11ef09a373a4da97c140d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'keywords' => [$this, 'block_keywords'],
            'description' => [$this, 'block_description'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "homebase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contact | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 3, $this->source); })()), 0, [], "array", false, false, false, 3), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 4, $this->source); })()), 0, [], "array", false, false, false, 4), "keywords", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 5, $this->source); })()), 0, [], "array", false, false, false, 5), "description", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <!-- Subintro
================================================== -->
    <section id=\"subintro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span8\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"/\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                        <li><a href=\"/\">Accueil</a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">Contacter nous</li>
                    </ul>
                </div>
                <div class=\"span4\">
                    <div class=\"search\">
                        <form class=\"input-append\">
                            <input class=\"search-form\" id=\"appendedPrependedInput\" type=\"text\" placeholder=\"Recherche de ...\" />
                            <button class=\"btn btn-dark\" type=\"submit\">Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"maincontent\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"span5\">
                    <aside>

                        <h3>Formulaire de contact</h3>
                        ";
        // line 40
        echo twig_include($this->env, $context, "messages.html.twig");
        echo "

                        <form name=\"messages\"  method=\"post\" role=\"form\" class=\"contactForm\">
                            <div class=\"row\">
                                <div class=\"span4 form-group\">
                                    <input type=\"text\" id=\"messages_name\" name=\"messages[name]\" class=\"input-block-level\" placeholder=\"Saisir votre nom\" data-rule=\"minlen:4\" data-msg=\"Saisir au moins 4 caractères\" />
                                    <div class=\"validation\"></div>
                                </div>

                                <div class=\"span4 form-group\">
                                    <input type=\"email\" class=\"input-block-level\" id=\"messages_email\" name=\"messages[email]\" placeholder=\"Entrer votre adresse mail\" data-rule=\"email\" data-msg=\"Merci de saisir une addresse mail valide\" />
                                    <div class=\"validation\"></div>
                                </div>
                                <div class=\"span4 form-group\">
                                    <input type=\"text\" class=\"input-block-level\" id=\"messages_subject\" name=\"messages[subject]\" maxlength=\"75\" placeholder=\"Saisir l'objet de votre message\" data-rule=\"minlen:4\" data-msg=\"Saisir au moins 8 caractères pour l'objet de votre message\" />
                                    <div class=\"validation\"></div>
                                </div>
                                <div class=\"span4 form-group\">
                                    <textarea class=\"input-block-level\" id=\"messages_message\" name=\"messages[message]\" maxlength=\"255\" rows=\"5\" data-rule=\"required\" data-msg=\"Saisir votre demande ou suggestion\" placeholder=\"Saisir votre demande ou suggestion...\"></textarea>
                                    <div class=\"validation\"></div>
                                    <div class=\"text-center\">

                                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("form-messeage"), "html", null, true);
        echo "\" />
                                        <button class=\"btn btn-theme\" type=\"submit\">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </aside>
                </div>


                <div class=\"span7\">
                    <div class=\"widget\">
                        <div class=\"widget\">

                     <ul class=\"social\">
\t\t\t\t\t    <li><a href=\"https://www.facebook.com/AtypikHouse-107634471531144/\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\" style=\"font-size:20px;color:black\"></i></a></li>
                        <li><a href=\"https://www.instagram.com/atypi_khouse\" data-placement=\"bottom\" title=\"Instagram\"><i class=\"fa fa-instagram\" style=\"font-size:20px;color:black\"></i></i></a></li>\t\t\t\t\t 
                        <!--
\t\t\t\t\t\t<li><a href=\"https://twitter.com/home\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\" style=\"font-size:20px;color:black\"></i></i></a></li>
                        <li><a href=\"https://linkedin.com\" data-placement=\"bottom\" title=\"Linkedin\"><i class=\"fa fa-linkedin\" style=\"font-size:20px;color:black\"></i></a></li>
                        <li><a href=\"https://www.pinterest.com/\" data-placement=\"bottom\" title=\"Pinterest\"><i class=\"fa fa-pinterest\" style=\"font-size:20px;color:black\"></i></a></li>
                        <li><a href=\"https://www.google.fr/\" data-placement=\"bottom\" title=\"Google plus\"><i class=\"fa fa-google\" style=\"font-size:20px;color:black\"></i></a></li>
\t\t\t\t\t\t-->
                    </ul>
                        </div>

                        <h3 class=\"rheading\"> Informations de Contact <span></span></h3>
                        ";
        // line 90
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 90, $this->source); })()), 0, [], "array", false, false, false, 90), "contact", [], "any", false, false, false, 90);
        echo "
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d168377.2468629551!2d2.2239668775453633!3d48.74571238102237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e672976b71e89f%3A0x9be7fd00be074b4c!2sInstitut%20F2I!5e0!3m2!1sfr!2sfr!4v1616756087909!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 90,  189 => 62,  164 => 40,  130 => 8,  120 => 7,  100 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}Contact | {{setting[0].title}}{% endblock %}
{% block keywords %}{{setting[0].keywords}}{% endblock %}
{% block description %}{{setting[0].description}} {% endblock %}

{% block body %}

    <!-- Subintro
================================================== -->
    <section id=\"subintro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span8\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"/\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                        <li><a href=\"/\">Accueil</a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">Contacter nous</li>
                    </ul>
                </div>
                <div class=\"span4\">
                    <div class=\"search\">
                        <form class=\"input-append\">
                            <input class=\"search-form\" id=\"appendedPrependedInput\" type=\"text\" placeholder=\"Recherche de ...\" />
                            <button class=\"btn btn-dark\" type=\"submit\">Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"maincontent\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"span5\">
                    <aside>

                        <h3>Formulaire de contact</h3>
                        {{ include('messages.html.twig') }}

                        <form name=\"messages\"  method=\"post\" role=\"form\" class=\"contactForm\">
                            <div class=\"row\">
                                <div class=\"span4 form-group\">
                                    <input type=\"text\" id=\"messages_name\" name=\"messages[name]\" class=\"input-block-level\" placeholder=\"Saisir votre nom\" data-rule=\"minlen:4\" data-msg=\"Saisir au moins 4 caractères\" />
                                    <div class=\"validation\"></div>
                                </div>

                                <div class=\"span4 form-group\">
                                    <input type=\"email\" class=\"input-block-level\" id=\"messages_email\" name=\"messages[email]\" placeholder=\"Entrer votre adresse mail\" data-rule=\"email\" data-msg=\"Merci de saisir une addresse mail valide\" />
                                    <div class=\"validation\"></div>
                                </div>
                                <div class=\"span4 form-group\">
                                    <input type=\"text\" class=\"input-block-level\" id=\"messages_subject\" name=\"messages[subject]\" maxlength=\"75\" placeholder=\"Saisir l'objet de votre message\" data-rule=\"minlen:4\" data-msg=\"Saisir au moins 8 caractères pour l'objet de votre message\" />
                                    <div class=\"validation\"></div>
                                </div>
                                <div class=\"span4 form-group\">
                                    <textarea class=\"input-block-level\" id=\"messages_message\" name=\"messages[message]\" maxlength=\"255\" rows=\"5\" data-rule=\"required\" data-msg=\"Saisir votre demande ou suggestion\" placeholder=\"Saisir votre demande ou suggestion...\"></textarea>
                                    <div class=\"validation\"></div>
                                    <div class=\"text-center\">

                                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('form-messeage') }}\" />
                                        <button class=\"btn btn-theme\" type=\"submit\">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </aside>
                </div>


                <div class=\"span7\">
                    <div class=\"widget\">
                        <div class=\"widget\">

                     <ul class=\"social\">
\t\t\t\t\t    <li><a href=\"https://www.facebook.com/AtypikHouse-107634471531144/\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\" style=\"font-size:20px;color:black\"></i></a></li>
                        <li><a href=\"https://www.instagram.com/atypi_khouse\" data-placement=\"bottom\" title=\"Instagram\"><i class=\"fa fa-instagram\" style=\"font-size:20px;color:black\"></i></i></a></li>\t\t\t\t\t 
                        <!--
\t\t\t\t\t\t<li><a href=\"https://twitter.com/home\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\" style=\"font-size:20px;color:black\"></i></i></a></li>
                        <li><a href=\"https://linkedin.com\" data-placement=\"bottom\" title=\"Linkedin\"><i class=\"fa fa-linkedin\" style=\"font-size:20px;color:black\"></i></a></li>
                        <li><a href=\"https://www.pinterest.com/\" data-placement=\"bottom\" title=\"Pinterest\"><i class=\"fa fa-pinterest\" style=\"font-size:20px;color:black\"></i></a></li>
                        <li><a href=\"https://www.google.fr/\" data-placement=\"bottom\" title=\"Google plus\"><i class=\"fa fa-google\" style=\"font-size:20px;color:black\"></i></a></li>
\t\t\t\t\t\t-->
                    </ul>
                        </div>

                        <h3 class=\"rheading\"> Informations de Contact <span></span></h3>
                        {{ setting[0].contact |raw }}
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d168377.2468629551!2d2.2239668775453633!3d48.74571238102237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e672976b71e89f%3A0x9be7fd00be074b4c!2sInstitut%20F2I!5e0!3m2!1sfr!2sfr!4v1616756087909!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </section>

{% endblock %}


", "home/contact.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\home\\contact.html.twig");
    }
}
