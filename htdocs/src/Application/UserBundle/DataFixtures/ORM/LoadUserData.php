<?php

namespace Application\UserBundle\DataFixtures\Orm;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Application\UserBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin')
            ->setPlainPassword('pass')
            ->setEmail('admin@admin.com')
            ->setEnabled(true)
            ->setRoles(['ROLE_SUPER_ADMIN']);

        $manager->persist($userAdmin);
        $manager->flush();
    }
}
