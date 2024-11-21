<?php

namespace App\Tests\Controller;

use App\Controller\AccueilController;
use App\Repository\AnimalRepository;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilControllerTest extends TestCase
{
    public function testIndex(): void
    {
        // Mock du Repository
        $animalRepositoryMock = $this->createMock(AnimalRepository::class);

        // Données simulées retournées par le repository
        $mockAnimals = [
            ['id' => 1, 'name' => 'Lion'],
            ['id' => 2, 'name' => 'Tiger'],
        ];

        $animalRepositoryMock
            ->expects($this->once()) // Vérifie que la méthode est appelée une seule fois
            ->method('findAllAnimals')
            ->willReturn($mockAnimals);

        // Instancier le contrôleur
        $controller = new AccueilController();

        // Appeler la méthode `index`
        $response = $controller->index($animalRepositoryMock);

        // Vérifier que la réponse est une instance de Response
        $this->assertInstanceOf(Response::class, $response);

        // Vérifier que le contenu contient les données
        $this->assertStringContainsString('Lion', $response->getContent());
        $this->assertStringContainsString('Tiger', $response->getContent());
    }
}
