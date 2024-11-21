<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;


class UserController extends AbstractController
{
    private $passwordHasher;
    private $entityManager;

    public function __construct(UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager)
    {
        $this->passwordHasher = $passwordHasher;
        $this->entityManager = $entityManager;
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request): Response
    {
        $user = new Utilisateur();
        $user->setEmail($request->get('email')); // Exemples d'attributs
        $user->setNameUser($request->get('name'));
        $user->setFirstname($request->get('firstname'));

        // Hachez le mot de passe avant de le stocker
        $hashedPassword = $this->passwordHasher->hashPassword($user, $request->get('password'));
        $user->setPassword($hashedPassword);


        // Persister l'utilisateur dans la base de données
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return $this->redirectToRoute('app_login');
    }
}
