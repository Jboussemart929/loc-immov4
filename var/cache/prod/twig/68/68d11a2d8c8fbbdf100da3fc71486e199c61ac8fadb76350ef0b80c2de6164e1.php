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

/* contact/index.html.twig */
class __TwigTemplate_038ff14e157ad7912990930dd63c55180ab0768d5c81682b4346f27034707217 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Immobilier.com | contact ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<section class=\"container-fuild Contact\" id=\"Contact\">
        <div class=\"contact\">
            <div id=\"ccontact\"><h2 style=\"text-align: center;\"></h2></div>
            <div class=\"container\" id=\"panel3\">
                <div class=\"col-md-12\">
                    <div class=\"form-area\">
                        <form role=\"form\">                            
                            <p class=\"Remarque\">N'hésitez-pas à nous écrire si vous avez ne remarque ou une suggestion  </p>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Votre nom(obligatoire)\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" id=\"email\"
                                    placeholder=\"Votre e-mail(obligatoire)\">
                            </div>
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" type=\"textarea\" id=\"message\" placeholder=\"Message\"
                                    maxlength=\"140\" rows=\"7\"></textarea>
                            </div>
                            <button type=\"button\" id=\"submit\" name=\"submit\" href=\"#\"
                                class=\"btn btn-primary pull-right\">Envoyer</button>
                            
                        </form>
                    </div>
                </div>
            </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 4,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/index.html.twig", "C:\\Users\\Windows\\Desktop\\LOC-IMMO\\agence3-main\\agence3-main\\templates\\contact\\index.html.twig");
    }
}
