<?php
$posts = [];
$posts[0] = ['text' => 'hello', 'likes' => 0];
$posts[1] = ['text' => 'hello again', 'likes' => 0];

function show($post)
{
    printf('%s (%d)' . PHP_EOL, $post['text'], $post['likes']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<pre>
<?php
show($posts[0]);
show($posts[1]);
?>
</pre>
