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

/* layout_default.html.twig */
class __TwigTemplate_324ffcfc58f9be481da80bf3f8ccf298 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'meta_description' => [$this, 'block_meta_description'],
            'opengraph' => [$this, 'block_opengraph'],
            'head' => [$this, 'block_head'],
            'js' => [$this, 'block_js'],
            'body' => [$this, 'block_body'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'page_header' => [$this, 'block_page_header'],
            'page_subheader' => [$this, 'block_page_subheader'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
            'content_after' => [$this, 'block_content_after'],
            'footerjs' => [$this, 'block_footerjs'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_locale", [], "any", false, false, false, 2), ["_" => "-"]), "html", null, true);
        echo "\"";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_locale", [], "any", false, false, false, 2), ["ar_EG", "ar_SA", "he_IL"])) {
            echo " ";
            echo "dir=\"rtl\"";
        }
        echo ">
   <head>
      <meta charset=\"utf-8\"/>
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, viewport-fit=cover\"/>
      <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\"/>
      <title>";
        // line 7
        $this->displayBlock('meta_title', $context, $blocks);
        echo "</title>
      <meta name=\"msapplication-TileColor\" content=\"\"/>
      <meta name=\"theme-color\" content=\"\"/>
      <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\"/>
      <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
      <meta name=\"mobile-web-app-capable\" content=\"yes\"/>
      <meta name=\"HandheldFriendly\" content=\"True\"/>
      <meta name=\"MobileOptimized\" content=\"320\"/>
      <link rel=\"icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 15), "favicon_url", [], "any", false, false, false, 15), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
      <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 16), "favicon_url", [], "any", false, false, false, 16), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
      <meta name=\"description\" content=\"";
        // line 17
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\"/>
      <meta property=\"bb:url\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_constant("SYSTEM_URL"), "html", null, true);
        echo "\">
      <meta property=\"bb:client_area\" content=\"";
        // line 19
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\">
      <meta name=\"csrf-token\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
      <meta name=\"robots\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_robots", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
      <meta name=\"author\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_author", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
      <meta name=\"generator\" content=\"FOSSBilling ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_version", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
      <meta name=\"canonical\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_constant("SYSTEM_URL"), "html", null, true);
        echo "\">
      ";
        // line 25
        $this->displayBlock('opengraph', $context, $blocks);
        // line 26
        echo "      <!-- CSS files -->
      <link href=\"";
        // line 27
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_locale", [], "any", false, false, false, 27), ["ar_EG", "ar_SA", "he_IL"])) {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler.rtl.min.css");
        } else {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler.min.css");
        }
        echo "\" rel=\"stylesheet\"/>
      <link href=\"";
        // line 28
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_locale", [], "any", false, false, false, 28), ["ar_EG", "ar_SA", "he_IL"])) {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler-flags.rtl.min.css");
        } else {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler-flags.min.css");
        }
        echo "\" rel=\"stylesheet\"/>
      <link href=\"";
        // line 29
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_locale", [], "any", false, false, false, 29), ["ar_EG", "ar_SA", "he_IL"])) {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler-payments.rtl.min.css");
        } else {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler-payments.min.css");
        }
        echo "\" rel=\"stylesheet\"/>
      <link href=\"";
        // line 30
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_locale", [], "any", false, false, false, 30), ["ar_EG", "ar_SA", "he_IL"])) {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler-vendors.rtl.min.css");
        } else {
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler-vendors.min.css");
        }
        echo "\" rel=\"stylesheet\"/>
\t  <link href=\"";
        // line 31
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/custom.css");
        echo "\" rel=\"stylesheet\"/>
      <script src=\"";
        // line 32
        echo $this->extensions['Box_TwigExtensions']->twig_library_url(("Api/API.js?v=" . twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_version", [], "any", false, false, false, 32)));
        echo "\"></script>
      <script src=\"";
        // line 33
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/jquery-3.7.0.min.js");
        echo "\"></script>
      <script src=\"";
        // line 34
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/bb-jquery.js");
        echo "\"></script>
      <style>
         @import url('https://rsms.me/inter/inter.css');
         :root {
         --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
         }
         body {
         font-feature-settings: \"cv03\", \"cv04\", \"cv11\";
         }
      </style>
      ";
        // line 44
        $this->displayBlock('head', $context, $blocks);
        // line 45
        echo "      ";
        $this->displayBlock('js', $context, $blocks);
        // line 46
        echo "   </head>
   <body>
      ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "cookieconsent"]], "method", false, false, false, 48)) {
            // line 49
            echo "      ";
            $__internal_compile_0 = null;
            try {
                $__internal_compile_0 =                 $this->loadTemplate("mod_cookieconsent_index.html.twig", "layout_default.html.twig", 49);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_0) {
                $__internal_compile_0->display($context);
            }
            // line 50
            echo "      ";
        }
        // line 51
        echo "      ";
        $this->displayBlock('body', $context, $blocks);
        // line 591
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", false, false, false, 591)) {
            // line 592
            echo "      ";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", false, false, false, 592);
            echo "
      ";
        }
        // line 594
        echo "      ";
        $__internal_compile_1 = null;
        try {
            $__internal_compile_1 =             $this->loadTemplate("partial_pending_messages.html.twig", "layout_default.html.twig", 594);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_1) {
            $__internal_compile_1->display($context);
        }
        // line 595
        echo "      ";
        $this->displayBlock('footerjs', $context, $blocks);
        // line 596
        echo "      <script src=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/tabler.min.js");
        echo "\" defer></script>
   </body>
