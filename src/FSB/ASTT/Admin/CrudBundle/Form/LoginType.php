<?php

namespace FSB\ASTT\Admin\CrudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class LoginType extends AbstractType {
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('username', 'text', array('label' => 'Nom d\'utilisateur', 'required' => true))
            ->add('password', 'password', array('label' => 'Mot de passe', 'required' => true))
        ;
    }
    
    public function getName()
    {
        return 'fsb_astt_admin_crudbundle_logintype';
    }
}

?>
