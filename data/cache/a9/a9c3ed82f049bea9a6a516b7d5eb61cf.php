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

/* mod_extension_index.html.twig */
class __TwigTemplate_b3bd1ade6ff5348370510e7ace81880e extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_extension_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_extension_index.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "extensions";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Extensions"), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"card-tabs\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" href=\"#tab-index\" data-bs-toggle=\"tab\">";
        // line 13
        echo twig_escape_filter($this->env, __trans("Extensions"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-store\" data-bs-toggle=\"tab\">";
        // line 16
        echo twig_escape_filter($this->env, __trans("Extension Directory"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-about\" data-bs-toggle=\"tab\">";
        // line 19
        echo twig_escape_filter($this->env, __trans("Learn more about extensions"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-hooks\" data-bs-toggle=\"tab\">";
        // line 22
        echo twig_escape_filter($this->env, __trans("Hooks"), "html", null, true);
        echo "</a>
            </li>
        </ul>

        <div class=\"card\">
            <div class=\"tab-content\">

                <div class=\"tab-pane fade active show\" id=\"tab-index\" role=\"tabpanel\">
                    <div class=\"card-header\">
                        <div>
                            <h3 class=\"card-title\">FOSSBilling extensions</h3>
                            <p class=\"card-subtitle\">";
        // line 33
        echo twig_escape_filter($this->env, __trans("Activate or deactivate extensions"), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>";
        // line 41
        echo twig_escape_filter($this->env, __trans("Extension"), "html", null, true);
        echo "</th>
                                <th>";
        // line 42
        echo twig_escape_filter($this->env, __trans("Description"), "html", null, true);
        echo "</th>
                                <th class=\"w-1\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_get_list", [], "any", false, false, false, 47));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ext"]) {
            // line 48
            echo "                                <tr>
                                    <td>
                                        ";
            // line 50
            $context["icon_filename"] = twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "icon_url", [], "any", false, false, false, 50), "/"));
            // line 51
            echo "                                        ";
            if (((($context["icon_filename"] ?? null) != "cog.svg") && ((twig_last($this->env, twig_split_filter($this->env, ($context["icon_filename"] ?? null), ".")) == "svg") && twig_get_attribute($this->env, $this->source, $context["ext"], "icon_path", [], "any", false, false, false, 51)))) {
                // line 52
                echo "                                            <div class=\"text-primary\" style=\"width:24px;height:24px;\">
                                                ";
                // line 53
                echo twig_source($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "icon_path", [], "any", false, false, false, 53), true);
                echo "
                                            </div>
                                        ";
            } else {
                // line 56
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["ext"], "icon_url", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["ext"], "icon_url", [], "any", false, false, false, 56), "assets/icons/cog.svg")) : ("assets/icons/cog.svg")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "name", [], "any", false, false, false, 56), "html", null, true);
                echo "\" style=\"width:32px;height:32px;\">
                                        ";
            }
            // line 58
            echo "                                    </td>
                                    <td>
                                        <strong>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "name", [], "any", false, false, false, 60), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "version", [], "any", false, false, false, 60), "html", null, true);
            echo "<br>
                                        <span>by <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "author_url", [], "any", false, false, false, 61), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "author", [], "any", false, false, false, 61), "html", null, true);
            echo "</a></span>
                                    </td>
                                    <td>
                                        ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "description", [], "any", false, false, false, 64), "html", null, true);
            echo "<br>
                                        <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "project_url", [], "any", false, false, false, 65), "html", null, true);
            echo "\" target=\"_blank\" data-bs-toggle=\"tooltip\" data-bs-title=\"Project details\">";
            echo twig_escape_filter($this->env, __trans("Learn more"), "html", null, true);
            echo "</a>
                                    </td>
                                    <td>
                                        ";
            // line 68
            if ((twig_get_attribute($this->env, $this->source, $context["ext"], "type", [], "any", false, false, false, 68) == "mod")) {
                // line 69
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["ext"], "status", [], "any", false, false, false, 69) == "installed")) {
                    // line 70
                    echo "                                                <a class=\"btn btn-icon api-link\"
                                                   href=\"";
                    // line 71
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/deactivate", ["type" => twig_get_attribute($this->env, $this->source, $context["ext"], "type", [], "any", false, false, false, 71), "id" => twig_get_attribute($this->env, $this->source, $context["ext"], "id", [], "any", false, false, false, 71), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                    echo "\"
                                                   data-api-type=\"danger\"
                                                   data-api-confirm-btn=\"Deactivate\"
                                                   data-api-confirm=\"";
                    // line 74
                    echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
                    echo "\"
                                                   data-api-reload=\"Module was deactivated\"
                                                   data-bs-toggle=\"tooltip\" data-bs-title=\"";
                    // line 76
                    echo twig_escape_filter($this->env, __trans("Deactivate"), "html", null, true);
                    echo "\">
                                                    <svg class=\"icon\">
                                                        <use xlink:href=\"#close\" />
                                                    </svg>
                                                </a>
                                            ";
                } else {
                    // line 82
                    echo "                                                <a class=\"btn btn-icon api-link\"
                                                   href=\"";
                    // line 83
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/activate", ["type" => twig_get_attribute($this->env, $this->source, $context["ext"], "type", [], "any", false, false, false, 83), "id" => twig_get_attribute($this->env, $this->source, $context["ext"], "id", [], "any", false, false, false, 83), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                    echo "\"
                                                   data-api-confirm=\"";
                    // line 84
                    echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
                    echo "\"
                                                   data-api-confirm-btn=\"Activate\"
                                                   data-api-jsonp=\"onAfterModuleActivated\"
                                                   data-bs-toggle=\"tooltip\" data-bs-title=\"";
                    // line 87
                    echo twig_escape_filter($this->env, __trans("Activate"), "html", null, true);
                    echo "\">
                                                    <svg class=\"icon\">
                                                        <use xlink:href=\"#play\" />
                                                    </svg>
                                                </a>
                                            ";
                }
                // line 93
                echo "                                        ";
            } else {
                // line 94
                echo "                                            &nbsp;
                                        ";
            }
            // line 96
            echo "
                                        ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, $context["ext"], "has_settings", [], "any", false, false, false, 97)) {
                // line 98
                echo "                                            <a class=\"btn btn-icon\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "id", [], "any", false, false, false, 98), "html", null, true);
                echo "\"
                                               data-bs-toggle=\"tooltip\" data-bs-title=\"";
                // line 99
                echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
                echo "\">
                                                <svg class=\"icon\">
                                                    <use xlink:href=\"#cog\" />
                                                </svg>
                                            </a>
                                        ";
            }
            // line 105
            echo "                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 108
            echo "                                <tr>
                                    <td class=\"text-muted\" colspan=\"4\">";
            // line 109
            echo twig_escape_filter($this->env, __trans("The list is empty"), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ext'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-store\" role=\"tabpanel\">
                    <div class=\"card-header\">
                        <div>
                            <h3 class=\"card-title\">Modules on the extension directory</h3>
                            <p class=\"card-subtitle\">These are all modules available for installation from the <a href=\"https://extensions.fossbilling.org/\">extension directory</a> at the click of a button.</p>
                        </div>
                    </div>
                    ";
        // line 124
        $this->loadTemplate("partial_extensions.html.twig", "mod_extension_index.html.twig", 124)->display($context);
        // line 125
        echo "                </div>

                <div class=\"tab-pane fade\" id=\"tab-about\" role=\"tabpanel\">
                    <div class=\"card-header\">
                        <div>
                            <h3 class=\"card-title\">";
        // line 130
        echo twig_escape_filter($this->env, __trans("Extending FOSSBilling"), "html", null, true);
        echo "</h3>
                            <p class=\"card-subtitle\">";
        // line 131
        echo twig_escape_filter($this->env, __trans("FOSSBilling gives developers all the capabilities to customize, integrate & extend the core system into your own website & applications."), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <h3>More extensions</h3>
                        <p>If you cannot find the extensions you are looking for in the admin area, please visit the extension directory at <a href=\"https://extensions.fossbilling.org\" target=\"_blank\">https://extensions.fossbilling.org</a>.</p>

                        <h3>How to create a new extension</h3>
                        <ul>
                            <li>Create a <a href=\"https://github.com/signup/free\" target=\"_blank\">GitHub</a> account for free.</li>
                            <li>Create a new public repository dedicated to the extension only.</li>
                            <li>The repository must have a valid manifest file for your extension in the JSON format. For more information, please refer <a href=\"https://github.com/FOSSBilling/example-extension\" target=\"_blank\">to our example extension</a>.</li> ";
        // line 143
        echo "                            <li>Create a pull request <a href=\"https://github.com/FOSSBilling/extension-directory\">here</a>.</li>
                            <li>The FOSSBilling team will review your extension and contact you if there are any issues.</li>
                            <li>Registered extensions will then appear on the extension directory.</li>
                        </ul>

                        <h3>Supported extension types</h3>
                        <ul>
                            <li>Payment gateways</li>
                            <li>Server managers</li>
                            <li>Domain registrars</li>
                            <li>Client area themes</li>
                            <li>Admin area themes</li>
                            <li>Translations for client and admin areas</li>
                            <li>Event hooks - Hooks can be injected into the process, change its behaviour, stop executing actions</li>
                            <li>API module - External program which uses FOSSBilling API</li>
                        </ul>

                        <h3>Extension support</h3>
                        <p>Contact extensions developers directly for support. You can find issue tracker on the extension directory.</p>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-hooks\" role=\"tabpanel\">
                    <div class=\"table-responsive\">
                        <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                            <thead>
                            <tr>
                                <th>";
        // line 170
        echo twig_escape_filter($this->env, __trans("Extension"), "html", null, true);
        echo "</th>
                                <th>";
        // line 171
        echo twig_escape_filter($this->env, __trans("Hook"), "html", null, true);
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hook_get_list", [["per_page" => 90]], "method", false, false, false, 175), "list", [], "any", false, false, false, 175));
        foreach ($context['_seq'] as $context["_key"] => $context["hook"]) {
            // line 176
            echo "                                <tr>
                                    <td>
                                        ";
            // line 178
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hook"], "rel_id", [], "any", false, false, false, 178)), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <code>";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hook"], "event", [], "any", false, false, false, 181), "html", null, true);
            echo "</code>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hook'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 194
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        echo "    <script>
        function onAfterUpdate(result) {}
        function onAfterModuleActivated(result) {
            if(result.redirect && result.type === 'mod') {
                bb.redirect(\"";
        // line 199
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("");
        echo "/\" + result.id);
            } else if (result.has_settings) {
                bb.redirect(\"";
        // line 201
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings");
        echo "/\" + result.id);
            } else {
                bb.reload();
            }
        }
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_extension_index.html.twig";
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
        return array (  412 => 201,  407 => 199,  401 => 195,  397 => 194,  386 => 185,  376 => 181,  370 => 178,  366 => 176,  362 => 175,  355 => 171,  351 => 170,  322 => 143,  308 => 131,  304 => 130,  297 => 125,  295 => 124,  281 => 112,  272 => 109,  269 => 108,  262 => 105,  253 => 99,  246 => 98,  244 => 97,  241 => 96,  237 => 94,  234 => 93,  225 => 87,  219 => 84,  215 => 83,  212 => 82,  203 => 76,  198 => 74,  192 => 71,  189 => 70,  186 => 69,  184 => 68,  176 => 65,  172 => 64,  164 => 61,  158 => 60,  154 => 58,  146 => 56,  140 => 53,  137 => 52,  134 => 51,  132 => 50,  128 => 48,  123 => 47,  115 => 42,  111 => 41,  100 => 33,  86 => 22,  80 => 19,  74 => 16,  68 => 13,  63 => 10,  59 => 9,  52 => 5,  48 => 1,  46 => 7,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_extension_index.html.twig", "/var/www/modules/Extension/html_admin/mod_extension_index.html.twig");
    }
}
