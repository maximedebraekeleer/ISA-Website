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

/* themes/newsplus_lite/templates/page.html.twig */
class __TwigTemplate_1b7a349d51b3b6966cddc0c9b69839d6676129f87346885bbb756370f56c9698 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 62];
        $filters = ["escape" => 64, "t" => 144];
        $functions = ["path" => 144];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
        // line 59
        echo "
<div id=\"toTop\"><i class=\"fa fa-play-circle fa-rotate-270\"></i></div>
<header class=\"headers-wrapper\">
  ";
        // line 62
        if (($this->getAttribute(($context["page"] ?? null), "pre_header_left", []) || $this->getAttribute(($context["page"] ?? null), "pre_header_right", []))) {
            // line 63
            echo "    ";
            // line 64
            echo "    <div id=\"pre-header\" class=\"clearfix colored-area ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colored_area_class"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"container\">
        ";
            // line 67
            echo "        <div id=\"pre-header-inside\" class=\"clearfix\">
          <div class=\"row\">
            ";
            // line 69
            if ($this->getAttribute(($context["page"] ?? null), "pre_header_left", [])) {
                // line 70
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_header_left_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 72
                echo "                <div id=\"pre-header-left\" class=\"clearfix\">
                  <div class=\"pre-header-area\">
                    ";
                // line 74
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_header_left", [])), "html", null, true);
                echo "
                  </div>
                </div>
                ";
                // line 78
                echo "              </div>
            ";
            }
            // line 80
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "pre_header_right", [])) {
                // line 81
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pre_header_right_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 83
                echo "                <div id=\"pre-header-right\" class=\"clearfix\">
                  <div class=\"pre-header-area\">
                    ";
                // line 85
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "pre_header_right", [])), "html", null, true);
                echo "
                  </div>
                </div>
                ";
                // line 89
                echo "              </div>
            ";
            }
            // line 91
            echo "          </div>
        </div>
        ";
            // line 94
            echo "      </div>
    </div>
    ";
            // line 97
            echo "  ";
        }
        // line 98
        echo "  ";
        // line 99
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "header_top_left", []) || $this->getAttribute(($context["page"] ?? null), "header_top_right", []))) {
            // line 100
            echo "    <div id=\"header-top\" role=\"banner\" class=\"clearfix colored-area ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colored_area_class"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"container\">
        ";
            // line 103
            echo "        <div id=\"header-top-inside\" class=\"clearfix\">
          <div class=\"row\">
            ";
            // line 105
            if ($this->getAttribute(($context["page"] ?? null), "header_top_left", [])) {
                // line 106
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_inside_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 108
                echo "                <div id=\"header-top-left\" class=\"clearfix\">
                  <div class=\"header-top-area\">

                    ";
                // line 111
                if ($this->getAttribute(($context["page"] ?? null), "header_top_left", [])) {
                    // line 112
                    echo "                      ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_left", [])), "html", null, true);
                    echo "
                    ";
                }
                // line 114
                echo "
                  </div>
                </div>
                ";
                // line 118
                echo "              </div>
            ";
            }
            // line 120
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "header_top_right", [])) {
                // line 121
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_inside_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 123
                echo "                <div id=\"header-top-right\" class=\"clearfix\">
                  <div class=\"header-top-area\">
                    ";
                // line 125
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_right", [])), "html", null, true);
                echo "
                  </div>
                </div>
                ";
                // line 129
                echo "              </div>
            ";
            }
            // line 131
            echo "          </div>
        </div>
        ";
            // line 134
            echo "      </div>
    </div>
  ";
        }
        // line 137
        echo "  ";
        // line 138
        echo "
  ";
        // line 140
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "header", []))) {
            // line 141
            echo "    <div id=\"header\" class=\"colored-area ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colored_area_class"] ?? null)), "html", null, true);
            echo "\">
      ";
            // line 142
            if (($context["mt_site_name"] ?? null)) {
                // line 143
                echo "        <div class=\"site-name site-name__header\">
          <a href=\"";
                // line 144
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mt_site_name"] ?? null)), "html", null, true);
                echo "</a>
        </div>
      ";
            }
            // line 147
            echo "      <div class=\"container\">
        ";
            // line 149
            echo "        <div id=\"header-inside\" class=\"clearfix\">
          <div class=\"row\">
            <div class=\"header-area\">
              <div class=\"";
            // line 152
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_inside_left_grid_class"] ?? null)), "html", null, true);
            echo "\">
                ";
            // line 154
            echo "                <div id=\"header-inside-left\" class=\"clearfix\">
                  ";
            // line 156
            echo "                  <div id=\"main-navigation\" class=\"clearfix\">
                    <nav role=\"navigation\">
                      ";
            // line 158
            if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
                // line 159
                echo "                        ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
                echo "
                      ";
            }
            // line 161
            echo "                    </nav>
                  </div>
                  ";
            // line 164
            echo "                </div>
                ";
            // line 166
            echo "              </div>
              ";
            // line 167
            if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
                // line 168
                echo "                <div class=\"col-md-4\">
                  ";
                // line 170
                echo "                  <div id=\"header-inside-right\" class=\"clearfix\">
                    ";
                // line 171
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                echo "
                  </div>
                  ";
                // line 174
                echo "                </div>
              ";
            }
            // line 176
            echo "            </div>
          </div>
        </div>
        ";
            // line 180
            echo "      </div>
    </div>
  ";
        }
        // line 183
        echo "  ";
        // line 184
        echo "</header>

