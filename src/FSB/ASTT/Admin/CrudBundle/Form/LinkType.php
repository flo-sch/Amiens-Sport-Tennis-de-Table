<?php

namespace FSB\ASTT\Admin\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class LinkType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            //->add('createdAt')
            //->add('updatedAt')
            //->add('deleted')
            ->add('title', 'text', array('label' => 'Titre', 'required' => true, 'max_length' => 100))
            ->add('category', 'choice', array('label' => 'Catégorie', 'required' => true, 'choices' => array(1 => 'Somme', 2 => 'Oise', 3 => 'Aisne'), 'empty_value' => 'Choisissez une catégorie'))
            ->add('url', 'url', array('label' => 'Lien', 'required' => true))
        ;
    }

    public function getName()
    {
        return 'fsb_astt_admin_crudbundle_linktype';
    }
}
