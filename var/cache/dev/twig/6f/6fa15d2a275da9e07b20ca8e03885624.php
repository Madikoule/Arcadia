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

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "

<main>
    <div class=\"container\">
        <div class=\"divider\"></div>
        <div class=\"heading\">
            <h2>Connexion</h2>
        </div>

        ";
        // line 15
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })())) {
            // line 16
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 17
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", true, true, false, 17)) {
                // line 18
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageKey", [], "any", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageData", [], "any", false, false, false, 18), "security"), "html", null, true);
                yield "
                ";
            } else {
                // line 20
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })()), "html", null, true);
                yield "
                ";
            }
            // line 22
            yield "            </div>
        ";
        }
        // line 24
        yield "
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 26
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 27
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "
        <div class=\"check col-lg-6\">
            <form action=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion_connexions");
        yield "\" method=\"POST\">
                <div class=\"col-lg-8\">
                    <label for=\"email\" class=\"form-label\">Adresse Email</label>
                    <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("last_username", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 35, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" required autofocus>
                    <div id=\"emailHelp\" class=\"form-text\">Nous ne partagerons jamais votre email avec qui que ce soit.</div>
                </div>

                <div class=\"col-lg-8\">
                    <label for=\"password\" class=\"form-label\">Mot de passe</label>
                    <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" required><br>
                </div>

                <div class=\"col-lg-8\">
                    <div class=\"form-check mb-3\">
                        <input type=\"checkbox\" class=\"form-check-input\" id=\"remember_me\" name=\"_remember_me\">
                        <label class=\"form-check-label\" for=\"remember_me\">Se souvenir de moi</label>
                    </div>
                </div>
                
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                
                <div class=\"col-lg-8\">
                    <button type=\"submit\" class=\"btn btn-warning\">Se connecter</button>
                </div>
            </form>

            <div class=\"col-lg-8 mt-3\">
                <p><a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription");
        yield "\" class=\"text-warning\">Inscrivez-vous</a></p>
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
        return array (  197 => 59,  186 => 51,  167 => 35,  161 => 32,  157 => 30,  151 => 29,  140 => 27,  135 => 26,  131 => 25,  128 => 24,  124 => 22,  118 => 20,  112 => 18,  110 => 17,  107 => 16,  105 => 15,  94 => 6,  84 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}


<main>
    <div class=\"container\">
        <div class=\"divider\"></div>
        <div class=\"heading\">
            <h2>Connexion</h2>
        </div>

        {% if error %}
            <div class=\"alert alert-danger\">
                {% if error.messageKey is defined %}
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                {% else %}
                    {{ error }}
                {% endif %}
            </div>
        {% endif %}

        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }}\">{{ message }}</div>
            {% endfor %}
        {% endfor %}

        <div class=\"check col-lg-6\">
            <form action=\"{{ path('connexion_connexions') }}\" method=\"POST\">
                <div class=\"col-lg-8\">
                    <label for=\"email\" class=\"form-label\">Adresse Email</label>
                    <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" value=\"{{ last_username|default('') }}\" required autofocus>
                    <div id=\"emailHelp\" class=\"form-text\">Nous ne partagerons jamais votre email avec qui que ce soit.</div>
                </div>

                <div class=\"col-lg-8\">
                    <label for=\"password\" class=\"form-label\">Mot de passe</label>
                    <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" required><br>
                </div>

                <div class=\"col-lg-8\">
                    <div class=\"form-check mb-3\">
                        <input type=\"checkbox\" class=\"form-check-input\" id=\"remember_me\" name=\"_remember_me\">
                        <label class=\"form-check-label\" for=\"remember_me\">Se souvenir de moi</label>
                    </div>
                </div>
                
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                
                <div class=\"col-lg-8\">
                    <button type=\"submit\" class=\"btn btn-warning\">Se connecter</button>
                </div>
            </form>

            <div class=\"col-lg-8 mt-3\">
                <p><a href=\"{{ path('app_inscription') }}\" class=\"text-warning\">Inscrivez-vous</a></p>
            </div>
        </div>
    </div>
</main>
{% endblock %}", "connexion/connexions.html.twig", "/Users/youssoufdoucoure/Desktop/ENV./Arcadia/templates/connexion/connexions.html.twig");
    }
}
