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

/* mod_invoice_banklink.html.twig */
class __TwigTemplate_91fddd8e2475f2c33e3b33321b50b62e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_invoice_banklink.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Processing payment ..."), "html", null, true);
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"row row-deck row-cards\">
   <div class=\"col-md-12\">
      <div class=\"card\">
         <div class=\"card-header\">
            <div>
               <h3 class=\"card-title\">
                  ";
        // line 10
        echo twig_escape_filter($this->env, __trans("Processing payment ..."), "html", null, true);
        echo "
               </h3>
               <p class=\"card-subtitle\">
                  ";
        // line 13
        echo twig_escape_filter($this->env, __trans("Thank you for your patience."), "html", null, true);
        echo "
               </p>
            </div>
         </div>
         <div class=\"card-body\">
            ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "type", [], "any", false, false, false, 18) == "html")) {
            // line 19
            echo "            ";
            echo twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "result", [], "any", false, false, false, 19);
            echo "
            ";
        }
        // line 21
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "type", [], "any", false, false, false, 21) == "form")) {
            // line 22
            echo "            <h4>";
            echo twig_escape_filter($this->env, __trans("Redirecting to payment gateway.."), "html", null, true);
            echo "</h4>
            <form name=\"payment_form\" action=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "service_url", [], "any", false, false, false, 23), "html", null, true);
            echo "\" method=\"post\">
               <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
               ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "result", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 26
                echo "               <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" />
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "               <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            echo twig_escape_filter($this->env, __trans("Please click here to continue if this page does not redirect automatically in 5 seconds"), "html", null, true);
            echo "\" id=\"payment_button\"/>
            </form>
            <script type=\"text/javascript\">
               \$(document).ready(function() {
                   document.getElementById('payment_button').style.display = 'none';
                   document.forms[\"payment_form\"].submit();
               });
            </script>
            ";
        }
        // line 37
        echo "         </div>
      </div>
   </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_invoice_banklink.html.twig";
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
        return array (  131 => 37,  118 => 28,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  90 => 22,  87 => 21,  81 => 19,  79 => 18,  71 => 13,  65 => 10,  57 => 4,  53 => 3,  46 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_invoice_banklink.html.twig", "/var/www/themes/infobia/html/mod_invoice_banklink.html.twig");
    }
}
