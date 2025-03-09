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
    private ?int $id_roles = null;

    #[ORM\Column(length: 100)]
    private ?string $name_roles = null;

    public function getIdRoles(): ?int
    {
        return $this->id_roles;
    }

    public function getNameRoles(): ?string
    {
        return $this->name_roles;
    }

    public function setNameRoles(string $name_roles): self
    {

        // Assure que le nom du rôle commence par ROLE_
        if (!str_starts_with($name_roles, 'ROLE_')) {
            $name_roles = 'ROLE_' . strtoupper($name_roles);
        } else {
            $name_roles = strtoupper($name_roles);
        }
        
        $this->name_roles = $name_roles;

        return $this;
    }
}
