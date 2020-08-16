<?php
//14-12

$a = 1;
$b = 2;
$c = 3;
$sum = 0;

change($a, $b, $c);
$sum = $a + $b + $c;
print $sum;

function change($a, $b, $c)
{
    global $a;
    global $b;
    $b = 20;
    $GLOBALS['c'] = 30;
}
