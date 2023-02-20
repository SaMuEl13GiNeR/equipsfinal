<?php

namespace App\Entity;


use ApiPlatform\Metadata\ApiResource;
use App\Repository\EquipRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: EquipRepository::class)]
#[UniqueEntity('nom')]
#[ApiResource]
class Equip
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    private ?string $nom = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotBlank]
    private ?Cicle $cicle = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotBlank]
    private ?Curs $curs = null;

    #[ORM\Column(length: 255)]
    private ?string $imatge = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 2, scale: 0)]
    #[Assert\NotBlank]
    //#[Assert\Type('integer')]
    #[Assert\Range(
        min: 0,
        minMessage: '"La nota ha de ser major que {{ value }}',
    )]
    #[Assert\Range(
        max: 10,
        maxMessage: 'La nota ha de ser menor que {{ value }}',
    )]
    private ?string $nota = null;

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCicle(): ?Cicle
    {
        return $this->cicle;
    }

    public function setCicle(Cicle $cicle): self
    {
        $this->cicle = $cicle;

        return $this;
    }

    public function getCurs(): ?Curs
    {
        return $this->curs;
    }

    public function setCurs(Curs $curs): self
    {
        $this->curs = $curs;

        return $this;
    }

    public function getImatge(): ?string
    {
        return $this->imatge;
    }

    public function setImatge(string $imatge): self
    {
        $this->imatge = $imatge;

        return $this;
    }

    public function getNota(): ?string
    {
        return $this->nota;
    }

    public function setNota(string $nota): self
    {
        $this->nota = $nota;

        return $this;
    }
    public function __toString(){
        return $this->nom;
    }

}
