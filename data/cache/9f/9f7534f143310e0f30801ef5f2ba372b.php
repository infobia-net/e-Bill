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

/* mod_invoice_index.html.twig */
class __TwigTemplate_53bbced2f4ad8f5ae5205c5bbbfb2533 extends Template
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
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_invoice_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_invoice_index.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "invoice";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
    }

    // line 9
    public function block_top_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "show_filter", [], "any", false, false, false, 10)) {
            // line 11
            echo "    <section class=\"card mb-3\">
        <div class=\"card-body\">
            <h5>";
            // line 13
            echo twig_escape_filter($this->env, __trans("Filter invoices"), "html", null, true);
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
            echo twig_escape_filter($this->env, __trans("Number"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        <input class=\"form-control\" type=\"text\" name=\"nr\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "nr", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
                    </div>
                </div>
                <div class=\"mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\" for=\"client_id\">";
            // line 29
            echo twig_escape_filter($this->env, __trans("Client"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        <select class=\"form-control autocomplete-selector\"
                                placeholder=\"";
            // line 32
            echo twig_escape_filter($this->env, __trans("Start typing the client name or ID"), "html", null, true);
            echo "\"
                                id=\"client_id\"
                                name=\"client_id\"
                                data-resturl=\"admin/client/get_pairs\"
                                data-csrf=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 37
            if ( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "client_id", [], "any", false, false, false, 37)) {
                // line 38
                echo "                        ";
            } else {
                // line 39
                echo "                            ";
                $context["client"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_get", [["id" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "client_id", [], "any", false, false, false, 39)]], "method", false, false, false, 39);
                // line 40
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "client_id", [], "any", false, false, false, 40), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "first_name", [], "any", false, false, false, 40), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "last_name", [], "any", false, false, false, 40), "html", null, true);
                echo "</option>
                        ";
            }
            // line 42
            echo "                        </select>
                    </div>
                </div>
                <div class=\"mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
            // line 46
            echo twig_escape_filter($this->env, __trans("Currency"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        ";
            // line 48
            echo twig_call_macro($macros["mf"], "macro_selectbox", ["currency", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "currency_get_pairs", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "currency", [], "any", false, false, false, 48), 0, "All currencies"], 48, $context, $this->getSourceContext());
            echo "
                    </div>
                </div>
                <div class=\"mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
            // line 52
            echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" id=\"radioStatusAll\" type=\"radio\" name=\"status\" value=\"0\"";
            // line 55
            if ( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 55)) {
                echo " checked";
            }
            echo ">
                            <label class=\"form-check-label\" for=\"radioStatusAll\">";
            // line 56
            echo twig_escape_filter($this->env, __trans("All statuses"), "html", null, true);
            echo "</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" id=\"radioStatusPaid\" type=\"radio\" name=\"status\" value=\"paid\"";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 59) == "paid")) {
                echo " checked";
            }
            echo ">
                            <label class=\"form-check-label\" for=\"radioStatusPaid\">";
            // line 60
            echo twig_escape_filter($this->env, __trans("Paid"), "html", null, true);
            echo "</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" id=\"radioStatusUnpaid\" type=\"radio\" name=\"status\" value=\"unpaid\"";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 63) == "unpaid")) {
                echo " checked";
            }
            echo ">
                            <label class=\"form-check-label\" for=\"radioStatusUnpaid\">";
            // line 64
            echo twig_escape_filter($this->env, __trans("Unpaid"), "html", null, true);
            echo "</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" id=\"radioStatusRefunded\" type=\"radio\" name=\"status\" value=\"refunded\"";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 67) == "refunded")) {
                echo " checked";
            }
            echo ">
                            <label class=\"form-check-label\" for=\"radioStatusRefunded\">";
            // line 68
            echo twig_escape_filter($this->env, __trans("Refunded"), "html", null, true);
            echo "</label>
                        </div>
                    </div>
                </div>
                ";
            // line 83
            echo "                <div class=\"mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\" for=\"issue_date\">";
            // line 84
            echo twig_escape_filter($this->env, __trans("Issue date"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        <div class=\"input-group\">
                            <div class=\"input-icon w-100\">
                                <input class=\"form-control datepicker\"
                                       id=\"issue_date\"
                                       value=\"";
            // line 90
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 90)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 90), "Y-m-d"), "html", null, true);
            }
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 90)) {
                echo " to ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 90), "Y-m-d"), "html", null, true);
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
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 110), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"show_filter\" value=\"1\">
                <div class=\"d-flex gap-2\">
                    <button class=\"btn btn-primary w-75\" type=\"submit\">";
            // line 113
            echo twig_escape_filter($this->env, __trans("Filter"), "html", null, true);
            echo "</button>
                    <a class=\"btn btn-danger w-25\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 114), "html", null, true);
            echo "?show_filter=1\">";
            echo twig_escape_filter($this->env, __trans("Reset"), "html", null, true);
            echo "</a>
                </div>
            </form>
        </div>
    </section>
