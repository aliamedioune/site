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

/* admin/reservation/index.html.twig */
class __TwigTemplate_7e421402429bea7b4b497ac5934c9fe6d93a2cdad0a0413df83218d473b121d7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/reservation/index.html.twig", 1);
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
                        <h1> Liste reservation </h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"/admin\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Messages</li>
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
                    <h3 class=\"card-title\">Titre</h3>

                    <div class=\"card-tools\">
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                            <i class=\"fas fa-minus\"></i></button>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" data-toggle=\"tooltip\" title=\"supprimer\">
                            <i class=\"fas fa-times\"></i></button>
                    </div>
                </div>
                <div class=\"card-body\">

                    <table class=\"table\">
                        <thead>
                        <tr>

                            <th>Userid</th>
                            <th>Habitatid</th>
                            <th>chambreid</th>
                            <th>Nom</th>
                            <th>NomUtilisateur</th>

                            <th>Date debut</th>
                            <th>date de sortie</th>
                            <th>Nomber des Jours</th>
                            <th>Totale</th>


                            <th>Note</th>
                            <th>Status</th>
                            <th> date création</th>

                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 67, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 68
            echo "                            <tr>

                                <td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "userid", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\">
                                    ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "username", [], "any", false, false, false, 71), "html", null, true);
            echo "
                                    </a>
                                </td>
                                <td><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "hotelid", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">
                                    ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "hname", [], "any", false, false, false, 75), "html", null, true);
            echo "
                                    </a>
                                </td>
                                <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "rname", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "name", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "surname", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>

                                <td>";
            // line 82
            ((twig_get_attribute($this->env, $this->source, $context["reservation"], "checkin", [], "any", false, false, false, 82)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "checkin", [], "any", false, false, false, 82), "d-m-y"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td>";
            // line 83
            ((twig_get_attribute($this->env, $this->source, $context["reservation"], "checkout", [], "any", false, false, false, 83)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "checkout", [], "any", false, false, false, 83), "d-m-y"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "days", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                                <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "total", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>

                                <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "note", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                                <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                                <td>";
            // line 89
            ((twig_get_attribute($this->env, $this->source, $context["reservation"], "created_at", [], "any", false, false, false, 89)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "created_at", [], "any", false, false, false, 89), "d-m-y"), "html", null, true))) : (print ("")));
            echo "</td>

                                <td>
                                    <a  class=\"btn btn-block btn-default\" href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\">Consulter</a>
                                </td>
                                <td>
                                    <a class=\"btn btn-block btn-info\" href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            echo "\">Modifier</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 99
            echo "                            <tr>
                                <td colspan=\"19\"> Pas Resultat </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                        </tbody>
                    </table>



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
        return "admin/reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 103,  239 => 99,  230 => 95,  224 => 92,  218 => 89,  214 => 88,  210 => 87,  205 => 85,  201 => 84,  197 => 83,  193 => 82,  188 => 80,  184 => 79,  180 => 78,  174 => 75,  170 => 74,  164 => 71,  160 => 70,  156 => 68,  151 => 67,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                        <h1> Liste reservation </h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"/admin\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Messages</li>
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
                    <h3 class=\"card-title\">Titre</h3>

                    <div class=\"card-tools\">
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                            <i class=\"fas fa-minus\"></i></button>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" data-toggle=\"tooltip\" title=\"supprimer\">
                            <i class=\"fas fa-times\"></i></button>
                    </div>
                </div>
                <div class=\"card-body\">

                    <table class=\"table\">
                        <thead>
                        <tr>

                            <th>Userid</th>
                            <th>Habitatid</th>
                            <th>chambreid</th>
                            <th>Nom</th>
                            <th>NomUtilisateur</th>

                            <th>Date debut</th>
                            <th>date de sortie</th>
                            <th>Nomber des Jours</th>
                            <th>Totale</th>


                            <th>Note</th>
                            <th>Status</th>
                            <th> date création</th>

                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for reservation in reservations %}
                            <tr>

                                <td><a href=\"{{ path('admin_user_show', {'id': reservation.userid}) }}\">
                                    {{ reservation.username }}
                                    </a>
                                </td>
                                <td><a href=\"{{ path('admin_hotel_show', {'id': reservation.hotelid}) }}\">
                                    {{ reservation.hname }}
                                    </a>
                                </td>
                                <td>{{ reservation.rname }}</td>
                                <td>{{ reservation.name }}</td>
                                <td>{{ reservation.surname }}</td>

                                <td>{{ reservation.checkin ? reservation.checkin|date('d-m-y') : '' }}</td>
                                <td>{{ reservation.checkout ? reservation.checkout|date('d-m-y') : '' }}</td>
                                <td>{{ reservation.days }}</td>
                                <td>{{ reservation.total }}</td>

                                <td>{{ reservation.note }}</td>
                                <td>{{ reservation.status }}</td>
                                <td>{{ reservation.created_at ? reservation.created_at|date('d-m-y') : '' }}</td>

                                <td>
                                    <a  class=\"btn btn-block btn-default\" href=\"{{ path('admin_reservation_show', {'id': reservation.id}) }}\">Consulter</a>
                                </td>
                                <td>
                                    <a class=\"btn btn-block btn-info\" href=\"{{ path('admin_reservation_edit', {'id': reservation.id}) }}\">Modifier</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"19\"> Pas Resultat </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>



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

{% endblock %}", "admin/reservation/index.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\admin\\reservation\\index.html.twig");
    }
}
