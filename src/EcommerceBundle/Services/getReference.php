<?php
namespace EcommerceBundle\Services;

use Symfony\Component\Security\Core\SecurityContextInterface;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
// use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;


/**
* 
*/
class getReference
{	
	function __construct($securityContext,$entityManager)
	{
		$this->securityContext = $securityContext;
		$this->em = $entityManager; 
	}

	public function reference()
	{
		$reference = $this->em->getRepository('EcommerceBundle:Commande')->findOneBy(array('valider' => 1), array('id' => 'DESC'));
		// var_dump($reference->getId());
		// var_dump($reference->getReference());

		if(!$reference)
			return 1;
		else
			return $reference->getReference() +1;

	}
}



?>