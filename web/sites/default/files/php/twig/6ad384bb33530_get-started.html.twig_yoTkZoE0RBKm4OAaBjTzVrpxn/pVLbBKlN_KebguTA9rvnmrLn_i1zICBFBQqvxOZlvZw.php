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

/* @olivero/includes/get-started.html.twig */
class __TwigTemplate_9f70779cebc0de663b6f14ecf6428f6c extends Template
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
        // line 13
        yield "
";
        // line 14
        $context["drupal_community"] = "https://www.drupal.org/community";
        // line 15
        $context["drupal_values"] = "https://www.drupal.org/about/values-and-principles";
        // line 16
        $context["drupal_user_guide"] = "https://www.drupal.org/docs/user_guide/en/index.html";
        // line 17
        $context["create_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.add_page");
        // line 18
        $context["drupal_extend"] = "https://www.drupal.org/docs/extending-drupal";
        // line 19
        $context["drupal_global_training_days"] = "https://groups.drupal.org/global-training-days";
        // line 20
        $context["drupal_events"] = "https://www.drupal.org/community/events";
        // line 21
        $context["drupal_slack"] = "https://www.drupal.org/slack";
        // line 22
        $context["drupal_chat"] = "https://www.drupal.org/drupalchat";
        // line 23
        $context["drupal_answers"] = "https://drupal.stackexchange.com/";
        // line 24
        $context["drupal_support"] = "https://www.drupal.org/support";
        // line 25
        yield "
<div class=\"text-content\">
  <p>";
        // line 27
        yield t("<em>You haven’t created any frontpage content yet.</em>", []);
        yield "</p>
  <h2>";
        // line 28
        yield t("Congratulations and welcome to the Drupal community.", []);
        yield "</h2>
  <p>";
        // line 29
        yield t("Drupal is an open source platform for building amazing digital experiences. It’s made, used, taught, documented, and marketed by the <a href=\"@drupal_community\">Drupal community</a>. Our community is made up of people from around the world with a shared set of <a href=\"@drupal_values\">values</a>, collaborating together in a respectful manner. As we like to say:", ["@drupal_community" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["drupal_community"] ?? null)), "@drupal_values" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["drupal_values"] ?? null)), ]);
        yield "</p>
  <blockquote>";
        // line 30
        yield t("Come for the code, stay for the community.", []);
        yield "</blockquote>
  <h2>";
        // line 31
        yield t("Get Started", []);
        yield "</h2>
  <p>";
        // line 32
        yield t("There are a few ways to get started with Drupal:", []);
        yield "</p>
  <ol>
    <li>";
        // line 34
        yield t("<a href=\"@drupal_user_guide\">User Guide:</a> Includes installing, administering, site building, and maintaining the content of a Drupal website.", ["@drupal_user_guide" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["drupal_user_guide"] ?? null)), ]);
        yield "</li>
    <li>";
        // line 35
        yield t("<a href=\"@create_content\">Create Content:</a> Want to get right to work? Start adding content. <strong>Note:</strong> the information on this page will go away once you add content to your site. Read on and bookmark resources of interest.", ["@create_content" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["create_content"] ?? null)), ]);
        yield "</li>
    <li>";
        // line 36
        yield t("<a href=\"@drupal_extend\">Extend Drupal:</a> Drupal’s core software can be extended and customized in remarkable ways. Install additional functionality and change the look of your site using addons contributed by our community.", ["@drupal_extend" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["drupal_extend"] ?? null)), ]);
        yield "</li>
  </ol>
  <h2>";
        // line 38
        yield t("Next Steps", []);
        yield "</h2>
  <p>";
        // line 39
        yield t("Bookmark these links to our active Drupal community groups and support resources.", []);
        yield "</p>
  <ul>
    <li>";
        // line 41
        yield t("<a href=\"@drupal_events\">Upcoming Events:</a> Learn and connect with others at conferences and events held around the world.", ["@drupal_events" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["drupal_events"] ?? null)), ]);
        yield "</li>
    <li>";
        // line 42
        yield t("<a href=\"@drupal_community\">Community Page:</a> List of key Drupal community groups with their own content.", ["@drupal_community" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["drupal_community"] ?? null)), ]);
        yield "</li>
    <li>";
        // line 43
        yield t("Get support and chat with the Drupal community on <a href=\"@drupal_slack\">Slack</a> or <a href=\"@drupal_chat\">DrupalChat</a>. When you’re looking for a solution to a problem, go to <a href=\"@drupal_support\">Drupal Support</a> or <a href=\"@drupal_answers\">Drupal Answers on Stack Exchange</a>.", ["@drupal_slack" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["drupal_slack"] ?? null)), "@drupal_chat" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["drupal_chat"] ?? null)), "@drupal_support" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["drupal_support"] ?? null)), "@drupal_answers" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["drupal_answers"] ?? null)), ]);
        yield "</li>
  </ul>
</div>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@olivero/includes/get-started.html.twig";
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
        return array (  129 => 43,  125 => 42,  121 => 41,  116 => 39,  112 => 38,  107 => 36,  103 => 35,  99 => 34,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  74 => 27,  70 => 25,  68 => 24,  66 => 23,  64 => 22,  62 => 21,  60 => 20,  58 => 19,  56 => 18,  54 => 17,  52 => 16,  50 => 15,  48 => 14,  45 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@olivero/includes/get-started.html.twig", "/var/www/html/web/core/themes/olivero/templates/includes/get-started.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 14, "trans" => 27];
        static $filters = ["escape" => 29];
        static $functions = ["path" => 17];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "trans"],
                [0 => "escape"],
                [0 => "path"],
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
