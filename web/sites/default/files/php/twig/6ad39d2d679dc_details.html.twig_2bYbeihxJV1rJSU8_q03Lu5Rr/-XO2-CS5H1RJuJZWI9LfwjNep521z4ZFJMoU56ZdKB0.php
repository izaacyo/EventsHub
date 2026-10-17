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

/* core/themes/claro/templates/details.html.twig */
class __TwigTemplate_7bdfe9711aa090fbf181570c4c3ddd02 extends Template
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
        // line 23
        $context["classes"] = ["claro-details", (((($tmp =         // line 25
($context["accordion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("claro-details--accordion") : ("")), (((($tmp =         // line 26
($context["accordion_item"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("claro-details--accordion-item") : ("")), (((($tmp = (($_v0 =         // line 27
($context["element"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#module_package_listing"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#module_package_listing", [], "array", false, false, true, 27))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("claro-details--package-listing") : (""))];
        // line 31
        $context["content_wrapper_classes"] = ["claro-details__wrapper", "details-wrapper", (((($tmp =         // line 34
($context["accordion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("claro-details__wrapper--accordion") : ("")), (((($tmp =         // line 35
($context["accordion_item"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("claro-details__wrapper--accordion-item") : ("")), (((($tmp = (($_v1 =         // line 36
($context["element"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#module_package_listing"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#module_package_listing", [], "array", false, false, true, 36))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("claro-details__wrapper--package-listing") : (""))];
        // line 40
        $context["inner_wrapper_classes"] = ["claro-details__content", (((($tmp =         // line 42
($context["accordion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("claro-details__content--accordion") : ("")), (((($tmp =         // line 43
($context["accordion_item"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("claro-details__content--accordion-item") : ("")), (((($tmp = (($_v2 =         // line 44
($context["element"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#module_package_listing"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#module_package_listing", [], "array", false, false, true, 44))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("claro-details__content--package-listing") : (""))];
        // line 47
        yield "<details";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 47), "html", null, true);
        yield ">";
        // line 48
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            $context["summary_classes"] = ["claro-details__summary", (((($tmp =             // line 52
($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("js-form-required") : ("")), (((($tmp =             // line 53
($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-required") : ("")), (((($tmp =             // line 54
($context["accordion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("claro-details__summary--accordion") : ("")), (((($tmp =             // line 55
($context["accordion_item"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("claro-details__summary--accordion-item") : ("")), (((($tmp = (($_v3 =             // line 56
($context["element"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#module_package_listing"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#module_package_listing", [], "array", false, false, true, 56))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("claro-details__summary--package-listing") : (""))];
            // line 60
            yield "    <summary";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [($context["summary_classes"] ?? null)], "method", false, false, true, 60), "html", null, true);
            yield ">";
            // line 61
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            // line 62
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "<span class=\"required-mark\"></span>";
            }
            // line 65
            yield "</summary>";
        }
        // line 67
        yield "<div";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_wrapper_classes"] ?? null)], "method", false, false, true, 67), "html", null, true);
        yield ">
    ";
        // line 68
        if (((($tmp = ($context["accordion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["accordion_item"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 69
            yield "    <div";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["inner_wrapper_classes"] ?? null)]), "html", null, true);
            yield ">
    ";
        }
        // line 71
        yield "
      ";
        // line 72
        if ((($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "        <div class=\"form-item form-item__error-message\">
          ";
            // line 74
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 77
        if ((($tmp = ($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            $context["description_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => (($_v4 = ($context["attributes"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["aria-describedby"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "aria-describedby", [], "array", false, false, true, 78))]);
            // line 79
            yield "        ";
            $context["description_classes"] = ["claro-details__description", (((($tmp =             // line 81
($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-disabled") : (""))];
            // line 83
            yield "        <div";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description_attributes"] ?? null), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 83), "html", null, true);
            yield ">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
            yield "</div>";
        }
        // line 85
        if ((($tmp = ($context["children"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        }
        // line 88
        if ((($tmp = ($context["value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["value"] ?? null), "html", null, true);
        }
        // line 92
        if (((($tmp = ($context["accordion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["accordion_item"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 93
            yield "    </div>
    ";
        }
        // line 95
        yield "  </div>
</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["accordion", "accordion_item", "element", "attributes", "title", "required", "summary_attributes", "content_attributes", "errors", "description", "disabled", "children", "value"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/details.html.twig";
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
        return array (  145 => 95,  141 => 93,  139 => 92,  136 => 89,  134 => 88,  131 => 86,  129 => 85,  122 => 83,  120 => 81,  118 => 79,  116 => 78,  114 => 77,  108 => 74,  105 => 73,  103 => 72,  100 => 71,  94 => 69,  92 => 68,  87 => 67,  84 => 65,  81 => 63,  79 => 62,  77 => 61,  73 => 60,  71 => 56,  70 => 55,  69 => 54,  68 => 53,  67 => 52,  66 => 50,  64 => 48,  60 => 47,  58 => 44,  57 => 43,  56 => 42,  55 => 40,  53 => 36,  52 => 35,  51 => 34,  50 => 31,  48 => 27,  47 => 26,  46 => 25,  45 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/claro/templates/details.html.twig", "/var/www/html/web/core/themes/claro/templates/details.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 23, "if" => 48];
        static $filters = ["escape" => 47];
        static $functions = ["create_attribute" => 69];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if"],
                [0 => "escape"],
                [0 => "create_attribute"],
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
