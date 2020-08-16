<?php
//14-13

$num = 100;
function countdown($num)
{
    for ($i = 1; $i <= 10; $i++) {
        $num -= 10;
    }
}

countdown($num);
print $num;
