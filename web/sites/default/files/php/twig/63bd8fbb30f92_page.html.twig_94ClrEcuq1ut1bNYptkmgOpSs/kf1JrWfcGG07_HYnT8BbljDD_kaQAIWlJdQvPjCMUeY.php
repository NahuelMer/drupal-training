<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/holy/templates/layout/page.html.twig */
class __TwigTemplate_d0728fb5f03f027aa1157e5f0ed53b36 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"navbar-wrapper\">
  <div id=\"navbar\" role=\"banner\">
    ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
    <button class=\"icon-menu\">
      <span class=\"icon-menu-1\"></span>
      <span class=\"icon-menu-2\"></span>
      <span class=\"icon-menu-3\"></span>
    </button>
  </div>
</div>

<div id=\"navbar-collapse\">

  <header id=\"header\" role=\"banner\">
    <div class=\"container\">
      ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
    </div>
  </header>

  ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, true, 20)) {
            // line 21
            echo "  <div id=\"menu\" class=\"main-navigation\">
    <div class=\"container\">
      ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 27
        echo "
</div>

<div id=\"hero\">
  ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
</div>

";
        // line 34
        if ((($context["has_page_layout"] ?? null) == 1)) {
            // line 35
            echo "
  <div class=\"container\">
    ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "
    ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "
    ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
  </div>

  <main id=\"main\" role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
            // line 44
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "
  </main>

";
        } else {
            // line 48
            echo "
  ";
            // line 50
            $context["content_classes"] = [0 => (((twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 51
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 51), 51, $this->source)))) && twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 51), 51, $this->source)))))) ? ("two-sidebars") : ("")), 1 => (((twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 52
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 52), 52, $this->source)))) && twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 52), 52, $this->source))))))) ? ("one-sidebar sidebar-first") : ("")), 2 => (((twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 53
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 53), 53, $this->source)))) && twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 53), 53, $this->source))))))) ? ("one-sidebar sidebar-second") : ("")), 3 => (((twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 54
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 54), 54, $this->source))))) && twig_test_empty(twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 54), 54, $this->source))))))) ? ("no-sidebars") : (""))];
            // line 56
            echo " 

  <div id=\"center\" ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 58), 58, $this->source), "html", null, true);
            echo ">
    <div class=\"container\">

      <div class=\"region region-center\">

        ";
            // line 63
            if (twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 63))))) {
                // line 64
                echo "          <aside id=\"sidebar-first\" class=\"sidebar\" role=\"complementary\">
            ";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                echo "
          </aside>
        ";
            }
            // line 68
            echo "
        <main id=\"main\" role=\"main\">
          <a id=\"main-content\" tabindex=\"-1\"></a>";
            // line 71
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
          ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
          ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "
          ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "
          ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
        </main>

        ";
            // line 78
            if (twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 78))))) {
                // line 79
                echo "          <aside id=\"sidebar-second\" class=\"sidebar\" role=\"complementary\">
            ";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "
          </aside>
        ";
            }
            // line 83
            echo "
      </div>
    </div>
  </div>

";
        }
        // line 89
        echo "
<footer id=\"footer\" role=\"contentinfo\">
  <div class=\"container\">
    ";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "
  </div>
</footer>

";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 96)) {
            // line 97
            echo "<div id=\"copyright\" role=\"contentinfo\">
  <div class=\"container\">
    ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/holy/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 99,  212 => 97,  210 => 96,  203 => 92,  198 => 89,  190 => 83,  184 => 80,  181 => 79,  179 => 78,  173 => 75,  169 => 74,  165 => 73,  161 => 72,  156 => 71,  152 => 68,  146 => 65,  143 => 64,  141 => 63,  133 => 58,  129 => 56,  127 => 54,  126 => 53,  125 => 52,  124 => 51,  123 => 50,  120 => 48,  112 => 44,  105 => 39,  101 => 38,  97 => 37,  93 => 35,  91 => 34,  85 => 31,  79 => 27,  72 => 23,  68 => 21,  66 => 20,  59 => 16,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/holy/templates/layout/page.html.twig", "/var/www/html/web/themes/contrib/holy/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 50);
        static $filters = array("escape" => 3, "trim" => 51, "striptags" => 51, "render" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'trim', 'striptags', 'render'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
