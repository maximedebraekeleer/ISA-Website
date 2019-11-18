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

/* themes/adaptivetheme/at_core/templates/layout/html.html.twig */
class __TwigTemplate_ce42fd4e2a72ddac611e1f6ee7ed0e77bd1f1a28b824fa1e931a4d1558c66594 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 33, "set" => 44];
        $filters = ["escape" => 26, "raw" => 31, "safe_join" => 39, "clean_class" => 47, "without" => 56, "t" => 58];
        $functions = ["attach_library" => 26];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'raw', 'safe_join', 'clean_class', 'without', 't'],
                ['attach_library']
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
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("at_core/at.breakpoints"), "html", null, true);
        // line 27
        echo "<!DOCTYPE html>
<html";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["html_attributes"] ?? null), "addClass", [0 => "no-js", 1 => "adaptivetheme"], "method")), "html", null, true);
        echo ">
  <head>
    ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["touch_icons"] ?? null)), "html", null, true);
        echo "
    <head-placeholder token=\"";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <link rel=\"dns-prefetch\" href=\"//cdnjs.cloudflare.com\">";
        // line 33
        if (($context["google_dns_prefetch"] ?? null)) {
            // line 34
            echo "<link rel=\"dns-prefetch\" href=\"//fonts.googleapis.com\">";
        }
        // line 36
        if (($context["typekit_dns_prefetch"] ?? null)) {
            // line 37
            echo "<link rel=\"dns-prefetch\" href=\"//use.typekit.net\">";
        }
        // line 39
        echo "<title>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <js-placeholder token=\"";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
  </head>";
        // line 44
        $context["body_classes"] = [0 => ((        // line 45
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("user-logged-out")), 1 => ((        // line 46
($context["is_front"] ?? null)) ? ("path-frontpage") : ("path-not-frontpage")), 2 => ((        // line 47
($context["root_path"] ?? null)) ? (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null))))) : ("")), 3 => (($this->getAttribute(        // line 48
($context["path_info"] ?? null), "args", [])) ? (("path-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["path_info"] ?? null), "args", [])))) : ("")), 4 => (($this->getAttribute(        // line 49
($context["path_info"] ?? null), "query", [])) ? (("path-query-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["path_info"] ?? null), "query", [])))) : ("")), 5 => ((        // line 50
($context["node_type"] ?? null)) ? (("page-node-type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null))))) : ("")), 6 => (($this->getAttribute(        // line 51
($context["head_title_array"] ?? null), "name", [])) ? (("site-name--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["head_title_array"] ?? null), "name", []))))) : ("")), 7 => (($this->getAttribute(        // line 52
($context["theme"] ?? null), "name", [])) ? (("theme-name--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["theme"] ?? null), "name", []))))) : ("")), 8 => ((        // line 53
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 56
        echo "<body role=\"document\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "role"), "html", null, true);
        echo ">
    ";
        // line 58
        echo "    <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["skip_link_target"] ?? null)), "html", null, true);
        echo "\" class=\"visually-hidden focusable skip-link\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content"));
        echo "</a>
    ";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
    ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
    ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 62,  127 => 61,  123 => 60,  119 => 59,  112 => 58,  107 => 56,  105 => 53,  104 => 52,  103 => 51,  102 => 50,  101 => 49,  100 => 48,  99 => 47,  98 => 46,  97 => 45,  96 => 44,  92 => 41,  88 => 40,  83 => 39,  80 => 37,  78 => 36,  75 => 34,  73 => 33,  69 => 31,  65 => 30,  60 => 28,  57 => 27,  55 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/adaptivetheme/at_core/templates/layout/html.html.twig", "C:\\xampp\\htdocs\\projecten3\\themes\\adaptivetheme\\at_core\\templates\\layout\\html.html.twig");
    }
}
