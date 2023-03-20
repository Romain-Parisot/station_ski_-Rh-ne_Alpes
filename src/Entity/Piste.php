<?php

namespace App\Entity;

use App\Repository\PisteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PisteRepository::class)]
class Piste
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $level = null;

    #[ORM\Column]
    private array $schedule = [];

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $message = null;

    #[ORM\Column]
    private ?bool $isAlpin = null;

    #[ORM\Column]
    private ?bool $isClose = null;

    #[ORM\ManyToOne(inversedBy: 'pistes')]
    private ?Station $station = null;

    #[ORM\ManyToMany(targetEntity: RemonteMeca::class, mappedBy: 'pisteRemonte')]
    private Collection $remonteMecas;

    public function __construct()
    {
        $this->remonteMecas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(string $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getSchedule(): array
    {
        return $this->schedule;
    }

    public function setSchedule(array $schedule): self
    {
        $this->schedule = $schedule;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function isIsAlpin(): ?bool
    {
        return $this->isAlpin;
    }

    public function setIsAlpin(bool $type): self
    {
        $this->isAlpin = $type;

        return $this;
    }

    public function isIsClose(): ?bool
    {
        return $this->isClose;
    }

    public function setIsClose(bool $isClose): self
    {
        $this->isClose = $isClose;

        return $this;
    }

    public function getStation(): ?Station
    {
        return $this->station;
    }

    public function setStation(?Station $station): self
    {
        $this->station = $station;

        return $this;
    }

    /**
     * @return Collection<int, RemonteMeca>
     */
    public function getRemonteMecas(): Collection
    {
        return $this->remonteMecas;
    }

    public function addRemonteMeca(RemonteMeca $remonteMeca): self
    {
        if (!$this->remonteMecas->contains($remonteMeca)) {
            $this->remonteMecas->add($remonteMeca);
            $remonteMeca->addPisteRemonte($this);
        }

        return $this;
    }

    public function removeRemonteMeca(RemonteMeca $remonteMeca): self
    {
        if ($this->remonteMecas->removeElement($remonteMeca)) {
            $remonteMeca->removePisteRemonte($this);
        }

        return $this;
    }
}
