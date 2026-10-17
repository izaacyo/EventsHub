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

/* @claro/content-edit/file-managed-file.html.twig */
class __TwigTemplate_6de8b6caae7f15e2decbd9da1061643e extends Template
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
        // line 25
        $context["classes"] = ["js-form-managed-file", "form-managed-file", (((($tmp =         // line 28
($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("is-multiple") : ("is-single")), (((($tmp =         // line 29
($context["upload"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("has-upload") : ("no-upload")), (((($tmp =         // line 30
($context["has_value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("has-value") : ("no-value")), (((($tmp =         // line 31
($context["has_meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("has-meta") : ("no-meta"))];
        // line 34
        yield "<div";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 34), "removeClass", ["clearfix"], "method", false, false, true, 34), "html", null, true);
        yield ">
  <div class=\"form-managed-file__main\">
    ";
        // line 36
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["main_items"] ?? null), "filename", [], "any", false, false, true, 36), "html", null, true);
        yield "
    ";
        // line 37
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["main_items"] ?? null), "filename"), "html", null, true);
        yield "
  </div>

  ";
        // line 40
        if (((($tmp = ($context["has_meta"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "preview", [], "any", false, false, true, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 41
            yield "  <div class=\"form-managed-file__meta-wrapper\">
    <div class=\"form-managed-file__meta\">
      ";
            // line 43
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "preview", [], "any", false, false, true, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "        <div class=\"form-managed-file__image-preview image-preview\">
          <div class=\"image-preview__img-wrapper\">
            ";
                // line 46
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "preview", [], "any", false, false, true, 46), "html", null, true);
                yield "
          </div>
        </div>
      ";
            }
            // line 50
            yield "
      ";
            // line 51
            if (((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "description", [], "any", false, false, true, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "alt", [], "any", false, false, true, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, true, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 52
                yield "        <div class=\"form-managed-file__meta-items\">
          ";
                // line 53
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "description", [], "any", false, false, true, 53), "html", null, true);
                yield "
          ";
                // line 54
                if ((($tmp = ($context["display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 55
                    yield "            ";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "display", [], "any", false, false, true, 55), "html", null, true);
                    yield "
          ";
                }
                // line 57
                yield "          ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "alt", [], "any", false, false, true, 57), "html", null, true);
                yield "
          ";
                // line 58
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, true, 58), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 61
            yield "    </div>
  </div>
  ";
        }
        // line 64
        yield "
  ";
        // line 66
        yield "  ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["data"] ?? null), "preview", "alt", "title", "description", "display"), "html", null, true);
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["multiple", "upload", "has_value", "has_meta", "attributes", "main_items", "data", "display"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@claro/content-edit/file-managed-file.html.twig";
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
        return array (  125 => 66,  122 => 64,  117 => 61,  111 => 58,  106 => 57,  100 => 55,  98 => 54,  94 => 53,  91 => 52,  89 => 51,  86 => 50,  79 => 46,  75 => 44,  73 => 43,  69 => 41,  67 => 40,  61 => 37,  57 => 36,  51 => 34,  49 => 31,  48 => 30,  47 => 29,  46 => 28,  45 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@claro/content-edit/file-managed-file.html.twig", "/var/www/html/web/core/themes/claro/templates/content-edit/file-managed-file.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 25, "if" => 40];
        static $filters = ["escape" => 34, "without" => 37];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if"],
                [0 => "escape", 1 => "without"],
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
