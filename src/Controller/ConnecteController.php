<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class ConnecteController extends AbstractController
{
    private $passwordHasher;
    private $utilisateurRepository;
    private $entityManager;

    public function __construct(
        UserPasswordHasherInterface $passwordHasher, 
        EntityManagerInterface $entityManager,
        UtilisateurRepository $utilisateurRepository


    ) {
        $this->passwordHasher = $passwordHasher;
        $this->entityManager = $entityManager;
        $this->utilisateurRepository = $utilisateurRepository;


    }
    
        #[Route('/connexion', name: 'connexion_connexions', methods: ['GET', 'POST'])]
        public function login(Request $request, AuthenticationUtils $authenticationUtils): Response
        {
            
            $user = $this->getUser(); // Récupère l'utilisateur actuellement authentifié


            if (!$user) {
                return $this->redirectToRoute('app_dashboard');
            }

            $error = null;
            if ($request->isMethod('POST')) {
                $email = $request->request->get('email');
                $password = $request->request->get('password');

                if (!$email || !$password) {
                    $error = "Veuillez renseigner tous les champs.";
                } else {
                    // Vérification utilisateur
                    $user = $this->utilisateurRepository->findOneBy(['email' => $email]);
                    if (!$user) {
                        $error = "Utilisateur introuvable.";
                    } elseif (!$this->passwordHasher->isPasswordValid($user, $password)) {
                        $error = "Mot de passe incorrect.";


                    }
                }
            }        

                // Récupération des erreurs d'authentification
                $error = $authenticationUtils->getLastAuthenticationError();
                $lastUsername = $authenticationUtils->getLastUsername();

                return $this->render('connexion/connexions.html.twig', [
                    'last_username' => $lastUsername,
                    'error' => $error,

                ]);
            }
        

            #[Route('/logout', name: 'connexion_connexions')]
            public function logout(): void
            {
            // Symfony gère la déconnexion automatiquement.
            }


        #[Route('/add-password', name: 'add_password', methods: ['POST'])]
        public function addPassword(Request $request): Response
        {
            $email = $request->request->get('email');
            $newPassword = $request->request->get('password');

            if (!$email || !$newPassword) {
                return $this->json([
                    'status' => 'error',
                    'message' => 'Veuillez fournir une adresse email et un mot de passe.'
                ], Response::HTTP_BAD_REQUEST);
            }

            // Trouver l'utilisateur dans la base de données
            $user = $this->utilisateurRepository->findOneBy(['email' => $email]);
            if (!$user) {
                return $this->json([
                    'status' => 'error',
                    'message' => 'Utilisateur introuvable.'
                ], Response::HTTP_NOT_FOUND);
            }

            // Vérifier si un mot de passe existe déjà pour cet utilisateur
            if ($user->getPassword()) {
                return $this->json([
                    'status' => 'error',
                    'message' => 'Un mot de passe existe déjà pour cet utilisateur.'
                ], Response::HTTP_CONFLICT);
            }

            // Hacher et attribuer le mot de passe
            $hashedPassword = $this->passwordHasher->hashPassword($user, $newPassword);
            $user->setPassword($hashedPassword);

            try {
                $this->entityManager->persist($user);
                $this->entityManager->flush();

                return $this->json([
                    'status' => 'success',
                    'message' => 'Mot de passe ajouté avec succès.'
                ], Response::HTTP_OK);
            } catch (\Exception $e) {
                return $this->json([
                    'status' => 'error',
                    'message' => 'Erreur lors de la sauvegarde : ' . $e->getMessage()
                ], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

    }