<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 18-Jan-19
 * Time: 15:48
 */

/**
 * @param array $array
 *
 * @return int|string
 */
function smallestIndex(array $array)
{
    $smallest = $array[0];
    $smallestIndex = 0;

    foreach ($array as $key => $value) {
        if ($value < $smallest) {
            $smallest = $value;
            $smallestIndex = $key;
        }
    }

    return $smallestIndex;
}

/**
 * @param array $array
 *
 * @return array
 */
function selectionSort(array $array)
{
    $arrangedArray = [];

    foreach ($array as $key => $value) {
        $smallestIndex = smallestIndex($array);
        $arrangedArray[] = $array[$smallestIndex];
        unset($array[$smallestIndex]);
        $array = array_values($array);
    }

    return $arrangedArray;
}

selectionSort([5, 3, 6, 2, 1]);
