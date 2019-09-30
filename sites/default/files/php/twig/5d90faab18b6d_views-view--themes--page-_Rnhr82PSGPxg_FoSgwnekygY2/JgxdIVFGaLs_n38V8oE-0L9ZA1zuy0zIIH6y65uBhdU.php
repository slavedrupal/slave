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

/* themes/drupalslave/templates/views/views-view--themes--page-1.html.twig */
class __TwigTemplate_6a02e55086652b8ef439633b54f6ba4425682179823f2e8a7889611a48abf703 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 35, "if" => 47];
        $filters = ["escape" => 39];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        // line 35
        $context["classes"] = [0 => ((        // line 36
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null)))) : (""))];
        // line 39
        echo "<div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
<div id=\"drupalslave\">
  <div class=\"drupalcontainer container\">
    <div class=\"row\">
      <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
        <div class=\"drupalslave-sub\">        
          <h2 class=\"drupalslave-sub-title\">Themes</h2>

";
        // line 47
        if (($context["header"] ?? null)) {
            // line 48
            echo "  <header>
    <p>";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null)), "html", null, true);
            echo "</p>
  </header>
";
        }
        // line 52
        echo "          

  ";
        // line 54
        if (($context["exposed"] ?? null)) {
            // line 55
            echo "    <div class=\"view-filters\">
      ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 59
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 60
            echo "   
      ";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null)), "html", null, true);
            echo "
    
  ";
        }
        // line 64
        echo "
  ";
        // line 65
        if (($context["rows"] ?? null)) {
            // line 66
            echo " <div class=\"row\">
      ";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null)), "html", null, true);
            echo "
  </div>
  ";
        } elseif (        // line 69
($context["empty"] ?? null)) {
            // line 70
            echo "    <div class=\"view-empty\">
      ";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 74
        echo "
  ";
        // line 75
        if (($context["pager"] ?? null)) {
            // line 76
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 78
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 79
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 83
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 84
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 86
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 87
            echo "    <div class=\"view-footer\">
   
      ";
            // line 89
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
            echo "

 </div>
  ";
        }
        // line 93
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 94
            echo "    <div class=\"feed-icons\">
      ";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 98
        echo "


        </div>
      </div>
    </div>
  </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/drupalslave/templates/views/views-view--themes--page-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 98,  184 => 95,  181 => 94,  178 => 93,  171 => 89,  167 => 87,  164 => 86,  158 => 84,  155 => 83,  149 => 80,  146 => 79,  143 => 78,  137 => 76,  135 => 75,  132 => 74,  126 => 71,  123 => 70,  121 => 69,  116 => 67,  113 => 66,  111 => 65,  108 => 64,  102 => 61,  99 => 60,  96 => 59,  90 => 56,  87 => 55,  85 => 54,  81 => 52,  75 => 49,  72 => 48,  70 => 47,  58 => 39,  56 => 36,  55 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/drupalslave/templates/views/views-view--themes--page-1.html.twig", "/var/www/html/drupalslave/themes/drupalslave/templates/views/views-view--themes--page-1.html.twig");
    }
}
