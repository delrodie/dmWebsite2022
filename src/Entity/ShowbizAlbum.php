<?php

namespace App\Entity;

use App\Repository\ShowbizAlbumRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ShowbizAlbumRepository::class)
 * @ORM\HasLifecycleCallbacks
 */
class ShowbizAlbum
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $contenu;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $resume;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $piste;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $compositeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $choeurs;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $arrangeur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $producteur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mixage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $master;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $spotify;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $deezer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $itunes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $amazon;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $youtube;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $media;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @ORM\ManyToOne(targetEntity=ShowbizArtiste::class)
     */
    private $artiste;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(?string $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(?string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getPiste(): ?int
    {
        return $this->piste;
    }

    public function setPiste(?int $piste): self
    {
        $this->piste = $piste;

        return $this;
    }

    public function getCompositeur(): ?string
    {
        return $this->compositeur;
    }

    public function setCompositeur(?string $compositeur): self
    {
        $this->compositeur = $compositeur;

        return $this;
    }

    public function getChoeurs(): ?string
    {
        return $this->choeurs;
    }

    public function setChoeurs(?string $choeurs): self
    {
        $this->choeurs = $choeurs;

        return $this;
    }

    public function getArrangeur(): ?string
    {
        return $this->arrangeur;
    }

    public function setArrangeur(?string $arrangeur): self
    {
        $this->arrangeur = $arrangeur;

        return $this;
    }

    public function getProducteur(): ?string
    {
        return $this->producteur;
    }

    public function setProducteur(?string $producteur): self
    {
        $this->producteur = $producteur;

        return $this;
    }

    public function getMixage(): ?string
    {
        return $this->mixage;
    }

    public function setMixage(?string $mixage): self
    {
        $this->mixage = $mixage;

        return $this;
    }

    public function getMaster(): ?string
    {
        return $this->master;
    }

    public function setMaster(?string $master): self
    {
        $this->master = $master;

        return $this;
    }

    public function getSpotify(): ?string
    {
        return $this->spotify;
    }

    public function setSpotify(?string $spotify): self
    {
        $this->spotify = $spotify;

        return $this;
    }

    public function getDeezer(): ?string
    {
        return $this->deezer;
    }

    public function setDeezer(?string $deezer): self
    {
        $this->deezer = $deezer;

        return $this;
    }

    public function getItunes(): ?string
    {
        return $this->itunes;
    }

    public function setItunes(?string $itunes): self
    {
        $this->itunes = $itunes;

        return $this;
    }

    public function getAmazon(): ?string
    {
        return $this->amazon;
    }

    public function setAmazon(?string $amazon): self
    {
        $this->amazon = $amazon;

        return $this;
    }

    public function getYoutube(): ?string
    {
        return $this->youtube;
    }

    public function setYoutube(?string $youtube): self
    {
        $this->youtube = $youtube;

        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function setMedia(?string $media): self
    {
        $this->media = $media;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getArtiste(): ?ShowbizArtiste
    {
        return $this->artiste;
    }

    public function setArtiste(?ShowbizArtiste $artiste): self
    {
        $this->artiste = $artiste;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
	
	/**
	 * @ORM\PrePersist
	 */
	public function setCreatedAtValue(): \DateTime
	{
		return $this->createdAt = new \DateTime();
	}
}
