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

/* mod_staff_login_history.html.twig */
class __TwigTemplate_bd2572af630282ff0dd524a287cf14e3 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_staff_login_history.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_staff_login_history.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "activity";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Staff members login history"), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<div class=\"card overflow-auto\">
    <div class=\"card-body\">
        <h5>";
        // line 12
        echo twig_escape_filter($this->env, __trans("Staff members logins history"), "html", null, true);
        echo "</h5>
    </div>

    ";
        // line 15
        $this->loadTemplate("partial_search.html.twig", "mod_staff_login_history.html.twig", 15)->display($context);
        // line 16
        echo "    <table class=\"table card-table table-vcenter table-striped text-nowrap\">
        <thead>
            <tr>
                <th class=\"w-1\">
                    <input class=\"form-check-input m-0 align-middle batch-delete-master-checkbox\" type=\"checkbox\">
                </th>
                <th class=\"w-1\"></th>
                <th>";
        // line 23
        echo twig_escape_filter($this->env, __trans("Admin"), "html", null, true);
        echo "</th>
                <th>";
        // line 24
        echo twig_escape_filter($this->env, __trans("IP"), "html", null, true);
        echo "</th>
                <th>";
        // line 25
        echo twig_escape_filter($this->env, __trans("Country"), "html", null, true);
        echo "</th>
                <th>";
        // line 26
        echo twig_escape_filter($this->env, __trans("Date"), "html", null, true);
        echo "</th>
                <th class=\"w-1\"></th>
            </tr>
        </thead>

        <tbody>
        ";
        // line 32
        $context["history"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "staff_login_history_get_list", [twig_array_merge(["per_page" => 30, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 32)], ($context["request"] ?? null))], "method", false, false, false, 32);
        // line 33
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["history"] ?? null), "list", [], "any", false, false, false, 33));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["event"]) {
            // line 34
            echo "        <tr>
            <td>
                <input class=\"form-check-input m-0 align-middle batch-delete-checkbox\" type=\"checkbox\" data-item-id=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
            </td>
            <td>
                <a href=\"";
            // line 39
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\">
                    <span class=\"avatar avatar-xs d-none d-md-inline-block\" style=\"background-image: url(";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 40), "email", [], "any", false, false, false, 40)), "html", null, true);
            echo "&size=24)\"></span>
                </a>
            </td>
            <td>
                <a href=\"";
            // line 44
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\">
                    ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
            echo "
                </a>
            </td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "ip", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Box_TwigExtensions']->twig_ipcountryname_filter(twig_get_attribute($this->env, $this->source, $context["event"], "ip", [], "any", false, false, false, 49)), "Unknown"), "html", null, true);
            echo "</td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 50)), "html", null, true);
            echo "</td>
            <td>
                <a class=\"btn btn-icon api-link\"
                    href=\"";
            // line 53
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/staff/login_history_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 53), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                    data-api-confirm=\"";
            // line 54
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                    data-api-redirect=\"";
            // line 55
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/logins");
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
            // line 63
            echo "        <tr>
            <td class=\"text-muted\" colspan=\"7\">";
            // line 64
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </tbody>
    </table>

    <div class=\"card-footer d-flex align-items-center justify-content-between\">
        ";
        // line 71
        $this->loadTemplate("partial_batch_delete.html.twig", "mod_staff_login_history.html.twig", 71)->display(twig_array_merge($context, ["action" => "admin/staff/batch_delete_logs"]));
        // line 72
        echo "        ";
        $this->loadTemplate("partial_pagination.html.twig", "mod_staff_login_history.html.twig", 72)->display(twig_array_merge($context, ["list" => ($context["history"] ?? null), "url" => "staff/logins"]));
        // line 73
        echo "    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_staff_login_history.html.twig";
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
        return array (  205 => 73,  202 => 72,  200 => 71,  194 => 67,  185 => 64,  182 => 63,  169 => 55,  165 => 54,  161 => 53,  155 => 50,  151 => 49,  147 => 48,  141 => 45,  135 => 44,  128 => 40,  122 => 39,  116 => 36,  112 => 34,  106 => 33,  104 => 32,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  74 => 16,  72 => 15,  66 => 12,  62 => 10,  58 => 9,  51 => 5,  47 => 1,  45 => 7,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_staff_login_history.html.twig", "/var/www/modules/Staff/html_admin/mod_staff_login_history.html.twig");
    }
}
