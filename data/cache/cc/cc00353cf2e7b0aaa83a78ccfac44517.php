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

/* partial_pagination.html.twig */
class __TwigTemplate_f7794a91970a686cd07424130357e733 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pages", [], "any", false, false, false, 1) > 1)) {
            // line 2
            echo "    ";
            $context["currentPage"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 2), 1)) : (1));
            // line 3
            echo "    ";
            $context["paginator"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_paginator", [["total" => twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "total", [], "any", false, false, false, 3), "page" => ($context["currentPage"] ?? null), "per_page" => twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "per_page", [], "any", false, false, false, 3)]], "method", false, false, false, 3);
            // line 4
            echo "    <ul class=\"pagination m-0\">
        ";
            // line 5
            if ((twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentpage", [], "any", false, false, false, 5) != 1)) {
                // line 6
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" href=\"";
                // line 7
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter(($context["url"] ?? null), twig_array_merge(twig_slice($this->env, twig_array_merge([], ($context["request"] ?? null)), 1, twig_length_filter($this->env, ($context["request"] ?? null))), ["page" => (($context["currentPage"] ?? null) - 1)]));
                echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#chevron-left\" />
                </svg>
            </a>
        </li>
        ";
            }
            // line 14
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "range", [], "any", false, false, false, 14), 0, [], "any", false, false, false, 14) != 1)) {
                // line 15
                echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
                // line 16
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter(($context["url"] ?? null), ["page" => 1]);
                echo "\">1</a>
            </li>
        ";
            }
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "start", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "end", [], "any", false, false, false, 19)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 20
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "range", [], "any", false, false, false, 20), 0, [], "any", false, false, false, 20) > 2) && ($context["i"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "range", [], "any", false, false, false, 20), 0, [], "any", false, false, false, 20)))) {
                    // line 21
                    echo "                ...
            ";
                }
                // line 23
                echo "
            ";
                // line 24
                if (($context["i"] == twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentpage", [], "any", false, false, false, 24))) {
                    // line 25
                    echo "                <li class=\"page-item active\">
                    <a class=\"page-link\" href=\"#\" onclick=\"return false;\">";
                    // line 26
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                </li>
            ";
                } else {
                    // line 29
                    echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                    // line 30
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter(($context["url"] ?? null), twig_array_merge(twig_slice($this->env, twig_array_merge([], ($context["request"] ?? null)), 1, twig_length_filter($this->env, ($context["request"] ?? null))), ["page" => $context["i"]]));
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 33
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
        ";
            // line 35
            if ((((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "range", [], "any", false, false, false, 35)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[(twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "midrange", [], "any", false, false, false, 35) - 1)] ?? null) : null) < (twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "numpages", [], "any", false, false, false, 35) - 1)) && (twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "end", [], "any", false, false, false, 35) == (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "range", [], "any", false, false, false, 35)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[(twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "midrange", [], "any", false, false, false, 35) - 1)] ?? null) : null)))) {
                // line 36
                echo "            ...
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
                // line 38
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter(($context["url"] ?? null), twig_array_merge(twig_slice($this->env, twig_array_merge([], ($context["request"] ?? null)), 1, twig_length_filter($this->env, ($context["request"] ?? null))), ["page" => twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "numpages", [], "any", false, false, false, 38)]));
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "numpages", [], "any", false, false, false, 38), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 41
            echo "
        ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "currentpage", [], "any", false, false, false, 42) != twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "numpages", [], "any", false, false, false, 42))) {
                // line 43
                echo "        <li class=\"page-item\">
            <a class=\"page-link\" href=\"";
                // line 44
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter(($context["url"] ?? null), twig_array_merge(twig_slice($this->env, twig_array_merge([], ($context["request"] ?? null)), 1, twig_length_filter($this->env, ($context["request"] ?? null))), ["page" => (($context["currentPage"] ?? null) + 1)]));
                echo "\">
                <svg class=\"icon\">
                    <use xlink:href=\"#chevron-right\" />
                </svg>
            </a>
        </li>
        ";
            }
            // line 51
            echo "    </ul>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partial_pagination.html.twig";
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
        return array (  153 => 51,  143 => 44,  140 => 43,  138 => 42,  135 => 41,  127 => 38,  123 => 36,  121 => 35,  118 => 34,  112 => 33,  104 => 30,  101 => 29,  95 => 26,  92 => 25,  90 => 24,  87 => 23,  83 => 21,  80 => 20,  75 => 19,  69 => 16,  66 => 15,  63 => 14,  53 => 7,  50 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partial_pagination.html.twig", "/var/www/themes/admin_default/html/partial_pagination.html.twig");
    }
}
