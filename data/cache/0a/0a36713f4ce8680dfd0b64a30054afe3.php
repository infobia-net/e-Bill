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
class __TwigTemplate_6e8c8e676711608b5ab36cb93de02986 extends Template
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
            'body_class' => [$this, 'block_body_class'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
   <head>
      <meta charset=\"utf-8\"/>
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, viewport-fit=cover\"/>
      <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\"/>
      <title>";
        // line 7
        $this->displayBlock('meta_title', $context, $blocks);
        echo "</title>
      <meta name=\"msapplication-TileColor\" content=\"\"/>
      <meta name=\"theme-color\" content=\"\"/>
      <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\"/>
      <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
      <meta name=\"mobile-web-app-capable\" content=\"yes\"/>
      <meta name=\"HandheldFriendly\" content=\"True\"/>
      <meta name=\"MobileOptimized\" content=\"320\"/>
      <link rel=\"icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 15), "favicon_url", [], "any", false, false, false, 15), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
      <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 16), "favicon_url", [], "any", false, false, false, 16), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
      <meta name=\"description\" content=\"";
        // line 17
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\"/>
      <meta property=\"bb:url\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_constant("SYSTEM_URL"), "html", null, true);
        echo "\">
      <meta property=\"bb:client_area\" content=\"";
        // line 19
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\">
      <meta name=\"csrf-token\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\">
      <meta name=\"robots\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_robots", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
      <meta name=\"author\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_author", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
      <meta name=\"generator\" content=\"FOSSBilling ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_version", [], "any", false, false, false, 23), "html", null, true);
        echo "\">
      <meta name=\"canonical\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_constant("SYSTEM_URL"), "html", null, true);
        echo "\">
      ";
        // line 25
        $this->displayBlock('opengraph', $context, $blocks);
        // line 26
        echo "      <!-- CSS files -->
      <link href=\"";
        // line 27
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler.min.css");
        echo "\" rel=\"stylesheet\"/>
      <link href=\"";
        // line 28
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler-flags.min.css");
        echo "\" rel=\"stylesheet\"/>
      <link href=\"";
        // line 29
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler-payments.min.css");
        echo "\" rel=\"stylesheet\"/>
      <link href=\"";
        // line 30
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/tabler-vendors.min.css");
        echo "\" rel=\"stylesheet\"/>
\t  <link href=\"";
        // line 31
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/custom.css");
        echo "\" rel=\"stylesheet\"/>
      <script src=\"";
        // line 32
        echo $this->extensions['Box_TwigExtensions']->twig_library_url(("Api/API.js?v=" . twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_version", [], "any", false, false, false, 32)));
        echo "\"></script>
      <script src=\"";
        // line 33
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/jquery-3.7.0.min.js");
        echo "\"></script>
      <script src=\"";
        // line 34
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/bb-jquery.js");
        echo "\"></script>
      <style>
         @import url('https://rsms.me/inter/inter.css');
         :root {
         --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
         }
         body {
         font-feature-settings: \"cv03\", \"cv04\", \"cv11\";
         }
      </style>
      ";
        // line 44
        $this->displayBlock('head', $context, $blocks);
        // line 45
        echo "      ";
        $this->displayBlock('js', $context, $blocks);
        // line 46
        echo "   </head>
   <body class=\"";
        // line 47
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
      ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "      ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("partial_pending_messages.html.twig", "layout_public.html.twig", 49);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 50
        echo "      <script src=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/tabler.min.js");
        echo "\" defer></script>
   </body>
</html>
";
    }

    // line 7
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_title", [], "any", false, false, false, 7), "html", null, true);
    }

    // line 17
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_description", [], "any", false, false, false, 17), "html", null, true);
    }

    // line 25
    public function block_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 44
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 45
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 47
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 48
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
        return array (  221 => 48,  215 => 47,  209 => 45,  203 => 44,  197 => 25,  190 => 17,  183 => 7,  174 => 50,  163 => 49,  161 => 48,  157 => 47,  154 => 46,  151 => 45,  149 => 44,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  105 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout_public.html.twig", "/var/www/themes/tide/html/layout_public.html.twig");
    }
}
