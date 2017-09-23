<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use EcommerceBundle\Form\AdresseType;
use EcommerceBundle\Entity\Adresse;

class PanierController extends Controller
{
    public function menuAction(){
        $request = $this->container->get('request_stack')->getCurrentRequest();
        //$postData = $request->request->get('test');

        $session = $request->getSession();
        if(!$session->has('panier')){
            $article = 0;
        }else{
            $article = count($session->get('panier'));
        }
        return $this->render('EcommerceBundle:Default:panier/modulesUsed/panier.html.twig', array('article' => $article));
    }

    public function supprimerAction($id)
    {

        $request = $this->container->get('request_stack')->getCurrentRequest();
        //$postData = $request->request->get('test');

        $session = $request->getSession();
        $panier = $session->get('panier');
        if(array_key_exists($id, $panier)) {
            unset($panier[$id]);
            $session->set('panier', $panier);
            $session->getFlashBag()->add('success','Produit supprimé avec succès.');
        }


        return $this->redirect($this->generateUrl('panier'));
    }

    public function ajouterAction($id)
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
        if(!$session->has('panier')) $session->set('panier', array());
        echo $request->query->get('qte');
        
        if($this->get('request')->getMethod()=="POST"){
            var_dump($this->get('request'));
        }
        // 
        //     $form->handleRequest($this->getRequest());
        //     if($form->isValid()){
        //         $em = $this->getDoctrine()->getManager();
        //         $entity->setUtilisateur($utilisateur);

        //         $em->persist($entity);
        //         $em->flush();
        //         return $this->redirect($this->generateUrl('livraison'));
        //     }
        // }
        //die();
        $panier = $session->get('panier');
        if(array_key_exists($id, $panier)){
            if($request->query->get('qte') != null) $panier[$id] = $request->query->get('qte');
        }else{ 
            if($request->query->get('qte') != null)
                $panier[$id] = $request->query->get('qte');
            else
                $panier[$id] = 1;    
        }
        $session->set('panier', $panier);
        //////////////////////////////////
        $session->getFlashBag()->add('success','Produit ajouté avec succès.');
        return $this->redirect($this->generateUrl('panier'));
    }

    public function panierAction()
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();
        
        if(!$session->has('panier')) $session->set('panier', array());
        $panier = $session->get('panier');
        if($this->get('request')->getMethod()=="POST"){
            var_dump($this->get('request'));
            die();
        }
        //$session->remove('panier');

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produit')->findArray(array_keys($panier));

        return $this->render('EcommerceBundle:Default:panier/layouts/panier.html.twig', array('produits' => $produits, 'panier' => $panier));

        // var_dump($session->get('panier'));
        // die();
        // return $this->render('EcommerceBundle:Default:panier/layouts/panier.html.twig');
    }

    public function livraisonAction()
    {
        $entity = new Adresse();
        $form = $this->createForm(new AdresseType(), $entity);

        $utilisateur = $this->container->get('security.token_storage')->getToken()->getUser(); 
        //$user = $this->get('security.token_storage')->getToken()->getUser();

        if($this->get('request')->getMethod()=="POST"){
            $form->handleRequest($this->getRequest());
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $entity->setUtilisateur($utilisateur);

                $em->persist($entity);
                $em->flush();
                return $this->redirect($this->generateUrl('livraison'));
            }
        }
        // var_dump($utilisateuradresses);
        // die();

        return $this->render('EcommerceBundle:Default:panier/layouts/livraison.html.twig', array('utilisateur' => $utilisateur, 'form' => $form->createView()));
    }

    
    //supprimerAdresse
    public function supprimerAdresseAction($id)
    {
        

        $em = $this->getDoctrine()->getManager();   
        $entity = $em->getRepository('EcommerceBundle:Adresse')->find($id);

        if($this->container->get('security.token_storage')->getToken()->getUser() != $entity->getUtilisateur() || !$entity){
            return $this->redirect($this->generateUrl('livraison'));
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('livraison'));
    }


    public function setLivraisonOnSession(){

        $request = $this->container->get('request_stack')->getCurrentRequest();
        $session = $request->getSession();

        if(!$session->has('adresse')) $session->set('adresse', array());
        $adresse = $session->get('adresse');

        if($this->getRequest()->request->get('livraison') != null){
            $adresse['livraison'] = $this->getRequest()->request->get('livraison');
        }else{
            return $this->redirect($this->generateUrl('validation'));
        }

        $session->set('adresse',$adresse);
        
        
        return $this->redirect($this->generateUrl('validation'));

    }

    public function validationAction()
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();   
        $session = $request->getSession();

        if($request->getMethod() == 'POST')
            $this->setLivraisonOnSession();

        $prepareCommande = $this->forward('EcommerceBundle:Commande:prepareCommande');
        $commande = $em->getRepository('EcommerceBundle:Commande')->find($prepareCommande->getContent());

        
        // $adresse = $session->get('adresse');

        // $panier = $session->get('panier');
        // $pu = $session->get('pu');
        
        // $produits  = $em->getRepository('EcommerceBundle:Produit')->findArray(array_keys($session->get('panier')));
        // $livraison = $em->getRepository('EcommerceBundle:Adresse')->find($adresse["livraison"]);

        // return $this->render('EcommerceBundle:Default:panier/layouts/validation.html.twig', array('produits' => $produits,
        //                                                                                         'livraison' => $livraison, 
        //                                                                                         'panier' => $panier, 
        //                                                                                         'pu' => $pu));
        // var_dump($commande);
        // die();
        return $this->render('EcommerceBundle:Default:panier/layouts/validation.html.twig', array('commande' => $commande));
    }


}
