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

/* partial_batch_delete.html.twig */
class __TwigTemplate_67e903af00161ac94aeb7e4dbacb82b5 extends Template
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
        echo "<a class=\"btn btn-danger d-none\" id=\"batch-delete-selected-btn\">
    <svg class=\"icon\">
        <use xlink:href=\"#delete\"/>
    </svg>
    ";
        // line 5
        echo twig_escape_filter($this->env, __trans("Delete selected"), "html", null, true);
        echo "</a>

<script>
    document.addEventListener(\"DOMContentLoaded\", function () {

        const deleteBtn = document.getElementById('batch-delete-selected-btn');
        const masterCheckbox = document.querySelector('input.batch-delete-master-checkbox');
        const checkboxes = document.querySelectorAll('input.batch-delete-checkbox');

        masterCheckbox.addEventListener('change', toggleDeleteBtn);
        checkboxes.forEach((cb) => {
            cb.addEventListener('change', toggleDeleteBtn)
        });

        function toggleDeleteBtn() {
            const empty = [].filter.call(checkboxes, function (cb) {
                return !cb.checked
            });
            if (empty.length !== checkboxes.length) {
                deleteBtn.classList.remove('d-none');
                deleteBtn.classList.add('d-inline-flex');
                return;
            }
            deleteBtn.classList.remove('d-inline-flex');
            deleteBtn.classList.add('d-none');
        }

        \$('#batch-delete-selected-btn').on('click', function () {
            if (\$('input.batch-delete-checkbox:checked').length) {
                Modals.create({
                    type: 'danger',
                    title: \"";
        // line 36
        echo twig_escape_filter($this->env, __trans("Are you sure?"), "html", null, true);
        echo "\",
                    content: \"";
        // line 37
        echo twig_escape_filter($this->env, __trans("Are you sure you want to delete the selected items?"), "html", null, true);
        echo "\",
                    confirmCallback: function() {
                        var ids = \$('input.batch-delete-checkbox:checked').map(function() {
                            return \$(this).attr(\"data-item-id\");
                        }).get();
                        bb.post('";
        // line 42
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "', { ids: ids, CSRFToken: \"";
        echo twig_escape_filter($this->env, ($context["CSRFToken"] ?? null), "html", null, true);
        echo "\" }, function (result) {
                            bb.reload();
                        })
                    }
                });
            } else {
                Modals.create({
                    type: 'small',
                    title: \"";
        // line 50
        echo twig_escape_filter($this->env, __trans("No items selected"), "html", null, true);
        echo "\",
                    content: \"";
        // line 51
        echo twig_escape_filter($this->env, __trans("You need to select at least one item to delete"), "html", null, true);
        echo "\",
                });
            }
        });

        \$('input.batch-delete-master-checkbox').on('click', function () {
            \$('input.batch-delete-checkbox').prop('checked', this.checked);
        });
    });
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partial_batch_delete.html.twig";
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
        return array (  106 => 51,  102 => 50,  89 => 42,  81 => 37,  77 => 36,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partial_batch_delete.html.twig", "/var/www/themes/admin_default/html/partial_batch_delete.html.twig");
    }
}
