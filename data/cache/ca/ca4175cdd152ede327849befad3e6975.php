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
class __TwigTemplate_22ce106422e2c942447abea3fc43b8c6 extends Template
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
        // line 15
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_index_dashboard.html.twig", 15)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Client Area"), "html", null, true);
    }

    // line 3
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
    }

    // line 4
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "dashboard";
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if ( !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hide_dashboard_breadcrumb", [], "any", false, false, false, 6)) {
            // line 7
            echo "<div class=\"mb-1\">
   <ol class=\"breadcrumb\" aria-label=\"breadcrumbs\">
      <li class=\"breadcrumb-item\"><a href=\"";
            // line 9
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Home"), "html", null, true);
            echo "</a></li>
      <li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
            // line 10
            echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
            echo "</a></li>
   </ol>
</div>
";
        }
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_enabled", [], "any", false, false, false, 17)) {
            // line 18
            echo "<div class=\"row row-deck row-cards mb-3\">
   <div class=\"col-md-12\">
      <div class=\"card card-sm\">
         <div class=\"card-status-top bg-yellow\"></div>
         <div class=\"card-body\">
            <p>";
            // line 23
            echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_text", [], "any", false, false, false, 23));
            echo "</p>
            ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_url", [], "any", false, false, false, 24) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_title", [], "any", false, false, false, 24))) {
                // line 25
                echo "            <p><a class=\"btn btn-yellow\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_url", [], "any", false, false, false, 25), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_title", [], "any", false, false, false, 25), "html", null, true);
                echo "</a></p>
            ";
            }
            // line 27
            echo "         </div>
      </div>
   </div>
</div>
";
        }
        // line 32
        if (($context["client"] ?? null)) {
            // line 33
            $context["tickets"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "on_hold"]], "method", false, false, false, 33);
            // line 34
            if ((twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "total", [], "any", false, false, false, 34) > 0)) {
                // line 35
                echo "<div class=\"row\">
   <article class=\"span12 data-block\">
      <div class=\"data-container\">
         <header>
            <h2>";
                // line 39
                echo twig_escape_filter($this->env, __trans("Tickets waiting your reply"), "html", null, true);
                echo "</h2>
         </header>
         <section id=\"slimScroll1\">
            <table class=\"table table-striped table-bordered table-condensed table-hover\">
               <thead>
                  <tr>
                     <th>";
                // line 45
                echo twig_escape_filter($this->env, __trans("Id"), "html", null, true);
                echo "</th>
                     <th>";
                // line 46
                echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
                echo "</th>
                     <th>";
                // line 47
                echo twig_escape_filter($this->env, __trans("Help desk"), "html", null, true);
                echo "</th>
                     <th>";
                // line 48
                echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
                echo "</th>
                     <th>";
                // line 49
                echo twig_escape_filter($this->env, __trans("Last Updated"), "html", null, true);
                echo "</th>
                     <th>";
                // line 50
                echo twig_escape_filter($this->env, __trans("Actions"), "html", null, true);
                echo "</th>
                  </tr>
               </thead>
               <tbody>
                  ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "list", [], "any", false, false, false, 54));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                    // line 55
                    echo "                  <tr class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(["odd", "even"], $context["i"]), "html", null, true);
                    echo "\">
                     <td>";
                    // line 56
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 56), "html", null, true);
                    echo "</td>
                     <td><a href=\"";
                    // line 57
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 57), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 57), "html", null, true);
                    echo "</a></td>
                     <td>";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "helpdesk", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
                    echo "</td>
                     <td><span class=\"label\">";
                    // line 59
                    echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 59)], 59, $context, $this->getSourceContext());
                    echo "</span></td>
                     <td title=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "updated_at", [], "any", false, false, false, 60)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["ticket"], "updated_at", [], "any", false, false, false, 60)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
                    echo "</td>
                     <td><a href=\"";
                    // line 61
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 61), "html", null, true);
                    echo "\" class=\"btn btn-small btn-inverse\">";
                    echo twig_escape_filter($this->env, __trans("Reply"), "html", null, true);
                    echo "</a></td>
                  </tr>
                  ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 64
                    echo "                  <tr>
                     <td colspan=\"5\">";
                    // line 65
                    echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
                    echo "</td>
                  </tr>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "               </tbody>
            </table>
         </section>
      </div>
   </article>
