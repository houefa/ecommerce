<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use EcommerceBundle\Form\AdresseType;
use EcommerceBundle\Entity\Adresse;
use EcommerceBundle\Entity\Commande;
use EcommerceBundle\Entity\Produit;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Security\Core\Util\SecureRandom;

class CommandeController extends Controller
{
    public function facture(){
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        //$generator = $this->container->get('security.secure_random');
        $generator = new SecureRandom();
        $adresse =   $session->get('adresse');
        $panier = $session->get('panier');
        $commande = array();
        $totalHT = 0;
        $totalTTC = 0;

        $livraison = $em->getRepository('EcommerceBundle:Adresse')->find($adresse['livraison']);
        $produits = $em->getRepository('EcommerceBundle:Produit')->findArray(array_keys($session->get('panier')));


        $commande['livraison'] = array('nom' => $livraison->getNom(),
                                    'prenom' => $livraison->getPrenom(),
                                    'telephone' => $livraison->getTelephone(),
                                    'quartier' => $livraison->getQuartier(),
                                    'getQuartier' => $livraison->getCp(),
                                    'complement' => $livraison->getComplement(),
                                    'cp' => $livraison->getCp()
                            );


        foreach($produits as $produit){
            $id = $produit->getId();
            $prixHT = ($produit->getPrix()*$panier[$id]);
            $prixTTC = $prixHT*(1.18);
            $totalHT += $prixHT;
            $totalTTC += $prixTTC;

            //$totalTTC += $prixHT*(1.18);
            $commande['produit'][$id] = array('reference' => $produit->getLibelle(),
                                                            'quantite' => $panier[$id],
                                                            'prixHT' => round($produit->getPrix(),2),
                                                            'prixTTC' => round($prixTTC,2),
                                                            );
        }
        
        //var_dump($commande);
        //die();
        $commande['totalHT'] = round($totalHT,2);
        $commande['totalTTC'] = round($totalTTC,2);

        // var_dump($commande['livraison']);
        // die();
        $commande['token'] = bin2hex($generator->nextBytes(20));
        return $commande;

    }


    public function prepareCommandeAction(){
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
 
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $this->container->get('security.token_storage')->getToken()->getUser(); 

        if(!$session->has('commande')){
            $commande = new Commande();
        }else{
            $commande = $em->getRepository('EcommerceBundle:Commande')->find($session->get('commande'));

        }

        $commande->setValider(0);
        $commande->setDatec(new \DateTime());
        $commande->setReference(0);
        $commande->setCreepar($utilisateur);
        $commande->setProduits($this->facture());
        
        if(!$session->has('commande')){
            $em->persist($commande);
            $session->set('commande',$commande);
        }

        $em->flush();

        return new Response($commande->getId());
    }
    // Cette méthode remplace l'api banque

    public function validationCommandeAction($id){
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('EcommerceBundle:Commande')->find($id);

        if(!$commande || $commande->getValider() == 1)
            throw $this->createNotFoundException('La commande n\'existe pas.');

        $commande->setValider(1);

        //var_dump($commande->getValider());
        //var_dump($this->container->get('setNewReference')->reference());
        $commande->setReference($this->container->get('setNewReference')->reference());
        $em->flush();
        //var_dump($commande->getReference());
        //var_dump($commande->getValider());
        
        //
        $session = $this->getRequest()->getSession();
        $session->remove('adresse');
        $session->remove('panier');
        $session->remove('commande');
        // echo $commande->getCreepar()->getEmailCanonical();

        // die();

        //Ici la mail de validation 
        $message = \Swift_Message::newInstance()
                ->setSubject("Validation de votre commande")
                ->setFrom(array('ahouefa3@gmail.com'))
                ->setTo($commande->getCreepar()->getEmailCanonical())
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody($this->renderView('EcommerceBundle:Default:swiftLayout/validationCommande.html.twig'));
            $this->get('mailer')->send($message);
        
        $this->get('session')->getFlashBag()->add('success', 'Votre commande est validée avec succès');
        
        return $this->Redirect($this->generateUrl('factures'));
    }
}
