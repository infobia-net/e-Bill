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

/* mod_support_tickets.html.twig */
class __TwigTemplate_8274f67ce9e338ddce29c22432d5e0c2 extends Template
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
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_support_tickets.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_support_tickets.html.twig", 2)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Support tickets"), "html", null, true);
    }

    // line 4
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Support tickets"), "html", null, true);
    }

    // line 5
    public function block_page_subheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Need an answer? We are here to help!"), "html", null, true);
    }

    // line 6
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
        echo twig_escape_filter($this->env, __trans("Support tickets"), "html", null, true);
        echo "</a></li>";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<div class=\"row row-deck row-cards\">
   <div class=\"col-md-12\">
      <div class=\"card\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 12
        echo twig_escape_filter($this->env, __trans("Support tickets"), "html", null, true);
        echo "</h3>
            <div class=\"card-actions\">
               <a href=\"#submit-ticket\" class=\"btn btn-primary d-sm-inline-block\" data-bs-toggle=\"modal\" data-bs-target=\"#new-ticket-button\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                     <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                     <path d=\"M12 5l0 14\" />
                     <path d=\"M5 12l14 0\" />
                  </svg>
                  ";
        // line 20
        echo twig_escape_filter($this->env, __trans("New ticket"), "html", null, true);
        echo "
               </a>
            </div>
         </div>
         <div class=\"table-responsive\">
            <table class=\"table card-table table-vcenter text-nowrap table-hover table-bordered table-striped\">
               <thead>
                  <tr>
                     <th>";
        // line 28
        echo twig_escape_filter($this->env, __trans("Id"), "html", null, true);
        echo "</th>
                     <th>";
        // line 29
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo "</th>
                     <th>";
        // line 30
        echo twig_escape_filter($this->env, __trans("Help desk"), "html", null, true);
        echo "</th>
                     <th>";
        // line 31
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                     <th>";
        // line 32
        echo twig_escape_filter($this->env, __trans("Submitted"), "html", null, true);
        echo "</th>
                     <th>";
        // line 33
        echo twig_escape_filter($this->env, __trans("Actions"), "html", null, true);
        echo "</th>
                  </tr>
               </thead>
               <tbody>
                  ";
        // line 37
        $context["tickets"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["per_page" => 10, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 37)]], "method", false, false, false, 37);
        // line 38
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "list", [], "any", false, false, false, 38));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
            // line 39
            echo "                  <tr>
                     <td>#";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                     <td><a href=\"";
            // line 41
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 41), 40), "html", null, true);
            echo "</a></td>
                     <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "helpdesk", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                     <td>
                        <span class=\"status ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 44) == "open")) {
                echo "status-info";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 44) == "closed")) {
                echo "status-danger";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 44) == "on_hold")) {
                echo "status-warning";
            }
            echo "\">";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 44)], 44, $context, $this->getSourceContext());
            echo "</span>
                     </td>
                     <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["ticket"], "created_at", [], "any", false, false, false, 46)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
            echo "</td>
                     <td class=\"actions\">
                        <a href=\"";
            // line 48
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-small\">
                           ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 49) == "closed")) {
                // line 50
                echo "                           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                              <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                              <path d=\"M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10\"></path>
                              <path d=\"M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2\"></path>
                           </svg>
                           ";
                // line 55
                echo twig_escape_filter($this->env, __trans("View"), "html", null, true);
            } else {
                // line 56
                echo "                           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                              <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                              <path d=\"M8 9h8\"></path>
                              <path d=\"M8 13h6\"></path>
                              <path d=\"M12.01 18.594l-4.01 2.406v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v5.5\"></path>
                              <path d=\"M16 19h6\"></path>
                              <path d=\"M19 16v6\"></path>
                           </svg>
                           ";
                // line 64
                echo twig_escape_filter($this->env, __trans("Reply"), "html", null, true);
            }
            // line 65
            echo "                        </a>
                     </td>
                  </tr>
                  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "                  <tr>
                     <td colspan=\"6\">";
            // line 70
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "               </tbody>
               ";
        // line 74
        if ((twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "pages", [], "any", false, false, false, 74) > 1)) {
            // line 75
            echo "               <tfoot>
                  <tr>
                     <td colspan=\"6\">
                        ";
            // line 78
            $this->loadTemplate("partial_pagination.html.twig", "mod_support_tickets.html.twig", 78)->display(twig_array_merge($context, ["list" => ($context["tickets"] ?? null)]));
            // line 79
            echo "                     </td>
                  </tr>
               </tfoot>
               ";
        }
        // line 83
        echo "            </table>
         </div>
      </div>
   </div>
