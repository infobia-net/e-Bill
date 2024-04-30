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

/* mod_invoice_invoice.html.twig */
class __TwigTemplate_ec6387ac6d857527a8a1ab342fae691d extends Template
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
            'sidebar2' => [$this, 'block_sidebar2'],
            'head' => [$this, 'block_head'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_invoice_invoice.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_invoice_invoice.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "invoice";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Invoice"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "serie", [], "any", false, false, false, 5), "html", null, true);
        echo twig_escape_filter($this->env, twig_sprintf("%05s", twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "nr", [], "any", false, false, false, 5)), "html", null, true);
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
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "serie", [], "any", false, false, false, 21), "html", null, true);
        echo twig_escape_filter($this->env, twig_sprintf("%05s", twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "nr", [], "any", false, false, false, 21)), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "<div class=\"card mb-3\">
    <div class=\"card-header\">
        <h5 class=\"mb-0\">";
        // line 28
        echo twig_escape_filter($this->env, __trans("Invoice"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 28), "html", null, true);
        echo "</h5>
    </div>

    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-info\" data-bs-toggle=\"tab\">";
        // line 33
        echo twig_escape_filter($this->env, __trans("Details"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-manage\" data-bs-toggle=\"tab\">";
        // line 36
        echo twig_escape_filter($this->env, __trans("Manage"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-texts\" data-bs-toggle=\"tab\">";
        // line 39
        echo twig_escape_filter($this->env, __trans("Texts"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-buyer-credentials\" data-bs-toggle=\"tab\">";
        // line 42
        echo twig_escape_filter($this->env, __trans("Client credentials"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-seller-credentials\" data-bs-toggle=\"tab\">";
        // line 45
        echo twig_escape_filter($this->env, __trans("Company credentials"), "html", null, true);
        echo "</a>
        </li>
    </ul>

    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-info\" role=\"tabpanel\">
            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <tbody>
                    <tr>
                        <td class=\"w-50 text-end\">";
        // line 54
        echo twig_escape_filter($this->env, __trans("ID"), "html", null, true);
        echo ":</td>
                        <td>#";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"text-end\">";
        // line 58
        echo twig_escape_filter($this->env, __trans("Number"), "html", null, true);
        echo ":</td>
                        <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "serie", [], "any", false, false, false, 59), "html", null, true);
        echo twig_escape_filter($this->env, twig_sprintf("%05s", twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "nr", [], "any", false, false, false, 59)), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"text-end\">";
        // line 62
        echo twig_escape_filter($this->env, __trans("Client"), "html", null, true);
        echo ":</td>
                        <td>
                            <a href=\"";
        // line 64
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "client", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "client", [], "any", false, false, false, 64), "first_name", [], "any", false, false, false, 64), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "client", [], "any", false, false, false, 64), "last_name", [], "any", false, false, false, 64), "html", null, true);
        echo "</a>
                        </td>
                    </tr>
                    <tr>
                        <td class=\"text-end\">";
        // line 68
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo ":</td>
                        <td>
                            ";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 70) == "paid")) {
            // line 71
            echo "                                <span class=\"badge bg-success me-1\"></span>
                            ";
        }
        // line 73
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 73) == "unpaid")) {
            // line 74
            echo "                                <span class=\"badge bg-danger me-1\"></span>
                            ";
        }
        // line 76
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 76) == "refunded")) {
            // line 77
            echo "                                <span class=\"badge bg-warning me-1\"></span>
                            ";
        }
        // line 79
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 79) == "canceled")) {
            // line 80
            echo "                                <span class=\"badge bg-secondary me-1\"></span>
                            ";
        }
        // line 82
        echo "                            ";
        echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 82)], 82, $context, $this->getSourceContext());
        echo "
                        </td>
                    </tr>
                    ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "tax", [], "any", false, false, false, 85)) {
            // line 86
            echo "                    <tr>
                        <td class=\"text-end\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxname", [], "any", false, false, false, 87), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxrate", [], "any", false, false, false, 87), "html", null, true);
            echo "%</td>
                        <td>";
            // line 88
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "tax", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 88)], 88, $context, $this->getSourceContext());
            echo "</td>
                    </tr>
                    ";
        }
        // line 91
        echo "                    <tr>
                        <td class=\"text-end\">";
        // line 92
        echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
        echo ":</td>
                        <td>";
        // line 93
        echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "total", [], "any", false, false, false, 93), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 93)], 93, $context, $this->getSourceContext());
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"text-end\">";
        // line 96
        echo twig_escape_filter($this->env, __trans("Currency"), "html", null, true);
        echo ":</td>
                        <td>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 97), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"text-end\">";
        // line 100
        echo twig_escape_filter($this->env, __trans("Date Created"), "html", null, true);
        echo ":</td>
                        <td>";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "created_at", [], "any", false, false, false, 101)), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"text-end\">";
        // line 104
        echo twig_escape_filter($this->env, __trans("Date Due"), "html", null, true);
        echo ":</td>
                        <td>";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "due_at", [], "any", false, false, false, 105)), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"text-end\">";
        // line 108
        echo twig_escape_filter($this->env, __trans("Date Paid"), "html", null, true);
        echo ":</td>
                        <td>";
        // line 109
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "paid_at", [], "any", false, false, false, 109)) {
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "paid_at", [], "any", false, false, false, 109)), "html", null, true);
        } else {
            echo "-";
        }
        echo "</td>
                    </tr>
                    <tr>
                        <td class=\"text-end\">";
        // line 112
        echo twig_escape_filter($this->env, __trans("Last Reminded"), "html", null, true);
        echo ":</td>
                        ";
        // line 113
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "reminded_at", [], "any", false, false, false, 113)) {
            echo "<td title=";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "reminded_at", [], "any", false, false, false, 113)), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "reminded_at", [], "any", false, false, false, 113)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
            echo "</td>";
        } else {
            echo "<td>-</td>";
        }
        // line 114
        echo "                    </tr>
                    ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "notes", [], "any", false, false, false, 115)) {
            // line 116
            echo "                    <tr>
                        <td class=\"text-end\">";
            // line 117
            echo twig_escape_filter($this->env, __trans("Notes"), "html", null, true);
            echo ":</td>
                        <td>";
            // line 118
            echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "notes", [], "any", false, false, false, 118));
            echo "</td>
                    </tr>
                    ";
        }
        // line 121
        echo "                </tbody>
            </table>

            <div class=\"card-footer text-center\">
                <a href=\"";
        // line 125
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 125), "html", null, true);
        echo "\" class=\"btn btn-primary\" target=\"_blank\">
                    <svg class=\"icon\" width=\"24\" height=\"24\">
                        <use xlink:href=\"#eye\" />
                    </svg>
                    <span>";
        // line 129
        echo twig_escape_filter($this->env, __trans("View as client"), "html", null, true);
        echo "</span>
                </a>
                <a href=\"";
        // line 131
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 131), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\" class=\"btn btn-primary api-link\" data-api-confirm=\"";
        echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
        echo "\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
        echo "\">
                    <svg class=\"icon\" width=\"24\" height=\"24\">
                        <use xlink:href=\"#delete\" />
                    </svg>
                    <span>";
        // line 135
        echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
        echo "</span>
                </a>
                ";
        // line 137
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 137) == "unpaid")) {
            // line 138
            echo "                <a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/send_reminder", ["id" => twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 138), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" class=\"btn btn-primary api-link\" data-api-msg=\"Payment reminder was sent\">
                    <svg class=\"icon\" width=\"24\" height=\"24\">
                        <use xlink:href=\"#mail\" />
                    </svg>
                    <span>";
            // line 142
            echo twig_escape_filter($this->env, __trans("Send reminder"), "html", null, true);
            echo "</span>
                </a>
                <a href=\"#\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#transactionModal\">
                    <svg class=\"icon\" width=\"24\" height=\"24\">
                        <use xlink:href=\"#check\" />
                    </svg>
                    <span>";
            // line 148
            echo twig_escape_filter($this->env, __trans("Mark as paid"), "html", null, true);
            echo "</span>
                </a>
                <div class=\"modal fade\" id=\"transactionModal\" tabindex=\"-1\" aria-labelledby=\"transactionModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <form class=\"modal-content api-form\" method=\"post\" action=\"";
            // line 152
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/mark_as_paid", ["id" => twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 152), "execute" => 1, "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" name=\"transactionForm\" data-api-reload=\"1\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"transactionModalLabel\">";
            // line 154
            echo twig_escape_filter($this->env, __trans("Enter Custom Transaction ID"), "html", null, true);
            echo ":</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 158
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 159), "html", null, true);
            echo "\">
                        <div class=\"mb-3 row\">
                            <label class=\"col-md-3 col-form-label\" for=\"transaction-id\">";
            // line 161
            echo twig_escape_filter($this->env, __trans("Transaction ID"), "html", null, true);
            echo ":</label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"transactionId\" id=\"transaction-id\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <div class=\"col\">
                                ";
            // line 168
            echo twig_escape_filter($this->env, __trans("Add the transaction ID of the payment to mark the invoice as paid."), "html", null, true);
            echo "<br />
                                ";
            // line 169
            echo twig_escape_filter($this->env, __trans("This should be the transaction ID you use to reconcile your bank statement."), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <a href=\"#\" class=\"btn btn-link link-secondary\" data-bs-dismiss=\"modal\">";
            // line 174
            echo twig_escape_filter($this->env, __trans("Cancel"), "html", null, true);
            echo "</a>
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 175
            echo twig_escape_filter($this->env, __trans("Submit"), "html", null, true);
            echo "\">
                    </div>
                    </form>
                </div>
                </div>


                ";
        }
        // line 183
        echo "
                ";
        // line 184
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 184) == "paid")) {
            // line 185
            echo "                <a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/refund", ["id" => twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 185), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" class=\"btn btn-primary api-link\" data-api-confirm=\"";
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\">
                    <svg class=\"icon\" width=\"24\" height=\"24\">
                        <use xlink:href=\"#receipt-refund\" />
                    </svg>
                    <span>";
            // line 189
            echo twig_escape_filter($this->env, __trans("Refund"), "html", null, true);
            echo "</span>
                </a>
                ";
        }
        // line 192
        echo "                <a href=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice/pdf");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 192), "html", null, true);
        echo "\" class=\"btn btn-primary\" target=\"_blank\">
                    <svg class=\"icon\" width=\"24\" height=\"24\">
                        <use xlink:href=\"#download\" />
                    </svg>
                    <span>";
        // line 196
        echo twig_escape_filter($this->env, __trans("PDF"), "html", null, true);
        echo "</span>
                </a>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-manage\" role=\"tabpanel\">
            <div class=\"card-body\">
                <form action=\"";
        // line 203
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/update");
        echo "\" method=\"post\" class=\"api-form\" data-api-reload=\"";
        echo twig_escape_filter($this->env, __trans("Invoice updated"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 204
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 206
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioStatusPaid\" type=\"radio\" name=\"status\" value=\"paid\"";
        // line 209
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 209) == "paid")) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioStatusPaid\">";
        // line 210
        echo twig_escape_filter($this->env, __trans("Paid"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioStatusUnpaid\" type=\"radio\" name=\"status\" value=\"unpaid\"";
        // line 213
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 213) == "unpaid")) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioStatusUnpaid\">";
        // line 214
        echo twig_escape_filter($this->env, __trans("Unpaid"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioStatusRefunded\" type=\"radio\" name=\"status\" value=\"refunded\"";
        // line 217
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 217) == "refunded")) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioStatusRefunded\">";
        // line 218
        echo twig_escape_filter($this->env, __trans("Refunded"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioStatusCanceled\" type=\"radio\" name=\"status\" value=\"canceled\"";
        // line 221
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 221) == "canceled")) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioStatusCanceled\">";
        // line 222
        echo twig_escape_filter($this->env, __trans("Canceled"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 227
        echo twig_escape_filter($this->env, __trans("Approved"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioApprovedYes\" type=\"radio\" name=\"approved\" value=\"1\"";
        // line 230
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "approved", [], "any", false, false, false, 230)) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioApprovedYes\">";
        // line 231
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioApprovedNo\" type=\"radio\" name=\"approved\" value=\"0\"";
        // line 234
        if ( !twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "approved", [], "any", false, false, false, 234)) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioApprovedNo\">";
        // line 235
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 240
        echo twig_escape_filter($this->env, __trans("Serie and number"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"input-group\">
                                <input class=\"form-control\" type=\"text\" name=\"serie\" value=\"";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "serie", [], "any", false, false, false, 243), "html", null, true);
        echo "\">
                                <input class=\"form-control w-50\" type=\"text\" name=\"nr\" value=\"";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "nr", [], "any", false, false, false, 244), "html", null, true);
        echo "\">
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 249
        echo twig_escape_filter($this->env, __trans("Tax"), "html", null, true);
        echo ":</label>
                        <div class=\"col d-flex gap-2\">
                            <input class=\"form-control\" type=\"text\" name=\"taxname\" value=\"";
        // line 251
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxname", [], "any", false, false, false, 251), "html", null, true);
        echo "\">
                            <div class=\"input-group\">
                                <input class=\"form-control\" type=\"text\" name=\"taxrate\" value=\"";
        // line 253
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxrate", [], "any", false, false, false, 253), "html", null, true);
        echo "\">
                                <span class=\"input-group-text\">%</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 259
        echo twig_escape_filter($this->env, __trans("Payment method"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            ";
        // line 261
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["gateway_id", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "invoice_gateways", [["format" => "pairs"]], "method", false, false, false, 261), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "gateway_id", [], "any", false, false, false, 261), 0, "Select payment method"], 261, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\" for=\"created_at\">";
        // line 265
        echo twig_escape_filter($this->env, __trans("Created at"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"input-group\">
                                <div class=\"input-icon w-100\">
                                    <input class=\"form-control datepicker\"
                                           id=\"created_at\"
                                           value=\"";
        // line 271
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "created_at", [], "any", false, false, false, 271), "Y-m-d"), "html", null, true);
        echo "\"
                                           name=\"created_at\"
                                    >
                                    <span class=\"input-icon-addon\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                            <path d=\"M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z\"></path>
                                            <path d=\"M16 3l0 4\"></path>
                                            <path d=\"M8 3l0 4\"></path>
                                            <path d=\"M4 11l16 0\"></path>
                                            <path d=\"M11 15l1 0\"></path>
                                            <path d=\"M12 15l0 3\"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\" for=\"due_at\">";
        // line 290
        echo twig_escape_filter($this->env, __trans("Due at"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"input-group\">
                                <div class=\"input-icon w-100\">
                                    <input class=\"form-control datepicker\"
                                           id=\"due_at\"
                                           value=\"";
        // line 296
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "due_at", [], "any", false, false, false, 296)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "due_at", [], "any", false, false, false, 296), "Y-m-d"), "html", null, true);
        }
        echo "\"
                                           name=\"due_at\"
                                    >
                                    <span class=\"input-icon-addon\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                            <path d=\"M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z\"></path>
                                            <path d=\"M16 3l0 4\"></path>
                                            <path d=\"M8 3l0 4\"></path>
                                            <path d=\"M4 11l16 0\"></path>
                                            <path d=\"M11 15l1 0\"></path>
                                            <path d=\"M12 15l0 3\"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\" for=\"paid_at\">";
        // line 315
        echo twig_escape_filter($this->env, __trans("Paid at"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"input-group\">
                                <div class=\"input-icon w-100\">
                                    <input class=\"form-control datepicker\"
                                           id=\"paid_at\"
                                           value=\"";
        // line 321
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "paid_at", [], "any", false, false, false, 321)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "paid_at", [], "any", false, false, false, 321), "Y-m-d"), "html", null, true);
        }
        echo "\"
                                           name=\"paid_at\"
                                    >
                                    <span class=\"input-icon-addon\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                            <path d=\"M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z\"></path>
                                            <path d=\"M16 3l0 4\"></path>
                                            <path d=\"M8 3l0 4\"></path>
                                            <path d=\"M4 11l16 0\"></path>
                                            <path d=\"M11 15l1 0\"></path>
                                            <path d=\"M12 15l0 3\"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 340
        echo twig_escape_filter($this->env, __trans("Notes"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <textarea class=\"form-control\" name=\"notes\" rows=\"6\">";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "notes", [], "any", false, false, false, 342), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 346
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 346), "html", null, true);
        echo "\">
                    <input type=\"submit\" value=\"";
        // line 347
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-texts\" role=\"tabpanel\">
            <div class=\"card-body\">
                <form action=\"";
        // line 354
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/update");
        echo "\" method=\"post\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Invoice updated"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 355
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 357
        echo twig_escape_filter($this->env, __trans("Text before invoice items table"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <textarea class=\"form-control bb-textarea\" name=\"text_1\" rows=\"6\">";
        // line 359
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "text_1", [], "any", false, false, false, 359), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 363
        echo twig_escape_filter($this->env, __trans("Text after invoice items table"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <textarea class=\"form-control bb-textarea\" name=\"text_2\" rows=\"6\">";
        // line 365
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "text_2", [], "any", false, false, false, 365), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 369
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 369), "html", null, true);
        echo "\">
                    <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 370
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-seller-credentials\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h3>";
        // line 377
        echo twig_escape_filter($this->env, __trans("Company details at the moment of purchase"), "html", null, true);
        echo "</h3>

                ";
        // line 379
        $context["seller"] = twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "seller", [], "any", false, false, false, 379);
        // line 380
        echo "                <form action=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/update");
        echo "\" method=\"post\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Invoice updated"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 381
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 383
        echo twig_escape_filter($this->env, __trans("Company"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"seller_company\" value=\"";
        // line 385
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "company", [], "any", false, false, false, 385), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 389
        echo twig_escape_filter($this->env, __trans("Company VAT"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"seller_company_vat\" value=\"";
        // line 391
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "company_vat", [], "any", false, false, false, 391), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 395
        echo twig_escape_filter($this->env, __trans("Company Number"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"seller_company_number\" value=\"";
        // line 397
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "company_number", [], "any", false, false, false, 397), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 401
        echo twig_escape_filter($this->env, __trans("Address"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"seller_address\" value=\"";
        // line 403
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "address", [], "any", false, false, false, 403), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 407
        echo twig_escape_filter($this->env, __trans("Phone"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"seller_phone\" value=\"";
        // line 409
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "phone", [], "any", false, false, false, 409), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 413
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"seller_email\" value=\"";
        // line 415
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "email", [], "any", false, false, false, 415), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 419
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 419), "html", null, true);
        echo "\">
                    <input type=\"submit\" value=\"";
        // line 420
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-buyer-credentials\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h3>";
        // line 427
        echo twig_escape_filter($this->env, __trans("Client details at the moment of purchase"), "html", null, true);
        echo "</h3>

                ";
        // line 429
        $context["buyer"] = twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "buyer", [], "any", false, false, false, 429);
        // line 430
        echo "                <form action=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/update");
        echo "\" method=\"post\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Invoice updated"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 431
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 433
        echo twig_escape_filter($this->env, __trans("First name"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"buyer_first_name\" value=\"";
        // line 435
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "first_name", [], "any", false, false, false, 435), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 439
        echo twig_escape_filter($this->env, __trans("Last name"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"buyer_last_name\" value=\"";
        // line 441
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "last_name", [], "any", false, false, false, 441), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 445
        echo twig_escape_filter($this->env, __trans("Company"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"buyer_company\" value=\"";
        // line 447
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company", [], "any", false, false, false, 447), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 451
        echo twig_escape_filter($this->env, __trans("Company VAT"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"buyer_company_vat\" value=\"";
        // line 453
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company_vat", [], "any", false, false, false, 453), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 457
        echo twig_escape_filter($this->env, __trans("Company Number"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"buyer_company_number\" value=\"";
        // line 459
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company_number", [], "any", false, false, false, 459), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 463
        echo twig_escape_filter($this->env, __trans("Address"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"buyer_address\" value=\"";
        // line 465
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "address", [], "any", false, false, false, 465), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 469
        echo twig_escape_filter($this->env, __trans("City"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"buyer_city\" value=\"";
        // line 471
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "city", [], "any", false, false, false, 471), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 475
        echo twig_escape_filter($this->env, __trans("State"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            ";
        // line 478
        echo "                            <input class=\"form-control\" type=\"text\" name=\"buyer_state\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "state", [], "any", false, false, false, 478), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 482
        echo twig_escape_filter($this->env, __trans("Country"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            ";
        // line 484
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["buyer_country", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 484), twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "country", [], "any", false, false, false, 484), 0, "Select country"], 484, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 488
        echo twig_escape_filter($this->env, __trans("Phone"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"buyer_phone\" value=\"";
        // line 490
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "phone", [], "any", false, false, false, 490), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 494
        echo twig_escape_filter($this->env, __trans("Zip"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"buyer_zip\" value=\"";
        // line 496
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "zip", [], "any", false, false, false, 496), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 500
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"buyer_email\" value=\"";
        // line 502
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "email", [], "any", false, false, false, 502), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 506
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 506), "html", null, true);
        echo "\">
                    <input type=\"submit\" value=\"";
        // line 507
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"card mb-3\">
    <div class=\"card-body\">
        <h5>";
        // line 516
        echo twig_escape_filter($this->env, __trans("Invoice items"), "html", null, true);
        echo "</h5>
    </div>

    ";
        // line 519
        if ( !twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "approved", [], "any", false, false, false, 519)) {
            // line 520
            echo "    <form action=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/update");
            echo "\" method=\"post\" class=\"api-form\" data-api-reload=\"1\">
        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 521
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
        <table class=\"table card-table table-vcenter table-striped text-nowrap\">
            <thead>
                <tr>
                    <th>";
            // line 525
            echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
            echo "</th>
                    <th class=\"text-center w-25\">";
            // line 526
            echo twig_escape_filter($this->env, __trans("Price"), "html", null, true);
            echo "</th>
                    <th class=\"w-1\">";
            // line 527
            echo twig_escape_filter($this->env, __trans("Tax"), "html", null, true);
            echo "</th>
                    <th class=\"w-1\"></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 532
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "lines", [], "any", false, false, false, 532));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 533
                echo "                <tr>
                    <td>
                        <input class=\"form-control\" type=\"text\" name=\"items[";
                // line 535
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 535), "html", null, true);
                echo "][title]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 535), "html", null, true);
                echo "\">
                    </td>
                    <td>
                        <div class=\"input-group\">
                            <input class=\"form-control\" type=\"text\" name=\"items[";
                // line 539
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 539), "html", null, true);
                echo "][price]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 539), "html", null, true);
                echo "\">
                            <span class=\"input-group-text\">";
                // line 540
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 540), "html", null, true);
                echo "</span>
                        </td>
                    <td class=\"text-center\">
                        <input class=\"form-check-input m-0 align-middle\" type=\"checkbox\" name=\"items[";
                // line 543
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 543), "html", null, true);
                echo "][taxed]\" value=\"1\"";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "taxed", [], "any", false, false, false, 543)) {
                    echo " checked";
                }
                echo ">
                    </td>
                    <td>
                        <a class=\"btn btn-icon api-link\"
                            href=\"";
                // line 547
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/item_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 547), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                echo "\"
                            data-api-confirm=\"";
                // line 548
                echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
                echo "\"
                            data-api-reload=\"1\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#delete\" />
                            </svg>
                        </a>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 557
            echo "                <tr>
                    <td>
                        <input class=\"form-control\" type=\"text\" name=\"new_item[title]\">
                    </td>
                    <td class=\"text-center\">
                        <div class=\"input-group\">
                            <input class=\"form-control\" type=\"text\" name=\"new_item[price]\">
                            <span class=\"input-group-text\">";
            // line 564
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 564), "html", null, true);
            echo "</span>
                        </div>
                    </td>
                    <td class=\"text-center\">
                        <input class=\"form-check-input m-0 align-middle\" type=\"checkbox\" name=\"new_item[taxed]\" value=\"1\">
                    </td>
                    <td></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"4\" class=\"currency\">
                        ";
            // line 576
            echo twig_escape_filter($this->env, __trans("Subtotal"), "html", null, true);
            echo ": ";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "subtotal", [], "any", false, false, false, 576), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 576)], 576, $context, $this->getSourceContext());
            echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=\"4\" class=\"currency\">
                        ";
            // line 581
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxname", [], "any", false, false, false, 581), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxrate", [], "any", false, false, false, 581), "html", null, true);
            echo "%: ";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "tax", [], "any", false, false, false, 581), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 581)], 581, $context, $this->getSourceContext());
            echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=\"4\" class=\"currency\">
                        ";
            // line 586
            echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
            echo ": ";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "total", [], "any", false, false, false, 586), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 586)], 586, $context, $this->getSourceContext());
            echo "
                    </td>
                </tr>
            </tfoot>
        </table>

        <div class=\"card-footer d-flex gap-2\">
            ";
            // line 593
            if ( !twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "approved", [], "any", false, false, false, 593)) {
                // line 594
                echo "            <a class=\"btn btn-success w-100 api-link\"
                href=\"";
                // line 595
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/approve", ["id" => twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 595), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                echo "\"
                data-api-reload=\"";
                // line 596
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoices");
                echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#check\" />
                </svg>
                ";
                // line 600
                echo twig_escape_filter($this->env, __trans("Approve"), "html", null, true);
                echo "
            </a>
            ";
            }
            // line 603
            echo "            <input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 603), "html", null, true);
            echo "\">
            <input type=\"submit\" value=\"";
            // line 604
            echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
            echo "\" class=\"btn btn-primary w-25\">
        </div>
    </form>
