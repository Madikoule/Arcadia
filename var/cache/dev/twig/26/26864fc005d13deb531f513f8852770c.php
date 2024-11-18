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

/* pages/Dashboard.php */
class __TwigTemplate_547adb2d2aecb751029c1cae02084dd6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/Dashboard.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/Dashboard.php"));

        // line 1
        yield "<?php
session_start();

?>

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
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\"></script>

    <title>Projet ZOO</title>
</head>

<body>

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
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"../src/dashboard.php\">contact</a>
                </li>
            </ul>
        </div>
</header>

<main>


<?php

    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'auth.php';

    include_once 'functions/auth.php';
    forcer_utilisateur_connecte ();

    include_once 'functions/compteur.php';

    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';
    \$total= nombre_vues();
    \$annee =(int)date('Y');
    \$annee_selection = empty(\$_GET['annee']) ? \$annee : (int)\$_GET['annee'];
    \$mois = [
        '01' => 'Janvier',
        '02' => 'Février',
        '03' => 'Mars',
        '04' => 'Avril',
        '05' => 'Mai',
        '06' => 'Juin',
        '07' => 'Juillet',
        '08' => 'Aout',
        '09' => 'Septembre',
        '10' => 'Octobre',
        '11' => 'Novembre',
        '12' => 'Décembre',
    ];


    // Vérifier si un message de succès existe dans la session
    if (isset(\$_SESSION['success_message'])) {
        echo '<h2>Message Reçu :</h2>';
        echo '<pre>' . \$_SESSION['success_message'] . '</pre>';
        
        // Effacer le message de la session après l'affichage
        unset(\$_SESSION['success_message']);
    } else {
        echo '<p>Aucun message n\\'a été envoyé.</p>';
    }

?>

        <div class=\"dash\">
            <h1> Dashboard </h1>
        </div>

    <div class=\"flex-shrink-0 p-3\" style=\"width: 280px;\">
        <a href=\"/\" class=\"d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom\">
            <svg class=\"bi pe-none me-2\" width=\"30\" height=\"24\"><use xlink:href=\"#bootstrap\"></use></svg>
            <span class=\"fs-5 fw-semibold\">Menus</span>
        </a>
        <ul class=\"list-unstyled ps-0\">
        <li class=\"mb-1\">
            <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0\" data-bs-toggle=\"collapse\" data-bs-target=\"#home-collapse\" aria-expanded=\"true\">
            Home
            </button>
            <div class=\"collapse show\" id=\"home-collapse\">
                <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                    <li><a href=\"\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Habitat</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Services</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Animaux</a></li>
                </ul>
            </div>
        </li>
        <li class=\"mb-1\">
            <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#dashboard-collapse\" aria-expanded=\"false\">
            Dashboard
            </button>
            <div class=\"collapse\" id=\"dashboard-collapse\">
                <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Vétérinaire</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Rapport</a></li>
                </ul>
            </div>
        </li>
        <li class=\"border-top my-3\"></li>
        <li class=\"mb-1\">
            <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#account-collapse\" aria-expanded=\"false\">
            Account
            </button>
            <div class=\"collapse\" id=\"account-collapse\">
                <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">New...</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Profile</a></li>
                </ul>
            </div>
        </li>
        </ul>
    </div>

    <section class=\"container-fluid \"  >
        <nav class=\"vue\">

    <div class=\" annee container-fluid\">
        <div class=\"row\"> 
            <div class=\"col-md-4\">
                <ul class=\"list-group\">
                    <?php for (\$i = 0; \$i < 5; \$i++): ?>
                    <a class=\"list-group-item <?=\$annee - \$i === \$annee_selection ? 'active' : '';?>\" href=\"dashboard.php?annee=<?=\$annee - \$i ?>\"><?= \$annee - \$i ?></a>

                    <?php endfor ?>
                </ul>
            </div>
        </div>
    </div>
        
        <div class=\"container-fluid\">
            <div class=\"card\" style=\"width: 400px ;\">
                <div class=\"card-body\">
                    <strong style= \"font-size:3em;\"><?= \$total?></strong>
                    Visite<?= \$total  > 1 ? 's' : '' ?> total
                </div>
            </div>
        </div>
        </nav>
        </section>



