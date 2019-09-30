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

/* themes/drupalslave/templates/commerce/checkout/commerce-checkout-form--with-sidebar.html.twig */
class __TwigTemplate_befb24e715b6520dda962cae622383125c3b3c415a78779b6df93d5558ef1d35 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 35, "without" => 35];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'without'],
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
        // line 12
        echo "<div id=\"drupalslave-panel\" class=\"drupalslave-shopping-cart\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"drupalslave-panel-main-theme top-bar\">
                    <div class=\"row\">
                        <div class=\"col-12 drupalslave-selected-theme\">
                            <h2 class=\"drupalslave-panel-title\">     
                                Your Themes Cart
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"drupalslave-theme-item-info main-container\">
                  <div class=\"row\">
                    <div class=\"col-md-8 order-md-1\">
                        <h4>Order Information</h4>
                        <div class=\"row\">
                          <div class=\"col-12\">
                            ";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null)), "actions", "sidebar", "paypal_smart_payment_buttons"), "html", null, true);
        echo "
                          </div>
                        </div>
                        <div class=\"row\">
                          <div class=\"col-sm-6\">
                            ";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "paypal_smart_payment_buttons", [])), "html", null, true);
        echo "
                          </div>
                        </div>
                    </div>    
                    <div class=\"col-md-4 order-md-2 mb-4\">
                        ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "sidebar", [])), "html", null, true);
        echo "
                        ";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "form_build_id", [])), "html", null, true);
        echo "
                        ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "form_id", [])), "html", null, true);
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "actions", [])), "html", null, true);
        echo "
                    </div>
                  </div>
                </div>
            </div>
        </div>
     </div> 
</div>";
    }

    public function getTemplateName()
    {
        return "themes/drupalslave/templates/commerce/checkout/commerce-checkout-form--with-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 48,  104 => 47,  100 => 46,  96 => 45,  88 => 40,  80 => 35,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/drupalslave/templates/commerce/checkout/commerce-checkout-form--with-sidebar.html.twig", "/var/www/html/drupalslave/themes/drupalslave/templates/commerce/checkout/commerce-checkout-form--with-sidebar.html.twig");
    }
}
