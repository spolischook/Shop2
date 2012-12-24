<?php

namespace Serge\ShopBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('category', 'collection', array(
            'type' => new CategoryType(),

            'allow_add' => true,
            'allow_delete' => true,

            'prototype' => true,
            'prototype_name' => 'category__name__'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Serge\ShopBundle\Entity\Product'
        ));
    }

    public function getName()
    {
        return 'serge_shopbundle_producttype';
    }
}
