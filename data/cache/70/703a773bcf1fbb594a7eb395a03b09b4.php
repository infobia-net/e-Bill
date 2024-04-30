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

/* mod_invoice_gateways.html.twig */
class __TwigTemplate_98bf1f35629da6e1a85a13963ec99404 extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_invoice_gateways.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_invoice_gateways.html.twig", 3)->unwrap();
        // line 5
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Payment gateways"), "html", null, true);
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
        echo twig_escape_filter($this->env, __trans("Payment gateways"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-new\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 19
        echo twig_escape_filter($this->env, __trans("New payment gateway"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-extension-directory\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 27
        echo twig_escape_filter($this->env, __trans("Install from the Extension Directory"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>

<div class=\"card\">
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
            ";
        // line 35
        $this->loadTemplate("partial_search.html.twig", "mod_invoice_gateways.html.twig", 35)->display($context);
        // line 36
        echo "            <table class=\"table card-table table-vcenter table-striped text-nowrap sortable\">
                <thead>
                    <tr>
                        <th>";
        // line 39
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                        <th>";
        // line 40
        echo twig_escape_filter($this->env, __trans("Code"), "html", null, true);
        echo "</th>
                        <th>";
        // line 41
        echo twig_escape_filter($this->env, __trans("Enabled"), "html", null, true);
        echo "</th>
                        <th>";
        // line 42
        echo twig_escape_filter($this->env, __trans("Allow one time payments"), "html", null, true);
        echo "</th>
                        <th>";
        // line 43
        echo twig_escape_filter($this->env, __trans("Allow subscriptions"), "html", null, true);
        echo "</th>
                        <th class=\"w-1\"></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_gateway_get_list", [twig_array_merge(["per_page" => 100], ($context["request"] ?? null))], "method", false, false, false, 48), "list", [], "any", false, false, false, 48));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gateway"]) {
            // line 49
            echo "                <tr>
                    <td>
                        <a href=\"";
            // line 51
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice/gateway");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gateway"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gateway"], "title", [], "any", false, false, false, 51), "html", null, true);
            echo "</a>
                    </td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gateway"], "code", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_call_macro($macros["mf"], "macro_q", [twig_get_attribute($this->env, $this->source, $context["gateway"], "enabled", [], "any", false, false, false, 54)], 54, $context, $this->getSourceContext());
            echo "</td>
                    <td>";
            // line 55
            echo twig_call_macro($macros["mf"], "macro_q", [twig_get_attribute($this->env, $this->source, $context["gateway"], "allow_single", [], "any", false, false, false, 55)], 55, $context, $this->getSourceContext());
            echo "</td>
                    <td>";
            // line 56
            echo twig_call_macro($macros["mf"], "macro_q", [twig_get_attribute($this->env, $this->source, $context["gateway"], "allow_recurrent", [], "any", false, false, false, 56)], 56, $context, $this->getSourceContext());
            echo "</td>
                    <td>
                        <a class=\"btn btn-icon api-link\"
                            href=\"";
            // line 59
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/gateway_copy", ["id" => twig_get_attribute($this->env, $this->source, $context["gateway"], "id", [], "any", false, false, false, 59), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                            title=\"";
            // line 60
            echo twig_escape_filter($this->env, __trans("Copy"), "html", null, true);
            echo "\"
                            data-api-redirect=\"";
            // line 61
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice/gateways");
            echo "\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#copy\" />
                            </svg>
                        </a>
                        <a class=\"btn btn-icon\" href=\"";
            // line 66
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice/gateway");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gateway"], "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#edit\" />
                            </svg>
                        </a>
                        <a class=\"btn btn-icon api-link\"
                            href=\"";
            // line 72
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/gateway_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["gateway"], "id", [], "any", false, false, false, 72), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                            data-api-confirm=\"";
            // line 73
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                            data-api-redirect=\"";
            // line 74
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice/gateways");
            echo "\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#delete\" />
                            </svg>
                        </a>
                    </td>
                </tr>
                </tbody>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 83
            echo "                <tbody>
                    <tr>
                        <td class=\"text-muted\" colspan=\"5\">";
            // line 85
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                    </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gateway'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            </table>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-new\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h1>";
        // line 94
        echo twig_escape_filter($this->env, __trans("Adding new payment gateway"), "html", null, true);
        echo "</h1>
                <p class=\"text-muted\">";
        // line 95
        echo twig_escape_filter($this->env, __trans("Although FOSSBilling ships with most popular payment gateways, you can install other gateways."), "html", null, true);
        echo "</p>
                <p>";
        // line 96
        echo twig_escape_filter($this->env, __trans("Follow these instructions to install new payment gateway."), "html", null, true);
        echo "</p>
                <ul>
                    <li>";
        // line 98
        echo twig_escape_filter($this->env, __trans("Check for payment gateway at"), "html", null, true);
        echo " <a href=\"http://extensions.fossbilling.org/\" target=\"_blank\">FOSSBilling extensions site</a> ";
        echo twig_escape_filter($this->env, __trans("for more payment gateways"), "html", null, true);
        echo "</li>
                    <li>";
        // line 99
        echo twig_escape_filter($this->env, __trans("Download payment gateway extension file and place it to"), "html", null, true);
        echo "<strong>";
        echo twig_escape_filter($this->env, twig_constant("PATH_LIBRARY"), "html", null, true);
        echo "/Payment/Adapter</strong></li>
                    <li>";
        // line 100
        echo twig_escape_filter($this->env, __trans("After file is uploaded in place, reload this page."), "html", null, true);
        echo "</li>
                    <li>";
        // line 101
        echo twig_escape_filter($this->env, __trans("Select uploaded file name and click on install."), "html", null, true);
        echo "</li>
                    <li>";
        // line 102
        echo twig_escape_filter($this->env, __trans("Payment gateway will be installed in FOSSBilling and can be configured in \"Payment gateways\" tab."), "html", null, true);
        echo "</li>
                    <li>";
        // line 103
        echo twig_escape_filter($this->env, __trans("For developers. Read"), "html", null, true);
        echo " <a href=\"https://fossbilling.org/docs\" target=\"_blank\">FOSSBilling documentation</a> ";
        echo twig_escape_filter($this->env, __trans("to learn how to create your own payment gateway and share it with community"), "html", null, true);
        echo "</li>
                </ul>
            </div>

            ";
        // line 107
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_gateway_get_available", [], "any", false, false, false, 107)) > 0)) {
            // line 108
            echo "            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <thead>
                    <tr>
                        <th>";
            // line 111
            echo twig_escape_filter($this->env, __trans("Code"), "html", null, true);
            echo "</th>
                        <th class=\"w-1\">";
            // line 112
            echo twig_escape_filter($this->env, __trans("Install"), "html", null, true);
            echo "</th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_gateway_get_available", [], "any", false, false, false, 116));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["gtw"]) {
                // line 117
                echo "                <tr>
                    <td>";
                // line 118
                echo twig_escape_filter($this->env, $context["gtw"], "html", null, true);
                echo "</td>
                    <td>
                        <a class=\"btn btn-icon api-link\"
                            href=\"";
                // line 121
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/gateway_install", ["code" => $context["gtw"], "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                echo "\"
                             title=\"";
                // line 122
                echo twig_escape_filter($this->env, __trans("Install"), "html", null, true);
                echo "\"
                            data-api-redirect=\"";
                // line 123
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice/gateways");
                echo "\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#cog\" />
                            </svg>
                        </a>
                    </td>
                </tr>
                </tbody>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 132
                echo "                <tbody>
                    <tr>
                        <td class=\"text-muted\" colspan=\"5\">";
                // line 134
                echo twig_escape_filter($this->env, __trans("All payment gateways installed"), "html", null, true);
                echo "</td>
                    </tr>
                </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gtw'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "            </table>
            ";
        }
        // line 140
        echo "        </div>

        <div class=\"tab-pane fade\" id=\"tab-extension-directory\" role=\"tabpanel\">
            ";
        // line 143
        $this->loadTemplate("partial_extensions.html.twig", "mod_invoice_gateways.html.twig", 143)->display(twig_to_array(["type" => "payment-gateway", "header" => "List of payment gateways on the Extension Directory"]));
        // line 144
        echo "        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_invoice_gateways.html.twig";
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
        return array (  360 => 144,  358 => 143,  353 => 140,  349 => 138,  339 => 134,  335 => 132,  321 => 123,  317 => 122,  313 => 121,  307 => 118,  304 => 117,  299 => 116,  292 => 112,  288 => 111,  283 => 108,  281 => 107,  272 => 103,  268 => 102,  264 => 101,  260 => 100,  254 => 99,  248 => 98,  243 => 96,  239 => 95,  235 => 94,  228 => 89,  218 => 85,  214 => 83,  200 => 74,  196 => 73,  192 => 72,  181 => 66,  173 => 61,  169 => 60,  165 => 59,  159 => 56,  155 => 55,  151 => 54,  147 => 53,  138 => 51,  134 => 49,  129 => 48,  121 => 43,  117 => 42,  113 => 41,  109 => 40,  105 => 39,  100 => 36,  98 => 35,  87 => 27,  76 => 19,  66 => 12,  62 => 10,  58 => 9,  51 => 7,  47 => 1,  45 => 5,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_invoice_gateways.html.twig", "/var/www/modules/Invoice/html_admin/mod_invoice_gateways.html.twig");
    }
}
