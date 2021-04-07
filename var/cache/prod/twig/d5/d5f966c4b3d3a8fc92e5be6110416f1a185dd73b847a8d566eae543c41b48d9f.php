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

/* agence_immobiliere/biens_immobiliers.html.twig */
class __TwigTemplate_22f872fb3ecf11a97c617e9a97afb8af6da27387111095941645ab0e855fcd3a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "agence_immobiliere/biens_immobiliers.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Immobilier.com | Nos biens immobiliers
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "\t\t<h1 class=\"text-center\">Vos annonces en ligne et les dernièrs ajouts de nos membres
\t\t</h1>
\t\t<hr>
\t";
        } else {
            // line 12
            echo "\t\t<h1 class=\"text-center\">Nos locations en ligne
\t\t</h1>
\t\t<hr>
\t";
        }
        // line 16
        echo "
\t";
        // line 18
        echo "\t<form method=\"GET\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filtreImmoByMax");
        echo "\">
\t\t<div>
\t\t\t<input type=\"range\" id=\"prix max\" name=\"valMax\" min=\"0\" max=\"200000\" step=\"2000\" value=\"1000\" oninput=\"this.form.valMaxInput.value = this.value\">
\t\t\t<input type=\"number\" name=\"valMaxInput\" min=\"0\" max=\"200000\" value=\"1000\" oninput=\"this.form.valMax.value = this.value\"/>
\t\t\t<label for=\"prix max\">Prix maximum</label>
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Filtrer</button>

\t\t</div>
\t</form>
\t<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filtreImmoByMax", ["valMax" => 20000]);
        echo "\">filtrer par prix inférieur à 20 000€</a>
\t<hr>

\t";
        // line 31
        echo "\t<div class=\"carousel\" height=\"100%\" data-flickity='{ \"freeScroll\": true, \"contain\": true , \"groupCells\": true, \"adaptiveHeight\": true, \"imagesLoaded\": true}'>
\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens_immo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bien_immo"]) {
            // line 33
            echo "\t\t\t<div class=\"carousel-cell\">
\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t<img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/biens/" . twig_get_attribute($this->env, $this->source, $context["bien_immo"], "images", [], "any", false, false, false, 35))), "html", null, true);
            echo "\" width=\"200\" alt=\"\" class=\"card-img-top\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Type de location:
\t\t\t\t\t\t\t";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien_immo"], "type", [], "any", false, false, false, 38), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t<p>Surface:
\t\t\t\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien_immo"], "surface", [], "any", false, false, false, 40), "html", null, true);
            echo "
\t\t\t\t\t\t\tm²</p>
\t\t\t\t\t\t<p>Prix:
\t\t\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien_immo"], "prix", [], "any", false, false, false, 43), "html", null, true);
            echo "
\t\t\t\t\t\t\t€</p>
\t\t\t\t\t\t<p>localisation:
\t\t\t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien_immo"], "localisation", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p>Date de mise en ligne:
\t\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien_immo"], "dateDeCreation", [], "any", false, false, false, 48), "d/m/Y à H:i"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("biens_immobiliers_lire", ["id" => twig_get_attribute($this->env, $this->source, $context["bien_immo"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Lire plus</a>
\t\t\t\t\t\t";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 51) && (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 51) === twig_get_attribute($this->env, $this->source, $context["bien_immo"], "reservateur", [], "any", false, false, false, 51)))) {
                // line 52
                echo "\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-muted\">Réservé par vous</a>
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 53
($context["app"] ?? null), "user", [], "any", false, false, false, 53) && twig_get_attribute($this->env, $this->source, $context["bien_immo"], "reservateur", [], "any", false, false, false, 53))) {
                // line 54
                echo "
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-muted\">Réservé</a>

\t\t\t\t\t\t";
            } else {
                // line 58
                echo "\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success\">Disponible</a>

\t\t\t\t\t\t";
            }
            // line 61
            echo "
\t\t\t\t\t\t<div class=\"btnFlex\">
\t\t\t\t\t\t\t";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 63) && (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 63) === twig_get_attribute($this->env, $this->source, $context["bien_immo"], "author", [], "any", false, false, false, 63)))) {
                // line 64
                echo "\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("biens_immobiliers_suppression", ["id" => twig_get_attribute($this->env, $this->source, $context["bien_immo"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"delete\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("SUP" . twig_get_attribute($this->env, $this->source, $context["bien_immo"], "id", [], "any", false, false, false, 66))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"supprimer\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("biens_immobiliers_modification", ["id" => twig_get_attribute($this->env, $this->source, $context["bien_immo"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\" class=\"btn btn-success\">Modification</a>
\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien_immo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t</div>
\t";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 77)) {
            // line 78
            echo "\t\t<h2 class=\"text-center\">Ajouter un nouveau bien</h2>

\t\t";
            // line 80
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_biens"] ?? null), 'form_start');
            echo "
\t\t";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_biens"] ?? null), "type", [], "any", false, false, false, 81), 'row', ["label" => "Entrez un type d'habitation:"]);
            echo "
\t\t";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_biens"] ?? null), "surface", [], "any", false, false, false, 82), 'row', ["label" => "Entrez une surface (en m²):"]);
            echo "
\t\t";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_biens"] ?? null), "prix", [], "any", false, false, false, 83), 'row', ["label" => "Entrez le prix du bien (en €):"]);
            echo "
\t\t";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_biens"] ?? null), "localisation", [], "any", false, false, false, 84), 'row', ["label" => "Entrez une localisation:"]);
            echo "
\t\t";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form_biens"] ?? null), "images", [], "any", false, false, false, 85), 'row', ["label" => "Insérez une image:"]);
            echo "
\t\t<button type=\"submit\" class=\"btn btn-success\">Ajouter</button>
\t\t";
            // line 87
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_biens"] ?? null), 'form_end');
            echo "
\t\t<br>

\t";
        }
        // line 91
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "agence_immobiliere/biens_immobiliers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 91,  229 => 87,  224 => 85,  220 => 84,  216 => 83,  212 => 82,  208 => 81,  204 => 80,  200 => 78,  198 => 77,  195 => 76,  185 => 71,  180 => 69,  174 => 66,  168 => 64,  166 => 63,  162 => 61,  157 => 58,  151 => 54,  149 => 53,  146 => 52,  144 => 51,  140 => 50,  135 => 48,  130 => 46,  124 => 43,  118 => 40,  113 => 38,  107 => 35,  103 => 33,  99 => 32,  96 => 31,  90 => 27,  77 => 18,  74 => 16,  68 => 12,  62 => 8,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "agence_immobiliere/biens_immobiliers.html.twig", "C:\\Users\\Windows\\Desktop\\LOC-IMMO\\agence3-main\\agence3-main\\templates\\agence_immobiliere\\biens_immobiliers.html.twig");
    }
}
