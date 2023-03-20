<?php

namespace App\Entity;

use App\Repository\StationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StationRepository::class)]
class Station
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logo = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'stations')]
    private ?Domaine $domaine = null;

    #[ORM\OneToMany(mappedBy: 'station', targetEntity: Piste::class)]
    private Collection $pistes;

    #[ORM\OneToMany(mappedBy: 'station', targetEntity: RemonteMeca::class)]
    private Collection $remonteMecas;

    public function __construct()
    {
        $this->pistes = new ArrayCollection();
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

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDomaine(): ?Domaine
    {
        return $this->domaine;
    }

    public function setDomaine(?Domaine $domaine): self
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * @return Collection<int, Piste>
     */
    public function getPistes(): Collection
    {
        return $this->pistes;
    }

    public function addPiste(Piste $piste): self
    {
        if (!$this->pistes->contains($piste)) {
            $this->pistes->add($piste);
            $piste->setStation($this);
        }

        return $this;
    }

    public function removePiste(Piste $piste): self
    {
        if ($this->pistes->removeElement($piste)) {
            // set the owning side to null (unless already changed)
            if ($piste->getStation() === $this) {
                $piste->setStation(null);
            }
        }

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
            $remonteMeca->setStation($this);
        }

        return $this;
    }

    public function removeRemonteMeca(RemonteMeca $remonteMeca): self
    {
        if ($this->remonteMecas->removeElement($remonteMeca)) {
            // set the owning side to null (unless already changed)
            if ($remonteMeca->getStation() === $this) {
                $remonteMeca->setStation(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
