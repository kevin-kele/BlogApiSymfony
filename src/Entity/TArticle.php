<?php

namespace App\Entity;

use App\Repository\TArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TArticleRepository::class)
 */
class TArticle
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
    private $title;

    /**
     * @ORM\Column(type="string", length=3000)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=TCategorie::class, inversedBy="tArticles")
     */
    private $fk_categorie;

    /**
     * @ORM\ManyToOne(targetEntity=Tuser::class, inversedBy="tArticles")
     */
    private $fk_user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getFkCategorie(): ?TCategorie
    {
        return $this->fk_categorie;
    }

    public function setFkCategorie(?TCategorie $fk_categorie): self
    {
        $this->fk_categorie = $fk_categorie;

        return $this;
    }

    public function getFkUser(): ?Tuser
    {
        return $this->fk_user;
    }

    public function setFkUser(?Tuser $fk_user): self
    {
        $this->fk_user = $fk_user;

        return $this;
    }
}
