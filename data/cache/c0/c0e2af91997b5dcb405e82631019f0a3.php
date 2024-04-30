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
class __TwigTemplate_61a75bdee35dfe3215169dfe6dece38b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate((((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 2) || ( !($context["client"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_page", [], "any", false, false, false, 2) != "menuicons")))) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_index_dashboard.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_index_dashboard.html.twig", 4)->unwrap();
        // line 6
        if ( !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_sidemenu", [], "any", false, false, false, 6)) {
            // line 7
            if ( !($context["client"] ?? null)) {
                $context["side_menu"] = "hidden";
            }
        }
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Client Area"), "html", null, true);
    }

    // line 11
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t";
        if (($context["client"] ?? null)) {
            // line 13
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">";
            // line 15
            echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
            echo "</h1>
\t\t\t</div>
\t\t</div>\t
\t";
        } else {
            // line 19
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_page", [], "any", false, false, false, 19) == "menuicons")) {
                // line 20
                echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h1 class=\"page-header\">";
                // line 22
                echo twig_escape_filter($this->env, __trans("Home"), "html", null, true);
                echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 26
            echo "\t";
        }
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "\t";
        if (($context["client"] ?? null)) {
            // line 32
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_enabled", [], "any", false, false, false, 32)) {
                // line 33
                echo "\t\t\t<div class=\"jumbotron text-center\">
\t\t\t\t<h1>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_heading", [], "any", false, false, false, 34), "html", null, true);
                echo "</h1>
\t\t\t\t<p>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_text", [], "any", false, false, false, 35), "html", null, true);
                echo "</p>
\t\t\t\t<a href=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_url", [], "any", false, false, false, 36), "html", null, true);
                echo "\" class=\"btn btn-primary btn-lg\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_title", [], "any", false, false, false, 36), "html", null, true);
                echo "</a>
\t\t\t</div>
\t\t\t";
            }
            // line 38
            echo "\t

\t\t\t<div class=\"row\">
\t\t\t
\t\t\t\t";
            // line 42
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_services", [], "any", false, false, false, 42)) {
                // line 43
                echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i> ";
                // line 47
                echo twig_escape_filter($this->env, __trans("Services"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 48
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["expiring" => 1]], "method", false, false, false, 48), "total", [], "any", false, false, false, 48) > 0)) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"label label-primary\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["expiring" => 1]], "method", false, false, false, 49), "total", [], "any", false, false, false, 49), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, __trans("Soon expires"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("All services"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group text-center\">
\t\t\t\t\t\t\t";
                // line 55
                $context["services"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["per_page" => 10, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 55), "hide_addons" => 1, "status" => "active"]], "method", false, false, false, 55);
                // line 56
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "list", [], "any", false, false, false, 56));
                foreach ($context['_seq'] as $context["i"] => $context["service"]) {
                    // line 57
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order/service/manage");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 57), "html", null, true);
                    echo "\" class=\"list-group-item\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 57), "html", null, true);
                    echo " #";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 57), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['service'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "\t\t\t\t\t\t\t<a class=\"list-group-item list-group-item-success\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("New order"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 63
            echo "\t
\t\t\t\t
\t\t\t\t";
            // line 65
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_support", [], "any", false, false, false, 65)) {
                // line 66
                echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-life-ring\"></i> ";
                // line 70
                echo twig_escape_filter($this->env, __trans("Support"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 71
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "on_hold"]], "method", false, false, false, 71), "total", [], "any", false, false, false, 71) > 0)) {
                    // line 72
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "on_hold"]], "method", false, false, false, 72), "total", [], "any", false, false, false, 72), "html", null, true);
                    echo " ";
                    echo twig_call_macro($macros["mf"], "macro_status_name", ["on_hold"], 72, $context, $this->getSourceContext());
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("All tickets"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group text-center\">
\t\t\t\t\t\t\t";
                // line 78
                $context["tickets_on_hold"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "on_hold"]], "method", false, false, false, 78);
                // line 79
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tickets_on_hold"] ?? null), "list", [], "any", false, false, false, 79));
                foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 80), "html", null, true);
                    echo "\" class=\"list-group-item\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 80), "html", null, true);
                    echo " <span class=\"label label-default\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "helpdesk", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80), "html", null, true);
                    echo "</span> <span class=\"label label-warning\">";
                    echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 80)], 80, $context, $this->getSourceContext());
                    echo "</span></a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "\t\t\t\t\t\t\t";
                $context["tickets_open"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "open"]], "method", false, false, false, 82);
                // line 83
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tickets_open"] ?? null), "list", [], "any", false, false, false, 83));
                foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 84), "html", null, true);
                    echo "\" class=\"list-group-item\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 84), "html", null, true);
                    echo " <span class=\"label label-default\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "helpdesk", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
                    echo "</span></a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "\t\t\t\t\t\t\t<a class=\"list-group-item list-group-item-info\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support", ["ticket" => 1]);
                echo "\">";
                echo twig_escape_filter($this->env, __trans("New ticket"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 90
            echo "\t
\t\t\t\t
\t\t\t\t";
            // line 92
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_invoices", [], "any", false, false, false, 92)) {
                // line 93
                echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-credit-card\"></i> ";
                // line 97
                echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 98
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [["status" => "unpaid"]], "method", false, false, false, 98), "total", [], "any", false, false, false, 98) > 0)) {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [["status" => "unpaid"]], "method", false, false, false, 99), "total", [], "any", false, false, false, 99), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, __trans("Unpaid"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 101
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("All Invoices"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group text-center\">
\t\t\t\t\t\t\t";
                // line 105
                $context["unpaid_invoices"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [["status" => "unpaid", "per_page" => 10]], "method", false, false, false, 105), "list", [], "any", false, false, false, 105);
                // line 106
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["unpaid_invoices"] ?? null));
                foreach ($context['_seq'] as $context["i"] => $context["invoice"]) {
                    // line 107
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "hash", [], "any", false, false, false, 107), "html", null, true);
                    echo "\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t<strong class=\"list-group-item-heading\">";
                    // line 108
                    echo twig_escape_filter($this->env, twig_sprintf("Invoice #%05s", twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 108)), "html", null, true);
                    echo "</strong>
