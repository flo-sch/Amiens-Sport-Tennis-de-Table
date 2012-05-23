<?php

namespace FSB\ASTT\Admin\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PartnerType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            //->add('createdAt')
            //->add('updatedAt')
            //->add('deleted')
            ->add('title', 'text', array('label' => 'Titre', 'required' => true))
            ->add('link', 'url', array('label' => 'Lien', 'required' => true))
            ->add('phone', 'text', array('label' => 'Téléphone', 'required' => true, 'max_length' => 10))
        ;
    }

    public function getName()
    {
        return 'fsb_astt_admin_crudbundle_partnertype';
    }
}
