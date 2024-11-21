<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]

class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_user = null;

    #[ORM\Column(length: 100)]
    private ?string $name_user = null;

    #[ORM\Column(length: 100)]
    private ?string $firstname_user = null;

    #[ORM\Column(length: 255)]
    private ?string $password_user = null;

    #[ORM\Column(length: 100)]
    private ?string $email_user = null;

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }
        // get pour recuperer des donnée
    public function getNameUser(): ?string
    {
        return $this->name_user;
    }
        // set envoi des donnée
    public function setNameUser(string $name_user): static
    {
        $this->name_user = $name_user;

        return $this;
    }

    public function getFirstnameUser(): ?string
    {
        return $this->firstname_user;
    }

    public function setFirstnameUser(string $firstname_user): static
    {
        $this->firstname_user = $firstname_user;

        return $this;
    }

    public function getPasswordUser(): ?string
    {
        return $this->password_user;
    }

    public function setPasswordUser(string $password_user): static
    {
        $this->password_user = $password_user;

        return $this;
    }

    public function getEmailUser(): ?string
    {
        return $this->email_user;
    }

    public function setEmailUser(string $email_user): static
    {
        $this->email_user = $email_user;

        return $this;

    }

        public function isPasswordValid(string $password): bool
    {
        // Vérifier si le mot de passe donné est valide 
        return password_verify($password, $this->password_user);
    }


}
