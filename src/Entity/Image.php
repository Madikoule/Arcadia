<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name_image = null;

    #[ORM\Column(length: 100)]
    private ?string $chemin_image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameImage(): ?string
    {
        return $this->name_image;
    }

    public function setNameImage(string $name_image): static
    {
        $this->name_image = $name_image;

        return $this;
    }

    public function getCheminImage(): ?string
    {
        return $this->chemin_image;
    }

    public function setCheminImage(string $chemin_image): static
    {
        $this->chemin_image = $chemin_image;

        return $this;
    }
    
}
