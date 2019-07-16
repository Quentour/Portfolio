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
            ->add('Projects', EntityType::Class, ['class' => Projects::Class, 'choice_label' => 'name',])
            ->add('Skills', EntityType::Class, ['class' => Skill::Class, 'choice_label' => 'name',])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
