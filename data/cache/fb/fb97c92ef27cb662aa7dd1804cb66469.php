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

/* mod_support_ticket.html.twig */
class __TwigTemplate_65014ac5938583a1c13dfc96850b68cf extends Template
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
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_support_ticket.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_support_ticket.html.twig", 3)->unwrap();
        // line 26
        $context["active_menu"] = "support";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "subject", [], "any", false, false, false, 5), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "messages", [], "any", false, false, false, 5)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, __trans("message(s)"), "html", null, true);
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
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 20
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Tickets"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">#";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 22), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "subject", [], "any", false, false, false, 22), "html", null, true);
        echo "</li>
    </ul>
";
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "<div class=\"card mb-3\">
    <div class=\"card-body\">
        <h3>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "subject", [], "any", false, false, false, 31), "html", null, true);
        echo "</h3>
    </div>

    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-index\" data-bs-toggle=\"tab\">";
        // line 36
        echo twig_escape_filter($this->env, __trans("Ticket"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-manage\" data-bs-toggle=\"tab\">";
        // line 39
        echo twig_escape_filter($this->env, __trans("Manage"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-notes\" data-bs-toggle=\"tab\">";
        // line 42
        echo twig_escape_filter($this->env, __trans("Notes"), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "notes", [], "any", false, false, false, 42)) > 0)) {
            echo "(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "notes", [], "any", false, false, false, 42)), "html", null, true);
            echo ")";
        }
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-support\" data-bs-toggle=\"tab\">";
        // line 45
        echo twig_escape_filter($this->env, __trans("Client Tickets"), "html", null, true);
        echo "</a>
        </li>
    </ul>

    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <tbody>
                    <tr>
                        <td class=\"w-25\">";
        // line 54
        echo twig_escape_filter($this->env, __trans("Ticket ID"), "html", null, true);
        echo "</td>
                        <td>#";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>";
        // line 58
        echo twig_escape_filter($this->env, __trans("Client"), "html", null, true);
        echo "</td>
                        <td><a href=\"";
        // line 59
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "client", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "client", [], "any", false, false, false, 59), "first_name", [], "any", false, false, false, 59), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "client", [], "any", false, false, false, 59), "last_name", [], "any", false, false, false, 59), "html", null, true);
        echo "</a> (#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "client", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), "html", null, true);
        echo ")</td>
                    </tr>
                    <tr>
                        <td>";
        // line 62
        echo twig_escape_filter($this->env, __trans("Helpdesk"), "html", null, true);
        echo "</td>
                        <td>";
        // line 63
        echo twig_escape_filter($this->env, __trans((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_helpdesk_get_pairs", [], "any", false, false, false, 63)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "support_helpdesk_id", [], "any", false, false, false, 63)] ?? null) : null)), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>";
        // line 66
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</td>
                            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_ticket_get_statuses", [["titles" => 1]], "method", false, false, false, 67));
        foreach ($context['_seq'] as $context["tcode"] => $context["tstatus"]) {
            // line 68
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 68) == $context["tcode"])) {
                // line 69
                echo "                                <td>";
                echo twig_escape_filter($this->env, __trans($context["tstatus"]), "html", null, true);
                echo "</td>
                                ";
            }
            // line 71
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tcode'], $context['tstatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                    </tr>
                    <tr>
                        <td>";
        // line 74
        echo twig_escape_filter($this->env, __trans("Time Opened"), "html", null, true);
        echo "</td>
                        <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "created_at", [], "any", false, false, false, 75)), "html", null, true);
        echo "</td>
                    </tr>

                ";
        // line 78
        $context["task"] = twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "rel", [], "any", false, false, false, 78);
        // line 79
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "task", [], "any", false, false, false, 79)) {
            // line 80
            echo "                    <tr>
                        <td><label>";
            // line 81
            echo twig_escape_filter($this->env, __trans("Task"), "html", null, true);
            echo "</label></td>
                        <td>";
            // line 82
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "task", [], "any", false, false, false, 82)], 82, $context, $this->getSourceContext());
            echo "</td>
                    </tr>
                    ";
        }
        // line 85
        echo "
                    ";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "type", [], "any", false, false, false, 86) == "order")) {
            // line 87
            echo "                    <tr>
                        <td><label>";
            // line 88
            echo twig_escape_filter($this->env, __trans("Related To"), "html", null, true);
            echo "</label></td>
                        <td><a href=\"";
            // line 89
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "id", [], "any", false, false, false, 89), "html", null, true);
            echo "\">Order #";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "id", [], "any", false, false, false, 89), "html", null, true);
            echo "</a></td>
                    </tr>
                    ";
        }
        // line 92
        echo "
                    ";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "task", [], "any", false, false, false, 93) == "upgrade")) {
            // line 94
            echo "                    <tr>
                        <td><label>";
            // line 95
            echo twig_escape_filter($this->env, __trans("Upgrade To"), "html", null, true);
            echo "</label></td>
                        <td><a href=\"";
            // line 96
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "new_value", [], "any", false, false, false, 96), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_get_pairs", [], "any", false, false, false, 96)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "new_value", [], "any", false, false, false, 96)] ?? null) : null), "html", null, true);
            echo "</a></td>
                    </tr>
                    ";
        }
        // line 99
        echo "                </tbody>
            </table>

            <div class=\"card-footer text-center\">
                ";
        // line 103
        if ((twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 103) != "closed")) {
            // line 104
            echo "                <a class=\"btn btn-primary api-link\"
                    href=\"";
            // line 105
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/ticket_close", ["id" => twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 105), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                    data-api-confirm=\"";
            // line 106
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                    data-api-redirect=\"";
            // line 107
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["status" => "open"]);
            echo "\">
                    <svg class=\"icon icon-tabler\" width=\"24\" height=\"24\">
                        <use xlink:href=\"#close\" />
                    </svg>
                    <span>";
            // line 111
            echo twig_escape_filter($this->env, __trans("Close"), "html", null, true);
            echo "</span>
                </a>
                ";
        }
        // line 114
        echo "                <a class=\"btn btn-primary api-link\"
                    href=\"";
        // line 115
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/ticket_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 115), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\"
                    data-api-confirm=\"";
        // line 116
        echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
        echo "\"
                    data-api-redirect=\"";
        // line 117
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
        echo "\">
                    <svg class=\"icon icon-tabler\" width=\"24\" height=\"24\">
                        <use xlink:href=\"#delete\" />
                    </svg>
                    <span>";
        // line 121
        echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
        echo "</span>
                </a>

                ";
        // line 124
        if ((twig_get_attribute($this->env, $this->source, ($context["task"] ?? null), "status", [], "any", false, false, false, 124) == "pending")) {
            // line 125
            echo "                <a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/task_complete", ["id" => twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 125), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" class=\"btn btn-primary api-link\" data-api-reload=\"1\">
                    <img src=\"images/icons/middlenav/check.png\" alt=\"\" data-api-reload=\"1\">
                    <span>";
            // line 127
            echo twig_escape_filter($this->env, __trans("Set Task Complete"), "html", null, true);
            echo "</span>
                </a>
                ";
        }
        // line 130
        echo "            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-manage\" role=\"tabpanel\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"";
        // line 135
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/ticket_update");
        echo "\" class=\"api-form\" data-api-reload=\"1\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 138
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"subject\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "subject", [], "any", false, false, false, 140), "html", null, true);
        echo "\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 144
        echo twig_escape_filter($this->env, __trans("Helpdesk"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            ";
        // line 146
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["support_helpdesk_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_helpdesk_get_pairs", [], "any", false, false, false, 146), twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "support_helpdesk_id", [], "any", false, false, false, 146), 1], 146, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 150
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            ";
        // line 152
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["status", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_ticket_get_statuses", [["titles" => 1]], "method", false, false, false, 152), twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 152), 1], 152, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 156
        echo twig_escape_filter($this->env, __trans("Priority"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"priority\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "priority", [], "any", false, false, false, 158), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 162), "html", null, true);
        echo "\">
                    <input type=\"submit\" value=\"";
        // line 163
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-notes\" role=\"tabpanel\">
            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
            ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "notes", [], "any", false, false, false, 170));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 171
            echo "                <tr>
                    <td class=\"w-1\">
                        <a href=\"";
            // line 173
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff");
            echo "/manage/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "admin_id", [], "any", false, false, false, 173), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["note"], "author", [], "any", false, false, false, 173), "name", [], "any", false, false, false, 173), "html", null, true);
            echo "</a>
                    </td>
                    <td>";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "note", [], "any", false, false, false, 175), "html", null, true);
            echo "</td>
                    <td class=\"w-1\">
                        <a class=\"btn btn-icon api-link\"
                            href=\"";
            // line 178
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/note_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 178), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                            data-api-confirm=\"";
            // line 179
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
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "            </table>
            <hr>

            <div class=\"card-body\">
                <form method=\"post\" action=\"";
        // line 192
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/note_create");
        echo "\" class=\"api-form\" data-api-reload=\"1\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 193
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\" for=\"textareaNote\">";
        // line 195
        echo twig_escape_filter($this->env, __trans("Note"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <textarea class=\"form-control\" id=\"textareaNote\" name=\"note\" rows=\"2\" required></textarea>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"ticket_id\" value=\"";
        // line 201
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 201), "html", null, true);
        echo "\">
                    <button class=\"btn btn-primary w-100\" type=\"submit\">
                        <svg class=\"icon\">
                            <use xlink:href=\"#plus\" />
                        </svg>
                        ";
        // line 206
        echo twig_escape_filter($this->env, __trans("Add note"), "html", null, true);
        echo "
                    </button>
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-support\" role=\"tabpanel\">
            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <thead>
                    <tr>
                        <th>";
        // line 216
        echo twig_escape_filter($this->env, __trans("ID"), "html", null, true);
        echo "</th>
                        <th>";
        // line 217
        echo twig_escape_filter($this->env, __trans("Helpdesk"), "html", null, true);
        echo "</th>
                        <th>";
        // line 218
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo "</th>
                        <th>";
        // line 219
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                        <th class=\"w-1\"></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 224
        $context["tickets"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_ticket_get_list", [["per_page" => "20", "client_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "client", [], "any", false, false, false, 224), "id", [], "any", false, false, false, 224)]], "method", false, false, false, 224);
        // line 225
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "list", [], "any", false, false, false, 225));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 226
            echo "                    <tr>
                        <td>";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 227), "html", null, true);
            echo "</td>
                        <td>";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "helpdesk", [], "any", false, false, false, 228), "name", [], "any", false, false, false, 228), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 230
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 230), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 230), 30), "html", null, true);
            echo "</a>
                        </td>
                        <td>
                            ";
            // line 233
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 233) == "open")) {
                // line 234
                echo "                                <span class=\"badge bg-success me-1\"></span>
                            ";
            }
            // line 236
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 236) == "on_hold")) {
                // line 237
                echo "                                <span class=\"badge bg-warning me-1\"></span>
                            ";
            }
            // line 239
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 239) == "closed")) {
                // line 240
                echo "                                <span class=\"badge bg-secondary me-1\"></span>
                            ";
            }
            // line 242
            echo "                            ";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 242)], 242, $context, $this->getSourceContext());
            echo "
                        </td>
                        <td>
                            <a class=\"btn btn-icon\" href=\"";
            // line 245
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 245), "html", null, true);
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
            // line 253
            echo "                    <tr>
                        <td class=\"text-muted\" colspan=\"5\">";
            // line 254
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "                </tbody>
            </table>

            <div class=\"card-footer\">
                <a href=\"";
        // line 261
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["client_id" => twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "id", [], "any", false, false, false, 261)]);
        echo "#tab-new\" class=\"btn btn-primary\">
                    <svg class=\"icon\">
                        <use xlink:href=\"#plus\" />
                    </svg>
                    ";
        // line 265
        echo twig_escape_filter($this->env, __trans("New Support Ticket"), "html", null, true);
        echo "
                </a>
            </div>
        </div>
    </div>
