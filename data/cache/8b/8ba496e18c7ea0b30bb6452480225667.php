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

/* mod_orderbutton_index.html.twig */
class __TwigTemplate_8fff733711b125cda20b88914cf97f94 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_public.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["loader_nr"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", false, false, false, 2), "8")) : ("8"));
        // line 3
        $context["loader_url"] = (("img/assets/loaders/loader" . ($context["loader_nr"] ?? null)) . ".gif");
        // line 1
        $this->parent = $this->loadTemplate("layout_public.html.twig", "mod_orderbutton_index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"card border-0\" id=\"orderbutton\" style=\"margin-bottom: 0\">
            <div class=\"card-body p-1\">
                <div id=\"orderManager\" class=\"accordion\">

                    ";
        // line 13
        $this->loadTemplate("mod_orderbutton_choose_product.html.twig", "mod_orderbutton_index.html.twig", 13)->display($context);
        // line 14
        echo "
                    ";
        // line 15
        $this->loadTemplate("mod_orderbutton_product_configuration.html.twig", "mod_orderbutton_index.html.twig", 15)->display($context);
        // line 16
        echo "
                    ";
        // line 17
        if ( !($context["client"] ?? null)) {
            // line 18
            echo "                        ";
            $this->loadTemplate("mod_orderbutton_client.html.twig", "mod_orderbutton_index.html.twig", 18)->display($context);
            // line 19
            echo "                    ";
        }
        // line 20
        echo "
                    ";
        // line 21
        $this->loadTemplate("mod_orderbutton_checkout.html.twig", "mod_orderbutton_index.html.twig", 21)->display($context);
        // line 22
        echo "
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\">
                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                    data-bs-target=\"#payment-html\" aria-expanded=\"false\" aria-controls=\"payment-html\">
                                <svg class=\"svg-icon me-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                    <path
                                        d=\"M20,8H4V6H20M20,18H4V12H20M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z\"/>
                                </svg>
                                ";
        // line 31
        echo twig_escape_filter($this->env, __trans("Payment"), "html", null, true);
        echo "
                            </button>
                        </h2>
                        <div id=\"payment-html\" class=\"accordion-collapse collapse\" data-bs-parent=\"#orderManager\">
                            <div class=\"accordion-body\">
                                <div class=\"accordion-inner\" id=\"payment-html-inner\"></div>
                            </div>
                        </div>
                    </div>

                </div>
                ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "branding"]], "method", false, false, false, 42)) {
            // line 43
            echo "                    <div class=\"d-flex justify-content-center small text-muted pt-3 pb-2\">
                        <span>";
            // line 44
            echo twig_escape_filter($this->env, __trans("Powered by"), "html", null, true);
            echo "</span>&nbsp;<a href=\"https://fossbilling.org\"
                                                                      title=\"Billing Software\" target=\"_blank\">FOSSBilling
                            Community</a>
                    </div>
                ";
        }
        // line 49
        echo "
            </div>
        </div>
    </div>
</div>
<div class=\"loading\"
     style=\"display: none; background: rgba(0,0,0,.5) no-repeat; width:100%; height:100%; position:fixed; top:0; left:0; z-index:999;\">
    <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_mod_asset_url(($context["loader_url"] ?? null), "orderbutton"), "html", null, true);
        echo "\"
         style=\"display: block; margin-left: auto; margin-right: auto;position: relative; top : 50%\">
</div>
";
    }

    // line 60
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "<script>
    \$(function () {
        \$('.accordion-body').on('shown', function () {
            \$('#popup-iframe').height(\$('body').height());
        });

        \$('#show-promo-field').on('click', function (event) {
            \$('#apply-promo').show();
            \$(this).hide();
            \$('#promocode').focus();
        });

        \$('.register-login a').on('click', function (e) {
            e.preventDefault();
            \$(this).tab('show');
        });

    });

    function onOrderCheckout(result){
        if (result.invoice_hash) {
            bb.post('guest/invoice/payment', {
            hash: result.invoice_hash,
            gateway_id: result.gateway_id,
            auto_redirect: true
            }, function (r) {
                let checkoutEl = document.getElementById('checkout');
                let paymentHtmlEl = document.getElementById('payment-html');
                if (r.iframe) {
                    \$('#payment-html-inner').html(r.result);
                    bootstrap.Collapse.getOrCreateInstance(checkoutEl).hide();
                    \$('#checkout').remove();
                    bootstrap.Collapse.getOrCreateInstance(paymentHtmlEl).show();
                } else {
                    var link = '";
        // line 95
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice/banklink");
        echo "' + '/' + result.invoice_hash + '/' + result.gateway_id;
                    \$('#payment-html-inner').html('<a href=\"' + link + '\" target=\"_parent\" id=\"redirect-to-gateway\">Redirect to payment gateway</a>');
                    bootstrap.Collapse.getOrCreateInstance(checkoutEl).hide();
                    \$('#checkout-inner').remove();
                    bootstrap.Collapse.getOrCreateInstance(paymentHtmlEl).show();
                    \$('#redirect-to-gateway')[0].click();
                }
            });
        } else {
            window.top.location.href = ('";
        // line 104
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service/manage");
        echo "' + '/' + result.order_id);
        }
    }

    function onLogin(result){
        FOSSBilling.message(\"";
        // line 109
        echo twig_escape_filter($this->env, __trans("You logged in successfully"), "html", null, true);
        echo "\");
        let registerEl = document.getElementById('register');
        new bootstrap.Collapse('#register').hide();
        setTimeout(() => {
            registerEl.parentElement.remove();
            new bootstrap.Collapse('#checkout').show();
        }, 500);
    }

    function onAccountCreate(result){
        //login after registration
        var login_details = {
            email: \$('#reg-email').val(),
            password: \$('#reg-password').val()
        };
        bb.post(
            'guest/client/login',
            login_details,
            function (result) {
                FOSSBilling.message(\"";
        // line 128
        echo twig_escape_filter($this->env, __trans("You logged in successfully"), "html", null, true);
        echo "\");
                let registerEl = document.getElementById('register');
                new bootstrap.Collapse('#register').hide();
                setTimeout(() => {
                    registerEl.parentElement.remove();
                    new bootstrap.Collapse('#checkout').show();
                    }, 500);
            }
        );
    }
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_orderbutton_index.html.twig";
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
        return array (  232 => 128,  210 => 109,  202 => 104,  190 => 95,  154 => 61,  150 => 60,  142 => 56,  133 => 49,  125 => 44,  122 => 43,  120 => 42,  106 => 31,  95 => 22,  93 => 21,  90 => 20,  87 => 19,  84 => 18,  82 => 17,  79 => 16,  77 => 15,  74 => 14,  72 => 13,  64 => 7,  60 => 6,  53 => 4,  48 => 1,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_index.html.twig", "/var/www/modules/Orderbutton/html_client/mod_orderbutton_index.html.twig");
    }
}
