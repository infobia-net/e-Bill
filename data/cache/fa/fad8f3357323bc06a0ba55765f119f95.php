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

/* mod_currency_settings.html.twig */
class __TwigTemplate_eda5ca4f1f031db7e2868d45af634c03 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_currency_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_currency_settings.html.twig", 3)->unwrap();
        // line 5
        $context["active_menu"] = "system";
        // line 6
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_currency"]], "method", false, false, false, 6);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Currency settings"), "html", null, true);
    }

    // line 10
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 13
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#home\" />
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
        echo twig_escape_filter($this->env, __trans("Currency settings"), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    <div class=\"card-tabs\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" href=\"#tab-currencies\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 30
        echo twig_escape_filter($this->env, __trans("Currencies"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-new-currency\" data-bs-toggle=\"tab\" role=\"tab\">
                    <svg class=\"icon me-2\">
                        <use xlink:href=\"#plus\" />
                    </svg>
                    ";
        // line 37
        echo twig_escape_filter($this->env, __trans("Add new currency"), "html", null, true);
        echo "
                </a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-api-settings\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 41
        echo twig_escape_filter($this->env, __trans("Integrations / Automation"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-converter\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 44
        echo twig_escape_filter($this->env, __trans("Converter"), "html", null, true);
        echo "</a>
            </li>
        </ul>
        <div class=\"card\">
            <div class=\"tab-content\">
                <div class=\"tab-pane fade show active\" id=\"tab-currencies\" role=\"tabpanel\">
                    <div class=\"card-body border-bottom\">
                        <h3 class=\"card-title\">";
        // line 51
        echo twig_escape_filter($this->env, __trans("Manage currencies"), "html", null, true);
        echo "</h3>
                        <p class=\"card-subtitle\">";
        // line 52
        echo twig_escape_filter($this->env, __trans("The default currency is the one you define product pricing in. If your client chooses a different currency, pricing will be recalculated according to the conversion rate. Changing the default currency after orders have been placed may have unexpected issues. Nothing is recalculated on default currency change. Your income is calculated in the default currency. Changing the default currency after you have paid invoices will distort income statistics."), "html", null, true);
        echo "</p>
                    </div>
                    ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "sync_rate", [], "any", false, false, false, 54) != "never")) {
            // line 55
            echo "                        <div class=\"alert alert-success\" role=\"alert\">
                            ";
            // line 56
            echo twig_escape_filter($this->env, __trans("FOSSBilling is configured to automatically sync currency exchange rates."), "html", null, true);
            echo "
                        </div>
                    ";
        } else {
            // line 59
            echo "                        <div class=\"alert alert-warning\" role=\"alert\">
                            ";
            // line 60
            echo twig_escape_filter($this->env, __trans("FOSSBilling is not configured to automatically sync currency exchange rates."), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 63
        echo "                    <div class=\"table-responsive\">
                        <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                            <thead>
                            <tr>
                                <th>";
        // line 67
        echo twig_escape_filter($this->env, __trans("ISO code"), "html", null, true);
        echo "</th>
                                <th>";
        // line 68
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                                <th>";
        // line 69
        echo twig_escape_filter($this->env, __trans("Conversion rate"), "html", null, true);
        echo "</th>
                                <th>";
        // line 70
        echo twig_escape_filter($this->env, __trans("Example price"), "html", null, true);
        echo "</th>
                                <th class=\"w-1\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "currency_get_list", [], "any", false, false, false, 75), "list", [], "any", false, false, false, 75));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 76
            echo "                                <tr>
                                    <td>";
            // line 77
            if (twig_get_attribute($this->env, $this->source, $context["currency"], "default", [], "any", false, false, false, 77)) {
                echo "<strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 77), "html", null, true);
                echo "</strong>";
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 77), "html", null, true);
            }
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 79
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/currency/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 79), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 79), "html", null, true);
            echo "</a>
                                    </td>
                                    <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "conversion_rate", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                                    <td>";
            // line 82
            echo twig_call_macro($macros["mf"], "macro_currency_format", [1], 82, $context, $this->getSourceContext());
            echo " = ";
            echo twig_call_macro($macros["mf"], "macro_currency", [1, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 82)], 82, $context, $this->getSourceContext());
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-icon\" href=\"";
            // line 84
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/currency/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 84), "html", null, true);
            echo "\"
                                           data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 85
            echo twig_escape_filter($this->env, __trans("Edit"), "html", null, true);
            echo "\">
                                            <svg class=\"icon\">
                                                <use xlink:href=\"#edit\" />
                                            </svg>
                                        </a>
                                        <a class=\"btn btn-icon api-link\"
                                           href=\"";
            // line 91
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/currency/delete", ["code" => twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 91), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                                           data-api-redirect=\"";
            // line 92
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/currency");
            echo "\"
                                           data-api-type=\"danger\"
                                           data-api-confirm=\"";
            // line 94
            echo twig_escape_filter($this->env, __trans("Are you sure you want to delete?"), "html", null, true);
            echo "\"
                                           data-api-confirm-btn=\"";
            // line 95
            echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
            echo "\"
                                           data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 96
            echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
            echo "\">
                                            <svg class=\"icon\">
                                                <use xlink:href=\"#delete\" />
                                            </svg>
                                        </a>
                                        ";
            // line 101
            if ( !twig_get_attribute($this->env, $this->source, $context["currency"], "default", [], "any", false, false, false, 101)) {
                // line 102
                echo "                                            <a class=\"btn btn-icon api-link\"
                                               data-api-redirect=\"";
                // line 103
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/currency");
                echo "\"
                                               href=\"";
                // line 104
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/currency/set_default", ["code" => twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 104), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                echo "\"
                                               data-bs-toggle=\"tooltip\" data-bs-title=\"";
                // line 105
                echo twig_escape_filter($this->env, __trans("Set as default"), "html", null, true);
                echo "\">
                                                <svg class=\"icon\">
                                                    <use xlink:href=\"#check\" />
                                                </svg>
                                            </a>
                                        ";
            }
            // line 111
            echo "                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 114
            echo "                                <tr>
                                    <td colspan=\"5\" class=\"text-muted\">";
            // line 115
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                            </tbody>
                        </table>
                    </div>

                    <div class=\"card-footer text-center\">
                        <a class=\"btn btn-primary api-link\" href=\"";
        // line 123
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/currency/update_rates", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/currency");
        echo "\">
                            <svg class=\"icon icon-tabler\" width=\"24\" height=\"24\">
                                <use xlink:href=\"#refresh\" />
                            </svg>
                            <span>";
        // line 127
        echo twig_escape_filter($this->env, __trans("Update Rates"), "html", null, true);
        echo "</span>
                        </a>
                        ";
        // line 129
        if (((((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "provider", [], "any", true, true, false, 129)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "provider", [], "any", false, false, false, 129), "exchangerate-api")) : ("exchangerate-api")) == "exchangerate-api") &&  !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "exchangerate_api_key", [], "any", false, false, false, 129))) {
            // line 130
            echo "                            <a href=\"https://www.exchangerate-api.com\" target=\"_blank\"><p class=\"mt-1 mb-0\">";
            echo twig_escape_filter($this->env, __trans("Currency exchange rates By ExchangeRate-API."), "html", null, true);
            echo "</p></a>
                        ";
        }
        // line 132
        echo "                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-new-currency\" role=\"tabpanel\">
                    <form method=\"post\" action=\"";
        // line 136
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/currency/create");
        echo "\" class=\"api-form\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/currency");
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                        <div class=\"card-body\">
                            <div class=\"form-group mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 140
        echo twig_escape_filter($this->env, __trans("Code"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    ";
        // line 142
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["code", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "currency_get_pairs", [], "any", false, false, false, 142), "USD", 1], 142, $context, $this->getSourceContext());
        echo "
                                </div>
                            </div>
                            <div class=\"form-group mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 146
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"title\" value=\"\" required>
                                </div>
                            </div>
                            <div class=\"form-group mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 152
        echo twig_escape_filter($this->env, __trans("Conversion rate"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"conversion_rate\" value=\"1\" required>
                                </div>
                            </div>
                            <div class=\"form-group mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 158
        echo twig_escape_filter($this->env, __trans("Format"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"format\" value=\"\$ ";
        // line 160
        echo "{{price}}";
        echo "\" required>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer text-end\">
                            <button class=\"btn btn-primary\" type=\"submit\">";
        // line 165
        echo twig_escape_filter($this->env, __trans("Add"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-api-settings\" role=\"tabpanel\">
                    <form method=\"post\" action=\"";
        // line 171
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Successfully updated settings"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"ext\" value=\"mod_currency\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">";
        // line 175
        echo twig_escape_filter($this->env, __trans("Available exchange rate data providers"), "html", null, true);
        echo "</h3>
                            <p>";
        // line 176
        echo twig_escape_filter($this->env, __trans("FOSSBilling provides integration with various currency exchange rate data providers, allowing you to choose whichever one best suits your needs. By default, FOSSBilling will use the ExchangeRate-API \"Open Access Endpoint\" which does not require any configuration."), "html", null, true);
        echo "</p>
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>";
        // line 180
        echo twig_escape_filter($this->env, __trans("Provider"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 181
        echo twig_escape_filter($this->env, __trans("Authentication Required"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 182
        echo twig_escape_filter($this->env, __trans("Update Frequency"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 183
        echo twig_escape_filter($this->env, __trans("Supported Currencies"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 184
        echo twig_escape_filter($this->env, __trans("Pricing"), "html", null, true);
        echo "</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th><a href=\"https://www.exchangerate-api.com/docs/free\" target=\"_blank\">";
        // line 189
        echo twig_escape_filter($this->env, __trans("ExchangeRate-API (Open Access Endpoint)"), "html", null, true);
        echo "</a></th>
                                      <th>✖️</th>
                                      <th>";
        // line 191
        echo twig_escape_filter($this->env, __trans("1D"), "html", null, true);
        echo "</th>
                                      <th><a href=\"https://www.exchangerate-api.com/docs/supported-currencies\" target=\"_blank\">";
        // line 192
        echo twig_escape_filter($this->env, __trans("Supported currencies"), "html", null, true);
        echo "</a></th>
                                      <th>";
        // line 193
        echo twig_escape_filter($this->env, __trans("Free"), "html", null, true);
        echo "</th>
                                    </tr>
                                    <tr>
                                      <th><a href=\"https://www.exchangerate-api.com/#pricing\" target=\"_blank\">ExchangeRate-API</a></th>
                                      <th>☑️</th>
                                      <th>";
        // line 198
        echo twig_escape_filter($this->env, __trans("1D / 1H / 5M"), "html", null, true);
        echo "</th>
                                      <th><a href=\"https://www.exchangerate-api.com/docs/supported-currencies\" target=\"_blank\">";
        // line 199
        echo twig_escape_filter($this->env, __trans("Supported currencies"), "html", null, true);
        echo "</a></th>
                                      <th>";
        // line 200
        echo twig_escape_filter($this->env, __trans("Free / paid"), "html", null, true);
        echo "</th>
                                    </tr>
                                    <tr>
                                        <th><a href=\"https://apilayer.com/marketplace/currency_data-api\" target=\"_blank\">Currency Data API</a></th>
                                        <th>☑️</th>
                                        <th>";
        // line 205
        echo twig_escape_filter($this->env, __trans("1D / 1H / 10M / 1M"), "html", null, true);
        echo "</th>
                                        <th><a href=\"https://currencylayer.com/currencies\" target=\"_blank\">";
        // line 206
        echo twig_escape_filter($this->env, __trans("Supported currencies"), "html", null, true);
        echo "</a></th>
                                        <th>";
        // line 207
        echo twig_escape_filter($this->env, __trans("Free / paid"), "html", null, true);
        echo "</th>
                                    </tr>
                                    <tr>
                                        <th><a href=\"https://currencylayer.com/\" target=\"_blank\">currencylayer</a></th>
                                        <th>☑️</th>
                                        <th>";
        // line 212
        echo twig_escape_filter($this->env, __trans("1D / 1H / 10M / 1M"), "html", null, true);
        echo "</th>
                                        <th><a href=\"https://currencylayer.com/currencies\" target=\"_blank\">";
        // line 213
        echo twig_escape_filter($this->env, __trans("Supported currencies"), "html", null, true);
        echo "</a></th>
                                        <th>";
        // line 214
        echo twig_escape_filter($this->env, __trans("Free / paid"), "html", null, true);
        echo "</th>
                                    </tr>
                                  </tbody>                                    
                            </table>
                            <span class=\"text-muted\">";
        // line 218
        echo twig_escape_filter($this->env, __trans("When using ExchangeRate-API, their API informs FOSSBilling when the next update will occur which makes it more efficient for automated exchange rate syncing."), "html", null, true);
        echo "</span>
                            <br/>
                            <span class=\"text-muted\">";
        // line 220
        echo twig_escape_filter($this->env, __trans("To the best of our knowledge, \"Currency Data API\" and \"currencylayer\" are both owned by APILayer and provide the same data, but through a different API."), "html", null, true);
        echo "</span>
                            <div class=\"form-group mb-3 mt-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 222
        echo twig_escape_filter($this->env, __trans("Currency exchange rate data provider"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <select class=\"form-select\" aria-label=\"Currency data provider selection\" name=\"provider\" id=\"provider_select\">
                                        <option value=\"exchangerate-api\" selected>ExchangeRate-API</option>
                                        <option value=\"currency_data_api\">Currency Data API</option>
                                        <option value=\"currencylayer\">currencylayer</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 232
        echo twig_escape_filter($this->env, __trans("API key"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"exchangerate_api_key\" id=\"exchangerate_api\" value=\"";
        // line 234
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "exchangerate_api_key", [], "any", false, false, false, 234), "html", null, true);
        echo "\" hidden=\"true\">
                                    <input class=\"form-control\" type=\"text\" name=\"currencydata_key\" id=\"currencydata\" value=\"";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "currencydata_key", [], "any", false, false, false, 235), "html", null, true);
        echo "\" hidden=\"true\">
                                    <input class=\"form-control\" type=\"text\" name=\"currencylayer_key\" id=\"currencylayer\" value=\"";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "currencylayer_key", [], "any", false, false, false, 236), "html", null, true);
        echo "\"  hidden=\"true\">
                                    <span class=\"text-muted\" id=\"exchangerate_api_help_text\" hidden=\"true\">";
        // line 237
        echo twig_escape_filter($this->env, __trans("Leave this blank to use the ExchangeRate-API \"Open Access Endpoint\"."), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"form-group mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 241
        echo twig_escape_filter($this->env, __trans("Automatic sync rate"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <select class=\"form-select\" aria-label=\"Currency data provider selection\" name=\"sync_rate\" id=\"sync_rate\">
                                        <option value=\"auto\" id=\"auto-sync\" selected>";
        // line 244
        echo twig_escape_filter($this->env, __trans("Auto"), "html", null, true);
        echo "</option>
                                        <option value=\"never\">";
        // line 245
        echo twig_escape_filter($this->env, __trans("Never"), "html", null, true);
        echo "</option>
                                        <option value=\"1d\">";
        // line 246
        echo twig_escape_filter($this->env, __trans("Daily"), "html", null, true);
        echo "</option>
                                        <option value=\"1h\">";
        // line 247
        echo twig_escape_filter($this->env, __trans("Hourly"), "html", null, true);
        echo "</option>
                                        <option value=\"10m\">";
        // line 248
        echo twig_escape_filter($this->env, __trans("Every 10 minutes"), "html", null, true);
        echo "</option>
                                        <option value=\"5m\">";
        // line 249
        echo twig_escape_filter($this->env, __trans("Every 5 minutes"), "html", null, true);
        echo "</option>
                                        <option value=\"1m\" id=\"1m-sync\">";
        // line 250
        echo twig_escape_filter($this->env, __trans("Every minute"), "html", null, true);
        echo "</option>
                                    </select>
                                <p class=\"text-muted\">";
        // line 252
        echo twig_escape_filter($this->env, __trans("\"Auto\" is only available for ExchangeRate-API and when used will cause API requests to be made only when new data is made available, preventing excess requests."), "html", null, true);
        echo "</p>
                                <p class=\"text-muted\">";
        // line 253
        echo twig_escape_filter($this->env, __trans("Exchange rate syncing runs via the cronjob and as such is limited by the frequency of your cron schedule (typically 5 minutes)."), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer text-end\">
                            <button class=\"btn btn-primary\" type=\"submit\">";
        // line 258
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-converter\" role=\"tabpanel\">
                    <form method=\"post\" action=\"\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 265
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                        <div class=\"card-body\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">";
        // line 268
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "currency_get", [], "any", false, false, false, 268), "code", [], "any", false, false, false, 268), "html", null, true);
        echo "</span>
                                <input class=\"form-control\" type=\"text\" name=\"amount\" value=\"\" required placeholder=\"";
        // line 269
        echo twig_escape_filter($this->env, __trans("Amount"), "html", null, true);
        echo "\" onkeyup=\"doConvert();\">
                                <span class=\"input-group-text\">=</span>
                                <input class=\"form-control\" type=\"text\" id=\"converted_result\" value=\"\" placeholder=\"";
        // line 271
        echo twig_escape_filter($this->env, __trans("Result"), "html", null, true);
        echo "\" readonly>
                                <div>";
        // line 272
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["to", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "currency_get_pairs", [], "any", false, false, false, 272)], 272, $context, $this->getSourceContext());
        echo "</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 282
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 283
        echo "<script>
    function doConvert() {
        var price = \$('input[name=\"amount\"]').val();
        var code = \$('select[name=\"to\"]').val();

        bb.post('guest/currency/format', { price: price, code: code, CSRFToken: \"";
        // line 288
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" }, function(result) {
            \$('#converted_result').val(result);
        });

        return false;
    };

    function switchKeyBox(value){
        if(value === 'currencylayer'){
            document.getElementById(\"currencydata\").hidden = true;
            document.getElementById(\"currencylayer\").hidden = false;
            document.getElementById(\"exchangerate_api\").hidden = true;
            document.getElementById(\"exchangerate_api_help_text\").hidden = true;
            document.getElementById(\"auto-sync\").disabled = true;
            document.getElementById(\"1m-sync\").disabled = false;
        } else if(value === 'currency_data_api'){
            document.getElementById(\"currencydata\").hidden = false;
            document.getElementById(\"currencylayer\").hidden = true;
            document.getElementById(\"exchangerate_api\").hidden = true;
            document.getElementById(\"exchangerate_api_help_text\").hidden = true;
            document.getElementById(\"auto-sync\").disabled = true;
            document.getElementById(\"1m-sync\").disabled = false;
        } else {
            document.getElementById(\"currencydata\").hidden = true;
            document.getElementById(\"currencylayer\").hidden = true;
            document.getElementById(\"exchangerate_api\").hidden = false;
            document.getElementById(\"exchangerate_api_help_text\").hidden = false;
            document.getElementById(\"auto-sync\").disabled = false;
            document.getElementById(\"1m-sync\").disabled = true;
        }

        if(value === 'exchangerate-api'){
            if(document.getElementById(\"sync_rate\").value === '1m'){
                document.getElementById(\"sync_rate\").value = 'auto';
            }
        } else {
            if(document.getElementById(\"sync_rate\").value === 'auto'){
                document.getElementById(\"sync_rate\").value = '1d';
            }
        }
    }

    document.getElementById(\"provider_select\").onchange = function() {
        switchKeyBox(this.value);
    };
    document.addEventListener(\"DOMContentLoaded\", (event) => {
        document.getElementById(\"sync_rate\").value = \"";
        // line 334
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "sync_rate", [], "any", false, false, false, 334), "html", null, true);
        echo "\";
        document.getElementById(\"provider_select\").value = \"";
        // line 335
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "provider", [], "any", false, false, false, 335), "html", null, true);
        echo "\";
        switchKeyBox(\"";
        // line 336
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "provider", [], "any", false, false, false, 336), "html", null, true);
        echo "\");
    });

</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_currency_settings.html.twig";
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
        return array (  729 => 336,  725 => 335,  721 => 334,  672 => 288,  665 => 283,  661 => 282,  648 => 272,  644 => 271,  639 => 269,  635 => 268,  629 => 265,  619 => 258,  611 => 253,  607 => 252,  602 => 250,  598 => 249,  594 => 248,  590 => 247,  586 => 246,  582 => 245,  578 => 244,  572 => 241,  565 => 237,  561 => 236,  557 => 235,  553 => 234,  548 => 232,  535 => 222,  530 => 220,  525 => 218,  518 => 214,  514 => 213,  510 => 212,  502 => 207,  498 => 206,  494 => 205,  486 => 200,  482 => 199,  478 => 198,  470 => 193,  466 => 192,  462 => 191,  457 => 189,  449 => 184,  445 => 183,  441 => 182,  437 => 181,  433 => 180,  426 => 176,  422 => 175,  416 => 172,  410 => 171,  401 => 165,  393 => 160,  388 => 158,  379 => 152,  370 => 146,  363 => 142,  358 => 140,  352 => 137,  346 => 136,  340 => 132,  334 => 130,  332 => 129,  327 => 127,  318 => 123,  311 => 118,  302 => 115,  299 => 114,  292 => 111,  283 => 105,  279 => 104,  275 => 103,  272 => 102,  270 => 101,  262 => 96,  258 => 95,  254 => 94,  249 => 92,  245 => 91,  236 => 85,  230 => 84,  223 => 82,  219 => 81,  210 => 79,  199 => 77,  196 => 76,  191 => 75,  183 => 70,  179 => 69,  175 => 68,  171 => 67,  165 => 63,  159 => 60,  156 => 59,  150 => 56,  147 => 55,  145 => 54,  140 => 52,  136 => 51,  126 => 44,  120 => 41,  113 => 37,  103 => 30,  98 => 27,  94 => 26,  87 => 22,  80 => 20,  70 => 13,  66 => 11,  62 => 10,  55 => 8,  51 => 1,  49 => 6,  47 => 5,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_currency_settings.html.twig", "/var/www/modules/Currency/html_admin/mod_currency_settings.html.twig");
    }
}