</div>

<div class=\"conversation\">
    ";
        // line 273
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "messages", [], "any", false, false, false, 273));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["message"]) {
            // line 274
            echo "    <div class=\"card mb-3 col-md-10 ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "first", [], "any", false, false, false, 274), "author", [], "any", false, false, false, 274), "email", [], "any", false, false, false, 274) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 274), "email", [], "any", false, false, false, 274))) {
                echo "offset-md-2";
            }
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 274)) ? ("last") : (""));
            echo "\" id=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 274) == ($context["request_message"] ?? null))) ? ("direct-msg") : (""));
            echo "\">
        <div class=\"card-header\" style=\"cursor: pointer;\">
            <span class=\"avatar avatar-xs me-2\" style=\"background-image: url(";
            // line 276
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 276), "email", [], "any", false, false, false, 276)), "html", null, true);
            echo "&size=24)\"></span>
            ";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 277), "name", [], "any", false, false, false, 277), "html", null, true);
            echo "
            <a class=\"ms-2\" href=\"";
            // line 278
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 278), "html", null, true);
            echo "/message/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 278), "html", null, true);
            echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#link\" />
                </svg>
            </a>
            <span class=\"ms-auto text-muted\">";
            // line 283
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "created_at", [], "any", false, false, false, 283)), "html", null, true);
            echo "</span>
        </div>
        <div class=\"card-body\" style=\"display:";
            // line 285
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 285) || ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 285) + 1) == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "messages", [], "any", false, false, false, 285))))) ? ("block") : ("none"));
            echo ";\">
            ";
            // line 286
            echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 286));
            echo "
        </div>
    </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "</div>

