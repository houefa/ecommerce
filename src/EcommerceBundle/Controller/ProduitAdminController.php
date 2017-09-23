<?php

namespace EcommerceBundle\Controller;

use EcommerceBundle\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Produit controller.
 *
 */
class ProduitAdminController extends Controller
{
    /**
     * Lists all produit entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $produits = $em->getRepository('EcommerceBundle:Produit')->findAll();

        return $this->render('EcommerceBundle:administration:produit/layouts/index.html.twig', array(
            'produits' => $produits,
        ));
    }

    /**
     * Creates a new produit entity.
     *
     */
    public function newAction(Request $request)
    {
        $utilisateur = $this->container->get('security.token_storage')->getToken()->getUser(); 
        
        $produit = new Produit();
        $form = $this->createForm('EcommerceBundle\Form\ProduitType', $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $produit->setCreepar($utilisateur);
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();

            return $this->redirectToRoute('produitAdmin_show', array('id' => $produit->getId()));
        }

        return $this->render('EcommerceBundle:administration:produit/layouts/new.html.twig', array(
            'produit' => $produit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a produit entity.
     *
     */
    public function showAction(Produit $produit)
    {
        $deleteForm = $this->createDeleteForm($produit);

        return $this->render('EcommerceBundle:administration:produit/layouts/show.html.twig', array(
            'produit' => $produit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing produit entity.
     *
     */
    public function editAction(Request $request, Produit $produit)
    {
        
        $deleteForm = $this->createDeleteForm($produit);
        $editForm = $this->createForm('EcommerceBundle\Form\ProduitType', $produit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('produitAdmin_edit', array('id' => $produit->getId()));
        }

        return $this->render('EcommerceBundle:administration:produit/layouts/edit.html.twig', array(
            'produit' => $produit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a produit entity.
     *
     */
    public function deleteAction(Request $request, Produit $produit)
    {
        $form = $this->createDeleteForm($produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($produit);
            $em->flush();
        }

        return $this->redirectToRoute('produitAdmin_index');
    }

    /**
     * Creates a form to delete a produit entity.
     *
     * @param Produit $produit The produit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Produit $produit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('produitAdmin_delete', array('id' => $produit->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
