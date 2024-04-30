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

/* __string_template__57c5a33411b2144e9095a8ffe0e50a5f */
class __TwigTemplate_334fc76da794e0d75beb70f22b200b65 extends Template
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
\t<h1>Invoice created</h1>
\t<p>Hello ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "first_name", [], "any", false, false, false, 38), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "last_name", [], "any", false, false, false, 38), "html", null, true);
        echo ",</p>
\t<p>This is to notify that invoice ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 39), "html", null, true);
        echo " was generated on ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "created_at", [], "any", false, false, false, 39)), "html", null, true);
        echo ".</p>
    <ul>
        <li><strong>Amount Due:</strong> ";
        // line 41
        echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "total", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 41));
        echo "</li>
        <li><strong>Due Date:</strong>  ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "due_at", [], "any", false, false, false, 42)), "html", null, true);
        echo "</li>
    </ul>

    <p>You may view and pay the invoice <a href=\"";
        // line 45
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 45), "html", null, true);
        echo "\" target=\"_blank\">here.</a>
    <p>You may also <a href=\"";
        // line 46
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login", ["email" => twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "email", [], "any", false, false, false, 46)]);
        echo "\" target=\"_blank\">login</a> or <a href=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/profile");
        echo "\" target=\"_blank\">edit your profile.</a>

\t<p class=\"signature\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 48), "signature", [], "any", false, false, false, 48), "html", null, true);
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
        return "__string_template__57c5a33411b2144e9095a8ffe0e50a5f";
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
        return array (  112 => 48,  105 => 46,  99 => 45,  93 => 42,  89 => 41,  82 => 39,  76 => 38,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__57c5a33411b2144e9095a8ffe0e50a5f", "");
    }
}
