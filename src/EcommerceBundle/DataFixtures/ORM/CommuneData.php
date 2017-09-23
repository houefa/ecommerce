<?php

namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EcommerceBundle\Entity\Commune; 


class CommuneData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $commune1 = new Commune();
        $commune1->setNom('Cocody');
        $commune1->setActif('1');
        $commune1->setVille($this->getReference('ville1'));
        $manager->persist($commune1);

        $commune = new Commune();
        $commune->setNom('Cotonou');
        $commune->setActif('0');
        $commune->setVille($this->getReference('ville'));
        $manager->persist($commune);

        
        $manager->flush();

        $this->addReference('commune1', $commune1);
    	$this->addReference('commune', $commune);
    	
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 7;
    }
}