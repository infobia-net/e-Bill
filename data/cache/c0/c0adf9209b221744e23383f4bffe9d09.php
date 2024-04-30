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
class __TwigTemplate_459c6ebe61d93fbdb103023bb33dad23 extends Template
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
            'page_subheader' => [$this, 'block_page_subheader'],
            'body_class' => [$this, 'block_body_class'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
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
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_order_manage.html.twig", 2)->unwrap();
        // line 6
        $context["addons"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_addons", [["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 6)]], "method", false, false, false, 6);
        // line 12
        $context["service_partial"] = (("mod_service" . twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "service_type", [], "any", false, false, false, 12)) . "_manage.html.twig");
        // line 13
        $context["upgradables"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_upgradables", [["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 13)]], "method", false, false, false, 13);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 4
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Service details"), "html", null, true);
    }

    // line 5
    public function block_page_subheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("All information about your service"), "html", null, true);
    }

    // line 7
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "order-manage";
    }

    // line 8
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<li class=\"breadcrumb-item\"><a href=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("service");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Services"), "html", null, true);
        echo "</a></li>
<li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</a></li>
";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "<div class=\"row row-deck row-cards\">
   <div class=\"col-md-12\">
      <div class=\"card\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 19
        echo twig_escape_filter($this->env, __trans("Service details"), "html", null, true);
        echo "</h3>
            <div class=\"card-actions\">
               ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "period", [], "any", false, false, false, 21) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 21) != "failed_renew"))) {
            // line 22
            echo "               <button class=\"btn btn-primary\" type=\"button\" id=\"renewal-button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-renew\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                     <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                     <path d=\"M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0\"></path>
                     <path d=\"M12 7v5l3 3\"></path>
                  </svg>
                  ";
            // line 28
            echo twig_escape_filter($this->env, __trans("Renew now"), "html", null, true);
            echo "
               </button>
               ";
        }
        // line 31
        echo "               ";
        if (($context["upgradables"] ?? null)) {
            // line 32
            echo "               <a href=\"#submit-upgrade-ticket\" class=\"btn btn-success\" type=\"button\" id=\"request-upgrade\" data-bs-toggle=\"modal\" data-bs-target=\"#submit-upgrade-ticket\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                     <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                     <path d=\"M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0\"></path>
                     <path d=\"M9 12l6 0\"></path>
                     <path d=\"M12 9l0 6\"></path>
                  </svg>
                  ";
            // line 39
            echo twig_escape_filter($this->env, __trans("Request Upgrade"), "html", null, true);
            echo "
               </a>
               ";
        }
        // line 42
        echo "               <a href=\"#submit-ticket\" class=\"btn btn-info\" type=\"button\" id=\"open-ticket\" data-bs-toggle=\"modal\" data-bs-target=\"#submit-ticket\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                     <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                     <path d=\"M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0\"></path>
                     <path d=\"M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0\"></path>
                     <path d=\"M15 15l3.35 3.35\"></path>
                     <path d=\"M9 15l-3.35 3.35\"></path>
                     <path d=\"M5.65 5.65l3.35 3.35\"></path>
                     <path d=\"M18.35 5.65l-3.35 3.35\"></path>
                  </svg>
                  ";
        // line 52
        echo twig_escape_filter($this->env, __trans("Open ticket"), "html", null, true);
        echo "
               </a>
               ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 54) == "active")) {
            // line 55
            echo "               <a href=\"#submit-cancellation-ticket\" class=\"btn btn-danger\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#submit-cancellation-ticket\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                     <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                     <path d=\"M4 7l16 0\"></path>
                     <path d=\"M10 11l0 6\"></path>
                     <path d=\"M14 11l0 6\"></path>
                     <path d=\"M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12\"></path>
                     <path d=\"M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3\"></path>
                  </svg>
                  ";
            // line 64
            echo twig_escape_filter($this->env, __trans("Request Cancellation"), "html", null, true);
            echo "
               </a>
               ";
        }
        // line 67
        echo "               <a class=\"btn\" href=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order/service");
        echo "\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                     <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                     <path d=\"M9 14l-4 -4l4 -4\"></path>
                     <path d=\"M5 10h11a4 4 0 1 1 0 8h-1\"></path>
                  </svg>
                  ";
        // line 73
        echo twig_escape_filter($this->env, __trans("Back to services"), "html", null, true);
        echo "
               </a>
            </div>
         </div>
         <div class=\"table-responsive\">
            <table class=\"table card-table table-vcenter text-nowrap table-bordered table-striped\">
               <tbody>
                  <tr>
                     <td><label>";
        // line 81
        echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
        echo "</label></td>
                     <td>#";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
                  </tr>
                  <tr>
                     <td><label>";
        // line 85
        echo twig_escape_filter($this->env, __trans("Product name"), "html", null, true);
        echo "</label></td>
                     <td><strong>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 86), "html", null, true);
        echo "</strong></td>
                  </tr>
                  <tr>
                     <td><label>";
        // line 89
        echo twig_escape_filter($this->env, __trans("Payment amount"), "html", null, true);
        echo "</label></td>
                     <td>";
        // line 90
        echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 90), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 90));
        echo "</td>
                  </tr>
                  ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "period", [], "any", false, false, false, 92)) {
            // line 93
            echo "                  <tr>
                     <td><label>";
            // line 94
            echo twig_escape_filter($this->env, __trans("Billing cycle"), "html", null, true);
            echo "</label></td>
                     <td>";
            // line 95
            echo $this->extensions['Box_TwigExtensions']->twig_period_title($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "period", [], "any", false, false, false, 95));
            echo "</td>
                  </tr>
                  ";
        }
        // line 98
        echo "                  <tr>
                     <td><label>";
        // line 99
        echo twig_escape_filter($this->env, __trans("Order status"), "html", null, true);
        echo "</label></td>
                     <td>
                        <span class=\"status status-";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 101) == "active")) {
            echo "green";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 101) == "pending_setup")) {
            echo "orange";
        }
        echo "\">";
        echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 101)], 101, $context, $this->getSourceContext());
        echo "</span>
                     </td>
                  </tr>
                  <tr>
                     <td><label>";
        // line 105
        echo twig_escape_filter($this->env, __trans("Order created"), "html", null, true);
        echo "</label></td>
                     <td>";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "created_at", [], "any", false, false, false, 106)), "html", null, true);
        echo "</td>
                  </tr>
                  <tr>
                     <td><label>";
        // line 109
        echo twig_escape_filter($this->env, __trans("Activated at"), "html", null, true);
        echo "</label></td>
                     <td>";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "activated_at", [], "any", false, false, false, 110)) {
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "activated_at", [], "any", false, false, false, 110)), "html", null, true);
        } else {
            echo "-";
        }
        echo "</td>
                  </tr>
                  ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "period", [], "any", false, false, false, 112)) {
            // line 113
            echo "                  <tr>
                     <td><label>";
            // line 114
            echo twig_escape_filter($this->env, __trans("Renewal date"), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 114)) {
                echo " in ";
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_daysleft_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 114)), "html", null, true);
                echo " day(s) ";
            }
            echo "</label></td>
                     <td>";
            // line 115
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 115)) {
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 115)), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                  </tr>
                  ";
        }
        // line 118
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 118)) {
            // line 119
            echo "                  <tr>
                     <td><label>";
            // line 120
            echo twig_escape_filter($this->env, __trans("Order notes"), "html", null, true);
            echo "</label></td>
                     <td>";
            // line 121
            echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 121));
            echo "</td>
                  </tr>
                  ";
        }
        // line 124
        echo "                  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "active_tickets", [], "any", false, false, false, 124) > 0)) {
            // line 125
            echo "                  <tr>
                     <td><label>";
            // line 126
            echo twig_escape_filter($this->env, __trans("Active support tickets"), "html", null, true);
            echo "</label></td>
                     <td>
                        <div class=\"num\"><a href=\"";
            // line 128
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support");
            echo "\" class=\"redNum\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "active_tickets", [], "any", false, false, false, 128), "html", null, true);
            echo "</a></div>
                        ";
            // line 132
            echo "                        ";
            // line 135
            echo "                     </td>
                  </tr>
                  ";
        }
        // line 138
        echo "               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
