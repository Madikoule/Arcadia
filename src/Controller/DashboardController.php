<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\CompteurService;


class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(Request $request,CompteurService $compteurService): Response
    {


        if ($this->getUser()) {
            $this->addFlash('success', 'Connexion réussie');
        }

    
        // Incrémenter le compteur de vues
        $vues = $compteurService->ajouterVue();
        // Obtenir le nombre total de vues
        $total = $compteurService->nombreVues();
        $annee = date('Y');
        $annee_selection = $request->query->get('annee', $annee);


        return $this->render('dashboard/dashboard.html.twig', [
            'vues' => $vues,
            'total' => $total,
            'annee' => $annee, 
            'annee_selection' => $annee_selection, 
        
        ]);
    }


}