";
        // line 186
        if ($this->getAttribute(($context["page"] ?? null), "page_intro", [])) {
            // line 187
            echo "  ";
            // line 188
            echo "  <div id=\"page-intro\" class=\"clearfix\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 193
            echo "          <div id=\"page-intro-inside\" class=\"clearfix\">
            ";
            // line 194
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_intro", [])), "html", null, true);
            echo "
          </div>
          ";
            // line 197
            echo "        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 203
        echo "
";
        // line 205
        echo "<div id=\"page\" class=\"clearfix\">
  <div class=\"container\">
    ";
        // line 208
        echo "    <div id=\"page-inside\">

      ";
        // line 210
        if ($this->getAttribute(($context["page"] ?? null), "top_content", [])) {
            // line 211
            echo "        ";
            // line 212
            echo "        <div id=\"top-content\">
          ";
            // line 214
            echo "          <div id=\"top-content-inside\" class=\"clearfix\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 217
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_content", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
          ";
            // line 222
            echo "        </div>
        ";
            // line 224
            echo "      ";
        }
        // line 225
        echo "
      ";
        // line 227
        echo "      <div id=\"main-content\">
        <div class=\"row\">
          ";
        // line 229
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 230
            echo "            <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 232
            echo "              <section id=\"sidebar-first\" class=\"sidebar clearfix\">
                ";
            // line 233
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
              </section>
              ";
            // line 236
            echo "            </aside>
          ";
        }
        // line 238
        echo "
          <section class=\"";
        // line 239
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null)), "html", null, true);
        echo "\">

            ";
        // line 241
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 242
            echo "              ";
            // line 243
            echo "              <div id=\"banner\">
                ";
            // line 245
            echo "                <div id=\"banner-inside\" class=\"clearfix\">
                  ";
            // line 246
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
            echo "
                </div>
                ";
            // line 249
            echo "              </div>
              ";
            // line 251
            echo "            ";
        }
        // line 252
        echo "
            ";
        // line 253
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 254
            echo "              <div id=\"highlighted\">
                <div id=\"highlighted-inside\" class=\"clearfix\">
                  ";
            // line 256
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
                </div>
              </div>
            ";
        }
        // line 260
        echo "
            ";
        // line 261
        if ($this->getAttribute(($context["page"] ?? null), "promoted", [])) {
            // line 262
            echo "              ";
            // line 263
            echo "              <div id=\"promoted\" class=\"clearfix\">
                ";
            // line 265
            echo "                <div id=\"promoted-inside\" class=\"clearfix\">
                  ";
            // line 266
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "promoted", [])), "html", null, true);
            echo "
                </div>
                ";
            // line 269
            echo "              </div>
              ";
            // line 271
            echo "            ";
        }
        // line 272
        echo "
            ";
        // line 274
        echo "            <div id=\"main\" class=\"clearfix\">

              ";
        // line 276
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 277
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
              ";
        }
        // line 279
        echo "
            </div>
            ";
        // line 282
        echo "          </section>

          ";
        // line 284
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 285
            echo "          <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null)), "html", null, true);
            echo "\">
            ";
            // line 287
            echo "            <section id=\"sidebar-second\" class=\"sidebar clearfix\">
              ";
            // line 288
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </section>
            ";
            // line 291
            echo "          </aside>
          ";
        }
        // line 293
        echo "
        </div>

      </div>
      ";
        // line 298
        echo "
    </div>
    ";
        // line 301
        echo "
  </div>

</div>
";
        // line 306
        echo "

