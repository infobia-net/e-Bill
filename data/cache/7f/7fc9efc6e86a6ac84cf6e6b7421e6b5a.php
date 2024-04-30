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

/* mod_wysiwyg_settings.html.twig */
class __TwigTemplate_869f8c7d215c59a7ce148ca0fd8c26a5 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_wysiwyg_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_wysiwyg_settings.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("WYSIWYG settings"), "html", null, true);
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
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 21
        echo twig_escape_filter($this->env, __trans("WYSIWYG settings"), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <div class=\"card\">
        <form method=\"post\" action=\"";
        // line 27
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Configuration updated"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"ext\" value=\"mod_wysiwyg\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">";
        // line 30
        echo twig_escape_filter($this->env, __trans("WYSIWYG settings"), "html", null, true);
        echo "</h3>
                ";
        // line 31
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_wysiwyg"]], "method", false, false, false, 31);
        // line 32
        echo "                <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                <div class=\"row\">
                    <label class=\"form-label col-3 form-label\">";
        // line 34
        echo twig_escape_filter($this->env, __trans("Default editor"), "html", null, true);
        echo "</label>
                    <div class=\"col\">
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "wysiwyg_editors", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["editor"] => $context["title"]) {
            // line 37
            echo "                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioCheck\" type=\"radio\" name=\"editor\"
                                       value=\"";
            // line 39
            echo twig_escape_filter($this->env, $context["editor"], "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "editor", [], "any", false, false, false, 39) == $context["editor"])) {
                echo " checked";
            }
            echo ">
                                <label class=\"form-check-label\" for=\"radioCheck\">";
            // line 40
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</label>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['editor'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </div>
                </div>
            </div>
            <div class=\"card-footer text-end\">
                <button class=\"btn btn-primary\" type=\"submit\">";
        // line 47
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "</button>
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
        return "mod_wysiwyg_settings.html.twig";
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
        return array (  154 => 47,  148 => 43,  139 => 40,  131 => 39,  127 => 37,  123 => 36,  118 => 34,  112 => 32,  110 => 31,  106 => 30,  98 => 27,  95 => 26,  91 => 25,  84 => 21,  77 => 19,  67 => 12,  63 => 10,  59 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_wysiwyg_settings.html.twig", "/var/www/modules/Wysiwyg/html_admin/mod_wysiwyg_settings.html.twig");
    }
}
