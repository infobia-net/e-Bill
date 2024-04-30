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
class __TwigTemplate_c1bc90363b97e67bbd06f03d6c8f5864 extends Template
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
            'head' => [$this, 'block_head'],
            'content_wide' => [$this, 'block_content_wide'],
            'nav' => [$this, 'block_nav'],
            'before_content' => [$this, 'block_before_content'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'top_content' => [$this, 'block_top_content'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "layout_default.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["profile"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "profile_get", [], "any", false, false, false, 3);
        // line 4
        $context["company"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 4);
        // line 5
        echo "
<!DOCTYPE html>
<html lang=\"\">

<head>
    <title>";
        // line 10
        $this->displayBlock('meta_title', $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "</title>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"csrf-token\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">

    <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "favicon_url", [], "any", false, false, false, 16), "html", null, true);
        echo "\">

    ";
        // line 18
        $this->loadTemplate("partial_bb_meta.html.twig", "layout_default.html.twig", 18)->display($context);
        // line 19
        echo "
    ";
        // line 20
        echo $this->env->getFunction('encore_entry_link_tags')->getCallable()("fossbilling");
        echo "
    ";
        // line 21
        echo $this->extensions['Box_TwigExtensions']->twig_script_tag($this->extensions['Box_TwigExtensions']->twig_library_url("Api/API.js"));
        echo "
    ";
        // line 22
        echo $this->env->getFunction('encore_entry_script_tags')->getCallable()("fossbilling");
        echo "
    ";
        // line 23
        echo $this->extensions['FOSSBilling\TwigExtensions\DebugBar']->renderHead();
        echo "

    ";
        // line 25
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "</head>

<body data-bs-theme=\"dark\">
    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.body.setAttribute(\"data-bs-theme\", localStorage.getItem('theme'));
        } else {
            document.body.removeAttribute(\"data-bs-theme\");
        }

        ";
        // line 36
        if ( !($context["admin"] ?? null)) {
            // line 37
            echo "            \$(function () {
                bb.redirect(\"";
            // line 38
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/login");
            echo "\");
            });
        ";
        } else {
            // line 41
            echo "    </script>
    ";
            // line 42
            if (($context["hide_menu"] ?? null)) {
                // line 43
                echo "    ";
                $this->displayBlock('content_wide', $context, $blocks);
                // line 44
                echo "    ";
            } else {
                // line 45
                echo "    <div class=\"page\">
        ";
                // line 46
                $this->displayBlock('nav', $context, $blocks);
                // line 47
                echo "        <div class=\"page-wrapper\">
            ";
                // line 48
                $this->displayBlock('before_content', $context, $blocks);
                // line 49
                echo "            <header class=\"navbar navbar-expand-lg navbar-light d-print-none\">
               <div class=\"container-xl\">
                   <div class=\"d-flex gap-3 align-items-center\">
                       <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" aria-controls=\"navbar-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                           <span class=\"navbar-toggler-icon\"></span>
                       </button>
                       <h1 class=\"d-none d-sm-flex navbar-brand d-none-navbar-horizontal pe-0 pe-md-3 a\">
                           <a href=\"";
                // line 56
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
                echo "\">
                               <img class=\"navbar-brand-image hide-theme-light\" src=\"";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url_dark", [], "any", false, false, false, 57), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 57), "html", null, true);
                echo "\">
                               <img class=\"navbar-brand-image hide-theme-dark\" src=\"";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 58), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 58), "html", null, true);
                echo "\">
                           </a>
                       </h1>
                   </div>
                  <div class=\"navbar-nav flex-row order-md-last gap-2\">
                    ";
                // line 63
                $context["languages"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_languages", [true], "method", false, false, false, 63);
                // line 64
                echo "                    ";
                if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
                    // line 65
                    echo "                    <div class=\"nav-item\">
                        <select name=\"lang\" class=\"form-select js-language-selector\">
                            ";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                        // line 68
                        echo "                                <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 68), "html", null, true);
                        echo "\" data-custom-properties=\"&lt;span class=&quot;flag flag-country-";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($__internal_compile_0 = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 68), "_")) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[1] ?? null) : null)), "html", null, true);
                        echo " &quot;&gt;&lt;/span&gt;\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "title", [], "any", false, false, false, 68), "html", null, true);
                        echo "</option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "                        </select>
                    </div>
                    ";
                }
                // line 73
                echo "                     <div class=\"nav-item d-none d-sm-flex\">
                        <div class=\"btn-list gap-2\">
                           <a href=\"https://github.com/FOSSBilling/FOSSBilling\" class=\"btn px-3\" target=\"_blank\" rel=\"noreferrer\">
                              <svg class=\"icon icon-tabler icon-tabler-arrow-back-up m-0\">
                                 <use xlink:href=\"#brand-github\" />
                              </svg>
                              <span class=\"d-none d-md-block ms-2\">";
                // line 79
                echo twig_escape_filter($this->env, __trans("Source code"), "html", null, true);
                echo "</span>
                           </a>
                           <a href=\"https://github.com/sponsors/FOSSBilling\" class=\"btn px-3\" target=\"_blank\" rel=\"noreferrer\">
                              <svg class=\"icon icon-tabler icon-tabler-heart m-0 text-pink\">
                                 <use xlink:href=\"#heart\" />
                              </svg>
                              <span class=\"d-none d-md-block ms-2\">";
                // line 85
                echo twig_escape_filter($this->env, __trans("Sponsor"), "html", null, true);
                echo "</span>
                           </a>
                        </div>
                     </div>
                      <div class=\"nav-item\">
                        <a class=\"nav-link px-0 hide-theme-dark js-theme-toggler\"
                           href=\"?theme=dark\"
                           data-bs-toggle=\"tooltip\"
                           data-bs-placement=\"bottom\"
                           data-bs-original-title=\"";
                // line 94
                echo twig_escape_filter($this->env, __trans("Enable dark mode"), "html", null, true);
                echo "\">
                           <svg class=\"icon text-dark\">
                              <use xlink:href=\"#moon\" />
                           </svg>
                        </a>
                        <a class=\"nav-link px-0 hide-theme-light js-theme-toggler\"
                           href=\"?theme=light\"
                           data-bs-toggle=\"tooltip\"
                           data-bs-placement=\"bottom\"
                           data-bs-original-title=\"";
                // line 103
                echo twig_escape_filter($this->env, __trans("Enable light mode"), "html", null, true);
                echo "\">
                           <svg class=\"icon text-white\">
                              <use xlink:href=\"#sun\" />
                           </svg>
                        </a>
                     </div>
                     <div class=\"nav-item dropdown\">
                        <a class=\"nav-link d-flex lh-1 text-reset p-0\"
                           href=\"";
                // line 111
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/profile");
                echo "\"
                           data-bs-toggle=\"dropdown\"
                           aria-label=\"Open user menu\"
                           aria-expanded=\"false\">
                           <span class=\"avatar avatar-sm\" style=\"background-image: url(";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 115)), "html", null, true);
                echo "&size=32)\"></span>
                           <div class=\"d-none d-xl-block ps-2\">
                              <div>";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "name", [], "any", false, false, false, 117), "html", null, true);
                echo "</div>
                              <div class=\"mt-1 small text-muted\">";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "role", [], "any", false, false, false, 118), "html", null, true);
                echo "</div>
                           </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                           <a class=\"dropdown-item\"
                              href=\"";
                // line 123
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/profile");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Profile"), "html", null, true);
                echo "</a>
                           <a class=\"dropdown-item\"
                              href=\"";
                // line 125
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
                echo "</a>
                           <div class=\"dropdown-divider\"></div>
                           <a class=\"dropdown-item api-link\"
                              href=\"";
                // line 128
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/profile/logout", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
                echo "\"
                              data-api-redirect=\"";
                // line 129
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/login");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Logout"), "html", null, true);
                echo "</a>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
            <header class=\"navbar-expand-lg\">
                <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                    <div class=\"navbar navbar-light\">
                        <div class=\"container-xl\">
                             ";
                // line 139
                $context["navigation"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_get_navigation", [["url" => twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_current_url", [], "any", false, false, false, 139)]], "method", false, false, false, 139);
                // line 140
                echo "                             <ul class=\"navbar-nav\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 142
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
                echo "\">
                                        <span class=\"d-none d-xxl-block me-1\">
                                            <svg class=\"icon\">
                                                <use xlink:href=\"#home\" />
                                            </svg>
                                        </span>
                                        <span>";
                // line 148
                echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
                echo "</span>
                                    </a>
                                  </li>
                             ";
                // line 151
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["navigation"] ?? null));
                foreach ($context['_seq'] as $context["location"] => $context["group"]) {
                    // line 152
                    echo "                             ";
                    if (twig_get_attribute($this->env, $this->source, $context["group"], "subpages", [], "any", false, false, false, 152)) {
                        // line 153
                        echo "                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#navbar-base\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\" >
                                        <svg class=\"icon icon-tabler icon-tabler-arrow-back-up d-none d-xxl-block me-1\">
                                            <use xlink:href=\"#";
                        // line 156
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "class", [], "any", false, false, false, 156), "html", null, true);
                        echo "\" />
                                         </svg>
                                        <span class=\"nav-link-title\">";
                        // line 158
                        echo twig_escape_filter($this->env, __trans(twig_get_attribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 158)), "html", null, true);
                        echo "</span>
                                      </a>
                                      <div class=\"dropdown-menu\">
                                        <div class=\"dropdown-menu-columns\">
                                            <div class=\"dropdown-menu-column\">
                                                ";
                        // line 163
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "subpages", [], "any", false, false, false, 163));
                        foreach ($context['_seq'] as $context["_key"] => $context["subpage"]) {
                            // line 164
                            echo "                                                <a class=\"dropdown-item\" href=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subpage"], "uri", [], "any", false, false, false, 164), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, __trans(twig_get_attribute($this->env, $this->source, $context["subpage"], "label", [], "any", false, false, false, 164)), "html", null, true);
                            echo "</a>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 166
                        echo "                                            </div>
                                        </div>
                                    </div>
                                </li>
                            ";
                    }
                    // line 171
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['location'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#navbar-base\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\" >
                                    <svg class=\"icon icon-tabler icon-tabler-arrow-back-up d-none d-xxl-block me-1\">
                                        <use xlink:href=\"#help\" />
                                     </svg>
                                    <span class=\"nav-link-title\">";
                // line 177
                echo twig_escape_filter($this->env, __trans("Help"), "html", null, true);
                echo "</span>
                                  </a>
                                  <div class=\"dropdown-menu\">
                                    <div class=\"dropdown-menu-columns\">
                                        <div class=\"dropdown-menu-column\">
                                            <a class=\"dropdown-item\" href=\"https://fossbilling.org/docs\" target=\"_blank\" rel=\"noopener\">";
                // line 182
                echo twig_escape_filter($this->env, __trans("Documentation"), "html", null, true);
                echo "</a>
                                            <a class=\"dropdown-item\" href=\"https://github.com/FOSSBilling/FOSSBilling\" target=\"_blank\" rel=\"noopener\">";
                // line 183
                echo twig_escape_filter($this->env, __trans("Source code"), "html", null, true);
                echo "</a>
                                            <a class=\"dropdown-item\" href=\"https://github.com/FOSSBilling/FOSSBilling/issues\" target=\"_blank\" rel=\"noopener\">";
                // line 184
                echo twig_escape_filter($this->env, __trans("Report a bug"), "html", null, true);
                echo "</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                  </div>
            </header>
            <main class=\"page-body\">
                <div class=\"container-xl\">
                    <nav class=\"mb-3\" aria-label=\"breadcrumb\">
                        ";
                // line 197
                $this->displayBlock('breadcrumbs', $context, $blocks);
                // line 209
                echo "                    </nav>
                    ";
                // line 210
                $this->displayBlock('top_content', $context, $blocks);
                // line 211
                echo "                    ";
                $this->displayBlock('content', $context, $blocks);
                // line 212
                echo "                </div>
            </main>

            <footer class=\"footer footer-transparent d-print-none\">
                <div class=\"container-xl\">
                    <div>Copyright &copy; ";
                // line 217
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, ($context["now"] ?? null), "medium", "yyyy"), "html", null, true);
                echo ". All rights reserved. Powered by <a href=\"https://fossbilling.org\" title=\"Billing system\" target=\"_blank\" rel=\"noopener\">FOSSBilling ";
                echo twig_escape_filter($this->env, ($context["FOSSBillingVersion"] ?? null), "html", null, true);
                echo "</a></div>
                </div>
            </footer>
        </div>
    </div>
    ";
            }
            // line 223
            echo "
    <div class=\"loading dim\"></div>

    <div class=\"d-none\">
        ";
            // line 227
            $this->loadTemplate("../build/symbol/icons-sprite.svg", "layout_default.html.twig", 227)->display($context);
            // line 228
            echo "    </div>

    <button type=\"button\" aria-label=\"Back to top\" class=\"btn btn-floating btn-lg btn-icon hidden\" id=\"back-to-top\">
        <svg class=\"icon\">
            <use xlink:href=\"#arrow-up\" />
        </svg>
    </button>

    ";
            // line 236
            $this->displayBlock('js', $context, $blocks);
            // line 237
            echo "
    <noscript id=\"noscript\">
        <div class=\"msg error\">NOTE: Many features on FOSSBilling require Javascript and cookies. You can enable both via your browser's preference settings.</div>
    </noscript>
    ";
        }
        // line 242
        echo "
    ";
        // line 243
        echo $this->extensions['FOSSBilling\TwigExtensions\DebugBar']->render();
        echo "

    <div class=\"toast-container position-fixed bottom-0 end-0 p-3\" style=\"z-index: 1070;\">
    </div>
