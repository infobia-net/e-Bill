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

/* mod_email_history.html.twig */
class __TwigTemplate_c5fad2fb5a549e8a3dd6ec0025e8f565 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_email_history.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_email_history.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "activity";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Email history"), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $context["config"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_email"]], "method", false, false, false, 10);
        // line 11
        echo "    ";
        if (( !twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "log_enabled", [], "any", true, true, false, 11) || (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "log_enabled", [], "any", false, false, false, 11) != 1))) {
            // line 12
            echo "        <div class=\"alert alert-primary alert-dismissible fade show mb-3\" role=\"alert\">
            <strong>";
            // line 13
            echo twig_escape_filter($this->env, __trans("Information"), "html", null, true);
            echo ":</strong> ";
            echo twig_escape_filter($this->env, __trans("Email logging is not enabled. If you want to log sent mails to database, enable it in"), "html", null, true);
            echo "
                <a href=\"";
            // line 14
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/email");
            echo "\"> ";
            echo twig_escape_filter($this->env, __trans("email settings."), "html", null, true);
            echo "</a>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        // line 18
        echo "
<div class=\"card\">
    <div class=\"card-body\">
        <h3>";
        // line 21
        echo twig_escape_filter($this->env, __trans("Email history"), "html", null, true);
        echo "</h3>
    </div>

    ";
        // line 24
        $this->loadTemplate("partial_search.html.twig", "mod_email_history.html.twig", 24)->display($context);
        // line 25
        echo "    <table class=\"table card-table table-vcenter table-striped text-nowrap\">
        <thead>
            <tr>
                <th class=\"w-1\">
                    <input class=\"form-check-input m-0 align-middle batch-delete-master-checkbox\" type=\"checkbox\">
                </th>
                <th>";
        // line 31
        echo twig_escape_filter($this->env, __trans("To"), "html", null, true);
        echo "</th>
                <th>";
        // line 32
        echo twig_escape_filter($this->env, __trans("From"), "html", null, true);
        echo "</th>
                <th>";
        // line 33
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo "</th>
                <th>";
        // line 34
        echo twig_escape_filter($this->env, __trans("Date"), "html", null, true);
        echo "</th>
                <th class=\"w-1\"></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 39
        $context["emails"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "email_email_get_list", [twig_array_merge(["per_page" => 30, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 39)], ($context["request"] ?? null))], "method", false, false, false, 39);
        // line 40
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["emails"] ?? null), "list", [], "any", false, false, false, 40));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["email"]) {
            // line 41
            echo "        <tr>
            <td>
                <input class=\"form-check-input m-0 align-middle batch-delete-checkbox\" type=\"checkbox\" data-item-id=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\">
            </td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "recipients", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "sender", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 48
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/email");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "subject", [], "any", false, false, false, 48), 40), "html", null, true);
            echo "</a>
            </td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "created_at", [], "any", false, false, false, 50)), "html", null, true);
            echo "</td>
            <td>
                <a class=\"btn btn-icon\" href=\"";
            // line 52
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/email");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\">
                    <svg class=\"icon\">
                        <use xlink:href=\"#edit\" />
                    </svg>
                </a>
                <a class=\"btn btn-icon api-link\"
                    href=\"";
            // line 58
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/email/email_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 58)]);
            echo "\"
                    data-api-redirect=\"";
            // line 59
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("email/history");
            echo "\"
                    data-api-confirm=\"";
            // line 60
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
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
            // line 68
            echo "            <tr>
                <td class=\"text-muted\" colspan=\"7\">";
            // line 69
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </tbody>
    </table>

    <div class=\"card-footer d-flex align-items-center justify-content-between\">
        ";
        // line 76
        $this->loadTemplate("partial_batch_delete.html.twig", "mod_email_history.html.twig", 76)->display(twig_array_merge($context, ["action" => "admin/email/batch_delete"]));
        // line 77
        echo "        ";
        $this->loadTemplate("partial_pagination.html.twig", "mod_email_history.html.twig", 77)->display(twig_array_merge($context, ["list" => ($context["emails"] ?? null), "url" => "email/history"]));
        // line 78
        echo "    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_email_history.html.twig";
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
        return array (  222 => 78,  219 => 77,  217 => 76,  211 => 72,  202 => 69,  199 => 68,  186 => 60,  182 => 59,  178 => 58,  167 => 52,  162 => 50,  153 => 48,  148 => 46,  144 => 45,  139 => 43,  135 => 41,  129 => 40,  127 => 39,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  99 => 25,  97 => 24,  91 => 21,  86 => 18,  77 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  58 => 9,  51 => 5,  47 => 1,  45 => 7,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_email_history.html.twig", "/var/www/modules/Email/html_admin/mod_email_history.html.twig");
    }
}
