<?php

namespace Application\UserBundle\Admin;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Application\UserBundle\Entity\EntityManager\UserManager;
use Application\UserBundle\Entity\User;
use Symfony\Component\VarDumper\VarDumper;

class UserAdmin extends AbstractAdmin
{
    const ROLE_ADMIN = 'ROLE_ADMIN';

    /**
     * @var UserManager $userManager
     */
    protected $userManager;

    /**
     * {@inheritdoc}
     */
    public function getFormBuilder()
    {
        $this->formOptions = array('validation_groups' => array('edit'));

        if ($this->getSubject()->getId() === null) {
            $this->formOptions = array('validation_groups' => array('create'));
        }

        return parent::getFormBuilder();
    }

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', TextType::class, ['label' => 'Username'])
            ->add('email', EmailType::class, ['label' => 'Email'])
            ->add(
                'plainPassword',
                PasswordType::class,
                [
                    'label'        => 'Password',
                    'always_empty' => true,
                    'required'     => $this->getSubject()->getId() ? false : true
                ]
            )
            ->add('enabled', CheckboxType::class, ['label' => 'Enabled', 'required' => false])
            ->add('locked', CheckboxType::class, ['label' => 'Locked', 'required' => false]);
    }

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('email')
            ->add('username')
            ->add('enabled')
            ->add('locked');
    }

    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('email')
            ->add('username')
            ->add('enabled')
            ->add('locked')
            ->add('_action', 'actions', [
                'actions' => [
                    'edit'   => [],
                    'delete' => [],
                ],
            ]);
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
