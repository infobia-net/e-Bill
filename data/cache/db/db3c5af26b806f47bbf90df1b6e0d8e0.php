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

/* mod_product_manage.html.twig */
class __TwigTemplate_e4e28694629f470a5d4c96569907170d extends Template
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
            'head' => [$this, 'block_head'],
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
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_product_manage.html.twig", 3)->unwrap();
        // line 5
        $context["active_menu"] = "products";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_product_manage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Product configuration"), "html", null, true);
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
                    <use xlink:href=\"#home\" />
                </svg>
            </a>
        </li>
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 19
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Products"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 21), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link active\" id=\"settings-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-settings\" type=\"button\" role=\"tab\" aria-controls=\"index\" aria-selected=\"true\">";
        // line 28
        echo twig_escape_filter($this->env, __trans("General settings"), "html", null, true);
        echo "</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link\" id=\"config-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-config\" type=\"button\" role=\"tab\" aria-controls=\"index\" aria-selected=\"true\">";
        // line 31
        echo twig_escape_filter($this->env, __trans("Configuration"), "html", null, true);
        echo "</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link\" id=\"addons-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-addons\" type=\"button\" role=\"tab\" aria-controls=\"index\" aria-selected=\"true\">";
        // line 34
        echo twig_escape_filter($this->env, __trans("Addons"), "html", null, true);
        echo "</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link\" id=\"upgrades-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-upgrades\" type=\"button\" role=\"tab\" aria-controls=\"index\" aria-selected=\"true\">";
        // line 37
        echo twig_escape_filter($this->env, __trans("Upgrades"), "html", null, true);
        echo "</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link\" id=\"links-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-links\" type=\"button\" role=\"tab\" aria-controls=\"index\" aria-selected=\"true\">";
        // line 40
        echo twig_escape_filter($this->env, __trans("Links"), "html", null, true);
        echo "</button>
        </li>
    </ul>

