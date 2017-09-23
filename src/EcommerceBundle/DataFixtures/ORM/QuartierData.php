<?php

namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EcommerceBundle\Entity\Quartier; 


class QuartierData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $quartier1 = new Quartier();
        $quartier1->setNom('Mahou');
        $quartier1->setActif('1');
        $quartier1->setCommune($this->getReference('commune1'));
        $manager->persist($quartier1);

        $quartier = new Quartier();
        $quartier->setNom('Cotonou');
        $quartier->setActif('0');
        $quartier->setCommune($this->getReference('commune'));
        $manager->persist($quartier);
        
        $manager->flush();

        $this->addReference('quartier1', $quartier1);
    	$this->addReference('quartier', $quartier);
    	
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 8;
    }
}