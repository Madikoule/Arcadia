<?php

namespace App\Entity;

use App\Repository\AnimalRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
class Animal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name_animal = null;

    #[ORM\Column(length: 255)]
    private ?string $race_animal = null;

    #[ORM\Column(length: 255)]
    private ?string $habitat_animal = null;

    #[ORM\Column]
    private ?int $age_animal = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description_animal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameAnimal(): ?string
    {
        return $this->name_animal;
    }

    public function setNameAnimal(string $name_animal): static
    {
        $this->name_animal = $name_animal;

        return $this;
    }

    public function getRaceAnimal(): ?string
    {
        return $this->race_animal;
    }

    public function setRaceAnimal(string $race_animal): static
    {
        $this->race_animal = $race_animal;

        return $this;
    }

    public function getHabitatAnimal(): ?string
    {
        return $this->habitat_animal;
    }

    public function setHabitatAnimal(string $habitat_animal): static
    {
        $this->habitat_animal = $habitat_animal;

        return $this;
    }

    public function getAgeAnimal(): ?int
    {
        return $this->age_animal;
    }

    public function setAgeAnimal(int $age_animal): static
    {
        $this->age_animal = $age_animal;

        return $this;
    }

    public function getDescriptionAnimal(): ?string
    {
        return $this->description_animal;
    }

    public function setDescriptionAnimal(string $description_animal): static
    {
        $this->description_animal = $description_animal;

        return $this;
    }
}
