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

/* mod_orderbutton_addons.html.twig */
class __TwigTemplate_9e1b68232ae7db56cef7f91e36b2767b extends Template
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
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "addons", [], "any", false, false, false, 1)) > 0)) {
            // line 2
            echo "      <div class=\"card mb-3 mt-3\">
         <div class=\"card-header\">
            <h3 class=\"card-title\">
               ";
            // line 5
            echo twig_escape_filter($this->env, __trans("Addons & extras"), "html", null, true);
            echo "
            </h3>
         </div>
         <div class=\"card-body\">
            <div class=\"table-responsive\">
               <table class=\"table table-bordered table-striped\">
                  <tbody>
                     ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "addons", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["addon"]) {
                // line 13
                echo "                        <tr>
                           <td>
                              <input type=\"hidden\" name=\"addons[";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 15), "html", null, true);
                echo "][selected]\" value=\"0\">
                              <input class=\"form-check-input\" type=\"checkbox\" name=\"addons[";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 16), "html", null, true);
                echo "][selected]\" value=\"1\" id=\"addon_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 16), "html", null, true);
                echo "\">
                           </td>
                           <td ";
                // line 18
                if ( !twig_get_attribute($this->env, $this->source, $context["addon"], "icon_url", [], "any", false, false, false, 18)) {
                    echo "style=\"display: none\"";
                }
                echo ">
                              <img src=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "icon_url", [], "any", false, false, false, 19), "html", null, true);
                echo "\" alt=\"\" width=\"36\"/>
                           </td>
                           <td>
                              <h3>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "</h3>
                              ";
                // line 23
                echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "description", [], "any", false, false, false, 23));
                echo "
                           </td>
                           <td>
                              ";
                // line 26
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 26), "type", [], "any", false, false, false, 26) === "recurrent")) {
                    // line 27
                    echo "                              ";
                    $context["periods"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_periods", [], "any", false, false, false, 27);
                    // line 28
                    echo "                              <select class=\"form-select\" name=\"addons[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 28), "html", null, true);
                    echo "][period]\" rel=\"addon-periods-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 28), "html", null, true);
                    echo "\">
                              ";
                    // line 29
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 29), "recurrent", [], "any", false, false, false, 29));
                    foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                        // line 30
                        echo "                              ";
                        if (twig_get_attribute($this->env, $this->source, $context["prices"], "enabled", [], "any", false, false, false, 30)) {
                            // line 31
                            echo "                              <option value=\"";
                            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["periods"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["code"]] ?? null) : null), "html", null, true);
                            echo " ";
                            echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 31));
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["prices"], "setup", [], "any", false, false, false, 31) != "0.00")) {
                                echo twig_escape_filter($this->env, __trans("Setup:"), "html", null, true);
                                echo " ";
                                echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["prices"], "setup", [], "any", false, false, false, 31));
                            }
                            echo "</option>
                              ";
                        }
                        // line 33
                        echo "                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "                              </select>
                              ";
                }
                // line 36
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 36), "type", [], "any", false, false, false, 36) === "once")) {
                    // line 37
                    echo "                              ";
                    echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 37), "once", [], "any", false, false, false, 37), "price", [], "any", false, false, false, 37) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 37), "once", [], "any", false, false, false, 37), "setup", [], "any", false, false, false, 37)));
                    echo "
                              ";
                }
                // line 39
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 39), "type", [], "any", false, false, false, 39) === "free")) {
                    // line 40
                    echo "                              ";
                    echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, 0);
                    echo "
                              ";
                }
                // line 42
                echo "                           </td>
                     </tr>
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                  </tbody>
               </table>
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
        return "mod_orderbutton_addons.html.twig";
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
        return array (  166 => 45,  158 => 42,  152 => 40,  149 => 39,  143 => 37,  140 => 36,  136 => 34,  130 => 33,  114 => 31,  111 => 30,  107 => 29,  100 => 28,  97 => 27,  95 => 26,  89 => 23,  85 => 22,  79 => 19,  73 => 18,  66 => 16,  62 => 15,  58 => 13,  54 => 12,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_addons.html.twig", "/var/www/themes/tide/html/mod_orderbutton_addons.html.twig");
    }
}
