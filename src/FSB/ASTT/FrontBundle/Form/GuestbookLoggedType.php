<?php

namespace FSB\ASTT\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class GuestbookLoggedType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        
    }
    
    public function getName()
    {
        return 'fsb_astt_frontbundle_guestbookloggedtype';
    }
}