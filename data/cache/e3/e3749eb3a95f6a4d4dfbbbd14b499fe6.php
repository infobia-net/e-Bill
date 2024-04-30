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

/* mod_invoice_settings.html.twig */
class __TwigTemplate_1a2e10170865f324582c8ed1579e35b7 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_invoice_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_invoice_settings.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Invoice settings"), "html", null, true);
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
                    <use xlink:href=\"#home\"/>
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
        echo twig_escape_filter($this->env, __trans("Invoice settings"), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 28
        echo twig_escape_filter($this->env, __trans("Invoice settings"), "html", null, true);
        echo "</h3>
        </div>
        <form method=\"post\" action=\"";
        // line 30
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/system/update_params");
        echo "\" class=\"api-form\"
              data-api-msg=\"Settings updated\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
            <div class=\"card-body\">
                ";
        // line 34
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_get_params", [], "any", false, false, false, 34);
        // line 35
        echo "                <div class=\"mt-3 mb-3 row\">
                    <label class=\"col-md-3 form-label\">";
        // line 36
        echo twig_escape_filter($this->env, __trans("Number of days to generate new invoice before order expiration"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"text\" name=\"invoice_issue_days_before_expire\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_issue_days_before_expire", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\">";
        // line 42
        echo twig_escape_filter($this->env, __trans("Invoice due days"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"text\" name=\"invoice_due_days\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_due_days", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 form-label\">";
        // line 48
        echo twig_escape_filter($this->env, __trans("Auto invoice approval"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6\">
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" id=\"radioInvoiceAutoApprovalYes\" type=\"radio\" name=\"invoice_auto_approval\" value=\"1\"";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_auto_approval", [], "any", false, false, false, 51) == "1")) {
            echo " checked";
        }
        echo ">
                            <label class=\"form-check-label\" for=\"radioInvoiceAutoApprovalYes\">";
        // line 52
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" id=\"radioInvoiceAutoApprovalNo\" type=\"radio\" name=\"invoice_auto_approval\" value=\"0\"";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_auto_approval", [], "any", false, false, false, 55) == "0")) {
            echo " checked";
        }
        echo ">
                            <label class=\"form-check-label\" for=\"radioInvoiceAutoApprovalNo\">";
        // line 56
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"card-body\">
                <h3 class=\"card-title\">";
        // line 62
        echo twig_escape_filter($this->env, __trans("Invoicing / Sequential Invoice Numbering"), "html", null, true);
        echo "</h3>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\">";
        // line 64
        echo twig_escape_filter($this->env, __trans("Remove unpaid invoices after days"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"text\" name=\"remove_after_days\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "remove_after_days", [], "any", true, true, false, 66)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "remove_after_days", [], "any", false, false, false, 66), 0)) : (0)), "html", null, true);
        echo "\">
                        <small class=\"form-hint\">";
        // line 67
        echo twig_escape_filter($this->env, __trans("Set 0 to keep invoices forever."), "html", null, true);
        echo "</small>
                    </div>
                </div>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\">";
        // line 71
        echo twig_escape_filter($this->env, __trans("Invoice prefix/series"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"text\" name=\"invoice_series\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_series", [], "any", false, false, false, 73), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\">";
        // line 77
        echo twig_escape_filter($this->env, __trans("Paid invoice prefix/series"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"text\" name=\"invoice_series_paid\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_series_paid", [], "any", false, false, false, 79), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\">";
        // line 83
        echo twig_escape_filter($this->env, __trans("Next paid invoice number"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"text\" name=\"invoice_starting_number\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_starting_number", [], "any", false, false, false, 85), "html", null, true);
        echo "\">
                    </div>
                </div>
            </div>
            <div class=\"card-body\">
                <h3 class=\"card-title\">";
        // line 90
        echo twig_escape_filter($this->env, __trans("Document settings"), "html", null, true);
        echo "</h3>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\">";
        // line 92
        echo twig_escape_filter($this->env, __trans("Document format"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" id=\"radioLetter\" type=\"radio\" name=\"invoice_document_format\" value=\"Letter\"";
        // line 95
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_document_format", [], "any", false, false, false, 95) == "letter")) {
            echo " checked";
        }
        echo ">
                            <label class=\"form-check-label\" for=\"radioLetter\">";
        // line 96
        echo twig_escape_filter($this->env, __trans("Letter"), "html", null, true);
        echo "</label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" id=\"radioA4\" type=\"radio\" name=\"invoice_document_format\" value=\"A4\"";
        // line 99
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_document_format", [], "any", false, false, false, 99) == "A4")) {
            echo " checked";
        }
        echo ">
                            <label class=\"form-check-label\" for=\"radioA4\">";
        // line 100
        echo twig_escape_filter($this->env, __trans("A4"), "html", null, true);
        echo "</label>
                        </div>
                    </div>
                </div>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\">";
        // line 105
        echo twig_escape_filter($this->env, __trans("Allow access to invoices without authentication"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" id=\"radioYes\" type=\"radio\" name=\"invoice_accessible_from_hash\" value=\"1\"";
        // line 108
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_accessible_from_hash", [], "any", false, false, false, 108) == "1")) {
            echo " checked";
        }
        echo ">
                            <label class=\"form-check-label\" for=\"radioYes\">";
        // line 109
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" id=\"radioNo\" type=\"radio\" name=\"invoice_accessible_from_hash\" value=\"0\"";
        // line 112
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_accessible_from_hash", [], "any", false, false, false, 112) == "0")) {
            echo " checked";
        }
        echo ">
                            <label class=\"form-check-label\" for=\"radioNo\">";
        // line 113
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                        </div>
                    </div>
                    <p> If enabled, invoices can be accessed by anyone who knows the invoice hash, although it's quite a long hash and would not be brute-forceable.</p>
                </div>
            </div>
            <div class=\"card-body\">
                <h3 class=\"card-title\">";
        // line 120
        echo twig_escape_filter($this->env, __trans("Refunds settings"), "html", null, true);
        echo "</h3>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\">";
        // line 122
        echo twig_escape_filter($this->env, __trans("Refunds logic"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" id=\"radioNegativeInvoice\" type=\"radio\" name=\"invoice_refund_logic\" value=\"negative_invoice\"";
        // line 125
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_refund_logic", [], "any", false, false, false, 125) == "1")) {
            echo " checked";
        }
        echo ">
                            <label class=\"form-check-label\" for=\"radioNegativeInvoice\">";
        // line 126
        echo twig_escape_filter($this->env, __trans("Negative invoice. Generate refund invoice continuing paid invoices numbering"), "html", null, true);
        echo "</label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" id=\"radioCreditNote\" type=\"radio\" name=\"invoice_refund_logic\" value=\"credit_note\"";
        // line 129
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_refund_logic", [], "any", false, false, false, 129) == "credit_note")) {
            echo " checked";
        }
        echo ">
                            <label class=\"form-check-label\" for=\"radioCreditNote\">";
        // line 130
        echo twig_escape_filter($this->env, __trans("Credit note. Generate credit note with unique numbering"), "html", null, true);
        echo "</label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" id=\"radioInvoiceRefundLogic\" type=\"radio\" name=\"invoice_refund_logic\" value=\"manual\"";
        // line 133
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_refund_logic", [], "any", false, false, false, 133) == "manual")) {
            echo " checked";
        }
        echo ">
                            <label class=\"form-check-label\" for=\"radioInvoiceRefundLogic\">";
        // line 134
        echo twig_escape_filter($this->env, __trans("Manual. No actions performed"), "html", null, true);
        echo "</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"card-body\">
                <h3 class=\"card-title\">";
        // line 140
        echo twig_escape_filter($this->env, __trans("Add funds settings"), "html", null, true);
        echo "</h3>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\">";
        // line 142
        echo twig_escape_filter($this->env, __trans("Minimum amount for add funds invoice"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"text\" name=\"funds_min_amount\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "funds_min_amount", [], "any", false, false, false, 144), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Unlimited"), "html", null, true);
        echo "\">
                    </div>
                </div>

                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\">";
        // line 149
        echo twig_escape_filter($this->env, __trans("Maximum amount for add funds invoice"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"text\" name=\"funds_max_amount\" value=\"";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "funds_max_amount", [], "any", false, false, false, 151), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Unlimited"), "html", null, true);
        echo "\">
                    </div>
                </div>
            </div>
            <div class=\"card-footer text-end\">
                <button class=\"btn btn-primary\" type=\"submit\">";
        // line 156
        echo twig_escape_filter($this->env, __trans("Update settings"), "html", null, true);
        echo "</button>
            </div>
        </form>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_invoice_settings.html.twig";
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
        return array (  390 => 156,  380 => 151,  375 => 149,  365 => 144,  360 => 142,  355 => 140,  346 => 134,  340 => 133,  334 => 130,  328 => 129,  322 => 126,  316 => 125,  310 => 122,  305 => 120,  295 => 113,  289 => 112,  283 => 109,  277 => 108,  271 => 105,  263 => 100,  257 => 99,  251 => 96,  245 => 95,  239 => 92,  234 => 90,  226 => 85,  221 => 83,  214 => 79,  209 => 77,  202 => 73,  197 => 71,  190 => 67,  186 => 66,  181 => 64,  176 => 62,  167 => 56,  161 => 55,  155 => 52,  149 => 51,  143 => 48,  136 => 44,  131 => 42,  124 => 38,  119 => 36,  116 => 35,  114 => 34,  109 => 32,  104 => 30,  99 => 28,  95 => 26,  91 => 25,  84 => 21,  77 => 19,  67 => 12,  63 => 10,  59 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_invoice_settings.html.twig", "/var/www/modules/Invoice/html_admin/mod_invoice_settings.html.twig");
    }
}
