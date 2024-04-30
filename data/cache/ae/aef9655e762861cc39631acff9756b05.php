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

/* mod_client_index.html.twig */
class __TwigTemplate_8dbb5f8c118923f7dbd98945ab4a3c29 extends Template
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
        return "layout_default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_client_index.html.twig", 3)->unwrap();
        // line 5
        $context["active_menu"] = "client";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_client_index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Clients"), "html", null, true);
    }

    // line 9
    public function block_top_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "show_filter", [], "any", false, false, false, 10)) {
            // line 11
            echo "    <section class=\"card mb-3\">
        <div class=\"card-body\">
            <h5>";
            // line 13
            echo twig_escape_filter($this->env, __trans("Filter clients"), "html", null, true);
            echo "</h5>

            <form method=\"get\">
                <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
            // line 18
            echo twig_escape_filter($this->env, __trans("Client ID"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        <input class=\"form-control\" type=\"text\" name=\"id\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
                    </div>
                </div>
                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
            // line 24
            echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                    </div>
                </div>

                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
            // line 31
            echo twig_escape_filter($this->env, __trans("Company name"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        <input class=\"form-control\" type=\"text\" name=\"company\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
                    </div>
                </div>

                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
            // line 38
            echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        <input class=\"form-control\" type=\"text\" name=\"email\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 40), "html", null, true);
            echo "\">
                    </div>
                </div>

                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
            // line 45
            echo twig_escape_filter($this->env, __trans("Group"), "html", null, true);
            echo ":</label>
                    <div class=\"col\">
                        ";
            // line 47
            echo twig_call_macro($macros["mf"], "macro_selectbox", ["group_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_group_get_pairs", [], "any", false, false, false, 47), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "group_id", [], "any", false, false, false, 47), 0, "All groups"], 47, $context, $this->getSourceContext());
            echo "
                    </div>
                </div>

                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
            // line 52
            echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
            echo ":</label>
                    <div class=\"col\">
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" id=\"statusAll\" name=\"status\" value=\"\"";
            // line 55
            if ( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 55)) {
                echo " checked";
            }
            echo ">
                            <label class=\"form-check-label\" for=\"statusAll\">";
            // line 56
            echo twig_escape_filter($this->env, __trans("All"), "html", null, true);
            echo "</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" id=\"statusActive\" name=\"status\" value=\"active\"";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 59) == "active")) {
                echo " checked";
            }
            echo ">
                            <label class=\"form-check-label\" for=\"statusActive\">";
            // line 60
            echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
            echo "</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" id=\"statusSuspended\" name=\"status\" value=\"suspended\"";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 63) == "suspended")) {
                echo " checked";
            }
            echo ">
                            <label class=\"form-check-label\" for=\"statusSuspended\">";
            // line 64
            echo twig_escape_filter($this->env, __trans("Suspended"), "html", null, true);
            echo "</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" id=\"statusCanceled\" name=\"status\" value=\"canceled\"";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 67) == "canceled")) {
                echo " checked";
            }
            echo ">
                            <label class=\"form-check-label\" for=\"statusCanceled\">";
            // line 68
            echo twig_escape_filter($this->env, __trans("Canceled"), "html", null, true);
            echo "</label>
                        </div>
                    </div>
                </div>

                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\" for=\"reg_date\">";
            // line 74
            echo twig_escape_filter($this->env, __trans("Registration date"), "html", null, true);
            echo "</label>
                    <div class=\"col\">
                        <div class=\"input-group\">
                            <div class=\"input-icon w-100\">
                                <input class=\"form-control datepicker\"
                                       id=\"reg_date\"
                                       value=\"";
            // line 80
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 80)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 80), "Y-m-d"), "html", null, true);
            }
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 80)) {
                echo " to ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 80), "Y-m-d"), "html", null, true);
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
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 100), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"show_filter\" value=\"1\">
                <div class=\"d-flex gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary w-75\">";
            // line 103
            echo twig_escape_filter($this->env, __trans("Filter"), "html", null, true);
            echo "</button>
                    <a class=\"btn btn-danger w-25\" href=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 104), "html", null, true);
            echo "?show_filter=1\">";
            echo twig_escape_filter($this->env, __trans("Reset"), "html", null, true);
            echo "</a>
                </div>
            </form>
        </div>
    </section>
