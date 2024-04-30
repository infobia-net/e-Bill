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

/* mod_invoice_invoice.html.twig */
class __TwigTemplate_cf0d9adc354509f4d820dd954fce0963 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'body_class' => [$this, 'block_body_class'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_invoice_invoice.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_invoice_invoice.html.twig", 2)->unwrap();
        // line 3
        $context["nr"] = (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "serie", [], "any", false, false, false, 3) . twig_sprintf("%05s", twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "nr", [], "any", false, false, false, 3)));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 4) == "paid")) {
            echo " ";
            echo twig_escape_filter($this->env, __trans("Invoice"), "html", null, true);
            echo " ";
        } else {
            echo "  ";
            echo twig_escape_filter($this->env, __trans("Proforma Invoice"), "html", null, true);
            echo " ";
        }
        echo " - ";
        echo twig_escape_filter($this->env, ($context["nr"] ?? null), "html", null, true);
    }

    // line 5
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "invoice-invoice";
    }

    // line 6
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<li class=\"breadcrumb-item\"><a href=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/invoice");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
        echo "</a></li>
<li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 8) == "paid")) {
            echo " ";
            echo twig_escape_filter($this->env, __trans("Proforma"), "html", null, true);
            echo " ";
        } else {
            echo "  ";
            echo twig_escape_filter($this->env, __trans("Invoice"), "html", null, true);
            echo " ";
        }
        echo twig_escape_filter($this->env, ($context["nr"] ?? null), "html", null, true);
        echo "</a></li>
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        $context["seller"] = twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "seller", [], "any", false, false, false, 11);
        // line 12
        $context["buyer"] = twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "buyer", [], "any", false, false, false, 12);
        // line 13
        $context["company"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 13);
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 14) == "unpaid")) {
            // line 15
            echo "<div class=\"card mb-3 d-print-none bg-yellow-lt\">
   <div class=\"card-header\">
      <h3 class=\"card-title\">";
            // line 17
            echo twig_escape_filter($this->env, __trans("Please choose payment type and pay for your chosen products."), "html", null, true);
            echo "</h3>
   </div>
   <div class=\"card-body p-2\">
      <div class=\"row\">
         <form method=\"post\" action=\"";
            // line 21
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/invoice/payment");
            echo "\" class=\"api-form\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(("invoice/" . twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 21)), ["auto_redirect" => 1]);
            echo "\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"hash\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 23), "html", null, true);
            echo "\"/>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "invoice_gateways", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["gtw"]) {
                // line 25
                echo "            ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, $context["gtw"], "accepted_currencies", [], "any", false, false, false, 25))) {
                    // line 26
                    echo "            ";
                    $context["banklink"] = $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice/banklink");
                    // line 27
                    echo "            <button type=\"button\" class=\"hover-popover\" style=\"background: transparent url('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["gtw"], "logo", [], "any", false, false, false, 27), "logo", [], "any", false, false, false, 27), "html", null, true);
                    echo "') no-repeat scroll 0% 0%; height:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["gtw"], "logo", [], "any", false, false, false, 27), "height", [], "any", false, false, false, 27), "html", null, true);
                    echo "; width:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["gtw"], "logo", [], "any", false, false, false, 27), "width", [], "any", false, false, false, 27), "html", null, true);
                    echo "; background-size: contain; border: 0; margin: 10px;\" type=\"radio\" name=\"gateway_id\" gateway_id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "id", [], "any", false, false, false, 27), "html", null, true);
                    echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                    echo twig_escape_filter($this->env, __trans("Pay with"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "title", [], "any", false, false, false, 27), "html", null, true);
                    echo "\" onclick=\"window.location.replace('";
                    echo twig_escape_filter($this->env, ($context["banklink"] ?? null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 27), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "id", [], "any", false, false, false, 27), "html", null, true);
                    echo "')\")></button>
            ";
                }
                // line 29
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gtw'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            <input type=\"hidden\" name=\"gateway_id\" id=\"gateway_id\">
         </form>
      </div>
   </div>
