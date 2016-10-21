<?php

namespace Application\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label'              => false,
                'translation_domain' => 'FOSUserBundle',
                'attr'               => [
                    'class'       => 'form-control',
                    'placeholder' => 'form.username'
                ]
            ])
            ->add('email', EmailType::class, [
                'label'              => false,
                'translation_domain' => 'FOSUserBundle',
                'attr'               => [
                    'class'       => 'form-control',
                    'placeholder' => 'form.email'
                ]
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type'            => 'password',
                'options'         => [
                    'translation_domain' => 'FOSUserBundle',
                    'attr'               => [
                        'class' => 'form-control'
                    ]
                ],
                'first_options'   => [
                    'label' => false,
                    'attr'  => [
                        'class'       => 'form-control',
                        'placeholder' => 'form.password'
                    ]
                ],
                'second_options'  => [
                    'label' => false,
                    'attr'  => [
                        'class'       => 'form-control',
                        'placeholder' => 'form.password_confirmation'
                    ]
                ],
                'invalid_message' => 'fos_user.password.mismatch',
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Application\UserBundle\Entity\User',
            'intention'  => 'registration'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'application_user_registration';
    }
}
