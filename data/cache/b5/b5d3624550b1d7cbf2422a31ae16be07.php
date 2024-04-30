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

/* __string_template__0292da6c12920198631ec3857293c023 */
class __TwigTemplate_bcfbef5b6035b6658083eac79030ce5c extends Template
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
        echo "
<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<style type=\"text/css\">
\t\tbody {
\t\t\tfont-family: Arial, sans-serif;
\t\t\tfont-size: 14px;
\t\t\tcolor: #333333;
\t\t}

\t\th1 {
\t\t\tfont-size: 24px;
\t\t\tfont-weight: bold;
\t\t\tmargin: 0 0 20px;
\t\t}

\t\tp {
\t\t\tmargin: 0 0 10px;
\t\t}

\t\tstrong {
\t\t\tfont-weight: bold;
\t\t}

\t\t.signature {
\t\t\tfont-style: italic;
\t\t\tcolor: #999999;
\t\t\tmargin-top: 20px;
\t\t\tborder-top: 1px solid #cccccc;
\t\t\tpadding-top: 10px;
\t\t}
\t</style>
</head>
<body>
\t<h1>New client signed up</h1>
\t<p>Hello ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "name", [], "any", false, false, false, 38), "html", null, true);
        echo ",</p>
\t<p><strong>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "first_name", [], "any", false, false, false, 39), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "last_name", [], "any", false, false, false, 39), "html", null, true);
        echo "</strong> has just signed up with ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>

    <p><a href=\"";
        // line 41
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "id", [], "any", false, false, false, 41), "html", null, true);
        echo "\" target=\"_blank\">Manage client.</a>

\t<p class=\"signature\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 43), "signature", [], "any", false, false, false, 43), "html", null, true);
        echo "</p>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__0292da6c12920198631ec3857293c023";
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
        return array (  96 => 43,  89 => 41,  80 => 39,  76 => 38,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0292da6c12920198631ec3857293c023", "");
    }
}
