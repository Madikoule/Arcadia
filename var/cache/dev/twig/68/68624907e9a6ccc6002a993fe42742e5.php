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

/* dashboard/dashboard.html.twig */
class __TwigTemplate_cdf5b17f47f5c49a2c931b7bbe107563 extends Template
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
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "
        <div class=\"dash\">
            <h1>Dashboard</h1>
        </div>

        <!--  menu -->
        <div class=\"flex-shrink-0 p-3\" style=\"width: 280px;\">
            <a href=\"/\" class=\"d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom\">
                <span class=\"fs-5 fw-semibold\">Menus</span>
            </a>
            <ul class=\"list-unstyled ps-0\">
                <li class=\"mb-1\">
                    <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0\" data-bs-toggle=\"collapse\" data-bs-target=\"#home-collapse\" aria-expanded=\"true\">
                        Home
                    </button>
                    <div class=\"collapse show\" id=\"home-collapse\">
                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                            <li><a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        yield "\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">LISTING</a></li>
                        </ul>
                    </div>
                </li>
                <li class=\"mb-1\">
                    <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#dashboard-collapse\" aria-expanded=\"false\">
                        Dashboard
                    </button>
                    <div class=\"collapse\" id=\"dashboard-collapse\">
                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                            <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Vétérinaire</a></li>
                            <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Rapport</a></li>
                        </ul>
                    </div>
                </li>
                <li class=\"border-top my-3\"></li>
                <li class=\"mb-1\">
                    <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#account-collapse\" aria-expanded=\"false\">
                        Account
                    </button>
                    <div class=\"collapse\" id=\"account-collapse\">
                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                            <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">New...</a></li>
                            <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Profile</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Main content -->
        <section class=\"container-fluid\">
            <nav class=\"vue\">
                <div class=\"annee container-fluid\">
                    <div class=\"row\"> 
                        <div class=\"col-md-4\">
                            <ul class=\"list-group\">
                                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 62
            yield "                                    <a class=\"list-group-item ";
            yield (((((isset($context["annee"]) || array_key_exists("annee", $context) ? $context["annee"] : (function () { throw new RuntimeError('Variable "annee" does not exist.', 62, $this->source); })()) - $context["i"]) == (isset($context["annee_selection"]) || array_key_exists("annee_selection", $context) ? $context["annee_selection"] : (function () { throw new RuntimeError('Variable "annee_selection" does not exist.', 62, $this->source); })()))) ? ("active") : (""));
            yield "\" 
                                    href=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard", ["annee" => ((isset($context["annee"]) || array_key_exists("annee", $context) ? $context["annee"] : (function () { throw new RuntimeError('Variable "annee" does not exist.', 63, $this->source); })()) - $context["i"])]), "html", null, true);
            yield "\">
                                        ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["annee"]) || array_key_exists("annee", $context) ? $context["annee"] : (function () { throw new RuntimeError('Variable "annee" does not exist.', 64, $this->source); })()) - $context["i"]), "html", null, true);
            yield "
                                    </a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class=\"container-fluid\">
                    <div class=\"card\" style=\"width: 400px;\">
                        <div class=\"card-body\">
                            <strong style=\"font-size:3em;\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 75, $this->source); })()), "html", null, true);
        yield "</strong>
                            Visite";
        // line 76
        yield ((((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 76, $this->source); })()) > 1)) ? ("s") : (""));
        yield " total
                        </div>
                    </div>
                </div>
            </nav>
        </section>

        <!-- Footer -->
            <div class=\"container col-md-6 foot\">
                <div class=\"englob\">
                    <div class=\"col-md-4\">
                        <div class=\"card\">
                            <div class=\"card-body\"></div>
                            <h4>Compteur de vue</h4>
                            <p>Il y a ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["vues"]) || array_key_exists("vues", $context) ? $context["vues"] : (function () { throw new RuntimeError('Variable "vues" does not exist.', 90, $this->source); })()), "html", null, true);
        yield " visite";
        yield ((((isset($context["vues"]) || array_key_exists("vues", $context) ? $context["vues"] : (function () { throw new RuntimeError('Variable "vues" does not exist.', 90, $this->source); })()) > 1)) ? ("s") : (""));
        yield " sur le site</p>
                        </div>
                    </div>
                </div>
            </div>

            <article>
                <form class=\"activity\">
                    <div class=\"mb-6 col-md-6\">
                        <label for=\"exampleFormControlInput1\" class=\"form-label\">Votre Nom</label>
                        <input type=\"text\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"Votre nom\">
                    </div>
                    <div class=\"mb-6 col-md-6\">
                        <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Rédiger message au Vétérinaire</label>
                        <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                    </div>
                    <div class=\"col-12\">
                        <button class=\"btn btn-dark\" type=\"submit\">Envoyé</button>
                    </div>
                </form>
            </article>

            <div class=\"fermer\">
                <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion_connexions");
        yield "\">
                    <button type=\"button\" class=\"btn btn-warning\">Se déconnecter</button>
                </a>
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
        return "dashboard/dashboard.html.twig";
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
        return array (  234 => 113,  206 => 90,  189 => 76,  185 => 75,  175 => 67,  166 => 64,  162 => 63,  157 => 62,  153 => 61,  113 => 24,  94 => 7,  84 => 6,  64 => 4,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Dashboard{% endblock %}

        {% block body %}

        <div class=\"dash\">
            <h1>Dashboard</h1>
        </div>

        <!--  menu -->
        <div class=\"flex-shrink-0 p-3\" style=\"width: 280px;\">
            <a href=\"/\" class=\"d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom\">
                <span class=\"fs-5 fw-semibold\">Menus</span>
            </a>
            <ul class=\"list-unstyled ps-0\">
                <li class=\"mb-1\">
                    <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0\" data-bs-toggle=\"collapse\" data-bs-target=\"#home-collapse\" aria-expanded=\"true\">
                        Home
                    </button>
                    <div class=\"collapse show\" id=\"home-collapse\">
                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                            <li><a href=\"{{ path('product_index') }}\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">LISTING</a></li>
                        </ul>
                    </div>
                </li>
                <li class=\"mb-1\">
                    <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#dashboard-collapse\" aria-expanded=\"false\">
                        Dashboard
                    </button>
                    <div class=\"collapse\" id=\"dashboard-collapse\">
                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                            <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Vétérinaire</a></li>
                            <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Rapport</a></li>
                        </ul>
                    </div>
                </li>
                <li class=\"border-top my-3\"></li>
                <li class=\"mb-1\">
                    <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#account-collapse\" aria-expanded=\"false\">
                        Account
                    </button>
                    <div class=\"collapse\" id=\"account-collapse\">
                        <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                            <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">New...</a></li>
                            <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Profile</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Main content -->
        <section class=\"container-fluid\">
            <nav class=\"vue\">
                <div class=\"annee container-fluid\">
                    <div class=\"row\"> 
                        <div class=\"col-md-4\">
                            <ul class=\"list-group\">
                                {% for i in 0..4 %}
                                    <a class=\"list-group-item {{ (annee - i) == annee_selection ? 'active' : '' }}\" 
                                    href=\"{{ path('app_dashboard', { 'annee': annee - i }) }}\">
                                        {{ annee - i }}
                                    </a>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class=\"container-fluid\">
                    <div class=\"card\" style=\"width: 400px;\">
                        <div class=\"card-body\">
                            <strong style=\"font-size:3em;\">{{ total }}</strong>
                            Visite{{ total > 1 ? 's' : '' }} total
                        </div>
                    </div>
                </div>
            </nav>
        </section>

        <!-- Footer -->
            <div class=\"container col-md-6 foot\">
                <div class=\"englob\">
                    <div class=\"col-md-4\">
                        <div class=\"card\">
                            <div class=\"card-body\"></div>
                            <h4>Compteur de vue</h4>
                            <p>Il y a {{ vues }} visite{{ vues > 1 ? 's' : '' }} sur le site</p>
                        </div>
                    </div>
                </div>
            </div>

            <article>
                <form class=\"activity\">
                    <div class=\"mb-6 col-md-6\">
                        <label for=\"exampleFormControlInput1\" class=\"form-label\">Votre Nom</label>
                        <input type=\"text\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"Votre nom\">
                    </div>
                    <div class=\"mb-6 col-md-6\">
                        <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Rédiger message au Vétérinaire</label>
                        <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                    </div>
                    <div class=\"col-12\">
                        <button class=\"btn btn-dark\" type=\"submit\">Envoyé</button>
                    </div>
                </form>
            </article>

            <div class=\"fermer\">
                <a href=\"{{ path('connexion_connexions') }}\">
                    <button type=\"button\" class=\"btn btn-warning\">Se déconnecter</button>
                </a>
            </div>

        {% endblock %}
            ", "dashboard/dashboard.html.twig", "/Users/youssoufdoucoure/Desktop/ENV./Arcadia/templates/dashboard/dashboard.html.twig");
    }
}
