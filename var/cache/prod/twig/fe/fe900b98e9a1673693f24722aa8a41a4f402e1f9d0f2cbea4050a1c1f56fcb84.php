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

/* agence_immobiliere/modification.html.twig */
class __TwigTemplate_9ce7e66964c06bd69b153cbca89fa5fe1dbd13037e52c3b653cd8b42a741a429 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "agence_immobiliere/modification.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Immobilier.com | Modification ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

<h1 class=\"text-center\">Modifier votre annonce</h1>

";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_biens"] ?? null), 'form_start');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_biens"] ?? null), "type", [], "any", false, false, false, 11), 'row', ["label" => "Entrez un type d'habitation:"]);
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_biens"] ?? null), "surface", [], "any", false, false, false, 12), 'row', ["label" => "Entrez une surface (en m²):"]);
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_biens"] ?? null), "prix", [], "any", false, false, false, 13), 'row', ["label" => "Entrez le prix du bien (en €):"]);
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_biens"] ?? null), "localisation", [], "any", false, false, false, 14), 'row', ["label" => "Entrez une localisation:"]);
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_biens"] ?? null), "images", [], "any", false, false, false, 15), 'row', ["label" => "Insérez une image:"]);
        echo "
    <button type=\"submit\" class=\"btn btn-success\">Modifier</button>
";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_biens"] ?? null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "agence_immobiliere/modification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agence_immobiliere/modification.html.twig", "C:\\Users\\Windows\\Desktop\\LOC-IMMO\\agence3-main\\agence3-main\\templates\\agence_immobiliere\\modification.html.twig");
    }
}