\t\t\t\t\t\t\t\t<p class=\"list-group-item-text\">";
                    // line 109
                    echo twig_escape_filter($this->env, __trans("Due Date"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "due_at", [], "any", false, false, false, 109), "d/m/Y"), "html", null, true);
                    echo " - <strong>";
                    echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "total", [], "any", false, false, false, 109), twig_get_attribute($this->env, $this->source, $context["invoice"], "currency", [], "any", false, false, false, 109));
                    echo "</strong></p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['invoice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [["status" => "unpaid"]], "method", false, false, false, 112), "total", [], "any", false, false, false, 112) > 0)) {
                    echo "<a class=\"list-group-item list-group-item-danger\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [["status" => "unpaid"]], "method", false, false, false, 112), "total", [], "any", false, false, false, 112), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, __trans("Unpaid"), "html", null, true);
                    echo "</a>";
                }
                // line 113
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 116
            echo "\t
\t\t\t\t
\t\t\t\t";
            // line 118
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_orders", [], "any", false, false, false, 118)) {
                // line 119
                echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-shopping-cart\"></i> ";
                // line 123
                echo twig_escape_filter($this->env, __trans("Recent orders"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                // line 124
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("New order"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["per_page" => 5, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 128), "hide_addons" => 1]], "method", false, false, false, 128), "list", [], "any", false, false, false, 128));
                foreach ($context['_seq'] as $context["i"] => $context["order"]) {
                    // line 129
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service/manage");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 129), "html", null, true);
                    echo "\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t";
                    // line 130
                    echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 130), 30), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t<span class=\"pull-right label ";
                    // line 131
                    if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 131) == "active")) {
                        echo "label-success";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 131) == "pending_setup")) {
                        echo "label-warning";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 131) == "failed_setup")) {
                        echo "label-danger";
                    } else {
                        echo "label-default";
                    }
                    echo "\">";
                    echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 131)], 131, $context, $this->getSourceContext());
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 137
            echo "\t
