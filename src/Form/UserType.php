<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Projects;
use App\Entity\Skill;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('description')
            ->add('phone')
            ->add('mail')
            ->add('address')
            ->add('picture')
            ->add('Projects', EntityType::class, [
                'class' => Projects::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true
                ])

            ->add('Skills', EntityType::class, [
                    'class' => Skill::class,
                    'choice_label' => 'name',
                    'multiple' => true,
                    'expanded' => true
                    ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
