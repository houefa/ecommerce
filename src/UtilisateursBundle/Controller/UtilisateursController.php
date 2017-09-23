<?php

namespace UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateursController extends Controller
{
    public function facturesAction()
    {
    	$em = $this->getDoctrine()->getManager();
		$factures = $em->getRepository('EcommerceBundle:Commande')->findByFacture($this->getUser());
		//var_dump($factures);
		//die();
        return $this->render('UtilisateursBundle:Default:layout/factures.html.twig', array('factures'=> $factures));
    }


    public function facturePDFAction($id)
    {
    	$em = $this->getDoctrine()->getManager();

    	$em = $this->getDoctrine()->getManager();
		$facture = $em->getRepository('EcommerceBundle:Commande')->findOneBy(array('creepar' => $this->getUser(),
																			'valider' => 1,
																			'id'  => $id));
		if(!$facture){
			$this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue. Veuillez recommencer ou contacter l\'administrateur');
			return $this->redirect($this->generateUrl('factures')); 
		}
    }
}
