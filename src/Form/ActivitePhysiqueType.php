<?php

namespace App\Form;

use App\Entity\ActivitePhysique;
use App\Entity\Objectif;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivitePhysiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', TextType::class, [
                'label' => "Type d'activité",
                'attr' => ['class' => 'form-control']
            ])
            ->add('duree', IntegerType::class, [
                'label' => 'Durée (minutes)',
                'attr' => ['class' => 'form-control']
            ])
            ->add('caloriesBrulees', IntegerType::class, [
                'label' => 'Calories brûlées',
                'attr' => ['class' => 'form-control']
            ])
            ->add('date', DateType::class, [
                'label' => 'Date',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('intensite', ChoiceType::class, [
                'label' => 'Intensité',
                'choices' => [
                    'Faible' => 'faible',
                    'Moyenne' => 'moyenne',
                    'Élevée' => 'elevee',
                ],
                'placeholder' => 'Choisir une intensité',
                'attr' => ['class' => 'form-control']
            ])
            ->add('objectif', EntityType::class, [
                'class' => Objectif::class,
                'choice_label' => 'description',
                'label' => 'Objectif associé',
                'placeholder' => 'Sélectionner un objectif',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ActivitePhysique::class,
        ]);
    }
}
