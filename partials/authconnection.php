

session_start(); // Démarrer une session pour la gestion des messages d'erreur ou de succès

// Initialiser une variable d'erreur
$erreur = null;

// Vérification de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et valider les données du formulaire
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Validation des champs
    if (empty($email) || empty($password)) {
        $erreur = "Veuillez remplir tous les champs.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreur = "Adresse email invalide.";
    } else {
        // Vérifier les identifiants
        // Ici, vous pouvez vérifier dans une base de données si l'email et le mot de passe sont valides
        // Exemple avec des identifiants fictifs pour l'exemple
        $validEmail = 'madydouc@yahoo.com';
        $validPasswordHash = '$2y$10$0a5ZswxqOe3.XYDbEklzJeI12D/Z32RhxUBKKsGZln9F59c0uH3Eu'; // Le mot de passe "arcadia123" haché avec bcrypt

        if ($email === $validEmail && password_verify($password, $validPasswordHash)) {
            // Authentification réussie, démarrer la session utilisateur
            $_SESSION['connecte'] = 1;
            $_SESSION['email'] = $email; // Vous pouvez stocker l'email ou d'autres infos

            // Rediriger l'utilisateur vers la page d'accueil ou une page protégée
            header('Location: dashboard.php');
            exit();
        } else {
            $erreur = "Identification incorrecte.";
        }
    }
}

?>





