<?php

namespace Application\UserBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\CoreBundle\Validator\ErrorElement;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

use Application\UserBundle\Entity\EntityManager\UserManager;
use Application\UserBundle\Entity\User;

/**
 * Class UserAdmin
 */
class UserAdmin extends Admin
{
    const ROLE_ADMIN = 'ROLE_ADMIN';
    /**
     * @var UserManager $userManager
     */
    protected $userManager;

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('username', null, ['label' => 'username', 'required' => true])
            ->add('email', EmailType::class, ['label' => 'email', 'required' => true])
            ->add('plainPassword', PasswordType::class, [
                    'label'        => 'password',
                    'always_empty' => true,
                    'required'     => ($this->getSubject() && $this->getSubject()
                            ->getId()) ? false : true,
                ])
            ->add('enabled', null, ['label' => 'enabled', 'required' => false])
            ->add('locked', null, ['label' => 'locked', 'required' => false]);
    }

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('email', null, ['label' => 'email'])
            ->add('username', null, ['label' => 'username'])
            ->add('enabled', null, ['label' => 'enabled'])
            ->add('locked', null, ['label' => 'locked']);
    }

    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id', null, ['label' => 'id'])
            ->add('email', null, ['label' => 'email'])
            ->add('username', null, ['label' => 'username'])
            ->add('enabled', null, ['label' => 'enabled'])
            ->add('locked', null, ['label' => 'locked']);
    }

    /**
     * {@inheritdoc}
     */
    public function preUpdate($user)
    {
        $this->setMainFields($user);
    }

    /**
     * {@inheritdoc}
     */
    public function prePersist($user)
    {
        $this->setMainFields($user);
    }

    /**
     * {@inheritdoc}
     */
    public function validate(ErrorElement $errorElement, $object)
    {
        $userByEmail = $this->userManager->findUserByEmail($object->getEmail());
        if ($userByEmail && $userByEmail->getId() != $object->getId()) {
            $errorElement->with('email')
                ->addViolation('Email already exist')
                ->end();
        }
        $userByUsername = $this->userManager->findUserByUsername($object->getUsername());
        if ($userByUsername && $userByUsername->getId() != $object->getId()) {
            $errorElement->with('username')
                ->addViolation('Username already exist')
                ->end();
        }
    }

    /**
     * @param UserManager $userManager
     */
    public function setUserManager(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    /**
     * @param User $user
     */
    private function setMainFields(User $user)
    {
        if ($user->getPlainPassword()) {
            $this->userManager->updatePassword($user);
        }
        if (!$user->hasRole(static::ROLE_ADMIN)) {
            $user->addRole(static::ROLE_ADMIN);
        }
    }
}
