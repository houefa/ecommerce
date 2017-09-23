<?php

namespace EcommerceBundle\Form; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class testType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $option)
	{
		$builder
		->add('email','email', array('required' => false ))
		->add('nom')
		->add('prenom')
		->add('sexe','choice',array('choices' => array('0' => 'Hommes',
														 '1' => 'Femmes'), 'expanded' => true ))
		->add('contenu','textarea')
		->add('pays','country')
		->add('utilisateurs','entity', array('class' => 'UtilisateursBundle\Entity\Utilisateurs' ))
		->add('date','date')
		->add('Envoyer','submit');

	}

	public function getName()
	{
		return 'ecommercebundle_test';
	}
}