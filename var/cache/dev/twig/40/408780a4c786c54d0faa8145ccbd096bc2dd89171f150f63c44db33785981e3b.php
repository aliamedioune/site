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

/* user/hotels.html.twig */
class __TwigTemplate_d60c6bd3b079c82268db348ad917dce7bdcbb8d2f496e8d7f2f9fbab65269ef8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/hotels.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/hotels.html.twig"));

        $this->parent = $this->loadTemplate("page_user.html.twig", "user/hotels.html.twig", 1);
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
        // line 36
        echo twig_include($this->env, $context, "user/usermenu.html.twig");
        echo "

                <div class=\"span8\">
                    <!-- start article 1 -->
                    <article class=\"blog-post\">
                        <div class=\"post-heading\">
                            <h3><a href=\"#\">Vos Hotels</a></h3>
                            <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_hotel_new");
        echo "\" class=\"btn btn-block btn-success\" >Ajouter une annonce</a>
                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">

                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Star</th>

                                        <th>City</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Country</th>

                                        <th>I.Gallery</th>
                                        <th>Status</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 67, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 68
            echo "                                        <tr>
                                            <td >";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                                            <td nowrap>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "title", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                                            <td>
                                                <img src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["hotel"], "image", [], "any", false, false, false, 72))), "html", null, true);
            echo "\" height=\"40\">  </td>
                                            <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "star", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>

                                            <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "city", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                                            <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "phone", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                                            <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "email", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>

                                            <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "country", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>

                                            <td>
                                                <a href=\"javascript:openWin('";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_new", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                                    <img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img"), "html", null, true);
            echo "/gallery.png\" height=\"40\">
                                                </a>
                                            </td>

                                            <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "status", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>

                                            <td>
                                                <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-info\">Show</a>
                                            </td>
                                            <td>
                                                <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hotel_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-info\">Edit</a>
                                            </td>
                                            <td>
                                                ";
            // line 96
            echo twig_include($this->env, $context, "admin/hotel/_delete_form.html.twig");
            echo "
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 100
            echo "                                        <tr>
                                            <td colspan=\"17\">no records found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                                    </tbody>
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
        return "user/hotels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 104,  262 => 100,  245 => 96,  239 => 93,  233 => 90,  227 => 87,  220 => 83,  216 => 82,  210 => 79,  205 => 77,  201 => 76,  197 => 75,  192 => 73,  188 => 72,  183 => 70,  179 => 69,  176 => 68,  158 => 67,  131 => 43,  121 => 36,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'page_user.html.twig' %}

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
                            <h3><a href=\"#\">Vos Hotels</a></h3>
                            <a href=\"{{ path('user_hotel_new') }}\" class=\"btn btn-block btn-success\" >Ajouter une annonce</a>
                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">

                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Star</th>

                                        <th>City</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Country</th>

                                        <th>I.Gallery</th>
                                        <th>Status</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for hotel in hotels %}
                                        <tr>
                                            <td >{{ hotel.id }}</td>
                                            <td nowrap>{{ hotel.title }}</td>
                                            <td>
                                                <img src=\"{{ asset('uploads/images/' ~ hotel.image) }}\" height=\"40\">  </td>
                                            <td>{{ hotel.star }}</td>

                                            <td>{{ hotel.city }}</td>
                                            <td>{{ hotel.phone }}</td>
                                            <td>{{ hotel.email }}</td>

                                            <td>{{ hotel.country }}</td>

                                            <td>
                                                <a href=\"javascript:openWin('{{ path('admin_image_new', {'id': hotel.id}) }}','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                                    <img src=\"{{ asset('assets/admin/img') }}/gallery.png\" height=\"40\">
                                                </a>
                                            </td>

                                            <td>{{ hotel.status }}</td>

                                            <td>
                                                <a href=\"{{ path('admin_hotel_show', {'id': hotel.id}) }}\" class=\"btn btn-block btn-info\">Show</a>
                                            </td>
                                            <td>
                                                <a href=\"{{ path('admin_hotel_edit', {'id': hotel.id}) }}\" class=\"btn btn-block btn-info\">Edit</a>
                                            </td>
                                            <td>
                                                {{ include('admin/hotel/_delete_form.html.twig') }}
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"17\">no records found</td>
                                        </tr>
                                    {% endfor %}
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
", "user/hotels.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\user\\hotels.html.twig");
    }
}
