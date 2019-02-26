<?php

namespace App\Form;

use App\Entity\PreferenceUtilisateurOrdinateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PreferenceUtilisateurOrdinateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('activerModeHorsLigne')
            ->add('resolution')
            ->add('tempsAttenteAvantDiffusion')
            ->add('dureeDiffusion')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PreferenceUtilisateurOrdinateur::class,
        ]);
    }
}