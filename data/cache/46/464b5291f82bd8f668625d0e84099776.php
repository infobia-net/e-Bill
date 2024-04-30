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

/* mod_redirect_settings.html.twig */
class __TwigTemplate_42fcee44904202afcb9ae28735a0a213 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_redirect_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_redirect_settings.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Redirects"), "html", null, true);
    }

    // line 9
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <ol class=\"breadcrumb\">
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
        echo "</a></li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 20
        echo twig_escape_filter($this->env, __trans("Redirects"), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 28
        echo twig_escape_filter($this->env, __trans("Redirects"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"card-body border-bottom\">
            <h3 class=\"card-title\">";
        // line 31
        echo twig_escape_filter($this->env, __trans("Create new redirect"), "html", null, true);
        echo "</h3>
            <form method=\"post\" action=\"";
        // line 32
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/redirect/create");
        echo "\" class=\"api-form\" data-api-reload=\"1\">
                <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                <div class=\"row row-cards\">
                    <div class=\"col-sm-5 col-md-4 mb-3\">
                        <label class=\"form-label required\" for=\"path\">Path</label>
                        <div class=\"col-auto\">
                            <div class=\"input-group input-group-flat\">
                            <span class=\"input-group-text\">
                                ";
        // line 40
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
        echo "
                            </span>
                                <input type=\"text\" class=\"form-control ps-0\" name=\"path\" id=\"path\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-5 col-md-4 mb-3\">
                        <label class=\"form-label required\" for=\"target\">Target</label>
                        <div class=\"col-auto\">
                            <div class=\"input-group input-group-flat\">
                            <span class=\"input-group-text\">
                                ";
        // line 51
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
        echo "
                            </span>
                                <input type=\"text\" class=\"form-control ps-0\" name=\"target\" id=\"target\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-2 col-md-4 mb-3 d-flex align-items-end\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <svg class=\"icon me-2\">
                                <use xlink:href=\"#plus\" />
                            </svg>
                            ";
        // line 62
        echo twig_escape_filter($this->env, __trans("Add"), "html", null, true);
        echo "
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <thead>
                <tr>
                    <th>";
        // line 73
        echo twig_escape_filter($this->env, __trans("Path"), "html", null, true);
        echo "</th>
                    <th></th>
                    <th>";
        // line 75
        echo twig_escape_filter($this->env, __trans("Target"), "html", null, true);
        echo "</th>
                    <th class=\"w-1\"></th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 80
        $context["redirects"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "redirect_get_list", [twig_array_merge(["per_page" => 100, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 80)], ($context["request"] ?? null))], "method", false, false, false, 80);
        // line 81
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["redirects"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 82
            echo "                    <tr>
                        <td>
                            <a href=\"";
            // line 84
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, $context["r"], "path", [], "any", false, false, false, 84));
            echo "\" target=\"_blank\">";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, $context["r"], "path", [], "any", false, false, false, 84));
            echo "</a>
                        </td>
                        <td>
                            <svg class=\"icon\">
                                <use xlink:href=\"#arrow-right\" />
                            </svg>
                        </td>
                        <td>
                            ";
            // line 92
            if (twig_in_filter("://", twig_get_attribute($this->env, $this->source, $context["r"], "target", [], "any", false, false, false, 92))) {
                // line 93
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "target", [], "any", false, false, false, 93), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "target", [], "any", false, false, false, 93), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 95
                echo "                                <a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, $context["r"], "target", [], "any", false, false, false, 95));
                echo "\" target=\"_blank\">";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, $context["r"], "target", [], "any", false, false, false, 95));
                echo "</a>
                            ";
            }
            // line 97
            echo "                        </td>
                        <td>
                            <a class=\"btn btn-icon api-link\"
                               href=\"";
            // line 100
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/redirect/delete", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 100), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                               data-api-confirm=\"";
            // line 101
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                               data-api-type=\"danger\"
                               data-api-confirm-btn=\"Delete\"
                               data-api-reload=\"1\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#delete\" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 112
            echo "                    <tr>
                        <td class=\"text-muted\" colspan=\"4\">";
            // line 113
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                </tbody>
            </table>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_redirect_settings.html.twig";
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
        return array (  258 => 116,  249 => 113,  246 => 112,  230 => 101,  226 => 100,  221 => 97,  213 => 95,  205 => 93,  203 => 92,  190 => 84,  186 => 82,  180 => 81,  178 => 80,  170 => 75,  165 => 73,  151 => 62,  137 => 51,  123 => 40,  113 => 33,  109 => 32,  105 => 31,  99 => 28,  94 => 25,  90 => 24,  83 => 20,  77 => 19,  67 => 12,  63 => 10,  59 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_redirect_settings.html.twig", "/var/www/modules/Redirect/html_admin/mod_redirect_settings.html.twig");
    }
}
