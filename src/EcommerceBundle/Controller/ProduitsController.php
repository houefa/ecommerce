<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EcommerceBundle\Form\rechercheType;
use EcommerceBundle\Entity\Categorie;

class ProduitsController extends Controller
{
	/**
    *
    */

    public function produitsAction(Categorie $categorie = null)
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
        if($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;

        $em = $this->getDoctrine()->getManager();

        if($categorie != null){
            $findProduits = $em->getRepository('EcommerceBundle:Produit')->findBy(array('categorie' => $categorie, 'disponible' => true));
        }else{
            $findProduits = $em->getRepository('EcommerceBundle:Produit')->findBy(array('disponible' => true));
        }

        $produits  = $this->get('knp_paginator')->paginate(
            $findProduits, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            2/*limit per page*/
        );
        

        return $this->render('EcommerceBundle:Default:produits/layouts/produits.html.twig', array('produits' => $produits, 'panier' => $panier, 'categorie' => $categorie));
    }

    public function presentationAction($id)
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
        if($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;

        $em         = $this->getDoctrine()->getManager();
        $produit    = $em->getRepository('EcommerceBundle:Produit')->find($id);
        if(!$produit) throw $this->createNotFoundException("La page n'existe pas.");
        return $this->render('EcommerceBundle:Default:produits/layouts/presentation.html.twig', array('produit' => $produit, 'panier' => $panier));
    }

    public function rechercheAction(){
        $form = $this->createForm(new rechercheType());
        return $this->render('EcommerceBundle:Default:recherche/modulesUsed/recherche.html.twig', array('form' => $form->createView()));
    }

    public function rechercheTraitementAction(){
        $form = $this->createForm(new rechercheType());
        if($this->get('request')->getMethod()=="POST"){
            $form->bind($this->get('request'));
            $data = $form['recherche']->getData();
            $em = $this->getDoctrine()->getManager();
            $produits = $em->getRepository('EcommerceBundle:Produit')->recherche($data);
        }else{
            throw $this->createNotFoundException("La page n'existe pas");
        }
                
        return $this->render('EcommerceBundle:Default:produits/layouts/produits.html.twig', array('produits' => $produits));
    }


    // public function sousmenuAction(Categorie $categorie = null)
    // {
    //     $request = $this->container->get('request_stack')->getCurrentRequest();
    //     $session = $request->getSession();
    //     if($session->has('panier'))
    //         $panier = $session->get('panier');
    //     else
    //         $panier = false;


    //     $em = $this->getDoctrine()->getManager();

    //     if($categorie != null){
    //         $findProduits = $em->getRepository('EcommerceBundle:Produit')->findBy(array('categorie' => $categorie, 'disponible' => true));
    //     }else{
    //         $findProduits = $em->getRepository('EcommerceBundle:Produit')->findBy(array('disponible' => true));
    //     }

    //     $produits  = $this->get('knp_paginator')->paginate(
    //         $findProduits, /* query NOT result */
    //         $request->query->getInt('page', 1)/*page number*/,
    //         2/*limit per page*/
    //     );
        
    //     //$em = $this->getDoctrine()->getManager();
    //     $categories = $em->getRepository('EcommerceBundle:Categorie')->findByParent(null);
        
    //     $categories = $em->getRepository('EcommerceBundle:Categorie')->findByParent(null);

    //     return $this->render('EcommerceBundle:Default:produits/layouts/sousmenu.html.twig', array('produits' => $produits, 'panier' => $panier, 'categories' => $categories));
    //     //return $this->render('EcommerceBundle:Default:produits/layouts/sousmenus.html.twig', array('produits' => $produits, 'panier' => $panier));
    // }
    
}
