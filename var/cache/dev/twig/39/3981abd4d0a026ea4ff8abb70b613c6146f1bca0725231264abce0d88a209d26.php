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

/* hotel/index.html.twig */
class __TwigTemplate_044438770f36fe851ab0a8c5d7bf8a3237604d21bf3b2f7288fe5207ae2a0b86 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/index.html.twig"));

        $this->parent = $this->loadTemplate("page_user.html.twig", "hotel/index.html.twig", 1);
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
                        <li><a href=\"/user\">User</a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">User Hotel Li</li>
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
                            <h3><a href=\"#\">Les Hotels D'utilisateur </a></h3>
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
                                        <th>Country</th>

                                        <th>I.Gallery</th>
                                        <th>Chambre</th>
                                        <th>Status</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 66, $this->source); })()));
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
            // line 67
            echo "                                        <tr>
                                            <td >";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                                            <td nowrap>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "title", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                                            <td>
                                                <img src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["hotel"], "image", [], "any", false, false, false, 71))), "html", null, true);
            echo "\" style=\"height: 30px\">  </td>
                                            <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "star", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>

                                            <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "city", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                                             <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "country", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>

                                            <td>
                                                <a href=\"javascript:openWin('";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_image_new", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                                    <img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img"), "html", null, true);
            echo "/gallery.png\" style=\"height: 30px\">
                                                </a>
                                            </td>
                                            <td>
                                                <a href=\"javascript:openWin('";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_room_new", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                                    <img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img"), "html", null, true);
            echo "/room.jpg\" style=\"height: 30px\" title=\"Rooms\">
                                                </a>
                                            </td>

                                            <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "status", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>

                                            <td>
                                                <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            echo "\" class=\"btn btn-theme\">Consulter</a>
                                            </td>
                                            <td>
                                                <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_hotel_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Edit</a>
                                            </td>
                                            <td>
                                                ";
            // line 97
            echo twig_include($this->env, $context, "hotel/_delete_form.html.twig");
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
            // line 101
            echo "                                        <tr>
                                            <td colspan=\"17\">no records found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
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
        return "hotel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 105,  263 => 101,  246 => 97,  240 => 94,  234 => 91,  228 => 88,  221 => 84,  217 => 83,  210 => 79,  206 => 78,  200 => 75,  196 => 74,  191 => 72,  187 => 71,  182 => 69,  178 => 68,  175 => 67,  157 => 66,  131 => 43,  121 => 36,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
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
                        <li><a href=\"/user\">User</a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">User Hotel Li</li>
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
                            <h3><a href=\"#\">Les Hotels D'utilisateur </a></h3>
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
                                        <th>Country</th>

                                        <th>I.Gallery</th>
                                        <th>Chambre</th>
                                        <th>Status</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for hotel in hotels %}
                                        <tr>
                                            <td >{{ hotel.id }}</td>
                                            <td nowrap>{{ hotel.title }}</td>
                                            <td>
                                                <img src=\"{{ asset('uploads/images/' ~ hotel.image) }}\" style=\"height: 30px\">  </td>
                                            <td>{{ hotel.star }}</td>

                                            <td>{{ hotel.city }}</td>
                                             <td>{{ hotel.country }}</td>

                                            <td>
                                                <a href=\"javascript:openWin('{{ path('user_image_new', {'id': hotel.id}) }}','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                                    <img src=\"{{ asset('assets/admin/img') }}/gallery.png\" style=\"height: 30px\">
                                                </a>
                                            </td>
                                            <td>
                                                <a href=\"javascript:openWin('{{ path('user_room_new', {'id': hotel.id}) }}','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                                    <img src=\"{{ asset('assets/admin/img') }}/room.jpg\" style=\"height: 30px\" title=\"Rooms\">
                                                </a>
                                            </td>

                                            <td>{{ hotel.status }}</td>

                                            <td>
                                                <a href=\"{{ path('user_hotel_show', {'id': hotel.id}) }}\" class=\"btn btn-theme\">Consulter</a>
                                            </td>
                                            <td>
                                                <a href=\"{{ path('user_hotel_edit', {'id': hotel.id}) }}\" class=\"btn btn-success\">Edit</a>
                                            </td>
                                            <td>
                                                {{ include('hotel/_delete_form.html.twig') }}
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
", "hotel/index.html.twig", "/Applications/MAMP/htdocs/site-atypikhouse salma/templates/hotel/index.html.twig");
    }
}
