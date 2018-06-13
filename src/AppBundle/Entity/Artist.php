<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;

/**
 * Artist
 *
 * @ORM\Table(name="artist")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArtistRepository")
 */
class Artist
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="birthdate", type="integer", nullable=true)
     */
    private $birthdate;

    /**
     * @var int
     *
     * @ORM\Column(name="deathdate", type="integer", nullable=true)
     */
    private $deathdate;

    /**
     * @var string
     *
     * @ORM\Column(name="birthplace", type="string", length=255, nullable=true)
     */
    private $birthplace;

    /**
     * @var string
     *
     * @ORM\Column(name="deathplace", type="string", length=255, nullable=true)
     */
    private $deathplace;

    /**
     * @var bool
     *
     * @ORM\Column(name="isApproxBirth", type="boolean", nullable=true)
     */
    private $isApproxBirth;

    /**
     * @var bool
     *
     * @ORM\Column(name="isApproxDeath", type="boolean", nullable=true)
     */
    private $isApproxDeath;

    /**
     * @var
     *
     * @ManyToMany(targetEntity="Artwork", inversedBy="artist")
     */
    private $artwork;


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
     * @return Artist
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
     * Set birthdate
     *
     * @param integer $birthdate
     *
     * @return Artist
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return int
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set deathdate
     *
     * @param integer $deathdate
     *
     * @return Artist
     */
    public function setDeathdate($deathdate)
    {
        $this->deathdate = $deathdate;

        return $this;
    }

    /**
     * Get deathdate
     *
     * @return int
     */
    public function getDeathdate()
    {
        return $this->deathdate;
    }

    /**
     * Set birthplace
     *
     * @param string $birthplace
     *
     * @return Artist
     */
    public function setBirthplace($birthplace)
    {
        $this->birthplace = $birthplace;

        return $this;
    }

    /**
     * Get birthplace
     *
     * @return string
     */
    public function getBirthplace()
    {
        return $this->birthplace;
    }

    /**
     * Set deathplace
     *
     * @param string $deathplace
     *
     * @return Artist
     */
    public function setDeathplace($deathplace)
    {
        $this->deathplace = $deathplace;

        return $this;
    }

    /**
     * Get deathplace
     *
     * @return string
     */
    public function getDeathplace()
    {
        return $this->deathplace;
    }

    /**
     * Set isApproxBirth
     *
     * @param boolean $isApproxBirth
     *
     * @return Artist
     */
    public function setIsApproxBirth($isApproxBirth)
    {
        $this->isApproxBirth = $isApproxBirth;

        return $this;
    }

    /**
     * Get isApproxBirth
     *
     * @return bool
     */
    public function getIsApproxBirth()
    {
        return $this->isApproxBirth;
    }

    /**
     * Set isApproxDeath
     *
     * @param boolean $isApproxDeath
     *
     * @return Artist
     */
    public function setIsApproxDeath($isApproxDeath)
    {
        $this->isApproxDeath = $isApproxDeath;

        return $this;
    }

    /**
     * Get isApproxDeath
     *
     * @return bool
     */
    public function getIsApproxDeath()
    {
        return $this->isApproxDeath;
    }
}
