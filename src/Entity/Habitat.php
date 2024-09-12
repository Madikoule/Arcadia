<?php

namespace App\Entity;

use App\Repository\HabitatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HabitatRepository::class)]
class Habitat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name_habitat = null;

    #[ORM\Column(length: 255)]
    private ?string $commentaire_habitat = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description_habitat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameHabitat(): ?string
    {
        return $this->name_habitat;
    }

    public function setNameHabitat(string $name_habitat): static
    {
        $this->name_habitat = $name_habitat;

        return $this;
    }

    public function getCommentaireHabitat(): ?string
    {
        return $this->commentaire_habitat;
    }

    public function setCommentaireHabitat(string $commentaire_habitat): static
    {
        $this->commentaire_habitat = $commentaire_habitat;

        return $this;
    }

    public function getDescriptionHabitat(): ?string
    {
        return $this->description_habitat;
    }

    public function setDescriptionHabitat(string $description_habitat): static
    {
        $this->description_habitat = $description_habitat;

        return $this;
    }
}
