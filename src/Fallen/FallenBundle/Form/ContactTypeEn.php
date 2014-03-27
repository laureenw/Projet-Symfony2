<?php

namespace Fallen\FallenBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactTypeEn extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email', array('attr'=>array('class'=>'form-control')));
        $builder->add('subject', 'text', array('attr'=>array('class'=>'form-control')));
        $builder->add('message', 'textarea', array('attr'=>array('class'=>'form-control')));
        $builder->add('captcha', 'genemu_recaptcha',array('mapped'=>false));
    }

    public function getName()
    {
        return 'contact';
    }
}
