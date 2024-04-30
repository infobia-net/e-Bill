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

/* mod_support_canned_responses.html.twig */
class __TwigTemplate_a68615f11a4177f97bb51c7784b1f016 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_support_canned_responses.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_support_canned_responses.html.twig", 3)->unwrap();
        // line 5
        $context["active_menu"] = "support";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
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
                <svg class=\"icon\" width=\"24\">
                    <use xlink:href=\"#home\" />
                </svg>
            </a>
        </li>
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 17
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Support"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 19
        echo twig_escape_filter($this->env, __trans("Canned Responses"), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 23
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Canned Responses";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-index\" data-bs-toggle=\"tab\">";
        // line 28
        echo twig_escape_filter($this->env, __trans("Canned Responses"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-new\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 35
        echo twig_escape_filter($this->env, __trans("New Response"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-categories\" data-bs-toggle=\"tab\">";
        // line 39
        echo twig_escape_filter($this->env, __trans("Manage Categories"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-new-category\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 46
        echo twig_escape_filter($this->env, __trans("New Category"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>

<div class=\"card\">
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
            ";
        // line 54
        $this->loadTemplate("partial_search.html.twig", "mod_support_canned_responses.html.twig", 54)->display($context);
        // line 55
        echo "            <table class=\"table card-table table-vcenter table-striped text-nowrap sortable\">
                <thead>
                    <tr>
                        <th>";
        // line 58
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                        <th class=\"text-center\">";
        // line 59
        echo twig_escape_filter($this->env, __trans("Category"), "html", null, true);
        echo "</th>
                        <th class=\"w-1 no-sort\"></th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 64
        $context["responses"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_canned_get_list", [twig_array_merge(["per_page" => 90, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 64)], ($context["request"] ?? null))], "method", false, false, false, 64);
        // line 65
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["responses"] ?? null), "list", [], "any", false, false, false, 65));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["response"]) {
            // line 66
            echo "                <tr>
                    <td>
                        <a href=\"";
            // line 68
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/canned");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "title", [], "any", false, false, false, 68), "html", null, true);
            echo "</a>
                    </td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 71
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/canned-category");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["response"], "category", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["response"], "category", [], "any", false, false, false, 71), "title", [], "any", false, false, false, 71), "html", null, true);
            echo "</a>
                    </td>
                    <td>
                        <a class=\"btn btn-icon\" href=\"";
            // line 74
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/canned");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo "\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#edit\" />
                            </svg>
                        </a>
                        <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
            // line 79
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/canned_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 79), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support/canned-responses");
            echo "\">
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
            // line 87
            echo "                <tr>
                    <td class=\"text-muted\" colspan=\"3\">";
            // line 88
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                </tbody>
            </table>
            ";
        // line 93
        $this->loadTemplate("partial_pagination.html.twig", "mod_support_canned_responses.html.twig", 93)->display(twig_array_merge($context, ["list" => ($context["responses"] ?? null), "url" => "support/canned-responses"]));
        // line 94
        echo "        </div>

        <div class=\"tab-pane fade\" id=\"tab-new\" role=\"tabpanel\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"";
        // line 98
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/canned_create");
        echo "\" class=\"save api-form\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support/canned-responses");
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 101
        echo twig_escape_filter($this->env, __trans("Category"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            ";
        // line 103
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["category_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_canned_category_pairs", [], "any", false, false, false, 103), "", 1], 103, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 107
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "title", [], "any", false, false, false, 109), "html", null, true);
        echo "\" required>
                        </div>
                    </div>

                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 114
        echo twig_escape_filter($this->env, __trans("Content"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <textarea class=\"form-control\" name=\"content\" rows=\"10\">";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "content", [], "any", false, false, false, 116), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 120
        echo twig_escape_filter($this->env, __trans("Create"), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-categories\" role=\"tabpanel\">
            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <thead>
                    <tr>
                        <th>";
        // line 129
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                        <th class=\"w-1\"></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_canned_category_pairs", [], "any", false, false, false, 134));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["cat_id"] => $context["cat_title"]) {
            // line 135
            echo "                    <tr>
                        <td>
                            <a href=\"";
            // line 137
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/canned-category");
            echo "/";
            echo twig_escape_filter($this->env, $context["cat_id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["cat_title"], "html", null, true);
            echo "</a>
                        </td>
                        <td>
                            <a class=\"btn btn-icon\" href=\"";
            // line 140
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/canned-category");
            echo "/";
            echo twig_escape_filter($this->env, $context["cat_id"], "html", null, true);
            echo "\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#edit\" />
                                </svg>
                            </a>
                            <a class=\"btn btn-icon api-link\"
                                href=\"";
            // line 146
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/canned_category_delete", ["id" => $context["cat_id"]]);
            echo "\"
                                data-api-confirm=\"";
            // line 147
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                                data-api-redirect=\"";
            // line 148
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support/canned-responses");
            echo "\">
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
            // line 156
            echo "                    <tr>
                        <td class=\"text-muted\" colspan=\"3\">";
            // line 157
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cat_id'], $context['cat_title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-new-category\" role=\"tabpanel\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"";
        // line 166
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/canned_category_create");
        echo "\" class=\"api-form\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support/canned-responses");
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 167
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 169
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "title", [], "any", false, false, false, 171), "html", null, true);
        echo "\" required>
                        </div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 175
        echo twig_escape_filter($this->env, __trans("Create"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
                </form>
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
        return "mod_support_canned_responses.html.twig";
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
        return array (  401 => 175,  394 => 171,  389 => 169,  384 => 167,  378 => 166,  370 => 160,  361 => 157,  358 => 156,  345 => 148,  341 => 147,  337 => 146,  326 => 140,  316 => 137,  312 => 135,  307 => 134,  299 => 129,  287 => 120,  280 => 116,  275 => 114,  267 => 109,  262 => 107,  255 => 103,  250 => 101,  245 => 99,  239 => 98,  233 => 94,  231 => 93,  227 => 91,  218 => 88,  215 => 87,  198 => 79,  188 => 74,  178 => 71,  168 => 68,  164 => 66,  158 => 65,  156 => 64,  148 => 59,  144 => 58,  139 => 55,  137 => 54,  126 => 46,  116 => 39,  109 => 35,  99 => 28,  95 => 26,  91 => 25,  84 => 23,  77 => 19,  70 => 17,  60 => 10,  56 => 8,  52 => 7,  48 => 1,  46 => 5,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_support_canned_responses.html.twig", "/var/www/modules/Support/html_admin/mod_support_canned_responses.html.twig");
    }
}
