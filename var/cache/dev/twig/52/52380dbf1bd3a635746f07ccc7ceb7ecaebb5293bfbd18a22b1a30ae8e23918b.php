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

/* admin/setting/index.html.twig */
class __TwigTemplate_1bcb773c8379ed35554317e04898e2fd5bccd4e76773fbb7b47013f56608b478 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/index.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/setting/index.html.twig", 1);
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
                    <h1>Génèrale Paramétre</h1>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        <li class=\"breadcrumb-item\"><a href=\"/admin\">Home</a></li>
                        <li class=\"breadcrumb-item active\">Paramétre</li>
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
                <h3 class=\"card-title\">Setting</h3>

                <div class=\"card-tools\">
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fas fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" data-toggle=\"tooltip\" title=\"Supprimer\">
                        <i class=\"fas fa-times\"></i></button>
                </div>
            </div>
            <div class=\"card-body\">


    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>

                <th>Company</th>

                <th>Email</th>

                <th>Status</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["setting"]) {
            // line 60
            echo "            <tr>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["setting"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["setting"], "title", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>

                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["setting"], "company", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>

                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["setting"], "email", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>

                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["setting"], "status", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_show", ["id" => twig_get_attribute($this->env, $this->source, $context["setting"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-info\">Consulter</a>
                </td>
                <td>
                    <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["setting"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-info\"> Modifier</a>

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "            <tr>
                <td colspan=\"21\">no records found
                    <a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_new");
            echo "\" class=\"btn btn-block btn-info\">Create Settings</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['setting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </tbody>
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
        return "admin/setting/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 84,  195 => 80,  191 => 78,  181 => 73,  175 => 70,  170 => 68,  165 => 66,  160 => 64,  155 => 62,  151 => 61,  148 => 60,  143 => 59,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                    <h1>Génèrale Paramétre</h1>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        <li class=\"breadcrumb-item\"><a href=\"/admin\">Home</a></li>
                        <li class=\"breadcrumb-item active\">Paramétre</li>
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
                <h3 class=\"card-title\">Setting</h3>

                <div class=\"card-tools\">
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fas fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" data-toggle=\"tooltip\" title=\"Supprimer\">
                        <i class=\"fas fa-times\"></i></button>
                </div>
            </div>
            <div class=\"card-body\">


    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>

                <th>Company</th>

                <th>Email</th>

                <th>Status</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for setting in settings %}
            <tr>
                <td>{{ setting.id }}</td>
                <td>{{ setting.title }}</td>

                <td>{{ setting.company }}</td>

                <td>{{ setting.email }}</td>

                <td>{{ setting.status }}</td>
                <td>
                    <a href=\"{{ path('setting_show', {'id': setting.id}) }}\" class=\"btn btn-block btn-info\">Consulter</a>
                </td>
                <td>
                    <a href=\"{{ path('setting_edit', {'id': setting.id}) }}\" class=\"btn btn-block btn-info\"> Modifier</a>

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"21\">no records found
                    <a href=\"{{ path('setting_new') }}\" class=\"btn btn-block btn-info\">Create Settings</a>
                </td>
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

{% endblock %}
", "admin/setting/index.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\admin\\setting\\index.html.twig");
    }
}
