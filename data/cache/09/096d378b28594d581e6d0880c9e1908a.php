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

/* layout_default.html.twig */
class __TwigTemplate_3bd013586931ea447473bf622c8badc7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'meta_description' => [$this, 'block_meta_description'],
            'meta_keywords' => [$this, 'block_meta_keywords'],
            'js' => [$this, 'block_js'],
            'opengraph' => [$this, 'block_opengraph'],
            'head' => [$this, 'block_head'],
            'content_banner' => [$this, 'block_content_banner'],
            'sidebar' => [$this, 'block_sidebar'],
            'sidebar2' => [$this, 'block_sidebar2'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
            'content_after' => [$this, 'block_content_after'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["company"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 5
        $this->displayBlock('meta_title', $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>

    <meta property=\"bb:url\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "\"/>
    <meta property=\"bb:client_area\" content=\"";
        // line 8
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\"/>
    
    <meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\" />
    <meta name=\"keywords\" content=\"";
        // line 11
        $this->displayBlock('meta_keywords', $context, $blocks);
        echo "\" />
    <meta name=\"robots\" content=\"";
        // line 12
        if (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_robots", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_robots", [], "any", false, false, false, 12))) : (""))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_robots", [], "any", false, false, false, 12), "html", null, true);
        } else {
            echo "index, follow";
        }
        echo "\" />
\t<meta name=\"author\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_author", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />

    <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "favicon.ico");
        echo "\" />
\t
\t<!-- Bootstrap Core CSS -->
\t";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "theme", [], "any", false, false, false, 19) != "default")) {
            echo "<link href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/themes/theme-");
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "theme", [], "any", false, false, false, 19), "html", null, true);
            echo ".min.css\" rel=\"stylesheet\">
\t";
        } else {
            // line 20
            echo "<link href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/bootstrap.min.css");
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 22
        echo "\t
\t<!-- Bootstrap Markdown Editor -->
    <link href=\"";
        // line 24
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/bootstrap-markdown.min.css");
        echo "\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link href=\"";
        // line 27
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/modern-business.css");
        echo "\" rel=\"stylesheet\">
\t
\t";
        // line 29
        if (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_css", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_css", [], "any", false, false, false, 29))) : (""))) {
            // line 30
            echo "\t<!-- Custom CSS -->
\t<style>
\t\t";
            // line 32
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_css", [], "any", false, false, false, 32);
            echo "
\t</style>
\t";
        }
        // line 35
        echo "
    <!-- Custom Fonts -->
    <link href=\"";
        // line 37
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "font-awesome/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t
\t<!-- jQuery -->
    <script src=\"";
        // line 40
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/jquery.js");
        echo "\"></script>
\t
\t<!-- BoxBilling -->
    <script src=\"";
        // line 43
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/bb-jquery.js");
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 46
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/bootstrap.min.js");
        echo "\"></script>
\t
\t<!-- Bootstrap Markdown Editor -->
\t<script src=\"";
        // line 49
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/bootstrap-markdown.js");
        echo "\"></script>
\t<script src=\"";
        // line 50
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/to-markdown.js");
        echo "\"></script>
\t<script src=\"";
        // line 51
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/markdown.js");
        echo "\"></script>
\t
\t<!-- Bootbox Alerts JavaScript -->
    <script src=\"";
        // line 54
        echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "js/bootbox.min.js");
        echo "\"></script>
\t
\t";
        // line 56
        if (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", false, false, false, 56))) : (""))) {
            // line 57
            echo "\t<!-- Custom Javascript -->
\t<script>
\t\t";
            // line 59
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", false, false, false, 59);
            echo "
\t</script>
\t";
        }
        // line 62
        echo "\t
\t";
        // line 63
        $this->displayBlock('js', $context, $blocks);
        // line 64
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    ";
        // line 72
        $this->displayBlock('opengraph', $context, $blocks);
        // line 73
        echo "    ";
        $this->displayBlock('head', $context, $blocks);
        // line 74
        echo "</head>

