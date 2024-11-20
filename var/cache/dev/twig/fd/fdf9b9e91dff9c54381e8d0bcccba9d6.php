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

/* contact/contacts.html.twig */
class __TwigTemplate_0a883c3b06beb6026b1908a61dcff3aa extends Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contacts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contacts.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/contacts.html.twig", 1);
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

        yield "Contact!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "<main>
    <div class=\"container\">
        <br>
        <div class=\"divider\"></div>
        <div class=\"heading\">
            <h2>Contactez-moi</h2>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-10 col-lg-offset-1\">
                    <form id=\"contact-form\" method=\"post\" action=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_send");
        yield "\" role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-md-8\">
                                <label for=\"name\">Nom<span class=\"bleu\">*</span></label>
                                <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Votre nom\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("name", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 24, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                                <p class=\"comments\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "nameError", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "nameError", [], "any", false, false, false, 25), "")) : ("")), "html", null, true);
        yield "</p>
                            </div>

                            <div class=\"col-md-8\">
                                <label for=\"firstname\">Prénom<span class=\"bleu\">*</span></label>
                                <input type=\"text\" id=\"firstname\" name=\"firstname\" required class=\"form-control\" placeholder=\"Votre prénom\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("firstname", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new RuntimeError('Variable "firstname" does not exist.', 30, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                                <p class=\"comments\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "firstnameError", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "firstnameError", [], "any", false, false, false, 31), "")) : ("")), "html", null, true);
        yield "</p>
                            </div>

                            <div class=\"col-md-8\">
                                <label for=\"email\">Email<span class=\"bleu\">*</span></label>
                                <input type=\"email\" id=\"email\" name=\"email\" required class=\"form-control\" placeholder=\"Votre email\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("email", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 36, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                                <p class=\"comments\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "emailError", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "emailError", [], "any", false, false, false, 37), "")) : ("")), "html", null, true);
        yield "</p>
                            </div>

                            <div class=\"col-md-8\">
                                <label for=\"message\">Message<span class=\"bleu\">*</span></label>
                                <textarea id=\"description\" name=\"description\" class=\"form-control\" placeholder=\"Votre message\" rows=\"4\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("message", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 42, $this->source); })()), "")) : ("")), "html", null, true);
        yield "</textarea>
                                <p class=\"comments\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "messageError", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "messageError", [], "any", false, false, false, 43), "")) : ("")), "html", null, true);
        yield "</p>
                            </div>

                            <div class=\"col-md-8\">
                                <p class=\"info\"><strong>* Ces informations sont requises</strong></p>
                            </div>

                            <div class=\"col-md-8\">
                                <input type=\"submit\" class=\"button1\" value=\"Envoyer\">
                            </div>
                            <!-- Affichage des messages de succès -->
                            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "flashes", ["success"], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 55
            yield "                                <div class=\"alert alert-success\">
                                    ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class=\"retour\">
            <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_index");
        yield "\">
                <button type=\"button\" class=\"btn btn-warning\">Retour</button>
            </a>
        </div>
    </div>
</div>

</main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 79
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 80
        yield "
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
        return "contact/contacts.html.twig";
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
        return array (  224 => 80,  214 => 79,  193 => 66,  184 => 59,  175 => 56,  172 => 55,  168 => 54,  154 => 43,  150 => 42,  142 => 37,  138 => 36,  130 => 31,  126 => 30,  118 => 25,  114 => 24,  107 => 20,  95 => 10,  85 => 9,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact!{% endblock %}





{% block body %}
<main>
    <div class=\"container\">
        <br>
        <div class=\"divider\"></div>
        <div class=\"heading\">
            <h2>Contactez-moi</h2>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-10 col-lg-offset-1\">
                    <form id=\"contact-form\" method=\"post\" action=\"{{ path('contact_send') }}\" role=\"form\">
                        <div class=\"row\">
                            <div class=\"col-md-8\">
                                <label for=\"name\">Nom<span class=\"bleu\">*</span></label>
                                <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" placeholder=\"Votre nom\" value=\"{{ name|default('') }}\">
                                <p class=\"comments\">{{ errors.nameError|default('') }}</p>
                            </div>

                            <div class=\"col-md-8\">
                                <label for=\"firstname\">Prénom<span class=\"bleu\">*</span></label>
                                <input type=\"text\" id=\"firstname\" name=\"firstname\" required class=\"form-control\" placeholder=\"Votre prénom\" value=\"{{ firstname|default('') }}\">
                                <p class=\"comments\">{{ errors.firstnameError|default('') }}</p>
                            </div>

                            <div class=\"col-md-8\">
                                <label for=\"email\">Email<span class=\"bleu\">*</span></label>
                                <input type=\"email\" id=\"email\" name=\"email\" required class=\"form-control\" placeholder=\"Votre email\" value=\"{{ email|default('') }}\">
                                <p class=\"comments\">{{ errors.emailError|default('') }}</p>
                            </div>

                            <div class=\"col-md-8\">
                                <label for=\"message\">Message<span class=\"bleu\">*</span></label>
                                <textarea id=\"description\" name=\"description\" class=\"form-control\" placeholder=\"Votre message\" rows=\"4\">{{ message|default('') }}</textarea>
                                <p class=\"comments\">{{ errors.messageError|default('') }}</p>
                            </div>

                            <div class=\"col-md-8\">
                                <p class=\"info\"><strong>* Ces informations sont requises</strong></p>
                            </div>

                            <div class=\"col-md-8\">
                                <input type=\"submit\" class=\"button1\" value=\"Envoyer\">
                            </div>
                            <!-- Affichage des messages de succès -->
                            {% for message in app.flashes('success') %}
                                <div class=\"alert alert-success\">
                                    {{ message }}
                                </div>
                            {% endfor %}
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class=\"retour\">
            <a href=\"{{ path('home_index') }}\">
                <button type=\"button\" class=\"btn btn-warning\">Retour</button>
            </a>
        </div>
    </div>
</div>

</main>

{% endblock %}



{% block javascript %}

{% endblock %}", "contact/contacts.html.twig", "/Users/youssoufdoucoure/Desktop/ENV./Arcadia/templates/contact/contacts.html.twig");
    }
}
