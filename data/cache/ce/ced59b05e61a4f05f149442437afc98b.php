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

/* mod_serviceproxmox_server.html.twig */
class __TwigTemplate_b28bc43a527a8e86a40813293e14c11e extends Template
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
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "layout_default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_serviceproxmox_server.html.twig", 1)->unwrap();
        // line 6
        $context["active_menu"] = "system";
        // line 2
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_serviceproxmox_server.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, __trans("Manage Proxmox server"), "html", null, true);
        echo "
";
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
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("serviceproxmox");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Proxmox Servers"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\t<h5>
\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, __trans("Manage Proxmox server"), "html", null, true);
        echo "
\t\t\t</h5>
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<form method=\"post\" action=\"admin/serviceproxmox/server_update\" id=\"server-update\" class=\"api-form\" data-api-msg=\"Server updated\">
\t\t\t\t<input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
\t\t\t\t<input type=\"hidden\" name=\"server_id\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "id", [], "any", false, false, false, 32), "html", null, true);
        echo "\"/>

\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t<label class=\"form-label col-3 col-form-label\">
\t\t\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo ":
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "\" required placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Unique name to identify this server"), "html", null, true);
        echo "\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t<label class=\"form-label col-3 col-form-label\">
\t\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, __trans("Group"), "html", null, true);
        echo ":
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"group\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "group", [], "any", false, false, false, 46), "html", null, true);
        echo "\" required placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Server group"), "html", null, true);
        echo "\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t<label class=\"form-label col-3 col-form-label\">
\t\t\t\t\t\t";
        // line 50
        echo twig_escape_filter($this->env, __trans("Hostname"), "html", null, true);
        echo ":
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"hostname\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "hostname", [], "any", false, false, false, 53), "html", null, true);
        echo "\" required placeholder=\"";
        echo twig_escape_filter($this->env, __trans("server1.yourserverdomain.com"), "html", null, true);
        echo "\"></div>
\t\t\t\t</div>
            <div class=\"mb-3 row\">
\t\t\t\t\t<label class=\"form-label col-3 col-form-label\">
\t\t\t\t\t\t";
        // line 57
        echo twig_escape_filter($this->env, __trans("Port"), "html", null, true);
        echo ":
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"port\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "port", [], "any", false, false, false, 60), "html", null, true);
        echo "\" required placeholder=\"";
        echo twig_escape_filter($this->env, __trans("8006"), "html", null, true);
        echo "\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t<label class=\"form-label col-3 col-form-label\">
\t\t\t\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, __trans("IPv4 address"), "html", null, true);
        echo ":
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"ipv4\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "ipv4", [], "any", false, false, false, 67), "html", null, true);
        echo "\" required placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Primary IPv4 address of the server"), "html", null, true);
        echo "\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t<label class=\"form-label col-3 col-form-label\">
\t\t\t\t\t\t";
        // line 71
        echo twig_escape_filter($this->env, __trans("IPv6 address"), "html", null, true);
        echo ":
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"ipv6\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "ipv6", [], "any", false, false, false, 74), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Primary IPv6 address of the server"), "html", null, true);
        echo "\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t<label class=\"form-label col-3 col-form-label\">
\t\t\t\t\t\t";
        // line 78
        echo twig_escape_filter($this->env, __trans("Proxmox user realm"), "html", null, true);
        echo ":
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"realm\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "realm", [], "any", false, false, false, 81), "html", null, true);
        echo "\" required placeholder=\"pam\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t<label class=\"form-label col-3 col-form-label\">
\t\t\t\t\t\t";
        // line 85
        echo twig_escape_filter($this->env, __trans("Root user"), "html", null, true);
        echo ":
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"root_user\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "root_user", [], "any", false, false, false, 88), "html", null, true);
        echo "\" required placeholder=\"";
        echo twig_escape_filter($this->env, __trans("Root username"), "html", null, true);
        echo "\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t<label class=\"form-label col-3 col-form-label\">
