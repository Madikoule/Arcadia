
    function est_connecte (): bool {
        if (session_status() === PHP_SESSION_NONE) { // si la session n'est pas active dans se cas la je fai un session start
            session_start();   
        }
        return !empty($_SESSION['connecte']);

}

function forcer_utilisateur_connecte (): void {  // cest une fonction qui fera une redirection
    if (!est_connecte()) {
        header('Location: ../connexion.php');
        exit(); // arete l'execution du script apres la redirection

    }
}




?>