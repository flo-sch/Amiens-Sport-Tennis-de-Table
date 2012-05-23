<?php

namespace FSB\ASTT\Admin\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PlayerType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            //->add('createdAt')
            //->add('updatedAt')
            //->add('hidden')
            ->add('licence', 'text', array('label' => 'N° de licence', 'required' => true))
            ->add('firstname', 'text', array('label' => 'Prénom', 'required' => true, 'max_length' => 45))
            ->add('lastname', 'text', array('label' => 'Nom de famille', 'required' => true, 'max_length' => 45))
            ->add('birthday', 'birthday', array('label' => 'Date de naissance', 'required' => true, 'widget' => 'single_text', 'format' => 'MM/dd/yyyy', 'attr' => array('class' => 'datepicker')))
            ->add('civility', 'choice', array('label' => 'Civilité', 'required' => true, 'choices' => array('M' => 'Homme', 'W' => 'Femme')))
            ->add('category', 'choice', array('label' => 'Catégorie', 'required' => true, 'choices' => array('P' => 'Poussin', 'B1' => 'Benjamin 1', 'B2' => 'Benjamin 2', 'M1' => 'Minime 1', 'M2' => 'Minime 2', 'C1' => 'Cadet 1', 'C2' => 'Cadet 2', 'J1' => 'Junior 1', 'J2' => 'Junior 2', 'J3' => 'Junior 3', 'S' => 'Sénior', 'V1' => 'Vétéran 1', 'V2' => 'Vétéran 2', 'V3' => 'Vétéran 3', 'V4' => 'Vétéran 4')))
            ->add('points', 'number', array('label' => 'Points', 'required' => true))
            ->add('classement', 'text', array('label' => 'Classement', 'required' => true, 'max_length' => 5))
            ->add('mainTeam', 'entity', array('label' => 'Equipe principale', 'required' => false, 'empty_value' => 'Choisissez une équipe', 'class' => 'FSBASTTCoreBundle:Team',
                'query_builder' => function(\FSB\ASTT\CoreBundle\Repository\TeamRepository $er) {
                    return $er->findAllDisplayed(true);
                }
            ))
            ->add('secondTeam', 'entity', array('label' => 'Equipe secondaire [Femme évoluant aussi dans une équipe masculine', 'required' => false, 'empty_value' => 'Choisissez une équipe', 'class' => 'FSBASTTCoreBundle:Team',
                'query_builder' => function(\FSB\ASTT\CoreBundle\Repository\TeamRepository $er) {
                    return $er->findAllDisplayedByCivility('M', true);
                }
            ))
            ->add('thirdTeam', 'entity', array('label' => 'Equipe jeune [éventuelle]', 'required' => false, 'empty_value' => 'Choisissez une équipe', 'class' => 'FSBASTTCoreBundle:Team',
                'query_builder' => function(\FSB\ASTT\CoreBundle\Repository\TeamRepository $er) {
                    return $er->findAllDisplayedByCivility('Y', true);
                }
            ))
        ;
    }

    public function getName()
    {
        return 'fsb_astt_admin_crudbundle_playertype';
    }
}
