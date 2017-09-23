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
class getFacture
{	
	function __construct(ContainerInterface $container)
	{
		$this->container = $container;
	}

	// public function facture($facture)
	// {
	// 	$facture = $this->em->getRepository('EcommerceBundle:Commande')->findOneBy(array('valider' => 1), array('id' => 'DESC'));
	// 	// var_dump($facture->getId());
	// 	// var_dump($facture->getFacture());

	// 	if(!$facture)
	// 		return 1;
	// 	else
	// 		return $facture->getFacture() +1;

	// }
}



?>