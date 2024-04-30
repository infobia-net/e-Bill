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

/* mod_order_index.html.twig */
class __TwigTemplate_6256ccc539df7fe8161fe72241dcd558 extends Template
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
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
            'sidebar2' => [$this, 'block_sidebar2'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_order_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_order_index.html.twig", 3)->unwrap();
        // line 7
        $context["loader_nr"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", false, false, false, 7), "8")) : ("8"));
        // line 8
        $context["loader_url"] = (("img/assets/loaders/loader" . ($context["loader_nr"] ?? null)) . ".gif");
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
    }

    // line 10
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "order-index";
    }

    // line 11
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <li class=\"active breadcrumb-item\" aria-current=\"page\">";
        echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
        echo "</li>
";
    }

    // line 14
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card mb-4\">
                <div class=\"card-header py-3 py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"w-100\">
                            <h5 class=\"mb-1\">";
        // line 23
        echo twig_escape_filter($this->env, __trans("Order Product"), "html", null, true);
        echo "</h5>
                            <span class=\"small text-muted row ms-2\">";
        // line 24
        echo twig_escape_filter($this->env, __trans("Choose products we offer for selling"), "html", null, true);
        echo "</span>
                            ";
        // line 25
        $this->loadTemplate("mod_orderbutton_currency.html.twig", "mod_order_index.html.twig", 25)->display($context);
        // line 26
        echo "                        </div>
                    </div>
                </div>
                <div class=\"card-body overflow-hidden\">
                    ";
        // line 30
        $this->loadTemplate("mod_orderbutton_index.html.twig", "mod_order_index.html.twig", 30)->display($context);
        // line 31
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 37
    public function block_sidebar2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    ";
        $this->loadTemplate("partial_currency.html.twig", "mod_order_index.html.twig", 38)->display($context);
    }

    // line 41
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "<script type=\"text/javascript\">
    function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
        \$('#loader-image').hide();
    }
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_order_index.html.twig";
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
        return array (  140 => 43,  136 => 41,  131 => 38,  127 => 37,  119 => 31,  117 => 30,  111 => 26,  109 => 25,  105 => 24,  101 => 23,  93 => 17,  89 => 16,  83 => 14,  76 => 12,  72 => 11,  65 => 10,  58 => 5,  54 => 1,  52 => 8,  50 => 7,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_order_index.html.twig", "/var/www/modules/Order/html_client/mod_order_index.html.twig");
    }
}
