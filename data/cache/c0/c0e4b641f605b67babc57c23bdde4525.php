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

/* mod_client_profile.html.twig */
class __TwigTemplate_16c50ad201bf27ae28086b3ec2e36641 extends Template
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
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_client_profile.html.twig", 1);
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
        echo twig_escape_filter($this->env, __trans("Profile details"), "html", null, true);
    }

    // line 3
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("User profile settings"), "html", null, true);
    }

    // line 4
    public function block_page_subheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Keep your personal data up to date."), "html", null, true);
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
        echo twig_escape_filter($this->env, __trans("Profile"), "html", null, true);
        echo "</a></li>";
    }

    // line 6
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "client-profile";
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
            <ul class=\"nav nav-tabs card-header-tabs\" data-bs-toggle=\"tabs\">
               <li class=\"nav-item\">
                  <a href=\"#tab1\" class=\"nav-link active\" data-bs-toggle=\"tab\">";
        // line 14
        echo twig_escape_filter($this->env, __trans("Details"), "html", null, true);
        echo "</a>
               </li>
               <li class=\"nav-item\">
                  <a href=\"#tab-password\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 17
        echo twig_escape_filter($this->env, __trans("Change Password"), "html", null, true);
        echo "</a>
               </li>
               <li class=\"nav-item\">
                  <a href=\"#tab3\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 20
        echo twig_escape_filter($this->env, __trans("API key"), "html", null, true);
        echo "</a>
               </li>
               <li class=\"nav-item\">
                  <a href=\"#tab4\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 23
        echo twig_escape_filter($this->env, __trans("Currency"), "html", null, true);
        echo "</a>
               </li>
            </ul>
         </div>
         <div class=\"card-body\">
         ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "client_is_email_validation_required", [], "any", false, false, false, 28) &&  !twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email_approved", [], "any", false, false, false, 28))) {
            // line 29
            echo "         <div class=\"alert alert-danger\" role=\"alert\">
             <div class=\"alert-title\">
                 <span>You must verify your email address before you may access our services.</span>
             </div>
             <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
             <a href=\"";
            // line 34
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/client/client/resend_email_verification", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" class=\"btn btn-danger api-link\" data-api-msg=\"";
            echo twig_escape_filter($this->env, __trans("Verification email has been resent"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Resend verification email"), "html", null, true);
            echo "</a>
         </div>
         ";
        }
        // line 37
        echo "            <div class=\"tab-content\">
               ";
        // line 38
        $context["required"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "client_required", [], "any", false, false, false, 38);
        // line 39
        echo "               <div class=\"tab-pane active show\" id=\"tab1\">
                  <h4>";
        // line 40
        echo twig_escape_filter($this->env, __trans("Update details"), "html", null, true);
        echo "</h4>
                  <div class=\"mb-3\">";
        // line 41
        echo twig_escape_filter($this->env, __trans("Keep your personal data up to date."), "html", null, true);
        echo "</div>
                  </header>
                  <form method=\"post\" action=\"\" id=\"profile-update\" class=\"form-horizontal\">
                     <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                     <div class=\"alert alert-success\" role=\"alert\">
                        <div class=\"d-flex\">
                           <div>
                              <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 48)), "html", null, true);
        echo "\" alt=\"Gravatar\" style=\"margin-right:5px;\">
                           </div>
                           <div>
                              ";
        // line 51
        echo twig_escape_filter($this->env, __trans("Please register with"), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 51), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, __trans("at "), "html", null, true);
        echo "<a target=\"_blank\" href=\"https://gravatar.com\">Gravatar.com</a> ";
        echo twig_escape_filter($this->env, __trans("to change your profile image. Gravatar image updates may not appear immediately."), "html", null, true);
        echo "
                           </div>
                        </div>
                     </div>
                     <div class=\"row\">
                        <div class=\"col-md-6\">
                           <fieldset class=\"form-fieldset\">
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
        // line 59
        echo twig_escape_filter($this->env, __trans("Email Address"), "html", null, true);
        echo "</label>
                                 <input class=\"form-control\" type=\"email\" name=\"email\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 60), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"off\"/>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
        // line 63
        echo twig_escape_filter($this->env, __trans("First Name"), "html", null, true);
        echo "</label>
                                 <input class=\"form-control\" type=\"text\" name=\"first_name\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "first_name", [], "any", false, false, false, 64), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"off\"/>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label ";
        // line 67
        if (twig_in_filter(($context["last_name"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo "required";
        }
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Last Name"), "html", null, true);
        echo "</label>
                                 <input class=\"form-control\" type=\"text\" name=\"last_name\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "last_name", [], "any", false, false, false, 68), "html", null, true);
        echo "\" ";
        if (twig_in_filter(($context["last_name"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo " required=\"required\" ";
        }
        echo " autocomplete=\"off\"/>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label ";
        // line 71
        if (twig_in_filter(($context["birthday"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo "required";
        }
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Birth date"), "html", null, true);
        echo "</label>
                                 <div class=\"input-icon\">
                                    <span class=\"input-icon-addon\">
                                       <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                          <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                          <path d=\"M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z\" />
                                          <path d=\"M16 3v4\" />
                                          <path d=\"M8 3v4\" />
                                          <path d=\"M4 11h16\" />
                                          <path d=\"M11 15h1\" />
                                          <path d=\"M12 15v3\" />
                                       </svg>
                                    </span>
                                    <input class=\"form-control\" placeholder=\"Select a date\" id=\"birthday\" name=\"birthday\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "birthday", [], "any", false, false, false, 84), "html", null, true);
        echo "\" ";
        if (twig_in_filter(($context["birthday"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo " required=\"required\" ";
        }
        echo " />
                                 </div>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label ";
        // line 88
        if (twig_in_filter(($context["gender"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo "required";
        }
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Gender"), "html", null, true);
        echo "</label>
                                 <select class=\"form-select\" name=\"gender\" id=\"gender\" ";
        // line 89
        if (twig_in_filter(($context["gender"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo " required=\"required\" ";
        }
        echo ">
                                 <option value=\"male\" ";
        // line 90
        echo (((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "gender", [], "any", false, false, false, 90) == "male")) ? ("selected") : (""));
        echo ">Male</option>
                                 <option value=\"female\" ";
        // line 91
        echo (((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "gender", [], "any", false, false, false, 91) == "female")) ? ("selected") : (""));
        echo ">Female</option>
                                 <option value=\"nonbinary\" ";
        // line 92
        echo (((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "gender", [], "any", false, false, false, 92) == "nonbinary")) ? ("selected") : (""));
        echo ">Non-binary</option>
                                 <option value=\"other\" ";
        // line 93
        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "gender", [], "any", false, false, false, 93), ["male", "female", "nonbinary"])) {
            echo " selected ";
        }
        echo ">Other</option>
                                 </select>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label ";
        // line 97
        if (twig_in_filter(($context["company"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo "required";
        }
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Company Name"), "html", null, true);
        echo "</label>
                                 <input class=\"form-control\" type=\"text\" name=\"company\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "company", [], "any", false, false, false, 98), "html", null, true);
        echo "\" ";
        if (twig_in_filter(($context["company"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo " required=\"required\" ";
        }
        echo " autocomplete=\"off\"/>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label\">";
        // line 101
        echo twig_escape_filter($this->env, __trans("Company VAT"), "html", null, true);
        echo "</label>
                                 <input class=\"form-control\" type=\"text\" name=\"company_vat\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "company_vat", [], "any", false, false, false, 102), "html", null, true);
        echo "\" autocomplete=\"off\"/>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label\">";
        // line 105
        echo twig_escape_filter($this->env, __trans("Company Number"), "html", null, true);
        echo "</label>
                                 <input class=\"form-control\" type=\"text\" name=\"company_number\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "company_number", [], "any", false, false, false, 106), "html", null, true);
        echo "\" autocomplete=\"off\"/>
                              </div>
                           </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                           <fieldset class=\"form-fieldset\">
                              <div class=\"mb-3\">
                                 <div class=\"row\">
                                    <label class=\"form-label ";
        // line 114
        if (twig_in_filter(($context["phone"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo "required";
        }
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Phone Number"), "html", null, true);
        echo "</label>
                                 </div>
                                 <div class=\"row\">
                                    <div class=\"col-4\">
\t\t\t\t\t\t\t\t\t   <input class=\"form-control\" type=\"text\" name=\"phone_cc\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "phone_cc", [], "any", false, false, false, 118), "html", null, true);
        echo "\" ";
        if (twig_in_filter(($context["phone"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo " required=\"required\" ";
        }
        echo " autocomplete=\"off\"/>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"col-8\">
\t\t\t\t\t\t\t\t\t   <input class=\"form-control\" type=\"phone\" name=\"phone\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "phone", [], "any", false, false, false, 121), "html", null, true);
        echo "\" ";
        if (twig_in_filter(($context["phone"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo " required=\"required\" ";
        }
        echo " autocomplete=\"off\"/>
\t\t\t\t\t\t\t\t\t</div>
                                 </div>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label ";
        // line 126
        if (twig_in_filter(($context["address_1"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo "required";
        }
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Address"), "html", null, true);
        echo "</label>
                                 <input class=\"form-control\" type=\"text\" name=\"address_1\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "address_1", [], "any", false, false, false, 127), "html", null, true);
        echo "\" ";
        if (twig_in_filter(($context["address_1"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo " required=\"required\" ";
        }
        echo " autocomplete=\"off\"/>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label ";
        // line 130
        if (twig_in_filter(($context["address_2"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo "required";
        }
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Address 2"), "html", null, true);
        echo "</label>
                                 <input class=\"form-control\" type=\"text\" name=\"address_2\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "address_2", [], "any", false, false, false, 131), "html", null, true);
        echo "\" ";
        if (twig_in_filter(($context["address_2"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo " required=\"required\" ";
        }
        echo " autocomplete=\"off\"/>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label ";
        // line 134
        if (twig_in_filter(($context["city"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo "required";
        }
        echo "\">";
        echo twig_escape_filter($this->env, __trans("City"), "html", null, true);
        echo "</label>
                                 <input class=\"form-control\" type=\"text\" name=\"city\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "city", [], "any", false, false, false, 135), "html", null, true);
        echo "\" ";
        if (twig_in_filter(($context["city"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo " required=\"required\" ";
        }
        echo " autocomplete=\"off\"/>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label ";
        // line 138
        if (twig_in_filter(($context["country"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo "required";
        }
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Country"), "html", null, true);
        echo "</label>
                                 <select class=\"form-select\" name=\"country\" ";
        // line 139
        if (twig_in_filter(($context["country"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo " required=\"required\" ";
        }
        echo ">
                                 <option value=\"\">";
        // line 140
        echo twig_escape_filter($this->env, __trans("-- Select country --"), "html", null, true);
        echo "</option>
                                 ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 141));
        foreach ($context['_seq'] as $context["val"] => $context["label"]) {
            // line 142
            echo "                                 <option value=\"";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "\" label=\"";
            echo twig_escape_filter($this->env, $context["label"]);
            echo "\" ";
            if (($context["val"] == twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "country", [], "any", false, false, false, 142))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"]);
            echo "</option>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['val'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                                 </select>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label ";
        // line 147
        if (twig_in_filter(($context["state"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo "required";
        }
        echo "\">";
        echo twig_escape_filter($this->env, __trans("State"), "html", null, true);
        echo "</label>
                                 ";
        // line 149
        echo "                                 <input class=\"form-control\" type=\"text\" name=\"state\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "state", [], "any", false, false, false, 149), "html", null, true);
        echo "\" ";
        if (twig_in_filter(($context["state"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo " required=\"required\" ";
        }
        echo " autocomplete=\"off\"/>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label ";
        // line 152
        if (twig_in_filter(($context["postcode"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo "required";
        }
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Zip/Postal Code"), "html", null, true);
        echo "</label>
                                 <input class=\"form-control\" type=\"text\" name=\"postcode\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "postcode", [], "any", false, false, false, 153), "html", null, true);
        echo "\" ";
        if (twig_in_filter(($context["postcode"] ?? null), twig_get_array_keys_filter(($context["required"] ?? null)))) {
            echo " required=\"required\" ";
        }
        echo " autocomplete=\"off\"/>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label\">";
        // line 156
        echo twig_escape_filter($this->env, __trans("Passport number"), "html", null, true);
        echo "</label>
                                 <input class=\"form-control\" type=\"text\" name=\"document_nr\" value=\"";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "document_nr", [], "any", false, false, false, 157), "html", null, true);
        echo "\" autocomplete=\"off\"/>
                              </div>
                              ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 160
            echo "                              ";
            $context["custom"] = ("custom_" . $context["i"]);
            // line 161
            echo "                              ";
            $context["current"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "client_custom_fields", [], "any", false, false, false, 161)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["custom"] ?? null)] ?? null) : null);
            // line 162
            echo "                              ";
            if (twig_get_attribute($this->env, $this->source, ($context["current"] ?? null), "active", [], "any", false, false, false, 162)) {
                // line 163
                echo "                              <div class=\"mb-3\">
                                 <label class=\"form-label\">";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["current"] ?? null), "title", [], "any", false, false, false, 164), "html", null, true);
                echo "</label>
                                 <input class=\"form-control\" type=\"text\" name=\"";
                // line 165
                echo twig_escape_filter($this->env, ($context["custom"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["profile"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["custom"] ?? null)] ?? null) : null), "html", null, true);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, ($context["current"] ?? null), "required", [], "any", false, false, false, 165)) {
                    echo " required=\"required\" ";
                }
                echo " autocomplete=\"off\"/>
                              </div>
                              ";
            }
            // line 168
            echo "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                           </fieldset>
                        </div>
                           <div class=\"mb-3\">
                              <button class=\"btn btn-xl btn-primary\" type=\"submit\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4\"></path><path d=\"M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4\"></path></svg>
                                 ";
        // line 174
        echo twig_escape_filter($this->env, __trans("Update profile"), "html", null, true);
        echo "
                              </button>
                           </div>
                     </div>
                  </form>
               </div>
               <div class=\"tab-pane\" id=\"tab-password\">
                  <h4>";
        // line 181
        echo twig_escape_filter($this->env, __trans("Change Password"), "html", null, true);
        echo "</h4>
                  <div class=\"mb-3\">";
        // line 182
        echo twig_escape_filter($this->env, __trans("Please enter new password two times in order avoid mistypes"), "html", null, true);
        echo "</div>
                  <form method=\"post\" action=\"";
        // line 183
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/client/profile/change_password");
        echo "\" class=\"form-horizontal api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Password Changed"), "html", null, true);
        echo "\">
                     <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 184
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                     <fieldset class=\"form-fieldset\">
                        <div class=\"mb-3\">
                           <label class=\"form-label required\">";
        // line 187
        echo twig_escape_filter($this->env, __trans("Current Password"), "html", null, true);
        echo "</label>
                           <input class=\"form-control\" type=\"password\" name=\"current_password\" id=\"current_password\" required autocomplete=\"off\"/>
                        </div>
                        <div class=\"mb-3\">
                           <label class=\"form-label required\">";
        // line 191
        echo twig_escape_filter($this->env, __trans("New Password"), "html", null, true);
        echo "</label>
                           <input class=\"form-control\" type=\"password\" name=\"new_password\" id=\"new_password\" required autocomplete=\"off\"/>
                        </div>
                        <div class=\"mb-3\">
                           <label class=\"form-label required\">";
        // line 195
        echo twig_escape_filter($this->env, __trans("Confirm Password"), "html", null, true);
        echo "</label>
                           <input class=\"form-control\" type=\"password\" name=\"confirm_password\" id=\"confirm_password\" required autocomplete=\"off\"/>
                        </div>
                        <div class=\"mb-3\">
                           <button class=\"btn btn-xl btn-primary\" type=\"submit\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                 <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                 <path d=\"M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4\"></path>
                                 <path d=\"M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4\"></path>
                              </svg>
                              ";
        // line 205
        echo twig_escape_filter($this->env, __trans("Change Password"), "html", null, true);
        echo "
                           </button>
                        </div>
                     </fieldset>
                  </form>
               </div>
               <div class=\"tab-pane\" id=\"tab3\">
                  <h4>";
        // line 212
        echo twig_escape_filter($this->env, __trans("API key"), "html", null, true);
        echo "</h4>
                  <div class=\"mb-3\">";
        // line 213
        echo twig_escape_filter($this->env, __trans("API key allows integration with external applications. You will need this key for authentication."), "html", null, true);
        echo "</div>
                  <form method=\"post\" action=\"\" id=\"change-api-key\" class=\"form-horizontal\">
                     <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 215
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                     <div class=\"alert alert-danger\" role=\"alert\">
                        <h4 class=\"alert-title\">";
        // line 217
        echo twig_escape_filter($this->env, __trans("Warning! Resetting the key will break existing applications using it!"), "html", null, true);
        echo "</h4>
                     </div>
                     <fieldset class=\"form-fieldset\">
                        <div class=\"mb-3\">
                           <label class=\"form-label\">";
        // line 221
        echo twig_escape_filter($this->env, __trans("Your API key"), "html", null, true);
        echo ":</label>
                           <div class=\"row g-2\">
                              <div class=\"col\">
                                 <input type=\"text\" class=\"form-control\" autocomplete=\"off\" value=\"";
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "profile_api_key_get", [], "any", false, false, false, 224), "html", null, true);
        echo "\" id=\"api-key\" readonly />
                              </div>
                              <div class=\"col-auto\">
                                 <button type=\"submit\" class=\"btn btn-primary\" aria-label=\"Button\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                       <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                       <path d=\"M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4\"></path>
                                       <path d=\"M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4\"></path>
                                       <path d=\"M12 9l0 3\"></path>
                                       <path d=\"M12 15l.01 0\"></path>
                                    </svg>
                                    ";
        // line 235
        echo twig_escape_filter($this->env, __trans("Reset key"), "html", null, true);
        echo "
                                 </button>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </fieldset>
                  </form>
               </div>
               <div class=\"tab-pane\" id=\"tab4\">
                  <h4>";
        // line 245
        echo twig_escape_filter($this->env, __trans("Currency"), "html", null, true);
        echo "</h4>
                  <div>";
        // line 246
        echo twig_escape_filter($this->env, __trans("Your profile currency is defined after your first order. Once your currency is set, all your profile accounting will be managed in that currency and can not be changed."), "html", null, true);
        echo "</div>
                  ";
        // line 247
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 247)) {
            // line 248
            echo "                  <div>";
            echo twig_escape_filter($this->env, __trans("Your profile currency is"), "html", null, true);
            echo " <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 248), "html", null, true);
            echo "</strong></div>
                  <div>";
            // line 249
            echo twig_escape_filter($this->env, __trans("Create new client profile if you want to manage your money in other currency"), "html", null, true);
            echo "</div>
                  ";
        }
        // line 251
        echo "               </div>
            </div>
         </div>
      </div>
   </div>
</div>
";
    }

    // line 258
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 259
        echo "<script src=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "libs/litepicker/dist/litepicker.js");
        echo "\"></script>
<script>
   \$(function() {
       \$('#change-api-key').on('submit', function(event) {
           bb.post(
               'client/profile/api_key_reset',
               \$(this).serialize(),
               function(result) {
                   \$('#api-key').val(result);
                   bb.msg('API key was changed');
               }
           );
   
           return false;
       });
   
       \$('#profile-update').on('submit', function(event) {
           bb.post(
               'client/profile/update',
               \$(this).serialize(),
               function(result) {
                   bb.msg('Profile updated');
               }
           );
   
           return false;
       });
   });
   document.addEventListener(\"DOMContentLoaded\", function () {
       \twindow.Litepicker && (new Litepicker({
       \t\telement: document.getElementById('birthday'),
       \t\tbuttonText: {
       \t\t\tpreviousMonth: `<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M15 6l-6 6l6 6\" /></svg>`,
       \t\t\tnextMonth: `<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/><path d=\"M9 6l6 6l-6 6\" /></svg>`,
       \t\t},
       \t}));
       });
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_client_profile.html.twig";
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
        return array (  722 => 259,  718 => 258,  708 => 251,  703 => 249,  696 => 248,  694 => 247,  690 => 246,  686 => 245,  673 => 235,  659 => 224,  653 => 221,  646 => 217,  641 => 215,  636 => 213,  632 => 212,  622 => 205,  609 => 195,  602 => 191,  595 => 187,  589 => 184,  583 => 183,  579 => 182,  575 => 181,  565 => 174,  558 => 169,  552 => 168,  540 => 165,  536 => 164,  533 => 163,  530 => 162,  527 => 161,  524 => 160,  520 => 159,  515 => 157,  511 => 156,  501 => 153,  493 => 152,  482 => 149,  474 => 147,  469 => 144,  452 => 142,  448 => 141,  444 => 140,  438 => 139,  430 => 138,  420 => 135,  412 => 134,  402 => 131,  394 => 130,  384 => 127,  376 => 126,  364 => 121,  354 => 118,  343 => 114,  332 => 106,  328 => 105,  322 => 102,  318 => 101,  308 => 98,  300 => 97,  291 => 93,  287 => 92,  283 => 91,  279 => 90,  273 => 89,  265 => 88,  254 => 84,  234 => 71,  224 => 68,  216 => 67,  210 => 64,  206 => 63,  200 => 60,  196 => 59,  179 => 51,  173 => 48,  166 => 44,  160 => 41,  156 => 40,  153 => 39,  151 => 38,  148 => 37,  138 => 34,  134 => 33,  128 => 29,  126 => 28,  118 => 23,  112 => 20,  106 => 17,  100 => 14,  92 => 8,  88 => 7,  81 => 6,  72 => 5,  65 => 4,  58 => 3,  51 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_client_profile.html.twig", "/var/www/themes/tide/html/mod_client_profile.html.twig");
    }
}
