<?php
namespace Serge\ShopBundle\Twig;

class ShopExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'dotdotdot' => new \Twig_Filter_Method($this, 'dotdotdot')
        );
    }

    public function dotdotdot($string, $number=10)
    {
        if (strlen($string) <= $number)
            return $string;
        if($string != '') {
            $str = '';
            $aStr = explode(' ', $string);

            for ($i=0; $number>$i; $i++) {
                $str .= $aStr[$i].' ';
            }

            $str = rtrim($str).'...';
            return $str;
        }

    }

    public function getName()
    {
        return 'shop_extension';
    }
}