<div class=\"card\">
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-settings\" role=\"tabpanel\">
            <div class=\"card-header\">
                <h1>";
        // line 48
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 48)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, __trans("General Settings"), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"card-body\">
                <form method=\"post\" action=\"admin/product/update\" class=\"api-form\" data-api-msg=\"";
        // line 51
        echo twig_escape_filter($this->env, __trans("Product configuration updated"), "html", null, true);
        echo "\" name=\"form\">
                    <h2>";
        // line 52
        echo twig_escape_filter($this->env, __trans("General Settings"), "html", null, true);
        echo "</h1>
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 55
        echo twig_escape_filter($this->env, __trans("Category"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            ";
        // line 57
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["product_category_id", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "product_category_get_pairs", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_category_id", [], "any", false, false, false, 57), 0, "None"], 57, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "formbuilder"]], "method", false, false, false, 60)) {
            // line 61
            echo "                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
            // line 62
            echo twig_escape_filter($this->env, __trans("Order Form"), "html", null, true);
            echo ":</label>
                        <div class=\"col\">
                            ";
            // line 64
            $context["tpl"] = (("mod_service" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "type", [], "any", false, false, false, 64)) . "_order_form.html.twig");
            // line 65
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_template_exists", [["file" => ($context["tpl"] ?? null)]], "method", false, false, false, 65)) {
                // line 66
                echo "                            <div class=\"nNote nInformation\">
                                <p>Please edit <strong>";
                // line 67
                echo twig_escape_filter($this->env, ($context["tpl"] ?? null), "html", null, true);
                echo "</strong> file in order to change order form for <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "type", [], "any", false, false, false, 67), "html", null, true);
                echo "</strong> category products.</p>
                            </div>
                            ";
            } else {
                // line 70
                echo "                                <div class=\"input-group\">
                                    ";
                // line 71
                echo twig_call_macro($macros["mf"], "macro_selectbox", ["form_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formbuilder_get_pairs", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 71), 0, "None"], 71, $context, $this->getSourceContext());
                echo "
                                    <a href=\"";
                // line 72
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/formbuilder");
                if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 72)) {
                    echo "?id=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 72), "html", null, true);
                }
                echo "\" class=\"btn\" id=\"formbuilder_btn\">
                                        ";
                // line 74
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 74)) {
                    // line 75
                    echo "                                        <svg class=\"icon\">
                                            <use xlink:href=\"#edit\" />
                                        </svg>
                                        ";
                    // line 78
                    echo twig_escape_filter($this->env, __trans("Edit"), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 80
                    echo "                                        <svg class=\"icon\">
                                            <use xlink:href=\"#plus\" />
                                        </svg>
                                        ";
                    // line 83
                    echo twig_escape_filter($this->env, __trans("Add new"), "html", null, true);
                    echo "
                                        ";
                }
                // line 85
                echo "                                    </a>
                                </div>
                            ";
            }
            // line 88
            echo "                        </div>
                    </div>
                    ";
        }
        // line 91
        echo "                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label pt-0\">";
        // line 92
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" id=\"statusEnabled\" name=\"status\" value=\"enabled\"";
        // line 95
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "status", [], "any", false, false, false, 95) == "enabled")) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"statusEnabled\">";
        // line 96
        echo twig_escape_filter($this->env, __trans("Enabled"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" id=\"statusDisabled\" name=\"status\" value=\"disabled\"";
        // line 99
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "status", [], "any", false, false, false, 99) == "disabled")) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"statusDisabled\">";
        // line 100
        echo twig_escape_filter($this->env, __trans("Disabled"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label pt-0\">";
        // line 105
        echo twig_escape_filter($this->env, __trans("Hidden"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"hidden\" value=\"1\"";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hidden", [], "any", false, false, false, 108)) {
            echo " checked";
        }
        echo " id=\"hidden-yes\">
                                <label class=\"form-check-label\" for=\"hidden-yes\">";
        // line 109
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"hidden\" value=\"0\"";
        // line 112
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "hidden", [], "any", false, false, false, 112)) {
            echo " checked";
        }
        echo " id=\"hidden-no\">
                                <label class=\"form-check-label\" for=\"hidden-no\">";
        // line 113
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label pt-0\">";
        // line 118
        echo twig_escape_filter($this->env, __trans("Activation"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"setup\" value=\"after_order\"";
        // line 121
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "setup", [], "any", false, false, false, 121) == "after_order")) {
            echo " checked";
        }
        echo " id=\"activation-after-order\">
                                <label class=\"form-check-label\" for=\"activation-after-order\">";
        // line 122
        echo twig_escape_filter($this->env, __trans("After order is placed"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"setup\" value=\"after_payment\"";
        // line 125
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "setup", [], "any", false, false, false, 125) == "after_payment")) {
            echo " checked";
        }
        echo " id=\"activation-after-payment\">
                                <label class=\"form-check-label\" for=\"activation-after-payment\">";
        // line 126
        echo twig_escape_filter($this->env, __trans("After payment is received"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"setup\" value=\"manual\"";
        // line 129
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "setup", [], "any", false, false, false, 129) == "manual")) {
            echo " checked";
        }
        echo " id=\"activation-manual\">
                                <label class=\"form-check-label\" for=\"activation-manual\">";
        // line 130
        echo twig_escape_filter($this->env, __trans("Manual activation"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 135
        echo twig_escape_filter($this->env, __trans("Icon/Image URL"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"input-group\">
                                <input class=\"form-control\" type=\"text\" name=\"icon_url\" id=\"bb-icon\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "icon_url", [], "any", false, false, false, 138), "html", null, true);
        echo "\" style=\"width: 80%\">
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 143
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 145), "html", null, true);
        echo "\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 149
        echo twig_escape_filter($this->env, __trans("Slug"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"slug\" value=\"";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 151), "html", null, true);
        echo "\" required>
                        </div>
                    </div>

                    <hr>

                    <h2>";
        // line 157
        echo twig_escape_filter($this->env, __trans("Pricing & Stock Control"), "html", null, true);
        echo "</h2>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 159
        echo twig_escape_filter($this->env, __trans("Enable stock control"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" id=\"radioStockControlYes\" name=\"stock_control\" value=\"1\"";
        // line 162
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stock_control", [], "any", false, false, false, 162)) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioStockControlYes\">";
        // line 163
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" id=\"radioStockControlNo\" name=\"stock_control\" value=\"0\"";
        // line 166
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stock_control", [], "any", false, false, false, 166)) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioStockControlNo\">";
        // line 167
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 172
        echo twig_escape_filter($this->env, __trans("Allow quantity selection on order form"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" id=\"radioAllowQuantitySelectYes\" name=\"allow_quantity_select\" value=\"1\"";
        // line 175
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "allow_quantity_select", [], "any", false, false, false, 175)) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioAllowQuantitySelectYes\">";
        // line 176
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" id=\"radioAllowQuantitySelectNo\" name=\"allow_quantity_select\" value=\"0\"";
        // line 179
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "allow_quantity_select", [], "any", false, false, false, 179)) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioAllowQuantitySelectNo\">";
        // line 180
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 185
        echo twig_escape_filter($this->env, __trans("Quantity in stock"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"quantity_in_stock\" value=\"";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity_in_stock", [], "any", false, false, false, 187), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    ";
        // line 191
        $this->loadTemplate("partial_pricing.html.twig", "mod_product_manage.html.twig", 191)->display(twig_array_merge($context, ["product" => ($context["product"] ?? null)]));
        // line 192
        echo "
                    <hr>

                    <h2>";
        // line 195
        echo twig_escape_filter($this->env, __trans("Description"), "html", null, true);
        echo "</h2>
                    <div class=\"form-group mb-3 row\">
                        <div class=\"col\">
                            <textarea class=\"bb-textarea\" name=\"description\" rows=\"5\">";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 198), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 202
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 202), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\">";
        // line 203
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-config\" role=\"tabpanel\" aria-labelledby=\"config-tab\">
            ";
        // line 209
        $context["service_partial"] = (("mod_service" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "type", [], "any", false, false, false, 209)) . "_config.html.twig");
        // line 210
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_template_exists", [["file" => ($context["service_partial"] ?? null)]], "method", false, false, false, 210)) {
            // line 211
            echo "                ";
            $this->loadTemplate(($context["service_partial"] ?? null), "mod_product_manage.html.twig", 211)->display(twig_array_merge($context, ["product" => ($context["product"] ?? null)]));
            // line 212
            echo "            ";
        } else {
            // line 213
            echo "                <div class=\"help\">
                    <h5>";
            // line 214
            echo twig_escape_filter($this->env, __trans("No additional configuration for this product is required"), "html", null, true);
            echo "</h5>
                </div>
            ";
        }
        // line 217
        echo "        </div>

        <div class=\"tab-pane fade\" id=\"tab-addons\" role=\"tabpanel\" aria-labelledby=\"addons-tab\">
            <form method=\"post\" action=\"admin/product/update\" class=\"api-form\" data-api-msg=\"";
        // line 220
        echo twig_escape_filter($this->env, __trans("Product configuration updated"), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                <div class=\"card-body\">
                    <h5>";
        // line 223
        echo twig_escape_filter($this->env, __trans("Choose which addons you would like to offer with"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 223), "html", null, true);
        echo "</h5>
                </div><input type=\"hidden\" name=\"addons[]\" value=\"\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <tbody>
                        ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_addon_get_pairs", [], "any", false, false, false, 227));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["addon_id"] => $context["addon_title"]) {
            // line 228
            echo "                        <tr>
                            <td class=\"w-1\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"addons[]\" value=\"";
            // line 230
            echo twig_escape_filter($this->env, $context["addon_id"], "html", null, true);
            echo "\" id=\"addon_";
            echo twig_escape_filter($this->env, $context["addon_id"], "html", null, true);
            echo "\"";
            if (twig_in_filter($context["addon_id"], ($context["assigned_addons"] ?? null))) {
                echo " checked";
            }
            echo ">
                            </td>
                            <td>
                                <label for=\"addon_";
            // line 233
            echo twig_escape_filter($this->env, $context["addon_id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["addon_title"], "html", null, true);
            echo "</label>
                            </td>
                            <td class=\"w-1\">
                                <a class=\"btn btn-icon\" href=\"";
            // line 236
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/product/addon");
            echo "/";
            echo twig_escape_filter($this->env, $context["addon_id"], "html", null, true);
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
            // line 244
            echo "                        <tr>
                            <td class=\"text-muted\" colspan=\"3\">";
            // line 245
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['addon_id'], $context['addon_title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "                    </tbody>
                </table>

                <div class=\"card-footer\">
                    <a href=\"";
        // line 252
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product/addons");
        echo "#tab-new\" class=\"btn btn-primary\">
                        <svg class=\"icon\">
                            <use xlink:href=\"#plus\" />
                        </svg>
                        ";
        // line 256
        echo twig_escape_filter($this->env, __trans("Create new addon"), "html", null, true);
        echo "
                    </a>

                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 259
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 259), "html", null, true);
        echo "\">
                    <input type=\"submit\" value=\"";
        // line 260
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                </div>
            </form>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-upgrades\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h5>";
        // line 267
        echo twig_escape_filter($this->env, __trans("Choose which products can client upgrade to"), "html", null, true);
        echo "</h5>
                <form method=\"post\" action=\"admin/product/update\" class=\"api-form\" data-api-msg=\"";
        // line 268
        echo twig_escape_filter($this->env, __trans("Product configuration updated"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 269
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 271
        echo twig_escape_filter($this->env, __trans("Product Upgrades"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                        <input type=\"hidden\" name=\"upgrades[]\" value=\"\"/>
                            ";
        // line 274
        $context["products"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_get_pairs", [], "any", false, false, false, 274);
        // line 275
        echo "                            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                                <tbody>
                                    ";
        // line 277
        $context["products"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_get_pairs", [], "any", false, false, false, 277);
        // line 278
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["ptitle"]) {
            // line 279
            echo "                                    ";
            if (($context["id"] != twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 279))) {
                // line 280
                echo "                                    <tr>
                                        <td class=\"w-1\">
                                            <input class=\"form-check-input\" type=\"checkbox\" name=\"upgrades[]\" value=\"";
                // line 282
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\" id=\"upgrades";
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\" ";
                if ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "upgrades", [], "any", false, false, false, 282)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["id"]] ?? null) : null)) {
                    echo " checked";
                }
                echo ">
                                        </td>
                                        <td>
                                            <label for=\"upgrades[";
                // line 285
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "]\">";
                echo twig_escape_filter($this->env, $context["ptitle"], "html", null, true);
                echo "</label>
                                        </td>
                                    </tr>
                                    ";
            }
            // line 289
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['ptitle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 295
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 295), "html", null, true);
        echo "\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\">";
        // line 296
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-links\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h5>";
        // line 303
        echo twig_escape_filter($this->env, __trans("Product Links"), "html", null, true);
        echo "</h5>
                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
        // line 305
        echo twig_escape_filter($this->env, __trans("Order Page (via ID)"), "html", null, true);
        echo "</label>
                    <div class=\"col\">
                        <input class=\"form-control\" type=\"text\" value=\"";
        // line 307
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 307), "html", null, true);
        echo "\" readonly>
                    </div>
                </div>
                <div class=\"form-group mb-3 row\">
                    <label class=\"form-label col-3 col-form-label\">";
        // line 311
        echo twig_escape_filter($this->env, __trans("Order Page (via Link)"), "html", null, true);
        echo "</label>
                    <div class=\"col\">
                        <input class=\"form-control\" type=\"text\" value=\"";
        // line 313
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 313), "html", null, true);
        echo "\" readonly>
                    </div>
                </div>
            </div>

            <div class=\"card-footer text-center\">
                <a href=\"";
        // line 319
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 319), "html", null, true);
        echo "\" class=\"btn btn-primary\" target=\"_blank\">
                    <svg class=\"icon\" width=\"24\" height=\"24\">
                        <use xlink:href=\"#search\" />
                    </svg>
                    <span>";
        // line 323
        echo twig_escape_filter($this->env, __trans("View as client"), "html", null, true);
        echo "</span>
                </a>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 331
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["mf"], "macro_bb_editor", [".bb-textarea"], 331, $context, $this->getSourceContext());
    }

    // line 333
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 334
        echo "<script>
    \$(function() {
        \$(\"[name='form_id']\").on('change',function() {
            var form_id = \$(this).val();
            var btn = \$(\"#formbuilder_btn\");

            if (form_id != \"\") {
                btn.html(\"";
        // line 341
        echo twig_escape_filter($this->env, __trans("Edit form"), "html", null, true);
        echo "\");
                var href = \"";
        // line 342
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/formbuilder", ["id" => ""]);
        echo "\" + form_id;
                btn.attr('href', href);
            }
            else {
                btn.html(\"";
        // line 346
        echo twig_escape_filter($this->env, __trans("Add new form"), "html", null, true);
        echo "\");
                btn.attr(\"href\", \"";
        // line 347
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/formbuilder");
        echo "\");
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
        return "mod_product_manage.html.twig";
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
        return array (  817 => 347,  813 => 346,  806 => 342,  802 => 341,  793 => 334,  789 => 333,  782 => 331,  771 => 323,  762 => 319,  751 => 313,  746 => 311,  737 => 307,  732 => 305,  727 => 303,  717 => 296,  713 => 295,  706 => 290,  700 => 289,  691 => 285,  679 => 282,  675 => 280,  672 => 279,  667 => 278,  665 => 277,  661 => 275,  659 => 274,  653 => 271,  648 => 269,  644 => 268,  640 => 267,  630 => 260,  626 => 259,  620 => 256,  613 => 252,  607 => 248,  598 => 245,  595 => 244,  580 => 236,  572 => 233,  560 => 230,  556 => 228,  551 => 227,  542 => 223,  537 => 221,  533 => 220,  528 => 217,  522 => 214,  519 => 213,  516 => 212,  513 => 211,  510 => 210,  508 => 209,  499 => 203,  495 => 202,  488 => 198,  482 => 195,  477 => 192,  475 => 191,  468 => 187,  463 => 185,  455 => 180,  449 => 179,  443 => 176,  437 => 175,  431 => 172,  423 => 167,  417 => 166,  411 => 163,  405 => 162,  399 => 159,  394 => 157,  385 => 151,  380 => 149,  373 => 145,  368 => 143,  360 => 138,  354 => 135,  346 => 130,  340 => 129,  334 => 126,  328 => 125,  322 => 122,  316 => 121,  310 => 118,  302 => 113,  296 => 112,  290 => 109,  284 => 108,  278 => 105,  270 => 100,  264 => 99,  258 => 96,  252 => 95,  246 => 92,  243 => 91,  238 => 88,  233 => 85,  228 => 83,  223 => 80,  218 => 78,  213 => 75,  210 => 74,  202 => 72,  198 => 71,  195 => 70,  187 => 67,  184 => 66,  181 => 65,  179 => 64,  174 => 62,  171 => 61,  169 => 60,  163 => 57,  158 => 55,  153 => 53,  149 => 52,  145 => 51,  137 => 48,  126 => 40,  120 => 37,  114 => 34,  108 => 31,  102 => 28,  98 => 26,  94 => 25,  87 => 21,  80 => 19,  70 => 12,  66 => 10,  62 => 9,  55 => 7,  50 => 1,  48 => 5,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_product_manage.html.twig", "/var/www/modules/Product/html_admin/mod_product_manage.html.twig");
    }
}
