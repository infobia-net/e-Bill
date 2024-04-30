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

/* mod_servicehosting_index.html.twig */
class __TwigTemplate_8b4bb4bb129cab4913ede75c9e3cfb6b extends Template
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
        // line 3
        return "layout_default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_servicehosting_index.html.twig", 1)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 3
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_servicehosting_index.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Hosting plans and servers"), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-index\" data-bs-toggle=\"tab\">";
        // line 12
        echo twig_escape_filter($this->env, __trans("Hosting plans and servers"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-new-server\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 19
        echo twig_escape_filter($this->env, __trans("New server"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-new-plan\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 27
        echo twig_escape_filter($this->env, __trans("New hosting plan"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>

<div class=\"card\">
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h5>";
        // line 36
        echo twig_escape_filter($this->env, __trans("Servers"), "html", null, true);
        echo "</h5>
            </div>
            <table class=\"table card-table table-vcenter table-striped text-nowrap sortable\">
                <thead>
                    <tr>
                        <th>";
        // line 41
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                        <th>";
        // line 42
        echo twig_escape_filter($this->env, __trans("IP"), "html", null, true);
        echo "</th>
                        <th>";
        // line 43
        echo twig_escape_filter($this->env, __trans("Server manager"), "html", null, true);
        echo "</th>
                        <th>";
        // line 44
        echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
        echo "</th>
                        <th class=\"w-1\"></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 49
        $context["servers"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicehosting_server_get_list", [["per_page" => 100]], "method", false, false, false, 49);
        // line 50
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["servers"] ?? null), "list", [], "any", false, false, false, 50));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
            // line 51
            echo "                    <tr>
                        <td>
                            <a href=\"";
            // line 53
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/servicehosting/server");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</a>
                        </td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "ip", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                        <td>";
            // line 56
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["server"], "manager", [], "any", false, false, false, 56)], 56, $context, $this->getSourceContext());
            echo "</td>
                        <td>";
            // line 57
            echo twig_call_macro($macros["mf"], "macro_q", [twig_get_attribute($this->env, $this->source, $context["server"], "active", [], "any", false, false, false, 57)], 57, $context, $this->getSourceContext());
            echo "</td>
                        <td>
                            <a class=\"btn btn-icon\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "cpanel_url", [], "any", false, false, false, 59), "html", null, true);
            echo "\" target=\"_blank\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#settings\" />
                                </svg>
                            </a>
                            <a class=\"btn btn-icon api-link\" href=\"";
            // line 64
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicehosting/server_test_connection", ["id" => twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 64), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, __trans("Test connection"), "html", null, true);
            echo "\" data-api-msg=\"";
            echo twig_escape_filter($this->env, __trans("Server connected"), "html", null, true);
            echo "\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#wifi\" />
                                </svg>
                            </a>
                            <a class=\"btn btn-icon\" href=\"";
            // line 69
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/servicehosting/server");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#edit\" />
                                </svg>
                            </a>
                            <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
            // line 74
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicehosting");
            echo "\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicehosting/server_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 74), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
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
            // line 82
            echo "                    <tr>
                        <td class=\"text-muted\" colspan=\"7\">";
            // line 83
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                </tbody>
            </table>
            <hr>

            <div class=\"card-body\">
                <h5>";
        // line 91
        echo twig_escape_filter($this->env, __trans("Hosting plans"), "html", null, true);
        echo "</h5>
            </div>
            <table class=\"table card-table table-vcenter table-striped text-nowrap sortable\">
                <thead>
                    <tr>
                        <td>";
        // line 96
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</td>
                        <td>";
        // line 97
        echo twig_escape_filter($this->env, __trans("Addon domains"), "html", null, true);
        echo "</td>
                        <td>";
        // line 98
        echo twig_escape_filter($this->env, __trans("Disk space"), "html", null, true);
        echo "</td>
                        <td>";
        // line 99
        echo twig_escape_filter($this->env, __trans("Bandwidth"), "html", null, true);
        echo "</td>
                        <td class=\"w-1\"></td>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 105
        $context["hps"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicehosting_hp_get_list", [["per_page" => 100]], "method", false, false, false, 105);
        // line 106
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["hps"] ?? null), "list", [], "any", false, false, false, 106));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hp"]) {
            // line 107
            echo "                    <tr>
                        <td>
                            <a href=\"";
            // line 109
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/servicehosting/plan");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hp"], "id", [], "any", false, false, false, 109), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hp"], "name", [], "any", false, false, false, 109), "html", null, true);
            echo "</a>
                        </td>
                        <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hp"], "max_addon", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                        <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hp"], "quota", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
                        <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hp"], "bandwidth", [], "any", false, false, false, 113), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-icon\" href=\"";
            // line 115
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/servicehosting/plan");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hp"], "id", [], "any", false, false, false, 115), "html", null, true);
            echo "\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#edit\" />
                                </svg>
                            </a>
                            <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
            // line 120
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicehosting");
            echo "\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicehosting/hp_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["hp"], "id", [], "any", false, false, false, 120), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
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
            // line 128
            echo "                    <tr>
                        <td class=\"text-muted\" colspan=\"2\">";
            // line 129
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-new-server\" role=\"tabpanel\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"";
        // line 138
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicehosting/server_create");
        echo "\"  class=\"api-form\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicehosting");
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 139
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 141
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"\" required placeholder=\"";
        // line 143
        echo twig_escape_filter($this->env, __trans("Unique name to identify this server"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 147
        echo twig_escape_filter($this->env, __trans("Hostname"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"hostname\" value=\"\" placeholder=\"";
        // line 149
        echo twig_escape_filter($this->env, __trans("server1.yourserverdomain.com"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 153
        echo twig_escape_filter($this->env, __trans("IP"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"ip\" value=\"\" required placeholder=\"";
        // line 155
        echo twig_escape_filter($this->env, __trans("Primary IP address of the server used to connect to it like: 123.123.123.123"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 159
        echo twig_escape_filter($this->env, __trans("Assigned IP Addresses"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <textarea class=\"form-control\" name=\"assigned_ips\" rows=\"5\" placeholder=\"";
        // line 161
        echo twig_escape_filter($this->env, __trans("List the IP Addresses assigned to the server (One per line)"), "html", null, true);
        echo "\"></textarea>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 165
        echo twig_escape_filter($this->env, __trans("Enable/Disable"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioActiveYes\" type=\"radio\" name=\"active\" value=\"1\" checked>
                                <label class=\"form-check-label\" for=\"radioActiveYes\">";
        // line 169
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioActiveNo\" type=\"radio\" name=\"active\" value=\"0\">
                                <label class=\"form-check-label\" for=\"radioActiveNo\">";
        // line 173
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>

                    <h5>";
        // line 178
        echo twig_escape_filter($this->env, __trans("Nameservers"), "html", null, true);
        echo "</h5>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 180
        echo twig_escape_filter($this->env, __trans("Nameserver 1"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"ns1\" value=\"\" placeholder=\"";
        // line 182
        echo twig_escape_filter($this->env, __trans("ns1.yourdomain.com"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 186
        echo twig_escape_filter($this->env, __trans("Nameserver 2"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"ns2\" value=\"\" placeholder=\"";
        // line 188
        echo twig_escape_filter($this->env, __trans("ns2.yourdomain.com"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 192
        echo twig_escape_filter($this->env, __trans("Nameserver 3"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"ns3\" value=\"\" placeholder=\"";
        // line 194
        echo twig_escape_filter($this->env, __trans("ns3.yourdomain.com"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 198
        echo twig_escape_filter($this->env, __trans("Nameserver 4"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"ns4\" value=\"\" placeholder=\"";
        // line 200
        echo twig_escape_filter($this->env, __trans("ns4.yourdomain.com"), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <h5>";
        // line 204
        echo twig_escape_filter($this->env, __trans("Server manager"), "html", null, true);
        echo "</h5>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 206
        echo twig_escape_filter($this->env, __trans("Server manager"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <select class=\"form-select\" name=\"manager\" onchange=\"handleManagerChange(this)\">
                                ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicehosting_manager_get_pairs", [], "any", false, false, false, 209));
        foreach ($context['_seq'] as $context["code"] => $context["manager"]) {
            // line 210
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manager"], "label", [], "any", false, false, false, 210), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['manager'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                            </select>
                        </div>
                    </div>
                    <div id=\"credentials\"></div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 217
        echo twig_escape_filter($this->env, __trans("Connection port"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"number\" name=\"port\" min=\"1\" max=\"65535\" value=\"\" placeholder=\"";
        // line 219
        echo twig_escape_filter($this->env, __trans("Custom port. Use blank to use default. Used to connect to the API"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 223
        echo twig_escape_filter($this->env, __trans("Password length"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"number\" name=\"passwordLength\" min=\"1\" max=\"100\" value=\"\" placeholder=\"";
        // line 225
        echo twig_escape_filter($this->env, __trans("Length of generated passwords when creating user accounts. Defaults to 10"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 229
        echo twig_escape_filter($this->env, __trans("Use secure connection"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioSecureYes\" type=\"radio\" name=\"secure\" value=\"1\">
                                <label class=\"form-check-label\" for=\"radioSecureYes\">";
        // line 233
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioSecureNo\" type=\"radio\" name=\"secure\" value=\"0\" checked>
                                <label class=\"form-check-label\" for=\"radioSecureNo\">";
        // line 237
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 241
        echo twig_escape_filter($this->env, __trans("Add server"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-new-plan\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h5>";
        // line 248
        echo twig_escape_filter($this->env, __trans("Adding new hosting plan"), "html", null, true);
        echo "</h5>
                <p class=\"text-muted\">";
        // line 249
        echo twig_escape_filter($this->env, __trans("Depending on server manager used to setup hosting account you may require provide additional parameters in next step. In this step provide basic hosting plan information."), "html", null, true);
        echo "</p>

                <form method=\"post\" action=\"";
        // line 251
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicehosting/hp_create");
        echo "\" class=\"api-form\" data-api-jsonp=\"onAfterHostingPlanCreate\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 252
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 254
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"\" required placeholder=\"";
        // line 256
        echo twig_escape_filter($this->env, __trans("Unique name to identify this hosting plan"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 260
        echo twig_escape_filter($this->env, __trans("Disk quota (MB)"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"quota\" value=\"1024\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 266
        echo twig_escape_filter($this->env, __trans("Bandwidth (MB)"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"bandwidth\" value=\"1024\">
                        </div>
                    </div>

                    <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 272
        echo twig_escape_filter($this->env, __trans("Create hosting plan"), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 280
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 281
        echo "<script>
    function onAfterHostingPlanCreate(id) {
        bb.redirect(\"";
        // line 283
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicehosting/plan");
        echo "/\" + id);
    }

    function handleManagerChange (select) {
        var pairs = ";
        // line 287
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicehosting_manager_get_pairs", [], "any", false, false, false, 287));
        echo " // PHP array returned by the server manager converted to a JavaScript object
        var defaults = {
            form: {
                credentials: {
                    fields: [
                        {
                            name: 'username',
                            label: 'Username',
                            type: 'text',
                            placeholder: 'Username to connect to the server',
                            required: true
                        },
                        {
                            name: 'password',
                            label: 'Password',
                            type: 'password',
                            placeholder: 'Password to connect to the server',
                            required: true
                        }
                    ],
                },
            },
        } // Default form fields. If server manager does not provide any, use these.

        var credentials = document.getElementById('credentials'); // HTML element where the form fields will be inserted.
        var manager = select.value; // Selected server manager code.

        credentials.innerHTML = ''; // Clear the form fields.

        if (pairs[manager].form && pairs[manager].form.credentials && pairs[manager].form.credentials.fields) {
            var data = pairs[manager].form.credentials.fields;
        } else {
            var data = defaults.form.credentials.fields;
        }

        for (var i = 0; i < data.length; i++) {
            // Create a new form field and append it to the credentials element.
            var field = data[i];
            var div = document.createElement('div');
            div.className = 'mb-3 row';

            var label = document.createElement('label');
            label.className = 'form-label col-3 col-form-label';
            label.innerHTML = field.label + ':';
            div.appendChild(label);

            var input = document.createElement('input');
            input.className = 'form-control';
            input.type = field.type;
            input.name = field.name;
            input.placeholder = field.placeholder;
            input.required = field.required;

            var col = document.createElement('div');
            col.className = 'col';
            col.appendChild(input);
            div.appendChild(col);

            credentials.appendChild(div);
        }
    }

    window.onload = function () {
        handleManagerChange(document.querySelector('select[name=\"manager\"]'));
    };
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_servicehosting_index.html.twig";
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
        return array (  635 => 287,  628 => 283,  624 => 281,  620 => 280,  609 => 272,  600 => 266,  591 => 260,  584 => 256,  579 => 254,  574 => 252,  570 => 251,  565 => 249,  561 => 248,  551 => 241,  544 => 237,  537 => 233,  530 => 229,  523 => 225,  518 => 223,  511 => 219,  506 => 217,  499 => 212,  488 => 210,  484 => 209,  478 => 206,  473 => 204,  466 => 200,  461 => 198,  454 => 194,  449 => 192,  442 => 188,  437 => 186,  430 => 182,  425 => 180,  420 => 178,  412 => 173,  405 => 169,  398 => 165,  391 => 161,  386 => 159,  379 => 155,  374 => 153,  367 => 149,  362 => 147,  355 => 143,  350 => 141,  345 => 139,  339 => 138,  331 => 132,  322 => 129,  319 => 128,  302 => 120,  292 => 115,  287 => 113,  283 => 112,  279 => 111,  270 => 109,  266 => 107,  260 => 106,  258 => 105,  249 => 99,  245 => 98,  241 => 97,  237 => 96,  229 => 91,  222 => 86,  213 => 83,  210 => 82,  193 => 74,  183 => 69,  171 => 64,  163 => 59,  158 => 57,  154 => 56,  150 => 55,  141 => 53,  137 => 51,  131 => 50,  129 => 49,  121 => 44,  117 => 43,  113 => 42,  109 => 41,  101 => 36,  89 => 27,  78 => 19,  68 => 12,  64 => 10,  60 => 9,  53 => 5,  48 => 3,  46 => 7,  44 => 1,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_servicehosting_index.html.twig", "/var/www/modules/Servicehosting/html_admin/mod_servicehosting_index.html.twig");
    }
}
