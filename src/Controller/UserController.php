<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class UserController extends AbstractController {

    #[Route('/create-user', name: 'create_user')]
    public function createUser(
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher 
    ): Response {
        // creer un nouvel utilisateur 
        $user = new Utilisateur(); // création de l'objet utilisateur
        $user->setEmailUser('');   // $_POST (recup email)

        // hasher le mot de passe
        $hashedPassword = $passwordHasher->hashPassword(
            $user,
            ''    // $_POST (recup mdp)
        );
    }
}