<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\CommandeRepository")
 */
class Commande
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
     * @ORM\ManyToOne(targetEntity="Livreur", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=true)
     */
    private $livreur;

    /**
     * @var bool
     *
     * @ORM\Column(name="valider", type="boolean")
     */
    private $valider;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datec", type="datetime")
     */
    private $datec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datel", type="date", nullable=true)
     */
    private $datel;

    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="integer")
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heurel", type="time", nullable=true)
     */
    private $heurel;

    /**
     * @ORM\ManyToOne(targetEntity="UtilisateursBundle\Entity\Utilisateurs", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $creepar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifiele", type="datetime")
     */
    private $modifiele;

     /**
     * @var array
     *
     * @ORM\Column(name="produits", type="array")
     */
    private $produits;


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
     * Set produits
     *
     * @param array $produits
     *
     * @return Commande
     */
    public function setProduits($produits)
    {
        $this->produits = $produits;

        return $this;
    }

     /**
     * Get produits
     *
     * @return array
     */
    public function getProduits()
    {
        return $this->produits;
    }

    /**
     * Set valider
     *
     * @param boolean $valider
     *
     * @return Commande
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return bool
     */
    public function getValider()
    {
        return $this->valider;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Commande
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set datec
     *
     * @param \DateTime $datec
     *
     * @return Commande
     */
    public function setDatec($datec)
    {
        $this->datec = $datec;

        return $this;
    }

    /**
     * Get datec
     *
     * @return \DateTime
     */
    public function getDatec()
    {
        return $this->datec;
    }

    /**
     * Set datel
     *
     * @param \DateTime $datel
     *
     * @return Commande
     */
    public function setDatel($datel)
    {
        $this->datel = $datel;

        return $this;
    }

    /**
     * Get datel
     *
     * @return \DateTime
     */
    public function getDatel()
    {
        return $this->datel;
    }

    /**
     * Set reference
     *
     * @param integer $reference
     *
     * @return Commande
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return int
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set heurel
     *
     * @param \DateTime $heurel
     *
     * @return Commande
     */
    public function setHeurel($heurel)
    {
        $this->heurel = $heurel;

        return $this;
    }

    /**
     * Get heurel
     *
     * @return \DateTime
     */
    public function getHeurel()
    {
        return $this->heurel;
    }

    /**
     * Set livreur
     *
     * @param \EcommerceBundle\Entity\Livreur $livreur
     *
     * @return Commande
     */
    public function setLivreur(\EcommerceBundle\Entity\Livreur $livreur = null)
    {
        $this->livreur = $livreur;

        return $this;
    }

    /**
     * Get livreur
     *
     * @return \EcommerceBundle\Entity\Livreur
     */
    public function getLivreur()
    {
        return $this->livreur;
    }

    /**
     * Set modifiele
     *
     * @param \DateTime $modifiele
     *
     * @return Commande
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
     * @return Commande
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
