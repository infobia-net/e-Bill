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

/* layout_public.html.twig */
class __TwigTemplate_e31e8087560e25c2ccb1fb72a4f7391d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'meta_description' => [$this, 'block_meta_description'],
            'opengraph' => [$this, 'block_opengraph'],
            'head' => [$this, 'block_head'],
            'js' => [$this, 'block_js'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\" data-bs-theme=\"";
        // line 2
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "theme", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "theme", [], "any", false, false, false, 2), "light")) : ("light")), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('meta_title', $context, $blocks);
        echo "</title>

    <meta property=\"bb:url\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("SYSTEM_URL"), "html", null, true);
        echo "\">
    <meta property=\"bb:client_area\" content=\"";
        // line 8
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\">
    <meta name=\"csrf-token\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">

    <meta name=\"description\" content=\"";
        // line 11
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">
    <meta name=\"robots\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_robots", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_author", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
    <meta name=\"generator\" content=\"FOSSBilling\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 17
        $this->displayBlock('opengraph', $context, $blocks);
        // line 18
        echo "
    <link rel='stylesheet' type='text/css' href=\"";
        // line 19
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/font-awesome.css");
        echo "\">
    ";
        // line 20
        echo $this->env->getFunction('encore_entry_link_tags')->getCallable()("huraga");
        echo "

    <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 22), "favicon_url", [], "any", false, false, false, 22), "html", null, true);
        echo "\">

    ";
        // line 24
        echo $this->extensions['Box_TwigExtensions']->twig_script_tag($this->extensions['Box_TwigExtensions']->twig_library_url("Api/API.js"));
        echo "
    ";
        // line 25
        echo $this->env->getFunction('encore_entry_script_tags')->getCallable()("huraga");
        echo "
    ";
        // line 26
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 28
        echo "</head>
<body>
    ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "    <div aria-live=\"polite\" aria-atomic=\"true\" class=\"position-relative\">
        <div class=\"toast-container position-fixed bottom-0 end-0 p-3\" style=\"z-index: 1070;\"></div>
    </div>
    ";
        // line 34
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("partial_pending_messages.html.twig", "layout_public.html.twig", 34);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 35
        echo "</body>
</html>
";
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_title", [], "any", false, false, false, 5), "html", null, true);
    }

    // line 11
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_description", [], "any", false, false, false, 11), "html", null, true);
    }

    // line 17
    public function block_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 27
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout_public.html.twig";
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
        return array (  176 => 30,  170 => 27,  164 => 26,  158 => 17,  151 => 11,  144 => 5,  138 => 35,  128 => 34,  123 => 31,  121 => 30,  117 => 28,  114 => 27,  112 => 26,  108 => 25,  104 => 24,  99 => 22,  94 => 20,  90 => 19,  87 => 18,  85 => 17,  78 => 13,  74 => 12,  70 => 11,  65 => 9,  61 => 8,  57 => 7,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout_public.html.twig", "/var/www/themes/huraga/html/layout_public.html.twig");
    }
}
