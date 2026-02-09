<?php

namespace App\Form;

use App\Entity\Chapitre;
use App\Entity\Cours;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChapitreAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Visible ONLY in backoffice
            ->add('idChapitre', IntegerType::class, [
                'label'    => 'ID Chapitre',
                'required' => true,
            ])
            ->add('titre', TextType::class, [
                'label' => 'Titre',
            ])
            ->add('contenu', TextareaType::class, [
                'label' => 'Contenu',
            ])
            ->add('ordre', IntegerType::class, [
                'label' => 'Ordre',
            ])
            ->add('exercise', TextareaType::class, [
                'label'    => 'Exercice',
                'required' => false,
            ])
            ->add('id_cours', EntityType::class, [
                'class'        => Cours::class,
                'choice_label' => 'tittre',
                'label'        => 'Cours',
                'placeholder'  => 'Choisir un cours',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chapitre::class,
        ]);
    }
}
