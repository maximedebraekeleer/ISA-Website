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

/* themes/adaptivetheme/at_core/templates/dataset/table--forum-topic-list.html.twig */
class __TwigTemplate_284b9710849b075b366095636c1799ba50787b93147d74f3743bfd2bfcc6ccfd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 69, "if" => 71, "for" => 74];
        $filters = ["length" => 69, "escape" => 70];
        $functions = ["cycle" => 96];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['length', 'escape'],
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
        // line 43
        echo "<svg style=\"display:none;\">
  ";
        // line 45
        echo "  <symbol id=\"forum-icon-default\" viewBox=\"0 0 24 20\" preserveAspectRatio=\"xMinYMid\">
    <path d=\"M22.4 4.1c-1.1-1.3-2.5-2.3-4.4-3S14.2 0 12 0 7.8 0.4 6 1.1s-3.3 1.8-4.4 3C0.5 5.4 0 6.8 0 8.3c0 1.3 0.4 2.5 1.2 3.7s1.9 2.1 3.3 2.9c-0.1 0.3-0.2 0.7-0.3 1 -0.1 0.3-0.3 0.6-0.4 0.8 -0.1 0.2-0.3 0.4-0.4 0.7 -0.2 0.2-0.3 0.4-0.4 0.5s-0.2 0.3-0.5 0.5c-0.2 0.2-0.4 0.4-0.4 0.4 0 0 0 0-0.1 0.1C1.9 18.9 1.9 19 1.9 19l-0.1 0.1c0 0.1-0.1 0.1-0.1 0.1 0 0 0 0.1 0 0.1 0 0.1 0 0.1 0 0.2v0c0 0.1 0.1 0.3 0.2 0.4C2 20 2.2 20 2.3 20h0.1c0.6-0.1 1.1-0.2 1.5-0.3 2.3-0.6 4.4-1.6 6.2-3.2 0.7 0.1 1.3 0.1 1.9 0.1 2.2 0 4.2-0.4 6-1.1 1.8-0.7 3.3-1.8 4.4-3 1.1-1.3 1.6-2.7 1.6-4.2C24 6.8 23.5 5.4 22.4 4.1zM20.9 11.7c-0.9 1-2.2 1.8-3.8 2.4C15.5 14.7 13.8 15 12 15c-0.5 0-1.1 0-1.7-0.1l-0.8-0.1 -0.6 0.5c-1.1 0.9-2.3 1.7-3.7 2.2 0.4-0.7 0.7-1.4 0.9-2.2L6.5 14l-1.2-0.7c-1.2-0.6-2.1-1.4-2.7-2.3 -0.6-0.9-1-1.8-1-2.8C1.7 7.1 2.2 6 3.1 5 4 4 5.3 3.2 6.9 2.6s3.3-0.9 5.1-0.9c1.8 0 3.5 0.3 5.1 0.9S20 4 20.9 5c0.9 1 1.4 2.1 1.4 3.3S21.8 10.6 20.9 11.7z\"/>
  </symbol>
  ";
        // line 49
        echo "  <symbol id=\"forum-icon-new\" viewBox=\"0 0 24 20\" preserveAspectRatio=\"xMinYMid\">
    <path d=\"M22.4 4.1c-1.1-1.3-2.5-2.3-4.4-3S14.2 0 12 0 7.8 0.4 6 1.1s-3.3 1.8-4.4 3C0.5 5.4 0 6.8 0 8.3c0 1.3 0.4 2.5 1.2 3.7s1.9 2.1 3.3 2.9c-0.1 0.3-0.2 0.7-0.3 1 -0.1 0.3-0.3 0.6-0.4 0.8 -0.1 0.2-0.3 0.4-0.4 0.7 -0.2 0.2-0.3 0.4-0.4 0.5s-0.2 0.3-0.5 0.5c-0.2 0.2-0.4 0.4-0.4 0.4 0 0 0 0-0.1 0.1C1.9 18.9 1.9 19 1.9 19l-0.1 0.1c0 0.1-0.1 0.1-0.1 0.1 0 0 0 0.1 0 0.1 0 0.1 0 0.1 0 0.2v0c0 0.1 0.1 0.3 0.2 0.4C2 20 2.2 20 2.3 20h0.1c0.6-0.1 1.1-0.2 1.5-0.3 2.3-0.6 4.4-1.6 6.2-3.2 0.7 0.1 1.3 0.1 1.9 0.1 2.2 0 4.2-0.4 6-1.1 1.8-0.7 3.3-1.8 4.4-3 1.1-1.3 1.6-2.7 1.6-4.2C24 6.8 23.5 5.4 22.4 4.1zM20.9 11.7c-0.9 1-2.2 1.8-3.8 2.4C15.5 14.7 13.8 15 12 15c-0.5 0-1.1 0-1.7-0.1l-0.8-0.1 -0.6 0.5c-1.1 0.9-2.3 1.7-3.7 2.2 0.4-0.7 0.7-1.4 0.9-2.2L6.5 14l-1.2-0.7c-1.2-0.6-2.1-1.4-2.7-2.3 -0.6-0.9-1-1.8-1-2.8C1.7 7.1 2.2 6 3.1 5 4 4 5.3 3.2 6.9 2.6s3.3-0.9 5.1-0.9c1.8 0 3.5 0.3 5.1 0.9S20 4 20.9 5c0.9 1 1.4 2.1 1.4 3.3S21.8 10.6 20.9 11.7z\"/>
  </symbol>
  ";
        // line 53
        echo "  <symbol id=\"forum-icon-hot\" viewBox=\"0 0 24 19\" preserveAspectRatio=\"xMinYMid\">
    <g><path d=\"M14.2 12.9c1.5-0.6 2.6-1.5 3.4-2.5 0.8-1.1 1.3-2.2 1.3-3.5s-0.4-2.4-1.3-3.5c-0.8-1.1-2-1.9-3.4-2.5S11.1 0 9.4 0C7.7 0 6.1 0.3 4.7 0.9 3.2 1.5 2.1 2.4 1.3 3.4 0.4 4.5 0 5.7 0 6.9 0 8 0.3 9 1 9.9c0.6 0.9 1.5 1.7 2.6 2.4 -0.1 0.2-0.2 0.4-0.3 0.6 -0.1 0.2-0.2 0.4-0.3 0.5 -0.1 0.2-0.2 0.3-0.3 0.4 -0.1 0.1-0.2 0.2-0.3 0.4C2.1 14.4 2 14.5 2 14.6c0 0 0 0-0.1 0.1 0 0-0.1 0.1-0.1 0.1 0 0 0 0-0.1 0.1s0 0.1 0 0.1l0 0.1c0 0 0 0.1 0 0.1 0 0 0 0.1 0 0.1s0 0.1 0 0.1c0 0.1 0.1 0.2 0.2 0.3 0.1 0.1 0.2 0.1 0.3 0.1h0c0.4-0.1 0.8-0.1 1.2-0.2C4.7 15 6 14.4 7.1 13.6c0.8 0.1 1.6 0.2 2.4 0.2C11.1 13.8 12.7 13.5 14.2 12.9zM6.7 11.8l-0.6 0.4c-0.3 0.2-0.5 0.3-0.8 0.5l0.5-1.1 -1.3-0.8c-0.9-0.5-1.5-1.1-2-1.8C2 8.4 1.7 7.6 1.7 6.9c0-0.9 0.4-1.8 1.1-2.6s1.6-1.4 2.8-1.9C6.8 2 8.1 1.7 9.4 1.7s2.6 0.2 3.8 0.7c1.2 0.5 2.1 1.1 2.8 1.9 0.7 0.8 1.1 1.7 1.1 2.6 0 0.9-0.4 1.8-1.1 2.6 -0.7 0.8-1.6 1.4-2.8 1.9 -1.2 0.5-2.5 0.7-3.8 0.7 -0.7 0-1.4-0.1-2-0.2L6.7 11.8z\"/><path d=\"M23 13.4c0.6-0.9 1-1.9 1-3 0-1.1-0.3-2.1-1-3.1 -0.7-1-1.6-1.8-2.7-2.4 0.2 0.7 0.3 1.4 0.3 2.1 0 1.2-0.3 2.3-0.9 3.4 -0.6 1.1-1.5 2-2.6 2.9 -1 0.8-2.2 1.3-3.5 1.7 -1.3 0.4-2.7 0.6-4.1 0.6 -0.3 0-0.7 0-1.2-0.1 1.8 1.2 3.9 1.8 6.3 1.8 0.8 0 1.6-0.1 2.4-0.2 1.1 0.8 2.3 1.4 3.7 1.7 0.3 0.1 0.7 0.2 1.2 0.2 0.1 0 0.2 0 0.3-0.1 0.1-0.1 0.1-0.2 0.2-0.3 0-0.1 0-0.1 0-0.1 0 0 0 0 0-0.1 0-0.1 0-0.1 0-0.1l0-0.1c0 0 0 0 0-0.1 0 0 0-0.1-0.1-0.1 0 0 0 0-0.1-0.1 0 0 0-0.1-0.1-0.1 0-0.1-0.1-0.2-0.3-0.3 -0.2-0.2-0.3-0.3-0.3-0.4s-0.2-0.2-0.3-0.4c-0.1-0.2-0.2-0.3-0.3-0.5 -0.1-0.2-0.2-0.4-0.3-0.6C21.5 15.1 22.4 14.3 23 13.4z\"/></g>
  </symbol>
  ";
        // line 57
        echo "  <symbol id=\"forum-icon-hot-new\" viewBox=\"0 0 24 19\" preserveAspectRatio=\"xMinYMid\">
    <g><path d=\"M14.2 12.9c1.5-0.6 2.6-1.5 3.4-2.5 0.8-1.1 1.3-2.2 1.3-3.5s-0.4-2.4-1.3-3.5c-0.8-1.1-2-1.9-3.4-2.5S11.1 0 9.4 0C7.7 0 6.1 0.3 4.7 0.9 3.2 1.5 2.1 2.4 1.3 3.4 0.4 4.5 0 5.7 0 6.9 0 8 0.3 9 1 9.9c0.6 0.9 1.5 1.7 2.6 2.4 -0.1 0.2-0.2 0.4-0.3 0.6 -0.1 0.2-0.2 0.4-0.3 0.5 -0.1 0.2-0.2 0.3-0.3 0.4 -0.1 0.1-0.2 0.2-0.3 0.4C2.1 14.4 2 14.5 2 14.6c0 0 0 0-0.1 0.1 0 0-0.1 0.1-0.1 0.1 0 0 0 0-0.1 0.1s0 0.1 0 0.1l0 0.1c0 0 0 0.1 0 0.1 0 0 0 0.1 0 0.1s0 0.1 0 0.1c0 0.1 0.1 0.2 0.2 0.3 0.1 0.1 0.2 0.1 0.3 0.1h0c0.4-0.1 0.8-0.1 1.2-0.2C4.7 15 6 14.4 7.1 13.6c0.8 0.1 1.6 0.2 2.4 0.2C11.1 13.8 12.7 13.5 14.2 12.9zM6.7 11.8l-0.6 0.4c-0.3 0.2-0.5 0.3-0.8 0.5l0.5-1.1 -1.3-0.8c-0.9-0.5-1.5-1.1-2-1.8C2 8.4 1.7 7.6 1.7 6.9c0-0.9 0.4-1.8 1.1-2.6s1.6-1.4 2.8-1.9C6.8 2 8.1 1.7 9.4 1.7s2.6 0.2 3.8 0.7c1.2 0.5 2.1 1.1 2.8 1.9 0.7 0.8 1.1 1.7 1.1 2.6 0 0.9-0.4 1.8-1.1 2.6 -0.7 0.8-1.6 1.4-2.8 1.9 -1.2 0.5-2.5 0.7-3.8 0.7 -0.7 0-1.4-0.1-2-0.2L6.7 11.8z\"/><path d=\"M23 13.4c0.6-0.9 1-1.9 1-3 0-1.1-0.3-2.1-1-3.1 -0.7-1-1.6-1.8-2.7-2.4 0.2 0.7 0.3 1.4 0.3 2.1 0 1.2-0.3 2.3-0.9 3.4 -0.6 1.1-1.5 2-2.6 2.9 -1 0.8-2.2 1.3-3.5 1.7 -1.3 0.4-2.7 0.6-4.1 0.6 -0.3 0-0.7 0-1.2-0.1 1.8 1.2 3.9 1.8 6.3 1.8 0.8 0 1.6-0.1 2.4-0.2 1.1 0.8 2.3 1.4 3.7 1.7 0.3 0.1 0.7 0.2 1.2 0.2 0.1 0 0.2 0 0.3-0.1 0.1-0.1 0.1-0.2 0.2-0.3 0-0.1 0-0.1 0-0.1 0 0 0 0 0-0.1 0-0.1 0-0.1 0-0.1l0-0.1c0 0 0 0 0-0.1 0 0 0-0.1-0.1-0.1 0 0 0 0-0.1-0.1 0 0 0-0.1-0.1-0.1 0-0.1-0.1-0.2-0.3-0.3 -0.2-0.2-0.3-0.3-0.3-0.4s-0.2-0.2-0.3-0.4c-0.1-0.2-0.2-0.3-0.3-0.5 -0.1-0.2-0.2-0.4-0.3-0.6C21.5 15.1 22.4 14.3 23 13.4z\"/></g>
  </symbol>
  ";
        // line 61
        echo "  <symbol id=\"forum-icon-sticky\" viewBox=\"0 0 15 20\" preserveAspectRatio=\"xMinYMid\">
    <path d=\"M14 10.4c-0.7-0.8-1.4-1.2-2.3-1.2V3.1c0.5 0 0.8-0.2 1.2-0.5 0.3-0.3 0.5-0.7 0.5-1.1 0-0.4-0.2-0.8-0.5-1.1C12.5 0.2 12.1 0 11.7 0H3.3C2.9 0 2.5 0.2 2.2 0.5S1.7 1.1 1.7 1.5s0.2 0.8 0.5 1.1 0.7 0.5 1.2 0.5v6.2c-0.9 0-1.6 0.4-2.3 1.2 -0.7 0.8-1 1.7-1 2.7 0 0.2 0.1 0.4 0.2 0.5 0.2 0.2 0.4 0.2 0.6 0.2h5.2l1 5.8c0 0.2 0.2 0.3 0.4 0.3h0c0.1 0 0.2 0 0.3-0.1 0.1-0.1 0.1-0.2 0.1-0.2l0.7-5.8h5.6c0.2 0 0.4-0.1 0.6-0.2 0.2-0.2 0.2-0.3 0.2-0.5C15 12.1 14.6 11.2 14 10.4zM6.3 8.8c0 0.1 0 0.2-0.1 0.3C6.1 9.2 6 9.2 5.8 9.2s-0.2 0-0.3-0.1C5.5 9.1 5.4 9 5.4 8.8V3.5c0-0.1 0-0.2 0.1-0.3s0.2-0.1 0.3-0.1 0.2 0 0.3 0.1c0.1 0.1 0.1 0.2 0.1 0.3V8.8z\"/>
  </symbol>
  ";
        // line 65
        echo "  <symbol id=\"forum-icon-closed\" viewBox=\"0 0 16 20\" preserveAspectRatio=\"xMinYMid\">
    <path d=\"M15.6 9.5c-0.3-0.3-0.6-0.4-0.9-0.4h-0.4V6.4c0-1.7-0.6-3.2-1.8-4.5C11.2 0.6 9.7 0 8 0S4.8 0.6 3.6 1.9C2.4 3.1 1.8 4.6 1.8 6.4v2.7H1.3C1 9.1 0.6 9.2 0.4 9.5 0.1 9.8 0 10.1 0 10.5v8.2c0 0.4 0.1 0.7 0.4 1C0.6 19.9 1 20 1.3 20h13.3c0.4 0 0.7-0.1 0.9-0.4 0.3-0.3 0.4-0.6 0.4-1v-8.2C16 10.1 15.9 9.8 15.6 9.5zM11.6 9.1H4.4V6.4c0-1 0.3-1.9 1-2.6C6.2 3.1 7 2.7 8 2.7s1.8 0.4 2.5 1.1c0.7 0.7 1 1.6 1 2.6V9.1z\"/>
  </symbol>
