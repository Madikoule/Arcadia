<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\AuthService;


class ConnecteController extends AbstractController
{
    private AuthService $authService;

    
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    #[Route('/connexion', name: 'connexion_connexions', methods: ['GET', 'POST'])]
    public function index(Request $request): Response
    {
        $erreur = null;

        // Vérification de la soumission du formulaire
        if ($request->isMethod('POST')) {
            $email = filter_var($request->request->get('email'), FILTER_SANITIZE_EMAIL);
            $password = $request->request->get('password');

            // Validation des champs
            if (empty($email_user) || empty($password_user)) {
                $erreur = "Veuillez remplir tous les champs.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erreur = "Adresse email invalide.";
            } elseif (!$this->authService->validateCredentials($email_user,$password_user)) {
                $erreur = "Identification incorrecte.";
            } else {
                // Connexion réussie
                $this->addFlash('success', 'Connexion réussie !');
                return $this->redirectToRoute('/dashboard');
            }
        }

        return $this->render('user/connexion.html.twig', [
            'erreur' => $erreur,
        ]);
    }
}


