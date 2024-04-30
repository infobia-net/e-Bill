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

/* mod_invoice_index.html.twig */
class __TwigTemplate_03bf39f3fdea39cd673da3b8cd87291d extends Template
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
            'page_header' => [$this, 'block_page_header'],
            'page_subheader' => [$this, 'block_page_subheader'],
            'content' => [$this, 'block_content'],
            'footerjs' => [$this, 'block_footerjs'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_invoice_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Invoice management"), "html", null, true);
    }

    // line 3
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "invoice-index";
    }

    // line 4
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
        echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
        echo "</a></li>
";
    }

    // line 7
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("List of invoices"), "html", null, true);
    }

    // line 8
    public function block_page_subheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("All of your invoices can be found here. You can choose to see either paid or unpaid invoices by clicking corresponding button."), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        $context["unpaid_invoices"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [["status" => "unpaid", "per_page" => 100]], "method", false, false, false, 10);
        // line 11
        $context["paid_invoices"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [["per_page" => 10, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 11), "status" => "paid"]], "method", false, false, false, 11);
        // line 12
        echo "<div class=\"row row-deck row-cards\">
   <div class=\"col-md-12\">
      <div class=\"card border border-bottom-0\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 16
        echo twig_escape_filter($this->env, __trans("List of invoices"), "html", null, true);
        echo "</h3>
         </div>
      </div>
   </div>
</div>
<div class=\"row row-deck row-cards\">
   <div class=\"col-md-12\">
      <div class=\"card border border-top-0\">
         <div class=\"card-header\">
            <ul class=\"nav nav-tabs card-header-tabs\" data-bs-toggle=\"tabs\">
               <li class=\"nav-item\">
                  <a href=\"#tabs-unpaid\" class=\"nav-link active bg-red-lt\" data-bs-toggle=\"tab\">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                        <path d=\"M6.5 7h11\"></path>
                        <path d=\"M6 20v-2a6 6 0 1 1 12 0v2a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1z\"></path>
                        <path d=\"M6 4v2a6 6 0 1 0 12 0v-2a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1z\"></path>
                     </svg>
                     Unpaid
                  </a>
               </li>
               <li class=\"nav-item\">
                  <a href=\"#tabs-paid\" class=\"nav-link bg-green-lt\" data-bs-toggle=\"tab\">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                        <path d=\"M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12\"></path>
                        <path d=\"M20 12v4h-4a2 2 0 0 1 0 -4h4\"></path>
                     </svg>
                     Paid
                  </a>
               </li>
            </ul>
         </div>
         <div class=\"card-body\">
            <div class=\"tab-content\">
               <div class=\"tab-pane active show\" id=\"tabs-unpaid\">
                  <div id=\"invoices-table-unpaid\" class=\"table-responsive\">
                     <table class=\"table table-vcenter text-nowrap table-bordered table-striped\">
                        <thead>
                           <tr>
                              <th><button class=\"table-sort\" data-sort=\"sort-title-u\">";
        // line 56
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</button></th>
                              <th><button class=\"table-sort\" data-sort=\"sort-date-u\">";
        // line 57
        echo twig_escape_filter($this->env, __trans("Invoice Date"), "html", null, true);
        echo "</button></th>
                              <th><button class=\"table-sort\" data-sort=\"sort-due-u\">";
        // line 58
        echo twig_escape_filter($this->env, __trans("Due Date"), "html", null, true);
        echo "</button></th>
                              <th><button class=\"table-sort\" data-sort=\"sort-total-u\">";
        // line 59
        echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
        echo "</button></th>
                              <th>&nbsp;</th>
                           </tr>
                        </thead>
                        <tbody class=\"table-tbody\">
                           ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, ($context["unpaid_invoices"] ?? null), "total", [], "any", false, false, false, 64) > 0)) {
            // line 65
            echo "                           ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["unpaid_invoices"] ?? null), "list", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["i"] => $context["invoice"]) {
                // line 66
                echo "                           <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(["odd", "even"], $context["i"]), "html", null, true);
                echo "\">
                              <td class=\"sort-title-u\"><a href=\"";
                // line 67
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "hash", [], "any", false, false, false, 67), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_sprintf("Proforma invoice #%05s", twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 67)), "html", null, true);
                echo "</a></td>
                              <td class=\"sort-date-u\">";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "created_at", [], "any", false, false, false, 68)), "html", null, true);
                echo "</td>
                              <td class=\"sort-due-u\">";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "due_at", [], "any", false, false, false, 69)), "html", null, true);
                echo "</td>
                              <td class=\"sort-total-u\">";
                // line 70
                echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "total", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, $context["invoice"], "currency", [], "any", false, false, false, 70));
                echo "</td>
                              <td>
                                 <a class=\"btn btn-small btn-outline-red btn-icon\" href=\"";
                // line 72
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "hash", [], "any", false, false, false, 72), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, __trans("Pay"), "html", null, true);
                echo "\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                       <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                       <path d=\"M9 14c0 1.657 2.686 3 6 3s6 -1.343 6 -3s-2.686 -3 -6 -3s-6 1.343 -6 3z\"></path>
                                       <path d=\"M9 14v4c0 1.656 2.686 3 6 3s6 -1.344 6 -3v-4\"></path>
                                       <path d=\"M3 6c0 1.072 1.144 2.062 3 2.598s4.144 .536 6 0c1.856 -.536 3 -1.526 3 -2.598c0 -1.072 -1.144 -2.062 -3 -2.598s-4.144 -.536 -6 0c-1.856 .536 -3 1.526 -3 2.598z\"></path>
                                       <path d=\"M3 6v10c0 .888 .772 1.45 2 2\"></path>
                                       <path d=\"M3 11c0 .888 .772 1.45 2 2\"></path>
                                    </svg>
                                 </a>
                              </td>
                           </tr>
                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                           ";
        } else {
            // line 86
            echo "                           <tr>
                              <td colspan=\"5\" >";
            // line 87
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                           </tr>
                           ";
        }
        // line 90
        echo "                        </tbody>
                     </table>
                  </div>
               </div>
               <div class=\"tab-pane\" id=\"tabs-paid\">
                  <div id=\"invoices-table-paid\" class=\"table-responsive\">
                     <table class=\"table table-bordered table-vcenter text-nowrap table-striped\">
                        <thead>
                           <tr>
                              <th><button class=\"table-sort\" data-sort=\"sort-title-p\">";
        // line 99
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</button></th>
                              <th><button class=\"table-sort\" data-sort=\"sort-date-p\">";
        // line 100
        echo twig_escape_filter($this->env, __trans("Invoice Date"), "html", null, true);
        echo "</button></th>
                              <th><button class=\"table-sort\" data-sort=\"sort-due-p\">";
        // line 101
        echo twig_escape_filter($this->env, __trans("Paid Date"), "html", null, true);
        echo "</button></th>
                              <th><button class=\"table-sort\" data-sort=\"sort-total-p\">";
        // line 102
        echo twig_escape_filter($this->env, __trans("Total"), "html", null, true);
        echo "</button></th>
                              <th>&nbsp;</th>
                           </tr>
                        </thead>
                        <tbody class=\"table-tbody\">
                           ";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, ($context["paid_invoices"] ?? null), "total", [], "any", false, false, false, 107) > 0)) {
            // line 108
            echo "                           ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paid_invoices"] ?? null), "list", [], "any", false, false, false, 108));
            foreach ($context['_seq'] as $context["i"] => $context["invoice"]) {
                // line 109
                echo "                           <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(["odd", "even"], $context["i"]), "html", null, true);
                echo "\">
                              <td class=\"sort-title-p\"><a href=\"";
                // line 110
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "hash", [], "any", false, false, false, 110), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_sprintf("Invoice #%05s", twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 110)), "html", null, true);
                echo "</a></td>
                              <td class=\"sort-date-p\">";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "created_at", [], "any", false, false, false, 111)), "html", null, true);
                echo "</td>
                              <td class=\"sort-due-p\">";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "paid_at", [], "any", false, false, false, 112)), "html", null, true);
                echo "</td>
                              <td class=\"sort-total-p\">";
                // line 113
                echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "total", [], "any", false, false, false, 113), twig_get_attribute($this->env, $this->source, $context["invoice"], "currency", [], "any", false, false, false, 113));
                echo "</td>
                              <td>
                                 <a href=\"";
                // line 115
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "hash", [], "any", false, false, false, 115), "html", null, true);
                echo "\" class=\"btn btn-outline-green btn-small btn-icon\" title=\"";
                echo twig_escape_filter($this->env, __trans("View"), "html", null, true);
                echo "\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                       <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                       <path d=\"M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0\"></path>
                                       <path d=\"M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6\"></path>
                                    </svg>
                                 </a>
                              </td>
                           </tr>
                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                           ";
        } else {
            // line 126
            echo "                           <tr>
                              <td colspan=\"7\">";
            // line 127
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                           </tr>
                           ";
        }
        // line 130
        echo "                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class=\"card-footer\">
            <p>";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["unpaid_invoices"] ?? null), "total", [], "any", false, false, false, 137), "html", null, true);
        echo " unpaid invoices and ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paid_invoices"] ?? null), "total", [], "any", false, false, false, 137), "html", null, true);
        echo " paid invoices</p>
            ";
        // line 138
        $this->loadTemplate("partial_pagination.html.twig", "mod_invoice_index.html.twig", 138)->display(twig_array_merge($context, ["list" => ($context["unpaid_invoices"] ?? null)]));
        // line 139
        echo "         </div>
      </div>
   </div>
