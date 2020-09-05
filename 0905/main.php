<?php

$posts = [];
// $post[0] = 'hello';
$posts[0] = ['text' => 'hello', 'likes' => 0];
$posts[1] = ['text' => 'hello again', 'likes' => 0];
// $post[1] = 'lemon';

// print_r($posts);

function show($hoge)
{
    printf('%s (%d)' . PHP_EOL, $hoge['text'], $hoge['likes']);
}

show($posts[0]);
show($posts[1]);
