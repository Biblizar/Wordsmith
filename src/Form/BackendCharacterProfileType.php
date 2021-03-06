<?php

namespace App\Form;

use App\Entity\CharacterProfile;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class BackendCharacterProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('characterName', TextType::class, [
                'required' => false,
                'label' => 'Nom du personnage'
            ])
            ->add('avatar')
            ->add('age')
            ->add('race')
            ->add('class', TextType::class, [
                'label' => 'Classe',
                'required'   => false,
                'empty_data' => ' ',
            ])
            ->add('socialCast', TextType::class, [
                'label' => 'Caste sociale',
                'required'   => false,
                'empty_data' => ' ',
            ])
            ->add('localisation')
            ->add('miscellaneous', TextareaType::class, [
                'label' => 'Faits divers',
                'required'   => false,
                'empty_data' => ' ',
            ])
            ->add('link1', TextType::class, [
                'label' => 'Fiche de présentation',
                'required'   => false,
                'empty_data' => ' ',
            ])
            ->add('link2', TextType::class, [
                'label' => 'Relations',
                'required'   => false,
                'empty_data' => ' ',
            ])
            
            ->add('rank')
            ->add('groupForum')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CharacterProfile::class,
        ]);
    }
}
