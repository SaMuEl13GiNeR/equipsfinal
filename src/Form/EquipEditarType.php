<?php

namespace App\Form;

use App\Entity\Cicle;
use App\Entity\Curs;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class EquipEditarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('cicle', EntityType::class, array('class' => Cicle::class, 'choice_label' => 'valor'))
            ->add('curs', EntityType::class, array('class' => Curs::class, 'choice_label' => 'valor'))
            ->add('imatge', FileType::class,array('required' => false, 'mapped' => false))
            ->add('nota', NumberType::class)
            ->add('save', SubmitType::class, array('label' => 'Enviar'));
    }
}