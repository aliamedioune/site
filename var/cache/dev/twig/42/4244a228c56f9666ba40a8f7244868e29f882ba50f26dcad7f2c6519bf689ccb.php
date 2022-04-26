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

/* home/index.html.twig */
class __TwigTemplate_a5fafb575cd5a0b4f37af73e3597db15784ff1013b257f2d23496b3b0178cb4e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/index.html.twig", 1);
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

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    <body class=\" \">
                <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TKP3BJ\"
                      height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
                            <div class=\"ex-site\">
            


";
        // line 20
        echo "<div class=\"home-hero bg-black bg-center bg-cover mt-0 flex relative\" \">
       
";
        // line 25
        echo "
    <div class=\"absolute pin w-full h-full overflow-hidden opacity-70\">
<img src=\"https://i.pinimg.com/originals/fc/ee/75/fcee755ae0363d5156d603364e6a8ca5.jpg\" a-sizes=\"auto\"  alt=\"\" width=\"2300\" height=\"1500\" >
     <img src=\"https://i.pinimg.com/originals/fc/ee/75/fcee755ae0363d5156d603364e6a8ca5.jpg\" srcset=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-srcset=\"https://i.pinimg.com/originals/fc/ee/75/fcee755ae0363d5156d603364e6a8ca5.jpg 100w\" data-sizes=\"auto\" class=\"absolute pin w-full h-full object-fit-cover editable lazyload\" alt=\"\" width=\"1600\" height=\"1000\" >

    </div>
    <div class=\"flex flex-col w-full min-h-screen-for-real relative\">
    
        <div class=\"container my-auto p-t-f1 p-b-f1\">

            <h1 class=\"alfa text-center text-white mt-13 mb-4\">Bienvenue chez vous</h1>
            <div class=\"row justify-center text-white md:mb-7\">
                <div class=\"col sm:w-10/12 md:w-8/12 text-center\">\t\t\t
\t\t\t\t\tNotre mission est de recenser pour vous les plus beaux habitats alternatifs (tels que les yourtes, les cabanes, les cabanes flottantes ...) au sein de la nature...\t\t\t\t\t
                    </p>
                </div>
            </div>
            <div class=\"row justify-center hidden md:flex\">
    <div class=\"col md:w-10/12 xl:w-full\">
    </div>
</div>
";
        // line 47
        echo "
        </div>
        <a href=\"/habitat\" class=\"
         bg-pink
         text-white appearance-none flex items-center justify-center md:hidden bg-blue border-0 rounded-none p-0  no-underline font-bold uppercase h-70 text-xs tracking-wider\">
            <svg class=\"mr-4 relative\" style=\"top:-0.1em;\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"currentColor\"><path d=\"M15 3h-1V2a1 1 0 0 0-2 0v1h-2V2a1 1 0 0 0-2 0v1H6V2a1 1 0 0 0-2 0v1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm0 11a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V8h12z\"/></svg>            Book Now
        </a>
    </div>
</div>


<!-- SECTION: NOTRE MISSION -->
<!-- <div class=\"p-t-f1 p-b-f1 bg-grey-lighter tear-before tear-after\"> -->
<div class=\"p-t-f1 p-b-f1\">
    <div class=\"container\">
        <div class=\"flex perkzz-section -mx-container-gutter-sm md:-mx-gutter -mb-tear \" >
\t\t
            <div class=\"col sm:w-1/2 lg:w-1/3 mt-9\">
                <div class=\"aspect-ratio-square relative bg-white\">
                    <div class=\"block absolute pin w-full h-full\">
                        <!-- <img src=\"https://q-xx.bstatic.com/images/hotel/max1024x768/169/169684578.jpg\" alt=\"Les cabanes dans les arbres\" width=\"5979\" height=\"3986\" class=\"absolute pin w-full h-full\" > -->\t\t\t\t\t
\t\t\t\t\t\t<img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/voyage-aux-philippines.jpg"), "html", null, true);
        echo "\" style=\"height: 250px; width:250px\" >
                    </div>
                </div>
            </div>
\t\t\t
            <div class=\"ccol w-10/12 sm:w-1/1 md:w-1/1 mt-7\" style=\"position: relative; padding-left: 50px\">
                <div>
                    <!-- <h3 class=\"bravo text-left mb-6\">  -->
                    <h3 class=\"text-left mb-6\">
                        Notre Mission                      
                    </h3>
                    <p class=\"merchandize-text\">
