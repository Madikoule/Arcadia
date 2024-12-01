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

/* connexion/connexions.html.twig */
class __TwigTemplate_611e3163daf71f914ed6300aab3f3fa7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/connexions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/connexions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "connexion/connexions.html.twig", 1);
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
                    <form method=\"POST\" action=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion_connexions");
        yield "\">
                
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
        // line 43
        if (array_key_exists("error", $context)) {
            // line 44
            yield "                            <div class=\"alert alert-danger mt-3 col-lg-8\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })()));
            yield "</div>
                        ";
        }
        // line 46
        yield "                        
                        ";
        // line 47
        if (array_key_exists("success", $context)) {
            // line 48
            yield "                            <div class=\"alert alert-success mt-3 col-lg-8\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["success"]) || array_key_exists("success", $context) ? $context["success"] : (function () { throw new RuntimeError('Variable "success" does not exist.', 48, $this->source); })()));
            yield "</div>
                        ";
        }
        // line 50
        yield "                        
                        ";
        // line 51
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 51, $this->source); })())) {
            // line 52
            yield "                            <div class=\"alert alert-danger mt-3 col-lg-8\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })()), "html", null, true);
            yield "</div>
                        ";
        }
        // line 54
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
        return "connexion/connexions.html.twig";
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
        return array (  163 => 54,  157 => 52,  155 => 51,  152 => 50,  146 => 48,  144 => 47,  141 => 46,  135 => 44,  133 => 43,  108 => 21,  96 => 11,  86 => 10,  74 => 5,  64 => 4,  41 => 1,);
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
                    <form method=\"POST\" action=\"{{ path('connexion_connexions') }}\">
                
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
                        
                        {% if error %}
                            <div class=\"alert alert-danger mt-3 col-lg-8\">{{ error }}</div>
                        {% endif %}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

{% endblock %}", "connexion/connexions.html.twig", "/Users/youssoufdoucoure/Desktop/ENV./Arcadia/templates/connexion/connexions.html.twig");
    }
}
