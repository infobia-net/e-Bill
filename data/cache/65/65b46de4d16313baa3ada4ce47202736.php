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
class __TwigTemplate_982a0640eb4cfd50b45077d0a2c10d88 extends Template
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
            'body_class' => [$this, 'block_body_class'],
            'body' => [$this, 'block_body'],
            'content_before' => [$this, 'block_content_before'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
            'content_after' => [$this, 'block_content_after'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" data-bs-theme=\"";
        // line 2
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "theme", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "theme", [], "any", false, false, false, 2), "light")) : ("light")), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('meta_title', $context, $blocks);
        echo "</title>

    <meta property=\"bb:url\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("SYSTEM_URL"), "html", null, true);
        echo "\">
    <meta property=\"bb:client_area\" content=\"";
        // line 8
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\">
    <meta name=\"csrf-token\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">

    <meta name=\"description\" content=\"";
        // line 11
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">
    <meta name=\"robots\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_robots", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_author", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
    <meta name=\"generator\" content=\"FOSSBilling\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 17
        $this->displayBlock('opengraph', $context, $blocks);
        // line 18
        echo "    <link rel='stylesheet' type='text/css' href=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/font-awesome.css");
        echo "\">
    ";
        // line 19
        echo $this->env->getFunction('encore_entry_link_tags')->getCallable()("huraga");
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 20), "favicon_url", [], "any", false, false, false, 20), "html", null, true);
        echo "\">

    ";
        // line 22
        echo $this->extensions['Box_TwigExtensions']->twig_script_tag($this->extensions['Box_TwigExtensions']->twig_library_url("Api/API.js"));
        echo "
    ";
        // line 23
        echo $this->env->getFunction('encore_entry_script_tags')->getCallable()("huraga");
        echo "

    ";
        // line 25
        echo $this->extensions['FOSSBilling\TwigExtensions\DebugBar']->renderHead();
        echo "

    ";
        // line 27
        $this->displayBlock('head', $context, $blocks);
        // line 28
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 29
        echo "</head>

<body class=\"";
        // line 31
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">

";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 253
        echo "
    ";
        // line 254
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", false, false, false, 254)) {
            // line 255
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", false, false, false, 255);
            echo "
    ";
        }
        // line 257
        echo "    ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("partial_pending_messages.html.twig", "layout_default.html.twig", 257);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 258
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "cookieconsent"]], "method", false, false, false, 258)) {
            // line 259
            echo "        ";
            $__internal_compile_1 = null;
            try {
                $__internal_compile_1 =                 $this->loadTemplate("mod_cookieconsent_index.html.twig", "layout_default.html.twig", 259);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_1) {
                $__internal_compile_1->display($context);
            }
            // line 260
            echo "    ";
        }
        // line 261
        echo "</div>
