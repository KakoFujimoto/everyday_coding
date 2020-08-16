<?php
$data = file_get_contents('./test.txt');
$str = mb_convert_encoding($data, 'utf-8', 'sjis');
