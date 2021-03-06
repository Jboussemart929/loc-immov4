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

/* @EasyAdmin/crud/field/code_editor.html.twig */
class __TwigTemplate_4d3b393956cad8446647a29f3e66ef7b57cdd9af099d46f0455cbcdf216e27ea extends Template
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
        // line 4
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 4), "currentAction", [], "any", false, false, false, 4), "detail"))) {
            // line 5
            echo "    ";
            // line 6
            echo "    ";
            $context["configuredHeight"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 6), "get", [0 => "height"], "method", false, false, false, 6);
            // line 7
            echo "    <div style=\"";
            (((null === ($context["configuredHeight"] ?? null))) ? (print ("max-height: 350px;")) : (print (twig_escape_filter($this->env, (("max-height: unset; height: " . ($context["configuredHeight"] ?? null)) . "px"), "html", null, true))));
            echo "\">
        ";
            // line 8
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 8), "html", null, true));
            echo "
    </div>
";
        } else {
            // line 11
            echo "    ";
            $context["html_id"] = ("ea-code-editor-" . twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 11));
            // line 12
            echo "    <a href=\"#\" data-toggle=\"modal\" data-target=\"#";
            echo twig_escape_filter($this->env, ($context["html_id"] ?? null), "html", null, true);
            echo "\">
        <i class=\"fa fa-code\"></i> ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.code_editor.view_code", [], "EasyAdminBundle"), "html", null, true);
            echo "
    </a>

    <div class=\"modal fade\" id=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["html_id"] ?? null), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, false, 20), "html", null, true);
            echo "</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close", [], "EasyAdminBundle"), "html", null, true);
            echo "\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 26), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/code_editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  80 => 21,  76 => 20,  69 => 16,  63 => 13,  58 => 12,  55 => 11,  49 => 8,  44 => 7,  41 => 6,  39 => 5,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/field/code_editor.html.twig", "C:\\Users\\Windows\\Desktop\\LOC-IMMO\\agence3-main\\agence3-main\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\field\\code_editor.html.twig");
    }
}