</div>
";
        }
        // line 36
        echo "<div class=\"card card-lg mb-3\">
   <div class=\"card-header d-print-none\">
      <div class=\"card-actions\">
         <a href=\"";
        // line 39
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice/pdf");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 39), "html", null, true);
        echo "\" class=\"btn btn-outline-dark\" target=\"_blank\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
               <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
               <path d=\"M10 8v8h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-2z\"></path>
               <path d=\"M3 12h2a2 2 0 1 0 0 -4h-2v8\"></path>
               <path d=\"M17 12h3\"></path>
               <path d=\"M21 8h-4v8\"></path>
            </svg>
            ";
        // line 47
        echo twig_escape_filter($this->env, __trans("PDF"), "html", null, true);
        echo "
         </a>
         <a href=\"#\" onclick=\"window.print(); return false;\" class=\"btn btn-outline-primary\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
               <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
               <path d=\"M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2\"></path>
               <path d=\"M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4\"></path>
               <path d=\"M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z\"></path>
            </svg>
            ";
        // line 56
        echo twig_escape_filter($this->env, __trans("Print"), "html", null, true);
        echo "
         </a>
      </div>
   </div>
   <div class=\"card-body\">
      <div class=\"row\">
         <div class=\"col-12 mb-5\">
            ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 63)) {
            // line 64
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 64), "html", null, true);
            echo "\" style=\"width:30%;height;30%;\" alt=\"Logo\">
            ";
        }
        // line 66
        echo "         </div>
         <div class=\"col-6\">
            <p class=\"h3\">";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "company", [], "any", false, false, false, 68)) {
            // line 69
            echo "               ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "company", [], "any", false, false, false, 69), "html", null, true);
            echo "
               ";
        }
        // line 71
        echo "            </p>
            <address>
               ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "company_vat", [], "any", false, false, false, 73)) {
            // line 74
            echo "               VAT: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "company_vat", [], "any", false, false, false, 74), "html", null, true);
            echo "<br />
               ";
        }
        // line 76
        echo "               ";
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "address", [], "any", false, false, false, 76)) {
            // line 77
            echo "               ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "address", [], "any", false, false, false, 77), "html", null, true);
            echo "<br />
               ";
        }
        // line 79
        echo "               ";
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "phone", [], "any", false, false, false, 79)) {
            // line 80
            echo "               ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "phone", [], "any", false, false, false, 80), "html", null, true);
            echo "<br />
               ";
        }
        // line 82
        echo "               ";
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "email", [], "any", false, false, false, 82)) {
            // line 83
            echo "               ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "email", [], "any", false, false, false, 83), "html", null, true);
            echo "<br />
               ";
        }
        // line 85
        echo "               ";
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "account_number", [], "any", false, false, false, 85)) {
            // line 86
            echo "               ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "account_number", [], "any", false, false, false, 86), "html", null, true);
            echo "<br />
               ";
        }
        // line 88
        echo "               ";
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "note", [], "any", false, false, false, 88)) {
            // line 89
            echo "               Note: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "note", [], "any", false, false, false, 89), "html", null, true);
            echo "
               ";
        }
        // line 91
        echo "            </address>
         </div>
         <div class=\"col-6 text-end\">
            <p class=\"h3\">";
        // line 94
        if ((twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "first_name", [], "any", false, false, false, 94) || twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "last_name", [], "any", false, false, false, 94))) {
            // line 95
            echo "               ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "first_name", [], "any", false, false, false, 95), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "last_name", [], "any", false, false, false, 95), "html", null, true);
            echo "
               ";
        }
        // line 97
        echo "            </p>
            <address>
               ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company", [], "any", false, false, false, 99)) {
            // line 100
            echo "               ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company", [], "any", false, false, false, 100), "html", null, true);
            echo "<br />
               ";
        }
        // line 102
        echo "               ";
        if (twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company_number", [], "any", false, false, false, 102)) {
            // line 103
            echo "               ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company_number", [], "any", false, false, false, 103), "html", null, true);
            echo "<br />
               ";
        }
        // line 105
        echo "               ";
        if (twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company_vat", [], "any", false, false, false, 105)) {
            // line 106
            echo "               ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company_vat", [], "any", false, false, false, 106), "html", null, true);
            echo "<br />
               ";
        }
        // line 108
        echo "               ";
        if (twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "address", [], "any", false, false, false, 108)) {
            // line 109
            echo "               ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "address", [], "any", false, false, false, 109), "html", null, true);
            echo "<br />
               ";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "city", [], "any", false, false, false, 110), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "state", [], "any", false, false, false, 110), "html", null, true);
            echo "<br />
               ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "zip", [], "any", false, false, false, 111), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 111)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "country", [], "any", false, false, false, 111)] ?? null) : null), "html", null, true);
            echo "<br />
               ";
        }
        // line 113
        echo "               ";
        if (twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "phone", [], "any", false, false, false, 113)) {
            // line 114
            echo "               ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "phone", [], "any", false, false, false, 114), "html", null, true);
            echo "
               ";
        }
        // line 116
        echo "            </address>
         </div>
         <div class=\"col-12 my-5\">
            <h1>";
        // line 119
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 119) == "paid")) {
            echo " ";
            echo twig_escape_filter($this->env, __trans("Invoice"), "html", null, true);
            echo " ";
        } else {
            echo "  ";
            echo twig_escape_filter($this->env, __trans("Proforma Invoice"), "html", null, true);
            echo " ";
        }
        echo " - ";
        echo twig_escape_filter($this->env, ($context["nr"] ?? null), "html", null, true);
        echo " <span class=\"badge bg-";
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 119) == "paid")) {
            echo "green";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 119) == "unpaid")) {
            echo "red";
        }
        echo "\">
               ";
        // line 120
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 120)), "html", null, true);
        echo "
               </span>
            </h1>
            <p class=\"h3\">";
        // line 123
        echo twig_escape_filter($this->env, __trans("Invoice Date"), "html", null, true);
        echo ": ";
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "paid_at", [], "any", false, false, false, 123)) {
            // line 124
            echo "               ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "paid_at", [], "any", false, false, false, 124)), "html", null, true);
            echo "
               ";
        } else {
            // line 126
            echo "               ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "created_at", [], "any", false, false, false, 126)), "html", null, true);
            echo "
               ";
        }
        // line 128
        echo "            </p>
            <p class=\"h3\">";
        // line 129
        echo twig_escape_filter($this->env, __trans("Due Date"), "html", null, true);
        echo ": ";
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "due_at", [], "any", false, false, false, 129)) {
            // line 130
            echo "               ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "due_at", [], "any", false, false, false, 130)), "html", null, true);
            echo "
               ";
        } else {
            // line 132
            echo "               -----
               ";
        }
        // line 134
        echo "            </p>
         </div>
      </div>
      <table class=\"table table-striped table-bordered table-transparent table-responsive\">
         <thead>
            <tr>
               <th class=\"text-center\" style=\"width: 1%\">";
        // line 140
        echo twig_escape_filter($this->env, __trans("#"), "html", null, true);
        echo "</th>
               <th>";
        // line 141
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
               <th class=\"text-end\" style=\"width: 1%\">";
        // line 142
        echo twig_escape_filter($this->env, __trans("Price"), "html", null, true);
        echo "</th>
               <th class=\"text-end\" style=\"width: 1%\">";
        // line 143
        echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
        echo "</th>
            </tr>
         </thead>
         ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "lines", [], "any", false, false, false, 146));
        foreach ($context['_seq'] as $context["i"] => $context["item"]) {
            // line 147
            echo "         <tr>
            <td class=\"text-center\">";
            // line 148
            echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
            echo ".</td>
            <td>
               <p class=\"strong mb-1\">
                  ";
            // line 151
            if (twig_get_attribute($this->env, $this->source, $context["item"], "order_id", [], "any", false, false, false, 151)) {
                // line 152
                echo "                  <a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order/service");
                echo "/manage/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "order_id", [], "any", false, false, false, 152), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 152), "html", null, true);
                echo "</a>
                  ";
            } else {
                // line 154
                echo "                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 154), "html", null, true);
                echo "
                  ";
            }
            // line 156
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 156) > 1)) {
                // line 157
                echo "                  x ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 157), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "unit", [], "any", false, false, false, 157), "html", null, true);
                echo "
                  ";
            }
            // line 159
            echo "               </p>
            </td>
            <td class=\"text-end\">
               ";
            // line 162
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 162), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 162));
            echo "
            </td>
            <td class=\"text-end\">";
            // line 164
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 164), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 164));
            echo "</td>
         </tr>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "         ";
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "tax", [], "any", false, false, false, 167) > 0)) {
            // line 168
            echo "         <tr>
            <td colspan=\"3\" class=\"strong text-end\">";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxname", [], "any", false, false, false, 169), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxrate", [], "any", false, false, false, 169), "html", null, true);
            echo "%</td>
            <td class=\"text-end\">";
            // line 170
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "tax", [], "any", false, false, false, 170), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 170));
            echo "</td>
         </tr>
         ";
        }
        // line 173
        echo "         ";
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", false, false, false, 173) > 0)) {
            // line 174
            echo "         <tr>
            <td colspan=\"3\" class=\"strong text-end\">";
            // line 175
            echo twig_escape_filter($this->env, __trans("Discount"), "html", null, true);
            echo "</td>
            <td class=\"text-end\">";
            // line 176
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", false, false, false, 176), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 176));
            echo "</td>
         </tr>
         ";
        }
        // line 179
        echo "         <tr>
            <td colspan=\"3\" class=\"font-weight-bold text-uppercase text-end\">";
        // line 180
        echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
        echo "</td>
            <td class=\"font-weight-bold text-end\">";
        // line 181
        echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "total", [], "any", false, false, false, 181), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 181));
        echo "</td>
         </tr>
      </table>
      ";
        // line 184
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "text_1", [], "any", false, false, false, 184)) {
            // line 185
            echo "      <p class=\"text-muted text-center mt-5\">
         ";
            // line 186
            echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "text_1", [], "any", false, false, false, 186));
            echo "
      </p>
      ";
        }
        // line 189
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "text_2", [], "any", false, false, false, 189)) {
            // line 190
            echo "      <p class=\"text-muted text-center mt-5\">
         ";
            // line 191
            echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "text_2", [], "any", false, false, false, 191));
            echo "
      </p>
      ";
        }
        // line 194
        echo "   </div>
