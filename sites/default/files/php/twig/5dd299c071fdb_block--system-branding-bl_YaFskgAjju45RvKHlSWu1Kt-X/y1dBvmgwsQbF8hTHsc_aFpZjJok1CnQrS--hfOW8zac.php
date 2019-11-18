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

/* themes/adaptivetheme/at_core/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_d4ebc9111c8787867e68a322c989cde7c8f8af3485f2e8c5fe31e89acdd1da0c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 16, "if" => 31, "block" => 36];
        $filters = ["clean_class" => 19, "escape" => 27, "clean_id" => 27, "t" => 39];
        $functions = ["path" => 39];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 'clean_id', 't'],
                ['path']
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
        // line 16
        $context["classes"] = [0 => "block", 1 => "block-branding", 2 => ("block-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 19
($context["configuration"] ?? null), "provider", [])))), 3 => ("block-plugin-id--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 20
($context["plugin_id_clean"] ?? null)))), 4 => ((        // line 21
($context["label"] ?? null)) ? ("has-title") : ("")), 5 => ((        // line 22
($context["site_logo"] ?? null)) ? ("has-logo") : ("")), 6 => ((        // line 23
($context["site_name"] ?? null)) ? ("has-name") : ("")), 7 => ((        // line 24
($context["site_slogan"] ?? null)) ? ("has-slogan") : (""))];
        // line 27
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getId($this->sandbox->ensureToStringAllowed(($context["plugin_id"] ?? null))), "html", null, true);
        echo "\">
  <div class=\"block__inner block-branding__inner\">

    ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        // line 31
        if (($context["label"] ?? null)) {
            // line 32
            echo "<h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block__title"], "method")), "html", null, true);
            echo "><span>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</span></h2>";
        }
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "</div>
</div>
";
    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        // line 37
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "block__content", 1 => "block-branding__content", 2 => "site-branding"], "method")), "html", null, true);
        echo ">";
        // line 38
        if (($context["site_logo"] ?? null)) {
            // line 39
            echo "<a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" itemprop=\"url\" rel=\"home\" class=\"site-branding__logo-link\"><img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" itemprop=\"logo\" class=\"site-branding__logo-img\" /></a>";
        }
        // line 41
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 42
            echo "<span class=\"site-branding__text\">";
            // line 43
            if (($context["site_name"] ?? null)) {
                // line 44
                echo "<strong class=\"site-branding__name\"><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" itemprop=\"url\" rel=\"home\" class=\"site-branding__name-link\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a></strong>";
            }
            // line 46
            if (($context["site_slogan"] ?? null)) {
                // line 47
                echo "<em class=\"site-branding__slogan\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "</em>";
            }
            // line 49
            echo "</span>";
        }
        // line 51
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 51,  136 => 49,  131 => 47,  129 => 46,  120 => 44,  118 => 43,  116 => 42,  114 => 41,  103 => 39,  101 => 38,  97 => 37,  94 => 36,  88 => 54,  86 => 36,  84 => 34,  77 => 32,  75 => 31,  73 => 30,  64 => 27,  62 => 24,  61 => 23,  60 => 22,  59 => 21,  58 => 20,  57 => 19,  56 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/adaptivetheme/at_core/templates/block/block--system-branding-block.html.twig", "C:\\xampp\\htdocs\\projecten3\\themes\\adaptivetheme\\at_core\\templates\\block\\block--system-branding-block.html.twig");
    }
}
