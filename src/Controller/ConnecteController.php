<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class ConnecteController extends AbstractController
{

    #[Route('/connexion', name: 'connexion_connexions', methods: ['GET', 'POST'])]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('connexion/connexions.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);

        $user->setRoles(['ROLE_USER', 'ROLE_ADMIN']);

    }

    #[Route('/logout', name: 'app_logout')]
    public function logout()
    {

    }
}