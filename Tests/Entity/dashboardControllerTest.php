<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class DashboardControllerTest extends WebTestCase
{
    public function testRedirectToLoginIfNotAuthenticated()
    {
        $client = static::createClient();

        // Simuler une requête sans utilisateur connecté
        $crawler = $client->request('GET', '/dashboard');

        // Vérifier si on est redirigé vers la route de connexion
        $this->assertResponseRedirects('/connexion_connexions', Response::HTTP_FOUND);
    }

    public function testDashboardPageDisplaysDataForAuthenticatedUser()
    {
        $client = static::createClient();

        // Simuler un utilisateur connecté
        $client->loginUser($this->createMockUser());

        // Appeler la route du tableau de bord
        $crawler = $client->request('GET', '/dashboard');

        // Vérifier que la page se charge correctement
        $this->assertResponseIsSuccessful();

        // Vérifier les données transmises au template
        $this->assertSelectorTextContains('html', 'Total vues');
        $this->assertSelectorExists('div#annee_selection');
    }

    private function createMockUser()
    {
        // Créer un utilisateur fictif
        $user = $this->getMockBuilder(\App\Entity\Utilisateur::class)
            ->disableOriginalConstructor()
            ->getMock();

        $user->method('getEmail')->willReturn('test@example.com');

        return $user;
    }
}
