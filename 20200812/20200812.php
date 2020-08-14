<?php
//歯抜け言葉
$str = fgets(STDIN);
if (strpos($str, 'は') !== false) {
    $output_str = str_replace('は', '', $str);
    echo $output_str;
} else {
    echo $str;
}
