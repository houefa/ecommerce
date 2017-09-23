<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategorieController extends Controller
{
    

    public function menuAction(){
		$em = $this->getDoctrine()->getManager();
		$categories = $em->getRepository('EcommerceBundle:Categorie')->findByParent(null);
		
		return $this->render('EcommerceBundle:Default:categorie/modulesUsed/menu.html.twig', array('categories' => $categories));
	} 

	

	public function categorieAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
		$categorie = $em->getRepository('EcommerceBundle:Categorie')->find($id);
		if(!$categorie) throw $this->createNotFoundException("La catégorie n'existe pas.");
		

        return $this->render('EcommerceBundle:Default:categorie/layouts/categories.html.twig', array('page' => $page));
    }

    
    public function sousmenuAction($id){
		$em = $this->getDoctrine()->getManager();
		$cats = $em->getRepository('EcommerceBundle:Categorie')->findByParent($id);
		
		return $this->render('EcommerceBundle:Default:categorie/modulesUsed/sousmenu.html.twig', array('cats' => $cats));
	} 

}
