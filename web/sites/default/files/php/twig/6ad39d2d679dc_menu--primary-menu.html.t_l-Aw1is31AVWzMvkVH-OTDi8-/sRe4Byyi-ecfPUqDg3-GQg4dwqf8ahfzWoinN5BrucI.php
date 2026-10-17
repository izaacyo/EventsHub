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

/* core/themes/olivero/templates/navigation/menu--primary-menu.html.twig */
class __TwigTemplate_77c3bd360d99c1e150e582ff5d789430 extends Template
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
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/navigation-primary"), "html", null, true);
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
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(32))->call("menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, "primary-menu-item-"], $context, 32, $this->source));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "menu_level", "loop"]);        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "menu_links" => new \Twig\TwigMacro("menu_links", function ($items = null, $attributes = null, $menu_level = null, $aria_id = null, ...$varargs): string|Markup {
                // line 34
                $macros = $this->macros;
                $context = [
                    "items" => $items,
                    "attributes" => $attributes,
                    "menu_level" => $menu_level,
                    "aria_id" => $aria_id,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                    // line 35
                    yield "  ";
                    $context["primary_nav_level"] = ("primary-nav__menu--level-" . (($context["menu_level"] ?? null) + 1));
                    // line 36
                    yield "  ";
                    $context["drupal_selector_primary_nav_level"] = (((($context["menu_level"] ?? null) <= 1)) ? (("primary-nav-menu--level-" . (($context["menu_level"] ?? null) + 1))) : (false));
                    // line 37
                    yield "  ";
                    $context["is_top_level_menu"] = (($context["menu_level"] ?? null) == 0);
                    // line 38
                    yield "  ";
                    $macros["menus"] = $this->getMacroNamespace();
                    // line 39
                    yield "  ";
                    if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 40
                        yield "
    ";
                        // line 45
                        yield "    ";
                        if ((($context["menu_level"] ?? null) == 1)) {
                            // line 46
                            yield "      <span data-drupal-selector=\"primary-nav-menu-🥕\" class=\"primary-nav__menu-🥕\"></span>
    ";
                        }
                        // line 48
                        yield "
    <ul ";
                        // line 49
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["primary-nav__menu", ($context["primary_nav_level"] ?? null)], "method", false, false, true, 49), "setAttribute", ["data-drupal-selector", ($context["drupal_selector_primary_nav_level"] ?? null)], "method", false, false, true, 49), "html", null, true);
                        yield ">
      ";
                        // line 50
                        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["primary_nav_level"] ?? null)], "method", false, false, true, 50);
                        // line 51
                        yield "      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                        $context['loop'] = [
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        ];
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 52
                            yield "
        ";
                            // line 53
                            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 53), "isRouted", [], "any", false, false, true, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 53), "routeName", [], "any", false, false, true, 53) == "<nolink>"))) {
                                // line 54
                                yield "          ";
                                $context["menu_item_type"] = "nolink";
                                // line 55
                                yield "        ";
                            } elseif (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), "isRouted", [], "any", false, false, true, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), "routeName", [], "any", false, false, true, 55) == "<button>"))) {
                                // line 56
                                yield "          ";
                                $context["menu_item_type"] = "button";
                                // line 57
                                yield "        ";
                            } else {
                                // line 58
                                yield "          ";
                                $context["menu_item_type"] = "link";
                                // line 59
                                yield "        ";
                            }
                            // line 60
                            yield "
        ";
                            // line 61
                            $context["item_classes"] = ["primary-nav__menu-item", ("primary-nav__menu-item--" .                             // line 63
($context["menu_item_type"] ?? null)), ("primary-nav__menu-item--level-" . (                            // line 64
($context["menu_level"] ?? null) + 1)), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 65
$context["item"], "in_active_trail", [], "any", false, false, true, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("primary-nav__menu-item--active-trail") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 66
$context["item"], "below", [], "any", false, false, true, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("primary-nav__menu-item--has-children") : (""))];
                            // line 69
                            yield "
        ";
                            // line 70
                            $context["link_classes"] = ["primary-nav__menu-link", ("primary-nav__menu-link--" .                             // line 72
($context["menu_item_type"] ?? null)), ("primary-nav__menu-link--level-" . (                            // line 73
($context["menu_level"] ?? null) + 1)), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 74
$context["item"], "in_active_trail", [], "any", false, false, true, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("primary-nav__menu-link--active-trail") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                             // line 75
$context["item"], "below", [], "any", false, false, true, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("primary-nav__menu-link--has-children") : (""))];
                            // line 78
                            yield "
        <li";
                            // line 79
                            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 79), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 79), "setAttribute", ["data-drupal-selector", ((((($tmp = ($context["is_top_level_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("primary-nav-menu-item-has-children") : (false))], "method", false, false, true, 79), "html", null, true);
                            yield ">
          ";
                            // line 85
                            yield "          ";
                            $context["aria_id"] = \Drupal\Component\Utility\Html::getId((($context["aria_id"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 85)));
                            // line 86
                            yield "          ";
                            $context["link_title"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
                                // line 87
                                yield "            <span class=\"primary-nav__menu-link-inner primary-nav__menu-link-inner--level-";
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? null) + 1), "html", null, true);
                                yield "\">";
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 87), "html", null, true);
                                yield "</span>
          ";
                                return; yield;
                            })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
                            // line 89
                            yield "
          ";
                            // line 90
                            if (((($context["menu_item_type"] ?? null) == "link") || (($context["menu_item_type"] ?? null) == "nolink"))) {
                                // line 91
                                yield "            ";
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink((((($context["menu_item_type"] ?? null) == "link")) ? (($context["link_title"] ?? null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 91))), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 91), ["class" =>                                 // line 92
($context["link_classes"] ?? null), "data-drupal-selector" => (((($tmp =                                 // line 93
($context["is_top_level_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("primary-nav-menu-link-has-children") : (false))]), "html", null, true);
                                // line 95
                                yield "

            ";
                                // line 97
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 98
                                    yield "              ";
                                    // line 103
                                    yield "              ";
                                    if ((($tmp = ($context["is_top_level_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 104
                                        yield "                ";
                                        $context["toggle_button_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => "primary-nav__button-toggle", "data-drupal-selector" => "primary-nav-submenu-toggle-button", "aria-controls" =>                                         // line 107
($context["aria_id"] ?? null), "aria-expanded" => "false", "aria-hidden" => "true", "tabindex" => "-1"]);
                                        // line 112
                                        yield "
                <button";
                                        // line 113
                                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["toggle_button_attributes"] ?? null), "html", null, true);
                                        yield ">
                  <span class=\"visually-hidden\">";
                                        // line 114
                                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 114)]));
                                        yield "</span>
                  <span class=\"icon--menu-toggle\"></span>
                </button>
              ";
                                    }
                                    // line 118
                                    yield "
              ";
                                    // line 119
                                    $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ($context["aria_id"] ?? null)], "method", false, false, true, 119);
                                    // line 120
                                    yield "              ";
                                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(120))->call("menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 120), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["aria_id"] ?? null)], $context, 120, $this->source));
                                    yield "
            ";
                                }
                                // line 122
                                yield "
          ";
                            } elseif ((                            // line 123
($context["menu_item_type"] ?? null) == "button")) {
                                // line 124
                                yield "
            ";
                                // line 125
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(($context["link_title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 125), ["class" =>                                 // line 126
($context["link_classes"] ?? null), "aria-controls" => ((((($tmp =                                 // line 127
($context["is_top_level_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? (($context["aria_id"] ?? null)) : (false)), "aria-expanded" => ((((($tmp =                                 // line 128
($context["is_top_level_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("false") : (false)), "data-drupal-selector" => ((((($tmp =                                 // line 129
($context["is_top_level_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("primary-nav-submenu-toggle-button") : (false))]), "html", null, true);
                                // line 130
                                yield "

            ";
                                // line 132
                                $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ($context["aria_id"] ?? null)], "method", false, false, true, 132);
                                // line 133
                                yield "            ";
                                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($macros["menus"] ?? $this->throwUninitializedMacroNamespace(133))->call("menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 133), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), ($context["aria_id"] ?? null)], $context, 133, $this->source));
                                yield "
          ";
                            }
                            // line 135
                            yield "        </li>
      ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 137
                        yield "    </ul>
  ";
                    }
                    return; yield;
                })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["items" => false, "attributes" => false, "menu_level" => false, "aria_id" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/olivero/templates/navigation/menu--primary-menu.html.twig";
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
        return array (  290 => 137,  274 => 135,  268 => 133,  266 => 132,  262 => 130,  260 => 129,  259 => 128,  258 => 127,  257 => 126,  256 => 125,  253 => 124,  251 => 123,  248 => 122,  242 => 120,  240 => 119,  237 => 118,  230 => 114,  226 => 113,  223 => 112,  221 => 107,  219 => 104,  216 => 103,  214 => 98,  212 => 97,  208 => 95,  206 => 93,  205 => 92,  203 => 91,  201 => 90,  198 => 89,  189 => 87,  186 => 86,  183 => 85,  179 => 79,  176 => 78,  174 => 75,  173 => 74,  172 => 73,  171 => 72,  170 => 70,  167 => 69,  165 => 66,  164 => 65,  163 => 64,  162 => 63,  161 => 61,  158 => 60,  155 => 59,  152 => 58,  149 => 57,  146 => 56,  143 => 55,  140 => 54,  138 => 53,  135 => 52,  117 => 51,  115 => 50,  111 => 49,  108 => 48,  104 => 46,  101 => 45,  98 => 40,  95 => 39,  92 => 38,  89 => 37,  86 => 36,  83 => 35,  70 => 34,  57 => 32,  55 => 31,  52 => 26,  50 => 25,  45 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/olivero/templates/navigation/menu--primary-menu.html.twig", "/var/www/html/web/core/themes/olivero/templates/navigation/menu--primary-menu.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 25, "set" => 31, "macro" => 34, "if" => 39, "for" => 51];
        static $filters = ["escape" => 23, "clean_id" => 85, "t" => 114];
        static $functions = ["attach_library" => 23, "link" => 91, "create_attribute" => 104];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "import", 1 => "set", 2 => "macro", 3 => "if", 4 => "for"],
                [0 => "escape", 1 => "clean_id", 2 => "t"],
                [0 => "attach_library", 1 => "link", 2 => "create_attribute"],
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
