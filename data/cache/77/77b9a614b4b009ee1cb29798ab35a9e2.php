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

/* partial_pagination.html.twig */
class __TwigTemplate_37ab491b26e057348e7317f63c9543ed extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pages", [], "any", false, false, false, 1) > 1)) {
            // line 2
            $context["page"] = twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "page", [], "any", false, false, false, 2);
            // line 3
            echo "<ul class=\"pagination\">
   <li class=\"page-item ";
            // line 4
            if (( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 4) || (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 4) == 1))) {
                echo "disabled";
            }
            echo "\">
      <a class=\"page-link\" href=\"";
            // line 5
            if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 5) && (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 5) != 1))) {
                echo "?";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge([], ($context["request"] ?? null)), ["page" => 1]));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 5) == false)) {
                        echo "&";
                    }
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
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\">«</a>
   </li>
   <li class=\"page-item ";
            // line 7
            if (( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 7) || (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 7) == 1))) {
                echo "disabled";
            }
            echo "\">
      <a class=\"page-link\" href=\"";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 8) && (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 8) != "1"))) {
                echo "?";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge([], ($context["request"] ?? null)), ["page" => (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 8) - 1)]));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 8) == false)) {
                        echo "&";
                    }
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
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\">
         <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
            <path d=\"M15 6l-6 6l6 6\" />
         </svg>
      </a>
   </li>
   ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pages", [], "any", false, false, false, 15)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 16
                echo "   <li class=\"page-item ";
                if (($context["i"] == ($context["page"] ?? null))) {
                    echo "active";
                }
                echo "\">
      ";
                // line 17
                if ((($context["i"] == twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 17)) || ( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 17) && ($context["i"] == 1)))) {
                    // line 18
                    echo "      <a class=\"page-link\" href=\"#\" onclick=\"return false;\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
      ";
                } else {
                    // line 20
                    echo "      <a class=\"page-link\" href=\"?";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge([], ($context["request"] ?? null)), ["page" => $context["i"]]));
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
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                        echo "=";
                        echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 20) == false)) {
                            echo "&";
                        }
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
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a>
      ";
                }
                // line 22
                echo "   </li>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "   <li class=\"page-item ";
            if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 24) == twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pages", [], "any", false, false, false, 24))) {
                echo "disabled";
            }
            echo "\">
      <a class=\"page-link\" href=\"";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 25) && (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 25) != twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pages", [], "any", false, false, false, 25)))) {
                echo "?";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge([], ($context["request"] ?? null)), ["page" => (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 25) + 1)]));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 25) == false)) {
                        echo "&";
                    }
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
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } elseif ( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 25)) {
                echo "?";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge([], ($context["request"] ?? null)), ["page" => 2]));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 25) == false)) {
                        echo "&";
                    }
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
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\">
         <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
            <path d=\"M9 6l6 6l-6 6\" />
         </svg>
      </a>
   </li>
   <li class=\"page-item ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 32) == twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pages", [], "any", false, false, false, 32))) {
                echo "disabled";
            }
            echo "\">
      <a class=\"page-link\" href=\"";
            // line 33
            if (( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 33) || (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 33) != twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pages", [], "any", false, false, false, 33)))) {
                echo "?";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge([], ($context["request"] ?? null)), ["page" => twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pages", [], "any", false, false, false, 33)]));
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
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "=";
                    echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 33) == false)) {
                        echo "&";
                    }
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
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\">»</a>
   </li>
</ul>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partial_pagination.html.twig";
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
        return array (  311 => 33,  305 => 32,  221 => 25,  214 => 24,  207 => 22,  166 => 20,  160 => 18,  158 => 17,  151 => 16,  147 => 15,  99 => 8,  93 => 7,  50 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partial_pagination.html.twig", "/var/www/themes/infobia/html/partial_pagination.html.twig");
    }
}
