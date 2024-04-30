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

/* mod_orderbutton_checkout.html.twig */
class __TwigTemplate_0f2b095b15782788d19ead1b1e0ab99e extends Template
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
        $context["cart"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "cart_get", [], "any", false, false, false, 1);
        // line 2
        echo "<div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
        <button class=\"accordion-button ";
        // line 4
        if ( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "checkout", [], "any", false, false, false, 4)) {
            echo "collapsed";
        }
        echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#checkout\" aria-expanded=\"false\" aria-controls=\"checkout\">
            <svg class=\"svg-icon me-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z\" /></svg>
            <span>";
        // line 6
        echo twig_escape_filter($this->env, __trans("Cart"), "html", null, true);
        echo "</span>&nbsp;<span class=\"badge bg-success\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 6)), "html", null, true);
        echo "</span>
        </button>
    </h2>
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 9)) {
            // line 10
            echo "    <div id=\"checkout\" class=\"accordion-collapse collapse ";
            if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "checkout", [], "any", false, false, false, 10) && ($context["client"] ?? null))) {
                echo "show";
            }
            echo "\" data-bs-parent=\"#orderManager\">
        <div class=\"accordion-body\">
            <div class=\"accordion-inner\" id=\"checkout-inner\">
                <table class=\"table table-striped table-bordered table-sm\">
                    <thead>
                    <tr>
                        <th>";
            // line 16
            echo twig_escape_filter($this->env, __trans("Product"), "html", null, true);
            echo "</th>
                        <th>";
            // line 17
            echo twig_escape_filter($this->env, __trans("Price"), "html", null, true);
            echo "</th>
                        <th style=\"width: 3%; text-align: center\"></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 23
                echo "                        <tr>
                            <td>
                                ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 25), "html", null, true);
                echo "
                                ";
                // line 26
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 26) > 1)) {
                    // line 27
                    echo "                                    x ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 27), "html", null, true);
                    echo "
                                ";
                }
                // line 29
                echo "
                                ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["item"], "period", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "                                    (";
                    echo $this->extensions['Box_TwigExtensions']->twig_period_title($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "period", [], "any", false, false, false, 31));
                    echo ")
                                ";
                }
                // line 33
                echo "                            </td>
                            <td>
                                ";
                // line 35
                if (twig_get_attribute($this->env, $this->source, $context["item"], "discount_price", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "                                    <del>";
                    echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 36));
                    echo "</del>
                                    <strong class=\"text-success\">";
                    // line 37
                    echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 37) - twig_get_attribute($this->env, $this->source, $context["item"], "discount_price", [], "any", false, false, false, 37)));
                    echo "</strong>


                                ";
                } else {
                    // line 41
                    echo "                                    ";
                    echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 41));
                    echo "
                                ";
                }
                // line 43
                echo "                            </td>
                            <td><button data-cart-item-id=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo "\" class=\"btn btn-dark btn-sm remove-cart-item\" title=\"";
                echo twig_escape_filter($this->env, __trans("Remove item"), "html", null, true);
                echo "\"><strong><i class=\"awe-remove\"></i></strong></button></td>
                        </tr>

                        ";
                // line 47
                if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "show_custom_form_values", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "                            <tr>
                                <td>
                                    ";
                    // line 50
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "form_id", [], "any", false, false, false, 50) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "formbuilder"]], "method", false, false, false, 50))) {
                        // line 51
                        echo "                                        ";
                        $context["form"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "formbuilder_get", [["id" => twig_get_attribute($this->env, $this->source, $context["item"], "form_id", [], "any", false, false, false, 51)]], "method", false, false, false, 51);
                        // line 52
                        echo "                                        ";
                        // line 53
                        echo "                                        <div class=\"well\">
                                            <dl class=\"row\">
                                                ";
                        // line 55
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["item"]);
                        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
                            // line 56
                            echo "                                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 56));
                            foreach ($context['_seq'] as $context["_key"] => $context["form_field"]) {
                                // line 57
                                echo "                                                        ";
                                if ( !twig_test_empty($context["value"])) {
                                    // line 58
                                    echo "                                                            ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["form_field"], "name", [], "any", false, false, false, 58) == $context["field"])) {
                                        // line 59
                                        echo "                                                                <dt>
                                                                    ";
                                        // line 60
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["form_field"], "label", [], "any", false, false, false, 60), "html", null, true);
                                        echo "
                                                                </dt>
                                                                <dd>
                                                                    ";
                                        // line 63
                                        if ((twig_get_attribute($this->env, $this->source, $context["form_field"], "type", [], "any", false, false, false, 63) == "checkbox")) {
                                            // line 64
                                            echo "                                                                        ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable($context["value"]);
                                            foreach ($context['_seq'] as $context["_key"] => $context["selection"]) {
                                                // line 65
                                                echo "                                                                            ";
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["form_field"], "options", [], "any", false, false, false, 65));
                                                foreach ($context['_seq'] as $context["field_key"] => $context["field_value"]) {
                                                    // line 66
                                                    echo "                                                                                ";
                                                    if (($context["field_value"] == $context["selection"])) {
                                                        // line 67
                                                        echo "                                                                                    ";
                                                        echo twig_escape_filter($this->env, $context["field_key"], "html", null, true);
                                                        echo "
                                                                                ";
                                                    }
                                                    // line 69
                                                    echo "                                                                            ";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['field_key'], $context['field_value'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 70
                                                echo "                                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selection'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 71
                                            echo "                                                                    ";
                                        } elseif (((twig_get_attribute($this->env, $this->source, $context["form_field"], "type", [], "any", false, false, false, 71) == "select") || (twig_get_attribute($this->env, $this->source, $context["form_field"], "type", [], "any", false, false, false, 71) == "radio"))) {
                                            // line 72
                                            echo "                                                                        ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["form_field"], "options", [], "any", false, false, false, 72));
                                            foreach ($context['_seq'] as $context["field_key"] => $context["field_value"]) {
                                                // line 73
                                                echo "                                                                            ";
                                                if (($context["field_value"] == $context["value"])) {
                                                    // line 74
                                                    echo "                                                                                ";
                                                    echo twig_escape_filter($this->env, $context["field_key"], "html", null, true);
                                                    echo "
                                                                            ";
                                                }
                                                // line 76
                                                echo "                                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['field_key'], $context['field_value'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 77
                                            echo "                                                                    ";
                                        } else {
                                            // line 78
                                            echo "                                                                        ";
                                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                                            echo "
                                                                    ";
                                        }
                                        // line 80
                                        echo "                                                                </dd>
                                                            ";
                                    }
                                    // line 82
                                    echo "                                                        ";
                                }
                                // line 83
                                echo "                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 84
                            echo "                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 85
                        echo "                                            </dl>
                                        </div>
                                    ";
                    }
                    // line 88
                    echo "                                </td>
                                <td></td>
                            </tr>
                        ";
                }
                // line 92
                echo "
                        ";
                // line 93
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 93) != 0)) {
                    // line 94
                    echo "                            <tr>
                                <td>";
                    // line 95
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 95), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, __trans("setup"), "html", null, true);
                    echo "</td>
                                <td>
                                    ";
                    // line 97
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "discount_setup", [], "any", false, false, false, 97)) {
                        // line 98
                        echo "                                    <del>";
                        echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 98));
                        echo "</del>
                                    ";
                        // line 99
                        echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 99) - twig_get_attribute($this->env, $this->source, $context["item"], "discount_setup", [], "any", false, false, false, 99)));
                        echo "
                                    ";
                    } else {
                        // line 101
                        echo "                                    ";
                        echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 101));
                        echo "</td>
                                ";
                    }
                    // line 103
                    echo "                            </tr>
                        ";
                }
                // line 105
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                    </tbody>
                </table>

                <div class=\"row-fluid\">
                    <div class=\"span6\">
                        ";
            // line 112
            if ( !twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 112)) {
                // line 113
                echo "                            <a href=\"#\" id=\"show-promo-field\">";
                echo twig_escape_filter($this->env, __trans("Have a coupon code?"), "html", null, true);
                echo "</a>
                        ";
            }
            // line 115
            echo "
                        <form action=\"";
            // line 116
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/cart/apply_promo");
            echo "\" method=\"post\" class=\"api-form well\" data-api-msg=\"";
            echo twig_escape_filter($this->env, __trans("Promo code was applied for your order"), "html", null, true);
            echo "\"
                            data-api-reload=\"1\" ";
            // line 117
            if ( !twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 117)) {
                echo "style=\"display:none\"";
            }
            echo " id=\"apply-promo\">
                            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 118
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                            <div class=\"control-group\">
                                <div class=\"form-controls\">
                                    <div class=\"input-append\">
                                        <input class=\"span8\" type=\"text\" name=\"promocode\" id=\"promocode\" value=\"";
            // line 122
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "promocode", [], "any", true, true, false, 122)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "promocode", [], "any", false, false, false, 122), twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 122))) : (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 122))), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["promo"] ?? null), "required", [], "any", false, false, false, 122)) {
                echo "required=\"required\"";
            }
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, __trans("Enter code"), "html", null, true);
            echo "\">
                                        ";
            // line 123
            if (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 123)) {
                // line 124
                echo "                                            <a class=\"btn btn-warning btn-sm mb-1 api-link\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/cart/remove_promo", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
                echo "\" type=\"button\" data-api-reload=\"1\">";
                echo twig_escape_filter($this->env, __trans("Remove"), "html", null, true);
                echo "</a>
                                        ";
            } else {
                // line 126
                echo "                                            <button class=\"btn btn-primary btn-sm mb-1\" type=\"submit\">";
                echo twig_escape_filter($this->env, __trans("Apply"), "html", null, true);
                echo "</button>
                                        ";
            }
            // line 128
            echo "                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class=\"span6\">
                        <table class=\"table table-bordered table-striped\">

                            ";
            // line 137
            if ((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "discount", [], "any", false, false, false, 137) > 0)) {
                // line 138
                echo "                                <tr>
                                    <td><strong>";
                // line 139
                echo twig_escape_filter($this->env, __trans("Subtotal:"), "html", null, true);
                echo "</strong></td>
                                    <td><strong>";
                // line 140
                echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "subtotal", [], "any", false, false, false, 140));
                echo "</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>";
                // line 143
                echo twig_escape_filter($this->env, __trans("Discount:"), "html", null, true);
                echo "</strong></td>
                                    <td><strong>- ";
                // line 144
                echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "discount", [], "any", false, false, false, 144));
                echo "</strong></td>
                                </tr>
                            ";
            }
            // line 147
            echo "
                            ";
            // line 148
            $context["tax_amount"] = 0;
            // line 149
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_is_taxable", [], "any", false, false, false, 149)) {
                // line 150
                echo "                                ";
                $context["tax_rate"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_tax_rate", [], "any", false, false, false, 150);
                // line 151
                echo "                                ";
                $context["tax_amount"] = ((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 151) * ($context["tax_rate"] ?? null)) / 100);
                // line 152
                echo "                                <tr>
                                    <td><strong>";
                // line 153
                echo twig_escape_filter($this->env, __trans("VAT"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, ($context["tax_rate"] ?? null), "html", null, true);
                echo "%) :</strong></td>
                                    <td><strong>";
                // line 154
                echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, ($context["tax_amount"] ?? null));
                echo "</strong></td>
                                </tr>
                            ";
            }
            // line 157
            echo "                            <tr>
                                <td><strong>";
            // line 158
            echo twig_escape_filter($this->env, __trans("Total:"), "html", null, true);
            echo "</strong></td>
                                <td><strong>";
            // line 159
            echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 159) + ($context["tax_amount"] ?? null)));
            echo "</strong></td>
                            </tr>

                        </table>

                        <form class=\"api-form\" method=\"post\" action=\"";
            // line 164
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/client/cart/checkout");
            echo "\" data-api-jsonp=\"onOrderCheckout\">
                            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 165
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                            <fieldset>
                                ";
            // line 167
            $context["enough_in_balance"] = (twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_balance_get_total", [], "any", false, false, false, 167) >= twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 167));
            // line 168
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 168) &&  !($context["enough_in_balance"] ?? null))) {
                // line 169
                echo "                                    <div class=\"control-group\">
                                        ";
                // line 170
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "invoice_gateways", [], "any", false, false, false, 170));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["gtw"]) {
                    // line 171
                    echo "                                            ";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "currency", [], "any", false, false, false, 171), "code", [], "any", false, false, false, 171), twig_get_attribute($this->env, $this->source, $context["gtw"], "accepted_currencies", [], "any", false, false, false, 171))) {
                        // line 172
                        echo "                                                <label class=\"radio\" for=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "id", [], "any", false, false, false, 172), "html", null, true);
                        echo "\">
                                                    <input type=\"radio\" name=\"gateway_id\" id=";
                        // line 173
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "id", [], "any", false, false, false, 173), "html", null, true);
                        echo " value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "id", [], "any", false, false, false, 173), "html", null, true);
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 173)) ? ("checked") : (""));
                        echo "/>
                                                    ";
                        // line 174
                        echo twig_escape_filter($this->env, __trans("Pay by"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "title", [], "any", false, false, false, 174), "html", null, true);
                        echo "
                                                </label>
                                            ";
                    }
                    // line 177
                    echo "                                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gtw'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "                                    </div>
                                ";
            }
            // line 180
            echo "                                <div class=\"control-group\">
                                    <div class=\"controls mt-3\">
                                        ";
            // line 182
            if (($context["enough_in_balance"] ?? null)) {
                // line 183
                echo "                                            <p>";
                echo twig_escape_filter($this->env, __trans("Total amount will be deducted from account balance"), "html", null, true);
                echo "</p>
                                        ";
            }
            // line 185
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "checkout_tos", [], "any", false, false, false, 185) == "explicit")) {
                // line 186
                echo "                                            <div class=\"form-check mb-1\">
                                                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\" required>
                                                <label class=\"form-check-label\" for=\"flexCheckDefault\">
                                                    ";
                // line 190
                echo "                                                    <span>I agree to the <a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/tos");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, __trans("terms of service"), "html", null, true);
                echo "</a> and <a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/privacy-policy");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, __trans("privacy policy"), "html", null, true);
                echo ".</span>
                                                </label>
                                            </div>
                                        ";
            }
            // line 194
            echo "                                        <button class=\"btn btn-primary btn-large\" type=\"submit\">";
            echo twig_escape_filter($this->env, __trans("Checkout"), "html", null, true);
            echo "</button>
                                    </div>
                                </div>
                            </fieldset>
                            ";
            // line 198
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "checkout_tos", [], "any", false, false, false, 198) == "implicit")) {
                // line 199
                echo "                                ";
                // line 200
                echo "                                <span class=\"text-muted\">By completing your order, you agree to our <a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/tos");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, __trans("terms of service"), "html", null, true);
                echo "</a> and <a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/privacy-policy");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, __trans("privacy policy"), "html", null, true);
                echo "</a>.</span>
                            ";
            }
            // line 202
            echo "                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 209
        echo "</div>

