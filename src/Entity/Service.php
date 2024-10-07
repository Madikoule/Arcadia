<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name_service = null;

    #[ORM\Column(length: 255)]
    private ?string $s_description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameService(): ?string
    {
        return $this->name_service;
    }

    public function setNameService(string $name_service): static
    {
        $this->name_service = $name_service;

        return $this;
    }

    public function getSDescription(): ?string
    {
        return $this->s_description;
    }

    public function setSDescription(string $s_description): static
    {
        $this->s_description = $s_description;

        return $this;
    }
}