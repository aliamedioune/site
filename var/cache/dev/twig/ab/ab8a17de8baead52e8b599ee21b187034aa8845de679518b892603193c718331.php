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

/* home/header1.html.twig */
class __TwigTemplate_34819b0be426f0f9bc95edda3472e7a57cd1f36d56effec95e7b04c5f89e8072 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header1.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  float:left;
  left:20%;
  position:absolute;
  
}

.topnav a {
  float: left;
  left:25%;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

a.active {
 background-color:#57cc99;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;

  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<script>
function myFunction() {
  var x = document.getElementById(\"myTopnav\");
  if (x.className === \"topnav\") {
    x.className += \" responsive\";
  } else {
    x.className = \"topnav\";
  }
}
</script>

<div id=\"wrapper\">
    <header>
        <!-- Navbar
      ================================================== -->
        <div class=\"navbar navbar-static-top\">
            <div class=\"navbar-inner\" >
                <div class=\"container\">
                    <!-- logo -->
                    <div class=\"logo\"  style=\"position:absolute;  float:left ; left:10%\">
                        <a href=\"/\"><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/logof.png\" alt=\"Logo AtypikHouse\" /></a>
                    </div>
                    <!-- end logo -->
\t\t\t\t\t
\t\t\t\t\t<div></div>
\t\t\t\t\t
                    <!-- top menu -->
                    <div class=\"navigation\">
\t\t\t\t\t\t<div class=\"topnav\" id=\"myTopnav\">
\t\t\t\t\t\t\t<a href=\"/\"class=\"active\">Accueil</a>
\t\t\t\t\t\t\t<a href=\"/habitat\">Habitats</a>
\t\t\t\t\t\t\t<a href=\"/location\">Voitures</a>
\t\t\t\t\t<!--\t<a href=\"activite\">Activités</a>  -->
\t\t\t\t\t\t\t<a href=\"/about\">Qui sommes-nous</a>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" style=\"font-size:15px; color:black\" class=\"icon\" onclick=\"myFunction()\">&#9776;</a>
\t\t\t\t\t\t\t<a href=\"/contact\">Contact</a>
  
\t\t\t\t\t\t\t";
        // line 149
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "user", [], "any", false, false, false, 149)) {
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"/user\"><img src=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "image", [], "any", false, false, false, 150))), "html", null, true);
            echo "\" style=\"height: 30px\">
\t\t\t\t\t\t\t\t\t";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "name", [], "any", false, false, false, 151), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "surname", [], "any", false, false, false, 151), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t<a href=\"/logout\">Déconnexion</a>
\t\t\t\t\t\t\t";
        } else {
            // line 154
            echo "\t\t\t\t\t\t\t\t<a href=\"/login\"><i class=\"icon-envelope-alt\"></i>Se connecter</a>
\t\t\t\t\t\t\t";
        }
        // line 156
        echo "\t\t\t\t\t\t</div>
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
        return "home/header1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 156,  212 => 154,  204 => 151,  200 => 150,  196 => 149,  176 => 132,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  float:left;
  left:20%;
  position:absolute;
  
}

.topnav a {
  float: left;
  left:25%;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

a.active {
 background-color:#57cc99;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;

  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<script>
function myFunction() {
  var x = document.getElementById(\"myTopnav\");
  if (x.className === \"topnav\") {
    x.className += \" responsive\";
  } else {
    x.className = \"topnav\";
  }
}
</script>

<div id=\"wrapper\">
    <header>
        <!-- Navbar
      ================================================== -->
        <div class=\"navbar navbar-static-top\">
            <div class=\"navbar-inner\" >
                <div class=\"container\">
                    <!-- logo -->
                    <div class=\"logo\"  style=\"position:absolute;  float:left ; left:10%\">
                        <a href=\"/\"><img src=\"{{asset('assets')}}/img/logof.png\" alt=\"Logo AtypikHouse\" /></a>
                    </div>
                    <!-- end logo -->
\t\t\t\t\t
\t\t\t\t\t<div></div>
\t\t\t\t\t
                    <!-- top menu -->
                    <div class=\"navigation\">
\t\t\t\t\t\t<div class=\"topnav\" id=\"myTopnav\">
\t\t\t\t\t\t\t<a href=\"/\"class=\"active\">Accueil</a>
\t\t\t\t\t\t\t<a href=\"/habitat\">Habitats</a>
\t\t\t\t\t\t\t<a href=\"/location\">Voitures</a>
\t\t\t\t\t<!--\t<a href=\"activite\">Activités</a>  -->
\t\t\t\t\t\t\t<a href=\"/about\">Qui sommes-nous</a>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" style=\"font-size:15px; color:black\" class=\"icon\" onclick=\"myFunction()\">&#9776;</a>
\t\t\t\t\t\t\t<a href=\"/contact\">Contact</a>
  
\t\t\t\t\t\t\t{% if app.user %}\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"/user\"><img src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" style=\"height: 30px\">
\t\t\t\t\t\t\t\t\t{{ app.user.name }}  {{ app.user.surname }}</a>
\t\t\t\t\t\t\t\t<a href=\"/logout\">Déconnexion</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"/login\"><i class=\"icon-envelope-alt\"></i>Se connecter</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
                    </div>
                    <!-- end menu -->

                </div>
            </div>
        </div>
    </header>", "home/header1.html.twig", "/Applications/MAMP/htdocs/site-atypikhouse salma/templates/home/header1.html.twig");
    }
}
