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

/* mod_theme_settings.html.twig */
class __TwigTemplate_6f73e5724b15a8c6e6b1bb560e45609f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_theme_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Themes"), "html", null, true);
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 10
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#home\"/>
                </svg>
            </a>
        </li>
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 17
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 19
        echo twig_escape_filter($this->env, __trans("Themes"), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <div class=\"card\">
        <div class=\"card-body\">
            <h3 class=\"card-title\">";
        // line 26
        echo twig_escape_filter($this->env, __trans("Client area themes"), "html", null, true);
        echo "</h3>
        </div>
        <table class=\"table card-table table-vcenter table-striped text-nowrap table-hover\">
            <thead>
            <tr>
                <th>";
        // line 31
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo "</th>
                <th class=\"w-1\">";
        // line 32
        echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
        echo "</th>
                <th class=\"w-1\">";
        // line 33
        echo twig_escape_filter($this->env, __trans("Default"), "html", null, true);
        echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 37
        $context["themes"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "theme_get_list", [["per_page" => 100]], "method", false, false, false, 37);
        // line 38
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["themes"] ?? null), "list", [], "any", false, false, false, 38));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["theme"]) {
            // line 39
            echo "            <tr>
                <td>
                    ";
            // line 41
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 41)), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, $context["theme"], "hasSettings", [], "any", false, false, false, 44)) {
                // line 45
                echo "                        <a class=\"btn btn-outline-primary\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("theme");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 45), "html", null, true);
                echo "\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#cog\"/>
                            </svg>
                            ";
                // line 49
                echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 52
                echo "                        <a class=\"btn btn-outline-primary disabled\" href=\"#\" aria-disabled=\"true\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#cog\"/>
                            </svg>
                            ";
                // line 56
                echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
                echo "
                        </a>
                    ";
            }
            // line 59
            echo "                </td>
                <td>
                    ";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_theme", [true], "method", false, false, false, 61), "code", [], "any", false, false, false, 61) != twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 61))) {
                // line 62
                echo "                        <a class=\"btn btn-primary api-link\" data-api-redirect=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/theme");
                echo "\"
                           href=\"";
                // line 63
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/theme/select", ["code" => twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 63), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                echo "\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#check\"/>
                            </svg>
                            ";
                // line 67
                echo twig_escape_filter($this->env, __trans("Set as default"), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 70
                echo "                        <a class=\"btn btn-primary api-link disabled\" data-api-redirect=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/theme");
                echo "\"
                            href=\"";
                // line 71
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/theme/select", ["code" => twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 71), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                echo "\" aria-disabled=\"true\">
                            <svg class=\"icon\">
                            <use xlink:href=\"#check\"/>
                        </svg>
                        ";
                // line 75
                echo twig_escape_filter($this->env, __trans("Set as default"), "html", null, true);
                echo "
                        </a>
                    ";
            }
            // line 78
            echo "                </td>
            </tr>
            </tbody>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 82
            echo "                <tbody>
                <tr>
                    <td class=\"text-muted\" colspan=\"5\">";
            // line 84
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                </tr>
                </tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </table>
    </div>

    <div class=\"card mt-3\">
        <div class=\"card-body\">
            <h3 class=\"card-title\">";
        // line 93
        echo twig_escape_filter($this->env, __trans("Admin area themes"), "html", null, true);
        echo "</h3>
        </div>
        <table class=\"table card-table table-vcenter table-striped text-nowrap table-hover\">
            <thead>
            <tr>
                <th>";
        // line 98
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo "</th>
                <th class=\"w-1\">";
        // line 99
        echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
        echo "</th>
                <th class=\"w-1\">";
        // line 100
        echo twig_escape_filter($this->env, __trans("Default"), "html", null, true);
        echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 104
        $context["themes"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "theme_get_admin_list", [["per_page" => 100]], "method", false, false, false, 104);
        // line 105
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["themes"] ?? null), "list", [], "any", false, false, false, 105));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["theme"]) {
            // line 106
            echo "            <tr>
                <td>
                    ";
            // line 108
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 108), ["admin_" => ""])), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 111
            if (twig_get_attribute($this->env, $this->source, $context["theme"], "hasSettings", [], "any", false, false, false, 111)) {
                // line 112
                echo "                        <a class=\"btn btn-outline-primary\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("theme");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 112), "html", null, true);
                echo "\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#cog\"/>
                            </svg>
                            ";
                // line 116
                echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 119
                echo "                        <a class=\"btn btn-outline-primary disabled\" href=\"#\" aria-disabled=\"true\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#cog\"/>
                            </svg>
                            ";
                // line 123
                echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
                echo "
                        </a>
                    ";
            }
            // line 126
            echo "                </td>
                <td>
                    ";
            // line 128
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_theme", [false], "method", false, false, false, 128), "code", [], "any", false, false, false, 128) != twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 128))) {
                // line 129
                echo "                        <a class=\"btn btn-primary api-link\" data-api-redirect=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/theme");
                echo "\"
                            href=\"";
                // line 130
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/theme/select", ["code" => twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 130), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                echo "\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#check\"/>
                            </svg>
                            ";
                // line 134
                echo twig_escape_filter($this->env, __trans("Set as default"), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 137
                echo "                        <a class=\"btn btn-primary api-link disabled\" data-api-redirect=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/theme");
                echo "\"
                            href=\"";
                // line 138
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/theme/select", ["code" => twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 138), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                echo "\" aria-disabled=\"true\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#check\"/>
                            </svg>
                            ";
                // line 142
                echo twig_escape_filter($this->env, __trans("Set as default"), "html", null, true);
                echo "
                        </a>
                    ";
            }
            // line 145
            echo "                </td>
            </tr>
            </tbody>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 149
            echo "            <tbody>
            <tr>
                <td class=\"text-muted\" colspan=\"5\">";
            // line 151
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
            </tr>
            </tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "        </table>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_theme_settings.html.twig";
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
        return array (  374 => 155,  364 => 151,  360 => 149,  352 => 145,  346 => 142,  339 => 138,  334 => 137,  328 => 134,  321 => 130,  316 => 129,  314 => 128,  310 => 126,  304 => 123,  298 => 119,  292 => 116,  282 => 112,  280 => 111,  274 => 108,  270 => 106,  264 => 105,  262 => 104,  255 => 100,  251 => 99,  247 => 98,  239 => 93,  232 => 88,  222 => 84,  218 => 82,  210 => 78,  204 => 75,  197 => 71,  192 => 70,  186 => 67,  179 => 63,  174 => 62,  172 => 61,  168 => 59,  162 => 56,  156 => 52,  150 => 49,  140 => 45,  138 => 44,  132 => 41,  128 => 39,  122 => 38,  120 => 37,  113 => 33,  109 => 32,  105 => 31,  97 => 26,  93 => 24,  89 => 23,  82 => 19,  75 => 17,  65 => 10,  61 => 8,  57 => 7,  50 => 3,  46 => 1,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_theme_settings.html.twig", "/var/www/modules/Theme/html_admin/mod_theme_settings.html.twig");
    }
}
