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

/* home/hotelshow.html.twig */
class __TwigTemplate_b1f7f1b5a05216ac17fc63f4d77b81f6dda963aaa9218e147629a8e00862e9a1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/hotelshow.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/hotelshow.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/hotelshow.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 4, $this->source); })()), "keywords", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
        
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 5, $this->source); })()), "description", [], "any", false, false, false, 5), "html", null, true);
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
                        <li><a href=\"#\">Hotel Detail </a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "</li>
                    </ul>
                </div>
                <div class=\"span4\">
                    <div class=\"search\">
                        <form class=\"input-append\">
                            <input class=\"search-form\" id=\"appendedPrependedInput\" type=\"text\" placeholder=\"Search here..\" />
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

                <div class=\"span7\">

                    <!-- Place somewhere in the <body> of your page -->
                    <div id=\"mainslider\" class=\"flexslider\">
                        ";
        // line 71
        echo "                        <ul class=\"slides\">

                            <li data-thumb=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 73, $this->source); })()), "image", [], "any", false, false, false, 73))), "html", null, true);
        echo "\" style=\"height: 410px; width: 800px\">
                                <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 74, $this->source); })()), "image", [], "any", false, false, false, 74))), "html", null, true);
        echo "\">
                                    <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 75, $this->source); })()), "image", [], "any", false, false, false, 75))), "html", null, true);
        echo "\"    alt=\"\" />
                                </a>
                                <div class=\"flex-caption primary\">
                                    <h4>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 78, $this->source); })()), "title", [], "any", false, false, false, 78), "html", null, true);
        echo "</h4>


                                </div>
                                
                            </li>

                            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 86
            echo "                                <li data-thumb=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 86))), "html", null, true);
            echo "\" style=\"height: 300px; width: 500px\">
                                    <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 87))), "html", null, true);
            echo "\">
                                        <img class=\"zoom\" data-pretty=\"prettyPhoto\" src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 88))), "html", null, true);
            echo "\"    alt=\"\" />
                                    </a>
                                    <div class=\"flex-caption primary\">
                                        <h4>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 91), "html", null, true);
            echo "</h4>

                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "

                        </ul>
                    </div>
                </div>

                <div class=\"span5\">
                    <!-- start article 1 -->
                    <article class=\"blog-post\">
                        <div class=\"post-heading\">
                            <h3><a href=\"#\">";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 106, $this->source); })()), "title", [], "any", false, false, false, 106), "html", null, true);
        echo "</a></h3>
                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">


                                <table class=\"table\">
                                    <tbody>



                                    <tr>
                                        <th>Description</th>
                                        <td>";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 119, $this->source); })()), "description", [], "any", false, false, false, 119), "html", null, true);
        echo "</td>
                                    </tr>

                                    <tr>
                                        <th>Star</th>
                                        <td>";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 124, $this->source); })()), "star", [], "any", false, false, false, 124), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Adresse</th>
                                        <td>";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 128, $this->source); })()), "address", [], "any", false, false, false, 128), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Ville</th>
                                        <td>";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 132, $this->source); })()), "city", [], "any", false, false, false, 132), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>telephone</th>
                                        <td>";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 136, $this->source); })()), "phone", [], "any", false, false, false, 136), "html", null, true);
        echo " /";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 136, $this->source); })()), "country", [], "any", false, false, false, 136), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 140, $this->source); })()), "email", [], "any", false, false, false, 140), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Fax</th>
                                        <td>";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 144, $this->source); })()), "fax", [], "any", false, false, false, 144), "html", null, true);
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
            <div class=\"row\">
                <div class=\"tabbable tabs-top\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#one\" data-toggle=\"tab\"><i class=\"icon-briefcase\"></i>  Habitat et Prix</a></li>
                        <li><a href=\"#two\" data-toggle=\"tab\">habitat informations details</a></li>
                        <li><a href=\"#three\" data-toggle=\"tab\">Comments</a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"one\">

                            <table class=\"table\">
                                <thead>
                                <tr>

                                    <th>Titre</th>

                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Prix</th>


                                    <th> </th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 184, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 185
            echo "                                    <tr>

                                        <td>";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "title", [], "any", false, false, false, 187), "html", null, true);
            echo "</td>

                                        <td>";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "description", [], "any", false, false, false, 189), "html", null, true);
            echo "</td>
                                        <td><img src=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["room"], "image", [], "any", false, false, false, 190))), "html", null, true);
            echo "\" height=\"80\"></td>
                                        <td>";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "price", [], "any", false, false, false, 191), "html", null, true);
            echo "</td>
                                        <td>
                                            <form  action=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_reservation_new", ["hid" => twig_get_attribute($this->env, $this->source, $context["room"], "hotelid", [], "any", false, false, false, 193), "rid" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 193)]), "html", null, true);
            echo "\" method=\"post\">
                                                Jour <input type=\"number\" id=\"days\" name=\"days\" value=\"1\" style=\"width: 60px\" >
                                                Jour d'entrer :<input type=\"date\" id=\"checkin\" name=\"checkin\"  style=\"width: 200px\" required>
                                                <input type=\"submit\" value=\"Reserve  Habitat\" class=\"btn btn-success\">
                                            </form>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 201
            echo "                                    <tr>
                                        <td colspan=\"9\"> habitat introuvable </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                                </tbody>
                            </table>

                        </div>
                        <div class=\"tab-pane\" id=\"two\">
                            <p>
                                ";
        // line 211
        echo twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 211, $this->source); })()), "detail", [], "any", false, false, false, 211);
        echo "
                            </p>
                        </div>
                        <div class=\"tab-pane\" id=\"three\">

                            ";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 216, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 217
            echo "                                <h5>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "subject", [], "any", false, false, false, 217), "html", null, true);
            echo "  [Rate :";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "rate", [], "any", false, false, false, 217), "html", null, true);
            echo "]</h5>
                                <p>
                                    ";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "comment", [], "any", false, false, false, 219), "html", null, true);
            echo "
                                </p>
                                <hr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "
                            ";
        // line 224
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 224, $this->source); })()), "user", [], "any", false, false, false, 224)) {
            // line 225
            echo "                            <h4>Commenter  </h4>
                            ";
            // line 226
            echo twig_include($this->env, $context, "messages.html.twig");
            echo "

                            <form name=\"comment\" action=\"";
            // line 228
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new_comment", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 228, $this->source); })()), "id", [], "any", false, false, false, 228)]), "html", null, true);
            echo "\" method=\"post\" role=\"form\" class=\"contactForm\">
                                <div class=\"row\">

                                    <div class=\"span7 form-group\">
                                        <input type=\"text\" class=\"input-block-level\" id=\"comment_subject\" name=\"comment[subject]\" maxlength=\"75\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
                                        <div class=\"validation\"></div>
                                    </div>

                                    <div class=\"span7 form-group\">
                                        <textarea class=\"input-block-level\" id=\"comment_comment\" name=\"comment[comment]\" maxlength=\"255\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Comment\"></textarea>
                                        <div class=\"validation\"></div>
                                    </div>
                                    <div class=\"span2 form-group\">
                                        <select id=\"comment_rate\" name=\"comment[rate]\" class=\"input-block-level\">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <div class=\"validation\"></div>
                                        <input type=\"hidden\" name=\"token\" value=\"";
            // line 249
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("comment"), "html", null, true);
            echo "\" />
                                        <button class=\"btn btn-theme\" type=\"submit\">envoi Comment</button>
                                    </div>


                                </div>

                            </form>
                            ";
        } else {
            // line 258
            echo "                                <li>
                                    <a href=\"/login\"><i class=\"icon-envelope-alt\"></i> Si vous souhaitez ajouter un commentaire, veuillez vous connecter</a>
                                </li>
                            ";
        }
        // line 262
        echo "

                        </div>
                    </div>
                </div>
                <!-- end tab -->
            </div>

        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/hotelshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 262,  481 => 258,  469 => 249,  445 => 228,  440 => 226,  437 => 225,  435 => 224,  432 => 223,  422 => 219,  414 => 217,  410 => 216,  402 => 211,  394 => 205,  385 => 201,  372 => 193,  367 => 191,  363 => 190,  359 => 189,  354 => 187,  350 => 185,  345 => 184,  302 => 144,  295 => 140,  286 => 136,  279 => 132,  272 => 128,  265 => 124,  257 => 119,  241 => 106,  229 => 96,  218 => 91,  212 => 88,  208 => 87,  203 => 86,  199 => 85,  189 => 78,  183 => 75,  179 => 74,  175 => 73,  171 => 71,  145 => 20,  131 => 8,  121 => 7,  101 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}{{ hotel.title  }} {% endblock %}
{% block keywords %}{{ hotel.keywords  }} {% endblock %}
{% block description %}{{ hotel.description  }} {% endblock %}

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
                        <li><a href=\"#\">Hotel Detail </a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">{{ hotel.title  }}</li>
                    </ul>
                </div>
                <div class=\"span4\">
                    <div class=\"search\">
                        <form class=\"input-append\">
                            <input class=\"search-form\" id=\"appendedPrependedInput\" type=\"text\" placeholder=\"Search here..\" />
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

                <div class=\"span7\">

                    <!-- Place somewhere in the <body> of your page -->
                    <div id=\"mainslider\" class=\"flexslider\">
                        {# <ul class=\"slides\">

                            <li data-thumb=\"{{ asset('uploads/images/' ~ hotel.image) }}\" style=\"height: 410px; width: 800px\">
                                <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{ asset('uploads/images/' ~ hotel.image) }}\">
                                    <img src=\"{{ asset('uploads/images/' ~ hotel.image) }}\"    alt=\"\" />
                                </a>
                                <div class=\"flex-caption primary\">
                                    <h4>{{hotel.title}}</h4>


                                </div>
                                
                            </li>

                            {% for rs in images %}
                                <li data-thumb=\"{{ asset('uploads/images/' ~ rs.image) }}\" style=\"height: 300px; width: 500px\">
                                    <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{ asset('uploads/images/' ~ rs.image) }}\">
                                        <img class=\"zoom\" data-pretty=\"prettyPhoto\" src=\"{{ asset('uploads/images/' ~ rs.image) }}\"    alt=\"\" />
                                    </a>
                                    <div class=\"flex-caption primary\">
                                        <h4>{{rs.title}}</h4>

                                    </div>
                                </li>
                            {% endfor %}


                        </ul> #}
                        <ul class=\"slides\">

                            <li data-thumb=\"{{ asset('uploads/images/' ~ hotel.image) }}\" style=\"height: 410px; width: 800px\">
                                <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{ asset('uploads/images/' ~ hotel.image) }}\">
                                    <img src=\"{{ asset('uploads/images/' ~ hotel.image) }}\"    alt=\"\" />
                                </a>
                                <div class=\"flex-caption primary\">
                                    <h4>{{hotel.title}}</h4>


                                </div>
                                
                            </li>

                            {% for rs in images %}
                                <li data-thumb=\"{{ asset('uploads/images/' ~ rs.image) }}\" style=\"height: 300px; width: 500px\">
                                    <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{ asset('uploads/images/' ~ rs.image) }}\">
                                        <img class=\"zoom\" data-pretty=\"prettyPhoto\" src=\"{{ asset('uploads/images/' ~ rs.image) }}\"    alt=\"\" />
                                    </a>
                                    <div class=\"flex-caption primary\">
                                        <h4>{{rs.title}}</h4>

                                    </div>
                                </li>
                            {% endfor %}


                        </ul>
                    </div>
                </div>

                <div class=\"span5\">
                    <!-- start article 1 -->
                    <article class=\"blog-post\">
                        <div class=\"post-heading\">
                            <h3><a href=\"#\">{{ hotel.title }}</a></h3>
                        </div>
                        <div class=\"row\">
                            <div class=\"span8\">


                                <table class=\"table\">
                                    <tbody>



                                    <tr>
                                        <th>Description</th>
                                        <td>{{ hotel.description }}</td>
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
                                        <th>telephone</th>
                                        <td>{{ hotel.phone }} /{{ hotel.country }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ hotel.email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Fax</th>
                                        <td>{{ hotel.fax }}</td>
                                    </tr>



                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </article>
                    <!-- end article 1 -->

                </div>
            </div>
            <div class=\"row\">
                <div class=\"tabbable tabs-top\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#one\" data-toggle=\"tab\"><i class=\"icon-briefcase\"></i>  Habitat et Prix</a></li>
                        <li><a href=\"#two\" data-toggle=\"tab\">habitat informations details</a></li>
                        <li><a href=\"#three\" data-toggle=\"tab\">Comments</a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"one\">

                            <table class=\"table\">
                                <thead>
                                <tr>

                                    <th>Titre</th>

                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Prix</th>


                                    <th> </th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for room in rooms %}
                                    <tr>

                                        <td>{{ room.title }}</td>

                                        <td>{{ room.description }}</td>
                                        <td><img src=\"{{ asset('uploads/images/' ~ room.image) }}\" height=\"80\"></td>
                                        <td>{{ room.price }}</td>
                                        <td>
                                            <form  action=\"{{ path('user_reservation_new', {'hid': room.hotelid,'rid': room.id}) }}\" method=\"post\">
                                                Jour <input type=\"number\" id=\"days\" name=\"days\" value=\"1\" style=\"width: 60px\" >
                                                Jour d'entrer :<input type=\"date\" id=\"checkin\" name=\"checkin\"  style=\"width: 200px\" required>
                                                <input type=\"submit\" value=\"Reserve  Habitat\" class=\"btn btn-success\">
                                            </form>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"9\"> habitat introuvable </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>

                        </div>
                        <div class=\"tab-pane\" id=\"two\">
                            <p>
                                {{ hotel.detail |raw  }}
                            </p>
                        </div>
                        <div class=\"tab-pane\" id=\"three\">

                            {% for rs in comments %}
                                <h5>{{ rs.subject }}  [Rate :{{ rs.rate }}]</h5>
                                <p>
                                    {{ rs.comment }}
                                </p>
                                <hr>
                            {% endfor %}

                            {% if app.user %}
                            <h4>Commenter  </h4>
                            {{ include('messages.html.twig') }}

                            <form name=\"comment\" action=\"{{ path('user_new_comment', {'id': hotel.id}) }}\" method=\"post\" role=\"form\" class=\"contactForm\">
                                <div class=\"row\">

                                    <div class=\"span7 form-group\">
                                        <input type=\"text\" class=\"input-block-level\" id=\"comment_subject\" name=\"comment[subject]\" maxlength=\"75\" placeholder=\"Subject\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
                                        <div class=\"validation\"></div>
                                    </div>

                                    <div class=\"span7 form-group\">
                                        <textarea class=\"input-block-level\" id=\"comment_comment\" name=\"comment[comment]\" maxlength=\"255\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Comment\"></textarea>
                                        <div class=\"validation\"></div>
                                    </div>
                                    <div class=\"span2 form-group\">
                                        <select id=\"comment_rate\" name=\"comment[rate]\" class=\"input-block-level\">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <div class=\"validation\"></div>
                                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('comment') }}\" />
                                        <button class=\"btn btn-theme\" type=\"submit\">envoi Comment</button>
                                    </div>


                                </div>

                            </form>
                            {% else %}
                                <li>
                                    <a href=\"/login\"><i class=\"icon-envelope-alt\"></i> Si vous souhaitez ajouter un commentaire, veuillez vous connecter</a>
                                </li>
                            {% endif %}


                        </div>
                    </div>
                </div>
                <!-- end tab -->
            </div>

        </div>
    </section>

{% endblock %}


", "home/hotelshow.html.twig", "/Applications/MAMP/htdocs/site-atypikhouse salma/templates/home/hotelshow.html.twig");
    }
}
