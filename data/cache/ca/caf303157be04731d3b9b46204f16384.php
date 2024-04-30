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

/* mod_news_index.html.twig */
class __TwigTemplate_f38bb7ddb890db91b0f4e13056b7fde2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'page_header' => [$this, 'block_page_header'],
            'page_subheader' => [$this, 'block_page_subheader'],
            'body_class' => [$this, 'block_body_class'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_news_index.html.twig", 1);
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
        echo twig_escape_filter($this->env, __trans("News"), "html", null, true);
    }

    // line 3
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("News & Announcements"), "html", null, true);
    }

    // line 4
    public function block_page_subheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Track our latest information."), "html", null, true);
    }

    // line 5
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "news-index";
    }

    // line 6
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
        echo twig_escape_filter($this->env, __trans("News"), "html", null, true);
        echo "</a></li>";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "news_get_list", [["page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 8), "per_page" => 5]], "method", false, false, false, 8);
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "list", [], "any", false, false, false, 9));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["post"]) {
            // line 10
            echo "<div class=\"row row-deck row-cards mb-3\">
   <div class=\"col-md-12\">
      <div class=\"card\">
         <div class=\"card-header\">
            <h3 class=\"card-title\"><a href=\"";
            // line 14
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 14), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 14), "html", null, true);
            echo "</a> <span class=\"card-subtitle\">";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "updated_at", [], "any", false, false, false, 14)), "html", null, true);
            echo "</span></h3>
         </div>
         <div class=\"card-body\">
            ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 17)) {
                // line 18
                echo "            ";
                echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 18));
                echo "
            ";
            } else {
                // line 20
                echo "            ";
                echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 20));
                echo "
            ";
            }
            // line 22
            echo "            <a class=\"btn btn-primary btn-sm\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 22), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Read more ..."), "html", null, true);
            echo "</a>
         </div>
      </div>
   </div>
</div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "<div class=\"row row-deck row-cards mb-3\">
   <div class=\"col-md-12\">
      <div class=\"card\">
         <div class=\"card-body\">
            <p>No News Is Good News!</p>
         </div>
      </div>
   </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "list", [], "any", false, false, false, 38))) {
            // line 39
            echo "<div class=\"row row-deck row-cards mb-3\">
   <div class=\"col-md-12\">
      <div class=\"card\">
         <div class=\"card-body\">
            ";
            // line 43
            $this->loadTemplate("partial_pagination.html.twig", "mod_news_index.html.twig", 43)->display(twig_array_merge($context, ["list" => ($context["posts"] ?? null)]));
            // line 44
            echo "         </div>
      </div>
   </div>
</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_news_index.html.twig";
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
        return array (  171 => 44,  169 => 43,  163 => 39,  161 => 38,  146 => 28,  130 => 22,  124 => 20,  118 => 18,  116 => 17,  104 => 14,  98 => 10,  93 => 9,  91 => 8,  87 => 7,  78 => 6,  71 => 5,  64 => 4,  57 => 3,  50 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_news_index.html.twig", "/var/www/themes/tide/html/mod_news_index.html.twig");
    }
}
