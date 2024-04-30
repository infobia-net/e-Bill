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

/* __string_template__f66efe244d4121e44f87ba10b4889c26 */
class __TwigTemplate_6e6651910f57ebce256af33fc6de992a extends Template
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
\t<h1>Ticket reply</h1>
\t<p>Hello ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, false, 38), "html", null, true);
        echo ",</p>

    <p><strong>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "client", [], "any", false, false, false, 40), "first_name", [], "any", false, false, false, 40), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "client", [], "any", false, false, false, 40), "last_name", [], "any", false, false, false, 40), "html", null, true);
        echo "</strong> replied to support ticket #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>
\t<a href=\"";
        // line 41
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support/ticket");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 41), "html", null, true);
        echo "\" target=\"_blank\">Review the ticket</a>

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
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support/ticket");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket"] ?? null), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "\" target=\"_blank\">Reply<a>

    <p>You may <a href=\"";
        // line 52
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("admin/staff/login", ["email" => twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "email", [], "any", false, false, false, 52)]);
        echo "\" target=\"_blank\">login</a> or <a href=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("admin/staff/profile");
        echo "\" target=\"_blank\">edit your profile.</a>

\t<p class=\"signature\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 54), "signature", [], "any", false, false, false, 54), "html", null, true);
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
        return "__string_template__f66efe244d4121e44f87ba10b4889c26";
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
        return array (  126 => 54,  119 => 52,  112 => 50,  106 => 47,  102 => 46,  98 => 45,  89 => 41,  81 => 40,  76 => 38,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__f66efe244d4121e44f87ba10b4889c26", "");
    }
}
