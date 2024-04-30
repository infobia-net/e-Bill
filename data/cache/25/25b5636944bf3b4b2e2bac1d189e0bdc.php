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

/* mod_serviceproxmox_settings.html.twig */
class __TwigTemplate_be640d703dc92d5470e3417c69f74693 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_serviceproxmox_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_serviceproxmox_settings.html.twig", 3)->unwrap();
        // line 9
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t";
        echo twig_escape_filter($this->env, __trans("Proxmox settings"), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t<ul class=\"breadcrumb\">
\t\t<li class=\"breadcrumb-item\">
\t\t\t<a href=\"";
        // line 14
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">
\t\t\t\t<svg class=\"icon\">
\t\t\t\t\t<use xlink:href=\"#home\"/>
\t\t\t\t</svg>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"breadcrumb-item\">
\t\t\t<a href=\"";
        // line 21
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">
\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">
\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, __trans("Proxmox settings"), "html", null, true);
        echo "
\t\t</li>
\t</ul>
";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    <div class=\"card-tabs\">
\t\t <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" href=\"#tab-general\" data-bs-toggle=\"tab\">";
        // line 35
        echo twig_escape_filter($this->env, __trans("General"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-storage\" data-bs-toggle=\"tab\">";
        // line 38
        echo twig_escape_filter($this->env, __trans("Storage"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-backup\" data-bs-toggle=\"tab\">";
        // line 41
        echo twig_escape_filter($this->env, __trans("Backup"), "html", null, true);
        echo "</a>
            </li>
        </ul>

        <div class=\"card\">
            <div class=\"tab-content\">
                <div class=\"tab-pane fade show active\" id=\"tab-general\" role=\"tabpanel\">
\t\t\t\t\t";
        // line 48
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_serviceproxmox"]], "method", false, false, false, 48);
        // line 49
        echo "\t\t\t\t\t<form method=\"post\" action=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\" data-api-msg=\"Settings updated\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<input type=\"hidden\" name=\"ext\" value=\"mod_serviceproxmox\"/>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"mt-3 mb-3 row\">
\t\t\t\t\t\t\t\t<label class=\"col-md-3 form-label\">";
        // line 54
        echo twig_escape_filter($this->env, __trans("Use API Token Authentication"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"use_auth_tokens\" value=\"yes\" ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "use_auth_tokens", [], "any", false, false, false, 57) == "yes")) {
            echo " checked ";
        }
        echo " required>
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Yes</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"use_auth_tokens\" value=\"no\" ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "use_auth_tokens", [], "any", false, false, false, 61) == "no")) {
            echo " checked ";
        }
        echo " required>
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">No</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t\t\t\t<label class=\"form-label\">
\t\t\t\t\t\t\t\t\tGlobal CPU Overprovisioning
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t<input class=\"form-range\" type=\"range\" name=\"cpu_overprovisioning\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "cpu_overprovisioning", [], "any", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "cpu_overprovisioning", [], "any", false, false, false, 71), 0)) : (0)), "html", null, true);
        echo "\" min=\"0\" max=\"200\" step=\"1\" oninput=\"cpuOutput.value = this.value+'%';\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<output name=\"cpuOutput\" for=\"cpu_overprovisioning\">
\t\t\t\t\t\t\t\t\t\t";
        // line 75
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "cpu_overprovisioning", [], "any", true, true, false, 75)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "cpu_overprovisioning", [], "any", false, false, false, 75), 0)) : (0)), "html", null, true);
        echo "%
\t\t\t\t\t\t\t\t\t</output>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<label class=\"form-label\">
\t\t\t\t\t\t\t\t\tGlobal RAM Overprovisioning
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t<input class=\"form-range\" type=\"range\" name=\"ram_overprovisioning\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "ram_overprovisioning", [], "any", true, true, false, 82)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "ram_overprovisioning", [], "any", false, false, false, 82), 0)) : (0)), "html", null, true);
        echo "\" min=\"0\" max=\"200\" step=\"1\" oninput=\"ramOutput.value = this.value+'%';\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<output name=\"ramOutput\" for=\"ram_overprovisioning\">
\t\t\t\t\t\t\t\t\t\t";
        // line 86
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "ram_overprovisioning", [], "any", true, true, false, 86)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "ram_overprovisioning", [], "any", false, false, false, 86), 0)) : (0)), "html", null, true);
        echo "%
