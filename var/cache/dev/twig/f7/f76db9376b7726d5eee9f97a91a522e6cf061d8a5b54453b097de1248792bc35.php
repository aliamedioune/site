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

/* admin/category/_form2.html.twig */
class __TwigTemplate_92bee7fd7d5953623dd251ff79a2b5d1a6b560a980ec10f9502dbc45604f7aaf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/_form2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/_form2.html.twig"));

        // line 1
        echo "
<div class=\"card card-primary\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">Create Category</h3>
    </div>




    <!-- /.card-header -->
    <!-- form start -->
    <form name=\"category\" method=\"post\">
        <div class=\"card-body\">
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Parent </label>
                <select id=\"category_parentid\" name=\"category[parentid]\"   class=\"form-control\">


                    <option value=\"0\"> Main Category </option>

                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 22
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\" ";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 22, $this->source); })()), "parentid", [], "any", false, false, false, 22)))) ? (" Selected") : (""));
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", [], "any", false, false, false, 22), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
                </select>

            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Kategory Name </label>
                <input type=\"text\" id=\"category_title\" name=\"category[title]\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Description </label>
                <input type=\"text\" id=\"category_description\" name=\"category[description]\"  value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), "html", null, true);
        echo "\"   class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Kategory Keywords </label>
                <input type=\"text\" id=\"category_keywords\" name=\"category[keywords]\"   value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 38, $this->source); })()), "keywords", [], "any", false, false, false, 38), "html", null, true);
        echo "\"   class=\"form-control\"/>
            </div>

            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Status </label>
                <select id=\"category_status\" name=\"category[status]\"  class=\"form-control\">
                    <option> ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 44, $this->source); })()), "status", [], "any", false, false, false, 44), "html", null, true);
        echo " </option>
                    <option> True </option>
                    <option> False </option>
                </select>
            </div>

        </div>
        <!-- /.card-body -->

        <div class=\"card-footer\">
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </div>
    </form>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/category/_form2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  104 => 38,  97 => 34,  90 => 30,  82 => 24,  69 => 22,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"card card-primary\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">Create Category</h3>
    </div>




    <!-- /.card-header -->
    <!-- form start -->
    <form name=\"category\" method=\"post\">
        <div class=\"card-body\">
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Parent </label>
                <select id=\"category_parentid\" name=\"category[parentid]\"   class=\"form-control\">


                    <option value=\"0\"> Main Category </option>

                    {% for cat in categories %}
                        <option value=\"{{cat.id  }}\" {{ cat.id==category.parentid ? ' Selected': '' }}> {{ cat.title }}</option>
                    {% endfor %}

                </select>

            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Kategory Name </label>
                <input type=\"text\" id=\"category_title\" name=\"category[title]\" value=\"{{ category.title }}\" required=\"required\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Description </label>
                <input type=\"text\" id=\"category_description\" name=\"category[description]\"  value=\"{{ category.description }}\"   class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Kategory Keywords </label>
                <input type=\"text\" id=\"category_keywords\" name=\"category[keywords]\"   value=\"{{ category.keywords }}\"   class=\"form-control\"/>
            </div>

            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Status </label>
                <select id=\"category_status\" name=\"category[status]\"  class=\"form-control\">
                    <option> {{ category.status }} </option>
                    <option> True </option>
                    <option> False </option>
                </select>
            </div>

        </div>
        <!-- /.card-body -->

        <div class=\"card-footer\">
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </div>
    </form>
</div>

", "admin/category/_form2.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\admin\\category\\_form2.html.twig");
    }
}
