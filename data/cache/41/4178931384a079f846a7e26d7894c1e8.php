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

/* mod_servicedomain_manage.html.twig */
class __TwigTemplate_fd598a279b87f540a355f5d597a5f88e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"help\">
    <h2>";
        // line 2
        echo twig_escape_filter($this->env, __trans("Domain details"), "html", null, true);
        echo "</h2>
</div>

<table class=\"table card-table table-vcenter table-striped text-nowrap\">
    <tbody>
        <tr>
            <td class=\"w-50 text-end\">";
        // line 8
        echo twig_escape_filter($this->env, __trans("Domain"), "html", null, true);
        echo ":</td>
            <td>
                <a target=\"_blank\" href=\"https://";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "domain", [], "any", false, false, false, 10), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "domain", [], "any", false, false, false, 10), "html", null, true);
        echo "</a>
            </td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 14
        echo twig_escape_filter($this->env, __trans("Registrar"), "html", null, true);
        echo ":</td>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "registrar", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 18
        echo twig_escape_filter($this->env, __trans("Nameserver 1"), "html", null, true);
        echo ":</td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns1", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 22
        echo twig_escape_filter($this->env, __trans("Nameserver 2"), "html", null, true);
        echo ":</td>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns2", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 26
        echo twig_escape_filter($this->env, __trans("Nameserver 3"), "html", null, true);
        echo ":</td>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns3", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 30
        echo twig_escape_filter($this->env, __trans("Nameserver 4"), "html", null, true);
        echo ":</td>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns4", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 34
        echo twig_escape_filter($this->env, __trans("Transfer code"), "html", null, true);
        echo ":</td>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "transfer_code", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 38
        echo twig_escape_filter($this->env, __trans("Locked"), "html", null, true);
        echo ":</td>
            <td id=\"locked-value\">
                ";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "locked", [], "any", false, false, false, 40) == 1)) {
            // line 41
            echo "                    <span class=\"badge bg-danger me-1\"></span> ";
            echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
            echo "
                ";
        } else {
            // line 43
            echo "                    <span class=\"badge bg-success me-1\"></span> ";
            echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
            echo "
                ";
        }
        // line 45
        echo "            </td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 48
        echo twig_escape_filter($this->env, __trans("Privacy protection"), "html", null, true);
        echo ":</td>
            <td id=\"privacy-value\">
                ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "privacy", [], "any", false, false, false, 50) == 1)) {
            // line 51
            echo "                    <span class=\"badge bg-danger me-1\"></span> ";
            echo twig_escape_filter($this->env, __trans("Enabled"), "html", null, true);
            echo "
                ";
        } else {
            // line 53
            echo "                    <span class=\"badge bg-success me-1\"></span> ";
            echo twig_escape_filter($this->env, __trans("Disabled"), "html", null, true);
            echo "
                ";
        }
        // line 55
        echo "            </td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 58
        echo twig_escape_filter($this->env, __trans("Registration/Renewal years"), "html", null, true);
        echo ":</td>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "period", [], "any", false, false, false, 59), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 62
        echo twig_escape_filter($this->env, __trans("Registration date"), "html", null, true);
        echo ":</td>
            <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "registered_at", [], "any", false, false, false, 63)), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"text-end\">";
        // line 66
        echo twig_escape_filter($this->env, __trans("Expires at"), "html", null, true);
        echo ":</td>
            <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "expires_at", [], "any", false, false, false, 67)), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<div class=\"card-footer text-center\">
    ";
        // line 73
        echo twig_escape_filter($this->env, ($context["order_actions"] ?? null), "html", null, true);
        echo "
    ";
        // line 74
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 74) == "active")) {
            // line 75
            echo "    <a class=\"btn btn-primary\" type=\"button\" id=\"get-epp\">
        <svg class=\"icon icon-tabler\" width=\"24\" height=\"24\">
            <use xlink:href=\"#key\" />
        </svg>
        <span class=\"d-block text-secondary\">";
            // line 79
            echo twig_escape_filter($this->env, __trans("Get EPP"), "html", null, true);
            echo "</span>
    </a>
    <a class=\"btn btn-danger bg-gradient\" type=\"button\" id=\"domain-unlock\">
        <svg class=\"mb-2\" width=\"24\" height=\"24\">
            <use xlink:href=\"#lock-open\" />
        </svg>
        <span class=\"d-block\">";
            // line 85
            echo twig_escape_filter($this->env, __trans("Unlock"), "html", null, true);
            echo "</span>
    </a>
    <a class=\"btn btn-primary\" type=\"button\" id=\"domain-lock\">
        <svg class=\"icon icon-tabler\" width=\"24\" height=\"24\">
            <use xlink:href=\"#lock-closed\" />
        </svg>
        <span class=\"d-block text-secondary\">";
            // line 91
            echo twig_escape_filter($this->env, __trans("Lock"), "html", null, true);
            echo "</span>
    </a>
    <a class=\"btn btn-danger bg-gradient\" type=\"button\" id=\"domain-disable-pp\">
        <svg class=\"mb-2\" width=\"24\" height=\"24\">
            <use xlink:href=\"#eye\" />
        </svg>
        <span class=\"d-block\">";
            // line 97
            echo twig_escape_filter($this->env, __trans("Disable privacy"), "html", null, true);
            echo "</span>
    </a>
    <a class=\"btn btn-primary\" type=\"button\" id=\"domain-enable-pp\">
        <svg class=\"icon icon-tabler\" width=\"24\" height=\"24\">
            <use xlink:href=\"#eye-off\" />
        </svg>
        <span class=\"d-block text-secondary\">";
            // line 103
            echo twig_escape_filter($this->env, __trans("Enable privacy"), "html", null, true);
            echo "</span>
    </a>
    ";
        }
        // line 106
        echo "</div>

