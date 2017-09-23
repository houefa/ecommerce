<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\FactureRepository")
 */
class Facture
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
     * @ORM\OneToOne(targetEntity="EcommerceBundle\Entity\Commande", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $commande;


    /**
     * @var float
     *
     * @ORM\Column(name="frais_livraison", type="float", nullable=true)
     */
    private $fraisLivraison;

    /**
     * @var bool
     *
     * @ORM\Column(name="paye", type="boolean")
     */
    private $paye;

    // *
    //  * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Adresse", mappedBy="utilisateur")
    //  * @ORM\JoinColumn(nullable=true)
     

    // private $adresses;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    private $total;

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
     * Set fraisLivraison
     *
     * @param float $fraisLivraison
     *
     * @return Facture
     */
    public function setFraisLivraison($fraisLivraison)
    {
        $this->fraisLivraison = $fraisLivraison;

        return $this;
    }

    /**
     * Get fraisLivraison
     *
     * @return float
     */
    public function getFraisLivraison()
    {
        return $this->fraisLivraison;
    }

    /**
     * Set paye
     *
     * @param boolean $paye
     *
     * @return Facture
     */
    public function setPaye($paye)
    {
        $this->paye = $paye;

        return $this;
    }

    /**
     * Get paye
     *
     * @return bool
     */
    public function getPaye()
    {
        return $this->paye;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Facture
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set commande
     *
     * @param \EcommerceBundle\Entity\Commande $commande
     *
     * @return Facture
     */
    public function setCommande(\EcommerceBundle\Entity\Commande $commande = null)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \EcommerceBundle\Entity\Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set creele
     *
     * @param \DateTime $creele
     *
     * @return Facture
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
     * @return Facture
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
     * Constructor
     */
    public function __construct()
    {
        $this->creele = new \DateTime();
        $this->modifiele = new \DateTime();
        
    }
}
