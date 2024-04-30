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

/* mod_invoice_transactions.html.twig */
class __TwigTemplate_3eed26690a8dfb37cdffaa9d145c9832 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'top_content' => [$this, 'block_top_content'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_invoice_transactions.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_invoice_transactions.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "invoice";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Transactions"), "html", null, true);
    }

    // line 9
    public function block_top_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "show_filter", [], "any", false, false, false, 10)) {
            // line 11
            echo "<section class=\"card mb-3\">
    <div class=\"card-body\">
        <h5>";
            // line 13
            echo twig_escape_filter($this->env, __trans("Filter transactions"), "html", null, true);
            echo "</h5>
        <form method=\"get\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
            // line 17
            echo twig_escape_filter($this->env, __trans("ID"), "html", null, true);
            echo "</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"id\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
            // line 23
            echo twig_escape_filter($this->env, __trans("ID on payment gateway"), "html", null, true);
            echo "</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"txn_id\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "txn_id", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
            // line 29
            echo twig_escape_filter($this->env, __trans("Invoice Id"), "html", null, true);
            echo "</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"invoice_id\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "invoice_id", [], "any", false, false, false, 31), "html", null, true);
            echo "\">
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
            // line 35
            echo twig_escape_filter($this->env, __trans("Currency"), "html", null, true);
            echo "</label>
                <div class=\"col\">
                    ";
            // line 37
            echo twig_call_macro($macros["mf"], "macro_selectbox", ["currency", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "currency_get_pairs", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "currency", [], "any", false, false, false, 37), 0, "All currencies"], 37, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
            // line 41
            echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
            echo "</label>
                <div class=\"col\">
                    ";
            // line 43
            echo twig_call_macro($macros["mf"], "macro_selectbox", ["status", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_transaction_get_statuses_pairs", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 43), 0, "All statuses"], 43, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
            // line 47
            echo twig_escape_filter($this->env, __trans("Payment Gateway"), "html", null, true);
            echo ":</label>
                <div class=\"col\">
                    ";
            // line 49
            echo twig_call_macro($macros["mf"], "macro_selectbox", ["gateway_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_gateway_get_pairs", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "gateway_id", [], "any", false, false, false, 49), 0, "All payment gateways"], 49, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\" for=\"received_at\">";
            // line 53
            echo twig_escape_filter($this->env, __trans("Received at"), "html", null, true);
            echo "</label>
                <div class=\"col\">
                    <div class=\"input-group\">
                        <div class=\"input-icon w-100\">
                            <input class=\"form-control datepicker\"
                                   id=\"received_at\"
                                   value=\"";
            // line 59
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 59)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 59), "Y-m-d"), "html", null, true);
            }
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 59)) {
                echo " to ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 59), "Y-m-d"), "html", null, true);
            }
            echo "\"
                                   data-name-from=\"date_from\"
                                   data-name-to=\"date_to\"
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

            <input type=\"hidden\" name=\"_url\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 79), "html", null, true);
            echo "\">
            <input type=\"hidden\" name=\"show_filter\" value=\"1\">
            <div class=\"d-flex gap-2\">
                <input type=\"submit\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, __trans("Filter"), "html", null, true);
            echo "\" class=\"btn btn-primary w-75\">
                <a class=\"btn btn-danger w-25\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 83), "html", null, true);
            echo "?show_filter=1\">";
            echo twig_escape_filter($this->env, __trans("Reset"), "html", null, true);
            echo "</a>
            </div>
        </form>
    </div>
