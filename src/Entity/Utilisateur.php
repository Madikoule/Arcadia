<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface


{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_user = null;


    #[ORM\Column(length: 100)]
    private ?string $password = null;

    #[ORM\Column(length: 100)]
    private ?string $email = null;

    #[ORM\Column(type: 'json')]
    private array $roles = ['ROLE_USER'];

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function getUserIdentifier(): string
    {
        return $this->email; 
    }

        // get pour recuperer des donnée
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }


    public function getEmail(): ?string
    {
        return $this->email;
    }


    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }


    public function getRoles(): array
    {
        // Récupérez le nom du rôle depuis la relation        
        return $this->roles;
    }


    public function eraseCredentials(): void
    {
        // Effacez les données sensibles si nécessaire
    }

    //  setter pour la relation 
    public function setRole(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

}
