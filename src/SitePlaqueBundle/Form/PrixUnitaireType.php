<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 11/06/2016
 * Time: 19:20
 */

namespace SitePlaqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PrixUnitaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prix','number',array('label'=>'prix'))
            ->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'SitePlaqueBundle\Entity\PrixUnitaire'));
    }
}