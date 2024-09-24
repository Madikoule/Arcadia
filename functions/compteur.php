<?php 


// function conteur de vue sur la page dashboard

function ajouter_vue () {
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteurs.txt';

    if (file_exists($fichier)) {
        // si le ficher existe on incremente
        $compteur = (int)file_get_contents($fichier);
        $compteur++;
        file_put_contents($fichier,$compteur);
    } else {
        // sinon on crée le fichier avec la valeur 1
        file_put_contents($fichier, '1');
        
    }
        return($compteur); // on retourne la valeur du compteur
}


function nombre_vues ():string { // la fonction qui permet de stocker le nombre de vues dans le fichier
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteurs.txt';
    return file_get_contents($fichier);

}

?>