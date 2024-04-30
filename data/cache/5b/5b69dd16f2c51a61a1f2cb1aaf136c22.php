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

/* mod_servicedomain_order_form.html.twig */
class __TwigTemplate_6ce9be8887e91fbb6bd03ec7d57dbb44 extends Template
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
        $context["periods"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_periods", [], "any", false, false, false, 1);
        // line 2
        $context["pricing"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 2);
        // line 3
        $context["transfer_tlds"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "serviceDomain_tlds", [["allow_transfer" => 1]], "method", false, false, false, 3);
        // line 4
        echo "<div class=\"card\">
   <div class=\"card-header\">
      <ul class=\"nav nav-tabs card-header-tabs\" data-bs-toggle=\"tabs\">
         <li class=\"nav-item\">
            <a href=\"#register\" class=\"nav-link active\" data-bs-toggle=\"tab\">Register</a>
         </li>
         ";
        // line 10
        if ( !twig_test_empty(($context["transfer_tlds"] ?? null))) {
            // line 11
            echo "         <li class=\"nav-item\">
            <a href=\"#transfer\" class=\"nav-link\" data-bs-toggle=\"tab\">Transfer</a>
         </li>
         ";
        }
        // line 15
        echo "      </ul>
   </div>
   <div class=\"card-body\">
      <div class=\"tab-content\">
         <div class=\"tab-pane active show\" id=\"register\">
            <fieldset class=\"form-fieldset\">
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 22
        echo twig_escape_filter($this->env, __trans("Register a new domain"), "html", null, true);
        echo "</label>
                  <div class=\"row g-2\">
                     <div class=\"col-auto\">
                        <input type=\"text\" class=\"form-control\" name=\"register_sld\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "register_sld", [], "any", false, false, false, 25), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Enter new domain name to register"), "html", null, true);
        echo "\" />
                     </div>
                     <div class=\"col-auto\">
                        ";
        // line 28
        $context["tlds"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "serviceDomain_tlds", [["allow_register" => 1]], "method", false, false, false, 28);
        // line 29
        echo "                        <select name=\"register_tld\" class=\"form-select\">
                           ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tlds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tld"]) {
            // line 31
            echo "                           <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 31), "html", null, true);
            echo "\" label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 31), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 31), "html", null, true);
            echo "</option>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tld'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        </select>
                     </div>
                     <div class=\"col-auto\">
                        <button class=\"btn btn-primary\" type=\"button\" id=\"domain-check\">
                           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                              <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\" />
                              <circle cx=\"10\" cy=\"10\" r=\"7\" />
                              <line x1=\"21\" y1=\"21\" x2=\"15\" y2=\"15\" />
                           </svg>
                           ";
        // line 42
        echo twig_escape_filter($this->env, __trans("Check"), "html", null, true);
        echo "
                        </button>
                     </div>
                  </div>
               </div>
               <div class=\"mb-3 onAfterDomainCheck\" style=\"display:none;\">
                  <div class=\"form-label\">Choose Duration</div>
                  <select class=\"form-select\" name=\"register_years\" id=\"registration-years\"></select>\t\t\t\t\t\t
               </div>
               <div class=\"mb-3 onAfterDomainCheck2\" style=\"display:none;\">
                  <label class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" onclick=\"\$('#nameservers').slideToggle();\">
                  <span class=\"form-check-label\">";
        // line 54
        echo twig_escape_filter($this->env, __trans("I want to use my nameservers"), "html", null, true);
        echo "</span>
                  </label>
               </div>
               <div class=\"mb-3\" id=\"nameservers\" style=\"display:none; margin: 10px 0;\">
                  <div class=\"mb-3\">
                     <input type=\"text\" class=\"form-control\" name=\"ns1\" value=\"\" placeholder=\"";
        // line 59
        echo twig_escape_filter($this->env, __trans("Nameserver 1"), "html", null, true);
        echo "\"/>
                  </div>
                  <div class=\"mb-3\">
                     <input type=\"text\" class=\"form-control\" name=\"ns2\" value=\"\" placeholder=\"";
        // line 62
        echo twig_escape_filter($this->env, __trans("Nameserver 2"), "html", null, true);
        echo "\"/>
                  </div>
                  <div class=\"mb-3\">
                     <input type=\"text\" class=\"form-control\" name=\"ns3\" value=\"\" placeholder=\"";
        // line 65
        echo twig_escape_filter($this->env, __trans("Nameserver 3"), "html", null, true);
        echo "\"/>
                  </div>
                  <div class=\"mb-3\">
                     <input type=\"text\" class=\"form-control\" name=\"ns4\" value=\"\" placeholder=\"";
        // line 68
        echo twig_escape_filter($this->env, __trans("Nameserver 4"), "html", null, true);
        echo "\"/>
                  </div>
               </div>
               <div class=\"mb-3\" id=\"config-next-domain\">
                  <button type=\"submit\" class=\"btn btn-primary\">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                        <path d=\"M7 7l5 5l-5 5\"></path>
                        <path d=\"M13 7l5 5l-5 5\"></path>
                     </svg>
                     ";
        // line 78
        echo twig_escape_filter($this->env, __trans("Next"), "html", null, true);
        echo "
                  </button>
               </div>
            </fieldset>
         </div>
         ";
        // line 83
        if ( !twig_test_empty(($context["transfer_tlds"] ?? null))) {
            // line 84
            echo "         <div class=\"tab-pane\" id=\"transfer\">
            <fieldset class=\"form-fieldset\">
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
            // line 87
            echo twig_escape_filter($this->env, __trans("Transfer a new domain"), "html", null, true);
            echo "</label>
                  <div class=\"row g-2\">
                     <div class=\"col-auto\">
                        <input type=\"text\" class=\"form-control\" name=\"transfer_sld\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "transfer_sld", [], "any", false, false, false, 90), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, __trans("Enter your domain name to transfer"), "html", null, true);
            echo "\" />
                     </div>
                     <div class=\"col-auto\">
                        <select name=\"transfer_tld\" class=\"form-select\">
                           ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["transfer_tlds"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tld"]) {
                // line 95
                echo "                           <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 95), "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 95), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 95), "html", null, true);
                echo "</option>
                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tld'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                        </select>
                     </div>
                     <div class=\"col-auto\">
                        <button class=\"btn btn-primary\" type=\"button\" id=\"transfer-check\">
                           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                              <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\" />
                              <circle cx=\"10\" cy=\"10\" r=\"7\" />
                              <line x1=\"21\" y1=\"21\" x2=\"15\" y2=\"15\" />
                           </svg>
                           ";
            // line 106
            echo twig_escape_filter($this->env, __trans("Check"), "html", null, true);
            echo "
                        </button>
                     </div>
                  </div>
               </div>
               <div class=\"mb-3\" id=\"domain-transfer-config\" style=\"display:none;\">
                  <div class=\"form-label\">";
            // line 112
            echo twig_escape_filter($this->env, __trans("Transfer price"), "html", null, true);
            echo ":</div>
                  <span id=\"transfer-price\"></span>
               </div>
               <div class=\"mb-3\" id=\"domain-transfer-config2\" style=\"display:none;\">
                  <div class=\"form-label\">";
            // line 116
            echo twig_escape_filter($this->env, __trans("Domain transfer code"), "html", null, true);
            echo ":</div>
                  <input type=\"text\" class=\"form-control\" name=\"transfer_code\" value=\"";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "transfer_code", [], "any", false, false, false, 117), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, __trans("Enter domain transfer code"), "html", null, true);
            echo "\"/>
               </div>
               <div class=\"mb-3\" id=\"config-next-domain2\">
                  <button type=\"submit\" class=\"btn btn-primary\">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                        <path d=\"M7 7l5 5l-5 5\"></path>
                        <path d=\"M13 7l5 5l-5 5\"></path>
                     </svg>
                     ";
            // line 126
            echo twig_escape_filter($this->env, __trans("Next"), "html", null, true);
            echo "
                  </button>
               </div>
            </fieldset>
         </div>
         ";
        }
        // line 132
        echo "      </div>
   </div>
