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

/* core/themes/olivero/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_323b1f7b0e3a5a05507f13131e277ee8 extends Template
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
        // line 10
        if ((($tmp = ($context["breadcrumb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "  <nav class=\"breadcrumb\" aria-labelledby=\"system-breadcrumb\">
    <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 12
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb"));
            yield "</h2>
    <div class=\"breadcrumb__content\">
      <ol class=\"breadcrumb__list\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 16
                yield "          <li class=\"breadcrumb__item\">
            ";
                // line 17
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 18
                    yield "              <a href=\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 18), "html", null, true);
                    yield "\" class=\"breadcrumb__link\">";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 18), "html", null, true);
                    yield "</a>
            ";
                } else {
                    // line 20
                    yield "              ";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 20), "html", null, true);
                    yield "
            ";
                }
                // line 22
                yield "          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 24
            yield "      </ol>
    </div>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["breadcrumb"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/olivero/templates/navigation/breadcrumb.html.twig";
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
        return array (  87 => 24,  79 => 22,  73 => 20,  65 => 18,  63 => 17,  60 => 16,  56 => 15,  50 => 12,  47 => 11,  45 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/olivero/templates/navigation/breadcrumb.html.twig", "/var/www/html/web/core/themes/olivero/templates/navigation/breadcrumb.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 10, "for" => 15];
        static $filters = ["t" => 12, "escape" => 18];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "for"],
                [0 => "t", 1 => "escape"],
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
