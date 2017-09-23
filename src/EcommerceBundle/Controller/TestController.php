<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EcommerceBundle\Entity\Produits;
use EcommerceBundle\Form\testType;

class TestController extends Controller
{

    public function testFormulaireAction(){
        $form = $this->createForm(new testType());

        if($this->get('request')->getMethod()=='POST'){
            $form->bind($this->get('request'));
            //var_dump($form->getData());

            echo $form['email']->getData();
            die('ici je traite mon formulaire');
        }

        return $this->render('EcommerceBundle:Default:default.html.twig', array('form' => $form->createView()));
    }

    // public function ajoutAction()
    // {

    //     $em = $this->getDoctrine()->getManager();

    //     // $produit = new Produits();
    //     // $produit->setNom("choux vert");
    //     // $produit->setDescription("Juste un test de légumes");
    //     // $produit->setPrix('150');
    //     // $produit->setDisponible("1");
    //     // $produit->setCategorie("Légumes");
    //     // $produit->setImage("Mon image");

    //     // $produit->setTva("0.18");

    //     // $em->persist($produit);
    //     // $em->flush();
    //     //die("Nous sommes ici");
    //     $produits = $em->getRepository('EcommerceBundle:Produits')->FindAll();

    //     return $this->render('EcommerceBundle:Default:default.html.twig', array('produits' => $produits ));
    // }

    
}