";
        // line 144
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "group_master", [], "any", false, false, false, 144) == 1)) {
            // line 145
            if ((twig_length_filter($this->env, ($context["addons"] ?? null)) > 0)) {
                // line 146
                echo "<div class=\"row row-deck row-cards mt-1\">
   <div class=\"col-md-12\">
      <div class=\"card\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">";
                // line 150
                echo twig_escape_filter($this->env, __trans("Addons"), "html", null, true);
                echo " <span class=\"card-subtitle\">";
                echo twig_escape_filter($this->env, __trans("Addons you have ordered with this service"), "html", null, true);
                echo "</span></h3>
         </div>
         <div class=\"card-body\">
            <div class=\"table-responsive\">
               <table class=\"table table-striped table-bordered table-condensed\">
                  <thead>
                     <tr>
                        <th>";
                // line 157
                echo twig_escape_filter($this->env, __trans("Product/Service"), "html", null, true);
                echo "</th>
                        <th>";
                // line 158
                echo twig_escape_filter($this->env, __trans("Price"), "html", null, true);
                echo "</th>
                        <th>";
                // line 159
                echo twig_escape_filter($this->env, __trans("Billing Cycle"), "html", null, true);
                echo "</th>
                        <th>";
                // line 160
                echo twig_escape_filter($this->env, __trans("Next due date"), "html", null, true);
                echo "</th>
                        <th>";
                // line 161
                echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
                echo "</th>
                        <th>&nbsp;</th>
                     </tr>
                  </thead>
                  <tbody>
                     ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["addons"] ?? null));
                foreach ($context['_seq'] as $context["i"] => $context["addon"]) {
                    // line 167
                    echo "                     <tr class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(["odd", "even"], $context["i"]), "html", null, true);
                    echo "\">
                        <td>";
                    // line 168
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "title", [], "any", false, false, false, 168), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 169
                    echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "total", [], "any", false, false, false, 169), twig_get_attribute($this->env, $this->source, $context["addon"], "currency", [], "any", false, false, false, 169));
                    echo "</td>
                        <td>";
                    // line 170
                    echo $this->extensions['Box_TwigExtensions']->twig_period_title($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "period", [], "any", false, false, false, 170));
                    echo "</td>
                        <td>";
                    // line 171
                    if (twig_get_attribute($this->env, $this->source, $context["addon"], "expires_at", [], "any", false, false, false, 171)) {
                        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "expires_at", [], "any", false, false, false, 171)), "html", null, true);
                    } else {
                        echo "-";
                    }
                    echo "</td>
                        <td>
                           <span class=\"status ";
                    // line 173
                    if ((twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 173) == "active")) {
                        echo "status-success";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 173) == "pending_setup")) {
                        echo "status-warning";
                    }
                    echo "\">";
                    echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 173)], 173, $context, $this->getSourceContext());
                    echo "</span>
                        </td>
                        <td class=\"actions\">
                           <a class=\"btn btn-secondary btn-icon\" href=\"";
                    // line 176
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order/service/manage");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 176), "html", null, true);
                    echo "\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-settings\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                 <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                 <path d=\"M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z\"></path>
                                 <path d=\"M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0\"></path>
                              </svg>
                           </a>
                        </td>
                     </tr>
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['addon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
";
            }
        }
        // line 195
        echo "<div class=\"modal modal-blur fade\" id=\"submit-ticket\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
   <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h5 class=\"modal-title\">";
        // line 199
        echo twig_escape_filter($this->env, __trans("Submit new support ticket"), "html", null, true);
        echo "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
         </div>
         <div class=\"modal-body\">
            <form action=\"\" method=\"post\" class=\"open-ticket\" class=\"form\" style=\"background: none\">
               <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 204
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 206
        echo twig_escape_filter($this->env, __trans("Help desk"), "html", null, true);
        echo ":</label>
                  ";
        // line 207
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["support_helpdesk_id", twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_helpdesk_get_pairs", [], "any", false, false, false, 207), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "support_helpdesk_id", [], "any", false, false, false, 207), 1], 207, $context, $this->getSourceContext());
        echo "
               </div>
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 210
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo ":</label>
                  <input type=\"text\" class=\"form-control\" name=\"subject\" required=\"required\" value=\"";
        // line 211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "subject", [], "any", false, false, false, 211));
        echo "\" placeholder=\"Your subject\">  
               </div>
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 214
        echo twig_escape_filter($this->env, __trans("Message"), "html", null, true);
        echo ":</label>
                  <textarea class=\"form-control\" name=\"content\" cols=\"10\" rows=\"10\" required=\"required\">";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "content", [], "any", false, false, false, 215));
        echo "</textarea>
                  <input type=\"hidden\" name=\"rel_type\" value=\"order\">
                  <input type=\"hidden\" name=\"rel_id\" value=\"";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 217), "html", null, true);
        echo "\">
               </div>
         </div>
         <div class=\"modal-footer\">
         <a href=\"#\" class=\"btn btn-link link-secondary\" data-bs-dismiss=\"modal\">
         Cancel
         </a>
         <button class=\"btn btn-info ms-auto\" type=\"submit\" value=\"";
        // line 224
        echo twig_escape_filter($this->env, __trans("Submit"), "html", null, true);
        echo "\" data-bs-dismiss=\"modal\">
         <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
         <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
         <path d=\"M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0\"></path>
         <path d=\"M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0\"></path>
         <path d=\"M15 15l3.35 3.35\"></path>
         <path d=\"M9 15l-3.35 3.35\"></path>
         <path d=\"M5.65 5.65l3.35 3.35\"></path>
         <path d=\"M18.35 5.65l-3.35 3.35\"></path>
         </svg> ";
        // line 233
        echo twig_escape_filter($this->env, __trans("Open ticket"), "html", null, true);
        echo "
         </button></form>
         </div>
      </div>
   </div>
