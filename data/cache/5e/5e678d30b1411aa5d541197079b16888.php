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

/* mod_serviceproxmox_ipam.html.twig */
class __TwigTemplate_2f6f73d4cbab090fe98a05680e68ab45 extends Template
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
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_serviceproxmox_ipam.html.twig", 1)->unwrap();
        // line 6
        $context["active_menu"] = "proxmox";
        // line 2
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_serviceproxmox_ipam.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, __trans("Proxmox IP & Network management"), "html", null, true);
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
            <a class=\"nav-link active\" href=\"#tab-iprange\" data-bs-toggle=\"tab\">
                ";
        // line 12
        echo twig_escape_filter($this->env, __trans("IP Address Ranges"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-new-iprange\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 20
        echo twig_escape_filter($this->env, __trans("New IP Range"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-ipadress\" data-bs-toggle=\"tab\">
                ";
        // line 25
        echo twig_escape_filter($this->env, __trans("IP Addresses"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-new-ipadress\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 33
        echo twig_escape_filter($this->env, __trans("New IP Address"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-vlans\" data-bs-toggle=\"tab\">
                ";
        // line 38
        echo twig_escape_filter($this->env, __trans("VLANs"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-new-vlan\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 46
        echo twig_escape_filter($this->env, __trans("New Client VLAN"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-ipam-settings\" data-bs-toggle=\"tab\">
                ";
        // line 51
        echo twig_escape_filter($this->env, __trans("IPAM Settings"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>

    <div class=\"card\">
        <!-- ##############################################################################
                                        List IP Ranges
             ############################################################################## -->
        <div class=\"tab-content\">
            <div class=\"tab-pane fade show active\" id=\"tab-iprange\" role=\"tabpanel\">
                <div class=\"card-body\">
                    <h2>
                        ";
        // line 64
        echo twig_escape_filter($this->env, __trans("IP Ranges"), "html", null, true);
        echo "
                    </h2>
                </div>
                <div class=\"card-body\">
                    ";
        // line 68
        $context["ipranges"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_service_get_ip_ranges", [], "method", false, false, false, 68);
        // line 69
        echo "                    <div style=\"padding: 0.25rem 1.5rem\">
                        <strong>
                            All IP Ranges
                        </strong>
                    </div>
                    <table class=\"table card-table table-vcenter table-striped table-responsive text-nowrap\">
                        <thead>
                            <tr>
                                <th>
                                    ";
        // line 78
        echo twig_escape_filter($this->env, __trans("CIDR"), "html", null, true);
        echo "
                                </th>
                                <th>
                                    ";
        // line 81
        echo twig_escape_filter($this->env, __trans("Gateway"), "html", null, true);
        echo "
                                </th>
                                <th>
                                    ";
        // line 84
        echo twig_escape_filter($this->env, __trans("Broadcast"), "html", null, true);
        echo "
                                </th>
                                <th>
                                    ";
        // line 87
        echo twig_escape_filter($this->env, __trans("Type"), "html", null, true);
        echo "
                                </th>
                                <th class=\"w-1\"></th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ipranges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["iprange"]) {
            // line 94
            echo "                            <tr>
                                <td>
                                    ";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["iprange"], "cidr", [], "any", false, false, false, 96), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["iprange"], "gateway", [], "any", false, false, false, 99), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["iprange"], "broadcast", [], "any", false, false, false, 102), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["iprange"], "type", [], "any", false, false, false, 105), "html", null, true);
            echo "
                                </td>
                                <td>
                                    <a class=\"btn btn-icon\" href=\"";
            // line 108
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/serviceproxmox/ipam/iprange");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["iprange"], "id", [], "any", false, false, false, 108), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iprange'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- ##############################################################################
                                Form to create a new IP Network
             ############################################################################## -->
        <div class=\"tab-content\">
            <div class=\"tab-pane fade\" id=\"tab-new-iprange\" role=\"tabpanel\">
                <div class=\"card-body\">
                    <form method=\"post\" action=\"admin/serviceproxmox/ip_range_create\" class=\"api-form\" data-api-redirect=\"";
        // line 127
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("serviceproxmox/ipam");
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" />
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 131
        echo twig_escape_filter($this->env, __trans("CIDR"), "html", null, true);
        echo ":    
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" id='cidr' name=\"cidr\" value=\"/24\" required placeholder=\"";
        // line 134
        echo twig_escape_filter($this->env, __trans("Unique, non overlapping network in CIDR Notation (A.B.C.D/24)"), "html", null, true);
        echo "\">
                            <span id=\"cidr-validation-error\" style=\"display: none; color: red;\">Please enter a valid IP in CIDR notation.</span>
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 140
        echo twig_escape_filter($this->env, __trans("Gateway"), "html", null, true);
        echo ":
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text-area\" id='gateway' name=\"gateway\" value=\"\" required placeholder=\"";
        // line 143
        echo twig_escape_filter($this->env, __trans("Gateway"), "html", null, true);
        echo "\">
                            <span id=\"gateway-validation-error\" style=\"display: none; color: red;\">Please enter a valid Gateway IP.</span>
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 149
        echo twig_escape_filter($this->env, __trans("Subnet Size"), "html", null, true);
        echo ":                                                                    
                            </label>
                            <div class=\"col-md-5\">
                                <input id=\"subnet_size\" class=\"form-range\" type=\"range\" id='subnet_size' name=\"subnet_size\" value=\"1\" min=\"1\" max=\"24\" step=\"1\" oninput=\"updateOutput(this.value);\">
                            </div>
                            <div class=\"col-md-2\">
                                <output id=\"subnet_sizeOutput\" name=\"subnet_sizeOutput\" for=\"subnet_size\">
                                    1 Adress, /32
                                </output>
                            </div>                    
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 162
        echo twig_escape_filter($this->env, __trans("Network & Broadcast"), "html", null, true);
        echo ":
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text-area\" id='network' name=\"network\" value=\"\" required placeholder=\"";
        // line 165
        echo twig_escape_filter($this->env, __trans("Network"), "html", null, true);
        echo "\" readonly>
                            </div>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text-area\" id='broadcast' name=\"broadcast\" value=\"\" required placeholder=\"";
        // line 168
        echo twig_escape_filter($this->env, __trans("Broadcast"), "html", null, true);
        echo "\"  readonly>
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 173
        echo twig_escape_filter($this->env, __trans("IP Address Type"), "html", null, true);
        echo ":                                                                            
                            </label>
                            <div class=\"col\">
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" id=\"radioTypePublic\" type=\"radio\" name=\"type\" value=\"public\">
                                    <label class=\"form-check-label\" for=\"radioTypePublic\">
                                        ";
        // line 179
        echo twig_escape_filter($this->env, __trans("Public"), "html", null, true);
        echo "
                                    </label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" id=\"radioTypePrivate\" type=\"radio\" name=\"type\" value=\"private\" checked>
                                    <label class=\"form-check-label\" for=\"radioTypePrivate\">
                                        ";
        // line 185
        echo twig_escape_filter($this->env, __trans("Private"), "html", null, true);
        echo "
                                    </label>
                                </div>
                            </div>
                        </div>
                        <input type=\"submit\" value=\"";
        // line 190
        echo twig_escape_filter($this->env, __trans("Save IP Range"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                    </form>
                </div>
            </div>
        </div>
        <!-- ##############################################################################
                                    List IP Adresses
            ############################################################################## -->
            <div class=\"tab-content\">
             <div class=\"tab-pane fade show\" id=\"tab-ipadress\" role=\"tabpanel\">
                 <div class=\"card-body\">
                     <h2>
                         ";
        // line 202
        echo twig_escape_filter($this->env, __trans("IP Addresses"), "html", null, true);
        echo "
                     </h2>
                 </div>
                 <div class=\"card-body\">
                     ";
        // line 206
        $context["ipadresses"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_service_get_ip_adresses", [], "method", false, false, false, 206);
        // line 207
        echo "                     <div style=\"padding: 0.25rem 1.5rem\">
                         <strong>
                             All IP Adresses
                         </strong>
                     </div>
                     <table class=\"table card-table table-vcenter table-striped table-responsive text-nowrap\">
                         <thead>
                             <tr>
                                 <th>
                                     ";
        // line 216
        echo twig_escape_filter($this->env, __trans("IP"), "html", null, true);
        echo "
                                 </th>
                                 <th>
                                     ";
        // line 219
        echo twig_escape_filter($this->env, __trans("IP Range"), "html", null, true);
        echo "
                                 </th>
                                 <th>
                                     ";
        // line 222
        echo twig_escape_filter($this->env, __trans("Dedicated"), "html", null, true);
        echo "
                                 </th>
                                 <th>
                                     ";
        // line 225
        echo twig_escape_filter($this->env, __trans("Gateway"), "html", null, true);
        echo "
                                 </th>
                                 <th>
                                    ";
        // line 228
        echo twig_escape_filter($this->env, __trans("VLAN"), "html", null, true);
        echo "
                                </th>
                                 <th class=\"w-1\"></th>
                             </tr>
                         </thead>
                         <tbody>
                         ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ipadresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ipadress"]) {
            // line 235
            echo "                             <tr>
                                 <td>
                                     ";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ipadress"], "ip", [], "any", false, false, false, 237), "html", null, true);
            echo "
                                 </td>
                                 <td>
                                    // display the ip_range cidr for ipaddress.ip_range_id found in the ip_ranges variable
                                    ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ip_ranges"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ip_range"]) {
                // line 242
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["ip_range"], "id", [], "any", false, false, false, 242) == twig_get_attribute($this->env, $this->source, $context["ipadress"], "ip_range_id", [], "any", false, false, false, 242))) {
                    // line 243
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ip_range"], "cidr", [], "any", false, false, false, 243), "html", null, true);
                    echo "
                                        ";
                }
                // line 245
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ip_range'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "                                 </td>
                                 <td>
                                     ";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ipadress"], "dedicated", [], "any", false, false, false, 248), "html", null, true);
            echo "
                                 </td>
                                 <td>
                                     ";
            // line 251
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ipadress"], "gateway", [], "any", false, false, false, 251), "html", null, true);
            echo "
                                 </td>
                                 <td>
                                    ";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ipadress"], "vlan", [], "any", false, false, false, 254), "html", null, true);
            echo "
                                </td>
                                 <td>
                                     <a class=\"btn btn-icon\" href=\"";
            // line 257
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/serviceproxmox/ipam/ipadress");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ipadress"], "id", [], "any", false, false, false, 257), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ipadress'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
         <!-- ##############################################################################
                                 Form to create a new IP Adress
              ############################################################################## -->
         <div class=\"tab-content\">
             <div class=\"tab-pane fade\" id=\"tab-new-ipadress\" role=\"tabpanel\">
                 <div class=\"card-body\">
                     <form method=\"post\" action=\"admin/serviceproxmox/ipam/ipadress_create\" class=\"api-form\" data-api-redirect=\"";
        // line 276
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("serviceproxmox/ipam");
        echo "\">
                         <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 277
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" />
                         <div class=\"mb-3 row\">
                             <label class=\"form-label col-3 col-form-label\">
                                 ";
        // line 280
        echo twig_escape_filter($this->env, __trans("IP"), "html", null, true);
        echo ":    
                             </label>
                             <div class=\"col\">
                                 <input class=\"form-control\" type=\"text\" id='cidr' name=\"cidr\" value=\"\" required placeholder=\"";
        // line 283
        echo twig_escape_filter($this->env, __trans("Unique, non overlapping network in CIDR Notation (A.B.C.D/24)"), "html", null, true);
        echo "\">
                             </div>
                         </div>
                         <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 288
        echo twig_escape_filter($this->env, __trans("IP Range: "), "html", null, true);
        echo ":
                            </label>

                            <div class=\"col\">
                                <select class=\"form-select\" name=\"client_id\">
                                ";
        // line 293
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ipranges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["iprange"]) {
            // line 294
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["iprange"], "id", [], "any", false, false, false, 294), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["iprange"], "cidr", [], "any", false, false, false, 294), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["iprange"], "network", [], "any", false, false, false, 294), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["iprange"], "broadcast", [], "any", false, false, false, 294), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iprange'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "                                </select>
                            </div>
                        </div>
                         <div class=\"mb-3 row\">
                             <label class=\"form-label col-3 col-form-label\">
                                 ";
        // line 301
        echo twig_escape_filter($this->env, __trans("Dedicated IP Address"), "html", null, true);
        echo ":                                                                            
                             </label>
                             <div class=\"col\">
                                 <div class=\"form-check form-check-inline\">
                                     <input class=\"form-check-input\" id=\"radioTypePublic\" type=\"radio\" name=\"type\" value=\"1\">
                                     <label class=\"form-check-label\" for=\"radioTypePublic\">
                                         ";
        // line 307
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "
                                     </label>
                                 </div>
                                 <div class=\"form-check form-check-inline\">
                                     <input class=\"form-check-input\" id=\"radioTypePrivate\" type=\"radio\" name=\"type\" value=\"0\" checked>
                                     <label class=\"form-check-label\" for=\"radioTypePrivate\">
                                         ";
        // line 313
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "
                                     </label>
                                 </div>
                             </div>
                         </div>
                         <div class=\"mb-3 row\">
                             <label class=\"form-label col-3 col-form-label\">
                                 ";
        // line 320
        echo twig_escape_filter($this->env, __trans("Gateway "), "html", null, true);
        echo ":
                             </label>
                             <div class=\"col\">
                                 <input class=\"form-control\" type=\"text-area\" id='gateway' name=\"gateway\" value=\"\" required placeholder=\"";
        // line 323
        echo twig_escape_filter($this->env, __trans("Gateway"), "html", null, true);
        echo "\">
                             <span id=\"gateway-validation-error\" style=\"display: none; color: red;\">Please enter a valid Gateway IP.</span>
                             </div>
                         </div>
                         <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 329
        echo twig_escape_filter($this->env, __trans("VLAN: "), "html", null, true);
        echo ":
                            </label>
                            ";
        // line 331
        $context["client_vlans"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_service_get_vlans", [], "method", false, false, false, 331);
        // line 332
        echo "                            <div class=\"col\">
                                <select class=\"form-select\" name=\"client_id\">
                                ";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["client_vlans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["vlan"]) {
            // line 335
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vlan"], "id", [], "any", false, false, false, 335), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vlan"], "vlan", [], "any", false, false, false, 335), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vlan"], "client_name", [], "any", false, false, false, 335), "html", null, true);
            echo " </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vlan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "                                </select>
                            </div>
                        </div>
                         <input type=\"submit\" value=\"";
        // line 340
        echo twig_escape_filter($this->env, __trans("Save IP Range"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                     </form>
                 </div>
             </div>
         </div>
        <!-- ##############################################################################
        List Client VLANs
        ############################################################################## -->
        <div class=\"tab-content\">
            <div class=\"tab-pane fade show\" id=\"tab-vlans\" role=\"tabpanel\">
                <div class=\"card-body\">
                    <h2>
                        ";
        // line 352
        echo twig_escape_filter($this->env, __trans("VLANs"), "html", null, true);
        echo "
                    </h2>
                </div>
                <div class=\"card-body\">
   
                ";
        // line 357
        $context["client_vlans"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_service_get_vlans", [], "method", false, false, false, 357);
        // line 358
        echo "                    <div style=\"padding: 0.25rem 1.5rem\">
                        <strong>
                            All Client VLANs
                        </strong>
                    </div>
                    <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                        <thead>
                            <tr>
                            <th>
                            ";
        // line 367
        echo twig_escape_filter($this->env, __trans("Client"), "html", null, true);
        echo "
                            </th>
                            <th>
                            ";
        // line 370
        echo twig_escape_filter($this->env, __trans("VLAN ID"), "html", null, true);
        echo "
                            </th>
                            <th>
                            ";
        // line 373
        echo twig_escape_filter($this->env, __trans("IP Range"), "html", null, true);
        echo "
                            </th>
                            <th class=\"w-1\"></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 379
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["client_vlans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["client_vlan"]) {
            // line 380
            echo "                            <tr>
                                <td>
                                    ";
            // line 382
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client_vlan"], "client_name", [], "any", false, false, false, 382), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 385
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client_vlan"], "vlan", [], "any", false, false, false, 385), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 388
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client_vlan"], "ip_range", [], "any", false, false, false, 388), "html", null, true);
            echo "
                                </td>
                                <td>
                                    <a class=\"btn btn-icon\" href=\"";
            // line 391
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/serviceproxmox/ipam/client_vlan");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client_vlan"], "id", [], "any", false, false, false, 391), "html", null, true);
            echo "\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#edit\" />
                                        </svg>
                                    </a>
                                    <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
            // line 396
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("serviceproxmox/ipam");
            echo "\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/serviceproxmox/client_vlan_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["client_vlan"], "id", [], "any", false, false, false, 396), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#delete\" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client_vlan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 404
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- ##############################################################################
        Create new Client VLAN
        ############################################################################## -->
        <div class=\"tab-content\">
            <div class=\"tab-pane fade\" id=\"tab-new-vlan\" role=\"tabpanel\">
                <div class=\"card-body\">
                    <form method=\"post\" action=\"admin/serviceproxmox/client_vlan_create\" class=\"api-form\" data-api-redirect=\"";
        // line 415
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("serviceproxmox/ipam");
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 416
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" />
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 419
        echo twig_escape_filter($this->env, __trans("Client: "), "html", null, true);
        echo ":
                            </label>
                            ";
        // line 421
        $context["clients"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_get_list", [], "method", false, false, false, 421);
        // line 422
        echo "                            <div class=\"col\">
                                <select class=\"form-select\" name=\"client_id\">
                                ";
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["clients"] ?? null), "list", [], "any", false, false, false, 424));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 425
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 425), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 425), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "first_name", [], "any", false, false, false, 425), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "last_name", [], "any", false, false, false, 425), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 427
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 432
        echo twig_escape_filter($this->env, __trans("VLAN"), "html", null, true);
        echo ":
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"vlan\" id=\"vlan-input\" value=\"\" required placeholder=\"";
        // line 435
        echo twig_escape_filter($this->env, __trans("Unique VLAN ID"), "html", null, true);
        echo "\">
                                <span id=\"vlan-validation-error\" style=\"display: none; color: red;\">Please enter a valid VLAN ID (1-4096).</span>
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 441
        echo twig_escape_filter($this->env, __trans("IP Range"), "html", null, true);
        echo ":
                            </label>
                            <div class=\"col\">
                                <select class=\"form-select\" name=\"ip_range\">
                                    ";
        // line 445
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ipranges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["iprange"]) {
            // line 446
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["iprange"], "id", [], "any", false, false, false, 446), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["iprange"], "cidr", [], "any", false, false, false, 446), "html", null, true);
            echo "</option>
                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iprange'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 448
        echo "                                </select>
                            </div>
                        </div>
                        <input type=\"submit\" value=\"";
        // line 451
        echo twig_escape_filter($this->env, __trans("Save Client VLAN"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                    </form>
                </div>
            </div>
        </div>
    <!-- ##############################################################################
        IPAM Settings
        ############################################################################## -->
        <div class=\"tab-content\">
            <div class=\"tab-pane fade show\" id=\"tab-ipam-settings\" role=\"tabpanel\">
                <div class=\"card-body\">
                    <h2>
                        ";
        // line 463
        echo twig_escape_filter($this->env, __trans("IPAM Settings"), "html", null, true);
        echo "
                    </h2>
                </div>
                <div class=\"card-body\">
                    <form method=\"post\" action=\"admin/serviceproxmox/save_ipam_settings\" class=\"api-form\" data-api-redirect=\"";
        // line 467
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("serviceproxmox/ipam");
        echo "\">
                        <h3>Automation Settings</h3>
                        <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">
                            ";
        // line 471
        echo twig_escape_filter($this->env, __trans("Create a new VLAN for each customer?"), "html", null, true);
        echo ":                                                                            
                        </label>
                        <div class=\"col\">

                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" id=\"radioVLANPerCustomerYes\" type=\"radio\" name=\"vlan_per_customer\" value=\"1\">
                                    <label class=\"form-check-label\" for=\"radioVLANPerCustomerYes\">
                                        ";
        // line 478
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "
                                    </label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" id=\"radioVLANPerCustomerNo\" type=\"radio\" name=\"vlan_per_customer\" value=\"0\" checked>
                                    <label class=\"form-check-label\" for=\"radioVLANPerCustomerNo\">
                                        ";
        // line 484
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">
                            ";
        // line 491
        echo twig_escape_filter($this->env, __trans("Create a new IP Range for each customer?"), "html", null, true);
        echo ":                                                                            
                        </label>
                        <div class=\"col\">

                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" id=\"radioIPRangePerCustomerYes\" type=\"radio\" name=\"vlan_per_customer\" value=\"1\">
                                    <label class=\"form-check-label\" for=\"radioIPRangePerCustomerYes\">
                                        ";
        // line 498
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "
                                    </label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" id=\"radioIPRangePerCustomerNo\" type=\"radio\" name=\"vlan_per_customer\" value=\"0\" checked>
                                    <label class=\"form-check-label\" for=\"radioIPRangePerCustomerNo\">
                                        ";
        // line 504
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "
                                    </label>
                                </div>
                            </div>
                        </div>
                        <input type=\"submit\" value=\"";
        // line 509
        echo twig_escape_filter($this->env, __trans("Save Settings"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                    </form>
                </div>
                <div class=\"card-body\">

                </div>
                <div class=\"card-body\">

                </div>
            </div>
        </div>
    </div>
    ";
    }

    // line 523
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 524
        echo "<script>
    function calculateIPRange(ip, cidr) {
        var subnet = Math.pow(2, 32 - cidr);
        var ipLong = ip2long(ip);
    
        var ipStart = ipLong & (~(subnet - 1));
        var ipEnd = ipStart + subnet - 1;
    
        return [long2ip(ipStart), long2ip(ipEnd)];
    }
    
    function ip2long(ip) {
        var parts = ip.split('.');
        var result = 0;
        for (var i = 0; i < 4; i++) {
            result += parseInt(parts[i]) * Math.pow(2, 24 - (8 * i));
        }
        return result;
    }
    
    function long2ip(ip) {
        var result = [];
        for (var i = 3; i >= 0; i--) {
            var part = Math.floor(ip / Math.pow(2, 8 * i));
            ip -= part * Math.pow(2, 8 * i);
            result.push(part);
        }
        return result.join('.');
    }
    
    function isValidCIDR(cidr) {
        var ipPart = cidr.split('/')[0];
        var subnetPart = cidr.split('/')[1];
    
        var ipPattern = /^((25[0-5]|2[0-4][0-9]|1?[0-9]{1,2})\\.){3}(25[0-5]|2[0-4][0-9]|1?[0-9]{1,2})\$/;
        if (!ipPattern.test(ipPart)) {
            return false;
        }
    
        if (!subnetPart || isNaN(subnetPart) || parseInt(subnetPart) < 0 || parseInt(subnetPart) > 32) {
            return false;
        }
    
        return true;
    }
    
    function updateOutput(value) {
        var output = document.getElementById('subnet_sizeOutput');
        var cidrInput = document.getElementById('cidr');
        var ip = cidrInput.value.split('/')[0];
        var ipRange = calculateIPRange(ip, 32 - value);
    
        output.value = Math.pow(2, value) + ' Address(es), /' + (32 - value) + ', IP Range: ' + ipRange[0] + ' - ' + ipRange[1];
        cidrInput.value = ip + '/' + (32 - value);
        document.getElementById('network').value = ipRange[0];
        document.getElementById('broadcast').value = ipRange[1];
        var gatewayInput = document.getElementById('gateway');
        var errorSpan = document.getElementById('gateway-validation-error');
        var gatewayIpLong = ip2long(gatewayInput.value);
        var ipStartLong = ip2long(ipRange[0]);
        var ipEndLong = ip2long(ipRange[1]);
        var nextIpLong = ip2long(ipRange[0]) + 1;
        gatewayInput.placeholder = long2ip(nextIpLong);
        if (gatewayIpLong < ipStartLong || gatewayIpLong > ipEndLong) {
            gatewayInput.setCustomValidity('The gateway IP is not within the network range!');
            errorSpan.style.display = 'block';
        } else {
            gatewayInput.setCustomValidity('');
            errorSpan.style.display = 'none';
        }
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        var subnetSizeInput = document.getElementById('subnet_size');
        var cidrInput = document.getElementById('cidr');
    
        var cidr = parseInt(cidrInput.value.split('/')[1]);
        subnetSizeInput.value = 32 - cidr;
        updateOutput(subnetSizeInput.value);
    
        subnetSizeInput.addEventListener('input', function() {
            updateOutput(this.value);
        })
    })
    
    document.getElementById('cidr').addEventListener('input', function() {
        var cidrInput = this.value;
        var errorSpan = document.getElementById('cidr-validation-error');
        if (!isValidCIDR(cidrInput)) {
            this.setCustomValidity('Please specify a valid IP in CIDR Notation (A.B.C.D/24)!');
            errorSpan.style.display = 'block';
        } else {
            var subnetSizeInput = document.getElementById('subnet_size');
            var ip = cidrInput.split('/')[0];
            subnetSizeInput.value = 32 - cidrInput.split('/')[1];
            updateOutput(subnetSizeInput.value);
            this.setCustomValidity('');
            errorSpan.style.display = 'none';
        }
    
    });
    document.getElementById('gateway').addEventListener('input', function() {
        var subnetSizeInput = document.getElementById('subnet_size');
        var cidrInput = document.getElementById('cidr');
        var ip = cidrInput.value.split('/')[0];
        subnetSizeInput.value = 32 - cidrInput.value.split('/')[1];
    
        var ipRange = calculateIPRange(ip, 32 - subnetSizeInput.value);
        var gatewayInput = document.getElementById('gateway');
        var errorSpan = document.getElementById('gateway-validation-error');
        var gatewayIpLong = ip2long(gatewayInput.value);
    
        var ipStartLong = ip2long(ipRange[0]);
        var ipEndLong = ip2long(ipRange[1]);
        if (gatewayIpLong < ipStartLong || gatewayIpLong > ipEndLong) {
            gatewayInput.setCustomValidity('The gateway IP is not within the network range!');
            errorSpan.style.display = 'block';
        } else {
            gatewayInput.setCustomValidity('');
            errorSpan.style.display = 'none';
        }
    })
    
    document.getElementById('vlan-input').addEventListener('input', function() {
        var input = document.getElementById('vlan-input');
        var value = input.value.trim();
        var errorSpan = document.getElementById('vlan-validation-error');
        var isNumber = /^\\d+\$/.test(value);
    
        if (!isNumber || parseInt(value) <= 0 || parseInt(value) > 4096) {
            errorSpan.style.display = 'block';
            input.setCustomValidity('Invalid VLAN ID');
        } else {
            errorSpan.style.display = 'none';
            input.setCustomValidity('');
        }
    })
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_serviceproxmox_ipam.html.twig";
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
        return array (  962 => 524,  958 => 523,  941 => 509,  933 => 504,  924 => 498,  914 => 491,  904 => 484,  895 => 478,  885 => 471,  878 => 467,  871 => 463,  856 => 451,  851 => 448,  840 => 446,  836 => 445,  829 => 441,  820 => 435,  814 => 432,  807 => 427,  792 => 425,  788 => 424,  784 => 422,  782 => 421,  777 => 419,  771 => 416,  767 => 415,  754 => 404,  736 => 396,  726 => 391,  720 => 388,  714 => 385,  708 => 382,  704 => 380,  700 => 379,  691 => 373,  685 => 370,  679 => 367,  668 => 358,  666 => 357,  658 => 352,  643 => 340,  638 => 337,  625 => 335,  621 => 334,  617 => 332,  615 => 331,  610 => 329,  601 => 323,  595 => 320,  585 => 313,  576 => 307,  567 => 301,  560 => 296,  545 => 294,  541 => 293,  533 => 288,  525 => 283,  519 => 280,  513 => 277,  509 => 276,  496 => 265,  480 => 257,  474 => 254,  468 => 251,  462 => 248,  458 => 246,  452 => 245,  446 => 243,  443 => 242,  439 => 241,  432 => 237,  428 => 235,  424 => 234,  415 => 228,  409 => 225,  403 => 222,  397 => 219,  391 => 216,  380 => 207,  378 => 206,  371 => 202,  356 => 190,  348 => 185,  339 => 179,  330 => 173,  322 => 168,  316 => 165,  310 => 162,  294 => 149,  285 => 143,  279 => 140,  270 => 134,  264 => 131,  258 => 128,  254 => 127,  241 => 116,  225 => 108,  219 => 105,  213 => 102,  207 => 99,  201 => 96,  197 => 94,  193 => 93,  184 => 87,  178 => 84,  172 => 81,  166 => 78,  155 => 69,  153 => 68,  146 => 64,  130 => 51,  122 => 46,  111 => 38,  103 => 33,  92 => 25,  84 => 20,  73 => 12,  68 => 9,  64 => 8,  57 => 4,  53 => 3,  48 => 2,  46 => 6,  44 => 1,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_serviceproxmox_ipam.html.twig", "/var/www/modules/Serviceproxmox/html_admin/mod_serviceproxmox_ipam.html.twig");
    }
}
