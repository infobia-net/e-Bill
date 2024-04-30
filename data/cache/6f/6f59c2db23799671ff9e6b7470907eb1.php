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

/* mod_orderbutton_settings.html.twig */
class __TwigTemplate_4bff213562d14224a178889b72003e93 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_orderbutton_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_orderbutton_settings.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Order Button settings"), "html", null, true);
    }

    // line 10
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <ul class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 13
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#home\"/>
                </svg>
            </a>
        </li>
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 20
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 22
        echo twig_escape_filter($this->env, __trans("Order Button settings"), "html", null, true);
        echo "</li>
    </ul>
";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_orderbutton"]], "method", false, false, false, 27);
        // line 28
        echo "    <div class=\"card-tabs\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" href=\"#tab-index\"
                   data-bs-toggle=\"tab\">";
        // line 32
        echo twig_escape_filter($this->env, __trans("Order window settings"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-popup\" data-bs-toggle=\"tab\">";
        // line 35
        echo twig_escape_filter($this->env, __trans("Advanced settings"), "html", null, true);
        echo "</a>
            </li>
        </ul>

        <form method=\"post\" action=\"";
        // line 39
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\"
              data-api-reload=\"Settings updated\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"ext\" value=\"mod_orderbutton\">
            <div class=\"card\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
                        <div class=\"card-header border-0\">
                            <div>
                                <h3 class=\"card-title\">";
        // line 48
        echo twig_escape_filter($this->env, __trans("Order popup settings"), "html", null, true);
        echo "</h3>
                                <p class=\"card-subtitle\">";
        // line 49
        echo twig_escape_filter($this->env, __trans("Configure how your popup window will look like"), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-md-3 form-label\">";
        // line 54
        echo twig_escape_filter($this->env, __trans("Theme color"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <select class=\"form-select\" name=\"theme_color\" id=\"theme_color\">
                                        <option value=\"green\" ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "theme_color", [], "any", false, false, false, 57) == "green")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("Green"), "html", null, true);
        echo "</option>
                                        <option value=\"red\" ";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "theme_color", [], "any", false, false, false, 58) == "red")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("Red"), "html", null, true);
        echo "</option>
                                        <option value=\"blue\" ";
        // line 59
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "theme_color", [], "any", false, false, false, 59) == "blue")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("Blue"), "html", null, true);
        echo "</option>
                                        <option value=\"dark\" ";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "theme_color", [], "any", false, false, false, 60) == "dark")) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("Dark"), "html", null, true);
        echo "</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer text-end\">
                            <input type=\"submit\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary\"
                                   onclick=\"window.onbeforeunload = null;\">
                        </div>
                    </div>
                </div>

                <div class=\"tab-content\">
                    <div class=\"tab-pane fade\" id=\"tab-popup\" role=\"tabpanel\">
                        <div class=\"card-header border-0\">
                            <div>
                                <h3 class=\"card-title\">";
        // line 76
        echo twig_escape_filter($this->env, __trans("Advanced settings"), "html", null, true);
        echo "</h3>
                                <p class=\"card-subtitle\">";
        // line 77
        echo twig_escape_filter($this->env, __trans("Configure how your popup window will look like"), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"card-body\">

                            <div class=\"row mb-3\">
                                <label class=\"col-sm-4 col-md-3 col-form-label\">Sizing</label>
                                <div class=\"col-sm-7 col-md-6\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col\">
                                            <label class=\"col-form-label\" for=\"popup_width\">";
        // line 87
        echo twig_escape_filter($this->env, __trans("Width"), "html", null, true);
        echo "</label>
                                            <div class=\"input-group mb-2\">
                                                <input class=\"form-control\" type=\"text\" name=\"popup_width\" id=\"popup_width\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "popup_width", [], "any", true, true, false, 89)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "popup_width", [], "any", false, false, false, 89), 600)) : (600)), "html", null, true);
        echo "\" placeholder=\"600\">
                                                <span class=\"input-group-text\">px</span>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <label class=\"col-form-label\" for=\"border-radius\">";
        // line 94
        echo twig_escape_filter($this->env, __trans("Border radius"), "html", null, true);
        echo "</label>
                                            <div class=\"input-group mb-2\">
                                                <input class=\"form-control\" type=\"text\" name=\"border_radius\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "border_radius", [], "any", true, true, false, 96)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "border_radius", [], "any", false, false, false, 96), "0")) : ("0")), "html", null, true);
        echo "\" id=\"border-radius\">
                                                <span class=\"input-group-text\">px</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <label class=\"col-sm-4 col-md-3 col-form-label\">Background</label>
                                <div class=\"col-sm-7 col-md-6\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col\">
                                            <label class=\"col-form-label\" for=\"coloris-picker\">";
        // line 109
        echo twig_escape_filter($this->env, __trans("Color"), "html", null, true);
        echo "</label>
                                            <div>
                                                <input type=\"text\" class=\"form-control\" name=\"background_color\"
                                                       id=\"coloris-picker\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "background_color", [], "any", true, true, false, 112)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "background_color", [], "any", false, false, false, 112), "#000000")) : ("#000000")), "html", null, true);
        echo "\">
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <label class=\"col-form-label\" for=\"background_opacity\">";
        // line 116
        echo twig_escape_filter($this->env, __trans("Opacity"), "html", null, true);
        echo "</label>
                                            <div class=\"input-group mb-2\">
                                                <input type=\"text\" class=\"form-control\" name=\"background_opacity\"
                                                       id=\"background_opacity\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "background_opacity", [], "any", true, true, false, 119)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "background_opacity", [], "any", false, false, false, 119), 50)) : (50)), "html", null, true);
        echo "\">
                                                <span class=\"input-group-text\">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <label class=\"col-sm-4 col-md-3 col-form-label\">";
        // line 128
        echo twig_escape_filter($this->env, __trans("Loader (while content of popup is being loaded)"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-7 col-md-6\">
                                    <div class=\"d-flex flex-column gap-2\">
                                        ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 132
            echo "                                            ";
            $context["loader_link"] = (("img/assets/loaders/loader" . $context["i"]) . ".gif");
            // line 133
            echo "                                            <label class=\"form-selectgroup-item flex-fill\">
                                                <input type=\"radio\" name=\"loader\" id=\"loader";
            // line 134
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "loader", [], "any", false, false, false, 134) == $context["i"])) {
                echo "checked";
            }
            echo " class=\"form-selectgroup-input\">
                                                <div class=\"form-selectgroup-label d-flex align-items-center p-3\">
                                                    <div class=\"me-3\">
                                                        <span class=\"form-selectgroup-check\"></span>
                                                    </div>
                                                    <div>
                                                        <span>loader";
            // line 140
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</span>
                                                        <img class=\"ms-2\" src=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_mod_asset_url(($context["loader_link"] ?? null), "orderbutton"), "html", null, true);
            echo "\"/>
                                                    </div>
                                                </div>
                                            </label>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                                    </div>
                                </div>
                            </div>

                            <div class=\"row mb-3 mt-4\">
                                <label class=\"col-sm-4 col-md-3 form-label\" for=\"background-close\">";
        // line 151
        echo twig_escape_filter($this->env, __trans("Close (ESC key by default)"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-7 col-md-6\">
                                    <label class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" id=\"background-close\" type=\"checkbox\" name=\"background_close\" ";
        // line 154
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "background_close", [], "any", false, false, false, 154)) {
            echo "checked";
        }
        echo ">
                                        <span class=\"form-check-label\">";
        // line 155
        echo twig_escape_filter($this->env, __trans("Click on background closes popup"), "html", null, true);
        echo "</span>
                                    </label>
                                </div>
                            </div>

                            ";
        // line 160
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "formbuilder"]], "method", false, false, false, 160)) {
            // line 161
            echo "                                <div class=\"row mb-3\">
                                    <label class=\"col-sm-4 col-md-3 form-label\" for=\"show-custom-form-values\">";
            // line 162
            echo twig_escape_filter($this->env, __trans("Show values of custom form before checkout"), "html", null, true);
            echo "</label>
                                    <div class=\"col-sm-7 col-md-6\">
                                        <label class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" id=\"show-custom-form-values\" type=\"checkbox\" name=\"show_custom_form_values\" ";
            // line 165
            if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "show_custom_form_values", [], "any", false, false, false, 165)) {
                echo "checked";
            }
            echo ">
                                            <span class=\"form-check-label\">";
            // line 166
            echo twig_escape_filter($this->env, __trans("User input will be shown before checkout for custom form"), "html", null, true);
            echo "</span>
                                        </label>
                                    </div>
                                </div>
                            ";
        }
        // line 171
        echo "                        </div>
                        <div class=\"card-footer text-end\">
                            <input type=\"submit\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary\" onclick=\"window.onbeforeunload = null;\">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class=\"card mt-3\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 183
        echo twig_escape_filter($this->env, __trans("Order Button code"), "html", null, true);
        echo "</h3>
        </div>
        <form class=\"\">
            <div class=\"card-body\">
                <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 187
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                <div class=\"row mb-3\">
                    <div class=\"col\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-auto d-flex align-items-center mb-2\">
                                <label>";
        // line 192
        echo twig_escape_filter($this->env, __trans("Clicking on an HTML element with the classname or ID"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"col-5 col-sm-auto d-flex align-items-center mb-2\">
                                <input class=\"form-control\" type=\"text\" name=\"bind_selector\" id=\"bind_selector\" value=\"";
        // line 195
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "bind_selector", [], "any", true, true, false, 195)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "bind_selector", [], "any", false, false, false, 195), ".order-button")) : (".order-button")), "html", null, true);
        echo "\" placeholder=\".order-button\">
                            </div>
                            <div class=\"col-7 col-sm-auto d-flex align-items-center mb-2\">
                                <label>";
        // line 198
        echo twig_escape_filter($this->env, __trans("will open a popup window for"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"col-8 col-sm-2 d-flex align-items-center mb-2\">
                                ";
        // line 201
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["product_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_get_pairs", [], "any", false, false, false, 201), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "product_id", [], "any", false, false, false, 201), 0, "All products"], 201, $context, $this->getSourceContext());
        echo "
                            </div>
                            <div class=\"col-4 col-sm-auto d-flex align-items-center mb-2\">
                                <label>";
        // line 204
        echo twig_escape_filter($this->env, __trans("symbols"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-3\">
                    <div class=\"col\">
                        <div class=\"alert alert-info\" role=\"alert\">
                            <h4 class=\"alert-title\">";
        // line 212
        echo twig_escape_filter($this->env, __trans("IMPORTANT"), "html", null, true);
        echo "</h4>
                            <div class=\"text-muted\" id=\"button-info\">
                                <span class=\"d-block mb-2\">";
        // line 214
        echo twig_escape_filter($this->env, __trans("You need to add ID (if you want to use it for one html element) or class (if you want to use it for multiple elements) in order for it to work"), "html", null, true);
        echo "</span>
                                <div id=\"button-code-info\">
                                    <span class=\"d-block mb-2\">";
        // line 216
        echo twig_escape_filter($this->env, __trans("Add order-button class to your elements which must call popup. For example:"), "html", null, true);
        echo "</span>
                                    <div class=\"col\">
                                        <div class=\"input-group input-group-flat\">
                                            <textarea id=\"html-code\" rows=\"1\" class=\"form-control\" onclick=\"\$(this).trigger('select')\">&lt;button type=&quot;button&quot;&nbsp;class=&quot;order-button&quot;&gt;Order Now&lt;/button&gt;</textarea>
                                            <span class=\"input-group-text align-items-start pt-3\">
                                                <span class=\"input-group-link cursor-pointer clipboard-copy\" data-clipboard-target=\"#html-code\"
                                                    data-bs-toggle=\"tooltip\" aria-label=\"Copy\" data-bs-original-title=\"Copy\">
                                                    <svg class=\"icon\">
                                                        <use xlink:href=\"#copy\">
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <span class=\"d-block mt-3 mb-2\">";
        // line 231
        echo twig_escape_filter($this->env, __trans("Add data-product attribute to your element to open specific product. For example:"), "html", null, true);
        echo "</span>
                                <div class=\"col\">
                                    <div class=\"input-group input-group-flat\">
                                        <textarea id=\"html-code2\" rows=\"1\" class=\"form-control\" onclick=\"\$(this).trigger('select')\">&lt;button type=&quot;button&quot; class=&quot;order-button\" data-product=\"2\"&gt;Order Product#2 Now&lt;/button&gt;</textarea>
                                        <span class=\"input-group-text align-items-start pt-3\">
                                            <span class=\"input-group-link cursor-pointer clipboard-copy\" data-clipboard-target=\"#html-code2\"
                                                data-bs-toggle=\"tooltip\" aria-label=\"Copy\" data-bs-original-title=\"Copy\">
                                                <svg class=\"icon\">
                                                    <use xlink:href=\"#copy\">
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <span class=\"d-block mt-3\">";
        // line 245
        echo twig_escape_filter($this->env, __trans("data-product attribute value will be overridden if popup's product is selected from select-box above"), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row mb-3\">
                    <label for=\"domain-checker-form\" class=\"col-12 form-label\">";
        // line 252
        echo twig_escape_filter($this->env, __trans("Copy this code to your website"), "html", null, true);
        echo "</label>
                    <div class=\"col\">
                        <div class=\"input-group input-group-flat\">
                            <textarea id=\"script-code\" rows=\"3\" class=\"form-control\" onclick=\"\$(this).trigger('select')\"></textarea>
                            <span class=\"input-group-text align-items-start pt-3\">
                                <span class=\"input-group-link cursor-pointer clipboard-copy\" data-clipboard-target=\"#script-code\"
                                      data-bs-toggle=\"tooltip\" aria-label=\"Copy\" data-bs-original-title=\"Copy\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#copy\">
                                    </svg>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"card-footer text-end\">
                <button type=\"button\" class=\"btn btn-success\" id=\"load\">
                    <span>";
        // line 270
        echo twig_escape_filter($this->env, __trans("Try your popup"), "html", null, true);
        echo "</span>
                </button>
            </div>
        </form>
    </div>
";
    }

    // line 277
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 278
        echo "    <script type=\"text/javascript\">
        \$(function () {
            let changed = false;
            window.onbeforeunload = confirmExit;

            function confirmExit() {
                if (changed === true) {
                    return \"There are unsaved changes! If you will exit this page they will be lost. You can save them by clicking on UPDATE SETTINGS button.\";
                }
            }

            const generate_link = function (selector) {
                selector = (typeof selector === \"undefined\") ? \$('#bind_selector').val() : selector;

                const initial_link = \"";
        // line 292
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("orderbutton/js", ["options" => 1]);
        echo "\";

                const options = {
                    'width': \$('#popup_width').val(),
                    'theme_color': \$('#theme_color').val(),
                    'background_color': \$('#coloris-picker').val(),
                    'popup_top': \$('#popup-top').val(),
                    'popup_left': \$('#popup-left').val(),
                    'background_opacity': \$('#background-opacity').val(),
                    'background_close': \$('#background-close:checked').val(),
                    'show_custom_form_values': \$('#show-custom-form-values:checked').val(),
                    'bind_selector': selector,
                    'border_radius': \$('#border-radius').val(),
                    'product_id': \$('#product_id').val(),
                    'loader': \$('[name=loader]:checked').val()
                };

                let options_url = \"\";
                \$.each(options, function (k, v) {
                    if (v !== \"\" && typeof v !== \"undefined\") {
                        options_url += \"&\" + k + \"=\" + encodeURIComponent(v);
                    }
                });
                return initial_link + options_url;
            };

            const show_link = function () {
                \$('#script-code').text('\\<script type=\"text/javascript\" src=\"' + generate_link() + '\"\\>\\<\\/script\\>')
            };

            show_link();

            \$('#background-close, #show-custom-form-values').on('click', function () {
                changed = true;
                show_link();
            });

            \$('input').on('input', function () {
                changed = true;
                show_link();
            });

            \$('select, #background-color, input:radio').on('change', function () {
                changed = true;
                show_link();
            });

            \$('#bind_selector').on('input', function () {
                const selector = \$(this).val();
                if (selector[0] !== \".\" || selector[0] !== \"#\") {
                    \$('#button-info').parent().removeClass('alert-info').addClass('alert-danger');
                    \$('#button-code-info').html(\"<span class=\\\"d-block mb-2 text-danger\\\"><b>";
        // line 343
        echo twig_escape_filter($this->env, __trans("Class name should start with dot (.) or hashtag (#) for ID"), "html", null, true);
        echo "</b></span>\");
                }

                if (selector[0] === \".\") {
                    \$('#button-info').parent().removeClass('alert-danger').removeClass('alert-info').addClass('alert-info');
                    \$('#button-code-info').html(\"<span class=\\\"d-block mb-2\\\">";
        // line 348
        echo twig_escape_filter($this->env, __trans("Add \" + selector + \" class to your elements which must call popup. For example: "), "html", null, true);
        echo "\" + '</span><pre>&lt;button type=&quot;button&quot;' + '<span class=\"text-orange\">' + ' class=&quot;' + selector.substring(1) + '</span>' + '&quot; &gt;Order Now&lt;/button&gt;</pre>');
                }

                if (selector[0] === \"#\") {
                    \$('#button-info').parent().removeClass('alert-danger').removeClass('alert-info').addClass('alert-info');
                    \$('#button-code-info').html(\"<span class=\\\"d-block mb-2\\\">";
        // line 353
        echo twig_escape_filter($this->env, __trans("Add \" + selector + \" ID to your element which must call popup. For example: "), "html", null, true);
        echo "\" + '</span><pre>&lt;button type=&quot;button&quot;' + '<span class=\"text-orange\">' + ' id=&quot;' + selector.substring(1) + '</span>' + '&quot; &gt;Order Now&lt;/button&gt;</pre>');
                }
            });

            \$('#load').on('click', function () {
                const s = \$('#bind_selector').val() + new Date().getTime();
                \$('body>button').remove()
                \$.getScript(generate_link(s), function () {
                    const test_button = \$('<button/>').css({\"display\": \"none\"}).appendTo('body');
                    if (s.charAt(0) === '.') {
                        test_button.attr('class', s.substring(1));
                    } else {
                        test_button.attr('id', s.substring(1));
                    }

                });

                document.addEventListener('OrderButtonEventsReady', function (e) {
                    \$(s).trigger('click');
                }, false);
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
        return "mod_orderbutton_settings.html.twig";
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
        return array (  624 => 353,  616 => 348,  608 => 343,  554 => 292,  538 => 278,  534 => 277,  524 => 270,  503 => 252,  493 => 245,  476 => 231,  458 => 216,  453 => 214,  448 => 212,  437 => 204,  431 => 201,  425 => 198,  419 => 195,  413 => 192,  405 => 187,  398 => 183,  385 => 173,  381 => 171,  373 => 166,  367 => 165,  361 => 162,  358 => 161,  356 => 160,  348 => 155,  342 => 154,  336 => 151,  329 => 146,  318 => 141,  314 => 140,  299 => 134,  296 => 133,  293 => 132,  289 => 131,  283 => 128,  271 => 119,  265 => 116,  258 => 112,  252 => 109,  236 => 96,  231 => 94,  223 => 89,  218 => 87,  205 => 77,  201 => 76,  188 => 66,  175 => 60,  167 => 59,  159 => 58,  151 => 57,  145 => 54,  137 => 49,  133 => 48,  123 => 41,  118 => 39,  111 => 35,  105 => 32,  99 => 28,  96 => 27,  92 => 26,  85 => 22,  78 => 20,  68 => 13,  64 => 11,  60 => 10,  53 => 5,  49 => 1,  47 => 7,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_settings.html.twig", "/var/www/modules/Orderbutton/html_admin/mod_orderbutton_settings.html.twig");
    }
}
