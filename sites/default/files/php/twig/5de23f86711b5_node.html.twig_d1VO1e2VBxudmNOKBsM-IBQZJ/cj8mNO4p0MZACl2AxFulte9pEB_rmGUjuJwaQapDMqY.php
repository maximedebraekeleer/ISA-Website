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

/* themes/newsplus_lite/templates/node.html.twig */
class __TwigTemplate_a9349970b874ef6b4ffbc47933244be241f11c4e1e9733a4acd84aa4d6860579 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'node_side' => [$this, 'block_node_side'],
            'above_header' => [$this, 'block_above_header'],
            'title_area' => [$this, 'block_title_area'],
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 65, "block" => 77, "if" => 85, "trans" => 99];
        $filters = ["clean_class" => 67, "escape" => 75, "without" => 109];
        $functions = ["attach_library" => 75];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'trans'],
                ['clean_class', 'escape', 'without'],
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
        // line 65
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 67
($context["node"] ?? null), "bundle", [])))), 2 => (($this->getAttribute(        // line 68
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 69
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 70
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 6 => "clearfix"];
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true);
        echo "
<article";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 77
        $this->displayBlock('node_side', $context, $blocks);
        // line 79
        echo "  <div class=\"node-content\">
    ";
        // line 80
        $this->displayBlock('above_header', $context, $blocks);
        // line 82
        echo "    <header>
      ";
        // line 83
        $this->displayBlock('title_area', $context, $blocks);
        // line 92
        echo "      ";
        $this->displayBlock('meta_area', $context, $blocks);
        // line 106
        echo "    </header>
    <div";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method")), "html", null, true);
        echo ">
      ";
        // line 108
        $this->displayBlock('content', $context, $blocks);
        // line 111
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "links", [])), "html", null, true);
        echo "
    </div>
  </div>
</article>
";
    }

    // line 77
    public function block_node_side($context, array $blocks = [])
    {
        // line 78
        echo "  ";
    }

    // line 80
    public function block_above_header($context, array $blocks = [])
    {
        // line 81
        echo "    ";
    }

    // line 83
    public function block_title_area($context, array $blocks = [])
    {
        // line 84
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
        ";
        // line 85
        if ( !($context["page"] ?? null)) {
            // line 86
            echo "          <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "node__title title"], "method")), "html", null, true);
            echo ">
            <a href=\"";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
          </h2>
        ";
        }
        // line 90
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
      ";
    }

    // line 92
    public function block_meta_area($context, array $blocks = [])
    {
        // line 93
        echo "        ";
        if (($context["display_submitted"] ?? null)) {
            // line 94
            echo "          <div class=\"node__meta\">
            <span";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["author_attributes"] ?? null), "addClass", [0 => "user-picture"], "method")), "html", null, true);
            echo ">
              ";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
            echo "
            </span>
            <span class=\"post-info\">
              <span>";
            // line 99
            echo t("@posted_ago ago", array("@posted_ago" => ($context["posted_ago"] ?? null), ));
            echo "</span>
              <span>";
            // line 100
            echo t("By @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
            echo "</span>
            </span>
            ";
            // line 102
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 105
        echo "      ";
    }

    // line 108
    public function block_content($context, array $blocks = [])
    {
        // line 109
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "links"), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/newsplus_lite/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 109,  191 => 108,  187 => 105,  181 => 102,  176 => 100,  172 => 99,  166 => 96,  162 => 95,  159 => 94,  156 => 93,  153 => 92,  146 => 90,  138 => 87,  133 => 86,  131 => 85,  126 => 84,  123 => 83,  119 => 81,  116 => 80,  112 => 78,  109 => 77,  99 => 111,  97 => 108,  93 => 107,  90 => 106,  87 => 92,  85 => 83,  82 => 82,  80 => 80,  77 => 79,  75 => 77,  71 => 76,  67 => 75,  65 => 71,  64 => 70,  63 => 69,  62 => 68,  61 => 67,  60 => 65,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/newsplus_lite/templates/node.html.twig", "C:\\xampp\\htdocs\\projecten3\\themes\\newsplus_lite\\templates\\node.html.twig");
    }
}
