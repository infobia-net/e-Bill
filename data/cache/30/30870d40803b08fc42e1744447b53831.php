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

/* mod_orderbutton_product_configuration.html.twig */
class __TwigTemplate_d2f3b50b74b949483a6f469d3f0a313e extends Template
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
        $context["product"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "order", [], "any", false, false, false, 1)) ? (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "product_get", [["id" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "order", [], "any", false, false, false, 1)]], "method", false, false, false, 1)) : (null));
        // line 2
        echo "<div class=\"row row-deck row-cards mb-3\">
   <div class=\"col-md-12\">
      ";
        // line 4
        $context["products"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "product_get_list", [], "any", false, false, false, 4);
        // line 5
        echo "      <div class=\"card\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">
               <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                  <path d=\"M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z\"></path>
                  <path d=\"M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0\"></path>
               </svg>
               &nbsp;";
        // line 13
        echo twig_escape_filter($this->env, __trans("Product Configuration"), "html", null, true);
        echo "
            </h3>
\t\t\t";
        // line 15
        $this->loadTemplate("mod_orderbutton_currency.html.twig", "mod_orderbutton_product_configuration.html.twig", 15)->display($context);
        // line 16
        echo "         </div>
         <div class=\"card-body\">
            ";
        // line 18
        if (($context["product"] ?? null)) {
            // line 19
            echo "            <form method=\"post\" class=\"form-";
            ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 19)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "formbuilder_get", [["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 19)]], "method", false, false, false, 19), "style", [], "any", false, false, false, 19), "type", [], "any", false, false, false, 19), "html", null, true))) : (print (0)));
            echo "\" action=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slug", [], "any", false, false, false, 19), "html", null, true);
            echo "\" id=\"add-to-cart\" onsubmit=\"return false;\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
            ";
            // line 21
            ob_start(function () { return ''; });
            // line 22
            echo "            <fieldset class=\"form-fieldset\">
               <strong>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</strong>
               ";
            // line 24
            echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 24));
            echo "
               ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 25), "type", [], "any", false, false, false, 25) == "recurrent")) {
                // line 26
                echo "               ";
                $context["periods"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_periods", [], "any", false, false, false, 26);
                // line 27
                echo "               <select name=\"period\" class=\"form-select\" id=\"period-selector\">
                  ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 28), "recurrent", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                    // line 29
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["prices"], "enabled", [], "any", false, false, false, 29)) {
                        // line 30
                        echo "                  <option value=\"";
                        echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                        echo "\" data-bb-price=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 30));
                        echo "\" name=\"period\">";
                        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["periods"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["code"]] ?? null) : null), "html", null, true);
                        echo " - ";
                        echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 30));
                        echo "</option>
                  ";
                    }
                    // line 32
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "               </select>
               ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 34
($context["product"] ?? null), "pricing", [], "any", false, false, false, 34), "type", [], "any", false, false, false, 34) == "free")) {
                // line 35
                echo "               <span class=\"badge bg-info\">";
                echo twig_escape_filter($this->env, __trans("FREE"), "html", null, true);
                echo "</span>
               ";
            } else {
                // line 37
                echo "               <span class=\"badge bg-info\">";
                echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 37), "once", [], "any", false, false, false, 37), "price", [], "any", false, false, false, 37));
                echo "</span>
               ";
            }
            // line 39
            echo "            </fieldset>
            ";
            $context["product_details"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 41
            echo "            ";
            $context["tpl"] = (("mod_service" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "type", [], "any", false, false, false, 41)) . "_order_form.html.twig");
            // line 42
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_template_exists", [["file" => ($context["tpl"] ?? null)]], "method", false, false, false, 42)) {
                // line 43
                echo "            ";
                $this->loadTemplate(($context["tpl"] ?? null), "mod_orderbutton_product_configuration.html.twig", 43)->display(twig_array_merge($context, ($context["product"] ?? null)));
                // line 44
                echo "            ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 44) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "formbuilder"]], "method", false, false, false, 44))) {
                // line 45
                echo "            ";
                echo twig_escape_filter($this->env, ($context["product_details"] ?? null), "html", null, true);
                echo "
            ";
                // line 46
                $context["form"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "formbuilder_get", [["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 46)]], "method", false, false, false, 46);
                // line 47
                echo "            ";
                $this->loadTemplate("mod_formbuilder_build.html.twig", "mod_orderbutton_product_configuration.html.twig", 47)->display(twig_array_merge($context, ($context["product"] ?? null)));
                // line 48
                echo "            ";
            } else {
                // line 49
                echo "            ";
                echo twig_escape_filter($this->env, ($context["product_details"] ?? null), "html", null, true);
                echo "
            ";
            }
            // line 51
            echo "            ";
            $this->loadTemplate("mod_orderbutton_addons.html.twig", "mod_orderbutton_product_configuration.html.twig", 51)->display(twig_array_merge($context, ($context["product"] ?? null)));
            // line 52
            echo "            <input type=\"hidden\" name=\"multiple\" value=\"1\" />
            <input type=\"hidden\" name=\"id\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\" />
            <button type=\"submit\" class=\"btn btn-primary\" id=\"config-next\">
               <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                  <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                  <path d=\"M7 7l5 5l-5 5\"></path>
                  <path d=\"M13 7l5 5l-5 5\"></path>
               </svg>
               ";
            // line 60
            echo twig_escape_filter($this->env, __trans("Next"), "html", null, true);
            echo "
            </button>
            </form>
            ";
        }
        // line 64
        echo "         </div>
      </div>
   </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_orderbutton_product_configuration.html.twig";
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
        return array (  202 => 64,  195 => 60,  185 => 53,  182 => 52,  179 => 51,  173 => 49,  170 => 48,  167 => 47,  165 => 46,  160 => 45,  157 => 44,  154 => 43,  151 => 42,  148 => 41,  144 => 39,  138 => 37,  132 => 35,  130 => 34,  127 => 33,  121 => 32,  109 => 30,  106 => 29,  102 => 28,  99 => 27,  96 => 26,  94 => 25,  90 => 24,  86 => 23,  83 => 22,  81 => 21,  77 => 20,  68 => 19,  66 => 18,  62 => 16,  60 => 15,  55 => 13,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_product_configuration.html.twig", "/var/www/themes/infobia/html/mod_orderbutton_product_configuration.html.twig");
    }
}
