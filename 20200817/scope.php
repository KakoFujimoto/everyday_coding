<?php
// 5-9

function add($a, $b)
{
    $a = 100;
    global $b;
    $b = 200;
    print '関数内の変数は' . $a . 'と' . $b . 'です' . PHP_EOL;
}

$a = 10;
$b = 20;
add($a, $b);
print '関数外の変数は' . $a . 'と' . $b . 'です';
