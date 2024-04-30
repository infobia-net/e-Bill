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

/* mod_staff_manage.html.twig */
class __TwigTemplate_1c6517e98dee8e006e1a92a04d9f40a2 extends Template
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
        return "layout_default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_staff_manage.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_staff_manage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Profile"), "html", null, true);
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
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 22
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/staff");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Staff"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</li>
    </ol>
";
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "role", [], "any", false, false, false, 29) == "cron")) {
            // line 30
            echo "    <div class=\"nNote nInformation hideit first\">
        <p><strong>";
            // line 31
            echo twig_escape_filter($this->env, __trans("INFORMATION"), "html", null, true);
            echo ": </strong>";
            echo twig_escape_filter($this->env, __trans("This staff member is used by FOSSBilling to perform system tasks and cannot be removed."), "html", null, true);
            echo "</p>
    </div>
    ";
        }
        // line 34
        echo "
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link active\" href=\"#tab-profile\" data-bs-toggle=\"tab\">";
        // line 37
        echo twig_escape_filter($this->env, __trans("Profile"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\" data-bs-toggle=\"tab\">
            <a class=\"nav-link\" href=\"#tab-permissions\" data-bs-toggle=\"tab\">";
        // line 40
        echo twig_escape_filter($this->env, __trans("Permissions"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <a class=\"nav-link\" href=\"#tab-password\" data-bs-toggle=\"tab\">";
        // line 43
        echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
        echo "</a>
        </li>
    </ul>

<div class=\"card\">
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"tab-profile\" role=\"tabpanel\">
            <div class=\"help\">
                <h3>";
        // line 51
        echo twig_escape_filter($this->env, __trans("Manage staff member details"), "html", null, true);
        echo "</h3>

                <form method=\"post\" action=\"admin/staff/update\" class=\"api-form\" data-api-msg=\"";
        // line 53
        echo twig_escape_filter($this->env, __trans("This staff member updated."), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 56
        echo twig_escape_filter($this->env, __trans("Group"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            ";
        // line 58
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["admin_group_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "staff_group_get_pairs", [], "any", false, false, false, 58), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "group", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58), 1], 58, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\" for=\"inputName\">";
        // line 62
        echo twig_escape_filter($this->env, __trans("Name"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" id=\"inputName\" type=\"text\" name=\"name\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "name", [], "any", false, false, false, 64), "html", null, true);
        echo "\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\" for=\"inputEmail\">";
        // line 68
        echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" id=\"inputEmail\" type=\"text\" name=\"email\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "email", [], "any", false, false, false, 70), "html", null, true);
        echo "\" required>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\">";
        // line 74
        echo twig_escape_filter($this->env, __trans("Status"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioStatusActive\" type=\"radio\" name=\"status\" value=\"active\"";
        // line 77
        if ((twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "status", [], "any", false, false, false, 77) == "active")) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioStatusActive\">";
        // line 78
        echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
        echo "</label>
                            </div>
                            <div class=\"form-check form-check-inline\">
                                <input class=\"form-check-input\" id=\"radioStatusInactive\" type=\"radio\" name=\"status\" value=\"inactive\"";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "status", [], "any", false, false, false, 81) == "inactive")) {
            echo " checked";
        }
        echo ">
                                <label class=\"form-check-label\" for=\"radioStatusInactive\">";
        // line 82
        echo twig_escape_filter($this->env, __trans("Inactive"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\" for=\"textareaSignature\">";
        // line 87
        echo twig_escape_filter($this->env, __trans("Signature"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <textarea class=\"form-control\" id=\"textareaSignature\" name=\"signature\" rows=\"2\">";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "signature", [], "any", false, false, false, 89), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "id", [], "any", false, false, false, 93), "html", null, true);
        echo "\">
                    <input type=\"submit\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
                </form>
            </div>
        </div>

        <div class=\"tab-pane fade\" id=\"tab-permissions\" role=\"tabpanel\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h1>";
        // line 102
        echo twig_escape_filter($this->env, __trans("Permissions for: "), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "name", [], "any", false, false, false, 102), "html", null, true);
        echo "</h1>
                    <div>
                        ";
        // line 104
        if ((twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "role", [], "any", false, false, false, 104) != "admin")) {
            // line 105
            echo "                            <button class=\"btn btn-secondary btn-md d-inline\" onclick=\"toggleAll(true);\">";
            echo twig_escape_filter($this->env, __trans("Give all permissions"), "html", null, true);
            echo "</button>
                            <button class=\"btn btn-danger btn-md d-inline\" onclick=\"toggleAll(false);\">";
            // line 106
            echo twig_escape_filter($this->env, __trans("Revoke all permissions"), "html", null, true);
            echo "</button>
                        ";
        }
        // line 108
        echo "                    </div>
                </div>

            ";
        // line 111
        if ((twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "role", [], "any", false, false, false, 111) == "admin")) {
            // line 112
            echo "                <p>";
            echo twig_escape_filter($this->env, __trans("This administrator is allowed to do everything"), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 114
            echo "
            ";
            // line 115
            $context["prms"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "staff_permissions_get", [["id" => twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "id", [], "any", false, false, false, 115)]], "method", false, false, false, 115);
            // line 116
            echo "                <form method=\"post\" action=\"admin/staff/permissions_update\" class=\"api-form\" data-api-msg=\"";
            echo twig_escape_filter($this->env, __trans("Permissions updated"), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 117
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\">
                <input type=\"hidden\" name=\"permissions[default]\" value=\"\">

                ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mods"] ?? null));
            foreach ($context['_seq'] as $context["modName"] => $context["mod"]) {
                // line 121
                echo "                    <div class=\"row\">
                        <div class=\"col-1\"></div>
                        <div class=\"col-2\">
                            <h3 class=\"float-right text-capitalize mt-1\">";
                // line 124
                echo twig_escape_filter($this->env, $context["modName"], "html", null, true);
                echo "</h3>
                        </div>
                        <div class=\"col-4\">
                            ";
                // line 127
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mod"], "permissions", [], "any", false, false, false, 127), "can_always_access", [], "any", false, false, false, 127)) {
                    // line 128
                    echo "                                <div class=\"mt-2 form-check\">
                                    <input class=\"form-check-input permission-box\" id=\"input-";
                    // line 129
                    echo twig_escape_filter($this->env, $context["modName"], "html", null, true);
                    echo "\" type=\"checkbox\" name=\"permissions[";
                    echo twig_escape_filter($this->env, $context["modName"], "html", null, true);
                    echo "][access]\" value=\"1\"";
                    if ((($__internal_compile_0 = ($context["prms"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["modName"]] ?? null) : null)) {
                        echo " checked ";
                    }
                    echo ">
                                    <label class=\"form-check-label\" for=\"input-";
                    // line 130
                    echo twig_escape_filter($this->env, $context["modName"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, __trans("Module access"), "html", null, true);
                    echo "
                                        <svg class=\"icon\" data-bs-toggle=\"tooltip\" data-bs-title=\"";
                    // line 131
                    echo twig_escape_filter($this->env, __trans("Can be disabled to prevent the staff member from using any part of this module."), "html", null, true);
                    echo "\" data-bs-placement=\"right\"><use xlink:href=\"#info\"/></svg>
                                    </label>
                                </div>
                            ";
                }
                // line 135
                echo "                        
                            ";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["mod"], "permissions", [], "any", false, false, false, 136));
                foreach ($context['_seq'] as $context["permissionName"] => $context["permission"]) {
                    // line 137
                    echo "                                <div class=\"form-group\">
                                    ";
                    // line 138
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "type", [], "any", false, false, false, 138) == "bool")) {
                        // line 139
                        echo "                                        <div class=\"mt-2 form-check\">
                                            <input class=\"form-check-input permission-box\" id=\"input-";
                        // line 140
                        echo twig_escape_filter($this->env, $context["modName"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $context["permissionName"], "html", null, true);
                        echo "\" type=\"checkbox\" name=\"permissions[";
                        echo twig_escape_filter($this->env, $context["modName"], "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, $context["permissionName"], "html", null, true);
                        echo "]\" value=\"1\"";
                        if ((($__internal_compile_1 = (($__internal_compile_2 = ($context["prms"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["modName"]] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["permissionName"]] ?? null) : null)) {
                            echo " checked ";
                        }
                        echo ">
                                            <label class=\"form-check-label\" for=\"input-";
                        // line 141
                        echo twig_escape_filter($this->env, $context["modName"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $context["permissionName"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "display_name", [], "any", false, false, false, 141), "html", null, true);
                        echo "
                                                <svg class=\"icon\" data-bs-toggle=\"tooltip\" data-bs-title=\"";
                        // line 142
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "description", [], "any", false, false, false, 142), "html", null, true);
                        echo "\" data-bs-placement=\"right\"><use xlink:href=\"#info\"/></svg>
                                            </label>
                                        </div>
                                    ";
                    }
                    // line 146
                    echo "                        
                                    ";
                    // line 147
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "type", [], "any", false, false, false, 147) == "select")) {
                        // line 148
                        echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-flex align-items-center\">
                                                    <label for=\"input-";
                        // line 151
                        echo twig_escape_filter($this->env, $context["modName"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $context["permissionName"], "html", null, true);
                        echo "\" class=\"mt-2 text-nowrap\" style=\"margin-right: 10px; margin-left: 5px;\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "display_name", [], "any", false, false, false, 151), "html", null, true);
                        echo "</label>
                                                    <select class=\"form-control mt-2 permission-select\" name=\"permissions[";
                        // line 152
                        echo twig_escape_filter($this->env, $context["modName"], "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, $context["permissionName"], "html", null, true);
                        echo "]\" style=\"margin-right: 5px;\">
                                                    <option value=\"\">";
                        // line 153
                        echo twig_escape_filter($this->env, __trans("None"), "html", null, true);
                        echo "</option>
                                                        ";
                        // line 154
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["permission"], "options", [], "any", false, false, false, 154));
                        foreach ($context['_seq'] as $context["optionName"] => $context["option"]) {
                            // line 155
                            echo "                                                            <option value=\"";
                            echo twig_escape_filter($this->env, $context["optionName"], "html", null, true);
                            echo "\" ";
                            if (((($__internal_compile_3 = (($__internal_compile_4 = ($context["prms"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["modName"]] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["permissionName"]] ?? null) : null) == $context["optionName"])) {
                                echo " selected ";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                            echo "</option>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['optionName'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 157
                        echo "                                                    </select>
                                                    <svg class=\"icon mt-2\" data-bs-toggle=\"tooltip\" data-bs-title=\"";
                        // line 158
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "description", [], "any", false, false, false, 158), "html", null, true);
                        echo "\" data-bs-placement=\"right\" style=\"width: 32px; height: 32px;\"><use xlink:href=\"#info\"/></svg>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                    }
                    // line 163
                    echo "                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['permissionName'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "                            <hr class=\"mt-4 mb-4\"/>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['modName'], $context['mod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "
                <input type=\"hidden\" name=\"id\" value=\"";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "id", [], "any", false, false, false, 170), "html", null, true);
            echo "\">
            
                <div class=\"card-footer\">
                    <input type=\"submit\" value=\"";
            // line 173
            echo twig_escape_filter($this->env, __trans("Save"), "html", null, true);
            echo "\" class=\"btn btn-primary w-100\">
                </div>
            </form>
                 
            </div>
            ";
        }
        // line 179
        echo "        </div>

        <div class=\"tab-pane fade\" id=\"tab-password\" role=\"tabpanel\">
            <div class=\"help\">
                <h3>";
        // line 183
        echo twig_escape_filter($this->env, __trans("Change staff member password"), "html", null, true);
        echo "</h3>

                <form method=\"post\" action=\"admin/staff/change_password\" class=\"api-form\" data-api-msg=\"";
        // line 185
        echo twig_escape_filter($this->env, __trans("Staff member password changed"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 186
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\" for=\"inputPassword\">";
        // line 188
        echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" id=\"inputPassword\" type=\"password\" name=\"password\" required>
                        </div>
                        </div>
                    <div class=\"mb-3 row\">
                        <label class=\"form-label col-3 col-form-label\" for=\"inputPasswordConfirm\">";
        // line 194
        echo twig_escape_filter($this->env, __trans("Repeat same password"), "html", null, true);
        echo "</label>
                        <div class=\"col\">
                            <input class=\"form-control\" id=\"inputPasswordConfirm\" type=\"password\" name=\"password_confirm\" required>
                        </div>
                    </div>

                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "id", [], "any", false, false, false, 200), "html", null, true);
        echo "\">
                    <input type=\"submit\" value=\"";
        // line 201
        echo twig_escape_filter($this->env, __trans("Submit"), "html", null, true);
        echo "\" class=\"btn btn-primary w-100\">
                </form>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 209
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        echo "<script>
    function toggleAll(check){
        const  elements = document.getElementsByClassName('permission-box');
        Array.from(elements).forEach( (element) => {
            if(element.dataset.alwaysGiven){
                element.checked = true;
            } else {
                element.checked = check;
            }
        });
    }
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_staff_manage.html.twig";
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
        return array (  540 => 210,  536 => 209,  525 => 201,  521 => 200,  512 => 194,  503 => 188,  498 => 186,  494 => 185,  489 => 183,  483 => 179,  474 => 173,  468 => 170,  465 => 169,  456 => 165,  449 => 163,  441 => 158,  438 => 157,  423 => 155,  419 => 154,  415 => 153,  409 => 152,  401 => 151,  396 => 148,  394 => 147,  391 => 146,  384 => 142,  376 => 141,  362 => 140,  359 => 139,  357 => 138,  354 => 137,  350 => 136,  347 => 135,  340 => 131,  334 => 130,  324 => 129,  321 => 128,  319 => 127,  313 => 124,  308 => 121,  304 => 120,  298 => 117,  293 => 116,  291 => 115,  288 => 114,  282 => 112,  280 => 111,  275 => 108,  270 => 106,  265 => 105,  263 => 104,  256 => 102,  245 => 94,  241 => 93,  234 => 89,  229 => 87,  221 => 82,  215 => 81,  209 => 78,  203 => 77,  197 => 74,  190 => 70,  185 => 68,  178 => 64,  173 => 62,  166 => 58,  161 => 56,  156 => 54,  152 => 53,  147 => 51,  136 => 43,  130 => 40,  124 => 37,  119 => 34,  111 => 31,  108 => 30,  105 => 29,  101 => 28,  94 => 24,  87 => 22,  79 => 19,  69 => 12,  65 => 10,  61 => 9,  54 => 5,  49 => 1,  47 => 7,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_staff_manage.html.twig", "/var/www/modules/Staff/html_admin/mod_staff_manage.html.twig");
    }
}
