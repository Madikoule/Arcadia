<?php

namespace App\Service;


use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;

class AuthService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function validateCredentials(string $email, string $password): bool
    {
        // Récupérer l'utilisateur depuis la base de données
        $user = $this->entityManager->getRepository(Utilisateur::class)->findOneBy(['email_user' => $email]);

        if (!$user) {
            return false; // L'utilisateur n'existe pas
        }

        // Vérifier si le mot de passe est correct
        return $user->isPasswordValid($password);
    }
}
