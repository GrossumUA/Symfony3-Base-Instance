<?php

namespace Application\UserBundle\DataFixtures\ORM;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Monolog\Registry;

use Application\UserBundle\Entity\User;

class LoadUser extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    /**
     * @var Registry
     */
    private $doctrine;

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * Sets the Container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     *
     * @api
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
        $this->doctrine = $container->get('doctrine');
    }

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $this->createAdminUser();
    }

    /**
     * @return User
     */
    private function createAdminUser()
    {
        $adminEmail = 'admin@admin.com';
        $adminPassword = 'admin';
        $adminUserName = 'admin';

        $userManager = $this->container->get('application_user.user.manager');

        /** @var User $user */
        $user = $userManager->createUser();
        $user->setUsername($adminUserName)
            ->setEmail($adminEmail)
            ->setPlainPassword($adminPassword)
            ->setEnabled(true)
            ->setRoles(['ROLE_SUPER_ADMIN']);

        $userManager->updateUser($user);

        return $user;
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}
