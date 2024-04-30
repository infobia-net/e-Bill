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

/* layout_login.html.twig */
class __TwigTemplate_e8e12e1b2690bf36c5277092b951f831 extends Template
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
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        $this->displayBlock('meta_title', $context, $blocks);
        echo "</title>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"csrf-token\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">

    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 10), "favicon_url", [], "any", false, false, false, 10), "html", null, true);
        echo "\">

    ";
        // line 12
        $this->loadTemplate("partial_bb_meta.html.twig", "layout_login.html.twig", 12)->display($context);
        // line 13
        echo "
    ";
        // line 14
        echo $this->env->getFunction('encore_entry_link_tags')->getCallable()("fossbilling");
        echo "
    ";
        // line 15
        echo $this->extensions['Box_TwigExtensions']->twig_script_tag($this->extensions['Box_TwigExtensions']->twig_library_url("Api/API.js"));
        echo "
    ";
        // line 16
        echo $this->env->getFunction('encore_entry_script_tags')->getCallable()("fossbilling");
        echo "
</head>

<body class=\"border-top-wide border-primary d-flex flex-column\" data-bs-theme=\"dark\">
    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.body.setAttribute(\"data-bs-theme\", localStorage.getItem('theme'));
        } else {
            document.body.removeAttribute(\"data-bs-theme\");
        }
    </script>

    ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 30
        echo "
    <div class=\"d-none\">
        ";
        // line 32
        $this->loadTemplate("../build/symbol/icons-sprite.svg", "layout_login.html.twig", 32)->display($context);
        // line 33
        echo "    </div>
    <div class=\"toast-container position-fixed bottom-0 end-0 p-3\" style=\"z-index: 1070;\">
    </div>
</body>
</html>
";
    }

    // line 4
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 29
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout_login.html.twig";
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
        return array (  122 => 29,  116 => 28,  110 => 4,  101 => 33,  99 => 32,  95 => 30,  92 => 29,  90 => 28,  75 => 16,  71 => 15,  67 => 14,  64 => 13,  62 => 12,  57 => 10,  52 => 8,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout_login.html.twig", "/var/www/themes/admin_default/html/layout_login.html.twig");
    }
}
