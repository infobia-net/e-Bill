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

/* mod_support_settings.html.twig */
class __TwigTemplate_c83765b4595d84f047e47fda5c8b44c2 extends Template
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
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_support_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_support_settings.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Support Settings"), "html", null, true);
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
        echo twig_escape_filter($this->env, __trans("Support"), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <div class=\"card-tabs\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" href=\"#tab-index\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 29
        echo twig_escape_filter($this->env, __trans("General"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-helpdesks\" data-bs-toggle=\"tab\" role=\"tab\">";
        // line 32
        echo twig_escape_filter($this->env, __trans("Helpdesks"), "html", null, true);
        echo "</a>
            </li>
        </ul>

        <div class=\"card\">
            <div class=\"tab-content\">
                <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
                    <form method=\"post\" action=\"";
        // line 39
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Configuration Updated"), "html", null, true);
        echo "\">
                        ";
        // line 40
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_support"]], "method", false, false, false, 40);
        // line 41
        echo "                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">";
        // line 43
        echo twig_escape_filter($this->env, __trans("Auto Responder"), "html", null, true);
        echo "</h3>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 form-label\">";
        // line 45
        echo twig_escape_filter($this->env, __trans("Enable Auto Responder"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <label class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" name=\"autorespond_enable\" type=\"checkbox\" ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "autorespond_enable", [], "any", false, false, false, 48)) {
            echo " checked=\"checked\"";
        }
        echo ">
                                    </label>
                                </div>
                            </div>
                            <div id=\"autorespond_enable\"";
        // line 52
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "autorespond_enable", [], "any", false, false, false, 52)) {
            echo " style=\"display:none;\"";
        }
        echo ">
                                <div class=\"mb-3 row\">
                                    <label class=\"col-md-3 col-form-label\">";
        // line 54
        echo twig_escape_filter($this->env, __trans("Auto Response Message"), "html", null, true);
        echo "</label>
                                    <div class=\"col-md-6\">
                                        <select class=\"form-select\" name=\"autorespond_message_id\">
                                            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_canned_get_list", [["per_page" => 90]], "method", false, false, false, 57), "list", [], "any", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 58
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "autorespond_message_id", [], "any", false, false, false, 58) == twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 58))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "title", [], "any", false, false, false, 58), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">";
        // line 66
        echo twig_escape_filter($this->env, __trans("Ticket Delay"), "html", null, true);
        echo "</h3>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 form-label\">";
        // line 68
        echo twig_escape_filter($this->env, __trans("Enable Delay Message"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <label class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" name=\"delay_enable\" type=\"checkbox\" ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "delay_enable", [], "any", false, false, false, 71)) {
            echo " checked=\"checked\"";
        }
        echo ">
                                    </label>
                                    <small class=\"form-hint\">";
        // line 73
        echo twig_escape_filter($this->env, __trans("If enabled, the selected canned response will be added to default reply message."), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div id=\"delay_enable\"";
        // line 76
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "delay_enable", [], "any", false, false, false, 76)) {
            echo " style=\"display:none;\"";
        }
        echo ">
                                <div class=\"mb-3 row\">
                                    <label class=\"col-md-3 col-form-label\">";
        // line 78
        echo twig_escape_filter($this->env, __trans("Delay (in hours)"), "html", null, true);
        echo "</label>
                                    <div class=\"col-md-6\">
                                        <input class=\"form-control\" type=\"text\" size=\"3\" name=\"delay_hours\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "delay_hours", [], "any", true, true, false, 80)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "delay_hours", [], "any", false, false, false, 80), 24)) : (24)), "html", null, true);
        echo "\" placeholder=\"24\">
                                    </div>
                                </div>
                                <div class=\"form-group mb-3 row\">
                                    <label class=\"col-md-3 col-form-label\">";
        // line 84
        echo twig_escape_filter($this->env, __trans("Delay Message"), "html", null, true);
        echo "</label>
                                    <div class=\"col-md-6\">
                                        <select class=\"form-select\" name=\"delay_message_id\">
                                            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_canned_get_list", [["per_page" => 90]], "method", false, false, false, 87), "list", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 88
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 88), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "delay_message_id", [], "any", false, false, false, 88) == twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 88))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "title", [], "any", false, false, false, 88), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 95
        echo twig_escape_filter($this->env, __trans("Wait Time (in hours)"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" size=\"3\" name=\"wait_hours\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "wait_hours", [], "any", false, false, false, 97), "html", null, true);
        echo "\">
                                    <small class=\"form-hint\">";
        // line 98
        echo twig_escape_filter($this->env, __trans("If set, the time in hour(s) the user must wait between consequent ticket submission."), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"ext\" value=\"mod_support\">
                        </div>
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">";
        // line 104
        echo twig_escape_filter($this->env, __trans("Knowledge Base"), "html", null, true);
        echo "</h3>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 form-label\">";
        // line 106
        echo twig_escape_filter($this->env, __trans("Enable Knowledge Base"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <label class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" name=\"kb_enable\" type=\"checkbox\" ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "kb_enable", [], "any", false, false, false, 109)) {
            echo " checked=\"checked\"";
        }
        echo ">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">";
        // line 115
        echo twig_escape_filter($this->env, __trans("Public Tickets"), "html", null, true);
        echo "</h3>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 form-label\">";
        // line 117
        echo twig_escape_filter($this->env, __trans("Disable Public Tickets"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <label class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" name=\"disable_public_tickets\" type=\"checkbox\" ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "disable_public_tickets", [], "any", false, false, false, 120)) {
            echo " checked=\"checked\"";
        }
        echo ">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer text-end\">
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\">
                        </div>
                    </form>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-helpdesks\">
                        <div class=\"d-flex\">
                            <div class=\"mt-3 ms-3\">
                                <a class=\"btn btn-primary\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#mod-support-new-helpdesk\">
                                    <svg class=\"icon me-2\">
                                        <use xlink:href=\"#plus\" />
                                    </svg>
                                    ";
        // line 138
        echo twig_escape_filter($this->env, __trans("New Helpdesk"), "html", null, true);
        echo "
                                </a>
                            </div>
                            ";
        // line 141
        $this->loadTemplate("partial_search.html.twig", "mod_support_settings.html.twig", 141)->display($context);
        // line 142
        echo "                        </div>
                    <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                        <thead>
                        <tr>
                            <th class=\"w-1\">#</th>
                            <th>";
        // line 147
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                            <th>";
        // line 148
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo "</th>
                            <th>";
        // line 149
        echo twig_escape_filter($this->env, __trans("Close Tickets After"), "html", null, true);
        echo "</th>
                            <th class=\"w-1\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_helpdesk_get_list", [twig_array_merge(["per_page" => 50, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 154)], ($context["request"] ?? null))], "method", false, false, false, 154), "list", [], "any", false, false, false, 154));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["helpdesk"]) {
            // line 155
            echo "                            <tr>
                                <td>";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 156), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 158
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/helpdesk");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["helpdesk"], "id", [], "any", false, false, false, 158), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["helpdesk"], "name", [], "any", false, false, false, 158), "html", null, true);
            echo "</a>
                                </td>
                                <td>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["helpdesk"], "email", [], "any", false, false, false, 160), "html", null, true);
            echo "</td>
                                <td>";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["helpdesk"], "close_after", [], "any", false, false, false, 161), "html", null, true);
            echo " hour(s)</td>
                                <td>
                                    <a class=\"btn btn-icon\" href=\"";
            // line 163
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/helpdesk");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["helpdesk"], "id", [], "any", false, false, false, 163), "html", null, true);
            echo "\"
                                    data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 164
            echo twig_escape_filter($this->env, __trans("Edit"), "html", null, true);
            echo "\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#edit\" />
                                        </svg>
                                    </a>
                                    <a class=\"btn btn-icon api-link\"
                                       href=\"";
            // line 170
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/helpdesk_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["helpdesk"], "id", [], "any", false, false, false, 170), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                                       data-api-confirm=\"";
            // line 171
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                                       data-api-confirm-btn=\"";
            // line 172
            echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
            echo "\"
                                       data-api-type=\"danger\"
                                       data-api-redirect=\"";
            // line 174
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/support");
            echo "\"
                                       data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 175
            echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
            echo "\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#delete\" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 183
            echo "                            <tr>
                                <td colspan=\"4\" class=\"text-muted\">";
            // line 184
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['helpdesk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

";
        // line 194
        $this->loadTemplate("modal/mod_support_new_helpdesk.html.twig", "mod_support_settings.html.twig", 194)->display($context);
    }

    // line 197
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        echo "<script>
    document.addEventListener('DOMContentLoaded', () => {
        let autoRespondToggle = document.querySelector('input[name=autorespond_enable]');
        autoRespondToggle.addEventListener('click', (e) => {
            if (e.target.checked) {
                \$('#autorespond_enable').slideDown();
            } else {
                \$('#autorespond_enable').slideUp();
            }
        })

        let delayToggle = document.querySelector('input[name=delay_enable]');
        delayToggle.addEventListener('click', (e) => {
            if (e.target.checked) {
                \$('#delay_enable').slideDown();
            } else {
                \$('#delay_enable').slideUp();
            }
        })

    });
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_support_settings.html.twig";
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
        return array (  500 => 198,  496 => 197,  492 => 194,  483 => 187,  474 => 184,  471 => 183,  450 => 175,  446 => 174,  441 => 172,  437 => 171,  433 => 170,  424 => 164,  418 => 163,  413 => 161,  409 => 160,  400 => 158,  395 => 156,  392 => 155,  374 => 154,  366 => 149,  362 => 148,  358 => 147,  351 => 142,  349 => 141,  343 => 138,  328 => 126,  317 => 120,  311 => 117,  306 => 115,  295 => 109,  289 => 106,  284 => 104,  275 => 98,  271 => 97,  266 => 95,  259 => 90,  244 => 88,  240 => 87,  234 => 84,  227 => 80,  222 => 78,  215 => 76,  209 => 73,  202 => 71,  196 => 68,  191 => 66,  183 => 60,  168 => 58,  164 => 57,  158 => 54,  151 => 52,  142 => 48,  136 => 45,  131 => 43,  125 => 41,  123 => 40,  117 => 39,  107 => 32,  101 => 29,  96 => 26,  92 => 25,  85 => 21,  78 => 19,  68 => 12,  64 => 10,  60 => 9,  53 => 5,  49 => 1,  47 => 7,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_support_settings.html.twig", "/var/www/modules/Support/html_admin/mod_support_settings.html.twig");
    }
}
