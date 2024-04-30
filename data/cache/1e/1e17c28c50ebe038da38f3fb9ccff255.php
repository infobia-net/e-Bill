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

/* mod_client_manage.html.twig */
class __TwigTemplate_5f4e21def44c848b8b9a0b8c5e5e4249 extends Template
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
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_client_manage.html.twig", 3)->unwrap();
        // line 5
        $context["active_menu"] = "client";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_client_manage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "first_name", [], "any", false, false, false, 7), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "last_name", [], "any", false, false, false, 7), "html", null, true);
    }

    // line 9
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<ul class=\"breadcrumb\">
    <li class=\"breadcrumb-item\">
        <svg class=\"icon\">
            <use xlink:href=\"#home\" />
        </svg>
    </li>
    <li class=\"breadcrumb-item\">
        <a href=\"";
        // line 17
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Clients"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "first_name", [], "any", false, false, false, 19), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "last_name", [], "any", false, false, false, 19), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-info\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 26
        echo twig_escape_filter($this->env, __trans("Profile"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-profile\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 29
        echo twig_escape_filter($this->env, __trans("Edit"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-orders\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 32
        echo twig_escape_filter($this->env, __trans("Orders"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-invoice\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 35
        echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-support\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 38
        echo twig_escape_filter($this->env, __trans("Tickets"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-balance\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 41
        echo twig_escape_filter($this->env, __trans("Payments"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-history\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 44
        echo twig_escape_filter($this->env, __trans("Logins"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-emails\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 47
        echo twig_escape_filter($this->env, __trans("Emails"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-transactions\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 50
        echo twig_escape_filter($this->env, __trans("Transactions"), "html", null, true);
        echo "</a>
        </li>
    </ul>

<div class=\"card\">
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-info\" role=\"tabpanel\" aria-labelledby=\"index-tab\">
            <div class=\"card-body position-relative\">
                <span class=\"avatar avatar-xl mb-3 avatar-rounded shadow position-absolute top-0 end-0 m-3\" style=\"background-image: url(";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", [], "any", false, false, false, 58)), "html", null, true);
        echo "&size=112)\"></span>

                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <tbody>
                        <tr>
                            <td class=\"w-50 text-end\">";
        // line 63
        echo twig_escape_filter($this->env, __trans("Client ID"), "html", null, true);
        echo ":</td>
                            <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 67
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo ":</td>
                            <td><strong class=\"text-danger\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "first_name", [], "any", false, false, false, 68), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "last_name", [], "any", false, false, false, 68), "html", null, true);
        echo "</strong></td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 71
        echo twig_escape_filter($this->env, __trans("Company"), "html", null, true);
        echo ":</td>
                            <td><strong class=\"text-success\">";
        // line 72
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "company", [], "any", true, true, false, 72)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "company", [], "any", false, false, false, 72), "-")) : ("-")), "html", null, true);
        echo "</strong></td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 75
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo ":</td>
                            <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 79
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo ":</td>
                            <td>
                                ";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "status", [], "any", false, false, false, 81) == "active")) {
            // line 82
            echo "                                    <span class=\"badge bg-success me-1\"></span>
                                ";
        }
        // line 84
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "status", [], "any", false, false, false, 84) == "suspended")) {
            // line 85
            echo "                                    <span class=\"badge bg-danger me-1\"></span>
                                ";
        }
        // line 87
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "status", [], "any", false, false, false, 87) == "canceled")) {
            // line 88
            echo "                                    <span class=\"badge bg-secondary me-1\"></span>
                                ";
        }
        // line 90
        echo "                                ";
        echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "status", [], "any", false, false, false, 90)], 90, $context, $this->getSourceContext());
        echo "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 94
        echo twig_escape_filter($this->env, __trans("Group"), "html", null, true);
        echo ":</td>
                            <td>";
        // line 95
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "group", [], "any", true, true, false, 95)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "group", [], "any", false, false, false, 95), "-")) : ("-")), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 98
        echo twig_escape_filter($this->env, __trans("Currency"), "html", null, true);
        echo ":</td>
                            <td>";
        // line 99
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "currency", [], "any", true, true, false, 99)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "currency", [], "any", false, false, false, 99), "-")) : ("-")), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 102
        echo twig_escape_filter($this->env, __trans("Fund balance"), "html", null, true);
        echo ":</td>
                            <td class=\"text-danger fw-bold\">";
        // line 103
        echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "balance", [], "any", false, false, false, 103), twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "currency", [], "any", false, false, false, 103)], 103, $context, $this->getSourceContext());
        echo "</td>
                        </tr>
                        ";
        // line 105
        if (twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "notes", [], "any", false, false, false, 105)) {
            // line 106
            echo "                        <tr>
                            <td class=\"text-end\">";
            // line 107
            echo twig_escape_filter($this->env, __trans("Notes"), "html", null, true);
            echo ":</td>
                            <td>
                                <svg class=\"icon\">
                                    <use xlink:href=\"#support\" />
                                </svg>
                                <a href=\"#tab-profile\" data-bs-toggle=\"tab\" role=\"button\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "notes", [], "any", false, false, false, 112), "html", null, true);
            echo "</a>
                            </td>
                        </tr>
                        ";
        }
        // line 116
        echo "                        <tr>
                            <td class=\"text-end\">IP:</td>
                            <td>";
        // line 118
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "ip", [], "any", true, true, false, 118)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "ip", [], "any", false, false, false, 118), "-")) : ("-")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Box_TwigExtensions']->twig_ipcountryname_filter(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "ip", [], "any", false, false, false, 118)), "Unknown"), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 121
        echo twig_escape_filter($this->env, __trans("API Key"), "html", null, true);
        echo ":</td>
                            <td>";
        // line 122
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "api_token", [], "any", true, true, false, 122)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "api_token", [], "any", false, false, false, 122), "-")) : ("-")), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 125
        echo twig_escape_filter($this->env, __trans("Address"), "html", null, true);
        echo ":</td>
                            <td>
                                <span class=\"flag flag-country-";
        // line 127
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "country", [], "any", false, false, false, 127)), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 127)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "country", [], "any", false, false, false, 127)] ?? null) : null), "html", null, true);
        echo "\"></span>
                                ";
        // line 128
        echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 128)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "country", [], "any", false, false, false, 128)] ?? null) : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "state", [], "any", false, false, false, 128), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "address_1", [], "any", false, false, false, 128), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "address_2", [], "any", false, false, false, 128), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "city", [], "any", false, false, false, 128), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "postcode", [], "any", false, false, false, 128), "html", null, true);
        echo "
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 132
        echo twig_escape_filter($this->env, __trans("Registered on"), "html", null, true);
        echo ":</td>
                            <td>";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "created_at", [], "any", false, false, false, 133)), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class=\"card-footer text-center\">
                <a href=\"";
        // line 140
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/login");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 140), "html", null, true);
        echo "\" class=\"btn btn-primary\" target=\"_blank\">
                    <svg class=\"icon\" width=\"24\" height=\"24\">
                        <use xlink:href=\"#login\" />
                    </svg>
                    <span>";
        // line 144
        echo twig_escape_filter($this->env, __trans("Login to client area"), "html", null, true);
        echo "</span>
                </a>
                <a class=\"btn btn-danger api-link\"
                    href=\"";
        // line 147
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/client/delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 147), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\"
                    data-api-confirm=\"";
        // line 148
        echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
        echo "\"
                    data-api-redirect=\"";
        // line 149
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
        echo "\">
                    <svg class=\"icon\" width=\"24\" height=\"24\">
                        <use xlink:href=\"#delete\" />
                    </svg>
                    <span>";
        // line 153
        echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
        echo "</span>
                </a>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-profile\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h5>";
        // line 160
        echo twig_escape_filter($this->env, __trans("Client profile details"), "html", null, true);
        echo "</h5>
                <form method=\"post\" action=\"";
        // line 161
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/client/update");
        echo "\" class=\"api-form save\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Client Profile updated"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 164
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioStatusActive\" type=\"radio\" name=\"status\" value=\"active\"";
        // line 167
        if ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "status", [], "any", false, false, false, 167) == "active")) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioStatusActive\">";
        // line 168
        echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioStatusSuspended\" type=\"radio\" name=\"status\" value=\"suspended\"";
        // line 171
        if ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "status", [], "any", false, false, false, 171) == "suspended")) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioStatusSuspended\">";
        // line 172
        echo twig_escape_filter($this->env, __trans("Suspended"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioStatusCanceled\" type=\"radio\" name=\"status\" value=\"canceled\"";
        // line 175
        if ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "status", [], "any", false, false, false, 175) == "canceled")) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioStatusCanceled\">";
        // line 176
        echo twig_escape_filter($this->env, __trans("Canceled"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 181
        echo twig_escape_filter($this->env, __trans("Type"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioTypePersonal\" type=\"radio\" name=\"type\" value=\"individual\"";
        // line 184
        if ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "type", [], "any", false, false, false, 184) == "individual")) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioTypePersonal\">";
        // line 185
        echo twig_escape_filter($this->env, __trans("Individual"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioTypeCompany\" type=\"radio\" name=\"type\" value=\"company\"";
        // line 188
        if ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "type", [], "any", false, false, false, 188) == "company")) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioTypeCompany\">";
        // line 189
        echo twig_escape_filter($this->env, __trans("Company"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" =\"radioTypeOther\" type=\"radio\" name=\"type\" value=\"\"";
        // line 192
        if ( !twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "type", [], "any", false, false, false, 192)) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioTypeOther\">";
        // line 193
        echo twig_escape_filter($this->env, __trans("Other/Unknown"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 198
        echo twig_escape_filter($this->env, __trans("Mail approved"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioEmailApprovedYes\" type=\"radio\" name=\"email_approved\" value=\"1\"";
        // line 201
        if ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email_approved", [], "any", false, false, false, 201) == 1)) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioEmailApprovedYes\">";
        // line 202
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioEmailApprovedNo\" type=\"radio\" name=\"email_approved\" value=\"0\"";
        // line 205
        if ((twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email_approved", [], "any", false, false, false, 205) != 1)) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioEmailApprovedNo\">";
        // line 206
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 211
        echo twig_escape_filter($this->env, __trans("Group"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            ";
        // line 213
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["group_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_group_get_pairs", [], "any", false, false, false, 213), twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "group_id", [], "any", false, false, false, 213), 0, "Select group"], 213, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 217
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"email\" name=\"email\" value=\"";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email", [], "any", false, false, false, 219), "html", null, true);
        echo "\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 223
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <input class=\"form-control\" type=\"text\" name=\"first_name\" value=\"";
        // line 227
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "first_name", [], "any", false, false, false, 227), "html", null, true);
        echo "\" required>
                                </div>
                                <div class=\"col\">
                                    <input class=\"form-control\" type=\"text\" name=\"last_name\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "last_name", [], "any", false, false, false, 230), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\" for=\"birthday\">";
        // line 236
        echo twig_escape_filter($this->env, __trans("Date of birth"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"input-group\">
                                <div class=\"input-icon w-100\">
                                    <input class=\"form-control datepicker\"
                                           id=\"birthday\"
                                           value=\"";
        // line 242
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "birthday", [], "any", false, false, false, 242), "html", null, true);
        echo "\"
                                           name=\"birthday\"
                                           data-pick-year=\"1\"
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
                    <div class=\"mb-3 row\" id=\"company-details\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 262
        echo twig_escape_filter($this->env, __trans("Company details"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <input class=\"form-control\" type=\"text\" name=\"company\" value=\"";
        // line 266
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "company", [], "any", false, false, false, 266), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Company name"), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"col\">
                                    <input class=\"form-control\" type=\"text\" name=\"company_number\" value=\"";
        // line 269
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "company_number", [], "any", false, false, false, 269), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Company number"), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"col\">
                                    <input class=\"form-control\" type=\"text\" name=\"company_vat\" value=\"";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "company_vat", [], "any", false, false, false, 272), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Company VAT number"), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 277
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "</button>
                    <hr>

                    <h5>";
        // line 280
        echo twig_escape_filter($this->env, __trans("Address and contact details"), "html", null, true);
        echo "</h5>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 282
        echo twig_escape_filter($this->env, __trans("Address Line 1"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"address_1\" value=\"";
        // line 284
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "address_1", [], "any", false, false, false, 284), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 288
        echo twig_escape_filter($this->env, __trans("Address Line 2"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"address_2\" value=\"";
        // line 290
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "address_2", [], "any", false, false, false, 290), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 295
        echo twig_escape_filter($this->env, __trans("Country"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            ";
        // line 297
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["country", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 297), twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "country", [], "any", false, false, false, 297), 0, "Select country"], 297, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 301
        echo twig_escape_filter($this->env, __trans("State"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            ";
        // line 304
        echo "                            <input class=\"form-control\" type=\"text\" name=\"state\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "state", [], "any", false, false, false, 304), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 308
        echo twig_escape_filter($this->env, __trans("City"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"city\" value=\"";
        // line 310
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "city", [], "any", false, false, false, 310), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 314
        echo twig_escape_filter($this->env, __trans("Postcode"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"postcode\" value=\"";
        // line 316
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "postcode", [], "any", false, false, false, 316), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 320
        echo twig_escape_filter($this->env, __trans("Phone"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">+</span>
                                <input class=\"form-control\" type=\"text\" name=\"phone_cc\" value=\"";
        // line 324
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "phone_cc", [], "any", false, false, false, 324), "html", null, true);
        echo "\">
                                <input class=\"form-control w-50\" type=\"phone\" name=\"phone\" value=\"";
        // line 325
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "phone", [], "any", false, false, false, 325), "html", null, true);
        echo "\">
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 330
        echo twig_escape_filter($this->env, __trans("Passport number"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"document_nr\" value=\"";
        // line 332
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "document_nr", [], "any", false, false, false, 332), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 335
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "</button>
                    <hr>

                    <h5>";
        // line 338
        echo twig_escape_filter($this->env, __trans("Additional settings"), "html", null, true);
        echo "</h5>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 340
        echo twig_escape_filter($this->env, __trans("Alternative ID"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"aid\" value=\"";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "aid", [], "any", false, false, false, 342), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Used to identify client on foreign system. Usually used by importers"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 346
        echo twig_escape_filter($this->env, __trans("Currency"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            ";
        // line 348
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["currency", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "currency_get_pairs", [], "any", false, false, false, 348), twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "currency", [], "any", false, false, false, 348), 0, "Select currency"], 348, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 352
        echo twig_escape_filter($this->env, __trans("Exempt from tax"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioTaxExemptYes\" type=\"radio\" name=\"tax_exempt\" value=\"1\"";
        // line 355
        if (twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "tax_exempt", [], "any", false, false, false, 355)) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioTaxExemptYes\">";
        // line 356
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioTaxExemptNo\" type=\"radio\" name=\"tax_exempt\" value=\"0\"";
        // line 359
        if ( !twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "tax_exempt", [], "any", false, false, false, 359)) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioTaxExemptNo\">";
        // line 360
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\" for=\"created_at\">";
        // line 365
        echo twig_escape_filter($this->env, __trans("Signed up time"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"input-group\">
                                <div class=\"input-icon w-100\">
                                    <input class=\"form-control datepicker\"
                                           id=\"created_at\"
                                           value=\"";
        // line 371
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "created_at", [], "any", false, false, false, 371), "Y-m-d"), "html", null, true);
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
                        <label class=\"form-label col-3 col-form-label\">";
        // line 390
        echo twig_escape_filter($this->env, __trans("Notes"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <textarea class=\"form-control\" name=\"notes\" rows=\"5\">";
        // line 392
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "notes", [], "any", false, false, false, 392), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 396
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 396), "html", null, true);
        echo "\">
                    <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 397
        echo twig_escape_filter($this->env, __trans("Update profile"), "html", null, true);
        echo "</button>
                </form>
                <hr>

                <h5>";
        // line 401
        echo twig_escape_filter($this->env, __trans("Change password"), "html", null, true);
        echo "</h5>
                <form method=\"post\" action=\"";
        // line 402
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/client/change_password");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Password changed"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 403
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 405
        echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"password\" name=\"password\" value=\"\" required>
                        </div>
                    </div>

                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 412
        echo twig_escape_filter($this->env, __trans("Password confirm"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"password\" name=\"password_confirm\" value=\"\" required>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 418
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 418), "html", null, true);
        echo "\">
                    <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 419
        echo twig_escape_filter($this->env, __trans("Change password"), "html", null, true);
        echo "</button>
                </form>
                <hr>

                <h5>";
        // line 423
        echo twig_escape_filter($this->env, __trans("Custom fields"), "html", null, true);
        echo "</h5>
                <p class=\"text-muted\">";
        // line 424
        echo twig_escape_filter($this->env, __trans("Use these fields to define custom client details"), "html", null, true);
        echo "</p>
                <form method=\"post\" action=\"";
        // line 425
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/client/update");
        echo "\" class=\"api-form save\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Client Profile custom fields updated"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 426
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    ";
        // line 427
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 428
            echo "                    ";
            $context["fn"] = ("custom_" . $context["i"]);
            // line 429
            echo "                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
            // line 430
            echo twig_escape_filter($this->env, __trans("Custom field"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</label>
                        <div class=\"col\">
                            <textarea class=\"form-control\" name=\"custom_";
            // line 432
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" rows=\"2\">";
            echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["client"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["fn"] ?? null)] ?? null) : null), "html", null, true);
            echo "</textarea>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        echo "
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 437
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 437), "html", null, true);
        echo "\">
                    <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 438
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-orders\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h3>";
        // line 445
        echo twig_escape_filter($this->env, __trans("Client orders"), "html", null, true);
        echo "</h3>
            </div>

            <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <thead>
                        <tr>
                            <th class=\"w-1\">#</th>
                            <th>";
        // line 453
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                            <th>";
        // line 454
        echo twig_escape_filter($this->env, __trans("Amount"), "html", null, true);
        echo "</th>
                            <th>";
        // line 455
        echo twig_escape_filter($this->env, __trans("Period"), "html", null, true);
        echo "</th>
                            <th>";
        // line 456
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                            <th class=\"w-1\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 461
        $context["orders"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "order_get_list", [["per_page" => "20", "client_id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 461)]], "method", false, false, false, 461);
        // line 462
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "list", [], "any", false, false, false, 462));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 463
            echo "                        <tr>
                            <td>";
            // line 464
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 464), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 466
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/order/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 466), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 466), "html", null, true);
            echo "</a>
                            </td>
                            <td>";
            // line 468
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 468), twig_get_attribute($this->env, $this->source, $context["order"], "currency", [], "any", false, false, false, 468)], 468, $context, $this->getSourceContext());
            echo "</td>
                            <td>";
            // line 469
            echo twig_call_macro($macros["mf"], "macro_period_name", [twig_get_attribute($this->env, $this->source, $context["order"], "period", [], "any", false, false, false, 469)], 469, $context, $this->getSourceContext());
            echo "</td>
                            <td>
                                ";
            // line 471
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 471) == "pending_setup")) {
                // line 472
                echo "                                    <span class=\"badge bg-warning me-1\"></span>
                                ";
            }
            // line 474
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 474) == "active")) {
                // line 475
                echo "                                    <span class=\"badge bg-success me-1\"></span>
                                ";
            }
            // line 477
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 477) == "suspended")) {
                // line 478
                echo "                                    <span class=\"badge bg-danger me-1\"></span>
                                ";
            }
            // line 480
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 480) == "canceled")) {
                // line 481
                echo "                                    <span class=\"badge bg-secondary me-1\"></span>
                                ";
            }
            // line 483
            echo "                                ";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 483)], 483, $context, $this->getSourceContext());
            echo "
                            </td>
                            <td>
                                <a class=\"btn btn-icon\" href=\"";
            // line 486
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/order/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 486), "html", null, true);
            echo "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#settings\" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 494
            echo "                        <tr>
                            <td class=\"text-muted\" colspan=\"6\">";
            // line 495
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 498
        echo "                    </tbody>
                </table>
            </div>

            <div class=\"card-body\">
                <a href=\"";
        // line 503
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order", ["client_id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 503)]);
        echo "#tab-new\" class=\"btn btn-primary\">
                    <svg class=\"icon\">
                        <use xlink:href=\"#plus\" />
                    </svg>
                    ";
        // line 507
        echo twig_escape_filter($this->env, __trans("New order"), "html", null, true);
        echo "
                </a>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-invoice\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h5>";
        // line 514
        echo twig_escape_filter($this->env, __trans("Client invoices"), "html", null, true);
        echo "</h5>
            </div>

            <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <thead>
                        <tr>
                            <th class=\"w-1\">#</th>
                            <th>";
        // line 522
        echo twig_escape_filter($this->env, __trans("Amount"), "html", null, true);
        echo "</th>
                            <th>";
        // line 523
        echo twig_escape_filter($this->env, __trans("Issued on"), "html", null, true);
        echo "</th>
                            <th>";
        // line 524
        echo twig_escape_filter($this->env, __trans("Paid on"), "html", null, true);
        echo "</th>
                            <th>";
        // line 525
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                            <th class=\"w-1\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 530
        $context["invoices"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_get_list", [["per_page" => "100", "client_id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 530)]], "method", false, false, false, 530);
        // line 531
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["invoices"] ?? null), "list", [], "any", false, false, false, 531));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 532
            echo "                        <tr>
                            <td>
                                <a href=\"";
            // line 534
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 534), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "serie_nr", [], "any", false, false, false, 534), "html", null, true);
            echo "</a>
                            </td>
                            <td>";
            // line 536
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["invoice"], "total", [], "any", false, false, false, 536), twig_get_attribute($this->env, $this->source, $context["invoice"], "currency", [], "any", false, false, false, 536)], 536, $context, $this->getSourceContext());
            echo "</td>
                            <td>";
            // line 537
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "created_at", [], "any", false, false, false, 537)), "html", null, true);
            echo "</td>
                            <td>";
            // line 538
            if (twig_get_attribute($this->env, $this->source, $context["invoice"], "paid_at", [], "any", false, false, false, 538)) {
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "paid_at", [], "any", false, false, false, 538)), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                            <td>
                                ";
            // line 540
            if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 540) == "paid")) {
                // line 541
                echo "                                    <span class=\"badge bg-success me-1\"></span>
                                ";
            }
            // line 543
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 543) == "unpaid")) {
                // line 544
                echo "                                    <span class=\"badge bg-danger me-1\"></span>
                                ";
            }
            // line 546
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 546) == "refunded")) {
                // line 547
                echo "                                    <span class=\"badge bg-warning me-1\"></span>
                                ";
            }
            // line 549
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 549) == "canceled")) {
                // line 550
                echo "                                    <span class=\"badge bg-secondary me-1\"></span>
                                ";
            }
            // line 552
            echo "                                ";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 552)], 552, $context, $this->getSourceContext());
            echo "
                            </td>
                            <td>
                                <a class=\"btn btn-icon\" href=\"";
            // line 555
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 555), "html", null, true);
            echo "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#edit\" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 563
            echo "                        <tr>
                            <td colspan=\"6\">";
            // line 564
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 567
        echo "                    </tbody>
                </table>

                <div class=\"card-body\">
                    <a class=\"btn btn-primary api-link\"
                        href=\"";
        // line 572
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/prepare", ["client_id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 572), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\"
                        data-api-jsonp=\"onAfterInvoicePrepared\">
                        <svg class=\"icon\">
                            <use xlink:href=\"#plus\" />
                        </svg>
                        ";
        // line 577
        echo twig_escape_filter($this->env, __trans("New invoice"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-support\" role=\"tabpanel\" aria-labelledby=\"support-tab\">
            <div class=\"card-body\">
                <h5>";
        // line 585
        echo twig_escape_filter($this->env, __trans("Client support tickets"), "html", null, true);
        echo "</h5>
            </div>

            <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <thead>
                        <tr>
                            <th class=\"w-1\">#</th>
                            <th>";
        // line 593
        echo twig_escape_filter($this->env, __trans("Help desk"), "html", null, true);
        echo "</th>
                            <th>";
        // line 594
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo "</th>
                            <th>";
        // line 595
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                            <th class=\"w-1\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 600
        $context["tickets"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_ticket_get_list", [["per_page" => "20", "client_id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 600)]], "method", false, false, false, 600);
        // line 601
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "list", [], "any", false, false, false, 601));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 602
            echo "                        <tr>
                            <td>";
            // line 603
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 603), "html", null, true);
            echo "</td>
                            <td>";
            // line 604
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "helpdesk", [], "any", false, false, false, 604), "name", [], "any", false, false, false, 604), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 606
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 606), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 606), 30), "html", null, true);
            echo "</a>
                            </td>
                            <td>
                                ";
            // line 609
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 609) == "open")) {
                // line 610
                echo "                                    <span class=\"badge bg-success me-1\"></span>
                                ";
            }
            // line 612
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 612) == "on_hold")) {
                // line 613
                echo "                                    <span class=\"badge bg-warning me-1\"></span>
                                ";
            }
            // line 615
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 615) == "closed")) {
                // line 616
                echo "                                    <span class=\"badge bg-secondary me-1\"></span>
                                ";
            }
            // line 618
            echo "                                ";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 618)], 618, $context, $this->getSourceContext());
            echo "
                            </td>
                            <td>
                                <a class=\"btn btn-icon\" href=\"";
            // line 621
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 621), "html", null, true);
            echo "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#edit\" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 629
            echo "                        <tr>
                            <td class=\"text-muted\" colspan=\"5\">";
            // line 630
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 633
        echo "                    </tbody>
                </table>
            </div>

            <div class=\"card-body\">
                <a href=\"";
        // line 638
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["client_id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 638)]);
        echo "#tab-new\" class=\"btn btn-primary\">
                    <svg class=\"icon\">
                        <use xlink:href=\"#plus\" />
                    </svg>
                    ";
        // line 642
        echo twig_escape_filter($this->env, __trans("New support ticket"), "html", null, true);
        echo "
                </a>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-balance\" role=\"tabpanel\" aria-labelledby=\"balance-tab\">
            <div class=\"card-body\">
                <h5>";
        // line 649
        echo twig_escape_filter($this->env, __trans("Client payments history"), "html", null, true);
        echo "</h5>
            </div>

            <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <thead>
                        <tr>
                            <th>";
        // line 656
        echo twig_escape_filter($this->env, __trans("Amount"), "html", null, true);
        echo "</th>
                            <th>";
        // line 657
        echo twig_escape_filter($this->env, __trans("Description"), "html", null, true);
        echo "</th>
                            <th>";
        // line 658
        echo twig_escape_filter($this->env, __trans("Date"), "html", null, true);
        echo "</th>
                            <th class=\"w-1\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 663
        $context["payments"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_balance_get_list", [["per_page" => 20, "client_id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 663)]], "method", false, false, false, 663);
        // line 664
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["payments"] ?? null), "list", [], "any", false, false, false, 664));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 665
            echo "                        <tr>
                            <td>";
            // line 666
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["tx"], "amount", [], "any", false, false, false, 666), twig_get_attribute($this->env, $this->source, $context["tx"], "currency", [], "any", false, false, false, 666)], 666, $context, $this->getSourceContext());
            echo "</td>
                            <td>";
            // line 667
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "description", [], "any", false, false, false, 667), "html", null, true);
            echo "</td>
                            <td>";
            // line 668
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "created_at", [], "any", false, false, false, 668)), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-icon api-link\"
                                    href=\"";
            // line 671
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/client/balance_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["tx"], "id", [], "any", false, false, false, 671), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                                    data-api-confirm=\"";
            // line 672
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#delete\" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 680
            echo "                        <tr>
                            <td class=\"text-muted\" colspan=\"4\">";
            // line 681
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 684
        echo "                    </tbody>
                </table>
            </div>
            <hr>

            <div class=\"card-body\">
                <h5>";
        // line 690
        echo twig_escape_filter($this->env, __trans("Add funds for client"), "html", null, true);
        echo "</h5>
                <form class=\"api-form\"
                    method=\"post\"
                    action=\"";
        // line 693
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/client/balance_add_funds");
        echo "\"
                    data-api-msg=\"";
        // line 694
        echo twig_escape_filter($this->env, __trans("Funds added"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 695
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\" for=\"inputAmount\">";
        // line 697
        echo twig_escape_filter($this->env, __trans("Amount"), "html", null, true);
        echo ":</label>
                        <div class=\"col input-group\">
                            <input class=\"form-control\" type=\"text\" id=\"inputAmount\" name=\"amount\" required>
                            <span class=\"input-group-text\">";
        // line 700
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "currency", [], "any", false, false, false, 700), "html", null, true);
        echo "</span>
                        </div>
                    </div>

                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\" for=\"inputDescription\">";
        // line 705
        echo twig_escape_filter($this->env, __trans("Description"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" id=\"inputDescription\" type=\"text\" name=\"description\" required>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 711
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 711), "html", null, true);
        echo "\">

                    <div class=\"text-end\">
                        <button class=\"btn btn-primary\" type=\"submit\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#plus\" />
                            </svg>
                            ";
        // line 718
        echo twig_escape_filter($this->env, __trans("Add funds"), "html", null, true);
        echo "
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-history\" role=\"tabpanel\" aria-labelledby=\"history-tab\">
            <div class=\"card-body\">
                <h5>";
        // line 727
        echo twig_escape_filter($this->env, __trans("Logins history"), "html", null, true);
        echo "</h5>
            </div>

            <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <thead>
                        <tr>
                            <th>";
        // line 734
        echo twig_escape_filter($this->env, __trans("IP"), "html", null, true);
        echo "</th>
                            <th>";
        // line 735
        echo twig_escape_filter($this->env, __trans("Country"), "html", null, true);
        echo "</th>
                            <th>";
        // line 736
        echo twig_escape_filter($this->env, __trans("Date"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>

                    <tbody>
                        ";
        // line 741
        $context["logins"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_login_history_get_list", [["per_page" => 10, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 741), "client_id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 741)]], "method", false, false, false, 741);
        // line 742
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["logins"] ?? null), "list", [], "any", false, false, false, 742));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["login"]) {
            // line 743
            echo "                        <tr>
                            <td>";
            // line 744
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["login"], "ip", [], "any", false, false, false, 744), "html", null, true);
            echo "</td>
                            <td>";
            // line 745
            echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Box_TwigExtensions']->twig_ipcountryname_filter(twig_get_attribute($this->env, $this->source, $context["login"], "ip", [], "any", false, false, false, 745)), "Unknown"), "html", null, true);
            echo "</td>
                            <td>";
            // line 746
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["login"], "created_at", [], "any", false, false, false, 746)), "html", null, true);
            echo "</td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 749
            echo "                        <tr>
                            <td class=\"text-muted\" colspan=\"3\">";
            // line 750
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['login'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 753
        echo "                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-emails\" role=\"tabpanel\" aria-labelledby=\"emails-tab\">
            <div class=\"card-body\">
                <h3>";
        // line 760
        echo twig_escape_filter($this->env, __trans("Emails sent to client"), "html", null, true);
        echo "</h3>
            </div>

            <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <thead>
                        <tr>
                            <th>";
        // line 767
        echo twig_escape_filter($this->env, __trans("Email subject"), "html", null, true);
        echo "</th>
                            <th>";
        // line 768
        echo twig_escape_filter($this->env, __trans("To"), "html", null, true);
        echo "</th>
                            <th>";
        // line 769
        echo twig_escape_filter($this->env, __trans("Date"), "html", null, true);
        echo "</th>
                            <th class=\"w-1\"></th>
                        </tr>
                    </thead>

                    <tbody>
                        ";
        // line 775
        $context["emails"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "email_email_get_list", [["per_page" => "20", "client_id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 775)]], "method", false, false, false, 775);
        // line 776
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["emails"] ?? null), "list", [], "any", false, false, false, 776));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["email"]) {
            // line 777
            echo "                        <tr>
                            <td>";
            // line 778
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "subject", [], "any", false, false, false, 778), "html", null, true);
            echo "</td>
                            <td>";
            // line 779
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "recipients", [], "any", false, false, false, 779), "html", null, true);
            echo "</td>
                            <td>";
            // line 780
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "created_at", [], "any", false, false, false, 780)), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-icon\" href=\"";
            // line 782
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("email");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 782), "html", null, true);
            echo "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#edit\"></use>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 790
            echo "                        <tr>
                            <td class=\"text-muted\" colspan=\"4\">";
            // line 791
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 794
        echo "                    </tbody>
                </table>
            </div>
            ";
        // line 797
        $this->loadTemplate("partial_pagination.html.twig", "mod_client_manage.html.twig", 797)->display(twig_array_merge($context, ["list" => ($context["emails"] ?? null)]));
        // line 798
        echo "        </div>

        <div class=\"tab-pane fade\" id=\"tab-transactions\" role=\"tabpanel\" aria-labelledby=\"transactions-tab\">
            <div class=\"card-body\">
                <h5>";
        // line 802
        echo twig_escape_filter($this->env, __trans("Transactions received"), "html", null, true);
        echo "</h5>
            </div>

            ";
        // line 805
        $context["transactions"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_transaction_get_list", [["client_id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 805), "per_page" => 100]], "method", false, false, false, 805), "list", [], "any", false, false, false, 805);
        // line 806
        echo "            <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <thead>
                        <tr>
                            <th>";
        // line 810
        echo twig_escape_filter($this->env, __trans("ID"), "html", null, true);
        echo "</th>
                            <th>";
        // line 811
        echo twig_escape_filter($this->env, __trans("Type"), "html", null, true);
        echo "</th>
                            <th>";
        // line 812
        echo twig_escape_filter($this->env, __trans("Gateway"), "html", null, true);
        echo "</th>
                            <th>";
        // line 813
        echo twig_escape_filter($this->env, __trans("Amount"), "html", null, true);
        echo "</th>
                            <th>";
        // line 814
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                            <th>";
        // line 815
        echo twig_escape_filter($this->env, __trans("Date"), "html", null, true);
        echo "</th>
                            <th class=\"w-1\"></th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 820
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 821
            echo "                        <tr>
                            <td>";
            // line 822
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "txn_id", [], "any", false, false, false, 822), "html", null, true);
            echo "</td>
                            <td>";
            // line 823
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "type", [], "any", false, false, false, 823), "html", null, true);
            echo "</td>
                            <td>";
            // line 824
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "gateway", [], "any", false, false, false, 824), "html", null, true);
            echo "</td>
                            <td>";
            // line 825
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["tx"], "amount", [], "any", false, false, false, 825), twig_get_attribute($this->env, $this->source, $context["tx"], "currency", [], "any", false, false, false, 825)], 825, $context, $this->getSourceContext());
            echo "</td>
                            <td>";
            // line 826
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["tx"], "status", [], "any", false, false, false, 826)], 826, $context, $this->getSourceContext());
            echo "</td>
                            <td>";
            // line 827
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "created_at", [], "any", false, false, false, 827)), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-icon\" href=\"";
            // line 829
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice/transaction");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "id", [], "any", false, false, false, 829), "html", null, true);
            echo "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#edit\" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 837
            echo "                        <tr>
                            <td class=\"text-muted\" colspan=\"7\">";
            // line 838
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 841
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 849
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 850
        echo "<script>
    function onAfterInvoicePrepared(id) {
        bb.redirect(\"";
        // line 852
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice/manage/");
        echo "/\" + id);
    }
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_client_manage.html.twig";
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
        return array (  1866 => 852,  1862 => 850,  1858 => 849,  1848 => 841,  1839 => 838,  1836 => 837,  1821 => 829,  1816 => 827,  1812 => 826,  1808 => 825,  1804 => 824,  1800 => 823,  1796 => 822,  1793 => 821,  1788 => 820,  1780 => 815,  1776 => 814,  1772 => 813,  1768 => 812,  1764 => 811,  1760 => 810,  1754 => 806,  1752 => 805,  1746 => 802,  1740 => 798,  1738 => 797,  1733 => 794,  1724 => 791,  1721 => 790,  1706 => 782,  1701 => 780,  1697 => 779,  1693 => 778,  1690 => 777,  1684 => 776,  1682 => 775,  1673 => 769,  1669 => 768,  1665 => 767,  1655 => 760,  1646 => 753,  1637 => 750,  1634 => 749,  1626 => 746,  1622 => 745,  1618 => 744,  1615 => 743,  1609 => 742,  1607 => 741,  1599 => 736,  1595 => 735,  1591 => 734,  1581 => 727,  1569 => 718,  1559 => 711,  1550 => 705,  1542 => 700,  1536 => 697,  1531 => 695,  1527 => 694,  1523 => 693,  1517 => 690,  1509 => 684,  1500 => 681,  1497 => 680,  1484 => 672,  1480 => 671,  1474 => 668,  1470 => 667,  1466 => 666,  1463 => 665,  1457 => 664,  1455 => 663,  1447 => 658,  1443 => 657,  1439 => 656,  1429 => 649,  1419 => 642,  1412 => 638,  1405 => 633,  1396 => 630,  1393 => 629,  1378 => 621,  1371 => 618,  1367 => 616,  1364 => 615,  1360 => 613,  1357 => 612,  1353 => 610,  1351 => 609,  1341 => 606,  1336 => 604,  1332 => 603,  1329 => 602,  1323 => 601,  1321 => 600,  1313 => 595,  1309 => 594,  1305 => 593,  1294 => 585,  1283 => 577,  1275 => 572,  1268 => 567,  1259 => 564,  1256 => 563,  1241 => 555,  1234 => 552,  1230 => 550,  1227 => 549,  1223 => 547,  1220 => 546,  1216 => 544,  1213 => 543,  1209 => 541,  1207 => 540,  1198 => 538,  1194 => 537,  1190 => 536,  1181 => 534,  1177 => 532,  1171 => 531,  1169 => 530,  1161 => 525,  1157 => 524,  1153 => 523,  1149 => 522,  1138 => 514,  1128 => 507,  1121 => 503,  1114 => 498,  1105 => 495,  1102 => 494,  1087 => 486,  1080 => 483,  1076 => 481,  1073 => 480,  1069 => 478,  1066 => 477,  1062 => 475,  1059 => 474,  1055 => 472,  1053 => 471,  1048 => 469,  1044 => 468,  1035 => 466,  1030 => 464,  1027 => 463,  1021 => 462,  1019 => 461,  1011 => 456,  1007 => 455,  1003 => 454,  999 => 453,  988 => 445,  978 => 438,  974 => 437,  971 => 436,  959 => 432,  952 => 430,  949 => 429,  946 => 428,  942 => 427,  938 => 426,  932 => 425,  928 => 424,  924 => 423,  917 => 419,  913 => 418,  904 => 412,  894 => 405,  889 => 403,  883 => 402,  879 => 401,  872 => 397,  868 => 396,  861 => 392,  856 => 390,  834 => 371,  825 => 365,  817 => 360,  811 => 359,  805 => 356,  799 => 355,  793 => 352,  786 => 348,  781 => 346,  772 => 342,  767 => 340,  762 => 338,  756 => 335,  750 => 332,  745 => 330,  737 => 325,  733 => 324,  726 => 320,  719 => 316,  714 => 314,  707 => 310,  702 => 308,  694 => 304,  689 => 301,  682 => 297,  677 => 295,  669 => 290,  664 => 288,  657 => 284,  652 => 282,  647 => 280,  641 => 277,  631 => 272,  623 => 269,  615 => 266,  608 => 262,  585 => 242,  576 => 236,  567 => 230,  561 => 227,  554 => 223,  547 => 219,  542 => 217,  535 => 213,  530 => 211,  522 => 206,  516 => 205,  510 => 202,  504 => 201,  498 => 198,  490 => 193,  484 => 192,  478 => 189,  472 => 188,  466 => 185,  460 => 184,  454 => 181,  446 => 176,  440 => 175,  434 => 172,  428 => 171,  422 => 168,  416 => 167,  410 => 164,  405 => 162,  399 => 161,  395 => 160,  385 => 153,  378 => 149,  374 => 148,  370 => 147,  364 => 144,  355 => 140,  345 => 133,  341 => 132,  324 => 128,  318 => 127,  313 => 125,  307 => 122,  303 => 121,  295 => 118,  291 => 116,  284 => 112,  276 => 107,  273 => 106,  271 => 105,  266 => 103,  262 => 102,  256 => 99,  252 => 98,  246 => 95,  242 => 94,  234 => 90,  230 => 88,  227 => 87,  223 => 85,  220 => 84,  216 => 82,  214 => 81,  209 => 79,  203 => 76,  199 => 75,  193 => 72,  189 => 71,  181 => 68,  177 => 67,  171 => 64,  167 => 63,  159 => 58,  148 => 50,  142 => 47,  136 => 44,  130 => 41,  124 => 38,  118 => 35,  112 => 32,  106 => 29,  100 => 26,  96 => 24,  92 => 23,  83 => 19,  76 => 17,  67 => 10,  63 => 9,  54 => 7,  49 => 1,  47 => 5,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_client_manage.html.twig", "/var/www/modules/Client/html_admin/mod_client_manage.html.twig");
    }
}
