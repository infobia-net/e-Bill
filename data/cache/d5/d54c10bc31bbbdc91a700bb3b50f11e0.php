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

/* mod_serviceproxmox_templates.html.twig */
class __TwigTemplate_0298850c9e8d9e7d64c01b91d9abff56 extends Template
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
        // line 2
        return "layout_default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_serviceproxmox_templates.html.twig", 1)->unwrap();
        // line 6
        $context["active_menu"] = "proxmox";
        // line 2
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_serviceproxmox_templates.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, __trans("Proxmox Configuration Templates"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <ol class=\"breadcrumb\">
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
        <li class=\"breadcrumb-item active\" aria-current=\"page\">Proxmox Configuration Templates</li>
    </ol>
";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-vmtemplates\" data-bs-toggle=\"tab\">
                ";
        // line 23
        echo twig_escape_filter($this->env, __trans("VM Config Templates"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-new-vmtemplate\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 31
        echo twig_escape_filter($this->env, __trans("New VM Template"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-lxctemplates\" data-bs-toggle=\"tab\">
                ";
        // line 36
        echo twig_escape_filter($this->env, __trans("LXC Config Templates"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-new-lxctemplate\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 44
        echo twig_escape_filter($this->env, __trans("New LXC Template"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
        <a class=\"nav-link\" href=\"#tab-appliance-templatevm\" data-bs-toggle=\"tab\">
            ";
        // line 49
        echo twig_escape_filter($this->env, __trans("Appliances & Template VMs"), "html", null, true);
        echo "
        </a>
    </li>
    </ul>

    <div class=\"card\">
        <!-- ##############################################################################
                                        List VM Templates
             ############################################################################## -->
        <div class=\"tab-content\">
            <div class=\"tab-pane fade show active\" id=\"tab-vmtemplates\" role=\"tabpanel\">
                <div class=\"card-body\">
                    <h2>
                        ";
        // line 62
        echo twig_escape_filter($this->env, __trans("VM Config Templates"), "html", null, true);
        echo "
                    </h2>
                </div>

                ";
        // line 66
        $context["vmtemplates"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_service_get_vmtemplates", [], "method", false, false, false, 66);
        // line 67
        echo "                <div style=\"padding: 0.25rem 1.5rem\">
                    <strong>
                        All VM Config Templates 
                    </strong>
                </div>
                <table class=\"table card-table table-vcenter table-striped table-responsive text-nowrap\">
                    <thead>
                        <tr>
                            <th>
                                ";
        // line 76
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo "
                            </th>
                            <th>
                                ";
        // line 79
        echo twig_escape_filter($this->env, __trans("Description"), "html", null, true);
        echo "
                            </th>
                            <th>
                                ";
        // line 82
        echo twig_escape_filter($this->env, __trans("CPU Cores"), "html", null, true);
        echo "
                            </th>
                            <th>
                                ";
        // line 85
        echo twig_escape_filter($this->env, __trans("Memory"), "html", null, true);
        echo "
                            </th>
                            <th>
                                ";
        // line 88
        echo twig_escape_filter($this->env, __trans("Storage"), "html", null, true);
        echo "
                            </th>
                            <th>
                                ";
        // line 91
        echo twig_escape_filter($this->env, __trans("Created at"), "html", null, true);
        echo "
                            </th>
                            <th class=\"w-1\"></th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vmtemplates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 98
            echo "                        <tr>
                            <td>
                                ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "name", [], "any", false, false, false, 100), "html", null, true);
            echo " - 
                                ";
            // line 101
            if ((twig_get_attribute($this->env, $this->source, $context["template"], "state", [], "any", false, false, false, 101) == "draft")) {
                // line 102
                echo "                                ";
                $context["statusClass"] = "badge bg-secondary";
                // line 103
                echo "                              ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["template"], "state", [], "any", false, false, false, 103) == "active")) {
                // line 104
                echo "                                ";
                $context["statusClass"] = "badge bg-success";
                // line 105
                echo "                              ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["template"], "state", [], "any", false, false, false, 105) == "inactive")) {
                // line 106
                echo "                                ";
                $context["statusClass"] = "badge bg-danger";
                // line 107
                echo "                              ";
            }
            // line 108
            echo "                              
                              <span class=\"";
            // line 109
            echo twig_escape_filter($this->env, ($context["statusClass"] ?? null), "html", null, true);
            echo "\" style=\"color: #FFF;\">
                                ";
            // line 110
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "state", [], "any", false, false, false, 110)), "html", null, true);
            echo "
                              </span> 
                            </td>
                            <td>
                                ";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "description", [], "any", false, false, false, 114), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "cores", [], "any", false, false, false, 117), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "memory", [], "any", false, false, false, 120), "html", null, true);
            echo " GB
                            </td>
                            <td>
                                ";
            // line 128
            echo "                            </td>
                            <td>
                                ";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "created_at", [], "any", false, false, false, 130), "html", null, true);
            echo "
                            </td>

                            <td>
                                <a class=\"btn btn-icon\" href=\"";
            // line 134
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/serviceproxmox/templates/vm_config");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "id", [], "any", false, false, false, 134), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <!-- ##############################################################################
                                        Form to create a new VM Template 
             ############################################################################## -->
        <div class=\"tab-content\">
            <div class=\"tab-pane fade\" id=\"tab-new-vmtemplate\" role=\"tabpanel\">
                <div class=\"card-body\">
                    <form id='vm-create-form' method=\"post\" action=\"admin/serviceproxmox/vm_template_create\" class=\"api-form\" data-api-redirect=\"";
        // line 152
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("serviceproxmox/templates");
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" />
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 156
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo ":    
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" id='vm-template-name' name=\"name\" value=\"\" required placeholder=\"";
        // line 159
        echo twig_escape_filter($this->env, __trans("Unique name to identify this template"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 164
        echo twig_escape_filter($this->env, __trans("Description"), "html", null, true);
        echo ":
                            </label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text-area\" name=\"description\" value=\"\" required placeholder=\"";
        // line 167
        echo twig_escape_filter($this->env, __trans("Description"), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 172
        echo twig_escape_filter($this->env, __trans("CPU Cores"), "html", null, true);
        echo ":                                                                    
                            </label>
                            <div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t<input class=\"form-range\" type=\"range\" name=\"cpu_cores\" value=\"1\" min=\"1\" max=\"128\" step=\"1\" oninput=\"cpuOutput.value = this.value+' Core(s)';\">
                            </div>
                            <div class=\"col-md-2\">
                                <output name=\"cpuOutput\" for=\"cpu_cores\">
                                    1 Core(s)
                                </output>
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 185
        echo twig_escape_filter($this->env, __trans("Memory"), "html", null, true);
        echo ":                                                                    
                            </label>
                            <div class=\"col-md-5\">
                                    <input class=\"form-range\" type=\"range\" name=\"vmmemory\" value=\"1\" min=\"1\" max=\"128\" step=\"1\" oninput=\"vmmemoryOutput.value = this.value+' GB';\">
                            </div>
                            <div class=\"col-md-2\">
                                <output name=\"vmmemoryOutput\" for=\"vmmemory\">
                                    1 GB
                                </output>
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 198
        echo twig_escape_filter($this->env, __trans("Ballooning"), "html", null, true);
        echo ":                                                                            
                            </label>
                            <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioBalloonYes\" type=\"radio\" name=\"balloon\" value=\"1\">
                                <label class=\"form-check-label\" for=\"radioBalloonYes\">
                                    ";
        // line 204
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "
                                </label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioBalloonNo\" type=\"radio\" name=\"balloon\" value=\"0\" checked>
                                <label class=\"form-check-label\" for=\"radioBalloonNo\">
                                    ";
        // line 210
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "
                                </label>
                            </div>
                        </div>
                        <div class=\"mb-3 row\" id='balloon-size'>
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 216
        echo twig_escape_filter($this->env, __trans("Ballooing Memory Size"), "html", null, true);
        echo ":                                                                                    
                            </label>
                            <div class=\"col-md-5\">
                                    <input class=\"form-range\" type=\"range\" name=\"balloon_size\" value=\"1\" min=\"1\" max=\"128\" step=\"1\" oninput=\"memoryOutput.value = this.value+' GB';\">
                            </div>
                            <div class=\"col-md-2\">
                                <output name=\"memoryOutput\" for=\"balloon_size\">
                                    1 GB
                                </output>
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 229
        echo twig_escape_filter($this->env, __trans("OS"), "html", null, true);
        echo ":
                            </label>
                            ";
        // line 231
        $context["os_list"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_os_get_list", [], "method", false, false, false, 231);
        // line 232
        echo "                            <div class=\"col\">
                                <select class=\"form-select\" name=\"os\">
                                    ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["os_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["os"]) {
            // line 235
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["os"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["os"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['os'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 242
        echo twig_escape_filter($this->env, __trans("Bios Type"), "html", null, true);
        echo ":
                            </label>
                            ";
        // line 244
        $context["bios_list"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_bios_get_list", [], "method", false, false, false, 244);
        // line 245
        echo "                            <div class=\"col\">
                                <select class=\"form-select\" name=\"bios\">
                                    ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bios_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bios"]) {
            // line 248
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["bios"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["bios"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bios'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 255
        echo twig_escape_filter($this->env, __trans("Start on boot"), "html", null, true);
        echo ":
                            </label>
                            <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioOnbootYes\" type=\"radio\" name=\"onboot\" value=\"1\" checked>
                                <label class=\"form-check-label\" for=\"radioOnbootYes\">
                                    ";
        // line 261
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "
                                </label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioOnbootNo\" type=\"radio\" name=\"onboot\" value=\"0\">
                                <label class=\"form-check-label\" for=\"radioOnbootNo\">
                                    ";
        // line 267
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "
                                </label>
                            </div>
                        </div>

                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"form-label col-3 col-form-label\">
                                ";
        // line 275
        echo twig_escape_filter($this->env, __trans("Qemu Guest Agent"), "html", null, true);
        echo ":
                            </label>
                            <div class=\"col\">
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" id=\"radioAgentYes\" type=\"radio\" name=\"agent\" value=\"1\" checked>
                                    <label class=\"form-check-label\" for=\"radioAgentYes\">
                                        ";
        // line 281
        echo twig_escape_filter($this->env, __trans("Enabled"), "html", null, true);
        echo "
                                    </label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    <input class=\"form-check-input\" id=\"radioAgentNo\" type=\"radio\" name=\"agent\" value=\"0\">
                                    <label class=\"form-check-label\" for=\"radioAgentNo\">
                                        ";
        // line 287
        echo twig_escape_filter($this->env, __trans("Disabled"), "html", null, true);
        echo "
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                            <!-- tabs for storage and drives -->
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link active\" href=\"#tab-vm-storage\" data-bs-toggle=\"tab\">
                                    ";
        // line 298
        echo twig_escape_filter($this->env, __trans("Storage"), "html", null, true);
        echo "
                                </a>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\" id='tab-new-vm-storage-btn'>
                                <a class=\"nav-link\" href=\"#tab-new-vm-storage\" data-bs-toggle=\"tab\" >
                                    <svg class=\"icon me-2\">
                                        <use xlink:href=\"#plus\" />
                                    </svg>
                                    ";
        // line 306
        echo twig_escape_filter($this->env, __trans("New Storage"), "html", null, true);
        echo "
                                </a>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link\" href=\"#tab-vm-cdrom\" data-bs-toggle=\"tab\">
                                    ";
        // line 311
        echo twig_escape_filter($this->env, __trans("Removable Storage"), "html", null, true);
        echo "
                                </a>
                            </li>
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"nav-link\" href=\"#tab-new-vm-cdrom\" data-bs-toggle=\"tab\">
                                    <svg class=\"icon me-2\">
                                        <use xlink:href=\"#plus\" />
                                    </svg>
                                    ";
        // line 319
        echo twig_escape_filter($this->env, __trans("New Removable Storage"), "html", null, true);
        echo "
                                </a>
                            </li>
                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane fade show active\" id=\"tab-vm-storage\" role=\"tabpanel\">
                                <div class=\"card-body\">                                            
                                    <div class=\"table-responsive\">
                                        <table class=\"table card-table table-vcenter table-striped table-responsive text-nowrap\">
                                            <thead>
                                                <th>
                                                    <td>Storage Type</td>
                                                    <td>Size (GB)</td>
                                                    <td>Controller</td>
                                                    <td></td>
                                                </th>
                                            </thead>
                                            <tbody id='template-storage-list'>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane fade \" id=\"tab-new-vm-storage\" role=\"tabpanel\">
                                <div class=\"card-body\">                                            
                                <form id='vm-storage-create-form' method=\"post\" action=\"admin/serviceproxmox/vm_template_create\" class=\"api-form\" data-api-redirect=\"";
        // line 346
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("serviceproxmox/templates");
        echo "\">
                                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 347
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" />
                                    <div class=\"mb-3 row\">
                                        <label class=\"form-label col-3\">Storage Type Tags:</label>
                                        <div class=\"col\">
                                            <input type=\"text\" name=\"storageTypeTags[]\" id=\"storageTypeTags\" multiple>
                                        </div>
                                    </div>
                            
                                
                                    <div class=\"mb-3 row\">
                                        <label class=\"form-label col-3 col-form-label\">
                                            ";
        // line 358
        echo twig_escape_filter($this->env, __trans("Size"), "html", null, true);
        echo ":                                                                    
                                        </label>
                                        <div class=\"col-md-5\">
                                                <input class=\"form-range\" type=\"range\" name=\"storage_size\" id=\"storage_size\" value=\"1\" min=\"50\" max=\"2000\" step=\"10\" oninput=\"storage_sizeOutput.value = this.value+' GB';\">
                                        </div>
                                        <div class=\"col-md-2\">
                                            <output name=\"storage_sizeOutput\" for=\"storage_size\">
                                                50 GB
                                            </output>
                                        </div>
                                    </div>
                                    <div class=\"mb-3 row\">
                                        <label class=\"form-label col-3 col-form-label\">
                                            ";
        // line 371
        echo twig_escape_filter($this->env, __trans("Controller"), "html", null, true);
        echo ":                                                                    
                                        </label>
                                        ";
        // line 373
        $context["controllers"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_storage_controller_get_list", [], "method", false, false, false, 373);
        // line 374
        echo "                                        <div class=\"col\">
                                            <select name=\"controller\" id=\"controller\" class=\"form-select\">
                                                ";
        // line 376
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["controllers"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["controller"]) {
            // line 377
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["controller"], "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['controller'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 379
        echo "                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <!-- Button to add the new storage to the list -->
                                    <button type=\"button\" class=\"btn btn-primary\" id='add-storage-btn'>Add Storage</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer text-end\">
                        <input type=\"submit\" value=\"";
        // line 392
        echo twig_escape_filter($this->env, __trans("Save VM Template"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                    </div>
                    </form>
                </div>
            </div>
        </div>
       <!-- ##############################################################################
                                    List LXC Templates
            ############################################################################## -->

        ";
        // line 402
        $context["lxctemplates"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_get_lxc_config_template", [], "method", false, false, false, 402);
        // line 403
        echo "        <div class=\"tab-content\">
            <div class=\"tab-pane fade show\" id=\"tab-lxctemplates\" role=\"tabpanel\">
                <div class=\"card-body\">
                    <h2>
                        ";
        // line 407
        echo twig_escape_filter($this->env, __trans("LXC Config Templates"), "html", null, true);
        echo "
                    </h2>
                </div>

                <div style=\"padding: 0.25rem 1.5rem\">
                    <strong>
                        All LXC Config Templates 
                    </strong>
                </div>
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <thead>
                        <tr>
                            <th>
                                ";
        // line 420
        echo twig_escape_filter($this->env, __trans("id"), "html", null, true);
        echo "
                            </th>
                            <th>
                                ";
        // line 423
        echo twig_escape_filter($this->env, __trans("Template"), "html", null, true);
        echo "
                            </th>
                            <th>
                                ";
        // line 426
        echo twig_escape_filter($this->env, __trans("CPU Cores"), "html", null, true);
        echo "
                            </th>
                            <th>
                                ";
        // line 429
        echo twig_escape_filter($this->env, __trans("Memory"), "html", null, true);
        echo "
                            </th>
                            <th>
                                ";
        // line 432
        echo twig_escape_filter($this->env, __trans("Storage"), "html", null, true);
        echo "
                            </th>
                            <th>
                                ";
        // line 435
        echo twig_escape_filter($this->env, __trans("Created at"), "html", null, true);
        echo "
                            </th>
                            <th class=\"w-1\"></th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 441
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lxctemplates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 442
            echo "                        <tr>
                            <td>
                                ";
            // line 444
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "id", [], "any", false, false, false, 444), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 447
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "ostemplate", [], "any", false, false, false, 447), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 450
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "cores", [], "any", false, false, false, 450), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 453
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "memory", [], "any", false, false, false, 453), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 456
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "storage", [], "any", false, false, false, 456), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 459
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "created_at", [], "any", false, false, false, 459), "html", null, true);
            echo "
                            </td>
                            <td>
                                <a class=\"btn btn-icon\" href=\"";
            // line 462
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/serviceproxmox/templates/lxc_config");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "id", [], "any", false, false, false, 462), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 470
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <!-- ##############################################################################
                                        Create new LXC Template
             ############################################################################## -->
             ";
        // line 477
        $context["lxc_appliances"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_lxc_appliance_get_list", [], "method", false, false, false, 477);
        // line 478
        echo "        <div class=\"tab-content\">
            <div class=\"tab-pane fade\" id=\"tab-new-lxctemplate\" role=\"tabpanel\">
                <div class=\"card-body\">
                    <form method=\"post\" action=\"admin/serviceproxmox/lxc_template_create\" class=\"api-form\" data-api-redirect=\"";
        // line 481
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("serviceproxmox/templates");
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 482
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" />
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">
                            ";
        // line 485
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo ":    
                        </label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"\" required placeholder=\"";
        // line 488
        echo twig_escape_filter($this->env, __trans("Unique name to identify this LXC template"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">
                            ";
        // line 493
        echo twig_escape_filter($this->env, __trans("Description"), "html", null, true);
        echo ":
                        </label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text-area\" name=\"description\" value=\"\" required placeholder=\"";
        // line 496
        echo twig_escape_filter($this->env, __trans("Description"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">
                            ";
        // line 501
        echo twig_escape_filter($this->env, __trans("CPU Cores"), "html", null, true);
        echo ":                                                                    
                        </label>
                        <div class=\"col-md-5\">
                                <input class=\"form-range\" type=\"range\" name=\"cpu_cores\" value=\"1\" min=\"1\" max=\"128\" step=\"1\" oninput=\"cpuOutput.value = this.value+' Core(s)';\">
                        </div>
                        <div class=\"col-md-2\">
                            <output name=\"cpuOutput\" for=\"cpu_cores\">
                                1 Core(s)
                            </output>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">
                            ";
        // line 514
        echo twig_escape_filter($this->env, __trans("Memory"), "html", null, true);
        echo ":                                                                    
                        </label>
                        <div class=\"col-md-5\">
                                <input class=\"form-range\" type=\"range\" name=\"memory\" value=\"1\" min=\"1\" max=\"128\" step=\"1\" oninput=\"memoryOutput.value = this.value+' GB';\">
                        </div>
                        <div class=\"col-md-2\">
                            <output name=\"memoryOutput\" for=\"memory\">
                                1 GB
                            </output>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">
                            ";
        // line 527
        echo twig_escape_filter($this->env, __trans("Swap Memory Size"), "html", null, true);
        echo ":                                                                                    
                        </label>
                        <div class=\"col-md-5\">
                                <input class=\"form-range\" type=\"range\" name=\"swap\" value=\"1\" min=\"1\" max=\"16384\" step=\"1\" oninput=\"swapOutput.value = this.value+' MB';\">
                        </div>
                        <div class=\"col-md-2\">
                            <output name=\"swapOutput\" for=\"swap\">
                                1 GB
                            </output>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">
                            ";
        // line 540
        echo twig_escape_filter($this->env, __trans("OS Template"), "html", null, true);
        echo ":
                        </label>
                        <div class=\"col\">
                            <select class=\"form-select\" name=\"ostemplate\">
                                ";
        // line 544
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lxc_appliances"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lxc_appliance"]) {
            // line 545
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lxc_appliance"], "id", [], "any", false, false, false, 545), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lxc_appliance"], "headline", [], "any", false, false, false, 545), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lxc_appliance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 547
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">
                            ";
        // line 552
        echo twig_escape_filter($this->env, __trans("Start on boot"), "html", null, true);
        echo ":
                        </label>
                        <div class=\"col\">
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" id=\"radioOnbootYes\" type=\"radio\" name=\"onboot\" value=\"1\" checked>
                            <label class=\"form-check-label\" for=\"radioOnbootYes\">
                                ";
        // line 558
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "
                            </label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" id=\"radioOnbootNo\" type=\"radio\" name=\"onboot\" value=\"0\">
                            <label class=\"form-check-label\" for=\"radioOnbootNo\">
                                ";
        // line 564
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "
                            </label>
                        </div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 568
        echo twig_escape_filter($this->env, __trans("Save VM Template"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                    </form>
                </div>
            </div>
        </div>
        <!-- ##############################################################################
                                List LXC Appliances & Template VMs
        ############################################################################## -->
        ";
        // line 576
        $context["lxc_appliances"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_lxc_appliance_get_list", [], "method", false, false, false, 576);
        // line 577
        echo "        <div class=\"tab-content\">
        <div class=\"tab-pane fade show\" id=\"tab-appliance-templatevm\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h2>
                    ";
        // line 581
        echo twig_escape_filter($this->env, __trans("LXC Appliances"), "html", null, true);
        echo "
                </h2>
            </div>
            <div class=\"card-body\">
                <!-- function to update all lxc appliances -->
                <a class=\"btn btn-icon api-link\" href=\"";
        // line 586
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/serviceproxmox/pull_lxc_appliances", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, __trans("Get LXC Appliances"), "html", null, true);
        echo "\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("LXC Appliances Updated"), "html", null, true);
        echo "\">
                    <svg class=\"icon\">
                        <use xlink:href=\"#download\"/>
                    </svg>
                </a>
            </div>
            <div class=\"card-body\">
                <div style=\"padding: 0.25rem 1.5rem\">
                    <strong>
                        All Template VMs
                    </strong>
                </div>
                ";
        // line 598
        $context["qemu_templates"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_service_get_qemutemplates", [], "method", false, false, false, 598);
        // line 599
        echo "                <table class=\"table card-table table-vcenter table-striped table-responsive text-nowrap\">
                    <thead>
                    <tr>
                        <th>
                            ";
        // line 603
        echo twig_escape_filter($this->env, __trans("VM ID"), "html", null, true);
        echo "
                        </th>
                        <th>
                            ";
        // line 606
        echo twig_escape_filter($this->env, __trans("Server"), "html", null, true);
        echo "
                        </th>
                        <th>
                            ";
        // line 609
        echo twig_escape_filter($this->env, __trans("VM Name"), "html", null, true);
        echo "
                        </th>
                        <th class=\"w-1\"></th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 615
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["qemu_templates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["qemu_template"]) {
            // line 616
            echo "                        <tr>
                            <td>
                                ";
            // line 618
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["qemu_template"], "vmid", [], "any", false, false, false, 618), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 621
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["qemu_template"], "server_name", [], "any", false, false, false, 621), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 624
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["qemu_template"], "name", [], "any", false, false, false, 624), "html", null, true);
            echo "
                            </td>
                            <td>
                                <!-- TODO: Make this button open a Modal to select the Server & Storage where it should be stored -->
                                <a class=\"btn btn-icon\" href=\"\"> 
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#eye\" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qemu_template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 636
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"card-body\">
                <div style=\"padding: 0.25rem 1.5rem\">
                    <strong>
                        All LXC Appliances 
                    </strong>
                </div>
                <table class=\"table card-table table-vcenter table-striped table-responsive text-nowrap\">
                    <thead>
                    <tr>
                        <th>
                            ";
        // line 649
        echo twig_escape_filter($this->env, __trans("Type"), "html", null, true);
        echo "
                        </th>
                        <th>
                            ";
        // line 652
        echo twig_escape_filter($this->env, __trans("Description"), "html", null, true);
        echo "
                        </th>
                        <th>
                            ";
        // line 655
        echo twig_escape_filter($this->env, __trans("Architecture"), "html", null, true);
        echo "
                        </th>
                        <th>
                            ";
        // line 658
        echo twig_escape_filter($this->env, __trans("Version"), "html", null, true);
        echo "
                        </th>
                        <th class=\"w-1\"></th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 664
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lxc_appliances"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lxc_appliance"]) {
            // line 665
            echo "                        <tr>
                            <td>
                                ";
            // line 667
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lxc_appliance"], "type", [], "any", false, false, false, 667), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 670
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lxc_appliance"], "description", [], "any", false, false, false, 670), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 673
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lxc_appliance"], "architecture", [], "any", false, false, false, 673), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 676
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lxc_appliance"], "version", [], "any", false, false, false, 676), "html", null, true);
            echo "
                            </td>
                            <td>
                                <!-- TODO: Make this button open a Modal to select the Server & Storage where it should be stored -->
                                <a class=\"btn btn-icon\" href=\"\"> 
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#download\" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lxc_appliance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 688
        echo "                    </tbody>
                </table>
            </div>

        </div>
    </div>
";
    }

    // line 695
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 696
        echo "    <script src=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_library_url(("Api/API.js?v=" . twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_version", [], "any", false, false, false, 696)));
        echo "\"></script>
    <script>
        var balloonyes = document.getElementById('radioBalloonYes');
        var balloono = document.getElementById('radioBalloonNo');
        var balloon_size = document.getElementById('balloon-size');
        document.getElementById('balloon-size').hidden = true;

        document.getElementById('radioBalloonYes').addEventListener('click', function() {
            if (document.getElementById('radioBalloonYes').checked && !document.getElementById('radioBalloonNo').checked) {
                document.getElementById('balloon-size').hidden = false;
            } else if (!document.getElementById('radioBalloonYes').checked && document.getElementById('radioBalloonNo').checked) {
                document.getElementById('balloon-size').hidden = true;
            }
        });
        document.getElementById('radioBalloonNo').addEventListener('click', function() {
            if (document.getElementById('radioBalloonYes').checked && !document.getElementById('radioBalloonNo').checked) {
                document.getElementById('balloon-size').hidden = false;
            } else if (!document.getElementById('radioBalloonYes').checked && document.getElementById('radioBalloonNo').checked) {
                document.getElementById('balloon-size').hidden = true;
            }
        })

        document.getElementById('vm-template-name').addEventListener('change', function() {

            if (document.getElementById('vm-template-id') == null) {
                saveTemplateAsDraft();
            }
        });

        document.getElementById('add-storage-btn').addEventListener('click', function() {
            saveStorage();
        });

        function saveStorage() {

            var template_id_v = document.getElementById('vm_config_template_id');
            var storage_size_v = document.getElementById('storage_size');
            var storage_controller_v = document.getElementById('controller');
            var storage_type_tags_v = document.getElementById('storageTypeTags');

            var data = {
                template_id: template_id_v.value,
                storage_size: storage_size_v.value,
                storage_controller: storage_controller_v.value,
                storage_type_tags: storage_type_tags_v.value
            };

            API.admin.post('serviceproxmox/vm_config_template_storage_create', data, (response) => {
                updateStorageTable()
            }, (response) => {
                console.log('Error occurred while saving storage: ' + response);
            });

        }

        function saveTemplateAsDraft(template) {
            var template_name = document.getElementById('vm-template-name').value;
            API.admin.post('serviceproxmox/vm_config_template_create', {
                    name: template_name
                }, (response) => {
                    var vm_config_template_new = response;
                    var input = document.createElement(\"input\");
                    input.setAttribute(\"type\", \"hidden\");
                    input.setAttribute(\"name\", \"vm_config_template_id\");
                    input.setAttribute(\"id\", \"vm_config_template_id\");
                    input.setAttribute(\"value\", vm_config_template_new.id);
                    document.getElementById(\"vm-create-form\").appendChild(input);
                    document.getElementById(\"vm-template-name\").setAttribute(\"value\", vm_config_template_new.name);
                    document.getElementById(\"vm-create-form\").setAttribute(\"action\", \"/index.php?_url=/admin/serviceproxmox/vm_config_template_update/\" + vm_config_template_new.id);
                },
                error => {
                    console.log('Error occurred while saving storage: ' + response);
                    }
            )
        };

        function deleteStorage(storageId) {
            API.admin.post(
                'serviceproxmox/vm_config_template_delete_storage', {
                    id: storageId
                },
                () => {
                    updateStorageTable(); 
                },
                handleError
            );
        }

        function updateStorageTable() {
            const templateIdElem = document.getElementById('vm_config_template_id');

            if (!templateIdElem) {
                console.error(\"Element with id 'vm_config_template_id' not found!\");
                return;
            }

            const templateId = templateIdElem.value;

            API.admin.post(
                'serviceproxmox/vm_config_template_get_storages', {
                    id: templateId
                },
                populateTable,
                handleError
            );
        }

        function populateTable(response) {
            tableBody.innerHTML = '';
            const tableBody = document.getElementById(\"template-storage-list\");
            for (let key in response) {
                if (response.hasOwnProperty(key)) {
                    const storageData = response[key];
                    const row = document.createElement(\"tr\");
                    row.id = \"template-storage-list-row-\" + storageData.id;
                    tableBody.appendChild(row);

                    row.appendChild(document.createElement(\"td\"));

                    appendCellToRow(row, storageData.id, \"storage-name\", storageData.storage_type);
                    appendCellToRow(row, storageData.id, \"storage-size\", storageData.size + \" GB\");
                    appendCellToRow(row, storageData.id, \"storage-controller\", storageData.controller);

                    const actionsCell = appendCellToRow(row, storageData.id, \"storage-actions\", \"\");
                    appendActionButton(actionsCell, \"edit\", storageData.id);
                    appendActionButton(actionsCell, \"delete\", storageData.id);
                }
            }
        }

        function appendCellToRow(row, storageId, suffix, content) {
            const cell = document.createElement(\"td\");
            cell.id = `template-storage-list-row-\${storageId}-\${suffix}`;
            cell.innerHTML = content;
            row.appendChild(cell);
            return cell;
        }

        function appendActionButton(cell, actionType, storageId) {
            const button = document.createElement(\"a\");
            button.className = \"btn btn-icon\";

            if (actionType === \"delete\") {
                button.href = \"javascript:void(0)\"; 
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    deleteStorage(storageId);
                });
            } else {
                button.href = `/admin/serviceproxmox/vm_config_template_storage_edit/\${storageId}`;
            }

            cell.appendChild(button);

            const img = document.createElement(\"img\");
            img.className = \"icon\";
            img.src = `assets/icons/\${actionType}.svg`;
            img.alt = `\${actionType} icon`; 
            button.appendChild(img);
        }

        function handleError(error) {
            console.error(\"API Error:\", error);
        }

        \$(document).ready(function() {
            var Type = \"storage\";
            var select = new TomSelect('#storageTypeTags', {
                plugins: ['remove_button'],
                create: true,
                delimiter: ',',
            });

            getTagsForType(Type, function(options) {
                select.addOption(options);
            });

            updateStorageTable();
        });

        function getTagsForType(Type, callback) {
            var options = [];
            API.admin.post(\"serviceproxmox/service_get_tags\", {
                type: Type
            }, function(response) {
                for (var key in response) {
                    if (response.hasOwnProperty(key)) {
                        var option = {
                            value: response[key].id,
                            text: response[key].name
                        };
                        options.push(option);
                    }
                }
                callback(options);
            }, function(error) {
                console.log('Error occurred while getting tags: ' + error);
                callback(options);
            }, false);
        }

        function getTagsForType(Type, callback) {
            var options = [];
            API.admin.post(\"serviceproxmox/service_get_tags\", {
                type: Type
            }, function(response) {
                for (var key in response) {
                    if (response.hasOwnProperty(key)) {
                        var option = {
                            value: response[key].id,
                            text: response[key].name
                        };
                        options.push(option);
                    }
                }
                callback(options);
            }, function(error) {
                console.log('Error occurred while getting tags: ' + error);
                callback(options);
            }, false);
        }
    </script>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_serviceproxmox_templates.html.twig";
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
        return array (  1191 => 696,  1187 => 695,  1177 => 688,  1159 => 676,  1153 => 673,  1147 => 670,  1141 => 667,  1137 => 665,  1133 => 664,  1124 => 658,  1118 => 655,  1112 => 652,  1106 => 649,  1091 => 636,  1073 => 624,  1067 => 621,  1061 => 618,  1057 => 616,  1053 => 615,  1044 => 609,  1038 => 606,  1032 => 603,  1026 => 599,  1024 => 598,  1005 => 586,  997 => 581,  991 => 577,  989 => 576,  978 => 568,  971 => 564,  962 => 558,  953 => 552,  946 => 547,  935 => 545,  931 => 544,  924 => 540,  908 => 527,  892 => 514,  876 => 501,  868 => 496,  862 => 493,  854 => 488,  848 => 485,  842 => 482,  838 => 481,  833 => 478,  831 => 477,  822 => 470,  806 => 462,  800 => 459,  794 => 456,  788 => 453,  782 => 450,  776 => 447,  770 => 444,  766 => 442,  762 => 441,  753 => 435,  747 => 432,  741 => 429,  735 => 426,  729 => 423,  723 => 420,  707 => 407,  701 => 403,  699 => 402,  686 => 392,  671 => 379,  660 => 377,  656 => 376,  652 => 374,  650 => 373,  645 => 371,  629 => 358,  615 => 347,  611 => 346,  581 => 319,  570 => 311,  562 => 306,  551 => 298,  537 => 287,  528 => 281,  519 => 275,  508 => 267,  499 => 261,  490 => 255,  483 => 250,  472 => 248,  468 => 247,  464 => 245,  462 => 244,  457 => 242,  450 => 237,  439 => 235,  435 => 234,  431 => 232,  429 => 231,  424 => 229,  408 => 216,  399 => 210,  390 => 204,  381 => 198,  365 => 185,  349 => 172,  341 => 167,  335 => 164,  327 => 159,  321 => 156,  315 => 153,  311 => 152,  299 => 142,  283 => 134,  276 => 130,  272 => 128,  266 => 120,  260 => 117,  254 => 114,  247 => 110,  243 => 109,  240 => 108,  237 => 107,  234 => 106,  231 => 105,  228 => 104,  225 => 103,  222 => 102,  220 => 101,  216 => 100,  212 => 98,  208 => 97,  199 => 91,  193 => 88,  187 => 85,  181 => 82,  175 => 79,  169 => 76,  158 => 67,  156 => 66,  149 => 62,  133 => 49,  125 => 44,  114 => 36,  106 => 31,  95 => 23,  90 => 20,  86 => 19,  73 => 10,  69 => 8,  65 => 7,  58 => 4,  54 => 3,  49 => 2,  47 => 6,  45 => 1,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_serviceproxmox_templates.html.twig", "/var/www/modules/Serviceproxmox/html_admin/mod_serviceproxmox_templates.html.twig");
    }
}
