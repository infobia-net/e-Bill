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

/* mod_email_settings.html.twig */
class __TwigTemplate_743544eb0dc4ae17cdea333f8d38f38d extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_email_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_email_settings.html.twig", 3)->unwrap();
        // line 22
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <ul class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 9
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#home\" />
                </svg>
            </a>
        </li>
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 16
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 18
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo "</li>
    </ul>
";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [["ext" => "mod_email"]], "method", false, false, false, 24);
        // line 25
        echo "    <div class=\"card-tabs\">

        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" href=\"#tab-index\" data-bs-toggle=\"tab\">";
        // line 29
        echo twig_escape_filter($this->env, __trans("Email templates"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-new\" data-bs-toggle=\"tab\">
                    <svg class=\"icon me-2\">
                        <use xlink:href=\"#plus\" />
                    </svg>
                    ";
        // line 36
        echo twig_escape_filter($this->env, __trans("New template"), "html", null, true);
        echo "
                </a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-queue\" data-bs-toggle=\"tab\">";
        // line 40
        echo twig_escape_filter($this->env, __trans("Email queue"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-email\" data-bs-toggle=\"tab\">";
        // line 43
        echo twig_escape_filter($this->env, __trans("Email settings"), "html", null, true);
        echo "</a>
            </li>
        </ul>
        <div class=\"card\">
            <div class=\"tab-content\">
                <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">

                    <div class=\"card-footer text-center\">
                        <a href=\"";
        // line 51
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/email/batch_template_generate", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\" class=\"btn btn-primary api-link\" data-api-reload=\"1\">
                            <svg class=\"icon icon-tabler\" width=\"24\" height=\"24\">
                                <use xlink:href=\"#mail\" />
                            </svg>
                            <span>Regenerate templates</span>
                        </a>
                        <a href=\"";
        // line 57
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/email/batch_template_enable", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\" class=\"btn btn-primary api-link\" data-api-msg=\"All email templates enabled\">
                            <svg class=\"icon icon-tabler\" width=\"24\" height=\"24\">
                                <use xlink:href=\"#play\" />
                            </svg>
                            <span>Enable all</span>
                        </a>
                        <a href=\"";
        // line 63
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/email/batch_template_disable", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\" class=\"btn btn-primary api-link\" data-api-msg=\"All email templates disabled\">
                            <svg class=\"icon icon-tabler\" width=\"24\" height=\"24\">
                                <use xlink:href=\"#close\" />
                            </svg>
                            <span>Disable all</span>
                        </a>
                    </div>
                    ";
        // line 70
        $this->loadTemplate("partial_search.html.twig", "mod_email_settings.html.twig", 70)->display($context);
        // line 71
        echo "                    <div class=\"table-responsive\">
                        <table class=\"table card-table table-vcenter table-striped text-nowrap sortable\">
                            <thead>
                            <tr>
                                <th class=\"w-1\">";
        // line 75
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo "</th>
                                <th>";
        // line 76
        echo twig_escape_filter($this->env, __trans("Extension"), "html", null, true);
        echo "</th>
                                <th>";
        // line 77
        echo twig_escape_filter($this->env, __trans("Code"), "html", null, true);
        echo "</th>
                                <th>";
        // line 78
        echo twig_escape_filter($this->env, __trans("Enabled"), "html", null, true);
        echo "</th>
                                <th class=\"w-1\"></th>
                            </tr>
                            </thead>

                            <tbody>
                            ";
        // line 84
        $context["templates"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "email_template_get_list", [twig_array_merge(["per_page" => 100, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 84)], ($context["request"] ?? null))], "method", false, false, false, 84);
        // line 85
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["templates"] ?? null), "list", [], "any", false, false, false, 85));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["template"]) {
            // line 86
            echo "                                <tr>
                                    <td>
                                        <a href=\"";
            // line 88
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/email/template");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "id", [], "any", false, false, false, 88), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "subject", [], "any", false, false, false, 88), "html", null, true);
            echo "</a>
                                    </td>
                                    <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "category", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                                    <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "action_code", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, $context["template"], "enabled", [], "any", false, false, false, 93) == 1)) {
                // line 94
                echo "                                            <span class=\"badge bg-success me-1\"></span>
                                        ";
            }
            // line 96
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["template"], "enabled", [], "any", false, false, false, 96) == 0)) {
                // line 97
                echo "                                            <span class=\"badge bg-danger me-1\"></span>
                                        ";
            }
            // line 99
            echo "                                        ";
            echo twig_call_macro($macros["mf"], "macro_q", [twig_get_attribute($this->env, $this->source, $context["template"], "enabled", [], "any", false, false, false, 99)], 99, $context, $this->getSourceContext());
            echo "
                                    </td>
                                    <td>
                                        <a class=\"btn btn-icon\" href=\"";
            // line 102
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/email/template");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "id", [], "any", false, false, false, 102), "html", null, true);
            echo "\"
                                           data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 103
            echo twig_escape_filter($this->env, __trans("Edit"), "html", null, true);
            echo "\">
                                            <svg class=\"icon\">
                                                <use xlink:href=\"#edit\" />
                                            </svg>
                                        </a>
                                        <a class=\"btn btn-icon api-link\"
                                           href=\"";
            // line 109
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/email/template_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["template"], "id", [], "any", false, false, false, 109), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                                           data-api-confirm=\"";
            // line 110
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\"
                                           data-api-confirm-content=\"";
            // line 111
            echo twig_escape_filter($this->env, __trans("Are you sure you want to delete this template?"), "html", null, true);
            echo "\"
                                           data-api-type=\"danger\"
                                           data-api-confirm-btn=\"";
            // line 113
            echo twig_escape_filter($this->env, __trans("Delete"), "html", null, true);
            echo "\"
                                           data-api-reload=\"1\"
                                           data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 115
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
        }
        if (!$context['_iterated']) {
            // line 123
            echo "                                <tr>
                                    <td class=\"text-muted\" colspan=\"5\">";
            // line 124
            echo twig_escape_filter($this->env, __trans("The list is empty. Depending on modules enabled email templates will be inserted after first event occurrence."), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-new\" role=\"tabpanel\">
                    <form method=\"post\" action=\"";
        // line 133
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/email/template_create", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\" class=\"api-form\" data-api-reload=\"1\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">";
        // line 136
        echo twig_escape_filter($this->env, __trans("Where I can use new email template?"), "html", null, true);
        echo "</h3>
                            <p class=\"card-subtitle\">";
        // line 137
        echo twig_escape_filter($this->env, __trans("Newly created email templates can be used in custom event hooks."), "html", null, true);
        echo "</p>

                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 form-label\">";
        // line 140
        echo twig_escape_filter($this->env, __trans("Enabled"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radioEnabledYes\" type=\"radio\" name=\"enabled\" value=\"1\">
                                        <label class=\"form-check-label\" for=\"radioEnabledYes\">";
        // line 144
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                                    </div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radioEnabledNo\" type=\"radio\" name=\"enabled\" value=\"0\" checked>
                                        <label class=\"form-check-label\" for=\"radioEnabledNo\">";
        // line 148
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 153
        echo twig_escape_filter($this->env, __trans("Category"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"category\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["requests"] ?? null), "category", [], "any", false, false, false, 155), "html", null, true);
        echo "\" required placeholder=\"General\">
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 159
        echo twig_escape_filter($this->env, __trans("Action code"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"action_code\" value=\"";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["requests"] ?? null), "action_code", [], "any", false, false, false, 161), "html", null, true);
        echo "\" required>
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 165
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <input class=\"form-control\" type=\"text\" name=\"subject\" value=\"";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["requests"] ?? null), "subject", [], "any", false, false, false, 167), "html", null, true);
        echo "\" required>
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">";
        // line 171
        echo twig_escape_filter($this->env, __trans("Content"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <textarea class=\"form-control\" name=\"content\" rows=\"5\">";
        // line 173
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["requests"] ?? null), "content", [], "any", false, false, false, 173), "html", null, true);
        echo "</textarea>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-footer text-end\">
                            <input type=\"submit\" value=\"";
        // line 178
        echo twig_escape_filter($this->env, __trans("Create"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                        </div>
                    </form>
                </div>

                <div class=\"tab-pane fade show\" id=\"tab-queue\" role=\"tabpanel\">
                    ";
        // line 184
        $this->loadTemplate("partial_search.html.twig", "mod_email_settings.html.twig", 184)->display($context);
        // line 185
        echo "                    <div class=\"table-responsive\">
                        <p>";
        // line 186
        echo twig_escape_filter($this->env, __trans("FOSSBilling queues emails to have them be sent via cron in the background. Here you may find the list of queued emails and how many times the system has tried to send them."), "html", null, true);
        echo "</p>
                        <p>";
        // line 187
        echo twig_escape_filter($this->env, __trans("Emails that have been sent or that failed to be sent will not be listed here."), "html", null, true);
        echo "</p>
                        <table class=\"table card-table table-vcenter table-striped text-nowrap sortable\">
                            <thead>
                            <tr>
                                <th class=\"w-1\">";
        // line 191
        echo twig_escape_filter($this->env, __trans("Subject"), "html", null, true);
        echo "</th>
                                <th>";
        // line 192
        echo twig_escape_filter($this->env, __trans("To"), "html", null, true);
        echo "</th>
                                <th>";
        // line 193
        echo twig_escape_filter($this->env, __trans("To (Email)"), "html", null, true);
        echo "</th>
                                <th>";
        // line 194
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</th>
                                <th>";
        // line 195
        echo twig_escape_filter($this->env, __trans("Tries"), "html", null, true);
        echo "</th>
                                <th>";
        // line 196
        echo twig_escape_filter($this->env, __trans("Created at"), "html", null, true);
        echo "</th>
                                <th>";
        // line 197
        echo twig_escape_filter($this->env, __trans("Updated at"), "html", null, true);
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 201
        $context["queue"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "email_get_queue", [twig_array_merge(["per_page" => 100, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 201)], ($context["request"] ?? null))], "method", false, false, false, 201);
        // line 202
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["queue"] ?? null), "list", [], "any", false, false, false, 202));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["queuedEmail"]) {
            // line 203
            echo "                                <tr>
                                    <td>
                                        ";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["queuedEmail"], "subject", [], "any", false, false, false, 205), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["queuedEmail"], "to_name", [], "any", false, false, false, 208), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <a href=\"mailto:";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["queuedEmail"], "recipient", [], "any", false, false, false, 211), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["queuedEmail"], "recipient", [], "any", false, false, false, 211), "html", null, true);
            echo "</a>
                                    </td>
                                    <td>
                                        ";
            // line 214
            if ((twig_get_attribute($this->env, $this->source, $context["queuedEmail"], "status", [], "any", false, false, false, 214) == "unsent")) {
                // line 215
                echo "                                            <span class=\"badge bg-danger me-1\"></span>
                                        ";
            } else {
                // line 217
                echo "                                            <span class=\"badge bg-success me-1\"></span>
                                        ";
            }
            // line 219
            echo "                                        <span class=\"text-capitalize\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["queuedEmail"], "status", [], "any", false, false, false, 219), "html", null, true);
            echo "</span>
                                    </td>
                                    <td>
                                        ";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["queuedEmail"], "tries", [], "any", false, false, false, 222), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "cancel_after", [], "any", true, true, false, 222)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "cancel_after", [], "any", false, false, false, 222), "5")) : ("5")), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["queuedEmail"], "created_at", [], "any", false, false, false, 225)), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 228
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["queuedEmail"], "updated_at", [], "any", false, false, false, 228)), "html", null, true);
            echo "
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 232
            echo "                                <tr>
                                    <td class=\"text-muted\" colspan=\"5\">";
            // line 233
            echo twig_escape_filter($this->env, __trans("The list is empty."), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['queuedEmail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-email\" role=\"tabpanel\">
                    <form method=\"post\" action=\"";
        // line 242
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Email settings updated"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 243
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                        <div class=\"card-body\">
                            <h3 class=\"card-title\">";
        // line 245
        echo twig_escape_filter($this->env, __trans("Configure email options"), "html", null, true);
        echo "</h3>
                            <p class=\"card-subtitle\">";
        // line 246
        echo __trans("FOSSBilling sends emails using <em>sendmail</em> by default or you can configure your own SMTP server");
        echo "</p>

                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 col-form-label\">Queue options</label>
                                <div class=\"col-md-6\">
                                    <div class=\"mb-2\">
                                        <small class=\"form-hint\">";
        // line 252
        echo twig_escape_filter($this->env, __trans("Send emails per cron run (0 = unlimited)"), "html", null, true);
        echo "</small>
                                        <input class=\"form-control\" type=\"text\" name=\"queue_once\" placeholder=\"0\" value=\"";
        // line 253
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "queue_once", [], "any", true, true, false, 253)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "queue_once", [], "any", false, false, false, 253), "0")) : ("0")), "html", null, true);
        echo "\">
                                    </div>
                                    <div class=\"mb-2\">
                                        <small class=\"form-hint\">";
        // line 256
        echo twig_escape_filter($this->env, __trans("Max email sending time in minutes (0 = unlimited, default 5 min.)"), "html", null, true);
        echo "</small>
                                        <input class=\"form-control\" type=\"text\" name=\"time_limit\" placeholder=\"5\" value=\"";
        // line 257
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "time_limit", [], "any", true, true, false, 257)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "time_limit", [], "any", false, false, false, 257), "5")) : ("5")), "html", null, true);
        echo "\">
                                    </div>
                                    <div class=\"mb-2\">
                                        <small class=\"form-hint\">";
        // line 260
        echo twig_escape_filter($this->env, __trans("Cancel sending email after unsuccessful tries (0 = do not cancel)"), "html", null, true);
        echo "</small>
                                        <input class=\"form-control\" type=\"text\" name=\"cancel_after\" placeholder=\"5\" value=\"";
        // line 261
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "cancel_after", [], "any", true, true, false, 261)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "cancel_after", [], "any", false, false, false, 261), "5")) : ("5")), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 form-label\">";
        // line 266
        echo twig_escape_filter($this->env, __trans("Log sent emails to database"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\">
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radioLogEnabledYes\" type=\"radio\" name=\"log_enabled\" value=\"1\"";
        // line 269
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "log_enabled", [], "any", false, false, false, 269)) {
            echo " checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"radioLogEnabledYes\">";
        // line 270
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                                    </div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radioLogEnabledNo\" type=\"radio\" name=\"log_enabled\" value=\"0\"";
        // line 273
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "log_enabled", [], "any", false, false, false, 273)) {
            echo " checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"radioLogEnabledNo\">";
        // line 274
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"mb-3 row\">
                                <label class=\"col-md-3 form-label\">";
        // line 279
        echo twig_escape_filter($this->env, __trans("Email transport"), "html", null, true);
        echo "</label>
                                <div class=\"col-md-6\" id=\"mailer\">
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radioSendMail\" type=\"radio\" name=\"mailer\" value=\"sendmail\"";
        // line 282
        if (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "mailer", [], "any", false, false, false, 282) == "sendmail") ||  !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "mailer", [], "any", false, false, false, 282))) {
            echo " checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"radioSendMail\">";
        // line 283
        echo twig_escape_filter($this->env, __trans("SendMail"), "html", null, true);
        echo "</label>
                                    </div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radioSMTP\" type=\"radio\" name=\"mailer\" value=\"smtp\"";
        // line 286
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "mailer", [], "any", false, false, false, 286) == "smtp")) {
            echo " checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"radioSMTP\">";
        // line 287
        echo twig_escape_filter($this->env, __trans("SMTP"), "html", null, true);
        echo "</label>
                                    </div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radioSendGrid\" type=\"radio\" name=\"mailer\" value=\"sendgrid\"";
        // line 290
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "mailer", [], "any", false, false, false, 290) == "sendgrid")) {
            echo " checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"radioSendGrid\">";
        // line 291
        echo twig_escape_filter($this->env, __trans("SendGrid"), "html", null, true);
        echo "</label>
                                    </div>
                                    <div class=\"form-check form-check-inline\">
                                        <input class=\"form-check-input\" id=\"radioCustom\" type=\"radio\" name=\"mailer\" value=\"custom\"";
        // line 294
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "mailer", [], "any", false, false, false, 294) == "custom")) {
            echo " checked";
        }
        echo ">
                                        <label class=\"form-check-label\" for=\"radioCustom\">";
        // line 295
        echo twig_escape_filter($this->env, __trans("Custom"), "html", null, true);
        echo "</label>
                                    </div>
                                </div>
                            </div>

                            <fieldset class=\"smtp\"";
        // line 300
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "mailer", [], "any", false, false, false, 300) != "smtp")) {
            echo " style=\"display:none;\"";
        }
        echo " >
                                <div class=\"mb-3 row\">
                                    <label class=\"col-md-3 col-form-label\">";
        // line 302
        echo twig_escape_filter($this->env, __trans("SMTP Hostname"), "html", null, true);
        echo "</label>
                                    <div class=\"col-md-6\">
                                        <input class=\"form-control\" type=\"text\" name=\"smtp_host\" value=\"";
        // line 304
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "smtp_host", [], "any", false, false, false, 304), "html", null, true);
        echo "\" placeholder=\"smtp.gmail.com\">
                                    </div>
                                </div>
                                <div class=\"mb-3 row\">
                                    <label class=\"col-md-3 col-form-label\">";
        // line 308
        echo twig_escape_filter($this->env, __trans("SMTP Port"), "html", null, true);
        echo "</label>
                                    <div class=\"col-md-6\">
                                        <input class=\"form-control\" type=\"text\" name=\"smtp_port\" value=\"";
        // line 310
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "smtp_port", [], "any", false, false, false, 310), "html", null, true);
        echo "\" placeholder=\"587\">
                                    </div>
                                </div>
                                <div class=\"mb-3 row\">
                                    <label class=\"col-md-3 col-form-label\">";
        // line 314
        echo twig_escape_filter($this->env, __trans("SMTP Username"), "html", null, true);
        echo "</label>
                                    <div class=\"col-md-6\">
                                        <input class=\"form-control\" type=\"text\" name=\"smtp_username\" value=\"";
        // line 316
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "smtp_username", [], "any", false, false, false, 316), "html", null, true);
        echo "\" placeholder=\"my.email@gmail.com\">
                                    </div>
                                </div>
                                <div class=\"mb-3 row\">
                                    <label class=\"col-md-3 col-form-label\">";
        // line 320
        echo twig_escape_filter($this->env, __trans("SMTP Password"), "html", null, true);
        echo "</label>
                                    <div class=\"col-md-6\">
                                        <input class=\"form-control\" type=\"password\" name=\"smtp_password\" value=\"";
        // line 322
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "smtp_password", [], "any", false, false, false, 322), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class=\"sendgrid\"";
        // line 327
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "mailer", [], "any", false, false, false, 327) != "sendgrid")) {
            echo " style=\"display:none;\"";
        }
        echo " >
                                <div class=\"mb-3 row\">
                                    <label class=\"col-md-3 col-form-label\">";
        // line 329
        echo twig_escape_filter($this->env, __trans("SendGrid API Key"), "html", null, true);
        echo "</label>
                                    <div class=\"col-md-6\">
                                        <input class=\"form-control\" type=\"text\" name=\"sendgrid_key\" value=\"";
        // line 331
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "sendgrid_key", [], "any", false, false, false, 331), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class=\"custom\"";
        // line 336
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "mailer", [], "any", false, false, false, 336) != "custom")) {
            echo " style=\"display:none;\"";
        }
        echo " >
                                <div class=\"mb-3 row\">
                                    <label class=\"col-md-3 col-form-label\" for=\"custom_dsn\">";
        // line 338
        echo twig_escape_filter($this->env, __trans("Custom DSN"), "html", null, true);
        echo "</label>
                                    <div class=\"col-md-6\">
                                        <p>";
        // line 340
        echo twig_escape_filter($this->env, __trans("If one of the available options don't quite meet your needs, you can define a custom DSN. Please keep in mind that usernames, passwords, and hostnames with special characters need to be URL-encoded."), "html", null, true);
        echo "</p>
                                        <p>";
        // line 341
        echo twig_escape_filter($this->env, __trans("More information"), "html", null, true);
        echo ": <a href=\"https://symfony.com/doc/current/mailer.html#using-built-in-transports\">";
        echo "Symfony Documentation";
        echo "</a></p>
                                        <p class=\"fw-light\">";
        // line 342
        echo twig_escape_filter($this->env, __trans("Example"), "html", null, true);
        echo ": smtp://user:pass@smtp.example.com?verify_peer=0</p>
                                        <input class=\"form-control\" type=\"text\" name=\"custom_dsn\" value=\"";
        // line 343
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "custom_dsn", [], "any", false, false, false, 343), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <input type=\"hidden\" name=\"ext\" value=\"mod_email\">
                        <div class=\"card-footer d-flex justify-content-between\">
                            <button class=\"btn btn-secondary\" id=\"emailTest\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#wifi\" />
                                </svg>
                                ";
        // line 355
        echo twig_escape_filter($this->env, __trans("Send a test email to yourself"), "html", null, true);
        echo "
                            </button>
                            <input type=\"submit\" value=\"";
        // line 357
        echo twig_escape_filter($this->env, __trans("Update email settings"), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 366
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 367
        echo "<script>
\$(function() {
    \$('#emailTest').on('click', function() {
        API.admin.post('email/send_test', {}, function(result) {
            FOSSBilling.message(\"";
        // line 371
        echo twig_escape_filter($this->env, __trans("Email was successfully sent"), "html", null, true);
        echo "\");
        },
        function(result){
            FOSSBilling.message(result.message, 'error');
        });

        return false;
    });

    \$(\"#mailer input\").on('click', function() {
        if (\$(this).val() == 'smtp') {
            \$('fieldset.smtp').slideDown();
        } else {
            \$('fieldset.smtp').slideUp();
        }

        if (\$(this).val() == 'sendgrid') {
            \$('fieldset.sendgrid').slideDown();
        } else {
            \$('fieldset.sendgrid').slideUp();
        }

        if (\$(this).val() == 'custom') {
            \$('fieldset.custom').slideDown();
        } else {
            \$('fieldset.custom').slideUp();
        }
    });
});
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_email_settings.html.twig";
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
        return array (  838 => 371,  832 => 367,  828 => 366,  816 => 357,  811 => 355,  796 => 343,  792 => 342,  786 => 341,  782 => 340,  777 => 338,  770 => 336,  762 => 331,  757 => 329,  750 => 327,  742 => 322,  737 => 320,  730 => 316,  725 => 314,  718 => 310,  713 => 308,  706 => 304,  701 => 302,  694 => 300,  686 => 295,  680 => 294,  674 => 291,  668 => 290,  662 => 287,  656 => 286,  650 => 283,  644 => 282,  638 => 279,  630 => 274,  624 => 273,  618 => 270,  612 => 269,  606 => 266,  598 => 261,  594 => 260,  588 => 257,  584 => 256,  578 => 253,  574 => 252,  565 => 246,  561 => 245,  556 => 243,  550 => 242,  542 => 236,  533 => 233,  530 => 232,  521 => 228,  515 => 225,  507 => 222,  500 => 219,  496 => 217,  492 => 215,  490 => 214,  482 => 211,  476 => 208,  470 => 205,  466 => 203,  460 => 202,  458 => 201,  451 => 197,  447 => 196,  443 => 195,  439 => 194,  435 => 193,  431 => 192,  427 => 191,  420 => 187,  416 => 186,  413 => 185,  411 => 184,  402 => 178,  394 => 173,  389 => 171,  382 => 167,  377 => 165,  370 => 161,  365 => 159,  358 => 155,  353 => 153,  345 => 148,  338 => 144,  331 => 140,  325 => 137,  321 => 136,  316 => 134,  312 => 133,  304 => 127,  295 => 124,  292 => 123,  279 => 115,  274 => 113,  269 => 111,  265 => 110,  261 => 109,  252 => 103,  246 => 102,  239 => 99,  235 => 97,  232 => 96,  228 => 94,  226 => 93,  221 => 91,  217 => 90,  208 => 88,  204 => 86,  198 => 85,  196 => 84,  187 => 78,  183 => 77,  179 => 76,  175 => 75,  169 => 71,  167 => 70,  157 => 63,  148 => 57,  139 => 51,  128 => 43,  122 => 40,  115 => 36,  105 => 29,  99 => 25,  96 => 24,  92 => 23,  85 => 18,  78 => 16,  68 => 9,  64 => 7,  60 => 6,  53 => 4,  49 => 1,  47 => 22,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_email_settings.html.twig", "/var/www/modules/Email/html_admin/mod_email_settings.html.twig");
    }
}
