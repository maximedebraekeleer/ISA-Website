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

/* themes/adaptivetheme/at_core/templates/navigation/menu.html.twig */
class __TwigTemplate_23010c001ccce3312fc0afff4b77643f2dfd2f1877b05a2cfb0bde7d2a2d0be9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 21, "macro" => 28, "if" => 31, "for" => 41, "set" => 43];
        $filters = ["escape" => 35, "clean_class" => 35, "render" => 60, "without" => 65, "clean_id" => 65];
        $functions = ["cycle" => 37, "link" => 69];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'clean_class', 'render', 'without', 'clean_id'],
                ['cycle', 'link']
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
        // line 21
        $context["menus"] = $this;
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)));
        echo "

";
    }

    // line 28
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 29
            $context["menus"] = $this;
            // line 31
            if (($context["items"] ?? null)) {
                // line 32
                echo "
    <ul";
                // line 34
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => [0 => "menu", 1 => "odd", 2 => "menu-level-1", 3 => ((($context["menu_name"] ?? null)) ? (("menu-name--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null))))) : (""))]], "method")), "html", null, true);
                } else {
                    // line 37
                    echo "      class=\"menu is-child ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_cycle([0 => "odd", 1 => "even"], $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null))), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("menu-level-" . (($context["menu_level"] ?? null) + 1)), "html", null, true);
                    echo "\"";
                }
                // line 39
                echo ">";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 43
                    $context["is_parent"] = false;
                    // line 44
                    echo "      ";
                    if (($this->getAttribute($context["item"], "below", []) && $this->getAttribute($context["item"], "is_expanded", []))) {
                        // line 45
                        echo "        ";
                        $context["is_parent"] = true;
                        // line 46
                        echo "      ";
                    }
                    // line 47
                    echo "
      ";
                    // line 49
                    echo "      ";
                    if ((($this->getAttribute($this->getAttribute($context["item"], "url", []), "isExternal", [], "method") == false) && ($this->getAttribute($this->getAttribute($context["item"], "url", []), "isRouted", [], "method") == true))) {
                        // line 50
                        echo "        ";
                        $context["nolink"] = ((($this->getAttribute($this->getAttribute($context["item"], "url", []), "getRouteName", [], "method") == "<nolink>")) ? (true) : (false));
                        // line 51
                        echo "      ";
                    }
                    // line 52
                    echo "
      ";
                    // line 53
                    $context["item_classes"] = [0 => "menu__item", 1 => ((                    // line 55
($context["is_parent"] ?? null)) ? ("is-parent") : ("")), 2 => (($this->getAttribute(                    // line 56
$context["item"], "is_expanded", [])) ? ("menu__item--expanded") : ("")), 3 => (($this->getAttribute(                    // line 57
$context["item"], "is_collapsed", [])) ? ("menu__item--collapsed") : ("")), 4 => (($this->getAttribute(                    // line 58
$context["item"], "in_active_trail", [])) ? ("menu__item--active-trail") : ("")), 5 => ((                    // line 59
($context["nolink"] ?? null)) ? ("menu__item--no-link") : ("")), 6 => ("menu__item-title--" . \Drupal\Component\Utility\Html::getClass($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(                    // line 60
$context["item"], "title", [])))))];
                    // line 63
                    echo "
      ";
                    // line 65
                    echo "      <li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "role"), "html", null, true);
                    echo " id=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((("menu-name--" . $this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null))) . "__") . \Drupal\Component\Utility\Html::getId($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", []))))), "html", null, true);
                    echo "\">

        <span class=\"menu__link--wrapper";
                    // line 67
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["is_parent"] ?? null)) ? (" is-parent__wrapper") : ("")));
                    echo "\">
          ";
                    // line 68
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute(                    // line 70
$context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute(                    // line 71
$context["item"], "url", [])), $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 72
$context["item"], "attributes", []), "removeClass", [0 => ($context["item_classes"] ?? null)], "method"), "addClass", [0 => "menu__link"], "method")), "id", "role")), "html", null, true);
                    // line 74
                    echo "
        </span>

        ";
                    // line 77
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 78
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["menu_name"] ?? null)));
                        echo "
        ";
                    }
                    // line 80
                    echo "
      </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "</ul>
  ";
            }
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
        return "themes/adaptivetheme/at_core/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 85,  171 => 80,  165 => 78,  163 => 77,  158 => 74,  156 => 72,  155 => 71,  154 => 70,  153 => 68,  149 => 67,  141 => 65,  138 => 63,  136 => 60,  135 => 59,  134 => 58,  133 => 57,  132 => 56,  131 => 55,  130 => 53,  127 => 52,  124 => 51,  121 => 50,  118 => 49,  115 => 47,  112 => 46,  109 => 45,  106 => 44,  104 => 43,  100 => 41,  98 => 39,  91 => 37,  88 => 35,  86 => 34,  83 => 32,  81 => 31,  79 => 29,  64 => 28,  57 => 26,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/adaptivetheme/at_core/templates/navigation/menu.html.twig", "C:\\xampp\\htdocs\\projecten3\\themes\\adaptivetheme\\at_core\\templates\\navigation\\menu.html.twig");
    }
}
