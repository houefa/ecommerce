<?php

namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EcommerceBundle\Entity\Media; 



class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setAlt('fruits');
        $media1->setPath('https://www.google.com/search?q=fruits&source=lnms&tbm=isch&sa=X&ved=0ahUKEwi28Pyrps_UAhVEWxQKHeZJDkUQ_AUICigB#');
        $manager->persist($media1);

        $media = new Media();
        $media->setAlt('legumes');
        $media->setPath('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH__3XoyV77-NE5IfUkY2ySDZtj9XP-qVG5tAei-AiBBFcllkd');
  		$manager->persist($media);

  		$media2 = new Media();
        $media2->setAlt('poivre');
        $media2->setPath('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH1Zn4qsU4IxjjKNrDW9u24AS1-lMUP_FSpaKLUMdjU0cDHS_9Dw');
  		$manager->persist($media2);


  		$media3 = new Media();
        $media3->setAlt('pomme de terre');
        $media3->setPath('data:image/jpeg;base64,/9j/');
  		$manager->persist($media3);
        
        $manager->flush();

        $this->addReference('media', $media);
    	$this->addReference('media1', $media1);
    	$this->addReference('media2', $media2);
    	$this->addReference('media3', $media3);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}