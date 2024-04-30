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

/* mod_paidsupport_settings.html.twig */
class __TwigTemplate_434d759082b66a87ac5686db640960ed extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_paidsupport_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_paidsupport_settings.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Paid support settings"), "html", null, true);
    }

    // line 9
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <ul class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 12
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#home\" />
                </svg>
            </a>
        </li>
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 19
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 21
        echo twig_escape_filter($this->env, __trans("Paid support settings"), "html", null, true);
        echo "</li>
    </ul>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 28
        echo twig_escape_filter($this->env, __trans("Paid support settings"), "html", null, true);
        echo "</h3>
            <div class=\"card-actions\">
                <a href=\"";
        // line 30
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/support");
        echo "#tab-new-helpdesk\" class=\"btn btn-primary\">
                    <svg class=\"icon\">
                        <use xlink:href=\"#plus\"/>
                    </svg>
                    <span>";
        // line 34
        echo twig_escape_filter($this->env, __trans("New helpdesk"), "html", null, true);
        echo "</span>
                </a>
            </div>
        </div>

        ";
        // line 39
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_paidsupport"]], "method", false, false, false, 39);
        // line 40
        echo "        <form method=\"post\" action=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\" data-api-msg=\"Settings updated\">
            <div class=\"card-body\">
                <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" name=\"ext\" value=\"mod_paidsupport\" />
                <div class=\"row mb-3\">
                    <label class=\"col-md-3 col-form-label\">";
        // line 45
        echo twig_escape_filter($this->env, __trans("Ticket price"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"text\" name=\"ticket_price\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "ticket_price", [], "any", false, false, false, 47), "html", null, true);
        echo "\" required=\"required\"/>
                    </div>
                </div>
                <div class=\"row mb-3\">
                    <label class=\"col-md-3 col-form-label\">";
        // line 51
        echo twig_escape_filter($this->env, __trans("Error message"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6\">
                        <input class=\"form-control\" type=\"text\" name=\"error_msg\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "error_msg", [], "any", false, false, false, 53), "html", null, true);
        echo "\" required=\"required\" />
                    </div>
                </div>
            </div>
            <div class=\"card-body border-bottom\">
                <h3 class=\"card-title\">";
        // line 58
        echo twig_escape_filter($this->env, __trans("Set paid support for helpdesks"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <thead>
                    <tr>
                        <th class=\"w-1\"></th>
                        <th>";
        // line 65
        echo twig_escape_filter($this->env, __trans("Helpdesk"), "html", null, true);
        echo "</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_helpdesk_get_pairs", [], "any", false, false, false, 70));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["id"] => $context["title"]) {
            // line 71
            echo "                        <tr>
                            <td>
                                <input type=\"hidden\" name=\"helpdesk[";
            // line 73
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "]\" value=\"0\">
                                <input class=\"form-check-input m-0 align-middle\" type=\"checkbox\" name=\"helpdesk[";
            // line 74
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "]\" value=\"1\" id=\"helpdesk_";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"
                                       ";
            // line 75
            if (((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "helpdesk", [], "any", false, false, false, 75)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["id"]] ?? null) : null) == 1)) {
                echo "checked=\"checked\"";
            }
            echo "/>
                            </td>
                            <td><label for=\"helpdesk_";
            // line 77
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</label></td>
                            <td class=\"text-end\">
                                <a class=\"btn btn-icon\" href=\"";
            // line 79
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/helpdesk");
            echo "/";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"
                                data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 80
            echo twig_escape_filter($this->env, __trans("Edit"), "html", null, true);
            echo "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#edit\"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "                        <tr>
                            <td colspan=\"3\">";
            // line 89
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"card-footer text-end\">
                    <input type=\"submit\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary\"/>
                </div>
            </div>
        </form>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_paidsupport_settings.html.twig";
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
        return array (  246 => 96,  240 => 92,  231 => 89,  228 => 88,  215 => 80,  209 => 79,  202 => 77,  195 => 75,  189 => 74,  185 => 73,  181 => 71,  176 => 70,  168 => 65,  158 => 58,  150 => 53,  145 => 51,  138 => 47,  133 => 45,  127 => 42,  121 => 40,  119 => 39,  111 => 34,  104 => 30,  99 => 28,  95 => 26,  91 => 25,  84 => 21,  77 => 19,  67 => 12,  63 => 10,  59 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_paidsupport_settings.html.twig", "/var/www/modules/Paidsupport/html_admin/mod_paidsupport_settings.html.twig");
    }
}
