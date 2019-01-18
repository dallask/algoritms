<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 18-Jan-19
 * Time: 16:17
 */

/**
 * @param array $box
 */
function searchKey(array $box)
{
    $queue = $box;
    while (!empty($queue)) {
        foreach ($queue as $key => $thing) {
            if (is_array($thing)) {
                $queue = array_merge($queue, $thing);
            } elseif ($thing === 'key') {
                echo 'Key is found!';
                unset($queue);
                break;
            }
            unset($queue[$key]);
        }
    }
}

$box = [
    'pen',
    'umbrella',
    [
        'pencil',
        'cat',
        'rainbow',
        [
            'phone',
            'bear',
            'hammer',
            'key',
        ],
    ],
];

searchKey($box);
