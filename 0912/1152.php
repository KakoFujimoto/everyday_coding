<?php
class X
{
    public $a;
    public $b;
}

$x = new X;
$x->a = 1;
$x->b = 2;

$y = clone $x;
$y->a = 3;

echo 'x:' . $x->a, $x->b;
echo 'y:' . $y->a, $y->b;
