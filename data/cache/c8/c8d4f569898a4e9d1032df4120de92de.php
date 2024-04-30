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

/* __string_template__2039f42a506fd46aa038248b189978a1 */
class __TwigTemplate_3956706343b93bc2dd41b28df040ad69 extends Template
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
\t<h1>Ticket replied</h1>

    <p>Hi ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "first_name", [], "any", false, false, false, 39), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "last_name", [], "any", false, false, false, 39), "html", null, true);
        echo ",</p>

    <p>A new reply was posted to ticket <strong>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "subject", [], "any", false, false, false, 41), "html", null, true);
        echo "</strong></p>

    <p>Ticket info</p>
    <ul>
        <li><strong>Ticket ID:</strong> #";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 45), "html", null, true);
        echo "</li>
        <li><strong>Department:</strong> ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "helpdesk", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
        echo "</li>
        <li><strong>Status:</strong> ";
        // line 47
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "status", [], "any", false, false, false, 47)), "html", null, true);
        echo "</li>
    </ul>

    <a href=\"";
        // line 50
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "\" target=\"_blank\">Reply<a>
    
    <p>Please do not reply to this email directly. Use the link provided above.</p>

    <p>You may <a href=\"";
        // line 54
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("admin/staff/login", ["email" => twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "email", [], "any", false, false, false, 54)]);
        echo "\" target=\"_blank\">login</a> or <a href=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("admin/staff/profile");
        echo "\" target=\"_blank\">edit your profile.</a>

\t<p class=\"signature\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 56), "signature", [], "any", false, false, false, 56), "html", null, true);
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
        return "__string_template__2039f42a506fd46aa038248b189978a1";
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
        return array (  121 => 56,  114 => 54,  105 => 50,  99 => 47,  95 => 46,  91 => 45,  84 => 41,  77 => 39,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2039f42a506fd46aa038248b189978a1", "");
    }
}
