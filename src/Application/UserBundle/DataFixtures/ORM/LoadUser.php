<?php

namespace Application\UserBundle\DataFixtures\ORM;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Application\UserBundle\Entity\EntityManager\UserManager;
use Application\UserBundle\Entity\User;

class LoadUser extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    /** @var UserManager */
    protected $userManager;

    /** @var ContainerInterface */
    private $container;

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @return UserManager
     */
    protected function getUserManager()
    {
        if (!$this->userManager) {
            $this->userManager = $this->container->get('application_user.user.manager');
        }

        return $this->userManager;
    }

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $this->createAdminUser($manager);
    }

    /**
     * @param ObjectManager $manager
     * @return User
     */
    private function createAdminUser(ObjectManager $manager)
    {
        $adminEmail = 'admin@admin.com';
        $adminPassword = 'admin';
        $adminUserName = 'admin';

        $userManager = $this->getUserManager();

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
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 1;
    }
}
