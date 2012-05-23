<?php

namespace FSB\ASTT\Admin\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ResultType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            //->add('createdAt')
            //->add('updatedAt')
            //->add('deleted')
            ->add('team', 'entity', array('label' => 'Equipe', 'required' => true, 'empty_value' => 'Choisissez l\'équipe', 'class' => 'FSBASTTCoreBundle:Team',
                'query_builder' => function(\FSB\ASTT\CoreBundle\Repository\TeamRepository $qb) {
                    return $qb->findAllDisplayed(true);
                }
            ))
            ->add('week', 'integer', array('label' => 'N° de journée', 'required' => true, 'invalid_message' => 'Le numéro de journée doit être compris entre 1 et 14.', 'invalid_message_parameters' => array('%num%' < 1, '%num%' > 14)))
            ->add('place', 'text', array('label' => 'Lieu', 'required' => true, 'max_length' => 100))
            ->add('date', 'date', array('label' => 'Date', 'required' => true, 'widget' => 'single_text', 'format' => 'MM/dd/yyyy', 'attr' => array('class' => 'datepicker')))
            ->add('teamScore', 'integer', array('label' => 'Score', 'required' => true, 'invalid_message' => 'Le score doit être compris entre 0 et 20', 'invalid_message_parameters' => array('%num%' > 20)))
            ->add('opponent', 'text', array('label' => 'Adversaire', 'required' => true, 'max_length' => 100))
            ->add('opponentScore', 'integer', array('label' => 'Score de l\'adversaire', 'required' => true, 'invalid_message' => 'Le score doit être compris entre 0 et 20', 'invalid_message_parameters' => array('%num%' > 20)))
            ->add('description', 'textarea', array('label' => 'Résumé', 'required' => false))
        ;
    }

    public function getName()
    {
        return 'fsb_astt_admin_crudbundle_resulttype';
    }
}
