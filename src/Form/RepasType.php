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
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RepasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('nom', TextType::class, [
                'label'    => 'Nom du Repas',
                'required' => false,
                'attr'     => [
                    'placeholder'  => 'Ex: Déjeuner du lundi',
                    'class'        => 'settings-input',
                    'autocomplete' => 'off',
                ],
            ])

            ->add('type', ChoiceType::class, [
                'label'       => 'Type de Repas',
                'required'    => false,
                'choices'     => [
                    'Petit-déjeuner' => 'petit-dejeuner',
                    'Déjeuner'       => 'dejeuner',
                    'Dîner'          => 'diner',
                    'Collation'      => 'collation',
                ],
                'placeholder' => '-- Choisir --',
                'attr'        => ['class' => 'settings-select'],
            ])

            /*
             * widget = 'single_text'  => génère un <input type="text"> que Flatpickr
             * va transformer en joli calendrier. On n'utilise PAS le widget natif du
             * navigateur grâce à l'attribut  data-flatpickr.
             */
            ->add('date', DateType::class, [
                'label'    => 'Date',
                'required' => false,
                'widget'   => 'single_text',   // ✅ input texte, contrôlé par Flatpickr
                'html5'    => false,            // ✅ évite type="date" natif du navigateur
                'format'   => 'dd/MM/yyyy',     // ✅ format affiché (Flatpickr s'en occupe)
                'attr'     => [
                    'class'         => 'settings-input flatpickr-input',
                    'placeholder'   => 'JJ/MM/AAAA',
                    'autocomplete'  => 'off',
                    'data-flatpickr'=> 'true',  // hook JS
                ],
            ])

            ->add('heure', TimeType::class, [
                'label'    => 'Heure',
                'required' => false,
                'widget'   => 'single_text',
                'attr'     => ['class' => 'settings-input'],
            ])

            ->add('calories', IntegerType::class, [
                'label'    => 'Calories (kcal)',
                'required' => false,
                'attr'     => [
                    'placeholder' => '0',
                    'class'       => 'settings-input',
                ],
            ])

            ->add('description', TextareaType::class, [
                'label'    => 'Description (optionnelle)',
                'required' => false,
                'attr'     => [
                    'placeholder' => 'Ajoutez une description...',
                    'rows'        => 4,
                    'class'       => 'settings-textarea',
                ],
            ])

            ->add('aliments', EntityType::class, [
                'class'        => Aliment::class,
                'choice_label' => 'nom',
                'multiple'     => true,
                'expanded'     => false,
                'required'     => false,
                'label'        => 'Aliments',
                'attr'         => [
                    'class' => 'settings-select',
                    'size'  => '8',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Repas::class,
            'attr'       => ['novalidate' => 'novalidate'], // ✅ désactive HTML5 partout
        ]);
    }
}
