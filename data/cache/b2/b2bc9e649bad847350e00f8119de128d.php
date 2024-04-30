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

/* mod_serviceproxmox_index.html.twig */
class __TwigTemplate_3d86d340c90e44294e541168cf9864e4 extends Template
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
        // line 2
        return "layout_default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_serviceproxmox_index.html.twig", 1)->unwrap();
        // line 6
        $context["active_menu"] = "proxmox";
        // line 2
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_serviceproxmox_index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, __trans("Proxmox servers"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-index\" data-bs-toggle=\"tab\">
                ";
        // line 12
        echo twig_escape_filter($this->env, __trans("Server list"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-new-server\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 20
        echo twig_escape_filter($this->env, __trans("New server"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-storage\" data-bs-toggle=\"tab\">
                ";
        // line 25
        echo twig_escape_filter($this->env, __trans("Storage"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-services\" data-bs-toggle=\"tab\">
                ";
        // line 30
        echo twig_escape_filter($this->env, __trans("Provisioned Services"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>



    <div class=\"card\">
        <div class=\"tab-content\">
            <div class=\"card-header d-flex justify-content-between\">
                <span></span> <!-- Empty for alignment purposes -->
                <div class=\"d-flex align-items-center\">
                    <span id=\"toggle-label\" style=\"padding-right: 10px;\">Show help</span>
                    <label class=\"switch\">
                        <input type=\"checkbox\" id=\"slide-toggle\">
                        <span class=\"slider round\"></span>
                    </label>
                </div>
            </div>
        <!-- ##############################################################################
                                                List Servers
             ############################################################################## -->
            <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
                <div class=\"card-body\">
                    <h2>
                        ";
        // line 55
        echo twig_escape_filter($this->env, __trans("Proxmox Servers"), "html", null, true);
        echo "
                    </h2>
                </div>

                ";
        // line 59
        $context["servers_grouped"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_server_get_list", [], "method", false, false, false, 59);
        // line 60
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["servers_grouped"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 61
            echo "                <div style=\"padding: 0.25rem 1.5rem\">
                    <strong> ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "group", [], "any", false, false, false, 62), "html", null, true);
            echo "</strong> group
                </div>
            
                <table class=\"table card-table table-vcenter table-striped table-responsive text-nowrap\">
                <div class=\"help-section d-none\" style=\"padding-left:10px;padding-bottom:10px;\">
                <div style=\"padding-left:15px;padding-top:8px;padding-bottom:10px;\">
                    Legend: &nbsp;
                    <svg class=\"icon\">
                        <use xlink:href=\"#wifi\" />
                    </svg>
                    Test Connection &nbsp;&nbsp;|&nbsp;&nbsp;
                    <svg class=\"icon\">
                        <use xlink:href=\"#arrow-back-up\" />
                    </svg>
                    Prepare Server &nbsp;&nbsp;|&nbsp;&nbsp;
                    <svg class=\"icon\">
                        <use xlink:href=\"#edit\" />
                    </svg>
                    Edit Server &nbsp;&nbsp;|&nbsp;&nbsp;
                    <svg class=\"icon\">
                        <use xlink:href=\"#delete\" />
                    </svg>
                    Delete Server
                </div>
                </div>
                    <thead>
                        <tr>
                            <th>
                                ";
            // line 90
            echo twig_escape_filter($this->env, __trans("ID"), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 93
            echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 96
            echo twig_escape_filter($this->env, __trans("Hostname"), "html", null, true);
            echo "
                            </th>
                            <th>
                                ";
            // line 99
            echo twig_escape_filter($this->env, __trans("IPv4"), "html", null, true);
            echo "
                            </th>
                            <th style=\"text-align: center;\">
                                ";
            // line 102
            echo twig_escape_filter($this->env, __trans("VMs"), "html", null, true);
            echo "
                            </th>
                            <th style=\"text-align: center;\">
                                 ";
            // line 105
            echo twig_escape_filter($this->env, __trans("CPU"), "html", null, true);
            echo "
                            </th>
                            <th style=\"text-align: center;\">
                                ";
            // line 108
            echo twig_escape_filter($this->env, __trans("RAM"), "html", null, true);
            echo "
                            </th>
                            <th style=\"text-align: center;\">
                                ";
            // line 111
            echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
            echo "
                            </th>
                            <th class=\"w-1\"></th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "servers", [], "any", false, false, false, 117));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 118
                echo "                        <tr>
                            <td>
                                <a href=\"";
                // line 120
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/serviceproxmox/server");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 120), "html", null, true);
                echo "\">
                                    ";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 121), "html", null, true);
                echo "
                                </a>
                            </td>
                            <td>
                                ";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "name", [], "any", false, false, false, 125), "html", null, true);
                echo "
                            </td>
                            <td>
                                <a href=\"https://";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "access", [], "any", false, false, false, 128), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 128), "html", null, true);
                echo "\" target=\"_blank\">
                                    ";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "hostname", [], "any", false, false, false, 129), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "port", [], "any", false, false, false, 129), "html", null, true);
                echo "
                                </a>
                            </td>
                            <td>
                                ";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "ipv4", [], "any", false, false, false, 133), "html", null, true);
                echo "
                            </td>
                            <td style=\"text-align: center;\">
                                ";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "vm_count", [], "any", false, false, false, 136), "html", null, true);
                echo "
                            </td>
                            <td style=\"text-align: center;\">
                                ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "cpu_cores_allocated", [], "any", false, false, false, 139), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "cpu_cores_overprovision", [], "any", false, false, false, 139), "html", null, true);
                echo " <br/>
                                (Phy: ";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "cpu_cores", [], "any", false, false, false, 140), "html", null, true);
                echo ")
                            </td>
                            <td style=\"text-align: center;\">
                                ";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "ram_used", [], "any", false, false, false, 143), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "ram_overprovision", [], "any", false, false, false, 143), "html", null, true);
                echo " GB <br/>
                                (Phy: ";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "ram", [], "any", false, false, false, 144), "html", null, true);
                echo " GB)
                                <div style=\"margin-top: 5px;\"></div>
                                    <div class=\"progress progress-sm\">
                                        <div class=\"progress-bar\" style=\"width: ";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "ram_percent", [], "any", false, false, false, 147), "html", null, true);
                echo "%; padding-top: 5px;\">

                                        </div>
                                    </div>
                                </div>
                            </td>
                            ";
                // line 153
                if ((twig_get_attribute($this->env, $this->source, $context["server"], "active", [], "any", false, false, false, 153) == 1)) {
                    // line 154
                    echo "                            <td style=\"text-align: center;\">
                                <span class=\"badge bg-success me-1\"></span>
                            </td>
                            ";
                } else {
                    // line 158
                    echo "                            <td style=\"text-align: center;\">
                                <span class=\"badge bg-fail me-1\"></span>
                            </td>
                            ";
                }
                // line 162
                echo "                            <td>
                                <a class=\"btn btn-icon api-link\" href=\"";
                // line 163
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/serviceproxmox/server_test_connection", ["id" => twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 163), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, __trans("Test connection"), "html", null, true);
                echo "\" data-api-msg=\"";
                echo twig_escape_filter($this->env, __trans("Server connected"), "html", null, true);
                echo "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#wifi\" />
                                    </svg>
                                </a>
                                <a class=\"btn btn-icon api-link\" href=\"";
                // line 168
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/serviceproxmox/server_prepare_pve_setup", ["id" => twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 168), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, __trans("Prepare Server"), "html", null, true);
                echo "\" data-api-msg=\"";
                echo twig_escape_filter($this->env, __trans("Server prepared"), "html", null, true);
                echo "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#arrow-back-up\"/>
                                    </svg>
                                </a>
                                <a class=\"btn btn-icon\" href=\"";
                // line 173
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/serviceproxmox/server");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 173), "html", null, true);
                echo "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#edit\" />
                                    </svg>
                                </a>
                                <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
                // line 178
                echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
                echo "\" data-api-redirect=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("serviceproxmox");
                echo "\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/serviceproxmox/server_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["server"], "id", [], "any", false, false, false, 178), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
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
                // line 186
                echo "                        <tr>
                            <td class=\"text-muted\" colspan=\"7\">
                                ";
                // line 188
                echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
                echo "
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "                    </tbody>
                </table>
<br><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "            </div>

        </div>

 
        <!-- ##############################################################################
                                                Add new Server
             ############################################################################## -->
        <div class=\"tab-content\">
            <div class=\"tab-pane fade\" id=\"tab-new-server\" role=\"tabpanel\">
                <div class=\"card-body\">
                    <form method=\"post\" action=\"admin/serviceproxmox/server_create\" class=\"api-form\" data-api-redirect=\"";
        // line 207
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("serviceproxmox");
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" />
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 211
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo ":    
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"name\" value=\"\" required placeholder=\"";
        // line 214
        echo twig_escape_filter($this->env, __trans("Unique name to identify this server"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 219
        echo twig_escape_filter($this->env, __trans("Group"), "html", null, true);
        echo ":
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"group\" value=\"\" required placeholder=\"";
        // line 222
        echo twig_escape_filter($this->env, __trans("Server group"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 227
        echo twig_escape_filter($this->env, __trans("Hostname"), "html", null, true);
        echo ":                                                                    
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"hostname\" value=\"\" required placeholder=\"";
        // line 230
        echo twig_escape_filter($this->env, __trans("server1.yourserverdomain.com"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 235
        echo twig_escape_filter($this->env, __trans("Port"), "html", null, true);
        echo ":                                                                    
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"port\" value=\"\" required placeholder=\"";
        // line 238
        echo twig_escape_filter($this->env, __trans("8006"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 243
        echo twig_escape_filter($this->env, __trans("IPv4 address"), "html", null, true);
        echo ":                                                                            
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"ipv4\" value=\"\" required placeholder=\"";
        // line 246
        echo twig_escape_filter($this->env, __trans("Primary IPv4 address of the server"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 251
        echo twig_escape_filter($this->env, __trans("IPv6 address"), "html", null, true);
        echo ":                                                                                    
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"ipv6\" value=\"\" placeholder=\"";
        // line 254
        echo twig_escape_filter($this->env, __trans("Primary IPv6 address of the server"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 259
        echo twig_escape_filter($this->env, __trans("Proxmox user realm"), "html", null, true);
        echo ":
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"realm\" value=\"pam\" required placeholder=\"pam\">
                            </div>
                        </div>
                        <!-- Add radio buttons for auth type (username & password or token) -->

                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 269
        echo twig_escape_filter($this->env, __trans("Authentication Type"), "html", null, true);
        echo ":
                            </label>
                            <div class=\"col\">
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"auth_type\" id=\"username\" value=\"username\">
                                    <label class=\"form-check-label\" for=\"username\">";
        // line 274
        echo twig_escape_filter($this->env, __trans("Username / Password"), "html", null, true);
        echo "</label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"auth_type\" id=\"token\" value=\"token\">
                                    <label class=\"form-check-label\" for=\"token\">";
        // line 278
        echo twig_escape_filter($this->env, __trans("Token"), "html", null, true);
        echo "</label>
                                </div>
                            </div>
                        </div>


                        <div class=\"mb-3 row\" name=\"user_name_field\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 286
        echo twig_escape_filter($this->env, __trans("Root user"), "html", null, true);
        echo ":
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"root_user\" value=\"root\"  placeholder=\"";
        // line 289
        echo twig_escape_filter($this->env, __trans("Root username"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\"name=\"password_field\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 294
        echo twig_escape_filter($this->env, __trans("Root password"), "html", null, true);
        echo ":
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"password\" name=\"root_password\" value=\"\" >
                                <div class=\"help-section help-texts d-none\" style=\"padding-left:15px;padding-top:8px;padding-bottom:10px;\">
                                    <span>This password will only be used to create the access tokens on the pve server.</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"mb-3 row\" name=\"token_name_field\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 305
        echo twig_escape_filter($this->env, __trans("Token name"), "html", null, true);
        echo ":
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"token_name\" value=\"\"  placeholder=\"";
        // line 308
        echo twig_escape_filter($this->env, __trans("Token name"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\" name=\"token_value_field\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 313
        echo twig_escape_filter($this->env, __trans("Token value"), "html", null, true);
        echo ":
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"password\" name=\"token_value\" placeholder=\"token\" >
                                <div class=\"help-section help-texts d-none\" style=\"padding-left:15px;padding-top:8px;padding-bottom:10px;\">
                                    <span>This token will be used to authenticate with the pve server.</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 324
        echo twig_escape_filter($this->env, __trans("Enable / Disable"), "html", null, true);
        echo ":
                            </label>
                            <div class=\"col\">
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" id=\"radioActiveYes\" type=\"radio\" name=\"active\" value=\"1\" checked>
                                    <label class=\"form-check-label\" for=\"radioActiveYes\">
                                        ";
        // line 330
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "
                                    </label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" id=\"radioActiveNo\" type=\"radio\" name=\"active\" value=\"0\">
                                    <label class=\"form-check-label\" for=\"radioActiveNo\">
                                        ";
        // line 336
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "
                                    </label>
                                </div>
                            </div>
                        </div>
                        <input type=\"submit\" value=\"";
        // line 341
        echo twig_escape_filter($this->env, __trans("Add server"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                    </form>
                </div>
            </div>
        </div>
        <!-- ##############################################################################
                                            Storage Overview
            ############################################################################## -->
        <div class=\"tab-content\">
            <div class=\"tab-pane fade show\" id=\"tab-storage\" role=\"tabpanel\">
                <div class=\"card-body\">
                    <h2>
                        ";
        // line 353
        echo twig_escape_filter($this->env, __trans("Proxmox Storage list"), "html", null, true);
        echo "
                    </h2>
                </div>

                ";
        // line 357
        $context["storages_grouped"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_storage_get_list", [], "method", false, false, false, 357);
        // line 358
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["storages_grouped"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 359
            echo "\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t<strong>";
            // line 361
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "group", [], "any", false, false, false, 361), "html", null, true);
            echo " Storages</strong>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table card-table table-vcenter table-striped table-responsive text-nowrap\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 368
            echo twig_escape_filter($this->env, __trans("Storage"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 371
            echo twig_escape_filter($this->env, __trans("Servername"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 374
            echo twig_escape_filter($this->env, __trans("Content"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th style=\"text-align: right;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 377
            echo twig_escape_filter($this->env, __trans("Storage Space"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 380
            echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"w-1\">
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
            // line 387
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["type"], "storages", [], "any", false, false, false, 387));
            foreach ($context['_seq'] as $context["_key"] => $context["storage"]) {
                // line 388
                echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 390
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["storage"], "name", [], "any", false, false, false, 390), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 393
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["storage"], "servername", [], "any", false, false, false, 393), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 396
                $context["content"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["storage"], "content", [], "any", false, false, false, 396), ",");
                // line 397
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 398
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                    echo " <br>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 400
                echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center; width: 3em;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 402
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["storage"], "used", [], "any", false, false, false, 402), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["storage"], "size", [], "any", false, false, false, 402), "html", null, true);
                echo " GB
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" style=\"width: ";
                // line 404
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["storage"], "percent_used", [], "any", false, false, false, 404), "html", null, true);
                echo "%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 408
                if ((twig_get_attribute($this->env, $this->source, $context["storage"], "active", [], "any", false, false, false, 408) == 1)) {
                    // line 409
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 411
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-fail me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 413
                echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-icon\" href=\"";
                // line 415
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/serviceproxmox/storage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["storage"], "id", [], "any", false, false, false, 415), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"#edit\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['storage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 423
            echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 428
        echo "            </div>
        </div>
        <!-- ##############################################################################
                                        List of active Services
             ############################################################################## -->
        <div class=\"tab-content\">
            <div class=\"tab-pane fade show\" id=\"tab-services\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h2>
                    ";
        // line 437
        echo twig_escape_filter($this->env, __trans("Servicelist"), "html", null, true);
        echo "
                </h2>
            </div>

            ";
        // line 441
        $context["services"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_service_proxmox_get_list", [], "method", false, false, false, 441);
        // line 442
        echo "            
            <div style=\"padding: 0.25rem 1.5rem\">
                <strong>
                    All Services 
                </strong>
            </div>
            <table class=\"table card-table table-vcenter table-striped table-responsive text-nowrap\">
                <thead>
                    <tr>
                        <th>
                            ";
        // line 452
        echo twig_escape_filter($this->env, __trans("Server"), "html", null, true);
        echo "
                        </th>
                        <th>
                            ";
        // line 455
        echo twig_escape_filter($this->env, __trans("VM ID"), "html", null, true);
        echo "
                        </th>
                        <th>
                            ";
        // line 458
        echo twig_escape_filter($this->env, __trans("Host Name"), "html", null, true);
        echo "
                        </th>
                        <th>
                            ";
        // line 461
        echo twig_escape_filter($this->env, __trans("CPU Cores"), "html", null, true);
        echo "
                        </th>
                        <th>
                            ";
        // line 464
        echo twig_escape_filter($this->env, __trans("RAM"), "html", null, true);
        echo "
                        </th>
                        <th>
                            ";
        // line 467
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "
                        </th>
                        <th>
                            ";
        // line 470
        echo twig_escape_filter($this->env, __trans("Created At"), "html", null, true);
        echo "
                        </th>
                        <th class=\"w-1\"></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 476
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 477
            echo "                    <tr>
                        <td>
                            ";
            // line 479
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "server_id", [], "any", false, false, false, 479), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 482
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 482), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 485
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "hostname", [], "any", false, false, false, 485), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 488
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "cores", [], "any", false, false, false, 488), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 491
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "ram", [], "any", false, false, false, 491), "html", null, true);
            echo " MB
                        </td>
                        <td>
                            ";
            // line 494
            if ((twig_get_attribute($this->env, $this->source, $context["service"], "status", [], "any", false, false, false, 494) == "running")) {
                // line 495
                echo "                                <span class=\"badge bg-success me-1\"></span>
                            ";
            } else {
                // line 497
                echo "                                <span class=\"badge bg-fail me-1\"></span>
                            ";
            }
            // line 499
            echo "                        </td>
                        <td>
                            ";
            // line 501
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "created_at", [], "any", false, false, false, 501), "html", null, true);
            echo "
                        </td> 
                        <td>
                            <a class=\"btn btn-icon\" href=\"";
            // line 504
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/serviceproxmox/storage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["storage"] ?? null), "id", [], "any", false, false, false, 504), "html", null, true);
            echo "\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#edit\" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 512
        echo "                </tbody>
            </table>
        </div>
    </div>
";
    }

    // line 517
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 518
        echo "<style>
    /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 30px; /* Reduced size */
  height: 17px; /* Reduced size */
}

  
  /* Hide default HTML checkbox */
  .switch input {
    opacity: 0;
    width: 0;
    height: 0;
  }
  
  /* The slider */
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  .slider:before {
    position: absolute;
    content: \"\";
    height: 13px; /* Reduced size */
  width: 13px; /* Reduced size */
  left: 2px; /* Adjusted positioning */
  bottom: 2px; /* Adjusted positioning */
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  input:checked + .slider {
    background-color: #2196F3;
  }
  
  input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
  }
  
  input:checked + .slider:before {
    -webkit-transform: translateX(13px); /* Adjusted slide distance */
  -ms-transform: translateX(13px); /* Adjusted slide distance */
  transform: translateX(13px); /* Adjusted slide distance */
  }
  
  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }
  
  .slider.round:before {
    border-radius: 50%;
  }
  .help-texts {
    color: #206BC4;
    font-style:italic;
}

</style>
<script>
    \$(document).ready(function() {
        \$('#slide-toggle').on('change', function() {
            \$('.help-section').toggleClass('d-none');
    
            if (\$('#slide-toggle').prop('checked')) {
                \$('#toggle-label').text('Hide help');
            } else {
                \$('#toggle-label').text('Show help');
            }
        });
        document.getElementsByName(\"user_name_field\")[0].hidden = true;
        document.getElementsByName(\"password_field\")[0].hidden = true;
        document.getElementsByName(\"token_name_field\")[0].hidden = true;
        document.getElementsByName(\"token_value_field\")[0].hidden = true;
    });
    
    var username = document.getElementById(\"username\");
    var token = document.getElementById(\"token\");
    
    username.addEventListener(\"click\", function() {
        document.getElementsByName(\"user_name_field\")[0].hidden = false;
        document.getElementsByName(\"password_field\")[0].hidden = false;
        document.getElementsByName(\"token_name_field\")[0].hidden = true;
        document.getElementsByName(\"token_value_field\")[0].hidden = true;
    });
    
    token.addEventListener(\"click\", function() {
        document.getElementsByName(\"user_name_field\")[0].hidden = true;
        document.getElementsByName(\"password_field\")[0].hidden = true;
        document.getElementsByName(\"token_name_field\")[0].hidden = false;
        document.getElementsByName(\"token_value_field\")[0].hidden = false;
    });
</script> 
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_serviceproxmox_index.html.twig";
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
        return array (  968 => 518,  964 => 517,  956 => 512,  940 => 504,  934 => 501,  930 => 499,  926 => 497,  922 => 495,  920 => 494,  914 => 491,  908 => 488,  902 => 485,  896 => 482,  890 => 479,  886 => 477,  882 => 476,  873 => 470,  867 => 467,  861 => 464,  855 => 461,  849 => 458,  843 => 455,  837 => 452,  825 => 442,  823 => 441,  816 => 437,  805 => 428,  795 => 423,  779 => 415,  775 => 413,  771 => 411,  767 => 409,  765 => 408,  758 => 404,  751 => 402,  747 => 400,  738 => 398,  733 => 397,  731 => 396,  725 => 393,  719 => 390,  715 => 388,  711 => 387,  701 => 380,  695 => 377,  689 => 374,  683 => 371,  677 => 368,  667 => 361,  663 => 359,  658 => 358,  656 => 357,  649 => 353,  634 => 341,  626 => 336,  617 => 330,  608 => 324,  594 => 313,  586 => 308,  580 => 305,  566 => 294,  558 => 289,  552 => 286,  541 => 278,  534 => 274,  526 => 269,  513 => 259,  505 => 254,  499 => 251,  491 => 246,  485 => 243,  477 => 238,  471 => 235,  463 => 230,  457 => 227,  449 => 222,  443 => 219,  435 => 214,  429 => 211,  423 => 208,  419 => 207,  406 => 196,  397 => 192,  387 => 188,  383 => 186,  366 => 178,  356 => 173,  344 => 168,  332 => 163,  329 => 162,  323 => 158,  317 => 154,  315 => 153,  306 => 147,  300 => 144,  294 => 143,  288 => 140,  282 => 139,  276 => 136,  270 => 133,  261 => 129,  255 => 128,  249 => 125,  242 => 121,  236 => 120,  232 => 118,  227 => 117,  218 => 111,  212 => 108,  206 => 105,  200 => 102,  194 => 99,  188 => 96,  182 => 93,  176 => 90,  145 => 62,  142 => 61,  137 => 60,  135 => 59,  128 => 55,  100 => 30,  92 => 25,  84 => 20,  73 => 12,  68 => 9,  64 => 8,  57 => 4,  53 => 3,  48 => 2,  46 => 6,  44 => 1,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_serviceproxmox_index.html.twig", "/var/www/modules/Serviceproxmox/html_admin/mod_serviceproxmox_index.html.twig");
    }
}
