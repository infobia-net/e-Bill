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

/* macro_functions.html.twig */
class __TwigTemplate_a976c3e448b425cf35dd04f1fd420764 extends Template
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
        // line 9
        echo "
";
        // line 17
        echo "
";
        // line 22
        echo "
";
        // line 27
        echo "
";
        // line 52
        echo "
";
        // line 57
        echo "
";
        // line 66
        echo "

";
    }

    // line 1
    public function macro_selectbox($__name__ = null, $__options__ = null, $__selected__ = null, $__required__ = null, $__nullOption__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "options" => $__options__,
            "selected" => $__selected__,
            "required" => $__required__,
            "nullOption" => $__nullOption__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"form-control";
            if (($context["required"] ?? null)) {
                echo " is-required";
            }
            echo "\">
        ";
            // line 3
            if (($context["nullOption"] ?? null)) {
                echo "<option value=\"\">";
                echo twig_escape_filter($this->env, ($context["nullOption"] ?? null), "html", null, true);
                echo "</option>";
            }
            // line 4
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 5
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\" ";
                if ((($context["selected"] ?? null) == $context["val"])) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['val'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    </select>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 10
    public function macro_selectboxtld($__name__ = null, $__options__ = null, $__selected__ = null, $__required__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "options" => $__options__,
            "selected" => $__selected__,
            "required" => $__required__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 11
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" class=\"form-control";
            if (($context["required"] ?? null)) {
                echo " is-required";
            }
            echo "\" style=\"width: 80px;\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 13
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 13), "html", null, true);
                echo "\" ";
                if ((($context["selected"] ?? null) == twig_get_attribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 13))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 13), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </select>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 19
    public function macro_currency_format($__price__ = null, $__currency__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "price" => $__price__,
            "currency" => $__currency__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 20
            echo "    ";
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, ($context["price"] ?? null), ($context["currency"] ?? null));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 24
    public function macro_currency($__price__ = null, $__currency__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "price" => $__price__,
            "currency" => $__currency__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 25
            echo "    ";
            echo $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, ($context["price"] ?? null), ($context["currency"] ?? null));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 28
    public function macro_status_name($__status__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "status" => $__status__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 29
            echo "    ";
            $context["status"] = twig_trim_filter(twig_title_string_filter($this->env, twig_replace_filter(($context["status"] ?? null), ["_" => " "])));
            // line 30
            echo "    ";
            if ((($context["status"] ?? null) == "Active")) {
                // line 31
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 32
($context["status"] ?? null) == "Pending Setup")) {
                // line 33
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Pending Setup"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 34
($context["status"] ?? null) == "Failed Setup")) {
                // line 35
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Failed Setup"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 36
($context["status"] ?? null) == "Failed Renew")) {
                // line 37
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Failed Renewal"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 38
($context["status"] ?? null) == "Suspended")) {
                // line 39
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Suspended"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 40
($context["status"] ?? null) == "Canceled")) {
                // line 41
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Canceled"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 42
($context["status"] ?? null) == "Paid")) {
                // line 43
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Paid"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 44
($context["status"] ?? null) == "Unpaid")) {
                // line 45
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Unpaid"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 46
($context["status"] ?? null) == "Refunded")) {
                // line 47
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Refunded"), "html", null, true);
                echo "
    ";
            } else {
                // line 49
                echo "        ";
                echo twig_escape_filter($this->env, __trans(($context["status"] ?? null)), "html", null, true);
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_period_name($__period__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "period" => $__period__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 55
            echo "    ";
            echo $this->extensions['Box_TwigExtensions']->twig_period_title($this->env, ($context["period"] ?? null));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 58
    public function macro_markdown_quote($__text__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 59
            echo "


";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, ($context["text"] ?? null), "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 63
                echo "> ";
                echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 68
    public function macro_recaptcha(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 69
            echo "
";
            // line 70
            if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "spamchecker"]], "method", false, false, false, 70)) {
                // line 71
                $context["rc"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "spamchecker_recaptcha", [], "any", false, false, false, 71);
                // line 72
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, ($context["rc"] ?? null), "enabled", [], "any", false, false, false, 72)) {
                    // line 73
                    echo "        ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["rc"] ?? null), "version", [], "any", false, false, false, 73) == 2)) {
                        // line 74
                        echo "            <script src='https://www.google.com/recaptcha/api.js' async defer></script>
            <div class=\"g-recaptcha\" data-sitekey=\"";
                        // line 75
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rc"] ?? null), "publickey", [], "any", false, false, false, 75), "html", null, true);
                        echo "\"></div>
        ";
                    }
                    // line 77
                    echo "    ";
                }
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "macro_functions.html.twig";
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
        return array (  420 => 77,  415 => 75,  412 => 74,  409 => 73,  406 => 72,  404 => 71,  402 => 70,  399 => 69,  387 => 68,  371 => 63,  366 => 62,  361 => 59,  348 => 58,  336 => 55,  323 => 54,  310 => 49,  304 => 47,  302 => 46,  297 => 45,  295 => 44,  290 => 43,  288 => 42,  283 => 41,  281 => 40,  276 => 39,  274 => 38,  269 => 37,  267 => 36,  262 => 35,  260 => 34,  255 => 33,  253 => 32,  248 => 31,  245 => 30,  242 => 29,  229 => 28,  217 => 25,  203 => 24,  191 => 20,  177 => 19,  167 => 15,  152 => 13,  148 => 12,  139 => 11,  123 => 10,  113 => 7,  98 => 5,  93 => 4,  87 => 3,  78 => 2,  61 => 1,  55 => 66,  52 => 57,  49 => 52,  46 => 27,  43 => 22,  40 => 17,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "macro_functions.html.twig", "/var/www/themes/huraga/html/macro_functions.html.twig");
    }
}
