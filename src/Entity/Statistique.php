<?php

namespace App\Entity;

use App\Repository\StatistiqueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatistiqueRepository::class)]
class Statistique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nombre_consultation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreConsultation(): ?int
    {
        return $this->nombre_consultation;
    }

    public function setNombreConsultation(int $nombre_consultation): static
    {
        $this->nombre_consultation = $nombre_consultation;

        return $this;
    }
    
}
