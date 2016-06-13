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
        $usersData = [
            [
                'email'    => 'admin@admin.com',
                'password' => 'admin',
                'username' => 'admin',
                'roles'    => ['ROLE_SUPER_ADMIN'],
            ],
            [
                'email'    => 'user@user.com',
                'password' => 'user',
                'username' => 'user',
                'roles'    => ['ROLE_USER'],
            ],
        ];

        foreach ($usersData as $userData) {
            $this->createUser(
                $userData['email'],
                $userData['password'],
                $userData['username'],
                $userData['roles']
            );
        }
    }

    /**
     * @param string $email
     * @param string $password
     * @param string $userName
     * @param array $roles
     * @return User
     */
    private function createUser(
        $email,
        $password,
        $userName,
        array $roles
    ) {
        $userManager = $this->getUserManager();

        /** @var User $user */
        $user = $userManager->createUser();
        $user->setUsername($userName)
            ->setEmail($email)
            ->setPlainPassword($password)
            ->setEnabled(true)
            ->setRoles($roles);

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
