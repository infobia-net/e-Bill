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

/* mod_client_balance.html.twig */
class __TwigTemplate_02c3eaecf9b93a10ee58134dd8eeb691 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'page_header' => [$this, 'block_page_header'],
            'page_subheader' => [$this, 'block_page_subheader'],
            'body_class' => [$this, 'block_body_class'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_client_balance.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_client_balance.html.twig", 2)->unwrap();
        // line 7
        $context["profile"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "profile_get", [], "any", false, false, false, 7);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Payment history"), "html", null, true);
    }

    // line 4
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
        echo twig_escape_filter($this->env, __trans("Payment history"), "html", null, true);
        echo "</a></li>";
    }

    // line 5
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Payment history"), "html", null, true);
    }

    // line 6
    public function block_page_subheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Here you can track what you have been charged for and add more funds to your account"), "html", null, true);
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "client-balance";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<div class=\"row row-deck row-cards\">
   <div class=\"col-md-9\">
      <div class=\"card\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 14
        echo twig_escape_filter($this->env, __trans("Payment history"), "html", null, true);
        echo "</h3>
         </div>
         <div class=\"table-responsive\">
            <table class=\"table card-table table-vcenter text-nowrap table-bordered table-striped\">
               <thead>
                  <tr>
                     <th>";
        // line 20
        echo twig_escape_filter($this->env, __trans("Description"), "html", null, true);
        echo "</th>
                     <th>";
        // line 21
        echo twig_escape_filter($this->env, __trans("Date"), "html", null, true);
        echo "</th>
                     <th>";
        // line 22
        echo twig_escape_filter($this->env, __trans("Amount"), "html", null, true);
        echo "</th>
                  </tr>
               </thead>
               <tbody>
                  ";
        // line 26
        $context["transactions"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_balance_get_list", [["per_page" => 10, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 26)]], "method", false, false, false, 26);
        // line 27
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["transactions"] ?? null), "list", [], "any", false, false, false, 27));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 28
            echo "                  <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(["odd", "even"], $context["i"]), "html", null, true);
            echo "\">
                     <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "description", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                     <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "created_at", [], "any", false, false, false, 30)), "html", null, true);
            echo "</td>
                     <td>";
            // line 31
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "amount", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, $context["tx"], "currency", [], "any", false, false, false, 31));
            echo "</td>
                  </tr>
                  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                  <tr>
                     <td colspan=\"3\">";
            // line 35
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "               </tbody>
               <tfoot>
                  <tr>
                     <td colspan=\"2\">";
        // line 41
        echo twig_escape_filter($this->env, __trans("Total:"), "html", null, true);
        echo "</td>
                     <td><strong>";
        // line 42
        echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "balance", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 42));
        echo "</strong></td>
                  </tr>
               </tfoot>
            </table>
            ";
        // line 46
        $this->loadTemplate("partial_pagination.html.twig", "mod_client_balance.html.twig", 46)->display(twig_array_merge($context, ["list" => ($context["transactions"] ?? null)]));
        // line 47
        echo "         </div>
      </div>
   </div>
   <div class=\"col-md-3\">
      <div class=\"card\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 53
        echo twig_escape_filter($this->env, __trans("Add a deposit"), "html", null, true);
        echo "</h3>
         </div>
         <div class=\"card-body\">
            <form action=\"\" method=\"post\" class=\"form-inline api-form\" data-api-url=\"";
        // line 56
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/client/invoice/funds_invoice");
        echo "\" data-api-jsonp=\"onAfterInvoiceCreated\">
               <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
               <fieldset>
                  <div class=\"control-group\">
                     <div class=\"form-controls\">
                        <div class=\"input-append\">
                           <input id=\"appendedPrependedInput\" class=\"form-control\" type=\"text\" name=\"amount\" placeholder=\"0\" required=\"required\"><br />
                           <button class=\"btn btn-primary ms-auto\" type=\"submit\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-cash\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                 <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                 <path d=\"M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z\"></path>
                                 <path d=\"M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path>
                                 <path d=\"M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2\"></path>
                              </svg>
                              ";
        // line 70
        echo twig_escape_filter($this->env, __trans("Deposit"), "html", null, true);
        echo "
                           </button>
                        </div>
                     </div>
                  </div>
               </fieldset>
            </form>
         </div>
      </div>
   </div>
</div>
";
    }

    // line 82
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "<script>
   function onAfterInvoiceCreated(hash) {
       var link = '";
        // line 85
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
        echo "/' + hash;
   
       bb.redirect(link);
   }
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_client_balance.html.twig";
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
        return array (  244 => 85,  240 => 83,  236 => 82,  220 => 70,  204 => 57,  200 => 56,  194 => 53,  186 => 47,  184 => 46,  177 => 42,  173 => 41,  168 => 38,  159 => 35,  156 => 34,  148 => 31,  144 => 30,  140 => 29,  135 => 28,  129 => 27,  127 => 26,  120 => 22,  116 => 21,  112 => 20,  103 => 14,  97 => 10,  93 => 9,  86 => 8,  79 => 6,  72 => 5,  63 => 4,  56 => 3,  52 => 1,  50 => 7,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_client_balance.html.twig", "/var/www/themes/tide/html/mod_client_balance.html.twig");
    }
}
