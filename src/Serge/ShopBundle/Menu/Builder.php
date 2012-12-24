<?php
namespace Serge\ShopBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function sidebarMenu(FactoryInterface $factory, $option)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'nav nav-list'));

        $menu->addChild('Entities', array('labelAttributes' => array('class' => 'nav-header')));
        $menu->setLinkAttributes(array('class' => 'nav-header'));

        $menu->addChild('Home', array('route' => 'shop_homepage'));
        $menu->addChild('Category', array('route' => 'category'));
        $menu->addChild('Product', array('route' => 'product'));

        return $menu;
    }
}