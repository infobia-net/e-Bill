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

/* mod_email_details.html.twig */
class __TwigTemplate_a8f07ef86817be46e80f8e7de064df8b extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_email_details.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["active_menu"] = "activity";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "subject", [], "any", false, false, false, 5), "html", null, true);
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
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("email/history");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Email history"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "subject", [], "any", false, false, false, 19), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "<div class=\"card\">
    <div class=\"card-body\">
        <h5>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "subject", [], "any", false, false, false, 26), "html", null, true);
        echo "</h5>
    </div>

    <table class=\"table card-table table-vcenter table-striped text-nowrap\">
        <tbody>
            <tr>
                <td class=\"w-50 text-end\">";
        // line 32
        echo twig_escape_filter($this->env, __trans("From"), "html", null, true);
        echo ":</td>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "sender", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <td class=\"text-end\">";
        // line 37
        echo twig_escape_filter($this->env, __trans("To"), "html", null, true);
        echo ":</td>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "recipients", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <td class=\"text-end\">";
        // line 42
        echo twig_escape_filter($this->env, __trans("Sent"), "html", null, true);
        echo ":</td>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "created_at", [], "any", false, false, false, 43)), "html", null, true);
        echo "</td>
            </tr>
         </tbody>
    </table>

    <div class=\"card-footer text-center\">
        <a class=\"btn btn-primary api-link\"
            href=\"";
        // line 50
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/email/email_resend", ["id" => twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "id", [], "any", false, false, false, 50)]);
        echo "\"
            data-api-msg=\"";
        // line 51
        echo twig_escape_filter($this->env, __trans("Email resent"), "html", null, true);
        echo "\">
            <svg class=\"icon icon-tabler\" width=\"24\" height=\"24\">
                <use xlink:href=\"#refresh\" />
            </svg>
            <span class=\"d-block text-secondary\">";
        // line 55
        echo twig_escape_filter($this->env, __trans("Resend"), "html", null, true);
        echo "</span>
        </a>
        <a class=\"btn btn btn-primary api-link\"
            href=\"";
        // line 58
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/email/email_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "id", [], "any", false, false, false, 58)]);
        echo "\"
            data-api-confirm=\"";
        // line 59
        echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
        echo "\"
            data-api-redirect=\"";
        // line 60
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("email/history");
        echo "\">
            <svg class=\"icon icon-tabler\" width=\"24\" height=\"24\">
                <use xlink:href=\"#delete\" />
            </svg>
            <span class=\"d-block text-secondary\">";
        // line 64
        echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
        echo "</span>
        </a>
    </div>

    <div class=\"card-body\">
        ";
        // line 69
        echo twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "content_html", [], "any", false, false, false, 69);
        echo "
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_email_details.html.twig";
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
        return array (  182 => 69,  174 => 64,  167 => 60,  163 => 59,  159 => 58,  153 => 55,  146 => 51,  142 => 50,  132 => 43,  128 => 42,  121 => 38,  117 => 37,  110 => 33,  106 => 32,  97 => 26,  93 => 24,  89 => 23,  82 => 19,  75 => 17,  65 => 10,  61 => 8,  57 => 7,  50 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_email_details.html.twig", "/var/www/modules/Email/html_admin/mod_email_details.html.twig");
    }
}
