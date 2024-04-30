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

/* __string_template__9f2c8a1bae44daf2c1a73f078de316ea */
class __TwigTemplate_d3d041eef1dc58fe32b3a0e71588dcfb extends Template
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
\t<h1>Order activated</h1>
\t<p>Hello ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "first_name", [], "any", false, false, false, 38), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "last_name", [], "any", false, false, false, 38), "html", null, true);
        echo ",</p>
\t<p>Your <strong>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 39), "html", null, true);
        echo "</strong> is now activated.</p>
    <p>Please keep in mind that your domain name may not be visible on the internet instantly due to the propagation process which may take up to 48 hours.</p>
    <p>Your website and email will not function until the domain has propagated.</p>

    <p>Domain details:</p>
    <ul>
        <li><strong>Domain:</strong> ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "domain", [], "any", false, false, false, 45), "html", null, true);
        echo "</li>
        <li><strong>Registration date:</strong> ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "created_at", [], "any", false, false, false, 46)), "html", null, true);
        echo "</li>
        <li><strong>Registration period:</strong> ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "period", [], "any", false, false, false, 47), "html", null, true);
        echo " Year(s)</li>
        ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 48)) {
            echo "<li><strong>Expires on:</strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 48)), "html", null, true);
            echo "</li>";
        }
        // line 49
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "period", [], "any", false, false, false, 49)) {
            echo "<li><strong>Billing period:</strong> ";
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 49));
            echo " every ";
            echo $this->extensions['Box_TwigExtensions']->twig_period_title($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "period", [], "any", false, false, false, 49));
            echo "</li>";
        }
        // line 50
        echo "    </ul>

    <p>Nameserver details:</p>
    <ul>
        <li><strong>Nameserver 1:</strong> ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 54), "ns1", [], "any", false, false, false, 54), "html", null, true);
        echo "</li>
        <li><strong>Nameserver 2:</strong> ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 55), "ns2", [], "any", false, false, false, 55), "html", null, true);
        echo "</li>
        ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 56), "ns3", [], "any", false, false, false, 56)) {
            echo "<li><strong>Nameserver 4:</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 56), "ns3", [], "any", false, false, false, 56), "html", null, true);
            echo "</li>";
        }
        // line 57
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 57), "ns3", [], "any", false, false, false, 57)) {
            echo "<li><strong>Nameserver 4:</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "server", [], "any", false, false, false, 57), "ns4", [], "any", false, false, false, 57), "html", null, true);
            echo "</li>";
        }
        // line 58
        echo "    </ul>

    <p>You may <a href=\"";
        // line 60
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login", ["email" => twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "email", [], "any", false, false, false, 60)]);
        echo "\" target=\"_blank\">login</a> or <a href=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service/manage");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 60), "html", null, true);
        echo "\" target=\"_blank\">manage your order.</a>

\t<p class=\"signature\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 62), "signature", [], "any", false, false, false, 62), "html", null, true);
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
        return "__string_template__9f2c8a1bae44daf2c1a73f078de316ea";
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
        return array (  158 => 62,  149 => 60,  145 => 58,  138 => 57,  132 => 56,  128 => 55,  124 => 54,  118 => 50,  109 => 49,  103 => 48,  99 => 47,  95 => 46,  91 => 45,  82 => 39,  76 => 38,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9f2c8a1bae44daf2c1a73f078de316ea", "");
    }
}
