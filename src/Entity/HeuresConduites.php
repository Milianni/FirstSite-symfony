<?php

namespace App\Entity;

use App\Repository\HeuresConduitesRepository;
use DateTime;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: HeuresConduitesRepository::class)]
class HeuresConduites
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id;

    #[ORM\Column(type: 'integer')]
    private ?int $idEléve = null;

    #[ORM\Column(type: 'integer')]
    private ?int $idMonuteur = null;

    #[ORM\Column(type: 'Datetime_immutable')]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $résaHeureConduite = null;

    #[ORM\Column(type: 'float')]
    #[Assert\NotNull("can not be null :/")]
    #[Assert\Positive()]
    #[Assert\Notblank()]
    #[Assert\LessThan(200)]
    private ?float $prix = null;

    #[ORM\Column(type: 'integer')]
    private ?int $numberHeureTotal;
    #[ORM\Column(type: 'datetime_immutable')]
    #[assert\NotNull()]
    private $createdAt;
    /**
     * constructor
     */
    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getIdEléve(): ?int
    {
        return $this->idEléve;
    }

    public function setIdEléve(int $idEléve): static
    {
        $this->idEléve = $idEléve;

        return $this;
    }

    public function getIdMonuteur(): ?int
    {
        return $this->idMonuteur;
    }

    public function setIdMonuteur(int $idMonuteur): static
    {
        $this->idMonuteur = $idMonuteur;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getRésaHeureConduite(): ?\DateTimeInterface
    {
        return $this->résaHeureConduite;
    }

    public function setRésaHeureConduite(?\DateTimeInterface $résaHeureConduite): static
    {
        $this->résaHeureConduite = $résaHeureConduite;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNumberHeureTotal(): ?int
    {
        return $this->numberHeureTotal;
    }

    public function setNumberHeureTotal(int $numberHeureTotal): static
    {
        $this->numberHeureTotal = $numberHeureTotal;

        return $this;
    }
}
