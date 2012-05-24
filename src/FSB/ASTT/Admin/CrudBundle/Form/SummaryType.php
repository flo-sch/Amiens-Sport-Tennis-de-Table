<?php

namespace FSB\ASTT\Admin\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SummaryType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            //->add('createdAt')
            //->add('updatedAt')
            //->add('deleted')
            ->add('type', 'choice', array('label' => 'Type', 'required' => true, 'choices' => array('I' => 'Individuelle', 'T' => 'Par équipe')))
            ->add('tournament', 'choice', array('label' => 'Compétition', 'required' => true, 'choices' => array('Cr' => 'Critérium Fédéral', 'Ch' => 'Championnats Individuels', 'Fi' => 'Finales par classement', 'To' => 'Tops', 'BJ' => 'Challenge Bernard Jeu', 'CS' => 'Coupe de la Somme', 'In' => 'Interclubs')))
            ->add('date', 'date', array('label' => 'Date', 'required' => true, 'widget' => 'single_text', 'format' => 'MM/dd/yyyy', 'attr' => array('class' => 'datepicker')))
            ->add('description', 'textarea', array('label' => 'Description', 'required' => true))
            ->add('event', 'entity', array('label' => 'Evénement concerné', 'required' => true, 'empty_value' => 'Choisissez l\'événement concerné', 'class' => 'FSBASTTCoreBundle:Event',
                'query_builder' => function(\FSB\ASTT\CoreBundle\Repository\EventRepository $er) {
                    return $er->findAllNDisplayedSorteredByDate(true);
                }
            ))
        ;
    }

    public function getName()
    {
        return 'fsb_astt_admin_crudbundle_summarytype';
    }
}
