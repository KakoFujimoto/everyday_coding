<?php

$name = 'Apple';
$score = 32.246;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <pre>
    <?php
    // $info = "[$name][$score]";
    // echo $info . PHP_EOL;

    // $info = sprintf("[%15s][%10.2f]", $name, $score);
    // echo $info . PHP_EOL;

    // $info = sprintf("[%-15s][%010.2f]", $name, $score);
    // echo $info . PHP_EOL;

    printf("[%-15s][%010.2f]" . PHP_EOL, $name, $score);
    ?>
    </pre>
</body>

</html>
