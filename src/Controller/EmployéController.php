<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployéController extends AbstractController
{
    #[Route('/employ/', name: 'app_employ_')]
    public function index(): Response
    {
        return $this->render('employé/index.html.twig', [
            'controller_name' => 'EmployéController',
        ]);
    }
}
