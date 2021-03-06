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

        echo "Conditions g??n??rales d'utilisation|";
        
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
                        <li class=\"active\">Conditions g??n??rales d'utilisation</li>
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
                    <h1>Conditions g??n??rales d'utilisation</h1>
                </div>
            </div>
            <h3>

Introduction
Les pr??sentes conditions g??n??rales repr??sentent l'int??gralit?? des engagements entre LocService et les internautes. Si une ou plusieurs des dispositions des pr??sentes conditions g??n??rales ??taient invalid??es pour quelque cause que ce soit les autres dispositions garderont toute leur validit??. En cas de difficult?? d'interpr??tation entre l'un des titres et les clauses auxquelles ils se rapportent, le titre litigieux sera d??clar?? inexistant. Les pr??sentes conditions g??n??rales, les r??gles de fond et les r??gles de forme, sont r??gies par la loi fran??aise. AtypikHouse se r??serve la facult?? de modifier les dispositions des pr??sentes conditions g??n??rales.

Informatique et libert??
LocService est respectueux de votre vie priv??e et de vos donn??es personnelles, conform??ment ?? la RGPD. LocService a fait l'objet d'une d??claration aupr??s de la CNIL (R??c??piss?? d??claration n?? 1094070 en date du 17 Mai 2005). Pour tenir compte de nouveaux traitements informatiques, nous avons proc??d?? ?? une nouvelle d??claration CNIL (R??c??piss?? d??claration N?? 1863068 en date du 1 juin 2015). Conform??ment ?? la loi (article 34 de la loi \"Informatique et Libert??s\"), vous disposez d'un droit d'acc??s de rectification et de suppression des donn??es qui vous concernent.

Disponibilit?? du service
AtypikHouse s'efforce de proposer un service disponible 7 jours sur 7 et 24 heures sur 24. Cependant AtypikHouse ne pourrait ??tre tenu comme responsable de la non disponibilit?? de locservice.fr quelles que soient les raisons : indisponibilit?? de votre fournisseur d'acc??s, de notre h??bergeur, op??ration de maintenance, etc???

Conditions pour les propri??taires
Le propri??taire s'engage ?? louer un logement d??cent et ne pratiquer aucune discrimination dans sa s??lection de locataires ou de colocataires. Le propri??taire s'engage ?? ne pas proposer de locations saisonni??res ou de vacances. Le propri??taire reconna??t qu'il ne travaille pas pour un professionnel de l'immobilier (agence, marchand de listes, notaire, administrateur de biens, ???). Il s'engage ?? proposer sa location sans frais d'interm??diaires. La responsabilit?? de AtypikHouse ne saurait ??tre engag??e, directement ou indirectement, dans les futures relations entre les propri??taires et les (co)locataires. Le propri??taire accepte que AtypikHouse puisse repr??senter et/ou reproduire les informations concernant les locations, de fa??on totale ou partielle (caract??ristiques, descriptifs, photos, ...) sur des sites d'annonces immobili??res de partenaires afin de renforcer la promotion de leurs offres. Bien ??videmment, LocService s'engage ?? ce que les coordonn??es des propri??taires ne soient jamais divulgu??es sur ces sites. Les photos et descriptifs des locations enregistr??es doivent ??tre conformes ?? la r??alit?? et ne concerner que le logement en question. Tout envoi de messages ou photos contenant des propos diffamatoires, insultants, injurieux et plus g??n??ralement contraires ?? la loi fran??aise pourra entrainer la suppression de l'Espace Propri??taire sans pr??avis, et entra??ner un bannissement temporaire ou d??finitif du propri??taire.

Conditions pour les colocataires en recherche
AtypikHouse s'efforce de proposer un service disponible 7 jours sur 7 et 24 heures sur 24. Cependant AtypikHouse ne pourrait ??tre tenu comme responsable de la non disponibilit?? de locservice.fr quelles que soient les raisons : indisponibilit?? de votre fournisseur d'acc??s, de notre h??bergeur, op??ration de maintenance, etc???

Prix - Paiement - Facture
AtypikHouse est gratuit pour tous les particuliers qui proposent un logement sans frais d???agence qu???ils soient propri??taires ou colocataires occupants. Pour les locataires ou colocataires en recherche, le prix de la diffusion de la demande aux particuliers qui proposent un logement est de une seule fois 29 ??? TTC ou 24 ??? TTC pour les ??tudiants (tarifs au 03-02-2020). En aucun cas LocService ne touchera une commission sur la mise en relation. LocService n'intervient ni dans la conclusion de contrats de location, ni dans l'??tat des lieux ou dans le paiement du loyer. Les demandes de location ou colocation sont par carte bancaire ou PayPal. Les demandes pay??es par PayPal ou carte bancaire, via le site s??curis?? du Cr??dit Mutuel, sont diffus??es imm??diatement. Les demandes pay??es par ch??que sont publi??es d??s l'encaissement du ch??que.

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

{% block title %}Conditions g??n??rales d'utilisation|{% endblock %}


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
                        <li class=\"active\">Conditions g??n??rales d'utilisation</li>
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
                    <h1>Conditions g??n??rales d'utilisation</h1>
                </div>
            </div>
            <h3>

Introduction
Les pr??sentes conditions g??n??rales repr??sentent l'int??gralit?? des engagements entre LocService et les internautes. Si une ou plusieurs des dispositions des pr??sentes conditions g??n??rales ??taient invalid??es pour quelque cause que ce soit les autres dispositions garderont toute leur validit??. En cas de difficult?? d'interpr??tation entre l'un des titres et les clauses auxquelles ils se rapportent, le titre litigieux sera d??clar?? inexistant. Les pr??sentes conditions g??n??rales, les r??gles de fond et les r??gles de forme, sont r??gies par la loi fran??aise. AtypikHouse se r??serve la facult?? de modifier les dispositions des pr??sentes conditions g??n??rales.

Informatique et libert??
LocService est respectueux de votre vie priv??e et de vos donn??es personnelles, conform??ment ?? la RGPD. LocService a fait l'objet d'une d??claration aupr??s de la CNIL (R??c??piss?? d??claration n?? 1094070 en date du 17 Mai 2005). Pour tenir compte de nouveaux traitements informatiques, nous avons proc??d?? ?? une nouvelle d??claration CNIL (R??c??piss?? d??claration N?? 1863068 en date du 1 juin 2015). Conform??ment ?? la loi (article 34 de la loi \"Informatique et Libert??s\"), vous disposez d'un droit d'acc??s de rectification et de suppression des donn??es qui vous concernent.

Disponibilit?? du service
AtypikHouse s'efforce de proposer un service disponible 7 jours sur 7 et 24 heures sur 24. Cependant AtypikHouse ne pourrait ??tre tenu comme responsable de la non disponibilit?? de locservice.fr quelles que soient les raisons : indisponibilit?? de votre fournisseur d'acc??s, de notre h??bergeur, op??ration de maintenance, etc???

Conditions pour les propri??taires
Le propri??taire s'engage ?? louer un logement d??cent et ne pratiquer aucune discrimination dans sa s??lection de locataires ou de colocataires. Le propri??taire s'engage ?? ne pas proposer de locations saisonni??res ou de vacances. Le propri??taire reconna??t qu'il ne travaille pas pour un professionnel de l'immobilier (agence, marchand de listes, notaire, administrateur de biens, ???). Il s'engage ?? proposer sa location sans frais d'interm??diaires. La responsabilit?? de AtypikHouse ne saurait ??tre engag??e, directement ou indirectement, dans les futures relations entre les propri??taires et les (co)locataires. Le propri??taire accepte que AtypikHouse puisse repr??senter et/ou reproduire les informations concernant les locations, de fa??on totale ou partielle (caract??ristiques, descriptifs, photos, ...) sur des sites d'annonces immobili??res de partenaires afin de renforcer la promotion de leurs offres. Bien ??videmment, LocService s'engage ?? ce que les coordonn??es des propri??taires ne soient jamais divulgu??es sur ces sites. Les photos et descriptifs des locations enregistr??es doivent ??tre conformes ?? la r??alit?? et ne concerner que le logement en question. Tout envoi de messages ou photos contenant des propos diffamatoires, insultants, injurieux et plus g??n??ralement contraires ?? la loi fran??aise pourra entrainer la suppression de l'Espace Propri??taire sans pr??avis, et entra??ner un bannissement temporaire ou d??finitif du propri??taire.

Conditions pour les colocataires en recherche
AtypikHouse s'efforce de proposer un service disponible 7 jours sur 7 et 24 heures sur 24. Cependant AtypikHouse ne pourrait ??tre tenu comme responsable de la non disponibilit?? de locservice.fr quelles que soient les raisons : indisponibilit?? de votre fournisseur d'acc??s, de notre h??bergeur, op??ration de maintenance, etc???

Prix - Paiement - Facture
AtypikHouse est gratuit pour tous les particuliers qui proposent un logement sans frais d???agence qu???ils soient propri??taires ou colocataires occupants. Pour les locataires ou colocataires en recherche, le prix de la diffusion de la demande aux particuliers qui proposent un logement est de une seule fois 29 ??? TTC ou 24 ??? TTC pour les ??tudiants (tarifs au 03-02-2020). En aucun cas LocService ne touchera une commission sur la mise en relation. LocService n'intervient ni dans la conclusion de contrats de location, ni dans l'??tat des lieux ou dans le paiement du loyer. Les demandes de location ou colocation sont par carte bancaire ou PayPal. Les demandes pay??es par PayPal ou carte bancaire, via le site s??curis?? du Cr??dit Mutuel, sont diffus??es imm??diatement. Les demandes pay??es par ch??que sont publi??es d??s l'encaissement du ch??que.

        </h3>

 
            
        </div>
    </section>


{% endblock %}


", "home/condition_g.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\home\\condition_g.html.twig");
    }
}
