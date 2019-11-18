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

/* themes/adaptivetheme/at_core/templates/views/views-view-table.html.twig */
class __TwigTemplate_6a035982a669694c757f04e8416fb93ead8598e15917fbf6f5725f616edc76da extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 34, "if" => 44, "for" => 66];
        $filters = ["length" => 38, "escape" => 43, "merge" => 114];
        $functions = ["cycle" => 102];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape', 'merge'],
                ['cycle']
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
        // line 34
        $context["classes"] = [0 => "table", 1 => "views-table", 2 => "views-view-table", 3 => ("cols-" . twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(        // line 38
($context["header"] ?? null)))), 4 => ((        // line 39
($context["responsive"] ?? null)) ? ("responsive-enabled") : ("")), 5 => ((        // line 40
($context["sticky"] ?? null)) ? ("sticky-enabled") : (""))];
        // line 43
        echo "<table";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 44
        if (($context["caption_needed"] ?? null)) {
            // line 45
            echo "    <caption class=\"table__caption caption\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null)), "html", null, true);
            echo "</caption>
    ";
            // line 46
            if (($context["caption"] ?? null)) {
                // line 47
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null)), "html", null, true);
                echo "
    ";
            } else {
                // line 49
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "
    ";
            }
            // line 51
            echo "    ";
            if (( !twig_test_empty(($context["summary"] ?? null)) ||  !twig_test_empty(($context["description"] ?? null)))) {
                // line 52
                echo "      <details class=\"table__details\">
        ";
                // line 53
                if ( !twig_test_empty(($context["summary"] ?? null))) {
                    // line 54
                    echo "          <summary class=\"table__summary\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary"] ?? null)), "html", null, true);
                    echo "</summary>
        ";
                }
                // line 56
                echo "        ";
                if ( !twig_test_empty(($context["description"] ?? null))) {
                    // line 57
                    echo "          ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null)), "html", null, true);
                    echo "
        ";
                }
                // line 59
                echo "      </details>
    ";
            }
            // line 61
            echo "    </caption>
  ";
        }
        // line 63
        echo "  ";
        if (($context["header"] ?? null)) {
            // line 64
            echo "    <thead class=\"table__header\">
      <tr class=\"table__row\">
        ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 67
                echo "          ";
                if ($this->getAttribute($context["column"], "default_classes", [])) {
                    // line 68
                    echo "            ";
                    // line 69
                    $context["column_classes"] = [0 => "table__cell", 1 => "views-field", 2 => ("views-field-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(                    // line 72
($context["fields"] ?? null), $context["key"], [], "array")))];
                    // line 75
                    echo "          ";
                }
                // line 76
                echo "          <th";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["column"], "attributes", []), "addClass", [0 => ($context["column_classes"] ?? null)], "method"), "setAttribute", [0 => "scope", 1 => "col"], "method")), "html", null, true);
                echo ">";
                // line 77
                if ($this->getAttribute($context["column"], "wrapper_element", [])) {
                    // line 78
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "wrapper_element", [])), "html", null, true);
                    echo ">";
                    // line 79
                    if ($this->getAttribute($context["column"], "url", [])) {
                        // line 80
                        echo "<a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "url", [])), "html", null, true);
                        echo "\" title=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "title", [])), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "sort_indicator", [])), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 82
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "sort_indicator", [])), "html", null, true);
                    }
                    // line 84
                    echo "</";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "wrapper_element", [])), "html", null, true);
                    echo ">";
                } else {
                    // line 86
                    if ($this->getAttribute($context["column"], "url", [])) {
                        // line 87
                        echo "<a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "url", [])), "html", null, true);
                        echo "\" title=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "title", [])), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "sort_indicator", [])), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 89
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "content", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "sort_indicator", [])), "html", null, true);
                    }
                }
                // line 92
                echo "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "      </tr>
    </thead>
  ";
        }
        // line 97
        echo "  <tbody class=\"table__body\">
    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 99
            echo "      ";
            // line 100
            $context["row_classes"] = [0 => "table__row", 1 => (( !            // line 102
($context["no_striping"] ?? null)) ? (twig_cycle([0 => "odd", 1 => "even"], $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index0", [])))) : (""))];
            // line 105
            echo "      <tr";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null)], "method")), "html", null, true);
            echo ">
        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "columns", []));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 107
                echo "          ";
                if ($this->getAttribute($context["column"], "default_classes", [])) {
                    // line 108
                    echo "            ";
                    // line 109
                    $context["column_classes"] = [0 => "views-field"];
                    // line 113
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "fields", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 114
                        echo "              ";
                        $context["column_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["column_classes"] ?? null)), [0 => ("views-field-" . $this->sandbox->ensureToStringAllowed($context["field"]))]);
                        // line 115
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 116
                    echo "          ";
                }
                // line 117
                echo "          <td";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["column"], "attributes", []), "addClass", [0 => ($context["column_classes"] ?? null), 1 => "table__cell"], "method")), "html", null, true);
                echo ">";
                // line 118
                if ($this->getAttribute($context["column"], "wrapper_element", [])) {
                    // line 119
                    echo "<";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "wrapper_element", [])), "html", null, true);
                    echo ">
              ";
                    // line 120
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 121
                        echo "                ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "separator", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "field_output", [])), "html", null, true);
                        echo "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    echo "              </";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["column"], "wrapper_element", [])), "html", null, true);
                    echo ">";
                } else {
                    // line 125
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 126
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "separator", [])), "html", null, true);
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "field_output", [])), "html", null, true);
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 129
                echo "          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "      </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/views/views-view-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 133,  306 => 131,  299 => 129,  291 => 126,  287 => 125,  282 => 123,  272 => 121,  268 => 120,  263 => 119,  261 => 118,  257 => 117,  254 => 116,  248 => 115,  245 => 114,  240 => 113,  238 => 109,  236 => 108,  233 => 107,  229 => 106,  224 => 105,  222 => 102,  221 => 100,  219 => 99,  202 => 98,  199 => 97,  194 => 94,  187 => 92,  182 => 89,  172 => 87,  170 => 86,  165 => 84,  161 => 82,  151 => 80,  149 => 79,  145 => 78,  143 => 77,  139 => 76,  136 => 75,  134 => 72,  133 => 69,  131 => 68,  128 => 67,  124 => 66,  120 => 64,  117 => 63,  113 => 61,  109 => 59,  103 => 57,  100 => 56,  94 => 54,  92 => 53,  89 => 52,  86 => 51,  80 => 49,  74 => 47,  72 => 46,  67 => 45,  65 => 44,  60 => 43,  58 => 40,  57 => 39,  56 => 38,  55 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/adaptivetheme/at_core/templates/views/views-view-table.html.twig", "C:\\xampp\\htdocs\\projecten3\\themes\\adaptivetheme\\at_core\\templates\\views\\views-view-table.html.twig");
    }
}
