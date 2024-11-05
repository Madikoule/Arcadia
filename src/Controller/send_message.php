
<?php
// Démarrer la session
session_start();

// Initialiser le tableau de réponse
$response = [
    "success" => false,
    "errors" => []
];

// Vérifier si le formulaire a été soumis avec la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et valider les données du formulaire
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $firstname = htmlspecialchars(trim($_POST['firstname'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Validation des champs
    if (empty($name)) {
        $response["errors"]["nameError"] = "Veuillez entrer votre nom.";
    }
    if (empty($firstname)) {
        $response["errors"]["firstnameError"] = "Veuillez entrer votre prénom.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response["errors"]["emailError"] = "Veuillez entrer une adresse e-mail valide.";
    }
    if (empty($message)) {
        $response["errors"]["messageError"] = "Veuillez entrer votre message.";
    }

    // Si aucune erreur, préparer le message de succès
    if (empty($response["errors"])) {
        $_SESSION['success_message'] = "Nom: $name\nPrénom: $firstname\nEmail: $email\nMessage: $message";
        
        // Indiquer que la soumission est réussie
        $response["success"] = true;
    }
}

// Retourner la réponse JSON
header('Content-Type: application/json');
echo json_encode($response);
exit();
