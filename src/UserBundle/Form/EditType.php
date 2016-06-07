<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 06/06/2016
 * Time: 21:46
 */

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class EditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('raisonSociale')
            ->add('adresse')
            ->add('codePostale')
            ->add('ville')
            ->add('siret')
            ->add('tel');

    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }

    public function getBlockPrefix()
    {
        return 'site_user_edition';
    }
}