\t\t\t\t\t\t";
        // line 92
        echo twig_escape_filter($this->env, __trans("Root password"), "html", null, true);
        echo ":
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"root_password\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "root_password", [], "any", false, false, false, 95), "html", null, true);
        echo "\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t<label class=\"form-label col-3 col-form-label\">
\t\t\t\t\t\t";
        // line 99
        echo twig_escape_filter($this->env, __trans("API Token name"), "html", null, true);
        echo ":
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"tokenname\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "tokenname", [], "any", false, false, false, 102), "html", null, true);
        echo "\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t<label class=\"form-label col-3 col-form-label\">
\t\t\t\t\t\t";
        // line 106
        echo twig_escape_filter($this->env, __trans("API Token Secret"), "html", null, true);
        echo ":
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"tokenvalue\" placeholder=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "tokenvalue", [], "any", false, false, false, 109), "html", null, true);
        echo "\" enabled=\"false\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t<label class=\"form-label col-3 col-form-label\">
\t\t\t\t\t\t";
        // line 113
        echo twig_escape_filter($this->env, __trans("Extra configuration"), "html", null, true);
        echo ":
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"config\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "config", [], "any", false, false, false, 116), "html", null, true);
        echo "\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3 row\">
\t\t\t\t\t<label class=\"form-label col-3 col-form-label\">
\t\t\t\t\t\t";
        // line 120
        echo twig_escape_filter($this->env, __trans("Enable/Disable"), "html", null, true);
        echo ":
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" id=\"radioActiveYes\" type=\"radio\" name=\"active\" value=\"1\" ";
        // line 124
        if (twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "active", [], "any", false, false, false, 124)) {
            echo " checked=\"checked\" ";
        }
        echo ">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"radioActiveYes\">
\t\t\t\t\t\t\t\t";
        // line 126
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t<input class=\"form-check-input\" id=\"radioActiveNo\" type=\"radio\" name=\"active\" value=\"0\" ";
        // line 130
        if ( !twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "active", [], "any", false, false, false, 130)) {
            echo " checked=\"checked\" ";
        }
        echo ">
\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"radioActiveNo\">
\t\t\t\t\t\t\t\t";
        // line 132
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<input type=\"submit\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, __trans("Update server"), "html", null, true);
        echo "\" class=\"btn btn-primary\">

\t\t\t\t<a class=\"btn btn-primary api-link\" href=\"";
        // line 140
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/serviceproxmox/server_test_connection", ["id" => twig_get_attribute($this->env, $this->source, ($context["server"] ?? null), "id", [], "any", false, false, false, 140), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, __trans("Test connection"), "html", null, true);
        echo "\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Server connected"), "html", null, true);
        echo "\">
\t\t\t\t\t<svg class=\"icon\">
\t\t\t\t\t\t<use xlink:href=\"#wifi\"/>
\t\t\t\t\t</svg>
\t\t\t\t\t<span>
\t\t\t\t\t\t";
        // line 145
        echo twig_escape_filter($this->env, __trans("Test connection"), "html", null, true);
        echo "
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</form>
\t\t</div>
\t</div>
";
    }

    // line 152
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_serviceproxmox_server.html.twig";
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
        return array (  360 => 152,  349 => 145,  337 => 140,  332 => 138,  323 => 132,  316 => 130,  309 => 126,  302 => 124,  295 => 120,  288 => 116,  282 => 113,  275 => 109,  269 => 106,  262 => 102,  256 => 99,  249 => 95,  243 => 92,  234 => 88,  228 => 85,  221 => 81,  215 => 78,  206 => 74,  200 => 71,  191 => 67,  185 => 64,  176 => 60,  170 => 57,  161 => 53,  155 => 50,  146 => 46,  140 => 43,  131 => 39,  125 => 36,  118 => 32,  114 => 31,  106 => 26,  101 => 23,  97 => 22,  90 => 19,  83 => 17,  73 => 10,  69 => 8,  65 => 7,  58 => 4,  54 => 3,  49 => 2,  47 => 6,  45 => 1,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_serviceproxmox_server.html.twig", "/var/www/modules/Serviceproxmox/html_admin/mod_serviceproxmox_server.html.twig");
    }
}
