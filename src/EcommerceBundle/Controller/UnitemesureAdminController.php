<?php

namespace EcommerceBundle\Controller;

use EcommerceBundle\Entity\Unitemesure;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Unitemesure controller.
 *
 */
class UnitemesureAdminController extends Controller
{
    /**
     * Lists all unitemesure entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $unitemesures = $em->getRepository('EcommerceBundle:Unitemesure')->findAll();

        return $this->render('EcommerceBundle:administration:unitemesure/layouts/index.html.twig', array(
            'unitemesures' => $unitemesures,
        ));
    }

    /**
     * Creates a new unitemesure entity.
     *
     */
    public function newAction(Request $request)
    {
        $unitemesure = new Unitemesure();
        $form = $this->createForm('EcommerceBundle\Form\UnitemesureType', $unitemesure);
        $form->handleRequest($request);
        $utilisateur = $this->container->get('security.token_storage')->getToken()->getUser(); 
        
        if ($form->isSubmitted() && $form->isValid()) {
            $unitemesure->setCreepar($utilisateur);
            $em = $this->getDoctrine()->getManager();
            $em->persist($unitemesure);
            $em->flush();

            return $this->redirectToRoute('adminUnitemesure_show', array('id' => $unitemesure->getId()));
        }

        return $this->render('EcommerceBundle:administration:unitemesure/layouts/new.html.twig', array(
            'unitemesure' => $unitemesure,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a unitemesure entity.
     *
     */
    public function showAction(Unitemesure $unitemesure)
    {
        $deleteForm = $this->createDeleteForm($unitemesure);

        return $this->render('EcommerceBundle:administration:unitemesure/layouts/show.html.twig', array(
            'unitemesure' => $unitemesure,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing unitemesure entity.
     *
     */
    public function editAction(Request $request, Unitemesure $unitemesure)
    {
        $deleteForm = $this->createDeleteForm($unitemesure);
        $editForm = $this->createForm('EcommerceBundle\Form\UnitemesureType', $unitemesure);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('adminUnitemesure_edit', array('id' => $unitemesure->getId()));
        }

        return $this->render('EcommerceBundle:administration:unitemesure/layouts/edit.html.twig', array(
            'unitemesure' => $unitemesure,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a unitemesure entity.
     *
     */
    public function deleteAction(Request $request, Unitemesure $unitemesure)
    {
        $form = $this->createDeleteForm($unitemesure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($unitemesure);
            $em->flush();
        }

        return $this->redirectToRoute('adminUnitemesure_index');
    }

    /**
     * Creates a form to delete a unitemesure entity.
     *
     * @param Unitemesure $unitemesure The unitemesure entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Unitemesure $unitemesure)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminUnitemesure_delete', array('id' => $unitemesure->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
