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

/* mod_custompages_index.html.twig */
class __TwigTemplate_485f959610a8e9b768fb74f3afae72e6 extends Template
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
            'js' => [$this, 'block_js'],
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "layout_default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_custompages_index.html.twig", 1)->unwrap();
        // line 3
        $context["active_menu"] = "extensions";
        // line 2
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_custompages_index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Custom Pages"), "html", null, true);
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <div class=\"card-tabs\">

        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a href=\"#tab-index\" class=\"nav-link active\" data-bs-toggle=\"tab\" aria-selected=\"true\" role=\"tab\">";
        // line 11
        echo twig_escape_filter($this->env, __trans("Custom Pages"), "html", null, true);
        echo "</a></li>
            <li class=\"nav-item\" role=\"presentation\">
                <a href=\"#tab-new\" class=\"nav-link\" data-bs-toggle=\"tab\" aria-selected=\"false\" role=\"tab\" tabindex=\"-1\">
                    <svg class=\"icon me-2\">
                        <use xlink:href=\"#plus\"></use>
                    </svg>
                    ";
        // line 17
        echo twig_escape_filter($this->env, __trans("New Custom Page"), "html", null, true);
        echo "
                </a>
            </li>
        </ul>

        <div class=\"card\">
        <div class=\"tab-content\">
            <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
                <div class=\"card-body border-bottom py-3\">
                    <div class=\"d-flex\">
                        ";
        // line 27
        $this->loadTemplate("partial_batch_delete.html.twig", "mod_custompages_index.html.twig", 27)->display(twig_array_merge($context, ["action" => "admin/custompages/batch_delete"]));
        // line 28
        echo "                        <div class=\"ms-auto text-muted\">
                            <form method=\"get\">
                                <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                                <input type=\"hidden\" name=\"_url\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Search…\" name=\"search\">
                                    <button class=\"btn btn-icon\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#search\"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table card-table table-vcenter text-nowrap datatable\">
                        <thead>
                        <tr>
                            <th class=\"w-1\">
                                <input type=\"checkbox\" class=\"form-check-input m-0 align-middle batch-delete-master-checkbox\">
                            </th>
                            <th class=\"w-1\">";
        // line 51
        echo twig_escape_filter($this->env, __trans("ID"), "html", null, true);
        echo "</th>
                            <th>";
        // line 52
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                            <th>";
        // line 53
        echo twig_escape_filter($this->env, __trans("Slug"), "html", null, true);
        echo "</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 58
        $context["pages"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "custompages_get_list", [twig_array_merge(["per_page" => 30, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 58)], ($context["request"] ?? null))], "method", false, false, false, 58);
        // line 59
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "list", [], "any", false, false, false, 59));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 60
            echo "                            <tr>
                                <td>
                                    <input type=\"checkbox\" class=\"form-check-input m-0 align-middle batch-delete-checkbox\" data-item-id=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "\">
                                </td>
                                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                <td class=\"text-end\">
                                    <a class=\"btn btn-icon\" href=\"";
            // line 68
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("page");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 68), "html", null, true);
            echo "\"
                                       data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 69
            echo twig_escape_filter($this->env, __trans("View"), "html", null, true);
            echo "\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#eye\"/>
                                        </svg>
                                    </a>
                                    <a class=\"btn btn-icon\" href=\"";
            // line 74
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("custompages");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo "\"
                                       data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 75
            echo twig_escape_filter($this->env, __trans("Edit"), "html", null, true);
            echo "\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#edit\"/>
                                        </svg>
                                    </a>
                                    <a class=\"btn btn-icon bb-rm-tr api-link\"
                                       href=\"";
            // line 81
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/custompages/delete", ["id" => twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 81), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                                       title=\"";
            // line 82
            echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
            echo "\"
                                       data-api-confirm=\"Are you sure?\"
                                       data-api-type=\"danger\"
                                       data-api-confirm-btn=\"";
            // line 85
            echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
            echo "\"
                                       data-api-reload=\"1\"
                                       data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 87
            echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
            echo "\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#delete\"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 95
            echo "                            <tr>
                                <td class=\"text-center py-3\" colspan=\"5\">
                                    <h4>";
            // line 97
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</h4>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                        </tbody>
                    </table>
                </div>

                ";
        // line 105
        $this->loadTemplate("partial_pagination.html.twig", "mod_custompages_index.html.twig", 105)->display(twig_array_merge($context, ["list" => ($context["pages"] ?? null), "url" => "custompages"]));
        // line 106
        echo "            </div>

            <div class=\"tab-pane fade\" id=\"tab-new\" role=\"tabpanel\">
                <form method=\"post\" action=\"";
        // line 109
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/custompages/create");
        echo "\" class=\"api-form save\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("custompages");
        echo "\">
                    <div class=\"card-body mt-2\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                        <div class=\"mb-3 row\">
                            <label class=\"col-md-3 col-form-label\">";
        // line 113
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "title", [], "any", false, false, false, 115), "html", null, true);
        echo "\" required=\"required\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"col-md-3 col-form-label\">";
        // line 119
        echo twig_escape_filter($this->env, __trans("Meta Description"), "html", null, true);
        echo "</label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"description\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "description", [], "any", false, false, false, 121), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"col-md-3 col-form-label\">";
        // line 125
        echo twig_escape_filter($this->env, __trans("Meta Keywords"), "html", null, true);
        echo "</label>
                            <div class=\"col\">
                                <input class=\"form-control\" type=\"text\" name=\"keywords\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "keywords", [], "any", false, false, false, 127), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"mb-3 row\">
                            <label class=\"col-md-3 col-form-label\">";
        // line 131
        echo twig_escape_filter($this->env, __trans("Content"), "html", null, true);
        echo "</label>
                            <div class=\"col\">
                                <textarea class=\"bb-textarea\" name=\"content\" cols=\"5\" rows=\"5\" required=\"required\" placeholder=\"";
        // line 133
        echo twig_escape_filter($this->env, __trans("Add page content"), "html", null, true);
        echo "\"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer text-end\">
                        <input type=\"submit\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, __trans("Create"), "html", null, true);
        echo "\" class=\"btn btn-primary\"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
";
    }

    // line 147
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 149
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["mf"], "macro_bb_editor", [".bb-textarea"], 149, $context, $this->getSourceContext());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_custompages_index.html.twig";
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
        return array (  335 => 149,  329 => 147,  317 => 138,  309 => 133,  304 => 131,  297 => 127,  292 => 125,  285 => 121,  280 => 119,  273 => 115,  268 => 113,  263 => 111,  256 => 109,  251 => 106,  249 => 105,  243 => 101,  233 => 97,  229 => 95,  216 => 87,  211 => 85,  205 => 82,  201 => 81,  192 => 75,  186 => 74,  178 => 69,  172 => 68,  167 => 66,  163 => 65,  159 => 64,  154 => 62,  150 => 60,  144 => 59,  142 => 58,  134 => 53,  130 => 52,  126 => 51,  103 => 31,  99 => 30,  95 => 28,  93 => 27,  80 => 17,  71 => 11,  65 => 7,  61 => 6,  54 => 4,  49 => 2,  47 => 3,  45 => 1,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_custompages_index.html.twig", "/var/www/modules/Custompages/html_admin/mod_custompages_index.html.twig");
    }
}
