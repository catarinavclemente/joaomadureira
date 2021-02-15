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

/* themes/olivero/templates/navigation/pager.html.twig */
class __TwigTemplate_45e6da5acb1e804beedc5e1533a04a8070df1e63482b74aa0f9288b613583af7 extends \Twig\Template
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
        // line 33
        if (($context["items"] ?? null)) {
            // line 34
            echo "  <nav class=\"pager layout--content-medium\" role=\"navigation\" aria-labelledby=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 34, $this->source), "html", null, true);
            echo "\">
    <h4 id=\"";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 35, $this->source), "html", null, true);
            echo "\" class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 38
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 38)) {
                // line 39
                echo "        ";
                ob_start();
                // line 40
                echo "          <li class=\"pager__item pager__item--control pager__item--first\">
            <a href=\"";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "href", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "attributes", [], "any", false, false, true, 41), 41, $this->source), "href", "title", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
              <svg class=\"pager__item-icon pager__item-icon--first\" width=\"15\" height=\"16\" viewBox=\"0 0 15 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M5.11201 7.19126L13.4118 1.15503C14.0728 0.674329 15 1.14648 15 1.96377V14.0362C15 14.8535 14.0728 15.3257 13.4118 14.845L5.11201 8.80874C4.56291 8.40939 4.56291 7.59061 5.11201 7.19126Z\"/>
                <rect width=\"2\" height=\"16\"/>
              </svg>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 50
                echo "      ";
            }
            // line 51
            echo "
      ";
            // line 53
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 53)) {
                // line 54
                echo "        ";
                ob_start();
                // line 55
                echo "          <li class=\"pager__item pager__item--control pager__item--previous\">
            <a href=\"";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 56), "href", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 56), "attributes", [], "any", false, false, true, 56), 56, $this->source), "href", "title", "rel", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
              <svg class=\"pager__item-icon pager__item-icon--previous\" width=\"11\" height=\"16\" viewBox=\"0 0 11 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M1.11201 7.19126L9.41183 1.15503C10.0728 0.674329 11 1.14648 11 1.96377V14.0362C11 14.8535 10.0728 15.3257 9.41183 14.845L1.11201 8.80874C0.562908 8.40939 0.562907 7.59061 1.11201 7.19126Z\"/>
              </svg>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 64
                echo "      ";
            }
            // line 65
            echo "
      ";
            // line 67
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 67)) {
                // line 68
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 70
            echo "
      ";
            // line 72
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 72));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 73
                echo "        ";
                ob_start();
                // line 74
                echo "          <li class=\"pager__item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__item--active") : ("")));
                echo " pager__item--number\">
            ";
                // line 75
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 76
                    echo "              ";
                    $context["title"] = t("Current page");
                    // line 77
                    echo "            ";
                } else {
                    // line 78
                    echo "              ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 79
                    echo "            ";
                }
                // line 80
                echo "            ";
                if ((($context["current"] ?? null) != $context["key"])) {
                    // line 81
                    echo "              <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                    echo "\" class=\"pager__link";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                    echo "\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 81, $this->source), "html", null, true);
                    echo "\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 81), 81, $this->source), "href", "title", "class"), "html", null, true);
                    echo ">
            ";
                }
                // line 83
                echo "            <span class=\"visually-hidden\">
              ";
                // line 84
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>
            ";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 86, $this->source), "html", null, true);
                echo "
            ";
                // line 87
                if ((($context["current"] ?? null) != $context["key"])) {
                    // line 88
                    echo "              </a>
            ";
                }
                // line 90
                echo "          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 92
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "
      ";
            // line 95
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 95)) {
                // line 96
                echo "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 98
            echo "
      ";
            // line 100
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 100)) {
                // line 101
                echo "        ";
                ob_start();
                // line 102
                echo "          <li class=\"pager__item pager__item--control pager__item--next\">
            <a href=\"";
                // line 103
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 103), "href", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 103), "attributes", [], "any", false, false, true, 103), 103, $this->source), "href", "title", "rel", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 104
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
              <svg class=\"pager__item-icon pager__item-icon--next\" width=\"11\" height=\"16\" viewBox=\"0 0 11 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M9.88799 8.80874L1.58817 14.845C0.927202 15.3257 0 14.8535 0 14.0362L0 1.96377C0 1.14648 0.927202 0.674329 1.58817 1.15503L9.88799 7.19126C10.4371 7.59061 10.4371 8.40939 9.88799 8.80874Z\"/>
              </svg>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 111
                echo "      ";
            }
            // line 112
            echo "
      ";
            // line 114
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 114)) {
                // line 115
                echo "        ";
                ob_start();
                // line 116
                echo "          <li class=\"pager__item pager__item--control pager__item--last\">
            <a href=\"";
                // line 117
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 117), "href", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 117), "attributes", [], "any", false, false, true, 117), 117, $this->source), "href", "title", "class"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 118
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "</span>
              <svg class=\"pager__item-icon pager__item-icon--last\" width=\"15\" height=\"16\" viewBox=\"0 0 15 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M9.88799 8.80874L1.58817 14.845C0.927202 15.3257 0 14.8535 0 14.0362L0 1.96377C0 1.14648 0.927202 0.674329 1.58817 1.15503L9.88799 7.19126C10.4371 7.59061 10.4371 8.40939 9.88799 8.80874Z\"/>
                <rect x=\"13\" width=\"2\" height=\"16\"/>
              </svg>
            </a>
          </li>
        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 126
                echo "      ";
            }
            // line 127
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/olivero/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 127,  274 => 126,  263 => 118,  255 => 117,  252 => 116,  249 => 115,  246 => 114,  243 => 112,  240 => 111,  230 => 104,  222 => 103,  219 => 102,  216 => 101,  213 => 100,  210 => 98,  206 => 96,  203 => 95,  200 => 93,  194 => 92,  190 => 90,  186 => 88,  184 => 87,  180 => 86,  175 => 84,  172 => 83,  160 => 81,  157 => 80,  154 => 79,  151 => 78,  148 => 77,  145 => 76,  143 => 75,  138 => 74,  135 => 73,  130 => 72,  127 => 70,  123 => 68,  120 => 67,  117 => 65,  114 => 64,  104 => 57,  96 => 56,  93 => 55,  90 => 54,  87 => 53,  84 => 51,  81 => 50,  70 => 42,  62 => 41,  59 => 40,  56 => 39,  53 => 38,  46 => 35,  41 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a pager.
 *
 * Available variables:
 * - heading_id: Pagination heading ID.
 * - items: List of pager items.
 *   The list is keyed by the following elements:
 *   - first: Item for the first page; not present on the first page of results.
 *   - previous: Item for the previous page; not present on the first page
 *     of results.
 *   - next: Item for the next page; not present on the last page of results.
 *   - last: Item for the last page; not present on the last page of results.
 *   - pages: List of pages, keyed by page number.
 *   Sub-sub elements:
 *   items.first, items.previous, items.next, items.last, and each item inside
 *   items.pages contain the following elements:
 *   - href: URL with appropriate query parameters for the item.
 *   - attributes: A keyed list of HTML attributes for the item.
 *   - text: The visible text used for the item link, such as \"‹ Previous\"
 *     or \"Next ›\".
 * - current: The page number of the current page.
 * - ellipses: If there are more pages than the quantity allows, then an
 *   ellipsis before or after the listed pages may be present.
 *   - previous: Present if the currently visible list of pages does not start
 *     at the first page.
 *   - next: Present if the visible list of pages ends before the last page.
 *
 * @see template_preprocess_pager()
 */
