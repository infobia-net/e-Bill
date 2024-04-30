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

/* mod_product_addons.html.twig */
class __TwigTemplate_f163f580a4ec0fb748a9f941af1b3ecb extends Template
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
            'js' => [$this, 'block_js'],
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
        $context["active_menu"] = "products";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_product_addons.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Addons"), "html", null, true);
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
                    <use xlink:href=\"#home\" />
                </svg>
            </a>
        </li>
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 17
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Products"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\">";
        // line 19
        echo twig_escape_filter($this->env, __trans("Addons"), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link active\" id=\"index-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-index\" type=\"button\" role=\"tab\" aria-controls=\"index\" aria-selected=\"true\">";
        // line 26
        echo twig_escape_filter($this->env, __trans("Addons"), "html", null, true);
        echo "</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-link\" id=\"new-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-new\" type=\"button\" role=\"tab\" aria-controls=\"index\" aria-selected=\"true\">
                <svg class=\"icon\">
                    <use xlink:href=\"#plus\" />
                </svg>
                <span class=\"ms-2\">";
        // line 33
        echo twig_escape_filter($this->env, __trans("New addon"), "html", null, true);
        echo "</span>
            </button>
        </li>
    </ul>

<div class=\"card\">
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\" aria-labelledby=\"index-tab\">
            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <thead>
                    <tr>
                        <th class=\"w-1\">#</th>
                        <th>";
        // line 45
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                        <th>";
        // line 46
        echo twig_escape_filter($this->env, __trans("Description"), "html", null, true);
        echo "</th>
                        <th>";
        // line 47
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_addon_get_pairs", [], "any", false, false, false, 52));
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
        foreach ($context['_seq'] as $context["addon_id"] => $context["addon_title"]) {
            // line 53
            echo "                    <tr>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 56
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/product/addon");
            echo "/";
            echo twig_escape_filter($this->env, $context["addon_id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["addon_title"], "html", null, true);
            echo "</a>
                        </td>
                        <td><!-- TODO: show addon description --></td>
                        <td><!-- TODO: show addon status --></td>
                        <td class=\"w-1\">
                            <a class=\"btn btn-icon\" href=\"";
            // line 61
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/product/addon");
            echo "/";
            echo twig_escape_filter($this->env, $context["addon_id"], "html", null, true);
            echo "\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#edit\" />
                                </svg>
                            </a>
                            <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
            // line 66
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product/addons");
            echo "\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/product/delete", ["id" => $context["addon_id"], "CSRFToken" => ($context["CSRFToken"] ?? null)]);
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
            // line 74
            echo "                    <tr>
                        <td class=\"text-muted\" colspan=\"2\">";
            // line 75
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['addon_id'], $context['addon_title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-new\" role=\"tabpanel\" aria-labelledby=\"new-tab\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"";
        // line 84
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/product/addon_create");
        echo "\" class=\"api-form\" data-api-jsonp=\"onAfterAddonCreate\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 87
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" id=\"statusEnabled\" name=\"status\" value=\"enabled\">
                                <label class=\"form-check-label\" for=\"statusEnabled\">";
        // line 91
        echo twig_escape_filter($this->env, __trans("Enabled"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" id=\"statusDisabled\" name=\"status\" value=\"disabled\" checked>
                                <label class=\"form-check-label\" for=\"statusDisabled\">";
        // line 95
        echo twig_escape_filter($this->env, __trans("Disabled"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 100
        echo twig_escape_filter($this->env, __trans("Activation"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" id=\"setupAfterOrder\" name=\"setup\" value=\"after_order\">
                                <label class=\"form-check-label\" for=\"setupAfterOrder\">";
        // line 104
        echo twig_escape_filter($this->env, __trans("After order is placed"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" id=\"setupAfterPayment\" name=\"setup\" value=\"after_payment\" checked>
                                <label class=\"form-check-label\" for=\"setupAfterPayment\">";
        // line 108
        echo twig_escape_filter($this->env, __trans("After payment is received"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" type=\"radio\" id=\"setupManual\" name=\"setup\" value=\"manual\">
                                <label class=\"form-check-label\" for=\"setupManual\">";
        // line 112
        echo twig_escape_filter($this->env, __trans("Manual activation"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 117
        echo twig_escape_filter($this->env, __trans("Icon"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"icon_url\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "icon_url", [], "any", false, false, false, 119), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 123
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 125), "html", null, true);
        echo "\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 129
        echo twig_escape_filter($this->env, __trans("Description"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <textarea class=\"form-control\" name=\"description\" rows=\"5\">";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 131), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 135
        echo twig_escape_filter($this->env, __trans("Create"), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 143
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "<script>
    function onAfterAddonCreate(result) {
        bb.redirect(\"";
        // line 146
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product/addon/");
        echo "/\" + result);
    }
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_product_addons.html.twig";
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
        return array (  348 => 146,  344 => 144,  340 => 143,  329 => 135,  322 => 131,  317 => 129,  310 => 125,  305 => 123,  298 => 119,  293 => 117,  285 => 112,  278 => 108,  271 => 104,  264 => 100,  256 => 95,  249 => 91,  242 => 87,  237 => 85,  233 => 84,  225 => 78,  216 => 75,  213 => 74,  188 => 66,  178 => 61,  166 => 56,  161 => 54,  158 => 53,  140 => 52,  132 => 47,  128 => 46,  124 => 45,  109 => 33,  99 => 26,  95 => 24,  91 => 23,  84 => 19,  77 => 17,  67 => 10,  63 => 8,  59 => 7,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_product_addons.html.twig", "/var/www/modules/Product/html_admin/mod_product_addons.html.twig");
    }
}
