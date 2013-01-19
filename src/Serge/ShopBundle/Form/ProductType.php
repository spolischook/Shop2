<?php

namespace Serge\ShopBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\Common\Collections\ArrayCollection;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $aCat = array();
        foreach ($options['data']->getCategories() as $cat) {
            $aCat[] = $cat;
        }
        $categoryCollection = new ArrayCollection($aCat);
        $builder
            ->add('name')
            ->add('description')
            ->add('categories', 'collection', array(
                'type' => new CategoryType(),

                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,

                'prototype' => true,
                'prototype_name' => 'category__name__'))
            ->add('existCategories', 'entity', array(
                'class' => 'ShopBundle:Category',
                'property' => 'name',
                'required' => false,
                'multiple' => true,
                'data' => $categoryCollection,
            ))
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