<div class=\"card\" id=\"reply-box\">
    <form method=\"post\" action=\"";
        // line 293
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/ticket_reply");
        echo "\" class=\"api-form\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["status" => "open"]);
        echo "\">
        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 294
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
        <div class=\"card-body\">
            <div class=\"d-flex\">
                <h5>";
        // line 297
        echo twig_escape_filter($this->env, __trans("Reply as"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "name", [], "any", false, false, false, 297), "html", null, true);
        echo "</h5>
                <div class=\"ms-auto\">";
        // line 298
        $this->loadTemplate("mod_support_canned_selector.html.twig", "mod_support_ticket.html.twig", 298)->display($context);
        echo "</div>
            </div>

            <textarea class=\"bb-textarea\" id=\"rt\" name=\"content\" rows=\"10\" required>";
        // line 301
        echo twig_escape_filter($this->env, __trans("Hello"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "client", [], "any", false, false, false, 301), "first_name", [], "any", false, false, false, 301), "html", null, true);
        echo ",
";
        // line 302
        echo twig_escape_filter($this->env, ($context["canned_delay_message"] ?? null), "html", null, true);
        echo "

";
        // line 304
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "signature", [], "any", false, false, false, 304), "html", null, true);
        echo "
";
        // line 305
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "helpdesk", [], "any", false, false, false, 305), "signature", [], "any", false, false, false, 305), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"card-footer d-flex gap-2\">
            <a href=\"#\" class=\"btn btn-secondary w-25\" id=\"toggleMessages\">
                <svg class=\"icon\">
                    <use xlink:href=\"#eye\" />
                </svg>
                ";
        // line 312
        echo twig_escape_filter($this->env, __trans("Show/Hide messages"), "html", null, true);
        echo "
            </a>

            <input type=\"hidden\" name=\"id\" value=\"";
        // line 315
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 315), "html", null, true);
        echo "\">
            <input type=\"submit\" value=\"";
        // line 316
        echo twig_escape_filter($this->env, __trans("Post"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">

            ";
        // line 318
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "messages", [], "any", false, false, false, 318)) > 2) && (twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 318) != "closed"))) {
            // line 319
            echo "            <a class=\"btn btn-danger w-25 api-link\"
                href=\"";
            // line 320
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/ticket_close", ["id" => twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 320), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                data-api-confirm=\"";
            // line 321
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                data-api-redirect=\"";
            // line 322
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["status" => "open"]);
            echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#check\" />
                </svg>
                ";
            // line 326
            echo twig_escape_filter($this->env, __trans("Close ticket"), "html", null, true);
            echo "
            </a>
            ";
        }
        // line 329
        echo "        </div>
    </form>
