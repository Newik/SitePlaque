<?php

namespace SitePlaqueBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 25/05/2016
 * Time: 18:17
 */
class PlaqueType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('utilisateur', 'hidden', array('data' => ''))
            ->add('dateCreation', 'datetime', array('widget' => 'single_text'))
            ->add('nom','text',array('label'=>'nom'))
            ->add('texte','text',array('label'=>' votre texte'))
            ->add('longueur','number',array('label'=>'longeur'))
            ->add('largeur','number',array('label'=>'largeur'))
            ->add('couleurFond','text',array('label'=>'couleur de fond'))
            ->add('longueurMarquage','number',array('label'=>'longeur du texte'))
            ->add('largeurMarquage','number',array('label'=>'largeur du texte'))
            ->add('imageProduit','text',array('label'=>'lien image'))
            ->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'SitePlaqueBundle\Entity\Plaque'));
    }

    public function getBlockPrefix()
    {
        return 'ajouter_votre_plaque';
    }

}