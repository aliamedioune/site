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

/* admin/image/new.html.twig */
class __TwigTemplate_5c79f0b1bafc063810c03441cc23946a76157a03f1815651cc134d5240707218 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/image/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/image/new.html.twig"));

        // line 1
        echo "

<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/plugins/fontawesome-free/css/all.min.css\">
<!-- Ionicons -->
<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
<!-- overlayScrollbars -->
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/dist/css/adminlte.min.css\">
<!-- Google Font: Source Sans Pro -->
<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">

    <div class=\"card card-primary\">

        <!-- /.card-header -->
        <!-- form start -->
        <form role=\"form\" name=\"image\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_new", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })())]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        <label for=\"exampleInputEmail1\">Title</label>
                    </div>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\"  type=\"text\" id=\"image_title\" name=\"image[title]\" maxlength=\"50\">
                        <input type=\"hidden\" id=\"image_hotel\" name=\"image[hotel]\" class=\"form-control\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\">
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-2\">
                    <label for=\"exampleInputFile\">Gallery İmage</label>
                    </div>
                    <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <div class=\"custom-file\">
                            <input  class=\"custom-file-input\" type=\"file\" id=\"image_image\" name=\"image[image]\" >
                            <label class=\"custom-file-label\" for=\"exampleInputFile\">Choose file</label>

                        </div>

                    </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->

            <div class=\"card-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            </div>
        </form>
    </div>


    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Image</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 65
            echo "            <tr>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 68))), "html", null, true);
            echo "\" height=\"60\">
                </td>
                <td>

                    <form method=\"post\" action=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 72), "hid" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 72, $this->source); })())]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 74))), "html", null, true);
            echo "\">
                        <button class=\"btn btn-block btn-danger\">Delete</button>
                    </form>

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        </tbody>
    </table>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/image/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 85,  160 => 81,  148 => 74,  143 => 72,  136 => 68,  132 => 67,  128 => 66,  125 => 65,  120 => 64,  77 => 24,  66 => 16,  55 => 8,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!-- Font Awesome -->
<link rel=\"stylesheet\" href=\"{{ asset('assets') }}/admin/plugins/fontawesome-free/css/all.min.css\">
<!-- Ionicons -->
<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
<!-- overlayScrollbars -->
<link rel=\"stylesheet\" href=\"{{ asset('assets') }}/admin/dist/css/adminlte.min.css\">
<!-- Google Font: Source Sans Pro -->
<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">

    <div class=\"card card-primary\">

        <!-- /.card-header -->
        <!-- form start -->
        <form role=\"form\" name=\"image\" action=\"{{ path('admin_image_new', {'id': id}) }}\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        <label for=\"exampleInputEmail1\">Title</label>
                    </div>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\"  type=\"text\" id=\"image_title\" name=\"image[title]\" maxlength=\"50\">
                        <input type=\"hidden\" id=\"image_hotel\" name=\"image[hotel]\" class=\"form-control\" value=\"{{ id }}\">
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-2\">
                    <label for=\"exampleInputFile\">Gallery İmage</label>
                    </div>
                    <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <div class=\"custom-file\">
                            <input  class=\"custom-file-input\" type=\"file\" id=\"image_image\" name=\"image[image]\" >
                            <label class=\"custom-file-label\" for=\"exampleInputFile\">Choose file</label>

                        </div>

                    </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->

            <div class=\"card-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            </div>
        </form>
    </div>


    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Image</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        {% for image in images %}
            <tr>
                <td>{{ image.id }}</td>
                <td>{{ image.title }}</td>
                <td><img src=\"{{ asset('uploads/images/' ~ image.image) }}\" height=\"60\">
                </td>
                <td>

                    <form method=\"post\" action=\"{{ path('admin_image_delete', {'id': image.id,'hid': id})}}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ image.id) }}\">
                        <button class=\"btn btn-block btn-danger\">Delete</button>
                    </form>

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>



", "admin/image/new.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\admin\\image\\new.html.twig");
    }
}
