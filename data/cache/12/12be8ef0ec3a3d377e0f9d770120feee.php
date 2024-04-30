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

/* mod_support_ticket.html.twig */
class __TwigTemplate_5f9f9b0f8bdd40103709da9c342d29b9 extends Template
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
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_support_ticket.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_support_ticket.html.twig", 2)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "subject", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 4
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Ticket details"), "html", null, true);
    }

    // line 5
    public function block_page_subheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Need an answer? We are here to help!"), "html", null, true);
    }

    // line 6
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "support-ticket";
    }

    // line 7
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<li class=\"breadcrumb-item\"><a href=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Support tickets"), "html", null, true);
        echo "</a></li>
<li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "subject", [], "any", false, false, false, 9), "html", null, true);
        echo "</a></li>
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<div class=\"row row-deck row-cards\">
   <div class=\"col-md-12\">
      <div class=\"card\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">
               <span class=\"text-muted\">Ticket ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
        echo ":</span> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "subject", [], "any", false, false, false, 17), "html", null, true);
        echo " 
            </h3>
            ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 19) != "closed")) {
            // line 20
            echo "            <div class=\"card-actions\">
               <button type=\"button\" id=\"ticket-close\" class=\"btn btn-ghost-danger\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                     <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                     <path d=\"M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0\"></path>
                     <path d=\"M10 10l4 4m0 -4l-4 4\"></path>
                  </svg>
                  ";
            // line 27
            echo twig_escape_filter($this->env, __trans("Close ticket"), "html", null, true);
            echo "
               </button>
            </div>
            ";
        }
        // line 31
        echo "         </div>
         <div class=\"card-body\">
            <div class=\"datagrid\">
               <div class=\"datagrid-item\">
                  <div class=\"datagrid-title\">";
        // line 35
        echo twig_escape_filter($this->env, __trans("Ticket ID"), "html", null, true);
        echo "</div>
                  <div class=\"datagrid-content\">#";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "</div>
               </div>
               <div class=\"datagrid-item\">
                  <div class=\"datagrid-title\">";
        // line 39
        echo twig_escape_filter($this->env, __trans("Help desk"), "html", null, true);
        echo "</div>
                  <div class=\"datagrid-content\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "helpdesk", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
        echo " ";
        if (((twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "rel_type", [], "any", false, false, false, 40) == "order") && twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "rel_id", [], "any", false, false, false, 40))) {
            echo " / <a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "rel_id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Service #"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "rel_id", [], "any", false, false, false, 40), "html", null, true);
            echo "</a>";
        }
        echo "</div>
               </div>
               <div class=\"datagrid-item\">
                  <div class=\"datagrid-title\">";
        // line 43
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</div>
                  <div class=\"datagrid-content\"><span class=\"status ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 44) == "open")) {
            echo "status-info";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 44) == "closed")) {
            echo "status-danger";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 44) == "on_hold")) {
            echo "status-warning";
        }
        echo "\">";
        echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 44)], 44, $context, $this->getSourceContext());
        echo "</span></div>
               </div>
               <div class=\"datagrid-item\">
                  <div class=\"datagrid-title\">";
        // line 47
        echo twig_escape_filter($this->env, __trans("Time opened"), "html", null, true);
        echo "</div>
                  <div class=\"datagrid-content\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "created_at", [], "any", false, false, false, 48)), "html", null, true);
        echo "</div>
               </div>
            </div>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "messages", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["i"] => $context["message"]) {
            // line 52
            echo "            <div class=\"row row-cards mt-5\">
               <div class=\"col-md-3\">
                  <div class=\"card\">
                     <div class=\"card-header\">
                        <h3 class=\"card-title\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
            echo "</h3>
                     </div>
                     <div class=\"card-body\">
                        <img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 59), "email", [], "any", false, false, false, 59)), "html", null, true);
            echo "&size=60\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
            echo "\" class=\"gravatar\">
                     </div>
                  </div>
               </div>
               <div class=\"col-md-9\">
                  <div class=\"card\">
                     <div class=\"card-header\">
                        <h3 class=\"card-title\">#";
            // line 66
            echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "created_at", [], "any", false, false, false, 66)), "html", null, true);
            echo "</h3>
                        ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 67) != "closed")) {
                // line 68
                echo "                        <div class=\"card-actions\">
                           <button type=\"button\" id=\"ticket-close\" class=\"btn btn btn-outline-dark reply-to-message\" message-quote=\"";
                // line 69
                echo twig_call_macro($macros["mf"], "macro_markdown_quote", [twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 69)], 69, $context, $this->getSourceContext());
                echo "\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                 <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                 <path d=\"M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5\"></path>
                                 <path d=\"M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5\"></path>
                              </svg>
                              ";
                // line 75
                echo twig_escape_filter($this->env, __trans("Quote"), "html", null, true);
                echo "
                           </button>
                        </div>
                        ";
            }
            // line 79
            echo "                     </div>
                     <div class=\"card-body\">
                        <pre id=\"message-";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 81), "html", null, true);
            echo "\">";
            echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 81));
            echo "</pre>
                     </div>
                  </div>
               </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 87) != "closed")) {
            // line 88
            echo "            <div class=\"row row-cards mt-1\">
               <div class=\"col-md-12\">
                  <div class=\"card\">
                     <div class=\"card-body\">
                        <form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"";
            // line 92
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/client/support/ticket_reply");
            echo "\" data-api-reload=\"1\">
                           <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 93
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                           <fieldset>
                              <textarea name=\"content\" cols=\"10\" rows=\"10\" class=\"form-control\" required=\"required\" id=\"ticket-reply-text\"></textarea>
                              <br />
                              <button class=\"btn btn-primary btn-large\" type=\"submit\" id=\"submit-support-message\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, __trans("Post"), "html", null, true);
            echo "\" onclick=\"\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                    <path d=\"M8 9h8\"></path>
                                    <path d=\"M8 13h6\"></path>
                                    <path d=\"M12.01 18.594l-4.01 2.406v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v5.5\"></path>
                                    <path d=\"M16 19h6\"></path>
                                    <path d=\"M19 16v6\"></path>
                                 </svg>
                                 ";
            // line 106
            echo twig_escape_filter($this->env, __trans("Reply"), "html", null, true);
            echo "
                              </button>
                              <input type=\"hidden\" name=\"id\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 108), "html", null, true);
            echo "\">
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 115
($context["ticket"] ?? null), "status", [], "any", false, false, false, 115) == "closed")) {
            // line 116
            echo "            <div class=\"alert alert-info mt-3\" role=\"alert\">
               <h4 class=\"alert-title\">";
            // line 117
            echo twig_escape_filter($this->env, __trans("Ticket was closed and cannot be reopened."), "html", null, true);
            echo "</h4>
            </div>
            ";
        }
        // line 120
        echo "         </div>
      </div>
   </div>
