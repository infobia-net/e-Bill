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

/* mod_news_index.html.twig */
class __TwigTemplate_a5afe157453332b73df9c585f51badc1 extends Template
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
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_news_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_news_index.html.twig", 3)->unwrap();
        // line 5
        $context["active_menu"] = "support";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("News"), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-index\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 12
        echo twig_escape_filter($this->env, __trans("News and announcements"), "html", null, true);
        echo "</a>
        </li>
        <li>
            <a class=\"nav-link\" href=\"#tab-new\" data-bs-toggle=\"tab\" role=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 19
        echo twig_escape_filter($this->env, __trans("New announcement"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>

<div class=\"card\">
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
            ";
        // line 27
        $this->loadTemplate("partial_search.html.twig", "mod_news_index.html.twig", 27)->display($context);
        // line 28
        echo "            <table class=\"table card-table table-vcenter table-striped text-nowrap sortable\">
                <thead>
                    <tr>
                        <th class=\"w-1 no-sort\">
                            <input type=\"checkbox\" class=\"form-check-input m-0 align-middle batch-delete-master-checkbox\">
                        </th>
                        <th class=\"w-1\">#</th>
                        <th>";
        // line 35
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                        <th>";
        // line 36
        echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
        echo "</th>
                        <th>";
        // line 37
        echo twig_escape_filter($this->env, __trans("Date"), "html", null, true);
        echo "</th>
                        <th class=\"w-1\"></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 42
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "news_get_list", [twig_array_merge(["per_page" => 30, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 42)], ($context["request"] ?? null))], "method", false, false, false, 42);
        // line 43
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "list", [], "any", false, false, false, 43));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["post"]) {
            // line 44
            echo "                    <tr>
                        <td>
                            <input type=\"checkbox\" class=\"form-check-input m-0 align-middle batch-delete-checkbox\" data-item-id=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\">
                        </td>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 50
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/news/post");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 50), "html", null, true);
            echo "</a>
                        </td>
                        <td>
                            ";
            // line 53
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "status", [], "any", false, false, false, 53) == "active")) {
                // line 54
                echo "                                <span class=\"badge bg-success me-1\"></span>
                            ";
            }
            // line 56
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "status", [], "any", false, false, false, 56) == "draft")) {
                // line 57
                echo "                                <span class=\"badge bg-secondary me-1\"></span>
                            ";
            }
            // line 59
            echo "                            ";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["post"], "status", [], "any", false, false, false, 59)], 59, $context, $this->getSourceContext());
            echo "
                        </td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 61)), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-icon\" href=\"";
            // line 63
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/news/post");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#edit\" />
                                </svg>
                            </a>
                            <a class=\"btn btn-icon api-link\"
                                href=\"";
            // line 69
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/news/delete", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 69), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                                data-api-confirm=\"";
            // line 70
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                                data-api-redirect=\"";
            // line 71
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("news");
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
            // line 79
            echo "                    <tr>
                        <td class=\"text-muted\" colspan=\"5\">";
            // line 80
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </tbody>
            </table>

            <div class=\"card-footer d-flex align-items-center justify-content-between\">
                ";
        // line 87
        $this->loadTemplate("partial_batch_delete.html.twig", "mod_news_index.html.twig", 87)->display(twig_array_merge($context, ["action" => "admin/news/batch_delete"]));
        // line 88
        echo "                ";
        $this->loadTemplate("partial_pagination.html.twig", "mod_news_index.html.twig", 88)->display(twig_array_merge($context, ["list" => ($context["posts"] ?? null), "url" => "news/index"]));
        // line 89
        echo "            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-new\" role=\"tabpanel\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"";
        // line 94
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/news/create");
        echo "\" class=\"api-form\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("news");
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 97
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "title", [], "any", false, false, false, 99), "html", null, true);
        echo "\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 103
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioStatusDraft\" type=\"radio\" name=\"status\" value=\"draft\"checked>
                                <label class=\"form-check-label\" for=\"radioStatusDraft\">";
        // line 107
        echo twig_escape_filter($this->env, __trans("Draft"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioStatusActive\" type=\"radio\" name=\"status\" value=\"active\">
                                <label class=\"form-check-label\" for=\"radioStatusActive\">";
        // line 111
        echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 116
        echo twig_escape_filter($this->env, __trans("Content"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <textarea class=\"bb-textarea\" name=\"content\" rows=\"10\">";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "content", [], "any", false, false, false, 118), "html", null, true);
        echo "</textarea>
                            <small class=\"mt-2 form-hint\">If the text is very long you can use <strong>&lt;!--more--&gt;</strong> tag. Inserting this tag within the post will create and excerpt of text (before the tag) to be displayed in posts list. Users will be able to see whole content when they click on \"Read more\" button.</small>
                        </div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, __trans("Create"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
                </form>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 131
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["mf"], "macro_bb_editor", [".bb-textarea"], 131, $context, $this->getSourceContext());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_news_index.html.twig";
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
        return array (  302 => 131,  291 => 123,  283 => 118,  278 => 116,  270 => 111,  263 => 107,  256 => 103,  249 => 99,  244 => 97,  239 => 95,  233 => 94,  226 => 89,  223 => 88,  221 => 87,  215 => 83,  206 => 80,  203 => 79,  190 => 71,  186 => 70,  182 => 69,  171 => 63,  166 => 61,  160 => 59,  156 => 57,  153 => 56,  149 => 54,  147 => 53,  137 => 50,  132 => 48,  127 => 46,  123 => 44,  117 => 43,  115 => 42,  107 => 37,  103 => 36,  99 => 35,  90 => 28,  88 => 27,  77 => 19,  67 => 12,  63 => 10,  59 => 9,  52 => 7,  48 => 1,  46 => 5,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_news_index.html.twig", "/var/www/modules/News/html_admin/mod_news_index.html.twig");
    }
}
