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

/* modal/mod_support_new_helpdesk.html.twig */
class __TwigTemplate_a2dbf47f32587829d2aee4c1618861c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"modal modal-blur fade\" id=\"mod-support-new-helpdesk\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <form method=\"post\" action=\"";
        // line 4
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/helpdesk_create");
        echo "\" class=\"api-form\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/support");
        echo "\">
                <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 7
        echo twig_escape_filter($this->env, __trans("Create New Helpdesk"), "html", null, true);
        echo "</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 12
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "\" required>
                        </div>
                    </div>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 18
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"email\" name=\"email\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "\" required>
                        </div>
                    </div>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 24
        echo twig_escape_filter($this->env, __trans("Signature"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <textarea class=\"form-control\" name=\"signature\" rows=\"2\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "signature", [], "any", false, false, false, 26), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 30
        echo twig_escape_filter($this->env, __trans("Close tickets after (in hours)"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" size=\"3\" name=\"close_after\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "close_after", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "close_after", [], "any", false, false, false, 32), "48")) : ("48")), "html", null, true);
        echo "\" required>
                            <small class=\"form-hint\">";
        // line 33
        echo twig_escape_filter($this->env, __trans("Define a very large number of hours to disable auto close ticket option."), "html", null, true);
        echo "</small>
                        </div>
                    </div>
                    <div class=\"form-group mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 37
        echo twig_escape_filter($this->env, __trans("Tickets can be reopened?"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioCanReopenYes\" type=\"radio\" name=\"can_reopen\" value=\"1\" checked>
                                <label class=\"form-check-label\" for=\"radioCanReopenYes\">";
        // line 41
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioCanReopenNo\" type=\"radio\" name=\"can_reopen\" value=\"0\">
                                <label class=\"form-check-label\" for=\"radioCanReopenNo\">";
        // line 45
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "id", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
                    <button class=\"btn btn-primary w-100\" type=\"submit\">";
        // line 52
        echo twig_escape_filter($this->env, __trans("Create"), "html", null, true);
        echo "</button>
                </div>
            </form>
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
        return "modal/mod_support_new_helpdesk.html.twig";
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
        return array (  140 => 52,  136 => 51,  127 => 45,  120 => 41,  113 => 37,  106 => 33,  102 => 32,  97 => 30,  90 => 26,  85 => 24,  78 => 20,  73 => 18,  66 => 14,  61 => 12,  53 => 7,  48 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modal/mod_support_new_helpdesk.html.twig", "/var/www/modules/Support/html_admin/modal/mod_support_new_helpdesk.html.twig");
    }
}