</html>
";
    }

    // line 7
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_title", [], "any", false, false, false, 7), "html", null, true);
    }

    // line 17
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_description", [], "any", false, false, false, 17), "html", null, true);
    }

    // line 25
    public function block_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 44
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 45
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "      <script>
         if (localStorage.getItem('theme') === 'dark') {
            document.body.setAttribute(\"data-bs-theme\", localStorage.getItem('theme'));
         } else {
            document.body.removeAttribute(\"data-bs-theme\");
         }
      </script>
      ";
        // line 59
        if (( !($context["client"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "require_login", [], "any", false, false, false, 59))) {
            // line 60
            echo "      <script>
         \$(function() {
             bb.redirect('";
            // line 62
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login");
            echo "');
         });
      </script>
      ";
        }
        // line 66
        echo "      ";
        if (($context["client"] ?? null)) {
            // line 67
            echo "      ";
            $context["profile"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "profile_get", [], "any", false, false, false, 67);
            // line 68
            echo "      ";
        }
        // line 69
        echo "      ";
        $context["company"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 69);
        // line 70
        echo "      <div class=\"page\">
         <!-- Navbar -->
         <div class=\"sticky-top\">
            ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_enabled", [], "any", false, false, false, 73)) {
            // line 74
            echo "            <header class=\"navbar navbar-expand-md d-print-none bg-";
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_color", [], "any", false, false, false, 74) == 1)) {
                echo "primary";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_color", [], "any", false, false, false, 74) == 2)) {
                echo "purple";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_color", [], "any", false, false, false, 74) == 3)) {
                echo "red";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_color", [], "any", false, false, false, 74) == 4)) {
                echo "orange";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_color", [], "any", false, false, false, 74) == 5)) {
                echo "yellow";
            } else {
                echo "green";
            }
            echo " text-primary-fg border-bottom-0\">
               <div class=\"container-xl ml-3\">
                  <strong>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_text", [], "any", false, false, false, 76), "html", null, true);
            echo "</strong>
               </div>
            </header>
            ";
        }
        // line 80
        echo "            <header class=\"navbar navbar-expand-md d-print-none";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "announcement_bar_enabled", [], "any", false, false, false, 80)) {
            echo " border-top-0";
        }
        echo "\">
               <div class=\"container-xl\">
                  <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" aria-controls=\"navbar-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"navbar-toggler-icon\"></span>
                  </button>
\t\t\t\t  ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_company_logo", [], "any", false, false, false, 85)) {
            // line 86
            echo "                  <h1 class=\"navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3\">
                     <a href=\"";
            // line 87
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
            echo "\">
                     <img src=\"/themes/tide/assets/img/banner_slonic.gif\" alt=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 88), "html", null, true);
            echo "\" class=\"navbar-brand-image\"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"http://streznik.com\"><img src=\"/themes/tide/assets/img/banner_streznik.gif\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 88), "html", null, true);
            echo "\" class=\"navbar-brand-image\"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"http://infobia.net\"><img src=\"/themes/tide/assets/img/banner_infobia.gif\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 88), "html", null, true);
            echo "\" class=\"navbar-brand-image\">
                     </a>
                  </h1>
