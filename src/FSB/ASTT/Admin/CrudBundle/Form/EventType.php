<?php

namespace FSB\ASTT\Admin\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class EventType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            //->add('createdAt')
            //->add('updatedAt')
            //->add('deleted')
            ->add('title', 'text', array('label' => 'Titre', 'required' => true, 'max_length' => 255))
            ->add('description', 'textarea', array('label' => 'Description', 'required' => true))
            ->add('place', 'text', array('label' => 'Lieu', 'required' => true))
            ->add('date', 'date', array('label' => 'Date', 'required' => true, 'widget' => 'single_text', 'format' => 'MM/dd/yyyy', 'attr' => array('class' => 'datepicker')))
            ->add('isTournament', 'checkbox', array('label' => 'Cet événement est-il un trophée national ?', 'required' => false))
        ;
    }

    public function getName()
    {
        return 'fsb_astt_admin_crudbundle_eventtype';
    }
}
