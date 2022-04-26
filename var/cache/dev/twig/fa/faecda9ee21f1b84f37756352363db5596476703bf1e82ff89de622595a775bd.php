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

/* user/usermenu.html.twig */
class __TwigTemplate_3ab8d252491b1d3288379d047baba6079f9385294a43ad4c6a2b3252005284fd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/usermenu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/usermenu.html.twig"));

        // line 1
        echo "<div class=\"span3\">
    <aside>
        <div class=\"widget\">

            <h4 class=\"rheading\">User Menu<span></span></h4>
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "image", [], "any", false, false, false, 6))), "html", null, true);
        echo "\"  style=\"height: 80px\" class=\"img-circle\">
            ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "surname", [], "any", false, false, false, 7), "html", null, true);
        echo "
            <ul class=\"cat\">
                <li><a href=\"/user\">Profile</a></li>
                <li><a href=\"/user/hotel\">Habitat</a></li>
                <li><a href=\"/user/chambre\"> Chambres D'habitats</a></li>
                <li><a href=\"/user/comments\">les commentaires</a></li>
                <li><a href=\"/user/reservations\"> Reservation</a></li>
                <li><a href=\"/logout\">Deconnexion</a></li>
            </ul>
        </div>
    </aside>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/usermenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"span3\">
    <aside>
        <div class=\"widget\">

            <h4 class=\"rheading\">User Menu<span></span></h4>
            <img src=\"{{ asset('uploads/images/' ~ app.user.image) }}\"  style=\"height: 80px\" class=\"img-circle\">
            {{ app.user.name }} {{ app.user.surname }}
            <ul class=\"cat\">
                <li><a href=\"/user\">Profile</a></li>
                <li><a href=\"/user/hotel\">Habitat</a></li>
                <li><a href=\"/user/chambre\"> Chambres D'habitats</a></li>
                <li><a href=\"/user/comments\">les commentaires</a></li>
                <li><a href=\"/user/reservations\"> Reservation</a></li>
                <li><a href=\"/logout\">Deconnexion</a></li>
            </ul>
        </div>
    </aside>
</div>", "user/usermenu.html.twig", "/Applications/MAMP/htdocs/site-atypikhouse salma/templates/user/usermenu.html.twig");
    }
}
