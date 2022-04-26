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

/* admin/hotel/index.html.twig */
class __TwigTemplate_7f01be324906b320d01cc58c5afe44e8b3d438810972c88467e8a3d98715ad27 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hotel/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hotel/index.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/hotel/index.html.twig", 1);
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

        echo "Hotel List";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <SCRIPT language=\"JavaScript\" type=\"text/javascript\">
        function openWin( windowURL, windowName, windowFeatures ) { window.open( windowURL, windowName, windowFeatures ) ; \t}
    </SCRIPT>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <div class=\"col-md-4\">
                            <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hotel_new");
        echo "\" class=\"btn btn-block btn-success\" > Ajouter une annonce</a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"/admin\">Home</a></li>
                            <li class=\"breadcrumb-item active\">liste de habitat</li>
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
                    <h3 class=\"card-title\">La liste d'habitat</h3>

                    <div class=\"card-tools\">
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                            <i class=\"fas fa-minus\"></i></button>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                            <i class=\"fas fa-times\"></i></button>
                    </div>
                </div>
                <div class=\"card-body\">


                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>Id</th>
                          
                            <th>titre</th>
                            <th>Image</th>
                            <th>Star</th>

                            <th>ville</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            

                            <th>I.Gallery</th>
                            <th>chambre</th>
                            <th>Status</th>

                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 72, $this->source); })()));
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
            // line 73
            echo "                            <tr>
                                <td >";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                               
                                <td nowrap>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "title", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                                <td>
                                    <img src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["hotel"], "image", [], "any", false, false, false, 78))), "html", null, true);
            echo "\" height=\"40\">  </td>
                                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "star", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>

                                <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "city", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                                <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "phone", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                                <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "email", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>

                             

                                <td>
                                    <a href=\"javascript:openWin('";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_new", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                     <img src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img"), "html", null, true);
            echo "/gallery.png\" height=\"40\" title=\"İmage Gallery\">
                                    </a>
                                </td>

                                <td>
                                    <a href=\"javascript:openWin('";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_room_new", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            echo "','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                        <img src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/img"), "html", null, true);
            echo "/room.jpg\" height=\"40\" title=\"Rooms\">
                                    </a>
                                </td>

                                <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "status", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>

                                <td>
                                    <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-info\">consulter</a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_hotel_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-info\">Modifier</a>
                                </td>
                                <td>
                                ";
            // line 108
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
            // line 112
            echo "                            <tr>
                                <td colspan=\"17\"> pas resultats</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                        </tbody>
                    </table>


                </div>


                <!-- /.card-body -->
                <div class=\"card-footer\">
                    
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
        return "admin/hotel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 116,  272 => 112,  255 => 108,  249 => 105,  243 => 102,  237 => 99,  230 => 95,  226 => 94,  218 => 89,  214 => 88,  206 => 83,  202 => 82,  198 => 81,  193 => 79,  189 => 78,  184 => 76,  179 => 74,  176 => 73,  158 => 72,  103 => 20,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'adminbase.html.twig' %}

{% block title %}Hotel List{% endblock %}


{% block body %}

    <SCRIPT language=\"JavaScript\" type=\"text/javascript\">
        function openWin( windowURL, windowName, windowFeatures ) { window.open( windowURL, windowName, windowFeatures ) ; \t}
    </SCRIPT>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <div class=\"col-md-4\">
                            <a href=\"{{ path('admin_hotel_new') }}\" class=\"btn btn-block btn-success\" > Ajouter une annonce</a>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"/admin\">Home</a></li>
                            <li class=\"breadcrumb-item active\">liste de habitat</li>
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
                    <h3 class=\"card-title\">La liste d'habitat</h3>

                    <div class=\"card-tools\">
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                            <i class=\"fas fa-minus\"></i></button>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                            <i class=\"fas fa-times\"></i></button>
                    </div>
                </div>
                <div class=\"card-body\">


                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>Id</th>
                          
                            <th>titre</th>
                            <th>Image</th>
                            <th>Star</th>

                            <th>ville</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            

                            <th>I.Gallery</th>
                            <th>chambre</th>
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

                             

                                <td>
                                    <a href=\"javascript:openWin('{{ path('admin_image_new', {'id': hotel.id}) }}','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                     <img src=\"{{ asset('assets/admin/img') }}/gallery.png\" height=\"40\" title=\"İmage Gallery\">
                                    </a>
                                </td>

                                <td>
                                    <a href=\"javascript:openWin('{{ path('admin_room_new', {'id': hotel.id}) }}','','toolbar=no,location=no,directories=0,status=no,top=50,left=100,menuBar=no,scrollBars=yes,resizable=no,width=900,height=600');\">
                                        <img src=\"{{ asset('assets/admin/img') }}/room.jpg\" height=\"40\" title=\"Rooms\">
                                    </a>
                                </td>

                                <td>{{ hotel.status }}</td>

                                <td>
                                    <a href=\"{{ path('admin_hotel_show', {'id': hotel.id}) }}\" class=\"btn btn-block btn-info\">consulter</a>
                                </td>
                                <td>
                                    <a href=\"{{ path('admin_hotel_edit', {'id': hotel.id}) }}\" class=\"btn btn-block btn-info\">Modifier</a>
                                </td>
                                <td>
                                {{ include('admin/hotel/_delete_form.html.twig') }}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"17\"> pas resultats</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>


                </div>


                <!-- /.card-body -->
                <div class=\"card-footer\">
                    
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

{% endblock %}

", "admin/hotel/index.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\admin\\hotel\\index.html.twig");
    }
}
