<?php

namespace App\Form;

use App\Entity\Chapitre;
use App\Entity\Cours;
use App\Repository\CoursRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChapitreType extends AbstractType
{
    private CoursRepository $coursRepository;

    public function __construct(CoursRepository $coursRepository)
    {
        $this->coursRepository = $coursRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $currentUser = $options['user'] ?? null;

        $builder
            // idChapitre is internal, we hide it in frontoffice
            // ->add('idChapitre', IntegerType::class, [...])

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
                'query_builder' => function () use ($currentUser) {
                    $qb = $this->coursRepository->createQueryBuilder('c');

                    if ($currentUser !== null) {
                        $qb->andWhere('c.user = :user')
                           ->setParameter('user', $currentUser);
                    }

                    return $qb->orderBy('c.tittre', 'ASC');
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chapitre::class,
            'user'       => null, // custom option to pass the current user
        ]);
    }
}
