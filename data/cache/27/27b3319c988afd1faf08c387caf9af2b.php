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

/* mod_cron_settings.html.twig */
class __TwigTemplate_0c86f09409b4f723b24c938a60be454e extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_cron_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_cron_settings.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Cron settings"), "html", null, true);
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
        echo twig_escape_filter($this->env, __trans("Cron settings"), "html", null, true);
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
        <div class=\"card-header\">
            <div>
                <h3 class=\"card-title\">";
        // line 29
        echo twig_escape_filter($this->env, __trans("Cron settings"), "html", null, true);
        echo "</h3>
            </div>
        </div>
        <div class=\"card-body border-bottom\">
            <span class=\"card-subtitle\">";
        // line 33
        echo twig_escape_filter($this->env, __trans("Scheduled tasks must be enabled immediately after installation. Cron is responsible for sending your clients reminder about payments, domain renewal notices and many more."), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 35
        $context["cron"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "cron_info", [], "any", false, false, false, 35);
        // line 36
        echo "        <div class=\"table-responsive\">
            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <tbody>
                <tr>
                    <td class=\"w-50 text-end\">";
        // line 40
        echo twig_escape_filter($this->env, __trans("Timezone"), "html", null, true);
        echo ":</td>
                    <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "medium", "zzz"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td class=\"text-end\">";
        // line 44
        echo twig_escape_filter($this->env, __trans("Time on server"), "html", null, true);
        echo ":</td>
                    <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, "now"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td class=\"text-end\">";
        // line 48
        echo twig_escape_filter($this->env, __trans("Last time scheduled tasks were executed"), "html", null, true);
        echo ":</td>
                    <td>
                        ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "last_cron_exec", [], "any", false, false, false, 50)) {
            // line 51
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "last_cron_exec", [], "any", false, false, false, 51)), "html", null, true);
            echo "
                            (";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_timeago_filter(twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "last_cron_exec", [], "any", false, false, false, 52)), "html", null, true);
            echo " ago)
                        ";
        } else {
            // line 54
            echo "                            ";
            echo twig_escape_filter($this->env, __trans("Scheduled tasks were never executed"), "html", null, true);
            echo "
                        ";
        }
        // line 56
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"text-end\">";
        // line 59
        echo twig_escape_filter($this->env, __trans("Unix crontab setup"), "html", null, true);
        echo ":</td>
                    <td>*/5 * * * * php ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "cron_path", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class=\"card-body container\">
            ";
        // line 66
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_cron"]], "method", false, false, false, 66);
        // line 67
        echo "            <form method=\"post\" action=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Configuration updated"), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"ext\" value=\"mod_cron\">
                <div class=\"row\">
                    <div class=\"col-3\">
                        <label>";
        // line 72
        echo twig_escape_filter($this->env, __trans("Enable the cron API endpoint for guests"), "html", null, true);
        echo "</label>
                    </div>
                    <div class=\"col-1\">
                        <label class=\"form-check form-switch\">
                            <input class=\"form-check-input\" name=\"guest_cron\" type=\"checkbox\" ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "guest_cron", [], "any", false, false, false, 76)) {
            echo " checked=\"checked\"";
        }
        echo ">
                        </label>
                    </div>

                    <p class=\"text-muted\">";
        // line 80
        echo twig_escape_filter($this->env, __trans("If enabled, this URL can be used to execute the cronjob:"), "html", null, true);
        echo " ";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/cron/run");
        echo "</p>
                    <input class=\"btn btn-primary w-25\" type=\"submit\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\">
                </div>
            </form>
        </div>
        <div class=\"card-footer text-center\">
            <a href=\"";
        // line 86
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/cron/run", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\" class=\"btn btn-primary api-link\" target=\"_blank\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Cron executed"), "html", null, true);
        echo "\">
                <svg class=\"icon icon-tabler\">
                    <use xlink:href=\"#play\"/>
                </svg>
                <span>";
        // line 90
        echo twig_escape_filter($this->env, __trans("Execute now"), "html", null, true);
        echo "</span>
            </a>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_cron_settings.html.twig";
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
        return array (  236 => 90,  227 => 86,  219 => 81,  213 => 80,  204 => 76,  197 => 72,  190 => 68,  183 => 67,  181 => 66,  172 => 60,  168 => 59,  163 => 56,  157 => 54,  152 => 52,  147 => 51,  145 => 50,  140 => 48,  134 => 45,  130 => 44,  124 => 41,  120 => 40,  114 => 36,  112 => 35,  107 => 33,  100 => 29,  95 => 26,  91 => 25,  84 => 21,  77 => 19,  67 => 12,  63 => 10,  59 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_cron_settings.html.twig", "/var/www/modules/Cron/html_admin/mod_cron_settings.html.twig");
    }
}
