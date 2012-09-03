<?php

namespace FSB\ASTT\Admin\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            //->add('createdAt')
            //->add('updatedAt')
            //->add('deleted')
            ->add('starttime', 'datetime', array('label' => 'Début', 'required' => true))
            ->add('endtime', 'datetime', array('label' => 'Fin', 'required' => true))
            ->add('title', 'text', array('label' => 'Nom', 'required' => true))
            ->add('description', 'textarea', array('label' => 'Description', 'required' => true))
            ->add('place', 'text', array('label' => 'Lieu', 'required' => true))
            ->add('date', 'date', array('label' => 'Date', 'required' => false, 'widget' => 'single_text', 'format' => 'MM/dd/yyyy', 'attr' => array('class' => 'datepicker')))
            ->add('presentation', 'choice', array('label' => 'Gabarit de présentation', 'required' => true, 'choices' => array('1' => 'Texte simple', '2' => 'Texte avec image flottante à gauche', '3' => 'Texte avec image flottante à droite', '4' => 'Texte sous une image centrée')))
            ->add('screen', 'file', array('label' => 'Visuel', 'required' => false))
            ->add('weBestPlayer', 'entity', array('label' => 'Joueur du WE ?', 'required' => false, 'empty_value' => 'Choisissez un joueur', 'class' => 'FSBASTTCoreBundle:Player',
                'query_builder' => function(\FSB\ASTT\CoreBundle\Repository\PlayerRepository $er) {
                    return $er->findActivePlayers(true);
                }
            ))
        ;
    }

    public function getName()
    {
        return 'fsb_astt_admin_crudbundle_newstype';
    }
}