\t\t\t\t\t\t\t\t\t</output>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<label class=\"form-label\">
\t\t\t\t\t\t\t\t\tGlobal Storage Overprovisioning
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t<input class=\"form-range\" type=\"range\" name=\"storage_overprovisioning\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "storage_overprovisioning", [], "any", true, true, false, 93)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "storage_overprovisioning", [], "any", false, false, false, 93), 0)) : (0)), "html", null, true);
        echo "\" min=\"0\" max=\"200\" step=\"1\" oninput=\"storageOutput.value = this.value+'%';\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t\t<output name=\"storageOutput\" for=\"storage_overprovisioning\">
\t\t\t\t\t\t\t\t\t\t";
        // line 97
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "storage_overprovisioning", [], "any", true, true, false, 97)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "storage_overprovisioning", [], "any", false, false, false, 97), 0)) : (0)), "html", null, true);
        echo "%
\t\t\t\t\t\t\t\t\t</output>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-md-3 form-label\">
\t\t\t\t\t\t\t\t\t";
        // line 103
        echo twig_escape_filter($this->env, __trans("Avoid Overprovisioning Servers as long as possible"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"avoid_overprovision\" value=\"yes\" ";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "avoid_overprovision", [], "any", false, false, false, 107) == "yes")) {
            echo " checked ";
        }
        echo " required>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Yes</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"avoid_overprovision\" value=\"no\" ";
        // line 111
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "avoid_overprovision", [], "any", false, false, false, 111) == "no")) {
            echo " checked ";
        }
        echo " required>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">No</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-md-3 form-label\">
\t\t\t\t\t\t\t\t\t";
        // line 118
        echo twig_escape_filter($this->env, __trans("Prohibit Overprovisioning "), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"no_overprovision\" value=\"yes\" ";
        // line 123
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "no_overprovision", [], "any", false, false, false, 123) == "yes")) {
            echo " checked ";
        }
        echo " required>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Yes</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"no_overprovision\" value=\"no\" ";
        // line 127
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "no_overprovision", [], "any", false, false, false, 127) == "no")) {
            echo " checked ";
        }
        echo " required>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">No</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-md-3 form-label\">
\t\t\t\t\t\t\t\t\t";
        // line 134
        echo twig_escape_filter($this->env, __trans("Enable Debug logging "), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"pmx_debug_logging\" value=\"1\" ";
        // line 139
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "pmx_debug_logging", [], "any", false, false, false, 139) == "1")) {
            echo " checked ";
        }
        echo " required>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Yes</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"pmx_debug_logging\" value=\"0\" ";
        // line 143
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "pmx_debug_logging", [], "any", false, false, false, 143) == "0")) {
            echo " checked ";
        }
        echo " required>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">No</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer text-end\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 150
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t            <div class=\"tab-pane fade\" id=\"tab-storage\" role=\"tabpanel\">
\t\t\t\t\t";
        // line 155
        $context["storages_grouped"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_storage_get_list", [], "method", false, false, false, 155);
        // line 156
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["storages_grouped"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 157
            echo "\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t<strong>";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "group", [], "any", false, false, false, 159), "html", null, true);
            echo " Storages</strong>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table card-table table-vcenter table-striped text-nowrap\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 166
            echo twig_escape_filter($this->env, __trans("Storage"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 169
            echo twig_escape_filter($this->env, __trans("Servername"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 172
            echo twig_escape_filter($this->env, __trans("Content"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th style=\"text-align: right;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 175
            echo twig_escape_filter($this->env, __trans("Storage Space"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 178
            echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"w-1\">
\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["type"], "storages", [], "any", false, false, false, 185));
            foreach ($context['_seq'] as $context["_key"] => $context["storage"]) {
                // line 186
                echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 188
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["storage"], "name", [], "any", false, false, false, 188), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["storage"], "servername", [], "any", false, false, false, 191), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 194
                $context["content"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["storage"], "content", [], "any", false, false, false, 194), ",");
                // line 195
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 196
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                    echo " <br>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 198
                echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"text-align: center; width: 3em;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 200
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["storage"], "used", [], "any", false, false, false, 200), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["storage"], "size", [], "any", false, false, false, 200), "html", null, true);
                echo " GB
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" style=\"width: ";
                // line 202
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["storage"], "percent_used", [], "any", false, false, false, 202), "html", null, true);
                echo "%\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 206
                if ((twig_get_attribute($this->env, $this->source, $context["storage"], "active", [], "any", false, false, false, 206) == 1)) {
                    // line 207
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 209
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-fail me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 211
                echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-icon\" href=\"";
                // line 213
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/serviceproxmox/storage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["storage"], "id", [], "any", false, false, false, 213), "html", null, true);
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
            // line 221
            echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"tab-pane fade\" id=\"tab-backup\" role=\"tabpanel\">
