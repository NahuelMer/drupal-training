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

/* themes/contrib/drulma/templates/form/input.html.twig */
class __TwigTemplate_1ab47e051f198da4ec0f33d15c15b72f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'wrapper_opening' => [$this, 'block_wrapper_opening'],
            'icon' => [$this, 'block_icon'],
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
        $this->displayBlock('wrapper_opening', $context, $blocks);
        // line 11
        echo "  <input";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "input"], "method", false, false, true, 11), 11, $this->source), "html", null, true);
        echo " />";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 11, $this->source), "html", null, true);
        echo "
  ";
        // line 12
        $this->displayBlock('icon', $context, $blocks);
        // line 14
        echo "</div>
";
    }

    // line 8
    public function block_wrapper_opening($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<div class=\"control\">
";
    }

    // line 12
    public function block_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/drulma/templates/form/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  69 => 12,  64 => 9,  60 => 8,  55 => 14,  53 => 12,  46 => 11,  44 => 8,  41 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/drulma/templates/form/input.html.twig", "/var/www/html/web/themes/contrib/drulma/templates/form/input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 8);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
