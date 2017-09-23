<?php

namespace EcommerceBundle\Controller;

use EcommerceBundle\Entity\Commande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Commande controller.
 *
 */
class CommandeAdminController extends Controller
{
    /**
     * Lists all Commande entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $commandes = $em->getRepository('EcommerceBundle:Commande')->findAll();

        return $this->render('EcommerceBundle:administration:commande/layouts/index.html.twig', array('commandes' => $commandes));
        
    }

    
}
