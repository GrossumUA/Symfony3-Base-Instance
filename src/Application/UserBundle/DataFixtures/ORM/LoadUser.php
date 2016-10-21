<?php

namespace Application\UserBundle\DataFixtures\ORM;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use FOS\UserBundle\Model\UserInterface;

use Application\UserBundle\Entity\EntityManager\UserManager;
use Application\UserBundle\Entity\User;

class LoadUser implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    const ADMIN_LOGIN = 'admin';
    const ADMIN_EMAIL = 'admin@admin.com';
    const ADMIN_PASSWORD = 'admin';

    /**
     * @var UserManager
     */
    protected $userManager;

    /**
     * @var ContainerInterface
     */
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
        $this->createAdminUser();
    }

    /**
     * @return User
     */
    private function createAdminUser()
    {
        $userManager = $this->getUserManager();

        /** @var User $user */
        $user = $userManager->createUser();
        $user
            ->setUsername(self::ADMIN_LOGIN)
            ->setEmail(self::ADMIN_EMAIL)
            ->setPlainPassword(self::ADMIN_PASSWORD)
            ->setEnabled(true)
            ->setRoles([UserInterface::ROLE_SUPER_ADMIN]);

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
