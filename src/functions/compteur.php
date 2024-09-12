<?php 

// function conteur de vue sur la page dashboard

function ajouter_vue () {
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur';
    $compteur = 1;
    if(file_exists($fichier)) {
        // verifie si le fichier existe
        // si le ficher existe on incremente
        $compteur = (int)file_get_contents($fichier);
        $compteur++;
        // sinon on crée le fichier avec la valeur 1
    }
    file_put_contents($fichier, $compteur);
}

function nombre_vues (): string {
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur';
    return file_get_contents($fichier);



}


?>