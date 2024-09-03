<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description_avis = null;

    #[ORM\Column]
    private ?int $note_avis = null;

    #[ORM\Column(length: 100)]
    private ?string $email_avis = null;

    #[ORM\Column]
    private ?int $id_user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionAvis(): ?string
    {
        return $this->description_avis;
    }

    public function setDescriptionAvis(string $description_avis): static
    {
        $this->description_avis = $description_avis;

        return $this;
    }

    public function getNoteAvis(): ?int
    {
        return $this->note_avis;
    }

    public function setNoteAvis(int $note_avis): static
    {
        $this->note_avis = $note_avis;

        return $this;
    }

    public function getEmailAvis(): ?string
    {
        return $this->email_avis;
    }

    public function setEmailAvis(string $email_avis): static
    {
        $this->email_avis = $email_avis;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }
}
