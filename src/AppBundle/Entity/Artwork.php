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
     * @var int
     *
     * @ORM\Column(name="date", type="integer", nullable=true)
     */
    private $date;
    /**
     * @var
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;
    /**
     * @var bool
     *
     * @ORM\Column(name="approximative_date", type="boolean")
     */
    private $approximativeDate;
    /**
     * @var
     * @ManyToMany(targetEntity="Artist", mappedBy="artwork")
     *
     */
    private $artist;
    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="Cartel", inversedBy="artwork")
     */
    private $cartel;
    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="Museum", inversedBy="artwork")
     */
    private $museum;
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
     * @return int
     */
    public function getDate()
    {
        return $this->date;
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
     * @return bool
     */
    public function getApproximativeDate()
    {
        return $this->approximativeDate;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->artist = new \Doctrine\Common\Collections\ArrayCollection();
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
        $this->artist[] = $artist;
        return $this;
    }
    /**
     * Remove artist
     *
     * @param \AppBundle\Entity\Artist $artist
     */
    public function removeArtist(\AppBundle\Entity\Artist $artist)
    {
        $this->artist->removeElement($artist);
    }
    /**
     * Get artist
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArtist()
    {
        return $this->artist;
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
}
