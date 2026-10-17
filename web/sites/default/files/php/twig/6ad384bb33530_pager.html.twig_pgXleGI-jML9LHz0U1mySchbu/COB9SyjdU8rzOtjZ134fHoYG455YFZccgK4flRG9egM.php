<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* core/themes/olivero/templates/navigation/pager.html.twig */
class __TwigTemplate_fd0badafbfbe927abe2e3c54d90cd927 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "  <nav class=\"pager\" aria-labelledby=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\">
    <";
            // line 36
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pagination_heading_level"] ?? null), "html", null, true);
            yield " id=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\" class=\"visually-hidden\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pagination_heading_level"] ?? null), "html", null, true);
            yield ">
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 39
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 40
                yield "        <li class=\"pager__item pager__item--control pager__item--first\">
          <a href=\"";
                // line 41
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "href", [], "any", false, false, true, 41), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                yield "\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 41), "attributes", [], "any", false, false, true, 41), "href", "title"), "addClass", ["pager__link"], "method", false, false, true, 41), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">";
                // line 42
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                yield "</span>";
                // line 43
                yield from $this->load("@olivero/../images/pager-first.svg", 43)->unwrap()->yield($context);
                // line 44
                yield "</a>
        </li>
      ";
            }
            // line 47
            yield "
      ";
            // line 49
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 50
                yield "        <li class=\"pager__item pager__item--control pager__item--previous\">
          <a href=\"";
                // line 51
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 51), "href", [], "any", false, false, true, 51), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\" rel=\"prev\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 51), "attributes", [], "any", false, false, true, 51), "href", "title", "rel"), "addClass", ["pager__link"], "method", false, false, true, 51), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">";
                // line 52
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                yield "</span>";
                // line 53
                yield from $this->load("@olivero/../images/pager-previous.svg", 53)->unwrap()->yield($context);
                // line 54
                yield "</a>
        </li>
      ";
            }
            // line 57
            yield "
      ";
            // line 59
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 60
                yield "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 62
            yield "
      ";
            // line 64
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 64));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 65
                yield "        <li class=\"pager__item";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__item--active") : ("")));
                yield " pager__item--number\">
          ";
                // line 66
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 67
                    yield "            ";
                    $context["title"] = t("Current page");
                    // line 68
                    yield "          ";
                } else {
                    // line 69
                    yield "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 70
                    yield "          ";
                }
                // line 71
                yield "          ";
                if ((($context["current"] ?? null) != $context["key"])) {
                    // line 72
                    yield "            <a href=\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 72), "html", null, true);
                    yield "\" title=\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                    yield "\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 72), "href", "title"), "addClass", ["pager__link", (((($context["current"] ?? null) == $context["key"])) ? (" is-active") : (""))], "method", false, false, true, 72), "html", null, true);
                    yield ">
          ";
                }
                // line 74
                yield "          <span class=\"visually-hidden\">
            ";
                // line 75
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Page"));
                yield "
          </span>
          ";
                // line 77
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                yield "
          ";
                // line 78
                if ((($context["current"] ?? null) != $context["key"])) {
                    // line 79
                    yield "            </a>
          ";
                }
                // line 81
                yield "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 83
            yield "
      ";
            // line 85
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 88
            yield "
      ";
            // line 90
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 91
                yield "        <li class=\"pager__item pager__item--control pager__item--next\">
          <a href=\"";
                // line 92
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 92), "href", [], "any", false, false, true, 92), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\" rel=\"next\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 92), "attributes", [], "any", false, false, true, 92), "href", "title", "rel"), "addClass", ["pager__link"], "method", false, false, true, 92), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">";
                // line 93
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                yield "</span>";
                // line 94
                yield from $this->load("@olivero/../images/pager-previous.svg", 94)->unwrap()->yield($context);
                // line 95
                yield "</a>
        </li>
      ";
            }
            // line 98
            yield "
      ";
            // line 100
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 101
                yield "        <li class=\"pager__item pager__item--control pager__item--last\">
          <a href=\"";
                // line 102
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 102), "href", [], "any", false, false, true, 102), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                yield "\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 102), "attributes", [], "any", false, false, true, 102), "href", "title"), "addClass", ["pager__link"], "method", false, false, true, 102), "html", null, true);
                yield ">
            <span class=\"visually-hidden\">";
                // line 103
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                yield "</span>";
                // line 104
                yield from $this->load("@olivero/../images/pager-first.svg", 104)->unwrap()->yield($context);
                // line 105
                yield "</a>
        </li>
      ";
            }
            // line 108
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "heading_id", "pagination_heading_level", "ellipses", "current"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/olivero/templates/navigation/pager.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  254 => 108,  249 => 105,  247 => 104,  244 => 103,  236 => 102,  233 => 101,  230 => 100,  227 => 98,  222 => 95,  220 => 94,  217 => 93,  209 => 92,  206 => 91,  203 => 90,  200 => 88,  196 => 86,  193 => 85,  190 => 83,  182 => 81,  178 => 79,  176 => 78,  172 => 77,  167 => 75,  164 => 74,  154 => 72,  151 => 71,  148 => 70,  145 => 69,  142 => 68,  139 => 67,  137 => 66,  132 => 65,  127 => 64,  124 => 62,  120 => 60,  117 => 59,  114 => 57,  109 => 54,  107 => 53,  104 => 52,  96 => 51,  93 => 50,  90 => 49,  87 => 47,  82 => 44,  80 => 43,  77 => 42,  69 => 41,  66 => 40,  63 => 39,  52 => 36,  47 => 35,  45 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/olivero/templates/navigation/pager.html.twig", "/var/www/html/web/core/themes/olivero/templates/navigation/pager.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 34, "include" => 43, "for" => 64, "set" => 67];
        static $filters = ["escape" => 35, "t" => 36, "without" => 41];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "include", 2 => "for", 3 => "set"],
                [0 => "escape", 1 => "t", 2 => "without"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