";
        // line 308
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 309
            echo "  ";
            // line 310
            echo "  <footer id=\"footer\" class=\"clearfix\">
    <div class=\"container\">

      <div class=\"row\">
        ";
            // line 314
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 315
                echo "          <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null)), "html", null, true);
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 317
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 321
            echo "
        ";
            // line 322
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 323
                echo "          <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null)), "html", null, true);
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 325
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 329
            echo "
        ";
            // line 330
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 331
                echo "          <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null)), "html", null, true);
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 333
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 337
            echo "
        ";
            // line 338
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 339
                echo "          <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_grid_class"] ?? null)), "html", null, true);
                echo "\">
            <div class=\"footer-area\">
              ";
                // line 341
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
            </div>
          </div>
        ";
            }
            // line 345
            echo "      </div>

    </div>
  </footer>
  ";
        }
        // line 351
        echo "
";
        // line 352
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_left", []) || $this->getAttribute(($context["page"] ?? null), "footer", []))) {
            // line 353
            echo "  ";
            // line 354
            echo "  <div id=\"subfooter\" class=\"clearfix\">
    <div class=\"container\">
      ";
            // line 357
            echo "      <div id=\"subfooter-inside\" class=\"clearfix\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            ";
            // line 361
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_left", [])) {
                // line 362
                echo "              <div class=\"subfooter-area left\">
                ";
                // line 363
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_left", [])), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 366
            echo "            ";
            // line 367
            echo "          </div>
          <div class=\"col-md-8\">
            ";
            // line 370
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
                // line 371
                echo "              <div class=\"subfooter-area right\">
                ";
                // line 372
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 375
            echo "            ";
            // line 376
            echo "          </div>
        </div>
      </div>
      ";
            // line 380
            echo "    </div>
  </div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/newsplus_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  658 => 380,  653 => 376,  651 => 375,  645 => 372,  642 => 371,  639 => 370,  635 => 367,  633 => 366,  627 => 363,  624 => 362,  621 => 361,  616 => 357,  612 => 354,  610 => 353,  608 => 352,  605 => 351,  598 => 345,  591 => 341,  585 => 339,  583 => 338,  580 => 337,  573 => 333,  567 => 331,  565 => 330,  562 => 329,  555 => 325,  549 => 323,  547 => 322,  544 => 321,  537 => 317,  531 => 315,  529 => 314,  523 => 310,  521 => 309,  519 => 308,  515 => 306,  509 => 301,  505 => 298,  499 => 293,  495 => 291,  490 => 288,  487 => 287,  482 => 285,  480 => 284,  476 => 282,  472 => 279,  466 => 277,  464 => 276,  460 => 274,  457 => 272,  454 => 271,  451 => 269,  446 => 266,  443 => 265,  440 => 263,  438 => 262,  436 => 261,  433 => 260,  426 => 256,  422 => 254,  420 => 253,  417 => 252,  414 => 251,  411 => 249,  406 => 246,  403 => 245,  400 => 243,  398 => 242,  396 => 241,  391 => 239,  388 => 238,  384 => 236,  379 => 233,  376 => 232,  371 => 230,  369 => 229,  365 => 227,  362 => 225,  359 => 224,  356 => 222,  349 => 217,  344 => 214,  341 => 212,  339 => 211,  337 => 210,  333 => 208,  329 => 205,  326 => 203,  319 => 197,  314 => 194,  311 => 193,  305 => 188,  303 => 187,  301 => 186,  297 => 184,  295 => 183,  290 => 180,  285 => 176,  281 => 174,  276 => 171,  273 => 170,  270 => 168,  268 => 167,  265 => 166,  262 => 164,  258 => 161,  252 => 159,  250 => 158,  246 => 156,  243 => 154,  239 => 152,  234 => 149,  231 => 147,  221 => 144,  218 => 143,  216 => 142,  211 => 141,  208 => 140,  205 => 138,  203 => 137,  198 => 134,  194 => 131,  190 => 129,  184 => 125,  180 => 123,  175 => 121,  172 => 120,  168 => 118,  163 => 114,  157 => 112,  155 => 111,  150 => 108,  145 => 106,  143 => 105,  139 => 103,  133 => 100,  130 => 99,  128 => 98,  125 => 97,  121 => 94,  117 => 91,  113 => 89,  107 => 85,  103 => 83,  98 => 81,  95 => 80,  91 => 78,  85 => 74,  81 => 72,  76 => 70,  74 => 69,  70 => 67,  64 => 64,  62 => 63,  60 => 62,  55 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/newsplus_lite/templates/page.html.twig", "C:\\xampp\\htdocs\\projecten3\\themes\\newsplus_lite\\templates\\page.html.twig");
    }
}
