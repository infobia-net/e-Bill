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

/* partial_search.html.twig */
class __TwigTemplate_4f17e4c89f9936a077d61460e45419f1 extends Template
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
        echo "<div class=\"card-body border-bottom py-3\">
    <div class=\"d-flex\">
        <div class=\"ms-auto text-muted\">
            <div class=\"ms-2 d-inline-block\">
                <div class=\"d-flex\">
                    <form method=\"get\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"/>
                        <input type=\"hidden\" name=\"_url\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
                        <div class=\"input-group input-group-flat\">
                            <input class=\"form-control\"
                                type=\"search\"
                                name=\"search\"
                                value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "search", [], "any", false, false, false, 13), "html", null, true);
        echo "\"
                                placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, __trans("Enter search text..."), "html", null, true);
        echo "\"
                                aria-label=\"";
        // line 15
        echo twig_escape_filter($this->env, __trans("Search"), "html", null, true);
        echo "\">
                            <span class=\"input-group-text\">
                                <a class=\"link-secondary\"
                                    href=\"";
        // line 18
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 18), ["show_filter" => 1]);
        echo "\"
                                    data-bs-toggle=\"tooltip\"
                                    data-bs-original-title=\"";
        // line 20
        echo twig_escape_filter($this->env, __trans("Search settings"), "html", null, true);
        echo "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#settings\" />
                                    </svg>
                                </a>
                            </span>
                            <button class=\"btn btn-icon\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#search\" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
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
        return "partial_search.html.twig";
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
        return array (  76 => 20,  71 => 18,  65 => 15,  61 => 14,  57 => 13,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partial_search.html.twig", "/var/www/themes/admin_default/html/partial_search.html.twig");
    }
}
