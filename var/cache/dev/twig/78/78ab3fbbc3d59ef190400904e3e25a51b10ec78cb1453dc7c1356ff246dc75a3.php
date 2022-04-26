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

/* admin/hotel/show.html.twig */
class __TwigTemplate_f94427eb770aebb04ddfc69ba3fa5676a6cc2b731c407166bbf04cccec0a8c4f extends Template
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
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hotel/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hotel/show.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/hotel/show.html.twig", 1);
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

        echo "Hello AdminController!";
        
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
        echo "
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Blank Page</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">

            <!-- Default box -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Title</h3>

                    <div class=\"card-tools\">
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                            <i class=\"fas fa-minus\"></i></button>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                            <i class=\"fas fa-times\"></i></button>
                    </div>
                </div>
                <div class=\"card-body\">
                    <h1>Hotel</h1>

                    <table class=\"table\">
                        <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Titre</th>
                            <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 52, $this->source); })()), "title", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Mote clé</th>
                            <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 56, $this->source); })()), "keywords", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 60, $this->source); })()), "description", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 64, $this->source); })()), "image", [], "any", false, false, false, 64))), "html", null, true);
        echo "\" height=\"100\"> </td>
                        </tr>
                        <tr>
                            <th>Star</th>
                            <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 68, $this->source); })()), "star", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Adresse</th>
                            <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 72, $this->source); })()), "address", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th> Ville</th>
                            <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 76, $this->source); })()), "city", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Telephone</th>
                            <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 80, $this->source); })()), "phone", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 84, $this->source); })()), "email", [], "any", false, false, false, 84), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Fax</th>
                            <td>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 88, $this->source); })()), "fax", [], "any", false, false, false, 88), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Pray</th>
                            <td>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 92, $this->source); })()), "country", [], "any", false, false, false, 92), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 96, $this->source); })()), "location", [], "any", false, false, false, 96), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Informations</th>
                            <td>";
        // line 100
        echo twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 100, $this->source); })()), "detail", [], "any", false, false, false, 100);
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
                            <th>datecreation</th>
                            <td>";
        // line 108
        ((twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 108, $this->source); })()), "createdAt", [], "any", false, false, false, 108)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 108, $this->source); })()), "createdAt", [], "any", false, false, false, 108), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                        </tr>
                        <tr>
                            <th>date modification</th>
                            <td>";
        // line 112
        ((twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 112, $this->source); })()), "updatedAt", [], "any", false, false, false, 112)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 112, $this->source); })()), "updatedAt", [], "any", false, false, false, 112), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                        </tr>
                        </tbody>
                    </table>

                    <div class=\"col-md-2\">
                        <a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hotel_index");
        echo "\" class=\"btn btn-block btn-info\">Back to List</a>
                    </div>
                    <div class=\"col-md-2\">
                        <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hotel_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121)]), "html", null, true);
        echo "\" class=\"btn btn-block btn-success\">Edit</a>
                    </div>

                    ";
        // line 124
        echo twig_include($this->env, $context, "admin/hotel/_delete_form.html.twig");
        echo "
                </div>
                <!-- /.card-body -->
                <div class=\"card-footer\">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/hotel/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 124,  259 => 121,  253 => 118,  244 => 112,  237 => 108,  230 => 104,  223 => 100,  216 => 96,  209 => 92,  202 => 88,  195 => 84,  188 => 80,  181 => 76,  174 => 72,  167 => 68,  160 => 64,  153 => 60,  146 => 56,  139 => 52,  132 => 48,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Blank Page</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">

            <!-- Default box -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Title</h3>

                    <div class=\"card-tools\">
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                            <i class=\"fas fa-minus\"></i></button>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                            <i class=\"fas fa-times\"></i></button>
                    </div>
                </div>
                <div class=\"card-body\">
                    <h1>Hotel</h1>

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
                            <th>Mote clé</th>
                            <td>{{ hotel.keywords }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ hotel.description }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src=\"{{ asset('uploads/images/' ~ hotel.image) }}\" height=\"100\"> </td>
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
                            <th> Ville</th>
                            <td>{{ hotel.city }}</td>
                        </tr>
                        <tr>
                            <th>Telephone</th>
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
                            <th>Informations</th>
                            <td>{{ hotel.detail |raw }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ hotel.status }}</td>
                        </tr>
                        <tr>
                            <th>datecreation</th>
                            <td>{{ hotel.createdAt ? hotel.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                        </tr>
                        <tr>
                            <th>date modification</th>
                            <td>{{ hotel.updatedAt ? hotel.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                        </tr>
                        </tbody>
                    </table>

                    <div class=\"col-md-2\">
                        <a href=\"{{ path('admin_hotel_index') }}\" class=\"btn btn-block btn-info\">Back to List</a>
                    </div>
                    <div class=\"col-md-2\">
                        <a href=\"{{ path('admin_hotel_edit', {'id': hotel.id}) }}\" class=\"btn btn-block btn-success\">Edit</a>
                    </div>

                    {{ include('admin/hotel/_delete_form.html.twig') }}
                </div>
                <!-- /.card-body -->
                <div class=\"card-footer\">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

{% endblock %}

", "admin/hotel/show.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\admin\\hotel\\show.html.twig");
    }
}