</div>
<div class=\"row row-deck row-cards mt-1\">
   <div class=\"col-md-12\">
      <div class=\"card\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 128
        echo twig_escape_filter($this->env, __trans("Last tickets"), "html", null, true);
        echo "</h3>
            <div class=\"card-actions\">
               <a href=\"";
        // line 130
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/support");
        echo "\" class=\"btn btn-secondary\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                     <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                     <path d=\"M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1\"></path>
                  </svg>
                  ";
        // line 135
        echo twig_escape_filter($this->env, __trans("Back to tickets list"), "html", null, true);
        echo "
               </a>
            </div>
         </div>
         <div class=\"card-body\">
            <div class=\"table-responsive\">
               <table class=\"table card-table table-vcenter text-nowrap datatable\">
                  <thead>
                     <tr>
                        <th>";
        // line 144
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo "</th>
                        <th>";
        // line 145
        echo twig_escape_filter($this->env, __trans("Help desk"), "html", null, true);
        echo "</th>
                        <th>";
        // line 146
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                        <th>";
        // line 147
        echo twig_escape_filter($this->env, __trans("Submitted"), "html", null, true);
        echo "</th>
                     </tr>
                  </thead>
                  <tbody>
                     ";
        // line 151
        $context["tickets"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["per_page" => 5, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 151)]], "method", false, false, false, 151);
        // line 152
        echo "                     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "list", [], "any", false, false, false, 152));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["t"]) {
            // line 153
            echo "                     <tr ";
            if ((twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 153) == twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 153))) {
                echo "class=\"alert alert-info\"";
            }
            echo ">
                     <td><a href=\"";
            // line 154
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 154), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "subject", [], "any", false, false, false, 154), 40), "html", null, true);
            echo "</a></td>
                     <td>";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "helpdesk", [], "any", false, false, false, 155), "name", [], "any", false, false, false, 155), "html", null, true);
            echo "</td>
                     <td>
                        <span class=\"status ";
            // line 157
            if ((twig_get_attribute($this->env, $this->source, $context["t"], "status", [], "any", false, false, false, 157) == "open")) {
                echo "status-info";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["t"], "status", [], "any", false, false, false, 157) == "closed")) {
                echo "status-danger";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["t"], "status", [], "any", false, false, false, 157) == "on_hold")) {
                echo "status-warning";
            }
            echo "\">";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["t"], "status", [], "any", false, false, false, 157)], 157, $context, $this->getSourceContext());
            echo "</span>
                     </td>
                     <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["t"], "created_at", [], "any", false, false, false, 159)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("ago"), "html", null, true);
            echo "</td>
                     </tr>
                     ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 162
            echo "                     <tr>
                        <td colspan=\"5\">";
            // line 163
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                     </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
";
    }

    // line 174
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "<script>
   \$(function() {
       \$('.reply-to-message').on('click', function (event) {
           event.preventDefault();
   
           var quote = \$(this).attr('message-quote');
   
           \$('#ticket-reply-text').text(quote);
           \$('#ticket-reply-text').focus();
       });
   
       \$('#submit-support-message').on('click', function () {
           if (\$('#ticket-reply-text').val().length > 0) {
               \$('.wait').show();
           }
       });
   
       \$('#ticket-close').on('click', function(event) {
           event.preventDefault();
   
           \$('.wait').show();
   
           bb.post(
               'client/support/ticket_close',
               { id: ";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 199), "html", null, true);
        echo ", CSRFToken: \"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" },
               function(result) {
                   bb.redirect(\"";
        // line 201
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support");
        echo "\");
               }
           );
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
        return "mod_support_ticket.html.twig";
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
        return array (  497 => 201,  490 => 199,  464 => 175,  460 => 174,  449 => 166,  440 => 163,  437 => 162,  427 => 159,  414 => 157,  409 => 155,  401 => 154,  394 => 153,  388 => 152,  386 => 151,  379 => 147,  375 => 146,  371 => 145,  367 => 144,  355 => 135,  347 => 130,  342 => 128,  332 => 120,  326 => 117,  323 => 116,  321 => 115,  311 => 108,  306 => 106,  294 => 97,  287 => 93,  283 => 92,  277 => 88,  274 => 87,  260 => 81,  256 => 79,  249 => 75,  240 => 69,  237 => 68,  235 => 67,  229 => 66,  217 => 59,  211 => 56,  205 => 52,  201 => 51,  195 => 48,  191 => 47,  177 => 44,  173 => 43,  155 => 40,  151 => 39,  145 => 36,  141 => 35,  135 => 31,  128 => 27,  119 => 20,  117 => 19,  110 => 17,  103 => 12,  99 => 11,  93 => 9,  86 => 8,  82 => 7,  75 => 6,  68 => 5,  61 => 4,  54 => 3,  50 => 1,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_support_ticket.html.twig", "/var/www/themes/infobia/html/mod_support_ticket.html.twig");
    }
}