\t\t\t\t\t\tAtypikHouse vous présente une intéressante panoplie d’offres de location qui répond à vos critères de recherche (tels la nature et le lieu de l'hébergement, le budget, la durée de location, les services proposés, …) et vous permet de réserver et de payer en ligne d’une manière simple et sécurisée.</p>
                    <p class=\"merchandize-text\">
\t\t\t\t\t\tAtypikHouse vous propose également la mise en location de vos propres logements d’une manière simple et rapide.
                    </p>
                    <a href=\"/about\" class=\"bg-pink bg-pink-offers appearance-none leading-none inline-flex items-center justify-center no-underline rounded-none font-sans font-bold uppercase text-xs tracking-wider py-0 whitespace-no-wrap disabled:opacity-40 disabled:cursor-not-allowed text-white h-60 px-6 transition-bg border-0 bg-blue-dark hover:bg-blue-dark-60\" style=\"\">Notre histoire</a>
                </div>
            </div>
\t\t\t
        </div>
    </div>
</div>


<!-- SECTION: CABANE FLOTTANTE -->
<!-- <div class=\"p-t-f1 p-b-f1\"> -->
    <div class=\"container\">
        <div class=\"flex perkzz-section -mx-container-gutter-sm md:-mx-gutter -mb-tear \" >
\t\t
            <div class=\"col w-10/12 sm:w-1/1 md:w-1/1 mt-7\" style=\"position: relative; padding-left: 50px\">
                <div>
                    <h3 class=\"text-left mb-6\">
\t\t\t\t\t\tCabane Flottante</h3>
                    <p class=\"merchandize-text\">
\t\t\t\t\t\tLa Cabane flottante vous accueille et vous offre détente et tranquillité au bord de l'eau. Sur pilotis, vous profiterez de sa terrasse et rêverez face à ce panorama unique qui dévoile la beauté de la nature environnante se reflétant dans les eaux calmes d'un étang privé.<br> 
\t\t\t\t\t\tVous emprunterez un petit pont sécurisé pour accéder à votre nid flottant avec mezzanine et découvrirez un intérieur pensé, imaginé et créé pour votre confort.
                    </p>
                </div>
            </div>

            <div class=\"col sm:w-1/2 lg:w-1/3 mt-9\">
                <div class=\"aspect-ratio-square relative bg-white\">
                    <div class=\"block absolute pin w-full h-full\">
\t\t\t\t\t\t<img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/cabane-flottante.jpg"), "html", null, true);
        echo "\" style=\"height: 250px; width:250px\" >
                    </div>
                </div>
            </div>
\t\t\t
        </div>
    </div>\t\t\t
<!-- </div> -->


<!-- SECTION: CABANE AUX ARBRES -->
<!-- <div class=\"p-t-f1 p-b-f1 bg-grey-lighter tear-before tear-after\"> -->
<div class=\"p-t-f1 p-b-f1\">
    <div class=\"container\">
        <div class=\"flex perkzz-section -mx-container-gutter-sm md:-mx-gutter -mb-tear \" >
\t\t
            <div class=\"col sm:w-1/2 lg:w-1/3 mt-9\">
                <div class=\"aspect-ratio-square relative bg-white\">
                    <div class=\"block absolute pin w-full h-full\">
\t\t\t\t\t\t<img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/cabane-perchee-aux-arbres.jpg"), "html", null, true);
        echo "\" style=\"height: 250px; width:250px\" >
                    </div>
                </div>
            </div>
\t\t\t
            <div class=\"ccol w-10/12 sm:w-1/1 md:w-1/1 mt-7\" style=\"position: relative; padding-left: 50px\">
                <div>
                    <!-- <h3 class=\"bravo text-left mb-6\">  -->
                    <h3 class=\"text-left mb-6\">
                        Cabane perchée aux arbres                      
                    </h3>
                    <p class=\"merchandize-text\">
\t\t\t\t\t\tLe rêve de votre enfance, une cabane de luxe perchée à 6 mètres du sol, au cœur d'un chêne centenaire. <br>
\t\t\t\t\t\tAmbiance de charme, d’harmonie et de sérénité se dégageant de ce lieu propice à la méditation. <br>
\t\t\t\t\t\tLa cabane est chauffée en hiver. Les séjours sont donc possibles en toutes saisons...</p>
                </div>
            </div>
\t\t\t
        </div>
    </div>
</div>


<!-- SECTION: YOURTE -->
<!-- <div class=\"p-t-f1 p-b-f1\"> -->
    <div class=\"container\">
        <div class=\"flex perkzz-section -mx-container-gutter-sm md:-mx-gutter -mb-tear \" >
\t\t
            <div class=\"col w-10/12 sm:w-1/1 md:w-1/1 mt-7\" style=\"position: relative; padding-left: 50px\">
                <div>
                    <h3 class=\"text-left mb-6\">
\t\t\t\t\t\tYourte</h3>
                    <p class=\"merchandize-text\">
\t\t\t\t\t\tLa yourte - appelée Ger par les Mongols - est l'habitation traditionnelle des familles nomades de Mongolie.
\t\t\t\t\t\tElle est composée de plusieurs murs en treillage orange, tous de la même dimension et incurvés.<br>
\t\t\t\t\t\tCe cercle de bois est relié aux murs par toute une série de lattes de bois, toujours de couleur orange, qui restent visible à l'intérieur de la yourte, formant le plafond.<br>
\t\t\t\t\t\tCette structure de bois, formée par l'ensemble des murs en treillage, des poteaux centraux, du cercle et des lattes du plafond, est recouverte d'une couche de feutre dont l'épaisseur varie en fonction de la saison.
                    </p>
                </div>
            </div>

            <div class=\"col sm:w-1/2 lg:w-1/3 mt-9\">
                <div class=\"aspect-ratio-square relative bg-white\">
                    <div class=\"block absolute pin w-full h-full\">
\t\t\t\t\t\t<img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/yourte.jpg"), "html", null, true);
        echo "\" style=\"height: 250px; width:250px\" >
                    </div>
                </div>
            </div>
\t\t\t
        </div>
    </div>\t\t\t
<!-- </div> -->


<br>
<!-- SECTION: AFFICHAGE DES ANNONCES -->
<!-- <div class=\"bg-grey-lighter p-b-f1 tear-after tear-before\">  -->
<div class=\"p-b-f1\">
    <div class=\"-mb-tear -mt-tear\">
        <div class=\"container\">
            <div class=\"perks -mx-container-gutter-sm flex flex-wrap flex-col\">
\t\t\t\t<!--
                <p class=\"charlie px-gutter mb-10 p-t-f1\"><span class=\"block xl:-mr-1/12\">VOTRE MAISON DE LA MAISON A BEAUCOUP D'OBTENIR CELA (SI NOUS LE DISONS NOUS)!</span></p>
\t\t\t\t-->
                <div class=\"w-full flex items-top sm:flex-wrap flickity\" data-flickity='{\"prevNextButtons\":true,\"pageDots\":true,\"watchCSS\":true, \"wrapAround\": true}'>
                   ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 196, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 197
            echo "                    <!-- <div class=\"w-230 flex-none sm:w-1/3 xl:pt-0 px-gutter perks-cats\">   -->
                    <div class=\"w-230 flex-none sm:w-1/4 xl:pt-0 px-gutter perks-cats\">
                        <div class=\"perks-img mx-auto\">
                            <!-- <div class=\"relative\" style=\"padding-top:79.477611940299%;\">  -->
                            <div class=\"relative\" style=\"padding-top:20%;\">
                            <a href=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 202)]), "html", null, true);
            echo "\">
                               <a href=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 203)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 203))), "html", null, true);
            echo "\" style=\"height: 200px; width:250px; padding-left=50px;\" >
                                </a>
                            </div>
                        </div>
                        <!-- <div class=\"lg:w-10/12 supports- sm:text-center sm:mx-auto sm:block sm:max-w-230 sm:text-center grid:lg:w-5/12 echo mt-5 lg:mt-6\">";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 207), "html", null, true);
            echo "</div>  -->
                        <div>";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 208), "html", null, true);
            echo "</div>
                    </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "                 
                </div>
            </div>

            ";
        // line 239
        echo "
