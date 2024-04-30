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
class __TwigTemplate_4347f61ad47cff1bf4e1866f261c285a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
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
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_index_dashboard.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_index_dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_cas_messages", [], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 9
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alert"], "type", [], "any", false, false, false, 9), "html", null, true);
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["alert"], "dismissible", [], "any", false, false, false, 9)) ? ("alert-dismissible") : (""));
            echo "\" role=\"alert\">
        <h3 class=\"mb-1\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alert"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "</h3>
        <p>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alert"], "message", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
        ";
            // line 12
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alert"], "buttons", [], "any", false, false, false, 12)) > 0)) {
                // line 13
                echo "            <div class=\"btn-list\">
            ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["alert"], "buttons", [], "any", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 15
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "link", [], "any", false, false, false, 15), "html", null, true);
                    echo "\" class=\"btn ";
                    ((twig_get_attribute($this->env, $this->source, $context["button"], "type", [], "any", false, false, false, 15)) ? (print (twig_escape_filter($this->env, ("btn-" . twig_get_attribute($this->env, $this->source, $context["button"], "type", [], "any", false, false, false, 15)), "html", null, true))) : (print ("")));
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "text", [], "any", false, false, false, 15), "html", null, true);
                    echo "</a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "            </div>
        ";
            }
            // line 19
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["alert"], "dismissible", [], "any", false, false, false, 19)) {
                // line 20
                echo "            <a class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"close\"></a>
        ";
            }
            // line 22
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_messages", [["type" => "danger"]], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 25
            echo "    <div class=\"alert alert-danger alert-dismissible fade show mb-3\" role=\"alert\">
        <strong>";
            // line 26
            echo twig_escape_filter($this->env, __trans("Danger!"), "html", null, true);
            echo "</strong> ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 26))) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 26), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 26), "html", null, true);
                echo "</a>";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 26), "html", null, true);
                echo " ";
            }
            // line 27
            echo "        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_messages", [["type" => "warning"]], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 31
            echo "    <div class=\"alert alert-warning alert-dismissible fade show mb-3\" role=\"alert\">
        <strong>";
            // line 32
            echo twig_escape_filter($this->env, __trans("Warning"), "html", null, true);
            echo ":</strong> ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 32))) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 32), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 32), "html", null, true);
                echo "</a>";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 32), "html", null, true);
                echo " ";
            }
            // line 33
            echo "        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_messages", [["type" => "info"]], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 37
            echo "    <div class=\"alert alert-primary alert-dismissible fade show mb-3\" role=\"alert\">
        <strong>";
            // line 38
            echo twig_escape_filter($this->env, __trans("Information"), "html", null, true);
            echo ":</strong> ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 38))) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 38), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 38), "html", null, true);
                echo "</a>";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 38), "html", null, true);
                echo " ";
            }
            // line 39
            echo "        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
<div class=\"row row-deck row-cards\">

