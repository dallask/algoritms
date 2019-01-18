<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 18-Jan-19
 * Time: 17:07
 */

/**
 * @param $x
 *
 * @return float|int
 */
function fact($x)
{
    if ($x == 1) {
        return 1;
    } else {
        return $x * fact($x - 1);
    }
}

echo fact(5);
