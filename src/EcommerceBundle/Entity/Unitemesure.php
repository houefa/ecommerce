<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Unitemesure
 *
 * @ORM\Table(name="unitemesure")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\UnitemesureRepository")
 */
class Unitemesure
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
     * @ORM\Column(name="libelle", type="string", length=125, unique=true)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Produit", mappedBy="unitemesure")
     * @ORM\JoinColumn(nullable=true)
     */
    private $produit;

    /**
     * @ORM\ManyToOne(targetEntity="UtilisateursBundle\Entity\Utilisateurs", inversedBy="unitemesures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $creepar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creele", type="datetime")
     */
    private $creele;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifiele", type="datetime")
     */
    private $modifiele;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Unitemesure
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->produit = new \Doctrine\Common\Collections\ArrayCollection();
        $this->creele = new \DateTime();
        $this->modifiele = new \DateTime();
    }

    /**
     * Add produit
     *
     * @param \EcommerceBundle\Entity\Produit $produit
     *
     * @return Unitemesure
     */
    public function addProduit(\EcommerceBundle\Entity\Produit $produit)
    {
        $this->produit[] = $produit;

        return $this;
    }

    /**
     * Remove produit
     *
     * @param \EcommerceBundle\Entity\Produit $produit
     */
    public function removeProduit(\EcommerceBundle\Entity\Produit $produit)
    {
        $this->produit->removeElement($produit);
    }

    /**
     * Get produit
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set creele
     *
     * @param \DateTime $creele
     *
     * @return Unitemesure
     */
    public function setCreele($creele)
    {
        $this->creele = $creele;

        return $this;
    }

    /**
     * Get creele
     *
     * @return \DateTime
     */
    public function getCreele()
    {
        return $this->creele;
    }

    /**
     * Set modifiele
     *
     * @param \DateTime $modifiele
     *
     * @return Unitemesure
     */
    public function setModifiele($modifiele)
    {
        $this->modifiele = $modifiele;

        return $this;
    }

    /**
     * Get modifiele
     *
     * @return \DateTime
     */
    public function getModifiele()
    {
        return $this->modifiele;
    }

    /**
     * Set creepar
     *
     * @param \UtilisateursBundle\Entity\Utilisateurs $creepar
     *
     * @return Unitemesure
     */
    public function setCreepar(\UtilisateursBundle\Entity\Utilisateurs $creepar)
    {
        $this->creepar = $creepar;

        return $this;
    }

    /**
     * Get creepar
     *
     * @return \UtilisateursBundle\Entity\Utilisateurs
     */
    public function getCreepar()
    {
        return $this->creepar;
    }


    public function __tostring(){
        return $this->getLibelle();
    }
}