<body>
";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "cookieconsent"]], "method", false, false, false, 77)) {
            // line 78
            echo "    ";
            $__internal_compile_0 = null;
            try {
                $__internal_compile_0 =                 $this->loadTemplate("mod_cookieconsent_index.html.twig", "layout_default.html.twig", 78);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_0) {
                $__internal_compile_0->display($context);
            }
        }
        // line 80
        echo "
\t<!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#mainmenu\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 92
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 92), "html", null, true);
        echo "</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"mainmenu\">
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t<li><a href=\"";
        // line 97
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("cart");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, __trans("Shopping cart"), "html", null, true);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> ";
        echo twig_escape_filter($this->env, __trans("Shopping cart"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_home", [], "any", false, false, false, 98)) {
            echo "<li class=\"visible-xs\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, __trans("Home"), "html", null, true);
            echo "\" ><i class=\"fa fa-home\"></i> ";
            echo twig_escape_filter($this->env, __trans("Home"), "html", null, true);
            echo "</a></li>";
        }
        // line 99
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_order", [], "any", false, false, false, 99)) {
            echo "<li class=\"visible-xs\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
            echo "\" ><i class=\"fa fa-shopping-cart\"></i> ";
            echo twig_escape_filter($this->env, __trans("Order"), "html", null, true);
            echo "</a></li>";
        }
        // line 100
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_blog", [], "any", false, false, false, 100) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "news"]], "method", false, false, false, 100))) {
            echo "<li class=\"visible-xs\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, __trans("Blog"), "html", null, true);
            echo "\" ><i class=\"fa fa-bullhorn\"></i> ";
            echo twig_escape_filter($this->env, __trans("Blog"), "html", null, true);
            echo "</a></li>";
        }
        // line 101
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_forum", [], "any", false, false, false, 101) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "forum"]], "method", false, false, false, 101))) {
            echo "<li class=\"visible-xs\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/forum");
            echo "\"><i class=\"fa fa-comments\"></i> ";
            echo twig_escape_filter($this->env, __trans("Forum"), "html", null, true);
            echo "</a></li>";
        }
        // line 102
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_kb", [], "any", false, false, false, 102) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "kb"]], "method", false, false, false, 102))) {
            echo "<li class=\"visible-xs\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("kb");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, __trans("Knowledge Base"), "html", null, true);
            echo "\"><i class=\"fa fa-graduation-cap\"></i> ";
            echo twig_escape_filter($this->env, __trans("Knowledge Base"), "html", null, true);
            echo "</a></li>";
        }
        // line 103
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_contact", [], "any", false, false, false, 103)) {
            echo "<li class=\"visible-xs\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/support/contact-us");
            echo "\"><i class=\"fa fa-envelope\"></i> ";
            echo twig_escape_filter($this->env, __trans("Contact us"), "html", null, true);
            echo "</a></li>";
        }
        // line 104
        echo "\t\t\t\t\t";
        if (($context["client"] ?? null)) {
            // line 105
            echo "\t\t\t\t\t";
            $context["profile"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_get", [], "any", false, false, false, 105);
            // line 106
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_services", [], "any", false, false, false, 106)) {
                echo "<li class=\"visible-xs\"><a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, __trans("Services"), "html", null, true);
                echo "\"><i class=\"fa fa-cog\"></i> ";
                echo twig_escape_filter($this->env, __trans("Services"), "html", null, true);
                echo "</a></li>";
            }
            // line 107
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_support", [], "any", false, false, false, 107)) {
                echo "<li class=\"visible-xs\"><a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, __trans("Tickets"), "html", null, true);
                echo "\"><i class=\"fa fa-life-ring\"></i> ";
                echo twig_escape_filter($this->env, __trans("Support"), "html", null, true);
                echo "</a></li>";
            }
            // line 108
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_invoices", [], "any", false, false, false, 108)) {
                echo "<li class=\"visible-xs\"><a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
                echo "\"><i class=\"fa fa-credit-card\"></i> ";
                echo twig_escape_filter($this->env, __trans("Invoices"), "html", null, true);
                echo "</a></li>";
            }
            // line 109
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
            echo "\"><i class=\"fa fa-home\"></i> ";
            echo twig_escape_filter($this->env, __trans("Dashboard"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 110
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("cart");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, __trans("Shopping cart"), "html", null, true);
            echo "\"><i class=\"fa fa-shopping-cart\"></i> ";
            echo twig_escape_filter($this->env, __trans("Shopping cart"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user\"></i> ";
            // line 112
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "first_name", [], "any", false, false, false, 112) . " ") . twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "last_name", [], "any", false, false, false, 112)), "html", null, true);
            echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 114
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/me");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, __trans("Profile"), "html", null, true);
            echo "\"><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, __trans("Manage profile"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
            // line 115
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_client_emails", [], "any", false, false, false, 115)) {
                echo "<li><a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("email");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, __trans("Emails"), "html", null, true);
                echo "\"><i class=\"fa fa-envelope\"></i> ";
                echo twig_escape_filter($this->env, __trans("Emails"), "html", null, true);
                echo "</a></li>";
            }
            // line 116
            echo "\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_client_balance", [], "any", false, false, false, 116)) {
                echo "<li><a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/balance");
                echo "\"><i class=\"fa fa-bank\"></i> ";
                echo twig_escape_filter($this->env, __trans("Balance"), "html", null, true);
                echo ": ";
                echo $this->extensions['Box_TwigExtensions']->twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "balance", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 116));
                echo "</a></li>";
            }
            // line 117
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/logout");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, __trans("Sign out"), "html", null, true);
            echo "\"><i class=\"fa fa-sign-out\"></i> ";
            echo twig_escape_filter($this->env, __trans("Sign out"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        } else {
            // line 120
            echo "\t\t\t
\t\t\t\t\t\t<li><a href=\"\" data-toggle=\"modal\" data-target=\"#login\">";
            // line 121
            echo twig_escape_filter($this->env, __trans("Sign in"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 122
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login", ["register" => 1]);
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Register"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 124
        echo "\t\t\t\t</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

";
        // line 131
        $this->displayBlock('content_banner', $context, $blocks);
        // line 132
        echo "<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t
\t\t</div>
\t\t
\t";
        // line 138
        if ((($context["side_menu"] ?? null) == "hidden")) {
            // line 139
            echo "\t\t<div class=\"col-sm-12\">
\t";
        } else {
            // line 141
            echo "\t\t<div class=\"col-sm-3\">
\t\t\t";
            // line 142
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 142)) {
                echo "<h1><a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 142), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 142), "html", null, true);
                echo "\" class=\"img-responsive center-block\" /></a></h1>
\t\t\t";
            } else {
                // line 143
                echo "<h1><a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
                echo "\"><img src=\" ";
                echo $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "images/logo.png");
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 143), "html", null, true);
                echo "\" class=\"img-responsive center-block\" /></a></h1>
\t\t\t";
            }
            // line 145
            echo "\t\t\t<div class=\"hidden-xs\">";
            $this->loadTemplate("partial_menu.html.twig", "layout_default.html.twig", 145)->display($context);
            echo "</div>

