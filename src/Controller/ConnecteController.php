<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AuthenticationException;



class ConnecteController extends AbstractController
{

    #[Route('/connexion', name: 'connexion_connexions', methods: ['GET', 'POST'])]
    public function index(Request $request): Response
    {
        $erreur = null;

        // Vérification de la soumission du formulaire
        if ($request->isMethod('POST')) {
            $email = filter_var($request->request->get('email'), FILTER_SANITIZE_EMAIL);
            $password = $request->request->get('password');

            // Validation des champs
            if (empty($email) || empty($password)) {
                $erreur = "Veuillez remplir tous les champs.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erreur = "Adresse email invalide.";
            } else {
                // Identifiants fictifs pour l'exemple
                $validEmail = 'madydouc@yahoo.com';
                $validPasswordHash = '$2y$10$0a5ZswxqOe3.XYDbEklzJeI12D/Z32RhxUBKKsGZln9F59c0uH3Eu'; // "arcadia123"

                if ($email === $validEmail && password_verify($password, $validPasswordHash)) {
                    // Si l'authentification réussit, démarrez la session utilisateur
                    $this->addFlash('success', 'Connexion réussie !');
                    return $this->redirectToRoute('dashboard'); // Rediriger vers une page après connexion
                } else {
                    $erreur = "Identification incorrecte.";
                }
            }
        }

        // Rendre le template avec les variables
        return $this->render('user/connexion.html.twig', [
            'erreur' => $erreur,
        ]);
    }

}

