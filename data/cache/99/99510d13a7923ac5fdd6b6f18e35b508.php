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

/* mod_support_contact_us.html.twig */
class __TwigTemplate_c445401a656077a3d4a99775ee833f84 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_support_contact_us.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_support_contact_us.html.twig", 2)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Contact us"), "html", null, true);
    }

    // line 4
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Contact us"), "html", null, true);
    }

    // line 5
    public function block_page_subheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 5), "html", null, true);
    }

    // line 6
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "support-contact-us";
    }

    // line 7
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
        echo twig_escape_filter($this->env, __trans("Contact us"), "html", null, true);
        echo "</a></li>";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $context["company"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 9);
        // line 10
        echo "<div class=\"row row-deck row-cards mb-3 d-flex justify-content-center\">
   <div class=\"col-12 col-md-6\">
      <div class=\"card\">
         <div class=\"card-body\">
            <form method=\"post\" action=\"\" id=\"public-ticket-create\">
               <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
               <fieldset class=\"form-fieldset\">
                  <div class=\"mb-3\">
                     <label class=\"form-label required\">";
        // line 18
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo ": </label>
                     <input type=\"text\" class=\"form-control\" name=\"name\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "\" required=\"required\" id=\"name\">
                  </div>
                  <div class=\"mb-3\">
                     <label class=\"form-label required\">";
        // line 22
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo ": </label>
                     <input type=\"email\" class=\"form-control\" name=\"email\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 23), "html", null, true);
        echo "\" required=\"required\" id=\"email\">
                  </div>
                  <div class=\"mb-3\">
                     <label class=\"form-label required\">";
        // line 26
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo ": </label>
                     <input type=\"text\" class=\"form-control\" name=\"subject\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "subject", [], "any", false, false, false, 27), "html", null, true);
        echo "\" required=\"required\" id=\"subject\">
                  </div>
                  <div class=\"mb-3\">
                     <label class=\"form-label required\">";
        // line 30
        echo twig_escape_filter($this->env, __trans("Message"), "html", null, true);
        echo ": </label>
                     <textarea class=\"form-control\" name=\"message\" cols=\"5\" rows=\"5\" required=\"required\" id=\"message\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "message", [], "any", false, false, false, 31), "html", null, true);
        echo "</textarea>
                  </div>
                  ";
        // line 33
        echo twig_call_macro($macros["mf"], "macro_recaptcha", [], 33, $context, $this->getSourceContext());
        echo "
                  <div class=\"mb-3 text-center\">
                     <button class=\"btn btn-primary btn-lg\" type=\"submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, __trans("Send"), "html", null, true);
        echo "\" data-loading-text=\"Loading...\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                           <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                           <path d=\"M10 14l11 -11\"></path>
                           <path d=\"M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5\"></path>
                        </svg>
                        ";
        // line 41
        echo twig_escape_filter($this->env, __trans("Send"), "html", null, true);
        echo "
                     </button>
                  </div>
               </fieldset>
               ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "spamchecker"]], "method", false, false, false, 45)) {
            // line 46
            echo "               ";
            $context["rc"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "spamchecker_recaptcha", [], "any", false, false, false, 46);
            // line 47
            echo "               ";
            if (twig_get_attribute($this->env, $this->source, ($context["rc"] ?? null), "enabled", [], "any", false, false, false, 47)) {
                // line 48
                echo "               ";
                if ((twig_get_attribute($this->env, $this->source, ($context["rc"] ?? null), "version", [], "any", false, false, false, 48) == 2)) {
                    // line 49
                    echo "               <input type=\"hidden\" name=\"anti-spam\" value=\"1\" id=\"anti-spam\" required=\"required\"/>
               ";
                }
                // line 51
                echo "               ";
            }
            // line 52
            echo "               ";
        }
        // line 53
        echo "            </form>
         </div>
         <div class=\"card-footer text-center\">
            <address><strong>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 56), "html", null, true);
        echo " <br>
               </strong>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "address_1", [], "any", false, false, false, 57), "html", null, true);
        echo " <br>
               ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "address_2", [], "any", false, false, false, 58), "html", null, true);
        echo " <br>
               ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "address_3", [], "any", false, false, false, 59), "html", null, true);
        echo " <br>
               <abbr title=\"Phone\">P: </abbr>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "tel", [], "any", false, false, false, 60), "html", null, true);
        echo "<br>
               <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "www", [], "any", false, false, false, 61), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "www", [], "any", false, false, false, 61), "html", null, true);
        echo "</a><br> 
               <a href=\"mailto:";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "email", [], "any", false, false, false, 62), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "email", [], "any", false, false, false, 62), "html", null, true);
        echo "</a>
            </address>
         </div>
      </div>
   </div>
</div>
";
    }

    // line 69
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<script>
   \$(function() {
       \$('#anti-spam').remove();
   
       \$('#public-ticket-create').on('submit', function(event) {
           \$('.wait').show();
           bb.post(
               'guest/support/ticket_create',
               \$(this).serialize(),
               function(result) {
                   bb.redirect(\"";
        // line 80
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/contact-us/conversation");
        echo "\" + '/' + result);
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
        return "mod_support_contact_us.html.twig";
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
        return array (  251 => 80,  239 => 70,  235 => 69,  222 => 62,  216 => 61,  212 => 60,  208 => 59,  204 => 58,  200 => 57,  196 => 56,  191 => 53,  188 => 52,  185 => 51,  181 => 49,  178 => 48,  175 => 47,  172 => 46,  170 => 45,  163 => 41,  154 => 35,  149 => 33,  144 => 31,  140 => 30,  134 => 27,  130 => 26,  124 => 23,  120 => 22,  114 => 19,  110 => 18,  104 => 15,  97 => 10,  95 => 9,  91 => 8,  82 => 7,  75 => 6,  68 => 5,  61 => 4,  54 => 3,  50 => 1,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_support_contact_us.html.twig", "/var/www/themes/infobia/html/mod_support_contact_us.html.twig");
    }
}
