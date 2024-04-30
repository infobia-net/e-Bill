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
class __TwigTemplate_285c6a14f94918804549d57e8bfb29a2 extends Template
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
        echo "  
";
        // line 2
        $context["cart"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "cart_get", [], "any", false, false, false, 2);
        // line 3
        echo "


 
";
        // line 7
        if (($context["client"] ?? null)) {
            // line 8
            echo "<div class=\"row row-deck row-cards mb-3\">
   <div class=\"col-md-12\">
      <div class=\"card\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">
               <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-shopping-cart\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                  <path d=\"M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path>
                  <path d=\"M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path>
                  <path d=\"M17 17h-11v-14h-2\"></path>
                  <path d=\"M6 5l14 1l-1 7h-13\"></path>
               </svg>
               &nbsp;";
            // line 20
            echo twig_escape_filter($this->env, __trans("Cart"), "html", null, true);
            echo "&nbsp;<span class=\"status status-green\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 20)), "html", null, true);
            echo "</span>
            </h3>          
              ";
            // line 22
            $this->loadTemplate("mod_orderbutton_currency.html.twig", "mod_orderbutton_checkout.html.twig", 22)->display($context);
            // line 23
            echo "         </div>
         <div class=\"card-body\">
            ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 25)) {
                // line 26
                echo "            <div id=\"checkout\">
               <div class=\"table-responsive\">
                  <table class=\"table table-striped table-bordered table-condensed\">
                     <thead>
                        <tr>
                           <th>";
                // line 31
                echo twig_escape_filter($this->env, __trans("Product"), "html", null, true);
                echo "</th>
                           <th>";
                // line 32
                echo twig_escape_filter($this->env, __trans("Price"), "html", null, true);
                echo "</th>
                           <th style=\"width: 3%; text-align: center\"></th>
                        </tr>
                     </thead>
                     <tbody>
                        ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 37));
                foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                    // line 38
                    echo "                        <tr>
                           <td>
                              ";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 40), "html", null, true);
                    echo "
                              ";
                    // line 41
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 41) > 1)) {
                        // line 42
                        echo "                              x ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 42), "html", null, true);
                        echo "
                              ";
                    }
                    // line 44
                    echo "                              ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "period", [], "any", false, false, false, 44)) {
                        // line 45
                        echo "                              (";
                        echo $this->extensions['Box_TwigExtensions']->twig_period_title($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "period", [], "any", false, false, false, 45));
                        echo ")
                              ";
                    }
                    // line 47
                    echo "                           </td>
                           <td>
                              ";
                    // line 49
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "discount_price", [], "any", false, false, false, 49)) {
                        // line 50
                        echo "                              <del>";
                        echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 50));
                        echo "</del>
                              <strong class=\"text-success\">";
                        // line 51
                        echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 51) - twig_get_attribute($this->env, $this->source, $context["item"], "discount_price", [], "any", false, false, false, 51)));
                        echo "</strong>
                              ";
                    } else {
                        // line 53
                        echo "                              ";
                        echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 53));
                        echo "
                              ";
                    }
                    // line 55
                    echo "                           </td>
                           <td>
                              <button data-cart-item-id=\"";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 57), "html", null, true);
                    echo "\" class=\"btn btn-warning btn-icon remove-cart-item\" title=\"";
                    echo twig_escape_filter($this->env, __trans("Remove item"), "html", null, true);
                    echo "\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                    <path d=\"M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z\"></path>
                                    <path d=\"M10 10l4 4m0 -4l-4 4\"></path>
                                 </svg>
                              </button>
                           </td>
                        </tr>
                        ";
                    // line 66
                    if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "show_custom_form_values", [], "any", false, false, false, 66)) {
                        // line 67
                        echo "                        <tr>
                           <td>
                              ";
                        // line 69
                        if ((twig_get_attribute($this->env, $this->source, $context["item"], "form_id", [], "any", false, false, false, 69) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "formbuilder"]], "method", false, false, false, 69))) {
                            // line 70
                            echo "                              ";
                            $context["form"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "formbuilder_get", [["id" => twig_get_attribute($this->env, $this->source, $context["item"], "form_id", [], "any", false, false, false, 70)]], "method", false, false, false, 70);
                            // line 71
                            echo "                              ";
                            // line 72
                            echo "                              <div class=\"well\">
                                 <dl class=\"dl-horizontal\">
                                    ";
                            // line 74
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["item"]);
                            foreach ($context['_seq'] as $context["field"] => $context["value"]) {
                                // line 75
                                echo "                                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 75));
                                foreach ($context['_seq'] as $context["_key"] => $context["form_field"]) {
                                    // line 76
                                    echo "                                    ";
                                    if ( !twig_test_empty($context["value"])) {
                                        // line 77
                                        echo "                                    ";
                                        if ((twig_get_attribute($this->env, $this->source, $context["form_field"], "name", [], "any", false, false, false, 77) == $context["field"])) {
                                            // line 78
                                            echo "                                    <dt>
                                       ";
                                            // line 79
                                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["form_field"], "label", [], "any", false, false, false, 79), "html", null, true);
                                            echo "
                                    </dt>
                                    <dd>
                                       ";
                                            // line 82
                                            if ((twig_get_attribute($this->env, $this->source, $context["form_field"], "type", [], "any", false, false, false, 82) == "checkbox")) {
                                                // line 83
                                                echo "                                       ";
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable($context["value"]);
                                                foreach ($context['_seq'] as $context["_key"] => $context["selection"]) {
                                                    // line 84
                                                    echo "                                       ";
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["form_field"], "options", [], "any", false, false, false, 84));
                                                    foreach ($context['_seq'] as $context["field_key"] => $context["field_value"]) {
                                                        // line 85
                                                        echo "                                       ";
                                                        if (($context["field_value"] == $context["selection"])) {
                                                            // line 86
                                                            echo "                                       ";
                                                            echo twig_escape_filter($this->env, $context["field_key"], "html", null, true);
                                                            echo "
                                       ";
                                                        }
                                                        // line 88
                                                        echo "                                       ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['field_key'], $context['field_value'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 89
                                                    echo "                                       ";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selection'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 90
                                                echo "                                       ";
                                            } elseif (((twig_get_attribute($this->env, $this->source, $context["form_field"], "type", [], "any", false, false, false, 90) == "select") || (twig_get_attribute($this->env, $this->source, $context["form_field"], "type", [], "any", false, false, false, 90) == "radio"))) {
                                                // line 91
                                                echo "                                       ";
                                                $context['_parent'] = $context;
                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["form_field"], "options", [], "any", false, false, false, 91));
                                                foreach ($context['_seq'] as $context["field_key"] => $context["field_value"]) {
                                                    // line 92
                                                    echo "                                       ";
                                                    if (($context["field_value"] == $context["value"])) {
                                                        // line 93
                                                        echo "                                       ";
                                                        echo twig_escape_filter($this->env, $context["field_key"], "html", null, true);
                                                        echo "
                                       ";
                                                    }
                                                    // line 95
                                                    echo "                                       ";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['field_key'], $context['field_value'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 96
                                                echo "                                       ";
                                            } else {
                                                // line 97
                                                echo "                                       ";
                                                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                                                echo "
                                       ";
                                            }
                                            // line 99
                                            echo "                                    </dd>
                                    ";
                                        }
                                        // line 101
                                        echo "                                    ";
                                    }
                                    // line 102
                                    echo "                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_field'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 103
                                echo "                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 104
                            echo "                                 </dl>
                              </div>
                              ";
                        }
                        // line 107
                        echo "                           </td>
                           <td></td>
                        </tr>
                        ";
                    }
                    // line 111
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 111) != 0)) {
                        // line 112
                        echo "                        <tr>
                           <td>";
                        // line 113
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 113), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, __trans("setup"), "html", null, true);
                        echo "</td>
                           <td>
                              ";
                        // line 115
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "discount_setup", [], "any", false, false, false, 115)) {
                            // line 116
                            echo "                              <del>";
                            echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 116));
                            echo "</del>
                              ";
                            // line 117
                            echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 117) - twig_get_attribute($this->env, $this->source, $context["item"], "discount_setup", [], "any", false, false, false, 117)));
                            echo "
                              ";
                        } else {
                            // line 119
                            echo "                              ";
                            echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 119));
                            echo "
                           </td>
                           ";
                        }
                        // line 122
                        echo "                        </tr>
                        ";
                    }
                    // line 124
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "                     </tbody>
                  </table>
               </div>
               ";
                // line 128
                if ( !twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 128)) {
                    // line 129
                    echo "               <div class=\"mb-3 mt-3\">
                  <a href=\"#\" id=\"show-promo-field\">";
                    // line 130
                    echo twig_escape_filter($this->env, __trans("Have coupon code?"), "html", null, true);
                    echo "</a>
               </div>
               ";
                }
                // line 133
                echo "               <form action=\"guest/cart/apply_promo\" method=\"post\" class=\"well\" id=\"apply-promo\" data-api-reload=\"1\" ";
                if ( !twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 133)) {
                    echo "style=\"display:none\"";
                }
                echo ">
               <input type=\"hidden\" name=\"CSRFToken\" value=\"";
                // line 134
                echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
                echo "\"/>
               <div class=\"mb-3\">
                  <div class=\"row g-2\">
                     <div class=\"col\">
                        <input class=\"form-control\" type=\"text\" name=\"promocode\" id=\"promocode\" value=\"";
                // line 138
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "promocode", [], "any", true, true, false, 138)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "promocode", [], "any", false, false, false, 138), twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 138))) : (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 138))), "html", null, true);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["promo"] ?? null), "required", [], "any", false, false, false, 138)) {
                    echo "required=\"required\"";
                }
                echo " placeholder=\"";
                echo twig_escape_filter($this->env, __trans("Enter code"), "html", null, true);
                echo "\">
                     </div>
                     <div class=\"col-auto\">
                        ";
                // line 141
                if (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 141)) {
                    // line 142
                    echo "                        <button class=\"btn btn-secondary\" id=\"remove-promo\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/cart/remove_promo", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
                    echo "\" type=\"button\" data-api-reload=\"1\">
                           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                              <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                              <path d=\"M12 8h8a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4m-4 0h-8a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1h4\"></path>
                              <path d=\"M12 12v9\"></path>
                              <path d=\"M19 12v3m0 4a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-7\"></path>
                              <path d=\"M7.5 8a2.5 2.5 0 0 1 -2.457 -2.963m2.023 -2c.14 -.023 .286 -.037 .434 -.037c1.974 -.034 3.76 1.95 4.5 5c.74 -3.05 2.526 -5.034 4.5 -5a2.5 2.5 0 1 1 0 5\"></path>
                              <path d=\"M3 3l18 18\"></path>
                           </svg>
                           ";
                    // line 151
                    echo twig_escape_filter($this->env, __trans("Remove"), "html", null, true);
                    echo "
                        </button>
                        ";
                } else {
                    // line 154
                    echo "                        <button class=\"btn btn-secondary\" type=\"submit\">
                           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                              <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                              <path d=\"M3 8m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z\"></path>
                              <path d=\"M12 8l0 13\"></path>
                              <path d=\"M19 12v7a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-7\"></path>
                              <path d=\"M7.5 8a2.5 2.5 0 0 1 0 -5a4.8 8 0 0 1 4.5 5a4.8 8 0 0 1 4.5 -5a2.5 2.5 0 0 1 0 5\"></path>
                           </svg>
                           ";
                    // line 162
                    echo twig_escape_filter($this->env, __trans("Apply"), "html", null, true);
                    echo "
                        </button>
                        ";
                }
                // line 165
                echo "                     </div>
                  </div>
               </div>
               ";
                // line 195
                echo "               </form>
               <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-striped\">
                     ";
                // line 198
                if ((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "discount", [], "any", false, false, false, 198) > 0)) {
                    // line 199
                    echo "                     <tr>
                        <td><strong>";
                    // line 200
                    echo twig_escape_filter($this->env, __trans("Subtotal:"), "html", null, true);
                    echo "</strong></td>
                        <td><strong>";
                    // line 201
                    echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "subtotal", [], "any", false, false, false, 201));
                    echo "</strong></td>
                     </tr>
                     <tr>
                        <td><strong>";
                    // line 204
                    echo twig_escape_filter($this->env, __trans("Discount:"), "html", null, true);
                    echo "</strong></td>
                        <td><strong>- ";
                    // line 205
                    echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "discount", [], "any", false, false, false, 205));
                    echo "</strong></td>
                     </tr>
                     ";
                }
                // line 208
                echo "                     ";
                $context["tax_amount"] = 0;
                // line 209
                echo "                     ";
                if (twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_is_taxable", [], "any", false, false, false, 209)) {
                    // line 210
                    echo "                     ";
                    $context["tax_rate"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_tax_rate", [], "any", false, false, false, 210);
                    // line 211
                    echo "                     ";
                    $context["tax_amount"] = ((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 211) * ($context["tax_rate"] ?? null)) / 100);
                    // line 212
                    echo "                     <tr>
                        <td><strong>";
                    // line 213
                    echo twig_escape_filter($this->env, __trans("VAT"), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, ($context["tax_rate"] ?? null), "html", null, true);
                    echo "%) :</strong></td>
                        <td><strong>";
                    // line 214
                    echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, ($context["tax_amount"] ?? null));
                    echo "</strong></td>
                     </tr>
                     ";
                }
                // line 217
                echo "                     <tr>
                        <td><strong>";
                // line 218
                echo twig_escape_filter($this->env, __trans("Total:"), "html", null, true);
                echo "</strong></td>
                        <td><strong>";
                // line 219
                echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 219) + ($context["tax_amount"] ?? null)));
                echo "</strong></td>
                     </tr>
                  </table>
               </div>
               <form method=\"post\" action=\"client/cart/checkout\" class=\"form-horizontal\" id=\"checkout-form\" onsubmit=\"return false;\">
                  <input type=\"hidden\" name=\"CSRFToken\" value=\"";
                // line 224
                echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
                echo "\"/>
                  <fieldset class=\"form-fieldset mt-3\">
                     ";
                // line 226
                $context["enough_in_balance"] = (twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_balance_get_total", [], "any", false, false, false, 226) >= twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 226));
                // line 227
                echo "                     ";
                if ((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 227) &&  !($context["enough_in_balance"] ?? null))) {
                    // line 228
                    echo "                     <div class=\"mb-3\">
                        <div class=\"form-label\">Payment Options</div>
                        <div>
                           ";
                    // line 231
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "invoice_gateways", [], "any", false, false, false, 231));
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
                        // line 232
                        echo "                           ";
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "currency", [], "any", false, false, false, 232), "code", [], "any", false, false, false, 232), twig_get_attribute($this->env, $this->source, $context["gtw"], "accepted_currencies", [], "any", false, false, false, 232))) {
                            // line 233
                            echo "                           <label class=\"form-check form-check-inline\">
                           <input class=\"form-check-input\" type=\"radio\" 
                           name=\"gateway_id\" id=";
                            // line 235
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "id", [], "any", false, false, false, 235), "html", null, true);
                            echo " value=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "id", [], "any", false, false, false, 235), "html", null, true);
                            echo "\" ";
                            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 235)) ? ("checked") : (""));
                            echo ">
                           <span class=\"form-check-label\">";
                            // line 236
                            echo twig_escape_filter($this->env, __trans("Pay by"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "title", [], "any", false, false, false, 236), "html", null, true);
                            echo "</span>
                           </label>
                           ";
                        }
                        // line 239
                        echo "                           ";
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
                    // line 240
                    echo "                        </div>
                     </div>
                     ";
                }
                // line 243
                echo "                     <div class=\"mb-3\">
                        ";
                // line 244
                if (($context["enough_in_balance"] ?? null)) {
                    // line 245
                    echo "                        <p>";
                    echo twig_escape_filter($this->env, __trans("Total amount will be deducted from account balance"), "html", null, true);
                    echo "</p>
                        ";
                }
                // line 247
                echo "                        <button class=\"btn btn-primary\" type=\"submit\">
                           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                              <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                              <path d=\"M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path>
                              <path d=\"M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path>
                              <path d=\"M17 17h-11v-14h-2\"></path>
                              <path d=\"M6 5l14 1l-1 7h-13\"></path>
                           </svg>
                           ";
                // line 255
                echo twig_escape_filter($this->env, __trans("Checkout"), "html", null, true);
                echo "
                        </button>
                     </div>
                  </fieldset>
               </form>
            </div>
            <div id=\"payment-html\">
               <div id=\"payment-html-inner\"></div>
            </div>
            ";
            } else {
                // line 265
                echo "            <p>Your Shopping Cart is Empty!</p>
            ";
            }
            // line 267
            echo "         </div>
      </div>
   </div>
