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

/* mod_order_list.html.twig */
class __TwigTemplate_e7d280524f7af0fb49833ee9dbe9e48f extends Template
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
            'body_class' => [$this, 'block_body_class'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_order_list.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_order_list.html.twig", 2)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("My Products & Services"), "html", null, true);
    }

    // line 4
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("My Products & Services"), "html", null, true);
    }

    // line 5
    public function block_page_subheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("All of your orders are displayed here. Click on any order to get full information about it."), "html", null, true);
    }

    // line 6
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "order-list";
    }

    // line 7
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
        echo twig_escape_filter($this->env, __trans("My Products & Services"), "html", null, true);
        echo "</a></li>";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<div class=\"row row-deck row-cards\">
   <div class=\"col-md-12\">
      <div class=\"card\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 13
        echo twig_escape_filter($this->env, __trans("My Products & Services"), "html", null, true);
        echo "</h3>
         </div>
         <div class=\"table-responsive\">
            <table class=\"table card-table table-vcenter text-nowrap table-bordered table-striped\">
               <thead>
                  <tr>
                     <th>";
        // line 19
        echo twig_escape_filter($this->env, __trans("Product/Service"), "html", null, true);
        echo "</th>
                     <th>";
        // line 20
        echo twig_escape_filter($this->env, __trans("Price"), "html", null, true);
        echo "</th>
                     <th>";
        // line 21
        echo twig_escape_filter($this->env, __trans("Next due date"), "html", null, true);
        echo "</th>
                     <th>";
        // line 22
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                     <th>&nbsp;</th>
                  </tr>
               </thead>
               <tbody>
                  ";
        // line 27
        $context["orders"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["per_page" => 10, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 27), "hide_addons" => 1]], "method", false, false, false, 27);
        // line 28
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "list", [], "any", false, false, false, 28));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["order"]) {
            // line 29
            echo "                  <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(["odd", "even"], $context["i"]), "html", null, true);
            echo "\">
                     <td><a href=\"";
            // line 30
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order/service/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</a></td>
                     <td>";
            // line 31
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, $context["order"], "currency", [], "any", false, false, false, 31));
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["order"], "period", [], "any", false, false, false, 31)) {
                echo $this->extensions['Box_TwigExtensions']->twig_period_title($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "period", [], "any", false, false, false, 31));
            }
            echo "</td>
                     <td>";
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["order"], "expires_at", [], "any", false, false, false, 32)) {
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "expires_at", [], "any", false, false, false, 32)), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                     <td>
                        <span class=\"status status-";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 34) == "active")) {
                echo "green";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 34) == "pending_setup")) {
                echo "orange";
            }
            echo "\">";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 34)], 34, $context, $this->getSourceContext());
            echo "</span>
                     </td>
                     <td class=\"actions\">
                        <a href=\"";
            // line 37
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order/service/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" class=\"btn btn-primary btn-icon\">
                           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                              <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                              <path d=\"M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6 -6a6 6 0 0 1 -8 -8l3.5 3.5\"></path>
                           </svg>
                        </a>
                     </td>
                  </tr>
                  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "                  <tr>
                     <td colspan=\"5\">";
            // line 47
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "               </tbody>
            </table>
         </div>
         <div class=\"card-footer\">
            ";
        // line 54
        $this->loadTemplate("partial_pagination.html.twig", "mod_order_list.html.twig", 54)->display(twig_array_merge($context, ["list" => ($context["orders"] ?? null)]));
        // line 55
        echo "         </div>
      </div>
   </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_order_list.html.twig";
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
        return array (  215 => 55,  213 => 54,  207 => 50,  198 => 47,  195 => 46,  179 => 37,  167 => 34,  158 => 32,  150 => 31,  142 => 30,  137 => 29,  131 => 28,  129 => 27,  121 => 22,  117 => 21,  113 => 20,  109 => 19,  100 => 13,  94 => 9,  90 => 8,  81 => 7,  74 => 6,  67 => 5,  60 => 4,  53 => 3,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_order_list.html.twig", "/var/www/themes/tide/html/mod_order_list.html.twig");
    }
}
