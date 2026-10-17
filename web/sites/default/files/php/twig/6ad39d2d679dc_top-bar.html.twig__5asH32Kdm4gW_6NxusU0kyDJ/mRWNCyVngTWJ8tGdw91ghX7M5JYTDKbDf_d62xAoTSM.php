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

/* core/modules/navigation/templates/top-bar.html.twig */
class __TwigTemplate_aaefd8ed553b849eea3b7373df03641c extends Template
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
        // line 15
        $context["attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 16
        if ((((($tmp = ($context["tools"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["context"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["actions"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 17
            yield "  <aside ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["top-bar"], "method", false, false, true, 17), "setAttribute", ["data-drupal-admin-styles", ""], "method", false, false, true, 17), "setAttribute", ["aria-labelledby", "top-bar__title"], "method", false, false, true, 17), "setAttribute", ["data-offset-top", true], "method", false, false, true, 17), "html", null, true);
            yield ">
    <h3 id=\"top-bar__title\" class=\"visually-hidden\">";
            // line 18
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Administrative top bar"));
            yield "</h3>
    <div class=\"top-bar__content\">
      <div class=\"top-bar__tools\">";
            // line 21
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["tools"] ?? null), "html", null, true);
            // line 22
            yield "</div>
      <div class=\"top-bar__context\">";
            // line 24
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["context"] ?? null), "html", null, true);
            // line 25
            yield "</div>
      <div class=\"top-bar__actions\">";
            // line 27
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["actions"] ?? null), "html", null, true);
            // line 28
            yield "</div>
    </div>
  </aside>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["tools", "context", "actions"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/navigation/templates/top-bar.html.twig";
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
        return array (  71 => 28,  69 => 27,  66 => 25,  64 => 24,  61 => 22,  59 => 21,  54 => 18,  49 => 17,  47 => 16,  45 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/navigation/templates/top-bar.html.twig", "/var/www/html/web/core/modules/navigation/templates/top-bar.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 15, "if" => 16];
        static $filters = ["render" => 16, "escape" => 17, "t" => 18];
        static $functions = ["create_attribute" => 15];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if"],
                [0 => "render", 1 => "escape", 2 => "t"],
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
