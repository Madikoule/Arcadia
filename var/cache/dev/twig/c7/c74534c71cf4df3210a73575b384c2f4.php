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

/* home/index.html.twig */
class __TwigTemplate_ec8c2633c8d5c436b03d9a72a72cb4a4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "        <!-- Section carousel -->
        <section>
            <div id=\"carouselExampleAutoplaying\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"cover carousel-item active\">
                        <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/Animaux/panda-family.webp"), "html", null, true);
        yield "\" alt=\"Panda Family\">
                    </div>
                    <div class=\"cover carousel-item\">
                        <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/Animaux/elephant.webp"), "html", null, true);
        yield "\" alt=\"Elephant\">
                    </div>
                    <div class=\"title\">
                        <span>VOYAGER AU COEUR <br> DE NOS HABITATS</span>
                    </div>
                </div>
                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">Previous</span>
                </button>
                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">Next</span>
                </button>
            </div>
        </section>

        <!-- Section découverte -->
        <section>
            <div class=\"decouverte container-fluid\">
                <div class=\"titre2\">
                    <h2>Bienvenue dans le Zoo <br> Arcadia.</h2>
                </div>
                <div class=\"zoo\">
                    <img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/Habitat/Aquatic-ZOO.jpeg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Arcadia\">
                </div>
                <div class=\"text1\">
                    <p>Un parc zoologique, aussi appelé jardin zoologique, ou plus communément zoo, est un espace où sont réunies de nombreuses espèces animales, pour la plupart sauvages, vivant dans des espaces clos.</p>
                </div>
            </div>
        </section>

        <!-- Section habitats Arcadia -->
        <section>
            <div class=\"slide1 container-fluid\">
                <div class=\"titre3\">
                    <h3>Les Habitats Arcadia</h3>
                </div>
                <div id=\"carouselExampleCaptions\" class=\"carousel slide\">
                    <div class=\"carousel-indicators\">
                        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                    </div>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <img src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/Habitat/jungle.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Jungle\">
                            <div class=\"sel1\"><h5>Jungle</h5></div>
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/Habitat/maraiis.webp"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Marais\">
                            <div class=\"sel2\"><h5>Marais</h5></div>
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/image/Habitat/savane.jpeg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Savane\">
                            <div class=\"sel3\"><h5>Savane</h5></div>
                        </div>
                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </section>

        <!-- Section animaux -->
        <section class=\"container-fluid\">
            <div class=\"titl2\">
                <h3>Nos Animaux Terrestres</h3>
            </div>

            <div class=\"animaux\">
                ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 95, $this->source); })()));
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
            // line 96
            yield "                    <div class=\"panda\">
                        <img src=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "image", [], "any", false, false, false, 97)), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 97), "html", null, true);
            yield "\">
                        <div class=\"name1\">
                            <h4>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 99), "html", null, true);
            yield "</h4>
                            <p>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "description", [], "any", false, false, false, 100), "html", null, true);
            yield "</p>
                            <button onclick=\"openPopup('popup";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 101), "html", null, true);
            yield "')\">Voir plus d'infos</button>
                        </div>

                        <div id=\"popup";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 104), "html", null, true);
            yield "\" class=\"popup\">
                            <div class=\"popup-content\">
                                <span class=\"close\" onclick=\"closePopup('popup";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 106), "html", null, true);
            yield "')\">&times;</span>
                                <h2>";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "title", [], "any", false, false, false, 107), "html", null, true);
            yield "</h2>
                                <p><strong>Habitat :</strong> ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "habitat", [], "any", false, false, false, 108), "html", null, true);
            yield "</p>
                                <p><strong>Âge :</strong> ";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "age", [], "any", false, false, false, 109), "html", null, true);
            yield "</p>
                                <p><strong>Race :</strong> ";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "race", [], "any", false, false, false, 110), "html", null, true);
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
        // line 115
        yield "                </div>
                </div>
        </section>


        <!-- Section avis -->
        <section>
            <div class=\"vert container-fluid\">
                <div class=\"description\">
                    <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_services");
        yield "\"><button type=\"button\" class=\"btn btn-warning\">Services</button></a>
                    <p>- Visite du Zoo en petit train.</p>
                    <p>- Restaurant avec terrasse vue sur le bassin aquatique.</p>
                    <p>- Visite des habitats avec un guide.</p>
                </div>

                <div class=\"form-container\">
                    <h2 class=\"text-center\">Votre Avis</h2>
                    <form id=\"reviewForm\">
                        <div class=\"form-group\">
                            <label for=\"name\">Nom :</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Votre nom\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\">Email :</label>
                            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Votre email\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Note :</label>
                            <div class=\"star-rating\">
                                ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 145
            yield "                                    <input type=\"radio\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "-stars\" name=\"rating\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">
                                    <label for=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "-stars\" class=\"star\">&#9733;</label>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        yield "                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"comments\">Commentaires :</label>
                            <textarea class=\"form-control\" id=\"comments\" rows=\"5\" placeholder=\"Laissez votre avis ici...\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                    </form>
                </div>
            </div>
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
        return "home/index.html.twig";
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
        return array (  314 => 148,  306 => 146,  299 => 145,  295 => 144,  272 => 124,  261 => 115,  242 => 110,  238 => 109,  234 => 108,  230 => 107,  226 => 106,  221 => 104,  215 => 101,  211 => 100,  207 => 99,  200 => 97,  197 => 96,  180 => 95,  152 => 70,  145 => 66,  138 => 62,  113 => 40,  86 => 16,  80 => 13,  73 => 8,  63 => 7,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}





