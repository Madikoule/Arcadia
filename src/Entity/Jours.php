<?php

namespace App\Entity;

use App\Repository\JoursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JoursRepository::class)]
class Jours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name_jours = null;

    #[ORM\Column(length: 100)]
    private ?string $statut_jours = null;

    #[ORM\Column]
    private ?int $id_services = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameJours(): ?string
    {
        return $this->name_jours;
    }

    public function setNameJours(string $name_jours): static
    {
        $this->name_jours = $name_jours;

        return $this;
    }

    public function getStatutJours(): ?string
    {
        return $this->statut_jours;
    }

    public function setStatutJours(string $statut_jours): static
    {
        $this->statut_jours = $statut_jours;

        return $this;
    }

    public function getIdServices(): ?int
    {
        return $this->id_services;
    }

    public function setIdServices(int $id_services): static
    {
        $this->id_services = $id_services;

        return $this;
    }
}
