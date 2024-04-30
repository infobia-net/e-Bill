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

/* mod_product_index.html.twig */
class __TwigTemplate_a7a97790f296fbb6546eb590e27f2ec7 extends Template
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
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_product_index.html.twig", 3)->unwrap();
        // line 5
        $context["active_menu"] = "products";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_product_index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Products"), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link active\" id=\"index-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-index\" type=\"button\" role=\"tab\" aria-controls=\"index\" aria-selected=\"true\">";
        // line 12
        echo twig_escape_filter($this->env, __trans("Products"), "html", null, true);
        echo "</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link\" id=\"new-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-new\" type=\"button\" role=\"tab\" aria-controls=\"index\" aria-selected=\"true\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 19
        echo twig_escape_filter($this->env, __trans("New product"), "html", null, true);
        echo "
            </button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link\" id=\"categories-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-categories\" type=\"button\" role=\"tab\" aria-controls=\"index\" aria-selected=\"true\">";
        // line 23
        echo twig_escape_filter($this->env, __trans("Categories"), "html", null, true);
        echo "</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link\" id=\"new-category-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-new-category\" type=\"button\" role=\"tab\" aria-controls=\"index\" aria-selected=\"true\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 30
        echo twig_escape_filter($this->env, __trans("New category"), "html", null, true);
        echo "
            </button>
        </li>
    </ul>

