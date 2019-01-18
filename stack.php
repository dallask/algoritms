<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 18-Jan-19
 * Time: 17:00
 */

/**
 * @param string $name
 */
function greet(string $name)
{
    echo "Hello $name! \n";
    greet2($name);
    echo "Get ready to bye... \n";
    bye($name);
}

/**
 * @param string $name
 */
function greet2(string $name)
{
    echo "How are you doing, $name?\n";
}

/**
 * @param string $name
 */
function bye(string $name)
{
    echo "Bye $name!\n";
}

greet('Maggie');
