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
class __TwigTemplate_756ed04dbfbb390c1afdcb5c9db2a885 extends Template
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
        if ( !($context["product"] ?? null)) {
            // line 2
            echo "    ";
            $context["product"] = ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "product", [], "any", false, false, false, 2)) ? (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "product_get", [["id" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "product", [], "any", false, false, false, 2)]], "method", false, false, false, 2)) : (null));
        }
        // line 4
        echo "<div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
        <button class=\"accordion-button ";
        // line 6
        if ( !($context["product"] ?? null)) {
            echo "collapsed";
        }
        echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#order\" aria-expanded=\"true\" aria-controls=\"order\">
            <svg class=\"svg-icon me-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10M10,22C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.79,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,13L21.54,14.63C21.73,14.78 21.79,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.04 19.05,18.95L16.56,17.95C16.04,18.34 15.5,18.68 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10M11.25,4L10.88,6.61C9.68,6.86 8.62,7.5 7.85,8.39L5.44,7.35L4.69,8.65L6.8,10.2C6.4,11.37 6.4,12.64 6.8,13.8L4.68,15.36L5.43,16.66L7.86,15.62C8.63,16.5 9.68,17.14 10.87,17.38L11.24,20H12.76L13.13,17.39C14.32,17.14 15.37,16.5 16.14,15.62L18.57,16.66L19.32,15.36L17.2,13.81C17.6,12.64 17.6,11.37 17.2,10.2L19.31,8.65L18.56,7.35L16.15,8.39C15.38,7.5 14.32,6.86 13.12,6.62L12.75,4H11.25Z\" /></svg>
            ";
        // line 8
        echo twig_escape_filter($this->env, __trans("Product Configuration"), "html", null, true);
        echo "
        </button>
    </h2>
    ";
        // line 11
        if (($context["product"] ?? null)) {
            // line 12
            echo "    <div id=\"order\" class=\"accordion-collapse collapse ";
            if (($context["product"] ?? null)) {
                echo "show";
            }
            echo "\" data-bs-parent=\"#orderManager\">
        <div class=\"accordion-body\">
            <div class=\"accordion-inner\">
                <form method=\"post\" style=\"background:none;\" class=\"api-form form-";
            // line 15
            ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 15)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "formbuilder_get", [["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 15)]], "method", false, false, false, 15), "style", [], "any", false, false, false, 15), "type", [], "any", false, false, false, 15), "html", null, true))) : (print (0)));
            echo "\"
                    action=\"";
            // line 16
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/cart/add_item");
            echo "\" data-api-msg=\"";
            echo twig_escape_filter($this->env, __trans("Product was added to shopping cart"), "html", null, true);
            echo "\"
                    data-api-redirect=\"";
            // line 17
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order", ["checkout" => 1]);
            echo "\" + \"";
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "show_custom_form_values", [], "any", false, false, false, 17)) {
                echo "&show_custom_form_values=1";
            }
            echo "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
                    ";
            // line 19
            ob_start(function () { return ''; });
            // line 20
            echo "                        <div class=\"well\">
                            <strong>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 21), "html", null, true);
            echo "</strong>
                            ";
            // line 22
            echo $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 22));
            echo "

                            ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 24), "type", [], "any", false, false, false, 24) == "recurrent")) {
                // line 25
                echo "                                ";
                $context["periods"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_periods", [], "any", false, false, false, 25);
                // line 26
                echo "                                <select class=\"form-select\" name=\"period\" id=\"period-selector\">
                                    ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 27), "recurrent", [], "any", false, false, false, 27));
                foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                    // line 28
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["prices"], "enabled", [], "any", false, false, false, 28)) {
                        // line 29
                        echo "                                            <option value=\"";
                        echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                        echo "\" data-bb-price=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 29));
                        echo "\" name=\"period\">";
                        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["periods"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["code"]] ?? null) : null), "html", null, true);
                        echo " - ";
                        echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 29));
                        echo "</option>
                                        ";
                    }
                    // line 31
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "                                </select>
                            ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
($context["product"] ?? null), "pricing", [], "any", false, false, false, 33), "type", [], "any", false, false, false, 33) == "free")) {
                // line 34
                echo "                                <span class=\"badge bg-success\">";
                echo twig_escape_filter($this->env, __trans("FREE"), "html", null, true);
                echo "</span>
                            ";
            } else {
                // line 36
                echo "                                <span class=\"badge bg-success\">";
                echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 36), "once", [], "any", false, false, false, 36), "price", [], "any", false, false, false, 36));
                echo "</span>
                            ";
            }
            // line 38
            echo "                        </div>
                    ";
            $context["product_details"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
                    ";
            // line 41
            $context["tpl"] = (("mod_service" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "type", [], "any", false, false, false, 41)) . "_order_form.html.twig");
            // line 42
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_template_exists", [["file" => ($context["tpl"] ?? null)]], "method", false, false, false, 42)) {
                // line 43
                echo "                        ";
                $this->loadTemplate(($context["tpl"] ?? null), "mod_orderbutton_product_configuration.html.twig", 43)->display(twig_array_merge($context, ($context["product"] ?? null)));
                // line 44
                echo "                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 44) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "formbuilder"]], "method", false, false, false, 44))) {
                // line 45
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["product_details"] ?? null), "html", null, true);
                echo "
                        ";
                // line 46
                $context["form"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "formbuilder_get", [["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 46)]], "method", false, false, false, 46);
                // line 47
                echo "                        ";
                $this->loadTemplate("mod_formbuilder_build.html.twig", "mod_orderbutton_product_configuration.html.twig", 47)->display(twig_array_merge($context, ($context["product"] ?? null)));
                // line 48
                echo "                    ";
            } else {
                // line 49
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["product_details"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 51
            echo "
                    ";
            // line 52
            $this->loadTemplate("mod_orderbutton_addons.html.twig", "mod_orderbutton_product_configuration.html.twig", 52)->display(twig_array_merge($context, ($context["product"] ?? null)));
            // line 53
            echo "
                    <input type=\"hidden\" name=\"multiple\" value=\"1\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\" />
                    <div class=\"mb-0\">
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"config-next\">";
            // line 57
            echo twig_escape_filter($this->env, __trans("Next"), "html", null, true);
            echo "</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ";
        }
        // line 64
        echo "</div>
";
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
        return array (  218 => 64,  208 => 57,  203 => 55,  199 => 53,  197 => 52,  194 => 51,  188 => 49,  185 => 48,  182 => 47,  180 => 46,  175 => 45,  172 => 44,  169 => 43,  166 => 42,  164 => 41,  161 => 40,  157 => 38,  151 => 36,  145 => 34,  143 => 33,  140 => 32,  134 => 31,  122 => 29,  119 => 28,  115 => 27,  112 => 26,  109 => 25,  107 => 24,  102 => 22,  98 => 21,  95 => 20,  93 => 19,  89 => 18,  81 => 17,  75 => 16,  71 => 15,  62 => 12,  60 => 11,  54 => 8,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_product_configuration.html.twig", "/var/www/modules/Orderbutton/html_client/mod_orderbutton_product_configuration.html.twig");
    }
}
