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

/* mod_support_canned_selector.html.twig */
class __TwigTemplate_464ec1532914a4a3498199bafa52c882 extends Template
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
        echo "<select
    name=\"canned_response\"
    placeholder=\"Canned Responses\"
    class=\"canned_ticket_response\"
    data-csrf=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\"
    data-resturl=\"admin/support/canned_get\"
>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_canned_pairs", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["ctitle"] => $context["cat"]) {
            // line 9
            echo "        <optgroup label=\"";
            echo twig_escape_filter($this->env, $context["ctitle"], "html", null, true);
            echo "\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["cat"]);
            foreach ($context['_seq'] as $context["mid"] => $context["mtitle"]) {
                // line 11
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["mid"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["mtitle"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['mid'], $context['mtitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </optgroup>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['ctitle'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</select>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_support_canned_selector.html.twig";
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
        return array (  80 => 15,  73 => 13,  62 => 11,  58 => 10,  53 => 9,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_support_canned_selector.html.twig", "/var/www/modules/Support/html_admin/mod_support_canned_selector.html.twig");
    }
}