</body>
</html>
";
    }

    // line 10
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 25
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 43
    public function block_content_wide($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 46
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 48
    public function block_before_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 197
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        echo "                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 200
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#home\" />
                                    </svg>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 206
        $this->displayBlock("meta_title", $context, $blocks);
        echo "</li>
                        </ol>
                        ";
    }

    // line 210
    public function block_top_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 211
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 236
    public function block_js($context, array $blocks = [])
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
        return array (  567 => 236,  561 => 211,  555 => 210,  548 => 206,  539 => 200,  535 => 198,  531 => 197,  525 => 48,  519 => 46,  513 => 43,  507 => 25,  501 => 10,  490 => 243,  487 => 242,  480 => 237,  478 => 236,  468 => 228,  466 => 227,  460 => 223,  449 => 217,  442 => 212,  439 => 211,  437 => 210,  434 => 209,  432 => 197,  416 => 184,  412 => 183,  408 => 182,  400 => 177,  393 => 172,  387 => 171,  380 => 166,  369 => 164,  365 => 163,  357 => 158,  352 => 156,  347 => 153,  344 => 152,  340 => 151,  334 => 148,  325 => 142,  321 => 140,  319 => 139,  304 => 129,  300 => 128,  292 => 125,  285 => 123,  277 => 118,  273 => 117,  268 => 115,  261 => 111,  250 => 103,  238 => 94,  226 => 85,  217 => 79,  209 => 73,  204 => 70,  191 => 68,  187 => 67,  183 => 65,  180 => 64,  178 => 63,  168 => 58,  162 => 57,  158 => 56,  149 => 49,  147 => 48,  144 => 47,  142 => 46,  139 => 45,  136 => 44,  133 => 43,  131 => 42,  128 => 41,  122 => 38,  119 => 37,  117 => 36,  105 => 26,  103 => 25,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  83 => 19,  81 => 18,  76 => 16,  71 => 14,  62 => 10,  55 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout_default.html.twig", "/var/www/themes/admin_default/html/layout_default.html.twig");
    }
}