\t\t\t\t
\t\t\t\t";
            // line 139
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_messages", [], "any", false, false, false, 139)) {
                // line 140
                echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-envelope\"></i> ";
                // line 144
                echo twig_escape_filter($this->env, __trans("Recent emails"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                // line 145
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("email");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Emails"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email_get_list", [["per_page" => 5]], "method", false, false, false, 149), "list", [], "any", false, false, false, 149));
                foreach ($context['_seq'] as $context["i"] => $context["email"]) {
                    // line 150
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("email");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 150), "html", null, true);
                    echo "\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t";
                    // line 151
                    echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "subject", [], "any", false, false, false, 151), 30), "html", null, true);
                    echo " <small>- ";
                    echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["email"], "created_at", [], "any", false, false, false, 151)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
                    echo "</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 157
            echo "\t

\t\t\t\t";
            // line 159
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_kb", [], "any", false, false, false, 159) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "kb"]], "method", false, false, false, 159))) {
                // line 160
                echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-graduation-cap\"></i> ";
                // line 164
                echo twig_escape_filter($this->env, __trans("Knowledge Base"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                // line 165
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("kb");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Knowledge Base"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group panel\" id=\"kb\">
\t\t\t\t\t\t\t<span class=\"list-group-item\">
\t\t\t\t\t\t\t\t<form method=\"get\" action=\"";
                // line 170
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("kb");
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input name=\"q\" type=\"text\" class=\"form-control\" value=\"";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "q", [], "any", false, false, false, 172), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, __trans("What are you looking for?"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                // line 179
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "kb_category_get_list", [], "any", false, false, false, 179), "list", [], "any", false, false, false, 179));
                foreach ($context['_seq'] as $context["i"] => $context["category"]) {
                    // line 180
                    echo "\t\t\t\t\t\t\t\t<a href=\"#category-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 180), "html", null, true);
                    echo "\" class=\"list-group-item text-center\" data-toggle=\"collapse\" data-parent=\"#kb\"><strong>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 180), "html", null, true);
                    echo "</strong></a>
\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"category-";
                    // line 181
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 181), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 182
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "articles", [], "any", false, false, false, 182));
                    foreach ($context['_seq'] as $context["i"] => $context["article"]) {
                        // line 183
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/kb");
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 183), "slug", [], "any", false, false, false, 183), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 183), "html", null, true);
                        echo "\" class=\"list-group-item\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 183), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['i'], $context['article'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 185
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 191
            echo "
\t\t\t\t";
            // line 192
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_new", [], "any", false, false, false, 192) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "news"]], "method", false, false, false, 192))) {
                // line 193
                echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-bullhorn\"></i> ";
                // line 197
                echo twig_escape_filter($this->env, __trans("News & Announcements"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                // line 198
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("news");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Blog"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t";
                // line 202
                $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "news_get_list", [["per_page" => 4, "page" => 1]], "method", false, false, false, 202);
                // line 203
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "list", [], "any", false, false, false, 203));
                foreach ($context['_seq'] as $context["i"] => $context["post"]) {
                    // line 204
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 204), "html", null, true);
                    echo "\" class=\"list-group-item\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 204), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 210
            echo "\t\t\t\t\t
\t\t\t\t";
            // line 211
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_forum", [], "any", false, false, false, 211) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "forum"]], "method", false, false, false, 211))) {
                // line 212
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "forum_favorites", [], "any", false, false, false, 212)) {
                    // line 213
                    echo "\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-comments\"></i> ";
                    // line 217
                    echo twig_escape_filter($this->env, __trans("Favorite topics"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                    // line 218
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("forum");
                    echo "\">";
                    echo twig_escape_filter($this->env, __trans("Forum"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t";
                    // line 222
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "forum_favorites", [], "any", false, false, false, 222));
                    foreach ($context['_seq'] as $context["i"] => $context["topic"]) {
                        // line 223
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/forum");
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "forum", [], "any", false, false, false, 223), "slug", [], "any", false, false, false, 223), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "slug", [], "any", false, false, false, 223), "html", null, true);
                        echo "#m-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 223), "id", [], "any", false, false, false, 223), "html", null, true);
                        echo "\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t<h4 class=\"list-group-item-heading\">";
                        // line 224
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "title", [], "any", false, false, false, 224), "html", null, true);
                        echo "</h4>