<!-- SECTION: NOUVELLES ANNONCES -->
";
        // line 242
        echo "             <!--   <p class=\"charlie px-gutter mb-10 p-t-f1\"><span class=\"block xl:-mr-1/12\">Your home from home has got a lot going for it (if we do say so ourselves)!</span></p> -->
<!--
             <p class=\"charlie px-gutter mb-10 p-t-f1\"><span class=\"block xl:-mr-1/12\"></span></p>\t\t 
               
             <div class=\"row\">
                <div class=\"span16\">
                    <h4 class=\"rheading\">Nouvelles annonces<span></span></h4>
                    <div class=\"row\">
                        <div class=\"span2\">
                            <p class=\"hidden-phone\">Voir plus d'hébergements...</p>
                            <a href=\"/habitat\" class=\"btn btn-theme\">Plus</a>
                        </div>

                        <div class=\"span12\">
                            <div id=\"latest-work\" class=\"carousel btleft\">
                                <div class=\"carousel-wrapper\">
                                    <ul class=\"da-thumbs\">
                                        ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newhotels"]) || array_key_exists("newhotels", $context) ? $context["newhotels"] : (function () { throw new RuntimeError('Variable "newhotels" does not exist.', 259, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rs"]) {
            // line 260
            echo "                                        <li>
                                            <img src=\"";
            // line 261
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 261))), "html", null, true);
            echo "\"  style=\"height: 200px; width:450px\" alt=\"\" />
                                            <article class=\"da-animate da-slideFromRight\">
                                                <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"";
            // line 263
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["rs"], "image", [], "any", false, false, false, 263))), "html", null, true);
            echo "\">
                                                    <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                                </a>
                                                <a href=\"";
            // line 266
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["rs"], "id", [], "any", false, false, false, 266)]), "html", null, true);
            echo "\">
                                                    <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                                </a>
                                                <div class=\"hidden-tablet\">
                                                    <p>";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rs"], "title", [], "any", false, false, false, 270), "html", null, true);
            echo "</p>
                                                </div>
                                            </article>
                                        </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

-->

<!-- SECTION: TEMOIGNAGES -->
<!-- asd-->
<div class=\"p-t-f1 p-b-f1\"  id=\"guest-reviews\">
        <div class=\"-mb-tear -mt-tear\">
            <div class=\"container\">
                <div class=\"perks -mx-container-gutter-sm flex flex-wrap flex-col\">
\t\t\t\t\t<!--
                    <p class=\"bravo px-gutter mb-5 p-t-f1\">
                        <span class=\"text-center block xl:-mr-1/12\"> ▂▃▅▇█▓▒░ Témoignages ░▒▓█▇▅▃▂ </span>
                    </p>
                    <p class=\"px-gutter\">
                        <span class=\"text-center block\"></span>
                    </p>
\t\t\t\t\t-->

                    <div class=\"w-full flex items-top sm:flex-wrap flickity\" data-flickity='{\"prevNextButtons\":true,\"pageDots\":true,\"watchCSS\":true, \"wrapAround\": true}'>

\t\t\t\t\t<div class=\"w-230 flex-none sm:w-1/3 px-gutter sm:pt-10 sm:pb-10\">
                                        <div class=\"reviews-section\">
                                            <div class=\"reviews-stars\">
                                                <div class=\"rating\">
                                                    <div class=\"rating-upper\" style=\"width: 100%\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                    <div class=\"rating-lower\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                </div>
                                                <div class=\"revu\">
                                                    Guest<span >Revu</span>
                                                </div>
                                            </div>
                                            <p class=\"font-bold\">
\t\t\t\t\t\t\t\t\t\t\t\tStewart King - <span class=\"visited-reviews\">Visited AtypikHouse</span>
                                            </p>
                                            <div id=\"review-text-0\" class=\" review-eclipse mt-5  sm:block \">
\t\t\t\t\t\t\t\t\t\t\t\tBonne surprise! La maison était bien arrangée et propre. Logement spacieux, avec tout ce dont j'avais besoin. Lit très confortable. Le petit déjeuner était un peu médiocre. Le supermarché est à seulement 2 pas du logement... 
                                            </div>
                                            <div class=\"detailed-review hide mt-5  sm:block\" id=\"detail-review-text-0\">
                                                Bonne surprise! La maison était bien arrangée et propre. Logement spacieux, avec tout ce dont j'avais besoin. Lit très confortable. Le petit déjeuner était un peu médiocre. Le supermarché est à seulement 2 pas du logement, à proximité du centre-ville. Je le recommande.
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"see-more-0\" class=\"popup\" onclick=\"myFunction(0)\">Voir plus</div>
                                        </div>
                                    </div>

