<?php
namespace UtilisateursBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use UtilisateursBundle\Entity\Utilisateurs;

class LoadUtilisateursData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
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

        $user = new Utilisateurs();
        $user->setEmail('admin@gmail.com');
        $user->setUsername('admin');
        $user->setEnabled(1);
        $user->setSalt(md5(uniqid()));
        // the 'security.password_encoder' service requires Symfony 2.6 or higher
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user, 'admin');
        $user->setPassword($password);
        $manager->persist($user);

        $user1 = new Utilisateurs();
        $user1->setEmail('toto@gmail.com');
        $user1->setUsername('toto');
        $user1->setEnabled(1);
        $user1->setSalt(md5(uniqid()));
        // the 'security.password_encoder' service requires Symfony 2.6 or higher
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user1, 'toto');
        $user1->setPassword($password);
        $manager->persist($user1);

        $user2 = new Utilisateurs();
        $user2->setEmail('tata@gmail.com');
        $user2->setUsername('tata');
        $user2->setEnabled(1);
        $user2->setSalt(md5(uniqid()));
        // the 'security.password_encoder' service requires Symfony 2.6 or higher
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user1, 'tata');
        $user2->setPassword($password);

        $manager->persist($user2);

        $manager->flush();

        $this->addReference('user', $user);
        $this->addReference('user1', $user1);
        $this->addReference('user2', $user2);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}