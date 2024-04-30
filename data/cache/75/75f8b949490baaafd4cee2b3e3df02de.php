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

/* partial_pricing.html.twig */
class __TwigTemplate_889a2fa555e013646c006605038871b6 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "type", [], "any", false, false, false, 1) != "domain")) {
            // line 2
            echo "<div class=\"form-group mb-3 row\">
    <label class=\"form-label col-3 col-form-label pt-0\">";
            // line 3
            echo twig_escape_filter($this->env, __trans("Payment type"), "html", null, true);
            echo ":</label>
    <div class=\"col pp_type\">
        <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"pricing[type]\" value=\"free\"";
            // line 6
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 6), "type", [], "any", false, false, false, 6) == "free")) {
                echo " checked";
            }
            echo " id=\"pricing-free\">
            <label class=\"form-check-label\" for=\"pricing-free\">";
            // line 7
            echo twig_escape_filter($this->env, __trans("Free"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"pricing[type]\" value=\"once\"";
            // line 10
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 10), "type", [], "any", false, false, false, 10) == "once")) {
                echo " checked";
            }
            echo " id=\"pricing-once\">
            <label class=\"form-check-label\" for=\"pricing-once\">";
            // line 11
            echo twig_escape_filter($this->env, __trans("One time"), "html", null, true);
            echo "</label>
        </div>
        <div class=\"form-check form-check-inline\">
            <input class=\"form-check-input\" type=\"radio\" name=\"pricing[type]\" value=\"recurrent\"";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 14), "type", [], "any", false, false, false, 14) == "recurrent")) {
                echo " checked";
            }
            echo " id=\"pricing-recurrent\">
            <label class=\"form-check-label\" for=\"pricing-recurrent\">";
            // line 15
            echo twig_escape_filter($this->env, __trans("Recurrent"), "html", null, true);
            echo "</label>
        </div>
    </div>
</div>

