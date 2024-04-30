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

/* mod_index_dashboard.html.twig */
class __TwigTemplate_b6ca556dfe96bf2e23ffdfe047e563b5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'page_header' => [$this, 'block_page_header'],
            'body_class' => [$this, 'block_body_class'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_index_dashboard.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_index_dashboard.html.twig", 16)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Client Area"), "html", null, true);
    }

    // line 4
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
    }

    // line 6
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "dashboard";
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_dashboard_breadcrumb", [], "any", false, false, false, 8)) {
            // line 9
            echo "        <ul class=\"breadcrumb\">
            <li><a href=\"";
            // line 10
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Home"), "html", null, true);
            echo "</a> <span class=\"dropdown-divider\">/</span></li>
            <li class=\"active\">";
            // line 11
            echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
            echo "</li>
        </ul>
    ";
        }
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_enabled", [], "any", false, false, false, 19)) {
            // line 20
            echo "        <div class=\"alert alert-info\" role=\"alert\">
            <p>";
            // line 21
            echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_text", [], "any", false, false, false, 21));
            echo "</p>

            ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_url", [], "any", false, false, false, 23) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_title", [], "any", false, false, false, 23))) {
                // line 24
                echo "                <a class=\"btn btn-primary btn-large\"
                   href=\"";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_url", [], "any", false, false, false, 25), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_title", [], "any", false, false, false, 25), "html", null, true);
                echo "</a>
            ";
            }
            // line 27
            echo "        </div>
    ";
        }
        // line 29
        echo "
    ";
        // line 30
        if (($context["client"] ?? null)) {
            // line 31
            echo "        ";
            $context["tickets"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "on_hold"]], "method", false, false, false, 31);
            // line 32
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "total", [], "any", false, false, false, 32) > 0)) {
                // line 33
                echo "            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "list", [], "any", false, false, false, 35));
                foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                    // line 36
                    echo "                        <div class=\"alert alert-info d-flex justify-content-between\" role=\"alert\">
                            <span>Ticket <strong>#";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 37), "html", null, true);
                    echo "</strong> was responded ";
                    echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["ticket"], "updated_at", [], "any", false, false, false, 37)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
                    echo ".</span><a
                                href=\"";
                    // line 38
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 38), "html", null, true);
                    echo "\"
                                class=\"alert-link\">";
                    // line 39
                    echo twig_escape_filter($this->env, __trans("Reply"), "html", null, true);
                    echo "</a>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                </div>
            </div>
        ";
            }
            // line 45
            echo "
        <div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                            <span class=\"h6 m-0 pt-1\">";
            // line 51
            echo twig_escape_filter($this->env, __trans("Profile"), "html", null, true);
            echo "</span>
                            <div class=\"py-2\">
                                <a class=\"btn btn-sm btn-dark\"
                                   href=\"";
            // line 54
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/profile");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
            echo "</a>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 59
            echo twig_escape_filter($this->env, __trans("Client ID"), "html", null, true);
            echo "</dt>
                                <dd class=\"col-sm-8\">#";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 61
            echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
            echo "</dt>
                                <dd class=\"col-sm-8\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 62), "html", null, true);
            echo "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 63
            echo twig_escape_filter($this->env, __trans("Balance"), "html", null, true);
            echo "</dt>
                                <dd class=\"col-sm-8\">";
            // line 64
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "balance", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 64));
            echo "</dd>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                            <span class=\"h6 m-0 pt-1\">";
            // line 73
            echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
            echo "</span>
                            <div class=\"py-2\">
                                <a class=\"btn btn-sm btn-dark\"
                                   href=\"";
            // line 76
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("All Invoices"), "html", null, true);
            echo "</a>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 81
            echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
            echo "</dt>
                                <dd class=\"col-sm-8\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [], "method", false, false, false, 82), "total", [], "any", false, false, false, 82), "html", null, true);
            echo "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 83
            echo twig_escape_filter($this->env, __trans("Paid"), "html", null, true);
            echo "</dt>
                                <dd class=\"col-sm-8\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [["status" => "paid"]], "method", false, false, false, 84), "total", [], "any", false, false, false, 84), "html", null, true);
            echo "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 85
            echo twig_escape_filter($this->env, __trans("Unpaid"), "html", null, true);
            echo "</dt>
                                <dd class=\"col-sm-8\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [["status" => "unpaid"]], "method", false, false, false, 86), "total", [], "any", false, false, false, 86), "html", null, true);
            echo "</dd>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                            <span class=\"h6 m-0 pt-1\">";
            // line 97
            echo twig_escape_filter($this->env, __trans("Orders"), "html", null, true);
            echo "</span>
                            <div class=\"py-2\">
                                <a class=\"btn btn-sm btn-primary order-button\"
                                   href=\"";
            // line 100
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("New order"), "html", null, true);
            echo "</a>
                                <a class=\"btn btn-sm btn-dark\"
                                   href=\"";
            // line 102
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("All orders"), "html", null, true);
            echo "</a>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 107
            echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
            echo "</dt>
                                <dd class=\"col-sm-8\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["hide_addons" => 1]], "method", false, false, false, 108), "total", [], "any", false, false, false, 108), "html", null, true);
            echo "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 109
            echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
            echo "</dt>
                                <dd class=\"col-sm-8\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["hide_addons" => 1, "status" => "active"]], "method", false, false, false, 110), "total", [], "any", false, false, false, 110), "html", null, true);
            echo "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 111
            echo twig_escape_filter($this->env, __trans("Expiring"), "html", null, true);
            echo "</dt>
                                <dd class=\"col-sm-8\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["expiring" => 1]], "method", false, false, false, 112), "total", [], "any", false, false, false, 112), "html", null, true);
            echo "</dd>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                            <span class=\"h6 m-0 pt-1\">";
            // line 121
            echo twig_escape_filter($this->env, __trans("Tickets"), "html", null, true);
            echo "</span>
                            <div class=\"py-2\">
                                <a class=\"btn btn-sm btn-primary\"
                                   href=\"";
            // line 124
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support", ["ticket" => 1]);
            echo "\">";
            echo twig_escape_filter($this->env, __trans("New ticket"), "html", null, true);
            echo "</a>
                                <a class=\"btn btn-sm btn-dark\" href=\"";
            // line 125
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("All tickets"), "html", null, true);
            echo "</a>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 130
            echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
            echo "</dt>
                                <dd class=\"col-sm-8\">";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [], "method", false, false, false, 131), "total", [], "any", false, false, false, 131), "html", null, true);
            echo "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 132
            echo twig_escape_filter($this->env, __trans("Open"), "html", null, true);
            echo "</dt>
                                <dd class=\"col-sm-8\">";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "open"]], "method", false, false, false, 133), "total", [], "any", false, false, false, 133), "html", null, true);
            echo "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 134
            echo twig_escape_filter($this->env, __trans("On Hold"), "html", null, true);
            echo "</dt>
                                <dd class=\"col-sm-8\">";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "on_hold"]], "method", false, false, false, 135), "total", [], "any", false, false, false, 135), "html", null, true);
            echo "</dd>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header py-3\">
                            <span class=\"h6 m-0 pt-1\">";
            // line 144
            echo twig_escape_filter($this->env, __trans("Recent orders"), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"card-body p-1\">
                            ";
            // line 147
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["per_page" => 5, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 147), "hide_addons" => 1]], "method", false, false, false, 147), "list", [], "any", false, false, false, 147)) {
                // line 148
                echo "                                <div class=\"list-group list-group-flush\">
                                    ";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["per_page" => 5, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 149), "hide_addons" => 1]], "method", false, false, false, 149), "list", [], "any", false, false, false, 149));
                foreach ($context['_seq'] as $context["i"] => $context["order"]) {
                    // line 150
                    echo "                                        <a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service/manage");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 150), "html", null, true);
                    echo "\"
                                           class=\"list-group-item d-flex justify-content-between align-items-center\" aria-current=\"true\">
                                            <div>
                                                <div>
                                                    <span><strong>#";
                    // line 154
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 154), "html", null, true);
                    echo "</strong></span>&nbsp;<span>";
                    echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 154), 45), "html", null, true);
                    echo "</span>
                                                </div>
                                                <span class=\"text-secondary small\" title=\"";
                    // line 156
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "updated_at", [], "any", false, false, false, 156)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["order"], "updated_at", [], "any", false, false, false, 156)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
                    echo "</span>
                                            </div>
                                            <div>
                                                <span class=\"badge ";
                    // line 159
                    if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 159) == "active")) {
                        echo "bg-success";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 159) == "pending_setup")) {
                        echo "bg-warning";
                    } elseif ((((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 159) == "failed_setup") || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 159) == "suspended")) || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 159) == "failed_renew"))) {
                        echo "bg-danger";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 159) == "canceled")) {
                        echo "bg-secondary";
                    }
                    echo "\">";
                    echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 159)], 159, $context, $this->getSourceContext());
                    echo "</span>
                                            </div>
                                        </a>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "                                </div>
                            ";
            } else {
                // line 165
                echo "                                <div class=\"d-flex justify-content-center my-2 p-2\">
                                    <span class=\"m-0\">";
                // line 166
                echo twig_escape_filter($this->env, __trans("No recent orders"), "html", null, true);
                echo "</span>
                                </div>
                            ";
            }
            // line 169
            echo "                        </div>
                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header py-3\">
                            <span class=\"h6 m-0 pt-1\">";
            // line 176
            echo twig_escape_filter($this->env, __trans("Support tickets"), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"card-body p-1\">
                            ";
            // line 179
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["per_page" => 5]], "method", false, false, false, 179), "list", [], "any", false, false, false, 179)) {
                // line 180
                echo "                                <div class=\"list-group list-group-flush\">
                                    ";
                // line 181
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["per_page" => 5]], "method", false, false, false, 181), "list", [], "any", false, false, false, 181));
                foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                    // line 182
                    echo "                                        <a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 182), "html", null, true);
                    echo "\"
                                           class=\"list-group-item d-flex justify-content-between align-items-center\" aria-current=\"true\">
                                            <div>
                                                <div>
                                                    <span><strong>#";
                    // line 186
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 186), "html", null, true);
                    echo "</strong></span>&nbsp;<span>";
                    echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 186), 45), "html", null, true);
                    echo "</span>
                                                </div>
                                                <span class=\"text-secondary small\" title=\"";
                    // line 188
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "updated_at", [], "any", false, false, false, 188)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["ticket"], "updated_at", [], "any", false, false, false, 188)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
                    echo "</span>
                                            </div>
                                            <div>
                                                <span class=\"badge ";
                    // line 191
                    if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 191) == "open")) {
                        echo "bg-success";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 191) == "on_hold")) {
                        echo "bg-warning";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 191) == "closed")) {
                        echo "bg-secondary";
                    }
                    echo "\">";
                    echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 191)], 191, $context, $this->getSourceContext());
                    echo "</span>
                                            </div>
                                        </a>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 195
                echo "                                </div>
                            ";
            } else {
                // line 197
                echo "                                <div class=\"d-flex justify-content-center my-2 p-2\">
                                    <span class=\"m-0\">";
                // line 198
                echo twig_escape_filter($this->env, __trans("No recent support tickets"), "html", null, true);
                echo "</span>
                                </div>
                            ";
            }
            // line 201
            echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 207
            echo "        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"card mb-4\">
                    <div class=\"card-header h6 py-3\">";
            // line 210
            echo twig_escape_filter($this->env, __trans("Profile"), "html", null, true);
            echo "</div>
                    <div class=\"card-body\">
                        <p>";
            // line 212
            echo twig_escape_filter($this->env, __trans("You are logged out"), "html", null, true);
            echo "</p>
                        <div class=\"d-flex gap-2\">
                            <a class=\"btn btn-sm  btn-primary\" href=\"";
            // line 214
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/login");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Login"), "html", null, true);
            echo "</a>
                            <a class=\"btn btn-sm btn-dark\" href=\"";
            // line 215
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/signup");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Sign up"), "html", null, true);
            echo "</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"card mb-4\">
                    <div class=\"card-header h6 py-3\">";
            // line 223
            echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
            echo "</div>
                    <div class=\"card-body\">
                        <p>";
            // line 225
            echo twig_escape_filter($this->env, __trans("Products and services"), "html", null, true);
            echo "</p>
                        <div class=\"d-flex gap-2\">
                            <a class=\"btn btn-sm btn-dark\" href=\"";
            // line 227
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
            echo "</a>
                        </div>
                    </div>
                </div>
            </div>

            ";
            // line 233
            if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "news"]], "method", false, false, false, 233)) {
                // line 234
                echo "                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header h6 py-3\">";
                // line 236
                echo twig_escape_filter($this->env, __trans("News"), "html", null, true);
                echo "</div>
                        <div class=\"card-body\">
                            <p>";
                // line 238
                echo twig_escape_filter($this->env, __trans("Latest news and announcements"), "html", null, true);
                echo "</p>
                            <div class=\"d-flex gap-2\">
                                <a class=\"btn btn-sm btn-dark\" href=\"";
                // line 240
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Announcements"), "html", null, true);
                echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            // line 246
            echo "
            ";
            // line 247
            if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "support_kb_enabled", [], "method", false, false, false, 247)) {
                // line 248
                echo "                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header h6 py-3\">";
                // line 250
                echo twig_escape_filter($this->env, __trans("Knowledge base"), "html", null, true);
                echo "</div>
                        <div class=\"card-body\">
                            <p>";
                // line 252
                echo twig_escape_filter($this->env, __trans("Browse our KB for answers and FAQ"), "html", null, true);
                echo "</p>
                            <div class=\"d-flex gap-2\">
                                <a class=\"btn btn-sm btn-dark\" href=\"";
                // line 254
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/support/kb");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Knowledge base"), "html", null, true);
                echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            // line 260
            echo "        </div>
    ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_index_dashboard.html.twig";
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
        return array (  670 => 260,  659 => 254,  654 => 252,  649 => 250,  645 => 248,  643 => 247,  640 => 246,  629 => 240,  624 => 238,  619 => 236,  615 => 234,  613 => 233,  602 => 227,  597 => 225,  592 => 223,  579 => 215,  573 => 214,  568 => 212,  563 => 210,  558 => 207,  550 => 201,  544 => 198,  541 => 197,  537 => 195,  519 => 191,  509 => 188,  502 => 186,  492 => 182,  488 => 181,  485 => 180,  483 => 179,  477 => 176,  468 => 169,  462 => 166,  459 => 165,  455 => 163,  435 => 159,  425 => 156,  418 => 154,  408 => 150,  404 => 149,  401 => 148,  399 => 147,  393 => 144,  381 => 135,  377 => 134,  373 => 133,  369 => 132,  365 => 131,  361 => 130,  351 => 125,  345 => 124,  339 => 121,  327 => 112,  323 => 111,  319 => 110,  315 => 109,  311 => 108,  307 => 107,  297 => 102,  290 => 100,  284 => 97,  270 => 86,  266 => 85,  262 => 84,  258 => 83,  254 => 82,  250 => 81,  240 => 76,  234 => 73,  222 => 64,  218 => 63,  214 => 62,  210 => 61,  206 => 60,  202 => 59,  192 => 54,  186 => 51,  178 => 45,  173 => 42,  164 => 39,  158 => 38,  150 => 37,  147 => 36,  143 => 35,  139 => 33,  136 => 32,  133 => 31,  131 => 30,  128 => 29,  124 => 27,  117 => 25,  114 => 24,  112 => 23,  107 => 21,  104 => 20,  101 => 19,  97 => 18,  89 => 11,  83 => 10,  80 => 9,  77 => 8,  73 => 7,  66 => 6,  59 => 4,  52 => 3,  48 => 1,  46 => 16,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_index_dashboard.html.twig", "/var/www/modules/Index/html_client/mod_index_dashboard.html.twig");
    }
}
