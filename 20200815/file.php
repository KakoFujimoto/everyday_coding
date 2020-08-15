<?php

$file = fopen('example.txt', 'rb');

for ($line = fgets($file); !feof($file); $line = fgets($file)) {
    $line = trim($line);
    print '<h1>' . $line . '</h1>';
}
fclose($file);
