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

/* home/habitat.html.twig */
class __TwigTemplate_73d7c18651c932742c982204bce315a58843134d5630521508477404fe35f13f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'keywords' => [$this, 'block_keywords'],
            'description' => [$this, 'block_description'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "homebase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/habitat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/habitat.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/habitat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 4, $this->source); })()), 0, [], "array", false, false, false, 4), "title", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 5, $this->source); })()), 0, [], "array", false, false, false, 5), "keywords", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new RuntimeError('Variable "setting" does not exist.', 6, $this->source); })()), 0, [], "array", false, false, false, 6), "description", [], "any", false, false, false, 6), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    
    <body class=\" \">
                <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TKP3BJ\"
                      height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
                            <div class=\"ex-site\">
            


    
<div class=\"home-hero bg-black bg-center bg-cover mt-0 flex relative\">
     <img src=\"https://escapadinhas.org/img/Escapadinha_1382_l.jpg\" srcset=\"data:https://escapadinhas.org/img/Escapadinha_1382_l.jpg==\" data-srcset=\"https://escapadinhas.org/img/Escapadinha_1382_l.jpg\" data-sizes=\"auto\" class=\"absolute pin w-full h-full object-fit-cover editable lazyload\" alt=\"\" width=\"1600\" height=\"1000\" >

    <div class=\"absolute pin w-full h-full overflow-hidden opacity-70\">

    </div>
    <div class=\"flex flex-col w-full min-h-screen-for-real relative\">
        <div class=\"container my-auto p-t-f1 p-b-f1\">


            <h1 class=\"alfa text-center text-white mt-13 mb-4\">HABITAT POUR ÊTRE VOUS-MÊME </h1>
            <div class=\"row justify-center text-white md:mb-7\">
                <div class=\"col sm:w-10/12 md:w-8/12 text-center\">
                    <p><strong> Atypik House </strong> est un agence de location de habitations insolites comme les cabanes dans les arbres, les yourtes ou les cabanes   avec services flexibles avec une touche personnelle pour l'aventure, relax, camping. Profitez du confort de la maison dans  le nature pour une nuit, une semaine, un mois ou plus

                    </p>
                </div>
            </div>
            <div class=\"row justify-center hidden md:flex\">
    <div class=\"col md:w-10/12 xl:w-full\">
       
    </div>
</div>




        </div>
        <a href=\"/habitat\" class=\"
         bg-pink
         text-white appearance-none flex items-center justify-center md:hidden bg-blue border-0 rounded-none p-0  no-underline font-bold uppercase h-70 text-xs tracking-wider\">
            <svg class=\"mr-4 relative\" style=\"top:-0.1em;\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"currentColor\"><path d=\"M15 3h-1V2a1 1 0 0 0-2 0v1h-2V2a1 1 0 0 0-2 0v1H6V2a1 1 0 0 0-2 0v1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm0 11a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V8h12z\"/></svg>            Book Now
        </a>
    </div>
</div>



<div class=\"p-t-f1 p-b-f1 bg-grey-lighter tear-before tear-after\">
    <div class=\"container\">
        <div class=\"flex perkzz-section -mx-container-gutter-sm md:-mx-gutter -mb-tear \" >
            <div class=\"col sm:w-1/2 lg:w-1/3 mt-9\">
                <div class=\"aspect-ratio-square relative bg-white\">
                    <div class=\"block absolute pin w-full h-full\">
                        <img src=\"https://q-xx.bstatic.com/images/hotel/max1024x768/169/169684578.jpg\" alt=\" les cabanes dans les arbres, \" width=\"5979\" height=\"3986\"  class=\"absolute pin w-full h-full\" >
                    </div>
                </div>
            </div>
            <div class=\"ccol w-10/12 sm:w-1/1 md:w-1/1 mt-7\" style=\"position: relative; padding-left: 50px\">
                <div>
                    <h3 class=\"bravo text-left mb-6\">
                        les cabanes dans les arbres, 
                        
                    </h3>
                    <p class=\"merchandize-text\">
                        AtypikHouse est un agence de location de habitations insolites comme les cabanes dans les arbres, les yourtes ou les cabanes   avec services flexibles avec une touche personnelle pour l'aventure, relax, camping. Profitez du confort de la maison dans  le nature pour une nuit, une semaine, un mois ou plus
                    </p>
                    <a href=\"/about\" class=\"bg-pink bg-pink-offers appearance-none leading-none inline-flex items-center justify-center no-underline rounded-none font-sans font-bold uppercase text-xs tracking-wider py-0 whitespace-no-wrap disabled:opacity-40 disabled:cursor-not-allowed text-white h-60 px-6 transition-bg border-0 bg-blue-dark hover:bg-blue-dark-60\" style=\"\">
                Our Story
    </a>

                </div>
            </div>
        </div>
    </div>
</div>



<div class=\"bg-grey-lighter p-b-f1 tear-after tear-before\">
    <div class=\"-mb-tear -mt-tear\">
        <div class=\"container\">
            <div class=\"perks -mx-container-gutter-sm flex flex-wrap flex-col\">
                <p class=\"charlie px-gutter mb-10 p-t-f1\"><span class=\"block xl:-mr-1/12\">Your home from home has got a lot going for it (if we do say so ourselves)!</span></p>
                <div class=\"w-full flex items-top sm:flex-wrap flickity\" data-flickity='{\"prevNextButtons\":true,\"pageDots\":true,\"watchCSS\":true, \"wrapAround\": true}'>
                   ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 97
            echo "                    <div class=\"w-230 flex-none sm:w-1/3 xl:pt-0 px-gutter perks-cats\">
                        <div class=\"perks-img mx-auto\">
                            <div class=\"relative\" style=\"padding-top:79.477611940299%;\">
                            <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            echo "\">
                               <a href=\"/user\"><img src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 101))), "html", null, true);
            echo "\" style=\"height: 250px; width:250px\" >
                                </a>
                            </div>
                        </div>
                        <div class=\"lg:w-10/12 supports- sm:text-center sm:mx-auto sm:block sm:max-w-230 sm:text-center grid:lg:w-5/12 echo mt-5 lg:mt-6\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 105), "html", null, true);
            echo "</div>
                    </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                 
             
                </div>
            </div>
        </div>
    </div>
</div>





    
                    </div>
                            <script type=\"text/javascript\">
                var _s4mq = _s4mq || [];
                (function() {
                    var s4mScript = document.createElement('script');
                    s4mScript.type = 'text/javascript';
                    s4mScript.async = true;
                    s4mScript.src = ('https:' == document.location.protocol ? 'https://' :
                        'http://') + 'libjs.s4mdsp.com/pa.js';
                    var s4mElement = document.getElementsByTagName('script')[0];
                    s4mElement.parentNode.insertBefore(s4mScript, s4mElement);
                })();
            </script>
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/habitat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 108,  237 => 105,  230 => 101,  226 => 100,  221 => 97,  217 => 96,  129 => 10,  119 => 9,  99 => 6,  80 => 5,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}


