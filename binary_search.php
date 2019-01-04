<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 03-Jan-19
 * Time: 17:40
 */

/**
 * @param array $list
 * @param int   $item
 */
function binarySearch(array $list, int $item)
{
    $low = 0;
    $height = count($list);
    // check for empty array
    if ($height === 0) {
        return false;
    }
    $height = $height - 1;

    while ($low <= $height) {
        $mid = round(($low + $height) / 2, 0, PHP_ROUND_HALF_DOWN);

        if ($list[$mid] == $item) {
            return $mid;
        } elseif ($list[$mid] > $item) {
            $height = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }

    return 'Error: Element not found!';
}

$list = [1, 5, 8, 14, 19, 20, 27, 39, 40, 136];
$item = 19;

echo binarySearch($list, $item);