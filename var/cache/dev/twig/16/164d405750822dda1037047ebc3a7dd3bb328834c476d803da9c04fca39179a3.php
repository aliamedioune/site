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

/* security/adminlogin.html copy.twig */
class __TwigTemplate_af9f24fc80a8d9cbdaaadad3c2aedfbcb7ee89b366ca2ae671edf84839cf2c80 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/adminlogin.html copy.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/adminlogin.html copy.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 9
        $this->loadTemplate("admin/head.html.twig", "security/adminlogin.html copy.twig", 9)->display($context);
        // line 10
        echo "
</head>
<body class=\"hold-transition login-page\">
<div class=\"login-box\">
    <div class=\"login-logo\">
        <a href=\"../../index2.html\"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class=\"card\">
        <div class=\"card-body login-card-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>


            <form method=\"post\">
                ";
        // line 24
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()), "messageKey", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()), "messageData", [], "any", false, false, false, 25), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 27
        echo "
                ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "                    <div class=\"mb-3\">
                        You are logged in as ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "username", [], "any", false, false, false, 30), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                    </div>
                ";
        }
        // line 33
        echo "
                <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                <label for=\"inputEmail\">Email</label>
                <input type=\"email\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                <label for=\"inputPassword\">Password</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                >

                ";
        // line 54
        echo "
                <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                    Sign in
                </button>
            </form>



            <div class=\"social-auth-links text-center mb-3\">
                <p>- OR -</p>
                <a href=\"#\" class=\"btn btn-block btn-primary\">
                    <i class=\"fab fa-facebook mr-2\"></i> Sign in using Facebook
                </a>
                <a href=\"#\" class=\"btn btn-block btn-danger\">
                    <i class=\"fab fa-google-plus mr-2\"></i> Sign in using Google+
                </a>
            </div>
            <!-- /.social-auth-links -->

            <p class=\"mb-1\">
                <a href=\"#\">I forgot my password</a>
            </p>
            <p class=\"mb-0\">
                <a href=\"/register\" class=\"text-center\">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->


<!-- jQuery -->
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/admin/dist/js/adminlte.min.js\"></script>



</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/adminlogin.html copy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 91,  154 => 89,  149 => 87,  114 => 54,  108 => 41,  100 => 36,  95 => 33,  87 => 30,  84 => 29,  82 => 28,  79 => 27,  73 => 25,  71 => 24,  55 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include('admin/head.html.twig') %}

</head>
<body class=\"hold-transition login-page\">
<div class=\"login-box\">
    <div class=\"login-logo\">
        <a href=\"../../index2.html\"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class=\"card\">
        <div class=\"card-body login-card-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>


            <form method=\"post\">
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

                {% if app.user %}
                    <div class=\"mb-3\">
                        You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                    </div>
                {% endif %}

                <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                <label for=\"inputEmail\">Email</label>
                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                <label for=\"inputPassword\">Password</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"{{ csrf_token('authenticate') }}\"
                >

                {#
                    Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                    See https://symfony.com/doc/current/security/remember_me.html

                    <div class=\"checkbox mb-3\">
                        <label>
                            <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                        </label>
                    </div>
                #}

                <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                    Sign in
                </button>
            </form>



            <div class=\"social-auth-links text-center mb-3\">
                <p>- OR -</p>
                <a href=\"#\" class=\"btn btn-block btn-primary\">
                    <i class=\"fab fa-facebook mr-2\"></i> Sign in using Facebook
                </a>
                <a href=\"#\" class=\"btn btn-block btn-danger\">
                    <i class=\"fab fa-google-plus mr-2\"></i> Sign in using Google+
                </a>
            </div>
            <!-- /.social-auth-links -->

            <p class=\"mb-1\">
                <a href=\"#\">I forgot my password</a>
            </p>
            <p class=\"mb-0\">
                <a href=\"/register\" class=\"text-center\">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->


<!-- jQuery -->
<script src=\"{{ asset('assets') }}/admin/plugins/jquery/jquery.min.js\"></script>
<!-- Bootstrap 4 -->
<script src=\"{{ asset('assets') }}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('assets') }}/admin/dist/js/adminlte.min.js\"></script>



</body>
</html>

", "security/adminlogin.html copy.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\security\\adminlogin.html copy.twig");
    }
}
