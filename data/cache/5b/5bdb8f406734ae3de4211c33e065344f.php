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

/* mod_spamchecker_settings.html.twig */
class __TwigTemplate_2e53c76052da0245b6bbd067d38d93ca extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_spamchecker_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_spamchecker_settings.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("SpamChecker settings"), "html", null, true);
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
                    <use xlink:href=\"#home\"/>
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
        echo twig_escape_filter($this->env, __trans("SpamChecker settings"), "html", null, true);
        echo "</li>
    </ul>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 28
        echo twig_escape_filter($this->env, __trans("SpamChecker settings"), "html", null, true);
        echo "</h3>
        </div>

        ";
        // line 31
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_spamchecker"]], "method", false, false, false, 31);
        // line 32
        echo "        <form method=\"post\" action=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\"
              data-api-msg=\"";
        // line 33
        echo twig_escape_filter($this->env, __trans("Configuration updated"), "html", null, true);
        echo "\">
            <div class=\"card-body\">
                <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"ext\" value=\"mod_spamchecker\">
                <div class=\"row\">
                    <label class=\"col-md-3 col-form-label\" for=\"block_ips_check\">";
        // line 38
        echo twig_escape_filter($this->env, __trans("Enable IP blocking"), "html", null, true);
        echo "</label>
                    <div class=\"row col-md-6 pt-2 ps-0\">
                        <label class=\"form-check form-check-single form-switch ps-0 mb-2\">
                            <input id=\"block_ips_check\" class=\"form-check-input\" name=\"block_ips\" type=\"checkbox\"
                                   ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "block_ips", [], "any", false, false, false, 42)) {
            echo "checked=\"checked\"";
        }
        echo "\">
                        </label>
                        <div class=\"col ps-0\">
                            <small class=\"form-hint\">";
        // line 45
        echo twig_escape_filter($this->env, __trans("Blocked IPs are not allowed to login, register or open public ticket. (One IP per line)"), "html", null, true);
        echo "</small>
                            <textarea id=\"block_ips\" class=\"form-control\" name=\"blocked_ips\" rows=\"5\" placeholder=\"127.0.0.1\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "blocked_ips", [], "any", false, false, false, 46), "html", null, true);
        echo "</textarea>
                            <label class=\"hidden\" for=\"block_ips\">Blocked IP list</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"card-body\">
                <h3 class=\"card-title\">";
        // line 54
        echo twig_escape_filter($this->env, __trans("reCAPTCHA settings"), "html", null, true);
        echo "</h3>
                <p class=\"card-subtitle\">
                    ";
        // line 56
        echo twig_escape_filter($this->env, __trans("Enable captcha for client registration and contact forms"), "html", null, true);
        echo "<br>
                    ";
        // line 57
        echo twig_escape_filter($this->env, __trans("Sign up for reCAPTCHA key for your domain at"), "html", null, true);
        echo "
                    <a href=\"https://www.google.com/recaptcha/about/\" target=\"_blank\">Google reCAPTCHA</a>
                </p>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\" for=\"captcha_enabled\">";
        // line 61
        echo twig_escape_filter($this->env, __trans("Enable reCAPTCHA"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6 pt-2 ps-0\">
                        <label class=\"form-check form-check-single form-switch ps-0\">
                            <input id=\"captcha_enabled\" class=\"form-check-input\" name=\"captcha_enabled\" type=\"checkbox\"
                                   ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "captcha_enabled", [], "any", false, false, false, 65)) {
            echo "checked=\"checked\"";
        }
        echo "\">
                        </label>
                    </div>
                </div>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\">";
        // line 70
        echo twig_escape_filter($this->env, __trans("reCAPTCHA version"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6 pt-2 ps-0\">
                        <label class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"captcha_version\" value=\"2\"
                                   ";
        // line 74
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "captcha_version", [], "any", false, false, false, 74) == "2")) {
            echo "checked=\"checked\"";
        }
        echo ">
                            <span class=\"form-check-label\">";
        // line 75
        echo twig_escape_filter($this->env, __trans("v2"), "html", null, true);
        echo "</span>
                        </label>
