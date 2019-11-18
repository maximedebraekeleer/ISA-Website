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

/* themes/adaptivetheme/at_core/templates/navigation/pager.html.twig */
class __TwigTemplate_c4e319a0430a4e78c74b6b36b898cdeeed41f3de03d7e8a8bc6f1018cf89ff01 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 32, "for" => 63, "set" => 65];
        $filters = ["t" => 34, "escape" => 43, "default" => 45, "trim" => 73, "join" => 73];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['t', 'escape', 'default', 'trim', 'join'],
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
        // line 32
        if (($context["items"] ?? null)) {
            // line 33
            echo "<nav class=\"pager pager--full\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items\">
      ";
            // line 37
            if (($this->getAttribute(($context["items"] ?? null), "first", []) || $this->getAttribute(($context["items"] ?? null), "previous", []))) {
                // line 38
                echo "<ul class=\"pager__items__first-previous js-pager__items\">";
            }
            // line 41
            if ($this->getAttribute(($context["items"] ?? null), "first", [])) {
                // line 42
                echo "<li class=\"pager__item pager__item--first pager__item--text\">
            <a href=\"";
                // line 43
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "attributes", [])), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 44
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("First page"));
                echo "</span>
              <span class=\"pager__first\" aria-hidden=\"true\">";
                // line 45
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", [], "any", false, true), "text", [])), t("« first"))) : (t("« first"))), "html", null, true);
                echo "</span>
            </a>
          </li>";
            }
            // line 50
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 51
                echo "<li class=\"pager__item pager__item--previous pager__item--text\">
            <a href=\"";
                // line 52
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "attributes", [])), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 53
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page"));
                echo "</span>
              <span class=\"pager__previous\" aria-hidden=\"true\">";
                // line 54
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [])), t("‹ previous"))) : (t("‹ previous"))), "html", null, true);
                echo "</span>
            </a>
          </li>";
            }
            // line 58
            if (($this->getAttribute(($context["items"] ?? null), "first", []) || $this->getAttribute(($context["items"] ?? null), "previous", []))) {
                // line 59
                echo "</ul>";
            }
            // line 62
            echo "      <ul class=\"pager__items__num-pages js-pager__items\">";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "pages", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 65
                $context["classes"] = [0 => "pager__item", 1 => "pager__item--num", 2 => (($this->getAttribute(                // line 68
$context["loop"], "first", [])) ? ("pager__item--num-first") : ("")), 3 => (($this->getAttribute(                // line 69
$context["loop"], "last", [])) ? ("pager__item--num-last") : ("")), 4 => (((                // line 70
($context["current"] ?? null) == $context["key"])) ? ("is-active") : (""))];
                // line 73
                echo "<li class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), " ")), "html", null, true);
                echo "\">";
                // line 74
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 75
                    $context["title"] = t("Current page");
                } else {
                    // line 77
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                }
                // line 79
                echo "<a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "href", [])), "html", null, true);
                echo "\" class=\"pager__link";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__link--is-active") : ("")));
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 80
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "</span>
              ";
                // line 82
                if (($this->getAttribute(($context["ellipses"] ?? null), "previous", []) && $this->getAttribute($context["loop"], "first", []))) {
                    // line 83
                    echo "<span class=\"pager__ellipsis pager__ellipsis--before\" role=\"presentation\">&hellip;</span>";
                }
                // line 85
                echo "<span class=\"pager__key\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                echo "</span>
              ";
                // line 87
                if (($this->getAttribute(($context["ellipses"] ?? null), "next", []) && $this->getAttribute($context["loop"], "last", []))) {
                    // line 88
                    echo "<span class=\"pager__ellipsis pager__ellipsis--after\" role=\"presentation\">&hellip;</span>";
                }
                // line 90
                echo "</a>
          </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "      </ul>
      ";
            // line 95
            if (($this->getAttribute(($context["items"] ?? null), "next", []) || $this->getAttribute(($context["items"] ?? null), "last", []))) {
                // line 96
                echo "<ul class=\"pager__items__next-last js-pager__items\">";
            }
            // line 99
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 100
                echo "<li class=\"pager__item pager__item--next pager__item--text\">
            <a href=\"";
                // line 101
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "attributes", [])), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 102
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page"));
                echo "</span>
              <span class=\"pager__next\" aria-hidden=\"true\">";
                // line 103
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [])), t("next ›"))) : (t("next ›"))), "html", null, true);
                echo "</span>
            </a>
          </li>";
            }
            // line 108
            if ($this->getAttribute(($context["items"] ?? null), "last", [])) {
                // line 109
                echo "<li class=\"pager__item pager__item--last pager__item--text\">
            <a href=\"";
                // line 110
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "href", [])), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "attributes", [])), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 111
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last page"));
                echo "</span>
              <span class=\"pager__last\" aria-hidden=\"true\">";
                // line 112
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", [], "any", false, true), "text", [])), t("last »"))) : (t("last »"))), "html", null, true);
                echo "</span>
            </a>
          </li>";
            }
            // line 116
            if (($this->getAttribute(($context["items"] ?? null), "next", []) || $this->getAttribute(($context["items"] ?? null), "last", []))) {
                // line 117
                echo "</ul>";
            }
            // line 119
            echo "</ul>
  </nav>";
        }
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 119,  259 => 117,  257 => 116,  251 => 112,  247 => 111,  239 => 110,  236 => 109,  234 => 108,  228 => 103,  224 => 102,  216 => 101,  213 => 100,  211 => 99,  208 => 96,  206 => 95,  203 => 93,  187 => 90,  184 => 88,  182 => 87,  177 => 85,  174 => 83,  172 => 82,  168 => 80,  157 => 79,  154 => 77,  151 => 75,  149 => 74,  145 => 73,  143 => 70,  142 => 69,  141 => 68,  140 => 65,  123 => 63,  121 => 62,  118 => 59,  116 => 58,  110 => 54,  106 => 53,  98 => 52,  95 => 51,  93 => 50,  87 => 45,  83 => 44,  75 => 43,  72 => 42,  70 => 41,  67 => 38,  65 => 37,  60 => 34,  57 => 33,  55 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/adaptivetheme/at_core/templates/navigation/pager.html.twig", "C:\\xampp\\htdocs\\projecten3\\themes\\adaptivetheme\\at_core\\templates\\navigation\\pager.html.twig");
    }
}
