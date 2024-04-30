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

/* partial_extensions.html.twig */
class __TwigTemplate_2e6ac854dce0047f0d68265f61052051 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["header"] ?? null)) {
            // line 2
            echo "    <div class=\"card-header\">
        <h3 class=\"card-title\">";
            // line 3
            echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
            echo "</h3>
    </div>
";
        }
        // line 6
        echo "
<div class=\"table-responsive\">
    <div class=\"modal\" id=\"extensionReadMe\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"extension-name\"></h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div id=\"extension-readme\" class=\"modal-body\">
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 18
        echo twig_escape_filter($this->env, __trans("Close"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
    </div>    
    <table class=\"table card-table table-vcenter table-striped text-nowrap sortable\">
        <thead>
        <tr>
            <th class=\"no-sort\"></th>
            <th>";
        // line 27
        echo twig_escape_filter($this->env, __trans("Extension"), "html", null, true);
        echo "</th>
            <th>";
        // line 28
        echo twig_escape_filter($this->env, __trans("Description"), "html", null, true);
        echo "</th>
            <th class=\"w-1\"></th>
            <th class=\"w-1\"></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context["extensions"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_get_latest", [["type" => ($context["type"] ?? null)]], "method", false, false, false, 34);
        // line 35
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 36
            echo "        ";
            $context["latest"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "releases", [], "any", false, false, false, 36));
            // line 37
            echo "            <tr>
                <td>
                    <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["extension"], "icon_url", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["extension"], "icon_url", [], "any", false, false, false, 39), "assets/icons/cog.svg")) : ("assets/icons/cog.svg")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "\" style=\"width: 32px; height: 32px;\">
                </td>
                <td>
                    <strong>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["latest"] ?? null), "tag", [], "any", false, false, false, 42), "html", null, true);
            echo "<br>
                    <span>by <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extension"], "author", [], "any", false, false, false, 43), "URL", [], "any", false, false, false, 43), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["extension"], "author", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</a></span>
                </td>
                <td>
                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "description", [], "any", false, false, false, 46), 150), "html", null, true);
            echo "<br>
                    <a href=\"https://extensions.fossbilling.org/extension/";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, __trans("View on the extension directory"), "html", null, true);
            echo "</a>
                </td>
                <td  data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 49
            echo twig_escape_filter($this->env, __trans("View extension README"), "html", null, true);
            echo "\">
                    <a class=\"btn btn-icon\" data-bs-toggle=\"modal\" data-bs-target=\"#extensionReadMe\" onclick=\"getExtensionReadme('";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 50), "html", null, true);
            echo "');\">
                     <svg class=\"icon\">
                         <use xlink:href=\"#eye\" />
                     </svg>
                    </a>
                </td>
                <td>
                    <a class=\"btn btn-icon api-link\"
                       data-api-confirm=\"Are you sure?\"
                       data-api-confirm-btn=\"Install\"
                       data-api-confirm-content='By installing \"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 60), "html", null, true);
            echo "\", you agree with terms and conditions. Only install extensions you trust. You also might want to have a full backup ready in case something goes wrong.'
                       data-api-reload=\"1\"
                       href=\"";
            // line 62
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/install", ["type" => twig_get_attribute($this->env, $this->source, $context["extension"], "type", [], "any", false, false, false, 62), "id" => twig_get_attribute($this->env, $this->source, $context["extension"], "id", [], "any", false, false, false, 62), "CSRFToken" => ($context["CSRFToken"] ?? null)]);
            echo "\"
                       data-bs-toggle=\"tooltip\" data-bs-title=\"";
            // line 63
            echo twig_escape_filter($this->env, __trans("Install extension"), "html", null, true);
            echo "\">
                        <svg class=\"icon\">
                            <use xlink:href=\"#download\" />
                        </svg>
                    </a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "            <tr>
                <td colspan=\"4\" class=\"text-center\">
                    <a href=\"https://extensions.fossbilling.org/\" target=\"_blank\">";
            // line 73
            echo twig_escape_filter($this->env, __trans("Explore FOSSBilling extensions"), "html", null, true);
            echo "</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </tbody>
    </table>

    <script>
        function getExtensionReadme(extensionID, extensionName){
            header = document.getElementById(\"extension-name\");
            header.innerText = extensionName;

            readme = document.getElementById(\"extension-readme\");
            readme.innerText = \"";
        // line 86
        echo twig_escape_filter($this->env, __trans("Fetching extension details."), "html", null, true);
        echo "\";

            API.admin.post('extension/get_extension_readme', {extension_id: extensionID, CSRFToken: \"";
        // line 88
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"}, function(result){
                readme.innerHTML = result;
            });
        }
    </script>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partial_extensions.html.twig";
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
        return array (  206 => 88,  201 => 86,  190 => 77,  180 => 73,  176 => 71,  163 => 63,  159 => 62,  154 => 60,  139 => 50,  135 => 49,  128 => 47,  124 => 46,  116 => 43,  110 => 42,  102 => 39,  98 => 37,  95 => 36,  89 => 35,  87 => 34,  78 => 28,  74 => 27,  62 => 18,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partial_extensions.html.twig", "/var/www/themes/admin_default/html/partial_extensions.html.twig");
    }
}
