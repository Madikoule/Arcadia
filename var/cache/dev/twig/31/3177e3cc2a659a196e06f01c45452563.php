<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* service/services.html.twig */
class __TwigTemplate_a6e19fea8fc1ead7922c3b9ca0cad3f9 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/services.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/services.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "service/services.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 5
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        yield "
        <section id=\"service\" class=\"container-fluid\">
            <nav class=\"debut\">
                <h1>Nos Services</h1>
            </nav>
            <article class=\"safari\">
                <div class=\"text1\">
                    <h3>Train Safari</h3>
                    <p> Voyagé en train à la découverte <br>de nos animaux, dans différents <br>paysage adapté et aménagé<br>
                        pour vous approcher au maximum.</p>
                    <p> Gardé les meilleures souvenirs <br> avec le Zoo Arcadia .</p>
                </div>
                <div class=\"train\">
                    <img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/Activity/petit-train.jpeg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Visite train\">
                </div>
            </article>

            <article>
                <div id=\"food\">
                    <div class=\"fast\">
                        <h3>Restaurant-Fastfood</h3>
                        <p>Déjeuner , goùter , pause  salée ou sucrée.<br> Notre restaurant <br>proposent une offres 
                            variée, <br>pour répondre à toutes <br> vos envies !
                        </p>
                    </div>
                    <div class=\"resto\">
                        <img src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/Activity/restaurant-exterieur.jpeg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"fast food\">
                    </div>
                </div>
            </article>

            <article>
                <div id=\"vétérinaire\">
                    <div class=\"soigneur\">
                        <h3> Guide vétérinaire </h3>
                        <p>Le Zoo à le privilège de vous accompagnée en <br> tète a tète avec les animaux une demi-journée<br> dans la peau d'un soigneur animalier ,<br>
                            une chose est sùr , vois garderez de mémorable <br>souvenir de votre visitre au Zoo Arcadia .
                        </p>
                    </div>
                    <div class=\"veto\">
                        <img src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/Activity/veto-zoo.jpeg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"soigneur animalié\">
                    </div>
                </div>   
            </article>
        </section>
        
        <div class=\"retour\">
            <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_index");
        yield "\"><button type=\"button\" class=\"btn btn-warning\">Retour</button></a>
        </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "service/services.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  153 => 56,  143 => 49,  126 => 35,  110 => 22,  95 => 9,  85 => 8,  74 => 5,  64 => 4,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


    {% block stylesheet %}
    {% endblock %}
    

{% block body %}

        <section id=\"service\" class=\"container-fluid\">
            <nav class=\"debut\">
                <h1>Nos Services</h1>
            </nav>
            <article class=\"safari\">
                <div class=\"text1\">
                    <h3>Train Safari</h3>
                    <p> Voyagé en train à la découverte <br>de nos animaux, dans différents <br>paysage adapté et aménagé<br>
                        pour vous approcher au maximum.</p>
                    <p> Gardé les meilleures souvenirs <br> avec le Zoo Arcadia .</p>
                </div>
                <div class=\"train\">
                    <img src=\"{{ asset('Assets/image/Activity/petit-train.jpeg') }}\" class=\"img-fluid\" alt=\"Visite train\">
                </div>
            </article>

            <article>
                <div id=\"food\">
                    <div class=\"fast\">
                        <h3>Restaurant-Fastfood</h3>
                        <p>Déjeuner , goùter , pause  salée ou sucrée.<br> Notre restaurant <br>proposent une offres 
                            variée, <br>pour répondre à toutes <br> vos envies !
                        </p>
                    </div>
                    <div class=\"resto\">
                        <img src=\"{{ asset('Assets/image/Activity/restaurant-exterieur.jpeg') }}\" class=\"img-fluid\" alt=\"fast food\">
                    </div>
                </div>
            </article>

            <article>
                <div id=\"vétérinaire\">
                    <div class=\"soigneur\">
                        <h3> Guide vétérinaire </h3>
                        <p>Le Zoo à le privilège de vous accompagnée en <br> tète a tète avec les animaux une demi-journée<br> dans la peau d'un soigneur animalier ,<br>
                            une chose est sùr , vois garderez de mémorable <br>souvenir de votre visitre au Zoo Arcadia .
                        </p>
                    </div>
                    <div class=\"veto\">
                        <img src=\"{{ asset('Assets/image/Activity/veto-zoo.jpeg') }}\" class=\"img-fluid\" alt=\"soigneur animalié\">
                    </div>
                </div>   
            </article>
        </section>
        
        <div class=\"retour\">
            <a href=\"{{ path('home_index') }}\"><button type=\"button\" class=\"btn btn-warning\">Retour</button></a>
        </div>

{% endblock %}", "service/services.html.twig", "/Users/youssoufdoucoure/Desktop/ENV./Arcadia/templates/service/services.html.twig");
    }
}
