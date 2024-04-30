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

/* mod_system_index.html.twig */
class __TwigTemplate_145fe5f925493301113469949d3b20df extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_system_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_system_index.html.twig", 3)->unwrap();
        // line 7
        $context["active_menu"] = "system";
        // line 8
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_get_params", [], "any", false, false, false, 8);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Settings"), "html", null, true);
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">Settings</h3>
        </div>
        <div class=\"card-body\">
            <div class=\"datagrid\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_get_list", [twig_array_merge(["active" => 1, "has_settings" => 1], ($context["request"] ?? null))], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["ext"]) {
            // line 18
            echo "                    <div class=\"datagrid-item\">
                        <div class=\"datagrid-title\">
                            <a href=\"";
            // line 20
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
                                ";
            // line 21
            $context["icon_filename"] = twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "icon_url", [], "any", false, false, false, 21), "/"));
            // line 22
            echo "                                ";
            if (((($context["icon_filename"] ?? null) != "cog.svg") && ((twig_last($this->env, twig_split_filter($this->env, ($context["icon_filename"] ?? null), ".")) == "svg") && twig_get_attribute($this->env, $this->source, $context["ext"], "icon_path", [], "any", false, false, false, 22)))) {
                // line 23
                echo "                                    <div class=\"d-flex align-items-center gap-2\">
                                        <div class=\"text-primary\" style=\"width:24px;height:24px;\">
                                            ";
                // line 25
                echo twig_source($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "icon_path", [], "any", false, false, false, 25), true);
                echo "
                                        </div>
                                        <span>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "name", [], "any", false, false, false, 27), "html", null, true);
                echo "</span>
                                    </div>
                                ";
            } else {
                // line 30
                echo "                                    <div class=\"d-flex align-items-center gap-2\">
                                        <img src=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "icon_url", [], "any", false, false, false, 31), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "name", [], "any", false, false, false, 31), "html", null, true);
                echo "\" style=\"width:32px;height:32px;\">
                                        <span>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "name", [], "any", false, false, false, 32), "html", null, true);
                echo "</span>
                                    </div>
                                ";
            }
            // line 35
            echo "                            </a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ext'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </div>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_system_index.html.twig";
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
        return array (  130 => 39,  121 => 35,  115 => 32,  109 => 31,  106 => 30,  100 => 27,  95 => 25,  91 => 23,  88 => 22,  86 => 21,  80 => 20,  76 => 18,  72 => 17,  64 => 11,  60 => 10,  53 => 5,  49 => 1,  47 => 8,  45 => 7,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_system_index.html.twig", "/var/www/modules/System/html_admin/mod_system_index.html.twig");
    }
}