";
        } else {
            // line 608
            echo "    <table class=\"table card-table table-vcenter table-striped text-nowrap\">
        <thead>
            <tr>
                <th class=\"w-1\"></th>
                <th class=\"w-1\"></th>
                <th>";
            // line 613
            echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
            echo "</th>
                <th class=\"text-center\">";
            // line 614
            echo twig_escape_filter($this->env, __trans("Tax"), "html", null, true);
            echo "</th>
                <th class=\"text-end w-1\">";
            // line 615
            echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
            echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 619
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "lines", [], "any", false, false, false, 619));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 620
                echo "            <tr>
                <td>";
                // line 621
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "</td>
                <td class=\"d-flex\">
                    <div class=\"bull task ";
                // line 623
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 623), "html", null, true);
                echo "\" title=\"Task status: ";
                echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 623)], 623, $context, $this->getSourceContext());
                echo "\"></div>
                    <div class=\"bull charge ";
                // line 624
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "charged", [], "any", false, false, false, 624)) ? ("yes") : ("no"));
                echo "\" title=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "charged", [], "any", false, false, false, 624)) ? ("Charged from client balance") : ("Not charged from client balance"));
                echo "\"></div>
                </td>
                <td>
                ";
                // line 627
                if (twig_get_attribute($this->env, $this->source, $context["item"], "order_id", [], "any", false, false, false, 627)) {
                    // line 628
                    echo "                <a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order/manage");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "order_id", [], "any", false, false, false, 628), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 628), "html", null, true);
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 628) > 1)) {
                        echo " x ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 628), "html", null, true);
                        echo " ";
                    }
                    echo "</a>
                ";
                } else {
                    // line 630
                    echo "                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 630), "html", null, true);
                    echo " ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 630) > 1)) {
                        echo " x ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 630), "html", null, true);
                        echo " ";
                    }
                    // line 631
                    echo "                ";
                }
                // line 632
                echo "                </td>
                <td class=\"text-center\">";
                // line 633
                echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["item"], "tax", [], "any", false, false, false, 633), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 633)], 633, $context, $this->getSourceContext());
                echo "</td>
                <td class=\"fw-bold\">";
                // line 634
                echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 634), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 634)], 634, $context, $this->getSourceContext());
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 637
            echo "        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"5\" class=\"text-end fw-bold\">
                    Subtotal: ";
            // line 641
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "subtotal", [], "any", false, false, false, 641), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 641)], 641, $context, $this->getSourceContext());
            echo "
                </td>
            </tr>
            <tr>
                <td colspan=\"5\" class=\"text-end fw-bold\">
                    ";
            // line 646
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxname", [], "any", false, false, false, 646), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxrate", [], "any", false, false, false, 646), "html", null, true);
            echo "%: ";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "tax", [], "any", false, false, false, 646), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 646)], 646, $context, $this->getSourceContext());
            echo "
                </td>
            </tr>
            <tr>
                <td colspan=\"5\" class=\"text-end fw-bold\">
                    Total: ";
            // line 651
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "total", [], "any", false, false, false, 651), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 651)], 651, $context, $this->getSourceContext());
            echo "
                </td>
            </tr>
        </tfoot>
    </table>
