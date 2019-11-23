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

/* themes/newsplus_lite/templates/node--article.html.twig */
class __TwigTemplate_fd84d1598ffd693a89bfac7494923f0696102571f29ed2b9930e34dcb93d00fb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 65
        $this->parent = $this->loadTemplate("node.html.twig", "themes/newsplus_lite/templates/node--article.html.twig", 65);
        $this->blocks = [
            'node_side' => [$this, 'block_node_side'],
            'meta_area' => [$this, 'block_meta_area'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 69, "trans" => 78];
        $filters = ["escape" => 67];
        $functions = ["attach_library" => 67];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape'],
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

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 66
    public function block_node_side($context, array $blocks = [])
    {
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("newsplus_lite/node-features"), "html", null, true);
        echo "
  <div class=\"node-side\">
    ";
        // line 69
        if (($context["display_submitted"] ?? null)) {
            // line 70
            echo "      <div class=\"user-info\">
        ";
            // line 71
            if (($context["author_picture"] ?? null)) {
                // line 72
                echo "          <div class=\"user-picture\">
            <span";
                // line 73
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null)), "html", null, true);
                echo ">
              ";
                // line 74
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
                echo "
            </span>
          </div>
        ";
            }
            // line 78
            echo "        <div class=\"user-name\">";
            echo t("By @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
            echo "</div>
        ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 82
        echo "    <div id=\"affix\">
      <div class=\"submitted-info\">
        <div class=\"submitted-info-item\">
          ";
        // line 85
        echo t("Published", array());
        // line 86
        echo "          <span>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["posted_ago"] ?? null)), "html", null, true);
        echo " ";
        echo t("ago", array());
        echo "</span>
        </div>
        <div class=\"submitted-info-item\">
          ";
        // line 89
        echo t("Last updated", array());
        // line 90
        echo "          <span>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["changed_ago"] ?? null)), "html", null, true);
        echo " ";
        echo t("ago", array());
        echo "</span>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 96
    public function block_meta_area($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "themes/newsplus_lite/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 96,  123 => 90,  121 => 89,  112 => 86,  110 => 85,  105 => 82,  99 => 79,  94 => 78,  87 => 74,  83 => 73,  80 => 72,  78 => 71,  75 => 70,  73 => 69,  68 => 67,  65 => 66,  22 => 65,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/newsplus_lite/templates/node--article.html.twig", "C:\\xampp\\htdocs\\projecten3\\themes\\newsplus_lite\\templates\\node--article.html.twig");
    }
}
