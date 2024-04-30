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

/* mod_staff_login.html.twig */
class __TwigTemplate_f56f5efa9fa59913ba81b07cb74c4733 extends Template
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
        return "layout_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout_login.html.twig", "mod_staff_login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Login"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"page page-center\">
    <div class=\"container-tight py-4\">
        <div class=\"text-center mb-4\">
            <a href=\"";
        // line 10
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\" class=\"navbar-brand\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 11), "logo_url", [], "any", false, false, false, 11), "html", null, true);
        echo "\" height=\"75\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
            </a>
        </div>
        <div class=\"card card-md\">
            <div class=\"card-body\">
                ";
        // line 16
        if (($context["create_admin"] ?? null)) {
            // line 17
            echo "                    <h2 class=\"card-title text-center mb-4\">";
            echo twig_escape_filter($this->env, __trans("Create main administrator account"), "html", null, true);
            echo "</h2>
                    <form class=\"api-form\" action=\"";
            // line 18
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/staff/create");
            echo "\" method=\"post\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("index");
            echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"inputEmail\">";
            // line 21
            echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
            echo "</label>
                            <div class=\"col\">
                                <input class=\"form-control\" id=\"inputEmail\" type=\"email\" name=\"email\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 23), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, __trans("Enter your email address"), "html", null, true);
            echo "\">
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"inputPassword\">";
            // line 27
            echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
            echo "</label>
                            <div class=\"col\">
                                <input class=\"form-control\" id=\"inputPassword\" type=\"password\" name=\"password\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "password", [], "any", false, false, false, 29), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, __trans("Enter your password"), "html", null, true);
            echo "\">
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <button class=\"btn btn-primary w-100\" type=\"submit\">";
            // line 33
            echo twig_escape_filter($this->env, __trans("Create administrator account"), "html", null, true);
            echo "</button>
                        </div>
                    </form>
                ";
        } else {
            // line 37
            echo "                ";
            $context["params"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_settings", [["ext" => "mod_staff"]], "method", false, false, false, 37);
            // line 38
            echo "                    <h2 class=\"h2 text-center mb-4\">";
            echo twig_escape_filter($this->env, __trans("Log into your account"), "html", null, true);
            echo "</h2>
                    <form class=\"api-form\" action=\"";
            // line 39
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/staff/login");
            echo "\" method=\"post\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter(((array_key_exists("redirect_uri", $context)) ? (_twig_default_filter(($context["redirect_uri"] ?? null), "/")) : ("/")));
            echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"inputEmail\">";
            // line 42
            echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
            echo "</label>
                            <input class=\"form-control\"
                                id=\"inputEmail\"
                                type=\"email\"
                                name=\"email\"
                                value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 47), "html", null, true);
            echo "\"
                                placeholder=\"";
            // line 48
            echo twig_escape_filter($this->env, __trans("Enter your email address"), "html", null, true);
            echo "\"
                                required
                                autofocus>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"inputPassword\">
                                ";
            // line 54
            echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
            echo "
                                ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "reset_pw", [], "any", false, false, false, 55) == 1)) {
                // line 56
                echo "                                <span class=\"form-label-description\">
                                    <a href=\"";
                // line 57
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/passwordreset");
                echo "\">";
                echo twig_escape_filter($this->env, __trans("Forgot your password?"), "html", null, true);
                echo "</a>
                                </span>
                                ";
            }
            // line 60
            echo "                            </label>
                            <input class=\"form-control\"
                                id=\"inputPassword\"
                                type=\"password\"
                                name=\"password\"
                                value=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "password", [], "any", false, false, false, 65), "html", null, true);
            echo "\"
                                placeholder=\"";
            // line 66
            echo twig_escape_filter($this->env, __trans("Enter your password"), "html", null, true);
            echo "\"
                                required>
                        </div>
                        <div class=\"form-footer\">
                            <button class=\"btn btn-primary w-100\" type=\"submit\">";
            // line 70
            echo twig_escape_filter($this->env, __trans("Login"), "html", null, true);
            echo "</button>
                        </div>
                    </form>
                ";
        }
        // line 74
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_staff_login.html.twig";
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
        return array (  213 => 74,  206 => 70,  199 => 66,  195 => 65,  188 => 60,  180 => 57,  177 => 56,  175 => 55,  171 => 54,  162 => 48,  158 => 47,  150 => 42,  145 => 40,  139 => 39,  134 => 38,  131 => 37,  124 => 33,  115 => 29,  110 => 27,  101 => 23,  96 => 21,  91 => 19,  85 => 18,  80 => 17,  78 => 16,  68 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_staff_login.html.twig", "/var/www/modules/Staff/html_admin/mod_staff_login.html.twig");
    }
}
