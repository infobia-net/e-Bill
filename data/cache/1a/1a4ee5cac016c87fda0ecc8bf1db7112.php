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

/* mod_cookieconsent_index.html.twig */
class __TwigTemplate_9818843920d471476fc8157635f9eb55 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_cookieconsent_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_cookieconsent_index.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "extensions";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Cookie consent settings";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">";
        // line 12
        echo twig_escape_filter($this->env, __trans("Edit cookie consent message text"), "html", null, true);
        echo "</h3>
        </div>
        <form method=\"post\" action=\"";
        // line 14
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\"
              data-api-msg=\"";
        // line 15
        echo twig_escape_filter($this->env, __trans("Configuration updated"), "html", null, true);
        echo "\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-10\">

                        <p>";
        // line 20
        echo __trans("Here you can specify message which will be shown to user. It will be shown until user will click <strong>Close &times;</strong> button, however it will not be intrusive and will not disturb to perform any actions.");
        echo "</p>
                        <div class=\"alert alert-info\" role=\"alert\">
                            ";
        // line 22
        echo twig_escape_filter($this->env, __trans("If there is a need to change the way notification looks or is being displayed, you can do it by editing"), "html", null, true);
        echo "
                            <b>";
        // line 23
        echo twig_escape_filter($this->env, twig_constant("PATH_ROOT"), "html", null, true);
        echo "/modules/Cookieconsent/html_client/mod_cookieconsent_index.html.twig</b>
                        </div>
                        ";
        // line 25
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_cookieconsent"]], "method", false, false, false, 25);
        // line 26
        echo "                        <textarea class=\"form-control\" cols=\"5\" rows=\"10\" name=\"message\" id=\"cookie-message\"
                                  placeholder=\"";
        // line 27
        echo twig_escape_filter($this->env, __trans("Add note or todo task"), "html", null, true);
        echo "\">";
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "message", [], "any", false, false, false, 27)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "message", [], "any", false, false, false, 27), "html", null, true);
        } else {
            echo "This website uses cookies. By continuing to use this website, you consent to our use of these cookies.";
        }
        echo "</textarea>
                    </div>
                </div>
            </div>
            <div class=\"card-footer text-end\">
                <input type=\"hidden\" name=\"ext\" value=\"mod_cookieconsent\"/>
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 33
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
        return "mod_cookieconsent_index.html.twig";
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
        return array (  117 => 33,  102 => 27,  99 => 26,  97 => 25,  92 => 23,  88 => 22,  83 => 20,  75 => 15,  71 => 14,  66 => 12,  62 => 10,  58 => 9,  51 => 5,  47 => 1,  45 => 7,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_cookieconsent_index.html.twig", "/var/www/modules/Cookieconsent/html_admin/mod_cookieconsent_index.html.twig");
    }
}
