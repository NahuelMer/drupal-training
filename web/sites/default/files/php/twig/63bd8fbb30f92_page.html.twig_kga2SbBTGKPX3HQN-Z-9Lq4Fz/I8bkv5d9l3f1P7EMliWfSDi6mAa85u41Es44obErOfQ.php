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

/* themes/contrib/drulma/templates/system/page.html.twig */
class __TwigTemplate_3a593a58cc56cfc66884006904bb8c0b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('header', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('main', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 8
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "

<header";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_attributtes"] ?? null), 12, $this->source), "html", null, true);
        echo ">
  <div class=\"hero-head\">
    ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
  </div>
  ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 16)) {
            // line 17
            echo "  <div class=\"hero-body\">
    ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 21
        echo "  <div class=\"hero-foot\">
    ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
  </div>
</header>

";
    }

    // line 28
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "
<main role=\"main\">
  <section class=\"section\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 33
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "

    ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "

    ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "

    ";
        // line 39
        if (($context["wrap_content_in_container"] ?? null)) {
            // line 40
            echo "    <div class=\"container\">
    ";
        }
        // line 42
        echo "      <div class=\"columns\">
        <div class=\"column\">
        ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "
        </div>

        ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 47)) {
            // line 48
            echo "          <aside class=\"column is-narrow\" role=\"complementary\">
            ";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 52
        echo "
        ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 53)) {
            // line 54
            echo "          <aside class=\"column is-narrow\" role=\"complementary\">
            ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 58
        echo "      </div>
    ";
        // line 59
        if (($context["wrap_content_in_container"] ?? null)) {
            // line 60
            echo "    </div>
    ";
        }
        // line 62
        echo "  </section>
</main>

";
    }

    // line 67
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "
";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 69)) {
            // line 70
            echo "  <footer class=\"footer\" role=\"contentinfo\">
    ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
  </footer>
";
        }
        // line 74
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/drulma/templates/system/page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  204 => 74,  198 => 71,  195 => 70,  193 => 69,  190 => 68,  186 => 67,  179 => 62,  175 => 60,  173 => 59,  170 => 58,  164 => 55,  161 => 54,  159 => 53,  156 => 52,  150 => 49,  147 => 48,  145 => 47,  139 => 44,  135 => 42,  131 => 40,  129 => 39,  124 => 37,  119 => 35,  113 => 33,  108 => 29,  104 => 28,  95 => 22,  92 => 21,  86 => 18,  83 => 17,  81 => 16,  76 => 14,  71 => 12,  66 => 10,  63 => 9,  59 => 8,  55 => 67,  52 => 66,  50 => 28,  47 => 27,  45 => 8,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/drulma/templates/system/page.html.twig", "/var/www/html/web/themes/contrib/drulma/templates/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 8, "if" => 16);
        static $filters = array("escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['escape'],
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
