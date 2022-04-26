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

/* admin/sidebar.html.twig */
class __TwigTemplate_caa294246bdbf306198fa2f800ee236f9bbf4d92d78825f027d51dff6f9da5d6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        // line 1
        echo "<!-- Main Sidebar Container -->
<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"/admin\" class=\"brand-link\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/dist/img/AdminLTELogo.png\"
             alt=\"AdminLTE Logo\"
             class=\"brand-image img-circle elevation-3\"
             style=\"opacity: .8\">
        <span class=\"brand-text font-weight-light\">Hotel Admin</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
        <!-- Sidebar user (optional) -->
        <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
            <div class=\"image\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "image", [], "any", false, false, false, 17))), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
            </div>
            <div class=\"info\">
                <a href=\"#\" class=\"d-block\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "surname", [], "any", false, false, false, 20), "html", null, true);
        echo "</a>

                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">  Deconnexion</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class=\"mt-2\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class=\"nav-item has-treeview\">
                    <a href=\"/admin/reservation/\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>

                        <p>
                            Rezervations
                            <i class=\"right fas fa-angle-left\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"/admin/reservation/New\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>New
                                <span class=\"right badge badge-danger\">New</span>
                                </p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"/admin/reservation/Accepted\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Accepted</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"/admin/reservation/Canceled\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Canceled</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"/admin/reservation/Completed\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Completed</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"/admin/category\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-th\"></i>
                        <p>
                            Category

                        </p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"/admin/hotel\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-building\"></i>
                        <p>
                            Hotels
                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"/admin/user\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-user-friends\"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"/admin/messages\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-comment\"></i>
                        <p>
                            Form Messages
                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"/admin/comment\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-user\"></i>
                        <p>
                            User Comments
                        </p>
                    </a>
                </li>
                <li class=\"nav-header\">General</li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("setting_index");
        echo "\" class=\"nav-link\">
                        <i class=\"nav-icon far fa-circle text-danger\"></i>
                        <p class=\"text\">Settings</p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon far fa-circle text-warning\"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon far fa-circle text-info\"></i>
                        <p>Informational</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 116,  77 => 22,  70 => 20,  64 => 17,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Main Sidebar Container -->
<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"/admin\" class=\"brand-link\">
        <img src=\"{{ asset('assets') }}/admin/dist/img/AdminLTELogo.png\"
             alt=\"AdminLTE Logo\"
             class=\"brand-image img-circle elevation-3\"
             style=\"opacity: .8\">
        <span class=\"brand-text font-weight-light\">Hotel Admin</span>
    </a>

    <!-- Sidebar -->
    <div class=\"sidebar\">
        <!-- Sidebar user (optional) -->
        <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
            <div class=\"image\">
                <img src=\"{{ asset('uploads/images/' ~ app.user.image) }}\" class=\"img-circle elevation-2\" alt=\"User Image\">
            </div>
            <div class=\"info\">
                <a href=\"#\" class=\"d-block\">{{app.user.name}} {{app.user.surname}}</a>

                <a href=\"{{ path('app_logout')}}\">  Deconnexion</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class=\"mt-2\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class=\"nav-item has-treeview\">
                    <a href=\"/admin/reservation/\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-tachometer-alt\"></i>

                        <p>
                            Rezervations
                            <i class=\"right fas fa-angle-left\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"/admin/reservation/New\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>New
                                <span class=\"right badge badge-danger\">New</span>
                                </p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"/admin/reservation/Accepted\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Accepted</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"/admin/reservation/Canceled\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Canceled</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"/admin/reservation/Completed\" class=\"nav-link\">
                                <i class=\"far fa-circle nav-icon\"></i>
                                <p>Completed</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"/admin/category\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-th\"></i>
                        <p>
                            Category

                        </p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"/admin/hotel\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-building\"></i>
                        <p>
                            Hotels
                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"/admin/user\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-user-friends\"></i>
                        <p>
                            Users
                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"/admin/messages\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-comment\"></i>
                        <p>
                            Form Messages
                        </p>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a href=\"/admin/comment\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-user\"></i>
                        <p>
                            User Comments
                        </p>
                    </a>
                </li>
                <li class=\"nav-header\">General</li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('setting_index') }}\" class=\"nav-link\">
                        <i class=\"nav-icon far fa-circle text-danger\"></i>
                        <p class=\"text\">Settings</p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon far fa-circle text-warning\"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                        <i class=\"nav-icon far fa-circle text-info\"></i>
                        <p>Informational</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>", "admin/sidebar.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\admin\\sidebar.html.twig");
    }
}
