<?php

namespace App\Controllers;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController 

{
    #[Route('/', name: 'accueil')]
    function index(): Response {
        return new Response('Bonjour les gens');

    }

}