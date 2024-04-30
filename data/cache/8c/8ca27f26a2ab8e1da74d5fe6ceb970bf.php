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

/* partial_menu.html.twig */
class __TwigTemplate_00a625684918f7dc36997ebada19bc0f extends Template
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
        echo "<div class=\"offcanvas-md offcanvas-end\" tabindex=\"-1\" id=\"sidebarMenu\">
    <div class=\"offcanvas-body d-md-flex flex-column overflow-y-auto\">
        <ul class=\"nav flex-column\">
            ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_dashboard", [], "any", false, false, false, 4)) {
            // line 5
            echo "                <li class=\"nav-item offcanvas-item\">
                    <a class=\"nav-link d-flex align-items-center gap-2\" href=\"";
            // line 6
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
            echo "\">
                        <svg class=\"svg-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M19,5V7H15V5H19M9,5V11H5V5H9M19,13V19H15V13H19M9,17V19H5V17H9M21,3H13V9H21V3M11,3H3V13H11V3M21,11H13V21H21V11M11,15H3V21H11V15Z\" /></svg>
                        ";
            // line 8
            echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        // line 12
        echo "
            ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_order", [], "any", false, false, false, 13)) {
            // line 14
            echo "                <li class=\"nav-item offcanvas-item\">
                    <a class=\"nav-link d-flex align-items-center gap-2\" href=\"";
            // line 15
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
            echo "\">
                        <svg class=\"svg-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z\" /></svg>
                        ";
            // line 17
            echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        // line 21
        echo "
            ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_support", [], "any", false, false, false, 22)) {
            // line 23
            echo "                <li class=\"nav-item offcanvas-item\">
                    <a class=\"nav-link d-flex align-items-center gap-2\" href=\"";
            // line 24
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/support");
            echo "\">
                        <svg class=\"svg-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M19.79,15.41C20.74,13.24 20.74,10.75 19.79,8.59L17.05,9.83C17.65,11.21 17.65,12.78 17.06,14.17L19.79,15.41M15.42,4.21C13.25,3.26 10.76,3.26 8.59,4.21L9.83,6.94C11.22,6.35 12.79,6.35 14.18,6.95L15.42,4.21M4.21,8.58C3.26,10.76 3.26,13.24 4.21,15.42L6.95,14.17C6.35,12.79 6.35,11.21 6.95,9.82L4.21,8.58M8.59,19.79C10.76,20.74 13.25,20.74 15.42,19.78L14.18,17.05C12.8,17.65 11.22,17.65 9.84,17.06L8.59,19.79M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8Z\" /></svg>
                        ";
            // line 26
            echo twig_escape_filter($this->env, __trans("Support"), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        // line 30
        echo "
            ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_services", [], "any", false, false, false, 31)) {
            // line 32
            echo "                <li class=\"nav-item offcanvas-item\">
                    <a class=\"nav-link d-flex align-items-center gap-2\" href=\"";
            // line 33
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order/service");
            echo "\">
                        <svg class=\"svg-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M16.7 4.5L19.5 7.3L16.7 10.1L13.9 7.3L16.7 4.5M9 5V9H5V5H9M19 15V19H15V15H19M16.7 1.7L11 7.3L16.7 13H13V21H21V13H16.7L22.3 7.3L16.7 1.7M11 3H3V11H11V3M9 15V19H5V15H9M11 13H3V21H11V13Z\" /></svg>
                        ";
            // line 35
            echo twig_escape_filter($this->env, __trans("Services"), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        // line 39
        echo "
            ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_invoices", [], "any", false, false, false, 40)) {
            // line 41
            echo "                <li class=\"nav-item offcanvas-item\">
                    <a class=\"nav-link d-flex align-items-center gap-2\" href=\"";
            // line 42
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/invoice");
            echo "\">
                        <svg class=\"svg-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M19.5 3.5L18 2L16.5 3.5L15 2L13.5 3.5L12 2L10.5 3.5L9 2L7.5 3.5L6 2L4.5 3.5L3 2V22L4.5 20.5L6 22L7.5 20.5L9 22L10.5 20.5L12 22L13.5 20.5L15 22L16.5 20.5L18 22L19.5 20.5L21 22V2L19.5 3.5M19 19H5V5H19V19M6 15H18V17H6M6 11H18V13H6M6 7H18V9H6V7Z\" /></svg>
                        ";
            // line 44
            echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        // line 48
        echo "
            ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_emails", [], "any", false, false, false, 49)) {
            // line 50
            echo "                <li class=\"nav-item offcanvas-item\">
                    <a class=\"nav-link d-flex align-items-center gap-2\" href=\"";
            // line 51
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/email");
            echo "\">
                        <svg class=\"svg-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M21.03 6.29L12 .64L2.97 6.29C2.39 6.64 2 7.27 2 8V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V8C22 7.27 21.61 6.64 21.03 6.29M20 18H4V10L12 15L20 10V18M12 13L4 8L12 3L20 8L12 13Z\" /></svg>
                        ";
            // line 53
            echo twig_escape_filter($this->env, __trans("Email"), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        // line 57
        echo "
            ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_payments", [], "any", false, false, false, 58)) {
            // line 59
            echo "                <li class=\"nav-item offcanvas-item\">
                    <a class=\"nav-link d-flex align-items-center gap-2\" href=\"";
            // line 60
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/client/balance");
            echo "\">
                        <svg class=\"svg-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M15.5 15.5C16.33 15.5 17 14.83 17 14C17 13.17 16.33 12.5 15.5 12.5C14.67 12.5 14 13.17 14 14C14 14.83 14.67 15.5 15.5 15.5M7 3H17C18.11 3 19 3.9 19 5V7C20.11 7 21 7.9 21 9V19C21 20.11 20.11 21 19 21H7C4.79 21 3 19.21 3 17V7C3 4.79 4.79 3 7 3M17 7V5H7C5.9 5 5 5.9 5 7V7.54C5.59 7.2 6.27 7 7 7H17M5 17C5 18.11 5.9 19 7 19H19V9H7C5.9 9 5 9.9 5 11V17Z\" /></svg>
                        ";
            // line 62
            echo twig_escape_filter($this->env, __trans("Wallet"), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        // line 66
        echo "
            ";
        // line 67
        if ((twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "news"]], "method", false, false, false, 67) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_news", [], "any", false, false, false, 67))) {
            // line 68
            echo "                <li class=\"nav-item offcanvas-item\">
                    <a class=\"nav-link d-flex align-items-center gap-2\" href=\"";
            // line 69
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
            echo "\">
                        <svg class=\"svg-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M20 5L20 19L4 19L4 5H20M20 3H4C2.89 3 2 3.89 2 5V19C2 20.11 2.89 21 4 21H20C21.11 21 22 20.11 22 19V5C22 3.89 21.11 3 20 3M18 15H6V17H18V15M10 7H6V13H10V7M12 9H18V7H12V9M18 11H12V13H18V11Z\" /></svg>
                        ";
            // line 71
            echo twig_escape_filter($this->env, __trans("News"), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        // line 75
        echo "
            ";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "support_kb_enabled", [], "method", false, false, false, 76) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_kb", [], "any", false, false, false, 76))) {
            // line 77
            echo "                <li class=\"nav-item offcanvas-item\">
                    <a class=\"nav-link d-flex align-items-center gap-2\" href=\"";
            // line 78
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/kb");
            echo "\">
                        <svg class=\"svg-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M19 1L14 6V17L19 12.5V1M21 5V18.5C19.9 18.15 18.7 18 17.5 18C15.8 18 13.35 18.65 12 19.5V6C10.55 4.9 8.45 4.5 6.5 4.5C4.55 4.5 2.45 4.9 1 6V20.65C1 20.9 1.25 21.15 1.5 21.15C1.6 21.15 1.65 21.1 1.75 21.1C3.1 20.45 5.05 20 6.5 20C8.45 20 10.55 20.4 12 21.5C13.35 20.65 15.8 20 17.5 20C19.15 20 20.85 20.3 22.25 21.05C22.35 21.1 22.4 21.1 22.5 21.1C22.75 21.1 23 20.85 23 20.6V6C22.4 5.55 21.75 5.25 21 5M10 18.41C8.75 18.09 7.5 18 6.5 18C5.44 18 4.18 18.19 3 18.5V7.13C3.91 6.73 5.14 6.5 6.5 6.5C7.86 6.5 9.09 6.73 10 7.13V18.41Z\" /></svg>
                        ";
            // line 80
            echo twig_escape_filter($this->env, __trans("Knowledge base"), "html", null, true);
            echo "
                    </a>
                </li>
            ";
        }
        // line 84
        echo "
            ";
        // line 85
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sidebar_balance_enabled", [], "any", false, false, false, 85) && ($context["client"] ?? null))) {
            // line 86
            echo "                <li class=\"pt-3 ps-3\">
                    <h5 class=\"text-secondary d-block pb-1\">";
            // line 87
            echo twig_escape_filter($this->env, __trans("Account balance"), "html", null, true);
            echo "</h5>
                    <h4><strong>";
            // line 88
            echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "balance", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 88));
            echo "</strong></h4>
                </li>
            ";
        }
        // line 91
        echo "
            ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sidebar_note_enabled", [], "any", false, false, false, 92)) {
            // line 93
            echo "                <li class=\"pt-3 ps-3\">
                    <h5 class=\"text-secondary d-block pb-1\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sidebar_note_title", [], "any", false, false, false, 94), "html", null, true);
            echo "</h5>
                    <span>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sidebar_note_content", [], "any", false, false, false, 95), "html", null, true);
            echo "</span>
                </li>
            ";
        }
        // line 98
        echo "        </ul>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partial_menu.html.twig";
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
        return array (  255 => 98,  249 => 95,  245 => 94,  242 => 93,  240 => 92,  237 => 91,  231 => 88,  227 => 87,  224 => 86,  222 => 85,  219 => 84,  212 => 80,  207 => 78,  204 => 77,  202 => 76,  199 => 75,  192 => 71,  187 => 69,  184 => 68,  182 => 67,  179 => 66,  172 => 62,  167 => 60,  164 => 59,  162 => 58,  159 => 57,  152 => 53,  147 => 51,  144 => 50,  142 => 49,  139 => 48,  132 => 44,  127 => 42,  124 => 41,  122 => 40,  119 => 39,  112 => 35,  107 => 33,  104 => 32,  102 => 31,  99 => 30,  92 => 26,  87 => 24,  84 => 23,  82 => 22,  79 => 21,  72 => 17,  67 => 15,  64 => 14,  62 => 13,  59 => 12,  52 => 8,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partial_menu.html.twig", "/var/www/themes/huraga/html/partial_menu.html.twig");
    }
}
