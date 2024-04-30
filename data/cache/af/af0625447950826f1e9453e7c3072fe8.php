<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mod_activity_settings.html.twig */
class __TwigTemplate_9dc720839e9cc12f24c75582a5723c33 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_activity_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_activity_settings.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Activity settings"), "html", null, true);
    }

    // line 9
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <ul class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 12
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#home\" />
                </svg>
            </a>
        </li>
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 19
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 21
        echo twig_escape_filter($this->env, __trans("Activity settings"), "html", null, true);
        echo "</li>
    </ul>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_activity"]], "method", false, false, false, 26);
        // line 27
        echo "<div class=\"card\">
  <div class=\"card-header\">
        <h2>";
        // line 29
        echo twig_escape_filter($this->env, __trans("Activity settings"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"card-body\">
        <form method=\"post\" action=\"";
        // line 32
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Configuration updated"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"ext\" value=\"mod_activity\">
            <div class=\"mb-3 row\">
                <h3>";
        // line 36
        echo twig_escape_filter($this->env, __trans("Activity log retention"), "html", null, true);
        echo "</h3>
                <div class=\"form-floating\">
                    <input class=\"form-control\" id=\"max_age\" name=\"max_age\" type=\"number\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "max_age", [], "any", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "max_age", [], "any", false, false, false, 38), "90")) : ("90")), "html", null, true);
        echo "\">
                    <label for=\"max_age\">";
        // line 39
        echo twig_escape_filter($this->env, __trans("Number of days"), "html", null, true);
        echo "</label>
                </div>
                <span class=\"text-muted\">";
        // line 41
        echo twig_escape_filter($this->env, __trans("FOSSBilling will automatically remove activity logs that are older than the configured number of days. Set to 0 to disable this behavior"), "html", null, true);
        echo "</span>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 43
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "</button>
        </form>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_activity_settings.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  138 => 43,  133 => 41,  128 => 39,  124 => 38,  119 => 36,  113 => 33,  107 => 32,  101 => 29,  97 => 27,  95 => 26,  91 => 25,  84 => 21,  77 => 19,  67 => 12,  63 => 10,  59 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_activity_settings.html.twig", "/var/www/modules/Activity/html_admin/mod_activity_settings.html.twig");
    }
}
