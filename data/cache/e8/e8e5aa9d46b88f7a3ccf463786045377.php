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

/* mod_support_helpdesk.html.twig */
class __TwigTemplate_009a1a0cdbb7eb066c69da4bcba1983d extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_support_helpdesk.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_support_helpdesk.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
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
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 22
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/support");
        echo "#tab-helpdesks\">";
        echo twig_escape_filter($this->env, __trans("Support"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 24
        echo twig_escape_filter($this->env, __trans("Helpdesk -"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "
<div class=\"card\">
    <div class=\"card-header\">
        <div>
            <h1 class=\"card-title\">";
        // line 33
        echo twig_escape_filter($this->env, __trans("Helpdesk"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "name", [], "any", false, false, false, 33), "html", null, true);
        echo "</h1>
            <p class=\"card-subtitle\">";
        // line 34
        echo twig_escape_filter($this->env, __trans("Helpdesk name will be visible for clients when submitting a new ticket."), "html", null, true);
        echo "</p>
        </div>
    </div>
    <form method=\"post\" action=\"";
        // line 37
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/helpdesk_update");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Helpdesk Updated"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
        <div class=\"card-body\">
            <div class=\"mb-3 row\">
                <label class=\"col-md-3 col-form-label\">";
        // line 41
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</label>
                <div class=\"col-md-6\">
                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "name", [], "any", false, false, false, 43), "html", null, true);
        echo "\" required>
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"col-md-3 col-form-label\">";
        // line 47
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo "</label>
                <div class=\"col-md-6\">
                    <input class=\"form-control\" type=\"email\" name=\"email\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "email", [], "any", false, false, false, 49), "html", null, true);
        echo "\" required>
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"col-md-3 col-form-label\">";
        // line 53
        echo twig_escape_filter($this->env, __trans("Signature"), "html", null, true);
        echo "</label>
                <div class=\"col-md-6\">
                    <textarea class=\"form-control\" name=\"signature\" rows=\"2\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "signature", [], "any", false, false, false, 55), "html", null, true);
        echo "</textarea>
                </div>
            </div>
            <div class=\"mb-3 row\">
                <label class=\"col-md-3 col-form-label\">";
        // line 59
        echo twig_escape_filter($this->env, __trans("Close tickets after (in hours)"), "html", null, true);
        echo "</label>
                <div class=\"col-md-6\">
                    <input class=\"form-control\" type=\"text\" size=\"3\" name=\"close_after\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "close_after", [], "any", false, false, false, 61), "html", null, true);
        echo "\" required>
                    <small class=\"form-hint\">";
        // line 62
        echo twig_escape_filter($this->env, __trans("Define a very large number of hours to disable auto close ticket option."), "html", null, true);
        echo "</small>
                </div>
            </div>
            <div class=\"row\">
                <label class=\"col-md-3 form-label\">";
        // line 66
        echo twig_escape_filter($this->env, __trans("Tickets can be reopened?"), "html", null, true);
        echo "</label>
                <div class=\"col-md-6\">
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioCanReopenYes\" type=\"radio\" name=\"can_reopen\" value=\"1\"";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "can_reopen", [], "any", false, false, false, 69)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioCanReopenYes\">";
        // line 70
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"form-check form-check-inline\">
                        <input class=\"form-check-input\" id=\"radioCanReopenNo\" type=\"radio\" name=\"can_reopen\" value=\"0\"";
        // line 73
        if ( !twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "can_reopen", [], "any", false, false, false, 73)) {
            echo " checked";
        }
        echo ">
                        <label class=\"form-check-label\" for=\"radioCanReopenNo\">";
        // line 74
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </div>
        </div>

        <input type=\"hidden\" name=\"id\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "id", [], "any", false, false, false, 80), "html", null, true);
        echo "\">

        <div class=\"card-footer d-flex justify-content-between\">
            <div>
                <a href=\"";
        // line 84
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/support");
        echo "\" class=\"btn btn-secondary\">
                    <svg class=\"icon\">
                        <use xlink:href=\"#arrow-sm-left\" />
                    </svg>
                    ";
        // line 88
        echo twig_escape_filter($this->env, __trans("Go Back"), "html", null, true);
        echo "
                </a>
                <a class=\"btn btn-icon btn-danger api-link\"
                   href=\"";
        // line 91
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/helpdesk_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "id", [], "any", false, false, false, 91), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\"
                   data-api-type=\"danger\"
                   data-api-confirm-btn=\"";
        // line 93
        echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
        echo "\"
                   data-api-confirm=\"";
        // line 94
        echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
        echo "\"
                   data-api-redirect=\"";
        // line 95
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/support");
        echo "\">
                    <svg class=\"icon\">
                        <use xlink:href=\"#delete\" />
                    </svg>
                </a>
            </div>

            <button class=\"btn btn-primary\" type=\"submit\">";
        // line 102
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
        return "mod_support_helpdesk.html.twig";
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
        return array (  263 => 102,  253 => 95,  249 => 94,  245 => 93,  240 => 91,  234 => 88,  227 => 84,  220 => 80,  211 => 74,  205 => 73,  199 => 70,  193 => 69,  187 => 66,  180 => 62,  176 => 61,  171 => 59,  164 => 55,  159 => 53,  152 => 49,  147 => 47,  140 => 43,  135 => 41,  129 => 38,  123 => 37,  117 => 34,  111 => 33,  105 => 29,  101 => 28,  92 => 24,  85 => 22,  77 => 19,  67 => 12,  63 => 10,  59 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_support_helpdesk.html.twig", "/var/www/modules/Support/html_admin/mod_support_helpdesk.html.twig");
    }
}
