<?php

namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EcommerceBundle\Entity\Produit; 


class ProduitData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $produit1 = new Produit();
        $produit1->setLibelle("Poivre");
        $produit1->setImage($this->getReference('media2'));
        $produit1->setDescription('Le Poivre et une épice');
        $produit1->setQte('10');
        $produit1->setPrix('1000');
        $produit1->setUnitemesure($this->getReference('unitemesure1'));
        $produit1->setCategorie($this->getReference('categorie1'));
        //setUnitemesure
        $produit1->setCreepar($this->getReference('user1'));
        $manager->persist($produit1);

        $produit = new Produit();
        $produit->setLibelle('Pomme de Terre');
        $produit->setImage($this->getReference('media3'));
        $produit->setDescription('tubercule très délicieux');
        $produit->setCategorie($this->getReference('categorie'));
        $produit->setQte('100');
        $produit->setPrix('500');
        $produit->setUnitemesure($this->getReference('unitemesure'));
        $produit->setCreepar($this->getReference('user'));
        $manager->persist($produit);


        $produit2 = new Produit();
        $produit2->setLibelle('Pomme de Terre local');
        $produit2->setImage($this->getReference('media'));
        $produit2->setDescription('Le meilleur');
        $produit2->setCategorie($this->getReference('categorie'));
        $produit2->setQte('5');
        $produit2->setPrix('250');
        $produit2->setUnitemesure($this->getReference('unitemesure2'));
        $produit2->setCreepar($this->getReference('user'));
        $manager->persist($produit2);
        
        $manager->flush();

        $this->addReference('produit1', $produit1);
        $this->addReference('produit', $produit);
        $this->addReference('produit2', $produit2);
     
    	
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 11;
    }
}