<?php

namespace App\Entity;

use App\Repository\RapportRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RapportRepository::class)]
class Rapport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $etat_animal = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_passage = null;

    #[ORM\Column(length: 255)]
    private ?string $rapport_grammage = null;

    #[ORM\Column(length: 255)]
    private ?string $détail_etat_animal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtatAnimal(): ?string
    {
        return $this->etat_animal;
    }

    public function setEtatAnimal(string $etat_animal): static
    {
        $this->etat_animal = $etat_animal;

        return $this;
    }

    public function getDatePassage(): ?\DateTimeInterface
    {
        return $this->date_passage;
    }

    public function setDatePassage(\DateTimeInterface $date_passage): static
    {
        $this->date_passage = $date_passage;

        return $this;
    }

    public function getRapportGrammage(): ?string
    {
        return $this->rapport_grammage;
    }

    public function setRapportGrammage(string $rapport_grammage): static
    {
        $this->rapport_grammage = $rapport_grammage;

        return $this;
    }

    public function getDétailEtatAnimal(): ?string
    {
        return $this->détail_etat_animal;
    }

    public function setDétailEtatAnimal(string $détail_etat_animal): static
    {
        $this->détail_etat_animal = $détail_etat_animal;

        return $this;
    }
}