";
        // line 45
        $context["aaa"] = 0;
        // line 46
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "notification_get_list", [twig_array_merge(["per_page" => 10, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 46)], ($context["request"] ?? null))], "method", false, false, false, 46);
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "list", [], "any", false, false, false, 47));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["event"]) {
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            $context["aaa"] = 1;
            echo "  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
";
        // line 52
        if ((($context["aaa"] ?? null) == 0)) {
            // line 53
            echo "        <div class=\"col-12\">
            <div class=\"card overflow-x-auto\">
            <div class=\"card-header\">
                    <h3 class=\"card-title\">";
            // line 56
            echo twig_escape_filter($this->env, __trans("Notifications"), "html", null, true);
            echo "</h3>
                </div>
                <table class=\"table card-table table-vcenter table-striped text-wrap\">
                    <thead>
                        <tr>
                            <th class=\"w-50\">";
            // line 61
            echo twig_escape_filter($this->env, __trans("Message"), "html", null, true);
            echo "</th>
                            <th>";
            // line 62
            echo twig_escape_filter($this->env, __trans("Date / Time"), "html", null, true);
            echo "</th>
                            <th>";
            // line 63
            echo twig_escape_filter($this->env, __trans("Author"), "html", null, true);
            echo "</th>
                            <th class=\"w-1\"></th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 68
            $context["events"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "notification_get_list", [twig_array_merge(["per_page" => 10, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 68)], ($context["request"] ?? null))], "method", false, false, false, 68);
            // line 69
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "list", [], "any", false, false, false, 69));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["event"]) {
                // line 70
                echo "                        <tr>
                            <td class=\"w-50\">";
                // line 71
                echo twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_string_render", [["_tpl" => twig_get_attribute($this->env, $this->source, $context["event"], "meta_value", [], "any", false, false, false, 71), "_try" => true]], "method", false, false, false, 71);
                echo "</td>
                            <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 72), "Y-m-d / H:i"), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "staff_get", [["id" => twig_get_attribute($this->env, $this->source, $context["event"], "client_id", [], "any", false, false, false, 74)]], "method", false, false, false, 74), "name", [], "any", false, false, false, 74), "html", null, true);
                echo "
                            </td>
                            <td>

                \t        ";
                // line 78
                if ((twig_get_attribute($this->env, $this->source, $context["event"], "client_id", [], "any", false, false, false, 78) == twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "id", [], "any", false, false, false, 78))) {
                    // line 79
                    echo "                                <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
                    echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
                    echo "\" data-api-redirect=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
                    echo "\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/notification/delete", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 79), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                    echo "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#delete\" />
                                    </svg>
                                </a>
\t\t\t\t";
                }
                // line 85
                echo "                            </td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 88
                echo "                        <tr>
                            <td class=\"text-muted\" colspan=\"7\">";
                // line 89
                echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                    </tbody>
                </table>
                ";
            // line 94
            $this->loadTemplate("partial_pagination.html.twig", "mod_index_dashboard.html.twig", 94)->display(twig_array_merge($context, ["list" => ($context["events"] ?? null), "url" => "notification"]));
            // line 95
            echo "
                </div>
            </div>
<div class=\"fix\"></div>
</div>
";
        }
        // line 101
        echo "

