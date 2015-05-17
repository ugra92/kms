<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('heading', 'text', array('attr'=>array('class'=>'form-control')))
            ->add('content', 'textarea', array('attr'=>array('class'=>'form-control textarea-reset', 'rows'=>'20')))
            ->add('save', 'submit', array('attr'=>array('class'=>'btn btn-success')));
    }

    public function getName()
    {
        return 'article';
    }
}