";
        // line 108
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 108) == "active")) {
            // line 109
            echo "<div class=\"card-body\">
    <h3>";
            // line 110
            echo twig_escape_filter($this->env, __trans("Nameservers"), "html", null, true);
            echo "</h3>
    <form method=\"post\" action=\"";
            // line 111
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicedomain/update_nameservers");
            echo "\" class=\"api-form\" data-api-msg=\"";
            echo twig_escape_filter($this->env, __trans("Nameservers updated"), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 114
            echo twig_escape_filter($this->env, __trans("Nameserver 1"), "html", null, true);
            echo ":</label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"ns1\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns1", [], "any", true, true, false, 116)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns1", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns1", [], "any", false, false, false, 116))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns1", [], "any", false, false, false, 116))), "html", null, true);
            echo "\" >
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 120
            echo twig_escape_filter($this->env, __trans("Nameserver 2"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"ns2\" value=\"";
            // line 122
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns2", [], "any", true, true, false, 122)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns2", [], "any", false, false, false, 122), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns2", [], "any", false, false, false, 122))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns2", [], "any", false, false, false, 122))), "html", null, true);
            echo "\" >
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 126
            echo twig_escape_filter($this->env, __trans("Nameserver 3"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"ns3\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns3", [], "any", true, true, false, 128)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns3", [], "any", false, false, false, 128), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns3", [], "any", false, false, false, 128))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns3", [], "any", false, false, false, 128))), "html", null, true);
            echo "\">
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 132
            echo twig_escape_filter($this->env, __trans("Nameserver 4"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"ns4\" value=\"";
            // line 134
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns4", [], "any", true, true, false, 134)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns4", [], "any", false, false, false, 134), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns4", [], "any", false, false, false, 134))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns4", [], "any", false, false, false, 134))), "html", null, true);
            echo "\">
            </div>
        </div>

        <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 138), "html", null, true);
            echo "\">
        <input class=\"btn btn-primary w-100\" type=\"submit\" value=\"";
            // line 139
            echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
            echo "\">
    </form>
    <hr>

    <h3>";
            // line 143
            echo twig_escape_filter($this->env, __trans("Domain data"), "html", null, true);
            echo "</h3>
    <form method=\"post\" action=\"";
            // line 144
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicedomain/update");
            echo "\" class=\"api-form\" data-api-msg=\"";
            echo twig_escape_filter($this->env, __trans("Domain data updated"), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 145
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 147
            echo twig_escape_filter($this->env, __trans("Transfer code (EPP)"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"transfer_code\" value=\"";
            // line 149
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "transfer_code", [], "any", true, true, false, 149)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "transfer_code", [], "any", false, false, false, 149), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "transfer_code", [], "any", false, false, false, 149))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "transfer_code", [], "any", false, false, false, 149))), "html", null, true);
            echo "\" >
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 153
            echo twig_escape_filter($this->env, __trans("Period"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"period\" value=\"";
            // line 155
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "period", [], "any", true, true, false, 155)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "period", [], "any", false, false, false, 155), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "period", [], "any", false, false, false, 155))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "period", [], "any", false, false, false, 155))), "html", null, true);
            echo "\">
            </div>
        </div>

        <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 159), "html", null, true);
            echo "\">
        <input class=\"btn btn-primary w-100\" type=\"submit\" value=\"";
            // line 160
            echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
            echo "\">
    </form>
    <hr>

    <h3>";
            // line 164
            echo twig_escape_filter($this->env, __trans("Update domain contact details"), "html", null, true);
            echo "</h3>
    <form method=\"post\" action=\"";
            // line 165
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicedomain/update_contacts");
            echo "\" class=\"api-form\" data-api-msg=\"";
            echo twig_escape_filter($this->env, __trans("Domain contact details updated"), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 166
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 168
            echo twig_escape_filter($this->env, __trans("First Name"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"contact[first_name]\" value=\"";
            // line 170
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "first_name", [], "any", true, true, false, 170)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "first_name", [], "any", false, false, false, 170), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 170), "first_name", [], "any", false, false, false, 170))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 170), "first_name", [], "any", false, false, false, 170))), "html", null, true);
            echo "\" required>
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 174
            echo twig_escape_filter($this->env, __trans("Last Name"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"contact[last_name]\" value=\"";
            // line 176
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "last_name", [], "any", true, true, false, 176)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "last_name", [], "any", false, false, false, 176), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 176), "last_name", [], "any", false, false, false, 176))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 176), "last_name", [], "any", false, false, false, 176))), "html", null, true);
            echo "\" required>
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 180
            echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"contact[email]\" value=\"";
            // line 182
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", true, true, false, 182)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 182), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 182), "email", [], "any", false, false, false, 182))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 182), "email", [], "any", false, false, false, 182))), "html", null, true);
            echo "\" required>
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 186
            echo twig_escape_filter($this->env, __trans("Company"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"contact[company]\" value=\"";
            // line 188
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", true, true, false, 188)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 188), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 188), "company", [], "any", false, false, false, 188))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 188), "company", [], "any", false, false, false, 188))), "html", null, true);
            echo "\" required>
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 192
            echo twig_escape_filter($this->env, __trans("Address Line 1"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"contact[address1]\" value=\"";
            // line 194
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address1", [], "any", true, true, false, 194)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address1", [], "any", false, false, false, 194), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 194), "address1", [], "any", false, false, false, 194))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 194), "address1", [], "any", false, false, false, 194))), "html", null, true);
            echo "\" required>
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 198
            echo twig_escape_filter($this->env, __trans("Address Line 2"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"contact[address2]\" value=\"";
            // line 200
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address2", [], "any", true, true, false, 200)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address2", [], "any", false, false, false, 200), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 200), "address2", [], "any", false, false, false, 200))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 200), "address2", [], "any", false, false, false, 200))), "html", null, true);
            echo "\" required>
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 204
            echo twig_escape_filter($this->env, __trans("Country"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"contact[country]\" value=\"";
            // line 206
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "country", [], "any", true, true, false, 206)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "country", [], "any", false, false, false, 206), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 206), "country", [], "any", false, false, false, 206))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 206), "country", [], "any", false, false, false, 206))), "html", null, true);
            echo "\" required>
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 210
            echo twig_escape_filter($this->env, __trans("City"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"contact[city]\" value=\"";
            // line 212
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "city", [], "any", true, true, false, 212)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "city", [], "any", false, false, false, 212), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 212), "city", [], "any", false, false, false, 212))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 212), "city", [], "any", false, false, false, 212))), "html", null, true);
            echo "\" required>
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 216
            echo twig_escape_filter($this->env, __trans("State"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"contact[state]\" value=\"";
            // line 218
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "state", [], "any", true, true, false, 218)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "state", [], "any", false, false, false, 218), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 218), "state", [], "any", false, false, false, 218))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 218), "state", [], "any", false, false, false, 218))), "html", null, true);
            echo "\" required>
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 222
            echo twig_escape_filter($this->env, __trans("Zip"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"contact[postcode]\" value=\"";
            // line 224
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "postcode", [], "any", true, true, false, 224)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "postcode", [], "any", false, false, false, 224), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 224), "postcode", [], "any", false, false, false, 224))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 224), "postcode", [], "any", false, false, false, 224))), "html", null, true);
            echo "\" required>
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 228
            echo twig_escape_filter($this->env, __trans("Phone Country Code"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"contact[phone_cc]\" value=\"";
            // line 230
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone_cc", [], "any", true, true, false, 230)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone_cc", [], "any", false, false, false, 230), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 230), "phone_cc", [], "any", false, false, false, 230))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 230), "phone_cc", [], "any", false, false, false, 230))), "html", null, true);
            echo "\" required>
            </div>
        </div>
        <div class=\"mb-3 row\">
            <label class=\"form-label col-3 col-form-label\">";
            // line 234
            echo twig_escape_filter($this->env, __trans("Phone number"), "html", null, true);
            echo ": </label>
            <div class=\"col\">
                <input class=\"form-control\" type=\"text\" name=\"contact[phone]\" value=\"";
            // line 236
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone", [], "any", true, true, false, 236)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone", [], "any", false, false, false, 236), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 236), "phone", [], "any", false, false, false, 236))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 236), "phone", [], "any", false, false, false, 236))), "html", null, true);
            echo "\" required>
            </div>
        </div>

        <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 240), "html", null, true);
            echo "\">
        <input class=\"btn btn-primary w-100\" type=\"submit\" value=\"";
            // line 241
            echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
            echo "\">
    </form>
