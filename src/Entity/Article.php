<?php

namespace App\Entity;

use App\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $publicationName;

    /**
     * @ORM\Column(type="datetime")
     */
    private $publicdate;

    /**
     * @ORM\Column(type="string", length=512)
     */
    private $author;

    /**
     * @ORM\Column(type="integer")
     */
    private $points;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=512)
     */
    private $doi;

    /**
     * @ORM\Column(type="integer")
     */
    private $userId;

    public function __construct() {}

    public function getId(): ?int {
        return $this->id;
    }

    public function getPublicationName(): ?string {
        return $this->publicationName;
    }

    public function setPublicationName(string $publicationName): self {
        $this->publicationName = $publicationName;
        return $this;
    }

    public function getAuthor(): ?string {
        return $this->author;
    }

    public function setAuthor(string $author): self {
        $this->author = $author;

        return $this;
    }

    public function getPublicdate(): ?\DateTimeInterface {
        return $this->publicdate;
    }

    public function getTimezone(): ?string {
        return $this->publicdate->getTimeZone()->getName();
    }

    public function setPublicdate(\DateTimeInterface $publicdate): self {
        $this->publicdate = $publicdate;

        return $this;
    }

    public function getPoints(): ?int {
        return $this->points;
    }

    public function setPoints(int $points): self {
        $this->points = $points;

        return $this;
    }

    public function getTitle(): ?string {
        return $this->title;
    }

    public function setTitle(?string $title): self {
        $this->title = $title;

        return $this;
    }

    public function getDoi(): ?string {
        return $this->doi;
    }

    public function setDoi(string $doi): self {
        $this->doi = $doi;

        return $this;
    }

    public function getUserId(): ?int {
        return $this->userId;
    }

    public function setUserId(int $userId): self {
        $this->userId = $userId;

        return $this;
    }
}
