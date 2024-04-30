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

/* mod_page_login.html.twig */
class __TwigTemplate_aaf4580f551a26d05db8135b6e8acfbb extends Template
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
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_public.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout_public.html.twig", "mod_page_login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Log in"), "html", null, true);
    }

    // line 3
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "d-flex flex-column";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"page page-center\">
   <div class=\"container container-tight py-4\">
      ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "login_page_show_logo", [], "any", false, false, false, 7)) {
            // line 8
            echo "      ";
            $context["company"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 8);
            // line 9
            echo "      <div class=\"text-center mb-4\">
         <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "login_page_logo_url", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "login_page_logo_url", [], "any", false, false, false, 10), "/")) : ("/")), "html", null, true);
            echo "\" class=\"navbar-brand navbar-brand-autodark\">
         <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 11), "logo_url", [], "any", false, false, false, 11), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
            echo "\" class=\"navbar-brand-image\">
         </a>
      </div>
      ";
        }
        // line 15
        echo "      <div class=\"card card-md\">
         <div class=\"card-body\">
            <h2 class=\"h2 text-center mb-4\">";
        // line 17
        echo twig_escape_filter($this->env, __trans("Login"), "html", null, true);
        echo "</h2>
            <form method=\"post\" action=\"\" id=\"client-login\" autocomplete=\"off\" novalidate>
               <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
               <div class=\"mb-3\">
                  <label class=\"form-label\">";
        // line 21
        echo twig_escape_filter($this->env, __trans("Email Address"), "html", null, true);
        echo "</label>
                  <input type=\"email\" class=\"form-control\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, __trans("Your email address"), "html", null, true);
        echo "\" name=\"email\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 22), "html", null, true);
        echo "\" required=\"required\" autofocus autocomplete=\"off\">
               </div>
               <div class=\"mb-2\">
                  <label class=\"form-label\">
                  ";
        // line 26
        echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
        echo "
                  ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_password_reset_link", [], "any", false, false, false, 27)) {
            // line 28
            echo "                  <span class=\"form-label-description\">
                  <a href=\"";
            // line 29
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("password-reset");
            echo "\" tabindex=\"5\">";
            echo twig_escape_filter($this->env, __trans("Forgot password?"), "html", null, true);
            echo "</a>
                  </span>
                  ";
        }
        // line 32
        echo "                  </label>
                  <div class=\"input-group input-group-flat\">
                     <input type=\"password\" class=\"form-control\" id=\"passwordField\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
        echo "\" name=\"password\" required=\"required\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "password", [], "any", false, false, false, 34), "html", null, true);
        echo "\" autocomplete=\"off\">
                     <span class=\"input-group-text\">
                        <a href=\"#\" class=\"link-secondary\" title=\"Show password\" id=\"reveal\" data-bs-toggle=\"tooltip\">
                           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                              <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                              <path d=\"M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0\" />
                              <path d=\"M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6\" />
                           </svg>
                        </a>
                     </span>
                  </div>
               </div>
               ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "login_page_show_remember_me", [], "any", false, false, false, 46)) {
            // line 47
            echo "               <div class=\"mb-2\">
                  <label class=\"form-check\">
                  <input type=\"checkbox\" name=\"remember\" checked=\"checked\" class=\"form-check-input\"/>
                  <span class=\"form-check-label\">";
            // line 50
            echo twig_escape_filter($this->env, __trans("Remember me"), "html", null, true);
            echo "</span>
                  </label>
               </div>
               ";
        }
        // line 54
        echo "               <div class=\"form-footer\">
                  <button type=\"submit\" class=\"btn btn-primary w-100\">";
        // line 55
        echo twig_escape_filter($this->env, __trans("Log in"), "html", null, true);
        echo "</button>
               </div>
            </form>
         </div>
      </div>
      ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_signup_link", [], "any", false, false, false, 60)) {
            // line 61
            echo "      <div class=\"text-center text-secondary mt-3\">
         Don't have account yet? <a href=\"";
            // line 62
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("signup");
            echo "\" tabindex=\"-1\">";
            echo twig_escape_filter($this->env, __trans("Signup"), "html", null, true);
            echo "</a>
      </div>
      ";
        }
        // line 65
        echo "   </div>
</div>
";
    }

    // line 68
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "<script type=\"text/javascript\">
   document.addEventListener(\"DOMContentLoaded\", function() {
       var button = document.getElementById(\"reveal\");
       var passwordField = document.getElementById(\"passwordField\");
       var tooltip = new bootstrap.Tooltip(button);
       
       var showIconSvg = button.innerHTML;
       var hideIconSvg = '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M10.585 10.587a2 2 0 0 0 2.829 2.828\"></path><path d=\"M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87\"></path><path d=\"M3 3l18 18\"></path></svg>';
     
       button.addEventListener(\"click\", function() {
           if (passwordField.type === \"password\") {
               passwordField.type = \"text\";
               button.innerHTML = hideIconSvg;
               tooltip.dispose();
               tooltip = new bootstrap.Tooltip(button, {
                   title: \"Hide password\"
               });
           } else {
               passwordField.type = \"password\";
               button.innerHTML = showIconSvg;
               tooltip.dispose();
               tooltip = new bootstrap.Tooltip(button, {
                   title: \"Show password\"
               });
           }
       });
   });
   
      \$(function() {
          \$('#client-login').on('submit', function(event) {
              bb.post('guest/client/login',
                  \$(this).serialize(),
                  function(result) {
                      bb.redirect();
                  }
              );
      
              return false;
          });
          ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "al", [], "any", false, false, false, 108)) {
            // line 109
            echo "              \$('#client-login').submit();
          ";
        }
        // line 111
        echo "      });
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_page_login.html.twig";
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
        return array (  252 => 111,  248 => 109,  246 => 108,  205 => 69,  201 => 68,  195 => 65,  187 => 62,  184 => 61,  182 => 60,  174 => 55,  171 => 54,  164 => 50,  159 => 47,  157 => 46,  140 => 34,  136 => 32,  128 => 29,  125 => 28,  123 => 27,  119 => 26,  110 => 22,  106 => 21,  101 => 19,  96 => 17,  92 => 15,  83 => 11,  79 => 10,  76 => 9,  73 => 8,  71 => 7,  67 => 5,  63 => 4,  56 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_page_login.html.twig", "/var/www/themes/infobia/html/mod_page_login.html.twig");
    }
}
