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
class __TwigTemplate_086471e8c5faac39811426ac815692f3 extends Template
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
        $context["tlds"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "serviceDomain_tlds", [["allow_register" => 1]], "method", false, false, false, 4);
        // line 5
        echo "<div class=\"d-flex mb-3\">
    <nav class=\"nav nav-pills flex-column border-end me-3 gap-2\">
        ";
        // line 7
        if ( !twig_test_empty(($context["tlds"] ?? null))) {
            // line 8
            echo "            <a class=\"nav-link me-3 py-1 px-2 fs-7 active\" href=\"#\" id=\"register-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#register-tab-pane\"
                role=\"tab\" aria-controls=\"register-tab-pane\">Register</a>
        ";
        }
        // line 11
        echo "        ";
        if ( !twig_test_empty(($context["transfer_tlds"] ?? null))) {
            // line 12
            echo "        <a class=\"nav-link me-3 py-1 px-2 fs-7 ";
            if (twig_test_empty(($context["tlds"] ?? null))) {
                echo " active ";
            }
            echo "\" href=\"#\" id=\"transfer-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#transfer-tab-pane\"
               role=\"tab\" aria-controls=\"transfer-tab-pane\">Transfer</a>
        ";
        }
        // line 15
        echo "    </nav>
    <div class=\"tab-content\">
        ";
        // line 17
        if ( !twig_test_empty(($context["tlds"] ?? null))) {
            // line 18
            echo "            <div class=\"tab-pane show active\" id=\"register-tab-pane\" role=\"tabpanel\" aria-labelledby=\"register-tab\" tabindex=\"0\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label\">";
            // line 21
            echo twig_escape_filter($this->env, __trans("Register a new domain"), "html", null, true);
            echo "</label>
                        <div class=\"d-flex gap-2\">
                            <div class=\"input-group\">
                                <input class=\"form-control form-control-sm w-75\" type=\"text\" name=\"register_sld\"
                                    value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "register_sld", [], "any", false, false, false, 25), "html", null, true);
            echo "\"
                                    placeholder=\"";
            // line 26
            echo twig_escape_filter($this->env, __trans("Enter new domain name to register"), "html", null, true);
            echo "\">
                                <select class=\"form-select form-select-sm w-25\" name=\"register_tld\">
                                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tlds"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tld"]) {
                // line 29
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 29), "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 29), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 29), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tld'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                                </select>
                            </div>
                            <button class=\"btn btn-sm btn-dark\" type=\"button\" id=\"domain-check\">";
            // line 33
            echo twig_escape_filter($this->env, __trans("Check"), "html", null, true);
            echo "</button>
                        </div>
                    </div>
                    <div class=\"c\">
                        <div class=\"onAfterDomainCheck\" style=\"display:none;\">
                            <label class=\"mt-2\">
                                <select class=\"form-select form-select-sm\" name=\"register_years\" id=\"registration-years\"></select>
                            </label>
                            <br/>
                            <div class=\"form-check form-switch my-3\">
                                <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"nameserversCb\">
                                <label class=\"form-check-label text-sm\" for=\"nameserversCb\">
                                    ";
            // line 45
            echo twig_escape_filter($this->env, __trans("I want to use my nameservers"), "html", null, true);
            echo "
                                </label>
                            </div>
                            <div id=\"nameservers\" class=\"flex-column row\" style=\"display:none;\">
                                <div class=\"mb-2 col-md-6\">
                                    <input class=\"form-control form-control-sm\" type=\"text\" name=\"ns1\" value=\"\" placeholder=\"";
            // line 50
            echo twig_escape_filter($this->env, __trans("Nameserver 1"), "html", null, true);
            echo "\"/>
                                </div>
                                <div class=\"mb-2 col-md-6\">
                                    <input class=\"form-control form-control-sm\" type=\"text\" name=\"ns2\" value=\"\" placeholder=\"";
            // line 53
            echo twig_escape_filter($this->env, __trans("Nameserver 2"), "html", null, true);
            echo "\"/>
                                </div>
                                <div class=\"mb-2 col-md-6\">
                                    <input class=\"form-control form-control-sm\" type=\"text\" name=\"ns3\" value=\"\" placeholder=\"";
            // line 56
            echo twig_escape_filter($this->env, __trans("Nameserver 3"), "html", null, true);
            echo "\"/>
                                </div>
                                <div class=\"mb-2 col-md-6\">
                                    <input class=\"form-control form-control-sm\" type=\"text\" name=\"ns4\" value=\"\" placeholder=\"";
            // line 59
            echo twig_escape_filter($this->env, __trans("Nameserver 4"), "html", null, true);
            echo "\"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 67
        echo "        ";
        if ( !twig_test_empty(($context["transfer_tlds"] ?? null))) {
            // line 68
            echo "            <div class=\"tab-pane ";
            if (twig_test_empty(($context["tlds"] ?? null))) {
                echo " show active ";
            }
            echo "\" id=\"transfer-tab-pane\" role=\"tabpanel\" aria-labelledby=\"transfer-tab\" tabindex=\"0\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <label class=\"form-label\">";
            // line 71
            echo twig_escape_filter($this->env, __trans("Transfer a new domain"), "html", null, true);
            echo "</label>
                        <div class=\"d-flex gap-2\">
                            <div class=\"input-group\">
                                <input class=\"form-control form-control-sm w-75\" type=\"text\" name=\"transfer_sld\"
                                       value=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "transfer_sld", [], "any", false, false, false, 75), "html", null, true);
            echo "\"
                                       placeholder=\"";
            // line 76
            echo twig_escape_filter($this->env, __trans("Enter your domain name to transfer"), "html", null, true);
            echo "\">
                                <select class=\"form-select form-select-sm w-25\" name=\"transfer_tld\">
                                    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["transfer_tlds"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tld"]) {
                // line 79
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 79), "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 79), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 79), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tld'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                                </select>
                            </div>
                            <button class=\"btn btn-sm btn-dark\" type=\"button\" id=\"transfer-check\">";
            // line 83
            echo twig_escape_filter($this->env, __trans("Check"), "html", null, true);
            echo "</button>
                        </div>
                    </div>
                    <div id=\"domain-transfer-config\" style=\"display:none;\">
                        <p class=\"fs-7 mt-2\">";
            // line 87
            echo twig_escape_filter($this->env, __trans("Transfer price is"), "html", null, true);
            echo "&nbsp;<span class=\"fw-bold\" id=\"transfer-price\"></span></p>
                        <input class=\"form-control form-control-sm\" type=\"text\" name=\"transfer_code\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "transfer_code", [], "any", false, false, false, 88), "html", null, true);
            echo "\"
                               style=\"width: 200px\" placeholder=\"";
            // line 89
            echo twig_escape_filter($this->env, __trans("Enter domain transfer code"), "html", null, true);
            echo "\">
                    </div>
                </div>
            </div>
        ";
        }
        // line 94
        echo "    </div>
