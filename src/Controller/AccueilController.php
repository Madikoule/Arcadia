<?php

namespace App\Controller;

use App\Repository\AnimalRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class AccueilController extends AbstractController
{
    #[Route("/home", "home_index")]
    public function index(AnimalRepository $animalRepository): Response
    {
        // appelle la methode du repository
        $animals = $animalRepository->findAllAnimals();

        // Passe les donées a la vue twig
        return $this->render('home/index.html.twig', [
            'animals' => $animals,
        ]);


    }
}
