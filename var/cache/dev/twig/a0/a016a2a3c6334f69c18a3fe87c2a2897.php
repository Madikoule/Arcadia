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

/* admin/admin.php */
class __TwigTemplate_7c4a1b900dab566c3b41446742482dd9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.php"));

        // line 1
        yield "

<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"../Public/Assets/css/dashboards.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <title>Projet ZOO</title>
</head>

<header>


        <div class=\"container-fluid\">
            <ul class=\"nav justify-content-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"../templates/admin/accueil.php\">Acceuil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../templates/admin/service.php\">Service</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../templates/admin/contact.php\">Gestion</a>
                </li>
            </ul>
        </div>
</header>

<main>
    <h1 class=\"text-logo\"><span> Arcadia </span></h1>

    <div class=\"container  admin\">
        <div class=\"row\">
            <h1><strong> Liste </strong></h1><a href=\"\" class=\"btn btn_success btn-lg\">
        </div>
    </div>




</main>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>




    </div>
</html>






private AuthService \$authService;

    
public function __construct(AuthService \$authService)
{
    \$this->authService = \$authService;
}

#[Route('/connexion', name: 'connexion_connexions', methods: ['GET', 'POST'])]
public function index(Request \$request): Response
{
    \$erreur = null;

    // Vérification de la soumission du formulaire
    if (\$request->isMethod('POST')) {
        \$email = filter_var(\$request->request->get('email'), FILTER_SANITIZE_EMAIL);
        \$password = \$request->request->get('password');

        // Validation des champs
        if (empty(\$email) || empty(\$password)) {
            \$erreur = \"Veuillez remplir tous les champs.\";
        } elseif (!filter_var(\$email, FILTER_VALIDATE_EMAIL)) {
            \$erreur = \"Adresse email invalide.\";
        } elseif (!\$this->authService->validateCredentials(\$email,\$password)) {
            \$erreur = \"Identification incorrecte.\";
        } else {
            // Connexion réussie
            \$this->addFlash('success', 'Connexion réussie !');
            return \$this->redirectToRoute('app_dashboard');
        }
    }

    return \$this->render('user/connexion.html.twig', [
        'erreur' => \$erreur,
    ]);
}

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/admin.php";
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

<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"../Public/Assets/css/dashboards.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <title>Projet ZOO</title>
</head>

<header>


        <div class=\"container-fluid\">
            <ul class=\"nav justify-content-center\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"../templates/admin/accueil.php\">Acceuil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../templates/admin/service.php\">Service</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"../templates/admin/contact.php\">Gestion</a>
                </li>
            </ul>
        </div>
</header>

<main>
    <h1 class=\"text-logo\"><span> Arcadia </span></h1>

    <div class=\"container  admin\">
        <div class=\"row\">
            <h1><strong> Liste </strong></h1><a href=\"\" class=\"btn btn_success btn-lg\">
        </div>
    </div>




</main>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>




    </div>
</html>






private AuthService \$authService;

    
public function __construct(AuthService \$authService)
{
    \$this->authService = \$authService;
}

#[Route('/connexion', name: 'connexion_connexions', methods: ['GET', 'POST'])]
public function index(Request \$request): Response
{
    \$erreur = null;

    // Vérification de la soumission du formulaire
    if (\$request->isMethod('POST')) {
        \$email = filter_var(\$request->request->get('email'), FILTER_SANITIZE_EMAIL);
        \$password = \$request->request->get('password');

        // Validation des champs
        if (empty(\$email) || empty(\$password)) {
            \$erreur = \"Veuillez remplir tous les champs.\";
        } elseif (!filter_var(\$email, FILTER_VALIDATE_EMAIL)) {
            \$erreur = \"Adresse email invalide.\";
        } elseif (!\$this->authService->validateCredentials(\$email,\$password)) {
            \$erreur = \"Identification incorrecte.\";
        } else {
            // Connexion réussie
            \$this->addFlash('success', 'Connexion réussie !');
            return \$this->redirectToRoute('app_dashboard');
        }
    }

    return \$this->render('user/connexion.html.twig', [
        'erreur' => \$erreur,
    ]);
}

", "admin/admin.php", "/Users/youssoufdoucoure/Desktop/ENV./Arcadia/templates/admin/admin.php");
    }
}