\t\t\t\t\t\t\t\t<p class=\"list-group-item-text\">
\t\t\t\t\t\t\t\t\t<i>";
                        // line 226
                        echo twig_escape_filter($this->env, __trans("Last post"), "html", null, true);
                        echo ":</i> <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 226), "author", [], "any", false, false, false, 226), "email", [], "any", false, false, false, 226)), "html", null, true);
                        echo "?size=15\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 226), "author", [], "any", false, false, false, 226), "name", [], "any", false, false, false, 226), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 226), "author", [], "any", false, false, false, 226), "name", [], "any", false, false, false, 226), "html", null, true);
                        echo " <strong>";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 226), "created_at", [], "any", false, false, false, 226), "Y-m-d h:i"), "html", null, true);
                        echo "</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['i'], $context['topic'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 230
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 234
                echo "\t\t\t\t";
            }
            echo "\t
\t\t\t</div>
\t";
        } else {
            // line 237
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_page", [], "any", false, false, false, 237) == "menuicons")) {
                // line 238
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_enabled", [], "any", false, false, false, 238)) {
                    // line 239
                    echo "\t\t\t<div class=\"jumbotron text-center\">
\t\t\t\t<h1>";
                    // line 240
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_heading", [], "any", false, false, false, 240), "html", null, true);
                    echo "</h1>
\t\t\t\t<p>";
                    // line 241
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_text", [], "any", false, false, false, 241), "html", null, true);
                    echo "</p>
\t\t\t\t<a href=\"";
                    // line 242
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_url", [], "any", false, false, false, 242), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-lg\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_title", [], "any", false, false, false, 242), "html", null, true);
                    echo "</a>
\t\t\t</div>
\t\t\t";
                }
                // line 244
                echo "\t
\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-5x\">
\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t\t  <i class=\"fa fa-shopping-cart fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h4><a href=\"";
                // line 256
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
                echo "</a></h4>
