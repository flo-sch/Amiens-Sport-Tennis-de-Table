<?php

namespace FSB\ASTT\Admin\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            //->add('createdAt')
            //->add('updatedAt')
            //->add('deleted')
            ->add('number', 'integer', array('label' => 'N° de l\'équipe [pour son genre]', 'required' => true))
            ->add('civility', 'choice', array('label' => 'Genre', 'required' => true, 'choices' => array('M' => 'Masculine', 'W' => 'Féminine', 'Y' => 'Jeune')))
            ->add('division', 'text', array('label' => 'Division', 'required' => true))
            ->add('nbPlayers', 'integer', array('label' => 'Nombre de joueurs', 'required' => true))
            ->add('officialLink', 'url', array('label' => 'Lien officiel fftt.com', 'required' => true))
            ->add('leader', 'entity', array('label' => 'Capitaine', 'required' => false, 'empty_value' => 'Choisissez un joueur', 'class' => 'FSBASTTCoreBundle:Player',
                'query_builder' => function(\FSB\ASTT\CoreBundle\Repository\PlayerRepository $er) {
                    return $er->findActivePlayer();
                }
            ))
        ;
    }

    public function getName()
    {
        return 'fsb_astt_admin_crudbundle_teamtype';
    }
}
