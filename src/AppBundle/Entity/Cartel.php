<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cartel
 *
 * @ORM\Table(name="cartel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CartelRepository")
 */
class Cartel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="Artwork", mappedBy="cartel")
     */
    private $artwork;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Cartel
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->artwork = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add artwork
     *
     * @param \AppBundle\Entity\Artwork $artwork
     *
     * @return Cartel
     */
    public function addArtwork(\AppBundle\Entity\Artwork $artwork)
    {
        $this->artwork[] = $artwork;

        return $this;
    }

    /**
     * Remove artwork
     *
     * @param \AppBundle\Entity\Artwork $artwork
     */
    public function removeArtwork(\AppBundle\Entity\Artwork $artwork)
    {
        $this->artwork->removeElement($artwork);
    }

    /**
     * Get artwork
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArtwork()
    {
        return $this->artwork;
    }
}
