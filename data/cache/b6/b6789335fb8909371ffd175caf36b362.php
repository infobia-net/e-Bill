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

/* mod_extension_languages.html.twig */
class __TwigTemplate_fd47033eed37b35b752f0b1baeed5db7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["active_menu"] = "extensions";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_extension_languages.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Manage translations"), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"card-tabs\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" href=\"#tab-index\" data-bs-toggle=\"tab\">";
        // line 11
        echo twig_escape_filter($this->env, __trans("Manage translations"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-new\" data-bs-toggle=\"tab\">
                    <svg class=\"icon me-2\">
                        <use xlink:href=\"#plus\" />
                    </svg>
                    ";
        // line 18
        echo twig_escape_filter($this->env, __trans("New translations"), "html", null, true);
        echo "
                </a>
            </li>
        </ul>
        <div class=\"card\">
            <div class=\"tab-content\">
                <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
                    <div class=\"container\">
                        <h2 class=\"mb-1 mt-1\">";
        // line 26
        echo twig_escape_filter($this->env, __trans("Enabled translations"), "html", null, true);
        echo "</h2>
                        <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                            <thead>
                            <tr>
                                <th>";
        // line 30
        echo twig_escape_filter($this->env, __trans("Country"), "html", null, true);
        echo "</th>
                                <th>";
        // line 31
        echo twig_escape_filter($this->env, __trans("Language"), "html", null, true);
        echo "</th>
                                <th>";
        // line 32
        echo twig_escape_filter($this->env, __trans("Completion"), "html", null, true);
        echo "</th>
                                <th>";
        // line 33
        echo twig_escape_filter($this->env, __trans("Code"), "html", null, true);
        echo "</th>
                                <th>";
        // line 34
        echo twig_escape_filter($this->env, __trans("Disable"), "html", null, true);
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_languages", [], "any", false, false, false, 38));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 39
            echo "                            <tr>
                                <td class=\"w-2\">
                                    <span class=\"flag flag-country-";
            // line 41
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($__internal_compile_0 = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 41), "_")) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[1] ?? null) : null)), "html", null, true);
            echo "\"></span>
                                </td>
                                <td class=\"w-6\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 45
            $context["progress"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_locale_completion", [["locale_id" => twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 45)]], "method", false, false, false, 45);
            // line 46
            echo "                                    ";
            if ((($context["progress"] ?? null) > 75)) {
                // line 47
                echo "                                        ";
                $context["background"] = "success";
                // line 48
                echo "                                    ";
            } elseif ((($context["progress"] ?? null) > 50)) {
                // line 49
                echo "                                        ";
                $context["background"] = "warning";
                // line 50
                echo "                                    ";
            } else {
                // line 51
                echo "                                        ";
                $context["background"] = "danger";
                // line 52
                echo "                                    ";
            }
            // line 53
            echo "                                    <div class=\"progress\" style=\"height: 15px;\">
                                        <div class=\"progress-bar bg-";
            // line 54
            echo twig_escape_filter($this->env, ($context["background"] ?? null), "html", null, true);
            echo "\" role=\"progressbar\" style=\"width: ";
            echo twig_escape_filter($this->env, ($context["progress"] ?? null), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, ($context["progress"] ?? null), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, ($context["progress"] ?? null), "html", null, true);
            echo "%</div>
                                    </div>
                                </td>
                                <td class=\"w-1\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                <td class=\"w-1\">
                                    <a class=\"btn btn-icon api-link\"
                                        href=\"";
            // line 60
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/toggle_language", ["locale_id" => twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 60)]);
            echo "\"
                                        data-api-reload=\"1\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#close\" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "                                <tbody>
                                <tr>
                                    <td class=\"text-muted\" colspan=\"2\">";
            // line 72
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "
                                    </td>
                                </tr>
                                </tbody>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        </table>
                    </div>

                    <hr/>

                    <div class=\"container\">
                        <h2 class=\"mb-1 mt-1\">";
        // line 83
        echo twig_escape_filter($this->env, __trans("Disabled translations"), "html", null, true);
        echo "</h2>
                        <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                            <thead>
                            <tr>
                                <th>";
        // line 87
        echo twig_escape_filter($this->env, __trans("Country"), "html", null, true);
        echo "</th>
                                <th>";
        // line 88
        echo twig_escape_filter($this->env, __trans("Language"), "html", null, true);
        echo "</th>
                                <th>";
        // line 89
        echo twig_escape_filter($this->env, __trans("Completion"), "html", null, true);
        echo "</th>
                                <th>";
        // line 90
        echo twig_escape_filter($this->env, __trans("Code"), "html", null, true);
        echo "</th>
                                <th>";
        // line 91
        echo twig_escape_filter($this->env, __trans("Enable"), "html", null, true);
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_languages", [["disabled" => true]], "method", false, false, false, 95));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 96
            echo "                                <tr>
                                    <td class=\"w-2\">
                                        <span class=\"flag flag-country-";
            // line 98
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($__internal_compile_1 = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 98), "_")) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null)), "html", null, true);
            echo "\"></span>
                                    </td>
                                    <td class=\"w-6\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "name", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 102
            $context["progress"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_locale_completion", [["locale_id" => twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 102)]], "method", false, false, false, 102);
            // line 103
            echo "                                        ";
            if ((($context["progress"] ?? null) > 75)) {
                // line 104
                echo "                                            ";
                $context["background"] = "success";
                // line 105
                echo "                                        ";
            } elseif ((($context["progress"] ?? null) > 50)) {
                // line 106
                echo "                                            ";
                $context["background"] = "warning";
                // line 107
                echo "                                        ";
            } else {
                // line 108
                echo "                                            ";
                $context["background"] = "danger";
                // line 109
                echo "                                        ";
            }
            // line 110
            echo "                                        <div class=\"progress\" style=\"height: 15px;\">
                                            <div class=\"progress\" style=\"height: 15px;\">
                                                <div class=\"progress-bar bg-";
            // line 112
            echo twig_escape_filter($this->env, ($context["background"] ?? null), "html", null, true);
            echo "\" role=\"progressbar\" style=\"width: ";
            echo twig_escape_filter($this->env, ($context["progress"] ?? null), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, ($context["progress"] ?? null), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, ($context["progress"] ?? null), "html", null, true);
            echo "%</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"w-1\">";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 116), "html", null, true);
            echo "</td>
                                    <td class=\"w-1\">
                                        <a class=\"btn btn-icon api-link\"
                                            href=\"";
            // line 119
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/toggle_language", ["locale_id" => twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 119)]);
            echo "\"
                                            data-api-reload=\"1\">
                                            <svg class=\"icon\">
                                                <use xlink:href=\"#check\" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 129
            echo "                                <tbody>
                                <tr>
                                    <td class=\"text-muted\" colspan=\"2\">";
            // line 131
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "
                                    </td>
                                </tr>
                                </tbody>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                        </table>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-new\" role=\"tabpanel\">
                    ";
        // line 141
        $this->loadTemplate("partial_extensions.html.twig", "mod_extension_languages.html.twig", 141)->display(twig_to_array(["type" => "translation", "header" => __trans("List of translations on the Extension Directory")]));
        // line 142
        echo "                    <div class=\"card-body\">
                        <h3 class=\"card-title\">";
        // line 143
        echo twig_escape_filter($this->env, __trans("FOSSBilling in your language"), "html", null, true);
        echo "</h3>
                        <p class=\"card-subtitle\">";
        // line 144
        echo twig_escape_filter($this->env, __trans("Although FOSSBilling displays in U.S. English by default, it has the capability to be used in any language. Follow instructions bellow to install new language."), "html", null, true);
        echo "</p>
                        <div>
                            <ul>
                                <li>";
        // line 147
        echo "Check the FOSSBilling locale repository to see if the language you are looking for is available.";
        echo " <a target=\"_blank\" href=\"https://github.com/FOSSBilling/locale\">(";
        echo twig_escape_filter($this->env, __trans("Locale repository"), "html", null, true);
        echo ")<a></li>
                                <li>";
        // line 148
        echo twig_escape_filter($this->env, __trans("Follow the instructions on the FOSSBilling documentation to install the new language's translation files."), "html", null, true);
        echo " <a target=\"_blank\" href=\"https://fossbilling.org/docs/customizing-fossbilling/localization#installing-a-new-language\">(";
        echo twig_escape_filter($this->env, __trans("Installing a new language"), "html", null, true);
        echo ")<a></li>
                            </ul>
                        </div>

                        <h5>";
        // line 152
        echo twig_escape_filter($this->env, __trans("Changing default language"), "html", null, true);
        echo "</h5>
                        <p>";
        // line 153
        echo twig_escape_filter($this->env, __trans("Instructions for changing the default language can be found on the FOSSBilling documentation."), "html", null, true);
        echo " <a target=\"_blank\" href=\"https://fossbilling.org/docs/customizing-fossbilling/localization#changing-the-default-language\">(";
        echo twig_escape_filter($this->env, __trans("Changing the default language"), "html", null, true);
        echo ")<a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_extension_languages.html.twig";
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
        return array (  384 => 153,  380 => 152,  371 => 148,  365 => 147,  359 => 144,  355 => 143,  352 => 142,  350 => 141,  343 => 136,  332 => 131,  328 => 129,  313 => 119,  307 => 116,  294 => 112,  290 => 110,  287 => 109,  284 => 108,  281 => 107,  278 => 106,  275 => 105,  272 => 104,  269 => 103,  267 => 102,  262 => 100,  257 => 98,  253 => 96,  248 => 95,  241 => 91,  237 => 90,  233 => 89,  229 => 88,  225 => 87,  218 => 83,  210 => 77,  199 => 72,  195 => 70,  180 => 60,  174 => 57,  162 => 54,  159 => 53,  156 => 52,  153 => 51,  150 => 50,  147 => 49,  144 => 48,  141 => 47,  138 => 46,  136 => 45,  131 => 43,  126 => 41,  122 => 39,  117 => 38,  110 => 34,  106 => 33,  102 => 32,  98 => 31,  94 => 30,  87 => 26,  76 => 18,  66 => 11,  61 => 8,  57 => 7,  50 => 3,  45 => 1,  43 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_extension_languages.html.twig", "/var/www/modules/Extension/html_admin/mod_extension_languages.html.twig");
    }
}