</main>

<footer>

        <div class=\"container col-md-6 foot\">
            <div class=\"englob\">
                <div class=\" col-md-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                    </div>
                        <h4>Compteur de vue </h4>

        <?php

            require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';

            \$vues= ajouter_vue();

        ?>

                        <p>Il y a <?=\$vues?> visite<?php if (\$vues > 1): ?>s<?php endif; ?> sur le site </p>
                    </div>
                </div>
                </div>
            </div>
        
        <article>
            <form class=\"activity\">
                <div class=\"mb-6 col-md-6\">
                    <label for=\"exampleFormControlInput1\" class=\"form-label\" >Votre Nom</label>
                    <input type=\"name\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"votre nom\">
                </div>
                <div class=\"mb-6 col-md-6\">
                    <label for=\"exampleFormControlTextarea1\" class=\"form-label\"> Rédiger message au Vétérinaire</label>
                    <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                </div>
                <div class=\"col-12\">
                    <button class=\"btn btn-dark\" type=\"submit\">Envoyé </button>
                </div>
            </form>
        </article>
        
            <div class=\"fermer\">
                <a href=\"./connexion.php\"><button type=\"button\" class=\"btn btn-warning \">Se deconnecter</button></a>
            </div>
        
            <div class=\"logo\">
                <h6>Suivez-Nous</h6>
                <a href=\"https://github.com/Madikoule\"><img src=\"../../Public/Assets/image/github (6).svg\" alt=\"github\"></a>
                <a href=\"https://www.facebook.com/\"><img src=\"../../Public/Assets/image/facebook (2).svg\" alt=\"facebook\"></a>
                <a href=\"http://linkedin.com\"><img src=\"../../Public/Assets/image/linkedin.svg\" alt=\"linkedin\"></a>
            </div>

                <span class=\"mb-3 mb-md-0 text-body-secondary\">©2024 Arcadia, </span>
            </div>
        </div>
        
    </footer>
</body>
    <script src=\"../Public/Assets/js/script.js\"></script>
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
        return "pages/Dashboard.php";
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
session_start();

?>

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
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js\"></script>

    <title>Projet ZOO</title>
</head>

<body>

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
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"../src/dashboard.php\">contact</a>
                </li>
            </ul>
        </div>
</header>

<main>


<?php

    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'auth.php';

    include_once 'functions/auth.php';
    forcer_utilisateur_connecte ();

    include_once 'functions/compteur.php';

    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';
    \$total= nombre_vues();
    \$annee =(int)date('Y');
    \$annee_selection = empty(\$_GET['annee']) ? \$annee : (int)\$_GET['annee'];
    \$mois = [
        '01' => 'Janvier',
        '02' => 'Février',
        '03' => 'Mars',
        '04' => 'Avril',
        '05' => 'Mai',
        '06' => 'Juin',
        '07' => 'Juillet',
        '08' => 'Aout',
        '09' => 'Septembre',
        '10' => 'Octobre',
        '11' => 'Novembre',
        '12' => 'Décembre',
    ];


    // Vérifier si un message de succès existe dans la session
    if (isset(\$_SESSION['success_message'])) {
        echo '<h2>Message Reçu :</h2>';
        echo '<pre>' . \$_SESSION['success_message'] . '</pre>';
        
        // Effacer le message de la session après l'affichage
        unset(\$_SESSION['success_message']);
    } else {
        echo '<p>Aucun message n\\'a été envoyé.</p>';
    }

