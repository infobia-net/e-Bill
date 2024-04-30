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

/* mod_client_settings.html.twig */
class __TwigTemplate_40c03c2a5210110b3ad9b29acbd9b509 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_client_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_client_settings.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Client settings"), "html", null, true);
    }

    // line 9
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <ul class=\"breadcrumb\">
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
        echo twig_escape_filter($this->env, __trans("Client settings"), "html", null, true);
        echo "</li>
    </ul>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_client"]], "method", false, false, false, 26);
        // line 27
        echo "    <div class=\"card-tabs\">
        <form method=\"post\" action=\"";
        // line 28
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Configuration updated"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"ext\" value=\"mod_client\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link active\" href=\"#tab-index\" data-bs-toggle=\"tab\">";
        // line 33
        echo twig_escape_filter($this->env, __trans("General"), "html", null, true);
        echo "</a>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" href=\"#tab-custom-fields\" data-bs-toggle=\"tab\">";
        // line 36
        echo twig_escape_filter($this->env, __trans("Custom Fields"), "html", null, true);
        echo "</a>
                </li>
            </ul>
            <div class=\"card\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
                        <div class=\"card-body\">
                            <div class=\"mb-3 row\">
                                <label class=\"col-sm-4 col-md-3 form-label\">";
        // line 44
        echo twig_escape_filter($this->env, __trans("Disable new signups"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-7 col-md-6\">
                                    <label class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" name=\"disable_signup\" type=\"checkbox\" ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "disable_signup", [], "any", false, false, false, 47)) {
            echo " checked=\"checked\"";
        }
        echo ">
                                    </label>
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-sm-4 col-md-3 form-label\">";
        // line 52
        echo twig_escape_filter($this->env, __trans("Require email confirmation"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-7 col-md-6\">
                                    <label class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" name=\"require_email_confirmation\" type=\"checkbox\" ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "require_email_confirmation", [], "any", false, false, false, 55)) {
            echo " checked=\"checked\"";
        }
        echo ">
                                    </label>
                                    <small class=\"form-hint\">";
        // line 57
        echo twig_escape_filter($this->env, __trans("After enabling this feature, all existing users will have to confirm their emails if it was not done before"), "html", null, true);
        echo ".</small>
                                </div>
                            </div>

                            <div class=\"mb-3 row\">
                                <label class=\"col-sm-4 col-md-3 form-label\">";
        // line 62
        echo twig_escape_filter($this->env, __trans("Disable email change"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-7 col-md-6\">
                                    <label class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" name=\"disable_change_email\" type=\"checkbox\" ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "disable_change_email", [], "any", false, false, false, 65)) {
            echo " checked=\"checked\"";
        }
        echo ">
                                    </label>
                                </div>
                            </div>

                            <div class=\"mb-3 row\">
                                <label class=\"col-sm-4 col-md-3 form-label\">";
        // line 71
        echo twig_escape_filter($this->env, __trans("Required fields"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-7 col-md-6\">
                                    <select class=\"form-select\" name=\"required[]\" multiple size=\"13\">
                                        <optgroup label=\"General\">
                                            <option value=\"last_name\" ";
        // line 75
        if (twig_in_filter("last_name", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 75))) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("Last Name"), "html", null, true);
        echo "</option>
                                            <option value=\"company\" ";
        // line 76
        if (twig_in_filter("company", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 76))) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("Company"), "html", null, true);
        echo "</option>
                                            <option value=\"gender\" ";
        // line 77
        if (twig_in_filter("gender", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 77))) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("Gender"), "html", null, true);
        echo "</option>
                                            <option value=\"birthday\" ";
        // line 78
        if (twig_in_filter("birthday", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 78))) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("Birthday"), "html", null, true);
        echo "</option>
                                        </optgroup>
                                        <optgroup label=\"Address\">
                                            <option value=\"country\" ";
        // line 81
        if (twig_in_filter("country", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 81))) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("Country"), "html", null, true);
        echo "</option>
                                            <option value=\"city\" ";
        // line 82
        if (twig_in_filter("city", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 82))) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("City"), "html", null, true);
        echo "</option>
                                            <option value=\"state\" ";
        // line 83
        if (twig_in_filter("state", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 83))) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("State"), "html", null, true);
        echo "</option>
                                            <option value=\"address_1\" ";
        // line 84
        if (twig_in_filter("address_1", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 84))) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("Address Line 1"), "html", null, true);
        echo "</option>
                                            <option value=\"address_2\" ";
        // line 85
        if (twig_in_filter("address_2", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 85))) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("Address Line 2"), "html", null, true);
        echo "</option>
                                            <option value=\"postcode\" ";
        // line 86
        if (twig_in_filter("last_name", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 86))) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("Post code"), "html", null, true);
        echo "</option>
                                            <option value=\"phone\" ";
        // line 87
        if (twig_in_filter("phone", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 87))) {
            echo "selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, __trans("Phone"), "html", null, true);
        echo "</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer text-end\">
                            <input type=\"submit\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                        </div>
                    </div>

                    <div class=\"tab-pane fade\" id=\"tab-custom-fields\" role=\"tabpanel\">
                        <div class=\"card-body\">
                            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 101
            echo "                                ";
            $context["field_name"] = ("custom_" . $context["i"]);
            // line 102
            echo "                                ";
            $context["custom_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "custom_fields", [], "any", false, false, false, 102), ($context["field_name"] ?? null), [], "any", false, false, false, 102);
            // line 103
            echo "                                <div class=\"mb-4 row\">
                                    <label class=\"col-sm-4 col-md-3 form-label\">";
            // line 104
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "title", [], "any", false, false, false, 104))) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "title", [], "any", false, false, false, 104), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, __trans("Custom_"), "html", null, true);
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo ") ";
            } else {
                echo twig_escape_filter($this->env, __trans("Custom_"), "html", null, true);
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            }
            echo "</label>
                                    <div class=\"col-sm-7 col-md-6\">
                                        <label class=\"form-check form-check-inline\">
                                            <input class=\"form-check-input\" id=\"checkboxActive-";
            // line 107
            echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
            echo "\" type=\"checkbox\" name=\"custom_fields[";
            echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
            echo "][active]\" value=\"1\"";
            if (twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "active", [], "any", false, false, false, 107)) {
                echo " checked";
            }
            echo ">
                                            <span class=\"form-check-label\">";
            // line 108
            echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
            echo "</span>
                                        </label>
                                        <label class=\"form-check form-check-inline\">
                                            <input class=\"form-check-input\" id=\"checkboxRequired-";
            // line 111
            echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
            echo "\" type=\"checkbox\" name=\"custom_fields[";
            echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
            echo "][required]\" value=\"1\"";
            if (twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "required", [], "any", false, false, false, 111)) {
                echo " checked";
            }
            echo ">
                                            <span class=\"form-check-label\">";
            // line 112
            echo twig_escape_filter($this->env, __trans("Required"), "html", null, true);
            echo "</span>
                                        </label>
                                        <input class=\"form-control\" type=\"text\" placeholder=\"";
            // line 114
            echo twig_escape_filter($this->env, __trans("Field title"), "html", null, true);
            echo "\" name=\"custom_fields[";
            echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
            echo "][title]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "title", [], "any", false, false, false, 114), "html", null, true);
            echo "\">
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                        </div>
                        <div class=\"card-footer text-end\">
                            <input type=\"submit\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                        </div>
                    </div>
                </div>
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
        return "mod_client_settings.html.twig";
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
        return array (  375 => 120,  371 => 118,  357 => 114,  352 => 112,  342 => 111,  336 => 108,  326 => 107,  310 => 104,  307 => 103,  304 => 102,  301 => 101,  297 => 100,  288 => 94,  274 => 87,  266 => 86,  258 => 85,  250 => 84,  242 => 83,  234 => 82,  226 => 81,  216 => 78,  208 => 77,  200 => 76,  192 => 75,  185 => 71,  174 => 65,  168 => 62,  160 => 57,  153 => 55,  147 => 52,  137 => 47,  131 => 44,  120 => 36,  114 => 33,  107 => 29,  101 => 28,  98 => 27,  95 => 26,  91 => 25,  84 => 21,  77 => 19,  67 => 12,  63 => 10,  59 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_client_settings.html.twig", "/var/www/modules/Client/html_admin/mod_client_settings.html.twig");
    }
}
