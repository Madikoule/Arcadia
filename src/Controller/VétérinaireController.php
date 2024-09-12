<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VétérinaireController extends AbstractController
{
    #[Route('/v/t/rinaire', name: 'app_v_t_rinaire')]
    public function index(): Response
    {
        return $this->render('vétérinaire/index.html.twig', [
            'controller_name' => 'VétérinaireController',
        ]);
    }
}