</svg>
";
        // line 69
        $context["column_count"] = ("cols-" . twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null))));
        // line 70
        echo "<table";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "table", 1 => "table--forum", 2 => "forum", 3 => ($context["column_count"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 71
        if (($context["header"] ?? null)) {
            // line 72
            echo "    <thead class=\"table__header forum-header\">
      <tr class=\"table__row forum-header__row\">
        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 75
                echo "          ";
                // line 76
                $context["cell_classes"] = [0 => "table__cell", 1 => (($this->getAttribute(                // line 78
$context["cell"], "active_table_sort", [])) ? ("is-active") : ("")), 2 => (($this->getAttribute($this->getAttribute(                // line 79
$context["cell"], "content", []), "generatedLink", [])) ? ("is-sortable") : (""))];
                // line 82
                echo "          <";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "tag", [])), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["cell"], "attributes", []), "addClass", [0 => ($context["cell_classes"] ?? null)], "method")), "html", null, true);
                echo ">";
                // line 83
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "content", [])), "html", null, true);
                // line 84
                echo "</";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "tag", [])), "html", null, true);
                echo ">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "      </tr>
    </thead>
  ";
        }
        // line 89
        echo "
  ";
        // line 90
        if (($context["rows"] ?? null)) {
            // line 91
            echo "    <tbody class=\"table__body forum-list\">
      ";
            // line 92
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
                // line 93
                echo "        ";
                // line 94
                $context["row_classes"] = [0 => "table__row", 1 => (( !                // line 96
($context["no_striping"] ?? null)) ? (twig_cycle([0 => "odd", 1 => "even"], $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index0", [])))) : (""))];
                // line 99
                echo "        <tr";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null)], "method")), "html", null, true);
                echo ">
          ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "cells", []));
                foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                    // line 101
                    echo "            <";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "tag", [])), "html", null, true);
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["cell"], "attributes", []), "addClass", [0 => "table__cell"], "method")), "html", null, true);
                    echo ">";
                    // line 102
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "content", [])), "html", null, true);
                    // line 103
                    echo "</";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["cell"], "tag", [])), "html", null, true);
                    echo ">
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "        </tr>
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
            // line 107
            echo "    </tbody>
  ";
        } elseif (        // line 108
($context["empty"] ?? null)) {
            // line 109
            echo "    <tbody class=\"table__body forum-list forum-list--empty\">
      <tr class=\"table__row odd\">
        <td colspan=\"";
            // line 111
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_columns"] ?? null)), "html", null, true);
            echo "\" class=\"table__cell empty message\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
            echo "</td>
      </tr>
    </tbody>
  ";
        }
        // line 115
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/dataset/table--forum-topic-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 115,  212 => 111,  208 => 109,  206 => 108,  203 => 107,  188 => 105,  179 => 103,  177 => 102,  172 => 101,  168 => 100,  163 => 99,  161 => 96,  160 => 94,  158 => 93,  141 => 92,  138 => 91,  136 => 90,  133 => 89,  128 => 86,  119 => 84,  117 => 83,  112 => 82,  110 => 79,  109 => 78,  108 => 76,  106 => 75,  102 => 74,  98 => 72,  96 => 71,  91 => 70,  89 => 69,  83 => 65,  78 => 61,  73 => 57,  68 => 53,  63 => 49,  58 => 45,  55 => 43,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/adaptivetheme/at_core/templates/dataset/table--forum-topic-list.html.twig", "C:\\xampp\\htdocs\\projecten3\\themes\\adaptivetheme\\at_core\\templates\\dataset\\table--forum-topic-list.html.twig");
    }
}
