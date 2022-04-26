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

/* home/header.html.twig */
class __TwigTemplate_3f28b3adafc1f9de44b12622dd3a287ce5169f10e639f0c5797b89a4094311b4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/header.html.twig"));

        // line 1
        echo "<div id=\"wrapper\">
        <header class=\"global-header global-header--alt flex h-11 md:h-13 items-center fixed pin-t pin-l w-full z-50 text-black whitespace-no-wrap\">
    <a href=\"/home\" class=\"global-header__logo text-inherit no-underline ml-6 md:ml-8 mr-6 relative\">
        <img src=\"assets/img/logo.png\">
    </a>
    <nav class=\"global-header__nav flex-auto flex font-bold text-sm relative\">
        <a href=\"\" class=\"
          bg-pink
                mobnav:hidden ml-auto tracking-wider text-xs text-white bg-blue-dark hover:bg-blue-dark-60 no-underline flex items-center h-11 md:h-13 uppercase px-6 sm:px-7 mobnav:px-9 leading-none\"><svg class=\"mr-4 relative hidden sm:block\" fill=\"#9dd6d7\" style=\"top:-0.1em;\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"currentColor\"><path d=\"M15 3h-1V2a1 1 0 0 0-2 0v1h-2V2a1 1 0 0 0-2 0v1H6V2a1 1 0 0 0-2 0v1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm0 11a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V8h12z\"/></svg> Book now</a>
        <button type=\"button\" aria-expanded=\"false\" class=\"js-nav-toggle | nav-toggle block mobnav:hidden relative w-11 h-11 md:w-13 md:h-13\">
            <span class=\"sr-only\">Menu</span>
            <span></span>
        </button>
        <ul class=\"hidden expanded:flex flex-col mobnav:expanded:flex w-full list-reset fixed z-50 pin mt-11 md:mt-13 overflow-auto mobnav:overflow-visible mobnav:mt-0 mobnav:flex mobnav:flex-row mobnav:stat mobnav:pin-none bg-grey-lighter mobnav:bg-transparent\">
            <li class=\"relative\">
                <a href=\"/\" class=\" | text-inherit hover:text-blue transition-color no-underline flex items-center justify-between h-11 md:h-13 px-6 sm:px-7 mobnav:px-5 border-t border-grey-light mobnav:border-t-0\"><span></span>Accueil</span></a>
            </li>
   
            <li class=\"relative\">
                <a href=\"/habitat\" class=\" | text-inherit hover:text-blue transition-color no-underline flex items-center justify-between h-11 md:h-13 px-6 sm:px-7 mobnav:px-5 border-t border-grey-light mobnav:border-t-0\"><span>Habitat</span></a>
            </li>


            <li class=\"relative\">
                <a href=\"#\" class=\" | text-inherit hover:text-blue transition-color no-underline flex items-center justify-between h-11 md:h-13 px-6 sm:px-7 mobnav:px-5 border-t border-grey-light mobnav:border-t-0\" ><span>Location </span></a>
            </li>



            <li class=\"relative\">
                <a href=\"#\" class=\"active-nav-item'  | text-inherit hover:text-blue transition-color no-underline flex items-center justify-between h-11 md:h-13 px-6 sm:px-7 mobnav:px-5 border-t border-grey-light mobnav:border-t-0\"><span>Activi</span></a>
            </li>
            <li class=\"relative\">
                <a href=\"/contact\" class=\" text-inherit hover:text-blue transition-color no-underline flex items-center h-11 md:h-13 px-6 sm:px-7 mobnav:px-5 border-t border-grey-light mobnav:border-t-0\">Contact</a>
            </li>
            <li class=\"flex flex-wrap sm:flex-no-wrap items-center justify-between flex-none w-full mobnav:w-auto mt-auto ml-auto bg-center bg-cover p-6 sm:p-7 mobnav:p-0\">
                <ul class=\"list-reset flex w-full sm:w-auto -mx-3 sm:mx-0 mt-5 sm:mt-0\">
                
                    
                    <li class=\"flex-none w-1/2 sm:w-auto sm:ml-4 sm:ml-5 mobnav:ml-0 px-3 sm:px-0 hidden mobnav:inline-block\">
                        <a  href=\"/login\" style=\"background-color: #B1DDE8;
    display: flex;
    flex-direction: column;\" class=\"tracking-wider text-xs bg-transparent mobnav:bg-white border mobnav:border-t-0 mobnav:border-r-0 border-pink mobnav:border-grey-light text-pink mobnav:text-black mobnav:hover:text-blue no-underline flex items-center justify-center h-10 sm:h-11 mobnav:h-13 uppercase px-5 sm:px-7 mobnav:px-9 leading-none transition-color\">
                           

                            Log in
                        </a>
                    </li>
                      ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) {
            // line 50
            echo "                                    
                                    <a href=\"/user\"><img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "image", [], "any", false, false, false, 51))), "html", null, true);
            echo "\" style=\"height: 30px\" >
                                        ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "surname", [], "any", false, false, false, 52), "html", null, true);
            echo "</a>

                                   

                                   <a href=\"/logout\">Deconnexion</a>
                                ";
        } else {
            // line 58
            echo "                                  
                                    
                                   
                                ";
        }
        // line 62
        echo "                   
                </ul>
            </li>
        </ul>
    </nav>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 62,  113 => 58,  102 => 52,  98 => 51,  95 => 50,  93 => 49,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"wrapper\">
        <header class=\"global-header global-header--alt flex h-11 md:h-13 items-center fixed pin-t pin-l w-full z-50 text-black whitespace-no-wrap\">
    <a href=\"/home\" class=\"global-header__logo text-inherit no-underline ml-6 md:ml-8 mr-6 relative\">
        <img src=\"assets/img/logo.png\">
    </a>
    <nav class=\"global-header__nav flex-auto flex font-bold text-sm relative\">
        <a href=\"\" class=\"
          bg-pink
                mobnav:hidden ml-auto tracking-wider text-xs text-white bg-blue-dark hover:bg-blue-dark-60 no-underline flex items-center h-11 md:h-13 uppercase px-6 sm:px-7 mobnav:px-9 leading-none\"><svg class=\"mr-4 relative hidden sm:block\" fill=\"#9dd6d7\" style=\"top:-0.1em;\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"currentColor\"><path d=\"M15 3h-1V2a1 1 0 0 0-2 0v1h-2V2a1 1 0 0 0-2 0v1H6V2a1 1 0 0 0-2 0v1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm0 11a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V8h12z\"/></svg> Book now</a>
        <button type=\"button\" aria-expanded=\"false\" class=\"js-nav-toggle | nav-toggle block mobnav:hidden relative w-11 h-11 md:w-13 md:h-13\">
            <span class=\"sr-only\">Menu</span>
            <span></span>
        </button>
        <ul class=\"hidden expanded:flex flex-col mobnav:expanded:flex w-full list-reset fixed z-50 pin mt-11 md:mt-13 overflow-auto mobnav:overflow-visible mobnav:mt-0 mobnav:flex mobnav:flex-row mobnav:stat mobnav:pin-none bg-grey-lighter mobnav:bg-transparent\">
            <li class=\"relative\">
                <a href=\"/\" class=\" | text-inherit hover:text-blue transition-color no-underline flex items-center justify-between h-11 md:h-13 px-6 sm:px-7 mobnav:px-5 border-t border-grey-light mobnav:border-t-0\"><span></span>Accueil</span></a>
            </li>
   
            <li class=\"relative\">
                <a href=\"/habitat\" class=\" | text-inherit hover:text-blue transition-color no-underline flex items-center justify-between h-11 md:h-13 px-6 sm:px-7 mobnav:px-5 border-t border-grey-light mobnav:border-t-0\"><span>Habitat</span></a>
            </li>


            <li class=\"relative\">
                <a href=\"#\" class=\" | text-inherit hover:text-blue transition-color no-underline flex items-center justify-between h-11 md:h-13 px-6 sm:px-7 mobnav:px-5 border-t border-grey-light mobnav:border-t-0\" ><span>Location </span></a>
            </li>



            <li class=\"relative\">
                <a href=\"#\" class=\"active-nav-item'  | text-inherit hover:text-blue transition-color no-underline flex items-center justify-between h-11 md:h-13 px-6 sm:px-7 mobnav:px-5 border-t border-grey-light mobnav:border-t-0\"><span>Activi</span></a>
            </li>
            <li class=\"relative\">
                <a href=\"/contact\" class=\" text-inherit hover:text-blue transition-color no-underline flex items-center h-11 md:h-13 px-6 sm:px-7 mobnav:px-5 border-t border-grey-light mobnav:border-t-0\">Contact</a>
            </li>
            <li class=\"flex flex-wrap sm:flex-no-wrap items-center justify-between flex-none w-full mobnav:w-auto mt-auto ml-auto bg-center bg-cover p-6 sm:p-7 mobnav:p-0\">
                <ul class=\"list-reset flex w-full sm:w-auto -mx-3 sm:mx-0 mt-5 sm:mt-0\">
                
                    
                    <li class=\"flex-none w-1/2 sm:w-auto sm:ml-4 sm:ml-5 mobnav:ml-0 px-3 sm:px-0 hidden mobnav:inline-block\">
                        <a  href=\"/login\" style=\"background-color: #B1DDE8;
    display: flex;
    flex-direction: column;\" class=\"tracking-wider text-xs bg-transparent mobnav:bg-white border mobnav:border-t-0 mobnav:border-r-0 border-pink mobnav:border-grey-light text-pink mobnav:text-black mobnav:hover:text-blue no-underline flex items-center justify-center h-10 sm:h-11 mobnav:h-13 uppercase px-5 sm:px-7 mobnav:px-9 leading-none transition-color\">
                           

                            Log in
                        </a>
                    </li>
                      {% if app.user %}
                                    
                                    <a href=\"/user\"><img src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" style=\"height: 30px\" >
                                        {{ app.user.name }}  {{ app.user.surname }}</a>

                                   

                                   <a href=\"/logout\">Deconnexion</a>
                                {% else %}
                                  
                                    
                                   
                                {% endif %}
                   
                </ul>
            </li>
        </ul>
    </nav>
</header>", "home/header.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\home\\header.html.twig");
    }
}