";
        // line 82
        echo "                    </div>
                </div>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\" for=\"captcha_recaptcha_publickey\">";
        // line 85
        echo twig_escape_filter($this->env, __trans("reCAPTCHA Public key"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6 row\">
                        <input class=\"form-control\" type=\"text\" id=\"captcha_recaptcha_publickey\" name=\"captcha_recaptcha_publickey\"
                               value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "captcha_recaptcha_publickey", [], "any", false, false, false, 88), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\" for=\"captcha_recaptcha_privatekey\">";
        // line 92
        echo twig_escape_filter($this->env, __trans("reCAPTCHA Secret key"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6 pt-2 row\">
                        <input class=\"form-control\" type=\"text\" id=\"captcha_recaptcha_privatekey\" name=\"captcha_recaptcha_privatekey\"
                               value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "captcha_recaptcha_privatekey", [], "any", false, false, false, 95), "html", null, true);
        echo "\">
                    </div>
                </div>
            </div>

            <div class=\"card-body\">
                <h3 class=\"card-title\">";
        // line 101
        echo twig_escape_filter($this->env, __trans("Stop Forum Spam settings"), "html", null, true);
        echo "</h3>
                <p class=\"card-subtitle\">";
        // line 102
        echo __trans("If enabled, client IP will be checked on the <a href=\"https://stopforumspam.com/\" target=\"_blank\">Stop Forum Spam</a> database before registration");
        echo "</p>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\" for=\"sfs\">";
        // line 104
        echo twig_escape_filter($this->env, __trans("Enable Stop Forum Spam"), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6 pt-2 ps-0\">
                        <label class=\"form-check form-check-single form-switch ps-0\">
                            <input id=\"sfs\" class=\"form-check-input\" name=\"sfs\" type=\"checkbox\"
                                   ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "sfs", [], "any", false, false, false, 108)) {
            echo "checked=\"checked\"";
        }
        echo "\">
                        </label>
                    </div>
                </div>
            </div>

            <div class=\"card-body\">
                <h3 class=\"card-title\">";
        // line 115
        echo twig_escape_filter($this->env, __trans("Temporary / disposable email protection"), "html", null, true);
        echo "</h3>
                <p class=\"card-subtitle\">";
        // line 116
        echo twig_escape_filter($this->env, __trans("If enabled, email addresses will be checked against a database of disposable email domains."), "html", null, true);
        echo "</p>
                <p class=\"card-subtitle\">";
        // line 117
        echo twig_escape_filter($this->env, __trans("This database is updated daily and provided free of charge by the FakeFilter project under the BSD 3-Clause License."), "html", null, true);
        echo "</p>
                <div class=\"mb-3 row\">
                    <label class=\"col-md-3 col-form-label\" for=\"check_temp_emails\">";
        // line 119
        echo twig_escape_filter($this->env, __trans("Check for temporary / disposable email addresses."), "html", null, true);
        echo "</label>
                    <div class=\"col-md-6 pt-2 ps-0\">
                        <label class=\"form-check form-check-single form-switch ps-0\">
                            <input id=\"check_temp_emails\" class=\"form-check-input\" name=\"check_temp_emails\" type=\"checkbox\"
                                   ";
        // line 123
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "check_temp_emails", [], "any", false, false, false, 123)) {
            echo " checked=\"checked\" ";
        }
        echo "\">
                        </label>
                    </div>
                </div>
            </div>

            <div class=\"card-footer text-end\">
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 130
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
        return "mod_spamchecker_settings.html.twig";
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
        return array (  297 => 130,  285 => 123,  278 => 119,  273 => 117,  269 => 116,  265 => 115,  253 => 108,  246 => 104,  241 => 102,  237 => 101,  228 => 95,  222 => 92,  215 => 88,  209 => 85,  204 => 82,  199 => 75,  193 => 74,  186 => 70,  176 => 65,  169 => 61,  162 => 57,  158 => 56,  153 => 54,  142 => 46,  138 => 45,  130 => 42,  123 => 38,  117 => 35,  112 => 33,  107 => 32,  105 => 31,  99 => 28,  95 => 26,  91 => 25,  84 => 21,  77 => 19,  67 => 12,  63 => 10,  59 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_spamchecker_settings.html.twig", "/var/www/modules/Spamchecker/html_admin/mod_spamchecker_settings.html.twig");
    }
}
