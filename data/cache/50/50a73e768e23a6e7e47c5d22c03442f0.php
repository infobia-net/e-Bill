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

/* mod_massmailer_index.html.twig */
class __TwigTemplate_1f681fbc5977af3c2f060a2d9e28578e extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_massmailer_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_massmailer_index.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Mass mailer"), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"card-tabs\">

        <ul class=\"nav nav-tabs\" data-bs-toggle=\"tabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a href=\"#index\" class=\"nav-link active\" data-bs-toggle=\"tab\" aria-selected=\"true\"
                   role=\"tab\">";
        // line 15
        echo twig_escape_filter($this->env, __trans("Messages"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a href=\"#new\" class=\"nav-link\" data-bs-toggle=\"tab\" aria-selected=\"true\" role=\"tab\">
                    <svg class=\"icon me-2\">
                        <use xlink:href=\"#plus\"/>
                    </svg>
                    ";
        // line 22
        echo twig_escape_filter($this->env, __trans("New message"), "html", null, true);
        echo "
                </a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a href=\"#settings\" class=\"nav-link\" data-bs-toggle=\"tab\" aria-selected=\"true\" role=\"tab\">
                    <svg class=\"icon me-2\">
                        <use xlink:href=\"#cog\"/>
                    </svg>
                    ";
        // line 30
        echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
        echo "
                </a>
            </li>
        </ul>

        <div class=\"card\">
            <div class=\"tab-content\">
                <div class=\"tab-pane fade show active\" id=\"index\" role=\"tabpanel\">
                    ";
        // line 38
        $this->loadTemplate("partial_search.html.twig", "mod_massmailer_index.html.twig", 38)->display($context);
        // line 39
        echo "                    <div class=\"table-responsive\">
                        <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                            <thead>
                            <tr>
                                <th>";
        // line 43
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo "</th>
                                <th>";
        // line 44
        echo twig_escape_filter($this->env, __trans("From"), "html", null, true);
        echo "</th>
                                <th>";
        // line 45
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 50
        $context["msgs"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "massmailer_get_list", [twig_array_merge(["per_page" => 30, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 50)], ($context["request"] ?? null))], "method", false, false, false, 50);
        // line 51
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["msgs"] ?? null), "list", [], "any", false, false, false, 51));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["msg"]) {
            // line 52
            echo "                                <tr>
                                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "subject", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "from_name", [], "any", false, false, false, 54), "html", null, true);
            echo " <br/>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "from_email", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                    <td>";
            // line 55
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["msg"], "status", [], "any", false, false, false, 55)], 55, $context, $this->getSourceContext());
            echo "</td>
                                    <td class=\"text-end\">
                                        <a class=\"btn btn-icon api-link\"
                                           href=\"";
            // line 58
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/massmailer/copy", ["id" => twig_get_attribute($this->env, $this->source, $context["msg"], "id", [], "any", false, false, false, 58), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                                           data-api-redirect=\"";
            // line 59
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("massmailer");
            echo "\">
                                            <svg class=\"icon\">
                                                <use xlink:href=\"#copy\"/>
                                            </svg>
                                        </a>
                                        <a class=\"btn btn-icon\" href=\"";
            // line 64
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/massmailer/message");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\">
                                            <svg class=\"icon\">
                                                <use xlink:href=\"#edit\"/>
                                            </svg>
                                        </a>
                                        <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
            // line 69
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                                           href=\"";
            // line 70
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/massmailer/delete", ["id" => twig_get_attribute($this->env, $this->source, $context["msg"], "id", [], "any", false, false, false, 70), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                                           data-api-redirect=\"";
            // line 71
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("massmailer");
            echo "\">
                                            <svg class=\"icon\">
                                                <use xlink:href=\"#delete\"/>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "                                <tr>
                                    <td class=\"text-center py-3\" colspan=\"5\">
                                        <h4>";
            // line 81
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</h4>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                            </tbody>
                        </table>
                        ";
        // line 87
        $this->loadTemplate("partial_pagination.html.twig", "mod_massmailer_index.html.twig", 87)->display(twig_array_merge($context, ["list" => ($context["msgs"] ?? null), "url" => "massmailer"]));
        // line 88
        echo "                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"new\" role=\"tabpanel\">
                    <form method=\"post\" action=\"admin/massmailer/create\" class=\"api-form\"
                          data-api-jsonp=\"onAfterCreateMM\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                        <div class=\"card-body mt-2\">
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-2 col-form-label\">";
        // line 97
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-7\">
                                    <input class=\"form-control\" type=\"text\" name=\"subject\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "subject", [], "any", false, false, false, 99), "html", null, true);
        echo "\" required=\"required\"
                                           placeholder=\"";
        // line 100
        echo twig_escape_filter($this->env, __trans("Message subject"), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer text-end\">
                            <input type=\"submit\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, __trans("Create"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                        </div>
                    </form>
                </div>

                <div class=\"tab-pane fade\" id=\"settings\" role=\"tabpanel\">
                    <div class=\"card-header\">
                        <div class=\"card-title\">
                            <h3 class=\"mb-0\">";
        // line 113
        echo twig_escape_filter($this->env, __trans("Mass Mail Settings"), "html", null, true);
        echo "</h3>
                        </div>
                    </div>
                    ";
        // line 116
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_massmailer"]], "method", false, false, false, 116);
        // line 117
        echo "                    <form method=\"post\" action=\"admin/extension/config_save\" class=\"api-form\"
                          data-api-reload=\"1\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"ext\" value=\"mod_massmailer\">
                        <div class=\"card-body\">
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\" for=\"test_client_id\">";
        // line 123
        echo twig_escape_filter($this->env, __trans("Client to send test email"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    ";
        // line 125
        if ( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "test_client_id", [], "any", false, false, false, 125)) {
            // line 126
            echo "                                        <select class=\"form-control autocomplete-selector\"
                                                placeholder=\"";
            // line 127
            echo twig_escape_filter($this->env, __trans("Start typing the client name or ID"), "html", null, true);
            echo "\"
                                                id=\"test_client_id\"
                                                name=\"test_client_id\"
                                                data-resturl=\"admin/client/get_pairs\"
                                                data-csrf=\"";
            // line 131
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\">
                                        </select>
                                    ";
        } else {
            // line 134
            echo "                                        ";
            $context["test_client"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "client_get", [["id" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "test_client_id", [], "any", false, false, false, 134)]], "method", false, false, false, 134);
            // line 135
            echo "                                        <input type=\"text\" id=\"test_client_id\" class=\"form-control\" disabled value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "first_name", [], "any", false, false, false, 135), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "last_name", [], "any", false, false, false, 135), "html", null, true);
            echo "\" />
                                        <input type=\"hidden\" name=\"test_client_id\" value=\"";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "test_client_id", [], "any", false, false, false, 136), "html", null, true);
            echo "\" />
                                    ";
        }
        // line 138
        echo "                                </div>
                                <span class=\"text-muted\">";
        // line 139
        echo twig_escape_filter($this->env, __trans("Test emails will be sent to: "), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "massmailer_get_test_client", [], "any", false, false, false, 139), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                        <div class=\"card-footer text-end\">
                            <input type=\"submit\" value=\"";
        // line 143
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 152
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "    <script type=\"text/javascript\">
        function onAfterCreateMM(mid) {
            bb.redirect(\"";
        // line 155
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("massmailer/message");
        echo "/\" + mid);
        }
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_massmailer_index.html.twig";
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
        return array (  347 => 155,  343 => 153,  339 => 152,  327 => 143,  318 => 139,  315 => 138,  310 => 136,  303 => 135,  300 => 134,  294 => 131,  287 => 127,  284 => 126,  282 => 125,  277 => 123,  270 => 119,  266 => 117,  264 => 116,  258 => 113,  247 => 105,  239 => 100,  235 => 99,  230 => 97,  224 => 94,  216 => 88,  214 => 87,  210 => 85,  200 => 81,  196 => 79,  183 => 71,  179 => 70,  175 => 69,  165 => 64,  157 => 59,  153 => 58,  147 => 55,  141 => 54,  137 => 53,  134 => 52,  128 => 51,  126 => 50,  118 => 45,  114 => 44,  110 => 43,  104 => 39,  102 => 38,  91 => 30,  80 => 22,  70 => 15,  63 => 10,  59 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_massmailer_index.html.twig", "/var/www/modules/Massmailer/html_admin/mod_massmailer_index.html.twig");
    }
}
