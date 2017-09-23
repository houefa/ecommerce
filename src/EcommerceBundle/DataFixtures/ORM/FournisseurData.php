<?php

namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EcommerceBundle\Entity\Fournisseur; 


class FournisseurData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $fournisseur1 = new fournisseur();
        $fournisseur1->setNom('ADAMA');
        $fournisseur1->setPrenom('Sanogo');
        $fournisseur1->setTel1('12356789');
        $fournisseur1->setCreepar($this->getReference('user1'));
        $manager->persist($fournisseur1);

        $fournisseur = new fournisseur();
        $fournisseur->setNom('NDIAYE');
        $fournisseur->setPrenom('Fatima');
        $fournisseur->setTel1('987456321');
        $fournisseur->setCreepar($this->getReference('user1'));
        $manager->persist($fournisseur);


        $manager->flush();

        $this->addReference('fournisseur1', $fournisseur1);
        $this->addReference('fournisseur', $fournisseur);  
        
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 10;
    }
}