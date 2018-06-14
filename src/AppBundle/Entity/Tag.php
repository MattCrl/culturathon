<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinTable;

/**
 * Tag
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TagRepository")
 */
class Tag
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_highlight", type="boolean", nullable=true)
     */
    private $showHighlight;

    /**
     * @ORM\ManyToMany(targetEntity="Artwork", mappedBy="tags")
     *
     */
    private $artworks;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->artworks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Tag
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add artwork.
     *
     * @param \AppBundle\Entity\Artwork $artwork
     *
     * @return Tag
     */
    public function addArtwork(\AppBundle\Entity\Artwork $artwork)
    {
        $this->artworks[] = $artwork;
        $artwork->addTag($this);

        return $this;
    }

    /**
     * Remove artwork.
     *
     * @param \AppBundle\Entity\Artwork $artwork
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeArtwork(\AppBundle\Entity\Artwork $artwork)
    {
        $artwork->removeTag($this);
        return $this->artworks->removeElement($artwork);
    }

    /**
     * Get artworks.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArtworks()
    {
        return $this->artworks;
    }

    /**
     * Set showHighlight.
     *
     * @param bool|null $showHighlight
     *
     * @return Tag
     */
    public function setShowHighlight($showHighlight = null)
    {
        $this->showHighlight = $showHighlight;

        return $this;
    }

    /**
     * Get showHighlight.
     *
     * @return bool|null
     */
    public function getShowHighlight()
    {
        return $this->showHighlight;
    }
}