</div>
";
    }

    // line 144
    public function block_footerjs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "<script src=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "libs/list.js/dist/list.min.js");
        echo "\" defer></script>
<script>
   document.addEventListener(\"DOMContentLoaded\", function() {
   const list = new List('invoices-table-unpaid', {
   \tsortClass: 'table-sort',
   \tlistClass: 'table-tbody',
   \tvalueNames: [ 'sort-title-u', 'sort-due-u', 'sort-date-u', 'sort-total-u'
   \t]
   });
   
   const list2 = new List('invoices-table-paid', {
   \tsortClass: 'table-sort',
   \tlistClass: 'table-tbody',
   \tvalueNames: [ 'sort-title-p', 'sort-due-p', 'sort-date-p', 'sort-total-p'
   \t]
   }); 
   })
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_invoice_index.html.twig";
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
        return array (  360 => 145,  356 => 144,  348 => 139,  346 => 138,  340 => 137,  331 => 130,  325 => 127,  322 => 126,  319 => 125,  299 => 115,  294 => 113,  290 => 112,  286 => 111,  278 => 110,  273 => 109,  268 => 108,  266 => 107,  258 => 102,  254 => 101,  250 => 100,  246 => 99,  235 => 90,  229 => 87,  226 => 86,  223 => 85,  200 => 72,  195 => 70,  191 => 69,  187 => 68,  179 => 67,  174 => 66,  169 => 65,  167 => 64,  159 => 59,  155 => 58,  151 => 57,  147 => 56,  104 => 16,  98 => 12,  96 => 11,  94 => 10,  90 => 9,  83 => 8,  76 => 7,  69 => 5,  65 => 4,  58 => 3,  51 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_invoice_index.html.twig", "/var/www/themes/infobia/html/mod_invoice_index.html.twig");
    }
}
