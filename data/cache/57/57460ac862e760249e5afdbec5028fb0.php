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

/* mod_system_settings.html.twig */
class __TwigTemplate_4a78052352cffbf06d7956ca601489a9 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_system_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_system_settings.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("System settings"), "html", null, true);
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
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 21
        echo twig_escape_filter($this->env, __trans("System settings"), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        $context["new_params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_system"]], "method", false, false, false, 26);
        // line 27
        echo "    ";
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_get_params", [], "any", false, false, false, 27);
        // line 28
        echo "    ";
        $context["enviroment"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_env", [], "any", false, false, false, 28);
        // line 29
        echo "    ";
        $context["external_ip"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_env", [["ip" => true]], "method", false, false, false, 29);
        // line 30
        echo "    <div class=\"card-tabs\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" href=\"#tab-index\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 33
        echo twig_escape_filter($this->env, __trans("Company details"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#company-legal\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 36
        echo twig_escape_filter($this->env, __trans("Company legal"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-countries\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 39
        echo twig_escape_filter($this->env, __trans("Countries"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-cache\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 42
        echo twig_escape_filter($this->env, __trans("Cache"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-about\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 45
        echo twig_escape_filter($this->env, __trans("About"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-reporting\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 48
        echo twig_escape_filter($this->env, __trans("Error reporting"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#network-interface\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 51
        echo twig_escape_filter($this->env, __trans("Network interface"), "html", null, true);
        echo "</a>
            </li>
        </ul>

        <div class=\"card\">
            <div class=\"tab-content\">
                <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
                    <form method=\"post\" action=\"";
        // line 58
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/system/update_params");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Company updated"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                        <div class=\"card-body\">
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 62
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"company_name\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_name", [], "any", false, false, false, 64), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 68
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"company_email\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_email", [], "any", false, false, false, 70), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 74
        echo twig_escape_filter($this->env, __trans("Phone"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"company_tel\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_tel", [], "any", false, false, false, 76), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 80
        echo twig_escape_filter($this->env, __trans("Address"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control mb-2\" type=\"text\" name=\"company_address_1\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_address_1", [], "any", false, false, false, 82), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Address line 1"), "html", null, true);
        echo "\">
                                    <input class=\"form-control mb-2\" type=\"text\" name=\"company_address_2\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_address_2", [], "any", false, false, false, 83), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Address line 2"), "html", null, true);
        echo "\">
                                    <input class=\"form-control mb-2\" type=\"text\" name=\"company_address_3\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_address_3", [], "any", false, false, false, 84), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Address line 3"), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 88
        echo twig_escape_filter($this->env, __trans("Logo URL"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"company_logo\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_logo", [], "any", false, false, false, 90), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 94
        echo twig_escape_filter($this->env, __trans("Logo URL (dark mode)"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"company_logo_dark\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_logo_dark", [], "any", false, false, false, 96), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 100
        echo twig_escape_filter($this->env, __trans("Favicon"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"company_favicon\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_favicon", [], "any", false, false, false, 102), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 106
        echo twig_escape_filter($this->env, __trans("Company number, chamber of commerce number"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"company_number\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_number", [], "any", false, false, false, 108), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 112
        echo twig_escape_filter($this->env, __trans("VAT number"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"company_vat_number\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_vat_number", [], "any", false, false, false, 114), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 118
        echo twig_escape_filter($this->env, __trans("Bank Name"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"company_bank_name\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_bank_name", [], "any", false, false, false, 120), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 124
        echo twig_escape_filter($this->env, __trans("BIC / SWIFT Code"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"company_bic\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_bic", [], "any", false, false, false, 126), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 130
        echo twig_escape_filter($this->env, __trans("Bank Account number"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"company_account_number\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_account_number", [], "any", false, false, false, 132), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 136
        echo twig_escape_filter($this->env, __trans("Display bank account information on documents?"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"company_display_bank_info\" id=\"display_bank_info_yes\" value=\"1\" ";
        // line 139
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_display_bank_info", [], "any", false, false, false, 139) == "1")) {
            echo "checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"display_bank_info_yes\">";
        // line 140
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                                    </div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"company_display_bank_info\" id=\"display_bank_info_no\" value=\"0\" ";
        // line 143
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_display_bank_info", [], "any", false, false, false, 143) == "0")) {
            echo "checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"display_bank_info_no\">";
        // line 144
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 149
        echo twig_escape_filter($this->env, __trans("Display bank account information on the bottom of every page?"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"company_bank_info_pagebottom\" id=\"company_bank_info_pagebottom_yes\" value=\"1\" ";
        // line 152
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_bank_info_pagebottom", [], "any", false, false, false, 152) == "1")) {
            echo "checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"company_bank_info_pagebottom_yes\">";
        // line 153
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                                    </div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" type=\"radio\" name=\"company_bank_info_pagebottom\" id=\"company_bank_info_pagebottom_no\" value=\"0\" ";
        // line 156
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_bank_info_pagebottom", [], "any", false, false, false, 156) == "0")) {
            echo "checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"company_bank_info_pagebottom_no\">";
        // line 157
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"form-label col-3 col-form-label\">
                                    ";
        // line 163
        echo twig_escape_filter($this->env, __trans("Disallow guest API to fetch FOSSBilling version"), "html", null, true);
        echo "
                                    <br/>
                                    <small class=\"text-muted\">";
        // line 165
        echo twig_escape_filter($this->env, __trans("Enabling this functionality may affect modules that depend on it."), "html", null, true);
        echo "</small>
                                </label>
                                <div class=\"col\">
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radio_showPublicYes\" type=\"radio\" name=\"hide_version_public\" value=\"1\" ";
        // line 169
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "hide_version_public", [], "any", false, false, false, 169) == "1")) {
            echo "checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"radio_showPublicYes\">
                                            ";
        // line 171
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radio_showPublicNo\" type=\"radio\" name=\"hide_version_public\" value=\"0\" ";
        // line 175
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "hide_version_public", [], "any", false, false, false, 175) == "0")) {
            echo "checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"radio_showPublicNo\">
                                            ";
        // line 177
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"form-label col-3 col-form-label\">
                                    ";
        // line 184
        echo twig_escape_filter($this->env, __trans("Hide some company information in the guest API"), "html", null, true);
        echo "
                                    <br/>
                                    <small class=\"text-muted\">";
        // line 186
        echo twig_escape_filter($this->env, __trans("Enabling this will hide some information from the \"company\" guest API endpoint such as the address, phone number, email, VAT number, and more."), "html", null, true);
        echo "</small>
                                </label>
                                <div class=\"col\">
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radio_showCompanyPublicYes\" type=\"radio\" name=\"hide_company_public\" value=\"1\" ";
        // line 190
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "hide_company_public", [], "any", false, false, false, 190) == "1")) {
            echo "checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"radio_showCompanyublicYes\">
                                            ";
        // line 192
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radio_showCompanyPublicNo\" type=\"radio\" name=\"hide_company_public\" value=\"0\" ";
        // line 196
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "hide_company_public", [], "any", false, false, false, 196) == "0")) {
            echo "checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"radio_showCompanyPublicNo\">
                                            ";
        // line 198
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 204
        echo twig_escape_filter($this->env, __trans("Signature"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <textarea class=\"form-control\" name=\"company_signature\" rows=\"2\">";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_signature", [], "any", false, false, false, 206), "html", null, true);
        echo "</textarea>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer text-end\">
                            <button class=\"btn btn-primary\" type=\"submit\">";
        // line 211
        echo twig_escape_filter($this->env, __trans("Update settings"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>

                <div class=\"tab-pane fade\" id=\"company-legal\" role=\"tabpanel\">
                    <form method=\"post\" action=\"";
        // line 217
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/system/update_params");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Company updated"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 218
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                        <div class=\"card-body\">
                            <div class=\"mb-3\">
                                <h3>";
        // line 221
        echo twig_escape_filter($this->env, __trans("Company terms of service, legal regulation"), "html", null, true);
        echo "</h3>
                                <textarea class=\"form-control bb-textarea\" name=\"company_tos\" rows=\"5\">";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_tos", [], "any", false, false, false, 222), "html", null, true);
        echo "</textarea>
                            </div>
                            <div class=\"mb-3\">
                                <h3>";
        // line 225
        echo twig_escape_filter($this->env, __trans("Company privacy policy"), "html", null, true);
        echo "</h3>
                                <textarea class=\"form-control bb-textarea\" name=\"company_privacy_policy\" rows=\"5\">";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_privacy_policy", [], "any", false, false, false, 226), "html", null, true);
        echo "</textarea>
                            </div>
                            <div class=\"mb-3\">
                                <h3>";
        // line 229
        echo twig_escape_filter($this->env, __trans("Notes"), "html", null, true);
        echo "</h3>
                                <textarea class=\"form-control bb-textarea\" name=\"company_note\" rows=\"5\">";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "company_note", [], "any", false, false, false, 230), "html", null, true);
        echo "</textarea>
                            </div>
                        </div>
                        <div class=\"card-footer text-end\">
                            <button class=\"btn btn-primary\" type=\"submit\">";
        // line 234
        echo twig_escape_filter($this->env, __trans("Update settings"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-countries\" role=\"tabpanel\">
                    <form method=\"post\" action=\"";
        // line 240
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Countries updated"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 241
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"ext\" value=\"mod_system\">
                        <div class=\"card-body\">
";
        // line 244
        $context["default_countries"] = ('' === $tmp = "AF=Afghanistan
AX=Aland Islands
AL=Albania
DZ=Algeria
AS=American Samoa
AD=Andorra
AO=Angola
AI=Anguilla
AQ=Antarctica
AG=Antigua and Barbuda
AR=Argentina
AM=Armenia
AW=Aruba
AU=Australia
AT=Austria
AZ=Azerbaijan
BS=Bahamas
BH=Bahrain
BD=Bangladesh
BB=Barbados
BY=Belarus
BE=Belgium
BZ=Belize
BJ=Benin
BM=Bermuda
BT=Bhutan
BO=Bolivia
BQ=Bonaire, Sint Eustatius and Saba
BA=Bosnia and Herzegovina
BW=Botswana
BR=Brazil
IO=British Indian Ocean Territory
VG=British Virgin Islands
BN=Brunei
BG=Bulgaria
BF=Burkina Faso
BI=Burundi
CV=Cabo Verde
KH=Cambodia
CM=Cameroon
CA=Canada
KY=Cayman Islands
CF=Central African Republic
TD=Chad
CL=Chile
CN=China
CX=Christmas Island
CC=Cocos (Keeling) Islands
CO=Colombia
KM=Comoros
CD=Congo (Democratic Republic of the)
CG=Congo (Republic of the)
CK=Cook Islands
CR=Costa Rica
CI=Cote D'Ivoire
HR=Croatia
CU=Cuba
CW=Curacao
CY=Cyprus
CZ=Czechia
DK=Denmark
DJ=Djibouti
DM=Dominica
DO=Dominican Republic
EC=Ecuador
EG=Egypt
SV=El Salvador
GQ=Equatorial Guinea
ER=Eritrea
EE=Estonia
SZ=Eswatini
ET=Ethiopia
FK=Falkland Islands (Islas Malvinas)
FO=Faroe Islands
FJ=Fiji
FI=Finland
FR=France
GF=French Guiana
PF=French Polynesia
TF=French Southern Territories
GA=Gabon
GM=Gambia
GE=Georgia
DE=Germany
GH=Ghana
GI=Gibraltar
GR=Greece
GL=Greenland
GD=Grenada
GP=Guadeloupe
GU=Guam
GT=Guatemala
GG=Guernsey
GN=Guinea
GW=Guinea-Bissau
GY=Guyana
HT=Haiti
HN=Honduras
HK=Hong Kong
HU=Hungary
IS=Iceland
IN=India
ID=Indonesia
IR=Iran
IQ=Iraq
IE=Ireland
IM=Isle of Man
IL=Israel
IT=Italy
JM=Jamaica
JP=Japan
JE=Jersey
JO=Jordan
KZ=Kazakhstan
KE=Kenya
KI=Kiribati
KW=Kuwait
KG=Kyrgyzstan
LA=Laos
LV=Latvia
LB=Lebanon
LS=Lesotho
LR=Liberia
LY=Libya
LI=Liechtenstein
LT=Lithuania
LU=Luxembourg
MO=Macau
MG=Madagascar
MW=Malawi
MY=Malaysia
MV=Maldives
ML=Mali
MT=Malta
MH=Marshall Islands
MQ=Martinique
MR=Mauritania
MU=Mauritius
YT=Mayotte
MX=Mexico
FM=Micronesia
MD=Moldova
MC=Monaco
MN=Mongolia
ME=Montenegro
MS=Montserrat
MA=Morocco
MZ=Mozambique
MM=Myanmar (Burma)
NA=Namibia
NR=Nauru
NP=Nepal
NL=Netherlands
NC=New Caledonia
NZ=New Zealand
NI=Nicaragua
NE=Niger
NG=Nigeria
NU=Niue
NF=Norfolk Island
KP=North Korea
MK=North Macedonia
MP=Northern Mariana Islands
NO=Norway
OM=Oman
PK=Pakistan
PW=Palau
PS=Palestine
PA=Panama
PG=Papua New Guinea
PY=Paraguay
PE=Peru
PH=Philippines
PN=Pitcairn Islands
PL=Poland
PT=Portugal
PR=Puerto Rico
QA=Qatar
RE=Reunion
RO=Romania
RU=Russia
RW=Rwanda
BL=Saint Barthelemy
SH=Saint Helena, Ascension and Tristan da Cunha
KN=Saint Kitts And Nevis
LC=Saint Lucia
MF=Saint Martin
VC=Saint Vincent and the Grenadines
PM=Saint Pierre And Miquelon
WS=Samoa
SM=San Marino
ST=Sao Tome And Principe
SA=Saudi Arabia
SN=Senegal
RS=Serbia
SC=Seychelles
SL=Sierra Leone
SG=Singapore
SX=Sint Maarten
SK=Slovakia
SI=Slovenia
SB=Solomon Islands
SO=Somalia
ZA=South Africa
KR=South Korea
ES=Spain
LK=Sri Lanka
SD=Sudan
SR=Suriname
SJ=Svalbard and Jan Mayen
SE=Sweden
CH=Switzerland
SY=Syria
TW=Taiwan
TJ=Tajikistan
TZ=Tanzania
TH=Thailand
TP=Timor-Leste
TG=Togo
TK=Tokelau
TO=Tonga
TT=Trinidad and Tobago
TN=Tunisia
TR=Turkey
TM=Turkmenistan
TC=Turks and Caicos Islands
TV=Tuvalu
UG=Uganda
UA=Ukraine
AE=United Arab Emirates
GB=United Kingdom
US=United States
UM=United States Minor Outlying Islands
UY=Uruguay
UZ=Uzbekistan
VU=Vanuatu
VA=Vatican City
VE=Venezuela
VN=Vietnam
VI=Virgin Islands (U.S.)
WF=Wallis and Futuna
EH=Western Sahara
YE=Yemen
ZM=Zambia
ZW=Zimbabwe
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 491
        echo "                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 492
        echo twig_escape_filter($this->env, __trans("List of countries"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <textarea class=\"form-control\" name=\"countries\" rows=\"25\" placeholder=\"US=United States\">";
        // line 494
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["new_params"] ?? null), "countries", [], "any", true, true, false, 494)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["new_params"] ?? null), "countries", [], "any", false, false, false, 494), ($context["default_countries"] ?? null))) : (($context["default_countries"] ?? null))), "html", null, true);
        echo "</textarea>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer text-end\">
                            <button class=\"btn btn-primary\" type=\"submit\">";
        // line 499
        echo twig_escape_filter($this->env, __trans("Update settings"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-cache\" role=\"tabpanel\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">";
        // line 506
        echo twig_escape_filter($this->env, __trans("Cache control"), "html", null, true);
        echo "</h3>
                        <div class=\"card-actions\">
                            <form method=\"post\" action=\"";
        // line 508
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/system/clear_cache");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Cache directory is cleared"), "html", null, true);
        echo "\">
                                <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 509
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                                <button class=\"btn btn-danger\" type=\"submit\">";
        // line 510
        echo twig_escape_filter($this->env, __trans("Invalidate cache"), "html", null, true);
        echo "</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-about\" role=\"tabpanel\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">";
        // line 518
        echo twig_escape_filter($this->env, __trans("About FOSSBilling"), "html", null, true);
        echo "</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"datagrid\">
                            <div class=\"datagrid-item\">
                                <div class=\"datagrid-title\">";
        // line 523
        echo twig_escape_filter($this->env, __trans("FOSSBilling version"), "html", null, true);
        echo "</div>
                                <div class=\"datagrid-content\">";
        // line 524
        echo twig_escape_filter($this->env, ($context["FOSSBillingVersion"] ?? null), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"datagrid-item\">
                                <div class=\"datagrid-title\">";
        // line 527
        echo twig_escape_filter($this->env, __trans("PHP version"), "html", null, true);
        echo "</div>
                                <div class=\"datagrid-content\">";
        // line 528
        echo twig_escape_filter($this->env, twig_constant("PHP_VERSION"), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"datagrid-item\">
                                <div class=\"datagrid-title\">";
        // line 531
        echo twig_escape_filter($this->env, __trans("Instance ID"), "html", null, true);
        echo "</div>
                                <div class=\"datagrid-content\">";
        // line 532
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_instance_id", [], "any", false, false, false, 532), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"datagrid-item\">
                                <div class=\"datagrid-title\">";
        // line 535
        echo twig_escape_filter($this->env, __trans("License"), "html", null, true);
        echo "</div>
                                <div class=\"datagrid-content\"><a href=\"https://github.com/FOSSBilling/FOSSBilling/blob/main/LICENSE\">Apache 2.0</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-reporting\" role=\"tabpanel\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">";
        // line 544
        echo twig_escape_filter($this->env, __trans("Error reporting"), "html", null, true);
        echo "</h3>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 547
        $context["last_change"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_last_error_reporting_change", [], "any", false, false, false, 547);
        // line 548
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_error_reporting_enabled", [], "any", false, false, false, 548)) {
            // line 549
            echo "                            <div class=\"alert alert-success\" role=\"alert\">
                                <p>";
            // line 550
            echo twig_escape_filter($this->env, __trans("Error reporting is enabled."), "html", null, true);
            echo "</p>
                                <p>";
            // line 551
            echo twig_escape_filter($this->env, __trans("This FOSSBilling instance is automatically sending errors which allows us to more easily improve the software and keep it stable. Thanks!"), "html", null, true);
            echo "</p>
                                <a class=\"btn btn-danger api-link\" href=\"";
            // line 552
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/system/toggle_error_reporting", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" data-api-msg=\"";
            echo twig_escape_filter($this->env, __trans("Error reporting is now disabled."), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Disable error reporting"), "html", null, true);
            echo "</a>
                            </div>
                        ";
        } else {
            // line 555
            echo "                            <div class=\"alert alert-danger\" role=\"alert\">
                                <p>";
            // line 556
            echo twig_escape_filter($this->env, __trans("Error reporting is disabled."), "html", null, true);
            echo "</p>
                                <p>";
            // line 557
            echo twig_escape_filter($this->env, __trans("Please consider enabling error reporting. Doing so allows us to provide you with better technical support and helps us to proactively improve FOSSBilling."), "html", null, true);
            echo "</p>
                                <a class=\"btn btn-success api-link\" href=\"";
            // line 558
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/system/toggle_error_reporting", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" data-api-msg=\"";
            echo twig_escape_filter($this->env, __trans("Error reporting is now enabled."), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Enable error reporting"), "html", null, true);
            echo "</a>
                            </div>
                        ";
        }
        // line 561
        echo "                        <p>";
        echo twig_escape_filter($this->env, __trans("FOSSBilling optionally includes automated error reporting to help aid the project's development and stability. To find the most up-to-date information about it, you should review the links and information below."), "html", null, true);
        echo "</p>
                        <ul>
                            <li><a href=\"https://fossbilling.org/docs/faq/error-reporting\" target=\"_blank\">";
        // line 563
        echo twig_escape_filter($this->env, __trans("Learn more about error reporting"), "html", null, true);
        echo "</a></li>
                            <li>
                                <a href=\"https://fossbilling.org/docs/faq/error-reporting#error-reporting-changelog\" target=\"_blank\">";
        // line 565
        echo twig_escape_filter($this->env, __trans("Error reporting changelog"), "html", null, true);
        echo "</a>
                                <span class=\"text-muted\">(";
        // line 566
        echo twig_escape_filter($this->env, __trans("Last applicable behavior change: "), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["last_change"] ?? null), "html", null, true);
        echo ")</span>
                            </li>
                        </ul>
                        <span class=\"text-muted\">";
        // line 569
        echo twig_escape_filter($this->env, __trans("The last applicable behavior change represents the most recent FOSSBilling version that changed error reporting which also applies to this current version. There may have been more recent changes than what's listed."), "html", null, true);
        echo "</span>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"network-interface\" role=\"tabpanel\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">";
        // line 575
        echo twig_escape_filter($this->env, __trans("Network interface"), "html", null, true);
        echo "</h3>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"alert ";
        // line 578
        if (($context["external_ip"] ?? null)) {
            echo "alert-success";
        } else {
            echo "alert-danger";
        }
        echo "\" role=\"alert\" id=\"external-ip\">
                            ";
        // line 579
        if (($context["external_ip"] ?? null)) {
            // line 580
            echo "                                ";
            echo twig_escape_filter($this->env, __trans("With the current settings, your FOSSBilling instance will have an external IP address of: "), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["external_ip"] ?? null), "html", null, true);
            echo "
                            ";
        } else {
            // line 582
            echo "                                ";
            echo twig_escape_filter($this->env, __trans("The currently selected network interface does not appear to be able to reach the internet!"), "html", null, true);
            echo "
                            ";
        }
        // line 584
        echo "                        </div>

                        <form class=\"api-form\" method=\"post\" action=\"";
        // line 586
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/system/set_interface_ip");
        echo "\" data-api-jsonp=\"onAfterInterfaceSet\">
                            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 587
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                            <p>";
        // line 588
        echo twig_escape_filter($this->env, __trans("If your server has multiple network interfaces, you may select the default one for FOSSBilling to use when making requests here."), "html", null, true);
        echo "</p>
                            ";
        // line 589
        $context["interface_ips"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_get_interface_ips", [], "any", false, false, false, 589);
        // line 590
        echo "                            
                            <div class=\"col-12 col-lg-3\">
                                <label for=\"interface\">";
        // line 592
        echo twig_escape_filter($this->env, __trans("Select the default network interface:"), "html", null, true);
        echo "</label>
                                <select class=\"form-select\" aria-label=\"Available network interfaces\" name=\"interface\" id=\"interface\">
                                    <option value=\"0\" ";
        // line 594
        if ((twig_constant("BIND_TO") == 0)) {
            echo " selected ";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("None (Default PHP Behavior)"), "html", null, true);
        echo "</option>
                                    ";
        // line 595
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["interface_ips"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["interface"]) {
            // line 596
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["interface"], "html", null, true);
            echo "\" ";
            if ((twig_constant("BIND_TO") == $context["interface"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["interface"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['interface'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 598
        echo "                                </select>
                            </div>

                            <br>

                            <div class=\"col-12 col-lg-3\">
                                <label for=\"custom_interface\">";
        // line 604
        echo twig_escape_filter($this->env, __trans("Enter a custom interface to use:"), "html", null, true);
        echo "</label>
                                ";
        // line 605
        if ((!twig_in_filter(twig_constant("BIND_TO"), ($context["interface_ips"] ?? null)) && (twig_constant("BIND_TO") != 0))) {
            // line 606
            echo "                                    <input class=\"form-control mt-1\" type=\"text\" name=\"custom_interface\" id=\"custom_interface\" value=\"";
            echo twig_escape_filter($this->env, twig_constant("BIND_TO"), "html", null, true);
            echo "\">
                                ";
        } else {
            // line 608
            echo "                                    <input class=\"form-control mt-1\" type=\"text\" name=\"custom_interface\" id=\"custom_interface\">
                                ";
        }
        // line 610
        echo "                            </div>
                            <span class=\"text-muted\">";
        // line 611
        echo twig_escape_filter($this->env, __trans("If the dropdown menu doesn't have the appropriate network interface, please enter the IP address or name (e.g., eth0) of the correct one above."), "html", null, true);
        echo "</span>
                            <br>

                            <input type=\"submit\" class=\"btn btn-primary mt-1\" value=\"";
        // line 614
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 623
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 624
        echo "<script>
    function onAfterInterfaceSet(result) {
        API.admin.post('system/env', {
            ip: true,
            CSRFToken: \"";
        // line 628
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"
        }, function (ip) {
            FOSSBilling.message(`";
        // line 630
        echo twig_escape_filter($this->env, __trans("Network interface updated."), "html", null, true);
        echo "`);
            if(ip){
                document.getElementById('external-ip').innerText = `";
        // line 632
        echo twig_escape_filter($this->env, __trans("With the current settings, your FOSSBilling instance will have an external IP address of: "), "html", null, true);
        echo "` + ip;
                document.getElementById('external-ip').className = 'alert alert-success';
            } else {
                document.getElementById('external-ip').innerText = `";
        // line 635
        echo twig_escape_filter($this->env, __trans("The currently selected network interface does not appear to be able to reach the internet!"), "html", null, true);
        echo "`;
                document.getElementById('external-ip').className = 'alert alert-danger';
            }
        });
    }
</script>
";
    }

    // line 643
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["mf"], "macro_bb_editor", [".bb-textarea"], 643, $context, $this->getSourceContext());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_system_settings.html.twig";
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
        return array (  1166 => 643,  1155 => 635,  1149 => 632,  1144 => 630,  1139 => 628,  1133 => 624,  1129 => 623,  1117 => 614,  1111 => 611,  1108 => 610,  1104 => 608,  1098 => 606,  1096 => 605,  1092 => 604,  1084 => 598,  1069 => 596,  1065 => 595,  1057 => 594,  1052 => 592,  1048 => 590,  1046 => 589,  1042 => 588,  1038 => 587,  1034 => 586,  1030 => 584,  1024 => 582,  1016 => 580,  1014 => 579,  1006 => 578,  1000 => 575,  991 => 569,  983 => 566,  979 => 565,  974 => 563,  968 => 561,  958 => 558,  954 => 557,  950 => 556,  947 => 555,  937 => 552,  933 => 551,  929 => 550,  926 => 549,  923 => 548,  921 => 547,  915 => 544,  903 => 535,  897 => 532,  893 => 531,  887 => 528,  883 => 527,  877 => 524,  873 => 523,  865 => 518,  854 => 510,  850 => 509,  844 => 508,  839 => 506,  829 => 499,  821 => 494,  816 => 492,  813 => 491,  566 => 244,  560 => 241,  554 => 240,  545 => 234,  538 => 230,  534 => 229,  528 => 226,  524 => 225,  518 => 222,  514 => 221,  508 => 218,  502 => 217,  493 => 211,  485 => 206,  480 => 204,  471 => 198,  464 => 196,  457 => 192,  450 => 190,  443 => 186,  438 => 184,  428 => 177,  421 => 175,  414 => 171,  407 => 169,  400 => 165,  395 => 163,  386 => 157,  380 => 156,  374 => 153,  368 => 152,  362 => 149,  354 => 144,  348 => 143,  342 => 140,  336 => 139,  330 => 136,  323 => 132,  318 => 130,  311 => 126,  306 => 124,  299 => 120,  294 => 118,  287 => 114,  282 => 112,  275 => 108,  270 => 106,  263 => 102,  258 => 100,  251 => 96,  246 => 94,  239 => 90,  234 => 88,  225 => 84,  219 => 83,  213 => 82,  208 => 80,  201 => 76,  196 => 74,  189 => 70,  184 => 68,  177 => 64,  172 => 62,  166 => 59,  160 => 58,  150 => 51,  144 => 48,  138 => 45,  132 => 42,  126 => 39,  120 => 36,  114 => 33,  109 => 30,  106 => 29,  103 => 28,  100 => 27,  97 => 26,  93 => 25,  86 => 21,  79 => 19,  69 => 12,  65 => 10,  61 => 9,  54 => 5,  50 => 1,  48 => 7,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_system_settings.html.twig", "/var/www/modules/System/html_admin/mod_system_settings.html.twig");
    }
}
