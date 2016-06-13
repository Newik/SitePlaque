<?php
/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 29/05/2016
 * Time: 23:47
 */

namespace SitePlaqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text', array('label'=>'Nommer le devis'))
            ->add('plaques', 'collection', array('type'=> new PlaqueType,
                  'prototype' => true,
                  'allow_add' => true))
            ->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'SitePlaqueBundle\Entity\Devis'));
    }
}