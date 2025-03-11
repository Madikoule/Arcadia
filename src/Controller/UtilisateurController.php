<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

    class UtilisateurController extends AbstractController
    {
        #[Route('/register', name: 'register', methods: ['GET', 'POST'])]
        public function register(
            Request $request,
            EntityManagerInterface $entityManager,
            UserPasswordHasherInterface $passwordHasher
        ): Response {
            if ($request->isMethod('POST')) {
                // Récupérer les données POST
                $email = $request->request->get('email');
                $password = $request->request->get('password');

                // Validation de base
                if (empty($email) || empty($password)) {
                    $this->addFlash('error', 'Les champs email et mot de passe sont requis.');
                    return $this->redirectToRoute('register');
                }

                // Validation supplémentaire (Regex pour email valide)
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $this->addFlash('error', 'Adresse email invalide.');
                    return $this->redirectToRoute('register');
                }

                // Vérifier si l'utilisateur existe déjà
                $existingUser = $entityManager->getRepository(Utilisateur::class)->findOneBy(['email' => $email]);
                if ($existingUser) {
                    $this->addFlash('error', 'Un utilisateur avec cet email existe déjà.');
                    return $this->redirectToRoute('register');
                }

                // Création et sécurisation de l'utilisateur
                $user = new Utilisateur();
                $user->setEmail($email);
                $hashedPassword = $passwordHasher->hashPassword($user, $password);
                $user->setPassword($hashedPassword);

                // Enregistrement sécurisé dans la base de données
                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'Inscription réussie.');
                return $this->redirectToRoute('login');
            }

            return $this->render('registration/register.html.twig');
        }
    }
