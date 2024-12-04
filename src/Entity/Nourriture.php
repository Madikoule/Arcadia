<?php

namespace App\Entity;

use App\Repository\NourritureRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Nourriture::class)]
class Nourriture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name_nourriture = null;

    #[ORM\Column(length: 255)]
    private ?string $description_nourriture = null;


    #[ORM\Column(length: 255)]
    private ?string $name_animal = null;


    #[ORM\Column(length: 255)]
    private ?string $grammage_nourriture = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_passage = null;

    #[ORM\Column(length: 255)]
    private ?string $etat_animal = null;

    #[ORM\ManyToOne(targetEntity: Habitat::class, inversedBy: "nourriture")]
    #[ORM\JoinColumn(nullable: false)]
    private ?Habitat $habitat = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameNourriture(): ?string
    {
        return $this->name_nourriture;
    }

    public function setNameNourriture(string $name_nourriture): static
    {
        $this->name_nourriture = $name_nourriture;

        return $this;
    }

    public function getDescriptionNourriture(): ?string
    {
        return $this->description_nourriture;
    }

    public function setDescriptionNourriture(string $description_nourriture): static
    {
        $this->description_nourriture = $description_nourriture;

        return $this;
    }



    public function getNameAnimal(): ?string
    {
        return $this->name_animal;
    }

    public function setNameAnimal(string $name_animal): static
    {
        $this->name_nourriture = $name_animal;

        return $this;
    }


    public function getGrammageNourriture(): ?string
    {
        return $this->grammage_nourriture;
    }

    public function setGrammageNourriture(string $grammage_nourriture): static
    {
        $this->grammage_nourriture = $grammage_nourriture;

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

    public function getEtatAnimal(): ?string
    {
        return $this->etat_animal;
    }

    public function setEtatAnimal(string $etat_animal): static
    {
        $this->etat_animal = $etat_animal;

        return $this;
    }


    public function getHabitat(): ?Habitat
    {
        return $this->habitat;
    }

    public function setHabitat(?Habitat $habitat): static
    {
        $this->habitat = $habitat;

        return $this;
    }

}