<table class=\"pp table\">
    <tbody class=\"once\"";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 21), "type", [], "any", false, false, false, 21) != "once")) {
                echo " style=\"display:none;\"";
            }
            echo ">
        <tr>
            <th></th>
            <th>";
            // line 24
            echo twig_escape_filter($this->env, __trans("Setup price"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "currency_get_default", [], "any", false, false, false, 24), "code", [], "any", false, false, false, 24), "html", null, true);
            echo ")</th>
            <th>";
            // line 25
            echo twig_escape_filter($this->env, __trans("Price"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "currency_get_default", [], "any", false, false, false, 25), "code", [], "any", false, false, false, 25), "html", null, true);
            echo ")</th>
            <th>";
            // line 26
            echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
            echo "</th>
            <th class=\"w-1\"></th>
        </tr>
        <tr>
            <td>
                <label for=\"\">";
            // line 31
            echo twig_escape_filter($this->env, __trans("One time"), "html", null, true);
            echo "</label>
            </td>
            <td>
                <input type=\"text\" class=\"form-control price setup_price\" name=\"pricing[once][setup]\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 34), "once", [], "any", false, false, false, 34), "setup", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
            </td>
            <td>
                <input type=\"text\" class=\"form-control price bill_price\" name=\"pricing[once][price]\" value=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 37), "once", [], "any", false, false, false, 37), "price", [], "any", false, false, false, 37), "html", null, true);
            echo "\">
            </td>
            <td>
                <input type=\"text\" class=\"form-control total price\" readonly=\"readonly\" disabled=\"disabled\">
            </td>
            <td></td>
        </tr>
    </tbody>

    <tbody class=\"recurrent\"";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 46), "type", [], "any", false, false, false, 46) != "recurrent")) {
                echo " style=\"display:none;\"";
            }
            echo ">
        <tr>
            <th></th>
            <th>";
            // line 49
            echo twig_escape_filter($this->env, __trans("Setup price"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "currency_get_default", [], "any", false, false, false, 49), "code", [], "any", false, false, false, 49), "html", null, true);
            echo ")</th>
            <th>";
            // line 50
            echo twig_escape_filter($this->env, __trans("Price for period"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "currency_get_default", [], "any", false, false, false, 50), "code", [], "any", false, false, false, 50), "html", null, true);
            echo ")</th>
            <th>";
            // line 51
            echo twig_escape_filter($this->env, __trans("First payment sum"), "html", null, true);
            echo "</th>
            <th class=\"w-1\"></th>
        </tr>
        <tr>
            <td>
                <label for=\"\">";
            // line 56
            echo twig_escape_filter($this->env, __trans("Weekly"), "html", null, true);
            echo "</label>
            </td>
            <td>
                <input class=\"form-control price setup_price\" type=\"text\" name=\"pricing[recurrent][1W][setup]\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 59), "recurrent", [], "any", false, false, false, 59)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["1W"] ?? null) : null), "setup", [], "any", false, false, false, 59), "html", null, true);
            echo "\">
            </td>
            <td>
                <input class=\"form-control price bill_price\" type=\"text\" name=\"pricing[recurrent][1W][price]\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 62), "recurrent", [], "any", false, false, false, 62)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["1W"] ?? null) : null), "price", [], "any", false, false, false, 62), "html", null, true);
            echo "\">
            </td>
            <td>
                <input class=\"form-control total price\" type=\"text\" readonly=\"readonly\" disabled>
            </td>
            <td>
                <input type=\"hidden\" name=\"pricing[recurrent][1W][enabled]\" value=\"0\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"pricing[recurrent][1W][enabled]\" value=\"1\"";
            // line 69
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 69), "type", [], "any", false, false, false, 69) == "recurrent") && twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 69), "recurrent", [], "any", false, false, false, 69)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["1W"] ?? null) : null), "enabled", [], "any", false, false, false, 69))) {
                echo " checked";
            }
            echo ">
            </td>
        </tr>
        <tr>
            <td><label for=\"\">";
            // line 73
            echo twig_escape_filter($this->env, __trans("Monthly"), "html", null, true);
            echo "</label></td>
            <td>
                <input type=\"text\" class=\"form-control price setup_price\" name=\"pricing[recurrent][1M][setup]\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 75), "recurrent", [], "any", false, false, false, 75)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["1M"] ?? null) : null), "setup", [], "any", false, false, false, 75), "html", null, true);
            echo "\">
            </td>
            <td>
                <input type=\"text\" class=\"form-control price bill_price\" name=\"pricing[recurrent][1M][price]\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 78), "recurrent", [], "any", false, false, false, 78)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["1M"] ?? null) : null), "price", [], "any", false, false, false, 78), "html", null, true);
            echo "\">
            </td>
            <td>
                <input type=\"text\" class=\"form-control total price\" readonly=\"readonly\" disabled=\"disabled\">
            </td>
            <td>
                <input type=\"hidden\" name=\"pricing[recurrent][1M][enabled]\" value=\"0\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"pricing[recurrent][1M][enabled]\" value=\"1\"";
            // line 85
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 85), "type", [], "any", false, false, false, 85) == "recurrent") && twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 85), "recurrent", [], "any", false, false, false, 85)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["1M"] ?? null) : null), "enabled", [], "any", false, false, false, 85))) {
                echo " checked";
            }
            echo ">
            </td>
        </tr>
        <tr>
            <td>
                <label for=\"\">";
            // line 90
            echo twig_escape_filter($this->env, __trans("Every 3 months"), "html", null, true);
            echo "</label>
            </td>
            <td>
                <input type=\"text\" class=\"form-control price setup_price\" name=\"pricing[recurrent][3M][setup]\" value=\"";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 93), "recurrent", [], "any", false, false, false, 93)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["3M"] ?? null) : null), "setup", [], "any", false, false, false, 93), "html", null, true);
            echo "\">
            </td>
            <td>
                <input type=\"text\" class=\"form-control price bill_price\" name=\"pricing[recurrent][3M][price]\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 96), "recurrent", [], "any", false, false, false, 96)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["3M"] ?? null) : null), "price", [], "any", false, false, false, 96), "html", null, true);
            echo "\">
            </td>
            <td>
                <input type=\"text\" class=\"form-control total price\" readonly=\"readonly\" disabled=\"disabled\">
            </td>
            <td>
                <input type=\"hidden\" name=\"pricing[recurrent][3M][enabled]\" value=\"0\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"pricing[recurrent][3M][enabled]\" value=\"1\"";
            // line 103
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 103), "type", [], "any", false, false, false, 103) == "recurrent") && twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 103), "recurrent", [], "any", false, false, false, 103)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["3M"] ?? null) : null), "enabled", [], "any", false, false, false, 103))) {
                echo " checked";
            }
            echo ">
            </td>
        </tr>
        <tr>
            <td>
                <label for=\"\">";
            // line 108
            echo twig_escape_filter($this->env, __trans("Every 6 months"), "html", null, true);
            echo "</label>
            </td>
            <td>
                <input type=\"text\" class=\"form-control price setup_price\" name=\"pricing[recurrent][6M][setup]\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 111), "recurrent", [], "any", false, false, false, 111)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["6M"] ?? null) : null), "setup", [], "any", false, false, false, 111), "html", null, true);
            echo "\">
            </td>
            <td>
                <input type=\"text\" class=\"form-control price bill_price\" name=\"pricing[recurrent][6M][price]\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 114), "recurrent", [], "any", false, false, false, 114)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["6M"] ?? null) : null), "price", [], "any", false, false, false, 114), "html", null, true);
            echo "\">
            </td>
            <td>
                <input type=\"text\" class=\"form-control total price\" readonly=\"readonly\" disabled>
            </td>
            <td>
                <input type=\"hidden\" name=\"pricing[recurrent][6M][enabled]\" value=\"0\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"pricing[recurrent][6M][enabled]\" value=\"1\"";
            // line 121
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 121), "type", [], "any", false, false, false, 121) == "recurrent") && twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 121), "recurrent", [], "any", false, false, false, 121)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["6M"] ?? null) : null), "enabled", [], "any", false, false, false, 121))) {
                echo " checked";
            }
            echo ">
            </td>
        </tr>
        <tr>
            <td><label for=\"\">";
            // line 125
            echo twig_escape_filter($this->env, __trans("Every year"), "html", null, true);
            echo "</label></td>
            <td>
                <input type=\"text\" class=\"form-control price setup_price\" name=\"pricing[recurrent][1Y][setup]\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 127), "recurrent", [], "any", false, false, false, 127)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["1Y"] ?? null) : null), "setup", [], "any", false, false, false, 127), "html", null, true);
            echo "\">
            </td>
            <td>
                <input type=\"text\" class=\"form-control price bill_price\" name=\"pricing[recurrent][1Y][price]\" value=\"";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 130), "recurrent", [], "any", false, false, false, 130)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["1Y"] ?? null) : null), "price", [], "any", false, false, false, 130), "html", null, true);
            echo "\">
            </td>
            <td>
                <input type=\"text\" class=\"form-control total price\" readonly=\"readonly\" disabled>
            </td>
            <td>
                <input type=\"hidden\" name=\"pricing[recurrent][1Y][enabled]\" value=\"0\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"pricing[recurrent][1Y][enabled]\" value=\"1\"";
            // line 137
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 137), "type", [], "any", false, false, false, 137) == "recurrent") && twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 137), "recurrent", [], "any", false, false, false, 137)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["1Y"] ?? null) : null), "enabled", [], "any", false, false, false, 137))) {
                echo " checked";
            }
            echo ">
            </td>
        </tr>
        <tr>
            <td>
                <label for=\"\">";
            // line 142
            echo twig_escape_filter($this->env, __trans("Every 2 years"), "html", null, true);
            echo "</label>
            </td>
            <td>
                <input type=\"text\" class=\"form-control price setup_price\" name=\"pricing[recurrent][2Y][setup]\" value=\"";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 145), "recurrent", [], "any", false, false, false, 145)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["2Y"] ?? null) : null), "setup", [], "any", false, false, false, 145), "html", null, true);
            echo "\">
            </td>
            <td>
                <input type=\"text\" class=\"form-control price bill_price\" name=\"pricing[recurrent][2Y][price]\" value=\"";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 148), "recurrent", [], "any", false, false, false, 148)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["2Y"] ?? null) : null), "price", [], "any", false, false, false, 148), "html", null, true);
            echo "\">
            </td>
            <td>
                <input type=\"text\" class=\"form-control total price\" readonly=\"readonly\" disabled>
            </td>
            <td>
                <input type=\"hidden\" name=\"pricing[recurrent][2Y][enabled]\" value=\"0\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"pricing[recurrent][2Y][enabled]\" value=\"1\"";
            // line 155
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 155), "type", [], "any", false, false, false, 155) == "recurrent") && twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 155), "recurrent", [], "any", false, false, false, 155)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["2Y"] ?? null) : null), "enabled", [], "any", false, false, false, 155))) {
                echo " checked";
            }
            echo ">
            </td>
        </tr>
        <tr>
            <td>
                <label for=\"\">";
            // line 160
            echo twig_escape_filter($this->env, __trans("Every 3 years"), "html", null, true);
            echo "</label>
            </td>
            <td>
                <input type=\"text\" class=\"form-control price setup_price\" name=\"pricing[recurrent][3Y][setup]\" value=\"";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 163), "recurrent", [], "any", false, false, false, 163)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["3Y"] ?? null) : null), "setup", [], "any", false, false, false, 163), "html", null, true);
            echo "\">
            </td>
            <td>
                <input type=\"text\" class=\"form-control price bill_price\" name=\"pricing[recurrent][3Y][price]\" value=\"";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 166), "recurrent", [], "any", false, false, false, 166)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["3Y"] ?? null) : null), "price", [], "any", false, false, false, 166), "html", null, true);
            echo "\">
            </td>
            <td>
                <input type=\"text\" class=\"form-control total price\" readonly=\"readonly\" disabled>
            </td>
            <td>
                <input type=\"hidden\" name=\"pricing[recurrent][3Y][enabled]\" value=\"0\">
                <input class=\"form-check-input\" type=\"checkbox\" name=\"pricing[recurrent][3Y][enabled]\" value=\"1\"";
            // line 173
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 173), "type", [], "any", false, false, false, 173) == "recurrent") && twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 173), "recurrent", [], "any", false, false, false, 173)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["3Y"] ?? null) : null), "enabled", [], "any", false, false, false, 173))) {
                echo " checked";
            }
            echo ">
            </td>
        </tr>
    </tbody>
