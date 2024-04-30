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
class __TwigTemplate_ccc9d4345dad904c0edf8718ed4c406c extends Template
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
        // line 8
        echo "
";
        // line 17
        echo "
";
        // line 25
        echo "
";
        // line 62
        echo "
";
        // line 79
        echo "
";
        // line 103
        echo "
";
        // line 128
        echo "
";
        // line 132
        echo "
";
        // line 139
        echo "
";
        // line 147
        echo "
";
    }

    // line 1
    public function macro_q($__bool__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "bool" => $__bool__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            if (($context["bool"] ?? null)) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Yes"), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                echo twig_escape_filter($this->env, __trans("No"), "html", null, true);
                echo "
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 9
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
            // line 10
            echo "    <select class=\"form-select\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"";
            if (($context["required"] ?? null)) {
                echo " required";
            }
            echo ">
        ";
            // line 11
            if (($context["nullOption"] ?? null)) {
                echo "<option value=\"\">-- ";
                echo twig_escape_filter($this->env, ($context["nullOption"] ?? null), "html", null, true);
                echo " --</option>";
            }
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 13
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
            // line 15
            echo "    </select>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 18
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
            // line 19
            echo "    <select class=\"form-select\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"";
            if (($context["required"] ?? null)) {
                echo " required";
            }
            echo ">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 21
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 21), "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 21), "html", null, true);
                echo "\"";
                if ((($context["selected"] ?? null) == twig_get_attribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 21))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 21), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    </select>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 26
    public function macro_build_form($__elements__ = null, $__values__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "elements" => $__elements__,
            "values" => $__values__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 27
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["element"]) {
                // line 28
                echo "    <div class=\"mb-3 row\">
        ";
                // line 29
                if (((($__internal_compile_0 = $context["element"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) == "select")) {
                    // line 30
                    echo "        <label class=\"form-label col-3 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = $context["element"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "label", [], "any", false, false, false, 30), "html", null, true);
                    if (twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = $context["element"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "description", [], "any", false, false, false, 30)) {
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = $context["element"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null), "description", [], "any", false, false, false, 30), "html", null, true);
                    }
                    echo "</label>
        <div class=\"col\">
            <select class=\"form-select\" name=\"config[";
                    // line 32
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "]\">
            ";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = $context["element"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[1] ?? null) : null), "multiOptions", [], "any", false, false, false, 33));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 34
                        echo "                <option value=\"";
                        echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                        echo "\"";
                        if (($context["k"] == (($__internal_compile_5 = ($context["values"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["name"]] ?? null) : null))) {
                            echo " selected";
                        }
                        echo "/><label>";
                        echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                        echo "</label>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "            </select>
        </div>
        ";
                } elseif (((($__internal_compile_6 =                 // line 38
$context["element"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null) == "radio")) {
                    // line 39
                    echo "        <label class=\"form-label col-3 col-form-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = $context["element"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[1] ?? null) : null), "label", [], "any", false, false, false, 39), "html", null, true);
                    if (twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = $context["element"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[1] ?? null) : null), "description", [], "any", false, false, false, 39)) {
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = $context["element"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[1] ?? null) : null), "description", [], "any", false, false, false, 39), "html", null, true);
                    }
                    echo "</label>
        <div class=\"col\">
            ";
                    // line 41
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = $context["element"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[1] ?? null) : null), "multiOptions", [], "any", false, false, false, 41));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 42
                        echo "                <div class=\"form-check form-check-inline\">
                    <input class=\"form-check-input\" id=\"el-";
                        // line 43
                        echo twig_escape_filter($this->env, ($context["name"] . $context["k"]), "html", null, true);
                        echo "\" type=\"radio\" name=\"config[";
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "]\" value=\"";
                        echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                        echo "\"";
                        if (($context["k"] == (($__internal_compile_11 = ($context["values"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["name"]] ?? null) : null))) {
                            echo " checked";
                        }
                        echo ">
                    <label class=\"form-check-label\" for=\"el-";
                        // line 44
                        echo twig_escape_filter($this->env, ($context["name"] . $context["k"]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                        echo "</label>
                </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "        </div>
        ";
                } elseif (((($__internal_compile_12 =                 // line 48
$context["element"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[0] ?? null) : null) == "textarea")) {
                    // line 49
                    echo "        <label class=\"form-label col-3 col-form-label\" for=\"el-";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = $context["element"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[1] ?? null) : null), "label", [], "any", false, false, false, 49), "html", null, true);
                    if (twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = $context["element"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[1] ?? null) : null), "description", [], "any", false, false, false, 49)) {
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = $context["element"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[1] ?? null) : null), "description", [], "any", false, false, false, 49), "html", null, true);
                    }
                    echo "</label>
        <div class=\"col\">
            <textarea class=\"form-control\" id=\"el-";
                    // line 51
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" name=\"config[";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "]\" rows=\"20\" required>";
                    echo twig_escape_filter($this->env, (($__internal_compile_16 = ($context["values"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["name"]] ?? null) : null), "html", null, true);
                    echo "</textarea>
        </div>
        ";
                } else {
                    // line 54
                    echo "        <label class=\"form-label col-3 col-form-label\" for=\"el-";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = $context["element"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[1] ?? null) : null), "label", [], "any", false, false, false, 54), "html", null, true);
                    if (twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = $context["element"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[1] ?? null) : null), "description", [], "any", false, false, false, 54)) {
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = $context["element"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[1] ?? null) : null), "description", [], "any", false, false, false, 54), "html", null, true);
                    }
                    echo "</label>
        <div class=\"col\">
            <input class=\"form-control\" id=\"el-";
                    // line 56
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" type=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_20 = $context["element"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[0] ?? null) : null), "html", null, true);
                    echo "\" name=\"config[";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_21 = ($context["values"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[$context["name"]] ?? null) : null), "html", null, true);
                    echo "\"";
                    if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], 1, [], "array", false, true, false, 56), "required", [], "any", true, true, false, 56) && ( !twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = $context["element"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[1] ?? null) : null), "required", [], "any", false, false, false, 56) == "false"))) {
                        echo " required";
                    }
                    echo ">
        </div>
        ";
                }
                // line 59
                echo "    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 63
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
            // line 64
            echo "    ";
            $context["c"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "currency_get", [["code" => ($context["currency"] ?? null)]], "method", false, false, false, 64);
            // line 65
            echo "    ";
            $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["price"] ?? null));
            // line 66
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 66) == 1)) {
                // line 67
                echo "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "2", ".", "");
                // line 68
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 68) == 2)) {
                // line 69
                echo "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "2", ".", ",");
                // line 70
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 70) == 3)) {
                // line 71
                echo "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "2", ",", ".");
                // line 72
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 72) == 4)) {
                // line 73
                echo "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "0", "", ",");
                // line 74
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 74) == 5)) {
                // line 75
                echo "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), 0, "", "");
                // line 76
                echo "    ";
            }
            // line 77
            echo "    ";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "format", [], "any", false, false, false, 77), ["{{price}}" => ($context["p"] ?? null)]), "html", null, true);
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 80
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
            // line 81
            echo "    ";
            if ((($context["currency"] ?? null) == null)) {
                // line 82
                echo "        ";
                $context["c"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "cart_get_currency", [], "any", false, false, false, 82);
                // line 83
                echo "    ";
            } else {
                // line 84
                echo "        ";
                $context["c"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "currency_get", [["code" => ($context["currency"] ?? null)]], "method", false, false, false, 84);
                // line 85
                echo "    ";
            }
            // line 86
            echo "
    ";
            // line 87
            $context["p"] = (($context["price"] ?? null) * twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "conversion_rate", [], "any", false, false, false, 87));
            // line 88
            echo "
    ";
            // line 89
            if ((twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 89) == 1)) {
                // line 90
                echo "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "2", ".", "");
                // line 91
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 91) == 2)) {
                // line 92
                echo "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "2", ".", ",");
                // line 93
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 93) == 3)) {
                // line 94
                echo "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "2", ",", ".");
                // line 95
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 95) == 4)) {
                // line 96
                echo "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "0", "", ",");
                // line 97
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 97) == 5)) {
                // line 98
                echo "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), 0, "", "");
                // line 99
                echo "    ";
            }
            // line 100
            echo "
    ";
            // line 101
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "format", [], "any", false, false, false, 101), ["{{price}}" => ($context["p"] ?? null)]), "html", null, true);
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 104
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
            // line 105
            echo "    ";
            $context["status"] = twig_trim_filter(twig_title_string_filter($this->env, twig_replace_filter(($context["status"] ?? null), ["_" => " "])));
            // line 106
            echo "    ";
            if ((($context["status"] ?? null) == "Active")) {
                // line 107
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Active"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 108
($context["status"] ?? null) == "Pending Setup")) {
                // line 109
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Pending Setup"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 110
($context["status"] ?? null) == "Failed Setup")) {
                // line 111
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Failed Setup"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 112
($context["status"] ?? null) == "Failed Renew")) {
                // line 113
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Failed Renewal"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 114
($context["status"] ?? null) == "Suspended")) {
                // line 115
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Suspended"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 116
($context["status"] ?? null) == "Canceled")) {
                // line 117
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Canceled"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 118
($context["status"] ?? null) == "Paid")) {
                // line 119
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Paid"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 120
($context["status"] ?? null) == "Unpaid")) {
                // line 121
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Unpaid"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 122
($context["status"] ?? null) == "Refunded")) {
                // line 123
                echo "        ";
                echo twig_escape_filter($this->env, __trans("Refunded"), "html", null, true);
                echo "
    ";
            } else {
                // line 125
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

    // line 129
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
            // line 130
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_period_title", [["code" => ($context["period"] ?? null)]], "method", false, false, false, 130), "html", null, true);
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 133
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
            // line 134
            echo "
";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, ($context["text"] ?? null), "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 136
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

    // line 140
    public function macro_bb_editor($__selector__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "selector" => $__selector__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 141
            if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "wysiwyg"]], "method", false, false, false, 141)) {
                // line 142
                $this->loadTemplate("mod_wysiwyg_js.html.twig", "macro_functions.html.twig", 142)->display(twig_array_merge($context, ["class" => twig_trim_filter(($context["selector"] ?? null), ".#")]));
            } else {
                // line 144
                echo "<!-- No WYSIWYG, no fancy stuff. Enable the WYSIWYG extension for a better management experience. -->
";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 148
    public function macro_table_search(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 149
            echo "<div style=\"position: relative;\">
    <div class=\"dataTables_filter\">
        <form method=\"get\" action=\"\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 152
            echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"_url\" value=\"";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 153), "html", null, true);
            echo "\"/>
            <label>";
            // line 154
            echo twig_escape_filter($this->env, __trans("Search:"), "html", null, true);
            echo " <input type=\"text\" name=\"search\" placeholder=\"";
            echo twig_escape_filter($this->env, __trans("Enter search text..."), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "search", [], "any", false, false, false, 154), "html", null, true);
            echo "\"><div class=\"srch\"></div></label>
        </form>
    </div>