<div class=\"card\">
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\" aria-labelledby=\"index-tab\">
            ";
        // line 38
        $this->loadTemplate("partial_search.html.twig", "mod_product_index.html.twig", 38)->display($context);
        // line 39
        echo "            <div class=\"table-responsive\">
                <form method=\"post\" action=\"";
        // line 40
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/product/update_priority");
        echo "\" class=\"api-form\" data-api-reload=\"1\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <table class=\"table card-table table-vcenter table-striped text-nowrap sortable\">
                        <thead>
                            <tr>
                                <th>";
        // line 45
        echo twig_escape_filter($this->env, __trans("Type"), "html", null, true);
        echo "</th>
                                <th>";
        // line 46
        echo twig_escape_filter($this->env, __trans("Category"), "html", null, true);
        echo "</th>
                                <th>";
        // line 47
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                                <th>";
        // line 48
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                                <th class=\"w-1 text-center\">";
        // line 49
        echo twig_escape_filter($this->env, __trans("Priority"), "html", null, true);
        echo "</th>
                                <th class=\"w-1\"></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 54
        $context["products"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_get_list", [twig_array_merge(["per_page" => 30, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 54)], ($context["request"] ?? null))], "method", false, false, false, 54);
        // line 55
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "list", [], "any", false, false, false, 55));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 56
            echo "                            <tr>
                                <td>";
            // line 57
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 57)], 57, $context, $this->getSourceContext());
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 59
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/product/category");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 59), "title", [], "any", false, false, false, 59), "html", null, true);
            echo "</a>
                                </td>
                                <td><a href=\"";
            // line 61
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/product/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 61), "html", null, true);
            echo "</a></td>
                                <td>
                                    ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 63) == "enabled")) {
                // line 64
                echo "                                        <span class=\"badge bg-success me-1\"></span>
                                    ";
            }
            // line 66
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 66) == "disabled")) {
                // line 67
                echo "                                        <span class=\"badge bg-secondary me-1\"></span>
                                    ";
            }
            // line 69
            echo "                                    ";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 69)], 69, $context, $this->getSourceContext());
            echo "</td>
                                <td class=\"text-center\">
                                    <input type=\"text\" class=\"form-control form-control-sm\" name=\"priority[";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priority", [], "any", false, false, false, 71), "html", null, true);
            echo "\" size=\"2\">
                                </td>
                                <td>
                                    <a class=\"btn btn-icon\" href=\"";
            // line 74
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/product/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo "\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#edit\" />
                                        </svg>
                                    </a>
                                    <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
            // line 79
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/product/delete", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 79), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product");
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
            echo "                            <tr>
                                <td class=\"text-muted\" colspan=\"6\">";
            // line 88
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                        </tbody>
                    </table>

                    ";
        // line 94
        $this->loadTemplate("partial_pagination.html.twig", "mod_product_index.html.twig", 94)->display(twig_array_merge($context, ["list" => ($context["products"] ?? null), "url" => "product"]));
        // line 95
        echo "
                    <div class=\"card-footer text-end\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#refresh\" />
                            </svg>
                            ";
        // line 101
        echo twig_escape_filter($this->env, __trans("Update priority"), "html", null, true);
        echo "
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-new\" role=\"tabpanel\" aria-labelledby=\"new-tab\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"";
        // line 110
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/product/prepare");
        echo "\" class=\"api-form\" data-api-reload=\"1\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 113
        echo twig_escape_filter($this->env, __trans("Type"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            ";
        // line 115
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["type", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_get_types", [], "any", false, false, false, 115), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "type", [], "any", false, false, false, 115), 1], 115, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 119
        echo twig_escape_filter($this->env, __trans("Category"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            ";
        // line 121
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["product_category_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_category_get_pairs", [], "any", false, false, false, 121), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "product_category_id", [], "any", false, false, false, 121), 1], 121, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 125
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input type=\"text\" class=\"form-control\" name=\"title\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "title", [], "any", false, false, false, 127), "html", null, true);
        echo "\" required>
                        </div>
                    </div>

                    <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 131
        echo twig_escape_filter($this->env, __trans("Create"), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-categories\" role=\"tabpanel\" aria-labelledby=\"categories-tab\">
            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <thead>
                    <tr>
                        <th class=\"w-1\">#</th>
                        <th>";
        // line 141
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                        <th class=\"w-1\"></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_category_get_pairs", [], "any", false, false, false, 146));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["cat_id"] => $context["cat_title"]) {
            // line 147
            echo "                    <tr>
                        <td>";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 148), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 150
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/product/category");
            echo "/";
            echo twig_escape_filter($this->env, $context["cat_id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["cat_title"], "html", null, true);
            echo "</a>
                        </td>
                        <td>
                            <a class=\"btn btn-icon\" href=\"";
            // line 153
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/product/category");
            echo "/";
            echo twig_escape_filter($this->env, $context["cat_id"], "html", null, true);
            echo "\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#edit\" />
                                </svg>
                            </a>
                            <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
            // line 158
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/product/category_delete", ["id" => $context["cat_id"], "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product");
            echo "\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#delete\" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 166
            echo "                    <tr>
                        <td class=\"text-muted\" colspan=\"3\">";
            // line 167
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cat_id'], $context['cat_title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-new-category\" role=\"tabpanel\" aria-labelledby=\"new-category-tab\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"";
        // line 176
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/product/category_create");
        echo "\" class=\"save api-form\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product");
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 179
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input type=\"text\" class=\"form-control\" name=\"title\" value=\"";
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "cat_title", [], "any", false, false, false, 181), "html", null, true);
        echo "\" required>
                        </div>
                    </div>

                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 186
        echo twig_escape_filter($this->env, __trans("Icon URL"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input type=\"text\" class=\"form-control\" name=\"icon_url\" value=\"\">
                        </div>
                    </div>

                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 193
        echo twig_escape_filter($this->env, __trans("Description"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <textarea class=\"form-control\" name=\"description\" rows=\"5\">";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "cat_description", [], "any", false, false, false, 195), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 199
        echo twig_escape_filter($this->env, __trans("Create"), "html", null, true);
        echo "</button>
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
        return "mod_product_index.html.twig";
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
        return array (  475 => 199,  468 => 195,  463 => 193,  453 => 186,  445 => 181,  440 => 179,  435 => 177,  429 => 176,  421 => 170,  412 => 167,  409 => 166,  384 => 158,  374 => 153,  364 => 150,  359 => 148,  356 => 147,  338 => 146,  330 => 141,  317 => 131,  310 => 127,  305 => 125,  298 => 121,  293 => 119,  286 => 115,  281 => 113,  276 => 111,  272 => 110,  260 => 101,  252 => 95,  250 => 94,  245 => 91,  236 => 88,  233 => 87,  216 => 79,  206 => 74,  198 => 71,  192 => 69,  188 => 67,  185 => 66,  181 => 64,  179 => 63,  170 => 61,  161 => 59,  156 => 57,  153 => 56,  147 => 55,  145 => 54,  137 => 49,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  114 => 41,  110 => 40,  107 => 39,  105 => 38,  94 => 30,  84 => 23,  77 => 19,  67 => 12,  63 => 10,  59 => 9,  52 => 7,  47 => 1,  45 => 5,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_product_index.html.twig", "/var/www/modules/Product/html_admin/mod_product_index.html.twig");
    }
}
