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

/* themes/drupalslave/templates/layout/page.html.twig */
class __TwigTemplate_2d7949331960aa417016273ff91f5f136ba360faf83661fa315c590187d81731 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 10];
        $filters = ["escape" => 5];
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
        // line 1
        echo "<header id=\"header\" class=\"header header-white\">    
  <div class=\"nav-wrapper\">
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"navbar-main\">
      <div class=\"container\">     
        ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo", [])), "html", null, true);
        echo "
         
        <div class=\"collapse navbar-collapse\" id=\"navbardrupalslaveContent\">
          ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "                       
        </div>
        ";
        // line 10
        if (($context["logged_in"] ?? null)) {
            // line 11
            echo "         <ul class=\"navbar-nav user-menu\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-target=\"#accountDropdown\">
                  ";
            // line 14
            if (($context["profile_picture"] ?? null)) {
                // line 15
                echo "                    <img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["profile_picture"] ?? null)), "html", null, true);
                echo "\"  class=\"drupalslave-user-profile-avatar rounded-circle\" alt=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
                echo "\"> 
                  ";
            }
            // line 17
            echo "                  <span class=\"user\">Hi, ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
            echo "</span> 
                  <i class=\"fa fa-angle-down\"></i>
                </a>
                  
            </li>               
          </ul>
          ";
            // line 24
            echo "          <ul class=\"dropdown-menu dropdown-menu-right\" id=\"accountDropdown\" role=\"menu\">
               <li><a href=\"/user\"><i class=\"fas fa-user\"></i> My Account</a></li>
               <li><a href=\"/user/logout\"><i class=\"fas fa-lock\"></i> Logout</a></li>
          </ul>
          ";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "cart", [])), "html", null, true);
            echo "
          ";
        }
        // line 30
        echo "          <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbardrupalslaveContent\" aria-controls=\"navbardrupalslaveContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"icon-bar top-bar\"></span><span class=\"icon-bar middle-bar\"></span><span class=\"icon-bar bottom-bar\"></span></button>

      </div>
    </nav>
  </div>   
</header>

<section id=\"page-content\">
  ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
  <!-- Content Start-->  
  ";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo " 
  <!-- Content ENd-->  
</section>
   \t        \t         \t\t\t\t          

<section id=\"copyrights\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 copyrights-info\">
        <p>&copy; 2019. Drupal Slave. All Rights Reserved.</p>
      </div>        
    </div>  
  </div>
</section>
<a id=\"go-to-top\" href=\"#\" class=\"btn btn-primary btn-lg go-to-top\" role=\"button\" title=\"Go To Top\"><i class=\"fas fa-angle-up\"></i></a> \t\t";
    }

    public function getTemplateName()
    {
        return "themes/drupalslave/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 40,  120 => 38,  110 => 30,  105 => 28,  99 => 24,  89 => 17,  81 => 15,  79 => 14,  74 => 11,  72 => 10,  67 => 8,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/drupalslave/templates/layout/page.html.twig", "/var/www/html/drupalslave/themes/drupalslave/templates/layout/page.html.twig");
    }
}
