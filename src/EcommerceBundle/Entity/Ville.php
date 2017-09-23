<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\VilleRepository")
 */
class Ville
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
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Quartier", mappedBy="ville")
     * @ORM\JoinColumn(nullable=true)
     */
    private $quartiers;


    /**
     * @ORM\ManyToOne(targetEntity="EcommerceBundle\Entity\Commune", inversedBy="villes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $commune;



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
     * @return Ville
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
     * @return Ville
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
        $this->quartier = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commune
     *
     * @param \EcommerceBundle\Entity\Commune $commune
     *
     * @return Ville
     */
    public function addCommune(\EcommerceBundle\Entity\Commune $commune)
    {
        $this->communes[] = $commune;

        return $this;
    }

    /**
     * Remove commune
     *
     * @param \EcommerceBundle\Entity\Commune $commune
     */
    public function removeCommune(\EcommerceBundle\Entity\Commune $commune)
    {
        $this->communes->removeElement($commune);
    }

    /**
     * Get communes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommunes()
    {
        return $this->communes;
    }

    /**
     * Set departement2
     *
     * @param \EcommerceBundle\Entity\Departement $departement2
     *
     * @return Ville
     */
    public function setDepartement2(\EcommerceBundle\Entity\Departement $departement2)
    {
        $this->departement2 = $departement2;

        return $this;
    }

    /**
     * Get departement2
     *
     * @return \EcommerceBundle\Entity\Departement
     */
    public function getDepartement2()
    {
        return $this->departement2;
    }

    public function __tostring(){
        return $this->getNom();
    }
}