</div>
<div class=\"modal modal-blur fade\" id=\"new-ticket-button\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
   <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            <h5 class=\"modal-title\">";
        // line 92
        echo twig_escape_filter($this->env, __trans("Submit new support ticket"), "html", null, true);
        echo "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
         </div>
         <div class=\"modal-body\">
            <form action=\"\" method=\"post\" id=\"ticket-submit\" class=\"form\" style=\"background: none\">
               <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 99
        echo twig_escape_filter($this->env, __trans("Help desk"), "html", null, true);
        echo ":</label>
                  ";
        // line 100
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["support_helpdesk_id", twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_helpdesk_get_pairs", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "support_helpdesk_id", [], "any", false, false, false, 100), 1], 100, $context, $this->getSourceContext());
        echo "
               </div>
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 103
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo ":</label>
                  <input type=\"text\" class=\"form-control\" name=\"subject\" required=\"required\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "subject", [], "any", false, false, false, 104));
        echo "\" placeholder=\"Your subject\">  
               </div>
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 107
        echo twig_escape_filter($this->env, __trans("Message"), "html", null, true);
        echo ":</label>
                  <textarea class=\"form-control\" name=\"content\" cols=\"10\" rows=\"10\" required=\"required\">";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "content", [], "any", false, false, false, 108));
        echo "</textarea>
               </div>
         </div>
         <div class=\"modal-footer\">
         <a href=\"#\" class=\"btn btn-link link-secondary\" data-bs-dismiss=\"modal\">
         Cancel
         </a>
         <button class=\"btn btn-primary ms-auto\" type=\"submit\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, __trans("Submit"), "html", null, true);
        echo "\" data-bs-dismiss=\"modal\">
         <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
         <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M12 5l0 14\" /><path d=\"M5 12l14 0\" /></svg>
         ";
        // line 118
        echo twig_escape_filter($this->env, __trans("Submit"), "html", null, true);
        echo "
         </button></form>
         </div>
      </div>
   </div>
</div>
";
    }

    // line 125
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "<script>
   \$(function() {
       \$('#ticket-submit').on('submit', function(event) {
           \$('.wait').show();
           bb.post(
               'client/support/ticket_create',
               \$(this).serialize(),
               function(result) {
                   bb.redirect(\"";
        // line 134
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
        echo "\" + '/' + result);
               }
           );
   
           return false;
       });
   
       \$('#submit-ticket').modal('hide').css(
           {
               'margin-top': function () {
                   return -(\$(this).height() / 2);
               }
           })
   
       ";
        // line 148
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ticket", [], "any", false, false, false, 148)) {
            // line 149
            echo "       \$('#submit-ticket').modal('show');
       ";
        }
        // line 151
        echo "   });
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_support_tickets.html.twig";
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
        return array (  371 => 151,  367 => 149,  365 => 148,  348 => 134,  338 => 126,  334 => 125,  323 => 118,  317 => 115,  307 => 108,  303 => 107,  297 => 104,  293 => 103,  287 => 100,  283 => 99,  278 => 97,  270 => 92,  259 => 83,  253 => 79,  251 => 78,  246 => 75,  244 => 74,  241 => 73,  232 => 70,  229 => 69,  221 => 65,  218 => 64,  208 => 56,  205 => 55,  198 => 50,  196 => 49,  190 => 48,  183 => 46,  170 => 44,  165 => 42,  157 => 41,  153 => 40,  150 => 39,  144 => 38,  142 => 37,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  115 => 28,  104 => 20,  93 => 12,  87 => 8,  83 => 7,  74 => 6,  67 => 5,  60 => 4,  53 => 3,  49 => 1,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_support_tickets.html.twig", "/var/www/themes/infobia/html/mod_support_tickets.html.twig");
    }
}