</section>
";
        } else {
            // line 89
            echo "
";
            // line 90
            $context["statuses"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_transaction_get_statuses", [], "any", false, false, false, 90);
            // line 91
            echo "    <section class=\"row row-cards mb-3\">
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 93
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice/transactions", ["status" => "processed"]);
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-success text-white avatar\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "processed", [], "any", false, false, false, 97), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 100
            echo twig_escape_filter($this->env, __trans("Processed"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 107
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice/transactions", ["status" => "approved"]);
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-info text-white avatar\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "approved", [], "any", false, false, false, 111), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 114
            echo twig_escape_filter($this->env, __trans("Approved"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 121
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice/transactions", ["status" => "error"]);
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-danger text-white avatar\">";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "error", [], "any", false, false, false, 125), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 128
            echo twig_escape_filter($this->env, __trans("Error"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 135
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice/transactions");
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-blue text-white avatar\">";
            // line 139
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "received", [], "any", false, false, false, 139) + twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "approved", [], "any", false, false, false, 139)) + twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "processed", [], "any", false, false, false, 139)) + twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "error", [], "any", false, false, false, 139)), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 142
            echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
";
        }
    }

    // line 152
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "<div class=\"card\">
    <div class=\"card-header\">
        <h5 class=\"mb-0\">";
        // line 155
        echo twig_escape_filter($this->env, __trans("Transactions"), "html", null, true);
        echo "</h5>
    </div>

    ";
        // line 158
        $this->loadTemplate("partial_search.html.twig", "mod_invoice_transactions.html.twig", 158)->display($context);
        // line 159
        echo "    <table class=\"table card-table table-vcenter table-striped text-nowrap\">
        <thead>
            <tr>
                <th class=\"w-1\">
                    <input class=\"form-check-input m-0 align-middle batch-delete-master-checkbox\" type=\"checkbox\">
                </th>
                <th>";
        // line 165
        echo twig_escape_filter($this->env, __trans("Invoice"), "html", null, true);
        echo "</th>
                <th>";
        // line 166
        echo twig_escape_filter($this->env, __trans("Type"), "html", null, true);
        echo "</th>
                <th>";
        // line 167
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                <th>";
        // line 168
        echo twig_escape_filter($this->env, __trans("Gateway"), "html", null, true);
        echo "</th>
                <th>";
        // line 169
        echo twig_escape_filter($this->env, __trans("Amount"), "html", null, true);
        echo "</th>
                <th>";
        // line 170
        echo twig_escape_filter($this->env, __trans("Date"), "html", null, true);
        echo "</th>
                <th class=\"w-1\"></th>
            </tr>
        </thead>

        <tbody>
            ";
        // line 176
        $context["transactions"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_transaction_get_list", [twig_array_merge(["per_page" => 30, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 176)], ($context["request"] ?? null))], "method", false, false, false, 176);
        // line 177
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["transactions"] ?? null), "list", [], "any", false, false, false, 177));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 178
            echo "            <tr>
                <td>
                    <input class=\"form-check-input m-0 align-middle batch-delete-checkbox\" type=\"checkbox\" data-item-id=\"";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "id", [], "any", false, false, false, 180), "html", null, true);
            echo "\">
                </td>
                <td>
                    ";
            // line 183
            if (twig_get_attribute($this->env, $this->source, $context["tx"], "invoice_id", [], "any", false, false, false, 183)) {
                // line 184
                echo "                        <a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "invoice_id", [], "any", false, false, false, 184), "html", null, true);
                echo "\">#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "invoice_id", [], "any", false, false, false, 184), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 186
                echo "                        ";
                echo twig_escape_filter($this->env, __trans("n/a"), "html", null, true);
                echo "
                    ";
            }
            // line 188
            echo "                </td>
                <td>";
            // line 189
            echo twig_call_macro($macros["mf"], "macro_status_name", [((twig_get_attribute($this->env, $this->source, $context["tx"], "type", [], "any", true, true, false, 189)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tx"], "type", [], "any", false, false, false, 189), "-")) : ("-"))], 189, $context, $this->getSourceContext());
            echo "</td>
                <td>
                    ";
            // line 191
            if (twig_get_attribute($this->env, $this->source, $context["tx"], "error", [], "any", false, false, false, 191)) {
                // line 192
                echo "                        <a href=\"#\" onclick=\"FOSSBilling.message('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "error", [], "any", false, false, false, 192), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "error_code", [], "any", false, false, false, 192), "html", null, true);
                echo "'); return false;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "error_code", [], "any", false, false, false, 192), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 194
                echo "                        ";
                echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["tx"], "status", [], "any", false, false, false, 194)], 194, $context, $this->getSourceContext());
                echo "
                    ";
            }
            // line 196
            echo "                </td>
                <td>";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "gateway", [], "any", false, false, false, 197), "html", null, true);
            echo "</td>
                <td>";
            // line 198
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["tx"], "amount", [], "any", false, false, false, 198), twig_get_attribute($this->env, $this->source, $context["tx"], "currency", [], "any", false, false, false, 198)], 198, $context, $this->getSourceContext());
            echo "</td>
                <td>";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "created_at", [], "any", false, false, false, 199)), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-icon\" href=\"";
            // line 201
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice/transaction");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "id", [], "any", false, false, false, 201), "html", null, true);
            echo "\">
                        <svg class=\"icon\">
                            <use xlink:href=\"#edit\" />
                        </svg>
                    </a>
                    <a class=\"btn btn-icon api-link\" href=\"";
            // line 206
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/transaction_process", ["id" => twig_get_attribute($this->env, $this->source, $context["tx"], "id", [], "any", false, false, false, 206), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" data-api-msg=\"Processed\" title=\"Process again\">
                        <svg class=\"icon\">
                            <use xlink:href=\"#refresh\" />
                        </svg>
                    </a>
                    <a class=\"btn btn-icon api-link\" href=\"";
            // line 211
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/transaction_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["tx"], "id", [], "any", false, false, false, 211), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" data-api-confirm=\"";
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" data-api-reload=\"1\">
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
            // line 219
            echo "            <tr>
                <td class=\"text-muted\" colspan=\"7\">";
            // line 220
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "        </tbody>
    </table>

    <div class=\"card-footer d-flex align-items-center justify-content-between\">
        ";
        // line 227
        $this->loadTemplate("partial_batch_delete.html.twig", "mod_invoice_transactions.html.twig", 227)->display(twig_array_merge($context, ["action" => "admin/invoice/batch_delete_transaction "]));
        // line 228
        echo "        ";
        $this->loadTemplate("partial_pagination.html.twig", "mod_invoice_transactions.html.twig", 228)->display(twig_array_merge($context, ["list" => ($context["transactions"] ?? null), "url" => "invoice/transactions"]));
        // line 229
        echo "    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_invoice_transactions.html.twig";
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
        return array (  501 => 229,  498 => 228,  496 => 227,  490 => 223,  481 => 220,  478 => 219,  463 => 211,  455 => 206,  445 => 201,  440 => 199,  436 => 198,  432 => 197,  429 => 196,  423 => 194,  413 => 192,  411 => 191,  406 => 189,  403 => 188,  397 => 186,  387 => 184,  385 => 183,  379 => 180,  375 => 178,  369 => 177,  367 => 176,  358 => 170,  354 => 169,  350 => 168,  346 => 167,  342 => 166,  338 => 165,  330 => 159,  328 => 158,  322 => 155,  318 => 153,  314 => 152,  301 => 142,  295 => 139,  288 => 135,  278 => 128,  272 => 125,  265 => 121,  255 => 114,  249 => 111,  242 => 107,  232 => 100,  226 => 97,  219 => 93,  215 => 91,  213 => 90,  210 => 89,  199 => 83,  195 => 82,  189 => 79,  160 => 59,  151 => 53,  144 => 49,  139 => 47,  132 => 43,  127 => 41,  120 => 37,  115 => 35,  108 => 31,  103 => 29,  96 => 25,  91 => 23,  84 => 19,  79 => 17,  74 => 15,  69 => 13,  65 => 11,  63 => 10,  59 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_invoice_transactions.html.twig", "/var/www/modules/Invoice/html_admin/mod_invoice_transactions.html.twig");
    }
}
