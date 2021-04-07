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

/* base.html.twig */
class __TwigTemplate_de28ef8ffe99d0530110863b89acd6a4b01d79e1c2ea71e95fb7a006f5c58fff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        ";
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
        <script src=\"https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" crossorigin=\"anonymous\"></script>

        ";
        // line 17
        echo "
        ";
        // line 19
        echo "  <link href='to-top.css' rel='stylesheet' type='text/css'> ";
        // line 20
        echo "
  <link rel=\"stylesheet\" href=\"https://unpkg.com/flickity@2/dist/flickity.min.css\">
  ";
        // line 23
        echo "
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link  media=\"screen and (max-width: 640px)\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/queries.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

        <title>";
        // line 27
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "    </head>
    <body>
        <header>
  <nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo2.jpg"), "html", null, true);
        echo "\" width=\"50px\" height=\" 50px\" alt=\"Logo\" />Loc-Immo</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
      <div class=\"navbar-nav mr-auto\"></div>
      <div class=\"div-inline mt-2 mt-md-0\">
      <ul class=\"navbar-nav\">
        ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 41)) {
            // line 42
            echo "        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("biens_immobiliers");
            echo "\">Vos annonces en ligne | Les derniers biens ajoutés | Ajouté un bien a la location</a>
        ";
        } else {
            // line 45
            echo "        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("biens_immobiliers");
            echo "\">Nos Annonces</a>
        ";
        }
        // line 48
        echo "      
      
      <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous contacter</a>
    </li>
      
      
        ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 55)) {
            // line 56
            echo "        <li class=\"nav-item active\">
        <a class=\"btn btn-outline-light text-light\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter </a>
        </li>
        ";
        } else {
            // line 60
            echo "        <li class=\"nav-item active\">
        <a class=\"btn btn-outline-light text-light\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("authentification");
            echo "\">S'identifier/ S'inscrire </a>
        </li>
        ";
        }
        // line 64
        echo "        </ul>
      </div>
    </div>
  </nav>
  
</header>

        ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo " 
    <!-- /////FOOTERT + COPYRIGHT -->
    ";
        // line 75
        $this->displayBlock('footer', $context, $blocks);
        // line 90
        echo "</html>
";
    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Loc-Immo.com";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 72
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 75
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "    <footer class=\"bottom\" id=\"footer\">
        
    <div id=\"scroll_to_top\">
            <a href=\"#top\"><i class=\"fas fa-arrow-circle-up\"></i></a>
        </div>  
        <div class=\"icon\">
                                <a href=\"#\"><i class=\"fab fa-facebook-square\"></i></a>
                                 <a href=\"#\"><i class=\"fab fa-twitter-square\"></i></a>
                                  <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                           
            <a href=\"#\" class=\"text-primary\"><i class=\"far fa-copyright\"></i>     Copyright Boussemart Julien 2021</a>
         </div>    
    </footer>
    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 76,  207 => 75,  200 => 72,  194 => 71,  188 => 28,  181 => 27,  176 => 90,  174 => 75,  170 => 73,  167 => 72,  165 => 71,  156 => 64,  150 => 61,  147 => 60,  141 => 57,  138 => 56,  136 => 55,  129 => 51,  124 => 48,  119 => 46,  116 => 45,  111 => 43,  108 => 42,  106 => 41,  93 => 33,  87 => 29,  85 => 28,  81 => 27,  76 => 25,  72 => 24,  69 => 23,  65 => 20,  63 => 19,  60 => 17,  49 => 7,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Users\\Windows\\Desktop\\LOC-IMMO\\agence3-main\\agence3-main\\templates\\base.html.twig");
    }
}