\t\t\t\t  ";
        }
        // line 92
        echo "\t\t\t\t  ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_company_name", [], "any", false, false, false, 92)) {
            // line 93
            echo "\t\t\t\t  <p class=\"mt-3 text-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 93), "html", null, true);
            echo "</p>
\t\t\t\t  ";
        }
        // line 94
        echo "\t\t\t\t  
                  <div class=\"navbar-nav flex-row order-md-last\">
                     <div class=\"nav-item d-none d-md-flex me-3\">
                        <div class=\"btn-list\">
                           ";
        // line 98
        $context["languages"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_languages", [true], "method", false, false, false, 98);
        // line 99
        echo "                           ";
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 100
            echo "                           ";
            $context["currentLang"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_locale", [], "any", false, false, false, 100);
            // line 101
            echo "                           ";
            $context["countryCode"] = twig_slice($this->env, ($context["currentLang"] ?? null), 3, 2);
            // line 102
            echo "                           <div class=\"dropdown\">
                              <a href=\"#\" class=\"btn dropdown-toggle\" data-bs-toggle=\"dropdown\"><span class=\"flag flag-country-";
            // line 103
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["countryCode"] ?? null)), "html", null, true);
            echo "\"></span>&nbsp;";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 104
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 104) == ($context["currentLang"] ?? null))) {
                    // line 105
                    echo "                              ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "title", [], "any", false, false, false, 105), "html", null, true);
                    echo "
                              ";
                }
                // line 107
                echo "                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</a>
                              <div class=\"dropdown-menu\">
                                 ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 110
                echo "                                 ";
                $context["countryCode"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 110), 3, 2);
                // line 111
                echo "                                 ";
                if (($context["lang"] != ($context["currentLang"] ?? null))) {
                    // line 112
                    echo "                                 <a href=\"javascript:;\" class=\"dropdown-item language_selector\" data-language-code=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 112), "html", null, true);
                    echo "\"><span class=\"flag flag-country-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["countryCode"] ?? null)), "html", null, true);
                    echo "\"></span>&nbsp;";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "title", [], "any", false, false, false, 112), "html", null, true);
                    echo "</a>
                                 ";
                }
                // line 114
                echo "                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                              </div>
                           </div>
                           ";
        }
        // line 118
        echo "                           ";
        if ( !($context["client"] ?? null)) {
            // line 119
            echo "                           <a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login");
            echo "\" class=\"btn btn-secondary\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                 <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                 <path d=\"M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2\"></path>
                                 <path d=\"M20 12h-13l3 -3m0 6l-3 -3\"></path>
                              </svg>
                              ";
            // line 125
            echo twig_escape_filter($this->env, __trans("Login"), "html", null, true);
            echo "
                           </a>
                           <a href=\"";
            // line 127
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("signup");
            echo "\" class=\"btn btn-primary\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                 <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                 <path d=\"M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0\"></path>
                                 <path d=\"M16 19h6\"></path>
                                 <path d=\"M19 16v6\"></path>
                                 <path d=\"M6 21v-2a4 4 0 0 1 4 -4h4\"></path>
                              </svg>
                              ";
            // line 135
            echo twig_escape_filter($this->env, __trans("Register"), "html", null, true);
            echo "
                           </a>
                           ";
        }
        // line 138
        echo "                        </div>
                     </div>
                     <div class=\"d-none d-md-flex me-3\">
                        <a href=\"?theme=dark\" class=\"nav-link px-0 hide-theme-dark js-theme-toggler\" title=\"Enable dark mode\" data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"bottom\">
                           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                           <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                           <path d=\"M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z\" />
                           </svg>
                        </a>
                        <a href=\"?theme=light\" class=\"nav-link px-0 hide-theme-light js-theme-toggler\" title=\"Enable light mode\" data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"bottom\">
                           <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                           <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                           <path d=\"M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0\" />
                           <path d=\"M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7\" />
                           </svg>
                        </a>
                     </div>
                     ";
        // line 157
        if (($context["client"] ?? null)) {
            // line 158
            echo "                     <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link d-flex lh-1 text-reset p-0\" data-bs-toggle=\"dropdown\" aria-label=\"Open user menu\">
                           <span class=\"avatar avatar-sm\" style=\"background-image: url(";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 160), 60), "html", null, true);
            echo ")\"></span>
                           <div class=\"d-none d-xl-block ps-2\">
                              <div>Welcome, ";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "first_name", [], "any", false, false, false, 162), "html", null, true);
            echo "</div>
                              <div class=\"mt-1 small text-muted\">Balance: ";
            // line 163
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "balance", [], "any", false, false, false, 163), twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 163));
            echo "</div>
                           </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                           <a href=\"";
            // line 167
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/profile");
            echo "\" class=\"dropdown-item\">";
            echo twig_escape_filter($this->env, __trans("Profile"), "html", null, true);
            echo "</a>
                           <a href=\"";
            // line 168
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/email");
            echo "\" class=\"dropdown-item\">";
            echo twig_escape_filter($this->env, __trans("Emails"), "html", null, true);
            echo "</a>
                           <a href=\"";
            // line 169
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/logout");
            echo "\" class=\"dropdown-item\">";
            echo twig_escape_filter($this->env, __trans("Sign out"), "html", null, true);
            echo "</a>
                        </div>
                     </div>
                     ";
        }
        // line 173
        echo "                  </div>
               </div>
            </header>
            <header class=\"navbar-expand-md d-print-none\">
               <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                  <div class=\"navbar\">
                     <div class=\"container-xl\">
                        <ul class=\"navbar-nav\">
\t\t\t\t\t\t   ";
        // line 181
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_home", [], "any", false, false, false, 181)) {
            // line 182
            echo "                           ";
            if (($context["client"] ?? null)) {
                // line 183
                echo "                           <li class=\"nav-item";
                if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 183) == "")) {
                    echo " active";
                }
                echo "\">
                              <a class=\"nav-link\" href=\"";
                // line 184
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
                echo "\">
                                 <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                       <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                       <path d=\"M5 12l-2 0l9 -9l9 9l-2 0\" />
                                       <path d=\"M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7\" />
                                       <path d=\"M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6\" />
                                    </svg>
                                 </span>
                                 <span class=\"nav-link-title\">
                                 ";
                // line 194
                echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
                echo "
                                 </span>
                              </a>
                           </li>
                           ";
            } else {
                // line 199
                echo "                           <li class=\"nav-item";
                if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 199) == "")) {
                    echo " active";
                }
                echo "\">
                              <a class=\"nav-link\" href=\"";
                // line 200
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
                echo "\">
                                 <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                       <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                                       <path d=\"M5 12l-2 0l9 -9l9 9l-2 0\" />
                                       <path d=\"M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7\" />
                                       <path d=\"M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6\" />
                                    </svg>
                                 </span>
                                 <span class=\"nav-link-title\">
                                 ";
                // line 210
                echo twig_escape_filter($this->env, __trans("Home"), "html", null, true);
                echo "
                                 </span>
                              </a>
                           </li>