{% block title %}{{setting[0].title}}{% endblock %}
{% block keywords %}{{setting[0].keywords}}{% endblock %}
{% block description %}{{setting[0].description}} {% endblock %}

   
    {% block body %}
    
    <body class=\" \">
                <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TKP3BJ\"
                      height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
                            <div class=\"ex-site\">
            


    
<div class=\"home-hero bg-black bg-center bg-cover mt-0 flex relative\">
     <img src=\"https://escapadinhas.org/img/Escapadinha_1382_l.jpg\" srcset=\"data:https://escapadinhas.org/img/Escapadinha_1382_l.jpg==\" data-srcset=\"https://escapadinhas.org/img/Escapadinha_1382_l.jpg\" data-sizes=\"auto\" class=\"absolute pin w-full h-full object-fit-cover editable lazyload\" alt=\"\" width=\"1600\" height=\"1000\" >

    <div class=\"absolute pin w-full h-full overflow-hidden opacity-70\">

    </div>
    <div class=\"flex flex-col w-full min-h-screen-for-real relative\">
        <div class=\"container my-auto p-t-f1 p-b-f1\">


            <h1 class=\"alfa text-center text-white mt-13 mb-4\">HABITAT POUR ÊTRE VOUS-MÊME </h1>
            <div class=\"row justify-center text-white md:mb-7\">
                <div class=\"col sm:w-10/12 md:w-8/12 text-center\">
                    <p><strong> Atypik House </strong> est un agence de location de habitations insolites comme les cabanes dans les arbres, les yourtes ou les cabanes   avec services flexibles avec une touche personnelle pour l'aventure, relax, camping. Profitez du confort de la maison dans  le nature pour une nuit, une semaine, un mois ou plus

                    </p>
                </div>
            </div>
            <div class=\"row justify-center hidden md:flex\">
    <div class=\"col md:w-10/12 xl:w-full\">
       
    </div>
