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

/* mod_servicedomain_index.html.twig */
class __TwigTemplate_824157f8edc37a048ba4dd52edd28050 extends Template
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
        return "layout_default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_servicedomain_index.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_servicedomain_index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Domain management";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-tlds\" data-bs-toggle=\"tab\">";
        // line 12
        echo twig_escape_filter($this->env, __trans("Top level domains"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-new-tld\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 19
        echo twig_escape_filter($this->env, __trans("New top level domain"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-registrars\" data-bs-toggle=\"tab\">";
        // line 23
        echo twig_escape_filter($this->env, __trans("Registrars"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-new-registrar\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 30
        echo twig_escape_filter($this->env, __trans("New domain registrar"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-extension-directory\" data-bs-toggle=\"tab\">
                <svg class=\"icon me-2\">
                    <use xlink:href=\"#plus\" />
                </svg>
                ";
        // line 38
        echo twig_escape_filter($this->env, __trans("Install from the Extension Directory"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-nameservers\" data-bs-toggle=\"tab\">";
        // line 42
        echo twig_escape_filter($this->env, __trans("Nameservers"), "html", null, true);
        echo "</a>
        </li>
    </ul>

<div class=\"card\">
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-tlds\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h5>";
        // line 50
        echo twig_escape_filter($this->env, __trans("Manage TLDs"), "html", null, true);
        echo "</h5>
                <p class=\"text-muted\">";
        // line 51
        echo twig_escape_filter($this->env, __trans("Setup domain pricing and allowed operations. Assign specific domain registrars for each Top Level Domain (TLD)"), "html", null, true);
        echo "</p>
            </div>

            <table class=\"table card-table table-vcenter table-striped text-nowrap sortable\">
                <thead>
                    <tr>
                        <th>";
        // line 57
        echo twig_escape_filter($this->env, __trans("TLD"), "html", null, true);
        echo "</th>
                        <th>";
        // line 58
        echo twig_escape_filter($this->env, __trans("Registration"), "html", null, true);
        echo "</th>
                        <th>";
        // line 59
        echo twig_escape_filter($this->env, __trans("Renew"), "html", null, true);
        echo "</th>
                        <th>";
        // line 60
        echo twig_escape_filter($this->env, __trans("Transfer"), "html", null, true);
        echo " </th>
                        <th>";
        // line 61
        echo twig_escape_filter($this->env, __trans("Operations"), "html", null, true);
        echo "</th>
                        <th>";
        // line 62
        echo twig_escape_filter($this->env, __trans("Registrar"), "html", null, true);
        echo "</th>
                        <th class=\"w-1\"></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicedomain_tld_get_list", [["per_page" => 99]], "method", false, false, false, 67), "list", [], "any", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["tld"]) {
            // line 68
            echo "                    <tr>
                        <td>
                            <a href=\"";
            // line 70
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicedomain/id");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 70), "html", null, true);
            echo "</a>
                        </td>
                        <td>";
            // line 72
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["tld"], "price_registration", [], "any", false, false, false, 72)], 72, $context, $this->getSourceContext());
            echo "</td>
                        <td>";
            // line 73
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["tld"], "price_renew", [], "any", false, false, false, 73)], 73, $context, $this->getSourceContext());
            echo "</td>
                        <td>";
            // line 74
            echo twig_call_macro($macros["mf"], "macro_currency_format", [twig_get_attribute($this->env, $this->source, $context["tld"], "price_transfer", [], "any", false, false, false, 74)], 74, $context, $this->getSourceContext());
            echo "</td>
                        <td>
                        ";
            // line 76
            echo twig_escape_filter($this->env, __trans("Allow register:"), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["tld"], "allow_register", [], "any", false, false, false, 76)) {
                echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
            }
            echo "<br/>
                        ";
            // line 77
            echo twig_escape_filter($this->env, __trans("Allow transfer:"), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["tld"], "allow_transfer", [], "any", false, false, false, 77)) {
                echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
            }
            echo "<br/>
                        ";
            // line 78
            echo twig_escape_filter($this->env, __trans("Active:"), "html", null, true);
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["tld"], "active", [], "any", false, false, false, 78)) {
                echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
            }
            // line 79
            echo "                        </td>
                        <td>
                            <a href=\"";
            // line 81
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicedomain/registrar");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tld"], "registrar", [], "any", false, false, false, 81), "id", [], "any", false, false, false, 81), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tld"], "registrar", [], "any", false, false, false, 81), "title", [], "any", false, false, false, 81), "html", null, true);
            echo "</a>
                        </td>
                        <td>
                            <a class=\"btn btn-icon\" href=\"";
            // line 84
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicedomain/id");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "id", [], "any", false, false, false, 84), "html", null, true);
            echo "\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#edit\" />
                                </svg>
                            </a>
                            <a class=\"btn btn-icon api-link\" data-api-confirm=\"";
            // line 89
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" data-api-reload=\"1\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicedomain/tld_delete", ["tld" => twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 89), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#delete\" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tld'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-new-tld\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h5>";
        // line 103
        echo twig_escape_filter($this->env, __trans("Add new top level domain"), "html", null, true);
        echo "</h5>
                <p class=\"text-muted\">";
        // line 104
        echo twig_escape_filter($this->env, __trans("Setup new TLD prices and properties"), "html", null, true);
        echo "</p>

                <form method=\"post\" action=\"";
        // line 106
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicedomain/tld_create");
        echo "\" class=\"api-form\" data-api-reload=\"1\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 109
        echo twig_escape_filter($this->env, __trans("Tld"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"tld\" value=\".\" required title=\"";
        // line 111
        echo twig_escape_filter($this->env, __trans("Must start with a dot"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 115
        echo twig_escape_filter($this->env, __trans("Registrar"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <select class=\"form-select\" name=\"tld_registrar_id\" required>
                                ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicedomain_registrar_get_pairs", [], "any", false, false, false, 118));
        foreach ($context['_seq'] as $context["id"] => $context["title"]) {
            // line 119
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 125
        echo twig_escape_filter($this->env, __trans("Registration price"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"price_registration\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 131
        echo twig_escape_filter($this->env, __trans("Renewal price"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"price_renew\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 137
        echo twig_escape_filter($this->env, __trans("Transfer price"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"price_transfer\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 143
        echo twig_escape_filter($this->env, __trans("Minimum years of registration"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"min_years\" value=\"1\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 149
        echo twig_escape_filter($this->env, __trans("Allow registration"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioAllowRegisterYes\" type=\"radio\" name=\"allow_register\" value=\"1\" checked>
                                <label class=\"form-check-label\" for=\"radioAllowRegisterYes\">";
        // line 153
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioAllowRegisterNo\" type=\"radio\" name=\"allow_register\" value=\"0\">
                                <label class=\"form-check-label\" for=\"radioAllowRegisterNo\">";
        // line 157
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 162
        echo twig_escape_filter($this->env, __trans("Allow transfer"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioAllowTransferYes\" type=\"radio\" name=\"allow_transfer\" value=\"1\" checked>
                                <label class=\"form-check-label\" for=\"radioAllowTransferYes\">";
        // line 166
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioAllowTransferNo\" type=\"radio\" name=\"allow_transfer\" value=\"0\">
                                <label class=\"form-check-label\" for=\"radioAllowTransferNo\">";
        // line 170
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 175
        echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioActiveYes\" type=\"radio\" name=\"active\" value=\"1\" checked>
                                <label class=\"form-check-label\" for=\"radioActiveYes\">";
        // line 179
        echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioActiveNo\" type=\"radio\" name=\"active\" value=\"0\">
                                <label class=\"form-check-label\" for=\"radioActiveNo\">";
        // line 183
        echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, __trans("Add"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-registrars\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h5>";
        // line 195
        echo twig_escape_filter($this->env, __trans("Domain registrars"), "html", null, true);
        echo "</h5>
                <p class=\"text-muted\">";
        // line 196
        echo twig_escape_filter($this->env, __trans("Manage domain registrars"), "html", null, true);
        echo "</p>
            </div>

            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <thead>
                    <tr>
                        <th>";
        // line 202
        echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
        echo "</th>
                        <th class=\"w-1\"></th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicedomain_registrar_get_list", [], "any", false, false, false, 207), "list", [], "any", false, false, false, 207));
        foreach ($context['_seq'] as $context["_key"] => $context["registrar"]) {
            // line 208
            echo "                    <tr>
                        <td>
                            <a href=\"";
            // line 210
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicedomain/registrar/");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrar"], "id", [], "any", false, false, false, 210), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrar"], "title", [], "any", false, false, false, 210), "html", null, true);
            echo "</a>
                        </td>
                        <td>
                            <a class=\"btn btn-icon api-link\" href=\"";
            // line 213
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicedomain/registrar_copy", ["id" => twig_get_attribute($this->env, $this->source, $context["registrar"], "id", [], "any", false, false, false, 213), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" data-api-reload=\"1\" title=\"Install\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#copy\" />
                                </svg>
                            </a>
                            <a class=\"btn btn-icon\" href=\"";
            // line 218
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicedomain/registrar/");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["registrar"], "id", [], "any", false, false, false, 218), "html", null, true);
            echo "\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#edit\" />
                                </svg>
                            </a>
                            <a class=\"btn btn-icon api-link\" href=\"";
            // line 223
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicedomain/registrar_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["registrar"], "id", [], "any", false, false, false, 223), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\" data-api-confirm=\"";
            echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
            echo "\" data-api-reload=\"1\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#delete\" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registrar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-new-registrar\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h1>";
        // line 237
        echo twig_escape_filter($this->env, __trans("Adding new domain registrar"), "html", null, true);
        echo "</h1>
                <p>";
        // line 238
        echo twig_escape_filter($this->env, __trans("Follow instructions below to install new domain registrar."), "html", null, true);
        echo "</p>

                <div class=\"\">
                    <ul>
                        <li>";
        // line 242
        echo twig_escape_filter($this->env, __trans("Check domain registrar you are looking for is available at"), "html", null, true);
        echo " <a href=\"http://extensions.fossbilling.org/\" target=\"_blank\">FOSSBilling extensions site</a></li>
                        <li>";
        // line 243
        echo twig_escape_filter($this->env, __trans("Download domain registrar file and place to"), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, twig_constant("PATH_LIBRARY"), "html", null, true);
        echo "/Registrar/Adapter</strong></li>
                        <li>";
        // line 244
        echo twig_escape_filter($this->env, __trans("Reload this page to see newly detected domain registrar"), "html", null, true);
        echo "</li>
                        <li>";
        // line 245
        echo twig_escape_filter($this->env, __trans("Click on install button. Now you will be able to create top level domains with new domain registrar"), "html", null, true);
        echo "</li>
                        <li>";
        // line 246
        echo twig_escape_filter($this->env, __trans("For developers. Read"), "html", null, true);
        echo " <a href=\"https://fossbilling.org/docs\" target=\"_blank\">";
        echo twig_escape_filter($this->env, __trans("FOSSBilling documentation"), "html", null, true);
        echo "</a> ";
        echo twig_escape_filter($this->env, __trans("to learn how to create your own domain registrar."), "html", null, true);
        echo "</li>
                    </ul>
                </div>
            </div>

            ";
        // line 251
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicedomain_registrar_get_available", [], "any", false, false, false, 251)) > 0)) {
            // line 252
            echo "            <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                <thead>
                    <tr>
                        <th>";
            // line 255
            echo twig_escape_filter($this->env, __trans("Code"), "html", null, true);
            echo "</th>
                        <th class=\"w-1\">";
            // line 256
            echo twig_escape_filter($this->env, __trans("Install"), "html", null, true);
            echo "</th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicedomain_registrar_get_available", [], "any", false, false, false, 260));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 261
                echo "                <tr>
                    <td>";
                // line 262
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "</td>
                    <td>
                        <a class=\"btn btn-icon api-link\" href=\"";
                // line 264
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicedomain/registrar_install", ["code" => $context["code"], "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                echo "\" data-api-msg=\"";
                echo twig_escape_filter($this->env, __trans("Domain registrar installed"), "html", null, true);
                echo "\" title=\"Install\">
                            <svg  class=\"icon\">
                                <use xlink:href=\"#cog\" />
                            </svg>
                        </a>
                    </td>
                </tr>
                </tbody>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 273
                echo "                <tbody>
                    <tr>
                        <td class=\"text-muted\" colspan=\"5\">";
                // line 275
                echo twig_escape_filter($this->env, __trans("All payment gateways installed"), "html", null, true);
                echo "</td>
                    </tr>
                </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 279
            echo "            </table>
            ";
        }
        // line 281
        echo "        </div>

        <div class=\"tab-pane fade\" id=\"tab-extension-directory\" role=\"tabpanel\">
            ";
        // line 284
        $this->loadTemplate("partial_extensions.html.twig", "mod_servicedomain_index.html.twig", 284)->display(twig_to_array(["type" => "domain-registrar", "header" => "List of domain registrars on the Extension Directory"]));
        // line 285
        echo "        </div>

        <div class=\"tab-pane fade\" id=\"tab-nameservers\" role=\"tabpanel\">
            <div class=\"card-body\">
                <h5>";
        // line 289
        echo twig_escape_filter($this->env, __trans("Nameservers"), "html", null, true);
        echo "</h5>
                <p class=\"text-muted\">";
        // line 290
        echo twig_escape_filter($this->env, __trans("Setup default nameservers that will be used for new domain registrations if client have not provided his own nameservers in order form"), "html", null, true);
        echo "</p>

                <form method=\"post\" action=\"";
        // line 292
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/system/update_params");
        echo "\" class=\"api-form\" data-api-msg=\"";
        echo twig_escape_filter($this->env, __trans("Nameservers updated"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 293
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    ";
        // line 294
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_get_params", [], "any", false, false, false, 294);
        // line 295
        echo "                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 296
        echo twig_escape_filter($this->env, __trans("Nameserver 1"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"nameserver_1\" value=\"";
        // line 298
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "nameserver_1", [], "any", false, false, false, 298), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 302
        echo twig_escape_filter($this->env, __trans("Nameserver 2"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"nameserver_2\" value=\"";
        // line 304
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "nameserver_2", [], "any", false, false, false, 304), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 308
        echo twig_escape_filter($this->env, __trans("Nameserver 3"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"nameserver_3\" value=\"";
        // line 310
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "nameserver_3", [], "any", false, false, false, 310), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 314
        echo twig_escape_filter($this->env, __trans("Nameserver 4"), "html", null, true);
        echo ":</label>
                        <div class=\"col\">
                            <input class=\"form-control\" type=\"text\" name=\"nameserver_4\" value=\"";
        // line 316
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "nameserver_4", [], "any", false, false, false, 316), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 320
        echo twig_escape_filter($this->env, __trans("Update nameservers"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
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
        return "mod_servicedomain_index.html.twig";
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
        return array (  711 => 320,  704 => 316,  699 => 314,  692 => 310,  687 => 308,  680 => 304,  675 => 302,  668 => 298,  663 => 296,  660 => 295,  658 => 294,  654 => 293,  648 => 292,  643 => 290,  639 => 289,  633 => 285,  631 => 284,  626 => 281,  622 => 279,  612 => 275,  608 => 273,  592 => 264,  587 => 262,  584 => 261,  579 => 260,  572 => 256,  568 => 255,  563 => 252,  561 => 251,  549 => 246,  545 => 245,  541 => 244,  535 => 243,  531 => 242,  524 => 238,  520 => 237,  512 => 231,  496 => 223,  486 => 218,  478 => 213,  468 => 210,  464 => 208,  460 => 207,  452 => 202,  443 => 196,  439 => 195,  429 => 188,  421 => 183,  414 => 179,  407 => 175,  399 => 170,  392 => 166,  385 => 162,  377 => 157,  370 => 153,  363 => 149,  354 => 143,  345 => 137,  336 => 131,  327 => 125,  321 => 121,  310 => 119,  306 => 118,  300 => 115,  293 => 111,  288 => 109,  283 => 107,  279 => 106,  274 => 104,  270 => 103,  262 => 97,  246 => 89,  236 => 84,  226 => 81,  222 => 79,  214 => 78,  204 => 77,  194 => 76,  189 => 74,  185 => 73,  181 => 72,  172 => 70,  168 => 68,  164 => 67,  156 => 62,  152 => 61,  148 => 60,  144 => 59,  140 => 58,  136 => 57,  127 => 51,  123 => 50,  112 => 42,  105 => 38,  94 => 30,  84 => 23,  77 => 19,  67 => 12,  63 => 10,  59 => 9,  52 => 5,  47 => 1,  45 => 7,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_servicedomain_index.html.twig", "/var/www/modules/Servicedomain/html_admin/mod_servicedomain_index.html.twig");
    }
}
