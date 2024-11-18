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

/* connexion/connexion.php */
class __TwigTemplate_c99826c75b54d58ead3acb0106556e0c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/connexion.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "connexion/connexion.php"));

        // line 1
        yield "<?php


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
    <link rel=\"stylesheet\" href=\"../Public/Assets/css/connexions.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <title>Projet ZOO</title>
</head>

<body>

    <header>
        <nav class=\"navbar navbar-expand-lg bg-body-tertiary fixed-top\">
            <div class=\" navis container-fluid\">
                <a href=\"accueil.php\"><img src=\"../public/Assets/image/logo.arcadia.webp\" class=\"barre brand\" alt=\"logo arcadia\"></a>
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
                                <a class=\"nav-link\" href=\"contact.php\">Contact</a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"src/connexion.php\">Connexion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>

<?php

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'auth.php';


?>

        <div class=\"container\">
            <div class=\"divider\"></div>
            <div class=\"heading\">
                <h2>Connexion</h2>
            </div>

                        <div class=\"check col-lg-6\">
                    <form method=\"POST\" action=\"\">      
                    <div class=\"col-lg-8\">
                        <label for=\"exampleInputEmail1\" class=\"form-label\">Adress Email</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                            <div id=\"emailHelp\" class=\"form-text\">Nous ne partagerons jamais votre email avec qui que ce soit.</div>
                        </div>

                            <div class=\"col-lg-8\">
                                <label for=\"exampleInputPassword1\" class=\"form-label\">Password</label>
                                <input type=\"password\" name=\"password\" class=\"form-control\" id=\"exampleInputPassword1\"><br>
                            </div>

                            <div class=\"col-lg-8\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">Cochez-moi</label>
                            </div>
                            <div class=\"col-lg-8\">
                                <button type=\"submit\" class=\"btn btn-warning\">Validé</button>
                            </div>

            <?php if (isset(\$error)): ?>
                <div class=\"alert alert-danger mt-3 col-lg-8\"><?= htmlspecialchars(\$error); ?></div>
            <?php endif; ?>
            <?php if (isset(\$success)): ?>
                <div class=\"alert alert-success mt-3 col-lg-8\"><?= htmlspecialchars(\$success); ?></div>
            <?php endif; ?>
            <?php if (\$erreur): ?>
                <div class=\"alert alert-danger mt-3 col-lg-8\"><?= \$erreur ?></div>
            <?php endif ?>

            
                        </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "connexion/connexion.php";
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
        return new Source("<?php


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
    <link rel=\"stylesheet\" href=\"../Public/Assets/css/connexions.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <title>Projet ZOO</title>
</head>

<body>

    <header>
        <nav class=\"navbar navbar-expand-lg bg-body-tertiary fixed-top\">
            <div class=\" navis container-fluid\">
                <a href=\"accueil.php\"><img src=\"../public/Assets/image/logo.arcadia.webp\" class=\"barre brand\" alt=\"logo arcadia\"></a>
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
                                <a class=\"nav-link\" href=\"contact.php\">Contact</a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"src/connexion.php\">Connexion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>

<?php

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'auth.php';


?>

        <div class=\"container\">
            <div class=\"divider\"></div>
            <div class=\"heading\">
                <h2>Connexion</h2>
            </div>

                        <div class=\"check col-lg-6\">
                    <form method=\"POST\" action=\"\">      
                    <div class=\"col-lg-8\">
                        <label for=\"exampleInputEmail1\" class=\"form-label\">Adress Email</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                            <div id=\"emailHelp\" class=\"form-text\">Nous ne partagerons jamais votre email avec qui que ce soit.</div>
                        </div>

                            <div class=\"col-lg-8\">
                                <label for=\"exampleInputPassword1\" class=\"form-label\">Password</label>
                                <input type=\"password\" name=\"password\" class=\"form-control\" id=\"exampleInputPassword1\"><br>
                            </div>

                            <div class=\"col-lg-8\">
                                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                <label class=\"form-check-label\" for=\"exampleCheck1\">Cochez-moi</label>
                            </div>
                            <div class=\"col-lg-8\">
                                <button type=\"submit\" class=\"btn btn-warning\">Validé</button>
                            </div>

            <?php if (isset(\$error)): ?>
                <div class=\"alert alert-danger mt-3 col-lg-8\"><?= htmlspecialchars(\$error); ?></div>
            <?php endif; ?>
            <?php if (isset(\$success)): ?>
                <div class=\"alert alert-success mt-3 col-lg-8\"><?= htmlspecialchars(\$success); ?></div>
            <?php endif; ?>
            <?php if (\$erreur): ?>
                <div class=\"alert alert-danger mt-3 col-lg-8\"><?= \$erreur ?></div>
            <?php endif ?>

            
                        </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>", "connexion/connexion.php", "/Users/youssoufdoucoure/Desktop/ENV./Arcadia/templates/connexion/connexion.php");
    }
}
