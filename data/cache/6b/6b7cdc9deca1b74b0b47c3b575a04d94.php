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

/* default-pdf.twig */
class __TwigTemplate_474d9081d8b512e7cfc0e4a58dc3e1f6 extends Template
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
        if ((($context["buyer_lines"] ?? null) >= ($context["seller_lines"] ?? null))) {
            // line 2
            echo "\t";
            $context["top"] = (275 + (25 * ($context["buyer_lines"] ?? null)));
        } else {
            // line 4
            echo "\t";
            $context["top"] = (275 + (25 * ($context["seller_lines"] ?? null)));
        }
        // line 6
        echo "
";
        // line 7
        $context["address_lines"] = [];
        // line 8
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "address_1", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "address_2", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "address_3", [], "any", false, false, false, 8)]);
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 9
            echo "\t\t";
            if ((twig_length_filter($this->env, $context["line"]) > 0)) {
                // line 10
                echo "\t\t\t";
                $context["address_lines"] = twig_array_merge(($context["address_lines"] ?? null), [$context["line"]]);
                // line 11
                echo "\t\t";
            }
            // line 12
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        $context["address"] = twig_join_filter(($context["address_lines"] ?? null), ",");
        // line 14
        echo "
<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
\t\t<title>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "serie_nr", [], "any", false, false, false, 19), "html", null, true);
        echo "</title>
\t\t<style>
\t\t\t";
        // line 21
        echo twig_escape_filter($this->env, ($context["css"] ?? null), "html", null, true);
        echo "
\t\t</style>
\t</head>
\t<body>
\t\t";
        // line 25
        if ( !twig_test_empty(($context["logo_source"] ?? null))) {
            // line 26
            echo "\t\t\t<img src='";
            echo twig_escape_filter($this->env, ($context["logo_source"] ?? null), "html", null, true);
            echo "' height='50' class='CompanyLogo'>
\t\t";
        }
        // line 28
        echo "\t\t<hr class='Rounded'>
\t\t<div class='InvoiceInfo'>
\t\t\t<p>";
        // line 30
        echo twig_escape_filter($this->env, __trans("Invoice number"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "serie_nr", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
\t\t\t<p>";
        // line 31
        echo twig_escape_filter($this->env, __trans("Invoice date"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "created_at", [], "any", false, false, false, 31)), "html", null, true);
        echo "</p>
\t\t\t<p>";
        // line 32
        echo twig_escape_filter($this->env, __trans("Due date"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "due_at", [], "any", false, false, false, 32)), "html", null, true);
        echo "</p>
\t\t\t<p>";
        // line 33
        echo twig_escape_filter($this->env, __trans("Invoice status"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 33)), "html", null, true);
        echo "</p>
\t\t</div>

\t\t<h3 class='CompanyInfo'>";
        // line 36
        echo twig_escape_filter($this->env, __trans("Company"), "html", null, true);
        echo "</h3>
\t\t<div class='CompanyInfo'>
\t\t<p>
\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["seller"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 40
            echo "\t\t";
            if (($context["key"] == "Name")) {
                echo "<b>";
            }
            // line 41
            echo "\t\t";
            if (($context["key"] == "Phone")) {
                echo " ";
                echo twig_escape_filter($this->env, __trans("Phone"), "html", null, true);
                echo " :";
            }
            // line 42
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "<br>
\t\t";
            // line 43
            if (($context["key"] == "Name")) {
                echo "</b>";
            }
            // line 44
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t</p>
\t\t</div>

\t\t<h3 class='ClientInfo'>";
        // line 48
        echo twig_escape_filter($this->env, __trans("Client"), "html", null, true);
        echo "</h3>
\t\t<div class='ClientInfo'>
\t\t<p>
\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["buyer"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 52
            echo "\t\t";
            if (($context["key"] == "Company")) {
                echo "<b>";
            }
            // line 53
            echo "\t\t";
            if (($context["key"] == "Phone ")) {
                echo " ";
                echo twig_escape_filter($this->env, __trans("Phone"), "html", null, true);
                echo " :";
            }
            // line 54
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "<br>
\t\t";
            // line 55
            if (($context["key"] == "Company")) {
                echo "</b>";
            }
            // line 56
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t</p>
\t\t</div>

\t\t<div class='Breakdown' style='top: ";
        // line 60
        echo twig_escape_filter($this->env, ($context["top"] ?? null), "html", null, true);
        echo "px'>
\t\t\t<table style='width:100%'>
\t\t\t\t<tr>
\t\t\t\t\t<th style='text-align: center; width:25px;'>#</th>
\t\t\t\t\t<th style='text-align: left'>";
        // line 64
        echo twig_escape_filter($this->env, __trans("Product"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th style='text-align: right'>";
        // line 65
        echo twig_escape_filter($this->env, __trans("Quantity & Price"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th style='text-align: right'>";
        // line 66
        echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t\t";
        // line 68
        $context["nr"] = 0;
        // line 69
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "lines", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 70
            echo "\t\t\t\t\t";
            $context["nr"] = (($context["nr"] ?? null) + 1);
            // line 71
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style='text-align: center; width:25px;'>";
            // line 72
            echo twig_escape_filter($this->env, ($context["nr"] ?? null), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td style='text-align: left'>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td style='text-align: right'>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 74), "html", null, true);
            echo "x ";
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 74), ($context["currency_code"] ?? null));
            echo "</td>
\t\t\t\t\t\t<td style='text-align: right'>";
            // line 75
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 75), ($context["currency_code"] ?? null));
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t<tr>
\t\t\t\t\t<th colspan='4'>_________________________________________________________________________________________</th>
\t\t\t\t</tr>
\t\t\t\t";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "tax", [], "any", false, false, false, 81) > 0)) {
            // line 82
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th style='text-align: right' colspan='3'>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxname", [], "any", false, false, false, 83), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxrate", [], "any", false, false, false, 84), "html", null, true);
            echo "% Tax:</th>
