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

/* mod_order_settings.html.twig */
class __TwigTemplate_f11e885d4947aeec3ad8eb12ea1cee37 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_order_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_order_settings.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Orders settings"), "html", null, true);
    }

    // line 9
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <ol class=\"breadcrumb\">
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
        echo twig_escape_filter($this->env, __trans("Orders settings"), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "<div class=\"card\">
    <div class=\"card-body\">
        <h3>";
        // line 28
        echo twig_escape_filter($this->env, __trans("Orders settings"), "html", null, true);
        echo "</h3>

        ";
        // line 30
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_order"]], "method", false, false, false, 30);
        // line 31
        echo "        <form method=\"post\" action=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Settings updated"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
            <div class=\"form-group mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 34
        echo twig_escape_filter($this->env, __trans("Expiration date"), "html", null, true);
        echo "</label>
                <div class=\"col\">
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" id=\"radioFromExpirationDay\" type=\"radio\" name=\"order_renewal_logic\" value=\"from_expiration_date\"";
        // line 37
        if (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "order_renewal_logic", [], "any", false, false, false, 37) == "from_expiration_date") ||  !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "order_renewal_logic", [], "any", false, false, false, 37))) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioFromExpirationDay\">";
        // line 38
        echo twig_escape_filter($this->env, __trans("Next date is counted from last order expiration date"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" id=\"radioFromToday\" type=\"radio\" name=\"order_renewal_logic\" value=\"from_today\"";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "order_renewal_logic", [], "any", false, false, false, 41) == "from_today")) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioFromToday\">";
        // line 42
        echo twig_escape_filter($this->env, __trans("Next date is counted from renewal (payment) date"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" id=\"radioFromGreater\" type=\"radio\" name=\"order_renewal_logic\" value=\"from_greater\"";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "order_renewal_logic", [], "any", false, false, false, 45) == "from_greater")) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioFromGreater\">";
        // line 46
        echo twig_escape_filter($this->env, __trans("Next date is counted from last expiration date or renewal date whichever is greater"), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </div>
            <div class=\"form-group mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 51
        echo twig_escape_filter($this->env, __trans("Show addon orders in orders list"), "html", null, true);
        echo "</label>
                <div class=\"col\">
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioShowAddonsYes\" type=\"radio\" name=\"show_addons\" value=\"1\"";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "show_addons", [], "any", false, false, false, 54)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioShowAddonsYes\">";
        // line 55
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioShowAddonsNo\" type=\"radio\" name=\"show_addons\" value=\"0\"";
        // line 58
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "show_addons", [], "any", false, false, false, 58)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioShowAddonsNo\">";
        // line 59
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                    </div>
                    <small class=\"form-hint\">";
        // line 61
        echo twig_escape_filter($this->env, __trans("If this is disabled they are shown in master order view \"Addons\" tab."), "html", null, true);
        echo "</small>
                </div>
            </div>
            <div class=\"form-group mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 65
        echo twig_escape_filter($this->env, __trans("Auto suspend reason"), "html", null, true);
        echo "</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"batch_suspend_reason\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "batch_suspend_reason", [], "any", false, false, false, 67), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"form-group mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 71
        echo twig_escape_filter($this->env, __trans("Auto Cancellation"), "html", null, true);
        echo "</label>
                <div class=\"col\">
                    <div class=\"input-group\">
                        <select class=\"form-select\" name=\"batch_cancel_suspended\">
                            <option value=\"1\" ";
        // line 75
        echo ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "batch_cancel_suspended", [], "any", false, false, false, 75)) ? ("selected") : (""));
        echo ">";
        echo twig_escape_filter($this->env, __trans("Cancel Suspended Orders"), "html", null, true);
        echo "</option>
                            <option value=\"0\" ";
        // line 76
        echo ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "batch_cancel_suspended", [], "any", false, false, false, 76)) ? ("") : ("selected"));
        echo ">";
        echo twig_escape_filter($this->env, __trans("Do Not Cancel Suspended Orders"), "html", null, true);
        echo "</option>
                        </select>
                        <input class=\"form-control\" type=\"text\" name=\"batch_cancel_suspended_after_days\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "batch_cancel_suspended_after_days", [], "any", false, false, false, 78), "html", null, true);
        echo "\" placeholder=\"7\">
                        <span class=\"input-group-text\">";
        // line 79
        echo twig_escape_filter($this->env, __trans("days after order suspension with reason"), "html", null, true);
        echo "</span>
                        <input class=\"form-control\" type=\"text\" name=\"batch_cancel_suspended_reason\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "batch_cancel_suspended_reason", [], "any", false, false, false, 80), "html", null, true);
        echo "\">
                    </div>
                </div>
            </div>
            <div class=\"form-group mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 85
        echo twig_escape_filter($this->env, __trans("Suspension reasons"), "html", null, true);
        echo "</label>
                <div class=\"col\">
                    <textarea class=\"form-control\" name=\"suspend_reason_list\" rows=\"2\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "suspend_reason_list", [], "any", false, false, false, 87), "html", null, true);
        echo "</textarea>
                </div>
            </div>

            <input type=\"hidden\" name=\"ext\" value=\"mod_order\">
            <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 92
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
        return "mod_order_settings.html.twig";
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
        return array (  259 => 92,  251 => 87,  246 => 85,  238 => 80,  234 => 79,  230 => 78,  223 => 76,  217 => 75,  210 => 71,  203 => 67,  198 => 65,  191 => 61,  186 => 59,  180 => 58,  174 => 55,  168 => 54,  162 => 51,  154 => 46,  148 => 45,  142 => 42,  136 => 41,  130 => 38,  124 => 37,  118 => 34,  113 => 32,  106 => 31,  104 => 30,  99 => 28,  95 => 26,  91 => 25,  84 => 21,  77 => 19,  67 => 12,  63 => 10,  59 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_order_settings.html.twig", "/var/www/modules/Order/html_admin/mod_order_settings.html.twig");
    }
}
