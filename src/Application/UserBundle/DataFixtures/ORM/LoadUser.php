<?php

namespace Application\UserBundle\DataFixtures\ORM;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use FOS\UserBundle\Model\UserInterface;

use Application\UserBundle\Entity\EntityManager\UserManager;

class LoadUser implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private static $usersData = [
        [
            'email'    => 'admin@admin.com',
            'password' => 'admin',
            'username' => 'admin',
            'roles'    => [UserInterface::ROLE_SUPER_ADMIN],
        ],
        [
            'email'    => 'user@user.com',
            'password' => 'user',
            'username' => 'user',
            'roles'    => [UserInterface::ROLE_DEFAULT],
        ],
    ];

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
        $userManager = $this->getUserManager();

        foreach (self::$usersData as $userData) {
            $user = $userManager
                ->createUser()
                ->setUsername($userData['username'])
                ->setEmail($userData['email'])
                ->setPlainPassword($userData['password'])
                ->setEnabled(true)
                ->setRoles($userData['roles']);

            $userManager->updateUser($user);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 1;
    }
}
