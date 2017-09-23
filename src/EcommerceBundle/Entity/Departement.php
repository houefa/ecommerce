<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\DepartementRepository")
 */
class Departement
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
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Commune", mappedBy="departement2")
     * @ORM\JoinColumn(nullable=true)
     */
    private $communes;

    /**
     * @ORM\ManyToOne(targetEntity="EcommerceBundle\Entity\Pays", inversedBy="departements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pays2;


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
     * @return Departement
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
     * @return Departement
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
        $this->villes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ville
     *
     * @param \EcommerceBundle\Entity\Ville $ville
     *
     * @return Departement
     */
    public function addVille(\EcommerceBundle\Entity\Ville $ville)
    {
        $this->villes[] = $ville;

        return $this;
    }

    /**
     * Remove ville
     *
     * @param \EcommerceBundle\Entity\Ville $ville
     */
    public function removeVille(\EcommerceBundle\Entity\Ville $ville)
    {
        $this->villes->removeElement($ville);
    }

    /**
     * Get villes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVilles()
    {
        return $this->villes;
    }

   
    /**
     * Set pays2
     *
     * @param \EcommerceBundle\Entity\Pays $pays2
     *
     * @return Departement
     */
    public function setPays2(\EcommerceBundle\Entity\Pays $pays2)
    {
        $this->pays2 = $pays2;

        return $this;
    }

    /**
     * Get pays2
     *
     * @return \EcommerceBundle\Entity\Pays
     */
    public function getPays2()
    {
        return $this->pays2;
    }

    public function __tostring(){
        return $this->getNom();
    }
}
