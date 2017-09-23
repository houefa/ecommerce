<?php

namespace EcommerceBundle\Repository;

/**
 * PrixRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PrixRepository extends \Doctrine\ORM\EntityRepository
{

	//myFindMonant(array('disponible' => '1', 'produit' => $id))
	public function myFindMonant($disponible, $produit){
		$qb = $this->createQUeryBuilder('u')
					->select('u.montant')
					->where('u.produit = :produit')
					->setParameter('produit', $produit)
					->andWhere('u.disponible = :disponible')
					->setParameter('disponible', $disponible)
					->setMaxResults('1')
					->getQuery()
					//getSingleResult
					->getOneOrNullResult();

		return $qb;
	}
}
