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

/* save_file.html.twig */
class __TwigTemplate_bc142b204df51b3591a24c6a88422246576e836d10243cae3d99e11b8ae8129d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "save_file.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "save_file.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "<div class=\"home-hero bg-black bg-center bg-cover mt-0 flex relative\">
        ";
        // line 6
        echo "
    <div class=\"absolute pin w-full h-full overflow-hidden opacity-70\">

    </div>
    <div class=\"flex flex-col w-full min-h-screen-for-real relative\">
        <div class=\"container my-auto p-t-f1 p-b-f1\">
";
        // line 13
        echo "<div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <!-- Place somewhere in the <body> of your page -->
                <div id=\"mainslider\" class=\"flexslider\">
                    <ul class=\"slides\">

                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) || array_key_exists("slider", $context) ? $context["slider"] : (function () { throw new RuntimeError('Variable "slider" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 21
            echo "                            <li data-thumb=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 21))), "html", null, true);
            echo "\" style=\"height: 400px\">
                                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">
                                    <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 23))), "html", null, true);
            echo "\"   style=\"height: 400px; width:940px \"  alt=\"\" />
                                </a>
                                <div class=\"flex-caption primary\">
                                    <h2>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</h2>
                                    <p>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "description", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                                </div>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "

                    </ul>
                </div>
            </div>
        </div>
    </div>
";
        // line 39
        echo "
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
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "save_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 39,  99 => 31,  89 => 27,  85 => 26,  79 => 23,  75 => 22,  70 => 21,  66 => 20,  57 => 13,  49 => 6,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# div photo noir #}
<div class=\"home-hero bg-black bg-center bg-cover mt-0 flex relative\">
        {# <img src=\"https://res.cloudinary.com/dfbe6xcrt/image/upload/fl_lossy,f_auto,q_60/w_1600,h_1000,c_fill/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg\" srcset=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-srcset=\"https://res.cloudinary.com/dfbe6xcrt/image/upload/w_1600%2Ch_1000%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 1600w,https://res.cloudinary.com/dfbe6xcrt/image/upload/w_1500%2Ch_938%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 1500w,https://res.cloudinary.com/dfbe6xcrt/image/upload/w_1400%2Ch_875%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 1400w,https://res.cloudinary.com/dfbe6xcrt/image/upload/w_1300%2Ch_813%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 1300w,https://res.cloudinary.com/dfbe6xcrt/image/upload/w_1200%2Ch_750%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 1200w,https://res.cloudinary.com/dfbe6xcrt/image/upload/w_1100%2Ch_688%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 1100w,https://res.cloudinary.com/dfbe6xcrt/image/upload/w_1000%2Ch_625%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 1000w,https://res.cloudinary.com/dfbe6xcrt/image/upload/w_900%2Ch_563%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 900w,https://res.cloudinary.com/dfbe6xcrt/image/upload/w_800%2Ch_500%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 800w,https://res.cloudinary.com/dfbe6xcrt/image/upload/w_700%2Ch_438%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 700w,https://res.cloudinary.com/dfbe6xcrt/image/upload/w_600%2Ch_375%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 600w,https://res.cloudinary.com/dfbe6xcrt/image/upload/w_500%2Ch_313%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 500w,https://res.cloudinary.com/dfbe6xcrt/image/upload/w_400%2Ch_250%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 400w,https://res.cloudinary.com/dfbe6xcrt/image/upload/w_300%2Ch_188%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 300w,https://res.cloudinary.com/dfbe6xcrt/image/upload/w_200%2Ch_125%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 200w,https://res.cloudinary.com/dfbe6xcrt/image/upload/w_100%2Ch_63%2Cc_fill%2Cf_auto%2Cq_auto/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg 100w\" data-sizes=\"auto\" class=\"absolute pin w-full h-full object-fit-cover editable lazyload\" alt=\"\" width=\"1600\" height=\"1000\" >
  #}

    <div class=\"absolute pin w-full h-full overflow-hidden opacity-70\">

    </div>
    <div class=\"flex flex-col w-full min-h-screen-for-real relative\">
        <div class=\"container my-auto p-t-f1 p-b-f1\">
{# afficher hotel #}
<div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <!-- Place somewhere in the <body> of your page -->
                <div id=\"mainslider\" class=\"flexslider\">
                    <ul class=\"slides\">

                        {% for rs in slider %}
                            <li data-thumb=\"{{ asset('uploads/images/' ~ rs.image) }}\" style=\"height: 400px\">
                                <a href=\"{{ path('hotel_show', {'id': rs.id}) }}\">
                                    <img src=\"{{ asset('uploads/images/' ~ rs.image) }}\"   style=\"height: 400px; width:940px \"  alt=\"\" />
                                </a>
                                <div class=\"flex-caption primary\">
                                    <h2>{{rs.title}}</h2>
                                    <p>{{rs.description}}</p>
                                </div>
                            </li>
                        {% endfor %}


                    </ul>
                </div>
            </div>
        </div>
    </div>
{#  #}

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
{#  #}", "save_file.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\save_file.html.twig");
    }
}