<script type=\"text/javascript\">
    \$('.remove-cart-item').on('click', function(e) {
        e.preventDefault();

        var btn = \$(this);

        if (confirm(\"";
        // line 217
        echo twig_escape_filter($this->env, __trans("Are you sure you want to remove this item from cart?"), "html", null, true);
        echo "\")) {
            var item_id = \$(btn).attr('data-cart-item-id');

            bb.post(\"guest/cart/remove_item\", { id: item_id, CSRFToken: \"";
        // line 220
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" }, function(r) {
                FOSSBilling.message(\"";
        // line 221
        echo twig_escape_filter($this->env, __trans("Item was removed from cart"), "html", null, true);
        echo "\");
                location.reload(false);
            });
        }
    });
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_orderbutton_checkout.html.twig";
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
        return array (  636 => 221,  632 => 220,  626 => 217,  616 => 209,  607 => 202,  595 => 200,  593 => 199,  591 => 198,  583 => 194,  569 => 190,  564 => 186,  561 => 185,  555 => 183,  553 => 182,  549 => 180,  545 => 178,  531 => 177,  523 => 174,  515 => 173,  510 => 172,  507 => 171,  490 => 170,  487 => 169,  484 => 168,  482 => 167,  477 => 165,  473 => 164,  465 => 159,  461 => 158,  458 => 157,  452 => 154,  446 => 153,  443 => 152,  440 => 151,  437 => 150,  434 => 149,  432 => 148,  429 => 147,  423 => 144,  419 => 143,  413 => 140,  409 => 139,  406 => 138,  404 => 137,  393 => 128,  387 => 126,  379 => 124,  377 => 123,  367 => 122,  360 => 118,  354 => 117,  348 => 116,  345 => 115,  339 => 113,  337 => 112,  330 => 107,  323 => 105,  319 => 103,  313 => 101,  308 => 99,  303 => 98,  301 => 97,  294 => 95,  291 => 94,  289 => 93,  286 => 92,  280 => 88,  275 => 85,  269 => 84,  263 => 83,  260 => 82,  256 => 80,  250 => 78,  247 => 77,  241 => 76,  235 => 74,  232 => 73,  227 => 72,  224 => 71,  218 => 70,  212 => 69,  206 => 67,  203 => 66,  198 => 65,  193 => 64,  191 => 63,  185 => 60,  182 => 59,  179 => 58,  176 => 57,  171 => 56,  167 => 55,  163 => 53,  161 => 52,  158 => 51,  156 => 50,  152 => 48,  150 => 47,  142 => 44,  139 => 43,  133 => 41,  126 => 37,  121 => 36,  119 => 35,  115 => 33,  109 => 31,  107 => 30,  104 => 29,  98 => 27,  96 => 26,  92 => 25,  88 => 23,  84 => 22,  76 => 17,  72 => 16,  60 => 10,  58 => 9,  50 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_checkout.html.twig", "/var/www/modules/Orderbutton/html_client/mod_orderbutton_checkout.html.twig");
    }
}
