<?php

namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EcommerceBundle\Entity\Categorie; 


class CategorieData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categorie1 = new Categorie();
        $categorie1->setLibelle('Fruits');
        $categorie1->setImage($this->getReference('media1'));
        $categorie1->setCreepar($this->getReference('user1'));
        $manager->persist($categorie1);

        $categorie = new Categorie();
        $categorie->setLibelle('Légumes');
        $categorie->setImage($this->getReference('media'));
        $categorie->setCreepar($this->getReference('user'));
        $manager->persist($categorie);


        // $categorie2 = new Categorie();
        // $categorie2->setLibelle('Légumes');
        // $categorie2->setImage($this->getReference('media2'));
        // $categorie2->setCreepar($this->getReference('user2'));
        // $manager->persist($categorie2);
        
        $manager->flush();

        $this->addReference('categorie1', $categorie1);
    	$this->addReference('categorie', $categorie);
    	
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 3;
    }
}