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

/* mod_servicedomain_tld.html.twig */
class __TwigTemplate_50046bbd38f936f70f130fa2fd67639e extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_servicedomain_tld.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_servicedomain_tld.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "tld", [], "any", false, false, false, 5), "html", null, true);
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
        <li>
            <a href=\"";
        // line 19
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicedomain");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Domain management"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "tld", [], "any", false, false, false, 21), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "<div class=\"card\">
    <div class=\"card-body\">
        <h3>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "tld", [], "any", false, false, false, 28), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, __trans("Top level domain management"), "html", null, true);
        echo "</h3>

        <form method=\"post\" action=\"";
        // line 30
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicedomain/tld_update");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Top level domain settings updated."), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 33
        echo twig_escape_filter($this->env, __trans("Registrar"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <select class=\"form-select\" name=\"tld_registrar_id\">
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicedomain_registrar_get_pairs", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["id"] => $context["title"]) {
            // line 37
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"";
            if (($context["id"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "registrar", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </select>
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 43
        echo twig_escape_filter($this->env, __trans("Registration price"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"price_registration\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "price_registration", [], "any", false, false, false, 45), "html", null, true);
        echo "\" required>
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 49
        echo twig_escape_filter($this->env, __trans("Renewal price"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"price_renew\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "price_renew", [], "any", false, false, false, 51), "html", null, true);
        echo "\" required>
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 55
        echo twig_escape_filter($this->env, __trans("Transfer price"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"price_transfer\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "price_transfer", [], "any", false, false, false, 57), "html", null, true);
        echo "\" required>
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 61
        echo twig_escape_filter($this->env, __trans("Minimum years of registration"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <input class=\"form-control\" type=\"text\" name=\"min_years\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "min_years", [], "any", false, false, false, 63), "html", null, true);
        echo "\" required>
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 67
        echo twig_escape_filter($this->env, __trans("Allow registration"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"inputAllowRegisterYes\" type=\"radio\" name=\"allow_register\" value=\"1\"";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "allow_register", [], "any", false, false, false, 70)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"inputAllowRegisterYes\">";
        // line 71
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"inputAllowRegisterNo\" type=\"radio\" name=\"allow_register\" value=\"0\"";
        // line 74
        if ( !twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "allow_register", [], "any", false, false, false, 74)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"inputAllowRegisterNo\">";
        // line 75
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 80
        echo twig_escape_filter($this->env, __trans("Allow transfer"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"inputAllowTransferYes\" type=\"radio\" name=\"allow_transfer\" value=\"1\"";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "allow_transfer", [], "any", false, false, false, 83)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"inputAllowTransferYes\">";
        // line 84
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"inputAllowTransferNo\" type=\"radio\" name=\"allow_transfer\" value=\"0\"";
        // line 87
        if ( !twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "allow_transfer", [], "any", false, false, false, 87)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"inputAllowTransferNo\">";
        // line 88
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"form-label col-3 col-form-label\">";
        // line 93
        echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
        echo ":</label>
                <div class=\"col\">
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"inputActiveYes\" type=\"radio\" name=\"active\" value=\"1\"";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "active", [], "any", false, false, false, 96)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"inputActiveYes\">";
        // line 97
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"inputActiveNo\" type=\"radio\" name=\"active\" value=\"0\"";
        // line 100
        if ( !twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "active", [], "any", false, false, false, 100)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"inputActiveNo\">";
        // line 101
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </div>

            <input type=\"hidden\" name=\"tld\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "tld", [], "any", false, false, false, 106), "html", null, true);
        echo "\">
            <input type=\"submit\" value=\"";
        // line 107
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
        return "mod_servicedomain_tld.html.twig";
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
        return array (  296 => 107,  292 => 106,  284 => 101,  278 => 100,  272 => 97,  266 => 96,  260 => 93,  252 => 88,  246 => 87,  240 => 84,  234 => 83,  228 => 80,  220 => 75,  214 => 74,  208 => 71,  202 => 70,  196 => 67,  189 => 63,  184 => 61,  177 => 57,  172 => 55,  165 => 51,  160 => 49,  153 => 45,  148 => 43,  142 => 39,  127 => 37,  123 => 36,  117 => 33,  112 => 31,  106 => 30,  99 => 28,  95 => 26,  91 => 25,  84 => 21,  77 => 19,  67 => 12,  63 => 10,  59 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_servicedomain_tld.html.twig", "/var/www/modules/Servicedomain/html_admin/mod_servicedomain_tld.html.twig");
    }
}
