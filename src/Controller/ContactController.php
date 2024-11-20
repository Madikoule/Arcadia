<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;


class ContactController extends AbstractController
{

    #[Route('/contact', name: 'contact_contacts', methods: ['GET'])] // affiche la page twig
    public function index(): Response
    {
        return $this->render('contact/contacts.html.twig');
    }

    #[Route('/contact/send', name: 'contact_send', methods: ['POST'])]  // gère les soumission du formulaire
    public function sendMessage(Request $request): JsonResponse
    {
        // Initialisation de la réponse
        $response = [
            'success' => false,
            'errors' => [],
        ];

        // Récupération des données du formulaire
        $name = htmlspecialchars(trim($request->request->get('name', '')));
        $firstname = htmlspecialchars(trim($request->request->get('firstname', '')));
        $email = htmlspecialchars(trim($request->request->get('email', '')));
        $description = htmlspecialchars(trim($request->request->get('description', '')));

        // Validation des champs
        if (empty($name)) {
            $response['errors']['nameError'] = 'Veuillez entrer votre nom.';
        }
        if (empty($firstname)) {
            $response['errors']['firstnameError'] = 'Veuillez entrer votre prénom.';
        }
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response['errors']['emailError'] = 'Veuillez entrer une adresse e-mail valide.';
        }
        if (empty($description)) {
            $response['errors']['descriptionError'] = 'Veuillez entrer votre message.';
        }

        // Si aucune erreur, traiter le message
        if (empty($response['errors'])) {
            // Logique simulée : ajouter un message flash ou enregistrer les données
            $response['success'] = true;
        }

        // Retourner la réponse JSON
        return new JsonResponse($response);
    }
    

}