</div>
<div class=\"modal modal-blur fade\" id=\"submit-cancellation-ticket\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
   <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h5 class=\"modal-title\">";
        // line 243
        echo twig_escape_filter($this->env, __trans("Submit cancellation request"), "html", null, true);
        echo "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
         </div>
         <div class=\"modal-body\">
            <form action=\"\" method=\"post\" class=\"open-ticket\" class=\"form\" style=\"background: none\">
               <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 248
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 250
        echo twig_escape_filter($this->env, __trans("Help desk"), "html", null, true);
        echo ":</label>
                  ";
        // line 251
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["support_helpdesk_id", twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_helpdesk_get_pairs", [], "any", false, false, false, 251), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "support_helpdesk_id", [], "any", false, false, false, 251), 1], 251, $context, $this->getSourceContext());
        echo "
               </div>
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 254
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo ":</label>
                  <input type=\"text\" class=\"form-control\" name=\"subject\" required=\"required\" value=\"";
        // line 255
        echo twig_escape_filter($this->env, __trans("I would like to cancel"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 255), "html", null, true);
        echo "\">  
               </div>
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 258
        echo twig_escape_filter($this->env, __trans("Reason"), "html", null, true);
        echo ":</label>
                  <textarea class=\"form-control\" name=\"content\" cols=\"10\" rows=\"10\" required=\"required\">";
        // line 259
        echo twig_escape_filter($this->env, __trans("I would like to cancel"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 259), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "content", [], "any", false, false, false, 259));
        echo "</textarea>
                  <input type=\"hidden\" name=\"rel_type\" value=\"order\">
                  <input type=\"hidden\" name=\"rel_id\" value=\"";
        // line 261
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 261), "html", null, true);
        echo "\">
                  <input type=\"hidden\" name=\"rel_task\" value=\"cancel\">
               </div>
         </div>
         <div class=\"modal-footer\">
         <a href=\"#\" class=\"btn btn-link link-secondary\" data-bs-dismiss=\"modal\">
         Cancel
         </a>
         <button class=\"btn btn-danger ms-auto\" type=\"submit\" value=\"";
        // line 269
        echo twig_escape_filter($this->env, __trans("Submit"), "html", null, true);
        echo "\" data-bs-dismiss=\"modal\">
         <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
         <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
         <path d=\"M4 7l16 0\"></path>
         <path d=\"M10 11l0 6\"></path>
         <path d=\"M14 11l0 6\"></path>
         <path d=\"M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12\"></path>
         <path d=\"M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3\"></path>
         </svg>
         ";
        // line 278
        echo twig_escape_filter($this->env, __trans("Request"), "html", null, true);
        echo "
         </button></form>
         </div>
      </div>
   </div>