</div>
";
            }
            // line 75
            echo "<div class=\"row row-deck row-cards\">
   <div class=\"col-sm-6 col-lg-4\">
      <div class=\"card card-sm\">
         <div class=\"card-status-top bg-green\"></div>
         <div class=\"card-body\">
            <div class=\"row align-items-center\">
               <div class=\"col-auto\">
                  <span class=\"bg-green text-white avatar\">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                        <path d=\"M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path>
                        <path d=\"M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path>
                        <path d=\"M17 17h-11v-14h-2\"></path>
                        <path d=\"M6 5l14 1l-1 7h-13\"></path>
                     </svg>
                  </span>
               </div>
               <div class=\"col\">
                  <div class=\"font-weight-medium\">
                     ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["hide_addons" => 1]], "method", false, false, false, 94), "total", [], "any", false, false, false, 94), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("Orders"), "html", null, true);
            echo "
                  </div>
                  <div class=\"text-muted\">
                     ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["hide_addons" => 1, "status" => "active"]], "method", false, false, false, 97), "total", [], "any", false, false, false, 97), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
            echo "
                  </div>
                  <div class=\"text-muted\">
                     ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["expiring" => 1]], "method", false, false, false, 100), "total", [], "any", false, false, false, 100), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("Expiring"), "html", null, true);
            echo "
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class=\"col-sm-6 col-lg-4\">
      <div class=\"card card-sm\">
         <div class=\"card-status-top bg-danger\"></div>
         <div class=\"card-body\">
            <div class=\"row align-items-center\">
               <div class=\"col-auto\">
                  <span class=\"bg-danger text-white avatar\">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-currency-dollar\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                        <path d=\"M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2\"></path>
                        <path d=\"M12 3v3m0 12v3\"></path>
                     </svg>
                  </span>
               </div>
               <div class=\"col\">
                  <div class=\"font-weight-medium\">
                     ";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [], "method", false, false, false, 123), "total", [], "any", false, false, false, 123), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
            echo "
                  </div>
                  <div class=\"text-muted\">
                     ";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [["status" => "paid"]], "method", false, false, false, 126), "total", [], "any", false, false, false, 126), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("Paid"), "html", null, true);
            echo "
                  </div>
                  <div class=\"text-muted\">
                     ";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [["status" => "unpaid"]], "method", false, false, false, 129), "total", [], "any", false, false, false, 129), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("Unpaid"), "html", null, true);
            echo "
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class=\"col-sm-6 col-lg-4\">
      <div class=\"card card-sm\">
         <div class=\"card-status-top bg-warning\"></div>
         <div class=\"card-body\">
            <div class=\"row align-items-center\">
               <div class=\"col-auto\">
                  <span class=\"bg-orange text-white avatar\">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                        <path d=\"M8 9h8\"></path>
                        <path d=\"M8 13h6\"></path>
                        <path d=\"M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z\"></path>
                     </svg>
                  </span>
               </div>
               <div class=\"col\">
                  <div class=\"font-weight-medium\">
                     ";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [], "method", false, false, false, 153), "total", [], "any", false, false, false, 153), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("Tickets"), "html", null, true);
            echo "
                  </div>
                  <div class=\"text-muted\">
                     ";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "open"]], "method", false, false, false, 156), "total", [], "any", false, false, false, 156), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("Open"), "html", null, true);
            echo "
                  </div>
                  <div class=\"text-muted\">
                     ";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "on_hold"]], "method", false, false, false, 159), "total", [], "any", false, false, false, 159), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("On Hold"), "html", null, true);
            echo "
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class=\"row row-deck row-cards mt-1\">
   <div class=\"col-md-6\">
      <div class=\"card\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">";
            // line 171
            echo twig_escape_filter($this->env, __trans("Recent orders"), "html", null, true);
            echo "</h3>
         </div>
         <div class=\"table-responsive\">
            <table class=\"table card-table table-vcenter text-nowrap table-hover table-striped\">
               <tbody>
                  ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["per_page" => 5, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 176), "hide_addons" => 1]], "method", false, false, false, 176), "list", [], "any", false, false, false, 176));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["order"]) {
                // line 177
                echo "                  <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(["odd", "even"], $context["i"]), "html", null, true);
                echo "\">
                     <td>
                        <a href=\"";
                // line 179
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 179), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 179), 30), "html", null, true);
                echo "</a>
                     </td>
                     <td>
                        <span class=\"badge bg-";
                // line 182
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 182) == "active")) {
                    echo "green";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 182) == "pending_setup")) {
                    echo "orange";
                }
                echo "\">";
                echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 182)], 182, $context, $this->getSourceContext());
                echo "</span>
                     </td>
                  </tr>
                  ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 186
                echo "                  <tr>
                     <td colspan=\"3\">";
                // line 187
                echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
                echo "</td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "               </tbody>
            </table>
         </div>
      </div>
   </div>
   <div class=\"col-md-6\">
      <div class=\"card\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">";
            // line 198
            echo twig_escape_filter($this->env, __trans("Recent emails"), "html", null, true);
            echo "</h3>
         </div>
         <div class=\"table-responsive\">
            <table class=\"table card-table table-vcenter text-nowrap table-hover table-striped\">
               <tbody>
                  ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email_get_list", [["per_page" => 5]], "method", false, false, false, 203), "list", [], "any", false, false, false, 203));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["email"]) {
                // line 204
                echo "                  <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(["odd", "even"], $context["i"]), "html", null, true);
                echo "\">
                     <td><a href=\"";
                // line 205
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("email");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 205), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "subject", [], "any", false, false, false, 205), 30), "html", null, true);
                echo "</a></td>
                     <td title=\"";
                // line 206
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "created_at", [], "any", false, false, false, 206)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["email"], "created_at", [], "any", false, false, false, 206)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
                echo "</td>
                  </tr>
                  ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 209
                echo "                  <tr>
                     <td colspan=\"2\">";
                // line 210
                echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
                echo "</td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
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
        return array (  510 => 213,  501 => 210,  498 => 209,  486 => 206,  478 => 205,  473 => 204,  468 => 203,  460 => 198,  450 => 190,  441 => 187,  438 => 186,  423 => 182,  413 => 179,  407 => 177,  402 => 176,  394 => 171,  377 => 159,  369 => 156,  361 => 153,  332 => 129,  324 => 126,  316 => 123,  288 => 100,  280 => 97,  272 => 94,  251 => 75,  242 => 68,  233 => 65,  230 => 64,  218 => 61,  210 => 60,  206 => 59,  202 => 58,  194 => 57,  190 => 56,  185 => 55,  180 => 54,  173 => 50,  169 => 49,  165 => 48,  161 => 47,  157 => 46,  153 => 45,  144 => 39,  138 => 35,  136 => 34,  134 => 33,  132 => 32,  125 => 27,  117 => 25,  115 => 24,  111 => 23,  104 => 18,  102 => 17,  98 => 16,  89 => 10,  83 => 9,  79 => 7,  77 => 6,  73 => 5,  66 => 4,  59 => 3,  52 => 2,  48 => 1,  46 => 15,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_index_dashboard.html.twig", "/var/www/themes/infobia/html/mod_index_dashboard.html.twig");
    }
}