";
        // line 262
        echo $this->extensions['FOSSBilling\TwigExtensions\DebugBar']->render();
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_title", [], "any", false, false, false, 5), "html", null, true);
    }

    // line 11
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_description", [], "any", false, false, false, 11), "html", null, true);
    }

    // line 17
    public function block_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 27
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 28
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 31
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        if (( !($context["client"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "require_login", [], "any", false, false, false, 34))) {
            // line 35
            echo "    <script>
        \$(function () {
            bb.redirect('";
            // line 37
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login");
            echo "');
        });
    </script>
";
        }
        // line 41
        echo "
";
        // line 42
        if (($context["client"] ?? null)) {
            // line 43
            echo "    ";
            $context["profile"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "profile_get", [], "any", false, false, false, 43);
        }
        // line 45
        $context["company"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 45);
        // line 46
        echo "
";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "theme", [], "any", false, false, false, 47) == "dark")) {
            // line 48
            echo "    ";
            $context["logo_url"] = twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url_dark", [], "any", false, false, false, 48);
        } else {
            // line 50
            echo "    ";
            $context["logo_url"] = twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 50);
        }
        // line 52
        echo "<div class=\"container\">
    <header>
        <nav class=\"navbar navbar-expand-md py-4\">
            <div class=\"container-fluid\">
                ";
        // line 56
        if ((($context["logo_url"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_company_logo", [], "any", false, false, false, 56))) {
            // line 57
            echo "                    <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
            echo "\">
                        <img class=\"d-none d-sm-block\" src=\"";
            // line 58
            echo twig_escape_filter($this->env, ($context["logo_url"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 58), "html", null, true);
            echo "\" height=\"45px\"
                             title=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 59), "html", null, true);
            echo "\">
                        <span class=\"d-sm-none\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 60), "html", null, true);
            echo "</span>
                    </a>
                ";
        } else {
            // line 63
            echo "                    <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
            echo "\">
                        <span>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 64), "html", null, true);
            echo "</span>
                    </a>
                ";
        }
        // line 67
        echo "                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                        data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <div class=\"navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-end\">


                        ";
        // line 76
        $context["languages"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_languages", [true], "method", false, false, false, 76);
        // line 77
        echo "                        ";
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 78
            echo "                            <li class=\"nav-item\">
                                <select name=\"lang\" class=\"form-select js-language-selector\">
                                    ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 81
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 81), "html", null, true);
                echo "\" data-custom-properties=\"&lt;span class=&quot;fi fi-";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($__internal_compile_2 = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 81), "_")) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null)), "html", null, true);
                echo "&quot;&gt;&lt;/span&gt;\">&nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "title", [], "any", false, false, false, 81), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                                </select>
                            </li>
                        ";
        }
        // line 86
        echo "
                        ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "top_menu_dashboard", [], "any", false, false, false, 87)) {
            // line 88
            echo "                            <li class=\"nav-item d-none d-md-block\">
                                <a class=\"nav-link\" href=\"";
            // line 89
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        // line 92
        echo "
                        ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "top_menu_order", [], "any", false, false, false, 93)) {
            // line 94
            echo "                            <li class=\"nav-item d-none d-md-block\">
                                <a class=\"nav-link\" href=\"";
            // line 95
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        // line 98
        echo "
                        ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "top_menu_profile", [], "any", false, false, false, 99)) {
            // line 100
            echo "                            <li class=\"nav-item d-none d-md-block\">
                                ";
            // line 101
            if ( !($context["client"] ?? null)) {
                // line 102
                echo "                                    <a class=\"nav-link\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Login"), "html", null, true);
                echo "</a>
                                ";
            }
            // line 104
            echo "                            </li>
                        ";
        }
        // line 106
        echo "
                        ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "top_menu_signout", [], "any", false, false, false, 107)) {
            // line 108
            echo "                            <li class=\"nav-item d-none d-md-block\">
                                ";
            // line 109
            if (($context["client"] ?? null)) {
                // line 110
                echo "                                    <div class=\"dropdown\">
                                        <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <img class=\"img-fluid rounded-circle\" alt=\"";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "first_name", [], "any", false, false, false, 112), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "last_name", [], "any", false, false, false, 112), "html", null, true);
                echo " gravatar\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 112), 60), "html", null, true);
                echo "\" height=\"25px\" width=\"25px\">
                                            ";
                // line 113
                if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "company", [], "any", false, false, false, 113)) {
                    // line 114
                    echo "                                                <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "first_name", [], "any", false, false, false, 114), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "last_name", [], "any", false, false, false, 114), "html", null, true);
                    echo "|";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "company", [], "any", false, false, false, 114), "html", null, true);
                    echo "</span>
                                            ";
                } else {
                    // line 116
                    echo "                                                <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "first_name", [], "any", false, false, false, 116), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "last_name", [], "any", false, false, false, 116), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 118
                echo "                                        </button>
                                        <ul class=\"dropdown-menu\">
                                            <li><a class=\"dropdown-item\"
                                                   href=\"";
                // line 121
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/profile");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Profile"), "html", null, true);
                echo "</a></li>
                                            <li><a class=\"dropdown-item\"
                                                   href=\"";
                // line 123
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/logout");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Sign out"), "html", null, true);
                echo "</a></li>
                                        </ul>
                                    </div>
                                ";
            } else {
                // line 127
                echo "                                    <a class=\"ms-2 btn btn-outline-primary d-none d-md-block\"
                                       href=\"";
                // line 128
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("signup");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Sign up"), "html", null, true);
                echo "</a>
                                ";
            }
            // line 130
            echo "                            </li>
                        ";
        }
        // line 132
        echo "
                        <div class=\"d-md-none\">
                            ";
        // line 134
        $this->loadTemplate("mobile_menu.html.twig", "layout_default.html.twig", 134)->display($context);
        // line 135
        echo "                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-3 d-none d-md-block\">
                ";
        // line 144
        $this->loadTemplate("partial_menu.html.twig", "layout_default.html.twig", 144)->display($context);
        // line 145
        echo "            </div>
            <div class=\"col-12 col-md-9\">
                <div id=\"wrapper\">
                    <section role=\"main\">
                        ";
        // line 149
        $this->displayBlock('content_before', $context, $blocks);
        // line 150
        echo "                        <div class=\"content-block\" role=\"main\">
                            ";
        // line 151
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_breadcrumb", [], "any", false, false, false, 151)) {
            // line 152
            echo "                                ";
            $this->displayBlock('breadcrumbs', $context, $blocks);
            // line 163
            echo "                            ";
        }
        // line 164
        echo "
                            ";
        // line 165
        $this->displayBlock('content', $context, $blocks);
        // line 166
        echo "
                            ";
        // line 167
        $this->loadTemplate("partial_message.html.twig", "layout_default.html.twig", 167)->display($context);
        // line 168
        echo "
                            ";
        // line 169
        $this->displayBlock('content_after', $context, $blocks);
        // line 170
        echo "                        </div>
                    </section>
                    <div id=\"push\"></div>
                </div>

                ";
        // line 175
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_enabled", [], "any", false, false, false, 175)) {
            // line 176
            echo "                    <footer id=\"footer\" class=\"small text-muted mt-2 mb-3\">
                        <div class=\"d-flex flex-column\">
                            <div class=\"d-flex justify-content-center\">
                                <span>&copy; ";
            // line 179
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, ($context["now"] ?? null), "medium", "yyyy"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", true, true, false, 179)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", false, false, false, 179), twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 179))) : (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 179))), "html", null, true);
            echo "
                                    ";
            // line 180
            if ((twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "bank_info_pagebottom", [], "any", false, false, false, 180) == 1)) {
                // line 181
                echo "                                        <br/>
                                        <b>";
                // line 182
                echo twig_escape_filter($this->env, __trans("Payment Information"), "html", null, true);
                echo "</b> - ";
                echo twig_escape_filter($this->env, __trans("Bank Name"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "bank_name", [], "any", false, false, false, 182), "html", null, true);
                echo " | ";
                echo twig_escape_filter($this->env, __trans("BIC / SWIFT Code"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "bic", [], "any", false, false, false, 182), "html", null, true);
                echo " | ";
                echo twig_escape_filter($this->env, __trans("Account Number"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "account_number", [], "any", false, false, false, 182), "html", null, true);
                echo "
                                    ";
            }
            // line 184
            echo "                                </span>
                            </div>
                            <div class=\"d-flex justify-content-center\">
                                ";
            // line 187
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_enabled", [], "any", false, false, false, 187)) {
                // line 188
                echo "                                    ";
                if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 188)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 188)))) {
                    // line 189
                    echo "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 190
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 190), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_title", [], "any", false, false, false, 190), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 192
                    echo "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 193
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 193));
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_title", [], "any", false, false, false, 193), "html", null, true);
                    echo "</a>
                                    ";
                }
                // line 195
                echo "                                ";
            }
            // line 196
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_enabled", [], "any", false, false, false, 196)) {
                // line 197
                echo "                                    &nbsp;&#x2022;&nbsp;
                                    ";
                // line 198
                if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 198)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 198)))) {
                    // line 199
                    echo "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 200
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 200), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_title", [], "any", false, false, false, 200), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 202
                    echo "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 203
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 203));
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_title", [], "any", false, false, false, 203), "html", null, true);
                    echo "</a>
                                    ";
                }
                // line 205
                echo "                                ";
            }
            // line 206
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_enabled", [], "any", false, false, false, 206)) {
                // line 207
                echo "                                    &nbsp;&#x2022;&nbsp;
                                    ";
                // line 208
                if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 208)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 208)))) {
                    // line 209
                    echo "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 210
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 210), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_title", [], "any", false, false, false, 210), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 212
                    echo "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 213
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 213));
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_title", [], "any", false, false, false, 213), "html", null, true);
                    echo "</a>
                                    ";
                }
                // line 215
                echo "                                ";
            }
            // line 216
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_enabled", [], "any", false, false, false, 216)) {
                // line 217
                echo "                                    &nbsp;&#x2022;&nbsp;
                                    ";
                // line 218
                if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 218)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 218)))) {
                    // line 219
                    echo "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 220
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 220), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_title", [], "any", false, false, false, 220), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 222
                    echo "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 223
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 223));
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_title", [], "any", false, false, false, 223), "html", null, true);
                    echo "</a>
                                    ";
                }
                // line 225
                echo "                                ";
            }
            // line 226
            echo "                            </div>
                            ";
            // line 227
            if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "branding"]], "method", false, false, false, 227)) {
                // line 228
                echo "                                <div class=\"d-flex justify-content-center\">
                                    <span>Powered by the&nbsp;</span>
                                    <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                        href=\"https://fossbilling.org\" title=\"Billing Software\"
                                       target=\"_blank\">";
                // line 232
                echo twig_escape_filter($this->env, __trans("FOSSBilling Community"), "html", null, true);
                echo "</a>
                                </div>
                            ";
            }
            // line 235
            echo "                        </div>
                    </footer>
                ";
        }
        // line 238
        echo "            </div>
        </div>
    </div>
    <div class=\"toast-container position-fixed bottom-0 end-0 p-3\" style=\"z-index: 1070;\"></div>
    ";
        // line 242
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_to_top_enabled", [], "any", false, false, false, 242)) {
            // line 243
            echo "        <a href=\"#top\" class=\"position-fixed btn btn-primary bottom-0 end-0 m-3\">
            <span class=\"awe-arrow-up\"></span> ";
            // line 244
            echo twig_escape_filter($this->env, __trans("Top"), "html", null, true);
            echo "</a>
    ";
        }
        // line 246
        echo "    <div class=\"wait\" style=\"display:none\" onclick=\"\$(this).hide();\">
        <div class=\"spinner-border\"
             style=\"width: 4rem; height: 4rem; top: 50%; left: 50%; position: fixed; z-index: 999\"></div>
    </div>
    <noscript>NOTE: Many features on FOSSBilling require Javascript and cookies. You can enable both via your browser's preference settings.</noscript>

    ";
    }

    // line 149
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 152
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb d-none d-md-flex\">
                                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 155
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Home"), "html", null, true);
        echo "</a>
                                            </li>
                                            ";
        // line 157
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 160
        echo "                                        </ol>
                                    </nav>
                                ";
    }

    // line 157
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "                                                <li class=\"active breadcrumb-item\">";
        echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
        echo "</li>
                                            ";
    }

    // line 165
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 169
    public function block_content_after($context, array $blocks = [])
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
        return array (  794 => 169,  788 => 165,  781 => 158,  777 => 157,  771 => 160,  769 => 157,  762 => 155,  758 => 153,  754 => 152,  748 => 149,  738 => 246,  733 => 244,  730 => 243,  728 => 242,  722 => 238,  717 => 235,  711 => 232,  705 => 228,  703 => 227,  700 => 226,  697 => 225,  690 => 223,  687 => 222,  680 => 220,  677 => 219,  675 => 218,  672 => 217,  669 => 216,  666 => 215,  659 => 213,  656 => 212,  649 => 210,  646 => 209,  644 => 208,  641 => 207,  638 => 206,  635 => 205,  628 => 203,  625 => 202,  618 => 200,  615 => 199,  613 => 198,  610 => 197,  607 => 196,  604 => 195,  597 => 193,  594 => 192,  587 => 190,  584 => 189,  581 => 188,  579 => 187,  574 => 184,  557 => 182,  554 => 181,  552 => 180,  546 => 179,  541 => 176,  539 => 175,  532 => 170,  530 => 169,  527 => 168,  525 => 167,  522 => 166,  520 => 165,  517 => 164,  514 => 163,  511 => 152,  509 => 151,  506 => 150,  504 => 149,  498 => 145,  496 => 144,  485 => 135,  483 => 134,  479 => 132,  475 => 130,  468 => 128,  465 => 127,  456 => 123,  449 => 121,  444 => 118,  436 => 116,  426 => 114,  424 => 113,  416 => 112,  412 => 110,  410 => 109,  407 => 108,  405 => 107,  402 => 106,  398 => 104,  390 => 102,  388 => 101,  385 => 100,  383 => 99,  380 => 98,  372 => 95,  369 => 94,  367 => 93,  364 => 92,  356 => 89,  353 => 88,  351 => 87,  348 => 86,  343 => 83,  330 => 81,  326 => 80,  322 => 78,  319 => 77,  317 => 76,  306 => 67,  300 => 64,  295 => 63,  289 => 60,  285 => 59,  279 => 58,  274 => 57,  272 => 56,  266 => 52,  262 => 50,  258 => 48,  256 => 47,  253 => 46,  251 => 45,  247 => 43,  245 => 42,  242 => 41,  235 => 37,  231 => 35,  229 => 34,  225 => 33,  219 => 31,  213 => 28,  207 => 27,  201 => 17,  194 => 11,  187 => 5,  179 => 262,  176 => 261,  173 => 260,  162 => 259,  159 => 258,  148 => 257,  142 => 255,  140 => 254,  137 => 253,  135 => 33,  130 => 31,  126 => 29,  123 => 28,  121 => 27,  116 => 25,  111 => 23,  107 => 22,  102 => 20,  98 => 19,  93 => 18,  91 => 17,  84 => 13,  80 => 12,  76 => 11,  71 => 9,  67 => 8,  63 => 7,  58 => 5,  52 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout_default.html.twig", "/var/www/themes/huraga/html/layout_default.html.twig");
    }
}
