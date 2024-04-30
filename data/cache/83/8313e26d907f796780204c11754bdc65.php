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

/* mod_page_sitemap.xml */
class __TwigTemplate_a35a21d74ef586ae4c3f257144e61081 extends Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
    ";
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "product_get_list", [["per_page" => 50]], "method", false, false, false, 4), "list", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["i"] => $context["product"]) {
            // line 5
            echo "    <url>
        <loc>";
            // line 6
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 6), "html", null, true);
            echo "</loc>
        <lastmod>";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "updated_at", [], "any", false, false, false, 7), "Y-m-d"), "html", null, true);
            echo "</lastmod>
        <priority>0.9</priority>
        <changefreq>weekly</changefreq>
    </url>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "news"]], "method", false, false, false, 14)) {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "news_get_list", [["per_page" => 50]], "method", false, false, false, 15), "list", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["i"] => $context["article"]) {
                // line 16
                echo "    <url>
        <loc>";
                // line 17
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("news");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 17), "html", null, true);
                echo "</loc>
        <lastmod>";
                // line 18
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "updated_at", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true);
                echo "</lastmod>
        <priority>0.9</priority>
        <changefreq>weekly</changefreq>
    </url>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    ";
        // line 26
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "support_kb_enabled", [], "method", false, false, false, 26)) {
            // line 27
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "support_kb_article_get_list", [["per_page" => 50]], "method", false, false, false, 27), "list", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["i"] => $context["article"]) {
                // line 28
                echo "    <url>
        <loc>";
                // line 29
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/kb");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 29), "slug", [], "any", false, false, false, 29), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 29), "html", null, true);
                echo "</loc>
        <lastmod>";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "updated_at", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true);
                echo "</lastmod>
        <priority>0.9</priority>
        <changefreq>weekly</changefreq>
    </url>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    ";
        }
        // line 36
        echo "</urlset>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_page_sitemap.xml";
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
        return array (  136 => 36,  133 => 35,  122 => 30,  114 => 29,  111 => 28,  106 => 27,  103 => 26,  100 => 24,  97 => 23,  86 => 18,  80 => 17,  77 => 16,  72 => 15,  69 => 14,  66 => 12,  55 => 7,  49 => 6,  46 => 5,  41 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_page_sitemap.xml", "/var/www/modules/Page/html_client/mod_page_sitemap.xml");
    }
}
