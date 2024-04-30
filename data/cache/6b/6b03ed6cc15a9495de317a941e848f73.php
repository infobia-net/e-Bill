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

/* mod_cookieconsent_index.html.twig */
class __TwigTemplate_8b03a7dadd6742928bf5a4a8655a820f extends Template
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
        echo "<div class=\"offcanvas offcanvas-bottom h-auto\" tabindex=\"-1\" id=\"offcanvasBottom\" aria-modal=\"true\" role=\"dialog\">
   <div class=\"offcanvas-body\">
      <div class=\"container\">
         <div class=\"row align-items-center\">
            <div class=\"col\">
               ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "cookieconsent_message", [], "any", false, false, false, 6), "html", null, true);
        echo "
            </div>
            <div class=\"col-auto\">
               <button type=\"button\" id=\"close-cookie-consent-btn\" class=\"btn btn-primary\" data-bs-dismiss=\"offcanvas\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                     <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                     <path d=\"M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z\"></path>
                     <path d=\"M10 10l4 4m0 -4l-4 4\"></path>
                  </svg>
                  Close
               </button>
            </div>
         </div>
      </div>
   </div>
</div>
<script type=\"text/javascript\">
   const offcanvas = document.querySelector('#offcanvasBottom');
   
   if (localStorage.getItem(\"cookie-consent\") != 1) {
       offcanvas.classList.add('show');
   }
   
   document.querySelector('#close-cookie-consent-btn').addEventListener('click', () => {
       localStorage.setItem('cookie-consent', 1);
       offcanvas.classList.remove('show');
   });
</script>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_cookieconsent_index.html.twig";
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
        return array (  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_cookieconsent_index.html.twig", "/var/www/themes/infobia/html/mod_cookieconsent_index.html.twig");
    }
}
