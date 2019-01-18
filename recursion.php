<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 18-Jan-19
 * Time: 16:38
 */

/**
 * @param array $box
 */
function lookForKey(array $box)
{
    foreach ($box as $key => $thing) {
        if (is_array($thing)) {
            lookForKey($thing);
        } elseif ($thing === 'key') {
            echo 'Key is found!';
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
        ],
        'key',
    ],
];

lookForKey($box);
