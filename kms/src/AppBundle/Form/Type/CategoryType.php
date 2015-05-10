<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category_name', 'text', array('attr'=>array('class'=>'form-control')))
            ->add('save', 'submit', array('attr'=>array('class'=>'btn btn-success')));
    }

    public function getName()
    {
        return 'category';
    }
}