?>

        <div class=\"dash\">
            <h1> Dashboard </h1>
        </div>

    <div class=\"flex-shrink-0 p-3\" style=\"width: 280px;\">
        <a href=\"/\" class=\"d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom\">
            <svg class=\"bi pe-none me-2\" width=\"30\" height=\"24\"><use xlink:href=\"#bootstrap\"></use></svg>
            <span class=\"fs-5 fw-semibold\">Menus</span>
        </a>
        <ul class=\"list-unstyled ps-0\">
        <li class=\"mb-1\">
            <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0\" data-bs-toggle=\"collapse\" data-bs-target=\"#home-collapse\" aria-expanded=\"true\">
            Home
            </button>
            <div class=\"collapse show\" id=\"home-collapse\">
                <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                    <li><a href=\"\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Habitat</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Services</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Animaux</a></li>
                </ul>
            </div>
        </li>
        <li class=\"mb-1\">
            <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#dashboard-collapse\" aria-expanded=\"false\">
            Dashboard
            </button>
            <div class=\"collapse\" id=\"dashboard-collapse\">
                <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Vétérinaire</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Rapport</a></li>
                </ul>
            </div>
        </li>
        <li class=\"border-top my-3\"></li>
        <li class=\"mb-1\">
            <button class=\"btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#account-collapse\" aria-expanded=\"false\">
            Account
            </button>
            <div class=\"collapse\" id=\"account-collapse\">
                <ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1 small\">
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">New...</a></li>
                    <li><a href=\"#\" class=\"link-body-emphasis d-inline-flex text-decoration-none rounded\">Profile</a></li>
                </ul>
            </div>
        </li>
        </ul>
    </div>

    <section class=\"container-fluid \"  >
        <nav class=\"vue\">

    <div class=\" annee container-fluid\">
        <div class=\"row\"> 
            <div class=\"col-md-4\">
                <ul class=\"list-group\">
                    <?php for (\$i = 0; \$i < 5; \$i++): ?>
                    <a class=\"list-group-item <?=\$annee - \$i === \$annee_selection ? 'active' : '';?>\" href=\"dashboard.php?annee=<?=\$annee - \$i ?>\"><?= \$annee - \$i ?></a>

                    <?php endfor ?>
                </ul>
            </div>
        </div>
    </div>
        
        <div class=\"container-fluid\">
            <div class=\"card\" style=\"width: 400px ;\">
                <div class=\"card-body\">
                    <strong style= \"font-size:3em;\"><?= \$total?></strong>
                    Visite<?= \$total  > 1 ? 's' : '' ?> total
                </div>
            </div>
        </div>
        </nav>
        </section>



</main>

<footer>

        <div class=\"container col-md-6 foot\">
            <div class=\"englob\">
                <div class=\" col-md-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                    </div>
                        <h4>Compteur de vue </h4>

        <?php

            require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';

            \$vues= ajouter_vue();

        ?>

                        <p>Il y a <?=\$vues?> visite<?php if (\$vues > 1): ?>s<?php endif; ?> sur le site </p>
                    </div>
                </div>
                </div>
            </div>
        
        <article>
            <form class=\"activity\">
                <div class=\"mb-6 col-md-6\">
                    <label for=\"exampleFormControlInput1\" class=\"form-label\" >Votre Nom</label>
                    <input type=\"name\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"votre nom\">
                </div>
                <div class=\"mb-6 col-md-6\">
                    <label for=\"exampleFormControlTextarea1\" class=\"form-label\"> Rédiger message au Vétérinaire</label>
                    <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                </div>
                <div class=\"col-12\">
                    <button class=\"btn btn-dark\" type=\"submit\">Envoyé </button>
                </div>
            </form>
        </article>
        
            <div class=\"fermer\">
                <a href=\"./connexion.php\"><button type=\"button\" class=\"btn btn-warning \">Se deconnecter</button></a>
            </div>
        
            <div class=\"logo\">
                <h6>Suivez-Nous</h6>
                <a href=\"https://github.com/Madikoule\"><img src=\"../../Public/Assets/image/github (6).svg\" alt=\"github\"></a>
                <a href=\"https://www.facebook.com/\"><img src=\"../../Public/Assets/image/facebook (2).svg\" alt=\"facebook\"></a>
                <a href=\"http://linkedin.com\"><img src=\"../../Public/Assets/image/linkedin.svg\" alt=\"linkedin\"></a>
            </div>

                <span class=\"mb-3 mb-md-0 text-body-secondary\">©2024 Arcadia, </span>
            </div>
        </div>
        
    </footer>
</body>
    <script src=\"../Public/Assets/js/script.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>


</html>", "pages/Dashboard.php", "/Users/youssoufdoucoure/Desktop/ENV./Arcadia/templates/pages/Dashboard.php");
    }
}