{% block body %}
        <!-- Section carousel -->
        <section>
            <div id=\"carouselExampleAutoplaying\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"cover carousel-item active\">
                        <img src=\"{{ asset('Assets/image/Animaux/panda-family.webp') }}\" alt=\"Panda Family\">
                    </div>
                    <div class=\"cover carousel-item\">
                        <img src=\"{{ asset('Assets/image/Animaux/elephant.webp') }}\" alt=\"Elephant\">
                    </div>
                    <div class=\"title\">
                        <span>VOYAGER AU COEUR <br> DE NOS HABITATS</span>
                    </div>
                </div>
                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">Previous</span>
                </button>
                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">Next</span>
                </button>
            </div>
        </section>

        <!-- Section découverte -->
        <section>
            <div class=\"decouverte container-fluid\">
                <div class=\"titre2\">
                    <h2>Bienvenue dans le Zoo <br> Arcadia.</h2>
                </div>
                <div class=\"zoo\">
                    <img src=\"{{ asset('Assets/image/Habitat/Aquatic-ZOO.jpeg') }}\" class=\"img-fluid\" alt=\"Arcadia\">
                </div>
                <div class=\"text1\">
                    <p>Un parc zoologique, aussi appelé jardin zoologique, ou plus communément zoo, est un espace où sont réunies de nombreuses espèces animales, pour la plupart sauvages, vivant dans des espaces clos.</p>
                </div>
            </div>
        </section>

        <!-- Section habitats Arcadia -->
        <section>
            <div class=\"slide1 container-fluid\">
                <div class=\"titre3\">
                    <h3>Les Habitats Arcadia</h3>
                </div>
                <div id=\"carouselExampleCaptions\" class=\"carousel slide\">
                    <div class=\"carousel-indicators\">
                        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                        <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                    </div>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <img src=\"{{ asset('Assets/image/Habitat/jungle.jpg') }}\" class=\"img-fluid\" alt=\"Jungle\">
                            <div class=\"sel1\"><h5>Jungle</h5></div>
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"{{ asset('Assets/image/Habitat/maraiis.webp') }}\" class=\"img-fluid\" alt=\"Marais\">
                            <div class=\"sel2\"><h5>Marais</h5></div>
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"{{ asset('Assets/image/Habitat/savane.jpeg') }}\" class=\"img-fluid\" alt=\"Savane\">
                            <div class=\"sel3\"><h5>Savane</h5></div>
                        </div>
                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                </div>
            </div>
        </div>
        </div>
    </section>

        <!-- Section animaux -->
        <section class=\"container-fluid\">
            <div class=\"titl2\">
                <h3>Nos Animaux Terrestres</h3>
            </div>

            <div class=\"animaux\">
                {% for animal in animals %}
                    <div class=\"panda\">
                        <img src=\"{{ asset(animal.image) }}\" class=\"img-fluid\" alt=\"{{ animal.name }}\">
                        <div class=\"name1\">
                            <h4>{{ animal.name }}</h4>
                            <p>{{ animal.description }}</p>
                            <button onclick=\"openPopup('popup{{ loop.index }}')\">Voir plus d'infos</button>
                        </div>

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
                </div>
        </section>


        <!-- Section avis -->
        <section>
            <div class=\"vert container-fluid\">
                <div class=\"description\">
                    <a href=\"{{ path('service_services') }}\"><button type=\"button\" class=\"btn btn-warning\">Services</button></a>
                    <p>- Visite du Zoo en petit train.</p>
                    <p>- Restaurant avec terrasse vue sur le bassin aquatique.</p>
                    <p>- Visite des habitats avec un guide.</p>
                </div>

                <div class=\"form-container\">
                    <h2 class=\"text-center\">Votre Avis</h2>
                    <form id=\"reviewForm\">
                        <div class=\"form-group\">
                            <label for=\"name\">Nom :</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Votre nom\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\">Email :</label>
                            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Votre email\" required>
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
                            <textarea class=\"form-control\" id=\"comments\" rows=\"5\" placeholder=\"Laissez votre avis ici...\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                    </form>
                </div>
            </div>
        </section>
{% endblock %}
", "home/index.html.twig", "/Users/youssoufdoucoure/Desktop/ENV./Arcadia/templates/home/index.html.twig");
    }
}