</div>
<input type=\"hidden\" name=\"id\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 135), "html", null, true);
        echo "\" />
<input type=\"hidden\" name=\"action\" value=\"register\" id=\"domain-action\"/>
";
        // line 137
        $context["currency"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "cart_get_currency", [], "any", false, false, false, 137);
        // line 138
        echo "<script type=\"text/javascript\">
   \$(function() {
       \$('ul.nav.nav-tabs > li.domain-tab a').on('click', function () {
           \$('#domain-action').val(\$(this).attr('rel'));
       });
   
       \$('#config-next').hide();
       \$('#config-next-domain').hide();
       \$('#config-next-domain2').hide();
   
       if (\$(\".addons\").length) {
           \$('.order-button').one('click', function() {
               \$(this).hide();
               \$('.addons').slideDown('fast');
   
               return false;
           });
       }
   
       \$('.addon-period-selector').on('change',function() {
           var r = \$(this).attr('rel');
   
           \$('#' + r + ' span').hide();
           \$('#' + r + ' span.' + \$(this).val()).fadeIn();
       }).trigger('change');
   
       \$('#transfer-check').on('click', function(event) {
           var sld = \$('input[name=\"transfer_sld\"]').val();
           var tld = \$('select[name=\"transfer_tld\"]').val();
           var domain = sld + tld;
   
           bb.post(
               'guest/servicedomain/can_be_transferred',
               { sld: sld, tld: tld },
               function(result) {
                   setTransferPricing(tld);
                   \$('#domain-name').text(domain);
                   \$('#domain-transfer-config').fadeIn('fast');
                   \$('#domain-transfer-config2').fadeIn('fast');
                   \$('#transfer-check').hide();
                   \$('#transfer .order-button').show();
               }
           );
   
           return false;
       });
   
       \$('#domain-check').on('click', function(event) {
           var sld = \$('input[name=\"register_sld\"]').val();
   \t\tsld= sld.toLowerCase();
           var tld = \$('select[name=\"register_tld\"]').val();
           var domain = sld + tld;
           bb.post(
               'guest/servicedomain/check',
               { sld: sld, tld: tld },
               function(result) {
                   setPricing(tld);
                   \$('#domain-name').text(domain);
                   \$('.onAfterDomainCheck').fadeIn('fast');
                   \$('.onAfterDomainCheck2').fadeIn('fast');
                   \$('#domain-check').hide();
                   \$('#register .order-button').show();
               }
           );
   
           return false;
       });
   
       function setPricing(tld)
       {
           bb.post(
               'guest/servicedomain/pricing',
               { tld: tld },
               function(result) {
                   var s = \$(\"#registration-years\");
                   s.find('option').remove();
                   for (i = 1; i < 6; i++) {
                       var price = bb.currency(result.price_registration, ";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "conversion_rate", [], "any", false, false, false, 215), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "code", [], "any", false, false, false, 215), "html", null, true);
        echo "\", i);
   
                       s.append(new Option(i + \"";
        // line 217
        echo twig_escape_filter($this->env, __trans(" Year/s @ "), "html", null, true);
        echo "\" + price, i));
                   }
                   \$('#config-next-domain').show();
               }
           );
       }
   
       function setTransferPricing(tld) {
           bb.post(
               'guest/servicedomain/pricing',
               { tld: tld },
               function(result) {
                   var price = bb.currency(result.price_transfer, ";
        // line 229
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "conversion_rate", [], "any", false, false, false, 229), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "code", [], "any", false, false, false, 229), "html", null, true);
        echo "\");
   
                   \$('#transfer-price').text(price);
                   \$('#config-next-domain2').show();
               }
           );
       }
   });
</script>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_servicedomain_order_form.html.twig";
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
        return array (  383 => 229,  368 => 217,  361 => 215,  282 => 138,  280 => 137,  275 => 135,  270 => 132,  261 => 126,  247 => 117,  243 => 116,  236 => 112,  227 => 106,  216 => 97,  203 => 95,  199 => 94,  190 => 90,  184 => 87,  179 => 84,  177 => 83,  169 => 78,  156 => 68,  150 => 65,  144 => 62,  138 => 59,  130 => 54,  115 => 42,  104 => 33,  91 => 31,  87 => 30,  84 => 29,  82 => 28,  74 => 25,  68 => 22,  59 => 15,  53 => 11,  51 => 10,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_servicedomain_order_form.html.twig", "/var/www/themes/infobia/html/mod_servicedomain_order_form.html.twig");
    }
}