</div>
";

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
        return array (  756 => 154,  752 => 153,  748 => 152,  743 => 149,  731 => 148,  720 => 144,  717 => 142,  715 => 141,  702 => 140,  686 => 136,  681 => 135,  678 => 134,  665 => 133,  653 => 130,  640 => 129,  627 => 125,  621 => 123,  619 => 122,  614 => 121,  612 => 120,  607 => 119,  605 => 118,  600 => 117,  598 => 116,  593 => 115,  591 => 114,  586 => 113,  584 => 112,  579 => 111,  577 => 110,  572 => 109,  570 => 108,  565 => 107,  562 => 106,  559 => 105,  546 => 104,  535 => 101,  532 => 100,  529 => 99,  526 => 98,  523 => 97,  520 => 96,  517 => 95,  514 => 94,  511 => 93,  508 => 92,  505 => 91,  502 => 90,  500 => 89,  497 => 88,  495 => 87,  492 => 86,  489 => 85,  486 => 84,  483 => 83,  480 => 82,  477 => 81,  463 => 80,  451 => 77,  448 => 76,  445 => 75,  442 => 74,  439 => 73,  436 => 72,  433 => 71,  430 => 70,  427 => 69,  424 => 68,  421 => 67,  418 => 66,  415 => 65,  412 => 64,  398 => 63,  384 => 59,  368 => 56,  356 => 54,  346 => 51,  334 => 49,  332 => 48,  329 => 47,  318 => 44,  306 => 43,  303 => 42,  299 => 41,  289 => 39,  287 => 38,  283 => 36,  268 => 34,  264 => 33,  260 => 32,  250 => 30,  248 => 29,  245 => 28,  240 => 27,  226 => 26,  216 => 23,  199 => 21,  195 => 20,  186 => 19,  170 => 18,  160 => 15,  143 => 13,  138 => 12,  132 => 11,  121 => 10,  104 => 9,  91 => 5,  85 => 3,  82 => 2,  69 => 1,  64 => 147,  61 => 139,  58 => 132,  55 => 128,  52 => 103,  49 => 79,  46 => 62,  43 => 25,  40 => 17,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "macro_functions.html.twig", "/var/www/themes/admin_default/html/macro_functions.html.twig");
    }
}