\t\t\t<!--";
            // line 147
            $context["languages"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_languages", [], "any", false, false, false, 147);
            // line 148
            echo "\t\t\t\t";
            if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
                // line 149
                echo "\t\t\t\t\t<h2>";
                echo twig_escape_filter($this->env, __trans("Select language"), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t\t<select name=\"lang\">
\t\t\t\t\t\t\t";
                // line 151
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                    // line 152
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, __trans($context["lang"]), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "\t\t\t\t\t\t\t</select>
\t\t\t\t";
            }
            // line 155
            echo "-->
\t\t\t
\t\t\t";
            // line 157
            $this->displayBlock('sidebar', $context, $blocks);
            // line 158
            echo "\t\t\t
\t\t\t";
            // line 159
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sidebar_note_enabled", [], "any", false, false, false, 159)) {
                // line 160
                echo "            <div class=\"well well-sm\">
                <h4>";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sidebar_note_title", [], "any", false, false, false, 161), "html", null, true);
                echo "</h4>
                <p>";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sidebar_note_content", [], "any", false, false, false, 162), "html", null, true);
                echo "</p>
            </div>
            ";
            }
            // line 164
            echo "\t
\t\t\t
\t\t\t";
            // line 166
            $this->displayBlock('sidebar2', $context, $blocks);
            // line 167
            echo "\t\t</div>
