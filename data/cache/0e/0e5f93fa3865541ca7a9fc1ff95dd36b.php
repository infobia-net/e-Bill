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

/* mod_activity_index.html.twig */
class __TwigTemplate_cb59c9a29877acbd73b1d95e9d9a2e30 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_activity_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_activity_index.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "activity";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "System activity";
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
        echo twig_escape_filter($this->env, __trans("System activity"), "html", null, true);
        echo "</h5>
    </div>

    ";
        // line 15
        $this->loadTemplate("partial_search.html.twig", "mod_activity_index.html.twig", 15)->display($context);
        // line 16
        echo "    <table class=\"table card-table table-vcenter table-striped text-nowrap sortable\">
        <thead>
            <tr>
                <th class=\"w-1 no-sort\">
                    <input class=\"form-check-input m-0 align-middle batch-delete-master-checkbox\" type=\"checkbox\">
                </th>
                <th class=\"w-1 no-sort\"></th>
                <th>";
        // line 23
        echo twig_escape_filter($this->env, __trans("User"), "html", null, true);
        echo "</th>
                <th>";
        // line 24
        echo twig_escape_filter($this->env, __trans("Message"), "html", null, true);
        echo "</th>
                <th>";
        // line 25
        echo twig_escape_filter($this->env, __trans("IP"), "html", null, true);
        echo "</th>
                <th>";
        // line 26
        echo twig_escape_filter($this->env, __trans("Country"), "html", null, true);
        echo "</th>
                <th>";
        // line 27
        echo twig_escape_filter($this->env, __trans("Date"), "html", null, true);
        echo "</th>
                <th class=\"w-1\"></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "activity_log_get_list", [twig_array_merge(["per_page" => 30, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 32)], ($context["request"] ?? null))], "method", false, false, false, 32);
        // line 33
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "list", [], "any", false, false, false, 33));
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
                ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 39)) {
                // line 40
                echo "                <a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "html", null, true);
                echo "\">
                    <span class=\"avatar avatar-sm d-none d-md-inline-block\" style=\"background-image: url(";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 41), "email", [], "any", false, false, false, 41)), "html", null, true);
                echo "&size=20)\"></span>
                </a>
                ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 43
$context["event"], "staff", [], "any", false, false, false, 43)) {
                // line 44
                echo "                <a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
                echo "\">
                    <span class=\"avatar avatar-sm d-none d-md-inline-block\" style=\"background-image: url(";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 45), "email", [], "any", false, false, false, 45)), "html", null, true);
                echo "&size=24)\"></span>
                </a>
                ";
            } else {
                // line 48
                echo "                &nbsp;
                ";
            }
            // line 50
            echo "            </td>
            <td>
                ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 52)) {
                // line 53
                echo "                <a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
                echo "</a>
                ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 54
$context["event"], "staff", [], "any", false, false, false, 54)) {
                // line 55
                echo "                <a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 57
                echo "                Guest
                ";
            }
            // line 59
            echo "            </td>
            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "ip", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
            <td>";
            // line 62
            echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Box_TwigExtensions']->twig_ipcountryname_filter(twig_get_attribute($this->env, $this->source, $context["event"], "ip", [], "any", false, false, false, 62)), "Unknown"), "html", null, true);
            echo "</td>
            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 63)), "html", null, true);
            echo "</td>
            <td>
                <a class=\"btn btn-icon api-link\"
                    href=\"";
            // line 66
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/activity/log_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 66), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                    data-api-confirm=\"";
            // line 67
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                    data-api-redirect=\"";
            // line 68
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("activity");
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
            // line 76
            echo "        <tr>
            <td colspan=\"6\">";
            // line 77
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </tbody>
    </table>

    <div class=\"card-footer d-flex align-items-center justify-content-between\">
        ";
        // line 84
        $this->loadTemplate("partial_batch_delete.html.twig", "mod_activity_index.html.twig", 84)->display(twig_array_merge($context, ["action" => "admin/activity/batch_delete"]));
        // line 85
        echo "        ";
        $this->loadTemplate("partial_pagination.html.twig", "mod_activity_index.html.twig", 85)->display(twig_array_merge($context, ["list" => ($context["events"] ?? null), "url" => "activity"]));
        // line 86
        echo "    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_activity_index.html.twig";
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
        return array (  254 => 86,  251 => 85,  249 => 84,  243 => 80,  234 => 77,  231 => 76,  218 => 68,  214 => 67,  210 => 66,  204 => 63,  200 => 62,  196 => 61,  192 => 60,  189 => 59,  185 => 57,  175 => 55,  173 => 54,  164 => 53,  162 => 52,  158 => 50,  154 => 48,  148 => 45,  141 => 44,  139 => 43,  134 => 41,  127 => 40,  125 => 39,  119 => 36,  115 => 34,  109 => 33,  107 => 32,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  74 => 16,  72 => 15,  66 => 12,  62 => 10,  58 => 9,  51 => 5,  47 => 1,  45 => 7,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_activity_index.html.twig", "/var/www/modules/Activity/html_admin/mod_activity_index.html.twig");
    }
}