<div class=\"row row-deck row-cards\">
    ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [["mod" => "stats"]], "method", false, false, false, 104)) {
            // line 105
            echo "        ";
            $context["stats"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_summary", [], "any", false, false, false, 105);
            // line 106
            echo "        ";
            $context["income"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_summary_income", [], "any", false, false, false, 106);
            // line 107
            echo "        ";
            $context["client_statuses"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_get_statuses", [], "any", false, false, false, 107);
            // line 108
            echo "        ";
            $context["order_statuses"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "order_get_statuses", [], "any", false, false, false, 108);
            // line 109
            echo "        ";
            $context["invoice_statuses"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_get_statuses", [], "any", false, false, false, 109);
            // line 110
            echo "        ";
            $context["support_statuses"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_ticket_get_statuses", [], "any", false, false, false, 110);
            // line 111
            echo "
        <div class=\"col-sm-6 col-lg-3\">
            <a href=\"";
            // line 113
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            echo "\" class=\"card card-sm\">
                <div class=\"card-body\">
                    ";
            // line 115
            if ((twig_get_attribute($this->env, $this->source, ($context["client_statuses"] ?? null), "suspended", [], "any", false, false, false, 115) > 0)) {
                // line 116
                echo "                    <span class=\"position-absolute top-0 translate-middle badge rounded-pill bg-danger text-light\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client_statuses"] ?? null), "suspended", [], "any", false, false, false, 116), "html", null, true);
                echo "</span>
                    ";
            }
            // line 118
            echo "                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-blue text-white avatar\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#contacts\" />
                                </svg>
                            </span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_total", [], "any", false, false, false, 127), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("clients"), "html", null, true);
            echo "</div>
                            <div class=\"text-muted\">";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client_statuses"] ?? null), "suspended", [], "any", false, false, false, 128), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("suspended"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a href=\"";
            // line 135
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            echo "\" class=\"card card-sm\">
                <div class=\"card-body\">
                    ";
            // line 137
            if ((twig_get_attribute($this->env, $this->source, ($context["order_statuses"] ?? null), "suspended", [], "any", false, false, false, 137) > 0)) {
                // line 138
                echo "                    <span class=\"position-absolute top-0 translate-middle badge rounded-pill bg-danger text-light\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order_statuses"] ?? null), "suspended", [], "any", false, false, false, 138), "html", null, true);
                echo "</span>
                    ";
            }
            // line 140
            echo "                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                        <span class=\"bg-green text-white avatar\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#orders\" />
                            </svg>
                        </span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_total", [], "any", false, false, false, 149), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("orders"), "html", null, true);
            echo "</div>
                            <div class=\"text-muted\">";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order_statuses"] ?? null), "suspended", [], "any", false, false, false, 150), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("suspended"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a href=\"";
            // line 157
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"card card-sm\">
                <div class=\"card-body\">
                    ";
            // line 159
            if ((twig_get_attribute($this->env, $this->source, ($context["invoice_statuses"] ?? null), "unpaid", [], "any", false, false, false, 159) > 0)) {
                // line 160
                echo "                    <span class=\"position-absolute top-0 translate-middle badge rounded-pill bg-danger text-light\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice_statuses"] ?? null), "unpaid", [], "any", false, false, false, 160), "html", null, true);
                echo "</span>
                    ";
            }
            // line 162
            echo "                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-danger text-white avatar\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#currency-dollar\" />
                                </svg>
                            </span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_total", [], "any", false, false, false, 171), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("invoices"), "html", null, true);
            echo "</div>
                            <div class=\"text-muted\">";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice_statuses"] ?? null), "unpaid", [], "any", false, false, false, 172), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("unpaid"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class=\"col-sm-6 col-lg-3\">
            <a href=\"";
            // line 181
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            echo "\" class=\"card card-sm\">
                <div class=\"card-body\">
                    ";
            // line 183
            if ((twig_get_attribute($this->env, $this->source, ($context["support_statuses"] ?? null), "open", [], "any", false, false, false, 183) > 0)) {
                // line 184
                echo "                    <span class=\"position-absolute top-0 translate-middle badge rounded-pill bg-danger text-light\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["support_statuses"] ?? null), "open", [], "any", false, false, false, 184), "html", null, true);
                echo "</span>
                    ";
            }
            // line 186
            echo "                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                        <span class=\"bg-warning text-white avatar\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#support\" />
                            </svg>
                        </span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_total", [], "any", false, false, false, 195), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("tickets"), "html", null, true);
            echo "</div>
                            <div class=\"text-muted\">";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["support_statuses"] ?? null), "open", [], "any", false, false, false, 196), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("waiting for staff reply"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class=\"col-12\">
            <div class=\"card overflow-x-auto\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">";
            // line 207
            echo twig_escape_filter($this->env, __trans("Statistics"), "html", null, true);
            echo "</h3>
                </div>
                <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <thead>
                        <tr>
                            <th></th>
                            <th class=\"text-center\">";
            // line 214
            echo twig_escape_filter($this->env, __trans("Today"), "html", null, true);
            echo "</th>
                            <th class=\"text-center\">";
            // line 215
            echo twig_escape_filter($this->env, __trans("Yesterday"), "html", null, true);
            echo "</th>
                            <th class=\"text-center\">";
            // line 216
            echo twig_escape_filter($this->env, __trans("This month so far"), "html", null, true);
            echo "</th>
                            <th class=\"text-center\">";
            // line 217
            echo twig_escape_filter($this->env, __trans("Last month"), "html", null, true);
            echo "</th>
                            <th class=\"text-center\">";
            // line 218
            echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
            echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>";
            // line 223
            echo twig_escape_filter($this->env, __trans("Income"), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 225
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["paid_at" => twig_date_format_filter($this->env, "now", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["income"] ?? null), "today", [], "any", false, false, false, 225)], 225, $context, $this->getSourceContext());
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 228
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["paid_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["income"] ?? null), "yesterday", [], "any", false, false, false, 228)], 228, $context, $this->getSourceContext());
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 231
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"text-danger\">";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["income"] ?? null), "this_month", [], "any", false, false, false, 231)], 231, $context, $this->getSourceContext());
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 234
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"text-danger\">";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["income"] ?? null), "last_month", [], "any", false, false, false, 234)], 234, $context, $this->getSourceContext());
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 237
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"text-danger\">";
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, ($context["income"] ?? null), "total", [], "any", false, false, false, 237)], 237, $context, $this->getSourceContext());
            echo "</a>
                            </td>
                        </tr>
                        <tr>
                            <td>";
            // line 241
            echo twig_escape_filter($this->env, __trans("Clients"), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 243
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client", ["created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_today", [], "any", false, false, false, 243), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 246
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client", ["created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_yesterday", [], "any", false, false, false, 246), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 249
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_this_month", [], "any", false, false, false, 249), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 252
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_last_month", [], "any", false, false, false, 252), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 255
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_total", [], "any", false, false, false, 255), "html", null, true);
            echo "</a>
                            </td>
                        </tr>
                        <tr>
                            <td>";
            // line 259
            echo twig_escape_filter($this->env, __trans("Orders"), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 261
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order", ["created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_today", [], "any", false, false, false, 261), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 264
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order", ["created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_yesterday", [], "any", false, false, false, 264), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 267
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_this_month", [], "any", false, false, false, 267), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 270
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_last_month", [], "any", false, false, false, 270), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 273
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "orders_total", [], "any", false, false, false, 273), "html", null, true);
            echo "</a>
                            </td>
                        </tr>
                        <tr>
                            <td>";
            // line 277
            echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 279
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_today", [], "any", false, false, false, 279), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 282
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_yesterday", [], "any", false, false, false, 282), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 285
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_this_month", [], "any", false, false, false, 285), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 288
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_last_month", [], "any", false, false, false, 288), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 291
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_total", [], "any", false, false, false, 291), "html", null, true);
            echo "</a>
                            </td>
                        </tr>
                        <tr>
                            <td>";
            // line 295
            echo twig_escape_filter($this->env, __trans("Tickets"), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 297
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_today", [], "any", false, false, false, 297), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 300
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")]);
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_yesterday", [], "any", false, false, false, 300), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 303
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_this_month", [], "any", false, false, false, 303), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 306
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_last_month", [], "any", false, false, false, 306), "html", null, true);
            echo "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 309
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            echo "\" class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_total", [], "any", false, false, false, 309), "html", null, true);
            echo "</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    ";
        }
        // line 318
        echo "
    ";
        // line 319
        $context["invoicesUnpaid"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_get_list", [["status" => "unpaid"]], "method", false, false, false, 319);
        // line 320
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoicesUnpaid"] ?? null), "list", [], "any", false, false, false, 320)) > 0)) {
            // line 321
            echo "    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">";
            // line 324
            echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
            echo "</h3>
                <div class=\"card-actions\">
                    <a href=\"";
            // line 326
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice");
            echo "\" class=\"btn-action\">
                        <svg class=\"icon\">
                            <use xlink:href=\"#dots-vertical\" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <tbody>
                        ";
            // line 337
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["invoicesUnpaid"] ?? null), "list", [], "any", false, false, false, 337));
            foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
                // line 338
                echo "                        <tr>
                            <td class=\"w-1\">
                                <a href=\"";
                // line 340
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 340), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "serie_nr", [], "any", false, false, false, 340), "html", null, true);
                echo "</a>
                            </td>
                            <td class=\"w-1\">
                                <a href=\"";
                // line 343
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
                echo "/manage/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice"], "client", [], "any", false, false, false, 343), "id", [], "any", false, false, false, 343), "html", null, true);
                echo "\">
                                    <span class=\"avatar avatar-xs\" style=\"background-image: url(";
                // line 344
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice"], "buyer", [], "any", false, false, false, 344), "email", [], "any", false, false, false, 344)), "html", null, true);
                echo "&size=24\"></span>
                                </a>
                            </td>
                            <td>
                                <a href=\"";
                // line 348
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
                echo "/manage/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice"], "client", [], "any", false, false, false, 348), "id", [], "any", false, false, false, 348), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice"], "buyer", [], "any", false, false, false, 348), "first_name", [], "any", false, false, false, 348), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["invoice"], "buyer", [], "any", false, false, false, 348), "last_name", [], "any", false, false, false, 348), "html", null, true);
                echo "</a>
                            </td>
                            <td class=\"text-center\">";
                // line 350
                echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["invoice"], "total", [], "any", false, false, false, 350), twig_get_attribute($this->env, $this->source, $context["invoice"], "currency", [], "any", false, false, false, 350)], 350, $context, $this->getSourceContext());
                echo "</td>
                            <td class=\"text-center\">";
                // line 351
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "created_at", [], "any", false, false, false, 351)), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 353
                if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 353) == "paid")) {
                    // line 354
                    echo "                                    <span class=\"badge bg-success me-1\"></span>
                                ";
                }
                // line 356
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 356) == "unpaid")) {
                    // line 357
                    echo "                                    <span class=\"badge bg-danger me-1\"></span>
                                ";
                }
                // line 359
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 359) == "refunded")) {
                    // line 360
                    echo "                                    <span class=\"badge bg-warning me-1\"></span>
                                ";
                }
                // line 362
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 362) == "canceled")) {
                    // line 363
                    echo "                                    <span class=\"badge bg-secondary me-1\"></span>
                                ";
                }
                // line 365
                echo "                                ";
                echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 365)], 365, $context, $this->getSourceContext());
                echo "
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 369
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        }
        // line 375
        echo "
    ";
        // line 376
        $context["orders"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "order_get_list", [["per_page" => "5", "status" => "active"]], "method", false, false, false, 376);
        // line 377
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "list", [], "any", false, false, false, 377)) > 0)) {
            // line 378
            echo "        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">";
            // line 381
            echo twig_escape_filter($this->env, __trans("Latest orders"), "html", null, true);
            echo "</h3>
                    <span class=\"ms-2 badge bg-success\">
                        <a href=\"";
            // line 383
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            echo "\" class=\"text-white\">+";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "total", [], "any", false, false, false, 383), "html", null, true);
            echo "</a>
                    </span>
                    <div class=\"card-actions\">
                        <a href=\"";
            // line 386
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/order");
            echo "\" class=\"btn-action\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#dots-vertical\" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class=\"table-responsive\">
                    <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                        <tbody>
                        ";
            // line 397
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "list", [], "any", false, false, false, 397));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 398
                echo "                            <tr title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["order"], "created_at", [], "any", false, false, false, 398)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
                echo "\">
                                <td>
                                    <a href=\"";
                // line 400
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "client_id", [], "any", false, false, false, 400), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "client", [], "any", false, false, false, 400), "first_name", [], "any", false, false, false, 400), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "client", [], "any", false, false, false, 400), "last_name", [], "any", false, false, false, 400), "html", null, true);
                echo "</a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 403
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 403), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 403), 35), "html", null, true);
                echo "</a>
                                </td>
                            </tr>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 407
                echo "                        <tr>
                            <td colspan=\"2\" align=\"center\">";
                // line 408
                echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
                echo "</td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 411
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        ";
            // line 448
            echo "    ";
        }
        // line 449
        echo "
    ";
        // line 450
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [["mod" => "stats"]], "method", false, false, false, 450)) {
            // line 451
            echo "    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5>";
            // line 454
            echo twig_escape_filter($this->env, __trans("Define date interval for graphs"), "html", null, true);
            echo "</h5>
                <form method=\"get\" action=\"\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 456
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"_url\" value=\"";
            // line 457
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 457), "html", null, true);
            echo "\">
                    <div class=\"input-group\">
                        <div class=\"input-icon\">
                            <input class=\"form-control datepicker\"
                                   style=\"width: 16rem\"
                                   id=\"graph_interval\"
                                   value=\"";
            // line 463
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 463)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 463), "Y-m-d"), "html", null, true);
            }
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 463)) {
                echo " to ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 463), "Y-m-d"), "html", null, true);
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
                        <input type=\"submit\" value=\"";
            // line 479
            echo twig_escape_filter($this->env, __trans("Update graphs"), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">";
            // line 489
            echo twig_escape_filter($this->env, __trans("Income"), "html", null, true);
            echo "</h3>
            </div>
            <div id=\"chart-income\" style=\"width: 100%; height: 200px;\"></div>
        </div>
    </div>

    <div class=\"col-sm-6 col-lg-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"subheader\">";
            // line 498
            echo twig_escape_filter($this->env, __trans("Orders"), "html", null, true);
            echo "</div>
            </div>
            <div id=\"chart-orders\" class=\"chart-sm\" style=\"min-height: 40px;\"></div>
        </div>
    </div>

    <div class=\"col-sm-6 col-lg-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"subheader\">";
            // line 507
            echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
            echo "</div>
            </div>
            <div id=\"chart-invoices\" class=\"chart-sm\" style=\"min-height: 40px;\"></div>
        </div>
    </div>

    <div class=\"col-sm-6 col-lg-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"subheader\">";
            // line 516
            echo twig_escape_filter($this->env, __trans("Clients"), "html", null, true);
            echo "</div>
            </div>
            <div id=\"chart-clients\" class=\"chart-sm\" style=\"min-height: 40px;\"></div>
        </div>
    </div>

    <div class=\"col-sm-6 col-lg-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"subheader\">";
            // line 525
            echo twig_escape_filter($this->env, __trans("Tickets"), "html", null, true);
            echo "</div>
            </div>
            <div id=\"chart-tickets\" class=\"chart-sm\" style=\"min-height: 40px;\"></div>
        </div>
    </div>
    ";
        }
        // line 531
        echo "
    ";
        // line 532
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [["mod" => "activity"]], "method", false, false, false, 532)) {
            // line 533
            echo "    <div class=\"col-12 d-block\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" href=\"#tab-index\" role=\"tab\" data-bs-toggle=\"tab\">";
            // line 536
            echo twig_escape_filter($this->env, __trans("Recent clients activity"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-staff\" role=\"tab\" data-bs-toggle=\"tab\">";
            // line 539
            echo twig_escape_filter($this->env, __trans("Recent staff activity"), "html", null, true);
            echo "</a>
            </li>
        </ul>

        <div class=\"card\">
            <div class=\"tab-content\" id=\"tabs\">
                <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
                    <table class=\"table table-vcenter card-table table-striped\">
                        <tbody>
                            ";
            // line 548
            $context["events"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "activity_log_get_list", [["per_page" => 10, "only_clients" => 1]], "method", false, false, false, 548);
            // line 549
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "list", [], "any", false, false, false, 549));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["event"]) {
                // line 550
                echo "                            <tr>
                                <td class=\"w-1\">
                                    <a href=\"";
                // line 552
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 552), "id", [], "any", false, false, false, 552), "html", null, true);
                echo "\">
                                        <span class=\"avatar avatar-xs\" style=\"background-image: url(";
                // line 553
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 553), "email", [], "any", false, false, false, 553)), "html", null, true);
                echo "&size=24\"></span>
                                    </a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 557
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 557), "id", [], "any", false, false, false, 557), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 557), "name", [], "any", false, false, false, 557), 40), "html", null, true);
                echo "</a>
                                </td>
                                <td>";
                // line 559
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 559), 50), "html", null, true);
                echo "</td>
                                <td>";
                // line 560
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 560)), "html", null, true);
                echo "</td>
                                <td>";
                // line 561
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 561)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
                echo "</td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 564
                echo "                            <tr>
                                <td class=\"text-muted\" colspan=\"4\">";
                // line 565
                echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
                echo "</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 568
            echo "                        </tbody>
                    </table>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-staff\" role=\"tabpanel\">
                    <table class=\"table table-vcenter card-table table-striped\">
                        <tbody>
                            ";
            // line 575
            $context["events"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "activity_log_get_list", [["per_page" => 10, "only_staff" => 1]], "method", false, false, false, 575);
            // line 576
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "list", [], "any", false, false, false, 576));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["event"]) {
                // line 577
                echo "                            <tr>
                                <td class=\"w-1\">
                                    <a href=\"";
                // line 579
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 579), "id", [], "any", false, false, false, 579), "html", null, true);
                echo "\">
                                        <span class=\"avatar avatar-xs\" style=\"background-image: url(";
                // line 580
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 580), "email", [], "any", false, false, false, 580)), "html", null, true);
                echo "&size=24\"></span>
                                    </a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 584
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 584), "id", [], "any", false, false, false, 584), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 584), "name", [], "any", false, false, false, 584), "html", null, true);
                echo "</a>
                                </td>
                                <td>";
                // line 586
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 586), 50), "html", null, true);
                echo "</td>
                                <td>";
                // line 587
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 587)), "html", null, true);
                echo "</td>
                                <td>";
                // line 588
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 588)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
                echo "</td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 591
                echo "                            <tr>
                                <td class=\"text-muted\" colspan=\"4\">";
                // line 592
                echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
                echo "</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 595
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 602
        echo "</div>
