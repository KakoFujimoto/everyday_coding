<?php

require_once(__DIR__ . '/../config/config.php');

$app = new MyApp\Controller\Login();

$app->run();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <form action="index.php" method="post" id="login">
        <p><input type="text" name="email" placeholder="email" value="<?=
                                                                            isset($app->getValues()->email) ? h($app->getValues()->email) : ''; ?>"></p>
        <p><input type="password" name="password" placeholder="password"></p>
        <p><input type="submit" value="login" onclick="document.getElementById('login').submit();"></p>
        <p><?= h($app->getErrors('login')); ?></p>
        <p><a href="signup.php">log in</a></p>
        <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
    </form>
</body>

</html>
