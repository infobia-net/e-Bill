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

/* mod_staff_settings.html.twig */
class __TwigTemplate_32b7e6d7b030ea2c958d9f0cecd9fba6 extends Template
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
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_staff_settings.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_staff_settings.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Staff"), "html", null, true);
    }

    // line 9
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 12
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#home\"/>
                </svg>
            </a>
        </li>
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 19
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 21
        echo twig_escape_filter($this->env, __trans("Staff"), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <div class=\"card-tabs\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" href=\"#tab-staff\" data-bs-toggle=\"tab\">";
        // line 29
        echo twig_escape_filter($this->env, __trans("Staff"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-settings\" data-bs-toggle=\"tab\">";
        // line 32
        echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-new\" data-bs-toggle=\"tab\">
                    <svg class=\"icon me-2\">
                        <use xlink:href=\"#plus\"/>
                    </svg>
                    ";
        // line 39
        echo twig_escape_filter($this->env, __trans("New staff member"), "html", null, true);
        echo "
                </a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-groups\" data-bs-toggle=\"tab\">";
        // line 43
        echo twig_escape_filter($this->env, __trans("Manage groups"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-new-group\" data-bs-toggle=\"tab\">
                    <svg class=\"icon me-2\">
                        <use xlink:href=\"#plus\"/>
                    </svg>
                    ";
        // line 50
        echo twig_escape_filter($this->env, __trans("New group"), "html", null, true);
        echo "
                </a>
            </li>
        </ul>

        <div class=\"card\">
            <div class=\"tab-content\">
                <div class=\"tab-pane fade show active\" id=\"tab-staff\" role=\"tabpanel\">
                    ";
        // line 58
        $this->loadTemplate("partial_search.html.twig", "mod_staff_settings.html.twig", 58)->display($context);
        // line 59
        echo "                    <div class=\"table-responsive\">
                        <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                            <thead>
                            <tr>
                                <th class=\"w-1\">#</th>
                                <th>";
        // line 64
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo "</th>
                                <th>";
        // line 65
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo "</th>
                                <th>";
        // line 66
        echo twig_escape_filter($this->env, __trans("Group"), "html", null, true);
        echo "</th>
                                <th>";
        // line 67
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                                <th class=\"w-1\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 72
        $context["members"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "staff_get_list", [twig_array_merge(["per_page" => 100, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 72)], ($context["request"] ?? null))], "method", false, false, false, 72);
        // line 73
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["members"] ?? null), "list", [], "any", false, false, false, 73));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["i"] => $context["member"]) {
            // line 74
            echo "                                <tr>
                                    <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 77
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 77), "html", null, true);
            echo "\">
                                        <span class=\"avatar avatar-xs me-2\"
                                              style=\"background-image: url(";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, $context["member"], "email", [], "any", false, false, false, 79)), "html", null, true);
            echo "&size=25)\"></span>
                                        </a>
                                        <a href=\"";
            // line 81
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/staff/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 81), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 81), "html", null, true);
            echo "</a>
                                    </td>
                                    <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "email", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 85
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/staff/group");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "group", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "group", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
            echo "</a>
                                    </td>
                                    <td>
                                        ";
            // line 88
            if ((twig_get_attribute($this->env, $this->source, $context["member"], "status", [], "any", false, false, false, 88) == "active")) {
                // line 89
                echo "                                            <span class=\"badge bg-success me-1\"></span>
                                        ";
            }
            // line 91
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["member"], "status", [], "any", false, false, false, 91) == "inactive")) {
                // line 92
                echo "                                            <span class=\"badge bg-secondary me-1\"></span>
                                        ";
            }
            // line 94
            echo "                                        ";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["member"], "status", [], "any", false, false, false, 94)], 94, $context, $this->getSourceContext());
            echo "
                                    </td>
                                    <td>
                                        <a class=\"btn btn-icon\" href=\"";
            // line 97
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/staff/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 97), "html", null, true);
            echo "\"
                                           data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 98
            echo twig_escape_filter($this->env, __trans("Edit"), "html", null, true);
            echo "\">
                                            <svg class=\"icon\">
                                                <use xlink:href=\"#edit\"/>
                                            </svg>
                                        </a>
                                        <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
            // line 103
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                                           data-api-redirect=\"";
            // line 104
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/staff");
            echo "\"
                                           href=\"";
            // line 105
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/staff/delete", ["id" => twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 105), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                                           data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 106
            echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
            echo "\">
                                            <svg class=\"icon\">
                                                <use xlink:href=\"#delete\"/>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 114
            echo "                                <tr>
                                    <td class=\"text-muted\" colspan=\"5\">";
            // line 115
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-settings\" role=\"tabpanel\">
                    <form method=\"post\" action=\"";
        // line 124
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\"
                          data-api-msg=\"";
        // line 125
        echo twig_escape_filter($this->env, __trans("Configuration updated"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"ext\" value=\"mod_staff\">
                        <div class=\"card-body\">
                        ";
        // line 129
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_staff"]], "method", false, false, false, 129);
        // line 130
        echo "                            <div class=\"mt-3 mb-3 row\">
                                <label class=\"col-md-3 form-label\">";
        // line 131
        echo twig_escape_filter($this->env, __trans("Check login IP"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radioCheckIpYes\" type=\"radio\" name=\"check_ip\" value=\"1\"";
        // line 134
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "check_ip", [], "any", false, false, false, 134) == "1")) {
            echo " checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"radioCheckIpYes\">";
        // line 135
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                                    </div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radioCheckIpNo\" type=\"radio\" name=\"check_ip\" value=\"0\"";
        // line 138
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "check_ip", [], "any", false, false, false, 138)) {
            echo " checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"radioCheckIpNo\">";
        // line 139
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"mb-3 row\" id=\"check_ip\"";
        // line 143
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "check_ip", [], "any", false, false, false, 143)) {
            echo " style=\"display:none;\"";
        }
        echo ">
                                <label class=\"col-md-3 col-form-label\">";
        // line 144
        echo twig_escape_filter($this->env, __trans("Allowed IPs. One per line"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <textarea class=\"form-control\" name=\"allowed_ips\" rows=\"2\" placeholder=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_env", [["ip" => 1]], "method", false, false, false, 146), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "allowed_ips", [], "any", false, false, false, 146), "html", null, true);
        echo "</textarea>
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label
                                    class=\"col-md-3 form-label\">";
        // line 151
        echo twig_escape_filter($this->env, __trans("Allow staff reset passwords"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radioPWresetYes\" type=\"radio\"
                                               name=\"public[reset_pw]\"
                                               value=\"1\"";
        // line 156
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "public", [], "any", false, false, false, 156), "reset_pw", [], "any", false, false, false, 156) == "1")) {
            echo " checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"radioPWresetYes\">";
        // line 157
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                                    </div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radioPWresetNo\" type=\"radio\"
                                               name=\"public[reset_pw]\"
                                               value=\"0\"";
        // line 162
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "public", [], "any", false, false, false, 162), "reset_pw", [], "any", false, false, false, 162)) {
            echo " checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"radioPWresetNo\">";
        // line 163
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer text-end\">
                            <button class=\"btn btn-primary\" type=\"submit\">";
        // line 169
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-new\" role=\"tabpanel\">
                    <form method=\"post\" action=\"";
        // line 175
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/staff/create");
        echo "\" class=\"api-form\" data-api-jsonp=\"onAfterStaffCreate\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 176
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                        <div class=\"card-body\">
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 179
        echo twig_escape_filter($this->env, __trans("Group"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    ";
        // line 181
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["admin_group_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "staff_group_get_pairs", [], "any", false, false, false, 181), "", 1], 181, $context, $this->getSourceContext());
        echo "
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 185
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"name\" required>
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 191
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"email\" name=\"email\" value=\"";
        // line 193
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 193), "html", null, true);
        echo "\"
                                           required>
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 198
        echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"password\" name=\"password\" required=\"required\">
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 204
        echo twig_escape_filter($this->env, __trans("Signature"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <textarea class=\"form-control\" name=\"signature\" rows=\"2\"></textarea>
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 form-label\">";
        // line 210
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo ":</label>
                                <div class=\"col-md-6\">
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radioStatusInactive\" type=\"radio\" name=\"status\" value=\"inactive\" checked>
                                        <label class=\"form-check-label\" for=\"radioStatusInactive\">";
        // line 214
        echo twig_escape_filter($this->env, __trans("Inactive"), "html", null, true);
        echo "</label>
                                    </div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radioStatusActive\" type=\"radio\" name=\"status\" value=\"active\">
                                        <label class=\"form-check-label\" for=\"radioStatusActive\">";
        // line 218
        echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
        echo "</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer text-end\">
                            <input type=\"submit\" value=\"";
        // line 224
        echo twig_escape_filter($this->env, __trans("Create"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                        </div>
                    </form>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-groups\" role=\"tabpanel\">
                    <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                        <thead>
                        <tr>
                            <th>";
        // line 233
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo "</th>
                            <th class=\"w-1\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 238
        $context["groups"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "staff_group_get_list", [["per_page" => 100, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 238)]], "method", false, false, false, 238);
        // line 239
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["groups"] ?? null), "list", [], "any", false, false, false, 239));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["group"]) {
            // line 240
            echo "                            <tr>
                                <td>
                                    <a href=\"";
            // line 242
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/staff/group");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 242), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 242), "html", null, true);
            echo "</a>
                                </td>
                                <td>
                                    <a class=\"btn btn-icon\" href=\"";
            // line 245
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/staff/group");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 245), "html", null, true);
            echo "\"
                                       data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 246
            echo twig_escape_filter($this->env, __trans("Edit"), "html", null, true);
            echo "\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#edit\"/>
                                        </svg>
                                    </a>
                                    <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
            // line 251
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                                       data-api-redirect=\"";
            // line 252
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/staff");
            echo "\"
                                       href=\"";
            // line 253
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/staff/group_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 253), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                                       data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 254
            echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
            echo "\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#delete\"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 262
            echo "                            <tr>
                                <td class=\"text-muted\" colspan=\"5\">";
            // line 263
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                        </tbody>
                    </table>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-new-group\" role=\"tabpanel\">
                    <form method=\"post\" action=\"";
        // line 271
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/staff/group_create");
        echo "\" class=\"api-form\"
                          data-api-redirect=\"";
        // line 272
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/staff");
        echo "\">
                        <div class=\"card-body\">
                            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 274
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 276
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"name\" required>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer text-end\">
                            <button class=\"btn btn-primary\" type=\"submit\">";
        // line 283
        echo twig_escape_filter($this->env, __trans("Create group"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 292
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 293
        echo "    <script>
        function onAfterStaffCreate(id) {
            bb.redirect(\"";
        // line 295
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
        echo "/\" + id + '#tab-permissions');
        }

        \$(function () {
            \$('input[name=check_ip]').on('click', function () {
                if (\$(this).val() == 1) {
                    \$('#check_ip').slideDown();
                } else {
                    \$('#check_ip').slideUp();
                }
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
        return "mod_staff_settings.html.twig";
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
        return array (  673 => 295,  669 => 293,  665 => 292,  653 => 283,  643 => 276,  638 => 274,  633 => 272,  629 => 271,  622 => 266,  613 => 263,  610 => 262,  597 => 254,  593 => 253,  589 => 252,  585 => 251,  577 => 246,  571 => 245,  561 => 242,  557 => 240,  551 => 239,  549 => 238,  541 => 233,  529 => 224,  520 => 218,  513 => 214,  506 => 210,  497 => 204,  488 => 198,  480 => 193,  475 => 191,  466 => 185,  459 => 181,  454 => 179,  448 => 176,  444 => 175,  435 => 169,  426 => 163,  420 => 162,  412 => 157,  406 => 156,  398 => 151,  388 => 146,  383 => 144,  377 => 143,  370 => 139,  364 => 138,  358 => 135,  352 => 134,  346 => 131,  343 => 130,  341 => 129,  335 => 126,  331 => 125,  327 => 124,  319 => 118,  310 => 115,  307 => 114,  286 => 106,  282 => 105,  278 => 104,  274 => 103,  266 => 98,  260 => 97,  253 => 94,  249 => 92,  246 => 91,  242 => 89,  240 => 88,  230 => 85,  225 => 83,  216 => 81,  211 => 79,  204 => 77,  199 => 75,  196 => 74,  177 => 73,  175 => 72,  167 => 67,  163 => 66,  159 => 65,  155 => 64,  148 => 59,  146 => 58,  135 => 50,  125 => 43,  118 => 39,  108 => 32,  102 => 29,  97 => 26,  93 => 25,  86 => 21,  79 => 19,  69 => 12,  65 => 10,  61 => 9,  54 => 5,  49 => 1,  47 => 7,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_staff_settings.html.twig", "/var/www/modules/Staff/html_admin/mod_staff_settings.html.twig");
    }
}
