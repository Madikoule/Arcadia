
<?php
session_start();    // Démarrer une session pour la gestion des messages d'erreur ou de succès

$erreur = null ;
// Vérifier que les champs email et password ne sont pas vides

if (!empty ($_POST['email']) && !empty($_POST['password'])) {
        // Corriger l'erreur dans la vérification du mot de passe
    if ($_POST['email'] === 'madydouc@yahoo.com' && $_POST['password'] === 'arcadia123') {
                // Démarrer une session pour indiquer que l'utilisateur est connecté
        $_SESSION['connecte'] = 1;
                // Redirection vers la page dashboard
        header('Location: ./dashboard.php');
        // on n'est connecter
        
        // Arrêter l'exécution du script après la redirection
        exit();
    } else {
        // Message d'erreur si les informations de connexion sont incorrectes
        $erreur = "Identification incorrecte";

    }
    
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et nettoyer les données du formulaire
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $_POST['password'];

    // Vérification que l'email est valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Adresse email invalide.";
    } elseif (empty($password)) {
        $error = "Le mot de passe est requis.";
    } else {
        // Hash du mot de passe avant stockage (exemple d'utilisation de bcrypt)

        // Exécuter ici la logique de stockage ou d'authentification en base de données

        // Exemple: $db->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");

    }

}




?>
