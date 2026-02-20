<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Depense;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DepenseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description', TextType::class, [
                'label'      => 'Description',
                'required'   => true,
                'attr'       => [
                    'placeholder' => 'Ex: Loyer mars 2026',
                ],
            ])
            ->add('montant', NumberType::class, [
                'label'      => 'Montant (TND)',
                'required'   => true,
                'scale'      => 2,
                'attr'       => [
                    'placeholder' => 'Ex: 450.00',
                    'step'        => '0.01',
                ],
            ])
            ->add('date_depense', DateType::class, [  // ✅ CORRIGÉ ICI
                'label'    => 'Date de dépense',
                'widget'   => 'single_text',
                'required' => true,
            ])
            ->add('statut', ChoiceType::class, [
                'label'       => 'Statut',
                'choices'     => [
                    'Payée'      => 'Payée',
                    'En attente' => 'En attente',
                    'Annulée'    => 'Annulée',
                ],
                'required'    => true,
                'placeholder' => 'Sélectionner un statut',
            ])
            ->add('categorie', EntityType::class, [
                'label'        => 'Catégorie',
                'class'        => Categorie::class,
                'choice_label' => 'nomCategorie',
                'placeholder'  => 'Choisir une catégorie',
                'required'     => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Depense::class,
        ]);
    }
}