</div>
";
    }

    // line 197
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        echo "<script>
   \$(function() {
       \$(\".hover-popover\").tooltip({
           placement: 'top'
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
        return "mod_invoice_invoice.html.twig";
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
        return array (  610 => 198,  606 => 197,  600 => 194,  594 => 191,  591 => 190,  588 => 189,  582 => 186,  579 => 185,  577 => 184,  571 => 181,  567 => 180,  564 => 179,  558 => 176,  554 => 175,  551 => 174,  548 => 173,  542 => 170,  536 => 169,  533 => 168,  530 => 167,  521 => 164,  516 => 162,  511 => 159,  503 => 157,  500 => 156,  494 => 154,  484 => 152,  482 => 151,  476 => 148,  473 => 147,  469 => 146,  463 => 143,  459 => 142,  455 => 141,  451 => 140,  443 => 134,  439 => 132,  433 => 130,  429 => 129,  426 => 128,  420 => 126,  414 => 124,  410 => 123,  404 => 120,  384 => 119,  379 => 116,  373 => 114,  370 => 113,  363 => 111,  357 => 110,  352 => 109,  349 => 108,  343 => 106,  340 => 105,  334 => 103,  331 => 102,  325 => 100,  323 => 99,  319 => 97,  311 => 95,  309 => 94,  304 => 91,  298 => 89,  295 => 88,  289 => 86,  286 => 85,  280 => 83,  277 => 82,  271 => 80,  268 => 79,  262 => 77,  259 => 76,  253 => 74,  251 => 73,  247 => 71,  241 => 69,  239 => 68,  235 => 66,  229 => 64,  227 => 63,  217 => 56,  205 => 47,  192 => 39,  187 => 36,  179 => 30,  173 => 29,  151 => 27,  148 => 26,  145 => 25,  141 => 24,  137 => 23,  133 => 22,  127 => 21,  120 => 17,  116 => 15,  114 => 14,  112 => 13,  110 => 12,  108 => 11,  104 => 10,  89 => 8,  82 => 7,  78 => 6,  71 => 5,  54 => 4,  50 => 1,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_invoice_invoice.html.twig", "/var/www/themes/infobia/html/mod_invoice_invoice.html.twig");
    }
}
