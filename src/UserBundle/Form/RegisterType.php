<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 21/05/2016
 * Time: 18:09
 */

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class RegisterType extends AbstractType
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
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'site_user_registration';
    }
}