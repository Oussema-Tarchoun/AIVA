<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isEdit = $options['is_edit'];
        
        $builder
            ->add('name', TextType::class, [
                'label' => 'Full Name',
                'attr' => [
                    'placeholder' => 'Enter full name',
                    'novalidate' => 'novalidate',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Name cannot be empty',
                    ]),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Name must be at least 2 characters',
                        'maxMessage' => 'Name cannot be longer than 50 characters',
                    ]),
                    new Regex([
                        'pattern' => "/^[a-zA-Z\s\-']+$/",
                        'message' => 'Name can only contain letters, spaces, hyphens (-), and apostrophes (\')',
                    ]),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email Address',
                'attr' => [
                    'placeholder' => 'Enter email address',
                    'novalidate' => 'novalidate',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Email cannot be empty',
                    ]),
                    new Email([
                        'message' => 'Must be a valid email format (must have @ and domain)',
                    ]),
                ],
            ])
            ->add('roles', ChoiceType::class, [
                'label' => 'User Role',
                'choices' => [
                    'User' => 'ROLE_USER',
                    'Admin' => 'ROLE_ADMIN',
                ],
                'multiple' => true,
                'expanded' => true,
                'required' => true,
                'attr' => [
                    'novalidate' => 'novalidate',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Must select either User or Admin',
                    ]),
                ],
            ])
        ;

        // Password field - required for new users, optional for editing
        if ($isEdit) {
            $builder->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'required' => false,
                'mapped' => false,
                'first_options' => [
                    'label' => 'New Password (leave blank to keep current)',
                    'attr' => [
                        'placeholder' => 'Enter new password',
                        'autocomplete' => 'new-password',
                        'novalidate' => 'novalidate',
                    ],
                ],
                'second_options' => [
                    'label' => 'Confirm New Password',
                    'attr' => [
                        'placeholder' => 'Confirm new password',
                        'autocomplete' => 'new-password',
                        'novalidate' => 'novalidate',
                    ],
                ],
                'invalid_message' => 'The password fields must match',
                'constraints' => [
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Password must be at least 6 characters long',
                    ]),
                    new Regex([
                        'pattern' => '/[a-zA-Z]/',
                        'message' => 'Password must contain at least 1 letter (A-Z or a-z)',
                    ]),
                    new Regex([
                        'pattern' => '/[0-9]/',
                        'message' => 'Password must contain at least 1 number (0-9)',
                    ]),
                ],
            ]);
        } else {
            $builder->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'required' => true,
                'mapped' => false,
                'first_options' => [
                    'label' => 'Password',
                    'attr' => [
                        'placeholder' => 'Enter password',
                        'autocomplete' => 'new-password',
                        'novalidate' => 'novalidate',
                    ],
                ],
                'second_options' => [
                    'label' => 'Confirm Password',
                    'attr' => [
                        'placeholder' => 'Confirm password',
                        'autocomplete' => 'new-password',
                        'novalidate' => 'novalidate',
                    ],
                ],
                'invalid_message' => 'The password fields must match',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Password cannot be empty',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Password must be at least 6 characters long',
                    ]),
                    new Regex([
                        'pattern' => '/[a-zA-Z]/',
                        'message' => 'Password must contain at least 1 letter (A-Z or a-z)',
                    ]),
                    new Regex([
                        'pattern' => '/[0-9]/',
                        'message' => 'Password must contain at least 1 number (0-9)',
                    ]),
                ],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'is_edit' => false,
            'attr' => ['novalidate' => 'novalidate'], // Disable HTML5 validation
        ]);
    }
}