</div>

<input type=\"hidden\" name=\"id\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 97), "html", null, true);
        echo "\"/>
<input type=\"hidden\" name=\"action\" value=\"register\" id=\"domain-action\"/>

";
        // line 100
        $context["currency"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "cart_get_currency", [], "any", false, false, false, 100);
        // line 101
        echo "<script type=\"text/javascript\">
    let nameserversCbEl = document.getElementById('nameserversCb');
    let nameserversEl = document.getElementById('nameservers');
    nameserversCbEl.addEventListener('change', () => {
        if (nameserversCbEl.checked) {
            nameserversEl.style.display = \"flex\";
        } else {
            nameserversEl.style.display = \"none\";
        }

    })

    \$(function () {
        \$('ul.nav.nav-tabs > li.domain-tab a').on('click', function () {
            \$('#domain-action').val(\$(this).attr('rel'));
        });

        \$('#config-next').hide();
        \$( \"#config-next\" ).prop( \"disabled\", true );

        if (\$(\".addons\").length) {
            \$('.order-button').one('click', function () {
                \$(this).hide();
                \$('.addons').slideDown('fast');

                return false;
            });
        }

        \$('.addon-period-selector').on('change', function () {
            var r = \$(this).attr('rel');

            \$('#' + r + ' span').hide();
            \$('#' + r + ' span.' + \$(this).val()).fadeIn();
        }).trigger('change');

        \$('#transfer-check').on('click', function (event) {
            var sld = \$('input[name=\"transfer_sld\"]').val();
            var tld = \$('select[name=\"transfer_tld\"]').val();
            \$('#domain-action').val('transfer');
            var domain = sld + tld;

            bb.post(
                'guest/servicedomain/can_be_transferred',
                {sld: sld, tld: tld},
                function (result) {
                    setTransferPricing(tld);
                    \$('#domain-name').text(domain);
                    \$('#domain-transfer-config').fadeIn('fast');
                    \$('.onAfterDomainCheck').fadeIn('fast');
                    \$('#transfer-check').hide();
                    \$('#transfer .order-button').show();
                }
            );

            return false;
        });

        \$('#domain-check').on('click', function (event) {
            var sld = \$('input[name=\"register_sld\"]').val();
            sld = sld.toLowerCase();
            var tld = \$('select[name=\"register_tld\"]').val();
            var domain = sld + tld;
            \$('#domain-action').val('register');
            bb.post(
                'guest/servicedomain/check',
                {sld: sld, tld: tld},
                function (result) {
                    setPricing(tld);
                    \$('#domain-name').text(domain);
                    \$('.onAfterDomainCheck').fadeIn('fast');
                    \$('#domain-check').hide();
                    \$('#register .order-button').show();
                }
            );

            return false;
        });

        function setPricing(tld) {
            bb.post(
                'guest/servicedomain/pricing',
                {tld: tld},
                function (result) {
                    var s = \$(\"#registration-years\");
                    s.find('option').remove();
                    for (i = 1; i < 6; i++) {
                        var price = bb.currency(result.price_registration, ";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "conversion_rate", [], "any", false, false, false, 188), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "code", [], "any", false, false, false, 188), "html", null, true);
        echo "\", i);

                        s.append(new Option(i + \"";
        // line 190
        echo twig_escape_filter($this->env, __trans(" Year/s @ "), "html", null, true);
        echo "\" + price, i));
                    }
                    \$('#config-next').show();
                    \$( \"#config-next\" ).prop( \"disabled\", false );
                }
            );
        }

        function setTransferPricing(tld) {
            bb.post(
                'guest/servicedomain/pricing',
                {tld: tld},
                function (result) {
                    var price = bb.currency(result.price_transfer, ";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "conversion_rate", [], "any", false, false, false, 203), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "code", [], "any", false, false, false, 203), "html", null, true);
        echo "\");
                    \$('#transfer-price').text(price);
                    \$('#config-next').show();
                    \$( \"#config-next\" ).prop( \"disabled\", false );
                }
            );
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
        return array (  365 => 203,  349 => 190,  342 => 188,  253 => 101,  251 => 100,  245 => 97,  240 => 94,  232 => 89,  228 => 88,  224 => 87,  217 => 83,  213 => 81,  200 => 79,  196 => 78,  191 => 76,  187 => 75,  180 => 71,  171 => 68,  168 => 67,  157 => 59,  151 => 56,  145 => 53,  139 => 50,  131 => 45,  116 => 33,  112 => 31,  99 => 29,  95 => 28,  90 => 26,  86 => 25,  79 => 21,  74 => 18,  72 => 17,  68 => 15,  59 => 12,  56 => 11,  51 => 8,  49 => 7,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_servicedomain_order_form.html.twig", "/var/www/modules/Servicedomain/html_client/mod_servicedomain_order_form.html.twig");
    }
}
