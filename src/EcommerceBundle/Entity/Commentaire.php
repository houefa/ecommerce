<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\CommentaireRepository")
 */
class Commentaire
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
     * @ORM\Column(name="tablec", type="string", length=125)
     */
    private $tablec;

    /**
     * @var int
     *
     * @ORM\Column(name="champc", type="string", length=125)
     */
    private $champc;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text")
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_etoiles", type="string", length=255, nullable=true)
     */
    private $nbEtoiles;

    /**
     * @ORM\ManyToOne(targetEntity="UtilisateursBundle\Entity\Utilisateurs", inversedBy="commentaires")
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
     * Set tablec
     *
     * @param string $tablec
     *
     * @return Commentaire
     */
    public function setTablec($tablec)
    {
        $this->tablec = $tablec;

        return $this;
    }

    /**
     * Get tablec
     *
     * @return string
     */
    public function getTablec()
    {
        return $this->tablec;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Commentaire
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set nbEtoiles
     *
     * @param string $nbEtoiles
     *
     * @return Commentaire
     */
    public function setNbEtoiles($nbEtoiles)
    {
        $this->nbEtoiles = $nbEtoiles;

        return $this;
    }

    /**
     * Get nbEtoiles
     *
     * @return string
     */
    public function getNbEtoiles()
    {
        return $this->nbEtoiles;
    }

    /**
     * Set champc
     *
     * @param string $champc
     *
     * @return Commentaire
     */
    public function setChampc($champc)
    {
        $this->champc = $champc;

        return $this;
    }

    /**
     * Get champc
     *
     * @return string
     */
    public function getChampc()
    {
        return $this->champc;
    }

    /**
     * Set creele
     *
     * @param \DateTime $creele
     *
     * @return Commentaire
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
     * @return Commentaire
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
     * @return Commentaire
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
