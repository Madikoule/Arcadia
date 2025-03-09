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

/* partials/send_message.php */
class __TwigTemplate_2b2e8e0839a280c9ea746cace51ffdd9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/send_message.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/send_message.php"));

        // line 1
        yield "
// Initialiser le tableau de réponse
\$response = [
    \"success\" => false,
    \"errors\" => []
];

// Vérifier si le formulaire a été soumis avec la méthode POST
if (\$_SERVER[\"REQUEST_METHOD\"] == \"POST\") {
    // Récupérer et valider les données du formulaire
    \$name = htmlspecialchars(trim(\$_POST['name'] ?? ''));
    \$firstname = htmlspecialchars(trim(\$_POST['firstname'] ?? ''));
    \$email = htmlspecialchars(trim(\$_POST['email'] ?? ''));
    \$message = htmlspecialchars(trim(\$_POST['message'] ?? ''));

    // Validation des champs
    if (empty(\$name)) {
        \$response[\"errors\"][\"nameError\"] = \"Veuillez entrer votre nom.\";
    }
    if (empty(\$firstname)) {
        \$response[\"errors\"][\"firstnameError\"] = \"Veuillez entrer votre prénom.\";
    }
    if (empty(\$email) || !filter_var(\$email, FILTER_VALIDATE_EMAIL)) {
        \$response[\"errors\"][\"emailError\"] = \"Veuillez entrer une adresse e-mail valide.\";
    }
    if (empty(\$message)) {
        \$response[\"errors\"][\"messageError\"] = \"Veuillez entrer votre message.\";
    }

    // Si aucune erreur, préparer le message de succès
    if (empty(\$response[\"errors\"])) {
        \$_SESSION['success_message'] = \"Nom: \$name\\nPrénom: \$firstname\\nEmail: \$email\\nMessage: \$message\";
        
        // Indiquer que la soumission est réussie
        \$response[\"success\"] = true;
    }
}

// Retourner la réponse JSON
header('Content-Type: application/json');
echo json_encode(\$response);
exit();
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
        return "partials/send_message.php";
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
// Initialiser le tableau de réponse
\$response = [
    \"success\" => false,
    \"errors\" => []
];

// Vérifier si le formulaire a été soumis avec la méthode POST
if (\$_SERVER[\"REQUEST_METHOD\"] == \"POST\") {
    // Récupérer et valider les données du formulaire
    \$name = htmlspecialchars(trim(\$_POST['name'] ?? ''));
    \$firstname = htmlspecialchars(trim(\$_POST['firstname'] ?? ''));
    \$email = htmlspecialchars(trim(\$_POST['email'] ?? ''));
    \$message = htmlspecialchars(trim(\$_POST['message'] ?? ''));

    // Validation des champs
    if (empty(\$name)) {
        \$response[\"errors\"][\"nameError\"] = \"Veuillez entrer votre nom.\";
    }
    if (empty(\$firstname)) {
        \$response[\"errors\"][\"firstnameError\"] = \"Veuillez entrer votre prénom.\";
    }
    if (empty(\$email) || !filter_var(\$email, FILTER_VALIDATE_EMAIL)) {
        \$response[\"errors\"][\"emailError\"] = \"Veuillez entrer une adresse e-mail valide.\";
    }
    if (empty(\$message)) {
        \$response[\"errors\"][\"messageError\"] = \"Veuillez entrer votre message.\";
    }

    // Si aucune erreur, préparer le message de succès
    if (empty(\$response[\"errors\"])) {
        \$_SESSION['success_message'] = \"Nom: \$name\\nPrénom: \$firstname\\nEmail: \$email\\nMessage: \$message\";
        
        // Indiquer que la soumission est réussie
        \$response[\"success\"] = true;
    }
}

// Retourner la réponse JSON
header('Content-Type: application/json');
echo json_encode(\$response);
exit();
", "partials/send_message.php", "/Users/youssoufdoucoure/Desktop/ENV./Arcadia/templates/partials/send_message.php");
    }
}
