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

/* mod_system_update.html.twig */
class __TwigTemplate_c76d191a345fb4d2aa9d1b83a24ae8fd extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_system_update.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_system_update.html.twig", 3)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Update"), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $context["update_info"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_update_info", [], "any", false, false, false, 8);
        // line 9
        echo "    <div class=\"card\">
        <div class=\"card-header\">
            <h1 class=\"card-title\">";
        // line 11
        echo twig_escape_filter($this->env, __trans("Update FOSSBilling"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"card-body\">
            ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_update_available", [], "any", false, false, false, 14) || ((($__internal_compile_0 = ($context["update_info"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["branch"] ?? null) : null) == "preview"))) {
            // line 15
            echo "                ";
            if (((($__internal_compile_1 = ($context["update_info"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["branch"] ?? null) : null) == "preview")) {
                // line 16
                echo "                    <h2 class=\"card-title\">";
                echo twig_escape_filter($this->env, __trans("Update release notes"), "html", null, true);
                echo "</h2>
                ";
            } else {
                // line 18
                echo "                    <h2 class=\"card-title mb-0\">";
                echo twig_escape_filter($this->env, __trans("Update release notes"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, ($context["FOSSBillingVersion"] ?? null), "html", null, true);
                echo " => ";
                echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["update_info"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["version"] ?? null) : null), "html", null, true);
                echo ")</h2>
                    <span>";
                // line 19
                echo twig_escape_filter($this->env, __trans("Required PHP version:"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["update_info"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["minimum_php_version"] ?? null) : null), "html", null, true);
                echo "</span>
                ";
            }
            // line 21
            echo "                ";
            if (((($__internal_compile_4 = ($context["update_info"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["update_type"] ?? null) : null) == 2)) {
                // line 22
                echo "                    <div class=\"alert alert-danger\" role=\"alert\">
                        <span>";
                // line 23
                echo twig_escape_filter($this->env, __trans("This update is considered to be a major update, you should check the release notes for any breaking changes."), "html", null, true);
                echo "</span>
                    </div>
                ";
            }
            // line 26
            echo "                
                ";
            // line 27
            if (((($__internal_compile_5 = ($context["update_info"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["update_type"] ?? null) : null) == 1)) {
                // line 28
                echo "                    <div class=\"alert alert-warning\" role=\"alert\">
                        <span>";
                // line 29
                echo twig_escape_filter($this->env, __trans("This update is considered to be a minor update, there are low chances of incompatibilities."), "html", null, true);
                echo "</span>
                    </div>
                ";
            }
            // line 32
            echo "                    
                ";
            // line 33
            echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, (($__internal_compile_6 = ($context["update_info"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["release_notes"] ?? null) : null));
            echo "
            ";
        } else {
            // line 35
            echo "                <h2 class=\"card-title\">";
            echo twig_escape_filter($this->env, __trans("There is no update available"), "html", null, true);
            echo "</h2>
                <p>";
            // line 36
            echo twig_escape_filter($this->env, __trans("You appear to be running the latest version of FOSSBilling, so no action is needed at the moment. If you think this is a mistake, you may use the button below to check again."), "html", null, true);
            echo "</p>
            ";
        }
        // line 38
        echo "        </div>
        <div class=\"card-footer\">
            ";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_update_available", [], "any", false, false, false, 40) || ((($__internal_compile_7 = ($context["update_info"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["branch"] ?? null) : null) == "preview"))) {
            // line 41
            echo "                <a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/system/update_core", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                    class=\"btn btn-primary api-link\"
                    data-api-reload=\"1\"
                    data-api-confirm=\"Proceed with automatic update?\"
                    data-api-confirm-btn=\"Update\"
                    data-api-confirm-content=\"Make sure that you have made database and files backups before proceeding with automatic update. You will automatically be redirected once the update is complete.\">
                    <svg class=\"icon\">
                        <use xlink:href=\"#download\" />
                    </svg>
                    ";
            // line 50
            echo twig_escape_filter($this->env, __trans("Update FOSSBilling"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 53
            echo "                <a
                    class=\"btn btn-primary disabled\"
                    aria-disabled=\"true\">
                    <svg class=\"icon\">
                        <use xlink:href=\"#download\" />
                    </svg>
                    ";
            // line 59
            echo twig_escape_filter($this->env, __trans("Update FOSSBilling"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 62
        echo "            <a href=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/system/recheck_update", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\"
                class=\"btn btn-primary api-link\"
                data-api-reload=\"1\">
                <svg class=\"icon\">
                    <use xlink:href=\"#refresh\" />
                </svg>
                ";
        // line 68
        echo twig_escape_filter($this->env, __trans("Check for Updates"), "html", null, true);
        echo "
            </a>
            <a href=\"";
        // line 70
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/system/manual_update", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
        echo "\" class=\"btn btn-primary api-link\" data-api-confirm=\"If you run into any issues, you can revert to the old config which will be saved as config.old.php.\" data-api-msg=\"Patches applied and configuration updated.\">
                <svg class=\"icon\">
                    <use xlink:href=\"#cog-play\" />
                </svg>
                ";
        // line 74
        echo twig_escape_filter($this->env, __trans("Apply Patches & Update Configuration"), "html", null, true);
        echo "
            </a>
            <br />
            <span class=\"text-muted\">";
        // line 77
        echo twig_escape_filter($this->env, __trans("Applying patches and updating the configuration should be performed automatically, you don't need to use that button unless you are experiencing issues."), "html", null, true);
        echo "<br />
            <span class=\"text-muted\">";
        // line 78
        echo twig_escape_filter($this->env, __trans("Last update check:"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, (($__internal_compile_8 = ($context["update_info"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["last_check"] ?? null) : null)), "html", null, true);
        echo ".</span><br />
            <span class=\"text-muted\"> ";
        // line 79
        echo twig_escape_filter($this->env, __trans("Next update check:"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, (($__internal_compile_9 = ($context["update_info"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["next_check"] ?? null) : null)), "html", null, true);
        echo ".</span>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_system_update.html.twig";
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
        return array (  221 => 79,  215 => 78,  211 => 77,  205 => 74,  198 => 70,  193 => 68,  183 => 62,  177 => 59,  169 => 53,  163 => 50,  150 => 41,  148 => 40,  144 => 38,  139 => 36,  134 => 35,  129 => 33,  126 => 32,  120 => 29,  117 => 28,  115 => 27,  112 => 26,  106 => 23,  103 => 22,  100 => 21,  93 => 19,  84 => 18,  78 => 16,  75 => 15,  73 => 14,  67 => 11,  63 => 9,  60 => 8,  56 => 7,  49 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_system_update.html.twig", "/var/www/modules/System/html_admin/mod_system_update.html.twig");
    }
}
