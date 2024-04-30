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

/* mod_order_index.html.twig */
class __TwigTemplate_dde327c570f0f3f40c1d137e649f737d extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_order_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_order_index.html.twig", 3)->unwrap();
        // line 5
        $context["active_menu"] = "order";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Orders"), "html", null, true);
    }

    // line 9
    public function block_top_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "show_filter", [], "any", false, false, false, 10)) {
            // line 11
            echo "<div class=\"card mb-3\">
    <div class=\"card-body\">
        <h5>";
            // line 13
            echo twig_escape_filter($this->env, __trans("Filter orders"), "html", null, true);
            echo "</h5>
        <form method=\"get\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
            <div class=\"form-group mb-3 row\">
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
            <div class=\"form-group mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
            // line 23
            echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
            echo "</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"title\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "title", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
                </div>
            </div>
            <div class=\"form-group mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
            // line 29
            echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
            echo "</label>
                <div class=\"col\">
                    ";
            // line 31
            echo twig_call_macro($macros["mf"], "macro_selectbox", ["status", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "order_get_status_pairs", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 31), 0, "All statuses"], 31, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
            <div class=\"form-group mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
            // line 35
            echo twig_escape_filter($this->env, __trans("Type"), "html", null, true);
            echo ":</label>
                <div class=\"col\">
                    ";
            // line 37
            echo twig_call_macro($macros["mf"], "macro_selectbox", ["type", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_get_types", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "type", [], "any", false, false, false, 37), 0, "All types"], 37, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
            <div class=\"form-group mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
            // line 41
            echo twig_escape_filter($this->env, __trans("Product"), "html", null, true);
            echo ":</label>
                <div class=\"col\">
                    ";
            // line 43
            echo twig_call_macro($macros["mf"], "macro_selectbox", ["product_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_get_pairs", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "product_id", [], "any", false, false, false, 43), 0, "All products"], 43, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
            <div class=\"form-group mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
            // line 47
            echo twig_escape_filter($this->env, __trans("Period"), "html", null, true);
            echo "</label>
                <div class=\"col\">
                    ";
            // line 49
            echo twig_call_macro($macros["mf"], "macro_selectbox", ["period", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_periods", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "period", [], "any", false, false, false, 49), 0, "All periods"], 49, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
            <div class=\"form-group mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
            // line 53
            echo twig_escape_filter($this->env, __trans("Invoice option"), "html", null, true);
            echo "</label>
                <div class=\"col\">
                    ";
            // line 55
            echo twig_call_macro($macros["mf"], "macro_selectbox", ["invoice_option", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "order_get_invoice_options", [], "any", false, false, false, 55), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "invoice_option", [], "any", false, false, false, 55), 0, "All types"], 55, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
            <div class=\"form-group mb-3 row\">
                <label class=\"form-label col-3 col-form-label\" for=\"creation_date\">";
            // line 59
            echo twig_escape_filter($this->env, __trans("Creation date"), "html", null, true);
            echo "</label>
                <div class=\"col\">
                    <div class=\"input-group\">
                        <div class=\"input-icon w-100\">
                            <input class=\"form-control datepicker\"
                                   id=\"creation_date\"
                                   value=\"";
            // line 65
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 65)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 65), "Y-m-d"), "html", null, true);
            }
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 65)) {
                echo " to ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 65), "Y-m-d"), "html", null, true);
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
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 85), "html", null, true);
            echo "\">
            <input type=\"hidden\" name=\"show_filter\" value=\"1\">
            <div class=\"d-flex gap-2\">
                <button class=\"btn btn-primary w-75\" type=\"submit\">";
            // line 88
            echo twig_escape_filter($this->env, __trans("Filter"), "html", null, true);
            echo "</button>
                <a class=\"btn btn-danger w-25\" href=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 89), "html", null, true);
            echo "?show_filter=1\">";
            echo twig_escape_filter($this->env, __trans("Reset"), "html", null, true);
            echo "</a>
            </div>
        </form>
    </div>
</div>
";
        } else {
            // line 95
            echo "    ";
            $context["count_orders"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "order_get_statuses", [], "any", false, false, false, 95);
            // line 96
            echo "    <div class=\"row row-cards mb-3\">
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 98
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order", ["status" => "pending_setup"]);
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-warning text-white avatar\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["count_orders"] ?? null), "pending_setup", [], "any", false, false, false, 102), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 105
            echo twig_escape_filter($this->env, __trans("Pending Setup"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 112
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order", ["status" => "active"]);
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-success text-white avatar\">";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["count_orders"] ?? null), "active", [], "any", false, false, false, 116), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 119
            echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 126
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order", ["status" => "suspended"]);
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-secondary text-white avatar\">";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["count_orders"] ?? null), "suspended", [], "any", false, false, false, 130), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 133
            echo twig_escape_filter($this->env, __trans("Suspended"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 140
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-blue text-white avatar\">";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["count_orders"] ?? null), "total", [], "any", false, false, false, 144), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 147
            echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