</div>
<div class=\"modal modal-blur fade\" id=\"submit-upgrade-ticket\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
   <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h5 class=\"modal-title\">";
        // line 288
        echo twig_escape_filter($this->env, __trans("Submit upgrade request"), "html", null, true);
        echo "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
         </div>
         <div class=\"modal-body\">
            <form action=\"\" method=\"post\" class=\"request-upgrade\" class=\"form\" style=\"background: none\" data-api-url=\"client/support/ticket_create\" data-api-msg=\"Upgrade request received\">
               <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 293
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 295
        echo twig_escape_filter($this->env, __trans("Help desk"), "html", null, true);
        echo ":</label>
                  ";
        // line 296
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["support_helpdesk_id", twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_helpdesk_get_pairs", [], "any", false, false, false, 296), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "support_helpdesk_id", [], "any", false, false, false, 296), 1], 296, $context, $this->getSourceContext());
        echo "
               </div>
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 299
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo ":</label>
                  <input type=\"text\" class=\"form-control\" name=\"subject\" required=\"required\" value=\"";
        // line 300
        echo twig_escape_filter($this->env, __trans("I would like to upgrade"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 300), "html", null, true);
        echo "\">  
               </div>
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 303
        echo twig_escape_filter($this->env, __trans("Upgrade to"), "html", null, true);
        echo ":</label>
                  ";
        // line 304
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["rel_new_value", ($context["upgradables"] ?? null), "", 1], 304, $context, $this->getSourceContext());
        echo "
               </div>
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 307
        echo twig_escape_filter($this->env, __trans("Notes"), "html", null, true);
        echo ":</label>
                  <textarea class=\"form-control\" name=\"content\" cols=\"10\" rows=\"10\" required=\"required\">";
        // line 308
        echo twig_escape_filter($this->env, __trans("I would like to upgrade"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 308), "html", null, true);
        echo "</textarea>
                  <input type=\"hidden\" name=\"rel_type\" value=\"order\">
                  <input type=\"hidden\" name=\"rel_id\" value=\"";
        // line 310
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 310), "html", null, true);
        echo "\">
                  <input type=\"hidden\" name=\"rel_task\" value=\"upgrade\">
               </div>
         </div>
         <div class=\"modal-footer\">
         <a href=\"#\" class=\"btn btn-link link-secondary\" data-bs-dismiss=\"modal\">
         Cancel
         </a>
         <button class=\"btn btn-success ms-auto\" type=\"submit\" value=\"";
        // line 318
        echo twig_escape_filter($this->env, __trans("Submit"), "html", null, true);
        echo "\" data-bs-dismiss=\"modal\">
         <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
         <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
         <path d=\"M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0\"></path>
         <path d=\"M9 12l6 0\"></path>
         <path d=\"M12 9l0 6\"></path>
         </svg>
         ";
        // line 325
        echo twig_escape_filter($this->env, __trans("Request"), "html", null, true);
        echo "
         </button></form>
         </div>
      </div>
   </div>
