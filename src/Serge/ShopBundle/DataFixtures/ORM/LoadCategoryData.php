<?php

namespace Serge\ShopBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Serge\ShopBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setName('Laptops');
        $category->setDescription('A laptop computer is a personal computer for mobile use.
            A laptop has most of the same components as a desktop computer, including a display,
            a keyboard, a pointing device such as a touchpad (also known as a trackpad) and/or a
            pointing stick, and speakers into a single unit.');
        $manager->persist($category);
        $this->addReference('laptop', $category);

        $category = new Category();
        $category->setName('Tablet');
        $category->setDescription('A tablet computer, or simply tablet, is a one-piece mobile computer,
            primarily operated by touchscreen (the user\'s finger essentially functions as the mouse and cursor,
            removing the need for the physical (i.e., mouse and keyboard) hardware components necessary for
            a desktop or laptop computer; and, an onscreen, hideable virtual keyboard is integrated into the display)');
        $manager->persist($category);
        $this->addReference('tablet', $category);

        $category = new Category();
        $category->setName('Digital SLR');
        $category->setDescription('Digital single-lens reflex cameras (also named digital SLR or DSLR)
            are digital cameras combining the parts of a single-lens reflex camera (SLR) and a digital camera back,
            replacing the photographic film.');
        $manager->persist($category);
        $this->addReference('Digital SLRs', $category);

        $category = new Category();
        $category->setName('Phone');
        $category->setDescription('A mobile phone (also known as a cellular phone, cell phone and a hand phone) is
            a device that can make and receive telephone calls over a radio link while moving around
            a wide geographic area. It does so by connecting to a cellular network provided by a mobile phone operator,
            allowing access to the public telephone network.');
        $manager->persist($category);
        $this->addReference('phone', $category);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}