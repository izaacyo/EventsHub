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

/* core/themes/olivero/templates/block/block--secondary-menu.html.twig */
class __TwigTemplate_4a577e2952a337c51d562a452d4d81a2 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        $context["classes"] = ["block", "block-menu", "navigation", ("menu--" . \Drupal\Component\Utility\Html::getClass(        // line 40
($context["derivative_plugin_id"] ?? null))), "secondary-nav"];
        // line 44
        $context["heading_id"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 44) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 45
        yield "<nav ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 45), "setAttribute", ["aria-labelledby", ($context["heading_id"] ?? null)], "method", false, false, true, 45), "setAttribute", ["role", "navigation"], "method", false, false, true, 45), "html", null, true);
        yield ">
  ";
        // line 47
        yield "  ";
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "    ";
            $context["title_attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["visually-hidden"], "method", false, false, true, 48);
            // line 49
            yield "  ";
        }
        // line 50
        yield "  ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  <span";
        // line 51
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "setAttribute", ["id", ($context["heading_id"] ?? null)], "method", false, false, true, 51), "html", null, true);
        yield ">";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 51), "html", null, true);
        yield "</span>
  ";
        // line 52
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  ";
        // line 54
        yield "  ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 57
        yield "</nav>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["derivative_plugin_id", "attributes", "configuration", "title_prefix", "title_suffix", "content"]);        return; yield;
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 55
        yield "    ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
  ";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/olivero/templates/block/block--secondary-menu.html.twig";
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
        return array (  97 => 55,  90 => 54,  83 => 57,  80 => 54,  76 => 52,  70 => 51,  65 => 50,  62 => 49,  59 => 48,  56 => 47,  51 => 45,  49 => 44,  47 => 40,  46 => 36,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/olivero/templates/block/block--secondary-menu.html.twig", "/var/www/html/web/core/themes/olivero/templates/block/block--secondary-menu.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 36, "if" => 47, "block" => 54];
        static $filters = ["clean_class" => 40, "clean_id" => 44, "escape" => 45];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "block"],
                [0 => "clean_class", 1 => "clean_id", 2 => "escape"],
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
