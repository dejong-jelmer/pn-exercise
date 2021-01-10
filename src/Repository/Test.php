<?php
namespace Repository;
class Test {
    public function __construct(){}

    /**
     * Convert array
     *
     * @param array $array
     */
    public function convert_array(array $array) :array 
    {
        $newArray = [];
        foreach ($array as $key => $value) {
            $newArray[$value][] = ($book = array_search($value, $array));
            unset($array[$book]);
        }
        return $newArray;
    }

    /**
     * Merge 2 arrays and remove duplicates
     *
     * @param array $array1
     * @param array $array2
     */
    public function merge_array(array $array1, array $array2) :array 
    {
        return array_unique(array_merge($array1, $array2));
    }
}