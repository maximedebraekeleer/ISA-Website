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

/* themes/adaptivetheme/at_core/templates/field/field--image.html.twig */
class __TwigTemplate_6f1f394729d2a6b97e57e4719d25b15d5d6cf0059a137ab8c0f8f752004071b5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 39, "if" => 57, "for" => 66];
        $filters = ["clean_class" => 39, "length" => 57, "escape" => 62];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'length', 'escape'],
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
        // line 39
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null)));
        // line 41
        $context["classes"] = [0 => "field", 1 => ((("field-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 43
($context["entity_type"] ?? null)))) . "--") . $this->sandbox->ensureToStringAllowed(($context["field_name_class"] ?? null))), 2 => ((        // line 44
($context["field_formatter"] ?? null)) ? (("field-formatter-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["field_formatter"] ?? null))))) : ("")), 3 => ("field-name-" . $this->sandbox->ensureToStringAllowed(        // line 45
($context["field_name_class"] ?? null))), 4 => ("field-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 46
($context["field_type"] ?? null)))), 5 => ("field-label-" . $this->sandbox->ensureToStringAllowed(        // line 47
($context["label_display"] ?? null))), 6 => (((        // line 48
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
        // line 52
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 54
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 57
        if ((twig_length_filter($this->env, ($context["items"] ?? null)) > 1)) {
            // line 58
            $context["count_class"] = "has-multiple";
        } else {
            // line 60
            $context["count_class"] = "has-single";
        }
        // line 62
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => ($context["count_class"] ?? null)], "method")), "html", null, true);
        echo ">";
        // line 63
        if ( !($context["label_hidden"] ?? null)) {
            // line 64
            echo "<h3";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h3>";
        }
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["delta"] => $context["item"]) {
            // line 67
            if (($this->getAttribute($this->getAttribute($context["item"], "caption", []), "show", []) == true)) {
                // line 68
                echo "<figure";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => "field-type-image__figure", 1 => ("image-count-" . ($context["delta"] + 1)), 2 => "caption", 3 => "caption-img"], "method")), "html", null, true);
                echo " role=\"group\">";
            } else {
                // line 70
                echo "<figure";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => "field-type-image__figure", 1 => ("image-count-" . ($context["delta"] + 1))], "method")), "html", null, true);
                echo ">";
            }
            // line 72
            echo "<div class=\"field-type-image__item\">
        ";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
            // line 74
            if (($this->getAttribute($this->getAttribute($context["item"], "caption", []), "show", []) == true)) {
                // line 75
                if ($this->getAttribute($this->getAttribute($context["item"], "caption", []), "width", [])) {
                    // line 76
                    echo "            ";
                    $context["caption_width"] = ((" style=max-width:" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "caption", []), "width", []))) . "px");
                }
                // line 78
                echo "<figcaption class=\"field-type-image__figcaption\" property=\"schema:description\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption_width"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "caption", []), "title", [])), "html", null, true);
                echo "</figcaption>";
            }
            // line 80
            echo "</div>
    </figure>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['delta'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/field/field--image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 83,  125 => 80,  118 => 78,  114 => 76,  112 => 75,  110 => 74,  108 => 73,  105 => 72,  100 => 70,  95 => 68,  93 => 67,  89 => 66,  82 => 64,  80 => 63,  76 => 62,  73 => 60,  70 => 58,  68 => 57,  66 => 54,  65 => 52,  63 => 48,  62 => 47,  61 => 46,  60 => 45,  59 => 44,  58 => 43,  57 => 41,  55 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/adaptivetheme/at_core/templates/field/field--image.html.twig", "C:\\xampp\\htdocs\\projecten3\\themes\\adaptivetheme\\at_core\\templates\\field\\field--image.html.twig");
    }
}
