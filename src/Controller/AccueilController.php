<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController 

{
    #[Route('/accueil', name: 'app_accueil')]
    function index(): Response {
        ob_start();
        include __DIR__ . '/../../templates/pages/accueil.php';
        $content = ob_get_clean();

        return new Response($content);

    }

}