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
class __TwigTemplate_d1b701bd90de2b2ac0f4cf666d6e6f21 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'page_header' => [$this, 'block_page_header'],
            'page_subheader' => [$this, 'block_page_subheader'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'body_class' => [$this, 'block_body_class'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_orderbutton_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_orderbutton_index.html.twig", 2)->unwrap();
        // line 12
        $context["loader_nr"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", false, false, false, 12), "8")) : ("8"));
        // line 13
        $context["loader_url"] = (("img/assets/loaders/loader" . ($context["loader_nr"] ?? null)) . ".gif");
        // line 41
        $context["loader_nr"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", false, false, false, 41), "8")) : ("8"));
        // line 42
        $context["loader_url"] = (("img/assets/loaders/loader" . ($context["loader_nr"] ?? null)) . ".gif");
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (twig_matches("/^\\d+\$/", twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "order", [], "any", false, false, false, 4))) {
            // line 5
            echo twig_escape_filter($this->env, __trans("Product Configuration"), "html", null, true);
            echo "
";
        } elseif (twig_matches("/^\\d+\$/", twig_get_attribute($this->env, $this->source,         // line 6
($context["request"] ?? null), "checkout", [], "any", false, false, false, 6))) {
            // line 7
            echo twig_escape_filter($this->env, __trans("Cart"), "html", null, true);
            echo "
";
        } else {
            // line 9
            echo twig_escape_filter($this->env, __trans("Choose products we offer for selling"), "html", null, true);
            echo "
";
        }
    }

    // line 14
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        if (twig_matches("/^\\d+\$/", twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "order", [], "any", false, false, false, 15))) {
            // line 16
            echo twig_escape_filter($this->env, __trans("Product Configuration"), "html", null, true);
            echo "
";
        } elseif (twig_matches("/^\\d+\$/", twig_get_attribute($this->env, $this->source,         // line 17
($context["request"] ?? null), "checkout", [], "any", false, false, false, 17))) {
            // line 18
            echo twig_escape_filter($this->env, __trans("Cart"), "html", null, true);
            echo "
";
        } else {
            // line 20
            echo twig_escape_filter($this->env, __trans("Select Product"), "html", null, true);
            echo "
";
        }
    }

    // line 23
    public function block_page_subheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        if (twig_matches("/^\\d+\$/", twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "order", [], "any", false, false, false, 24))) {
            // line 25
            echo twig_escape_filter($this->env, __trans("Configure Your Product"), "html", null, true);
            echo "
";
        } elseif (twig_matches("/^\\d+\$/", twig_get_attribute($this->env, $this->source,         // line 26
($context["request"] ?? null), "checkout", [], "any", false, false, false, 26))) {
            // line 27
            echo twig_escape_filter($this->env, __trans("Your Shopping Cart"), "html", null, true);
            echo "
";
        } else {
            // line 29
            echo twig_escape_filter($this->env, __trans("Choose products we offer for selling"), "html", null, true);
            echo "
";
        }
    }

    // line 32
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        if (twig_matches("/^\\d+\$/", twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "order", [], "any", false, false, false, 33))) {
            // line 34
            echo "<li class=\"breadcrumb-item\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
            echo "</a></li>
<li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
            // line 35
            echo twig_escape_filter($this->env, __trans("Product Configuration"), "html", null, true);
            echo "</a></li>
";
        } elseif (twig_matches("/^\\d+\$/", twig_get_attribute($this->env, $this->source,         // line 36
($context["request"] ?? null), "checkout", [], "any", false, false, false, 36))) {
            // line 37
            echo "<li class=\"breadcrumb-item\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
            echo "</a></li>
<li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
            // line 38
            echo twig_escape_filter($this->env, __trans("Cart"), "html", null, true);
            echo "</a></li>
";
        }
    }

    // line 43
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "order-index";
    }

    // line 44
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        $context["products"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "product_get_list", [], "any", false, false, false, 46);
        // line 47
        if (twig_matches("/^\\d+\$/", twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "order", [], "any", false, false, false, 47))) {
            // line 48
            $this->loadTemplate("mod_orderbutton_product_configuration.html.twig", "mod_orderbutton_index.html.twig", 48)->display($context);
        }
        // line 50
        if (twig_matches("/^\\d+\$/", twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "checkout", [], "any", false, false, false, 50))) {
            // line 51
            $this->loadTemplate("mod_orderbutton_checkout.html.twig", "mod_orderbutton_index.html.twig", 51)->display($context);
            // line 52
            if ( !($context["client"] ?? null)) {
                // line 53
                $this->loadTemplate("mod_orderbutton_client.html.twig", "mod_orderbutton_index.html.twig", 53)->display($context);
            }
        }
    }

    // line 57
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "<script>
   \$(function(){
       \$('.accordion-body').on('shown', function() {
           \$('#popup-iframe').height(\$('body').height());
       });
   
       \$('#client-login').on('submit', function(event) {
           bb.post(
               'guest/client/login',
               \$(this).serialize(),
               function(result) {
   
                   bb.msg(\"";
        // line 71
        echo twig_escape_filter($this->env, __trans("You logged in successfully"), "js", null, true);
        echo "\");
                   \$('#register-or-login').hide(1000, function(){
                       \$('#register-or-login').remove();
                       bb.reload();
                   });
   
               }
           );
           return false;
       });
       \$('#create-profile').on('submit', function(event) {
           bb.post(
               'guest/client/create',
               \$(this).serialize(),
               function(result) {
                   //login after registration
                   var login_details = {
                       email: \$('#reg-email').val(),
                       password: \$('#reg-password').val()
                   };
                   bb.post(
                       'guest/client/login',
                       login_details,
                       function(result) {
                           bb.msg(\"";
        // line 95
        echo twig_escape_filter($this->env, __trans("You logged in successfully"), "js", null, true);
        echo "\");
                           \$('#register-or-login').hide(1000, function() {
                               \$('#register-or-login').remove();
                               bb.reload();
                           });
                       }
                   );
               }
           );
           return false;
       });
       \$('#add-to-cart').on('submit', function(event) {
           bb.post(
               'guest/cart/add_item',
               \$(this).serialize(),
               function(result) {
                   bb.msg(\"";
        // line 111
        echo twig_escape_filter($this->env, __trans("Product was added to shopping cart"), "js", null, true);
        echo "\");
                   bb.redirect(\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("orderbutton", ["checkout" => 1]), "js", null, true);
        echo "\"+\"";
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "show_custom_form_values", [], "any", false, false, false, 112)) {
            echo "&show_custom_form_values=1";
        }
        echo "\");
               }
           );
   
           return false;
       });
       \$('#apply-promo').on('submit', function(event) {
           bb.post(
               'guest/cart/apply_promo',
               \$(this).serialize(),
               function(result) {
                   bb.msg(\"";
        // line 123
        echo twig_escape_filter($this->env, __trans("Promo code was applied for your order"), "js", null, true);
        echo "\");
                   location.reload(false);
               }
           );
   
           return false;
       });
   
       \$('#checkout-form').on('submit', function(event) {
           bb.post(
               'client/cart/checkout',
               \$(this).serialize(),
               function(result) {
                   if(result.invoice_hash) {
                       bb.post('guest/invoice/payment', {hash:result.invoice_hash, gateway_id:result.gateway_id,auto_redirect:true }, function(r) {
                           if(r.iframe) {
                           \$('#payment-html-inner').html(r.result);
                               \$('#checkout').hide();
                               \$('#checkout').on('hidden', function(){
                                   \$('#checkout').remove();
                                   \$('#payment-html').show();
                               });
                           } else {
                               var link = '";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice/banklink"), "js", null, true);
        echo "' + '/' + result.invoice_hash + '/' + result.gateway_id;
                               \$('#payment-html-inner').html('<a href=\"'+link+'\" target=\"_parent\" id=\"redirect-to-gateway\">Redirect to payment gateway</a>');
                               \$('#checkout').hide();
                               \$('#checkout-inner').remove();
                               \$('#payment-html').show();
                               \$('#redirect-to-gateway')[0].click();
                           }
                       });
                   } else {
                       window.top.location.href = ('";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service/manage"), "js", null, true);
        echo "' + '/' + result.order_id );
                   }
               }
           );
           return false;
       });
   
       \$('#show-promo-field').on('click', function(event) {
           \$('#apply-promo').show();
           \$(this).hide();
           \$('#promocode').focus();
       });
   
       \$('.register-login a').on('click', function (e) {
           e.preventDefault();
           \$(this).tab('show');
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
        return array (  328 => 155,  316 => 146,  290 => 123,  272 => 112,  268 => 111,  249 => 95,  222 => 71,  208 => 59,  204 => 57,  198 => 53,  196 => 52,  194 => 51,  192 => 50,  189 => 48,  187 => 47,  185 => 46,  181 => 45,  175 => 44,  168 => 43,  161 => 38,  154 => 37,  152 => 36,  148 => 35,  141 => 34,  139 => 33,  135 => 32,  128 => 29,  123 => 27,  121 => 26,  117 => 25,  115 => 24,  111 => 23,  104 => 20,  99 => 18,  97 => 17,  93 => 16,  91 => 15,  87 => 14,  80 => 9,  75 => 7,  73 => 6,  69 => 5,  67 => 4,  63 => 3,  59 => 1,  57 => 42,  55 => 41,  53 => 13,  51 => 12,  49 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_index.html.twig", "/var/www/themes/tide/html/mod_orderbutton_index.html.twig");
    }
}
