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

/* adminbase.html.twig */
class __TwigTemplate_3684ca3b7cabad2da17b1efdd463bf5a1ef6106989d5525d3f858dac231c1a2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminbase.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminbase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/vendors/iconfonts/mdi/css/materialdesignicons.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/vendors/iconfonts/ionicons/dist/css/ionicons.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/vendors/css/vendor.bundle.base.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/vendors/css/vendor.bundle.addons.css\">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/shared/style.css\">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/demo_1/style.css\">
    <!-- End Layout styles -->
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/favicon.ico\" />
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- partial:partials/_navbar.html -->
      <nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
        <div class=\"text-center navbar-brand-wrapper d-flex align-items-top justify-content-center\">
          <a class=\"navbar-brand brand-logo\" href=\"/\">
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/img/logo11.png\" alt=\"logo\" /> </a>
          <a class=\"navbar-brand brand-logo-mini\" href=\"/\">
            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/im/logo-mini.svg\" alt=\"logo\" /> </a>
        </div>
        <div class=\"navbar-menu-wrapper d-flex align-items-center\">
          <ul class=\"navbar-nav\">
            <li class=\"nav-item font-weight-semibold d-none d-lg-block\"></li>
            <li class=\"nav-item dropdown language-dropdown\">
         
              <div class=\"dropdown-menu dropdown-menu-left navbar-dropdown py-2\" aria-labelledby=\"LanguageDropdown\">
               
             
      
             
              </div>
            </li>
          </ul>
          <form class=\"ml-auto search-form d-none d-md-block\" action=\"#\">
            <div class=\"form-group\">
              <input type=\"search\" class=\"form-control\" placeholder=\"Search Here\">
            </div>
          </form>
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item dropdown\">
              ";
        // line 59
        echo "              <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">
                <a class=\"dropdown-item py-3\">
                  <p class=\"mb-0 font-weight-medium float-left\"> </p>
                  <span class=\"badge badge-pill badge-primary float-right\"></span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/faces/face10.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                  </div>
                  <div class=\"preview-item-content flex-grow py-2\">
                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\"></p>
                    <p class=\"font-weight-light small-text\">  </p>
                  </div>
                </a>
                <a class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/faces/face12.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                  </div>
                  <div class=\"preview-item-content flex-grow py-2\">
                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\"> </p>
                    <p class=\"font-weight-light small-text\"> </p>
                  </div>
                </a>
                <a class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/images/faces/face1.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                  </div>
                  <div class=\"preview-item-content flex-grow py-2\">
                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\"> </p>
                    <p class=\"font-weight-light small-text\">  </p>
                  </div>
                </a>
              </div>
            </li>
            <li class=\"nav-item dropdown\">
              ";
        // line 99
        echo "              <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"notificationDropdown\">
                <a class=\"dropdown-item py-3 border-bottom\">
                  <p class=\"mb-0 font-weight-medium float-left\"> </p>
                  <span class=\"badge badge-pill badge-primary float-right\"></span>
                </a>
                <a class=\"dropdown-item preview-item py-3\">
                  <div class=\"preview-thumbnail\">
                    <i class=\"mdi mdi-alert m-auto text-primary\"></i>
                  </div>
                  <div class=\"preview-item-content\">
                    <h6 class=\"preview-subject font-weight-normal text-dark mb-1\"></h6>
                    <p class=\"font-weight-light small-text mb-0\">  </p>
                  </div>
                </a>
                <a class=\"dropdown-item preview-item py-3\">
                  <div class=\"preview-thumbnail\">
                    <i class=\"mdi mdi-settings m-auto text-primary\"></i>
                  </div>
                  <div class=\"preview-item-content\">
                    <h6 class=\"preview-subject font-weight-normal text-dark mb-1\"></h6>
                    <p class=\"font-weight-light small-text mb-0\"> </p>
                  </div>
                </a>
                <a class=\"dropdown-item preview-item py-3\">
                  <div class=\"preview-thumbnail\">
                    <i class=\"mdi mdi-airballoon m-auto text-primary\"></i>
                  </div>
                  <div class=\"preview-item-content\">
                    <h6 class=\"preview-subject font-weight-normal text-dark mb-1\"></h6>
                    <p class=\"font-weight-light small-text mb-0\"> </p>
                  </div>
                </a>
              </div>
            </li>
            <li class=\"nav-item dropdown d-none d-xl-inline-block user-dropdown\">
              <a class=\"nav-link dropdown-toggle\" id=\"UserDropdown\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                <img class=\"img-xs rounded-circle\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135), "image", [], "any", false, false, false, 135))), "html", null, true);
        echo "\" alt=\"Profile image\"> </a>
              <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
                <div class=\"dropdown-header text-center\">
                  <img class=\"img-md rounded-circle\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "image", [], "any", false, false, false, 138))), "html", null, true);
        echo "\" alt=\"Profile image\">
                  <p class=\"mb-1 mt-3 font-weight-semibold\">";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "user", [], "any", false, false, false, 139), "name", [], "any", false, false, false, 139), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "user", [], "any", false, false, false, 139), "surname", [], "any", false, false, false, 139), "html", null, true);
        echo "</p>
                  <p class=\"font-weight-light text-muted mb-0\"> ";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "email", [], "any", false, false, false, 140), "html", null, true);
        echo "</p>
                </div>
                <a class=\"dropdown-item\" href=\"/logout\">Deconnexion</a>
                <a class=\"dropdown-item\"></a>
                <a class=\"dropdown-item\"></a>
                <a class=\"dropdown-item\"></a>
                <a class=\"dropdown-item\"></a>
              </div>
            </li>
          </ul>
          <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
            <span class=\"mdi mdi-menu\"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:partials/_sidebar.html -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
          <ul class=\"nav\">
            <li class=\"nav-item nav-profile\">
              <a href=\"#\" class=\"nav-link\">
                <div class=\"profile-image\">
                  <img class=\"img-xs rounded-circle\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "user", [], "any", false, false, false, 163), "image", [], "any", false, false, false, 163))), "html", null, true);
        echo "\" alt=\"profile image\">
                  <div class=\"dot-indicator bg-success\"></div>
                </div>
                <div class=\"text-wrapper\">
                  <p class=\"profile-name\">";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "user", [], "any", false, false, false, 167), "name", [], "any", false, false, false, 167), "html", null, true);
        echo " </p>
                  <p class=\"designation\">";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "user", [], "any", false, false, false, 168), "surname", [], "any", false, false, false, 168), "html", null, true);
        echo "</p>
                </div>
              </a>
            </li>
            <li class=\"nav-item nav-category\"> Menu Principale</li>
            ";
        // line 179
        echo "            <li class=\"nav-item\">
              <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                <i class=\"menu-icon typcn typcn-document-add\"></i>
                <span class=\"menu-title\"> Reservation</span>
                <i class=\"menu-arrow\"></i>
              </a>
              <div class=\"collapse\" id=\"auth\">
                <ul class=\"nav flex-column sub-menu\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/admin/reservation/New\">  Nouvelle reservation</a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/admin/reservation/Accepted\"> Annuler </a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/admin/reservation/Canceled\"> Surprimer </a>
                  </li>
                 
                 
                </ul>
              </div>
            </li>
            
          
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/admin/category\">
                <i class=\"menu-icon typcn typcn-shopping-bag\"></i>
                <span class=\"menu-title\">Categorie</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/admin/hotel\">
                <i class=\"menu-icon typcn typcn-shopping-bag\"></i>
                <span class=\"menu-title\">Habitat</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/admin/user\">
                <i class=\"menu-icon typcn typcn-th-large-outline\"></i>
                <span class=\"menu-title\">Utilisateur</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/admin/messages\">
                <i class=\"menu-icon typcn typcn-bell\"></i>
                <span class=\"menu-title\">Messages</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/admin/comment\">
                <i class=\"menu-icon typcn typcn-user-outline\"></i>
                <span class=\"menu-title\">Commentaire</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 234
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_index");
        echo "\">
                <i class=\"menu-icon typcn typcn-user-outline\"></i>
                <span class=\"menu-title\"> Génèrale</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/logout\">
                <i class=\"menu-icon typcn typcn-user-outline\"></i>
                <span class=\"menu-title\"> Deconnexion</span>
              </a>
            </li>
  
          </ul>
        </nav>
        <!-- partial -->
        <div class=\"main-panel\">
          <div class=\"content-wrapper\">
           
          </div>
          ";
        // line 253
        $this->displayBlock('body', $context, $blocks);
        // line 254
        echo "       
       
        </div>
    
      </div>
     
    </div>
    
 
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/vendors/js/vendor.bundle.base.js\"></script>
    <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/vendors/js/vendor.bundle.addons.js\"></script>
    <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/shared/misc.js\"></script>
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/shared/off-canvas.js\"></script>
    <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/demo_1/dashboard.js\"></script>
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/js/shared/jquery.cookie.js\" type=\"text/javascript\"></script>
  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        echo "<title>Admin</title>}";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 253
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "adminbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 253,  405 => 7,  392 => 268,  388 => 267,  384 => 266,  380 => 265,  376 => 264,  372 => 263,  361 => 254,  359 => 253,  337 => 234,  280 => 179,  272 => 168,  268 => 167,  261 => 163,  235 => 140,  229 => 139,  225 => 138,  219 => 135,  181 => 99,  168 => 85,  156 => 76,  144 => 67,  134 => 59,  109 => 33,  104 => 31,  93 => 23,  88 => 21,  82 => 18,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  55 => 8,  53 => 7,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    {% block head %}<title>Admin</title>}{% endblock %}
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets') }}/vendors/iconfonts/mdi/css/materialdesignicons.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets') }}/vendors/iconfonts/ionicons/dist/css/ionicons.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets') }}/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets') }}/vendors/css/vendor.bundle.base.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets') }}/vendors/css/vendor.bundle.addons.css\">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets') }}/css/shared/style.css\">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets') }}/css/demo_1/style.css\">
    <!-- End Layout styles -->
    <link rel=\"shortcut icon\" href=\"{{ asset('assets') }}/images/favicon.ico\" />
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- partial:partials/_navbar.html -->
      <nav class=\"navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
        <div class=\"text-center navbar-brand-wrapper d-flex align-items-top justify-content-center\">
          <a class=\"navbar-brand brand-logo\" href=\"/\">
            <img src=\"{{ asset('assets') }}/img/logo11.png\" alt=\"logo\" /> </a>
          <a class=\"navbar-brand brand-logo-mini\" href=\"/\">
            <img src=\"{{ asset('assets') }}/im/logo-mini.svg\" alt=\"logo\" /> </a>
        </div>
        <div class=\"navbar-menu-wrapper d-flex align-items-center\">
          <ul class=\"navbar-nav\">
            <li class=\"nav-item font-weight-semibold d-none d-lg-block\"></li>
            <li class=\"nav-item dropdown language-dropdown\">
         
              <div class=\"dropdown-menu dropdown-menu-left navbar-dropdown py-2\" aria-labelledby=\"LanguageDropdown\">
               
             
      
             
              </div>
            </li>
          </ul>
          <form class=\"ml-auto search-form d-none d-md-block\" action=\"#\">
            <div class=\"form-group\">
              <input type=\"search\" class=\"form-control\" placeholder=\"Search Here\">
            </div>
          </form>
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item dropdown\">
              {# <a class=\"nav-link count-indicator\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"mdi mdi-bell-outline\"></i>
                <span class=\"count\">7</span>
              </a> #}
              <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"messageDropdown\">
                <a class=\"dropdown-item py-3\">
                  <p class=\"mb-0 font-weight-medium float-left\"> </p>
                  <span class=\"badge badge-pill badge-primary float-right\"></span>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <img src=\"{{ asset('assets') }}/images/faces/face10.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                  </div>
                  <div class=\"preview-item-content flex-grow py-2\">
                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\"></p>
                    <p class=\"font-weight-light small-text\">  </p>
                  </div>
                </a>
                <a class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <img src=\"{{ asset('assets') }}/images/faces/face12.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                  </div>
                  <div class=\"preview-item-content flex-grow py-2\">
                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\"> </p>
                    <p class=\"font-weight-light small-text\"> </p>
                  </div>
                </a>
                <a class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <img src=\"{{ asset('assets') }}/images/faces/face1.jpg\" alt=\"image\" class=\"img-sm profile-pic\">
                  </div>
                  <div class=\"preview-item-content flex-grow py-2\">
                    <p class=\"preview-subject ellipsis font-weight-medium text-dark\"> </p>
                    <p class=\"font-weight-light small-text\">  </p>
                  </div>
                </a>
              </div>
            </li>
            <li class=\"nav-item dropdown\">
              {# <a class=\"nav-link count-indicator\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                <i class=\"mdi mdi-email-outline\"></i>
                <span class=\"count bg-success\">3</span>
              </a> #}
              <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0\" aria-labelledby=\"notificationDropdown\">
                <a class=\"dropdown-item py-3 border-bottom\">
                  <p class=\"mb-0 font-weight-medium float-left\"> </p>
                  <span class=\"badge badge-pill badge-primary float-right\"></span>
                </a>
                <a class=\"dropdown-item preview-item py-3\">
                  <div class=\"preview-thumbnail\">
                    <i class=\"mdi mdi-alert m-auto text-primary\"></i>
                  </div>
                  <div class=\"preview-item-content\">
                    <h6 class=\"preview-subject font-weight-normal text-dark mb-1\"></h6>
                    <p class=\"font-weight-light small-text mb-0\">  </p>
                  </div>
                </a>
                <a class=\"dropdown-item preview-item py-3\">
                  <div class=\"preview-thumbnail\">
                    <i class=\"mdi mdi-settings m-auto text-primary\"></i>
                  </div>
                  <div class=\"preview-item-content\">
                    <h6 class=\"preview-subject font-weight-normal text-dark mb-1\"></h6>
                    <p class=\"font-weight-light small-text mb-0\"> </p>
                  </div>
                </a>
                <a class=\"dropdown-item preview-item py-3\">
                  <div class=\"preview-thumbnail\">
                    <i class=\"mdi mdi-airballoon m-auto text-primary\"></i>
                  </div>
                  <div class=\"preview-item-content\">
                    <h6 class=\"preview-subject font-weight-normal text-dark mb-1\"></h6>
                    <p class=\"font-weight-light small-text mb-0\"> </p>
                  </div>
                </a>
              </div>
            </li>
            <li class=\"nav-item dropdown d-none d-xl-inline-block user-dropdown\">
              <a class=\"nav-link dropdown-toggle\" id=\"UserDropdown\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                <img class=\"img-xs rounded-circle\" src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" alt=\"Profile image\"> </a>
              <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"UserDropdown\">
                <div class=\"dropdown-header text-center\">
                  <img class=\"img-md rounded-circle\" src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" alt=\"Profile image\">
                  <p class=\"mb-1 mt-3 font-weight-semibold\">{{app.user.name}} {{app.user.surname}}</p>
                  <p class=\"font-weight-light text-muted mb-0\"> {{app.user.email}}</p>
                </div>
                <a class=\"dropdown-item\" href=\"/logout\">Deconnexion</a>
                <a class=\"dropdown-item\"></a>
                <a class=\"dropdown-item\"></a>
                <a class=\"dropdown-item\"></a>
                <a class=\"dropdown-item\"></a>
              </div>
            </li>
          </ul>
          <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
            <span class=\"mdi mdi-menu\"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:partials/_sidebar.html -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
          <ul class=\"nav\">
            <li class=\"nav-item nav-profile\">
              <a href=\"#\" class=\"nav-link\">
                <div class=\"profile-image\">
                  <img class=\"img-xs rounded-circle\" src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" alt=\"profile image\">
                  <div class=\"dot-indicator bg-success\"></div>
                </div>
                <div class=\"text-wrapper\">
                  <p class=\"profile-name\">{{app.user.name}} </p>
                  <p class=\"designation\">{{app.user.surname}}</p>
                </div>
              </a>
            </li>
            <li class=\"nav-item nav-category\"> Menu Principale</li>
            {# <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/reservation/1\">
                <i class=\"menu-icon typcn typcn-document-text\"></i>
                <span class=\"menu-title\">admin</span>
              </a>
            </li> #}
            <li class=\"nav-item\">
              <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
                <i class=\"menu-icon typcn typcn-document-add\"></i>
                <span class=\"menu-title\"> Reservation</span>
                <i class=\"menu-arrow\"></i>
              </a>
              <div class=\"collapse\" id=\"auth\">
                <ul class=\"nav flex-column sub-menu\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/admin/reservation/New\">  Nouvelle reservation</a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/admin/reservation/Accepted\"> Annuler </a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/admin/reservation/Canceled\"> Surprimer </a>
                  </li>
                 
                 
                </ul>
              </div>
            </li>
            
          
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/admin/category\">
                <i class=\"menu-icon typcn typcn-shopping-bag\"></i>
                <span class=\"menu-title\">Categorie</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/admin/hotel\">
                <i class=\"menu-icon typcn typcn-shopping-bag\"></i>
                <span class=\"menu-title\">Habitat</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/admin/user\">
                <i class=\"menu-icon typcn typcn-th-large-outline\"></i>
                <span class=\"menu-title\">Utilisateur</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/admin/messages\">
                <i class=\"menu-icon typcn typcn-bell\"></i>
                <span class=\"menu-title\">Messages</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/admin/comment\">
                <i class=\"menu-icon typcn typcn-user-outline\"></i>
                <span class=\"menu-title\">Commentaire</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{path('setting_index') }}\">
                <i class=\"menu-icon typcn typcn-user-outline\"></i>
                <span class=\"menu-title\"> Génèrale</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"/logout\">
                <i class=\"menu-icon typcn typcn-user-outline\"></i>
                <span class=\"menu-title\"> Deconnexion</span>
              </a>
            </li>
  
          </ul>
        </nav>
        <!-- partial -->
        <div class=\"main-panel\">
          <div class=\"content-wrapper\">
           
          </div>
          {% block body %}{% endblock %}
       
       
        </div>
    
      </div>
     
    </div>
    
 
    <script src=\"{{ asset('assets') }}/vendors/js/vendor.bundle.base.js\"></script>
    <script src=\"{{ asset('assets') }}/vendors/js/vendor.bundle.addons.js\"></script>
    <script src=\"{{ asset('assets') }}/js/shared/misc.js\"></script>
    <script src=\"{{ asset('assets') }}/js/shared/off-canvas.js\"></script>
    <script src=\"{{ asset('assets') }}/js/demo_1/dashboard.js\"></script>
    <script src=\"{{ asset('assets') }}/js/shared/jquery.cookie.js\" type=\"text/javascript\"></script>
  </body>
</html>", "adminbase.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\adminbase.html.twig");
    }
}
