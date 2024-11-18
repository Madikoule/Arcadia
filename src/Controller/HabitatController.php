<?php

namespace App\Controller;

use App\Repository\HabitatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HabitatController extends AbstractController
{
    #[Route('/habitat', name: 'habitat_habitats')]
    public function index(HabitatRepository $habitatRepository): Response
    {
        $habitats = $habitatRepository->findAllHabitats();


        return $this->render('habitat/habitats.html.twig', [
            'habitats' => $habitats, 
        ]);

    }
}
