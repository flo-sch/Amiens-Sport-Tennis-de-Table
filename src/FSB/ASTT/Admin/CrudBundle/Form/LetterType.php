<?php

namespace FSB\ASTT\Admin\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class LetterType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            //->add('createdAt')
            //->add('updatedAt')
            //->add('deleted')
            ->add('title', 'text', array('label' => 'Titre', 'required' => true, 'max_length' => 255))
            ->add('date', 'date', array('label' => 'Date', 'required' => true, 'widget' => 'single_text', 'format' => 'MM/dd/yyyy', 'attr' => array('class' => 'datepicker')))
            ->add('file', 'file', array('label' => 'Fichier', 'required' => false))
        ;
    }

    public function getName()
    {
        return 'fsb_astt_admin_crudbundle_lettertype';
    }
}
