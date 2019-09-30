<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/drupalslave/templates/layout/page--404.html.twig */
class __TwigTemplate_e4986ee561af611fe0da6ecf37fb9f1d459e14423ef8042abc7249351492f3cc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 53];
        $filters = ["escape" => 47];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 42
        echo "
<header id=\"header\" class=\"header header-white\">    
  <div class=\"nav-wrapper\">
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"navbar-main\">
      <div class=\"container\">     
        ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo", [])), "html", null, true);
        echo "
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">  
           ";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
           ";
        // line 53
        if (($context["logged_in"] ?? null)) {
            // line 54
            echo "           <ul class=\"navbar-nav\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"#\" id=\"userProfileDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"\" class=\"dds-user-profile-avatar rounded-circle\"> <span class=\"user\">Hi, ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
            echo "</span> <i class=\"fa fa-angle-down\"></i></a>
                    ";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "my_account", [])), "html", null, true);
            echo "
            </li>
           </ul>
            ";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "cart", [])), "html", null, true);
            echo "
           ";
        }
        // line 61
        echo "  
        </div>
        </div>
    </nav>
  </div>    
</header>
";
        // line 68
        echo "<section id=\"dds-panel-wrapper\" class=\"dds-page-info\">
    <div class=\"container h-100\">
        <div class=\"row justify-content-center align-items-center h-100\">
            <div class=\"col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12\">
                <div class=\"dds-form-title\">
                    <h2>404</h2>
                    <h3>Page Not Found</h3>
                    <p><strong>Sorry, We Can’t Find That Page!</strong> The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                    <div class=\"text-center\">
                        <a class=\"btn btn-primary\" href=\"/\">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        \t         \t\t\t\t          
<section id=\"copyrights\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-7 copyrights-info\">
\t\t\t\t<p>© 2019. Drupal Developers Studio. All Rights Reserved. <a href=\"terms-and-conditions.html\">Terms &amp; Conditions</a> | <a href=\"privacy-policy.html\">Privacy Policy</a></p>
\t\t\t</div>
\t\t\t<div class=\"col-lg-5 credits-info\">
\t\t\t\t<p>Drupal is a registered trademark of Dries Buytaert</p>
\t\t\t</div>\t\t\t\t
\t\t</div>\t
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/drupalslave/templates/layout/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 68,  95 => 61,  90 => 60,  84 => 57,  80 => 56,  76 => 54,  74 => 53,  70 => 52,  62 => 47,  55 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/drupalslave/templates/layout/page--404.html.twig", "/var/www/html/drupalslave/themes/drupalslave/templates/layout/page--404.html.twig");
    }
}