";
        }
    }

    // line 156
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link active\" id=\"index-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-index\" type=\"button\" role=\"tab\" aria-controls=\"index\" aria-selected=\"true\">";
        // line 159
        echo twig_escape_filter($this->env, __trans("Orders"), "html", null, true);
        echo "</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link\" id=\"new-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-new\" type=\"button\" role=\"tab\" aria-controls=\"index\" aria-selected=\"true\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 166
        echo twig_escape_filter($this->env, __trans("New order"), "html", null, true);
        echo "
            </button>
        </li>
    </ul>

    <div class=\"card\">
        <div class=\"tab-content\">
            <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\" aria-labelledby=\"index-tab\">
                ";
        // line 174
        $this->loadTemplate("partial_search.html.twig", "mod_order_index.html.twig", 174)->display($context);
        // line 175
        echo "                <div class=\"table-responsive\">
                    <table class=\"table card-table table-vcenter table-striped text-nowrap sortable\">
                        <thead>
                            <tr>
                                <th class=\"w-1 no-sort\">
                                    <input class=\"form-check-input m-0 align-middle batch-delete-master-checkbox\" type=\"checkbox\">
                                </th>
                                <th class=\"w-1\">#</th>
                                <th class=\"w-1\"></th>
                                <th>";
        // line 184
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo "</th>
                                <th>";
        // line 185
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                                <th class=\"text-center\">";
        // line 186
        echo twig_escape_filter($this->env, __trans("Period"), "html", null, true);
        echo "</th>
                                <th class=\"text-center\">";
        // line 187
        echo twig_escape_filter($this->env, __trans("Amount"), "html", null, true);
        echo "</th>
                                <th>";
        // line 188
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                                <th class=\"w-1\"></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 193
        $context["orders"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "order_get_list", [twig_array_merge(["per_page" => 30, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 193)], ($context["request"] ?? null))], "method", false, false, false, 193);
        // line 194
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "list", [], "any", false, false, false, 194));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["order"]) {
            // line 195
            echo "                            <tr>
                                <td>
                                    <input class=\"form-check-input m-0 align-middle batch-delete-checkbox\" type=\"checkbox\" data-item-id=\"";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 197), "html", null, true);
            echo "\">
                                </td>
                                <td><a href=\"";
            // line 199
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/order/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 199), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 199), "html", null, true);
            echo "</a></td>
                                <td>
                                    <a href=\"";
            // line 201
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "client_id", [], "any", false, false, false, 201), "html", null, true);
            echo "\">
                                        <span class=\"avatar avatar-xs\" style=\"background-image: url(";
            // line 202
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "client", [], "any", false, false, false, 202), "email", [], "any", false, false, false, 202)), "html", null, true);
            echo "&size=24)\"></span>
                                    </a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 206
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "client_id", [], "any", false, false, false, 206), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "client", [], "any", false, false, false, 206), "first_name", [], "any", false, false, false, 206), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "client", [], "any", false, false, false, 206), "last_name", [], "any", false, false, false, 206), "html", null, true);
            echo "</a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 209
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/order/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 209), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 209), "html", null, true);
            echo "</a>
                                </td>
                                <td class=\"text-center\">";
            // line 211
            echo twig_call_macro($macros["mf"], "macro_period_name", [twig_get_attribute($this->env, $this->source, $context["order"], "period", [], "any", false, false, false, 211)], 211, $context, $this->getSourceContext());
            echo "</td>
                                <td class=\"text-center\">";
            // line 212
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 212), twig_get_attribute($this->env, $this->source, $context["order"], "currency", [], "any", false, false, false, 212)], 212, $context, $this->getSourceContext());
            echo "</td>
                                <td>
                                    ";
            // line 214
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 214) == "pending_setup")) {
                // line 215
                echo "                                        <span class=\"badge bg-warning me-1\"></span>
                                    ";
            }
            // line 217
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 217) == "failed_setup")) {
                // line 218
                echo "                                    <span class=\"badge bg-warning me-1\"></span>
                                    ";
            }
            // line 220
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 220) == "failed_renew")) {
                // line 221
                echo "                                    <span class=\"badge bg-warning me-1\"></span>
                                    ";
            }
            // line 223
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 223) == "active")) {
                // line 224
                echo "                                        <span class=\"badge bg-success me-1\"></span>
                                    ";
            }
            // line 226
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 226) == "suspended")) {
                // line 227
                echo "                                        <span class=\"badge bg-danger me-1\"></span>
                                    ";
            }
            // line 229
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 229) == "canceled")) {
                // line 230
                echo "                                        <span class=\"badge bg-secondary me-1\"></span>
                                    ";
            }
            // line 232
            echo "                                    ";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 232)], 232, $context, $this->getSourceContext());
            echo "
                                </td>
                                <td>
                                    <a class=\"btn btn-icon\" href=\"";
            // line 235
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/order/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 235), "html", null, true);
            echo "\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#edit\" />
                                        </svg>
                                    </a>
                                    <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
            // line 240
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo " \" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/order/delete", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 240), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
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
            // line 248
            echo "                            <tr>
                                <td class=\"text-muted\" colspan=\"8\">";
            // line 249
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "                        </tbody>
                    </table>
                </div>

                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <div>
                        ";
        // line 258
        $this->loadTemplate("partial_batch_delete.html.twig", "mod_order_index.html.twig", 258)->display(twig_array_merge($context, ["action" => "admin/order/batch_delete"]));
        // line 259
        echo "                        ";
        $this->loadTemplate("partial_pagination.html.twig", "mod_order_index.html.twig", 259)->display(twig_array_merge($context, ["list" => ($context["orders"] ?? null), "url" => "order"]));
        // line 260
        echo "                    </div>
                    <div>
                        <a class=\"btn btn-secondary\" href=\"";
        // line 262
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/api/admin/order/export_csv", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, __trans("Export Orders"), "html", null, true);
        echo "\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#download\" />
                            </svg>
                            ";
        // line 266
        echo twig_escape_filter($this->env, __trans("Export Orders"), "html", null, true);
        echo "
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"tab-pane fade\" id=\"tab-new\" role=\"tabpanel\" aria-labelledby=\"new-tab\">
                <div class=\"card-body\">
                    <form method=\"post\" action=\"";
        // line 274
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order/new");
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 275
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\" for=\"client_id\">";
        // line 277
        echo twig_escape_filter($this->env, __trans("Client"), "html", null, true);
        echo "</label>
                            <div class=\"col\">
                                ";
        // line 279
        if ( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "client_id", [], "any", false, false, false, 279)) {
            // line 280
            echo "                                    <select class=\"form-control autocomplete-selector\"
                                            placeholder=\"";
            // line 281
            echo twig_escape_filter($this->env, __trans("Start typing the client name or ID"), "html", null, true);
            echo "\"
                                            id=\"client_id\"
                                            name=\"client_id\"
                                            data-resturl=\"admin/client/get_pairs\"
                                            data-csrf=\"";
            // line 285
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\">
                                    </select>
                                ";
        } else {
            // line 288
            echo "                                    ";
            $context["client"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_get", [["id" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "client_id", [], "any", false, false, false, 288)]], "method", false, false, false, 288);
            // line 289
            echo "                                    <input type=\"text\" id=\"client_id\" class=\"form-control\" disabled value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "first_name", [], "any", false, false, false, 289), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "last_name", [], "any", false, false, false, 289), "html", null, true);
            echo "\" />
                                    <input type=\"hidden\" name=\"client_id\" value=\"";
            // line 290
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "client_id", [], "any", false, false, false, 290), "html", null, true);
            echo "\" />
                                ";
        }
        // line 292
        echo "                            </div>
                        </div>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 295
        echo twig_escape_filter($this->env, __trans("Product"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                ";
        // line 297
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["product_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_get_pairs", [], "any", false, false, false, 297), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "product_id", [], "any", false, false, false, 297), 1], 297, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <input type=\"submit\" value=\"";
        // line 300
        echo twig_escape_filter($this->env, __trans("Continue"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                        ";
        // line 301
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "client_id", [], "any", false, false, false, 301)) {
            // line 302
            echo "                            <input type=\"hidden\" name=\"client_id\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "client_id", [], "any", false, false, false, 302), "html", null, true);
            echo "\">
                        ";
        }
        // line 304
        echo "                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_order_index.html.twig";
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
        return array (  657 => 304,  651 => 302,  649 => 301,  645 => 300,  639 => 297,  634 => 295,  629 => 292,  624 => 290,  617 => 289,  614 => 288,  608 => 285,  601 => 281,  598 => 280,  596 => 279,  591 => 277,  586 => 275,  582 => 274,  571 => 266,  562 => 262,  558 => 260,  555 => 259,  553 => 258,  545 => 252,  536 => 249,  533 => 248,  516 => 240,  506 => 235,  499 => 232,  495 => 230,  492 => 229,  488 => 227,  485 => 226,  481 => 224,  478 => 223,  474 => 221,  471 => 220,  467 => 218,  464 => 217,  460 => 215,  458 => 214,  453 => 212,  449 => 211,  440 => 209,  428 => 206,  421 => 202,  415 => 201,  406 => 199,  401 => 197,  397 => 195,  391 => 194,  389 => 193,  381 => 188,  377 => 187,  373 => 186,  369 => 185,  365 => 184,  354 => 175,  352 => 174,  341 => 166,  331 => 159,  327 => 157,  323 => 156,  311 => 147,  305 => 144,  298 => 140,  288 => 133,  282 => 130,  275 => 126,  265 => 119,  259 => 116,  252 => 112,  242 => 105,  236 => 102,  229 => 98,  225 => 96,  222 => 95,  211 => 89,  207 => 88,  201 => 85,  172 => 65,  163 => 59,  156 => 55,  151 => 53,  144 => 49,  139 => 47,  132 => 43,  127 => 41,  120 => 37,  115 => 35,  108 => 31,  103 => 29,  96 => 25,  91 => 23,  84 => 19,  79 => 17,  74 => 15,  69 => 13,  65 => 11,  63 => 10,  59 => 9,  52 => 7,  48 => 1,  46 => 5,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_order_index.html.twig", "/var/www/modules/Order/html_admin/mod_order_index.html.twig");
    }
}
