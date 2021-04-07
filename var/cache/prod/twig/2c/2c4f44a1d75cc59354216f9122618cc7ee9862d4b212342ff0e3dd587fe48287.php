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

/* agence_immobiliere/biens.html.twig */
class __TwigTemplate_f222674e22b0cbaf2205139fc10a9d2146d97c1649588a6df880e0b8061a4b95 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "agence_immobiliere/biens.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Immobilier.com | Nos biens immobiliers";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"container\">

<p>Type d'habitation: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "type", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
<p>Surface: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "surface", [], "any", false, false, false, 10), "html", null, true);
        echo " m²</p>
<p>Prix: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "prix", [], "any", false, false, false, 11), "html", null, true);
        echo " €</p>
<p>localisation: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "localisation", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/biens/" . twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "images", [], "any", false, false, false, 13))), "html", null, true);
        echo "\" width=\"800\" alt=\"\">
<p>Date de mise en ligne: ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "dateDeCreation", [], "any", false, false, false, 14), "d/m/Y à H:i"), "html", null, true);
        echo "</p>

<hr>

";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18) && twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "reservateur", [], "any", false, false, false, 18))) {
            // line 19
            echo "    <a href=\"#\" class=\"btn btn-muted\">Réservé</a>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 20
($context["bien"] ?? null), "reservateur", [], "any", false, false, false, 20) === twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20))) {
            // line 21
            echo "    <a href=\"#\" class=\"btn btn-success\">Disponible</a>
";
        } else {
            // line 23
            echo "    <form method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation", ["id" => twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("RESA" . twig_get_attribute($this->env, $this->source, ($context["bien"] ?? null), "id", [], "any", false, false, false, 24))), "html", null, true);
            echo "\">
        <input type=\"submit\" value=\"Réserver\" class=\"btn btn-success\">
    </form>

";
        }
        // line 29
        echo "


</div>
";
    }

    public function getTemplateName()
    {
        return "agence_immobiliere/biens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 29,  106 => 24,  101 => 23,  97 => 21,  95 => 20,  92 => 19,  90 => 18,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agence_immobiliere/biens.html.twig", "C:\\Users\\Windows\\Desktop\\LOC-IMMO\\agence3-main\\agence3-main\\templates\\agence_immobiliere\\biens.html.twig");
    }
}
