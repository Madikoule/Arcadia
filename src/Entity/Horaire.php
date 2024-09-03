<?php

namespace App\Entity;

use App\Repository\HoraireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HoraireRepository::class)]
class Horaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $ouverture_horaire = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $fermeture_horaire = null;

    #[ORM\Column]
    private ?int $id_utilisateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOuvertureHoraire(): ?\DateTimeInterface
    {
        return $this->ouverture_horaire;
    }

    public function setOuvertureHoraire(\DateTimeInterface $ouverture_horaire): static
    {
        $this->ouverture_horaire = $ouverture_horaire;

        return $this;
    }

    public function getFermetureHoraire(): ?\DateTimeInterface
    {
        return $this->fermeture_horaire;
    }

    public function setFermetureHoraire(\DateTimeInterface $fermeture_horaire): static
    {
        $this->fermeture_horaire = $fermeture_horaire;

        return $this;
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur(int $id_utilisateur): static
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }
}
