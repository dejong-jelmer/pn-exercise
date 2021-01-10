<?php
namespace App\Repository;

class ArrayFactory {

    /**
     * Build books array
     */
    public static function getBooksArray() :array
    {
        return [
            'book1' => 'Stan',
            'book2' => 'Mikan',
            'book3' => 'Dionne',
            'book4' => 'Mikan',
            'book5' => 'Dionne',
            'book6' => 'Dionne'
        ];
    }

    /**
     * Build cms array
     *
     * @param  $number int
     */
    public static function getCmsArrayByNumber(int $key = 1) :array
    {
        $cmsArray = [
            1 => ['WordPress', 'Contentful', 'Magento', 'Typo3', 'Drupal', 'Joomla', 'DotCMS'],
            2 => ['Magento', 'Joomla', 'Kentico', 'Canvas CMS', 'Zephyr', 'Grav']
        ];
        return $cmsArray[$key];
    }

}