</div>
";
        }
        // line 245
        echo "
<script>
\$(function() {
    ";
        // line 248
        if ((twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "locked", [], "any", false, false, false, 248) == 0)) {
            // line 249
            echo "        document.getElementById('domain-unlock').classList.remove('d-inline-block');
        document.getElementById('domain-unlock').style.display = 'none';
    ";
        }
        // line 252
        echo "
    ";
        // line 253
        if ((twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "locked", [], "any", false, false, false, 253) == 1)) {
            // line 254
            echo "        document.getElementById('domain-lock').classList.remove('d-inline-block');
        document.getElementById('domain-lock').style.display = 'none';
    ";
        }
        // line 257
        echo "
    \$('#domain-lock').on('click', function(event) {
        bb.post(
            'admin/servicedomain/lock',
            { order_id: ";
        // line 261
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 261), "html", null, true);
        echo ", CSRFToken: \"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" },
            function(result) {
                FOSSBilling.message(\"";
        // line 263
        echo twig_escape_filter($this->env, __trans("Domain locked"), "html", null, true);
        echo "\");

                document.getElementById('domain-lock').classList.remove('d-inline-block');
                document.getElementById('domain-lock').style.display = 'none';
                document.getElementById('domain-unlock').classList.add('d-inline-block');

                \$('#locked-value').text('1');
            }
        );
    });

    \$('#domain-unlock').on('click', function(event) {
        bb.post(
            'admin/servicedomain/unlock',
            { order_id: ";
        // line 277
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 277), "html", null, true);
        echo ", CSRFToken: \"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" },
            function(result) {
                FOSSBilling.message(\"";
        // line 279
        echo twig_escape_filter($this->env, __trans("Domain unlocked"), "html", null, true);
        echo "\");

                document.getElementById('domain-lock').classList.add('d-inline-block');
                document.getElementById('domain-unlock').classList.remove('d-inline-block');
                document.getElementById('domain-unlock').style.display = 'none';

                \$('#locked-value').text('0');
            }
        );
    });

    ";
        // line 290
        if ((twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "privacy", [], "any", false, false, false, 290) == 0)) {
            // line 291
            echo "        ";
            // line 292
            echo "        document.getElementById('domain-disable-pp').classList.remove('d-inline-block');
        document.getElementById('domain-disable-pp').style.display = 'none';
    ";
        }
        // line 295
        echo "
    ";
        // line 296
        if ((twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "privacy", [], "any", false, false, false, 296) == 1)) {
            // line 297
            echo "        ";
            // line 298
            echo "        document.getElementById('domain-enable-pp').classList.remove('d-inline-block');
        document.getElementById('domain-enable-pp').style.display = 'none';
    ";
        }
        // line 301
        echo "
    \$('#domain-enable-pp').on('click', function(event) {
        bb.post(
            'admin/servicedomain/enable_privacy_protection',
            { order_id: ";
        // line 305
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 305), "html", null, true);
        echo ", CSRFToken: \"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" },
            function(result) {
                FOSSBilling.message(\"";
        // line 307
        echo twig_escape_filter($this->env, __trans("Privacy protection enabled"), "html", null, true);
        echo "\");

                ";
        // line 310
        echo "                ";
        // line 311
        echo "                document.getElementById('domain-enable-pp').classList.remove('d-inline-block');
                document.getElementById('domain-enable-pp').style.display = 'none';
                document.getElementById('domain-disable-pp').classList.add('d-inline-block');

                \$('#privacy-value').text('1');
            }
        );
    });

    \$('#domain-disable-pp').on('click', function(event) {
        bb.post(
            'admin/servicedomain/disable_privacy_protection',
            { order_id: ";
        // line 323
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 323), "html", null, true);
        echo ", CSRFToken: \"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" },
            function(result) {
                FOSSBilling.message(\"";
        // line 325
        echo twig_escape_filter($this->env, __trans("Privacy protection disabled"), "html", null, true);
        echo "\");

                ";
        // line 328
        echo "                ";
        // line 329
        echo "                document.getElementById('domain-disable-pp').classList.remove('d-inline-block');
                document.getElementById('domain-disable-pp').style.display = 'none';
                document.getElementById('domain-enable-pp').classList.add('d-inline-block');

                \$('#privacy-value').text('0');
            }
        );
    });

    \$('#get-epp').on('click', function(event) {
        bb.post(
            'admin/servicedomain/get_transfer_code',
            { order_id: ";
        // line 341
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 341), "html", null, true);
        echo ", CSRFToken: \"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" },
            function(result) {
                FOSSBilling.message(\"";
        // line 343
        echo twig_escape_filter($this->env, __trans("Domain transfer code is: "), "html", null, true);
        echo "\" + result);
            }
        );
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
        return "mod_servicedomain_manage.html.twig";
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
        return array (  724 => 343,  717 => 341,  703 => 329,  701 => 328,  696 => 325,  689 => 323,  675 => 311,  673 => 310,  668 => 307,  661 => 305,  655 => 301,  650 => 298,  648 => 297,  646 => 296,  643 => 295,  638 => 292,  636 => 291,  634 => 290,  620 => 279,  613 => 277,  596 => 263,  589 => 261,  583 => 257,  578 => 254,  576 => 253,  573 => 252,  568 => 249,  566 => 248,  561 => 245,  554 => 241,  550 => 240,  543 => 236,  538 => 234,  531 => 230,  526 => 228,  519 => 224,  514 => 222,  507 => 218,  502 => 216,  495 => 212,  490 => 210,  483 => 206,  478 => 204,  471 => 200,  466 => 198,  459 => 194,  454 => 192,  447 => 188,  442 => 186,  435 => 182,  430 => 180,  423 => 176,  418 => 174,  411 => 170,  406 => 168,  401 => 166,  395 => 165,  391 => 164,  384 => 160,  380 => 159,  373 => 155,  368 => 153,  361 => 149,  356 => 147,  351 => 145,  345 => 144,  341 => 143,  334 => 139,  330 => 138,  323 => 134,  318 => 132,  311 => 128,  306 => 126,  299 => 122,  294 => 120,  287 => 116,  282 => 114,  277 => 112,  271 => 111,  267 => 110,  264 => 109,  262 => 108,  258 => 106,  252 => 103,  243 => 97,  234 => 91,  225 => 85,  216 => 79,  210 => 75,  208 => 74,  204 => 73,  195 => 67,  191 => 66,  185 => 63,  181 => 62,  175 => 59,  171 => 58,  166 => 55,  160 => 53,  154 => 51,  152 => 50,  147 => 48,  142 => 45,  136 => 43,  130 => 41,  128 => 40,  123 => 38,  117 => 35,  113 => 34,  107 => 31,  103 => 30,  97 => 27,  93 => 26,  87 => 23,  83 => 22,  77 => 19,  73 => 18,  67 => 15,  63 => 14,  54 => 10,  49 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_servicedomain_manage.html.twig", "/var/www/modules/Servicedomain/html_admin/mod_servicedomain_manage.html.twig");
    }
}