";
        }
        // line 657
        echo "</div>

    ";
        // line 659
        $context["transactions"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_transaction_get_list", [["invoice_id" => twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 659), "per_page" => 100]], "method", false, false, false, 659), "list", [], "any", false, false, false, 659);
        // line 660
        echo "    ";
        if ((twig_length_filter($this->env, ($context["transactions"] ?? null)) > 0)) {
            // line 661
            echo "    <div class=\"card overflow-auto\">
        <div class=\"card-body\">
            <h5>";
            // line 663
            echo twig_escape_filter($this->env, __trans("Transactions"), "html", null, true);
            echo "</h5>
        </div>

        <table class=\"table card-table table-vcenter table-striped text-nowrap\">
            <thead>
                <tr>
                    <th>";
            // line 669
            echo twig_escape_filter($this->env, __trans("ID"), "html", null, true);
            echo "</th>
                    <th>";
            // line 670
            echo twig_escape_filter($this->env, __trans("Type"), "html", null, true);
            echo "</th>
                    <th>";
            // line 671
            echo twig_escape_filter($this->env, __trans("Gateway"), "html", null, true);
            echo "</th>
                    <th>";
            // line 672
            echo twig_escape_filter($this->env, __trans("Amount"), "html", null, true);
            echo "</th>
                    <th>";
            // line 673
            echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
            echo "</th>
                    <th>";
            // line 674
            echo twig_escape_filter($this->env, __trans("Date"), "html", null, true);
            echo "</th>
                    <th class=\"w-1\"></th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 680
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
                // line 681
                echo "                <tr>
                    <td>";
                // line 682
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "txn_id", [], "any", false, false, false, 682), "html", null, true);
                echo "</td>
                    <td>";
                // line 683
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "type", [], "any", false, false, false, 683), "html", null, true);
                echo "</td>
                    <td>";
                // line 684
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "gateway", [], "any", false, false, false, 684), "html", null, true);
                echo "</td>
                    <td>";
                // line 685
                echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["tx"], "amount", [], "any", false, false, false, 685), twig_get_attribute($this->env, $this->source, $context["tx"], "currency", [], "any", false, false, false, 685)], 685, $context, $this->getSourceContext());
                echo "</td>
                    <td>";
                // line 686
                echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["tx"], "status", [], "any", false, false, false, 686)], 686, $context, $this->getSourceContext());
                echo "</td>
                    <td>";
                // line 687
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "created_at", [], "any", false, false, false, 687)), "html", null, true);
                echo "</td>
                    <td>
                        <a class=\"btn btn-icon\" href=\"";
                // line 689
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice/transaction");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "id", [], "any", false, false, false, 689), "html", null, true);
                echo "\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#edit\" />
                            </svg>
                        </a>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 697
            echo "            </tbody>
        </table>
    </div>
    ";
        }
    }

    // line 703
    public function block_sidebar2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 704
        echo "<div class=\"widget\">
    <div class=\"head\">
        <h2 class=\"dark-icon i-services\">";
        // line 706
        echo twig_escape_filter($this->env, __trans("Actions"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"block\">
        <button class=\"btn btn-primary\" type=\"button\" onclick=\"window.print()\">
            <span class=\"dark-icon i-print\"></span> ";
        // line 710
        echo twig_escape_filter($this->env, __trans("Print"), "html", null, true);
        echo "</button>
        ";
        // line 711
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 711) == "unpaid")) {
            // line 712
            echo "        <a class=\"btn btn-primary api-link\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/client/invoice/delete", ["hash" => twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 712), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" data-api-confirm=\"";
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\">
            <span class=\"dark-icon i-bin\"></span> ";
            // line 713
            echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
            echo "</a>
        ";
        }
        // line 715
        echo "    </div>
