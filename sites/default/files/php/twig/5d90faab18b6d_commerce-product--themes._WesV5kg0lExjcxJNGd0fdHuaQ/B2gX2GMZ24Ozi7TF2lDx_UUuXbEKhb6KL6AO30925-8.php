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

/* themes/drupalslave/templates/commerce-product--themes.html.twig */
class __TwigTemplate_ad578832566a4a3305e7e958abfffbbd38433b52b15fe379556ac3b88f53f442 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 20];
        $functions = ["file_url" => 20];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['file_url']
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
        echo "<div id=\"drupalslave\">
    <div class=\"drupalcontainer container\">
      <div class=\"row drupalslave\"
            data-aos=\"fade-up\"
            data-aos-delay=\"100\">
        <div class=\"col-12 drupalslave-col\">
          <div class=\"drupalslave-main\">
            <div class=\"drupalslave-main-set\" style=\"position: absolute; right: 50px; top: 35px;\">
            </div>
            <div class=\"row\">
              <div class=\"col-12\">
                <div class=\"downloaded-theme-list row\" >                                                          
                  <div class=\"downloaded-theme-list-item\" 
            data-aos=\"fade-up\"
            data-aos-delay=\"200\">
                    <div class=\"row\">
                      <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12\" 
            data-aos=\"fade-up\"
            data-aos-delay=\"400\">
                        <img src=\" ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? null), "field_product_image", []), 0, []), "#item", [], "array"), "entity", []), "uri", []), "value", []))]), "html", null, true);
        echo "\" 
                        class=\"img-fluid\" 
                        alt=\"";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? null), "field_product_image", []), 0, []), "#item", [], "array"), "alt", [])), "html", null, true);
        echo "\" 
                        title=\"product.field_product_image.0['#item'].title\" />
                      </div>
                      <div class=\"col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12\">
                        <div class=\"themes-list-item-content\">
                          <h2>";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "title", [])), "html", null, true);
        echo "</h2>
                          <h3><sup>\$</sup>";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["product"] ?? null), "variation_price", []), 0, [])), "html", null, true);
        echo "</h3>
                            <h4><span>Drupal 8 Theme</span></h4>
                            ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "body", [])), "html", null, true);
        echo "    
                            ";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variations", [])), "html", null, true);
        echo "
                          <a href=\"";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? null), "field_preview_link", []), 0, [], "array"), "#url", [], "array")), "html", null, true);
        echo "\" class=\"btn btn-lg btn-primary\"><i class=\"fas fa-eye\"></i>  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? null), "field_preview_link", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
        echo "</a>
                        </div>
                      </div>     
                    </div>
                  </div>
                </div>
              </div>
            </div>           
          </div>
        </div>      
      </div>
    </div>
</div>  ";
    }

    public function getTemplateName()
    {
        return "themes/drupalslave/templates/commerce-product--themes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  102 => 31,  98 => 30,  93 => 28,  89 => 27,  81 => 22,  76 => 20,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/drupalslave/templates/commerce-product--themes.html.twig", "/var/www/html/drupalslave/themes/drupalslave/templates/commerce-product--themes.html.twig");
    }
}
