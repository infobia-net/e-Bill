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

/* mod_formbuilder_settings.html.twig */
class __TwigTemplate_ecc6b31f78d7ba2a845f711440c60c04 extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_formbuilder_settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_formbuilder_settings.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Custom form builder";
    }

    // line 9
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <ul class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 12
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#home\"/>
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
        ";
        // line 21
        if ( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 21)) {
            // line 22
            echo "            <li class=\"breadcrumb-item active\" aria-current=\"page\">";
            echo twig_escape_filter($this->env, __trans("Custom form builder"), "html", null, true);
            echo "</li>
        ";
        } else {
            // line 24
            echo "            ";
            $context["form"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formbuilder_get_form", [["id" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 24)]], "method", false, false, false, 24);
            // line 25
            echo "            <li class=\"breadcrumb-item\">
                <a href=\"";
            // line 26
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/formbuilder");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Custom form builder"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</li>
        ";
        }
        // line 30
        echo "    </ul>
";
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "<div class=\"card\">
";
        // line 35
        if ( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 35)) {
            // line 36
            echo "    <!--<ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-index\" data-bs-toggle=\"tab\" role=\"tab\">";
            // line 38
            echo twig_escape_filter($this->env, __trans("Custom forms"), "html", null, true);
            echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-import\" data-bs-toggle=\"tab\" role=\"tab\">";
            // line 41
            echo twig_escape_filter($this->env, __trans("Import form"), "html", null, true);
            echo "</a>
        </li>
    </ul>-->

    <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Custom Forms</h3>
                    <div class=\"card-actions\">
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, __trans("Create new form"), "html", null, true);
            echo "\" id=\"new-form\" class=\"btn btn-primary\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path><path d=\"M12 5l0 14\"></path><path d=\"M5 12l14 0\"></path></svg>
                            <span>Add new</span>
                        </a>
                    </div>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                        <thead>
                            <tr>
                                <th>";
            // line 59
            echo twig_escape_filter($this->env, __trans("Title"), "html", null, true);
            echo "</th>
                                <th>";
            // line 60
            echo twig_escape_filter($this->env, __trans("Orders"), "html", null, true);
            echo "</th>
                                <th>";
            // line 61
            echo twig_escape_filter($this->env, __trans("Products"), "html", null, true);
            echo "</th>
                                <th class=\"w-1\"></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formbuilder_get_forms", [], "any", false, false, false, 66));
            foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
                // line 67
                echo "                            <tr>
                                <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["form"], "name", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                                <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["form"], "order_count", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                                <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["form"], "product_count", [], "any", false, false, false, 70), "html", null, true);
                echo "</td>
                                <td>
                                    <a class=\"btn btn-icon copy-form\" href=\"#\" data-api-reload=\"1\" title=\"Copy\"
                                       data-form-id=\"";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["form"], "id", [], "any", false, false, false, 73), "html", null, true);
                echo "\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#copy\" />
                                        </svg>
                                    </a>
                                    <a class=\"btn btn-icon\" href=\"";
                // line 78
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/formbuilder", ["id" => twig_get_attribute($this->env, $this->source, $context["form"], "id", [], "any", false, false, false, 78)]);
                echo "\" title=\"Edit\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#edit\" />
                                        </svg>
                                    </a>
                                    <a class=\"btn btn-icon remove-form\" data-form-id=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["form"], "id", [], "any", false, false, false, 83), "html", null, true);
                echo "\" title=\"Delete\">
                                        <svg class=\"icon\">
                                            <use xlink:href=\"#delete\" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

";
            // line 111
            echo "
