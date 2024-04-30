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

/* mod_support_tickets.html.twig */
class __TwigTemplate_1d17bc93f016e99614bdccbc88650b64 extends Template
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
            'top_content' => [$this, 'block_top_content'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_support_tickets.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_support_tickets.html.twig", 3)->unwrap();
        // line 23
        $context["active_menu"] = "support";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Support Tickets"), "html", null, true);
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
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Support"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 19
        echo twig_escape_filter($this->env, __trans("Tickets"), "html", null, true);
        echo "</li>
    </ul>
";
    }

    // line 25
    public function block_top_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "show_filter", [], "any", false, false, false, 27)) {
            // line 28
            echo "    <section class=\"card mb-3\">
        <div class=\"card-body\">
            <h5>";
            // line 30
            echo twig_escape_filter($this->env, __trans("Filter Support Tickets"), "html", null, true);
            echo "</h5>
            <form method=\"get\">
                <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
            // line 34
            echo twig_escape_filter($this->env, __trans("Client ID"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        <input class=\"form-control\" type=\"text\" name=\"client_id\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "client_id", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
                    </div>
                </div>
                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
            // line 40
            echo twig_escape_filter($this->env, __trans("Order ID"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        <input class=\"form-control\" type=\"text\" name=\"order_id\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "order_id", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
                    </div>
                </div>
                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
            // line 46
            echo twig_escape_filter($this->env, __trans("Ticket Subject"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        <input class=\"form-control\" type=\"text\" name=\"subject\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "subject", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
                    </div>
                </div>
                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
            // line 52
            echo twig_escape_filter($this->env, __trans("Ticket Messages"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        <input class=\"form-control\" type=\"text\" name=\"content\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "content", [], "any", false, false, false, 54), "html", null, true);
            echo "\">
                    </div>
                </div>
                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
            // line 58
            echo twig_escape_filter($this->env, __trans("Priority"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        <input class=\"form-control\" type=\"text\" name=\"priority\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "priority", [], "any", false, false, false, 60), "html", null, true);
            echo "\">
                    </div>
                </div>
                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
            // line 64
            echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        ";
            // line 66
            echo twig_call_macro($macros["mf"], "macro_selectbox", ["status", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_ticket_get_statuses", [["titles" => 1]], "method", false, false, false, 66), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 66), 0, "All statuses"], 66, $context, $this->getSourceContext());
            echo "
                    </div>
                </div>
                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
            // line 70
            echo twig_escape_filter($this->env, __trans("Helpdesk"), "html", null, true);
            echo ":</label>
                    <div class=\"col\">
                        ";
            // line 72
            echo twig_call_macro($macros["mf"], "macro_selectbox", ["support_helpdesk_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_helpdesk_get_pairs", [], "any", false, false, false, 72), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "support_helpdesk_id", [], "any", false, false, false, 72), 0, "All helpdesks"], 72, $context, $this->getSourceContext());
            echo "
                    </div>
                </div>
                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\" for=\"created_at\">";
            // line 76
            echo twig_escape_filter($this->env, __trans("Created At"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        <div class=\"input-group\">
                            <div class=\"input-icon w-100\">
                                <input class=\"form-control datepicker\"
                                       id=\"created_at\"
                                       value=\"";
            // line 82
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 82)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 82), "Y-m-d"), "html", null, true);
            }
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 82)) {
                echo " to ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 82), "Y-m-d"), "html", null, true);
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
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 102), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"show_filter\" value=\"1\">
                <div class=\"d-flex gap-2\">
                    <button class=\"btn btn-primary w-75\" type=\"submit\">";
            // line 105
            echo twig_escape_filter($this->env, __trans("Filter"), "html", null, true);
            echo "</button>
                    <a class=\"btn btn-danger w-25\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 106), "html", null, true);
            echo "?show_filter=1\">";
            echo twig_escape_filter($this->env, __trans("Reset"), "html", null, true);
            echo "</a>
                </div>
            </form>
        </div>
    </section>
";
        } else {
            // line 112
            echo "    ";
            $context["statuses"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_ticket_get_statuses", [], "any", false, false, false, 112);
            // line 113
            echo "    <section class=\"row row-cards mb-3\">
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 115
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["status" => "open"]);
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-danger text-white avatar\">";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "open", [], "any", false, false, false, 119), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 122
            echo twig_escape_filter($this->env, __trans("Tickets waiting for staff reply"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 129
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["status" => "on_hold"]);
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-warning text-white avatar\">";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "on_hold", [], "any", false, false, false, 133), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 136
            echo twig_escape_filter($this->env, __trans("Tickets waiting for client reply"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 143
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["status" => "closed"]);
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-secondary text-white avatar\">";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "closed", [], "any", false, false, false, 147), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 150
            echo twig_escape_filter($this->env, __trans("Solved tickets"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 157
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-blue text-white avatar\">";
            // line 161
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "open", [], "any", false, false, false, 161) + twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "on_hold", [], "any", false, false, false, 161)) + twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "closed", [], "any", false, false, false, 161)), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 164
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

    // line 174
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-index\" data-bs-toggle=\"tab\">";
        // line 177
        echo twig_escape_filter($this->env, __trans("Tickets"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-new\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 184
        echo twig_escape_filter($this->env, __trans("New Client Ticket"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-email\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 192
        echo twig_escape_filter($this->env, __trans("New Public Ticket"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>

<div class=\"card\">
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\" aria-labelledby=\"index-tab\">
            ";
        // line 200
        $this->loadTemplate("partial_search.html.twig", "mod_support_tickets.html.twig", 200)->display($context);
        // line 201
        echo "            <table class=\"table card-table table-vcenter table-striped text-nowrap sortable\">
                <thead>
                    <tr>
                        <th class=\"w-1 no-sort\">
                            <input class=\"form-check-input m-0 align-middle batch-delete-master-checkbox\" type=\"checkbox\">
                        </th>
                        <th>";
        // line 207
        echo twig_escape_filter($this->env, __trans("Client"), "html", null, true);
        echo "</th>
                        <th>";
        // line 208
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo "</th>
                        <th>";
        // line 209
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                        <th>";
        // line 210
        echo twig_escape_filter($this->env, __trans("Helpdesk"), "html", null, true);
        echo "</th>
                        <th class=\"w-1\"></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 215
        $context["tickets"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_ticket_get_list", [twig_array_merge(["per_page" => 30, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 215)], ($context["request"] ?? null))], "method", false, false, false, 215);
        // line 216
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "list", [], "any", false, false, false, 216));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
            // line 217
            echo "                    <tr class=\"priority_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "priority", [], "any", false, false, false, 217), "html", null, true);
            echo "\">
                        <td>
                            <input class=\"form-check-input m-0 align-middle batch-delete-checkbox\" type=\"checkbox\" data-item-id=\"";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 219), "html", null, true);
            echo "\">
                        </td>
                        <td>
                            <div class=\"d-flex py-1 align-items-center\">
                                <a href=\"";
            // line 223
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "client_id", [], "any", false, false, false, 223), "html", null, true);
            echo "\">
                                    <span class=\"avatar me-2\" style=\"background-image: url(";
            // line 224
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "client", [], "any", false, false, false, 224), "email", [], "any", false, false, false, 224)), "html", null, true);
            echo "?size=40)\"></span>
                                </a>
                                <div class=\"flex-fill\">
                                    <div class=\"font-weight-medium\">
                                        <a href=\"";
            // line 228
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "client_id", [], "any", false, false, false, 228), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "client", [], "any", false, false, false, 228), "first_name", [], "any", false, false, false, 228), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "client", [], "any", false, false, false, 228), "last_name", [], "any", false, false, false, 228), "html", null, true);
            echo "</a>
                                    </div>
                                    <div class=\"text-muted\">";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "client", [], "any", false, false, false, 230), "email", [], "any", false, false, false, 230), "html", null, true);
            echo "</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div>
                                <a href=\"";
            // line 236
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 236), "html", null, true);
            echo "#reply-box\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 236), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 236), 50), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "replies", [], "any", false, false, false, 236), "html", null, true);
            echo ")</a>
                            </div>
                            ";
            // line 238
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "notes", [], "any", false, false, false, 238))) {
                // line 239
                echo "                                <a href=\"#\" rel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 239), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "notes", [], "any", false, false, false, 239)), "html", null, true);
                echo "\" class=\"show-notes\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#notes\" />
                                    </svg>
                                </a>
                            ";
            }
            // line 245
            echo "                            <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["ticket"], "updated_at", [], "any", false, false, false, 245)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
            echo "</span>
                        </td>
                        <td>
                            ";
            // line 248
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 248) == "open")) {
                // line 249
                echo "                                <span class=\"badge bg-success me-1\"></span>
                            ";
            }
            // line 251
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 251) == "on_hold")) {
                // line 252
                echo "                                <span class=\"badge bg-warning me-1\"></span>
                            ";
            }
            // line 254
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 254) == "closed")) {
                // line 255
                echo "                                <span class=\"badge bg-secondary me-1\"></span>
                            ";
            }
            // line 257
            echo "                            ";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 257)], 257, $context, $this->getSourceContext());
            echo "</td>
                        <td>";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "helpdesk", [], "any", false, false, false, 258), "name", [], "any", false, false, false, 258), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-icon\" href=\"";
            // line 260
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 260), "html", null, true);
            echo "#reply-box\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#edit\" />
                                </svg>
                            </a>
                            <a class=\"btn btn-icon api-link\"
                                href=\"";
            // line 266
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/ticket_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 266), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                                data-api-confirm=\"";
            // line 267
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                                data-api-redirect=\"";
            // line 268
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
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
            // line 276
            echo "                    <tr>
                        <td class=\"text-muted\" colspan=\"6\">";
            // line 277
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "                </tbody>
            </table>

            <div class=\"card-footer d-flex align-items-center justify-content-between\">
                ";
        // line 284
        $this->loadTemplate("partial_batch_delete.html.twig", "mod_support_tickets.html.twig", 284)->display(twig_array_merge($context, ["action" => "admin/support/batch_delete"]));
        // line 285
        echo "                ";
        $this->loadTemplate("partial_pagination.html.twig", "mod_support_tickets.html.twig", 285)->display(twig_array_merge($context, ["list" => ($context["tickets"] ?? null), "url" => "support"]));
        // line 286
        echo "            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-new\" role=\"tabpanel\" aria-labelledby=\"new-tab\">
            <div class=\"card-body\">
                <h5>";
        // line 291
        echo twig_escape_filter($this->env, __trans("Open Ticket for Existing Client"), "html", null, true);
        echo "</h5>
                <form method=\"post\" action=\"";
        // line 292
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/ticket_create");
        echo "\" class=\"api-form\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 293
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\" for=\"client_id\">";
        // line 295
        echo twig_escape_filter($this->env, __trans("Client"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            ";
        // line 297
        if ( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "client_id", [], "any", false, false, false, 297)) {
            // line 298
            echo "                                <select class=\"form-control autocomplete-selector\"
                                        placeholder=\"";
            // line 299
            echo twig_escape_filter($this->env, __trans("Start typing the client name or ID"), "html", null, true);
            echo "\"
                                        id=\"client_id\"
                                        name=\"client_id\"
                                        data-resturl=\"admin/client/get_pairs\"
                                        data-csrf=\"";
            // line 303
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\">
                                </select>
                            ";
        } else {
            // line 306
            echo "                                ";
            $context["client"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_get", [["id" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "client_id", [], "any", false, false, false, 306)]], "method", false, false, false, 306);
            // line 307
            echo "                                <input type=\"text\" id=\"client_id\" class=\"form-control\" disabled value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "first_name", [], "any", false, false, false, 307), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "last_name", [], "any", false, false, false, 307), "html", null, true);
            echo "\" />
                                <input type=\"hidden\" name=\"client_id\" value=\"";
            // line 308
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "client_id", [], "any", false, false, false, 308), "html", null, true);
            echo "\" />
                            ";
        }
        // line 310
        echo "                        </div>
                    </div>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 313
        echo twig_escape_filter($this->env, __trans("Helpdesk"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            ";
        // line 315
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["support_helpdesk_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_helpdesk_get_pairs", [], "any", false, false, false, 315), "", 1], 315, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 319
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"subject\" value=\"";
        // line 321
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "subject", [], "any", false, false, false, 321), "html", null, true);
        echo "\" required>
                        </div>
                    </div>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 325
        echo twig_escape_filter($this->env, __trans("Message"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <textarea class=\"form-control\" name=\"content\" rows=\"10\" required id=\"msg-area-";
        // line 327
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "id", [], "any", false, false, false, 327), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "signature", [], "any", false, false, false, 327), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary w-100\">";
        // line 330
        echo twig_escape_filter($this->env, __trans("Create"), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-email\" role=\"tabpanel\" aria-labelledby=\"email-tab\">
            <div class=\"card-body\">
                <h5>";
        // line 337
        echo twig_escape_filter($this->env, __trans("Open Public Ticket for Non-client"), "html", null, true);
        echo "</h5>
                <form method=\"post\" action=\"";
        // line 338
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/public_ticket_create");
        echo "\" class=\"api-form\" data-api-jsonp=\"onAfterPublicTicketCreate\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 339
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 341
        echo twig_escape_filter($this->env, __trans("Receiver Name"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"name\" required placeholder=\"";
        // line 343
        echo twig_escape_filter($this->env, __trans("John Smith"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 347
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"email\" required placeholder=\"";
        // line 349
        echo twig_escape_filter($this->env, __trans("user@domail.com"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 353
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"subject\" value=\"";
        // line 355
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "subject", [], "any", false, false, false, 355), "html", null, true);
        echo "\" required placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Email Subject"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 359
        echo twig_escape_filter($this->env, __trans("Message"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <textarea class=\"form-control\" name=\"message\" rows=\"10\" required>";
        // line 361
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "signature", [], "any", false, false, false, 361), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary w-100\">";
        // line 364
        echo twig_escape_filter($this->env, __trans("Create"), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 372
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 373
        echo "<script>
    document.querySelectorAll('a.show-notes').forEach(notes => {
        notes.addEventListener('click', function(e) {
            e.preventDefault();

            API.admin.post('support/ticket_get', { id: e.currentTarget.getAttribute('rel') }, function(result){
                var html = document.createElement('div');

                result.notes.forEach(function(entry) {
                    var div = document.createElement('div');
                    div.innerHTML = entry.note;

                    html.appendChild(div);
                    html.appendChild(document.createElement('hr'));
                });

                Modals.create({
                    title: \"";
        // line 390
        echo twig_escape_filter($this->env, __trans("Notes"), "html", null, true);
        echo "\",
                    content: html.outerHTML,
                });
            });
        });
    })

    function onAfterPublicTicketCreate(result) {
        bb.redirect(\"";
        // line 398
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support/public-ticket");
        echo "/\" + result);
    }
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_support_tickets.html.twig";
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
        return array (  825 => 398,  814 => 390,  795 => 373,  791 => 372,  780 => 364,  774 => 361,  769 => 359,  760 => 355,  755 => 353,  748 => 349,  743 => 347,  736 => 343,  731 => 341,  726 => 339,  722 => 338,  718 => 337,  708 => 330,  700 => 327,  695 => 325,  688 => 321,  683 => 319,  676 => 315,  671 => 313,  666 => 310,  661 => 308,  654 => 307,  651 => 306,  645 => 303,  638 => 299,  635 => 298,  633 => 297,  628 => 295,  623 => 293,  617 => 292,  613 => 291,  606 => 286,  603 => 285,  601 => 284,  595 => 280,  586 => 277,  583 => 276,  570 => 268,  566 => 267,  562 => 266,  551 => 260,  546 => 258,  541 => 257,  537 => 255,  534 => 254,  530 => 252,  527 => 251,  523 => 249,  521 => 248,  512 => 245,  500 => 239,  498 => 238,  485 => 236,  476 => 230,  465 => 228,  458 => 224,  452 => 223,  445 => 219,  439 => 217,  433 => 216,  431 => 215,  423 => 210,  419 => 209,  415 => 208,  411 => 207,  403 => 201,  401 => 200,  390 => 192,  379 => 184,  369 => 177,  365 => 175,  361 => 174,  348 => 164,  342 => 161,  335 => 157,  325 => 150,  319 => 147,  312 => 143,  302 => 136,  296 => 133,  289 => 129,  279 => 122,  273 => 119,  266 => 115,  262 => 113,  259 => 112,  248 => 106,  244 => 105,  238 => 102,  209 => 82,  200 => 76,  193 => 72,  188 => 70,  181 => 66,  176 => 64,  169 => 60,  164 => 58,  157 => 54,  152 => 52,  145 => 48,  140 => 46,  133 => 42,  128 => 40,  121 => 36,  116 => 34,  111 => 32,  106 => 30,  102 => 28,  100 => 27,  97 => 26,  93 => 25,  86 => 19,  79 => 17,  69 => 10,  65 => 8,  61 => 7,  54 => 5,  50 => 1,  48 => 23,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_support_tickets.html.twig", "/var/www/modules/Support/html_admin/mod_support_tickets.html.twig");
    }
}
