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

/* home/footer.html.twig */
class __TwigTemplate_245017ab6fca1a7a621198e9656bc8e24d19a5f74385c3802fd252c26d425a5f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/footer.html.twig"));

        // line 1
        echo "<!-- Footer
================================================== -->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4\">
                <div class=\"widget\">
                    <h5>Pages intéressantes</h5>
                    <ul class=\"regular\">
                        <li><a href=\"#\">AtypikHouse</a></li>
                        <li><a href=\"#\">Nos services</a></li>
                        <li><a href=\"#\">Nos offres récentes</a></li>                     
                    </ul>
                </div>
            </div>
            <div class=\"span4\">
                <div class=\"widget\">
                    <h5></h5>             
                    <div class=\"clear\"></div>
                </div>
            </div>

            <div class=\"span4\">
                <div class=\"widget\">
                    <h5>Comment nous retrouver?</h5>
                    <address>
                        <i class=\"icon-home\"></i> <strong>AtypikHouse</strong><br>
                        10 Cours Louis Lumière, 94300 Vincennes<br>
                        France
                    </address>
                    <p>
                        <i class=\"icon-phone\"></i> +33 1 23 45 67 89<br>
                        <i class=\"icon-envelope-alt\"></i>contact@atypikhouse.com
                    </p>
                </div>
                <div class=\"widget\">
                    <ul class=\"social\">
                        <li><a href=\"https://www.facebook.com/AtypikHouse-107634471531144/\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\" style=\"font-size:20px;color:white\"></i></a></li>
                        <li><a href=\"https://www.instagram.com/atypi_khouse\" data-placement=\"bottom\" title=\"Instagram\"><i class=\"fa fa-instagram\" style=\"font-size:20px;color:white\"></i></i></a></li>
\t\t\t\t\t\t<!--
                        <li><a href=\"https://twitter.com/home\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\" style=\"font-size:20px;color:white\"></i></i></a></li>
                        <li><a href=\"https://www.linkedin.com\" data-placement=\"bottom\" title=\"Linkedin\"><i class=\"fa fa-linkedin\" style=\"font-size:20px;color:white\"></i></a></li>
                        <li><a href=\"https://www.pinterest.com/\" data-placement=\"bottom\" title=\"Pinterest\"><i class=\"fa fa-pinterest\" style=\"font-size:20px;color:white\"></i></a></li>
                        <li><a href=\"https://www.google.fr/\" data-placement=\"bottom\" title=\"Google plus\"><i class=\"fa fa-google\" style=\"font-size:20px;color:white\"></i></a></li>
\t\t\t\t\t\t-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"verybottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span6\">
                    <p>
                        &copy;2021 WebAgency. Tous droits réservés.
                    </p>
                </div>
                <div class=\"span6\">
                    <div class=\"pull-right\">
                        <div class=\"credits\">
                            <!--
                              All the links in the footer should remain intact.
                              You can delete the links only if you purchased the pro version.
                              Licensing information: https://bootstrapmade.com/license/
                              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Lumia
                            -->
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- end wrapper -->
<a href=\"#\" class=\"scrollup\"><i class=\"icon-chevron-up icon-square icon-48 active\"></i></a>

<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.js\"></script>
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/raphael-min.js\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/jquery.easing.1.3.js\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/bootstrap.js\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/google-code-prettify/prettify.js\"></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 85,  137 => 84,  133 => 83,  129 => 82,  125 => 81,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer
================================================== -->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4\">
                <div class=\"widget\">
                    <h5>Pages intéressantes</h5>
                    <ul class=\"regular\">
                        <li><a href=\"#\">AtypikHouse</a></li>
                        <li><a href=\"#\">Nos services</a></li>
                        <li><a href=\"#\">Nos offres récentes</a></li>                     
                    </ul>
                </div>
            </div>
            <div class=\"span4\">
                <div class=\"widget\">
                    <h5></h5>             
                    <div class=\"clear\"></div>
                </div>
            </div>

            <div class=\"span4\">
                <div class=\"widget\">
                    <h5>Comment nous retrouver?</h5>
                    <address>
                        <i class=\"icon-home\"></i> <strong>AtypikHouse</strong><br>
                        10 Cours Louis Lumière, 94300 Vincennes<br>
                        France
                    </address>
                    <p>
                        <i class=\"icon-phone\"></i> +33 1 23 45 67 89<br>
                        <i class=\"icon-envelope-alt\"></i>contact@atypikhouse.com
                    </p>
                </div>
                <div class=\"widget\">
                    <ul class=\"social\">
                        <li><a href=\"https://www.facebook.com/AtypikHouse-107634471531144/\" data-placement=\"bottom\" title=\"Facebook\"><i class=\"fa fa-facebook\" style=\"font-size:20px;color:white\"></i></a></li>
                        <li><a href=\"https://www.instagram.com/atypi_khouse\" data-placement=\"bottom\" title=\"Instagram\"><i class=\"fa fa-instagram\" style=\"font-size:20px;color:white\"></i></i></a></li>
\t\t\t\t\t\t<!--
                        <li><a href=\"https://twitter.com/home\" data-placement=\"bottom\" title=\"Twitter\"><i class=\"fa fa-twitter\" style=\"font-size:20px;color:white\"></i></i></a></li>
                        <li><a href=\"https://www.linkedin.com\" data-placement=\"bottom\" title=\"Linkedin\"><i class=\"fa fa-linkedin\" style=\"font-size:20px;color:white\"></i></a></li>
                        <li><a href=\"https://www.pinterest.com/\" data-placement=\"bottom\" title=\"Pinterest\"><i class=\"fa fa-pinterest\" style=\"font-size:20px;color:white\"></i></a></li>
                        <li><a href=\"https://www.google.fr/\" data-placement=\"bottom\" title=\"Google plus\"><i class=\"fa fa-google\" style=\"font-size:20px;color:white\"></i></a></li>
\t\t\t\t\t\t-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"verybottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span6\">
                    <p>
                        &copy;2021 WebAgency. Tous droits réservés.
                    </p>
                </div>
                <div class=\"span6\">
                    <div class=\"pull-right\">
                        <div class=\"credits\">
                            <!--
                              All the links in the footer should remain intact.
                              You can delete the links only if you purchased the pro version.
                              Licensing information: https://bootstrapmade.com/license/
                              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Lumia
                            -->
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- end wrapper -->
<a href=\"#\" class=\"scrollup\"><i class=\"icon-chevron-up icon-square icon-48 active\"></i></a>

<script src=\"{{asset('assets')}}/js/jquery.js\"></script>
<script src=\"{{asset('assets')}}/js/raphael-min.js\"></script>
<script src=\"{{asset('assets')}}/js/jquery.easing.1.3.js\"></script>
<script src=\"{{asset('assets')}}/js/bootstrap.js\"></script>
<script src=\"{{asset('assets')}}/js/google-code-prettify/prettify.js\"></script>", "home/footer.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\home\\footer.html.twig");
    }
}