";
        } else {
            // line 110
            echo "    ";
            $context["count_clients"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_get_statuses", [], "any", false, false, false, 110);
            // line 111
            echo "    <section class=\"row row-cards mb-3\">
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 113
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client", ["status" => "active"]);
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-success text-white avatar\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["count_clients"] ?? null), "active", [], "any", false, false, false, 117), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 120
            echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 127
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client", ["status" => "suspended"]);
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-danger text-white avatar\">";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["count_clients"] ?? null), "suspended", [], "any", false, false, false, 131), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 134
            echo twig_escape_filter($this->env, __trans("Suspended"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 141
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client", ["status" => "canceled"]);
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-secondary text-white avatar\">";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["count_clients"] ?? null), "canceled", [], "any", false, false, false, 145), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 148
            echo twig_escape_filter($this->env, __trans("Canceled"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a class=\"card card-sm card-link\" href=\"";
            // line 155
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            echo "\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-blue text-white avatar\">";
            // line 159
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["count_clients"] ?? null), "active", [], "any", false, false, false, 159) + twig_get_attribute($this->env, $this->source, ($context["count_clients"] ?? null), "canceled", [], "any", false, false, false, 159)) + twig_get_attribute($this->env, $this->source, ($context["count_clients"] ?? null), "suspended", [], "any", false, false, false, 159)), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 162
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

    // line 172
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 173
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-index\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 175
        echo twig_escape_filter($this->env, __trans("Clients"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link\" href=\"#tab-new\" data-bs-toggle=\"tab\" role=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 182
        echo twig_escape_filter($this->env, __trans("New client"), "html", null, true);
        echo "
            </button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link\" href=\"#tab-groups\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 186
        echo twig_escape_filter($this->env, __trans("Groups"), "html", null, true);
        echo "</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link\" href=\"#tab-new-group\" data-bs-toggle=\"tab\" role=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 193
        echo twig_escape_filter($this->env, __trans("New group"), "html", null, true);
        echo "
            </button>
        </li>
    </ul>

    <div class=\"card\">
        <div class=\"tab-content\">
            <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
                ";
        // line 201
        $this->loadTemplate("partial_search.html.twig", "mod_client_index.html.twig", 201)->display($context);
        // line 202
        echo "                <div class=\"table-responsive\">
                    <table class=\"table card-table table-vcenter table-striped text-nowrap sortable\">
                        <thead>
                            <tr>
                                <th class=\"w-1 no-sort\">
                                    <input class=\"form-check-input m-0 align-middle batch-delete-master-checkbox\" type=\"checkbox\">
                                </th>
                                <th>";
        // line 209
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo "</th>
                                <th>";
        // line 210
        echo twig_escape_filter($this->env, __trans("Company"), "html", null, true);
        echo "</th>
                                <th>";
        // line 211
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                                <th>";
        // line 212
        echo twig_escape_filter($this->env, __trans("Date"), "html", null, true);
        echo "</th>
                                <th class=\"w-1\"></th>
                            </tr>
                        </thead>

                        <tbody>
                            ";
        // line 218
        $context["clients"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_get_list", [twig_array_merge(["per_page" => 30, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 218)], ($context["request"] ?? null))], "method", false, false, false, 218);
        // line 219
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["clients"] ?? null), "list", [], "any", false, false, false, 219));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 220
            echo "                            <tr>
                                <td>
                                    <input class=\"form-check-input m-0 align-middle batch-delete-checkbox\" type=\"checkbox\" data-item-id=\"";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 222), "html", null, true);
            echo "\">
                                </td>
                                <td>
                                    <div class=\"d-flex py-1 align-items-center\">
                                        <a href=\"";
            // line 226
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 226), "html", null, true);
            echo "\">
                                            <span class=\"avatar me-2\" style=\"background-image: url(";
            // line 227
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 227)), "html", null, true);
            echo "&size=40)\"></span>
                                        </a>
                                        <div class=\"flex-fill\">
                                            <div class=\"font-weight-medium\">
                                                <a href=\"";
            // line 231
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 231), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "first_name", [], "any", false, false, false, 231), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "last_name", [], "any", false, false, false, 231), "html", null, true);
            echo "</a>
                                                <span class=\"flag flag-country-";
            // line 232
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "country", [], "any", false, false, false, 232)), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 232)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["client"], "country", [], "any", false, false, false, 232)] ?? null) : null), "html", null, true);
            echo "\"></span>
                                            </div>
                                            <div class=\"text-muted\">
                                                <a href=\"#\" class=\"text-reset\">";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 235), "html", null, true);
            echo "</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href=\"";
            // line 241
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 241), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "company", [], "any", false, false, false, 241), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["client"], "company", [], "any", true, true, false, 241)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["client"], "company", [], "any", false, false, false, 241), "-")) : ("-")), 30), "html", null, true);
            echo "</a>
                                </td>
                                <td>
                                    ";
            // line 244
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 244) == "active")) {
                // line 245
                echo "                                        <span class=\"badge bg-success me-1\"></span>
                                    ";
            }
            // line 247
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 247) == "suspended")) {
                // line 248
                echo "                                        <span class=\"badge bg-danger me-1\"></span>
                                    ";
            }
            // line 250
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 250) == "canceled")) {
                // line 251
                echo "                                        <span class=\"badge bg-secondary me-1\"></span>
                                    ";
            }
            // line 253
            echo "                                    ";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 253)], 253, $context, $this->getSourceContext());
            echo "
                                </td>
                                <td>";
            // line 255
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "created_at", [], "any", false, false, false, 255)), "html", null, true);
            echo "</td>
                                <td>
                                    <a class=\"btn btn-icon\" href=\"";
            // line 257
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 257), "html", null, true);
            echo "\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#edit\" />
                                        </svg>
                                    </a>
                                    <a class=\"btn btn-icon api-link\" href=\"";
            // line 262
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/client/delete", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 262), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" data-api-confirm=\"";
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" data-api-reload=\"1\">
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
            // line 270
            echo "                            <tr>
                                <td class=\"text-muted\" colspan=\"7\">";
            // line 271
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "                        </tbody>
                    </table>
                </div>

                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <div>
                        ";
        // line 280
        $this->loadTemplate("partial_batch_delete.html.twig", "mod_client_index.html.twig", 280)->display(twig_array_merge($context, ["action" => "admin/client/batch_delete"]));
        // line 281
        echo "                        ";
        $this->loadTemplate("partial_pagination.html.twig", "mod_client_index.html.twig", 281)->display(twig_array_merge($context, ["list" => ($context["clients"] ?? null), "url" => "client"]));
        // line 282
        echo "                    </div>
                    <div>
                        <a class=\"btn btn-secondary\" href=\"";
        // line 284
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/api/admin/client/export_csv", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, __trans("Export Clients"), "html", null, true);
        echo "\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#download\" />
                            </svg>
                            ";
        // line 288
        echo twig_escape_filter($this->env, __trans("Export Clients"), "html", null, true);
        echo "
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"tab-pane fade\" id=\"tab-new\" role=\"tabpanel\">
                <div class=\"card-body\">
                    <form method=\"post\" action=\"";
        // line 296
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/client/create");
        echo "\" class=\"api-form save\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 297
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 299
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" type=\"radio\" id=\"radioStatusActive\" name=\"status\" value=\"active\" checked>
                                    <label class=\"form-check-label\" for=\"radioStatusActive\">";
        // line 303
        echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
        echo "</label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" type=\"radio\" id=\"radioStatusCanceled\" name=\"status\" value=\"canceled\">
                                    <label class=\"form-check-label\" for=\"radioStatusCanceled\">";
        // line 307
        echo twig_escape_filter($this->env, __trans("Canceled"), "html", null, true);
        echo "</label>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 312
        echo twig_escape_filter($this->env, __trans("Group"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                ";
        // line 314
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["group_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_group_get_pairs", [], "any", false, false, false, 314), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "group_id", [], "any", false, false, false, 314), 0, "Select group"], 314, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 318
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"email\" value=\"";
        // line 320
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 320), "html", null, true);
        echo "\" required>
                            </div>
                        </div>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 324
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                <div class=\"row g-2\">
                                    <div class=\"col\">
                                        <input class=\"form-control\" type=\"text\" name=\"first_name\" value=\"";
        // line 328
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "first_name", [], "any", false, false, false, 328), "html", null, true);
        echo "\" required>
                                    </div>
                                    <div class=\"col\">
                                        <input class=\"form-control\" type=\"text\" name=\"last_name\" value=\"";
        // line 331
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "last_name", [], "any", false, false, false, 331), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 337
        echo twig_escape_filter($this->env, __trans("Company"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"company\" value=\"";
        // line 339
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 339), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 343
        echo twig_escape_filter($this->env, __trans("Address Line 1"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"address_1\" value=\"";
        // line 345
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address_1", [], "any", false, false, false, 345), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 349
        echo twig_escape_filter($this->env, __trans("Address Line 2"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"address_2\" value=\"";
        // line 351
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address_2", [], "any", false, false, false, 351), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 355
        echo twig_escape_filter($this->env, __trans("City"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"city\" value=\"";
        // line 357
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "city", [], "any", false, false, false, 357), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 361
        echo twig_escape_filter($this->env, __trans("State"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                ";
        // line 364
        echo "                                <input class=\"form-control\" type=\"text\" name=\"state\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "state", [], "any", false, false, false, 364), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 368
        echo twig_escape_filter($this->env, __trans("Country"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                ";
        // line 370
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["country", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 370), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "country", [], "any", false, false, false, 370), 0, "Select country"], 370, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 374
        echo twig_escape_filter($this->env, __trans("Postcode"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"postcode\" value=\"";
        // line 376
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "postcode", [], "any", false, false, false, 376), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 380
        echo twig_escape_filter($this->env, __trans("Phone"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-text\">+</span>
                                    <input class=\"form-control\" type=\"text\" name=\"phone_cc\" value=\"";
        // line 384
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone_cc", [], "any", false, false, false, 384), "html", null, true);
        echo "\">
                                    ";
        // line 386
        echo "                                    <input class=\"form-control w-50\" type=\"text\" name=\"phone\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone", [], "any", false, false, false, 386), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 391
        echo twig_escape_filter($this->env, __trans("Currency"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                ";
        // line 393
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["currency", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "currency_get_pairs", [], "any", false, false, false, 393), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "currency", [], "any", false, false, false, 393), 0, "Select currency"], 393, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 397
        echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"password\" name=\"password\" value=\"\" required>
                            </div>
                        </div>

                        <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 403
        echo twig_escape_filter($this->env, __trans("Create"), "html", null, true);
        echo "\">
                    </form>
                </div>
            </div>

            <div class=\"tab-pane fade\" id=\"tab-groups\" role=\"tabpanel\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <thead>
                        <tr>
                            <th>";
        // line 412
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                            <th class=\"w-1\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 417
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_group_get_pairs", [], "any", false, false, false, 417));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["id"] => $context["group"]) {
            // line 418
            echo "                        <tr>
                            <td>
                                <a href=\"";
            // line 420
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/group");
            echo "/";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["group"], "html", null, true);
            echo "</a>
                            </td>
                            <td>
                                <a class=\"btn btn-icon\" href=\"";
            // line 423
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/group");
            echo "/";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#edit\" />
                                    </svg>
                                </a>
                                <a class=\"btn btn-icon api-link\" href=\"";
            // line 428
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/client/group_delete", ["id" => $context["id"], "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" data-api-reload=\"1\" data-api-confirm=\"";
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
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
            // line 436
            echo "                        <tr>
                            <td class=\"text-muted\" colspan=\"2\">";
            // line 437
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        echo "                    </tbody>
                </table>
            </div>

            <div class=\"tab-pane fade\" id=\"tab-new-group\" role=\"tabpanel\">
                <div class=\"card-body\">
                    <form method=\"post\" action=\"";
        // line 446
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/client/group_create");
        echo "\" class=\"api-form\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 447
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                        <div class=\"form-group mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">";
        // line 449
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo ":</label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 451
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "title", [], "any", false, false, false, 451), "html", null, true);
        echo "\" required>
                            </div>
                        </div>

                        <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 455
        echo twig_escape_filter($this->env, __trans("Create"), "html", null, true);
        echo "</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 463
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_client_index.html.twig";
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
        return array (  941 => 463,  930 => 455,  923 => 451,  918 => 449,  913 => 447,  907 => 446,  899 => 440,  890 => 437,  887 => 436,  872 => 428,  862 => 423,  852 => 420,  848 => 418,  843 => 417,  835 => 412,  823 => 403,  814 => 397,  807 => 393,  802 => 391,  793 => 386,  789 => 384,  782 => 380,  775 => 376,  770 => 374,  763 => 370,  758 => 368,  750 => 364,  745 => 361,  738 => 357,  733 => 355,  726 => 351,  721 => 349,  714 => 345,  709 => 343,  702 => 339,  697 => 337,  688 => 331,  682 => 328,  675 => 324,  668 => 320,  663 => 318,  656 => 314,  651 => 312,  643 => 307,  636 => 303,  629 => 299,  624 => 297,  618 => 296,  607 => 288,  598 => 284,  594 => 282,  591 => 281,  589 => 280,  581 => 274,  572 => 271,  569 => 270,  554 => 262,  544 => 257,  539 => 255,  533 => 253,  529 => 251,  526 => 250,  522 => 248,  519 => 247,  515 => 245,  513 => 244,  501 => 241,  492 => 235,  484 => 232,  474 => 231,  467 => 227,  461 => 226,  454 => 222,  450 => 220,  444 => 219,  442 => 218,  433 => 212,  429 => 211,  425 => 210,  421 => 209,  412 => 202,  410 => 201,  399 => 193,  389 => 186,  382 => 182,  372 => 175,  368 => 173,  364 => 172,  351 => 162,  345 => 159,  338 => 155,  328 => 148,  322 => 145,  315 => 141,  305 => 134,  299 => 131,  292 => 127,  282 => 120,  276 => 117,  269 => 113,  265 => 111,  262 => 110,  251 => 104,  247 => 103,  241 => 100,  212 => 80,  203 => 74,  194 => 68,  188 => 67,  182 => 64,  176 => 63,  170 => 60,  164 => 59,  158 => 56,  152 => 55,  146 => 52,  138 => 47,  133 => 45,  125 => 40,  120 => 38,  112 => 33,  107 => 31,  99 => 26,  94 => 24,  87 => 20,  82 => 18,  77 => 16,  71 => 13,  67 => 11,  65 => 10,  61 => 9,  54 => 7,  49 => 1,  47 => 5,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_client_index.html.twig", "/var/www/modules/Client/html_admin/mod_client_index.html.twig");
    }
}
