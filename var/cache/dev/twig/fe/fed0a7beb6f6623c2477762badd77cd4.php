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

/* pages/habitat.php */
class __TwigTemplate_c52365d1415d57baea6a7526d46cdae7 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/habitat.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/habitat.php"));

        // line 1
        yield "
<?php 



\$habitats = [
    0 => [
        'image' => '../../Public/Assets/image/Habitat/savane.jpeg',
        'name' => ' La Savane ',
        'description' => 'La savane est un biome tropical avec de vastes prairies, quelques arbres, un climat chaud, et une alternance de saisons sèches et humides. Elle abrite une faune diversifiée, incluant des herbivores comme les zèbres et des prédateurs comme les lions.',

    ],

    1 => [
        'image' => '../../Public/Assets/image/Habitat/jungle.jpg',
        'name' => 'Jungle',
        'description' => 'La jungle est un biome tropical dense et humide, riche en biodiversité. Elle se caractérise par une végétation luxuriante, des arbres hauts, et une faune variée, incluant oiseaux, insectes, reptiles, et grands prédateurs.',
    ],


    2 => [
        'image' => '../../Public/Assets/image/Activity/marai-visite.jpeg',
        'name' => 'Marais',
        'description' => 'Le marais est un biome humide avec des sols saturés en eau. Il est dominé par des plantes aquatiques, des roseaux et abrite une faune variée, notamment des amphibiens, des oiseaux, et des insectes.',
    ],
    
];

?>

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
    <link rel=\"stylesheet\" href=\"../../Public/Assets/css/habitats.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">

    <title>Projet ZOO</title>
</head>

<body>
    <header>
        <nav class=\"navbar navbar-expand-lg bg-body-tertiary fixed-top\">
            <div class=\" navis container-fluid\">
                <a href=\"accueil.php\"> <img src=\"../../public/Assets/image/logo.arcadia.webp\" alt=\"arcadia\"></a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasNavbar\" aria-labelledby=\"offcanvasNavbarLabel\">
                    <div class=\"offcanvas-header\">
                        <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">Acceuil</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"offcanvas-body\">
                        <ul class=\"navbar-nav justify-content-end flex-grow-1 pe-3\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link \" href=\"service.php\">Services</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"habitat.php\">Habitats</a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"contact.php\"> Contact</a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/src/connexion.php\">Connexion</a>
                            </li>
                
                                
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    <main>
        <section id=\"habitat\" class=\"container-fluid\">
                <div class=\" col-lg-12\">
                    <h1>Nos Habitats</h1>
                    <nav class=\"para\">
                        <p> Explorer les divers lieux où vivent les animaux ! Des Savanes Africaines aux forêt tropicales,
                            des lacs profonds aux montagne enneigées , chaque espèce à un habitat unique qui 
                            répond à ses besoins spécifiques. Rejoignez-nous pour un voyage fascinant à travers
                            les habitats du monde entiers et laissez-vous émerveiller par la nature ! </p>
                    </nav>
                </div>


                <article class=\"terre\" class=\"container\">
                        <?php foreach (\$habitats as \$habitat) { ?>
                        <a href=\"..\" ><figure class=\"figure\">
                            <img src=\"<?php echo \$habitat['image'] ?>\" class=\"figure-img img-fluid rounded\" alt=\"<?php echo \$habitat['name'] ?>\">
                            <figcaption class=\"figure-caption\"><?php echo \$habitat['name'] ?></figcaption>
                        </figure></a>
                        <p><?php echo \$habitat['description'] ?></p>
                    <?php } ?>
                    </div>    
            </article>
    </section>
    
            </div> 
    </section>

    </main>


    <footer>
                <h6>Suivez-Nous</h6>
        <div class=\"logo\">
                <a href=\"https://github.com/Madikoule\"><img src=\"../../Public/Assets/image/github (6).svg\" alt=\"github\"></a>
                <a href=\"https://www.facebook.com/\"><img src=\"../../Public/Assets/image/facebook (2).svg\" alt=\"facebook\"></a>
                <a href=\"http://linkedin.com\"><img src=\"../../Public/Assets/image/linkedin.svg\" alt=\"linkedin\"></a>
            </div>

                <span class=\"mb-3 mb-md-0 text-body-secondary\">© 2024 Arcadia, </span>
            </div>
        </div>
    </footer>


