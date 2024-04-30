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

/* mod_order_manage.html.twig */
class __TwigTemplate_bff94857377ef6cdf90f7831a2fdba4a extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_order_manage.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_order_manage.html.twig", 3)->unwrap();
        // line 23
        $context["active_menu"] = "order";
        // line 25
        $context["service_partial"] = (("mod_service" . twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "service_type", [], "any", false, false, false, 25)) . "_manage.html.twig");
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "group_master", [], "any", false, false, false, 26) == 1)) {
            // line 27
            $context["addons"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "order_addons", [["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 27)]], "method", false, false, false, 27);
        }
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <ul class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 10
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#home\" />
                </svg>
            </a>
        </li>
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 17
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Orders"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</li>
    </ul>
";
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "<div class=\"card\">
    <div class=\"card-body\">
        <h5>";
        // line 33
        echo twig_escape_filter($this->env, __trans("Order Management"), "html", null, true);
        echo "</h5>
    </div>

    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-info\" data-bs-toggle=\"tab\">";
        // line 38
        echo twig_escape_filter($this->env, __trans("Details"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-manage\" data-bs-toggle=\"tab\">";
        // line 41
        echo twig_escape_filter($this->env, __trans("Edit order"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-config\" data-bs-toggle=\"tab\">";
        // line 44
        echo twig_escape_filter($this->env, __trans("Edit order config"), "html", null, true);
        echo "</a>
        </li>
        ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_template_exists", [["file" => ($context["service_partial"] ?? null)]], "method", false, false, false, 46)) {
            // line 47
            echo "        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-service\" data-bs-toggle=\"tab\">";
            // line 48
            echo twig_escape_filter($this->env, __trans("Service management"), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 51
        echo "        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-invoices\" data-bs-toggle=\"tab\">";
        // line 52
        echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
        echo "</a>
        </li>
        ";
        // line 54
        if ((twig_length_filter($this->env, ($context["addons"] ?? null)) > 0)) {
            // line 55
            echo "        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-addons\" data-bs-toggle=\"tab\">";
            // line 56
            echo twig_escape_filter($this->env, __trans("Addons"), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 59
        echo "        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-status\" data-bs-toggle=\"tab\">";
        // line 60
        echo twig_escape_filter($this->env, __trans("History"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-support\" data-bs-toggle=\"tab\">";
        // line 63
        echo twig_escape_filter($this->env, __trans("Support"), "html", null, true);
        echo "</a>
        </li>
    </ul>

    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-info\" role=\"tabpanel\">
            <div class=\"card-body overflow-auto\">
                <h3>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 70), "html", null, true);
        echo "</h3>

                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <tbody>
                        <tr>
                            <td class=\"w-50 text-end\">";
        // line 75
        echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
        echo "</td>
                            <td>#";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 76), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "service_type", [], "any", false, false, false, 76), "html", null, true);
        echo ")</td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 79
        echo twig_escape_filter($this->env, __trans("Client"), "html", null, true);
        echo "</td>
                            <td><a href=\"";
        // line 80
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "client", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "client", [], "any", false, false, false, 80), "first_name", [], "any", false, false, false, 80), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "client", [], "any", false, false, false, 80), "last_name", [], "any", false, false, false, 80), "html", null, true);
        echo "</a></td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 83
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</td>
                            <td><a href=\"";
        // line 84
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product/manage");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "product_id", [], "any", false, false, false, 84), "html", null, true);
        echo "\"><strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 84), "html", null, true);
        echo "</strong></a></td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 87
        echo twig_escape_filter($this->env, __trans("Payment amount"), "html", null, true);
        echo "</td>
                            <td>";
        // line 88
        echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 88)], 88, $context, $this->getSourceContext());
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "period", [], "any", false, false, false, 88)) {
            echo twig_call_macro($macros["mf"], "macro_period_name", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "period", [], "any", false, false, false, 88)], 88, $context, $this->getSourceContext());
        }
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "quantity", [], "any", false, false, false, 88) > 1)) {
            echo "(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "quantity", [], "any", false, false, false, 88), "html", null, true);
            echo " x ";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "price", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 88)], 88, $context, $this->getSourceContext());
            echo ")";
        }
        echo "</td>
                        </tr>
                        ";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "discount", [], "any", false, false, false, 90) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "discount", [], "any", false, false, false, 90) > 0))) {
            // line 91
            echo "                        <tr>
                            <td class=\"text-end\">";
            // line 92
            echo twig_escape_filter($this->env, __trans("Order discount"), "html", null, true);
            echo "</td>
                            <td>-";
            // line 93
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "discount", [], "any", false, false, false, 93), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 93)], 93, $context, $this->getSourceContext());
            echo " </td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
            // line 96
            echo twig_escape_filter($this->env, __trans("Payment amount after discount"), "html", null, true);
            echo "</td>
                            <td>";
            // line 97
            echo twig_call_macro($macros["mf"], "macro_currency_format", [(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 97) - twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "discount", [], "any", false, false, false, 97)), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 97)], 97, $context, $this->getSourceContext());
            echo " </td>
                        </tr>
                        ";
        }
        // line 100
        echo "                        <tr>
                            <td class=\"text-end\">";
        // line 101
        echo twig_escape_filter($this->env, __trans("Order status"), "html", null, true);
        echo "</td>
                            <td>
                            ";
        // line 103
        if ((((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 103) == "pending_setup") || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 103) == "failed_setup")) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 103) == "failed_renew"))) {
            // line 104
            echo "                                <span class=\"badge bg-warning me-1\"></span>
                            ";
        }
        // line 106
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 106) == "active")) {
            // line 107
            echo "                                <span class=\"badge bg-success me-1\"></span>
                            ";
        }
        // line 109
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 109) == "suspended")) {
            // line 110
            echo "                                <span class=\"badge bg-danger me-1\"></span>
                            ";
        }
        // line 112
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 112) == "canceled")) {
            // line 113
            echo "                                <span class=\"badge bg-secondary me-1\"></span>
                            ";
        }
        // line 115
        echo "                            ";
        echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 115)], 115, $context, $this->getSourceContext());
        echo "
                            </td>
                        </tr>
                        ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 118)) {
            // line 119
            echo "                        <tr>
                            <td class=\"text-end\">";
            // line 120
            echo twig_escape_filter($this->env, __trans("Order notes"), "html", null, true);
            echo "</td>
                            <td>
                                <svg class=\"icon\">
                                    <use xlink:href=\"#support\" />
                                </svg>
                                <a>";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 125), "html", null, true);
            echo "</a>
                            </td>
                        </tr>
                        ";
        }
        // line 129
        echo "                        <tr>
                            <td class=\"text-end\">";
        // line 130
        echo twig_escape_filter($this->env, __trans("Order Date"), "html", null, true);
        echo "</td>
                            <td>";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "created_at", [], "any", false, false, false, 131)), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 134
        echo twig_escape_filter($this->env, __trans("Activation Date"), "html", null, true);
        echo "</td>
                            <td>";
        // line 135
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "activated_at", [], "any", false, false, false, 135)) {
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "activated_at", [], "any", false, false, false, 135)), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "activated_at", [], "any", false, false, false, 135)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
            echo ")";
        } else {
            echo "-";
        }
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 138
        echo twig_escape_filter($this->env, __trans("Renewal Date"), "html", null, true);
        echo "</td>
                            <td>";
        // line 139
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 139)) {
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 139)), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_daysleft_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 139)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("day(s)"), "html", null, true);
            echo ")";
        } else {
            echo "-";
        }
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"text-end\">";
        // line 142
        echo twig_escape_filter($this->env, __trans("Order group ID"), "html", null, true);
        echo "</td>
                            <td>";
        // line 143
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "group_id", [], "any", true, true, false, 143)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "group_id", [], "any", false, false, false, 143), "-")) : ("-")), "html", null, true);
        echo "</td>
                        </tr>
                        ";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "promo_id", [], "any", false, false, false, 145)) {
            // line 146
            echo "                        <tr>
                            <td class=\"text-end\">";
            // line 147
            echo twig_escape_filter($this->env, __trans("Order promo code"), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 149
            $context["promo"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_promo_get", [["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "promo_id", [], "any", false, false, false, 149)]], "method", false, false, false, 149);
            // line 150
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["promo"] ?? null), "code", [], "any", false, false, false, 150), "html", null, true);
            echo "
                            </td>
                        </tr>
                        ";
        }
        // line 154
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "active_tickets", [], "any", false, false, false, 154) > 0)) {
            // line 155
            echo "                        <tr>
                            <td class=\"text-end\">";
            // line 156
            echo twig_escape_filter($this->env, __trans("Active support tickets"), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"num\">
                                    <a href=\"";
            // line 159
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["status" => "open", "order_id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 159)]);
            echo "\" class=\"redNum\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "active_tickets", [], "any", false, false, false, 159), "html", null, true);
            echo "</a>
                                </div>
                            </td>
                        </tr>
                        ";
        }
        // line 164
        echo "                    </tbody>
                </table>
            </div>

            <div class=\"card-footer text-center\">
                ";
        // line 169
        ob_start(function () { return ''; });
        // line 170
        echo "                    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 170) == "pending_setup") || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 170) == "failed_setup"))) {
            // line 171
            echo "                    <a class=\"btn btn-primary api-link\"
                        href=\"";
            // line 172
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/order/activate", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 172), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                        data-api-confirm=\"";
            // line 173
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                        data-api-reload=\"";
            // line 174
            echo twig_escape_filter($this->env, __trans("Order activated"), "html", null, true);
            echo "\">
                        <svg class=\"icon\" width=\"24\" height=\"24\">
                            <use xlink:href=\"#play\" />
                        </svg>
                        <span>";
            // line 178
            echo twig_escape_filter($this->env, __trans("Activate"), "html", null, true);
            echo "</span>
                    </a>
                    ";
        }
        // line 181
        echo "
                    ";
        // line 182
        if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 182) == "active") || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 182) == "failed_renew"))) {
            // line 183
            echo "                    ";
            $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_order"]], "method", false, false, false, 183);
            // line 184
            echo "                    <a class=\"btn btn-primary api-link\"
                        href=\"";
            // line 185
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/order/renew", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 185), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                        data-api-confirm=\"";
            // line 186
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                        data-api-reload=\"";
            // line 187
            echo twig_escape_filter($this->env, __trans("Order renewed"), "html", null, true);
            echo "\">
                        <svg class=\"icon\" width=\"24\" height=\"24\">
                            <use xlink:href=\"#refresh\" />
                        </svg>
                        <span>";
            // line 191
            echo twig_escape_filter($this->env, __trans("Renew"), "html", null, true);
            echo "</span>
                    </a>

                    ";
            // line 194
            if ((twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "suspend_reason_list", [], "any", false, false, false, 194)) == null)) {
                // line 195
                echo "                    <a class=\"btn btn-primary api-link\"
                        href=\"";
                // line 196
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/order/suspend", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 196), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                echo "\"
                        data-api-prompt-key=\"reason\"
                        data-api-prompt=\"1\"
                        data-api-prompt-text=\"";
                // line 199
                echo twig_escape_filter($this->env, __trans("Reason of suspension"), "html", null, true);
                echo "\"
                        data-api-prompt-title=\"";
                // line 200
                echo twig_escape_filter($this->env, __trans("Suspension reason"), "html", null, true);
                echo "\"
                        data-api-reload=\"";
                // line 201
                echo twig_escape_filter($this->env, __trans("Order suspended"), "html", null, true);
                echo "\">
                        <svg class=\"icon\" width=\"24\" height=\"24\">
                            <use xlink:href=\"#pause\" />
                        </svg>
                        <span>";
                // line 205
                echo twig_escape_filter($this->env, __trans("Suspend"), "html", null, true);
                echo "</span>
                    </a>
                    ";
            } else {
                // line 208
                echo "                    <div id=\"suspend_popup\" style=\"position: fixed; z-index: 99999; padding: 5px; margin: 0px; min-width: 310px; max-width: 310px; top: 30%; left: 45%; display: none;\">
                        <h5 id=\"suspend_popup_title\">";
                // line 209
                echo twig_escape_filter($this->env, __trans("Suspension reason"), "html", null, true);
                echo "</h5>
                        <div id=\"suspend_popup_content\" class=\"confirm\">
                            <div id=\"suspend_popup_message\">
                                <div>";
                // line 212
                echo twig_escape_filter($this->env, __trans("Reason of suspension"), "html", null, true);
                echo "
                                    ";
                // line 213
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "suspend_reason_list", [], "any", false, false, false, 213)), "
"));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    // line 214
                    echo "                                    <div class=\"item\">
                                        <input type=\"radio\" value=\"";
                    // line 215
                    echo twig_escape_filter($this->env, $context["reason"], "html", null, true);
                    echo "\" name=\"reason\">
                                        <label>";
                    // line 216
                    echo twig_escape_filter($this->env, $context["reason"], "html", null, true);
                    echo "</label>
                                    </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 219
                echo "                                </div>
                            </div>
                            <div id=\"suspend_popup_panel\">
                                <input type=\"button\" class=\"btn btn-primary w-100\" value=\"&nbsp;";
                // line 222
                echo twig_escape_filter($this->env, __trans("Suspend"), "html", null, true);
                echo "&nbsp;\" id=\"popup_ok\" onclick=\"return susp.suspendOrder('/api/admin/order/suspend?id=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 222), "html", null, true);
                echo "', 'reason');\">
                                <input type=\"button\" class=\"btn btn-primary\" value=\"&nbsp;Cancel&nbsp;\" id=\"popup_cancel\" onclick=\"return susp.suspenderHide();\">
                            </div>
                        </div>
                    </div>
                    <a class=\"btn btn-primary\"
                        id=\"suspend_button\"
                        href=\"#\"
                        onclick=\"return susp.showSuspendPopup()\"
                        data-api-reload=\"";
                // line 231
                echo twig_escape_filter($this->env, __trans("Order suspended"), "html", null, true);
                echo "\">
                        <svg class=\"icon\" width=\"24\" height=\"24\">
                            <use xlink:href=\"#close\" />
                        </svg>
                        <span>";
                // line 235
                echo twig_escape_filter($this->env, __trans("Suspend"), "html", null, true);
                echo "</span>
                    </a>
                    ";
            }
            // line 238
            echo "                    <a class=\"btn btn-primary api-link\"
                        href=\"";
            // line 239
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/order/cancel", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 239), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                        data-api-prompt-key=\"reason\"
                        data-api-prompt=\"1\"
                        data-api-prompt-text=\"";
            // line 242
            echo twig_escape_filter($this->env, __trans("Reason of cancelation"), "html", null, true);
            echo "\"
                        data-api-prompt-title=\"";
            // line 243
            echo twig_escape_filter($this->env, __trans("Cancelation reason"), "html", null, true);
            echo "\"
                        data-api-reload=\"";
            // line 244
            echo twig_escape_filter($this->env, __trans("Order canceled"), "html", null, true);
            echo "\">
                        <svg class=\"icon\" width=\"24\" height=\"24\">
                            <use xlink:href=\"#close\" />
                        </svg>
                        <span>";
            // line 248
            echo twig_escape_filter($this->env, __trans("Cancel"), "html", null, true);
            echo "</span>
                    </a>
                    ";
        }
        // line 251
        echo "
                    ";
        // line 252
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 252) == "suspended")) {
            // line 253
            echo "                    <a class=\"btn btn-primary api-link\"
                        href=\"";
            // line 254
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/order/unsuspend", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 254), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                        data-api-confirm=\"";
            // line 255
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                        data-api-reload=\"";
            // line 256
            echo twig_escape_filter($this->env, __trans("Order activated"), "html", null, true);
            echo "\">
                        <svg class=\"icon\" width=\"24\" height=\"24\">
                            <use xlink:href=\"#play\" />
                        </svg>
                        <span>";
            // line 260
            echo twig_escape_filter($this->env, __trans("Unsuspend"), "html", null, true);
            echo "</span>
                    </a>
                    ";
        }
        // line 263
        echo "
                    ";
        // line 264
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 264) == "canceled")) {
            // line 265
            echo "                    <a class=\"btn btn-primary api-link\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/order/uncancel", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 265), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" data-api-confirm=\"";
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" class=\"btn btn-primary api-link\" data-api-reload=\"Order activated\">
                        <svg class=\"icon\" width=\"24\" height=\"24\">
                            <use xlink:href=\"#play\" />
                        </svg>
                        <span>";
            // line 269
            echo twig_escape_filter($this->env, __trans("Activate"), "html", null, true);
            echo "</span>
                    </a>
                    ";
        }
        // line 272
        echo "
                    <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                        <svg class=\"icon\" width=\"24\" height=\"24\">
                            <use xlink:href=\"#delete\" />
                        </svg>
                        <span>";
        // line 277
        echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
        echo "</span>
                    </button>

                    ";
        // line 280
        if ( !twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "unpaid_invoice_id", [], "any", false, false, false, 280)) {
            // line 281
            echo "                    <a class=\"btn btn-primary api-link\"
                        href=\"";
            // line 282
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/renewal_invoice", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 282), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                        data-api-confirm=\"";
            // line 283
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                        data-api-reload=\"1\">
                        <svg class=\"icon\" width=\"24\" height=\"24\">
                            <use xlink:href=\"#plus\" />
                        </svg>
                        <span>";
            // line 288
            echo twig_escape_filter($this->env, __trans("Issue invoice"), "html", null, true);
            echo "</span>
                    </a>
                    ";
        }
        // line 291
        echo "                ";
        $context["order_actions"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 292
        echo "
                ";
        // line 293
        echo twig_escape_filter($this->env, ($context["order_actions"] ?? null), "html", null, true);
        echo "
            </div>
        </div>

        <div class=\"modal modal-blur fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered modal-sm\">
                <div class=\"modal-content\">
                    <form method=\"post\" action=\"";
        // line 300
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/order/delete");
        echo "\" class=\"api-form\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
        echo "\">
                        <div class=\"modal-status bg-danger\"></div>
                        <div class=\"modal-body\">
                            <div class=\"modal-title\">";
        // line 303
        echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
        echo "</div>
                            <input name=\"id\" type=\"number\" hidden value=\"";
        // line 304
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 304), "html", null, true);
        echo "\">
                            <p>";
        // line 305
        echo twig_escape_filter($this->env, __trans("Are you sure you want to delete the selected item?"), "html", null, true);
        echo "</p>
                            <div class=\"mb-3 form-check\">
                                <input type=\"checkbox\" name=\"force_delete\" class=\"form-check-input\" id=\"forceDelete\">
                                <label class=\"form-check-label\"for=\"forceDelete\">";
        // line 308
        echo twig_escape_filter($this->env, __trans("Force the deletion of the item"), "html", null, true);
        echo "</label>
                            </div>
                            <span class=\"text-muted\">";
        // line 310
        echo twig_escape_filter($this->env, __trans("Selecting this will force the item to be removed from the database even if errors occur."), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 313
        echo twig_escape_filter($this->env, __trans("Cancel"), "html", null, true);
        echo "</button>
                            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 314
        echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-manage\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h3>";
        // line 323
        echo twig_escape_filter($this->env, __trans("Order Management"), "html", null, true);
        echo "</h2>
                <form method=\"post\" action=\"";
        // line 324
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/order/update");
        echo "\" class=\"api-form\" data-api-reload=\"1\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 325
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 327
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 329
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 329), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 333
        echo twig_escape_filter($this->env, __trans("Changes status without performing action"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            ";
        // line 335
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["status", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "order_get_status_pairs", [], "any", false, false, false, 335), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 335), 0, "Select status"], 335, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 339
        echo twig_escape_filter($this->env, __trans("Invoice option"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            ";
        // line 341
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["invoice_option", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "order_get_invoice_options", [], "any", false, false, false, 341), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "invoice_option", [], "any", false, false, false, 341)], 341, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 345
        echo twig_escape_filter($this->env, __trans("Price"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"price\" value=\"";
        // line 347
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "price", [], "any", false, false, false, 347), "html", null, true);
        echo "\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 351
        echo twig_escape_filter($this->env, __trans("Reason"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"reason\" value=\"";
        // line 353
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reason", [], "any", false, false, false, 353), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 357
        echo twig_escape_filter($this->env, __trans("Period"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            ";
        // line 359
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["period", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_periods", [], "any", false, false, false, 359), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "period", [], "any", false, false, false, 359), 0, "Not recurrent"], 359, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\" for=\"expires_at\">";
        // line 363
        echo twig_escape_filter($this->env, __trans("Date Expires"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <div class=\"input-group\">
                                <div class=\"input-icon w-100\">
                                    <input class=\"form-control datepicker\"
                                           id=\"expires_at\"
                                           value=\"";
        // line 369
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 369)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 369), "Y-m-d"), "html", null, true);
        }
        echo "\"
                                           name=\"expires_at\"
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
        // line 388
        echo twig_escape_filter($this->env, __trans("Notes"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <textarea class=\"form-control\" name=\"notes\" rows=\"2\">";
        // line 390
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 390), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 394
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 394), "html", null, true);
        echo "\">
                    <input type=\"submit\" value=\"";
        // line 395
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
                </form>
            </div>

            ";
        // line 416
        echo "            ";
        // line 417
        echo "
            ";
        // line 439
        echo "        </div>

        <div class=\"tab-pane fade\" id=\"tab-config\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h5>";
        // line 443
        echo twig_escape_filter($this->env, __trans("Order config management"), "html", null, true);
        echo "</h5>
                <p class=\"text-muted\">";
        // line 444
        echo twig_escape_filter($this->env, __trans("Please be cautious and make sure you know what you are doing when editing order config! FOSSBilling relies on these parameters and you might get unexpected results if you change some of them."), "html", null, true);
        echo "</p>

                <form method=\"post\" action=\"";
        // line 446
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/order/update_config");
        echo "\" class=\"api-form\" data-api-reload=\"1\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 447
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    ";
        // line 448
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "config", [], "any", false, false, false, 448));
        foreach ($context['_seq'] as $context["key"] => $context["config"]) {
            // line 449
            echo "                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
            // line 450
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</label>
                        <div class=\"col\">
                            ";
            // line 452
            if (is_iterable($context["config"])) {
                // line 453
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["config"]);
                foreach ($context['_seq'] as $context["key2"] => $context["config2"]) {
                    // line 454
                    echo "                                    <input class=\"form-control\" type=\"text\" name=\"config[";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, $context["key2"], "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $context["config2"], "html", null, true);
                    echo "\"";
                    if ((null === $context["config2"])) {
                        echo " placeholder=\"null\"";
                    }
                    echo ">
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['config2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 456
                echo "                            ";
            } else {
                // line 457
                echo "                                <input class=\"form-control\" type=\"text\" name=\"config[";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, $context["config"], "html", null, true);
                echo "\"";
                if ((null === $context["config"])) {
                    echo " placeholder=\"null\"";
                }
                echo ">
                            ";
            }
            // line 459
            echo "                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 462
        echo "
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 463
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 463), "html", null, true);
        echo "\">
                    <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 464
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-addons\" role=\"tabpanel\">
            <div class=\"help\">
                <h3>";
        // line 471
        echo twig_escape_filter($this->env, __trans("Addons you have ordered with this service"), "html", null, true);
        echo "</h3>
            </div>
            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <thead>
                    <tr>
                        <th>";
        // line 476
        echo twig_escape_filter($this->env, __trans("Product/Service"), "html", null, true);
        echo "</th>
                        <th>";
        // line 477
        echo twig_escape_filter($this->env, __trans("Billing Cycle"), "html", null, true);
        echo "</th>
                        <th>";
        // line 478
        echo twig_escape_filter($this->env, __trans("Price"), "html", null, true);
        echo "</th>
                        <th>";
        // line 479
        echo twig_escape_filter($this->env, __trans("Next due date"), "html", null, true);
        echo "</th>
                        <th>";
        // line 480
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                        <th class=\"w-1\"></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 485
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addons"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["addon"]) {
            // line 486
            echo "                    <tr>
                        <td>";
            // line 487
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "title", [], "any", false, false, false, 487), "html", null, true);
            echo "</td>
                        <td>";
            // line 488
            echo twig_call_macro($macros["mf"], "macro_period_name", [twig_get_attribute($this->env, $this->source, $context["addon"], "period", [], "any", false, false, false, 488)], 488, $context, $this->getSourceContext());
            echo "</td>
                        <td>";
            // line 489
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["addon"], "total", [], "any", false, false, false, 489), twig_get_attribute($this->env, $this->source, $context["addon"], "currency", [], "any", false, false, false, 489)], 489, $context, $this->getSourceContext());
            echo "</td>
                        <td>";
            // line 490
            if (twig_get_attribute($this->env, $this->source, $context["addon"], "expires_at", [], "any", false, false, false, 490)) {
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "expires_at", [], "any", false, false, false, 490)), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                        <td>
                            ";
            // line 492
            if ((((twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 492) == "pending_setup") || (twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 492) == "failed_setup")) || (twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 492) == "failed_renew"))) {
                // line 493
                echo "                                <span class=\"badge bg-warning me-1\"></span>
                            ";
            }
            // line 495
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 495) == "active")) {
                // line 496
                echo "                                <span class=\"badge bg-success me-1\"></span>
                            ";
            }
            // line 498
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 498) == "suspended")) {
                // line 499
                echo "                                <span class=\"badge bg-danger me-1\"></span>
                            ";
            }
            // line 501
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 501) == "canceled")) {
                // line 502
                echo "                                <span class=\"badge bg-secondary me-1\"></span>
                            ";
            }
            // line 504
            echo "                            ";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 504)], 504, $context, $this->getSourceContext());
            echo "
                        </td>
                        <td>
                            <a class=\"btn btn-icon\" href=\"";
            // line 507
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/order/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 507), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['addon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 515
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-service\" role=\"tabpanel\">
            ";
        // line 520
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_template_exists", [["file" => ($context["service_partial"] ?? null)]], "method", false, false, false, 520)) {
            // line 521
            echo "                ";
            $context["service"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "order_service", [["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 521)]], "method", false, false, false, 521);
            // line 522
            echo "                ";
            $this->loadTemplate(($context["service_partial"] ?? null), "mod_order_manage.html.twig", 522)->display(twig_array_merge($context, ["order" => ($context["order"] ?? null), "service" => ($context["service"] ?? null)]));
            // line 523
            echo "            ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "form_id", [], "any", false, false, false, 523) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "formbuilder"]], "method", false, false, false, 523))) {
            // line 524
            echo "                ";
            $this->loadTemplate("mod_formbuilder_manage.html.twig", "mod_order_manage.html.twig", 524)->display(twig_array_merge($context, ($context["order"] ?? null)));
            // line 525
            echo "            ";
        } else {
            // line 526
            echo "                ";
            // line 527
            echo "            ";
        }
        // line 528
        echo "        </div>

        <div class=\"tab-pane fade overflow-auto\" id=\"tab-invoices\" role=\"tabpanel\">
            <div class=\"help\">
                <h3>";
        // line 532
        echo twig_escape_filter($this->env, __trans("Order invoices"), "html", null, true);
        echo "</h3>
            </div>
            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>";
        // line 538
        echo twig_escape_filter($this->env, __trans("Amount"), "html", null, true);
        echo "</th>
                        <th>";
        // line 539
        echo twig_escape_filter($this->env, __trans("Issued at"), "html", null, true);
        echo "</th>
                        <th>";
        // line 540
        echo twig_escape_filter($this->env, __trans("Paid at"), "html", null, true);
        echo "</th>
                        <th>";
        // line 541
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                        <th class=\"w-1\"></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 546
        $context["invoices"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_get_list", [["per_page" => 50, "order_id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 546)]], "method", false, false, false, 546);
        // line 547
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["invoices"] ?? null), "list", [], "any", false, false, false, 547));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 548
            echo "                    <tr>
                        <td><a href=\"";
            // line 549
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 549), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 549), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 550
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["invoice"], "total", [], "any", false, false, false, 550), twig_get_attribute($this->env, $this->source, $context["invoice"], "currency", [], "any", false, false, false, 550), 1], 550, $context, $this->getSourceContext());
            echo "</td>
                        <td>";
            // line 551
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "created_at", [], "any", false, false, false, 551)), "html", null, true);
            echo "</td>
                        <td>";
            // line 552
            if (twig_get_attribute($this->env, $this->source, $context["invoice"], "paid_at", [], "any", false, false, false, 552)) {
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "paid_at", [], "any", false, false, false, 552)), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                        <td>
                            ";
            // line 554
            if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 554) == "paid")) {
                // line 555
                echo "                                <span class=\"badge bg-success me-1\"></span>
                            ";
            }
            // line 557
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 557) == "unpaid")) {
                // line 558
                echo "                                <span class=\"badge bg-danger me-1\"></span>
                            ";
            }
            // line 560
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 560) == "refunded")) {
                // line 561
                echo "                                <span class=\"badge bg-warning me-1\"></span>
                            ";
            }
            // line 563
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 563) == "canceled")) {
                // line 564
                echo "                                <span class=\"badge bg-secondary me-1\"></span>
                            ";
            }
            // line 566
            echo "                            ";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 566)], 566, $context, $this->getSourceContext());
            echo "
                        </td>
                        <td>
                            <a class=\"btn btn-icon\" href=\"";
            // line 569
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 569), "html", null, true);
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
            // line 577
            echo "                    <tr>
                        <td class=\"text-muted\" colspan=\"5\">";
            // line 578
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 581
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab-pane fade overflow-auto\" id=\"tab-status\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h3>";
        // line 587
        echo twig_escape_filter($this->env, __trans("Order status history"), "html", null, true);
        echo "</h3>
            </div>
            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <thead>
                    <tr>
                        <th class=\"w-1\">";
        // line 592
        echo twig_escape_filter($this->env, __trans("Date"), "html", null, true);
        echo "</th>
                        <th>";
        // line 593
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                        <th>";
        // line 594
        echo twig_escape_filter($this->env, __trans("Note"), "html", null, true);
        echo "</th>
                        <th class=\"w-1\"></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 599
        $context["statuses"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "order_status_history_get_list", [["per_page" => 50, "id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 599)]], "method", false, false, false, 599);
        // line 600
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "list", [], "any", false, false, false, 600));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["sh"]) {
            // line 601
            echo "                    <tr>
                        <td class=\"d-none d-lg-table-cell\">";
            // line 602
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["sh"], "created_at", [], "any", false, false, false, 602)), "html", null, true);
            echo "</td>
                        <td class=\"d-lg-none\">";
            // line 603
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["sh"], "created_at", [], "any", false, false, false, 603), "medium", "medium", "MM/DD/YY MM:HH"), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 605
            $context["class"] = "bg-secondary";
            // line 606
            echo "
                            ";
            // line 607
            if ((twig_get_attribute($this->env, $this->source, $context["sh"], "status", [], "any", false, false, false, 607) == "active")) {
                // line 608
                echo "                                ";
                $context["class"] = "bg-success";
                // line 609
                echo "                            ";
            }
            // line 610
            echo "
                            ";
            // line 611
            if (((twig_get_attribute($this->env, $this->source, $context["sh"], "status", [], "any", false, false, false, 611) == "pending_setup") || (twig_get_attribute($this->env, $this->source, $context["sh"], "status", [], "any", false, false, false, 611) == "failed_renew"))) {
                // line 612
                echo "                                ";
                $context["class"] = "bg-warning";
                // line 613
                echo "                            ";
            }
            // line 614
            echo "
                            ";
            // line 615
            if ((((twig_get_attribute($this->env, $this->source, $context["sh"], "status", [], "any", false, false, false, 615) == "failed_setup") || (twig_get_attribute($this->env, $this->source, $context["sh"], "status", [], "any", false, false, false, 615) == "suspended")) || (twig_get_attribute($this->env, $this->source, $context["sh"], "status", [], "any", false, false, false, 615) == "canceled"))) {
                // line 616
                echo "                                ";
                $context["class"] = "bg-danger";
                // line 617
                echo "                            ";
            }
            // line 618
            echo "
                            <span class=\"badge ";
            // line 619
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo " me-1 d-none d-lg-inline-block\"></span>
                            <span class=\"badge ";
            // line 620
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo " ms-2 d-lg-none\"></span>
                            <span class=\"d-none d-lg-inline-block\">";
            // line 621
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["sh"], "status", [], "any", false, false, false, 621)], 621, $context, $this->getSourceContext());
            echo "</span>
                        </td>
                        <td class=\"text-wrap\">";
            // line 623
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sh"], "notes", [], "any", false, false, false, 623), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
            // line 625
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            echo "\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/order/status_history_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["sh"], "id", [], "any", false, false, false, 625), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
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
            // line 633
            echo "                    <tr>
                        <td class=\"text-muted\" colspan=\"4\">";
            // line 634
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['sh'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 637
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-support\" role=\"tabpanel\">
            <div class=\"help\">
                <h3>";
        // line 643
        echo twig_escape_filter($this->env, __trans("Support tickets regarding this order"), "html", null, true);
        echo "</h3>
            </div>
            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <thead>
                    <tr>
                        <th class=\"w-1\">#</th>
                        <th>";
        // line 649
        echo twig_escape_filter($this->env, __trans("Help desk"), "html", null, true);
        echo "</th>
                        <th>";
        // line 650
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo "</th>
                        <th>";
        // line 651
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                        <th class=\"w-1\"></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 656
        $context["tickets"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_ticket_get_list", [["per_page" => "20", "order_id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 656)]], "method", false, false, false, 656);
        // line 657
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "list", [], "any", false, false, false, 657));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 658
            echo "                    <tr>
                        <td>";
            // line 659
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 659), "html", null, true);
            echo "</td>
                        <td>";
            // line 660
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "helpdesk", [], "any", false, false, false, 660), "name", [], "any", false, false, false, 660), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 662
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 662), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 662), 30), "html", null, true);
            echo "</a>
                        </td>
                        <td>
                            ";
            // line 665
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 665) == "pending_setup")) {
                // line 666
                echo "                                <span class=\"badge bg-warning me-1\"></span>
                            ";
            }
            // line 668
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 668) == "active")) {
                // line 669
                echo "                                <span class=\"badge bg-success me-1\"></span>
                            ";
            }
            // line 671
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 671) == "suspended")) {
                // line 672
                echo "                                <span class=\"badge bg-danger me-1\"></span>
                            ";
            }
            // line 674
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 674) == "canceled")) {
                // line 675
                echo "                                <span class=\"badge bg-secondary me-1\"></span>
                            ";
            }
            // line 677
            echo "                            ";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 677)], 677, $context, $this->getSourceContext());
            echo "
                        </td>
                        <td>
                            <a class=\"btn btn-icon\" href=\"";
            // line 680
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 680), "html", null, true);
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
            // line 688
            echo "                    <tr>
                        <td class=\"text-muted\" colspan=\"5\">";
            // line 689
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 692
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
";
    }

    // line 699
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 700
        echo "<script>
    var susp = {
        showSuspendPopup: function() {
            \$('#suspend_popup').show();

            return false;
        },
        suspendOrder: function(url, name) {
            var p = {};
            var inps = document.getElementsByName(name);
            var value = '';

            \$.each(inps, function(index, input) {
                if (input.checked) {
                    value = input.value;

                }
            });

            p[name] = value;
            bb.get(url, p, function(result) {
                return bb._afterComplete(\$('#suspend_button'), result);
            });

            \$('#suspend_popup').hide();

            return false;
        },
        suspenderHide: function() {
            \$('#suspend_popup').hide();
        }
    };
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_order_manage.html.twig";
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
        return array (  1578 => 700,  1574 => 699,  1565 => 692,  1556 => 689,  1553 => 688,  1538 => 680,  1531 => 677,  1527 => 675,  1524 => 674,  1520 => 672,  1517 => 671,  1513 => 669,  1510 => 668,  1506 => 666,  1504 => 665,  1494 => 662,  1489 => 660,  1485 => 659,  1482 => 658,  1476 => 657,  1474 => 656,  1466 => 651,  1462 => 650,  1458 => 649,  1449 => 643,  1441 => 637,  1432 => 634,  1429 => 633,  1412 => 625,  1407 => 623,  1402 => 621,  1398 => 620,  1394 => 619,  1391 => 618,  1388 => 617,  1385 => 616,  1383 => 615,  1380 => 614,  1377 => 613,  1374 => 612,  1372 => 611,  1369 => 610,  1366 => 609,  1363 => 608,  1361 => 607,  1358 => 606,  1356 => 605,  1351 => 603,  1347 => 602,  1344 => 601,  1338 => 600,  1336 => 599,  1328 => 594,  1324 => 593,  1320 => 592,  1312 => 587,  1304 => 581,  1295 => 578,  1292 => 577,  1277 => 569,  1270 => 566,  1266 => 564,  1263 => 563,  1259 => 561,  1256 => 560,  1252 => 558,  1249 => 557,  1245 => 555,  1243 => 554,  1234 => 552,  1230 => 551,  1226 => 550,  1218 => 549,  1215 => 548,  1209 => 547,  1207 => 546,  1199 => 541,  1195 => 540,  1191 => 539,  1187 => 538,  1178 => 532,  1172 => 528,  1169 => 527,  1167 => 526,  1164 => 525,  1161 => 524,  1158 => 523,  1155 => 522,  1152 => 521,  1150 => 520,  1143 => 515,  1127 => 507,  1120 => 504,  1116 => 502,  1113 => 501,  1109 => 499,  1106 => 498,  1102 => 496,  1099 => 495,  1095 => 493,  1093 => 492,  1084 => 490,  1080 => 489,  1076 => 488,  1072 => 487,  1069 => 486,  1065 => 485,  1057 => 480,  1053 => 479,  1049 => 478,  1045 => 477,  1041 => 476,  1033 => 471,  1023 => 464,  1019 => 463,  1016 => 462,  1008 => 459,  996 => 457,  993 => 456,  976 => 454,  971 => 453,  969 => 452,  964 => 450,  961 => 449,  957 => 448,  953 => 447,  949 => 446,  944 => 444,  940 => 443,  934 => 439,  931 => 417,  929 => 416,  922 => 395,  918 => 394,  911 => 390,  906 => 388,  882 => 369,  873 => 363,  866 => 359,  861 => 357,  854 => 353,  849 => 351,  842 => 347,  837 => 345,  830 => 341,  825 => 339,  818 => 335,  813 => 333,  806 => 329,  801 => 327,  796 => 325,  792 => 324,  788 => 323,  776 => 314,  772 => 313,  766 => 310,  761 => 308,  755 => 305,  751 => 304,  747 => 303,  739 => 300,  729 => 293,  726 => 292,  723 => 291,  717 => 288,  709 => 283,  705 => 282,  702 => 281,  700 => 280,  694 => 277,  687 => 272,  681 => 269,  671 => 265,  669 => 264,  666 => 263,  660 => 260,  653 => 256,  649 => 255,  645 => 254,  642 => 253,  640 => 252,  637 => 251,  631 => 248,  624 => 244,  620 => 243,  616 => 242,  610 => 239,  607 => 238,  601 => 235,  594 => 231,  580 => 222,  575 => 219,  566 => 216,  562 => 215,  559 => 214,  554 => 213,  550 => 212,  544 => 209,  541 => 208,  535 => 205,  528 => 201,  524 => 200,  520 => 199,  514 => 196,  511 => 195,  509 => 194,  503 => 191,  496 => 187,  492 => 186,  488 => 185,  485 => 184,  482 => 183,  480 => 182,  477 => 181,  471 => 178,  464 => 174,  460 => 173,  456 => 172,  453 => 171,  450 => 170,  448 => 169,  441 => 164,  431 => 159,  425 => 156,  422 => 155,  419 => 154,  411 => 150,  409 => 149,  404 => 147,  401 => 146,  399 => 145,  394 => 143,  390 => 142,  375 => 139,  371 => 138,  356 => 135,  352 => 134,  346 => 131,  342 => 130,  339 => 129,  332 => 125,  324 => 120,  321 => 119,  319 => 118,  312 => 115,  308 => 113,  305 => 112,  301 => 110,  298 => 109,  294 => 107,  291 => 106,  287 => 104,  285 => 103,  280 => 101,  277 => 100,  271 => 97,  267 => 96,  261 => 93,  257 => 92,  254 => 91,  252 => 90,  235 => 88,  231 => 87,  221 => 84,  217 => 83,  205 => 80,  201 => 79,  193 => 76,  189 => 75,  181 => 70,  171 => 63,  165 => 60,  162 => 59,  156 => 56,  153 => 55,  151 => 54,  146 => 52,  143 => 51,  137 => 48,  134 => 47,  132 => 46,  127 => 44,  121 => 41,  115 => 38,  107 => 33,  103 => 31,  99 => 30,  92 => 19,  85 => 17,  75 => 10,  71 => 8,  67 => 7,  60 => 5,  56 => 1,  53 => 27,  51 => 26,  49 => 25,  47 => 23,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_order_manage.html.twig", "/var/www/modules/Order/html_admin/mod_order_manage.html.twig");
    }
}
