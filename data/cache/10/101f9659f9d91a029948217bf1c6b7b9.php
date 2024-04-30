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

/* partial_bb_meta.html.twig */
class __TwigTemplate_6fe1d61b0ddf48d21c7ec45a2806b8f5 extends Template
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
        echo "<base href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "url", [], "any", false, false, false, 1), "html", null, true);
        echo "\"/>
<meta property=\"bb:url\" content=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_constant("SYSTEM_URL"), "html", null, true);
        echo "\"/>
<meta property=\"bb:client_area\" content=\"";
        // line 3
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\"/>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partial_bb_meta.html.twig";
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
        return array (  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partial_bb_meta.html.twig", "/var/www/themes/admin_default/html/partial_bb_meta.html.twig");
    }
}
