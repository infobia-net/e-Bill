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

/* mod_orderbutton_client.html.twig */
class __TwigTemplate_d3680ff4d28582464db31626b9e50e10 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_orderbutton_client.html.twig", 1)->unwrap();
        // line 2
        echo "<div class=\"row row-deck row-cards mb-3\" id=\"register-or-login\">
   <div class=\"col-md-12\">
      <div class=\"card\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">
               <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                  <path d=\"M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0\"></path>
                  <path d=\"M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2\"></path>
               </svg>
               &nbsp;";
        // line 12
        echo twig_escape_filter($this->env, __trans("Login or Register"), "html", null, true);
        echo "
            </h3>
         </div>
         <div class=\"card-body\">
            <div class=\"card\">
               <div class=\"card-header\">
                  <ul class=\"nav nav-tabs card-header-tabs\" data-bs-toggle=\"tabs\">
                     <li class=\"nav-item\">
                        <a href=\"#tabs-login\" class=\"nav-link active\" data-bs-toggle=\"tab\">";
        // line 20
        echo twig_escape_filter($this->env, __trans("Login"), "html", null, true);
        echo "</a>
                     </li>
                     <li class=\"nav-item\">
                        <a href=\"#tabs-register\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 23
        echo twig_escape_filter($this->env, __trans("Register"), "html", null, true);
        echo "</a>
                     </li>
                  </ul>
               </div>
               <div class=\"card-body\">
                  <div class=\"tab-content\">
                     <div class=\"tab-pane active show\" id=\"tabs-login\">
                        <h4>";
        // line 30
        echo twig_escape_filter($this->env, __trans("Login"), "html", null, true);
        echo "</h4>
                        <form method=\"post\" action=\"\" id=\"client-login\">
                           <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                           <fieldset class=\"form-fieldset\">
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
        // line 35
        echo twig_escape_filter($this->env, __trans("Email Address"), "html", null, true);
        echo "</label>
                                 <input id=\"icon\" type=\"email\" class=\"form-control\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, __trans("Your email address"), "html", null, true);
        echo "\" name=\"email\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 36), "html", null, true);
        echo "\" required=\"required\" data-validation-required-message=\"";
        echo twig_escape_filter($this->env, __trans("You must fill in your email."), "html", null, true);
        echo "\" autocomplete=\"off\"/>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
        // line 39
        echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
        echo "</label>
                                 <input id=\"password\" type=\"password\" class=\"form-control\" placeholder=\"";
        // line 40
        echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
        echo "\" name=\"password\" required=\"required\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "password", [], "any", false, false, false, 40), "html", null, true);
        echo "\" data-validation-required-message=\"";
        echo twig_escape_filter($this->env, __trans("You must fill in your password."), "html", null, true);
        echo "\" autocomplete=\"off\"/>
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-check\">
                                 <input class=\"form-check-input\" id=\"optionsCheckbox\" type=\"checkbox\" name=\"remember\" value=\"1\">
                                 <span class=\"form-check-label\">";
        // line 45
        echo twig_escape_filter($this->env, __trans("Remember me"), "html", null, true);
        echo "</span>
                                 </label>
                              </div>
                              <div class=\"mb-3\">
                                 <button class=\"btn btn-primary\" type=\"submit\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                       <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                       <path d=\"M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2\"></path>
                                       <path d=\"M20 12h-13l3 -3m0 6l-3 -3\"></path>
                                    </svg>
                                    ";
        // line 55
        echo twig_escape_filter($this->env, __trans("Log in"), "html", null, true);
        echo "
                                 </button>
                              </div>
                           </fieldset>
                        </form>
                     </div>
                     <div class=\"tab-pane\" id=\"tabs-register\">
                        <h4>";
        // line 62
        echo twig_escape_filter($this->env, __trans("Register"), "html", null, true);
        echo "</h4>
                        <form action=\"\" method=\"post\" id=\"create-profile\">
                           <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                           ";
        // line 65
        $context["r"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "client_required", [], "any", false, false, false, 65);
        // line 66
        echo "                           <fieldset class=\"form-fieldset\">
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
        // line 68
        echo twig_escape_filter($this->env, __trans("Email Address"), "html", null, true);
        echo "</label>
                                 <input type=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 69), "html", null, true);
        echo "\" required=\"required\" id=\"reg-email\">
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
        // line 72
        echo twig_escape_filter($this->env, __trans("First Name"), "html", null, true);
        echo "</label>
                                 <input type=\"text\" name=\"first_name\" class=\"form-control\" id=\"first-name\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "first_name", [], "any", false, false, false, 73), "html", null, true);
        echo "\" required=\"required\">
                              </div>
                              ";
        // line 75
        if (twig_in_filter("last_name", ($context["r"] ?? null))) {
            // line 76
            echo "                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
            // line 77
            echo twig_escape_filter($this->env, __trans("Last Name"), "html", null, true);
            echo "</label>
                                 <input type=\"text\" name=\"last_name\" class=\"form-control\" id=\"last_name\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "last_name", [], "any", false, false, false, 78), "html", null, true);
            echo "\" required=\"required\">
                              </div>
                              ";
        }
        // line 81
        echo "                              ";
        if (twig_in_filter("company", ($context["r"] ?? null))) {
            // line 82
            echo "                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
            // line 83
            echo twig_escape_filter($this->env, __trans("Company"), "html", null, true);
            echo "</label>
                                 <input type=\"text\" name=\"company\" class=\"form-control\" id=\"company\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 84), "html", null, true);
            echo "\" required=\"required\">
                              </div>
                              ";
        }
        // line 87
        echo "                              ";
        if (twig_in_filter("birthday", ($context["r"] ?? null))) {
            // line 88
            echo "                              <div class=\"mb-3\">
                                 <label class=\"form-label\">";
            // line 89
            echo twig_escape_filter($this->env, __trans("Birthday"), "html", null, true);
            echo "</label>
                                 <input type=\"date\" class=\"form-control\" name=\"birthday\" id=\"birthday\" value=\"\">
                              </div>
                              ";
        }
        // line 93
        echo "                              ";
        if (twig_in_filter("gender", ($context["r"] ?? null))) {
            // line 94
            echo "                              <div class=\"mb-3\">
                                 <label class=\"form-label\">";
            // line 95
            echo twig_escape_filter($this->env, __trans("You are"), "html", null, true);
            echo "</label>
                                 <select name=\"gender\" class=\"form-select\" id=\"gender\">
                                    <option value=\"male\">Male</option>
                                    <option value=\"female\">Female</option>
                                    <option value=\"nonbinary\">Non-binary</option>
                                    <option value=\"other\">Other</option>
                                 </select>
                              </div>
                              ";
        }
        // line 104
        echo "                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
        // line 105
        echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
        echo "</label>
                                 <input type=\"password\" name=\"password\" class=\"form-control\" value=\"\" required=\"required\" id=\"reg-password\">
                              </div>
                              <div class=\"mb-3\">
                                 <label class=\"form-label required\">";
        // line 109
        echo twig_escape_filter($this->env, __trans("Password confirm"), "html", null, true);
        echo "</label>
                                 <input type=\"password\" name=\"password_confirm\" class=\"form-control\" name=\"password-confirm\" value=\"\" required=\"required\">
                              </div>
                              ";
        // line 112
        if (twig_in_filter("address_1", ($context["r"] ?? null))) {
            // line 113
            echo "                              <div class=\"mb-3\">
                                 <label class=\"form-label\">";
            // line 114
            echo twig_escape_filter($this->env, __trans("Address"), "html", null, true);
            echo "</label>
                                 <input type=\"text\" name=\"address_1\" class=\"form-control\" id=\"address_1\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address_1", [], "any", false, false, false, 115), "html", null, true);
            echo "\">
                              </div>
                              ";
        }
        // line 118
        echo "                              ";
        if (twig_in_filter("address_2", ($context["r"] ?? null))) {
            // line 119
            echo "                              <div class=\"mb-3\">
                                 <label class=\"form-label\">";
            // line 120
            echo twig_escape_filter($this->env, __trans("Address 2"), "html", null, true);
            echo "</label>
                                 <input type=\"text\" name=\"address_2\" class=\"form-control\" id=\"address_2\" value=\"";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address_2", [], "any", false, false, false, 121), "html", null, true);
            echo "\">
                              </div>
                              ";
        }
        // line 124
        echo "                              ";
        if (twig_in_filter("city", ($context["r"] ?? null))) {
            // line 125
            echo "                              <div class=\"mb-3\">
                                 <label class=\"form-label\">";
            // line 126
            echo twig_escape_filter($this->env, __trans("City"), "html", null, true);
            echo "</label>
                                 <input type=\"text\" name=\"city\" class=\"form-control\" id=\"city\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "city", [], "any", false, false, false, 127), "html", null, true);
            echo "\">
                              </div>
                              ";
        }
        // line 130
        echo "                              ";
        if (twig_in_filter("country", ($context["r"] ?? null))) {
            // line 131
            echo "                              <div class=\"mb-3\">
                                 <label class=\"form-label\">";
            // line 132
            echo twig_escape_filter($this->env, __trans("Country"), "html", null, true);
            echo "</label>
                                 <select name=\"country\" class=\"form-select\" required=\"required\">
                                    <option value=\"\">";
            // line 134
            echo twig_escape_filter($this->env, __trans("-- Select country --"), "html", null, true);
            echo "</option>
                                    ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 135));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 136
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, $context["label"]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["label"]);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['val'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                                 </select>
                              </div>
                              ";
        }
        // line 141
        echo "                              ";
        if (twig_in_filter("state", ($context["r"] ?? null))) {
            // line 142
            echo "                              <div class=\"mb-3\">
                                 <label class=\"form-label\">";
            // line 143
            echo twig_escape_filter($this->env, __trans("State"), "html", null, true);
            echo "</label>
                                 ";
            // line 145
            echo "                                 <input type=\"text\" name=\"state\" class=\"form-control\" id=\"state\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "state", [], "any", false, false, false, 145), "html", null, true);
            echo "\" />
                              </div>
                              ";
        }
        // line 148
        echo "                              ";
        if (twig_in_filter("postcode", ($context["r"] ?? null))) {
            // line 149
            echo "                              <div class=\"mb-3\">
                                 <label class=\"form-label\">";
            // line 150
            echo twig_escape_filter($this->env, __trans("Zip/Postal Code"), "html", null, true);
            echo "</label>
                                 <input type=\"text\" name=\"postcode\" class=\"form-control\" id=\"postcode\" value=\"";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "postcode", [], "any", false, false, false, 151), "html", null, true);
            echo "\">
                              </div>
                              ";
        }
        // line 154
        echo "                              ";
        if (twig_in_filter("phone", ($context["r"] ?? null))) {
            // line 155
            echo "                              <div class=\"mb-3\">
                                 <div class=\"row\">
                                    <label class=\"form-label required\">";
            // line 157
            echo twig_escape_filter($this->env, __trans("Phone Number"), "html", null, true);
            echo "</label>
                                 </div>
                                 <div class=\"row\">
                                    <div class=\"col-4\">
                                       <input type=\"text\" class=\"form-control\" name=\"phone_cc\" value=\"";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone_cc", [], "any", false, false, false, 161), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"col-8\">
                                       <input id=\"phone\" class=\"form-control\" type=\"text\" name=\"phone\" value=\"";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone", [], "any", false, false, false, 164), "html", null, true);
            echo "\">
                                    </div>
                                 </div>
                              </div>
                              ";
        }
        // line 169
        echo "                              ";
        $context["custom_fields"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "client_custom_fields", [], "any", false, false, false, 169);
        // line 170
        echo "                              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
            // line 171
            echo "                              ";
            if (twig_get_attribute($this->env, $this->source, $context["field"], "active", [], "any", false, false, false, 171)) {
                // line 172
                echo "                              <div class=\"mb-3\">
                                 <label class=\"form-label\">";
                // line 173
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 173))) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 173), "html", null, true);
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["field_name"]), "html", null, true);
                    echo " ";
                }
                echo "</label>
                                 <input type=\"text\" class=\"form-control\" name=\"";
                // line 174
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), $context["field_name"], [], "any", false, false, false, 174), "html", null, true);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 174)) {
                    echo "required=\"required\"";
                }
                echo ">
                              </div>
                              ";
            }
            // line 177
            echo "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                              ";
        echo twig_call_macro($macros["mf"], "macro_recaptcha", [], 178, $context, $this->getSourceContext());
        echo "
                              <div class=\"mb-3\">
                                 <button class=\"btn btn-primary\" type=\"submit\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                       <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                       <path d=\"M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0\"></path>
                                       <path d=\"M16 19h6\"></path>
                                       <path d=\"M19 16v6\"></path>
                                       <path d=\"M6 21v-2a4 4 0 0 1 4 -4h4\"></path>
                                    </svg>
                                    ";
        // line 188
        echo twig_escape_filter($this->env, __trans("Register"), "html", null, true);
        echo "
                                 </button>
                              </div>
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_orderbutton_client.html.twig";
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
        return array (  457 => 188,  443 => 178,  437 => 177,  423 => 174,  413 => 173,  410 => 172,  407 => 171,  402 => 170,  399 => 169,  391 => 164,  385 => 161,  378 => 157,  374 => 155,  371 => 154,  365 => 151,  361 => 150,  358 => 149,  355 => 148,  348 => 145,  344 => 143,  341 => 142,  338 => 141,  333 => 138,  320 => 136,  316 => 135,  312 => 134,  307 => 132,  304 => 131,  301 => 130,  295 => 127,  291 => 126,  288 => 125,  285 => 124,  279 => 121,  275 => 120,  272 => 119,  269 => 118,  263 => 115,  259 => 114,  256 => 113,  254 => 112,  248 => 109,  241 => 105,  238 => 104,  226 => 95,  223 => 94,  220 => 93,  213 => 89,  210 => 88,  207 => 87,  201 => 84,  197 => 83,  194 => 82,  191 => 81,  185 => 78,  181 => 77,  178 => 76,  176 => 75,  171 => 73,  167 => 72,  161 => 69,  157 => 68,  153 => 66,  151 => 65,  147 => 64,  142 => 62,  132 => 55,  119 => 45,  107 => 40,  103 => 39,  93 => 36,  89 => 35,  83 => 32,  78 => 30,  68 => 23,  62 => 20,  51 => 12,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_client.html.twig", "/var/www/themes/tide/html/mod_orderbutton_client.html.twig");
    }
}