</div>
";
    }

    // line 719
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["mf"], "macro_bb_editor", [".bb-textarea"], 719, $context, $this->getSourceContext());
    }

    // line 721
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 723
        echo "<script>
    \$(function() {
        \$('input[name=gateway]:first').attr('checked', true);
        \$('#pay-now-button').on('click', function() {
            var link = \$('input[name=gateway]:checked').val();
            bb.redirect(link);

            return false;
        });
    });

</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_invoice_invoice.html.twig";
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
        return array (  1581 => 723,  1577 => 721,  1570 => 719,  1564 => 715,  1559 => 713,  1550 => 712,  1548 => 711,  1544 => 710,  1537 => 706,  1533 => 704,  1529 => 703,  1521 => 697,  1505 => 689,  1500 => 687,  1496 => 686,  1492 => 685,  1488 => 684,  1484 => 683,  1480 => 682,  1477 => 681,  1473 => 680,  1464 => 674,  1460 => 673,  1456 => 672,  1452 => 671,  1448 => 670,  1444 => 669,  1435 => 663,  1431 => 661,  1428 => 660,  1426 => 659,  1422 => 657,  1413 => 651,  1401 => 646,  1393 => 641,  1387 => 637,  1378 => 634,  1374 => 633,  1371 => 632,  1368 => 631,  1359 => 630,  1343 => 628,  1341 => 627,  1333 => 624,  1327 => 623,  1322 => 621,  1319 => 620,  1315 => 619,  1308 => 615,  1304 => 614,  1300 => 613,  1293 => 608,  1286 => 604,  1281 => 603,  1275 => 600,  1268 => 596,  1264 => 595,  1261 => 594,  1259 => 593,  1247 => 586,  1235 => 581,  1225 => 576,  1210 => 564,  1201 => 557,  1186 => 548,  1182 => 547,  1171 => 543,  1165 => 540,  1159 => 539,  1150 => 535,  1146 => 533,  1142 => 532,  1134 => 527,  1130 => 526,  1126 => 525,  1119 => 521,  1114 => 520,  1112 => 519,  1106 => 516,  1094 => 507,  1090 => 506,  1083 => 502,  1078 => 500,  1071 => 496,  1066 => 494,  1059 => 490,  1054 => 488,  1047 => 484,  1042 => 482,  1034 => 478,  1029 => 475,  1022 => 471,  1017 => 469,  1010 => 465,  1005 => 463,  998 => 459,  993 => 457,  986 => 453,  981 => 451,  974 => 447,  969 => 445,  962 => 441,  957 => 439,  950 => 435,  945 => 433,  940 => 431,  933 => 430,  931 => 429,  926 => 427,  916 => 420,  912 => 419,  905 => 415,  900 => 413,  893 => 409,  888 => 407,  881 => 403,  876 => 401,  869 => 397,  864 => 395,  857 => 391,  852 => 389,  845 => 385,  840 => 383,  835 => 381,  828 => 380,  826 => 379,  821 => 377,  811 => 370,  807 => 369,  800 => 365,  795 => 363,  788 => 359,  783 => 357,  778 => 355,  772 => 354,  762 => 347,  758 => 346,  751 => 342,  746 => 340,  722 => 321,  713 => 315,  689 => 296,  680 => 290,  658 => 271,  649 => 265,  642 => 261,  637 => 259,  628 => 253,  623 => 251,  618 => 249,  610 => 244,  606 => 243,  600 => 240,  592 => 235,  586 => 234,  580 => 231,  574 => 230,  568 => 227,  560 => 222,  554 => 221,  548 => 218,  542 => 217,  536 => 214,  530 => 213,  524 => 210,  518 => 209,  512 => 206,  507 => 204,  501 => 203,  491 => 196,  481 => 192,  475 => 189,  463 => 185,  461 => 184,  458 => 183,  447 => 175,  443 => 174,  435 => 169,  431 => 168,  421 => 161,  416 => 159,  412 => 158,  405 => 154,  400 => 152,  393 => 148,  384 => 142,  376 => 138,  374 => 137,  369 => 135,  358 => 131,  353 => 129,  344 => 125,  338 => 121,  332 => 118,  328 => 117,  325 => 116,  323 => 115,  320 => 114,  308 => 113,  304 => 112,  294 => 109,  290 => 108,  284 => 105,  280 => 104,  274 => 101,  270 => 100,  264 => 97,  260 => 96,  254 => 93,  250 => 92,  247 => 91,  241 => 88,  235 => 87,  232 => 86,  230 => 85,  223 => 82,  219 => 80,  216 => 79,  212 => 77,  209 => 76,  205 => 74,  202 => 73,  198 => 71,  196 => 70,  191 => 68,  178 => 64,  173 => 62,  166 => 59,  162 => 58,  156 => 55,  152 => 54,  140 => 45,  134 => 42,  128 => 39,  122 => 36,  116 => 33,  106 => 28,  102 => 26,  98 => 25,  90 => 21,  83 => 19,  73 => 12,  69 => 10,  65 => 9,  55 => 5,  51 => 1,  49 => 7,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_invoice_invoice.html.twig", "/var/www/modules/Invoice/html_admin/mod_invoice_invoice.html.twig");
    }
}
