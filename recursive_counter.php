<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 18-Jan-19
 * Time: 16:46
 */

/**
 * @param int $start
 */
function recursiveCounter(int $start)
{
    if ($start < 0) {
        echo 'BOOM!!!';
        return;
    }

    echo $start . '... ';
    recursiveCounter($start - 1);
}

recursiveCounter(10);