\t\t\t\t\t\t\t<p>";
                // line 257
                echo twig_escape_filter($this->env, __trans("Choose products we offer for selling"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-5x\">
\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t\t  <i class=\"fa fa-users fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h4><a href=\"";
                // line 271
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/login", ["register" => 1]);
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Register"), "html", null, true);
                echo "</a></h4>
\t\t\t\t\t\t\t<p>";
                // line 272
                echo twig_escape_filter($this->env, __trans("Become a member and manage services"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-5x\">
\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t\t  <i class=\"fa fa-envelope fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h4><a href=\"";
                // line 286
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/support/contact-us");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Contact Us"), "html", null, true);
                echo "</a></h4>
\t\t\t\t\t\t\t<p>";
                // line 287
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 287), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
                // line 292
                if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "news"]], "method", false, false, false, 292)) {
                    // line 293
                    echo "\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-5x\">
\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t\t  <i class=\"fa fa-bullhorn fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h4><a href=\"";
                    // line 302
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
                    echo "\">";
                    echo twig_escape_filter($this->env, __trans("Announcements"), "html", null, true);
                    echo "</a></h4>
\t\t\t\t\t\t\t<p>";
                    // line 303
                    echo twig_escape_filter($this->env, __trans("Track our latest posts"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 308
                echo "
\t\t\t\t";
                // line 309
                if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "kb"]], "method", false, false, false, 309)) {
                    // line 310
                    echo "\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-5x\">
\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t\t  <i class=\"fa fa-graduation-cap fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h4><a href=\"";
                    // line 319
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/kb");
                    echo "\">";
                    echo twig_escape_filter($this->env, __trans("Knowledge Base"), "html", null, true);
                    echo "</a></h4>
\t\t\t\t\t\t\t<p>";
                    // line 320
                    echo twig_escape_filter($this->env, __trans("Browse our KB for answers and FAQs"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 325
                echo "\t\t\t</div>
\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 326
($context["settings"] ?? null), "home_page", [], "any", false, false, false, 326) == "order")) {
                // line 327
                echo "\t\t\t";
                $this->loadTemplate("mod_order_index.html.twig", "mod_index_dashboard.html.twig", 327)->display($context);
                // line 328
                echo "\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_page", [], "any", false, false, false, 328) == "blog")) {
                // line 329
                echo "\t\t\t";
                $this->loadTemplate("mod_news_index.html.twig", "mod_index_dashboard.html.twig", 329)->display($context);
                // line 330
                echo "\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_page", [], "any", false, false, false, 330) == "login")) {
                // line 331
                echo "\t\t\t";
                $this->loadTemplate("mod_page_login.html.twig", "mod_index_dashboard.html.twig", 331)->display($context);
                // line 332
                echo "\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_page", [], "any", false, false, false, 332) == "contact")) {
                // line 333
                echo "\t\t\t";
                $this->loadTemplate("mod_support_contact_us.html.twig", "mod_index_dashboard.html.twig", 333)->display($context);
                // line 334
                echo "\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_page", [], "any", false, false, false, 334) == "kb")) {
                // line 335
                echo "\t\t\t";
                $this->loadTemplate("mod_kb_index.html.twig", "mod_index_dashboard.html.twig", 335)->display($context);
                // line 336
                echo "\t\t";
            }
            // line 337
            echo "\t";
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
        return array (  908 => 337,  905 => 336,  902 => 335,  899 => 334,  896 => 333,  893 => 332,  890 => 331,  887 => 330,  884 => 329,  881 => 328,  878 => 327,  876 => 326,  873 => 325,  865 => 320,  859 => 319,  848 => 310,  846 => 309,  843 => 308,  835 => 303,  829 => 302,  818 => 293,  816 => 292,  808 => 287,  802 => 286,  785 => 272,  779 => 271,  762 => 257,  756 => 256,  742 => 244,  734 => 242,  730 => 241,  726 => 240,  723 => 239,  720 => 238,  717 => 237,  710 => 234,  704 => 230,  686 => 226,  681 => 224,  670 => 223,  666 => 222,  657 => 218,  653 => 217,  647 => 213,  644 => 212,  642 => 211,  639 => 210,  633 => 206,  620 => 204,  615 => 203,  613 => 202,  604 => 198,  600 => 197,  594 => 193,  592 => 192,  589 => 191,  583 => 187,  576 => 185,  561 => 183,  557 => 182,  553 => 181,  546 => 180,  542 => 179,  530 => 172,  525 => 170,  515 => 165,  511 => 164,  505 => 160,  503 => 159,  499 => 157,  493 => 154,  480 => 151,  473 => 150,  469 => 149,  460 => 145,  456 => 144,  450 => 140,  448 => 139,  444 => 137,  438 => 134,  419 => 131,  415 => 130,  408 => 129,  404 => 128,  395 => 124,  391 => 123,  385 => 119,  383 => 118,  379 => 116,  373 => 113,  362 => 112,  349 => 109,  345 => 108,  338 => 107,  333 => 106,  331 => 105,  321 => 101,  313 => 99,  311 => 98,  307 => 97,  301 => 93,  299 => 92,  295 => 90,  284 => 86,  269 => 84,  264 => 83,  261 => 82,  244 => 80,  239 => 79,  237 => 78,  227 => 74,  219 => 72,  217 => 71,  213 => 70,  207 => 66,  205 => 65,  201 => 63,  190 => 59,  175 => 57,  170 => 56,  168 => 55,  158 => 51,  150 => 49,  148 => 48,  144 => 47,  138 => 43,  136 => 42,  130 => 38,  122 => 36,  118 => 35,  114 => 34,  111 => 33,  108 => 32,  105 => 31,  101 => 30,  96 => 26,  89 => 22,  85 => 20,  82 => 19,  75 => 15,  71 => 13,  68 => 12,  64 => 11,  57 => 3,  53 => 2,  48 => 7,  46 => 6,  44 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_index_dashboard.html.twig", "/var/www/themes/fossbilling-bootstrap/html/mod_index_dashboard.html.twig");
    }
}