\t\t<div class=\"col-sm-9\">
\t";
        }
        // line 169
        echo "\t
\t\t\t";
        // line 170
        $this->displayBlock('content_before', $context, $blocks);
        // line 171
        echo "\t\t\t";
        $this->loadTemplate("partial_message.html.twig", "layout_default.html.twig", 171)->display($context);
        // line 172
        echo "\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 173
        echo "\t\t\t";
        $this->displayBlock('content_after', $context, $blocks);
        // line 174
        echo "
\t\t\t";
        // line 175
        if ( !($context["client"] ?? null)) {
            // line 176
            echo "\t\t\t<div class=\"modal fade\" id=\"login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, __trans("Login to client area"), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">";
            // line 181
            echo twig_escape_filter($this->env, __trans("Login to client area"), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<form action=\"\" method=\"post\" class=\"api_form\" data-api-url=\"";
            // line 184
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/client/login");
            echo "\" data-api-reload=\"1\">
\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<label>";
            // line 187
            echo twig_escape_filter($this->env, __trans("Email address"), "html", null, true);
            echo ":</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" value=\"";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 188), "html", null, true);
            echo "\" required=\"required\" placeholder=\"";
            echo twig_escape_filter($this->env, __trans("Email address"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<label>";
            // line 193
            echo twig_escape_filter($this->env, __trans("Password"), "html", null, true);
            echo ":</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" value=\"\" required=\"required\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"remember\" value=\"1\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"";
            // line 201
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/login", ["register" => 1]);
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Create new account"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-warning\" href=\"";
            // line 202
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("reset-password");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Reset password"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 203
            echo twig_escape_filter($this->env, __trans("Sign in"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 210
        echo "\t\t</div>      
\t</div>

\t";
        // line 213
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_page_footer", [], "any", false, false, false, 213)) {
            // line 214
            echo "        <!-- Footer -->
\t\t<hr>
        <footer>
\t\t\t<div class=\"row text-center\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 220
            if (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", true, true, false, 220)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", false, false, false, 220))) : (""))) {
                echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", false, false, false, 220);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 221
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 221), "html", null, true);
                echo " - © ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), "Y"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 221), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 223
            echo "\t\t\t\t\t</p>
\t\t\t\t\t<ul class=\"list-inline\">
                        <li><a href=\"";
            // line 225
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/about-us");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("About us"), "html", null, true);
            echo "</a></li>
                        <li><a href=\"";
            // line 226
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/tos");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Terms and conditions"), "html", null, true);
            echo "</a></li>
                        <li><a href=\"";
            // line 227
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/privacy-policy");
            echo "\">";
            echo twig_escape_filter($this->env, __trans("Privacy policy"), "html", null, true);
            echo "</a></li><br />
