<?php

namespace App\Entity;

use App\Repository\TpaysRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TpaysRepository::class)
 */
class Tpays
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Tuser::class, mappedBy="fk_pays")
     */
    private $tusers;

    public function __construct()
    {
        $this->tusers = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Tuser[]
     */
    public function getTusers(): Collection
    {
        return $this->tusers;
    }

    public function addTuser(Tuser $tuser): self
    {
        if (!$this->tusers->contains($tuser)) {
            $this->tusers[] = $tuser;
            $tuser->setFkPays($this);
        }

        return $this;
    }

    public function removeTuser(Tuser $tuser): self
    {
        if ($this->tusers->removeElement($tuser)) {
            // set the owning side to null (unless already changed)
            if ($tuser->getFkPays() === $this) {
                $tuser->setFkPays(null);
            }
        }

        return $this;
    }
}
