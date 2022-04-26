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

/* home/javascript.html.twig */
class __TwigTemplate_409f09e2f1ac524b3475c737c3b21fc5d28d407b9213413486c93dae99590025 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/javascript.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/javascript.html.twig"));

        // line 1
        echo "
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.elastislide.js\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.prettyPhoto.js\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.flexslider.js\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery-hover-effect.js\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/animate.js\"></script>


<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.ihavecookies.js\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.ihavecookies.min.js\"></script>
<!-- Template Custom JavaScript File -->
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/custom.js\"></script>
    <script type=\"text/javascript\">
    var options = {
        title: '&#x1F36A; Accept Cookies & Privacy Policy?',
        message: 'There are no cookies used on this site, but if there were this message could be customised to provide more details. Click the <strong>accept</strong> button below to see the optional callback in action...',
        delay: 600,
        expires: 1,
        link: '#privacy',
        onAccept: function(){
            var myPreferences = \$.fn.ihavecookies.cookie();
            console.log('Yay! The following preferences were saved...');
            console.log(myPreferences);
        },
        uncheckBoxes: true,
        acceptBtnLabel: 'Accept Cookies',
        moreInfoLabel: 'More information',
        cookieTypesTitle: 'Select which cookies you want to accept',
        fixedCookieTypeLabel: 'Essential',
        fixedCookieTypeDesc: 'These are essential for the website to work correctly.'
    }

    \$(document).ready(function() {
        \$('body').ihavecookies(options);

        if (\$.fn.ihavecookies.preference('marketing') === true) {
            console.log('This should run because marketing is accepted.');
        }

        \$('#ihavecookiesBtn').on('click', function(){
            \$('body').ihavecookies(options, 'reinit');
        });
    });

    </script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/javascript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 12,  72 => 10,  68 => 9,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<script src=\"{{asset('assets')}}/js/jquery.elastislide.js\"></script>
<script src=\"{{asset('assets')}}/js/jquery.prettyPhoto.js\"></script>
<script src=\"{{asset('assets')}}/js/jquery.flexslider.js\"></script>
<script src=\"{{asset('assets')}}/js/jquery-hover-effect.js\"></script>
<script src=\"{{asset('assets')}}/js/animate.js\"></script>


<script src=\"{{asset('assets')}}/js/jquery.ihavecookies.js\"></script>
<script src=\"{{asset('assets')}}/js/jquery.ihavecookies.min.js\"></script>
<!-- Template Custom JavaScript File -->
<script src=\"{{asset('assets')}}/js/custom.js\"></script>
    <script type=\"text/javascript\">
    var options = {
        title: '&#x1F36A; Accept Cookies & Privacy Policy?',
        message: 'There are no cookies used on this site, but if there were this message could be customised to provide more details. Click the <strong>accept</strong> button below to see the optional callback in action...',
        delay: 600,
        expires: 1,
        link: '#privacy',
        onAccept: function(){
            var myPreferences = \$.fn.ihavecookies.cookie();
            console.log('Yay! The following preferences were saved...');
            console.log(myPreferences);
        },
        uncheckBoxes: true,
        acceptBtnLabel: 'Accept Cookies',
        moreInfoLabel: 'More information',
        cookieTypesTitle: 'Select which cookies you want to accept',
        fixedCookieTypeLabel: 'Essential',
        fixedCookieTypeDesc: 'These are essential for the website to work correctly.'
    }

    \$(document).ready(function() {
        \$('body').ihavecookies(options);

        if (\$.fn.ihavecookies.preference('marketing') === true) {
            console.log('This should run because marketing is accepted.');
        }

        \$('#ihavecookiesBtn').on('click', function(){
            \$('body').ihavecookies(options, 'reinit');
        });
    });

    </script>", "home/javascript.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\home\\javascript.html.twig");
    }
}
