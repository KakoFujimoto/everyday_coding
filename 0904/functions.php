<?php

function calcAge(int $birthday): int
{
    return (int)((date('Ymd') - $birthday) / 10000);
}
