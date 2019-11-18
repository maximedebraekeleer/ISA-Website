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

/* themes/adaptivetheme/at_core/templates/block/block--responsive-menu.html.twig */
class __TwigTemplate_fce56347861af338c0b69ad106a56ced03b7ebac8fe29465621e52cd6993bff7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 29, "block" => 62, "if" => 65, "trans" => 70];
        $filters = ["clean_class" => 31, "clean_id" => 36, "t" => 37, "escape" => 50, "without" => 50];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'trans'],
                ['clean_class', 'clean_id', 't', 'escape', 'without'],
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
        // line 29
        $context["classes"] = [0 => "rm-block", 1 => ("rm-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 31
($context["configuration"] ?? null), "provider", [])))), 2 => ("rm-plugin-id--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
($context["plugin_id_clean"] ?? null)))), 3 => "js-hide"];
        // line 36
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "id", [])) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 37
        $context["config_label"] = (($this->getAttribute(($context["configuration"] ?? null), "label", [])) ? ($this->getAttribute(($context["configuration"] ?? null), "label", [])) : (t("Main menu")));
        // line 38
        $context["rm_label_class"] = (($this->getAttribute(($context["configuration"] ?? null), "label", [])) ? ("rm-toggle__label") : ("visually-hidden"));
        // line 40
        echo "<svg style=\"display:none;\">
  ";
        // line 42
        echo "  <symbol id=\"rm-toggle__icon--open\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\">
    <path class=\"rm-toggle__icon__path\" d=\"M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z\"/>
  </symbol>
  ";
        // line 46
        echo "  <symbol id=\"rm-toggle__icon--close\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\">
    <path class=\"rm-toggle__icon__path\" d=\"M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z\"/>
  </symbol>
</svg>
<nav role=\"navigation\" aria-labelledby=\"";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
        echo "\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "role", "aria-labelledby"), "html", null, true);
        echo " id=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getId($this->sandbox->ensureToStringAllowed(($context["plugin_id"] ?? null))), "html", null, true);
        echo "\">
  <div class=\"rm-block__inner\">
    <div";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "rm-toggle"], "method")), "id"), "html", null, true);
        echo ">
      <button href=\"#rm-content\" class=\"rm-toggle__link un-button\" role='button' aria-controls=\"rm-content\" aria-expanded=\"false\">
        ";
        // line 55
        echo "        <svg class=\"rm-toggle__icon\">
          <use id=\"rm-toggle__icon--use\" xlink:href=\"#rm-toggle__icon--open\"></use>
        </svg>
        ";
        // line 59
        echo "        <span class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rm_label_class"] ?? null)), "html", null, true);
        echo "\" id=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["config_label"] ?? null)), "html", null, true);
        echo "</span>
      </button>
    </div>";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "</div>
</nav>
";
    }

    // line 62
    public function block_content($context, array $blocks = [])
    {
        // line 63
        echo "<div class=\"rm-block__content\" id=\"rm-content\">
        ";
        // line 65
        if (($context["click_menus_enabled"] ?? null)) {
            // line 66
            echo "<span id=\"rm-accordion-trigger\" class=\"hidden\">
            <button class=\"rm-accordion-trigger un-button\" role='button' aria-controls=\"child-menu\" aria-expanded=\"false\">
              <svg class=\"rm-accordion-trigger__icon\" viewBox=\"0 0 1792 1792\" preserveAspectRatio=\"xMinYMid meet\"><path d=\"M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z\"/></svg>
              ";
            // line 70
            echo "              <span class=\"visually-hidden\">";
            echo t("Toggle sub-menu", array());
            echo "</span>
            </button>
          </span>";
        }
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        // line 75
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/block/block--responsive-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 75,  137 => 74,  130 => 70,  125 => 66,  123 => 65,  120 => 63,  117 => 62,  111 => 77,  109 => 62,  99 => 59,  94 => 55,  89 => 52,  80 => 50,  74 => 46,  69 => 42,  66 => 40,  64 => 38,  62 => 37,  60 => 36,  58 => 32,  57 => 31,  56 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/adaptivetheme/at_core/templates/block/block--responsive-menu.html.twig", "C:\\xampp\\htdocs\\projecten3\\themes\\adaptivetheme\\at_core\\templates\\block\\block--responsive-menu.html.twig");
    }
}