#}
{% if items %}
  <nav class=\"pager layout--content-medium\" role=\"navigation\" aria-labelledby=\"{{ heading_id }}\">
    <h4 id=\"{{ heading_id }}\" class=\"visually-hidden\">{{ 'Pagination'|t }}</h4>
    <ul class=\"pager__items js-pager__items\">
      {# Print first item if we are not on the first page. #}
      {% if items.first %}
        {% spaceless %}
          <li class=\"pager__item pager__item--control pager__item--first\">
            <a href=\"{{ items.first.href }}\" class=\"pager__link\" title=\"{{ 'Go to first page'|t }}\"{{ items.first.attributes|without('href', 'title', 'class') }}>
              <span class=\"visually-hidden\">{{ 'First page'|t }}</span>
              <svg class=\"pager__item-icon pager__item-icon--first\" width=\"15\" height=\"16\" viewBox=\"0 0 15 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M5.11201 7.19126L13.4118 1.15503C14.0728 0.674329 15 1.14648 15 1.96377V14.0362C15 14.8535 14.0728 15.3257 13.4118 14.845L5.11201 8.80874C4.56291 8.40939 4.56291 7.59061 5.11201 7.19126Z\"/>
                <rect width=\"2\" height=\"16\"/>
              </svg>
            </a>
          </li>
        {% endspaceless %}
      {% endif %}

      {# Print previous item if we are not on the first page. #}
      {% if items.previous %}
        {% spaceless %}
          <li class=\"pager__item pager__item--control pager__item--previous\">
            <a href=\"{{ items.previous.href }}\" class=\"pager__link\" title=\"{{ 'Go to previous page'|t }}\" rel=\"prev\"{{ items.previous.attributes|without('href', 'title', 'rel', 'class') }}>
              <span class=\"visually-hidden\">{{ 'Previous page'|t }}</span>
              <svg class=\"pager__item-icon pager__item-icon--previous\" width=\"11\" height=\"16\" viewBox=\"0 0 11 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M1.11201 7.19126L9.41183 1.15503C10.0728 0.674329 11 1.14648 11 1.96377V14.0362C11 14.8535 10.0728 15.3257 9.41183 14.845L1.11201 8.80874C0.562908 8.40939 0.562907 7.59061 1.11201 7.19126Z\"/>
              </svg>
            </a>
          </li>
        {% endspaceless %}
      {% endif %}

      {# Add an ellipsis if there are further previous pages. #}
      {% if ellipses.previous %}
        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      {% endif %}

      {# Now generate the actual pager piece. #}
      {% for key, item in items.pages %}
        {% spaceless %}
          <li class=\"pager__item{{ current == key ? ' pager__item--active' : '' }} pager__item--number\">
            {% if current == key %}
              {% set title = 'Current page'|t %}
            {% else %}
              {% set title = 'Go to page @key'|t({'@key': key}) %}
            {% endif %}
            {% if current != key %}
              <a href=\"{{ item.href }}\" class=\"pager__link{{ current == key ? ' is-active' }}\" title=\"{{ title }}\"{{ item.attributes|without('href', 'title', 'class') }}>
            {% endif %}
            <span class=\"visually-hidden\">
              {{ current == key ? 'Current page'|t : 'Page'|t }}
            </span>
            {{ key }}
            {% if current != key %}
              </a>
            {% endif %}
          </li>
        {% endspaceless %}
      {% endfor %}

      {# Add an ellipsis if there are further next pages. #}
      {% if ellipses.next %}
        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      {% endif %}

      {# Print next item if we are not on the last page. #}
      {% if items.next %}
        {% spaceless %}
          <li class=\"pager__item pager__item--control pager__item--next\">
            <a href=\"{{ items.next.href }}\" class=\"pager__link\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\"{{ items.next.attributes|without('href', 'title', 'rel', 'class') }}>
              <span class=\"visually-hidden\">{{ 'Next page'|t }}</span>
              <svg class=\"pager__item-icon pager__item-icon--next\" width=\"11\" height=\"16\" viewBox=\"0 0 11 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M9.88799 8.80874L1.58817 14.845C0.927202 15.3257 0 14.8535 0 14.0362L0 1.96377C0 1.14648 0.927202 0.674329 1.58817 1.15503L9.88799 7.19126C10.4371 7.59061 10.4371 8.40939 9.88799 8.80874Z\"/>
              </svg>
            </a>
          </li>
        {% endspaceless %}
      {% endif %}

      {# Print last item if we are not on the last page. #}
      {% if items.last %}
        {% spaceless %}
          <li class=\"pager__item pager__item--control pager__item--last\">
            <a href=\"{{ items.last.href }}\" class=\"pager__link\" title=\"{{ 'Go to last page'|t }}\"{{ items.last.attributes|without('href', 'title', 'class') }}>
              <span class=\"visually-hidden\">{{ 'Last page'|t }}</span>
              <svg class=\"pager__item-icon pager__item-icon--last\" width=\"15\" height=\"16\" viewBox=\"0 0 15 16\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M9.88799 8.80874L1.58817 14.845C0.927202 15.3257 0 14.8535 0 14.0362L0 1.96377C0 1.14648 0.927202 0.674329 1.58817 1.15503L9.88799 7.19126C10.4371 7.59061 10.4371 8.40939 9.88799 8.80874Z\"/>
                <rect x=\"13\" width=\"2\" height=\"16\"/>
              </svg>
            </a>
          </li>
        {% endspaceless %}
      {% endif %}
    </ul>
  </nav>
{% endif %}
", "themes/olivero/templates/navigation/pager.html.twig", "/Users/catarinavasconcelos/Sites/joaomadureira/themes/olivero/templates/navigation/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33, "spaceless" => 39, "for" => 72, "set" => 76);
        static $filters = array("escape" => 34, "t" => 35, "without" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'spaceless', 'for', 'set'],
                ['escape', 't', 'without'],
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
