<?php

namespace App\Entity;

use App\Repository\RolesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RolesRepository::class)]
class Roles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name_roles = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameRoles(): ?string
    {
        return $this->name_roles;
    }

    public function setNameRoles(string $name_roles): static
    {
        $this->name_roles = $name_roles;

        return $this;
    }
}