\t\t\t\t\t\t   ";
            }
            // line 215
            echo "                           ";
        }
        // line 216
        echo "\t\t\t\t\t\t   ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_order", [], "any", false, false, false, 216)) {
            // line 217
            echo "                           <li class=\"nav-item";
            if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 217) == "/order")) {
                echo " active";
            }
            echo "\">
                              <a class=\"nav-link\" href=\"";
            // line 218
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
            echo "\">
                                 <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                       <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                       <path d=\"M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path>
                                       <path d=\"M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path>
                                       <path d=\"M17 17h-11v-14h-2\"></path>
                                       <path d=\"M6 5l14 1l-1 7h-13\"></path>
                                    </svg>
                                 </span>
                                 <span class=\"nav-link-title\">
                                 ";
            // line 229
            echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
            echo "
                                 </span>
                              </a>
                           </li>
                           ";
        }
        // line 234
        echo "                           ";
        if (($context["client"] ?? null)) {
            // line 235
            echo "\t\t\t\t\t\t   ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_services", [], "any", false, false, false, 235)) {
                // line 236
                echo "                           <li class=\"nav-item";
                if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 236) == "/order/service")) {
                    echo " active";
                }
                echo "\">
                              <a class=\"nav-link\" href=\"";
                // line 237
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order/service");
                echo "\">
                                 <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                       <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                       <path d=\"M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z\"></path>
                                       <path d=\"M3 12m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z\"></path>
                                       <path d=\"M7 8l0 .01\"></path>
                                       <path d=\"M7 16l0 .01\"></path>
                                    </svg>
                                 </span>
                                 <span class=\"nav-link-title\">
                                 ";
                // line 248
                echo twig_escape_filter($this->env, __trans("Services"), "html", null, true);
                echo "
                                 </span>
                              </a>
                           </li>
                           ";
            }
            // line 253
            echo "\t\t\t\t\t\t   ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_invoices", [], "any", false, false, false, 253)) {
                // line 254
                echo "                           <li class=\"nav-item";
                if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 254) == "/invoice")) {
                    echo " active";
                }
                echo "\">
                              <a class=\"nav-link\" href=\"";
                // line 255
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/invoice");
                echo "\">
                                 <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                       <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                       <path d=\"M14 3v4a1 1 0 0 0 1 1h4\"></path>
                                       <path d=\"M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z\"></path>
                                       <path d=\"M9 7l1 0\"></path>
                                       <path d=\"M9 13l6 0\"></path>
                                       <path d=\"M13 17l2 0\"></path>
                                    </svg>
                                 </span>
                                 <span class=\"nav-link-title\">
                                 ";
                // line 267
                echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
                echo "
                                 </span>
                              </a>
                           </li>
                           ";
            }
            // line 272
            echo "\t\t\t\t\t\t   ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_payments", [], "any", false, false, false, 272)) {
                // line 273
                echo "                           <li class=\"nav-item";
                if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 273) == "/client/balance")) {
                    echo " active";
                }
                echo "\">
                              <a class=\"nav-link\" href=\"";
                // line 274
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/client/balance");
                echo "\">
                                 <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                       <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                       <path d=\"M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2\"></path>
                                       <path d=\"M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z\"></path>
                                       <path d=\"M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5\"></path>
                                       <path d=\"M12 17v1m0 -8v1\"></path>
                                    </svg>
                                 </span>
                                 <span class=\"nav-link-title\">
                                 ";
                // line 285
                echo twig_escape_filter($this->env, __trans("Payment history"), "html", null, true);
                echo "
                                 </span>
                              </a>
                           </li>
                           ";
            }
            // line 290
            echo "\t\t\t\t\t\t   ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_support", [], "any", false, false, false, 290)) {
                // line 291
                echo "                           <li class=\"nav-item dropdown";
                if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 291) == "/support")) {
                    echo " active";
                }
                echo "\">
                              <a class=\"nav-link dropdown-toggle\" href=\"#support\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\" >
                                 <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                       <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                       <path d=\"M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0\"></path>
                                       <path d=\"M12 17l0 .01\"></path>
                                       <path d=\"M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4\"></path>
                                    </svg>
                                 </span>
                                 <span class=\"nav-link-title\">
                                 ";
                // line 302
                echo twig_escape_filter($this->env, __trans("Support"), "html", null, true);
                echo "
                                 </span>
                              </a>
                              <div class=\"dropdown-menu\">
                                 ";
                // line 306
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_tickets", [], "any", false, false, false, 306)) {
                    // line 307
                    echo "                                 <a class=\"dropdown-item\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/support");
                    echo "\">
                                 ";
                    // line 308
                    echo twig_escape_filter($this->env, __trans("Support"), "html", null, true);
                    echo "
                                 </a>
                                 ";
                }
                // line 311
                echo "                                 ";
                if ((twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "news"]], "method", false, false, false, 311) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_news", [], "any", false, false, false, 311))) {
                    // line 312
                    echo "                                 <a class=\"dropdown-item\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
                    echo "\">
                                 ";
                    // line 313
                    echo twig_escape_filter($this->env, __trans("Announcements"), "html", null, true);
                    echo "
                                 </a>
                                 ";
                }
                // line 316
                echo "                                 ";
                if ((twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "support_kb_enabled", [], "method", false, false, false, 316) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_kb", [], "any", false, false, false, 316))) {
                    // line 317
                    echo "                                 <a class=\"dropdown-item\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/kb");
                    echo "\">
                                 ";
                    // line 318
                    echo twig_escape_filter($this->env, __trans("Knowledge base"), "html", null, true);
                    echo "
                                 </a>
                                 ";
                }
                // line 321
                echo "                              </div>
                           </li>
                           ";
            }
            // line 324
            echo "                           ";
        }
        // line 325
        echo "                           ";
        if ( !($context["client"] ?? null)) {
            // line 326
            echo "\t\t\t\t\t\t   ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_support", [], "any", false, false, false, 326)) {
                // line 327
                echo "                           <li class=\"nav-item dropdown\">
                              <a class=\"nav-link dropdown-toggle\" href=\"#navbar-help\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\" >
                                 <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                       <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                       <path d=\"M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0\"></path>
                                       <path d=\"M12 17l0 .01\"></path>
                                       <path d=\"M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4\"></path>
                                    </svg>
                                 </span>
                                 <span class=\"nav-link-title\">
                                 ";
                // line 338
                echo twig_escape_filter($this->env, __trans("Support"), "html", null, true);
                echo "
                                 </span>
                              </a>
                              <div class=\"dropdown-menu\">
                                 ";
                // line 342
                if ((twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "news"]], "method", false, false, false, 342) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_news", [], "any", false, false, false, 342))) {
                    // line 343
                    echo "                                 <a class=\"dropdown-item\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
                    echo "\">
                                 ";
                    // line 344
                    echo twig_escape_filter($this->env, __trans("Announcements"), "html", null, true);
                    echo "
                                 </a>
                                 ";
                }
                // line 347
                echo "                                 ";
                if ((twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "support_kb_enabled", [], "method", false, false, false, 347) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_kb", [], "any", false, false, false, 347))) {
                    // line 348
                    echo "                                 <a class=\"dropdown-item\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/kb");
                    echo "\">
                                 ";
                    // line 349
                    echo twig_escape_filter($this->env, __trans("Knowledge base"), "html", null, true);
                    echo "
                                 </a>
                                 ";
                }
                // line 352
                echo "                                 <a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/support/contact-us");
                echo "\">
                                 ";
                // line 353
                echo twig_escape_filter($this->env, __trans("Contact us"), "html", null, true);
                echo "
                                 </a>
                              </div>
                           </li>
                           ";
            }
            // line 358
            echo "\t\t\t\t\t\t   ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_login", [], "any", false, false, false, 358)) {
                // line 359
                echo "                           <li class=\"nav-item\">
                              <a class=\"nav-link\" href=\"";
                // line 360
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login");
                echo "\">
                                 <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                       <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                       <path d=\"M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2\"></path>
                                       <path d=\"M20 12h-13l3 -3m0 6l-3 -3\"></path>
                                    </svg>
                                 </span>
                                 <span class=\"nav-link-title\">
                                 ";
                // line 369
                echo twig_escape_filter($this->env, __trans("Login"), "html", null, true);
                echo "
                                 </span>
                              </a>
                           </li>
                           ";
            }
            // line 374
            echo "\t\t\t\t\t\t   ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "main_menu_register", [], "any", false, false, false, 374)) {
                // line 375
                echo "                           <li class=\"nav-item\">
                              <a class=\"nav-link\" href=\"";
                // line 376
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("signup");
                echo "\">
                                 <span class=\"nav-link-icon d-md-none d-lg-inline-block\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                       <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                       <path d=\"M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0\"></path>
                                       <path d=\"M16 19h6\"></path>
                                       <path d=\"M19 16v6\"></path>
                                       <path d=\"M6 21v-2a4 4 0 0 1 4 -4h4\"></path>
                                    </svg>
                                 </span>
                                 <span class=\"nav-link-title\">
                                 ";
                // line 387
                echo twig_escape_filter($this->env, __trans("Register"), "html", null, true);
                echo "
                                 </span>
                              </a>
                           </li>
                           ";
            }
            // line 392
            echo "                           ";
        }
        // line 393
        echo "                        </ul>
                     </div>
                  </div>
               </div>
            </header>
         </div>
         <div class=\"page-wrapper\">
            <!-- Page header -->
            <div class=\"page-header d-print-none\">
               <div class=\"container-xl\">
                  <div class=\"row g-2 align-items-center mw-100\">
                     <div class=\"col\">
                        ";
        // line 405
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_breadcrumb", [], "any", false, false, false, 405)) {
            // line 406
            echo "                        ";
            $this->displayBlock('breadcrumbs', $context, $blocks);
            // line 416
            echo "                        ";
        }
        // line 417
        echo "                        <h2 class=\"page-title\">
                           <span class=\"text-truncate\">";
        // line 418
        $this->displayBlock('page_header', $context, $blocks);
        echo "</span>
                        </h2>
                        <div class=\"text-muted mt-1\">";
        // line 420
        $this->displayBlock('page_subheader', $context, $blocks);
        echo "</div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Page body -->
            <div class=\"page-body\">
               <div class=\"container-xl\">
                  ";
        // line 428
        $this->displayBlock('content_before', $context, $blocks);
        // line 429
        echo "                  ";
        $this->displayBlock('content', $context, $blocks);
        // line 430
        echo "                  <div class=\"row row-deck row-cards\">
                     ";
        // line 431
        $this->loadTemplate("partial_message.html.twig", "layout_default.html.twig", 431)->display($context);
        // line 432
        echo "                     ";
        if ( !($context["client"] ?? null)) {
            // line 433
            echo "                     ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 433))) {
                // line 434
                echo "                     <div class=\"col-md-4\">
                        <div class=\"card card-lg bg-red text-red-fg d-print-none\">
                           <div class=\"card-stamp\">
                              <div class=\"card-stamp-icon bg-white text-red\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                    <path d=\"M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path>
                                    <path d=\"M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0\"></path>
                                    <path d=\"M17 17h-11v-14h-2\"></path>
                                    <path d=\"M6 5l14 1l-1 7h-13\"></path>
                                 </svg>
                              </div>
                           </div>
                           <div class=\"card-body\">
                              <h2>";
                // line 448
                echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
                echo "</h2>
                              <p>";
                // line 449
                echo twig_escape_filter($this->env, __trans("Products and services"), "html", null, true);
                echo "</p>
                              <div class=\"row\">
                                 <div class=\"mt-2\">
                                    <a href=\"";
                // line 452
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
                echo "\" class=\"btn btn-outline-light w-100\">
                                    ";
                // line 453
                echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
                echo "
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class=\"col-md-4\">
                        <div class=\"card card-lg bg-azure text-azure-fg d-print-none\">
                           <div class=\"card-stamp\">
                              <div class=\"card-stamp-icon bg-white text-azure\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                    <path d=\"M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0\"></path>
                                    <path d=\"M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2\"></path>
                                 </svg>
                              </div>
                           </div>
                           <div class=\"card-body\">
                              <h2>";
                // line 472
                echo twig_escape_filter($this->env, __trans("Profile"), "html", null, true);
                echo "</h2>
                              <p>";
                // line 473
                echo twig_escape_filter($this->env, __trans("You are logged out"), "html", null, true);
                echo "</p>
                              <div class=\"row\">
                                 <div class=\"col-md-6 mt-2\">
                                    <a href=\"";
                // line 476
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/login");
                echo "\" class=\"btn btn-outline-light w-100\">
                                    ";
                // line 477
                echo twig_escape_filter($this->env, __trans("Login"), "html", null, true);
                echo "
                                    </a>
                                 </div>
                                 <div class=\"col-md-6 mt-2\">
                                    <a href=\"";
                // line 481
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/signup");
                echo "\" class=\"btn btn-outline-light w-100\">
                                    ";
                // line 482
                echo twig_escape_filter($this->env, __trans("Register"), "html", null, true);
                echo "
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class=\"col-md-4\">
                        <div class=\"card card-lg bg-green text-green-fg d-print-none\">
                           <div class=\"card-stamp\">
                              <div class=\"card-stamp-icon bg-white text-green\">
                                 <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                    <path d=\"M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11\"></path>
                                    <path d=\"M8 8l4 0\"></path>
                                    <path d=\"M8 12l4 0\"></path>
                                    <path d=\"M8 16l4 0\"></path>
                                 </svg>
                              </div>
                           </div>
                           <div class=\"card-body\">
                              <h2 >";
                // line 503
                echo twig_escape_filter($this->env, __trans("News"), "html", null, true);
                echo "</h2>
                              <p>";
                // line 504
                echo twig_escape_filter($this->env, __trans("Latest news and announcements"), "html", null, true);
                echo "</p>
                              <div class=\"row\">
                                 <div class=\"mt-2\">
                                    <a href=\"";
                // line 507
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
                echo "\" class=\"btn btn-outline-light w-100\">
                                    ";
                // line 508
                echo twig_escape_filter($this->env, __trans("Announcements"), "html", null, true);
                echo "
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     ";
            }
            // line 516
            echo "                     ";
        }
        // line 517
        echo "                     ";
        $this->displayBlock('content_after', $context, $blocks);
        // line 518
        echo "                  </div>
               </div>
            </div>
            <div id=\"push\"></div>
            ";
        // line 522
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_enabled", [], "any", false, false, false, 522)) {
            // line 523
            echo "            <footer class=\"footer footer-transparent d-print-none\">
               <div class=\"container-xl\">
                  <div class=\"row text-center align-items-center flex-row-reverse\">
                     ";
            // line 526
            $context["linksAvailable"] = false;
            // line 527
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 528
                echo "                     ";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), (("footer_link_" . $context["i"]) . "_enabled"), [], "any", false, false, false, 528)) {
                    // line 529
                    echo "                     ";
                    $context["linksAvailable"] = true;
                    // line 530
                    echo "                     ";
                }
                // line 531
                echo "                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 532
            echo "                     ";
            if (($context["linksAvailable"] ?? null)) {
                // line 533
                echo "                     <div class=\"col-lg-auto ms-lg-auto\">
                        <ul class=\"list-inline list-inline-dots mb-0\">
                           ";
                // line 535
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_enabled", [], "any", false, false, false, 535)) {
                    // line 536
                    echo "                           ";
                    if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 536)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 536)))) {
                        // line 537
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 537), "html", null, true);
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_title", [], "any", false, false, false, 537), "html", null, true);
                        echo "</a></li>
                           ";
                    } else {
                        // line 539
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 539));
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_title", [], "any", false, false, false, 539), "html", null, true);
                        echo "</a></li>
                           ";
                    }
                    // line 541
                    echo "                           ";
                }
                echo "\t  
                           ";
                // line 542
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_enabled", [], "any", false, false, false, 542)) {
                    // line 543
                    echo "                           ";
                    if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 543)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 543)))) {
                        // line 544
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 544), "html", null, true);
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_title", [], "any", false, false, false, 544), "html", null, true);
                        echo "</a></li>
                           ";
                    } else {
                        // line 546
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 546));
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_title", [], "any", false, false, false, 546), "html", null, true);
                        echo "</a></li>
                           ";
                    }
                    // line 548
                    echo "                           ";
                }
                echo "\t
                           ";
                // line 549
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_enabled", [], "any", false, false, false, 549)) {
                    // line 550
                    echo "                           ";
                    if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 550)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 550)))) {
                        // line 551
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 551), "html", null, true);
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_title", [], "any", false, false, false, 551), "html", null, true);
                        echo "</a></li>
                           ";
                    } else {
                        // line 553
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 553));
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_title", [], "any", false, false, false, 553), "html", null, true);
                        echo "</a></li>
                           ";
                    }
                    // line 555
                    echo "                           ";
                }
                echo "\t
                           ";
                // line 556
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_enabled", [], "any", false, false, false, 556)) {
                    // line 557
                    echo "                           ";
                    if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 557)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 557)))) {
                        // line 558
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 558), "html", null, true);
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_title", [], "any", false, false, false, 558), "html", null, true);
                        echo "</a></li>
                           ";
                    } else {
                        // line 560
                        echo "                           <li class=\"list-inline-item\"><a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 560));
                        echo "\" class=\"link-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_title", [], "any", false, false, false, 560), "html", null, true);
                        echo "</a></li>
                           ";
                    }
                    // line 562
                    echo "                           ";
                }
                echo "\t
                        </ul>
                     </div>
                     ";
            }
            // line 565
            echo "\t
                     <div class=\"col-12 col-lg-auto mt-3 mt-lg-0\">
                        <ul class=\"list-inline list-inline-dots mb-0\">
                           <li class=\"list-inline-item\">
                              &copy; ";
            // line 569
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, ($context["now"] ?? null), "medium", "yyyy"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", true, true, false, 569)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", false, false, false, 569), twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 569))) : (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 569))), "html", null, true);
            echo "
                           </li>
                           ";
            // line 571
            if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "branding"]], "method", false, false, false, 571)) {
                // line 572
                echo "                           <li class=\"list-inline-item\">
                              <a href=\"https://fossbilling.org\" title=\"Billing Software\" target=\"_blank\">";
                // line 573
                echo twig_escape_filter($this->env, __trans("Powered by the FOSSBilling Community"), "html", null, true);
                echo "</a>
                           </li>
                           ";
            }
            // line 576
            echo "                        </ul>
                     </div>
                  </div>
               </div>
            </footer>
            ";
        }
        // line 582
        echo "         </div>
      </div>
      <div class=\"wait\" style=\"display:none\" onclick=\"\$(this).hide();\">
         <div class=\"popup_block\" style=\"position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: black; opacity: 0.5; -webkit-opacity: 0.5; -moz-opacity: 0.5; filter :  alpha(opacity=50); z-index: 2000\">
            <img alt=\"loading gif\" src=\"";
        // line 586
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "img/loader.gif");
        echo "\" style=\"position: absolute; display: block; margin-left: auto; margin-right: auto; position: relative; top: 50%; opacity: 1; filter: alpha(opacity=100); z-index: 1003\">
         </div>
      </div>
      <noscript>NOTE: Many features on FOSSBilling require Javascript and cookies. You can enable both via your browser's preference settings.</noscript>
      ";
    }

    // line 406
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 407
        echo "                        <div class=\"mb-1\">
                           <ol class=\"breadcrumb\" aria-label=\"breadcrumbs\">
                              <li class=\"breadcrumb-item\"><a href=\"";
        // line 409
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Home"), "html", null, true);
        echo "</a></li>
                              ";
        // line 410
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 413
        echo "                           </ol>
                        </div>
                        ";
    }

    // line 410
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 411
        echo "                              <li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
        echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
        echo "</a></li>
                              ";
    }

    // line 418
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 420
    public function block_page_subheader($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 428
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 429
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 517
    public function block_content_after($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 595
    public function block_footerjs($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout_default.html.twig";
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
        return array (  1409 => 595,  1403 => 517,  1397 => 429,  1391 => 428,  1385 => 420,  1379 => 418,  1372 => 411,  1368 => 410,  1362 => 413,  1360 => 410,  1354 => 409,  1350 => 407,  1346 => 406,  1337 => 586,  1331 => 582,  1323 => 576,  1317 => 573,  1314 => 572,  1312 => 571,  1305 => 569,  1299 => 565,  1291 => 562,  1283 => 560,  1275 => 558,  1272 => 557,  1270 => 556,  1265 => 555,  1257 => 553,  1249 => 551,  1246 => 550,  1244 => 549,  1239 => 548,  1231 => 546,  1223 => 544,  1220 => 543,  1218 => 542,  1213 => 541,  1205 => 539,  1197 => 537,  1194 => 536,  1192 => 535,  1188 => 533,  1185 => 532,  1179 => 531,  1176 => 530,  1173 => 529,  1170 => 528,  1165 => 527,  1163 => 526,  1158 => 523,  1156 => 522,  1150 => 518,  1147 => 517,  1144 => 516,  1133 => 508,  1129 => 507,  1123 => 504,  1119 => 503,  1095 => 482,  1091 => 481,  1084 => 477,  1080 => 476,  1074 => 473,  1070 => 472,  1048 => 453,  1044 => 452,  1038 => 449,  1034 => 448,  1018 => 434,  1015 => 433,  1012 => 432,  1010 => 431,  1007 => 430,  1004 => 429,  1002 => 428,  991 => 420,  986 => 418,  983 => 417,  980 => 416,  977 => 406,  975 => 405,  961 => 393,  958 => 392,  950 => 387,  936 => 376,  933 => 375,  930 => 374,  922 => 369,  910 => 360,  907 => 359,  904 => 358,  896 => 353,  891 => 352,  885 => 349,  880 => 348,  877 => 347,  871 => 344,  866 => 343,  864 => 342,  857 => 338,  844 => 327,  841 => 326,  838 => 325,  835 => 324,  830 => 321,  824 => 318,  819 => 317,  816 => 316,  810 => 313,  805 => 312,  802 => 311,  796 => 308,  791 => 307,  789 => 306,  782 => 302,  765 => 291,  762 => 290,  754 => 285,  740 => 274,  733 => 273,  730 => 272,  722 => 267,  707 => 255,  700 => 254,  697 => 253,  689 => 248,  675 => 237,  668 => 236,  665 => 235,  662 => 234,  654 => 229,  640 => 218,  633 => 217,  630 => 216,  627 => 215,  619 => 210,  606 => 200,  599 => 199,  591 => 194,  578 => 184,  571 => 183,  568 => 182,  566 => 181,  556 => 173,  547 => 169,  541 => 168,  535 => 167,  528 => 163,  524 => 162,  519 => 160,  515 => 158,  513 => 157,  492 => 138,  486 => 135,  475 => 127,  470 => 125,  460 => 119,  457 => 118,  452 => 115,  446 => 114,  436 => 112,  433 => 111,  430 => 110,  426 => 109,  417 => 107,  411 => 105,  408 => 104,  402 => 103,  399 => 102,  396 => 101,  393 => 100,  390 => 99,  388 => 98,  382 => 94,  376 => 93,  373 => 92,  362 => 88,  358 => 87,  355 => 86,  353 => 85,  342 => 80,  335 => 76,  317 => 74,  315 => 73,  310 => 70,  307 => 69,  304 => 68,  301 => 67,  298 => 66,  291 => 62,  287 => 60,  285 => 59,  276 => 52,  272 => 51,  266 => 45,  260 => 44,  254 => 25,  247 => 17,  240 => 7,  231 => 596,  228 => 595,  217 => 594,  211 => 592,  208 => 591,  205 => 51,  202 => 50,  191 => 49,  189 => 48,  185 => 46,  182 => 45,  180 => 44,  167 => 34,  163 => 33,  159 => 32,  155 => 31,  147 => 30,  139 => 29,  131 => 28,  123 => 27,  120 => 26,  118 => 25,  114 => 24,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  67 => 7,  54 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout_default.html.twig", "/var/www/themes/infobia/html/layout_default.html.twig");
    }
}
