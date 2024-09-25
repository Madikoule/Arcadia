<?php 


// function conteur de vue sur la page dashboard


function ajouter_vue() {
    // Utiliser un chemin absolu
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteurs.txt';

    if (file_exists($fichier)) {
        // si le fichier existe, on incrémente
        $compteur = (int)file_get_contents($fichier);
        $compteur++;
        // Vérification de l'écriture dans le fichier
        if (file_put_contents($fichier, $compteur) === false) {
            echo "Erreur lors de l'écriture dans le fichier.";
        }
    } else {
        // sinon, on crée le fichier avec la valeur 1
        if (file_put_contents($fichier, '1') === false) {
            echo "Erreur lors de la création du fichier.";
        }
        $compteur = 1; // Initialiser le compteur à 1
    }
    
    return $compteur; // on retourne la valeur du compteur
}

function nombre_vues(): string { 
    // Utiliser le même chemin pour assurer la cohérence
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteurs.txt';

    // Vérification de l'existence et de la lisibilité du fichier
    if (file_exists($fichier) && is_readable($fichier)) {
        $contenu = file_get_contents($fichier);
        if ($contenu === false) {
            return 'Erreur lors de la lecture du fichier.';
        }
        return $contenu;
    } else {
        return 'Fichier non accessible ou introuvable.';

    }

}

$total = nombre_vues();


?>
