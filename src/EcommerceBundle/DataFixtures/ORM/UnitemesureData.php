<?php

namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EcommerceBundle\Entity\Unitemesure; 


class UnitemesureData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $unitemesure1 = new Unitemesure();
        $unitemesure1->setLibelle("Litre");
        $unitemesure1->setCreepar($this->getReference('user1'));
        $manager->persist($unitemesure1);

        $unitemesure = new Unitemesure();
        $unitemesure->setLibelle('Kilogramme');
        $unitemesure->setCreepar($this->getReference('user1'));
        $manager->persist($unitemesure);

        $unitemesures2 = new Unitemesure();
        $unitemesures2->setLibelle('Gramme');
        $unitemesures2->setCreepar($this->getReference('user1'));
        $manager->persist($unitemesures2);


        $unitemesure3 = new Unitemesure();
        $unitemesure3->setLibelle("Litres");
        $unitemesure3->setCreepar($this->getReference('user1'));
        $manager->persist($unitemesure3);
        
        $manager->flush();

        $this->addReference('unitemesure1', $unitemesure1);
    	$this->addReference('unitemesure', $unitemesure);
        $this->addReference('unitemesure2', $unitemesures2);
        $this->addReference('unitemesure3', $unitemesure3);
    	
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 3;
    }
}