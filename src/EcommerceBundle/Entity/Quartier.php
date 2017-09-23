<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quartier
 *
 * @ORM\Table(name="quartier")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\QuartierRepository")
 */
class Quartier
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var bool
     *
     * @ORM\Column(name="actif", type="boolean")
     */
    private $actif;


    /**
     * @ORM\ManyToOne(targetEntity="EcommerceBundle\Entity\Ville", inversedBy="quartiers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ville;

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Adresse", mappedBy="quartier")
     * @ORM\JoinColumn(nullable=true)
     */
    private $adresses;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Quartier
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     *
     * @return Quartier
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return bool
     */
    public function getActif()
    {
        return $this->actif;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->adresses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    
    

    /**
     * Set commune
     *
     * @param \EcommerceBundle\Entity\Commune $commune
     *
     * @return Quartier
     */
    public function setCommune(\EcommerceBundle\Entity\Commune $commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return \EcommerceBundle\Entity\Commune
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Add adress
     *
     * @param \EcommerceBundle\Entity\Adresse $adress
     *
     * @return Quartier
     */
    public function addAdress(\EcommerceBundle\Entity\Adresse $adress)
    {
        $this->adresses[] = $adress;

        return $this;
    }

    /**
     * Remove adress
     *
     * @param \EcommerceBundle\Entity\Adresse $adress
     */
    public function removeAdress(\EcommerceBundle\Entity\Adresse $adress)
    {
        $this->adresses->removeElement($adress);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresses()
    {
        return $this->adresses;
    }

    public function __tostring(){
        return $this->getNom();
    }
}
