<?php
//5-9

function add($a, $b)
{
    $a = 100;
    global $b;
    $b = 200;
    print 'local_$a =>' . $a . ', local_$b =>' . $b;
    print ',';
}

$a = 10;
$b = 20;
add($a, $b);
print 'blobal_$a =>' . $a . ', global_$b =>' . $b;
