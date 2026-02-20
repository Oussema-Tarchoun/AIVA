<?php

namespace App\Form;

use App\Entity\Cours;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Cours1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Primary key is handled by Doctrine, no field for idCours on frontoffice
            ->add('tittre', TextType::class, [
                'label'    => 'Titre',
                'required' => true,
            ])
            ->add('description', TextType::class, [
                'label'    => 'Description',
                'required' => true,
            ])
            ->add('niveau', TextType::class, [
                'label'    => 'Niveau',
                'required' => false,
            ])
            ->add('dureeEstimee', IntegerType::class, [
                'label'    => 'Durée estimée (heures)',
                'required' => false,
            ])
            ->add('categorie', TextType::class, [
                'label'    => 'Catégorie',
                'required' => false,
            ])
            ->add('dateCreation', DateType::class, [
                'label'    => 'Date de création',
                'widget'   => 'single_text',
                'required' => false,
            ])
            ->add('status', TextType::class, [
                'label'    => 'Statut',
                'required' => false,
            ]);
        // No 'user' field here: it is set in the controller with $cours->setUser($this->getUser());
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}
