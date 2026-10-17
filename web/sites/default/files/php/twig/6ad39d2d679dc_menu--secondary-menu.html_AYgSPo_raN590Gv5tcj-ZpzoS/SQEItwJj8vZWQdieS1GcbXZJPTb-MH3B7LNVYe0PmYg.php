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

/* core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig */
class __TwigTemplate_493e7598c5b57897ea099dc8d194dd91 extends Template
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
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/navigation-secondary"), "html", null, true);
        yield "

";
        // line 25
        $macros["menus"] = $this->macros["menus"] = $this->getMacroNamespace();
        // line 26
        yield "
";
        // line 31
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu"], "method", false, false, true, 31);
        // line 32
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(32))->call("menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], $context, 32, $this->source));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "menu_level"]);        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "menu_links" => new \Twig\TwigMacro("menu_links", function ($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup {
                // line 34
                $macros = $this->macros;
                $context = [
                    "items" => $items,
                    "attributes" => $attributes,
                    "menu_level" => $menu_level,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                    // line 35
                    yield "  ";
                    $context["secondary_nav_level"] = ("secondary-nav__menu--level-" . (($context["menu_level"] ?? null) + 1));
                    // line 36
                    yield "  ";
                    $macros["menus"] = $this->getMacroNamespace();
                    // line 37
                    yield "  ";
                    if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 38
                        yield "    <ul";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["secondary-nav__menu", ($context["secondary_nav_level"] ?? null)], "method", false, false, true, 38), "html", null, true);
                        yield ">
      ";
                        // line 39
                        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["secondary_nav_level"] ?? null)], "method", false, false, true, 39);
                        // line 40
                        yield "      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 41
                            yield "
        ";
                            // line 42
                            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), "isRouted", [], "any", false, false, true, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), "routeName", [], "any", false, false, true, 42) == "<nolink>"))) {
                                // line 43
                                yield "          ";
                                $context["menu_item_type"] = "nolink";
                                // line 44
                                yield "        ";
                            } elseif (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 44), "isRouted", [], "any", false, false, true, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 44), "routeName", [], "any", false, false, true, 44) == "<button>"))) {
                                // line 45
                                yield "          ";
                                $context["menu_item_type"] = "button";
                                // line 46
                                yield "        ";
                            } else {
                                // line 47
                                yield "          ";
                                $context["menu_item_type"] = "link";
                                // line 48
                                yield "        ";
                            }
                            // line 49
                            yield "
        ";
                            // line 50
                            $context["item_classes"] = ["secondary-nav__menu-item", ("secondary-nav__menu-item--" .                             // line 52
($context["menu_item_type"] ?? null)), ("secondary-nav__menu-item--level-" . (                            // line 53
($context["menu_level"] ?? null) + 1)), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 54
$context["item"], "in_active_trail", [], "any", false, false, true, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("secondary-nav__menu-item--active-trail") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 55
$context["item"], "below", [], "any", false, false, true, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("secondary-nav__menu-item--has-children") : (""))];
                            // line 58
                            yield "
        ";
                            // line 59
                            $context["link_classes"] = ["secondary-nav__menu-link", ("secondary-nav__menu-link--" .                             // line 61
($context["menu_item_type"] ?? null)), ("secondary-nav__menu-link--level-" . (                            // line 62
($context["menu_level"] ?? null) + 1)), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 63
$context["item"], "in_active_trail", [], "any", false, false, true, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("secondary-nav__menu-link--active-trail") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 64
$context["item"], "below", [], "any", false, false, true, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("secondary-nav__menu-link--has-children") : (""))];
                            // line 67
                            yield "
        <li";
                            // line 68
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 68), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 68), "html", null, true);
                            yield ">
          ";
                            // line 69
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 69), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 69), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                            yield "

          ";
                            // line 71
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 72
                                yield "            ";
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(72))->call("menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 72), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], $context, 72, $this->source));
                                yield "
          ";
                            }
                            // line 74
                            yield "        </li>
      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 76
                        yield "    </ul>
  ";
                    }
                    return; yield;
                })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["items" => false, "attributes" => false, "menu_level" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig";
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
        return array (  172 => 76,  164 => 74,  158 => 72,  156 => 71,  151 => 69,  147 => 68,  144 => 67,  142 => 64,  141 => 63,  140 => 62,  139 => 61,  138 => 59,  135 => 58,  133 => 55,  132 => 54,  131 => 53,  130 => 52,  129 => 50,  126 => 49,  123 => 48,  120 => 47,  117 => 46,  114 => 45,  111 => 44,  108 => 43,  106 => 42,  103 => 41,  98 => 40,  96 => 39,  91 => 38,  88 => 37,  85 => 36,  82 => 35,  70 => 34,  57 => 32,  55 => 31,  52 => 26,  50 => 25,  45 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig", "/var/www/html/web/core/themes/olivero/templates/navigation/menu--secondary-menu.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 25, "set" => 31, "macro" => 34, "if" => 37, "for" => 40];
        static $filters = ["escape" => 23];
        static $functions = ["attach_library" => 23, "link" => 69];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "import", 1 => "set", 2 => "macro", 3 => "if", 4 => "for"],
                [0 => "escape"],
                [0 => "attach_library", 1 => "link"],
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
