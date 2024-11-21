<?php

namespace App\Service;

use Symfony\Component\Filesystem\Filesystem;

class CompteurService
{
    private string $filePath;

    public function __construct()
    {
        // Définit le chemin absolu du fichier compteur
        $this->filePath = dirname(__DIR__, 2) . '/data/compteurs.txt';
    }

    public function ajouterVue(): int
    {
        $filesystem = new Filesystem();

        if ($filesystem->exists($this->filePath)) {
            $compteur = (int)file_get_contents($this->filePath);
            $compteur++;
            $filesystem->dumpFile($this->filePath, $compteur);
        } else {
            $filesystem->dumpFile($this->filePath, '1');
            $compteur = 1;
        }

        return $compteur;
    }

    public function nombreVues(): int
    {
        if (file_exists($this->filePath) && is_readable($this->filePath)) {
            $contenu = file_get_contents($this->filePath);
            return (int)$contenu;
        }

        return 0; // Retourne 0 si le fichier n'existe pas ou n'est pas lisible
    }
}
