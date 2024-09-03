<?php

namespace App\Entity;

use App\Repository\CommentaireHabitatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireHabitatRepository::class)]
class CommentaireHabitat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_commentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $text_commentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $etat_habitat = null;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getDateCommentaire(): ?\DateTimeInterface
    {
        return $this->date_commentaire;
    }

    public function setDateCommentaire(\DateTimeInterface $date_commentaire): static
    {
        $this->date_commentaire = $date_commentaire;

        return $this;
    }

    public function getTextCommentaire(): ?string
    {
        return $this->text_commentaire;
    }

    public function setTextCommentaire(string $text_commentaire): static
    {
        $this->text_commentaire = $text_commentaire;

        return $this;
    }

    public function getEtatHabitat(): ?string
    {
        return $this->etat_habitat;
    }

    public function setEtatHabitat(string $etat_habitat): static
    {
        $this->etat_habitat = $etat_habitat;

        return $this;
    }
}
