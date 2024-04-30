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

/* error.html.twig */
class __TwigTemplate_60eae0c2e15468df469b1fa56c989977 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'body_class' => [$this, 'block_body_class'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout_default.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Error"), "html", null, true);
    }

    // line 3
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "border-top-wide border-primary d-flex flex-column";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"page page-center\">
   <div class=\"container-tight py-4\">
      <div class=\"empty\">
         ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "getCode", [], "any", false, false, false, 8)) {
            // line 9
            echo "         <div class=\"empty-header\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "getCode", [], "any", false, false, false, 9), "html", null, true);
            echo "</div>
         ";
        } else {
            // line 11
            echo "         <div class=\"empty-header\">404</div>
         ";
        }
        // line 13
        echo "         <p class=\"empty-title\">";
        echo twig_escape_filter($this->env, __trans("Whoops! This is not the web page you are looking for."), "html", null, true);
        echo "</p>
         <p class=\"empty-subtitle text-muted\">
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "getMessage", [], "any", false, false, false, 15), "html", null, true);
        echo ".
         </p>
         <div class=\"empty-action\">
            <a href=\"";
        // line 18
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\" class=\"btn btn-primary\">
               <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
                  <path d=\"M5 12l14 0\" />
                  <path d=\"M5 12l6 6\" />
                  <path d=\"M5 12l6 -6\" />
               </svg>
               Back to Homepage
            </a>
         </div>
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
        return "error.html.twig";
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
        return array (  95 => 18,  89 => 15,  83 => 13,  79 => 11,  73 => 9,  71 => 8,  66 => 5,  62 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "error.html.twig", "/var/www/themes/tide/html/error.html.twig");
    }
}
