<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ConnecteController extends AbstractController
{
    #[Route('/connexion', name: 'connexion_connexions')]
    public function index(): Response
    {
        return $this->render('connexion/connexion.html.twig');
    
    }
}
