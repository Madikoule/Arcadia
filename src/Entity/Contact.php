<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $email_contact = null;

    #[ORM\Column(length: 255)]
    private ?string $description_contact = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmailContact(): ?string
    {
        return $this->email_contact;
    }

    public function setEmailContact(string $email_contact): static
    {
        $this->email_contact = $email_contact;

        return $this;
    }

    public function getDescriptionContact(): ?string
    {
        return $this->description_contact;
    }

    public function setDescriptionContact(string $description_contact): static
    {
        $this->description_contact = $description_contact;

        return $this;
    }
}
