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

/* agence_immobiliere/authentification.html.twig */
class __TwigTemplate_3a034961467f04f801dde3ef6b9e1067ce20fa78be1bce6cfaf504d00aa70c89 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "agence_immobiliere/authentification.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Immobilier.com | Authentification";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<br>
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-6\">
    <h1 class=\"text-center\">Connexion: </h1>
    <hr>
<h3>Veuillez vous connecter !</h3>
<form action=\" ";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">

    ";
        // line 15
        if (($context["error"] ?? null)) {
            // line 16
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 16), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "        <div class=\"mb-3\">
            Vous êtes connecté en tant que ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21), "username", [], "any", false, false, false, 21), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se Déconnecter</a>
        </div>
    ";
        }
        // line 24
        echo "
    <div class=\"form-group\">
        <input type=\"email\" name=\"email\" placeholder=\"Identifiant\" class=\"form-control\" >
    </div>
    
    <div class=\"form-group\">
        <input type=\"password\" name=\"password\" placeholder=\"Mot de passe\" class=\"form-control\"  >
    </div>
    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >
<button class=\"btn btn-success\" class=\"form-control\">Se connecter</button>
</form>
</div>

<div class=\"col-md-6\">
    <h1 class=\"text-center\">Inscription: </h1>
    <hr>
<h3>Veuillez vous inscrire !</h3>
";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_inscription"] ?? null), 'form_start');
        echo "
";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_inscription"] ?? null), "nom", [], "any", false, false, false, 44), 'row', ["label" => "Entrez un nom"]);
        echo "
";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_inscription"] ?? null), "prenom", [], "any", false, false, false, 45), 'row', ["label" => "Entrez un prénom"]);
        echo "
";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_inscription"] ?? null), "email", [], "any", false, false, false, 46), 'row', ["label" => "Entrez un email"]);
        echo "
";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_inscription"] ?? null), "mot_de_passe", [], "any", false, false, false, 47), 'row', ["label" => "Entrez un mot de passe"]);
        echo "
";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_inscription"] ?? null), "confirm_mot_de_passe", [], "any", false, false, false, 48), 'row', ["label" => "Confirmez le mot de passe"]);
        echo "
";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_inscription"] ?? null), "localisation", [], "any", false, false, false, 49), 'row', ["label" => "Entrez une ville"]);
        echo "
<br>
<button type=\"submit\" class=\"btn btn-success\">inscription</button>
";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_inscription"] ?? null), 'form_end');
        echo "
</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "agence_immobiliere/authentification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 52,  144 => 49,  140 => 48,  136 => 47,  132 => 46,  128 => 45,  124 => 44,  120 => 43,  107 => 33,  96 => 24,  88 => 21,  85 => 20,  83 => 19,  80 => 18,  74 => 16,  72 => 15,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agence_immobiliere/authentification.html.twig", "C:\\Users\\Windows\\Desktop\\LOC-IMMO\\agence3-main\\agence3-main\\templates\\agence_immobiliere\\authentification.html.twig");
    }
}
