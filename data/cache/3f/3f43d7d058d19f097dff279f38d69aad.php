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

/* mod_wysiwyg_js.html.twig */
class __TwigTemplate_7f1ca84efab0ed0c04d7b31e40de2cfe extends Template
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
        echo $this->extensions['Box_TwigExtensions']->twig_script_tag($this->extensions['Box_TwigExtensions']->twig_mod_asset_url("ckeditor/ckeditor.js", "wysiwyg"));
        echo "
<script type=\"text/javascript\">
    const editors = [];
    document.addEventListener(\"DOMContentLoaded\", function () {
        document.querySelectorAll('.";
        // line 5
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "').forEach(function (element) {
            let required = false;
            CKEditor
                .create(element)
                .then(editor => {
                    if (element.hasAttribute('required')) {
                        element.removeAttribute('required');
                        required = true;
                    }
                    editors[element.name] = { editor, 'required': required };
                })
                .catch(error => { console.error(error) });
        });

        if (localStorage.getItem('theme') === 'dark') {
            setTimeout(() => {
                document.querySelectorAll('.ck-editor__main').forEach(function (element) {
                    element.style.color=\"#1d273b\";
                });
            }, 1000);
        }
    });
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_wysiwyg_js.html.twig";
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
        return array (  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_wysiwyg_js.html.twig", "/var/www/modules/Wysiwyg/html_admin/mod_wysiwyg_js.html.twig");
    }
}
