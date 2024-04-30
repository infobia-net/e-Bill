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

/* mod_servicedomain_manage.html.twig */
class __TwigTemplate_b2ea2e2c80f511608fdcd26d524b753e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 1) == "active") || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 1) == "failed_renew"))) {
            // line 2
            echo "<div class=\"row row-deck row-cards mt-1\">
   <div class=\"col-md-12\">
      <div class=\"card border border-bottom-0\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">";
            // line 6
            echo twig_escape_filter($this->env, __trans("Domain management"), "html", null, true);
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
                  <a href=\"#tabs-details\" class=\"nav-link active\" data-bs-toggle=\"tab\">";
            // line 17
            echo twig_escape_filter($this->env, __trans("Details"), "html", null, true);
            echo "</a>
               </li>
               <li class=\"nav-item\">
                  <a href=\"#tabs-protection\" class=\"nav-link\" data-bs-toggle=\"tab\">";
            // line 20
            echo twig_escape_filter($this->env, __trans("Protection"), "html", null, true);
            echo "</a>
               </li>
               <li class=\"nav-item\">
                  <a href=\"#tabs-privacy\" class=\"nav-link\" data-bs-toggle=\"tab\">";
            // line 23
            echo twig_escape_filter($this->env, __trans("Privacy"), "html", null, true);
            echo "</a>
               </li>
               <li class=\"nav-item\">
                  <a href=\"#tabs-nameservers\" class=\"nav-link\" data-bs-toggle=\"tab\">";
            // line 26
            echo twig_escape_filter($this->env, __trans("Nameservers"), "html", null, true);
            echo "</a>
               </li>
               <li class=\"nav-item\">
                  <a href=\"#tabs-whois\" class=\"nav-link\" data-bs-toggle=\"tab\">";
            // line 29
            echo twig_escape_filter($this->env, __trans("Whois"), "html", null, true);
            echo "</a>
               </li>
               <li class=\"nav-item\">
                  <a href=\"#tabs-transfer\" class=\"nav-link\" data-bs-toggle=\"tab\">";
            // line 32
            echo twig_escape_filter($this->env, __trans("Transfer"), "html", null, true);
            echo "</a>
               </li>
            </ul>
         </div>
         <div class=\"card-body\">
            <div class=\"tab-content\">
               <div class=\"tab-pane active show\" id=\"tabs-details\">
                  <h4>";
            // line 39
            echo twig_escape_filter($this->env, __trans("Domain details"), "html", null, true);
            echo "</h4>
                  <div class=\"table-responsive\">
                     <table class=\"table table-vcenter text-nowrap table-striped table-bordered\">
                        <tbody>
                           <tr>
                              <td>";
            // line 44
            echo twig_escape_filter($this->env, __trans("Domain"), "html", null, true);
            echo "</td>
                              <td><a target=\"_blank\" href=\"http://";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "domain", [], "any", false, false, false, 45), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "domain", [], "any", false, false, false, 45), "html", null, true);
            echo "</a></td>
                           </tr>
                           <tr>
                              <td>";
            // line 48
            echo twig_escape_filter($this->env, __trans("Registration date"), "html", null, true);
            echo "</td>
                              <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "registered_at", [], "any", false, false, false, 49), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                           </tr>
                           <tr>
                              <td>";
            // line 52
            echo twig_escape_filter($this->env, __trans("Expires at"), "html", null, true);
            echo "</td>
                              <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "expires_at", [], "any", false, false, false, 53), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class=\"tab-pane\" id=\"tabs-protection\">
                  <div class=\"alert alert-info\" role=\"alert\">
                     <h4 class=\"alert-title\">";
            // line 61
            echo twig_escape_filter($this->env, __trans("Domain Protection"), "html", null, true);
            echo "</h4>
                     <div class=\"text-muted\">";
            // line 62
            echo twig_escape_filter($this->env, __trans("Domain locking is a security enhancement to prevent unauthorized transfers of your domain to another registrar or web host by \"locking\" your domain name servers."), "html", null, true);
            echo "</div>
                  </div>
                  <div class=\"mb-3\">
                     <button class=\"btn btn-primary\" type=\"button\" id=\"domain-unlock\" ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "locked", [], "any", false, false, false, 65) == 0)) {
                echo "style=\"display:none;\"";
            }
            echo ">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                        <path d=\"M15 11h2a2 2 0 0 1 2 2v2m0 4a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h4\"></path>
                        <path d=\"M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0\"></path>
                        <path d=\"M8 11v-3m.719 -3.289a4 4 0 0 1 7.281 2.289v4\"></path>
                        <path d=\"M3 3l18 18\"></path>
                     </svg>
                     ";
            // line 73
            echo twig_escape_filter($this->env, __trans("Unlock"), "html", null, true);
            echo "</button>
                     <button class=\"btn btn-primary\" type=\"button\" id=\"domain-lock\" ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "locked", [], "any", false, false, false, 74) == 1)) {
                echo "style=\"display:none;\"";
            }
            echo ">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                        <path d=\"M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z\"></path>
                        <path d=\"M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0\"></path>
                        <path d=\"M8 11v-4a4 4 0 1 1 8 0v4\"></path>
                     </svg>
                     ";
            // line 81
            echo twig_escape_filter($this->env, __trans("Lock"), "html", null, true);
            echo "</button>
                  </div>
               </div>
               <div class=\"tab-pane\" id=\"tabs-privacy\">
                  <div class=\"alert alert-info\" role=\"alert\">
                     <h4 class=\"alert-title\">";
            // line 86
            echo twig_escape_filter($this->env, __trans("Domain Privacy Settings"), "html", null, true);
            echo "</h4>
                     <div class=\"text-muted\">";
            // line 87
            echo twig_escape_filter($this->env, __trans("If you would like to hide domain contact information which is shown on WHOIS you can enable privacy protection. Once domain privacy protection is enabled no one will know who registered this service. And once you decide to disable privacy protection, information that is listed above on \"Update Domain Contact Details\" section will be seen on domain WHOIS again."), "html", null, true);
            echo "</div>
                  </div>
                  <div class=\"mb-3\">
                     <button class=\"btn btn-primary\" type=\"button\" id=\"domain-disable-pp\" ";
            // line 90
            if ((twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "privacy", [], "any", false, false, false, 90) == 0)) {
                echo "style=\"display:none;\"";
            }
            echo ">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                        <path d=\"M3 11h8m4 0h6\"></path>
                        <path d=\"M5 11v-4c0 -.571 .16 -1.105 .437 -1.56m2.563 -1.44h8a3 3 0 0 1 3 3v4\"></path>
                        <path d=\"M7 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0\"></path>
                        <path d=\"M14.88 14.877a3 3 0 1 0 4.239 4.247m.59 -3.414a3.012 3.012 0 0 0 -1.425 -1.422\"></path>
                        <path d=\"M10 17h4\"></path>
                        <path d=\"M3 3l18 18\"></path>
                     </svg>
                     ";
            // line 100
            echo twig_escape_filter($this->env, __trans("Disable Privacy protection"), "html", null, true);
            echo "</button>
                     <button class=\"btn btn-primary\" type=\"button\" id=\"domain-enable-pp\" ";
            // line 101
            if ((twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "privacy", [], "any", false, false, false, 101) == 1)) {
                echo "style=\"display:none;\"";
            }
            echo ">
                     <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                        <path d=\"M3 11h18\"></path>
                        <path d=\"M5 11v-4a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v4\"></path>
                        <path d=\"M7 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0\"></path>
                        <path d=\"M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0\"></path>
                        <path d=\"M10 17h4\"></path>
                     </svg>
                     ";
            // line 110
            echo twig_escape_filter($this->env, __trans("Enable Privacy protection"), "html", null, true);
            echo "</button>
                  </div>
               </div>
               <div class=\"tab-pane\" id=\"tabs-nameservers\">
                  <div class=\"alert alert-info\" role=\"alert\">
                     <h4 class=\"alert-title\">";
            // line 115
            echo twig_escape_filter($this->env, __trans("Update Nameservers"), "html", null, true);
            echo "</h4>
                     <div class=\"text-muted\">";
            // line 116
            echo twig_escape_filter($this->env, __trans("If you would like to host this domain with another company you can update nameservers."), "html", null, true);
            echo "</div>
                  </div>
                  <form action=\"\" method=\"post\" id=\"update-nameservers\" class=\"form-horizontal\">
                     <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 119
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                     <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 120), "html", null, true);
            echo "\">
                     <fieldset class=\"form-fieldset\">
                        <div class=\"mb-3\">
                           <label class=\"form-label required\">";
            // line 123
            echo twig_escape_filter($this->env, __trans("Nameserver 1"), "html", null, true);
            echo ":</label>
                           <input type=\"text\" class=\"form-control\" name=\"ns1\" value=\"";
            // line 124
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns1", [], "any", true, true, false, 124)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns1", [], "any", false, false, false, 124), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns1", [], "any", false, false, false, 124))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns1", [], "any", false, false, false, 124))), "html", null, true);
            echo "\" required=\"required\">
                        </div>
                        <div class=\"mb-3\">
                           <label class=\"form-label required\">";
            // line 127
            echo twig_escape_filter($this->env, __trans("Nameserver 2"), "html", null, true);
            echo ":</label>
                           <input type=\"text\" class=\"form-control\" name=\"ns2\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns2", [], "any", true, true, false, 128)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns2", [], "any", false, false, false, 128), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns2", [], "any", false, false, false, 128))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns2", [], "any", false, false, false, 128))), "html", null, true);
            echo "\" required=\"required\">
                        </div>
                        <div class=\"mb-3\">
                           <label class=\"form-label\">";
            // line 131
            echo twig_escape_filter($this->env, __trans("Nameserver 3"), "html", null, true);
            echo ":</label>
                           <input type=\"text\" class=\"form-control\" name=\"ns3\" value=\"";
            // line 132
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns3", [], "any", true, true, false, 132)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns3", [], "any", false, false, false, 132), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns3", [], "any", false, false, false, 132))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns3", [], "any", false, false, false, 132))), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"mb-3\">
                           <label class=\"form-label\">";
            // line 135
            echo twig_escape_filter($this->env, __trans("Nameserver 4"), "html", null, true);
            echo ":</label>
                           <input type=\"text\" class=\"form-control\" name=\"ns4\" value=\"";
            // line 136
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns4", [], "any", true, true, false, 136)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ns4", [], "any", false, false, false, 136), twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns4", [], "any", false, false, false, 136))) : (twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "ns4", [], "any", false, false, false, 136))), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"mb-3\">
                           <div>
                              <button type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 140
            echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
            echo "\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                    <path d=\"M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4\"></path>
                                    <path d=\"M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4\"></path>
                                 </svg>
                                 ";
            // line 146
            echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
            echo "
                              </button>
                           </div>
                        </div>
                     </fieldset>
                  </form>
               </div>
               <div class=\"tab-pane\" id=\"tabs-whois\">
                  <div class=\"alert alert-info\" role=\"alert\">
                     <h4 class=\"alert-title\">";
            // line 155
            echo twig_escape_filter($this->env, __trans("Update domain contact details"), "html", null, true);
            echo "</h4>
                     <div class=\"text-muted\">";
            // line 156
            echo twig_escape_filter($this->env, __trans("Domain contact details will be displayed once someone will check WHOIS output (which is public) of your service. This will update Technical, Billing and Admin contacts for this service. You can enable domain privacy protection if you want to hide your public WHOIS information."), "html", null, true);
            echo "</div>
                  </div>
                  <form method=\"post\" action=\"\" id=\"update-contact\" class=\"form-horizontal\">
                     <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 159
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                     <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 160), "html", null, true);
            echo "\">
                     <div class=\"row\">
                        <div class=\"col-md-6\">
                           <fieldset class=\"form-fieldset\">
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
            // line 165
            echo twig_escape_filter($this->env, __trans("First Name"), "html", null, true);
            echo ":</label>
                                 <input type=\"text\" class=\"form-control\" name=\"contact[first_name]\" value=\"";
            // line 166
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "first_name", [], "any", true, true, false, 166)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "first_name", [], "any", false, false, false, 166), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 166), "first_name", [], "any", false, false, false, 166))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 166), "first_name", [], "any", false, false, false, 166))), "html", null, true);
            echo "\" required=\"required\">
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
            // line 169
            echo twig_escape_filter($this->env, __trans("Last Name"), "html", null, true);
            echo ":</label>
                                 <input type=\"text\" class=\"form-control\" name=\"contact[last_name]\" value=\"";
            // line 170
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "last_name", [], "any", true, true, false, 170)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "last_name", [], "any", false, false, false, 170), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 170), "last_name", [], "any", false, false, false, 170))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 170), "last_name", [], "any", false, false, false, 170))), "html", null, true);
            echo "\" required=\"required\">
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
            // line 173
            echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
            echo ":</label>
                                 <input type=\"text\" class=\"form-control\" name=\"contact[email]\" value=\"";
            // line 174
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", true, true, false, 174)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 174), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 174), "email", [], "any", false, false, false, 174))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 174), "email", [], "any", false, false, false, 174))), "html", null, true);
            echo "\" required=\"required\">
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label\">";
            // line 177
            echo twig_escape_filter($this->env, __trans("Company"), "html", null, true);
            echo ":</label>
                                 <input type=\"text\" class=\"form-control\" name=\"contact[company]\" value=\"";
            // line 178
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", true, true, false, 178)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 178), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 178), "company", [], "any", false, false, false, 178))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 178), "company", [], "any", false, false, false, 178))), "html", null, true);
            echo "\">
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
            // line 181
            echo twig_escape_filter($this->env, __trans("Address Line 1"), "html", null, true);
            echo ":</label>
                                 <input type=\"text\" class=\"form-control\" name=\"contact[address1]\" value=\"";
            // line 182
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address1", [], "any", true, true, false, 182)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address1", [], "any", false, false, false, 182), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 182), "address1", [], "any", false, false, false, 182))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 182), "address1", [], "any", false, false, false, 182))), "html", null, true);
            echo "\" required=\"required\">
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label\">";
            // line 185
            echo twig_escape_filter($this->env, __trans("Address Line 2"), "html", null, true);
            echo ":</label>
                                 <input type=\"text\" class=\"form-control\" name=\"contact[address2]\" value=\"";
            // line 186
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address2", [], "any", true, true, false, 186)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address2", [], "any", false, false, false, 186), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 186), "address2", [], "any", false, false, false, 186))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 186), "address2", [], "any", false, false, false, 186))), "html", null, true);
            echo "\">
                              </div>
                           </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                           <fieldset class=\"form-fieldset\">
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
            // line 193
            echo twig_escape_filter($this->env, __trans("Country"), "html", null, true);
            echo ":</label>
                                 <input type=\"text\" class=\"form-control\" name=\"contact[country]\" value=\"";
            // line 194
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "country", [], "any", true, true, false, 194)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "country", [], "any", false, false, false, 194), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 194), "country", [], "any", false, false, false, 194))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 194), "country", [], "any", false, false, false, 194))), "html", null, true);
            echo "\" required=\"required\">
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
            // line 197
            echo twig_escape_filter($this->env, __trans("City"), "html", null, true);
            echo ":</label>
                                 <input type=\"text\" class=\"form-control\" name=\"contact[city]\" value=\"";
            // line 198
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "city", [], "any", true, true, false, 198)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "city", [], "any", false, false, false, 198), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 198), "city", [], "any", false, false, false, 198))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 198), "city", [], "any", false, false, false, 198))), "html", null, true);
            echo "\" required=\"required\">
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
            // line 201
            echo twig_escape_filter($this->env, __trans("State"), "html", null, true);
            echo ":</label>
                                 <input type=\"text\" class=\"form-control\" name=\"contact[state]\" value=\"";
            // line 202
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "state", [], "any", true, true, false, 202)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "state", [], "any", false, false, false, 202), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 202), "state", [], "any", false, false, false, 202))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 202), "state", [], "any", false, false, false, 202))), "html", null, true);
            echo "\" required=\"required\">
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
            // line 205
            echo twig_escape_filter($this->env, __trans("Zip"), "html", null, true);
            echo ":</label>
                                 <input type=\"text\" class=\"form-control\" name=\"contact[postcode]\" value=\"";
            // line 206
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "postcode", [], "any", true, true, false, 206)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "postcode", [], "any", false, false, false, 206), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 206), "postcode", [], "any", false, false, false, 206))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 206), "postcode", [], "any", false, false, false, 206))), "html", null, true);
            echo "\" required=\"required\">
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
            // line 209
            echo twig_escape_filter($this->env, __trans("Phone Country Code"), "html", null, true);
            echo ":</label>
                                 <input type=\"text\" class=\"form-control\" name=\"contact[phone_cc]\" value=\"";
            // line 210
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone_cc", [], "any", true, true, false, 210)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone_cc", [], "any", false, false, false, 210), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 210), "phone_cc", [], "any", false, false, false, 210))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 210), "phone_cc", [], "any", false, false, false, 210))), "html", null, true);
            echo "\" required=\"required\">
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
            // line 213
            echo twig_escape_filter($this->env, __trans("Phone number"), "html", null, true);
            echo ":</label>
                                 <input type=\"text\" class=\"form-control\" name=\"contact[phone]\" value=\"";
            // line 214
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone", [], "any", true, true, false, 214)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone", [], "any", false, false, false, 214), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 214), "phone", [], "any", false, false, false, 214))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "contact", [], "any", false, false, false, 214), "phone", [], "any", false, false, false, 214))), "html", null, true);
            echo "\" required=\"required\">
                              </div>
                           </fieldset>
                        </div>
                     </div>
                     <div class=\"mb-3\">
                        <button type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 220
            echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
            echo "\">
                           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                              <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                              <path d=\"M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4\"></path>
                              <path d=\"M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4\"></path>
                           </svg>
                           ";
            // line 226
            echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
            echo "
                        </button>
                     </div>
                  </form>
               </div>
               <div class=\"tab-pane\" id=\"tabs-transfer\">
                  <div class=\"alert alert-info\" role=\"alert\">
                     <h4 class=\"alert-title\">";
            // line 233
            echo twig_escape_filter($this->env, __trans("Domain Secret"), "html", null, true);
            echo "</h4>
                     <div class=\"text-muted\">";
            // line 234
            echo twig_escape_filter($this->env, __trans("All domain names (except a .EU, .UK domain name) have a Domain (Transfer) Secret Key/Authorization Code (EPP Code) associated with them. This would be required if you want to transfer service."), "html", null, true);
            echo "</div>
                  </div>
                  <div class=\"mb-3\">
                     <button class=\"btn btn-primary\" type=\"button\" id=\"get-epp\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                           <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                           <path d=\"M4 19v2h16v-14l-8 -4l-8 4v2\"></path>
                           <path d=\"M13 14h-9\"></path>
                           <path d=\"M7 11l-3 3l3 3\"></path>
                        </svg>
                        ";
            // line 244
            echo twig_escape_filter($this->env, __trans("Get EPP code"), "html", null, true);
            echo "
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
";
            // line 253
            $this->displayBlock('js', $context, $blocks);
        }
    }

    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 254
        echo "<script>
   \$(function() {
       \$('.domain-tabs a').on('click', function(e) {
           e.preventDefault();
   
           \$(this).tab('show');
       });
   
       \$('#domain-lock').on('click', function(event) {
           event.preventDefault();
   
           bb.post(
               'client/servicedomain/lock',
               { order_id: ";
        // line 267
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 267), "html", null, true);
        echo ", CSRFToken: \"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" },
               function(result) {
                   bb.msg('Domain locked');
                   \$('#domain-lock').toggle();
                   \$('#domain-unlock').toggle();
               }
           );
       });
   
       \$('#domain-unlock').on('click', function(event) {
           event.preventDefault();
   
           bb.post(
               'client/servicedomain/unlock',
               { order_id: ";
        // line 281
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 281), "html", null, true);
        echo ", CSRFToken: \"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" },
               function(result) {
                   bb.msg('Domain unlocked');
                   \$('#domain-lock').toggle();
                   \$('#domain-unlock').toggle();
               }
           );
       });
   
       \$('#domain-enable-pp').on('click', function(event) {
           event.preventDefault();
   
           bb.post(
               'client/servicedomain/enable_privacy_protection',
               { order_id: ";
        // line 295
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 295), "html", null, true);
        echo ", CSRFToken: \"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" },
               function(result) {
                   bb.msg('Privacy Protection enabled');
                   \$('#domain-enable-pp').toggle();
                   \$('#domain-disable-pp').toggle();
               }
           );
       });
   
       \$('#domain-disable-pp').on('click', function(event) {
           event.preventDefault();
   
           bb.post(
               'client/servicedomain/disable_privacy_protection',
               { order_id: ";
        // line 309
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 309), "html", null, true);
        echo ", CSRFToken: \"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" },
               function(result) {
                   bb.msg('Privacy Protection disabled');
                   \$('#domain-enable-pp').toggle();
                   \$('#domain-disable-pp').toggle();
               }
           );
       });
   
       \$('#get-epp').on('click', function(event) {
           event.preventDefault();
           bb.post(
               'client/servicedomain/get_transfer_code',
               { order_id: ";
        // line 322
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 322), "html", null, true);
        echo ", CSRFToken: \"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" },
               function(result) {
                   bb.msg('Domain transfer code is: ' + result);
               }
           );
       });
   
       \$('#update-nameservers').on('submit', function(event) {
           bb.post(
               'client/servicedomain/update_nameservers',
               \$(this).serialize(),
               function(result) {
                   bb.msg('Nameservers updated');
               }
           );
   
           return false;
       });
   
       \$('#update-contact').on('submit', function(event) {
           bb.post(
               'client/servicedomain/update_contacts',
               \$(this).serialize(),
               function(result) {
                   bb.msg('Contact details updated');
               }
           );
   
           return false;
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
        return "mod_servicedomain_manage.html.twig";
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
        return array (  620 => 322,  602 => 309,  583 => 295,  564 => 281,  545 => 267,  530 => 254,  522 => 253,  510 => 244,  497 => 234,  493 => 233,  483 => 226,  474 => 220,  465 => 214,  461 => 213,  455 => 210,  451 => 209,  445 => 206,  441 => 205,  435 => 202,  431 => 201,  425 => 198,  421 => 197,  415 => 194,  411 => 193,  401 => 186,  397 => 185,  391 => 182,  387 => 181,  381 => 178,  377 => 177,  371 => 174,  367 => 173,  361 => 170,  357 => 169,  351 => 166,  347 => 165,  339 => 160,  335 => 159,  329 => 156,  325 => 155,  313 => 146,  304 => 140,  297 => 136,  293 => 135,  287 => 132,  283 => 131,  277 => 128,  273 => 127,  267 => 124,  263 => 123,  257 => 120,  253 => 119,  247 => 116,  243 => 115,  235 => 110,  221 => 101,  217 => 100,  202 => 90,  196 => 87,  192 => 86,  184 => 81,  172 => 74,  168 => 73,  155 => 65,  149 => 62,  145 => 61,  134 => 53,  130 => 52,  124 => 49,  120 => 48,  112 => 45,  108 => 44,  100 => 39,  90 => 32,  84 => 29,  78 => 26,  72 => 23,  66 => 20,  60 => 17,  46 => 6,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_servicedomain_manage.html.twig", "/var/www/themes/tide/html/mod_servicedomain_manage.html.twig");
    }
}
