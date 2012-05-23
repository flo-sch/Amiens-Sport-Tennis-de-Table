<?php

namespace FSB\ASTT\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            //->add('createdAt')
            //->add('updatedAt')
            //->add('deleted')
            ->add('author', 'text', array('label' => 'Auteur', 'required' => true, 'max_length' => 100))
            ->add('club', 'text', array('label' => 'Club', 'required' => false))
            ->add('description', 'textarea', array('label' => 'Message', 'required' => true))
        ;
    }

    public function getName()
    {
        return 'fsb_astt_frontbundle_messagetype';
    }
}
