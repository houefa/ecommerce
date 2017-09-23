<?php
namespace PagesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use PagesBundle\Entity\Pages;

class LoadPagesData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {

        $page = new Pages();
        $page->setTitre('CGV');
        $page->setContenu('
            <div class="row">
                <h4>Item brand and categorie</h4>
                <h5>AB0025 Item Model</h5>
                <p>Juste un simple texte</p>
            </div>
            <div class="row">
                <h4>Item brand and categorie</h4>
                <h5>AB0025 Item Model</h5>
                <p>Juste un simple texte</p>
            </div> 
            <div class="row">
                <h4>Item brand and categorie</h4>
                <h5>AB0025 Item Model</h5>
                <p>Juste un simple texte</p>
            </div>
            ');
        $manager->persist($page);

        $page1 = new Pages();
        $page1->setTitre('Mentions Légales');
        $page1->setContenu('<div class="row">
                <h4>Item brand and categorie 2</h4>
                <h5>AB0025 Item Model</h5>
                <p>Juste un simple texte</p>
            </div>
            <div class="row">
                <h4>Item brand and categorie</h4>
                <h5>AB0025 Item Model</h5>
                <p>Juste un simple texte</p>
            </div> 
            <div class="row">
                <h4>Item brand and categorie</h4>
                <h5>AB0025 Item Model</h5>
                <p>Juste un simple texte</p>
            </div>');
        $manager->persist($page1);

        $page2 = new Pages();
        $page2->setTitre('Page test');
        $page2->setContenu('tata');
        
        $manager->persist($page2);

        $manager->flush();

        $this->addReference('page', $page);
        $this->addReference('page1', $page1);
        $this->addReference('page2', $page2);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 21;
    }
}