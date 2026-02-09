<?php

namespace App\Form;

use App\Entity\Aliment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlimentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom de l\'Aliment',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Ex: Tomate'
                ]
            ])
            ->add('quantite', NumberType::class, [
                'label' => 'Quantité (g)',
                'required' => true,
                'attr' => [
                    'placeholder' => '100',
                    'step' => '0.01'
                ]
            ])
            // Note: macro sera géré via JavaScript dans les templates
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Aliment::class,
            'allow_extra_fields' => true, // ✅ THIS FIXES IT

        ]);
    }
}