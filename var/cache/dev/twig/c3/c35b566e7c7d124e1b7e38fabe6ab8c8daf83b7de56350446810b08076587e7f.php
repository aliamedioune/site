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

/* hotel/show.html.twig */
class __TwigTemplate_c24bef4657cac9c9c2c0934701bcd460db107bbddfabb34335b11ae9b416a939 extends Template
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
        return "homebase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/show.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "hotel/show.html.twig", 1);
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
        echo "    <SCRIPT language=\"JavaScript\" type=\"text/javascript\">
        function openWin( windowURL, windowName, windowFeatures ) { window.open( windowURL, windowName, windowFeatures ) ; \t}
    </SCRIPT>
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
                            <button class=\"btn btn-dark\" type=\"submit\">rechercher</button>
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
        // line 36
        echo twig_include($this->env, $context, "user/usermenu.html.twig");
        echo "

                <div class=\"span8\">
                    <!-- start article 1 -->
                    <article class=\"blog-post\">
                        <div class=\"post-heading\">
                            <h3><a href=\"#\">Détails de l'habitat</a></h3>
                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">


                                <table class=\"table\">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Titre</th>
                                        <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 56, $this->source); })()), "title", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Mots clés</th>
                                        <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 60, $this->source); })()), "keywords", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 68, $this->source); })()), "image", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Star</th>
                                        <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 72, $this->source); })()), "star", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Adresse</th>
                                        <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 76, $this->source); })()), "address", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Ville</th>
                                        <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 80, $this->source); })()), "city", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th> Telephone</th>
                                        <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 84, $this->source); })()), "phone", [], "any", false, false, false, 84), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 88, $this->source); })()), "email", [], "any", false, false, false, 88), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Fax</th>
                                        <td>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 92, $this->source); })()), "fax", [], "any", false, false, false, 92), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Pray</th>
                                        <td>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 96, $this->source); })()), "country", [], "any", false, false, false, 96), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Location</th>
                                        <td>";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 100, $this->source); })()), "location", [], "any", false, false, false, 100), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 104, $this->source); })()), "status", [], "any", false, false, false, 104), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th> creer on </th>
                                        <td>";
        // line 108
        ((twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 108, $this->source); })()), "createdAt", [], "any", false, false, false, 108)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 108, $this->source); })()), "createdAt", [], "any", false, false, false, 108), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th> le date de modification</th>
                                        <td>";
        // line 112
        ((twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 112, $this->source); })()), "updatedAt", [], "any", false, false, false, 112)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 112, $this->source); })()), "updatedAt", [], "any", false, false, false, 112), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Detail</th>
                                        <td>";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 116, $this->source); })()), "detail", [], "any", false, false, false, 116), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Userid</th>
                                        <td>";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 120, $this->source); })()), "userid", [], "any", false, false, false, 120), "html", null, true);
        echo "</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_hotel_index");
        echo "\">retourn àla liste</a>

                                <a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_hotel_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127)]), "html", null, true);
        echo "\">Modifier</a>

                                ";
        // line 129
        echo twig_include($this->env, $context, "hotel/_delete_form.html.twig");
        echo "
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
        return "hotel/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 129,  272 => 127,  267 => 125,  259 => 120,  252 => 116,  245 => 112,  238 => 108,  231 => 104,  224 => 100,  217 => 96,  210 => 92,  203 => 88,  196 => 84,  189 => 80,  182 => 76,  175 => 72,  168 => 68,  161 => 64,  154 => 60,  147 => 56,  140 => 52,  121 => 36,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ app.user.name  }} Profile{% endblock %}

{% block body %}
    <SCRIPT language=\"JavaScript\" type=\"text/javascript\">
        function openWin( windowURL, windowName, windowFeatures ) { window.open( windowURL, windowName, windowFeatures ) ; \t}
    </SCRIPT>
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
                            <button class=\"btn btn-dark\" type=\"submit\">rechercher</button>
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
                            <h3><a href=\"#\">Détails de l'habitat</a></h3>
                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">


                                <table class=\"table\">
                                    <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>{{ hotel.id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Titre</th>
                                        <td>{{ hotel.title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mots clés</th>
                                        <td>{{ hotel.keywords }}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>{{ hotel.description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td>{{ hotel.image }}</td>
                                    </tr>
                                    <tr>
                                        <th>Star</th>
                                        <td>{{ hotel.star }}</td>
                                    </tr>
                                    <tr>
                                        <th>Adresse</th>
                                        <td>{{ hotel.address }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ville</th>
                                        <td>{{ hotel.city }}</td>
                                    </tr>
                                    <tr>
                                        <th> Telephone</th>
                                        <td>{{ hotel.phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ hotel.email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Fax</th>
                                        <td>{{ hotel.fax }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pray</th>
                                        <td>{{ hotel.country }}</td>
                                    </tr>
                                    <tr>
                                        <th>Location</th>
                                        <td>{{ hotel.location }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{ hotel.status }}</td>
                                    </tr>
                                    <tr>
                                        <th> creer on </th>
                                        <td>{{ hotel.createdAt ? hotel.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th> le date de modification</th>
                                        <td>{{ hotel.updatedAt ? hotel.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Detail</th>
                                        <td>{{ hotel.detail }}</td>
                                    </tr>
                                    <tr>
                                        <th>Userid</th>
                                        <td>{{ hotel.userid }}</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <a href=\"{{ path('user_hotel_index') }}\">retourn àla liste</a>

                                <a href=\"{{ path('user_hotel_edit', {'id': hotel.id}) }}\">Modifier</a>

                                {{ include('hotel/_delete_form.html.twig') }}
                            </div>
                        </div>
                    </article>
                    <!-- end article 1 -->

                </div>
            </div>
        </div>
    </section>

{% endblock %}


", "hotel/show.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\hotel\\show.html.twig");
    }
}
