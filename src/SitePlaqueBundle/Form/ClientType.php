<?php

namespace SitePlaqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 17/04/2016
 * Time: 16:51
 */
class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $Builder
        ->add('nomClient', 'text', array('label' => 'Nom'))
        ->add('prenomClient', 'text', array('label' => 'Prénom'))
        ->add('raisonSociale', 'text', array('label' => 'Raison sociale'))
        ->add('siret', 'integer', array('label' => 'Siret'))
        ->add('email', 'text', array('label' => 'E-mail'))
        ->add('tel', 'text', array('label' => 'Téléphone'))
        ->add('login', 'text', array('label' => 'Login'))
        ->add('mdp', 'text', array('label' => 'Mot de passe'));


    }


}