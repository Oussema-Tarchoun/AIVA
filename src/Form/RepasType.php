<?php

namespace App\Form;

use App\Entity\Repas;
use App\Entity\Aliment;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RepasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du Repas',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Ex: Déjeuner du lundi'
                ]
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type de Repas',
                'choices' => [
                    'Petit-déjeuner' => 'petit-dejeuner',
                    'Déjeuner' => 'dejeuner',
                    'Dîner' => 'diner',
                    'Collation' => 'collation',
                ],
                'required' => true,
            ])
            ->add('heure', TimeType::class, [
                'widget' => 'single_text',
                'label' => 'Heure',
                'required' => true,
            ])
            ->add('calories', IntegerType::class, [
                'label' => 'Calories (kcal)',
                'required' => true,
                'attr' => [
                    'placeholder' => '0',
                    'min' => 0
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Ajoutez une description...',
                    'rows' => 4
                ]
            ])
            ->add('aliments', EntityType::class, [
                'class' => Aliment::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => false,
                'required' => false,
                'label' => 'Aliments',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Repas::class,
        ]);
    }
}