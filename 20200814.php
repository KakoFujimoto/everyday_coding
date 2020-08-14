<?php

class Post
{
    public $text;
    public $likes;

    public function show()
    {
        printf('%s (%s)' . PHP_EOL, $this->text, $this->likes);
    }
}


$posts = [];
$posts[0] = ['text' => 'hello', 'likes' => 0];
$posts[1] = ['text' => 'hello again', 'likes' => 0];

function show($post)
{
    printf('%s (%s)' . PHP_EOL, $post['text'], $post['likes']);
}

show($posts[0]);
show($posts[1]);