\t\t\t\t\t\t";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 229
                echo "\t\t\t\t\t\t\t";
                if ((($__internal_compile_1 = ($context["settings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[(("footer_link_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 229)) . "_enabled")] ?? null) : null)) {
                    // line 230
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
                    // line 231
                    if ((twig_in_filter("http://", (($__internal_compile_2 = ($context["settings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[(("footer_link_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 231)) . "_page")] ?? null) : null)) || twig_in_filter("https://", (($__internal_compile_3 = ($context["settings"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[(("footer_link_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 231)) . "_page")] ?? null) : null)))) {
                        // line 232
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["settings"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[(("footer_link_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 232)) . "_page")] ?? null) : null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["settings"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[(("footer_link_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 232)) . "_title")] ?? null) : null), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 234
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter((($__internal_compile_6 = ($context["settings"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[(("footer_link_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 234)) . "_page")] ?? null) : null));
                        echo "\">";
                        echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["settings"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[(("footer_link_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 234)) . "_title")] ?? null) : null), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 236
                    echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                // line 238
                echo "\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "\t\t\t\t\t\t";
            // line 240
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "branding"]], "method", false, false, false, 240) || twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_branding_enabled", [], "any", false, false, false, 240))) {
                // line 241
                echo "\t\t\t\t\t\t\t<li><a href=\"http://www.boxbilling.com\" title=\"Billing Software\" target=\"_blank\">";
                echo twig_escape_filter($this->env, __trans("Powered by BoxBilling"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 243
            echo "                    </ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t";
            // line 246
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_to_top_enabled", [], "any", false, false, false, 246)) {
                echo "<a href=\"#top\" class=\"btn btn-default pull-right\"><i class=\"fa fa-arrow-up\"></i> ";
                echo twig_escape_filter($this->env, __trans("Top"), "html", null, true);
                echo "</a>";
            }
            // line 247
            echo "\t\t\t</div>
        </footer>
\t";
        }
        // line 250
        echo "    </div>
    <!-- /.container -->
<noscript>NOTE: Many features on BoxBilling require Javascript and cookies. You can enable both via your browser's preference settings.</noscript>
</body>
</html>";
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_description", [], "any", false, false, false, 10), "html", null, true);
    }

    // line 11
    public function block_meta_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_keywords", [], "any", false, false, false, 11), "html", null, true);
    }

    // line 63
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 72
    public function block_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 73
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 131
    public function block_content_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 157
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 166
    public function block_sidebar2($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 170
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 172
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 173
    public function block_content_after($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout_default.html.twig";
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
        return array (  870 => 173,  864 => 172,  858 => 170,  852 => 166,  846 => 157,  840 => 131,  834 => 73,  828 => 72,  822 => 63,  815 => 11,  808 => 10,  802 => 5,  794 => 250,  789 => 247,  783 => 246,  778 => 243,  772 => 241,  769 => 240,  767 => 239,  753 => 238,  749 => 236,  741 => 234,  733 => 232,  731 => 231,  728 => 230,  725 => 229,  708 => 228,  702 => 227,  696 => 226,  690 => 225,  686 => 223,  677 => 221,  671 => 220,  663 => 214,  661 => 213,  656 => 210,  646 => 203,  640 => 202,  634 => 201,  623 => 193,  613 => 188,  609 => 187,  603 => 184,  597 => 181,  588 => 176,  586 => 175,  583 => 174,  580 => 173,  577 => 172,  574 => 171,  572 => 170,  569 => 169,  564 => 167,  562 => 166,  558 => 164,  552 => 162,  548 => 161,  545 => 160,  543 => 159,  540 => 158,  538 => 157,  534 => 155,  530 => 154,  519 => 152,  515 => 151,  509 => 149,  506 => 148,  504 => 147,  498 => 145,  488 => 143,  477 => 142,  474 => 141,  470 => 139,  468 => 138,  460 => 132,  458 => 131,  449 => 124,  442 => 122,  438 => 121,  435 => 120,  423 => 117,  412 => 116,  402 => 115,  394 => 114,  389 => 112,  380 => 110,  371 => 109,  360 => 108,  349 => 107,  338 => 106,  335 => 105,  332 => 104,  323 => 103,  312 => 102,  303 => 101,  292 => 100,  281 => 99,  271 => 98,  263 => 97,  253 => 92,  239 => 80,  227 => 78,  225 => 77,  220 => 74,  217 => 73,  215 => 72,  205 => 64,  203 => 63,  200 => 62,  194 => 59,  190 => 57,  188 => 56,  183 => 54,  177 => 51,  173 => 50,  169 => 49,  163 => 46,  157 => 43,  151 => 40,  145 => 37,  141 => 35,  135 => 32,  131 => 30,  129 => 29,  124 => 27,  118 => 24,  114 => 22,  108 => 20,  100 => 19,  94 => 16,  88 => 13,  80 => 12,  76 => 11,  72 => 10,  67 => 8,  63 => 7,  56 => 5,  51 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout_default.html.twig", "/var/www/themes/fossbilling-bootstrap/html/layout_default.html.twig");
    }
}
