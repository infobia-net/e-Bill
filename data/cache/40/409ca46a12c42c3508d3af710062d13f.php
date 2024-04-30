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

/* mod_servicedomain_config.html.twig */
class __TwigTemplate_cedfa8921069c636a74213dfa07d0cc4 extends Template
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
        echo "<div class=\"help\">
    <h5>";
        // line 2
        echo twig_escape_filter($this->env, __trans("Domains management"), "html", null, true);
        echo "</h5>
</div>

<div class=\"body\">
    <div class=\"aligncenter\">
        <a href=\"";
        // line 7
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicedomain");
        echo "\" class=\"btn btn-primary\">
            <svg class=\"icon\">
                <use xlink:href=\"#edit\" />
            </svg>
           <span>Management</span>
        </a>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_servicedomain_config.html.twig";
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
        return array (  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_servicedomain_config.html.twig", "/var/www/modules/Servicedomain/html_admin/mod_servicedomain_config.html.twig");
    }
}
