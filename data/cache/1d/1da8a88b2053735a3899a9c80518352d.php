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

/* mod_invoice_gateway.html.twig */
class __TwigTemplate_e8bb3fd104edf6b60f474b2b8c109fb6 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_invoice_gateway.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_invoice_gateway.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Gateway"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice/gateways");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Payment gateways"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "title", [], "any", false, false, false, 21), "html", null, true);
        echo "</li>
    </ul>
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
        echo twig_escape_filter($this->env, __trans("Payment gateway configuration"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "title", [], "any", false, false, false, 28), "html", null, true);
        echo "</h3>
        <h5>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "title", [], "any", false, false, false, 29), "html", null, true);
        echo "</h5>
        ";
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "description", [], "any", false, false, false, 30);
        echo "

        <form method=\"post\" action=\"";
        // line 32
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/gateway_update");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Gateway updated"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 35
        echo twig_escape_filter($this->env, __trans("Payment gateway title"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "title", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
                </div>
            </div>

            ";
        // line 42
        echo "            ";
        echo twig_call_macro($macros["mf"], "macro_build_form", [twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "form", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "config", [], "any", false, false, false, 42)], 42, $context, $this->getSourceContext());
        echo "

            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 45
        echo twig_escape_filter($this->env, __trans("Select which currencies can accept this payment gateway (Select none to allow all currencies)"), "html", null, true);
        echo "</label>
                <div class=\"col\">
                    ";
        // line 47
        $context["currencies"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "currency_get_pairs", [], "any", false, false, false, 47);
        // line 48
        echo "                    <select class=\"form-select\" name=\"accepted_currencies[]\" multiple=\"multiple\" size=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["currencies"] ?? null)), "html", null, true);
        echo "\">
                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["currency"]) {
            // line 50
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"";
            if (twig_in_filter($context["id"], twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "accepted_currencies", [], "any", false, false, false, 50))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["currency"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    </select>
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 56
        echo twig_escape_filter($this->env, __trans("Enabled"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioEnabledYes\" type=\"radio\" name=\"enabled\" value=\"1\"";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "enabled", [], "any", false, false, false, 59)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioEnabledYes\">";
        // line 60
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioEnabledNo\" type=\"radio\" name=\"enabled\" value=\"0\"";
        // line 63
        if ( !twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "enabled", [], "any", false, false, false, 63)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioEnabledNo\">";
        // line 64
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </div>

            ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "supports_one_time_payments", [], "any", false, false, false, 69)) {
            // line 70
            echo "            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
            // line 71
            echo twig_escape_filter($this->env, __trans("Allow one time payments"), "html", null, true);
            echo ":</label>
                <div class=\"col\">
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioAllowSingleYes\" type=\"radio\" name=\"allow_single\" value=\"1\"";
            // line 74
            if (twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "allow_single", [], "any", false, false, false, 74)) {
                echo " checked";
            }
            echo ">
                        <label class=\"form-check-label\" for=\"radioAllowSingleYes\">";
            // line 75
            echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
            echo "</label>
                    </div>
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioAllowSingleNo\" type=\"radio\" name=\"allow_single\" value=\"0\"";
            // line 78
            if ( !twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "allow_single", [], "any", false, false, false, 78)) {
                echo " checked";
            }
            echo ">
                        <label class=\"form-check-label\" for=\"radioAllowSingleNo\">";
            // line 79
            echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
            echo "</label>
                    </div>
                </div>
            </div>
            ";
        } else {
            // line 84
            echo "            <input type=\"hidden\" name=\"allow_single\" value=\"0\">
            ";
        }
        // line 86
        echo "
            ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "supports_subscriptions", [], "any", false, false, false, 87)) {
            // line 88
            echo "            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
            // line 89
            echo twig_escape_filter($this->env, __trans("Allow subscription payments"), "html", null, true);
            echo ":</label>
                <div class=\"col\">
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioAllowRecurrentYes\" type=\"radio\" name=\"allow_recurrent\" value=\"1\"";
            // line 92
            if (twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "allow_recurrent", [], "any", false, false, false, 92)) {
                echo " checked";
            }
            echo ">
                        <label class=\"form-check-label\" for=\"radioAllowRecurrentYes\">";
            // line 93
            echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
            echo "</label>
                    </div>
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioAllowRecurrentNo\" type=\"radio\" name=\"allow_recurrent\" value=\"0\"";
            // line 96
            if ( !twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "allow_recurrent", [], "any", false, false, false, 96)) {
                echo " checked";
            }
            echo ">
                        <label class=\"form-check-label\" for=\"radioAllowRecurrentNo\">";
            // line 97
            echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
            echo "</label>
                    </div>
                </div>
            </div>
            ";
        } else {
            // line 102
            echo "            <input type=\"hidden\" name=\"allow_recurrent\" value=\"0\">
            ";
        }
        // line 104
        echo "
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 106
        echo twig_escape_filter($this->env, __trans("Enable test mode"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioTestModeYes\" type=\"radio\" name=\"test_mode\" value=\"1\"";
        // line 109
        if (twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "test_mode", [], "any", false, false, false, 109)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioTestModeYes\">";
        // line 110
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioTestModeNo\" type=\"radio\" name=\"test_mode\" value=\"0\"";
        // line 113
        if ( !twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "test_mode", [], "any", false, false, false, 113)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioTestModeNo\">";
        // line 114
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </div>

            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 120
        echo twig_escape_filter($this->env, __trans("IPN Callback URL"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" value=\"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "callback", [], "any", false, false, false, 122), "html", null, true);
        echo "\" readonly=\"readonly\">
                </div>
            </div>

            <input type=\"hidden\" name=\"id\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "id", [], "any", false, false, false, 126), "html", null, true);
        echo "\">
            <input type=\"submit\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
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
        return "mod_invoice_gateway.html.twig";
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
        return array (  353 => 127,  349 => 126,  342 => 122,  337 => 120,  328 => 114,  322 => 113,  316 => 110,  310 => 109,  304 => 106,  300 => 104,  296 => 102,  288 => 97,  282 => 96,  276 => 93,  270 => 92,  264 => 89,  261 => 88,  259 => 87,  256 => 86,  252 => 84,  244 => 79,  238 => 78,  232 => 75,  226 => 74,  220 => 71,  217 => 70,  215 => 69,  207 => 64,  201 => 63,  195 => 60,  189 => 59,  183 => 56,  177 => 52,  162 => 50,  158 => 49,  153 => 48,  151 => 47,  146 => 45,  139 => 42,  132 => 37,  127 => 35,  122 => 33,  116 => 32,  111 => 30,  107 => 29,  101 => 28,  97 => 26,  93 => 25,  86 => 21,  79 => 19,  69 => 12,  65 => 10,  61 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_invoice_gateway.html.twig", "/var/www/modules/Invoice/html_admin/mod_invoice_gateway.html.twig");
    }
}
