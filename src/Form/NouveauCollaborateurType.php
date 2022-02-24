<?php

namespace App\Form;

use App\Entity\Collaborateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class NouveauCollaborateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('MatriculeCollaborateur')
            ->add('Nom')
            ->add('Prenom')
            ->add('Salaire')
            ->add('SalaireBrut')
            ->add('IndemniteStage')
            ->add('Photo', FileType::class, [
                'required' => false,
                'constraints' => [
                    new File([
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png'
                        ],
                        'mimeTypesMessage' => 'Please upload a valid Image(jpeg,jpg,png) document',
                    ])
                ]
            ])
            ->add('Status')
            ->add('Role', ChoiceType::class, [
                'choices' => [
                    'RH' => 'RH',
                    'Gestion de Project' => 'Gestion de Project',
                    'Commercial' => 'Commercial'
                ]
            ])
            ->add('Password', PasswordType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Collaborateur::class,
        ]);
    }
}
