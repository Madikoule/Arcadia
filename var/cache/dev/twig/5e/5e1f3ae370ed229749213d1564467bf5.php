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

/* pages/accueil.html.twig */
class __TwigTemplate_e671c8fbc07c1d1b481de59ac701097c extends Template
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
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/accueil.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"author\" content=\"Doucoure Mady\">
    <meta name=\"copyright\" content=\"Arcadia\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"Arcadia\">
    <meta property=\"og:description\" content=\"Découvrez notre zoo, un espace dédié à la faune sauvage et à la conservation. Explorez une variété d'espèces animales dans un cadre naturel et éducatif pour toute la famille.\">
    
    ";
        // line 16
        yield "    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\">
    
    ";
        // line 19
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/css/responsive.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/css/style.css"), "html", null, true);
        yield "\">
    
    <title>";
        // line 22
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
</head>

<body>
    ";
        // line 26
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 60
        yield "
    <main>
        <!-- Carousel Section -->
        <section>
            <div id=\"carouselExampleAutoplaying\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <img src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/Animaux/panda-family.webp"), "html", null, true);
        yield "\" alt=\"Panda Family\">
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/Animaux/elephant.webp"), "html", null, true);
        yield "\" alt=\"Elephant\">
                    </div>
                    <div class=\"title\">
                        <span>VOYAGER AU COEUR <br> DE NOS HABITATS </span>
                    </div>
                </div>
                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\"></span>
                </button>
                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\"></span>
                </button>
            </div>
        </section>

        <!-- Welcome Section -->
        <section>
            <div class=\"container-fluid\">
                <h2>Bienvenue dans le Zoo <br> Arcadia.</h2>
                <img src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/Habitat/Aquatic-ZOO.jpeg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Arcadia\">
                <p>Un parc zoologique, aussi appelé jardin zoologique, ou plus communément zoo, est un espace où sont réunies de nombreuses espèces animales, pour la plupart sauvages, vivant en espaces clos.</p>
            </div>
        </section>

        <!-- Animal Habitat Section -->
        <section>
            <div class=\"container-fluid\">
                <h3>Les Habitats Arcadia</h3>
                <div id=\"carouselExampleCaptions\" class=\"carousel slide\">
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <img src=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/Habitat/jungle.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Jungle\">
                            <h5>Jungle</h5>
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/Habitat/maraiis.webp"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Marais\">
                            <h5>Marais</h5>
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/Habitat/savane.jpeg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Savane\">
                            <h5>Savane</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Animal Cards Section -->
        <section>
            <h3>Nos Animaux Terrestres</h3>
            <div class=\"animaux\">
                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 121, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 122
            yield "                    <div class=\"animal-card\">
                        <img src=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "image", [], "any", false, false, false, 123)), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 123), "html", null, true);
            yield "\">
                        <h4>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 124), "html", null, true);
            yield "</h4>
                        <p>";
            // line 125
            yield CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "description", [], "any", false, false, false, 125);
            yield "</p>
                        <button onclick=\"openPopup('popup";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 126), "html", null, true);
            yield "')\">Voir plus d'infos</button>
                        <div id=\"popup";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 127), "html", null, true);
            yield "\" class=\"popup\">
                            <div class=\"popup-content\">
                                <span class=\"close\" onclick=\"closePopup('popup";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 129), "html", null, true);
            yield "')\">&times;</span>
                                <h2>";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "title", [], "any", false, false, false, 130), "html", null, true);
            yield "</h2>
                                <p><strong>Habitat :</strong> ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "habitat", [], "any", false, false, false, 131), "html", null, true);
            yield "</p>
                                <p><strong>Âge :</strong> ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "age", [], "any", false, false, false, 132), "html", null, true);
            yield "</p>
                                <p><strong>Race :</strong> ";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "race", [], "any", false, false, false, 133), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        yield "            </div>
        </section>

        <!-- Services and Review Form Section -->
        <section class=\"container-fluid\">
            <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service");
        yield "\"><button type=\"button\" class=\"btn btn-warning\">Services</button></a>
            <ul>
                <li>Visite du Zoo en petit train</li>
                <li>Restaurant avec terrasse vue sur le bassin Aquatique</li>
                <li>Visite des Habitat avec un guide</li>
            </ul>
            <div class=\"form-container\">
                <h2>Votre Avis</h2>
                <form id=\"reviewForm\">
                    <div class=\"form-group\">
                        <label for=\"name\">Nom :</label>
                        <input type=\"text\" class=\"form-control\" id=\"name\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">Email :</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" required>
                    </div>
                    <div class=\"form-group\">
                        <label>Note :</label>
                        <div class=\"star-rating\">
                            ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 164
            yield "                                <input type=\"radio\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "-stars\" name=\"rating\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">
                                <label for=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "-stars\" class=\"star\">&#9733;</label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"comments\">Commentaires :</label>
                        <textarea class=\"form-control\" id=\"comments\" rows=\"5\" required></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-warning\">Soumettre</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <h4>Nos horaires d'ouvertures :</h4>
        <p>Lundi à Samedi - Ouvert 10H00 à 20H00</p>
        <h6>Nos Réseaux :</h6>
        <a href=\"https://github.com/Madikoule\"><img src=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/github.svg"), "html", null, true);
        yield "\" alt=\"GitHub\"></a>
        <a href=\"https://www.facebook.com/\"><img src=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/facebook.svg"), "html", null, true);
        yield "\" alt=\"Facebook\"></a>
        <a href=\"http://linkedin.com\"><img src=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/linkedin.svg"), "html", null, true);
        yield "\" alt=\"LinkedIn\"></a>
        <p>Forêt de Brocéliande, Bretagne 35380 Cedex</p>
        <p>© 2024 Arcadia, Zoo</p>
    </footer>

    <script src=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/js/script.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Projet ZOO";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 26
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 27
        yield "    <header>
        <nav class=\"navbar navbar-expand-lg bg-body-tertiary fixed-top\">
            <div class=\"container-fluid\">
                <a href=\"#\"><img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/logo.arcadia.webp"), "html", null, true);
        yield "\" class=\"brand\" alt=\"Arcadia Logo\"></a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"offcanvas offcanvas-end\" id=\"offcanvasNavbar\">
                    <div class=\"offcanvas-header\">
                        <h5>Menus</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"offcanvas-body\">
                        <ul class=\"navbar-nav justify-content-end flex-grow-1 pe-3\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service");
        yield "\">Services</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitat");
        yield "\">Habitats</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\">Contact</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/accueil.html.twig";
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
        return array (  414 => 51,  408 => 48,  402 => 45,  396 => 42,  381 => 30,  376 => 27,  366 => 26,  346 => 22,  330 => 190,  322 => 185,  318 => 184,  314 => 183,  296 => 167,  288 => 165,  281 => 164,  277 => 163,  254 => 143,  247 => 138,  228 => 133,  224 => 132,  220 => 131,  216 => 130,  212 => 129,  207 => 127,  203 => 126,  199 => 125,  195 => 124,  189 => 123,  186 => 122,  169 => 121,  154 => 109,  147 => 105,  140 => 101,  125 => 89,  103 => 70,  97 => 67,  88 => 60,  86 => 26,  79 => 22,  74 => 20,  69 => 19,  65 => 16,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/base.html.twig #}
<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"author\" content=\"Doucoure Mady\">
    <meta name=\"copyright\" content=\"Arcadia\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"Arcadia\">
    <meta property=\"og:description\" content=\"Découvrez notre zoo, un espace dédié à la faune sauvage et à la conservation. Explorez une variété d'espèces animales dans un cadre naturel et éducatif pour toute la famille.\">
    
    {# Lien vers le CSS Bootstrap #}
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\">
    
    {# Liens vers les feuilles de style locales #}
    <link rel=\"stylesheet\" href=\"{{ asset('Assets/css/responsive.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Assets/css/style.css') }}\">
    
    <title>{% block title %}Projet ZOO{% endblock %}</title>
</head>

<body>
    {% block header %}
    <header>
        <nav class=\"navbar navbar-expand-lg bg-body-tertiary fixed-top\">
            <div class=\"container-fluid\">
                <a href=\"#\"><img src=\"{{ asset('Assets/image/logo.arcadia.webp') }}\" class=\"brand\" alt=\"Arcadia Logo\"></a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"offcanvas offcanvas-end\" id=\"offcanvasNavbar\">
                    <div class=\"offcanvas-header\">
                        <h5>Menus</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"offcanvas-body\">
                        <ul class=\"navbar-nav justify-content-end flex-grow-1 pe-3\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('service') }}\">Services</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('habitat') }}\">Habitats</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('connexion') }}\">Connexion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    {% endblock %}

    <main>
        <!-- Carousel Section -->
        <section>
            <div id=\"carouselExampleAutoplaying\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <img src=\"{{ asset('Assets/image/Animaux/panda-family.webp') }}\" alt=\"Panda Family\">
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"{{ asset('Assets/image/Animaux/elephant.webp') }}\" alt=\"Elephant\">
                    </div>
                    <div class=\"title\">
                        <span>VOYAGER AU COEUR <br> DE NOS HABITATS </span>
                    </div>
                </div>
                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\"></span>
                </button>
                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\"></span>
                </button>
            </div>
        </section>

        <!-- Welcome Section -->
        <section>
            <div class=\"container-fluid\">
                <h2>Bienvenue dans le Zoo <br> Arcadia.</h2>
                <img src=\"{{ asset('Assets/image/Habitat/Aquatic-ZOO.jpeg') }}\" class=\"img-fluid\" alt=\"Arcadia\">
                <p>Un parc zoologique, aussi appelé jardin zoologique, ou plus communément zoo, est un espace où sont réunies de nombreuses espèces animales, pour la plupart sauvages, vivant en espaces clos.</p>
            </div>
        </section>

        <!-- Animal Habitat Section -->
        <section>
            <div class=\"container-fluid\">
                <h3>Les Habitats Arcadia</h3>
                <div id=\"carouselExampleCaptions\" class=\"carousel slide\">
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <img src=\"{{ asset('Assets/image/Habitat/jungle.jpg') }}\" class=\"img-fluid\" alt=\"Jungle\">
                            <h5>Jungle</h5>
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"{{ asset('Assets/image/Habitat/maraiis.webp') }}\" class=\"img-fluid\" alt=\"Marais\">
                            <h5>Marais</h5>
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"{{ asset('Assets/image/Habitat/savane.jpeg') }}\" class=\"img-fluid\" alt=\"Savane\">
                            <h5>Savane</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Animal Cards Section -->
        <section>
            <h3>Nos Animaux Terrestres</h3>
            <div class=\"animaux\">
                {% for animal in animals %}
                    <div class=\"animal-card\">
                        <img src=\"{{ asset(animal.image) }}\" class=\"img-fluid\" alt=\"{{ animal.name }}\">
                        <h4>{{ animal.name }}</h4>
                        <p>{{ animal.description|raw }}</p>
                        <button onclick=\"openPopup('popup{{ loop.index }}')\">Voir plus d'infos</button>
                        <div id=\"popup{{ loop.index }}\" class=\"popup\">
                            <div class=\"popup-content\">
                                <span class=\"close\" onclick=\"closePopup('popup{{ loop.index }}')\">&times;</span>
                                <h2>{{ animal.title }}</h2>
                                <p><strong>Habitat :</strong> {{ animal.habitat }}</p>
                                <p><strong>Âge :</strong> {{ animal.age }}</p>
                                <p><strong>Race :</strong> {{ animal.race }}</p>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </section>

        <!-- Services and Review Form Section -->
        <section class=\"container-fluid\">
            <a href=\"{{ path('service') }}\"><button type=\"button\" class=\"btn btn-warning\">Services</button></a>
            <ul>
                <li>Visite du Zoo en petit train</li>
                <li>Restaurant avec terrasse vue sur le bassin Aquatique</li>
                <li>Visite des Habitat avec un guide</li>
            </ul>
            <div class=\"form-container\">
                <h2>Votre Avis</h2>
                <form id=\"reviewForm\">
                    <div class=\"form-group\">
                        <label for=\"name\">Nom :</label>
                        <input type=\"text\" class=\"form-control\" id=\"name\" required>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">Email :</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" required>
                    </div>
                    <div class=\"form-group\">
                        <label>Note :</label>
                        <div class=\"star-rating\">
                            {% for i in 5..1 %}
                                <input type=\"radio\" id=\"{{ i }}-stars\" name=\"rating\" value=\"{{ i }}\">
                                <label for=\"{{ i }}-stars\" class=\"star\">&#9733;</label>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"comments\">Commentaires :</label>
                        <textarea class=\"form-control\" id=\"comments\" rows=\"5\" required></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-warning\">Soumettre</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <h4>Nos horaires d'ouvertures :</h4>
        <p>Lundi à Samedi - Ouvert 10H00 à 20H00</p>
        <h6>Nos Réseaux :</h6>
        <a href=\"https://github.com/Madikoule\"><img src=\"{{ asset('Assets/image/github.svg') }}\" alt=\"GitHub\"></a>
        <a href=\"https://www.facebook.com/\"><img src=\"{{ asset('Assets/image/facebook.svg') }}\" alt=\"Facebook\"></a>
        <a href=\"http://linkedin.com\"><img src=\"{{ asset('Assets/image/linkedin.svg') }}\" alt=\"LinkedIn\"></a>
        <p>Forêt de Brocéliande, Bretagne 35380 Cedex</p>
        <p>© 2024 Arcadia, Zoo</p>
    </footer>

    <script src=\"{{ asset('Assets/js/script.js') }}\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
</body>
</html>
", "pages/accueil.html.twig", "/Users/youssoufdoucoure/Desktop/ENV./Arcadia/templates/pages/accueil.html.twig");
    }
}
