<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\FournisseurRepository")
 */
class Fournisseur
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
     * @ORM\Column(name="tel1", type="string", length=255)
     */
    private $tel1;

    /**
     * @var string
     *
     * @ORM\Column(name="tel2", type="string", length=255, nullable=true, unique=true)
     */
    private $tel2;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=true)
     */
    private $note;


    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Fournisseurproduit", mappedBy="fournisseur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fournisseurproduits;

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Afourni", mappedBy="fournisseur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $afournis;

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Adresse", mappedBy="fournisseur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $adresses;


    /**
     * @ORM\ManyToOne(targetEntity="UtilisateursBundle\Entity\Utilisateurs", inversedBy="fournisseurs")
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
     * @return Fournisseur
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
     * @return Fournisseur
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
     * @return Fournisseur
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
     * @return Fournisseur
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
     * Set note
     *
     * @param string $note
     *
     * @return Fournisseur
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fournisseurproduit = new \Doctrine\Common\Collections\ArrayCollection();
        $this->afournis = new \Doctrine\Common\Collections\ArrayCollection();
        $this->adresses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->creele = new \DateTime();
        $this->modifiele = new \DateTime();
    }

    /**
     * Add fournisseurproduit
     *
     * @param \EcommerceBundle\Entity\Fournisseurproduit $fournisseurproduit
     *
     * @return Fournisseur
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
     * Add afourni
     *
     * @param \EcommerceBundle\Entity\Afourni $afourni
     *
     * @return Fournisseur
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
     * Add adress
     *
     * @param \EcommerceBundle\Entity\Adresse $adress
     *
     * @return Fournisseur
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
     * @return Fournisseur
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
     * @return Fournisseur
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
     * @return Fournisseur
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
}
