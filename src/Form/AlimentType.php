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
                'label'    => "Nom de l'Aliment",
                'required' => false,          // ✅ pas de required HTML
                'attr'     => [
                    'placeholder'  => 'Ex: Tomate',
                    'class'        => 'settings-input',
                    'autocomplete' => 'off',
                ],
            ])
            ->add('quantite', NumberType::class, [
                'label'    => 'Quantité (g)',
                'required' => false,          // ✅ pas de required HTML
                'scale'    => 2,
                'attr'     => [
                    'placeholder' => '100',
                    'step'        => '0.01',
                    'class'       => 'settings-input',
                ],
            ])
            // macro est géré manuellement via macro_proteine/glucide/lipide dans le template
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class'        => Aliment::class,
            'allow_extra_fields'=> true,                   // ignore macro_* du POST
            'attr'              => ['novalidate' => 'novalidate'], // ✅ désactive HTML5
        ]);
    }
}
