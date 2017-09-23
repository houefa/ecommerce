<?php

namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EcommerceBundle\Entity\Departement; 


class DepartementData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $departement1 = new Departement();
        $departement1->setNom("A");
        $departement1->setActif('1');
        $departement1->setPays2($this->getReference('payss1'));
          //$categorie1->setImage($this->getReference('media1'));


        $manager->persist($departement1);

        $departement = new Departement();
        $departement->setNom('B');
        $departement->setActif('0');
        $departement->setPays2($this->getReference('payss1'));
        $manager->persist($departement);

        $manager->flush();

        $this->addReference('departement1', $departement1);
    	$this->addReference('departement', $departement);
    	
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 5;
    }
}