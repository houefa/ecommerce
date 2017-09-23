<?php
// src/AppBundle/Entity/User.php

namespace UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Adresse", mappedBy="utilisateur")
     * @ORM\JoinColumn(nullable=true)
     */

    private $adresses;

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Historique", mappedBy="creepar")
     * @ORM\JoinColumn(nullable=true)
     */

    private $historiques;

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Afourni", mappedBy="creepar")
     * @ORM\JoinColumn(nullable=true)
     */
    private $afournis;

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Produit", mappedBy="creepar")
     * @ORM\JoinColumn(nullable=true)
     */
    private $produits;

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Livreur", mappedBy="creepar")
     * @ORM\JoinColumn(nullable=true)
     */
    private $livreurs;

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Commentaire", mappedBy="creepar")
     * @ORM\JoinColumn(nullable=true)
     */
    private $commentaires;

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Categorie", mappedBy="creepar")
     * @ORM\JoinColumn(nullable=true)
     */
    private $categories;

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Commande", mappedBy="creepar")
     * @ORM\JoinColumn(nullable=true)
     */
    private $commandes;

    

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Unitemesure", mappedBy="creepar")
     * @ORM\JoinColumn(nullable=true)
     */
    private $unitemesures;

    
    // *
    //  * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Qte", mappedBy="creepar")
    //  * @ORM\JoinColumn(nullable=true)
     
    // private $qtes;

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Fournisseur", mappedBy="creepar")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fournisseurs;

    /**
     * @ORM\OneToMany(targetEntity="EcommerceBundle\Entity\Fournisseurproduit", mappedBy="creepar")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fournisseurproduits;


    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->commandes = new ArrayCollection();
        $this->adresses = new ArrayCollection();
        $this->historiques = new ArrayCollection();

        $this->afournis = new ArrayCollection();
        $this->produits = new ArrayCollection();
        $this->livreurs = new ArrayCollection();

        $this->commentaires = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->commandes = new ArrayCollection();

        $this->unitemesures = new ArrayCollection();
        
        $this->fournisseurs = new ArrayCollection();
    }


    /**
     * Add commande
     *
     * @param \EcommerceBundle\Entity\Commande $commande
     *
     * @return Utilisateurs
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
     * @return Utilisateurs
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
     * Add historique
     *
     * @param \EcommerceBundle\Entity\Historique $historique
     *
     * @return Utilisateurs
     */
    public function addHistorique(\EcommerceBundle\Entity\Historique $historique)
    {
        $this->historiques[] = $historique;

        return $this;
    }

    /**
     * Remove historique
     *
     * @param \EcommerceBundle\Entity\Historique $historique
     */
    public function removeHistorique(\EcommerceBundle\Entity\Historique $historique)
    {
        $this->historiques->removeElement($historique);
    }

    /**
     * Get historiques
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHistoriques()
    {
        return $this->historiques;
    }

    /**
     * Add afourni
     *
     * @param \EcommerceBundle\Entity\Afourni $afourni
     *
     * @return Utilisateurs
     */
    public function addAfourni(\EcommerceBundle\Entity\Afourni $afourni)
    {
        $this->afourni[] = $afourni;

        return $this;
    }

    /**
     * Remove afourni
     *
     * @param \EcommerceBundle\Entity\Afourni $afourni
     */
    public function removeAfourni(\EcommerceBundle\Entity\Afourni $afourni)
    {
        $this->afourni->removeElement($afourni);
    }

    /**
     * Get afourni
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAfourni()
    {
        return $this->afourni;
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
     * Add produit
     *
     * @param \EcommerceBundle\Entity\Produit $produit
     *
     * @return Utilisateurs
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
     * Add livreur
     *
     * @param \EcommerceBundle\Entity\Livreur $livreur
     *
     * @return Utilisateurs
     */
    public function addLivreur(\EcommerceBundle\Entity\Livreur $livreur)
    {
        $this->livreurs[] = $livreur;

        return $this;
    }

    /**
     * Remove livreur
     *
     * @param \EcommerceBundle\Entity\Livreur $livreur
     */
    public function removeLivreur(\EcommerceBundle\Entity\Livreur $livreur)
    {
        $this->livreurs->removeElement($livreur);
    }

    /**
     * Get livreurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLivreurs()
    {
        return $this->livreurs;
    }

    /**
     * Add commentaire
     *
     * @param \EcommerceBundle\Entity\Commentaire $commentaire
     *
     * @return Utilisateurs
     */
    public function addCommentaire(\EcommerceBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires[] = $commentaire;

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \EcommerceBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\EcommerceBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires->removeElement($commentaire);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Add category
     *
     * @param \EcommerceBundle\Entity\Categorie $category
     *
     * @return Utilisateurs
     */
    public function addCategory(\EcommerceBundle\Entity\Categorie $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \EcommerceBundle\Entity\Categorie $category
     */
    public function removeCategory(\EcommerceBundle\Entity\Categorie $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add unitemesure
     *
     * @param \EcommerceBundle\Entity\Unitemesure $unitemesure
     *
     * @return Utilisateurs
     */
    public function addUnitemesure(\EcommerceBundle\Entity\Unitemesure $unitemesure)
    {
        $this->unitemesures[] = $unitemesure;

        return $this;
    }

    /**
     * Remove unitemesure
     *
     * @param \EcommerceBundle\Entity\Unitemesure $unitemesure
     */
    public function removeUnitemesure(\EcommerceBundle\Entity\Unitemesure $unitemesure)
    {
        $this->unitemesures->removeElement($unitemesure);
    }

    /**
     * Get unitemesures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUnitemesures()
    {
        return $this->unitemesures;
    }

    
    // /**
    //  * Add qte
    //  *
    //  * @param \EcommerceBundle\Entity\Qte $qte
    //  *
    //  * @return Utilisateurs
    //  */
    // public function addQte(\EcommerceBundle\Entity\Qte $qte)
    // {
    //     $this->qtes[] = $qte;

    //     return $this;
    // }

    // *
    //  * Remove qte
    //  *
    //  * @param \EcommerceBundle\Entity\Qte $qte
     
    // public function removeQte(\EcommerceBundle\Entity\Qte $qte)
    // {
    //     $this->qtes->removeElement($qte);
    // }

    // /**
    //  * Get qtes
    //  *
    //  * @return \Doctrine\Common\Collections\Collection
    //  */
    // public function getQtes()
    // {
    //     return $this->qtes;
    // }

    /**
     * Add fournisseur
     *
     * @param \EcommerceBundle\Entity\Fournisseur $fournisseur
     *
     * @return Utilisateurs
     */
    public function addFournisseur(\EcommerceBundle\Entity\Fournisseur $fournisseur)
    {
        $this->fournisseurs[] = $fournisseur;

        return $this;
    }

    /**
     * Remove fournisseur
     *
     * @param \EcommerceBundle\Entity\Fournisseur $fournisseur
     */
    public function removeFournisseur(\EcommerceBundle\Entity\Fournisseur $fournisseur)
    {
        $this->fournisseurs->removeElement($fournisseur);
    }

    /**
     * Get fournisseurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFournisseurs()
    {
        return $this->fournisseurs;
    }

    /**
     * Add fournisseurproduit
     *
     * @param \EcommerceBundle\Entity\Fournisseurproduit $fournisseurproduit
     *
     * @return Utilisateurs
     */
    public function addFournisseurproduit(\EcommerceBundle\Entity\Fournisseurproduit $fournisseurproduit)
    {
        $this->fournisseurproduits[] = $fournisseurproduit;

        return $this;
    }

    /**
     * Remove fournisseurproduit
     *
     * @param \EcommerceBundle\Entity\Fournisseurproduit $fournisseurproduit
     */
    public function removeFournisseurproduit(\EcommerceBundle\Entity\Fournisseurproduit $fournisseurproduit)
    {
        $this->fournisseurproduits->removeElement($fournisseurproduit);
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
