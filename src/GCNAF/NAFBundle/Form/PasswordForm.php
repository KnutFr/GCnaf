<?php

namespace GCNAF\NAFBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PasswordForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder
            ->add('oldPassword', 'password', array('label' => 'Ancien mot de Passe : '))
            ->add('newPassword', 'password', array('label' => 'Nouveau mot de Passe : '))
            ->add('confirmPassword', 'password', array('label' => 'Confirmation mot de Passe : '))
            ->add('btnChange', 'submit', array('label' => 'Changer', 'attr' => array('class' => 'btnsubmit')))
        ;
    }    
    public function getName()
    {
        return 'passwordForm';
    }    
    
}