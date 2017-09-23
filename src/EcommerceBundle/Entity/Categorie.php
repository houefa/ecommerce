<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\CategorieRepository")
 */
class Categorie
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
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Categorie", mappedBy="parent")
     * @ORM\JoinColumn(nullable=false)
     */
    private $children;


    /**
     * @ORM\ManyToOne(targetEntity="EcommerceBundle\Entity\Categorie", inversedBy="children")
     * @ORM\JoinColumn(nullable=true, name="parent", referencedColumnName="id" )
     */
    private $parent = null;


    /**
     * @ORM\OneToOne(targetEntity="EcommerceBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;


    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Produit", mappedBy="categorie")
     * @ORM\JoinColumn(nullable=true)
     */
    private $produits;

     /**
     * @ORM\ManyToOne(targetEntity="UtilisateursBundle\Entity\Utilisateurs", inversedBy="categories")
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
     * @return Categorie
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
        $this->produits = new \Doctrine\Common\Collections\ArrayCollection();
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->creele = new \DateTime();
        $this->modifiele = new \DateTime();
        
    }

    /**
     * Set image
     *
     * @param \EcommerceBundle\Entity\Media $image
     *
     * @return Categorie
     */
    public function setImage(\EcommerceBundle\Entity\Media $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \EcommerceBundle\Entity\Media
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add produit
     *
     * @param \EcommerceBundle\Entity\Produit $produit
     *
     * @return Categorie
     */
    public function addProduit(\EcommerceBundle\Entity\Produit $produit)
    {
        $this->produits[] = $produit;

        return $this;
    }

    /**
     * Remove produit
     *
     * @param \EcommerceBundle\Entity\Produit $produit
     */
    public function removeProduit(\EcommerceBundle\Entity\Produit $produit)
    {
        $this->produits->removeElement($produit);
    }

    /**
     * Get produits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduits()
    {
        return $this->produits;
    }

    /**
     * Set creele
     *
     * @param \DateTime $creele
     *
     * @return Categorie
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
     * @return Categorie
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
     * @return Categorie
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

    ///////////////////////////////////////////////////////////////////////////////

    public function getParent()
    {
        return $this->parent;
    }


    public function getChildren()
    {
        return $this->children;
    }


    public function addChild(Categorie $child)
    {
        $this->children[] = $child;
        $child->setParent($this);
    }

    public function setParent(Categorie $parent) 
    {
        $this->parent = $parent;

    }
}