</table>

<script>
    \$(function() {
        // Self-triggers to loop each input box and sets the default total values.
        \$('input.price:not(:disabled)').keyup(function() {
            var row = \$(this).parents('tr:first');
            var s = row.find('input.setup_price').val();
            var p = row.find('input.bill_price').val();
            var total = countTotal(p, s);
            var elem = row.find('input.total');
            elem.val(total);
        }).trigger('keyup');

        // Triggers on input change to toggle checkbox if total is above zero.
        \$('input.price:not(:disabled)').change(function() {
            var row = \$(this).parents('tr:first');
            var s = row.find('input.setup_price').val();
            var p = row.find('input.bill_price').val();
            var total = countTotal(p, s);
            var checkbox = row.find('input.form-check-input');
            if (total > 0) {
                checkbox.prop('checked', true);
            } else {
                checkbox.prop('checked', false);
            }
        });

        \$('.pp_type input').on('click', function() {
            \$('table.pp tbody').hide();
            \$('table.pp tbody.' + \$(this).val()).show();
        });
    });

    function countTotal(p, s) {
        p = parseFloat(p);
        s = parseFloat(s);

        var num = new Number(p + s);

        if (!isNaN(num))
            return num.toFixed(2);

        return (0).toFixed(2);
    }
</script>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partial_pricing.html.twig";
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
        return array (  377 => 173,  367 => 166,  361 => 163,  355 => 160,  345 => 155,  335 => 148,  329 => 145,  323 => 142,  313 => 137,  303 => 130,  297 => 127,  292 => 125,  283 => 121,  273 => 114,  267 => 111,  261 => 108,  251 => 103,  241 => 96,  235 => 93,  229 => 90,  219 => 85,  209 => 78,  203 => 75,  198 => 73,  189 => 69,  179 => 62,  173 => 59,  167 => 56,  159 => 51,  153 => 50,  147 => 49,  139 => 46,  127 => 37,  121 => 34,  115 => 31,  107 => 26,  101 => 25,  95 => 24,  87 => 21,  78 => 15,  72 => 14,  66 => 11,  60 => 10,  54 => 7,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partial_pricing.html.twig", "/var/www/themes/admin_default/html/partial_pricing.html.twig");
    }
}
