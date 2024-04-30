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

/* __string_template__3858e21cbb542a40f793ac91e1a25dc0 */
class __TwigTemplate_cff2e67b0af14d8a25be02b02c1cdc80 extends Template
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
\t<h1>Welcome</h1>
\t<p>Thank you for signing up with us. Your new account has been setup and you can now login to our client area using the details below:</p>
    <ul>
        <li><strong>Email:</strong> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "email", [], "any", false, false, false, 40), "html", null, true);
        echo "</li>
        <li><strong>Password:</strong> ";
        // line 41
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "</li>
    </ul>

    ";
        // line 44
        if (($context["require_email_confirmation"] ?? null)) {
            // line 45
            echo "        <p>Please verify your email by clicking on the link below:</p>
        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["email_confirmation_link"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">Verify email address.</a>
    ";
        }
        // line 48
        echo "    
    <p>You may <a href=\"";
        // line 49
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login", ["email" => twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "email", [], "any", false, false, false, 49)]);
        echo "\" target=\"_blank\">login</a> or <a href=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/profile");
        echo "\" target=\"_blank\">edit your profile.</a>

\t<p class=\"signature\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 51), "signature", [], "any", false, false, false, 51), "html", null, true);
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
        return "__string_template__3858e21cbb542a40f793ac91e1a25dc0";
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
        return array (  108 => 51,  101 => 49,  98 => 48,  93 => 46,  90 => 45,  88 => 44,  82 => 41,  78 => 40,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3858e21cbb542a40f793ac91e1a25dc0", "");
    }
}
