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

/* home/condition_g.html.twig */
class __TwigTemplate_7f9831187aba45b101374518ee8d458d0e0f53a54f0f11d65a3d4aada6fdde56 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/condition_g.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/condition_g.html.twig"));

        $this->parent = $this->loadTemplate("homebase.html.twig", "home/condition_g.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Conditions générales d'utilisation|";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <!-- Subintro
================================================== -->
    <section id=\"subintro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span8\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"/\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                        <li><a href=\"/\">Home</a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">Conditions générales d'utilisation</li>
                    </ul>
                </div>
                <div class=\"span4\">
                    <div class=\"search\">
                        <form class=\"input-append\">
                            <input class=\"search-form\" id=\"appendedPrependedInput\" type=\"text\" placeholder=\"Search here..\" />
                            <button class=\"btn btn-dark\" type=\"submit\">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"maincontent\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    <h1>Conditions générales d'utilisation</h1>
                </div>
            </div>
            <h3>

Introduction
Les présentes conditions générales représentent l'intégralité des engagements entre LocService et les internautes. Si une ou plusieurs des dispositions des présentes conditions générales étaient invalidées pour quelque cause que ce soit les autres dispositions garderont toute leur validité. En cas de difficulté d'interprétation entre l'un des titres et les clauses auxquelles ils se rapportent, le titre litigieux sera déclaré inexistant. Les présentes conditions générales, les règles de fond et les règles de forme, sont régies par la loi française. AtypikHouse se réserve la faculté de modifier les dispositions des présentes conditions générales.

Informatique et liberté
LocService est respectueux de votre vie privée et de vos données personnelles, conformément à la RGPD. LocService a fait l'objet d'une déclaration auprès de la CNIL (Récépissé déclaration n° 1094070 en date du 17 Mai 2005). Pour tenir compte de nouveaux traitements informatiques, nous avons procédé à une nouvelle déclaration CNIL (Récépissé déclaration N° 1863068 en date du 1 juin 2015). Conformément à la loi (article 34 de la loi \"Informatique et Libertés\"), vous disposez d'un droit d'accès de rectification et de suppression des données qui vous concernent.

Disponibilité du service
AtypikHouse s'efforce de proposer un service disponible 7 jours sur 7 et 24 heures sur 24. Cependant AtypikHouse ne pourrait être tenu comme responsable de la non disponibilité de locservice.fr quelles que soient les raisons : indisponibilité de votre fournisseur d'accès, de notre hébergeur, opération de maintenance, etc…

Conditions pour les propriétaires
Le propriétaire s'engage à louer un logement décent et ne pratiquer aucune discrimination dans sa sélection de locataires ou de colocataires. Le propriétaire s'engage à ne pas proposer de locations saisonnières ou de vacances. Le propriétaire reconnaît qu'il ne travaille pas pour un professionnel de l'immobilier (agence, marchand de listes, notaire, administrateur de biens, …). Il s'engage à proposer sa location sans frais d'intermédiaires. La responsabilité de AtypikHouse ne saurait être engagée, directement ou indirectement, dans les futures relations entre les propriétaires et les (co)locataires. Le propriétaire accepte que AtypikHouse puisse représenter et/ou reproduire les informations concernant les locations, de façon totale ou partielle (caractéristiques, descriptifs, photos, ...) sur des sites d'annonces immobilières de partenaires afin de renforcer la promotion de leurs offres. Bien évidemment, LocService s'engage à ce que les coordonnées des propriétaires ne soient jamais divulguées sur ces sites. Les photos et descriptifs des locations enregistrées doivent être conformes à la réalité et ne concerner que le logement en question. Tout envoi de messages ou photos contenant des propos diffamatoires, insultants, injurieux et plus généralement contraires à la loi française pourra entrainer la suppression de l'Espace Propriétaire sans préavis, et entraîner un bannissement temporaire ou définitif du propriétaire.

Conditions pour les colocataires en recherche
AtypikHouse s'efforce de proposer un service disponible 7 jours sur 7 et 24 heures sur 24. Cependant AtypikHouse ne pourrait être tenu comme responsable de la non disponibilité de locservice.fr quelles que soient les raisons : indisponibilité de votre fournisseur d'accès, de notre hébergeur, opération de maintenance, etc…

Prix - Paiement - Facture
AtypikHouse est gratuit pour tous les particuliers qui proposent un logement sans frais d’agence qu’ils soient propriétaires ou colocataires occupants. Pour les locataires ou colocataires en recherche, le prix de la diffusion de la demande aux particuliers qui proposent un logement est de une seule fois 29 € TTC ou 24 € TTC pour les étudiants (tarifs au 03-02-2020). En aucun cas LocService ne touchera une commission sur la mise en relation. LocService n'intervient ni dans la conclusion de contrats de location, ni dans l'état des lieux ou dans le paiement du loyer. Les demandes de location ou colocation sont par carte bancaire ou PayPal. Les demandes payées par PayPal ou carte bancaire, via le site sécurisé du Crédit Mutuel, sont diffusées immédiatement. Les demandes payées par chèque sont publiées dès l'encaissement du chèque.

        </h3>

 
            
        </div>
    </section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/condition_g.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homebase.html.twig' %}

{% block title %}Conditions générales d'utilisation|{% endblock %}


{% block body %}

    <!-- Subintro
================================================== -->
    <section id=\"subintro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span8\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"/\"><i class=\"icon-home\"></i></a><i class=\"icon-angle-right\"></i></li>
                        <li><a href=\"/\">Home</a><i class=\"icon-angle-right\"></i></li>
                        <li class=\"active\">Conditions générales d'utilisation</li>
                    </ul>
                </div>
                <div class=\"span4\">
                    <div class=\"search\">
                        <form class=\"input-append\">
                            <input class=\"search-form\" id=\"appendedPrependedInput\" type=\"text\" placeholder=\"Search here..\" />
                            <button class=\"btn btn-dark\" type=\"submit\">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"maincontent\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span12\">
                    <h1>Conditions générales d'utilisation</h1>
                </div>
            </div>
            <h3>

Introduction
Les présentes conditions générales représentent l'intégralité des engagements entre LocService et les internautes. Si une ou plusieurs des dispositions des présentes conditions générales étaient invalidées pour quelque cause que ce soit les autres dispositions garderont toute leur validité. En cas de difficulté d'interprétation entre l'un des titres et les clauses auxquelles ils se rapportent, le titre litigieux sera déclaré inexistant. Les présentes conditions générales, les règles de fond et les règles de forme, sont régies par la loi française. AtypikHouse se réserve la faculté de modifier les dispositions des présentes conditions générales.

Informatique et liberté
LocService est respectueux de votre vie privée et de vos données personnelles, conformément à la RGPD. LocService a fait l'objet d'une déclaration auprès de la CNIL (Récépissé déclaration n° 1094070 en date du 17 Mai 2005). Pour tenir compte de nouveaux traitements informatiques, nous avons procédé à une nouvelle déclaration CNIL (Récépissé déclaration N° 1863068 en date du 1 juin 2015). Conformément à la loi (article 34 de la loi \"Informatique et Libertés\"), vous disposez d'un droit d'accès de rectification et de suppression des données qui vous concernent.

Disponibilité du service
AtypikHouse s'efforce de proposer un service disponible 7 jours sur 7 et 24 heures sur 24. Cependant AtypikHouse ne pourrait être tenu comme responsable de la non disponibilité de locservice.fr quelles que soient les raisons : indisponibilité de votre fournisseur d'accès, de notre hébergeur, opération de maintenance, etc…

Conditions pour les propriétaires
Le propriétaire s'engage à louer un logement décent et ne pratiquer aucune discrimination dans sa sélection de locataires ou de colocataires. Le propriétaire s'engage à ne pas proposer de locations saisonnières ou de vacances. Le propriétaire reconnaît qu'il ne travaille pas pour un professionnel de l'immobilier (agence, marchand de listes, notaire, administrateur de biens, …). Il s'engage à proposer sa location sans frais d'intermédiaires. La responsabilité de AtypikHouse ne saurait être engagée, directement ou indirectement, dans les futures relations entre les propriétaires et les (co)locataires. Le propriétaire accepte que AtypikHouse puisse représenter et/ou reproduire les informations concernant les locations, de façon totale ou partielle (caractéristiques, descriptifs, photos, ...) sur des sites d'annonces immobilières de partenaires afin de renforcer la promotion de leurs offres. Bien évidemment, LocService s'engage à ce que les coordonnées des propriétaires ne soient jamais divulguées sur ces sites. Les photos et descriptifs des locations enregistrées doivent être conformes à la réalité et ne concerner que le logement en question. Tout envoi de messages ou photos contenant des propos diffamatoires, insultants, injurieux et plus généralement contraires à la loi française pourra entrainer la suppression de l'Espace Propriétaire sans préavis, et entraîner un bannissement temporaire ou définitif du propriétaire.

Conditions pour les colocataires en recherche
AtypikHouse s'efforce de proposer un service disponible 7 jours sur 7 et 24 heures sur 24. Cependant AtypikHouse ne pourrait être tenu comme responsable de la non disponibilité de locservice.fr quelles que soient les raisons : indisponibilité de votre fournisseur d'accès, de notre hébergeur, opération de maintenance, etc…

Prix - Paiement - Facture
AtypikHouse est gratuit pour tous les particuliers qui proposent un logement sans frais d’agence qu’ils soient propriétaires ou colocataires occupants. Pour les locataires ou colocataires en recherche, le prix de la diffusion de la demande aux particuliers qui proposent un logement est de une seule fois 29 € TTC ou 24 € TTC pour les étudiants (tarifs au 03-02-2020). En aucun cas LocService ne touchera une commission sur la mise en relation. LocService n'intervient ni dans la conclusion de contrats de location, ni dans l'état des lieux ou dans le paiement du loyer. Les demandes de location ou colocation sont par carte bancaire ou PayPal. Les demandes payées par PayPal ou carte bancaire, via le site sécurisé du Crédit Mutuel, sont diffusées immédiatement. Les demandes payées par chèque sont publiées dès l'encaissement du chèque.

        </h3>

 
            
        </div>
    </section>


{% endblock %}


", "home/condition_g.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\home\\condition_g.html.twig");
    }
}
