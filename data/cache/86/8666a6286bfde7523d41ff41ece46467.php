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
class __TwigTemplate_12835c8c51e7c8ab106c9e880c7667c5 extends Template
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
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
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
        // line 2
        $context["products"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "product_get_list", [], "any", false, false, false, 2);
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_order_index.html.twig", 3)->unwrap();
        // line 5
        $context["loader_nr"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", false, false, false, 5), "8")) : ("8"));
        // line 6
        $context["loader_url"] = (("img/assets/loaders/loader" . ($context["loader_nr"] ?? null)) . ".gif");
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
    }

    // line 7
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Select Product"), "html", null, true);
        echo "&nbsp;<span class=\"badge bg-blue-lt\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "list", [], "any", false, false, false, 7)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, __trans("Items"), "html", null, true);
        echo "</span>";
    }

    // line 8
    public function block_page_subheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __trans("Choose products we offer for selling"), "html", null, true);
    }

    // line 9
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "order-index";
    }

    // line 10
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div class=\"mb-1\">
   <ol class=\"breadcrumb\" aria-label=\"breadcrumbs\">
      <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\">";
        echo twig_escape_filter($this->env, __trans("Home"), "html", null, true);
        echo "</a></li>
      <li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">";
        // line 14
        echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
        echo "</a></li>
   </ol>
</div>
";
    }

    // line 18
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "<div class=\"row row-deck row-cards\">
   ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "product_category_get_list", [], "any", false, false, false, 21), "list", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 22
            echo "   <div class=\"col-md-12\">
      <div class=\"card card-md\">
         <div class=\"card-body\">
            <h2>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</h2>
            <span>";
            // line 26
            echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 26));
            echo "</span>
            <div class=\"row row-cards\">
               ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Box_TwigExtensions']->filteredSort(twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 28), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "priority", [], "any", false, false, false, 28) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "priority", [], "any", false, false, false, 28)); }));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["product"]) {
                // line 29
                echo "               <div class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 29) == 1)) {
                    echo "col-sm-12 col-lg-12";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 29) == 2)) {
                    echo "col-sm-6 col-lg-6";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 29) == 3)) {
                    echo "col-sm-6 col-lg-4";
                } else {
                    echo "col-sm-6 col-lg-3";
                }
                echo "\">
                  <div class=\"card card-md\">
                     ";
                // line 31
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 31) == "domain")) {
                    // line 32
                    echo "                     <div class=\"ribbon ribbon-top ribbon-bookmark bg-green\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                           <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                           <path d=\"M12 10m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0\"></path>
                           <path d=\"M6.75 16a8.015 8.015 0 1 0 9.25 -13\"></path>
                           <path d=\"M12 18l0 4\"></path>
                           <path d=\"M8 22l8 0\"></path>
                        </svg>
                     </div>
                     ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 41
$context["product"], "type", [], "any", false, false, false, 41) == "hosting")) {
                    // line 42
                    echo "                     <div class=\"ribbon ribbon-top ribbon-bookmark bg-orange\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                           <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                           <path d=\"M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z\"></path>
                           <path d=\"M3 12m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z\"></path>
                           <path d=\"M7 8l0 .01\"></path>
                           <path d=\"M7 16l0 .01\"></path>
                        </svg>
                     </div>
                     ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 51
$context["product"], "type", [], "any", false, false, false, 51) == "downloadable")) {
                    // line 52
                    echo "                     <div class=\"ribbon ribbon-top ribbon-bookmark bg-indigo\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                           <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                           <path d=\"M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2\"></path>
                           <path d=\"M7 11l5 5l5 -5\"></path>
                           <path d=\"M12 4l0 12\"></path>
                        </svg>
                     </div>
                     ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 60
$context["product"], "type", [], "any", false, false, false, 60) == "license")) {
                    // line 61
                    echo "                     <div class=\"ribbon ribbon-top ribbon-bookmark bg-pink\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                           <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                           <path d=\"M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11\"></path>
                           <path d=\"M9 7l4 0\"></path>
                           <path d=\"M9 11l4 0\"></path>
                        </svg>
                     </div>
                     ";
                } else {
                    // line 70
                    echo "                     <div class=\"ribbon ribbon-top ribbon-bookmark bg-dark\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                           <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                           <path d=\"M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5\"></path>
                           <path d=\"M12 12l8 -4.5\"></path>
                           <path d=\"M12 12l0 9\"></path>
                           <path d=\"M12 12l-8 -4.5\"></path>
                        </svg>
                     </div>
                     ";
                }
                // line 80
                echo "                     <div class=\"card-body text-center\">
                        <div class=\"text-uppercase text-muted font-weight-medium mb-4\">";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 81), "html", null, true);
                echo "</div>
                        <h3>";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 82), "html", null, true);
                echo "</h3>
                        <div class=\"text-center mt-4\">
                           <a href=\"";
                // line 84
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("orderbutton", ["order" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 84), "show_custom_form_values" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "show_custom_form_values", [], "any", false, false, false, 84)]);
                echo "\" class=\"btn ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 84) == "domain")) {
                    echo "btn-green";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 84) == "hosting")) {
                    echo "btn-orange";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 84) == "downloadable")) {
                    echo "btn-indigo";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "type", [], "any", false, false, false, 84) == "license")) {
                    echo "btn-pink";
                } else {
                    echo "btn-dark";
                }
                echo " w-100\">Choose</a>
                        </div>
                     </div>
                  </div>
               </div>
               ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "            </div>
         </div>
      </div>
   </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "</div>
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
        return array (  294 => 95,  284 => 90,  252 => 84,  247 => 82,  243 => 81,  240 => 80,  228 => 70,  217 => 61,  215 => 60,  205 => 52,  203 => 51,  192 => 42,  190 => 41,  179 => 32,  177 => 31,  163 => 29,  146 => 28,  141 => 26,  137 => 25,  132 => 22,  128 => 21,  125 => 20,  121 => 19,  115 => 18,  107 => 14,  101 => 13,  97 => 11,  93 => 10,  86 => 9,  79 => 8,  67 => 7,  60 => 4,  56 => 1,  54 => 6,  52 => 5,  50 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_order_index.html.twig", "/var/www/themes/infobia/html/mod_order_index.html.twig");
    }
}
