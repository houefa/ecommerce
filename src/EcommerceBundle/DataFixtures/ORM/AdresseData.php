<?php

namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EcommerceBundle\Entity\Adresse; 


class AdresseData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $adresse1 = new adresse();
        $adresse1->setQuartier($this->getReference('quartier1'));
        

        $adresse1->setUtilisateur($this->getReference('user1'));
        $manager->persist($adresse1);

        $adresse2 = new adresse();
        $adresse2->setQuartier($this->getReference('quartier'));
        $adresse2->setUtilisateur($this->getReference('user1'));
        $manager->persist($adresse2);

        $adresse = new adresse();
        $adresse->setQuartier($this->getReference('quartier'));
        $adresse->setUtilisateur($this->getReference('user'));
        $manager->persist($adresse);

        $manager->flush();

        $this->addReference('adresse1', $adresse1);
        $this->addReference('adresse', $adresse);  
        $this->addReference('adresse2', $adresse2);  
        
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 9;
    }
}