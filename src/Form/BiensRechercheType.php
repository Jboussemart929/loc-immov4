<?php

namespace App\Form;

use App\Entity\BiensRecherche;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class BiensRechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('maxPrix', IntegerType::class , [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Budget maximale'
                ]
            ])
            ->add('minSurface', IntegerType::class , [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Surface minimale'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BiensRecherche::class,
            'method' => 'get',
            'csrf_protection' => false
        ]);
    }
}
