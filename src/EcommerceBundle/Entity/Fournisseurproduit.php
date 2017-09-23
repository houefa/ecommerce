<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseurproduit
 *
 * @ORM\Table(name="fournisseurproduit")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\FournisseurproduitRepository")
 */
class Fournisseurproduit
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
     * @ORM\Column(name="commentaire", type="text", nullable=true)
     */
    private $commentaire;

    /**
    * @ORM\ManyToOne(targetEntity="Fournisseur", inversedBy="fournisseurproduits")
    * @ORM\JoinColumn(nullable=false)
    */
    private $fournisseur;

    /**
    * @ORM\ManyToOne(targetEntity="Produit", inversedBy="fournisseurproduits")
    * @ORM\JoinColumn(name="id", referencedColumnName="id", nullable=false)
    */
    private $produit;

    /**
     * @ORM\ManyToOne(targetEntity="UtilisateursBundle\Entity\Utilisateurs", inversedBy="fournisseurproduits")
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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Fournisseurproduit
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set fournisseur
     *
     * @param \EcommerceBundle\Entity\Fournisseur $fournisseur
     *
     * @return Fournisseurproduit
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
     * @return Fournisseurproduit
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
     * Set creele
     *
     * @param \DateTime $creele
     *
     * @return Fournisseurproduit
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
     * @return Fournisseurproduit
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
     * @return Fournisseurproduit
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
