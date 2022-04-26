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

/* home/head.html.twig */
class __TwigTemplate_a7f313fb35b360371a0616d9342046d812647b73a98e640b3a264fff34bd70ea extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/head.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/head.html.twig"));

        // line 1
        echo "<!-- styles -->

<meta name=\"description\" content=\"AtypikHouse est une société qui présente ses services dans le domaine touristiques précisément la location des
habitats harmonie avec la nature comme les cabanes dans les arbres, les yourtes ou les cabanes flottantes et qui est active en France et en Europe.\" />
<meta name=\"keywords\" content=\"\" />
<link rel=\"canonical\" href=\"http://atypikhouse.db-consulting-group.com/?fbclid=IwAR1gwYNJn_ExH3Xw5Vhe_Iv4AwlKG4KMGXAdDmR1BGNP1rfmgR6-EHMrYjI\" />
<meta property=\"og:title\" content=\"cabanes atypikhouse travel \" />
        <meta property=\"og:url\" content=\"http://atypikhouse.db-consulting-group.com/?fbclid=IwAR1gwYNJn_ExH3Xw5Vhe_Iv4AwlKG4KMGXAdDmR1BGNP1rfmgR6-EHMrYjI\" />
        <meta property=\"og:site_name\" content=\" atypikhouse\" />
        <meta property=\"AtypikHouse est une société qui présente ses services dans le domaine touristiques précisément la location des habitats harmonie avec la nature comme les cabanes dans les arbres, les yourtes ou les cabanes flottantes et qui est active en France et en Europe.\" />
        <!-- END OF SEO TAGS -->
    
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"yandex-verification\" content=\"1ba0ccbc4558b96a\" />
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/bootstrap.css\" rel=\"stylesheet\">
<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/bootstrap-responsive.css\" rel=\"stylesheet\">
<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/prettyPhoto.css\" rel=\"stylesheet\">
<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/google-code-prettify/prettify.css\" rel=\"stylesheet\">
<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/flexslider.css\" rel=\"stylesheet\">
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">
<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/color/default.css\" rel=\"stylesheet\">
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/style1.css\" rel=\"stylesheet\">
<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/style2.css\" rel=\"stylesheet\">
<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/style3.css\" rel=\"stylesheet\">
<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/style6.css\" rel=\"stylesheet\">
<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/index1.css\"  rel=\"stylesheet\"/>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<link href=\"https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700\" rel=\"stylesheet\">

<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/color/default.css\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700\" rel=\"stylesheet\">
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 32,  105 => 28,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- styles -->

<meta name=\"description\" content=\"AtypikHouse est une société qui présente ses services dans le domaine touristiques précisément la location des
habitats harmonie avec la nature comme les cabanes dans les arbres, les yourtes ou les cabanes flottantes et qui est active en France et en Europe.\" />
<meta name=\"keywords\" content=\"\" />
<link rel=\"canonical\" href=\"http://atypikhouse.db-consulting-group.com/?fbclid=IwAR1gwYNJn_ExH3Xw5Vhe_Iv4AwlKG4KMGXAdDmR1BGNP1rfmgR6-EHMrYjI\" />
<meta property=\"og:title\" content=\"cabanes atypikhouse travel \" />
        <meta property=\"og:url\" content=\"http://atypikhouse.db-consulting-group.com/?fbclid=IwAR1gwYNJn_ExH3Xw5Vhe_Iv4AwlKG4KMGXAdDmR1BGNP1rfmgR6-EHMrYjI\" />
        <meta property=\"og:site_name\" content=\" atypikhouse\" />
        <meta property=\"AtypikHouse est une société qui présente ses services dans le domaine touristiques précisément la location des habitats harmonie avec la nature comme les cabanes dans les arbres, les yourtes ou les cabanes flottantes et qui est active en France et en Europe.\" />
        <!-- END OF SEO TAGS -->
    
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"yandex-verification\" content=\"1ba0ccbc4558b96a\" />
<link href=\"{{asset('assets')}}/css/bootstrap.css\" rel=\"stylesheet\">
<link href=\"{{asset('assets')}}/css/bootstrap-responsive.css\" rel=\"stylesheet\">
<link href=\"{{asset('assets')}}/css/prettyPhoto.css\" rel=\"stylesheet\">
<link href=\"{{asset('assets')}}/js/google-code-prettify/prettify.css\" rel=\"stylesheet\">
<link href=\"{{asset('assets')}}/css/flexslider.css\" rel=\"stylesheet\">
<link href=\"{{asset('assets')}}/css/style.css\" rel=\"stylesheet\">
<link href=\"{{asset('assets')}}/color/default.css\" rel=\"stylesheet\">
<link href=\"{{asset('assets')}}/css/style1.css\" rel=\"stylesheet\">
<link href=\"{{asset('assets')}}/css/style2.css\" rel=\"stylesheet\">
<link href=\"{{asset('assets')}}/css/style3.css\" rel=\"stylesheet\">
<link href=\"{{asset('assets')}}/css/style6.css\" rel=\"stylesheet\">
<link href=\"{{asset('assets')}}/css/index1.css\"  rel=\"stylesheet\"/>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<link href=\"https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700\" rel=\"stylesheet\">

<link href=\"{{asset('assets')}}/color/default.css\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700\" rel=\"stylesheet\">
", "home/head.html.twig", "/Applications/MAMP/htdocs/site-atypikhouse salma/templates/home/head.html.twig");
    }
}
