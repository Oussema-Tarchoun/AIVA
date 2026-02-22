<?php

namespace App\Form;

use App\Entity\Aliment;
use App\Entity\Repas;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class FrontRepasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $inputAttr = ['class' => 'front-input'];

        $builder
            ->add('type', ChoiceType::class, [
                'label' => 'Meal Type',
                'choices' => [
                    'Breakfast' => 'petit-dejeuner',
                    'Lunch' => 'dejeuner',
                    'Dinner' => 'diner',
                    'Snack' => 'collation',
                ],
                'required' => true,
                'attr' => $inputAttr,
            ])
            ->add('nom', TextType::class, [
                'label' => 'Meal Name',
                'required' => true,
                'attr' => $inputAttr + ['placeholder' => 'Ex: Lunch Monday'],
            ])

            // ✅ date
            ->add('date', DateType::class, [
                'label' => 'Date',
                'widget' => 'single_text',
                'required' => true,
                'attr' => $inputAttr,
            ])

            ->add('heure', TimeType::class, [
                'widget' => 'single_text',
                'label' => 'Time',
                'required' => true,
                'attr' => $inputAttr,
            ])

            ->add('calories', IntegerType::class, [
                'label' => 'Calories',
                'required' => true,
                'attr' => $inputAttr + ['placeholder' => 'Enter calories', 'min' => 0],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Notes',
                'required' => false,
                'attr' => ['class' => 'front-input', 'rows' => 4, 'placeholder' => 'Notes...'],
            ])
            ->add('aliments', EntityType::class, [
                'class' => Aliment::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => false,
                'required' => false,
                'label' => 'Foods',
                'attr' => ['class' => 'front-input', 'size' => 8],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Repas::class,

            // ✅ IMPORTANT: this removes the "option user does not exist" error
            // We'll use it later to filter aliments, after you add user_id to Aliment.
            'user' => null,
        ]);
    }
}
