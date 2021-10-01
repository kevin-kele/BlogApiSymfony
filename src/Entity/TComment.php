<?php

namespace App\Entity;
use App\Entity\base\TraitEntity;
use App\Repository\TCommentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TCommentRepository::class)
 */
class TComment
{   
    use TraitEntity;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $comment;

    /**
     * @ORM\ManyToOne(targetEntity=Tuser::class, inversedBy="tComments")
     */
    private $fk_User;

    /**
     * @ORM\ManyToOne(targetEntity=TArticle::class, inversedBy="tComments")
     */
    private $fk_Article;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getFkUser(): ?Tuser
    {
        return $this->fk_User;
    }

    public function setFkUser(?Tuser $fk_User): self
    {
        $this->fk_User = $fk_User;

        return $this;
    }

    public function getFkArticle(): ?TArticle
    {
        return $this->fk_Article;
    }

    public function setFkArticle(?TArticle $fk_Article): self
    {
        $this->fk_Article = $fk_Article;

        return $this;
    }
}
