<?php

namespace App\Controller;

use config\DatabaseService;
use PDOException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestDataController extends AbstractController 
{
    private DatabaseService $databaseService;

    public function __construct(DatabaseService $databaseService)
    {
        $this->databaseService = $databaseService;
    }

    #[Route('/test-connexion', name: 'test_connexion' )]
    public function testConnexion(): Response
    {
        try {
            // tester la connexion
            $this->databaseService->connect();

            // Exemple de requête pour lister les tables
            $tables = $this->databaseService->select("SHOW TABLES");
            
            $output = "<h1>Connexion réussie !</h1>";
            $output .= "<h2>Tables dans la base de données :</h2>";
            $output .= "<ul>";
            foreach ($tables as $table) {
                $output .= "<li>" . current($table) . "</li>";
            }
            $output .= "</ul>";
            
            return new Response($output);



        } catch(\PDOException $e){
            return new Response(
                "<h1>Erreur</h1><p>{$e->getMessage()}</p>",
                500
            );

        }
    }

}