</div>
<div class=\"modal modal-blur fade\" id=\"modal-renew\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
   <div class=\"modal-dialog modal-sm modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
         <div class=\"modal-status bg-primary\"></div>
         <div class=\"modal-body text-center py-4\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon mb-2 text-primary icon-lg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
               <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
               <path d=\"M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0\"></path>
               <path d=\"M12 7v5l3 3\"></path>
            </svg>
            <h3>Are you sure?</h3>
            <div class=\"text-muted\">This will generate new invoice. Are you sure you want to continue?</div>
         </div>
         <div class=\"modal-footer\">
            <div class=\"w-100\">
               <div class=\"row\">
                  <div class=\"col\"><a href=\"#\" class=\"btn w-100\" data-bs-dismiss=\"modal\">
                     No
                     </a>
                  </div>
                  <div class=\"col\"><a href=\"#\" class=\"btn btn-primary w-100\" id=\"create-invoice\">
                     Yes
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
";
        // line 362
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_template_exists", [["file" => ($context["service_partial"] ?? null)]], "method", false, false, false, 362)) {
            // line 363
            $context["service"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_service", [["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 363)]], "method", false, false, false, 363);
            // line 364
            $this->loadTemplate(($context["service_partial"] ?? null), "mod_order_manage.html.twig", 364)->display(twig_array_merge($context, ["order" => ($context["order"] ?? null), "service" => ($context["service"] ?? null)]));
        } else {
        }
    }

    // line 369
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 371
        echo "<script>
   \$(function() {
   \$('#create-invoice').on('click', function(e) {
       e.preventDefault();
   
       bb.post(
           'client/invoice/renewal_invoice',
           { order_id: ";
        // line 378
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 378), "js", null, true);
        echo ", CSRFToken: \"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "js", null, true);
        echo "\" },
           function(result) {
               bb.redirect(\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice"), "js", null, true);
        echo "\" + '/' + result);
           }
       );
   
       // Hide the modal after the operation
       \$('#modal-renew').modal('hide');
   });
   
   
   
   
       \$('.open-ticket').on('submit', function() {
           \$('.wait').show();
   
           bb.post(
               'client/support/ticket_create',
               \$(this).serialize(),
               function(result) {
                   \$('#submit-ticket').modal('hide')
                   bb.msg('Ticket was submitted. If you want to track conversation please go to support section');
                   \$('.wait').hide();
               }
           );
   
           return false;
       });
   
       \$('.request-cancellation').on('submit', function() {
           \$('.wait').show();
           bb.post(
               'client/support/ticket_create',
               \$(this).serialize(),
               function(result) {
                   \$('#submit-cancellation-ticket').modal('hide')
                   bb.msg('Service cancellation request received');
                   \$('.wait').hide();
               }
           );
   
           return false;
       });
   
       \$('.request-upgrade').on('submit', function() {
           \$('.wait').show();
           bb.post(
               'client/support/ticket_create',
               \$(this).serialize(),
               function(result) {
                   \$('#submit-upgrade-ticket').modal('hide')
                   bb.msg('Service upgrade request received');
                   \$('.wait').hide();
               }
           );
   
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
        return array (  803 => 380,  796 => 378,  787 => 371,  783 => 369,  777 => 364,  775 => 363,  773 => 362,  733 => 325,  723 => 318,  712 => 310,  705 => 308,  701 => 307,  695 => 304,  691 => 303,  683 => 300,  679 => 299,  673 => 296,  669 => 295,  664 => 293,  656 => 288,  643 => 278,  631 => 269,  620 => 261,  611 => 259,  607 => 258,  599 => 255,  595 => 254,  589 => 251,  585 => 250,  580 => 248,  572 => 243,  559 => 233,  547 => 224,  537 => 217,  532 => 215,  528 => 214,  522 => 211,  518 => 210,  512 => 207,  508 => 206,  503 => 204,  495 => 199,  489 => 195,  478 => 186,  460 => 176,  448 => 173,  439 => 171,  435 => 170,  431 => 169,  427 => 168,  422 => 167,  418 => 166,  410 => 161,  406 => 160,  402 => 159,  398 => 158,  394 => 157,  382 => 150,  376 => 146,  374 => 145,  372 => 144,  364 => 138,  359 => 135,  357 => 132,  351 => 128,  346 => 126,  343 => 125,  340 => 124,  334 => 121,  330 => 120,  327 => 119,  324 => 118,  314 => 115,  304 => 114,  301 => 113,  299 => 112,  290 => 110,  286 => 109,  280 => 106,  276 => 105,  263 => 101,  258 => 99,  255 => 98,  249 => 95,  245 => 94,  242 => 93,  240 => 92,  235 => 90,  231 => 89,  225 => 86,  221 => 85,  215 => 82,  211 => 81,  200 => 73,  190 => 67,  184 => 64,  173 => 55,  171 => 54,  166 => 52,  154 => 42,  148 => 39,  139 => 32,  136 => 31,  130 => 28,  122 => 22,  120 => 21,  115 => 19,  109 => 15,  105 => 14,  99 => 10,  92 => 9,  88 => 8,  81 => 7,  74 => 5,  67 => 4,  60 => 3,  56 => 1,  54 => 13,  52 => 12,  50 => 6,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_order_manage.html.twig", "/var/www/themes/infobia/html/mod_order_manage.html.twig");
    }
}
