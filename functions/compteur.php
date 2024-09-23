<?php 

// function conteur de vue sur la page dashboard

function ajouter_vue () {
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
    $compteur = 1;
    if (file_exists($fichier)) {
        // verifie si le fichier existe
        // si le ficher existe on incremente
        $compteur = (int)file_get_contents($fichier);
        $compteur++;
    }
        file_put_contents($fichier, $compteur);

    
}



?>