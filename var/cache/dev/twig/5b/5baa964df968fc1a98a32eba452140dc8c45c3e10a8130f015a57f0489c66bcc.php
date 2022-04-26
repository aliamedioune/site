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

/* register1/index.html.twig */
class __TwigTemplate_2b66ec7a261566f499e91806fe38cc876c38ba0f50affc66457c689cdcc3355f extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register1/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register1/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" >
<head>
  <meta charset=\"UTF-8\">
  ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "</head>
<body>
<!-- partial:index.partial.html -->
<h2> Inscription </h2>
<script>

  function checkForm(form)
  {
    
    if(!form.terms.checked) {
      alert(\"Please indicate that you accept the Terms and Conditions\");
      form.terms.focus();
      return false;
    }
    return true;
  }

</script>

<div class=\"container\" id=\"container\">
\t<div class=\"form-container sign-up-container\">
\t\t<form action=\"#\">

\t\t\t<div class=\"social-container\">
\t\t\t\t<a href=\"#\" class=\"social\"><i class=\"fab fa-facebook-f\"></i></a>
\t\t\t\t<a href=\"#\" class=\"social\"><i class=\"fab fa-google-plus-g\"></i></a>
\t\t\t\t<a href=\"#\" class=\"social\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t\t</div>
\t\t\t<span>or use your email for registration</span>
\t\t\t<input type=\"text\" placeholder=\"Name\" />
\t\t\t<input type=\"email\" placeholder=\"Email\" />
\t\t\t<input type=\"password\" placeholder=\"Password\" />


\t\t\t<button>Sign Up</button>
\t\t</form>

\t</div>
\t <div class=\"form-container sign-in-container\">
\t}
\t 
\t


\t   ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), 'form_start');
        echo "

\t\t\t\t
\t\t\t\t

\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "email", [], "any", false, false, false, 59), 'row');
        echo "\t
\t\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "password", [], "any", false, false, false, 60), 'row');
        echo "
\t\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "roles", [], "any", false, false, false, 61), 'row');
        echo "

\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63), 'row');
        echo "
\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "surname", [], "any", false, false, false, 64), 'row');
        echo "
\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "image", [], "any", false, false, false, 65), 'row');
        echo "
\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "status", [], "any", false, false, false, 66), 'row');
        echo "
\t\t
\t\t\t\t<button type=\"submit\">Register!</button>
\t\t\t
\t\t\t";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), 'form_end');
        echo "\t 
\t\t\t\t
\t\t\t\t 
\t\t\t
\t\t
\t</div> 


\t<div class=\"overlay-container\">
\t\t<div class=\"overlay\">

\t\t\t<div class=\"overlay-panel overlay-right\">
\t\t\t\t<h1> Bonjour </h1>
\t\t\t\t<p>  vous etes déja un utilisateur </p>
\t\t\t<a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"ghost\" id=\"signUp\" style='color:white; border:solid 1 px white; border-raduis:25%'> Login</a>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- partial -->


</body>
</html>




</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "  <title>Page D'Inscription</title>
  <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets"), "html", null, true);
        echo "/css/style7.css\" rel=\"stylesheet\">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "register1/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 7,  193 => 6,  183 => 5,  155 => 84,  138 => 70,  131 => 66,  127 => 65,  123 => 64,  119 => 63,  114 => 61,  110 => 60,  106 => 59,  98 => 54,  52 => 10,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" >
<head>
  <meta charset=\"UTF-8\">
  {% block head %}
  <title>Page D'Inscription</title>
  <link href=\"{{asset('assets')}}/css/style7.css\" rel=\"stylesheet\">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
{% endblock %}
</head>
<body>
<!-- partial:index.partial.html -->
<h2> Inscription </h2>
<script>

  function checkForm(form)
  {
    
    if(!form.terms.checked) {
      alert(\"Please indicate that you accept the Terms and Conditions\");
      form.terms.focus();
      return false;
    }
    return true;
  }

</script>

<div class=\"container\" id=\"container\">
\t<div class=\"form-container sign-up-container\">
\t\t<form action=\"#\">

\t\t\t<div class=\"social-container\">
\t\t\t\t<a href=\"#\" class=\"social\"><i class=\"fab fa-facebook-f\"></i></a>
\t\t\t\t<a href=\"#\" class=\"social\"><i class=\"fab fa-google-plus-g\"></i></a>
\t\t\t\t<a href=\"#\" class=\"social\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t\t</div>
\t\t\t<span>or use your email for registration</span>
\t\t\t<input type=\"text\" placeholder=\"Name\" />
\t\t\t<input type=\"email\" placeholder=\"Email\" />
\t\t\t<input type=\"password\" placeholder=\"Password\" />


\t\t\t<button>Sign Up</button>
\t\t</form>

\t</div>
\t <div class=\"form-container sign-in-container\">
\t}
\t 
\t


\t   {{ form_start(registrationForm) }}

\t\t\t\t
\t\t\t\t

\t\t\t\t{{ form_row(registrationForm.email) }}\t
\t\t\t\t{{ form_row(registrationForm.password) }}
\t\t\t\t{{ form_row(registrationForm.roles) }}

\t\t\t\t{{ form_row(registrationForm.name) }}
\t\t\t\t{{ form_row(registrationForm.surname) }}
\t\t\t\t{{ form_row(registrationForm.image) }}
\t\t\t\t{{ form_row(registrationForm.status) }}
\t\t
\t\t\t\t<button type=\"submit\">Register!</button>
\t\t\t
\t\t\t{{ form_end(registrationForm) }}\t 
\t\t\t\t
\t\t\t\t 
\t\t\t
\t\t
\t</div> 


\t<div class=\"overlay-container\">
\t\t<div class=\"overlay\">

\t\t\t<div class=\"overlay-panel overlay-right\">
\t\t\t\t<h1> Bonjour </h1>
\t\t\t\t<p>  vous etes déja un utilisateur </p>
\t\t\t<a href=\"{{path('app_login')}}\" class=\"ghost\" id=\"signUp\" style='color:white; border:solid 1 px white; border-raduis:25%'> Login</a>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- partial -->


</body>
</html>




</body>
</html>", "register1/index.html.twig", "C:\\wamp64\\www\\Sites\\site-salma\\templates\\register1\\index.html.twig");
    }
}
