<?php

namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EcommerceBundle\Entity\Pays; 


class PaysData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $pays1 = new Pays();
        $pays1->setNom("Côte d'Iviore");
        $pays1->setActif('1');
        $manager->persist($pays1);

        $pays = new Pays();
        $pays->setNom('Bénin');
        $pays->setActif('0');
        $manager->persist($pays);
        
        $manager->flush();

        $this->addReference('payss1', $pays1);
    	$this->addReference('payss', $pays);
    	
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 4;
    }
}