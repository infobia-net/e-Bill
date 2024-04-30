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

/* mod_seo_settings.html.twig */
class __TwigTemplate_16d2c5a38d219817c1df66a491205562 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_seo_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_seo_settings.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("SEO settings"), "html", null, true);
    }

    // line 9
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<ul class=\"breadcrumb\">
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
        echo twig_escape_filter($this->env, __trans("SEO settings"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "<div class=\"card\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">";
        // line 28
        echo twig_escape_filter($this->env, __trans("SEO settings"), "html", null, true);
        echo "</h3>
    </div>

    ";
        // line 31
        $context["info"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "seo_info", [], "any", false, false, false, 31);
        // line 32
        echo "
    ";
        // line 33
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_seo"]], "method", false, false, false, 33);
        // line 34
        echo "    <form method=\"post\" action=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Configuration updated"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"ext\" value=\"mod_seo\">
        <div class=\"card-body\">
            <h3 class=\"card-title\">Enabled engines</h3>

            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "engines", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["i"] => $context["engine"]) {
            // line 41
            echo "            <div class=\"row\">
                <label class=\"col-md-3 form-label\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</label>
                <span class=\"col-md-5\">
                    <label class=\"form-check form-check-single form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\" name=\"sitemap_";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["engine"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["engine"], "enabled", [], "any", false, false, false, 45)) {
                echo "checked=\"checked\"";
            }
            echo ">
                    </label>
                </span>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>

        <div class=\"card-body border-bottom\">
            <span class=\"card-subtitle\">";
        // line 53
        echo twig_escape_filter($this->env, __trans("FOSSBilling will automatically ping every enabled search engine every 24 hours. Cron jobs must be working for this to work."), "html", null, true);
        echo "</span>
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <tbody>
                    <tr>
                        <td class=\"text-end\">";
        // line 60
        echo twig_escape_filter($this->env, __trans("Last time a ping was sent"), "html", null, true);
        echo ":</td>
                        <td>
                            ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "last_exec", [], "any", false, false, false, 62)) {
            // line 63
            echo "                                ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "last_exec", [], "any", false, false, false, 63)), "html", null, true);
            echo "
                                (";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, ($context["info"] ?? null), "last_exec", [], "any", false, false, false, 64)), "html", null, true);
            echo " ago)
                            ";
        } else {
            // line 66
            echo "                                ";
            echo twig_escape_filter($this->env, __trans("A ping wasn't sent yet"), "html", null, true);
            echo "
                            ";
        }
        // line 68
        echo "                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class=\"card-footer text-end\">
            <input type=\"submit\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
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
        return "mod_seo_settings.html.twig";
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
        return array (  202 => 75,  193 => 68,  187 => 66,  182 => 64,  177 => 63,  175 => 62,  170 => 60,  160 => 53,  155 => 50,  140 => 45,  134 => 42,  131 => 41,  127 => 40,  119 => 35,  112 => 34,  110 => 33,  107 => 32,  105 => 31,  99 => 28,  95 => 26,  91 => 25,  84 => 21,  77 => 19,  67 => 12,  63 => 10,  59 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_seo_settings.html.twig", "/var/www/modules/Seo/html_admin/mod_seo_settings.html.twig");
    }
}
