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

/* mod_servicedomain_registrar.html.twig */
class __TwigTemplate_4c1d04a62bbca2a8b25c2159c8045d89 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_servicedomain_registrar.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_servicedomain_registrar.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Registrar"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
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
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicedomain");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Domain management"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 22
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicedomain");
        echo "#tab-registrars\">";
        echo twig_escape_filter($this->env, __trans("Registrars"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "<div class=\"card\">
    <div class=\"card-body\">
        <h3>";
        // line 31
        echo twig_escape_filter($this->env, __trans("Registrar configuration"), "html", null, true);
        echo "</h3>
        <h5>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "title", [], "any", false, false, false, 32), "html", null, true);
        echo "</h5>
        <p class=\"text-muted\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "label", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>

        <form method=\"post\" action=\"";
        // line 35
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicedomain/registrar_update");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Registrar updated"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 38
        echo twig_escape_filter($this->env, __trans("Enable test mode"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioTestModeYes\" type=\"radio\" name=\"test_mode\" value=\"1\"";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "test_mode", [], "any", false, false, false, 41)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioTestModeYes\">";
        // line 42
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioTestModeNo\" type=\"radio\" name=\"test_mode\" value=\"0\"";
        // line 45
        if ( !twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "test_mode", [], "any", false, false, false, 45)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioTestModeNo\">";
        // line 46
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </div>

            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 52
        echo twig_escape_filter($this->env, __trans("Registrar title"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "title", [], "any", false, false, false, 54), "html", null, true);
        echo "\">
                </div>
            </div>

            ";
        // line 59
        echo "            ";
        echo twig_call_macro($macros["mf"], "macro_build_form", [twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "form", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "config", [], "any", false, false, false, 59)], 59, $context, $this->getSourceContext());
        echo "

            <input type=\"hidden\" name=\"id\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "\">
            <input type=\"submit\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
        </form>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_servicedomain_registrar.html.twig";
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
        return array (  188 => 62,  184 => 61,  178 => 59,  171 => 54,  166 => 52,  157 => 46,  151 => 45,  145 => 42,  139 => 41,  133 => 38,  128 => 36,  122 => 35,  117 => 33,  113 => 32,  109 => 31,  105 => 29,  101 => 28,  94 => 24,  87 => 22,  79 => 19,  69 => 12,  65 => 10,  61 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_servicedomain_registrar.html.twig", "/var/www/modules/Servicedomain/html_admin/mod_servicedomain_registrar.html.twig");
    }
}
