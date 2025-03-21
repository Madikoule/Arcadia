<?php

namespace App\Entity;

use App\Repository\HabitatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HabitatRepository::class)]
class Habitat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $id_habitat = null;

    #[ORM\Column(length: 100)]
    private ?string $name_habitat = null;

    #[ORM\Column(length: 255)]
    private ?string $image_habitat = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description_habitat = null;

    #[ORM\OneToMany(targetEntity: Nourriture::class, mappedBy: "habitat", cascade: ["persist", "remove"])]

    private Collection $nourriture ;


    public function __construct()
    {
        // Initialisation de la collection de Nourriture
        $this->nourriture = new ArrayCollection();
    }


    public function getIdHabitat(): ?int
    {
        return $this->id_habitat;
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


    public function getImageHabitat(): ?string 
    {
        return $this->image_habitat;
    }
    public function setImageHabitat(?string $image_habitat): static
    {
        $this->image_habitat = $image_habitat;

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


    
    public function getNourriture(): Collection
    {
        return $this->nourriture;
    }

    public function addNourriture(Nourriture $nourriture): static
    {
        if (!$this->nourriture->contains($nourriture)) {
            $this->nourriture[] = $nourriture;
            $nourriture->setHabitat($this);
        }

        return $this;
    }

    public function removeNourriture(Nourriture $nourriture): static
    {
        if ($this->nourriture->removeElement($nourriture)) {
            if ($nourriture->getHabitat() === $this) {
                $nourriture->setHabitat(null);
            }
        }

        return $this;
    }


}