\t\t\t\t\t<form method=\"post\" action=\"admin/serviceproxmox/proxmox_restore_backup\" class=\"api-form\" data-api-redirect=\"";
        // line 229
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/serviceproxmox");
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h2 class=\"card-title\">";
        // line 232
        echo twig_escape_filter($this->env, __trans("Backups"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<a href=\"";
        // line 235
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("admin/serviceproxmox/maintenance/backup");
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, __trans("Create Backup"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</div>
                        <div class=\"card-body\">
                            ";
        // line 238
        $context["backups"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "serviceproxmox_proxmox_list_backups", [], "method", false, false, false, 238);
        // line 239
        echo "\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<label class=\"col-md-3 form-label\">
\t\t\t\t\t\t\t\t\t";
        // line 241
        echo twig_escape_filter($this->env, __trans("Backup auswählen"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<select name=\"backup\" class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["backups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["backup"]) {
            // line 246
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["backup"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["backup"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['backup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
        // line 253
        echo twig_escape_filter($this->env, __trans("The backup will be restored to the backed up state of the server configuration."), "html", null, true);
        echo "<br>
\t\t\t\t\t\t\t\t";
        // line 254
        echo twig_escape_filter($this->env, __trans("If you have added new vms or containers since the backup, they will be deleted."), "html", null, true);
        echo "<br>

\t\t\t\t\t\t\t\t<b>";
        // line 256
        echo twig_escape_filter($this->env, __trans("All data will be overwritten."), "html", null, true);
        echo "</b>
\t\t\t\t\t\t\t</p>
                        </div>
                        <div class=\"card-footer text-end\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" data-api-confirm=\"";
        // line 260
        echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Restore Backup"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 269
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 270
        echo "<script>
\t// TODO: Fix this WIP mess
\tvar selectedStorageClass = null;

\tfunction deleteStorageClass() {
\t    if (selectedStorageClass) {

\t        refreshStorageClassesList();
\t    }
\t}

\tfunction saveStorageClass() {
\t    var storageClassNameInput = document.getElementById('storageClassName');
\t    var storageClassName = storageClassNameInput.value;

\t    if (selectedStorageClass) {

\t        refreshStorageClassesList();
\t    } else {

\t        refreshStorageClassesList();
\t    }

\t    storageClassNameInput.value = '';
\t    \$('#addEditStorageClassModal').modal('hide');
\t}

\tfunction refreshStorageClassesList() {

\t    var updatedStorageClasses = ['Storage Class A', 'Storage Class B', 'Storage Class C'];
\t    var storageClassesList = document.querySelector('#storageClassesModal ul');

\t    storageClassesList.innerHTML = '';
\t    updatedStorageClasses.forEach(function(storageclass) {
\t        var listItem = document.createElement('li');
\t        listItem.className = 'list-group-item';
\t        listItem.textContent = storageclass;
\t        storageClassesList.appendChild(listItem);
\t    });
\t}
</script>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_serviceproxmox_settings.html.twig";
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
        return array (  566 => 270,  562 => 269,  548 => 260,  541 => 256,  536 => 254,  532 => 253,  525 => 248,  514 => 246,  510 => 245,  503 => 241,  499 => 239,  497 => 238,  489 => 235,  483 => 232,  478 => 230,  474 => 229,  469 => 226,  459 => 221,  443 => 213,  439 => 211,  435 => 209,  431 => 207,  429 => 206,  422 => 202,  415 => 200,  411 => 198,  402 => 196,  397 => 195,  395 => 194,  389 => 191,  383 => 188,  379 => 186,  375 => 185,  365 => 178,  359 => 175,  353 => 172,  347 => 169,  341 => 166,  331 => 159,  327 => 157,  322 => 156,  320 => 155,  312 => 150,  300 => 143,  291 => 139,  283 => 134,  271 => 127,  262 => 123,  254 => 118,  242 => 111,  233 => 107,  226 => 103,  217 => 97,  210 => 93,  200 => 86,  193 => 82,  183 => 75,  176 => 71,  161 => 61,  152 => 57,  146 => 54,  139 => 50,  134 => 49,  132 => 48,  122 => 41,  116 => 38,  110 => 35,  105 => 32,  101 => 31,  93 => 26,  86 => 22,  82 => 21,  72 => 14,  68 => 12,  64 => 11,  57 => 6,  53 => 5,  49 => 1,  47 => 9,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_serviceproxmox_settings.html.twig", "/var/www/modules/Serviceproxmox/html_admin/mod_serviceproxmox_settings.html.twig");
    }
}