\t\t\t\t\t\t<th style='text-align: right'>";
            // line 85
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "tax", [], "any", false, false, false, 85), ($context["currency_code"] ?? null));
            echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t";
        if ((((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", true, true, false, 88)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", false, false, false, 88))) : ("")) && (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", false, false, false, 88) > 0))) {
            // line 89
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th style='text-align: right' colspan='3'>";
            // line 90
            echo twig_escape_filter($this->env, __trans("Discount"), "html", null, true);
            echo ":</th>
\t\t\t\t\t\t<th style='text-align: right'>";
            // line 91
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", false, false, false, 91), ($context["currency_code"] ?? null));
            echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 94
        echo "\t\t\t\t<tr>
\t\t\t\t\t<th style='text-align: right'  colspan='3'>";
        // line 95
        echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
        echo ":</th>
\t\t\t\t\t<th style='text-align: right'>";
        // line 96
        echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "total", [], "any", false, false, false, 96), ($context["currency_code"] ?? null));
        echo "</th>
\t\t\t\t</tr>
\t\t\t</table>
\t\t<span class=\"muted-text\">";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "signature", [], "any", false, false, false, 99), "html", null, true);
        echo "</span>
\t\t</div>
\t\t<div class='InvoiceFooter'>
\t\t\t";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "display_bank_info", [], "any", false, false, false, 102) == 1)) {
            // line 103
            echo "\t\t\t\t<b>";
            echo twig_escape_filter($this->env, __trans("Payment details"), "html", null, true);
            echo ":</b><br >
\t\t\t\t<b>";
            // line 104
            echo twig_escape_filter($this->env, __trans("Account Owner"), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "company_name", [], "any", false, false, false, 104), "html", null, true);
            echo " | <b>";
            echo twig_escape_filter($this->env, __trans("Bank"), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "bank_name", [], "any", false, false, false, 104), "html", null, true);
            echo " | <b>";
            echo twig_escape_filter($this->env, __trans("BIC / SWIFT Code"), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "bic", [], "any", false, false, false, 104), "html", null, true);
            echo " | <b>";
            echo twig_escape_filter($this->env, __trans("Account number"), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "account_number", [], "any", false, false, false, 104), "html", null, true);
            echo "<br><br>
\t\t\t";
        }
        // line 106
        echo "
\t\t\t<b>";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "company_name", [], "any", false, false, false, 107), "html", null, true);
        echo "</b>
\t\t\t";
        // line 108
        if (($context["address"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["address"] ?? null), "html", null, true);
            echo " <br> ";
        }
        // line 109
        echo "\t\t\t<b>";
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo ":</b> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "email", [], "any", false, false, false, 109), "html", null, true);
        echo " | <b>
\t\t\t";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "phone", [], "any", false, false, false, 110)) {
            echo " ";
            echo twig_escape_filter($this->env, __trans("Phone"), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "phone", [], "any", false, false, false, 110), "html", null, true);
            echo "<br> ";
        }
        // line 111
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "company_vat", [], "any", false, false, false, 111)) {
            echo " <b>";
            echo twig_escape_filter($this->env, __trans("VAT ID"), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "company_vat", [], "any", false, false, false, 111), "html", null, true);
            echo " | ";
        }
        // line 112
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "company_number", [], "any", false, false, false, 112)) {
            echo " <b>";
            echo twig_escape_filter($this->env, __trans("Company Registration #:"), "html", null, true);
            echo "</b> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "company_number", [], "any", false, false, false, 112), "html", null, true);
            echo " | ";
        }
        // line 113
        echo "\t\t\t<b>";
        echo twig_escape_filter($this->env, __trans("Website"), "html", null, true);
        echo ": </b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["footer"] ?? null), "www", [], "any", false, false, false, 113), "html", null, true);
        echo "
\t\t</div>
\t</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default-pdf.twig";
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
        return array (  402 => 113,  393 => 112,  384 => 111,  376 => 110,  369 => 109,  363 => 108,  359 => 107,  356 => 106,  337 => 104,  332 => 103,  330 => 102,  324 => 99,  318 => 96,  314 => 95,  311 => 94,  305 => 91,  301 => 90,  298 => 89,  295 => 88,  289 => 85,  285 => 84,  281 => 83,  278 => 82,  276 => 81,  271 => 78,  262 => 75,  256 => 74,  252 => 73,  248 => 72,  245 => 71,  242 => 70,  237 => 69,  235 => 68,  230 => 66,  226 => 65,  222 => 64,  215 => 60,  210 => 57,  204 => 56,  200 => 55,  195 => 54,  188 => 53,  183 => 52,  179 => 51,  173 => 48,  168 => 45,  162 => 44,  158 => 43,  153 => 42,  146 => 41,  141 => 40,  137 => 39,  131 => 36,  123 => 33,  117 => 32,  111 => 31,  105 => 30,  101 => 28,  95 => 26,  93 => 25,  86 => 21,  81 => 19,  74 => 14,  72 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  52 => 8,  50 => 7,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default-pdf.twig", "/var/www/modules/Invoice/pdf_template/default-pdf.twig");
    }
}
