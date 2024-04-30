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

/* error.html.twig */
class __TwigTemplate_6e4f1b3514db09eba9bdcf2939e58132 extends Template
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
        return "layout_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout_login.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Error"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "getCode", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"page page-center\">
    <div class=\"container-tight py-4\">
        <div class=\"empty\">
            <h1 class=\"empty-header\">";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "getCode", [], "any", false, false, false, 9) == 0)) {
            echo "500";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "getCode", [], "any", false, false, false, 9), "html", null, true);
        }
        echo "</h1>
            <p class=\"empty-title\">";
        // line 10
        echo twig_escape_filter($this->env, __trans("Oops... You just found an error page"), "html", null, true);
        echo "</p>
            <p class=\"empty-subtitle text-muted\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "getMessage", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
            <div class=\"empty-action\">
                ";
        // line 13
        if (((twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "getCode", [], "any", false, false, false, 13) == 403) &&  !($context["admin"] ?? null))) {
            // line 14
            echo "                    <a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/staff/login");
            echo "\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, __trans("Login"), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 16
            echo "                    <a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/index");
            echo "\" class=\"btn btn-primary\">
                        <svg class=\"icon\">
                            <use xlink:href=\"#arrow-sm-left\" />
                        </svg>
                        ";
            // line 20
            echo twig_escape_filter($this->env, __trans("Back to Dashboard"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 23
        echo "            </div>
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
        return "error.html.twig";
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
        return array (  106 => 23,  100 => 20,  92 => 16,  84 => 14,  82 => 13,  77 => 11,  73 => 10,  65 => 9,  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "error.html.twig", "/var/www/themes/admin_default/html/error.html.twig");
    }
}
