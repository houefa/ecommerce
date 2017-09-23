<?php

namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EcommerceBundle\Entity\Ville; 


class VilleData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $ville1 = new Ville();
        $ville1->setNom('Abidjan');
        $ville1->setActif('1');
        $ville1->setDepartement2($this->getReference('departement1'));
        $manager->persist($ville1);

        $ville = new Ville();
        $ville->setNom('Cotonou');
        $ville->setActif('0');
        $ville->setDepartement2($this->getReference('departement1'));
        $manager->persist($ville);
        
        $manager->flush();

        $this->addReference('ville1', $ville1);
    	$this->addReference('ville', $ville);
        
    	
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 6;
    }
}