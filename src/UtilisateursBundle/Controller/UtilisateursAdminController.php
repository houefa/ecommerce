<?php

namespace UtilisateursBundle\Controller;

use UtilisateursBundle\Entity\Utilisateurs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Utilisateurs controller.
 *
 */
class UtilisateursAdminController extends Controller
{
    /**
     * Lists all Utilisateurs entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateurs = $em->getRepository('UtilisateursBundle:Utilisateurs')->findAll();
        return $this->render('UtilisateursBundle:administration:utilisateur/layouts/index.html.twig', array('utilisateurs' => $utilisateurs));
        
    }

    public function utilisateurAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('UtilisateursBundle:Utilisateurs')->find($id);

        $request = $this->container->get('request_stack')->getCurrentRequest();
        //$postData = $request->request->get('test');

        //$route = $request->get('_route');
        $route = $request->attributes->get('_route');

        if($route == 'utilisateurAdminAdresses')
            return $this->render('UtilisateursBundle:administration:utilisateur/layouts/adresse.html.twig', array('utilisateur' => $utilisateur));
        else if($route == 'utilisateurAdminFactures')
            return $this->render('UtilisateursBundle:administration:utilisateur/layouts/facture.html.twig', array('utilisateur' => $utilisateur));
        else
            throw $this->createNotFoundException("La vue n'existe pas.");
                            
        
    }

    
}