<!--\t\t\t\t\t\t\t\t<div class=\"w-230 flex-none sm:w-1/3 px-gutter sm:pt-10 sm:pb-10\">
                                        <div class=\"reviews-section\">
                                            <div class=\"reviews-stars\">
                                                <div class=\"rating\">
                                                    <div class=\"rating-upper\" style=\"width: 80%\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                    <div class=\"rating-lower\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                </div>
                                                <div class=\"revu\">
                                                    Guest<span >Revu</span>
                                                </div>
                                            </div>
                                            <p class=\"font-bold\">
                                            Wai Man - <span class=\"visited-reviews\">Visit AtypikHouse</span>
                                                
                                            </p>
                                            <div id=\"review-text-1\" class=\" review-eclipse mt-5  sm:block \">
                                                Overall a pleasant stay though the room needs bit more cleaning on the floor.
                                            </div>
                                            <div class=\"detailed-review hide mt-5  sm:block\" id=\"detail-review-text-1\">
                                                Overall a pleasant stay though the room needs bit more cleaning on the floor.
                                            </div>
                                        </div>
                                    </div>
-->
\t\t\t\t\t\t\t\t\t<div class=\"w-230 flex-none sm:w-1/3 px-gutter sm:pt-10 sm:pb-10\">
                                        <div class=\"reviews-section\">
                                            <div class=\"reviews-stars\">
                                                <div class=\"rating\">
                                                    <div class=\"rating-upper\" style=\"width: 100%\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                    <div class=\"rating-lower\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                </div>
                                                <div class=\"revu\">
                                                    Guest<span >Revu</span>
                                                </div>
                                            </div>
                                            <p class=\"font-bold\" Zainab - <span class=\"visited-reviews\">Visite AtypikHouse</span>
                                            </p>
                                            <div id=\"review-text-2\" class=\" review-eclipse mt-5  sm:block \">
                                                Un si bon séjour. Je voulais essayer quelque chose d'un peu différent pas trop loin de chez moi et c'était un délice! Chaque membre du personnel à qui j'ai parlé était poli, professionnel, mais chacun avait sa propre touche spéciale ...
                                            </div>
                                            <div class=\"detailed-review hide mt-5  sm:block\" id=\"detail-review-text-2\">
                                               Un si bon séjour. Je voulais essayer quelque chose d'un peu différent pas trop loin de chez moi et c'était un délice! Chaque membre du personnel à qui j'ai parlé était poli, professionnel, mais chacun avait sa propre touche spéciale ...
                                            </div>
                                            <div id=\"see-more-2\" class=\"popup\" onclick=\"myFunction(2)\">Voir plus</div>
                                        </div>

                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                <div class=\"w-230 flex-none sm:w-1/3 px-gutter sm:pt-10 sm:pb-10\">
                                        <div class=\"reviews-section\">
                                            <div class=\"reviews-stars\">
                                                <div class=\"rating\">
                                                    <div class=\"rating-upper\" style=\"width: 100%\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                    <div class=\"rating-lower\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                </div>
                                                <div class=\"revu\">
                                                    Guest<span >Revu</span>
                                                </div>
                                            </div>
                                            <p class=\"font-bold\">
                                                                                                    Zainab - <span class=\"visited-reviews\">Visit atypikHouse</span>
                                                
                                            </p>
                                            <div id=\"review-text-3\" class=\" review-eclipse mt-5  sm:block \">
                                                Un si bon séjour. Je voulais essayer quelque chose d'un peu différent pas trop loin de chez moi et c'était un délice! Chaque membre du personnel à qui j'ai parlé était poli, professionnel, mais chacun avait sa propre touche spéciale ...
                                            </div>
                                            <div class=\"detailed-review hide mt-5  sm:block\" id=\"detail-review-text-3\">
                                                Un si bon séjour. Je voulais essayer quelque chose d'un peu différent pas trop loin de chez Preston) et c'était un vrai délice! Chaque membre du personnel à qui j'ai parlé était poli, professionnel, mais chacun avait cette touche spéciale de sa propre personnalité! C'était professionnel mais détendu si cela a du sens! La propreté était de premier ordre et tout le monde était si sympathique que je me sentais comme si je connaissais déjà tout le monde. Et une chose que j'ai trouvée était une bonne idée, c'est qu'ils se souvenaient toujours de mon nom et pour la première fois de ma vie, je l'ai dit correctement à chaque fois, LOL! Je déteste quand les gens vous disent leur travail, mais je travaille pour une chaîne hôtelière mondiale et je pouvais voir exactement où le personnel faisait tout son possible pour que tout le monde soit confortable et en sécurité. En un mot, je n’ai pas vraiment aimé mon séjour ... Je l’ai adoré! Très bien les gars, j'espère que vous aurez l'appréciation que vous méritez! Points forts: Propreté, confort de la chambre
                                            </div>
                                                                                        <div id=\"see-more-3\" class=\"popup\" onclick=\"myFunction(3)\">Voir plus</div>
                                                
                                        </div>

                                    </div>
                                                                                                                            
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- asd-->





    
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
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 275,  422 => 270,  415 => 266,  409 => 263,  404 => 261,  401 => 260,  397 => 259,  378 => 242,  374 => 239,  368 => 211,  359 => 208,  355 => 207,  346 => 203,  342 => 202,  335 => 197,  331 => 196,  307 => 175,  260 => 131,  238 => 112,  191 => 68,  168 => 47,  145 => 25,  141 => 20,  129 => 9,  119 => 8,  99 => 6,  80 => 5,  61 => 4,  38 => 1,);
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
            


