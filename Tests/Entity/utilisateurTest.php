<?php

namespace App\Tests\Entity;

use App\Entity\Utilisateur;
use PHPUnit\Framework\TestCase;

class UtilisateurTest extends TestCase
{
    public function testGetAndSetName()
    {
        $user = new Utilisateur();
        $user->setNameUser('John');

        $this->assertEquals('John', $user->getName());
    }

    public function testGetAndSetEmail()
    {
        $user = new Utilisateur();
        $user->setEmail('john@example.com');

        $this->assertEquals('john@example.com', $user->getEmail());
    }

    public function testGetAndSetRoles()
    {
        $user = new Utilisateur();
        $user->setRoles(['ROLE_ADMIN']);

        $this->assertEquals(['ROLE_ADMIN'], $user->getRoles());
    }
}
