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
class __TwigTemplate_dee7ce6ac323ddc2991e69129237f5e3 extends Template
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
        // line 31
        echo "
";
        // line 36
        echo "
";
        // line 45
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
            echo "    <select class=\"form-select\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            if (($context["required"] ?? null)) {
                echo "required=\"required\"";
            }
            echo ">
        ";
            // line 3
            if (($context["nullOption"] ?? null)) {
                echo "<option value=\"\">-- ";
                echo twig_escape_filter($this->env, ($context["nullOption"] ?? null), "html", null, true);
                echo " --</option>";
            }
            // line 4
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 5
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, $context["label"]);
                echo "\" ";
                if ((($context["selected"] ?? null) == $context["val"])) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["label"]);
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
            echo "    <select class=\"form-select\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            if (($context["required"] ?? null)) {
                echo "required=\"required\"";
            }
            echo " style=\"width:80px;\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 13
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 13), "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 13), "html", null, true);
                echo "\" ";
                if ((($context["selected"] ?? null) == twig_get_attribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 13))) {
                    echo "selected=\"selected\"";
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
            echo twig_escape_filter($this->env, __trans(twig_title_string_filter($this->env, twig_replace_filter(($context["status"] ?? null), ["_" => " "]))), "html", null, true);
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 33
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
            // line 34
            echo "    ";
            echo $this->extensions['Box_TwigExtensions']->twig_period_title($this->env, ($context["period"] ?? null));
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 37
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
            // line 38
            echo "


";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, ($context["text"] ?? null), "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 42
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

    // line 47
    public function macro_recaptcha(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 48
            echo "
";
            // line 49
            if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "spamchecker"]], "method", false, false, false, 49)) {
                // line 50
                $context["rc"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "spamchecker_recaptcha", [], "any", false, false, false, 50);
                // line 51
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, ($context["rc"] ?? null), "enabled", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "        ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["rc"] ?? null), "version", [], "any", false, false, false, 52) == 2)) {
                        // line 53
                        echo "            <script src='https://www.google.com/recaptcha/api.js' async defer></script>
            <div class=\"g-recaptcha\" data-sitekey=\"";
                        // line 54
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rc"] ?? null), "publickey", [], "any", false, false, false, 54), "html", null, true);
                        echo "\"></div>
        ";
                    }
                    // line 56
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
        return array (  355 => 56,  350 => 54,  347 => 53,  344 => 52,  341 => 51,  339 => 50,  337 => 49,  334 => 48,  322 => 47,  306 => 42,  301 => 41,  296 => 38,  283 => 37,  271 => 34,  258 => 33,  246 => 29,  233 => 28,  221 => 25,  207 => 24,  195 => 20,  181 => 19,  171 => 15,  154 => 13,  150 => 12,  141 => 11,  125 => 10,  115 => 7,  98 => 5,  93 => 4,  87 => 3,  78 => 2,  61 => 1,  55 => 45,  52 => 36,  49 => 31,  46 => 27,  43 => 22,  40 => 17,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "macro_functions.html.twig", "/var/www/themes/infobia/html/macro_functions.html.twig");
    }
}
