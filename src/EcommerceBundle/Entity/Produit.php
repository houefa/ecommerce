<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\ProduitRepository")
 */
class Produit
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
     * @ORM\OneToOne(targetEntity="EcommerceBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;


    /**
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="Unitemesure", inversedBy="produit")
     * @ORM\JoinColumn(nullable=false)
     */
    private $unitemesure;


    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float", nullable=true)
     */
    private $poids;

    /**
     * @var float
     * @ORM\Column(name="qte", type="float", nullable=true)
     */
    private $qte;



    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible;

    /**
     * @var bool
     *
     * @ORM\Column(name="avenir", type="boolean")
     */
    private $avenir;

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Afourni", mappedBy="produit")
     * @ORM\JoinColumn(nullable=true)
     */
    private $afournis;



    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Fournisseurproduit", mappedBy="produit")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fournisseurproduits;

    // /**
    //  * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Prix", mappedBy="produit")
    //  * @ORM\JoinColumn(nullable=true)
    //  */

    /**
     * @var float
     * @ORM\Column(name="prix", type="float", nullable=false)
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity="UtilisateursBundle\Entity\Utilisateurs", inversedBy="produits")
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
     * @return Produit
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
     * Set description
     *
     * @param string $description
     *
     * @return Produit
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

    /**
     * Set disponible
     *
     * @param boolean $disponible
     *
     * @return Produit
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return bool
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set avenir
     *
     * @param boolean $avenir
     *
     * @return Produit
     */
    public function setAvenir($avenir)
    {
        $this->avenir = $avenir;

        return $this;
    }

    /**
     * Get avenir
     *
     * @return bool
     */
    public function getAvenir()
    {
        return $this->avenir;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        
        $this->afournis = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fournisseurproduit = new \Doctrine\Common\Collections\ArrayCollection();
        $this->creele = new \DateTime();
        $this->modifiele = new \DateTime();
        $this->setDisponible(true);
        $this->setAvenir(false);
       
    }

    /**
     * Set image
     *
     * @param \EcommerceBundle\Entity\Media $image
     *
     * @return Produit
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
     * Set categorie
     *
     * @param \EcommerceBundle\Entity\Categorie $categorie
     *
     * @return Produit
     */
    public function setCategorie(\EcommerceBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \EcommerceBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Add afourni
     *
     * @param \EcommerceBundle\Entity\Afourni $afourni
     *
     * @return Produit
     */
    public function addAfourni(\EcommerceBundle\Entity\Afourni $afourni)
    {
        $this->afournis[] = $afourni;

        return $this;
    }

    /**
     * Remove afourni
     *
     * @param \EcommerceBundle\Entity\Afourni $afourni
     */
    public function removeAfourni(\EcommerceBundle\Entity\Afourni $afourni)
    {
        $this->afournis->removeElement($afourni);
    }

    /**
     * Get afournis
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAfournis()
    {
        return $this->afournis;
    }

    /**
     * Add fournisseurproduit
     *
     * @param \EcommerceBundle\Entity\Fournisseurproduit $fournisseurproduit
     *
     * @return Produit
     */
    public function addFournisseurproduit(\EcommerceBundle\Entity\Fournisseurproduit $fournisseurproduit)
    {
        $this->fournisseurproduit[] = $fournisseurproduit;

        return $this;
    }

    /**
     * Remove fournisseurproduit
     *
     * @param \EcommerceBundle\Entity\Fournisseurproduit $fournisseurproduit
     */
    public function removeFournisseurproduit(\EcommerceBundle\Entity\Fournisseurproduit $fournisseurproduit)
    {
        $this->fournisseurproduit->removeElement($fournisseurproduit);
    }

    /**
     * Get fournisseurproduit
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFournisseurproduit()
    {
        return $this->fournisseurproduit;
    }

    /**
     * Set creele
     *
     * @param \DateTime $creele
     *
     * @return Produit
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
     * @return Produit
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
     * @return Produit
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

    /**
     * Get fournisseurproduits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFournisseurproduits()
    {
        return $this->fournisseurproduits;
    }

    

    /**
     * Set poids
     *
     * @param float $poids
     *
     * @return Produit
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return float
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set qte
     *
     * @param float $qte
     *
     * @return Produit
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return float
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set unitemesure
     *
     * @param \EcommerceBundle\Entity\Unitemesure $unitemesure
     *
     * @return Produit
     */
    public function setUnitemesure(\EcommerceBundle\Entity\Unitemesure $unitemesure = null)
    {
        $this->unitemesure = $unitemesure;

        return $this;
    }

    /**
     * Get unitemesure
     *
     * @return \EcommerceBundle\Entity\Unitemesure
     */
    public function getUnitemesure()
    {
        return $this->unitemesure;
    }

    public function __tostring(){
        return $this->getLibelle();
    }

    ///////////////////////////
    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

}