{# div photo noir #}
<div class=\"home-hero bg-black bg-center bg-cover mt-0 flex relative\" \">
       
{#<img src=\"https://res.cloudinary.com/dfbe6xcrt/image/upload/fl_lossy,f_auto,q_60/w_1600,h_1000,c_fill/expose/dev.roomzzz.com/images/3e3a7d34e3_2020-07-27-14-32-02_2000_1351.jpg\"  data-sizes=\"auto\"  alt=\"\" width=\"1600\" height=\"1000\" >
  
   #}

    <div class=\"absolute pin w-full h-full overflow-hidden opacity-70\">
<img src=\"https://i.pinimg.com/originals/fc/ee/75/fcee755ae0363d5156d603364e6a8ca5.jpg\" a-sizes=\"auto\"  alt=\"\" width=\"2300\" height=\"1500\" >
     <img src=\"https://i.pinimg.com/originals/fc/ee/75/fcee755ae0363d5156d603364e6a8ca5.jpg\" srcset=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-srcset=\"https://i.pinimg.com/originals/fc/ee/75/fcee755ae0363d5156d603364e6a8ca5.jpg 100w\" data-sizes=\"auto\" class=\"absolute pin w-full h-full object-fit-cover editable lazyload\" alt=\"\" width=\"1600\" height=\"1000\" >

    </div>
    <div class=\"flex flex-col w-full min-h-screen-for-real relative\">
    
        <div class=\"container my-auto p-t-f1 p-b-f1\">

            <h1 class=\"alfa text-center text-white mt-13 mb-4\">Bienvenue chez vous</h1>
            <div class=\"row justify-center text-white md:mb-7\">
                <div class=\"col sm:w-10/12 md:w-8/12 text-center\">\t\t\t
\t\t\t\t\tNotre mission est de recenser pour vous les plus beaux habitats alternatifs (tels que les yourtes, les cabanes, les cabanes flottantes ...) au sein de la nature...\t\t\t\t\t
                    </p>
                </div>
            </div>
            <div class=\"row justify-center hidden md:flex\">
    <div class=\"col md:w-10/12 xl:w-full\">
    </div>
</div>
{#  #}

        </div>
        <a href=\"/habitat\" class=\"
         bg-pink
         text-white appearance-none flex items-center justify-center md:hidden bg-blue border-0 rounded-none p-0  no-underline font-bold uppercase h-70 text-xs tracking-wider\">
            <svg class=\"mr-4 relative\" style=\"top:-0.1em;\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"currentColor\"><path d=\"M15 3h-1V2a1 1 0 0 0-2 0v1h-2V2a1 1 0 0 0-2 0v1H6V2a1 1 0 0 0-2 0v1H3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm0 11a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V8h12z\"/></svg>            Book Now
        </a>
    </div>
</div>


<!-- SECTION: NOTRE MISSION -->
<!-- <div class=\"p-t-f1 p-b-f1 bg-grey-lighter tear-before tear-after\"> -->
<div class=\"p-t-f1 p-b-f1\">
    <div class=\"container\">
        <div class=\"flex perkzz-section -mx-container-gutter-sm md:-mx-gutter -mb-tear \" >
\t\t
            <div class=\"col sm:w-1/2 lg:w-1/3 mt-9\">
                <div class=\"aspect-ratio-square relative bg-white\">
                    <div class=\"block absolute pin w-full h-full\">
                        <!-- <img src=\"https://q-xx.bstatic.com/images/hotel/max1024x768/169/169684578.jpg\" alt=\"Les cabanes dans les arbres\" width=\"5979\" height=\"3986\" class=\"absolute pin w-full h-full\" > -->\t\t\t\t\t
\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/voyage-aux-philippines.jpg') }}\" style=\"height: 250px; width:250px\" >
                    </div>
                </div>
            </div>
\t\t\t
            <div class=\"ccol w-10/12 sm:w-1/1 md:w-1/1 mt-7\" style=\"position: relative; padding-left: 50px\">
                <div>
                    <!-- <h3 class=\"bravo text-left mb-6\">  -->
                    <h3 class=\"text-left mb-6\">
                        Notre Mission                      
                    </h3>
                    <p class=\"merchandize-text\">
\t\t\t\t\t\tAtypikHouse vous présente une intéressante panoplie d’offres de location qui répond à vos critères de recherche (tels la nature et le lieu de l'hébergement, le budget, la durée de location, les services proposés, …) et vous permet de réserver et de payer en ligne d’une manière simple et sécurisée.</p>
                    <p class=\"merchandize-text\">
\t\t\t\t\t\tAtypikHouse vous propose également la mise en location de vos propres logements d’une manière simple et rapide.
                    </p>
                    <a href=\"/about\" class=\"bg-pink bg-pink-offers appearance-none leading-none inline-flex items-center justify-center no-underline rounded-none font-sans font-bold uppercase text-xs tracking-wider py-0 whitespace-no-wrap disabled:opacity-40 disabled:cursor-not-allowed text-white h-60 px-6 transition-bg border-0 bg-blue-dark hover:bg-blue-dark-60\" style=\"\">Notre histoire</a>
                </div>
            </div>
\t\t\t
        </div>
    </div>
</div>


<!-- SECTION: CABANE FLOTTANTE -->
<!-- <div class=\"p-t-f1 p-b-f1\"> -->
    <div class=\"container\">
        <div class=\"flex perkzz-section -mx-container-gutter-sm md:-mx-gutter -mb-tear \" >
\t\t
            <div class=\"col w-10/12 sm:w-1/1 md:w-1/1 mt-7\" style=\"position: relative; padding-left: 50px\">
                <div>
                    <h3 class=\"text-left mb-6\">
\t\t\t\t\t\tCabane Flottante</h3>
                    <p class=\"merchandize-text\">
\t\t\t\t\t\tLa Cabane flottante vous accueille et vous offre détente et tranquillité au bord de l'eau. Sur pilotis, vous profiterez de sa terrasse et rêverez face à ce panorama unique qui dévoile la beauté de la nature environnante se reflétant dans les eaux calmes d'un étang privé.<br> 
\t\t\t\t\t\tVous emprunterez un petit pont sécurisé pour accéder à votre nid flottant avec mezzanine et découvrirez un intérieur pensé, imaginé et créé pour votre confort.
                    </p>
                </div>
            </div>

            <div class=\"col sm:w-1/2 lg:w-1/3 mt-9\">
                <div class=\"aspect-ratio-square relative bg-white\">
                    <div class=\"block absolute pin w-full h-full\">
\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/cabane-flottante.jpg') }}\" style=\"height: 250px; width:250px\" >
                    </div>
                </div>
            </div>
\t\t\t
        </div>
    </div>\t\t\t
<!-- </div> -->


<!-- SECTION: CABANE AUX ARBRES -->
<!-- <div class=\"p-t-f1 p-b-f1 bg-grey-lighter tear-before tear-after\"> -->
<div class=\"p-t-f1 p-b-f1\">
    <div class=\"container\">
        <div class=\"flex perkzz-section -mx-container-gutter-sm md:-mx-gutter -mb-tear \" >
\t\t
            <div class=\"col sm:w-1/2 lg:w-1/3 mt-9\">
                <div class=\"aspect-ratio-square relative bg-white\">
                    <div class=\"block absolute pin w-full h-full\">
\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/cabane-perchee-aux-arbres.jpg') }}\" style=\"height: 250px; width:250px\" >
                    </div>
                </div>
            </div>
\t\t\t
            <div class=\"ccol w-10/12 sm:w-1/1 md:w-1/1 mt-7\" style=\"position: relative; padding-left: 50px\">
                <div>
                    <!-- <h3 class=\"bravo text-left mb-6\">  -->
                    <h3 class=\"text-left mb-6\">
                        Cabane perchée aux arbres                      
                    </h3>
                    <p class=\"merchandize-text\">
\t\t\t\t\t\tLe rêve de votre enfance, une cabane de luxe perchée à 6 mètres du sol, au cœur d'un chêne centenaire. <br>
\t\t\t\t\t\tAmbiance de charme, d’harmonie et de sérénité se dégageant de ce lieu propice à la méditation. <br>
\t\t\t\t\t\tLa cabane est chauffée en hiver. Les séjours sont donc possibles en toutes saisons...</p>
                </div>
            </div>
\t\t\t
        </div>
    </div>
</div>


<!-- SECTION: YOURTE -->
<!-- <div class=\"p-t-f1 p-b-f1\"> -->
    <div class=\"container\">
        <div class=\"flex perkzz-section -mx-container-gutter-sm md:-mx-gutter -mb-tear \" >
\t\t
            <div class=\"col w-10/12 sm:w-1/1 md:w-1/1 mt-7\" style=\"position: relative; padding-left: 50px\">
                <div>
                    <h3 class=\"text-left mb-6\">
\t\t\t\t\t\tYourte</h3>
                    <p class=\"merchandize-text\">
\t\t\t\t\t\tLa yourte - appelée Ger par les Mongols - est l'habitation traditionnelle des familles nomades de Mongolie.
\t\t\t\t\t\tElle est composée de plusieurs murs en treillage orange, tous de la même dimension et incurvés.<br>
\t\t\t\t\t\tCe cercle de bois est relié aux murs par toute une série de lattes de bois, toujours de couleur orange, qui restent visible à l'intérieur de la yourte, formant le plafond.<br>
\t\t\t\t\t\tCette structure de bois, formée par l'ensemble des murs en treillage, des poteaux centraux, du cercle et des lattes du plafond, est recouverte d'une couche de feutre dont l'épaisseur varie en fonction de la saison.
                    </p>
                </div>
            </div>

            <div class=\"col sm:w-1/2 lg:w-1/3 mt-9\">
                <div class=\"aspect-ratio-square relative bg-white\">
                    <div class=\"block absolute pin w-full h-full\">
\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/yourte.jpg') }}\" style=\"height: 250px; width:250px\" >
                    </div>
                </div>
            </div>
\t\t\t
        </div>
    </div>\t\t\t
<!-- </div> -->


<br>
<!-- SECTION: AFFICHAGE DES ANNONCES -->
<!-- <div class=\"bg-grey-lighter p-b-f1 tear-after tear-before\">  -->
<div class=\"p-b-f1\">
    <div class=\"-mb-tear -mt-tear\">
        <div class=\"container\">
            <div class=\"perks -mx-container-gutter-sm flex flex-wrap flex-col\">
\t\t\t\t<!--
                <p class=\"charlie px-gutter mb-10 p-t-f1\"><span class=\"block xl:-mr-1/12\">VOTRE MAISON DE LA MAISON A BEAUCOUP D'OBTENIR CELA (SI NOUS LE DISONS NOUS)!</span></p>
\t\t\t\t-->
                <div class=\"w-full flex items-top sm:flex-wrap flickity\" data-flickity='{\"prevNextButtons\":true,\"pageDots\":true,\"watchCSS\":true, \"wrapAround\": true}'>
                   {% for rs in hotels %}
                    <!-- <div class=\"w-230 flex-none sm:w-1/3 xl:pt-0 px-gutter perks-cats\">   -->
                    <div class=\"w-230 flex-none sm:w-1/4 xl:pt-0 px-gutter perks-cats\">
                        <div class=\"perks-img mx-auto\">
                            <!-- <div class=\"relative\" style=\"padding-top:79.477611940299%;\">  -->
                            <div class=\"relative\" style=\"padding-top:20%;\">
                            <a href=\"{{ path('hotel_show', {'id': rs.id}) }}\">
                               <a href=\"{{ path('hotel_show', {'id': rs.id}) }}\"><img src=\"{{ asset('uploads/images/' ~ rs.image) }}\" style=\"height: 200px; width:250px; padding-left=50px;\" >
                                </a>
                            </div>
                        </div>
                        <!-- <div class=\"lg:w-10/12 supports- sm:text-center sm:mx-auto sm:block sm:max-w-230 sm:text-center grid:lg:w-5/12 echo mt-5 lg:mt-6\">{{rs.title}}</div>  -->
                        <div>{{rs.title}}</div>
                    </div>
                      {% endfor %}
                 
                </div>
            </div>

            {# <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <!-- Place somewhere in the <body> of your page -->
                <div id=\"mainslider\" class=\"flexslider\">
                    <ul class=\"slides\">

                        {% for rs in slider %}
                            <li data-thumb=\"{{ asset('uploads/images/' ~ rs.image) }}\" style=\"height: 400px\">
                                <a href=\"{{ path('hotel_show', {'id': rs.id}) }}\">
                                    <img src=\"{{ asset('uploads/images/' ~ rs.image) }}\" style=\"height: 400px; width:940px\"  alt=\"\" />
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
    </div> #}

<!-- SECTION: NOUVELLES ANNONCES -->
{#  afficher des hotels dans page home  #}
             <!--   <p class=\"charlie px-gutter mb-10 p-t-f1\"><span class=\"block xl:-mr-1/12\">Your home from home has got a lot going for it (if we do say so ourselves)!</span></p> -->
<!--
             <p class=\"charlie px-gutter mb-10 p-t-f1\"><span class=\"block xl:-mr-1/12\"></span></p>\t\t 
               
             <div class=\"row\">
                <div class=\"span16\">
                    <h4 class=\"rheading\">Nouvelles annonces<span></span></h4>
                    <div class=\"row\">
                        <div class=\"span2\">
                            <p class=\"hidden-phone\">Voir plus d'hébergements...</p>
                            <a href=\"/habitat\" class=\"btn btn-theme\">Plus</a>
                        </div>

                        <div class=\"span12\">
                            <div id=\"latest-work\" class=\"carousel btleft\">
                                <div class=\"carousel-wrapper\">
                                    <ul class=\"da-thumbs\">
                                        {% for rs in newhotels %}
                                        <li>
                                            <img src=\"{{ asset('uploads/images/' ~ rs.image) }}\"  style=\"height: 200px; width:450px\" alt=\"\" />
                                            <article class=\"da-animate da-slideFromRight\">
                                                <a class=\"zoom\" data-pretty=\"prettyPhoto\" href=\"{{ asset('uploads/images/' ~ rs.image) }}\">
                                                    <i class=\"icon-zoom-in icon-rounded icon-48 active\"></i>
                                                </a>
                                                <a href=\"{{ path('hotel_show', {'id': rs.id}) }}\">
                                                    <i class=\"icon-link icon-rounded icon-48 active\"></i>
                                                </a>
                                                <div class=\"hidden-tablet\">
                                                    <p>{{rs.title}}</p>
                                                </div>
                                            </article>
                                        </li>
                                        {% endfor %}

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

-->

<!-- SECTION: TEMOIGNAGES -->
<!-- asd-->
<div class=\"p-t-f1 p-b-f1\"  id=\"guest-reviews\">
        <div class=\"-mb-tear -mt-tear\">
            <div class=\"container\">
                <div class=\"perks -mx-container-gutter-sm flex flex-wrap flex-col\">
\t\t\t\t\t<!--
                    <p class=\"bravo px-gutter mb-5 p-t-f1\">
                        <span class=\"text-center block xl:-mr-1/12\"> ▂▃▅▇█▓▒░ Témoignages ░▒▓█▇▅▃▂ </span>
                    </p>
                    <p class=\"px-gutter\">
                        <span class=\"text-center block\"></span>
                    </p>
\t\t\t\t\t-->

                    <div class=\"w-full flex items-top sm:flex-wrap flickity\" data-flickity='{\"prevNextButtons\":true,\"pageDots\":true,\"watchCSS\":true, \"wrapAround\": true}'>

\t\t\t\t\t<div class=\"w-230 flex-none sm:w-1/3 px-gutter sm:pt-10 sm:pb-10\">
                                        <div class=\"reviews-section\">
                                            <div class=\"reviews-stars\">
                                                <div class=\"rating\">
                                                    <div class=\"rating-upper\" style=\"width: 100%\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                    <div class=\"rating-lower\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                </div>
                                                <div class=\"revu\">
                                                    Guest<span >Revu</span>
                                                </div>
                                            </div>
                                            <p class=\"font-bold\">
\t\t\t\t\t\t\t\t\t\t\t\tStewart King - <span class=\"visited-reviews\">Visited AtypikHouse</span>
                                            </p>
                                            <div id=\"review-text-0\" class=\" review-eclipse mt-5  sm:block \">
\t\t\t\t\t\t\t\t\t\t\t\tBonne surprise! La maison était bien arrangée et propre. Logement spacieux, avec tout ce dont j'avais besoin. Lit très confortable. Le petit déjeuner était un peu médiocre. Le supermarché est à seulement 2 pas du logement... 
                                            </div>
                                            <div class=\"detailed-review hide mt-5  sm:block\" id=\"detail-review-text-0\">
                                                Bonne surprise! La maison était bien arrangée et propre. Logement spacieux, avec tout ce dont j'avais besoin. Lit très confortable. Le petit déjeuner était un peu médiocre. Le supermarché est à seulement 2 pas du logement, à proximité du centre-ville. Je le recommande.
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"see-more-0\" class=\"popup\" onclick=\"myFunction(0)\">Voir plus</div>
                                        </div>
                                    </div>

<!--\t\t\t\t\t\t\t\t<div class=\"w-230 flex-none sm:w-1/3 px-gutter sm:pt-10 sm:pb-10\">
                                        <div class=\"reviews-section\">
                                            <div class=\"reviews-stars\">
                                                <div class=\"rating\">
                                                    <div class=\"rating-upper\" style=\"width: 80%\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                    <div class=\"rating-lower\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                </div>
                                                <div class=\"revu\">
                                                    Guest<span >Revu</span>
                                                </div>
                                            </div>
                                            <p class=\"font-bold\">
                                            Wai Man - <span class=\"visited-reviews\">Visit AtypikHouse</span>
                                                
                                            </p>
                                            <div id=\"review-text-1\" class=\" review-eclipse mt-5  sm:block \">
                                                Overall a pleasant stay though the room needs bit more cleaning on the floor.
                                            </div>
                                            <div class=\"detailed-review hide mt-5  sm:block\" id=\"detail-review-text-1\">
                                                Overall a pleasant stay though the room needs bit more cleaning on the floor.
                                            </div>
                                        </div>
                                    </div>
-->
\t\t\t\t\t\t\t\t\t<div class=\"w-230 flex-none sm:w-1/3 px-gutter sm:pt-10 sm:pb-10\">
                                        <div class=\"reviews-section\">
                                            <div class=\"reviews-stars\">
                                                <div class=\"rating\">
                                                    <div class=\"rating-upper\" style=\"width: 100%\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                    <div class=\"rating-lower\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                </div>
                                                <div class=\"revu\">
                                                    Guest<span >Revu</span>
                                                </div>
                                            </div>
                                            <p class=\"font-bold\" Zainab - <span class=\"visited-reviews\">Visite AtypikHouse</span>
                                            </p>
                                            <div id=\"review-text-2\" class=\" review-eclipse mt-5  sm:block \">
                                                Un si bon séjour. Je voulais essayer quelque chose d'un peu différent pas trop loin de chez moi et c'était un délice! Chaque membre du personnel à qui j'ai parlé était poli, professionnel, mais chacun avait sa propre touche spéciale ...
                                            </div>
                                            <div class=\"detailed-review hide mt-5  sm:block\" id=\"detail-review-text-2\">
                                               Un si bon séjour. Je voulais essayer quelque chose d'un peu différent pas trop loin de chez moi et c'était un délice! Chaque membre du personnel à qui j'ai parlé était poli, professionnel, mais chacun avait sa propre touche spéciale ...
                                            </div>
                                            <div id=\"see-more-2\" class=\"popup\" onclick=\"myFunction(2)\">Voir plus</div>
                                        </div>

                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                <div class=\"w-230 flex-none sm:w-1/3 px-gutter sm:pt-10 sm:pb-10\">
                                        <div class=\"reviews-section\">
                                            <div class=\"reviews-stars\">
                                                <div class=\"rating\">
                                                    <div class=\"rating-upper\" style=\"width: 100%\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                    <div class=\"rating-lower\">
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                        <span>★</span>
                                                    </div>
                                                </div>
                                                <div class=\"revu\">
                                                    Guest<span >Revu</span>
                                                </div>
                                            </div>
                                            <p class=\"font-bold\">
                                                                                                    Zainab - <span class=\"visited-reviews\">Visit atypikHouse</span>
                                                
                                            </p>
                                            <div id=\"review-text-3\" class=\" review-eclipse mt-5  sm:block \">
                                                Un si bon séjour. Je voulais essayer quelque chose d'un peu différent pas trop loin de chez moi et c'était un délice! Chaque membre du personnel à qui j'ai parlé était poli, professionnel, mais chacun avait sa propre touche spéciale ...
                                            </div>
                                            <div class=\"detailed-review hide mt-5  sm:block\" id=\"detail-review-text-3\">
                                                Un si bon séjour. Je voulais essayer quelque chose d'un peu différent pas trop loin de chez Preston) et c'était un vrai délice! Chaque membre du personnel à qui j'ai parlé était poli, professionnel, mais chacun avait cette touche spéciale de sa propre personnalité! C'était professionnel mais détendu si cela a du sens! La propreté était de premier ordre et tout le monde était si sympathique que je me sentais comme si je connaissais déjà tout le monde. Et une chose que j'ai trouvée était une bonne idée, c'est qu'ils se souvenaient toujours de mon nom et pour la première fois de ma vie, je l'ai dit correctement à chaque fois, LOL! Je déteste quand les gens vous disent leur travail, mais je travaille pour une chaîne hôtelière mondiale et je pouvais voir exactement où le personnel faisait tout son possible pour que tout le monde soit confortable et en sécurité. En un mot, je n’ai pas vraiment aimé mon séjour ... Je l’ai adoré! Très bien les gars, j'espère que vous aurez l'appréciation que vous méritez! Points forts: Propreté, confort de la chambre
                                            </div>
                                                                                        <div id=\"see-more-3\" class=\"popup\" onclick=\"myFunction(3)\">Voir plus</div>
                                                
                                        </div>

                                    </div>
                                                                                                                            
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- asd-->





    
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
          {% endblock %}  ", "home/index.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\home\\index.html.twig");
    }
}
