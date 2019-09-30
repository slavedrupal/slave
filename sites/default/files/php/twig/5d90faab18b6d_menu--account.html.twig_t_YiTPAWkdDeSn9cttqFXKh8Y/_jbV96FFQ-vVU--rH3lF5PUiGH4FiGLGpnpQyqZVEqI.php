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

/* themes/drupalslave/templates/navigation/menu--account.html.twig */
class __TwigTemplate_061ad885a71c4c05f957b0a07c1c4ee98c77b80d272c4c2e41199c31910f99dd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 18, "macro" => 26, "for" => 30, "set" => 32, "if" => 41];
        $filters = ["escape" => 43];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'for', 'set', 'if'],
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
        // line 18
        $context["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
    }

    // line 26
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 27
            $context["menus"] = $this;
            echo " 
 
   <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
      ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                echo "        ";
                // line 32
                $context["classes"] = [0 => "nav-link", 1 => (($this->getAttribute(                // line 34
$context["item"], "is_expanded", [])) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                // line 35
$context["item"], "is_expanded", [])) ? ("dropdown") : ("")), 3 => (($this->getAttribute(                // line 36
$context["item"], "is_collapsed", [])) ? ("menu-item--collapsed") : ("")), 4 => (($this->getAttribute(                // line 37
$context["item"], "in_active_trail", [])) ? ("active") : (""))];
                // line 40
                echo "          ";
                // line 41
                echo "          ";
                if ($this->getAttribute($context["item"], "below", [])) {
                    // line 42
                    echo "          <li class=\"nav-item drop-down\">
            <a ";
                    // line 43
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null), 1 => "item"], "method")), "html", null, true);
                    echo " href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                    echo "\"  data-toggle=\"dropdown\">
            <div>";
                    // line 44
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                    echo " <i class=\"fa fa-angle-down\"></i></div>
            </a>
              ";
                    // line 47
                    echo "                <ul class=\"dropdown-menu\" role=\"menu\">
                ";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "below", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 49
                        echo "                  <li><a class=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                        echo "\" href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo "</a></li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "              </ul>
            </li>  
          ";
                    // line 54
                    echo "          ";
                } else {
                    // line 55
                    echo "          ";
                    // line 56
                    echo "              
                <li class=\"nav-item\">
                <a ";
                    // line 58
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null), 1 => "item"], "method")), "html", null, true);
                    echo " href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                    echo "</a>
                </li>
          ";
                }
                // line 61
                echo "
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "    </ul>
 
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/drupalslave/templates/navigation/menu--account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 63,  161 => 61,  151 => 58,  147 => 56,  145 => 55,  142 => 54,  138 => 51,  125 => 49,  121 => 48,  118 => 47,  113 => 44,  107 => 43,  104 => 42,  101 => 41,  99 => 40,  97 => 37,  96 => 36,  95 => 35,  94 => 34,  93 => 32,  91 => 31,  87 => 30,  81 => 27,  67 => 26,  60 => 24,  57 => 19,  55 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/drupalslave/templates/navigation/menu--account.html.twig", "/var/www/html/drupalslave/themes/drupalslave/templates/navigation/menu--account.html.twig");
    }
}
