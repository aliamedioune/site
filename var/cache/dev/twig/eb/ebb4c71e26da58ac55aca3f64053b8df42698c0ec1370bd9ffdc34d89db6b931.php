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

/* home/header */
class __TwigTemplate_f1f854223a91a877be7d5e6a3c8b587abb7d06c2e8c74a2a9114a8849ddf1752 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header"));

        // line 1
        echo "<div id=\"wrapper\">
    <header>
        <!-- Navbar
      ================================================== -->
        <div class=\"navbar navbar-static-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <!-- logo -->
                    <div class=\"logo\" style=>
                        <a href=\"/\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/logo.jpg\" alt=\"\" /></a>
                    </div>
                    <!-- end logo -->

                    <!-- top menu -->
                    <div class=\"navigation\">
<nav>

  <a href=\"\">Home</a>
   <a href=\"#\"> Habitat</a>
  <a href=\"#\">Location</a>
 <a href=\"#\">Activités</a>
<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_user");
        echo "\">Login</a>
 <a href=\"/contact\">Contacts</a>
  
                                ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "                                    
                                    <a href=\"/user\"><img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "image", [], "any", false, false, false, 27))), "html", null, true);
            echo "\" style=\"height: 30px\" >
                                        ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "surname", [], "any", false, false, false, 28), "html", null, true);
            echo "</a>

                                   

                                   <a href=\"/logout\">Logout</a>
                                ";
        } else {
            // line 34
            echo "                                  
                                        <a href=\"/login\"><i class=\"icon-envelope-alt\"></i> Login</a>
                                   
                                ";
        }
        // line 38
        echo "                            
 
</nav>
                    </div>
                    <!-- end menu -->

                </div>
            </div>
        </div>
    </header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/header";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 38,  95 => 34,  84 => 28,  80 => 27,  77 => 26,  75 => 25,  69 => 22,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"wrapper\">
    <header>
        <!-- Navbar
      ================================================== -->
        <div class=\"navbar navbar-static-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <!-- logo -->
                    <div class=\"logo\" style=>
                        <a href=\"/\"><img src=\"{{asset('assets')}}/img/logo.jpg\" alt=\"\" /></a>
                    </div>
                    <!-- end logo -->

                    <!-- top menu -->
                    <div class=\"navigation\">
<nav>

  <a href=\"\">Home</a>
   <a href=\"#\"> Habitat</a>
  <a href=\"#\">Location</a>
 <a href=\"#\">Activités</a>
<a href=\"{{path('login_user')}}\">Login</a>
 <a href=\"/contact\">Contacts</a>
  
                                {% if app.user %}
                                    
                                    <a href=\"/user\"><img src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" style=\"height: 30px\" >
                                        {{ app.user.name }}  {{ app.user.surname }}</a>

                                   

                                   <a href=\"/logout\">Logout</a>
                                {% else %}
                                  
                                        <a href=\"/login\"><i class=\"icon-envelope-alt\"></i> Login</a>
                                   
                                {% endif %}
                            
 
</nav>
                    </div>
                    <!-- end menu -->

                </div>
            </div>
        </div>
    </header>", "home/header", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\home\\header");
    }
}
