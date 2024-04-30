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

/* mod_theme_preset.html.twig */
class __TwigTemplate_c61b8be51fd266bef4c833fdb6e3dc96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_theme_preset.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 8
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#home\" />
                </svg>
            </a>
        </li>
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 15
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 18
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/theme");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Themes"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 20
        echo twig_escape_filter($this->env, __trans("Settings for"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["theme_code"] ?? null), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 24
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Settings for"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["theme_code"] ?? null), "html", null, true);
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        if (($context["error"] ?? null)) {
            // line 28
            echo "        <div class=\"nNote nFailure hideit first\">
            <p><strong>";
            // line 29
            echo twig_escape_filter($this->env, __trans("IMPORTANT"), "html", null, true);
            echo ": </strong>";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if (($context["info"] ?? null)) {
            // line 34
            echo "        <div class=\"nNote nInformation hideit first\">
            <p><strong>";
            // line 35
            echo twig_escape_filter($this->env, __trans("INFORMATION"), "html", null, true);
            echo ": </strong>";
            echo twig_escape_filter($this->env, ($context["info"] ?? null), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if (($context["settings_html"] ?? null)) {
            // line 40
            echo "        <div class=\"card\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">";
            // line 42
            echo twig_escape_filter($this->env, __trans("Settings for"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["theme_code"] ?? null), "html", null, true);
            echo "</h3>
                <div class=\"card-subtitle\">";
            // line 43
            echo twig_escape_filter($this->env, __trans("Switch to a predefined set of theme settings from the dropdown. Adjust each section and apply the changes once you're done."), "html", null, true);
            echo "</div>
                <div class=\"mb-3 row\">
                    <label class=\"form-label col-sm-4 col-md-3 col-form-label\">";
            // line 45
            echo twig_escape_filter($this->env, __trans("Your current preset"), "html", null, true);
            echo "</label>
                    <div class=\"col-sm-5 col-md-3\">
                        <div class=\"input-group\">
                            <select class=\"form-select\" name=\"preset\" onchange=\"bb.post('admin/theme/preset_select', { code: '";
            // line 48
            echo twig_escape_filter($this->env, ($context["theme_code"] ?? null), "html", null, true);
            echo "', preset: \$(this).val(), CSRFToken: '";
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "' }, function(){ bb.reload(); })\">
                                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["presets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["preset"]) {
                // line 50
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["preset"], "html", null, true);
                echo "\"";
                if (($context["preset"] == ($context["current_preset"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["preset"], "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                            </select>
                            ";
            // line 53
            if (((twig_length_filter($this->env, ($context["presets"] ?? null)) > 1) && (($context["current_preset"] ?? null) != "Default"))) {
                // line 54
                echo "                                <a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/theme/preset_delete", ["code" => ($context["theme_code"] ?? null), "preset" => ($context["current_preset"] ?? null), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
                echo "\" class=\"btn btn-icon api-link\" data-api-confirm=\"";
                echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
                echo "\"
                                   data-api-confirm-btn=\"Delete\"
                                   data-api-type=\"danger\"
                                   data-api-reload=\"1\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#delete\"/>
                                    </svg>
                                </a>
                            ";
            }
            // line 63
            echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card mt-3\">
            <form method=\"post\" action=\"\" enctype=\"multipart/form-data\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">";
            // line 71
            echo twig_escape_filter($this->env, __trans("Config for"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["current_preset"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, __trans("preset"), "html", null, true);
            echo "</h3>
                    <div class=\"\" id=\"theme-settings\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                        <div class=\"accordion\" id=\"preset-config\">
                            ";
            // line 75
            echo ($context["settings_html"] ?? null);
            echo "
                        </div>
                        <div class=\"mt-3 d-flex align-items-center\">
                            <div class=\"form-check mb-0\">
                                <input class=\"form-check-input\" type=\"checkbox\" name=\"save-current-setting\" value=\"1\" id=\"save-current-setting\">
                                <label class=\"form-check-label\" for=\"save-current-setting\">";
            // line 80
            echo twig_escape_filter($this->env, __trans("Save current settings as a new preset called"), "html", null, true);
            echo "</label>
                            </div>
                            <div class=\"ms-2\">
                                <input class=\"form-control\" type=\"text\" name=\"save-current-setting-preset\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card-footer text-end\">
                    <button class=\"btn btn-primary\" type=\"submit\">";
            // line 89
            echo twig_escape_filter($this->env, __trans("Apply changes"), "html", null, true);
            echo "</button>
                </div>
            </form>
        </div>
    ";
        }
    }

    // line 95
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "    <script>
        document.addEventListener('DOMContentLoaded', () => {

            function createOptionElement(value, text) {
                let optionEl = document.createElement('option');
                optionEl.setAttribute('value', value);
                optionEl.innerText = text;
                return optionEl;
            }

            //special class \"page\"
            document.querySelectorAll('#theme-settings select.page').forEach((el) => {
                el.append(createOptionElement('', 'None'));
                Object.entries(";
        // line 109
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "page_get_pairs", [], "any", false, false, false, 109));
        echo ").forEach(([key, value]) => {
                    el.append(createOptionElement(key, value));
                })
            });

            //special class \"snippet\"
            document.querySelectorAll('#theme-settings select.snippet').forEach((el) => {
                el.append(createOptionElement('', 'None'));
                Object.entries(";
        // line 117
        echo json_encode(($context["snippets"] ?? null));
        echo ").forEach(([key, value]) => {
                    el.append(createOptionElement(key, value));
                })
            });

            //special class \"product\"
            document.querySelectorAll('#theme-settings select.product').forEach((el) => {
                el.append(createOptionElement('', 'None'));
                Object.entries(";
        // line 125
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_get_pairs", [], "any", false, false, false, 125));
        echo ").forEach(([key, value]) => {
                    el.append(createOptionElement(key, value));
                })
            });

            // populate settings values
            Object.entries(";
        // line 131
        echo json_encode(($context["settings"] ?? null));
        echo ").forEach(([key, value]) => {
                document.querySelectorAll('#theme-settings *[name=\"' + key + '\"]').forEach((el) => {
                    switch (el.getAttribute('type')) {
                        case 'radio':
                            el.parentElement.parentElement.querySelector('[value=\"'+ value +'\"]').setAttribute('checked', '')
                            break;
                        case 'checkbox':
                            el.setAttribute('checked', '');
                            break;
                        default:
                            el.value = value;
                    }
                });
            })

            // show uploaded files
            Object.entries(";
        // line 147
        echo json_encode(($context["uploaded"] ?? null));
        echo ").forEach(([key, file]) => {
                let el = document.querySelector('#theme-settings input[name=\"' + file.name + '\"]');
                let filePathBtn = '<div class=\"asset\"><a href=\"' + file.url + '\" target=\"_blank\" >' + file.name + '</a></div>';
                el.insertAdjacentHTML('afterend', filePathBtn);

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
        return "mod_theme_preset.html.twig";
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
        return array (  330 => 147,  311 => 131,  302 => 125,  291 => 117,  280 => 109,  265 => 96,  261 => 95,  251 => 89,  239 => 80,  231 => 75,  226 => 73,  217 => 71,  207 => 63,  192 => 54,  190 => 53,  187 => 52,  172 => 50,  168 => 49,  162 => 48,  156 => 45,  151 => 43,  145 => 42,  141 => 40,  139 => 39,  136 => 38,  128 => 35,  125 => 34,  123 => 33,  120 => 32,  112 => 29,  109 => 28,  106 => 27,  102 => 26,  93 => 24,  84 => 20,  77 => 18,  69 => 15,  59 => 8,  55 => 6,  51 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_theme_preset.html.twig", "/var/www/modules/Theme/html_admin/mod_theme_preset.html.twig");
    }
}
