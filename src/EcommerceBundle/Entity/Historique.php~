<?php

namespace EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historique
 *
 * @ORM\Table(name="historique")
 * @ORM\Entity(repositoryClass="EcommerceBundle\Repository\HistoriqueRepository")
 */
class Historique
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
     * @ORM\Column(name="tableh", type="string", length=125)
     */
    private $tableh;

    /**
     * @var string
     *
     * @ORM\Column(name="champh", type="integer", length=125)
     */
    private $champh;

    /**
     * @var string
     *
     * @ORM\Column(name="anciennevaleur", type="text", nullable=true)
     */
    private $anciennevaleur;

    /**
     * @var string
     *
     * @ORM\Column(name="nouvellevaleur", type="text")
     */
    private $nouvellevaleur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="UtilisateursBundle\Entity\Utilisateurs", inversedBy="historiques")
     * @ORM\JoinColumn(nullable=false)
     */
    private $creepar;


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
     * Set tableh
     *
     * @param string $tableh
     *
     * @return Historique
     */
    public function setTableh($tableh)
    {
        $this->tableh = $tableh;

        return $this;
    }

    /**
     * Get tableh
     *
     * @return string
     */
    public function getTableh()
    {
        return $this->tableh;
    }

    /**
     * Set anciennevaleur
     *
     * @param string $anciennevaleur
     *
     * @return Historique
     */
    public function setAnciennevaleur($anciennevaleur)
    {
        $this->anciennevaleur = $anciennevaleur;

        return $this;
    }

    /**
     * Get anciennevaleur
     *
     * @return string
     */
    public function getAnciennevaleur()
    {
        return $this->anciennevaleur;
    }

    /**
     * Set nouvellevaleur
     *
     * @param string $nouvellevaleur
     *
     * @return Historique
     */
    public function setNouvellevaleur($nouvellevaleur)
    {
        $this->nouvellevaleur = $nouvellevaleur;

        return $this;
    }

    /**
     * Get nouvellevaleur
     *
     * @return string
     */
    public function getNouvellevaleur()
    {
        return $this->nouvellevaleur;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Historique
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
     * Set champh
     *
     * @param integer $champh
     *
     * @return Historique
     */
    public function setChamph($champh)
    {
        $this->champh = $champh;

        return $this;
    }

    /**
     * Get champh
     *
     * @return integer
     */
    public function getChamph()
    {
        return $this->champh;
    }

    /**
     * Set creepar
     *
     * @param \UtilisateursBundle\Entity\Utilisateurs $creepar
     *
     * @return Historique
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
        $this->date = new \DateTime();
        
    }
}
