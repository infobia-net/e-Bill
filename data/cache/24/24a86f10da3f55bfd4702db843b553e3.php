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

/* mod_notification_index.html.twig */
class __TwigTemplate_43a1a44016955fd1f862512981c18eb0 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_notification_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_notification_index.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "activity";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Notifications center"), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-index\" data-bs-toggle=\"tab\">";
        // line 12
        echo twig_escape_filter($this->env, __trans("Notifications"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-new-note\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 19
        echo twig_escape_filter($this->env, __trans("New note"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>

<div class=\"card\">
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
            <div class=\"card-body\">
                    <h5>";
        // line 28
        echo twig_escape_filter($this->env, __trans("Notifications"), "html", null, true);
        echo "</h5>
                </div>
                ";
        // line 30
        $this->loadTemplate("partial_search.html.twig", "mod_notification_index.html.twig", 30)->display($context);
        // line 31
        echo "                <table class=\"table card-table table-vcenter table-striped text-wrap\">
                    <thead>
                        <tr>
                            <th class=\"w-50\">";
        // line 34
        echo twig_escape_filter($this->env, __trans("Message"), "html", null, true);
        echo "</th>
                            <th>";
        // line 35
        echo twig_escape_filter($this->env, __trans("Date / Time"), "html", null, true);
        echo "</th>
                            <th>";
        // line 36
        echo twig_escape_filter($this->env, __trans("Author"), "html", null, true);
        echo "</th>
                            <th class=\"w-1\"></th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 41
        $context["events"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "notification_get_list", [twig_array_merge(["per_page" => 10, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 41)], ($context["request"] ?? null))], "method", false, false, false, 41);
        // line 42
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "list", [], "any", false, false, false, 42));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["event"]) {
            // line 43
            echo "                        <tr>
                            <td class=\"w-50\">";
            // line 44
            echo twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_string_render", [["_tpl" => twig_get_attribute($this->env, $this->source, $context["event"], "meta_value", [], "any", false, false, false, 44), "_try" => true]], "method", false, false, false, 44);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 45), "Y-m-d / H:i"), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "client_id", [], "any", false, false, false, 47), "html", null, true);
            echo "
                            </td>
                            <td>
                                <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
            // line 50
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("notification");
            echo "\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/notification/delete", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 50), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
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
            // line 58
            echo "                        <tr>
                            <td class=\"text-muted\" colspan=\"7\">";
            // line 59
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    </tbody>
                </table>
                ";
        // line 64
        $this->loadTemplate("partial_pagination.html.twig", "mod_notification_index.html.twig", 64)->display(twig_array_merge($context, ["list" => ($context["events"] ?? null), "url" => "notification"]));
        // line 65
        echo "
                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                    <a class=\"btn btn-danger api-link\" href=\"";
        // line 67
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/notification/delete_all", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\" data-api-confirm=\"";
        echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
        echo "\" data-api-reload=\"1\">
                        <svg class=\"icon\">
                            <use xlink:href=\"#delete\"></use>
                        </svg>
                        ";
        // line 71
        echo twig_escape_filter($this->env, __trans("Delete all"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        

        <div class=\"tab-pane fade\" id=\"tab-new-note\" role=\"tabpanel\">
            <div class=\"card-body\">
                <form method=\"post\" action=\"";
        // line 79
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/notification/add");
        echo "\" class=\"api-form\" data-api-reload=\"1\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 82
        echo twig_escape_filter($this->env, __trans("Note"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <textarea class=\"form-control\" name=\"message\" rows=\"5\" rows=\"10\" placeholder=\"";
        // line 84
        echo twig_escape_filter($this->env, __trans("Add note or todo task"), "html", null, true);
        echo "\" required></textarea>
                        </div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, __trans("Add note"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                </form>
            </div>
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
        return "mod_notification_index.html.twig";
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
        return array (  221 => 87,  215 => 84,  210 => 82,  205 => 80,  201 => 79,  190 => 71,  181 => 67,  177 => 65,  175 => 64,  171 => 62,  162 => 59,  159 => 58,  142 => 50,  136 => 47,  131 => 45,  127 => 44,  124 => 43,  118 => 42,  116 => 41,  108 => 36,  104 => 35,  100 => 34,  95 => 31,  93 => 30,  88 => 28,  76 => 19,  66 => 12,  62 => 10,  58 => 9,  51 => 5,  47 => 1,  45 => 7,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_notification_index.html.twig", "/var/www/modules/Notification/html_admin/mod_notification_index.html.twig");
    }
}