";
    }

    // line 605
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 606
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [["mod" => "stats"]], "method", false, false, false, 606)) {
            // line 607
            echo "        <script>
            \$(function() {
                setPlotDataData('chart-income', ";
            // line 609
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_income", [["date_from" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 609), "date_to" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 609)]], "method", false, false, false, 609)), "html", null, true);
            echo ", \"";
            echo twig_escape_filter($this->env, __trans("Income"), "html", null, true);
            echo "\" );
                setPlotDataData('chart-orders', ";
            // line 610
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_orders", [["date_from" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 610), "date_to" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 610)]], "method", false, false, false, 610)), "html", null, true);
            echo ", \"";
            echo twig_escape_filter($this->env, __trans("Orders"), "html", null, true);
            echo "\" );
                setPlotDataData('chart-invoices', ";
            // line 611
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_invoices", [["date_from" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 611), "date_to" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 611)]], "method", false, false, false, 611)), "html", null, true);
            echo ",\"";
            echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
            echo "\" );
                setPlotDataData('chart-clients', ";
            // line 612
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_clients", [["date_from" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 612), "date_to" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 612)]], "method", false, false, false, 612)), "html", null, true);
            echo ", \"";
            echo twig_escape_filter($this->env, __trans("Clients"), "html", null, true);
            echo "\" );
                setPlotDataData('chart-tickets', ";
            // line 613
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_tickets", [["date_from" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 613), "date_to" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 613)]], "method", false, false, false, 613)), "html", null, true);
            echo ", \"";
            echo twig_escape_filter($this->env, __trans("Tickets"), "html", null, true);
            echo "\");
            });

            function setPlotDataData(elementId, data, displayName=\"Name Placeholder\") {
                new ApexCharts(document.getElementById(elementId), {
                    chart: {
                        type: 'area',
                        fontFamily: 'inherit',
                        height: 140,
                        parentHeightOffset: 0,
                        toolbar: {
                            show: false,
                        },
                        animations: {
                            enabled: false
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    fill: {
                        opacity: .16,
                        type: 'solid'
                    },
                    stroke: {
                        width: 2,
                        lineCap: \"round\",
                        curve: \"smooth\",
                    },
                    series: [{
                        name: displayName,
                        data: data
                    }],
                    grid: {
                        padding: {
                            top: -20,
                            right: 0,
                            left: -4,
                            bottom: -4
                        },
                        strokeDashArray: 4,
                    },
                    xaxis: {
                        labels: {
                            show: false
                        },
                        type: 'datetime',
                    },
                    yaxis: {
                        labels: {
                            show: false
                        },
                    },
                    labels: {
                        show: false,
                    },
                    colors:  (localStorage.getItem('theme') === 'dark') ? [\"#91bbed\"] : [\"#206bc4\"] ,
                    theme : {
                        mode: (localStorage.getItem('theme') === 'dark') ? 'dark' : 'light',
                        monochrome: {
                            enabled: false,
                        }
                    }
                }).render();
            }
        </script>
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
        return array (  1386 => 613,  1380 => 612,  1374 => 611,  1368 => 610,  1362 => 609,  1358 => 607,  1355 => 606,  1351 => 605,  1346 => 602,  1337 => 595,  1328 => 592,  1325 => 591,  1315 => 588,  1311 => 587,  1307 => 586,  1298 => 584,  1291 => 580,  1285 => 579,  1281 => 577,  1275 => 576,  1273 => 575,  1264 => 568,  1255 => 565,  1252 => 564,  1242 => 561,  1238 => 560,  1234 => 559,  1225 => 557,  1218 => 553,  1212 => 552,  1208 => 550,  1202 => 549,  1200 => 548,  1188 => 539,  1182 => 536,  1177 => 533,  1175 => 532,  1172 => 531,  1163 => 525,  1151 => 516,  1139 => 507,  1127 => 498,  1115 => 489,  1102 => 479,  1077 => 463,  1068 => 457,  1064 => 456,  1059 => 454,  1054 => 451,  1052 => 450,  1049 => 449,  1046 => 448,  1038 => 411,  1029 => 408,  1026 => 407,  1013 => 403,  1001 => 400,  993 => 398,  988 => 397,  974 => 386,  966 => 383,  961 => 381,  956 => 378,  953 => 377,  951 => 376,  948 => 375,  940 => 369,  929 => 365,  925 => 363,  922 => 362,  918 => 360,  915 => 359,  911 => 357,  908 => 356,  904 => 354,  902 => 353,  897 => 351,  893 => 350,  882 => 348,  875 => 344,  869 => 343,  859 => 340,  855 => 338,  851 => 337,  837 => 326,  832 => 324,  827 => 321,  824 => 320,  822 => 319,  819 => 318,  805 => 309,  797 => 306,  789 => 303,  781 => 300,  773 => 297,  768 => 295,  759 => 291,  751 => 288,  743 => 285,  735 => 282,  727 => 279,  722 => 277,  713 => 273,  705 => 270,  697 => 267,  689 => 264,  681 => 261,  676 => 259,  667 => 255,  659 => 252,  651 => 249,  643 => 246,  635 => 243,  630 => 241,  621 => 237,  613 => 234,  605 => 231,  597 => 228,  589 => 225,  584 => 223,  576 => 218,  572 => 217,  568 => 216,  564 => 215,  560 => 214,  550 => 207,  534 => 196,  528 => 195,  517 => 186,  511 => 184,  509 => 183,  504 => 181,  490 => 172,  484 => 171,  473 => 162,  467 => 160,  465 => 159,  460 => 157,  448 => 150,  442 => 149,  431 => 140,  425 => 138,  423 => 137,  418 => 135,  406 => 128,  400 => 127,  389 => 118,  383 => 116,  381 => 115,  376 => 113,  372 => 111,  369 => 110,  366 => 109,  363 => 108,  360 => 107,  357 => 106,  354 => 105,  352 => 104,  347 => 101,  339 => 95,  337 => 94,  333 => 92,  324 => 89,  321 => 88,  314 => 85,  300 => 79,  298 => 78,  291 => 74,  286 => 72,  282 => 71,  279 => 70,  273 => 69,  271 => 68,  263 => 63,  259 => 62,  255 => 61,  247 => 56,  242 => 53,  240 => 52,  237 => 51,  229 => 49,  221 => 47,  219 => 46,  217 => 45,  212 => 42,  204 => 39,  190 => 38,  187 => 37,  182 => 36,  174 => 33,  160 => 32,  157 => 31,  152 => 30,  144 => 27,  130 => 26,  127 => 25,  122 => 24,  115 => 22,  111 => 20,  108 => 19,  104 => 17,  91 => 15,  87 => 14,  84 => 13,  82 => 12,  78 => 11,  74 => 10,  67 => 9,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_index_dashboard.html.twig", "/var/www/themes/admin_default/html/mod_index_dashboard.html.twig");
    }
}
