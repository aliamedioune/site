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

/* user/newreservation.html.twig */
class __TwigTemplate_899d610d3be111da7e63dee725f793ed36e32f329358177f3a42c43883b083d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "page_user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/newreservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/newreservation.html.twig"));

        $this->parent = $this->loadTemplate("page_user.html.twig", "user/newreservation.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " Profile";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Subintro
================================================== -->
    <section id=\"subintro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span8\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"/\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                        <li><a href=\"/\">Reservation</a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">Blog with left sidebar</li>
                    </ul>
                </div>
                <div class=\"span4\">
                    <div class=\"search\">
                        <form class=\"input-append\">
                            <input class=\"search-form\" id=\"appendedPrependedInput\" type=\"text\" placeholder=\"Search here..\" />
                            <button class=\"btn btn-dark\" type=\"submit\">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"maincontent\">
        <div class=\"container\">
            <div class=\"row\">

                ";
        // line 33
        echo twig_include($this->env, $context, "user/usermenu.html.twig");
        echo "

                <div class=\"span8\">
                    <!-- start article 1 -->
                    <article class=\"blog-post\">
                        <div class=\"post-heading\">

                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">
                                <h3>Reservation Form </h3>

                                <table class=\"table\" >
                                    <tr>
                                        <th>Habitat :</th>
                                        <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 48, $this->source); })()), "title", [], "any", false, false, false, 48), "html", null, true);
        echo " </td>
                                    </tr>
                                    <tr>
                                        <th>chambre :</th>
                                        <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 52, $this->source); })()), "title", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Prix :</th>
                                        <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 56, $this->source); })()), "price", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>date debut :</th>
                                        <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), "checkin", [], "any", false, false, false, 60), "m/d/Y"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>date fin :</th>
                                        <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()), "checkout", [], "any", false, false, false, 64), "m/d/Y"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>nombre des jours :</th>
                                        <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 68, $this->source); })()), "days", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Total Prix :</th>
                                        <td>\$ ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 72, $this->source); })()), "total", [], "any", false, false, false, 72), "html", null, true);
        echo " </td>
                                    </tr>
                                </table>



                                ";
        // line 78
        echo twig_include($this->env, $context, "messages.html.twig");
        echo "


                                <form name=\"reservation\"  method=\"post\" role=\"form\" >
                                    <div class=\"row\">


                                        <div class=\"span4 form-group\">
                                            <input type=\"text\" id=\"reservation_name\" name=\"reservation[name]\" class=\"input-block-level\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "name", [], "any", false, false, false, 86), "html", null, true);
        echo "\" placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />
                                            <div class=\"validation\"></div>
                                        </div>
                                        <div class=\"span4 form-group\">
                                            <input type=\"text\" id=\"reservation_surname\" name=\"reservation[surname]\" class=\"input-block-level\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "surname", [], "any", false, false, false, 90), "html", null, true);
        echo "\"  placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />
                                            <div class=\"validation\"></div>
                                        </div>

                                        <div class=\"span4 form-group\">
                                            <input type=\"email\" class=\"input-block-level\" id=\"reservation_email\" name=\"reservation[email]\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "email", [], "any", false, false, false, 95), "html", null, true);
        echo "\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\" />
                                            <div class=\"validation\"></div>
                                        </div>
                                        <div class=\"span4 form-group\">
                                            <input type=\"text\" class=\"input-block-level\" id=\"reservation_phone\" name=\"reservation[phone]\" maxlength=\"75\" placeholder=\"Phone Number\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
                                            <div class=\"validation\"></div>
                                        </div>
                                        <div class=\"span4 form-group\">
                                            <textarea class=\"input-block-level\" id=\"reservation_message\" name=\"reservation[message]\" maxlength=\"255\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Message\"></textarea>
                                            <div class=\"validation\"></div>
                                            <div class=\"text-center\">
                                                <input type=\"hidden\" id=\"checkin\" name=\"checkin\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 106, $this->source); })()), "checkin", [], "any", false, false, false, 106), "m/d/Y"), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" id=\"days\" name=\"days\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 107, $this->source); })()), "days", [], "any", false, false, false, 107), "html", null, true);
        echo "\">
                                                ******* CREDIT CARD INFORMATION**********
                                                <input type=\"hidden\" name=\"token\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("form-reservation"), "html", null, true);
        echo "\" />
                                                <button class=\"btn btn-theme\" type=\"submit\"> envoyer une Resrvation</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </article>
                    <!-- end article 1 -->

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
        return "user/newreservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 109,  231 => 107,  227 => 106,  213 => 95,  205 => 90,  198 => 86,  187 => 78,  178 => 72,  171 => 68,  164 => 64,  157 => 60,  150 => 56,  143 => 52,  136 => 48,  118 => 33,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'page_user.html.twig' %}