</div>




        </div>
        <a href=\"/habitat\" class=\"
         bg-pink
         text-white appearance-none flex items-center justify-center md:hidden bg-blue border-0 rounded-none p-0  no-underline font-bold uppercase h-70 text-xs tracking-wider\">
            <svg class=\"mr-4 relative\" style=\"top:-0.1em;\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"currentColor\"><path d=\"M15 3h-1V2a1 1 0 0 0-2 0v1h-2V2a1 1 0 0 0-2 0v1H6V2a1 1 0 0 0-2 0v1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm0 11a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V8h12z\"/></svg>            Book Now
        </a>
    </div>
</div>



<div class=\"p-t-f1 p-b-f1 bg-grey-lighter tear-before tear-after\">
    <div class=\"container\">
        <div class=\"flex perkzz-section -mx-container-gutter-sm md:-mx-gutter -mb-tear \" >
            <div class=\"col sm:w-1/2 lg:w-1/3 mt-9\">
                <div class=\"aspect-ratio-square relative bg-white\">
                    <div class=\"block absolute pin w-full h-full\">
                        <img src=\"https://q-xx.bstatic.com/images/hotel/max1024x768/169/169684578.jpg\" alt=\" les cabanes dans les arbres, \" width=\"5979\" height=\"3986\"  class=\"absolute pin w-full h-full\" >
                    </div>
                </div>
            </div>
            <div class=\"ccol w-10/12 sm:w-1/1 md:w-1/1 mt-7\" style=\"position: relative; padding-left: 50px\">
                <div>
                    <h3 class=\"bravo text-left mb-6\">
                        les cabanes dans les arbres, 
                        
                    </h3>
                    <p class=\"merchandize-text\">
                        AtypikHouse est un agence de location de habitations insolites comme les cabanes dans les arbres, les yourtes ou les cabanes   avec services flexibles avec une touche personnelle pour l'aventure, relax, camping. Profitez du confort de la maison dans  le nature pour une nuit, une semaine, un mois ou plus
                    </p>
                    <a href=\"/about\" class=\"bg-pink bg-pink-offers appearance-none leading-none inline-flex items-center justify-center no-underline rounded-none font-sans font-bold uppercase text-xs tracking-wider py-0 whitespace-no-wrap disabled:opacity-40 disabled:cursor-not-allowed text-white h-60 px-6 transition-bg border-0 bg-blue-dark hover:bg-blue-dark-60\" style=\"\">
                Our Story
    </a>

                </div>
            </div>
        </div>
    </div>
</div>



<div class=\"bg-grey-lighter p-b-f1 tear-after tear-before\">
    <div class=\"-mb-tear -mt-tear\">
        <div class=\"container\">
            <div class=\"perks -mx-container-gutter-sm flex flex-wrap flex-col\">
                <p class=\"charlie px-gutter mb-10 p-t-f1\"><span class=\"block xl:-mr-1/12\">Your home from home has got a lot going for it (if we do say so ourselves)!</span></p>
                <div class=\"w-full flex items-top sm:flex-wrap flickity\" data-flickity='{\"prevNextButtons\":true,\"pageDots\":true,\"watchCSS\":true, \"wrapAround\": true}'>
                   {% for rs in hotels %}
                    <div class=\"w-230 flex-none sm:w-1/3 xl:pt-0 px-gutter perks-cats\">
                        <div class=\"perks-img mx-auto\">
                            <div class=\"relative\" style=\"padding-top:79.477611940299%;\">
                            <a href=\"{{ path('hotel_show', {'id': rs.id}) }}\">
                               <a href=\"/user\"><img src=\"{{ asset('uploads/images/' ~ rs.image) }}\" style=\"height: 250px; width:250px\" >
                                </a>
                            </div>
                        </div>
                        <div class=\"lg:w-10/12 supports- sm:text-center sm:mx-auto sm:block sm:max-w-230 sm:text-center grid:lg:w-5/12 echo mt-5 lg:mt-6\">{{rs.title}}</div>
                    </div>
                      {% endfor %}
                 
             
                </div>
            </div>
        </div>
    </div>
</div>





    
                    </div>
                            <script type=\"text/javascript\">
                var _s4mq = _s4mq || [];
                (function() {
                    var s4mScript = document.createElement('script');
                    s4mScript.type = 'text/javascript';
                    s4mScript.async = true;
                    s4mScript.src = ('https:' == document.location.protocol ? 'https://' :
                        'http://') + 'libjs.s4mdsp.com/pa.js';
                    var s4mElement = document.getElementsByTagName('script')[0];
                    s4mElement.parentNode.insertBefore(s4mScript, s4mElement);
                })();
            </script>
          {% endblock %}  ", "home/habitat.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\home\\habitat.html.twig");
    }
}
