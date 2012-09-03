<?php

namespace FSB\ASTT\Admin\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class InterviewType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            //->add('createdAt')
            //->add('updatedAt')
            //->add('deleted')
            ->add('description', 'textarea', array('label' => 'Description', 'required' => true))
            ->add('date', 'date', array('label' => 'Date', 'required' => true, 'widget' => 'single_text', 'format' => 'MM/dd/yyyy', 'attr' => array('class' => 'datepicker')))
            ->add('player', 'entity', array('label' => 'Joueur interviewé', 'required' => true, 'empty_value' => 'Choisissez le joueur interviewé', 'class' => 'FSBASTTCoreBundle:Player',
                'query_builder' => function(\FSB\ASTT\CoreBundle\Repository\PlayerRepository $er) {
                    return $er->findActivePlayers(true);
                }
            ))
        ;
    }

    public function getName()
    {
        return 'fsb_astt_admin_crudbundle_interviewtype';
    }
}
