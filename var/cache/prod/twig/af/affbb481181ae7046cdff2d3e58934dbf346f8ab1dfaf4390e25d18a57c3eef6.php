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

/* agence_immobiliere/index.html.twig */
class __TwigTemplate_b0e3aac522b9708e0fda0ca1a4a7aebe55b91843a4443bca518266e8b42a65f7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "agence_immobiliere/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Immobilier.com | Accueil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "        <div class=\"div_middle\">
        <div class=\"text_middle\">
          <h6 class=\"text-primary\">  Bienvenue sur Loc-immo ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9), "username", [], "any", false, false, false, 9), "html", null, true);
            echo ", vous avez désormais accès aux annonces postées par la communauté et la possibilité de mettre en location vos biens de particulier à particulier.
            </h6>       
        </div>
        ";
        } else {
            // line 13
            echo "<div class=\"div_middle\">
    <div class=\"text_middle\">
        <h6 >Bienvenue chez Loc-Immo, votre plateforme de location en ligne et gratuite <br> de particulier à particulier !</h1>
    </div>
</div>
        ";
        }
        // line 19
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/agence-immobilière.jpg"), "html", null, true);
        echo "\" width=\"100%\" alt=\"Symfony!\"/>
";
    }

    public function getTemplateName()
    {
        return "agence_immobiliere/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  71 => 13,  64 => 9,  60 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agence_immobiliere/index.html.twig", "C:\\Users\\Windows\\Desktop\\LOC-IMMO\\agence3-main\\agence3-main\\templates\\agence_immobiliere\\index.html.twig");
    }
}
