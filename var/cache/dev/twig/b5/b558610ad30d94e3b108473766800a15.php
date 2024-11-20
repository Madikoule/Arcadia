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

/* user/connexion.html.twig */
class __TwigTemplate_7689981e2f3022a29ffc3ff3efe0050a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/connexion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/connexion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/connexion.html.twig", 1);
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

        // line 5
        yield "        Connexion
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "
<main>
    
        <div class=\"container\">
            <div class=\"divider\"></div>
                <div class=\"heading\">
                    <h2>Connexion</h2>
                </div>

                <div class=\"check col-lg-6\">
                    <form method=\"POST\" action=\"\">
                        <div class=\"col-lg-8\">
                            <label for=\"exampleInputEmail1\" class=\"form-label\">Adresse Email</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                            <div id=\"emailHelp\" class=\"form-text\">Nous ne partagerons jamais votre email avec qui que ce soit.</div>
                        </div>

                        <div class=\"col-lg-8\">
                            <label for=\"exampleInputPassword1\" class=\"form-label\">Mot de passe</label>
                            <input type=\"password\" name=\"password\" class=\"form-control\" id=\"exampleInputPassword1\"><br>
                        </div>

                        <div class=\"col-lg-8\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                            <label class=\"form-check-label\" for=\"exampleCheck1\">Cochez-moi</label>
                        </div>
                        
                        <div class=\"col-lg-8\">
                            <button type=\"submit\" class=\"btn btn-warning\">Valider</button>
                        </div>

                        ";
        // line 42
        if (array_key_exists("error", $context)) {
            // line 43
            yield "                            <div class=\"alert alert-danger mt-3 col-lg-8\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 43, $this->source); })()));
            yield "</div>
                        ";
        }
        // line 45
        yield "                        
                        ";
        // line 46
        if (array_key_exists("success", $context)) {
            // line 47
            yield "                            <div class=\"alert alert-success mt-3 col-lg-8\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 47, $this->source); })()));
            yield "</div>
                        ";
        }
        // line 49
        yield "                        
                        ";
        // line 50
        if ((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 50, $this->source); })())) {
            // line 51
            yield "                            <div class=\"alert alert-danger mt-3 col-lg-8\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["erreur"]) || array_key_exists("erreur", $context) ? $context["erreur"] : (function () { throw new RuntimeError('Variable "erreur" does not exist.', 51, $this->source); })()), "html", null, true);
            yield "</div>
                        ";
        }
        // line 53
        yield "                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

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
        return "user/connexion.html.twig";
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
        return array (  159 => 53,  153 => 51,  151 => 50,  148 => 49,  142 => 47,  140 => 46,  137 => 45,  131 => 43,  129 => 42,  96 => 11,  86 => 10,  74 => 5,  64 => 4,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


    {% block title %}
        Connexion
    {% endblock %}



{% block body %}

<main>
    
        <div class=\"container\">
            <div class=\"divider\"></div>
                <div class=\"heading\">
                    <h2>Connexion</h2>
                </div>

                <div class=\"check col-lg-6\">
                    <form method=\"POST\" action=\"\">
                        <div class=\"col-lg-8\">
                            <label for=\"exampleInputEmail1\" class=\"form-label\">Adresse Email</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                            <div id=\"emailHelp\" class=\"form-text\">Nous ne partagerons jamais votre email avec qui que ce soit.</div>
                        </div>

                        <div class=\"col-lg-8\">
                            <label for=\"exampleInputPassword1\" class=\"form-label\">Mot de passe</label>
                            <input type=\"password\" name=\"password\" class=\"form-control\" id=\"exampleInputPassword1\"><br>
                        </div>

                        <div class=\"col-lg-8\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                            <label class=\"form-check-label\" for=\"exampleCheck1\">Cochez-moi</label>
                        </div>
                        
                        <div class=\"col-lg-8\">
                            <button type=\"submit\" class=\"btn btn-warning\">Valider</button>
                        </div>

                        {% if error is defined %}
                            <div class=\"alert alert-danger mt-3 col-lg-8\">{{ error|escape }}</div>
                        {% endif %}
                        
                        {% if success is defined %}
                            <div class=\"alert alert-success mt-3 col-lg-8\">{{ success|escape }}</div>
                        {% endif %}
                        
                        {% if erreur %}
                            <div class=\"alert alert-danger mt-3 col-lg-8\">{{ erreur }}</div>
                        {% endif %}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

{% endblock %}", "user/connexion.html.twig", "/Users/youssoufdoucoure/Desktop/ENV./Arcadia/templates/user/connexion.html.twig");
    }
}
