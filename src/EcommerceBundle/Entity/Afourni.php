<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Afourni
 *
 * @ORM\Table(name="Afourni")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\AfourniRepository")
 */
class Afourni
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
     * @var float
     *
     * @ORM\Column(name="quantite", type="float", nullable=true)
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="prixachat", type="float")
     */
    private $prixachat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

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
     * @ORM\ManyToOne(targetEntity="UtilisateursBundle\Entity\Utilisateurs", inversedBy="afournis")
     * @ORM\JoinColumn(name="id", referencedColumnName="id", nullable=false)
     */
    private $creepar;


    /**
    * @ORM\ManyToOne(targetEntity="Fournisseur", inversedBy="afournis")
    * @ORM\JoinColumn(name="id", referencedColumnName="id", nullable=false)
    */
    private $fournisseur;

    /**
    * @ORM\ManyToOne(targetEntity="Produit", inversedBy="afournis")
    * @ORM\JoinColumn(name="id", referencedColumnName="id", nullable=false)
    */
    private $produit;


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
     * Set quantite
     *
     * @param float $quantite
     *
     * @return Afourni
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return float
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prixachat
     *
     * @param float $prixachat
     *
     * @return Afourni
     */
    public function setPrixachat($prixachat)
    {
        $this->prixachat = $prixachat;

        return $this;
    }

    /**
     * Get prixachat
     *
     * @return float
     */
    public function getPrixachat()
    {
        return $this->prixachat;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Afourni
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set creele
     *
     * @param \DateTime $creele
     *
     * @return Afourni
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
     * @return Afourni
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
     * Set fournisseur
     *
     * @param \EcommerceBundle\Entity\Fournisseur $fournisseur
     *
     * @return Afourni
     */
    public function setFournisseur(\EcommerceBundle\Entity\Fournisseur $fournisseur)
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    /**
     * Get fournisseur
     *
     * @return \EcommerceBundle\Entity\Fournisseur
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }

    /**
     * Set produit
     *
     * @param \EcommerceBundle\Entity\Produit $produit
     *
     * @return Afourni
     */
    public function setProduit(\EcommerceBundle\Entity\Produit $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \EcommerceBundle\Entity\Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set creepar
     *
     * @param \UtilisateursBundle\Entity\Utilisateurs $creepar
     *
     * @return Afourni
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
     * Constructor
     */
    public function __construct()
    {
        $this->creele = new \DateTime();
        $this->modifiele = new \DateTime();
        
    }
}
