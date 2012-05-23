<?php

namespace FSB\ASTT\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class InscriptionTropheeType extends AbstractType
{
    public static $series = array(
        'A' => array('min' => 450, 'max' => 1099),
        'B' => array('min' => 450, 'max' => 1299),
        'C' => array('min' => 450, 'max' => 5000),
        'D' => array('min' => 450, 'max' => 5000),
        'Double' => array('min' => 450, 'max' => 5000),
        'F' => array('min' => 450, 'max' => 5000),
        'G' => array('min' => 450, 'max' => 1499),
        'H' => array('min' => 1500, 'max' => 2150),
        'J' => array('min' => 450, 'max' => 1699),
        'K' => array('min' => 450, 'max' => 5000),
    );
    
    public static $series_label_1 = array(
        'A' => 'A [500 -> 1099]',
        'B' => 'B [500 - 1299]',
        'C' => 'Handisport',
        'D' => 'Jeunes [P, B, M, C]',
        'Double' => 'Doubles [libre]'
    );
    public static $series_label_2 = array(
        'F' => 'F [Open Dames]',
        'G' => 'G [500 - 1499]',
        'H' => 'H [1500 - 2150]',
        'J' => 'J [500 - 1699]',
        'K' => 'Open Messieurs'
    );
    
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('civility', 'choice', array('label' => 'Civilité', 'required' => true, 'expanded' => false, 'choices' => array('M' => 'Homme', 'W' => 'Femme')))
            ->add('lastname', 'text', array('label' => 'Nom *', 'required' => true, 'max_length' => 100))
            ->add('firstname', 'text', array('label' => 'Prénom *', 'required' => true, 'max_length' => 100))
            ->add('email', 'email', array('label' => 'Adresse Mail *', 'required' => true))
            ->add('points', 'text', array('label' => 'Points [licence en cours] *', 'required' => true, 'max_length' => 4))
            ->add('licence', 'text', array('label' => 'N° de licence *', 'required' => true, 'max_length' => 10))
            ->add('series_1', 'choice', array('label' => 'Séries [samedi] (Max : 2)', 'required' => false, 'expanded' => false, 'multiple' => true, 'attr' => array('size' => 5), 'empty_value' => 'Séries du samedi', 'choices' => self::$series_label_1))
            ->add('series_2', 'choice', array('label' => 'Séries [dimanche] (Max : 2)', 'required' => false, 'expanded' => false, 'multiple' => true, 'attr' => array('size' => 5), 'empty_value' => 'Séries du dimanche', 'choices' => self::$series_label_2))
        ;
    }

    public function getName()
    {
        return 'fsb_astt_frontbundle_inscriptiontropheetype';
    }
}