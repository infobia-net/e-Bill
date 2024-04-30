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

/* mod_orderbutton_currency.html.twig */
class __TwigTemplate_7dcedabbf178910e0a8f0b799bb257a0 extends Template
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
        $context["currencies"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "currency_get_pairs", [], "any", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 4
            echo "<div class=\"card-actions\">
        <select name=\"currency\" class=\"form-select currency_selector\">
            ";
            // line 6
            $context["selected"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "cart_get_currency", [], "any", false, false, false, 6), "code", [], "any", false, false, false, 6);
            // line 7
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["title"]) {
                // line 8
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\" class=\"currency_";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\"";
                if (($context["code"] == ($context["selected"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </select>
</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_orderbutton_currency.html.twig";
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
        return array (  74 => 10,  55 => 8,  50 => 7,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_currency.html.twig", "/var/www/themes/tide/html/mod_orderbutton_currency.html.twig");
    }
}
