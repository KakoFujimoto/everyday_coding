<?php

require_once(__DIR__ . '/../config/config.php');


var_dump($_SESSION['me']);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <form action="logout.php" method="post" id="logout">
        xxxx@gmail.com <input type="submit" value="log out">
        <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
    </form>
    <h1>users</h1>
    <ul>
        <li>dummy</li>
        <li>dummy</li>
        <li>dummy</li>
    </ul>
</body>

</html>