</div>
";
        } else {
            // line 271
            echo " 
   <h2>";
            // line 272
            echo twig_escape_filter($this->env, __trans("Login or register to continue"), "html", null, true);
            echo "</h2>
";
        }
        // line 274
        echo "


<script type=\"text/javascript\">
   \$('#remove-promo').on('click', function(e) {
       e.preventDefault();
       bb.post(\"guest/cart/remove_promo\", {CSRFToken: \"";
        // line 280
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"}, function(r) {
               bb.msg(\"";
        // line 281
        echo twig_escape_filter($this->env, __trans("Promo code was removed"), "html", null, true);
        echo "\");
               location.reload(false);
       });
   });
   
   \$('.remove-cart-item').on('click', function(e) {
       e.preventDefault();
   
       var btn = \$(this);
   
       if (confirm(\"";
        // line 291
        echo twig_escape_filter($this->env, __trans("Are you sure you want to remove this item from cart?"), "html", null, true);
        echo "\")) {
           var item_id = \$(btn).attr('data-cart-item-id');
   
           bb.post(\"guest/cart/remove_item\", { id: item_id, CSRFToken: \"";
        // line 294
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" }, function(r) {
               bb.msg(\"";
        // line 295
        echo twig_escape_filter($this->env, __trans("Item was removed from cart"), "html", null, true);
        echo "\");
               location.reload(false);
           });
       }
   });
</script>";
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
        return array (  663 => 295,  659 => 294,  653 => 291,  640 => 281,  636 => 280,  628 => 274,  623 => 272,  620 => 271,  613 => 267,  609 => 265,  596 => 255,  586 => 247,  580 => 245,  578 => 244,  575 => 243,  570 => 240,  556 => 239,  548 => 236,  540 => 235,  536 => 233,  533 => 232,  516 => 231,  511 => 228,  508 => 227,  506 => 226,  501 => 224,  493 => 219,  489 => 218,  486 => 217,  480 => 214,  474 => 213,  471 => 212,  468 => 211,  465 => 210,  462 => 209,  459 => 208,  453 => 205,  449 => 204,  443 => 201,  439 => 200,  436 => 199,  434 => 198,  429 => 195,  424 => 165,  418 => 162,  408 => 154,  402 => 151,  389 => 142,  387 => 141,  375 => 138,  368 => 134,  361 => 133,  355 => 130,  352 => 129,  350 => 128,  345 => 125,  339 => 124,  335 => 122,  328 => 119,  323 => 117,  318 => 116,  316 => 115,  309 => 113,  306 => 112,  303 => 111,  297 => 107,  292 => 104,  286 => 103,  280 => 102,  277 => 101,  273 => 99,  267 => 97,  264 => 96,  258 => 95,  252 => 93,  249 => 92,  244 => 91,  241 => 90,  235 => 89,  229 => 88,  223 => 86,  220 => 85,  215 => 84,  210 => 83,  208 => 82,  202 => 79,  199 => 78,  196 => 77,  193 => 76,  188 => 75,  184 => 74,  180 => 72,  178 => 71,  175 => 70,  173 => 69,  169 => 67,  167 => 66,  153 => 57,  149 => 55,  143 => 53,  138 => 51,  133 => 50,  131 => 49,  127 => 47,  121 => 45,  118 => 44,  112 => 42,  110 => 41,  106 => 40,  102 => 38,  98 => 37,  90 => 32,  86 => 31,  79 => 26,  77 => 25,  73 => 23,  71 => 22,  64 => 20,  50 => 8,  48 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_checkout.html.twig", "/var/www/themes/tide/html/mod_orderbutton_checkout.html.twig");
    }
}
