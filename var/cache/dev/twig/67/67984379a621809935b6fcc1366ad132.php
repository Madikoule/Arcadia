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

/* base.html.twig */
class __TwigTemplate_6b7d8567ed6894b77fd7d0f5f5e93afe extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascript' => [$this, 'block_javascript'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"author\" content=\"Doucoure Mady\">
        <meta name=\"copyright\" content=\"Arcadia\">
        <meta property=\"og:type\" content=\"website\">
        <meta property=\"og:title\" content=\"Arcadia\">
        <meta property=\"og:description\" content=\"Découvrez notre zoo, un espace dédié à la faune sauvage et à la conservation. Explorez une variété d'espèces animales dans un cadre naturel et éducatif pour toute la famille.\">

        <title>";
        // line 13
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield " </title>

    ";
        // line 16
        yield "
    
    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 31
        yield "

        ";
        // line 33
        yield from $this->unwrap()->yieldBlock('javascript', $context, $blocks);
        // line 38
        yield "
    </head>

    <body>

    ";
        // line 43
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 78
        yield " 

        <main>
            
    ";
        // line 82
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 90
        yield "
        </main>


    ";
        // line 94
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 137
        yield "    </body>



</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Arcadia ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        yield "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/css/styles.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/css/services.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/css/responsiv2.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/css/habitats.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/css/responsive.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/css/responsive.css"), "html", null, true);
        yield "\">
        <link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css\" rel=\"stylesheet\"/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 33
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 34
        yield "            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/js/script2.js"), "html", null, true);
        yield "\"></script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 43
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 44
        yield "
        <header>
            <nav class=\"navbar navbar-expand-lg bg-body-tertiary fixed-top\">
                <div class=\"navis container-fluid \">
                    <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_index");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/logo.arcadia.webp"), "html", null, true);
        yield "\" class=\"barre brand\" alt=\"Arcadia Logo\"></a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasNavbar\" aria-labelledby=\"offcanvasNavbarLabel\">
                        <div class=\"offcanvas-header\">
                            <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">Menus</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"offcanvas-body\">
                            <ul class=\"navbar-nav justify-content-end flex-grow-1 pe-3\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_services");
        yield "\">Services</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitat_habitats");
        yield "\">Habitats</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_contacts");
        yield "\">Contact</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion_connexions");
        yield "\">Connexion</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </nav>
        </header>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 82
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 83
        yield "





    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 94
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 95
        yield "
        <footer>

        <div class=\"horaire\">
            <div class=\"ouvert\">
                <h4> Nos horaires d'ouvertures :</h4>
            </div>
                <div class=\"ouverture\">
                    <div class=\"jour\">
                        <ul>Lundi à Samedi <br> Ouvert 10H00 à 20HOO</ul>
                    </div>

            <div class=\"logo\">
                <h6>Nos Réseaux :</h6>
                    <a href=\"https://github.com/Madikoule\"><img src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/github.svg"), "html", null, true);
        yield "\" alt=\"GitHub\"></a>
                    <a href=\"https://www.facebook.com/\"><img src=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/facebook.svg"), "html", null, true);
        yield "\" alt=\"Facebook\"></a>
                    <a href=\"http://linkedin.com\"><img src=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/linkedin.svg"), "html", null, true);
        yield "\" alt=\"LinkedIn\"></a>
                </div>
            <div class=\"adress\">
                <p>Forêt de Brocéliande, Bretagne 35380 Cedex</p>
                <p>© 2024 Arcadia, Zoo</p>
            </div>
        </div>
    </div>


        <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
            <div class=\" fin container\">
                <div class=\"col-md-4 d-flex align-items-center\">
                    <a href=\"/\" class=\"mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1\">
                        <svg class=\"bi\" width=\"30\" height=\"24\">
                            <use xlink:href=\"#bootstrap\"></use>
                        </svg>
                    </a>
                    <span class=\"mb-3 mb-md-0 text-body-secondary\">© 2024 Arcadia,Zoo </span> 
                </div>

            </div>
        </footer>
    

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
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  355 => 111,  351 => 110,  347 => 109,  331 => 95,  321 => 94,  304 => 83,  294 => 82,  273 => 69,  267 => 66,  261 => 63,  255 => 60,  238 => 48,  232 => 44,  222 => 43,  208 => 35,  205 => 34,  195 => 33,  178 => 25,  174 => 24,  170 => 23,  166 => 22,  162 => 21,  158 => 20,  155 => 19,  145 => 18,  125 => 13,  110 => 137,  108 => 94,  102 => 90,  100 => 82,  94 => 78,  92 => 43,  85 => 38,  83 => 33,  79 => 31,  77 => 18,  73 => 16,  68 => 13,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"author\" content=\"Doucoure Mady\">
        <meta name=\"copyright\" content=\"Arcadia\">
        <meta property=\"og:type\" content=\"website\">
        <meta property=\"og:title\" content=\"Arcadia\">
        <meta property=\"og:description\" content=\"Découvrez notre zoo, un espace dédié à la faune sauvage et à la conservation. Explorez une variété d'espèces animales dans un cadre naturel et éducatif pour toute la famille.\">

        <title>{% block title %} Arcadia {% endblock %} </title>

    {# Lien vers le CSS Bootstrap #}

    
    {% block stylesheets %}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset('Assets/css/styles.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('Assets/css/services.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('Assets/css/responsiv2.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('Assets/css/habitats.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('Assets/css/responsive.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('Assets/css/responsive.css') }}\">
        <link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css\" rel=\"stylesheet\"/>
    {% endblock %}


        {% block javascript %}
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
            <script src=\"{{ asset('Assets/js/script2.js') }}\"></script>

        {% endblock %}

    </head>

    <body>

    {% block header %}

        <header>
            <nav class=\"navbar navbar-expand-lg bg-body-tertiary fixed-top\">
                <div class=\"navis container-fluid \">
                    <a href=\"{{ path('home_index') }}\"><img src=\"{{ asset('Assets/image/logo.arcadia.webp') }}\" class=\"barre brand\" alt=\"Arcadia Logo\"></a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasNavbar\" aria-labelledby=\"offcanvasNavbarLabel\">
                        <div class=\"offcanvas-header\">
                            <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">Menus</h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                        </div>
                        <div class=\"offcanvas-body\">
                            <ul class=\"navbar-nav justify-content-end flex-grow-1 pe-3\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('service_services') }}\">Services</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('habitat_habitats') }}\">Habitats</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('contact_contacts') }}\">Contact</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('connexion_connexions') }}\">Connexion</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </nav>
        </header>

    {% endblock header %} 

        <main>
            
    {% block body %}






    {% endblock %}

        </main>


    {% block footer %}

        <footer>

        <div class=\"horaire\">
            <div class=\"ouvert\">
                <h4> Nos horaires d'ouvertures :</h4>
            </div>
                <div class=\"ouverture\">
                    <div class=\"jour\">
                        <ul>Lundi à Samedi <br> Ouvert 10H00 à 20HOO</ul>
                    </div>

            <div class=\"logo\">
                <h6>Nos Réseaux :</h6>
                    <a href=\"https://github.com/Madikoule\"><img src=\"{{ asset('Assets/image/github.svg') }}\" alt=\"GitHub\"></a>
                    <a href=\"https://www.facebook.com/\"><img src=\"{{ asset('Assets/image/facebook.svg') }}\" alt=\"Facebook\"></a>
                    <a href=\"http://linkedin.com\"><img src=\"{{ asset('Assets/image/linkedin.svg') }}\" alt=\"LinkedIn\"></a>
                </div>
            <div class=\"adress\">
                <p>Forêt de Brocéliande, Bretagne 35380 Cedex</p>
                <p>© 2024 Arcadia, Zoo</p>
            </div>
        </div>
    </div>


        <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
            <div class=\" fin container\">
                <div class=\"col-md-4 d-flex align-items-center\">
                    <a href=\"/\" class=\"mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1\">
                        <svg class=\"bi\" width=\"30\" height=\"24\">
                            <use xlink:href=\"#bootstrap\"></use>
                        </svg>
                    </a>
                    <span class=\"mb-3 mb-md-0 text-body-secondary\">© 2024 Arcadia,Zoo </span> 
                </div>

            </div>
        </footer>
    

    {% endblock %}
    </body>



</html>", "base.html.twig", "/Users/youssoufdoucoure/Desktop/ENV./Arcadia/templates/base.html.twig");
    }
}
