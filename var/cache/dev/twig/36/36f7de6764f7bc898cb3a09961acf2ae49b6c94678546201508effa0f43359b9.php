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

/* user/reservation_show.html.twig */
class __TwigTemplate_db67b08cdf7b7bdc3f378062574e3968be8656284f027ea9fa12d000c2447075 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reservation_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/reservation_show.html.twig"));

        $this->parent = $this->loadTemplate("page_user.html.twig", "user/reservation_show.html.twig", 1);
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
                        <li><a href=\"/\">Blog</a><i class=\"icon-angle-right\"></i></li>
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
                            <h3><a href=\"#\" la liste reservation d'un utilisateur</a></h3>
                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">
                                <table class=\"table\">
                                    <tr>
                                        <th>Hotel</th><td>
                                            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 46, $this->source); })()), 0, [], "array", false, false, false, 46), "hotelid", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\">
                                                ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 47, $this->source); })()), 0, [], "array", false, false, false, 47), "hname", [], "any", false, false, false, 47), "html", null, true);
        echo "
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Room</th><td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 52, $this->source); })()), 0, [], "array", false, false, false, 52), "rname", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th><td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 55, $this->source); })()), 0, [], "array", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Surname</th><td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 58, $this->source); })()), 0, [], "array", false, false, false, 58), "surname", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th><td>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 61, $this->source); })()), 0, [], "array", false, false, false, 61), "email", [], "any", false, false, false, 61), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Surname</th><td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 64, $this->source); })()), 0, [], "array", false, false, false, 64), "phone", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Checkin</th><td>";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 67, $this->source); })()), 0, [], "array", false, false, false, 67), "checkin", [], "any", false, false, false, 67), "d-m-Y"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Checkout</th><td>";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 70, $this->source); })()), 0, [], "array", false, false, false, 70), "checkout", [], "any", false, false, false, 70), "d-m-Y"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Days</th><td>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 73, $this->source); })()), 0, [], "array", false, false, false, 73), "days", [], "any", false, false, false, 73), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th><td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 76, $this->source); })()), 0, [], "array", false, false, false, 76), "total", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Message</th><td>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 79, $this->source); })()), 0, [], "array", false, false, false, 79), "message", [], "any", false, false, false, 79), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Note</th><td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 82, $this->source); })()), 0, [], "array", false, false, false, 82), "note", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th><td>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 85, $this->source); })()), 0, [], "array", false, false, false, 85), "status", [], "any", false, false, false, 85), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Date</th><td>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 88, $this->source); })()), 0, [], "array", false, false, false, 88), "created_at", [], "any", false, false, false, 88), "html", null, true);
        echo "</td>
                                    </tr>
                                    
                                    </tbody>
                                </table>

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
        return "user/reservation_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 88,  212 => 85,  206 => 82,  200 => 79,  194 => 76,  188 => 73,  182 => 70,  176 => 67,  170 => 64,  164 => 61,  158 => 58,  152 => 55,  146 => 52,  138 => 47,  134 => 46,  118 => 33,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
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
                        <li><a href=\"/\">Blog</a><i class=\"icon-angle-right\"></i></li>
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
                            <h3><a href=\"#\" la liste reservation d'un utilisateur</a></h3>
                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">
                                <table class=\"table\">
                                    <tr>
                                        <th>Hotel</th><td>
                                            <a href=\"{{ path(\"hotel_show\",{\"id\":reservation[0].hotelid}) }}\">
                                                {{ reservation[0].hname }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Room</th><td>{{ reservation[0].rname }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th><td>{{ reservation[0].name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Surname</th><td>{{ reservation[0].surname }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th><td>{{ reservation[0].email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Surname</th><td>{{ reservation[0].phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Checkin</th><td>{{ reservation[0].checkin|date('d-m-Y')}}</td>
                                    </tr>
                                    <tr>
                                        <th>Checkout</th><td>{{ reservation[0].checkout|date('d-m-Y')}}</td>
                                    </tr>
                                    <tr>
                                        <th>Days</th><td>{{ reservation[0].days }}</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th><td>{{ reservation[0].total }}</td>
                                    </tr>
                                    <tr>
                                        <th>Message</th><td>{{ reservation[0].message }}</td>
                                    </tr>
                                    <tr>
                                        <th>Note</th><td>{{ reservation[0].note }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th><td>{{ reservation[0].status }}</td>
                                    </tr>
                                    <tr>
                                        <th>Date</th><td>{{ reservation[0].created_at }}</td>
                                    </tr>
                                    
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </article>
                    <!-- end article 1 -->

                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "user/reservation_show.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\user\\reservation_show.html.twig");
    }
}
