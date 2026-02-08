<?php

namespace App\Form;

use App\Entity\Objectif;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ObjectifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ✅ removed: ->add('user', EntityType::class, ...)

            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'rows' => 4,
                    'placeholder' => 'Décrivez votre objectif...',
                    'class' => 'ctrl'
                ]
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'choices' => [
                    'Perte de poids' => 'Perte de poids',
                    'Gain musculaire' => 'Gain musculaire',
                    'Endurance' => 'Endurance',
                    'Flexibilité' => 'Flexibilité',
                    'Autre' => 'Autre'
                ],
                'placeholder' => 'Choisir un type',
                'attr' => ['class' => 'ctrl']
            ])
            ->add('valeurCible', IntegerType::class, [
                'label' => 'Valeur Cible',
                'attr' => [
                    'placeholder' => 'Ex: 10000',
                    'class' => 'ctrl'
                ]
            ])
            ->add('dateDebut', DateType::class, [
                'label' => 'Date de début',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['class' => 'ctrl']
            ])
            ->add('dateFin', DateType::class, [
                'label' => 'Date de fin',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['class' => 'ctrl']
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'En cours' => 'En cours',
                    'Atteint' => 'Atteint',
                    'Abandonné' => 'Abandonné'
                ],
                'placeholder' => 'Choisir un statut',
                'attr' => ['class' => 'ctrl']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Objectif::class,
        ]);
    }
}