{% block title %}{{ app.user.name  }} Profile{% endblock %}

{% block body %}
    <!-- Subintro
================================================== -->
    <section id=\"subintro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span8\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"/\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                        <li><a href=\"/\">Reservation</a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">Blog with left sidebar</li>
                    </ul>
                </div>
                <div class=\"span4\">
                    <div class=\"search\">
                        <form class=\"input-append\">
                            <input class=\"search-form\" id=\"appendedPrependedInput\" type=\"text\" placeholder=\"Search here..\" />
                            <button class=\"btn btn-dark\" type=\"submit\">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"maincontent\">
        <div class=\"container\">
            <div class=\"row\">

                {{ include('user/usermenu.html.twig') }}

                <div class=\"span8\">
                    <!-- start article 1 -->
                    <article class=\"blog-post\">
                        <div class=\"post-heading\">

                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">
                                <h3>Reservation Form </h3>

                                <table class=\"table\" >
                                    <tr>
                                        <th>Habitat :</th>
                                        <td>{{hotel.title}} </td>
                                    </tr>
                                    <tr>
                                        <th>chambre :</th>
                                        <td>{{room.title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Prix :</th>
                                        <td>{{ room.price }}</td>
                                    </tr>
                                    <tr>
                                        <th>date debut :</th>
                                        <td>{{ data.checkin |date(\"m/d/Y\")}}</td>
                                    </tr>
                                    <tr>
                                        <th>date fin :</th>
                                        <td>{{ data.checkout|date(\"m/d/Y\") }}</td>
                                    </tr>
                                    <tr>
                                        <th>nombre des jours :</th>
                                        <td>{{ data.days }}</td>
                                    </tr>
                                    <tr>
                                        <th>Total Prix :</th>
                                        <td>\$ {{ data.total }} </td>
                                    </tr>
                                </table>



                                {{ include('messages.html.twig') }}


                                <form name=\"reservation\"  method=\"post\" role=\"form\" >
                                    <div class=\"row\">


                                        <div class=\"span4 form-group\">
                                            <input type=\"text\" id=\"reservation_name\" name=\"reservation[name]\" class=\"input-block-level\" value=\"{{ app.user.name }}\" placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />
                                            <div class=\"validation\"></div>
                                        </div>
                                        <div class=\"span4 form-group\">
                                            <input type=\"text\" id=\"reservation_surname\" name=\"reservation[surname]\" class=\"input-block-level\" value=\"{{ app.user.surname }}\"  placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />
                                            <div class=\"validation\"></div>
                                        </div>

                                        <div class=\"span4 form-group\">
                                            <input type=\"email\" class=\"input-block-level\" id=\"reservation_email\" name=\"reservation[email]\" value=\"{{ app.user.email }}\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\" />
                                            <div class=\"validation\"></div>
                                        </div>
                                        <div class=\"span4 form-group\">
                                            <input type=\"text\" class=\"input-block-level\" id=\"reservation_phone\" name=\"reservation[phone]\" maxlength=\"75\" placeholder=\"Phone Number\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
                                            <div class=\"validation\"></div>
                                        </div>
                                        <div class=\"span4 form-group\">
                                            <textarea class=\"input-block-level\" id=\"reservation_message\" name=\"reservation[message]\" maxlength=\"255\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Message\"></textarea>
                                            <div class=\"validation\"></div>
                                            <div class=\"text-center\">
                                                <input type=\"hidden\" id=\"checkin\" name=\"checkin\" value=\"{{ data.checkin|date(\"m/d/Y\") }}\">
                                                <input type=\"hidden\" id=\"days\" name=\"days\" value=\"{{ data.days }}\">
                                                ******* CREDIT CARD INFORMATION**********
                                                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('form-reservation') }}\" />
                                                <button class=\"btn btn-theme\" type=\"submit\"> envoyer une Resrvation</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </article>
                    <!-- end article 1 -->

                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "user/newreservation.html.twig", "/Applications/MAMP/htdocs/site-atypikhouse salma/templates/user/newreservation.html.twig");
    }
}