</div>
";
    }

    // line 334
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 335
        echo "<script>
    function setSelRange(inputEl, selStart, selEnd) {
        if (inputEl.setSelectionRange) {
            inputEl.focus();
            inputEl.setSelectionRange(selStart, selEnd);
        } else if (inputEl.createTextRange) {
            var range = inputEl.createTextRange();

            range.collapse(true);
            range.moveEnd('character', selEnd);
            range.moveStart('character', selStart);
            range.select();
        }
    }

    \$(function() {
        \$('#reply-box textarea').focus();

        var ta = document.getElementById('rt');
        var pos = ta.innerHTML.indexOf('\\n') + 2;

        setSelRange(ta, pos, pos);

        \$('.shd select').on('change',function(){
            bb.get('admin/support/ticket_update', {
                id: ";
        // line 360
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 360), "html", null, true);
        echo ",
                support_helpdesk_id: \$(this).val(),
                CSRFToken: \"";
        // line 362
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"
            });
        });

        \$('input.tst').on('click', function(){
            bb.get('admin/support/ticket_update', {
                id: ";
        // line 368
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 368), "html", null, true);
        echo ",
                status: \$(this).val(),
                CSRFToken: \"";
        // line 370
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"
            });
        });

        \$('.conversation').on('click', '.card-header', function(event) {
            ";
        // line 376
        echo "            \$(this).siblings('.card-body').toggle();

            ";
        // line 379
        echo "        });

        if (\$('#direct-msg').length > 0){
            \$('#direct-msg > .card-body').show();
            \$('html, body').animate({
                scrollTop: \$('#direct-msg').offset().top-50
            }, 500);
            \$('#direct-msg').css(\"background-color\", \"rgb(235, 235, 235)\");
        }

        var showAllMessages = false;
        \$('.api-form').on('click', '#toggleMessages', function(event) {
            event.preventDefault();

            showAllMessages = !showAllMessages;
            \$('.conversation .card-body').toggle(showAllMessages);

        });
    });
</script>
";
    }

    // line 401
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["mf"], "macro_bb_editor", [".bb-textarea"], 401, $context, $this->getSourceContext());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_support_ticket.html.twig";
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
        return array (  923 => 401,  899 => 379,  895 => 376,  887 => 370,  882 => 368,  873 => 362,  868 => 360,  841 => 335,  837 => 334,  830 => 329,  824 => 326,  817 => 322,  813 => 321,  809 => 320,  806 => 319,  804 => 318,  799 => 316,  795 => 315,  789 => 312,  779 => 305,  775 => 304,  770 => 302,  764 => 301,  758 => 298,  752 => 297,  746 => 294,  740 => 293,  735 => 290,  717 => 286,  713 => 285,  708 => 283,  696 => 278,  692 => 277,  688 => 276,  676 => 274,  659 => 273,  648 => 265,  641 => 261,  635 => 257,  626 => 254,  623 => 253,  608 => 245,  601 => 242,  597 => 240,  594 => 239,  590 => 237,  587 => 236,  583 => 234,  581 => 233,  571 => 230,  566 => 228,  562 => 227,  559 => 226,  553 => 225,  551 => 224,  543 => 219,  539 => 218,  535 => 217,  531 => 216,  518 => 206,  510 => 201,  501 => 195,  496 => 193,  492 => 192,  486 => 188,  471 => 179,  467 => 178,  461 => 175,  452 => 173,  448 => 171,  444 => 170,  434 => 163,  430 => 162,  423 => 158,  418 => 156,  411 => 152,  406 => 150,  399 => 146,  394 => 144,  387 => 140,  382 => 138,  377 => 136,  373 => 135,  366 => 130,  360 => 127,  354 => 125,  352 => 124,  346 => 121,  339 => 117,  335 => 116,  331 => 115,  328 => 114,  322 => 111,  315 => 107,  311 => 106,  307 => 105,  304 => 104,  302 => 103,  296 => 99,  286 => 96,  282 => 95,  279 => 94,  277 => 93,  274 => 92,  264 => 89,  260 => 88,  257 => 87,  255 => 86,  252 => 85,  246 => 82,  242 => 81,  239 => 80,  236 => 79,  234 => 78,  228 => 75,  224 => 74,  220 => 72,  214 => 71,  208 => 69,  205 => 68,  201 => 67,  197 => 66,  191 => 63,  187 => 62,  173 => 59,  169 => 58,  163 => 55,  159 => 54,  147 => 45,  135 => 42,  129 => 39,  123 => 36,  115 => 31,  111 => 29,  107 => 28,  98 => 22,  91 => 20,  83 => 17,  73 => 10,  69 => 8,  65 => 7,  54 => 5,  50 => 1,  48 => 26,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_support_ticket.html.twig", "/var/www/modules/Support/html_admin/mod_support_ticket.html.twig");
    }
}
