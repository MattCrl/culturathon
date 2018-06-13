<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;

/**
 * Artwork
 *
 * @ORM\Table(name="artwork")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArtworkRepository")
 */
class Artwork
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="date", type="integer", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var bool
     *
     * @ORM\Column(name="approximative_date", type="boolean", nullable=true)
     */
    private $approximativeDate;

    /**
     *
     * @ManyToMany(targetEntity="Artist", inversedBy="artworks")
     * @JoinTable(name="artwork_artist")
     *
     */
    private $artists;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Cartel", inversedBy="artworks")
     */
    private $cartel;

    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="Museum", inversedBy="artworks")
     */
    private $museum;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getTitle();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->artists = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Artwork
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set date
     *
     * @param integer $date
     *
     * @return Artwork
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Artwork
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set approximativeDate
     *
     * @param boolean $approximativeDate
     *
     * @return Artwork
     */
    public function setApproximativeDate($approximativeDate)
    {
        $this->approximativeDate = $approximativeDate;

        return $this;
    }

    /**
     * Get approximativeDate
     *
     * @return boolean
     */
    public function getApproximativeDate()
    {
        return $this->approximativeDate;
    }

    /**
     * Add artist
     *
     * @param \AppBundle\Entity\Artist $artist
     *
     * @return Artwork
     */
    public function addArtist(\AppBundle\Entity\Artist $artist)
    {
        $this->artists[] = $artist;

        return $this;
    }

    /**
     * Remove artist
     *
     * @param \AppBundle\Entity\Artist $artist
     */
    public function removeArtist(\AppBundle\Entity\Artist $artist)
    {
        $this->artists->removeElement($artist);
    }

    /**
     * Get artists
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArtists()
    {
        return $this->artists;
    }

    /**
     * Set cartel
     *
     * @param \AppBundle\Entity\Cartel $cartel
     *
     * @return Artwork
     */
    public function setCartel(\AppBundle\Entity\Cartel $cartel = null)
    {
        $this->cartel = $cartel;

        return $this;
    }

    /**
     * Get cartel
     *
     * @return \AppBundle\Entity\Cartel
     */
    public function getCartel()
    {
        return $this->cartel;
    }

    /**
     * Set museum
     *
     * @param \AppBundle\Entity\Museum $museum
     *
     * @return Artwork
     */
    public function setMuseum(\AppBundle\Entity\Museum $museum = null)
    {
        $this->museum = $museum;

        return $this;
    }

    /**
     * Get museum
     *
     * @return \AppBundle\Entity\Museum
     */
    public function getMuseum()
    {
        return $this->museum;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Artwork
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
