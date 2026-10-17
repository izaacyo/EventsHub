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

/* core/modules/navigation/layouts/navigation.html.twig */
class __TwigTemplate_92ac81d40a75d0f4dded86b1a62fc171 extends Template
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
        $context["control_bar_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 21
        yield "
<div";
        // line 22
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["control_bar_attributes"] ?? null), "addClass", ["admin-toolbar-control-bar"], "method", false, false, true, 22), "setAttribute", ["data-drupal-admin-styles", ""], "method", false, false, true, 23), "html", null, true);
        // line 25
        yield ">
  <div class=\"admin-toolbar-control-bar__content\">
    ";
        // line 27
        yield from $this->load("navigation:toolbar-button", 27)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["data-drupal-selector" => "admin-toolbar-mobile-trigger", "aria-expanded" => "false", "aria-controls" => "admin-toolbar", "type" => "button"]), "icon" => ["icon_id" => "burger"], "text" => t("Expand sidebar"), "modifiers" => ["small-offset"], "extra_classes" => ["admin-toolbar-control-bar__burger"]]));
        // line 36
        yield "  </div>
</div>

<aside";
        // line 39
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["admin-toolbar"], "method", false, false, true, 39), "setAttribute", ["id", "admin-toolbar"], "method", false, false, true, 40), "setAttribute", ["data-drupal-admin-styles", true], "method", false, false, true, 41), "setAttribute", ["role", "presentation"], "method", false, false, true, 42), "html", null, true);
        // line 44
        yield ">
  ";
        // line 46
        yield "  <div class=\"admin-toolbar__displace-placeholder\"></div>

  ";
        // line 48
        $context["nav_id"] = ("admin-toolbar__scroll-wrapper-" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
        // line 49
        yield "  <nav class=\"admin-toolbar__scroll-wrapper\" aria-labelledby=\"";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["nav_id"] ?? null), "html", null, true);
        yield "\">
    <h2 id=\"";
        // line 50
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["nav_id"] ?? null), "html", null, true);
        yield "\" class=\"visually-hidden\">";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Administrative sidebar"));
        yield "</h2>
    ";
        // line 51
        $context["title_menu"] = \Drupal\Component\Utility\Html::getUniqueId("admin-toolbar-title");
        // line 52
        yield "    ";
        // line 53
        yield "    <div";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "content", [], "any", false, false, true, 53), "setAttribute", ["id", "menu-builder"], "method", false, false, true, 53), "addClass", ["admin-toolbar__content"], "method", false, false, true, 54), "html", null, true);
        // line 56
        yield ">
      ";
        // line 58
        yield "      <div class=\"admin-toolbar__header\">
        ";
        // line 59
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "hide_logo", [], "any", false, false, true, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "          <a class=\"admin-toolbar__logo\" href=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\">
            ";
            // line 61
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "logo_path", [], "any", false, false, true, 61))) {
                // line 62
                yield "              <img src=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "logo_path", [], "any", false, false, true, 62)), "html", null, true);
                yield "\" loading=\"eager\" width=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "logo_width", [], "any", true, true, true, 62)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "logo_width", [], "any", false, false, true, 62), 40)) : (40)), "html", null, true);
                yield "\" height=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "logo_height", [], "any", true, true, true, 62)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "logo_height", [], "any", false, false, true, 62), 40)) : (40)), "html", null, true);
                yield "\" role=\"presentation\" aria-hidden=\"true\" focusable=\"false\">
            ";
            } else {
                // line 64
                yield "              ";
                yield from $this->load("@navigation/logo.svg.twig", 64)->unwrap()->yield([]);
                // line 65
                yield "            ";
            }
            // line 66
            yield "            <span class=\"visually-hidden\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home page"));
            yield "</span>
          </a>
        ";
        }
        // line 69
        yield "        ";
        yield from $this->load("navigation:toolbar-button", 69)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["data-toolbar-back-control" => true, "tabindex" => "-1"]), "extra_classes" => ["admin-toolbar__back-button"], "icon" => ["icon_id" => "arrow-left"], "text" => t("Back")]));
        // line 75
        yield "        ";
        // line 76
        yield "        ";
        yield from $this->load("navigation:toolbar-button", 76)->unwrap()->yield(CoreExtension::toArray(["action" => t("Collapse sidebar"), "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-controls" => "admin-toolbar", "type" => "button"]), "extra_classes" => ["admin-toolbar__close-button"], "icon" => ["icon_id" => "cross"]]));
        // line 82
        yield "      </div>

      ";
        // line 84
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "content_top", [], "any", false, false, true, 84), "html", null, true);
        yield "
      ";
        // line 85
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, true, 85), "html", null, true);
        yield "
    </div>

    ";
        // line 88
        $context["title_menu_footer"] = \Drupal\Component\Utility\Html::getUniqueId("admin-toolbar-footer");
        // line 89
        yield "    <div";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "footer", [], "any", false, false, true, 89), "setAttribute", ["id", "menu-footer"], "method", false, false, true, 89), "addClass", ["admin-toolbar__footer"], "method", false, false, true, 90), "html", null, true);
        // line 92
        yield ">
      ";
        // line 93
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "footer", [], "any", false, false, true, 93), "html", null, true);
        yield "
      <button aria-controls=\"admin-toolbar\" class=\"admin-toolbar__expand-button\" type=\"button\">
        ";
        // line 95
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\IconsTwigExtension']->getIconRenderable("navigation", "chevron", ["class" => "admin-toolbar__expand-button-chevron", "size" => 16]), "html", null, true);
        yield "
        <span class=\"visually-hidden\" data-toolbar-text>";
        // line 96
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Collapse sidebar"));
        yield "</span>
      </button>
    </div>
  </nav>
</aside>
<div class=\"admin-toolbar-overlay\" admin-toolbar-trigger data-drupal-admin-styles></div>
<script>
  if (localStorage.getItem(\x27Drupal.navigation.sidebarExpanded\x27) !== \x27false\x27 && (window.matchMedia(\x27(min-width: 1024px)\x27).matches)) {
    document.documentElement.setAttribute(\x27data-admin-toolbar\x27, \x27expanded\x27);
  }
</script>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "region_attributes", "settings", "content"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/navigation/layouts/navigation.html.twig";
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
        return array (  169 => 96,  165 => 95,  160 => 93,  157 => 92,  154 => 89,  152 => 88,  146 => 85,  142 => 84,  138 => 82,  135 => 76,  133 => 75,  130 => 69,  123 => 66,  120 => 65,  117 => 64,  107 => 62,  105 => 61,  100 => 60,  98 => 59,  95 => 58,  92 => 56,  89 => 53,  87 => 52,  85 => 51,  79 => 50,  74 => 49,  72 => 48,  68 => 46,  65 => 44,  63 => 39,  58 => 36,  56 => 27,  52 => 25,  50 => 22,  47 => 21,  45 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/navigation/layouts/navigation.html.twig", "/var/www/html/web/core/modules/navigation/layouts/navigation.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 20, "include" => 27, "if" => 59];
        static $filters = ["escape" => 24, "t" => 30, "clean_unique_id" => 51, "default" => 62];
        static $functions = ["create_attribute" => 20, "random" => 48, "path" => 60, "file_url" => 62, "icon" => 95];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "include", 2 => "if"],
                [0 => "escape", 1 => "t", 2 => "clean_unique_id", 3 => "default"],
                [0 => "create_attribute", 1 => "random", 2 => "path", 3 => "file_url", 4 => "icon"],
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