</body>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/habitat.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<?php 



\$habitats = [
    0 => [
        'image' => '../../Public/Assets/image/Habitat/savane.jpeg',
        'name' => ' La Savane ',
        'description' => 'La savane est un biome tropical avec de vastes prairies, quelques arbres, un climat chaud, et une alternance de saisons sèches et humides. Elle abrite une faune diversifiée, incluant des herbivores comme les zèbres et des prédateurs comme les lions.',

    ],

    1 => [
        'image' => '../../Public/Assets/image/Habitat/jungle.jpg',
        'name' => 'Jungle',
        'description' => 'La jungle est un biome tropical dense et humide, riche en biodiversité. Elle se caractérise par une végétation luxuriante, des arbres hauts, et une faune variée, incluant oiseaux, insectes, reptiles, et grands prédateurs.',
    ],


    2 => [
        'image' => '../../Public/Assets/image/Activity/marai-visite.jpeg',
        'name' => 'Marais',
        'description' => 'Le marais est un biome humide avec des sols saturés en eau. Il est dominé par des plantes aquatiques, des roseaux et abrite une faune variée, notamment des amphibiens, des oiseaux, et des insectes.',
    ],
    
];

?>

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
    <link rel=\"stylesheet\" href=\"../../Public/Assets/css/habitats.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">

    <title>Projet ZOO</title>
</head>

<body>
    <header>
        <nav class=\"navbar navbar-expand-lg bg-body-tertiary fixed-top\">
            <div class=\" navis container-fluid\">
                <a href=\"accueil.php\"> <img src=\"../../public/Assets/image/logo.arcadia.webp\" alt=\"arcadia\"></a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasNavbar\" aria-labelledby=\"offcanvasNavbarLabel\">
                    <div class=\"offcanvas-header\">
                        <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">Acceuil</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"offcanvas-body\">
                        <ul class=\"navbar-nav justify-content-end flex-grow-1 pe-3\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link \" href=\"service.php\">Services</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"habitat.php\">Habitats</a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"contact.php\"> Contact</a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/src/connexion.php\">Connexion</a>
                            </li>
                
                                
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    <main>
        <section id=\"habitat\" class=\"container-fluid\">
                <div class=\" col-lg-12\">
                    <h1>Nos Habitats</h1>
                    <nav class=\"para\">
                        <p> Explorer les divers lieux où vivent les animaux ! Des Savanes Africaines aux forêt tropicales,
                            des lacs profonds aux montagne enneigées , chaque espèce à un habitat unique qui 
                            répond à ses besoins spécifiques. Rejoignez-nous pour un voyage fascinant à travers
                            les habitats du monde entiers et laissez-vous émerveiller par la nature ! </p>
                    </nav>
                </div>


                <article class=\"terre\" class=\"container\">
                        <?php foreach (\$habitats as \$habitat) { ?>
                        <a href=\"..\" ><figure class=\"figure\">
                            <img src=\"<?php echo \$habitat['image'] ?>\" class=\"figure-img img-fluid rounded\" alt=\"<?php echo \$habitat['name'] ?>\">
                            <figcaption class=\"figure-caption\"><?php echo \$habitat['name'] ?></figcaption>
                        </figure></a>
                        <p><?php echo \$habitat['description'] ?></p>
                    <?php } ?>
                    </div>    
            </article>
    </section>
    
            </div> 
    </section>

    </main>


    <footer>
                <h6>Suivez-Nous</h6>
        <div class=\"logo\">
                <a href=\"https://github.com/Madikoule\"><img src=\"../../Public/Assets/image/github (6).svg\" alt=\"github\"></a>
                <a href=\"https://www.facebook.com/\"><img src=\"../../Public/Assets/image/facebook (2).svg\" alt=\"facebook\"></a>
                <a href=\"http://linkedin.com\"><img src=\"../../Public/Assets/image/linkedin.svg\" alt=\"linkedin\"></a>
            </div>

                <span class=\"mb-3 mb-md-0 text-body-secondary\">© 2024 Arcadia, </span>
            </div>
        </div>
    </footer>


</body>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
</html>", "pages/habitat.php", "/Users/youssoufdoucoure/Desktop/ENV./Arcadia/templates/pages/habitat.php");
    }
}
