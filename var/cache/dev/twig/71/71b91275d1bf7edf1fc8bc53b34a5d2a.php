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

/* habitat/habitats.html.twig */
class __TwigTemplate_bd3704b2b5b97e21a2bde0359687c88a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitat/habitats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habitat/habitats.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habitat/habitats.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "    <section id=\"habitat\" class=\"container-fluid\">
        <div class=\"col-lg-12\">
            <h1>Nos Habitats</h1>
            <nav class=\"para\">
                <p> Explorer les divers lieux où vivent les animaux ! Des Savanes Africaines aux forêt tropicales,
                    des lacs profonds aux montagne enneigées , chaque espèce à un habitat unique qui 
                    répond à ses besoins spécifiques. Rejoignez-nous pour un voyage fascinant à travers
                    les habitats du monde entiers et laissez-vous émerveiller par la nature ! 
                </p>
            </nav>
        </div>

        <article class=\"terre\" class=\"container\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 19
            yield "                <a href=\"..\">
                    <figure class=\"figure\">
                        <img src=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "imageHabitat", [], "any", false, false, false, 21), "html", null, true);
            yield "\" class=\"figure-img img-fluid rounded\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "nameHabitat", [], "any", false, false, false, 21), "html", null, true);
            yield "\">
                        <figcaption class=\"figure-caption\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "nameHabitat", [], "any", false, false, false, 22), "html", null, true);
            yield "</figcaption>
                    </figure>
                </a>
                <p>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "descriptionHabitat", [], "any", false, false, false, 25), "html", null, true);
            yield "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "        </article>
    </section>


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
        return "habitat/habitats.html.twig";
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
        return array (  116 => 27,  108 => 25,  102 => 22,  96 => 21,  92 => 19,  88 => 18,  73 => 5,  63 => 4,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
    <section id=\"habitat\" class=\"container-fluid\">
        <div class=\"col-lg-12\">
            <h1>Nos Habitats</h1>
            <nav class=\"para\">
                <p> Explorer les divers lieux où vivent les animaux ! Des Savanes Africaines aux forêt tropicales,
                    des lacs profonds aux montagne enneigées , chaque espèce à un habitat unique qui 
                    répond à ses besoins spécifiques. Rejoignez-nous pour un voyage fascinant à travers
                    les habitats du monde entiers et laissez-vous émerveiller par la nature ! 
                </p>
            </nav>
        </div>

        <article class=\"terre\" class=\"container\">
            {% for habitat in habitats %}
                <a href=\"..\">
                    <figure class=\"figure\">
                        <img src=\"{{ habitat.imageHabitat }}\" class=\"figure-img img-fluid rounded\" alt=\"{{ habitat.nameHabitat }}\">
                        <figcaption class=\"figure-caption\">{{ habitat.nameHabitat }}</figcaption>
                    </figure>
                </a>
                <p>{{ habitat.descriptionHabitat }}</p>
            {% endfor %}
        </article>
    </section>


{% endblock %}", "habitat/habitats.html.twig", "/Users/youssoufdoucoure/Desktop/ENV./Arcadia/templates/habitat/habitats.html.twig");
    }
}
