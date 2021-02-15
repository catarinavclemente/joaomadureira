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

/* themes/olivero/templates/misc/feed-icon.html.twig */
class __TwigTemplate_5127a8888180bc84cbaf2f036ac6c1244c31830a033424524ad3303e7f3bda79 extends \Twig\Template
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
        // line 13
        echo "
";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/feed"), "html", null, true);
        echo "

";
        // line 20
        if (( !array_key_exists("title", $context) || (null === ($context["title"] ?? null)))) {
            // line 21
            echo "  ";
            $context["title"] = t("RSS Feed");
        }
        // line 23
        echo "
<a href=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 24, $this->source), "html", null, true);
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "feed-icon"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        echo ">
  <span class=\"feed-icon__label\">
    ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 26, $this->source), "html", null, true);
        echo "
  </span>
  <span class=\"feed-icon__icon\" aria-hidden=\"true\">
     ";
        // line 29
        $this->loadTemplate("@olivero/../images/rss.svg", "themes/olivero/templates/misc/feed-icon.html.twig", 29)->display($context);
        // line 30
        echo "  </span>
</a>
";
    }

    public function getTemplateName()
    {
        return "themes/olivero/templates/misc/feed-icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 30,  69 => 29,  63 => 26,  56 => 24,  53 => 23,  49 => 21,  47 => 20,  42 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a feed icon.
 *
 * Available variables:
 * - url: An internal system path or a fully qualified external URL of the feed.
 * - attributes: Remaining HTML attributes for the feed link.
 *   - title: A descriptive title of the feed link.
 *   - class: HTML classes to be applied to the feed link.
 */
#}

{{ attach_library('olivero/feed') }}

{#
  @todo - This works around https://www.drupal.org/project/drupal/issues/3156244,
  Title variable isn't set by Syndicate block.
 #}
{% if title is not defined or title is null %}
  {% set title = 'RSS Feed'|t %}
{% endif %}

<a href=\"{{ url }}\"{{ attributes.addClass('feed-icon') }}>
  <span class=\"feed-icon__label\">
    {{ title }}
  </span>
  <span class=\"feed-icon__icon\" aria-hidden=\"true\">
     {% include \"@olivero/../images/rss.svg\" %}
  </span>
</a>
", "themes/olivero/templates/misc/feed-icon.html.twig", "/Users/catarinavasconcelos/Sites/joaomadureira/themes/olivero/templates/misc/feed-icon.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 21, "include" => 29);
        static $filters = array("escape" => 14, "t" => 21);
        static $functions = array("attach_library" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 't'],
                ['attach_library']
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