";
        } else {
            // line 113
            $context["form"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formbuilder_get_form", [["id" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 113)]], "method", false, false, false, 113);
            // line 114
            echo "    <div class=\"tab-pane fade show active\" id=\"form-options-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 114), "html", null, true);
            echo "\" role=\"tabpanel\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">";
            // line 116
            echo twig_escape_filter($this->env, __trans("Form options"), "html", null, true);
            echo "</h3>
        </div>
        <form method=\"POST\" action=\"";
            // line 118
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/formbuilder/update_form_settings");
            echo "\" class=\"api-form\"
              data-api-msg=\"";
            // line 119
            echo twig_escape_filter($this->env, __trans("Form options were updated"), "html", null, true);
            echo "\">
            <div class=\"row row-cards\">
                <div class=\"card-body col-12\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 122
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"form_id\" value=\"";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 123), "html", null, true);
            echo "\">
                    <div class=\"mb-3 row\">
                        <label class=\"col-md-3 col-form-label\"
                               for=\"form_name\">";
            // line 126
            echo twig_escape_filter($this->env, __trans("Form title"), "html", null, true);
            echo "</label>
                        <div class=\"col-md-8\">
                            <input class=\"form-control\" type=\"text\" name=\"form_name\" id=\"form_name\"
                                   value=\"";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 129), "html", null, true);
            echo "\"/>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"col-md-3 col-form-label\" for=\"form_type\">";
            // line 133
            echo twig_escape_filter($this->env, __trans("Labels position"), "html", null, true);
            echo "</label>
                        <div class=\"col-md-8\">
                            <select class=\"form-select\" name=\"type\" id=\"form_type\">
                                <option value=\"default\" ";
            // line 136
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "style", [], "any", false, false, false, 136), "type", [], "any", false, false, false, 136) == "default")) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, __trans("Labels on
                            top"), "html", null, true);
            // line 137
            echo "</option>
                                <option
                                    value=\"horizontal\" ";
            // line 139
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "style", [], "any", false, false, false, 139), "type", [], "any", false, false, false, 139) == "horizontal")) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, __trans("Labels on the left"), "html", null, true);
            echo "</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"col-md-3 col-form-label\" for=\"show_title\">";
            // line 144
            echo twig_escape_filter($this->env, __trans("Form title visibility"), "html", null, true);
            echo "</label>
                        <div class=\"col-md-8\">
                            <select class=\"form-select\" name=\"show_title\" id=\"show_title\">
                                <option value=\"1\" ";
            // line 147
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "style", [], "any", false, false, false, 147), "show_title", [], "any", false, false, false, 147) == "1")) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, __trans("Show form
                            title"), "html", null, true);
            // line 148
            echo "</option>
                                <option value=\"0\" ";
            // line 149
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "style", [], "any", false, false, false, 149), "show_title", [], "any", false, false, false, 149) == "0")) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, __trans("Do not show form
                            title"), "html", null, true);
            // line 150
            echo "</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"card-footer text-end\">
                <button type=\"submit\" class=\"btn btn-primary\">";
            // line 157
            echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
            echo "</button>
            </div>
        </form>
    </div>

    <div class=\"mt-3 card widget\" id=\"form-";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 162), "html", null, true);
            echo "\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 164), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"row row-cards\">
            <div class=\"card-body col-12\">
                <div class=\"mb-3 row\">
                    <div class=\"d-flex gap-2 flex-wrap mb-3\" id=\"fields\">
                        <a href=\"";
            // line 170
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/formbuilder/add_field", ["form_id" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 170), "type" => "text", "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                           class=\"btn btn-outline-primary api-link\" data-api-reload=\"1\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#plus\"/>
                            </svg>
                            <span>";
            // line 175
            echo twig_escape_filter($this->env, __trans("Text"), "html", null, true);
            echo "</span>
                        </a>
                        <a href=\"";
            // line 177
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/formbuilder/add_field", ["form_id" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 177), "type" => "select", "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                           class=\"btn btn-outline-primary api-link\" data-api-reload=\"1\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#plus\"/>
                            </svg>
                            <span>";
            // line 182
            echo twig_escape_filter($this->env, __trans("Dropdown"), "html", null, true);
            echo "</span>
                        </a>
                        <a href=\"";
            // line 184
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/formbuilder/add_field", ["form_id" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 184), "type" => "radio", "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                           class=\"btn btn-outline-primary api-link\" data-api-reload=\"1\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#plus\"/>
                            </svg>
                            <span>";
            // line 189
            echo twig_escape_filter($this->env, __trans("Radio"), "html", null, true);
            echo "</span>
                        </a>
                        <a href=\"";
            // line 191
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/formbuilder/add_field", ["form_id" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 191), "type" => "checkbox", "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                           class=\"btn btn-outline-primary api-link\" data-api-reload=\"1\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#plus\"/>
                            </svg>
                            <span>";
            // line 196
            echo twig_escape_filter($this->env, __trans("Checkbox"), "html", null, true);
            echo "</span>
                        </a>
                        <a href=\"";
            // line 198
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/formbuilder/add_field", ["form_id" => twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 198), "type" => "textarea", "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                           class=\"btn btn-outline-primary api-link\" data-api-reload=\"1\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#plus\"/>
                            </svg>
                            <span>";
            // line 203
            echo twig_escape_filter($this->env, __trans("Textarea"), "html", null, true);
            echo "</span>
                        </a>
                    </div>
                </div>
                <fieldset>
                    ";
            // line 208
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 208));
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
            foreach ($context['_seq'] as $context["i"] => $context["field"]) {
                // line 209
                echo "                        <div class=\"wrap-field\">
                            ";
                // line 210
                $this->loadTemplate("mod_formbuilder_field.html.twig", "mod_formbuilder_settings.html.twig", 210)->display(twig_array_merge($context, $context["field"]));
                // line 211
                echo "                            ";
                $this->loadTemplate("mod_formbuilder_preview.html.twig", "mod_formbuilder_settings.html.twig", 211)->display(twig_array_merge($context, $context["field"]));
                // line 212
                echo "                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "                </fieldset>
            </div>
        </div>
</div>
";
        }
    }

    // line 221
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 222
        echo "    <script type=\"text/javascript\">
        \$('.new-field').on('click', function () {
            const p = \$(this).closest('.copy-field').prev();
            p.clone().insertAfter(p);
            p.next().find('input').val(\"\");
            return false;
        });

        \$('.remove-item').on('click', function () {
            const fid = \$(this).attr('data-field-id');
            const rm = \$(this);
            Modals.create({
                type: 'danger',
                title: 'Delete field?',
                content: 'Are you sure you want to delete this custom field?',
                confirmButton: 'Delete',
                confirmCallback: function () {
                    API.admin.post('formbuilder/delete_field', {id: fid}, function () {
                        \$(rm).parents('.wrap-field').slideUp(\"normal\", function () {
                            \$(rm).remove();
                        });
                    });
                }
            });
            return false;
        });

        \$('.remove-form').on('click', function () {
            const fid = \$(this).data('form-id');
            console.log(fid)
            const rm = \$(this);
            Modals.create({
                type: 'danger',
                title: 'Delete Form?',
                content: 'Are you sure you want to delete this form?',
                confirmButton: 'Delete',
                confirmCallback: function () {
                    API.admin.post('formbuilder/delete_form', {id: fid}, function () {
                        bb.redirect(\"";
        // line 260
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/formbuilder", ["id" => ""]);
        echo "\");
                    });
                }
            });
            return false;
        });

        \$('#new-form').on('click', function () {
            Modals.create({
                type: 'prompt',
                title: 'New Form',
                label: 'Give your form a new title',
                value: 'My new form',
                promptConfirmButton: 'Create',
                promptConfirmCallback: function (title) {
                    API.admin.post('formbuilder/create_form', {
                        name: title,
                        CSRFToken: \"";
        // line 277
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"
                    }, function (id) {
                        bb.redirect(\"";
        // line 279
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/formbuilder", ["id" => ""]);
        echo "\" + id);
                    });
                }
            });
            return false;
        });

        \$('.copy-form').on('click', function () {
            const fid = \$(this).attr('data-form-id');
            Modals.create({
                type: 'prompt',
                title: 'Copy Form',
                label: 'Give your duplicate form a title',
                value: 'My duplicate form',
                promptConfirmButton: 'Copy',
                promptConfirmCallback: function (title) {
                    API.admin.post('formbuilder/copy_form', {
                        name: title,
                        form_id: fid,
                        CSRFToken: \"";
        // line 298
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"
                    }, function (id) {
                        bb.redirect(\"";
        // line 300
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/formbuilder", ["id" => ""]);
        echo "\" + id);
                    });
                }
            });
            return false;
        })
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_formbuilder_settings.html.twig";
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
        return array (  580 => 300,  575 => 298,  553 => 279,  548 => 277,  528 => 260,  488 => 222,  484 => 221,  475 => 214,  460 => 212,  457 => 211,  455 => 210,  452 => 209,  435 => 208,  427 => 203,  419 => 198,  414 => 196,  406 => 191,  401 => 189,  393 => 184,  388 => 182,  380 => 177,  375 => 175,  367 => 170,  358 => 164,  353 => 162,  345 => 157,  336 => 150,  329 => 149,  326 => 148,  319 => 147,  313 => 144,  301 => 139,  297 => 137,  290 => 136,  284 => 133,  277 => 129,  271 => 126,  265 => 123,  261 => 122,  255 => 119,  251 => 118,  246 => 116,  240 => 114,  238 => 113,  234 => 111,  226 => 91,  212 => 83,  204 => 78,  196 => 73,  190 => 70,  186 => 69,  182 => 68,  179 => 67,  175 => 66,  167 => 61,  163 => 60,  159 => 59,  146 => 49,  135 => 41,  129 => 38,  125 => 36,  123 => 35,  120 => 34,  116 => 33,  111 => 30,  106 => 28,  99 => 26,  96 => 25,  93 => 24,  87 => 22,  85 => 21,  78 => 19,  68 => 12,  64 => 10,  60 => 9,  53 => 5,  49 => 1,  47 => 7,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_formbuilder_settings.html.twig", "/var/www/modules/Formbuilder/html_admin/mod_formbuilder_settings.html.twig");
    }
}
