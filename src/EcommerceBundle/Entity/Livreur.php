<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Livreur
 *
 * @ORM\Table(name="livreur")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\LivreurRepository")
 */
class Livreur
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
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="tel1", type="string", length=125, unique=true)
     */
    private $tel1;

    /**
     * @var string
     *
     * @ORM\Column(name="tel2", type="string", length=125, nullable=true)
     */
    private $tel2;

    /**
     * @var string
     *
     * @ORM\Column(name="personne_a_contacter", type="text")
     */
    private $personneAContacter;


    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Commande", mappedBy="livreur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $commandes;


    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Adresse", mappedBy="livreur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $adresses;

    /**
     * @ORM\ManyToOne(targetEntity="UtilisateursBundle\Entity\Utilisateurs", inversedBy="livreurs")
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Livreur
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Livreur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set tel1
     *
     * @param string $tel1
     *
     * @return Livreur
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get tel1
     *
     * @return string
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set tel2
     *
     * @param string $tel2
     *
     * @return Livreur
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get tel2
     *
     * @return string
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set personneAContacter
     *
     * @param string $personneAContacter
     *
     * @return Livreur
     */
    public function setPersonneAContacter($personneAContacter)
    {
        $this->personneAContacter = $personneAContacter;

        return $this;
    }

    /**
     * Get personneAContacter
     *
     * @return string
     */
    public function getPersonneAContacter()
    {
        return $this->personneAContacter;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commandes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->adresses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->creele = new \DateTime();
        $this->modifiele = new \DateTime();
    }

    /**
     * Add commande
     *
     * @param \EcommerceBundle\Entity\Commande $commande
     *
     * @return Livreur
     */
    public function addCommande(\EcommerceBundle\Entity\Commande $commande)
    {
        $this->commandes[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \EcommerceBundle\Entity\Commande $commande
     */
    public function removeCommande(\EcommerceBundle\Entity\Commande $commande)
    {
        $this->commandes->removeElement($commande);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Add adress
     *
     * @param \EcommerceBundle\Entity\Adresse $adress
     *
     * @return Livreur
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

    /**
     * Set creele
     *
     * @param \DateTime $creele
     *
     * @return Livreur
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
     * @return Livreur
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
     * @return Livreur
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
}
