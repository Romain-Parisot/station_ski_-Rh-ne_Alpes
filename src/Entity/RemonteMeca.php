<?php

namespace App\Entity;

use App\Repository\RemonteMecaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RemonteMecaRepository::class)]
class RemonteMeca
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column]
    private array $schedule = [];

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $message = null;

    #[ORM\Column]
    private ?bool $isClose = null;

    #[ORM\ManyToOne(inversedBy: 'remonteMecas')]
    private ?Station $station = null;

    #[ORM\ManyToMany(targetEntity: Piste::class, inversedBy: 'remonteMecas')]
    private Collection $pisteRemonte;

    public function __construct()
    {
        $this->pisteRemonte = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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
     * @return Collection<int, Piste>
     */
    public function getPisteRemonte(): Collection
    {
        return $this->pisteRemonte;
    }

    public function addPisteRemonte(Piste $pisteRemonte): self
    {
        if (!$this->pisteRemonte->contains($pisteRemonte)) {
            $this->pisteRemonte->add($pisteRemonte);
        }

        return $this;
    }

    public function removePisteRemonte(Piste $pisteRemonte): self
    {
        $this->pisteRemonte->removeElement($pisteRemonte);

        return $this;
    }
}
