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

/* core/themes/claro/templates/filter/filter-tips.html.twig */
class __TwigTemplate_77323bba019d606c61e5dab26742acd3 extends Template
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
        // line 20
        if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "  <h2>";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Text Formats"));
            yield "</h2>
";
        }
        // line 23
        yield "
";
        // line 24
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tips"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "  ";
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "    <div class=\"compose-tips\">
  ";
            }
            // line 28
            yield "
  ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tips"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["tip"]) {
                // line 30
                yield "    ";
                if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 31
                    yield "      ";
                    // line 32
                    $context["tip_classes"] = ["compose-tips__item", ("compose-tips__item--name-" . \Drupal\Component\Utility\Html::getClass(                    // line 34
$context["name"]))];
                    // line 37
                    yield "      <div";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tip"], "attributes", [], "any", false, false, true, 37), "addClass", [($context["tip_classes"] ?? null)], "method", false, false, true, 37), "html", null, true);
                    yield ">
    ";
                }
                // line 39
                yield "    ";
                if (((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["long"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 40
                    yield "      <h3>";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tip"], "name", [], "any", false, false, true, 40), "html", null, true);
                    yield "</h3>
    ";
                }
                // line 42
                yield "
    ";
                // line 43
                if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tip"], "list", [], "any", false, false, true, 43))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 44
                    yield "      <ul class=\"filter-tips ";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["long"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("filter-tips--long") : ("filter-tips--short")));
                    yield "\">
      ";
                    // line 45
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["tip"], "list", [], "any", false, false, true, 45));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 46
                        yield "        ";
                        // line 47
                        $context["item_classes"] = ["filter-tips__item", (((($tmp =                         // line 49
($context["long"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("filter-tips__item--long") : ("filter-tips__item--short")), (((($tmp =                         // line 50
($context["long"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("filter-tips__item--id-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 50)))) : (""))];
                        // line 53
                        yield "        <li";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 53), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 53), "html", null, true);
                        yield ">";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tip", [], "any", false, false, true, 53), "html", null, true);
                        yield "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 55
                    yield "      </ul>
    ";
                }
                // line 57
                yield "
    ";
                // line 58
                if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 59
                    yield "      </div>
    ";
                }
                // line 61
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['tip'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 62
            yield "
  ";
            // line 63
            if ((($tmp = ($context["multiple"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 64
                yield "    </div>
  ";
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["multiple", "tips", "long"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/filter/filter-tips.html.twig";
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
        return array (  152 => 64,  150 => 63,  147 => 62,  140 => 61,  136 => 59,  134 => 58,  131 => 57,  127 => 55,  115 => 53,  113 => 50,  112 => 49,  111 => 47,  109 => 46,  105 => 45,  100 => 44,  98 => 43,  95 => 42,  89 => 40,  86 => 39,  80 => 37,  78 => 34,  77 => 32,  75 => 31,  72 => 30,  68 => 29,  65 => 28,  61 => 26,  58 => 25,  56 => 24,  53 => 23,  47 => 21,  45 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/claro/templates/filter/filter-tips.html.twig", "/var/www/html/web/core/themes/claro/templates/filter/filter-tips.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 20, "for" => 29, "set" => 32];
        static $filters = ["t" => 21, "length" => 24, "clean_class" => 34, "escape" => 37];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "for", 2 => "set"],
                [0 => "t", 1 => "length", 2 => "clean_class", 3 => "escape"],
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
