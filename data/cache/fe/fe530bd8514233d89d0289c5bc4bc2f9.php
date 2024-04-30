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

/* mod_staff_profile.html.twig */
class __TwigTemplate_22a3f54a5c29bbd02324621f7b96bc73 extends Template
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
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_staff_profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Profile"), "html", null, true);
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-profile\" data-bs-toggle=\"tab\">";
        // line 14
        echo twig_escape_filter($this->env, __trans("Profile"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-password\" data-bs-toggle=\"tab\">";
        // line 17
        echo twig_escape_filter($this->env, __trans("Change Password"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-api\" data-bs-toggle=\"tab\">API</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-gravatar\" data-bs-toggle=\"tab\">Gravatar</a>
        </li>
    </ul>

<div class=\"card\">
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-profile\" role=\"tabpanel\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"";
        // line 31
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/profile/update");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Profile updated"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 34
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 40
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo "</label>
                        <div class=\"col\">

                            <input class=\"form-control\" type=\"text\" name=\"email\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 43), "html", null, true);
        echo "\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 47
        echo twig_escape_filter($this->env, __trans("Signature"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <textarea class=\"form-control\" name=\"signature\" rows=\"3\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "signature", [], "any", false, false, false, 49), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, __trans("Update profile"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-password\" role=\"tabpanel\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"";
        // line 60
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/profile/change_password");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Password Changed"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label for=\"current_password\" class=\"col-3 col-form-label\">";
        // line 63
        echo twig_escape_filter($this->env, __trans("Current Password"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"password\" name=\"current_password\" id=\"current_password\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label for=\"new_password\" class=\"col-3 col-form-label\">";
        // line 69
        echo twig_escape_filter($this->env, __trans("New Password"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"password\" name=\"new_password\" id=\"new_password\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label for=\"confirm_password\" class=\"col-3 col-form-label\">";
        // line 75
        echo twig_escape_filter($this->env, __trans("Confirm Password"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"password\" name=\"confirm_password\" id=\"confirm_password\" required>
                        </div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, __trans("Change Password"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-api\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h3>";
        // line 88
        echo twig_escape_filter($this->env, __trans("API Key"), "html", null, true);
        echo "</h3>
                <p class=\"text-muted\">";
        // line 89
        echo twig_escape_filter($this->env, __trans("API key allows integration with external applications. You will need this key for authentication."), "html", null, true);
        echo "</p>
                <p class=\"text-muted\">";
        // line 90
        echo twig_escape_filter($this->env, __trans("External application can control every aspect of FOSSBilling using this API key."), "html", null, true);
        echo "</p>
                <p class=\"text-muted\">";
        // line 91
        echo twig_escape_filter($this->env, __trans("Warning! Resetting the key will break existing applications using it."), "html", null, true);
        echo "</p>

                <form method=\"post\" action=\"";
        // line 93
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/profile/generate_api_key");
        echo "\" class=\"api-form\" data-api-jsonp=\"onAfterKeyUpdate\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 96
        echo twig_escape_filter($this->env, __trans("API Key"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" id=\"apikey\" type=\"text\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "profile_get", [], "any", false, false, false, 98), "api_token", [], "any", false, false, false, 98), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, __trans("Generate new key"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-gravatar\" role=\"tabpanel\">
            <div class=\"card-body text-center\">
                <div>
                    <span class=\"avatar avatar-xl mb-3 avatar-rounded\" style=\"background-image: url(";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_gravatar_filter(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 110)), "html", null, true);
        echo "&size=112)\"></span>
                </div>
                <p>";
        // line 112
        echo twig_escape_filter($this->env, __trans("Change your avatar at"), "html", null, true);
        echo " <a href=\"https://gravatar.com/\" target=\"_blank\">gravatar.com</a>.</p>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 119
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "<script>
    function onAfterKeyUpdate(result) {
        bb.post('admin/profile/get', {}, function(result) {
            \$('#apikey').val(result.api_token);
            FOSSBilling.message(\"";
        // line 124
        echo twig_escape_filter($this->env, __trans("New API key generated. Applications using old key are now not working."), "html", null, true);
        echo "\");
        })
    }
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_staff_profile.html.twig";
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
        return array (  266 => 124,  260 => 120,  256 => 119,  246 => 112,  241 => 110,  230 => 102,  223 => 98,  218 => 96,  213 => 94,  209 => 93,  204 => 91,  200 => 90,  196 => 89,  192 => 88,  182 => 81,  173 => 75,  164 => 69,  155 => 63,  150 => 61,  144 => 60,  134 => 53,  127 => 49,  122 => 47,  115 => 43,  109 => 40,  102 => 36,  97 => 34,  92 => 32,  86 => 31,  69 => 17,  63 => 14,  59 => 12,  55 => 11,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_staff_profile.html.twig", "/var/www/modules/Staff/html_admin/mod_staff_profile.html.twig");
    }
}