";
        } else {
            // line 120
            echo "    ";
            $context["statuses"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_get_statuses", [], "any", false, false, false, 120);
            // line 121
            echo "    <section class=\"row row-cards mb-3\">
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 123
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["status" => "unpaid"]);
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-danger text-white avatar\">";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "unpaid", [], "any", false, false, false, 127), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 130
            echo twig_escape_filter($this->env, __trans("Unpaid"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 137
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["status" => "paid"]);
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-green text-white avatar\">";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "paid", [], "any", false, false, false, 141), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 144
            echo twig_escape_filter($this->env, __trans("Paid"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 151
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["status" => "refunded"]);
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-secondary text-white avatar\">";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "refunded", [], "any", false, false, false, 155), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 158
            echo twig_escape_filter($this->env, __trans("Refunded"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 165
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-blue text-white avatar\">";
            // line 169
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "paid", [], "any", false, false, false, 169) + twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "unpaid", [], "any", false, false, false, 169)) + twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "refunded", [], "any", false, false, false, 169)), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 172
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

    // line 182
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 183
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-index\" role=\"tab\">";
        // line 185
        echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
        echo "</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-new\" role=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 192
        echo twig_escape_filter($this->env, __trans("New Invoice"), "html", null, true);
        echo "
            </button>
        </li>
    </ul>

    <div class=\"card\">
        <div class=\"tab-content\">
            <div class=\"tab-pane show active\" id=\"tab-index\" role=\"tabpanel\">
                ";
        // line 200
        $this->loadTemplate("partial_search.html.twig", "mod_invoice_index.html.twig", 200)->display($context);
        // line 201
        echo "              <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap sortable\">
                    <thead>
                        <tr>
                            <th class=\"w-1 no-sort\">
                                <input type=\"checkbox\" class=\"form-check-input m-0 align-middle batch-delete-master-checkbox\">
                            </th>
                            <th class=\"w-1\">#</th>
                            <th class=\"w-1\"></th>
                            <th>";
        // line 210
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo "</th>
                            <th class=\"text-center\">";
        // line 211
        echo twig_escape_filter($this->env, __trans("Amount"), "html", null, true);
        echo "</th>
                            <th class=\"text-center\">";
        // line 212
        echo twig_escape_filter($this->env, __trans("Issued at"), "html", null, true);
        echo "</th>
                            <th class=\"text-center\">";
        // line 213
        echo twig_escape_filter($this->env, __trans("Paid at"), "html", null, true);
        echo "</th>
                            <th>";
        // line 214
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                            <th class=\"w-1\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 219
        $context["invoices"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_get_list", [twig_array_merge(["per_page" => 30, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 219)], ($context["request"] ?? null))], "method", false, false, false, 219);
        // line 220
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["invoices"] ?? null), "list", [], "any", false, false, false, 220));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 221
            echo "                        <tr>
                            <td>
                                <input type=\"checkbox\" class=\"form-check-input m-0 align-middle batch-delete-checkbox\" data-item-id=\"";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 223), "html", null, true);
            echo "\">
                            </td>
                            <td>
                                <a href=\"";
            // line 226
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 226), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "serie_nr", [], "any", false, false, false, 226), "html", null, true);
            echo "</a>
                            </td>
                            <td>
                                <a href=\"";
            // line 229
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            echo "/manage/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice"], "client", [], "any", false, false, false, 229), "id", [], "any", false, false, false, 229), "html", null, true);
            echo "\">
                                    <span class=\"avatar avatar-xs\" style=\"background-image: url(";
            // line 230
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice"], "buyer", [], "any", false, false, false, 230), "email", [], "any", false, false, false, 230)), "html", null, true);
            echo "&size=24\"></span>
                                </a>
                            </td>
                            <td>
                                <a href=\"";
            // line 234
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            echo "/manage/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice"], "client", [], "any", false, false, false, 234), "id", [], "any", false, false, false, 234), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice"], "buyer", [], "any", false, false, false, 234), "first_name", [], "any", false, false, false, 234), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice"], "buyer", [], "any", false, false, false, 234), "last_name", [], "any", false, false, false, 234), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">";
            // line 236
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["invoice"], "total", [], "any", false, false, false, 236), twig_get_attribute($this->env, $this->source, $context["invoice"], "currency", [], "any", false, false, false, 236)], 236, $context, $this->getSourceContext());
            echo "</td>
                            <td class=\"text-center\">";
            // line 237
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "created_at", [], "any", false, false, false, 237), "Y-m-d"), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 238
            if (twig_get_attribute($this->env, $this->source, $context["invoice"], "paid_at", [], "any", false, false, false, 238)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "paid_at", [], "any", false, false, false, 238), "Y-m-d"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                            <td>
                                ";
            // line 240
            if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 240) == "paid")) {
                // line 241
                echo "                                    <span class=\"badge bg-success me-1\"></span>
                                ";
            }
            // line 243
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 243) == "unpaid")) {
                // line 244
                echo "                                    <span class=\"badge bg-danger me-1\"></span>
                                ";
            }
            // line 246
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 246) == "refunded")) {
                // line 247
                echo "                                    <span class=\"badge bg-warning me-1\"></span>
                                ";
            }
            // line 249
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 249) == "canceled")) {
                // line 250
                echo "                                    <span class=\"badge bg-secondary me-1\"></span>
                                ";
            }
            // line 252
            echo "                                ";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 252)], 252, $context, $this->getSourceContext());
            echo "
                            </td>
                            <td>
                                <a class=\"btn btn-icon\" href=\"";
            // line 255
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 255), "html", null, true);
            echo "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#edit\" />
                                    </svg>
                                </a>
                                <a class=\"btn btn-icon api-link\"
                                    href=\"";
            // line 261
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/delete", ["id" => twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 261), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                                    data-api-confirm=\"";
            // line 262
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
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 271
            echo "                        <tr>
                            <td class=\"text-muted\" colspan=\"8\">";
            // line 272
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "                    </tbody>
                </table>
              </div>
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <div>
                        ";
        // line 280
        $this->loadTemplate("partial_batch_delete.html.twig", "mod_invoice_index.html.twig", 280)->display(twig_array_merge($context, ["action" => "admin/invoice/batch_delete"]));
        // line 281
        echo "                        ";
        $this->loadTemplate("partial_pagination.html.twig", "mod_invoice_index.html.twig", 281)->display(twig_array_merge($context, ["list" => ($context["invoices"] ?? null), "url" => "invoice"]));
        // line 282
        echo "                    </div>
                    <div>
                        <a class=\"btn btn-secondary\" href=\"";
        // line 284
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/api/admin/invoice/export_csv", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, __trans("Export Invoices"), "html", null, true);
        echo "\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#download\" />
                            </svg>
                            ";
        // line 288
        echo twig_escape_filter($this->env, __trans("Export Invoices"), "html", null, true);
        echo "
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"tab-pane show\" id=\"tab-new\" role=\"tabpanel\">
                <div class=\"card-body\">
                    <form method=\"post\" action=\"";
        // line 296
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/prepare");
        echo "\" class=\"api-form\" data-api-jsonp=\"onAfterInvoicePrepared\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 297
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\" for=\"client_id\">";
        // line 299
        echo twig_escape_filter($this->env, __trans("Client"), "html", null, true);
        echo "</label>
                            <div class=\"col\">
                                ";
        // line 301
        if ( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "client_id", [], "any", false, false, false, 301)) {
            // line 302
            echo "                                    <select class=\"form-control autocomplete-selector\"
                                            placeholder=\"";
            // line 303
            echo twig_escape_filter($this->env, __trans("Start typing the client name or ID"), "html", null, true);
            echo "\"
                                            id=\"client_id\"
                                            name=\"client_id\"
                                            data-resturl=\"admin/client/get_pairs\"
                                            data-csrf=\"";
            // line 307
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\">
                                    </select>
                                ";
        } else {
            // line 310
            echo "                                    ";
            $context["client"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_get", [["id" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "client_id", [], "any", false, false, false, 310)]], "method", false, false, false, 310);
            // line 311
            echo "                                    <input type=\"text\" id=\"client_id\" class=\"form-control\" disabled value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "first_name", [], "any", false, false, false, 311), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "last_name", [], "any", false, false, false, 311), "html", null, true);
            echo "\" />
                                    <input type=\"hidden\" name=\"client_id\" value=\"";
            // line 312
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "client_id", [], "any", false, false, false, 312), "html", null, true);
            echo "\" />
                                ";
        }
        // line 314
        echo "                            </div>
                        </div>
                        <input type=\"submit\" value=\"";
        // line 316
        echo twig_escape_filter($this->env, __trans("Prepare"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 324
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 325
        echo "<script>
    function onAfterInvoicePrepared(id) {
        bb.redirect(\"";
        // line 327
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
        return "mod_invoice_index.html.twig";
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
        return array (  693 => 327,  689 => 325,  685 => 324,  674 => 316,  670 => 314,  665 => 312,  658 => 311,  655 => 310,  649 => 307,  642 => 303,  639 => 302,  637 => 301,  632 => 299,  627 => 297,  623 => 296,  612 => 288,  603 => 284,  599 => 282,  596 => 281,  594 => 280,  587 => 275,  578 => 272,  575 => 271,  561 => 262,  557 => 261,  546 => 255,  539 => 252,  535 => 250,  532 => 249,  528 => 247,  525 => 246,  521 => 244,  518 => 243,  514 => 241,  512 => 240,  503 => 238,  499 => 237,  495 => 236,  484 => 234,  477 => 230,  471 => 229,  461 => 226,  455 => 223,  451 => 221,  445 => 220,  443 => 219,  435 => 214,  431 => 213,  427 => 212,  423 => 211,  419 => 210,  408 => 201,  406 => 200,  395 => 192,  385 => 185,  381 => 183,  377 => 182,  364 => 172,  358 => 169,  351 => 165,  341 => 158,  335 => 155,  328 => 151,  318 => 144,  312 => 141,  305 => 137,  295 => 130,  289 => 127,  282 => 123,  278 => 121,  275 => 120,  264 => 114,  260 => 113,  254 => 110,  225 => 90,  216 => 84,  213 => 83,  206 => 68,  200 => 67,  194 => 64,  188 => 63,  182 => 60,  176 => 59,  170 => 56,  164 => 55,  158 => 52,  151 => 48,  146 => 46,  140 => 42,  130 => 40,  127 => 39,  124 => 38,  122 => 37,  118 => 36,  111 => 32,  105 => 29,  98 => 25,  93 => 23,  86 => 19,  81 => 17,  76 => 15,  71 => 13,  67 => 11,  64 => 10,  60 => 9,  53 => 5,  49 => 1,  47 => 7,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_invoice_index.html.twig", "/var/www/modules/Invoice/html_admin/mod_invoice_index.html.twig");
    }
}
