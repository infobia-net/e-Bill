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
class __TwigTemplate_f27edabf07dc2c7609b46d2279fbc2eb extends Template
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
            echo "    <div class=\"card mt-1 mb-1\">
        <div class=\"card-header\">
            <h5>";
            // line 4
            echo twig_escape_filter($this->env, __trans("Addons & extras"), "html", null, true);
            echo "</h5>
        </div>
        <div class=\"card-body\">
        <table class=\"table table-sm table-borderless table-striped\">
        <tbody>
          ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "addons", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["addon"]) {
                // line 10
                echo "            <tr>
              <td>
                <input type=\"hidden\" name=\"addons[";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 12), "html", null, true);
                echo "][selected]\" value=\"0\">
                <input type=\"checkbox\" class=\"form-check-input\" name=\"addons[";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 13), "html", null, true);
                echo "][selected]\" value=\"1\" id=\"addon_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 13), "html", null, true);
                echo "\">
              </td>

              <td ";
                // line 16
                if ( !twig_get_attribute($this->env, $this->source, $context["addon"], "icon_url", [], "any", false, false, false, 16)) {
                    echo "style=\"display: none\"";
                }
                echo ">
                <label for=\"addon_";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 17), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "icon_url", [], "any", false, false, false, 17), "html", null, true);
                echo "\" alt=\"\" width=\"36\" /></label>
              </td>

              <td>
                <label for=\"addon_";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 21), "html", null, true);
                echo "\">
                  <h6>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "</h6>
                </label>
                ";
                // line 24
                echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "description", [], "any", false, false, false, 24));
                echo "
              </td>

              <td class=\"currency\">
                <label for=\"addon_";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
                  ";
                // line 29
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 29), "type", [], "any", false, false, false, 29) === "recurrent")) {
                    // line 30
                    echo "                    ";
                    $context["periods"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_periods", [], "any", false, false, false, 30);
                    // line 31
                    echo "                    <select class=\"form-select\" name=\"addons[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 31), "html", null, true);
                    echo "][period]\" rel=\"addon-periods-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 31), "html", null, true);
                    echo "\">
                      ";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 32), "recurrent", [], "any", false, false, false, 32));
                    foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                        // line 33
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["prices"], "enabled", [], "any", false, false, false, 33)) {
                            // line 34
                            echo "                          <option value=\"";
                            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["periods"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["code"]] ?? null) : null), "html", null, true);
                            echo " ";
                            echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 34));
                            echo " ";
                            if ((twig_get_attribute($this->env, $this->source, $context["prices"], "setup", [], "any", false, false, false, 34) != "0.00")) {
                                echo twig_escape_filter($this->env, __trans("Setup:"), "html", null, true);
                                echo " ";
                                echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["prices"], "setup", [], "any", false, false, false, 34));
                            }
                            echo "</option>
                        ";
                        }
                        // line 36
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "                    </select>
                  ";
                }
                // line 39
                echo "
                  ";
                // line 40
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 40), "type", [], "any", false, false, false, 40) === "once")) {
                    // line 41
                    echo "                    ";
                    echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 41), "once", [], "any", false, false, false, 41), "price", [], "any", false, false, false, 41) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 41), "once", [], "any", false, false, false, 41), "setup", [], "any", false, false, false, 41)));
                    echo "
                  ";
                }
                // line 43
                echo "
                  ";
                // line 44
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 44), "type", [], "any", false, false, false, 44) === "free")) {
                    // line 45
                    echo "                    ";
                    echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, 0);
                    echo "
                  ";
                }
                // line 47
                echo "                </label>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        </tbody>
      </table>
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
        return array (  182 => 51,  173 => 47,  167 => 45,  165 => 44,  162 => 43,  156 => 41,  154 => 40,  151 => 39,  147 => 37,  141 => 36,  125 => 34,  122 => 33,  118 => 32,  111 => 31,  108 => 30,  106 => 29,  102 => 28,  95 => 24,  90 => 22,  86 => 21,  77 => 17,  71 => 16,  63 => 13,  59 => 12,  55 => 10,  51 => 9,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_addons.html.twig", "/var/www/modules/Orderbutton/html_client/mod_orderbutton_addons.html.twig");
    }
}
