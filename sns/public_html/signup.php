<?php

require_once(__DIR__ . '/../config/config.php');

$app = new MyApp\Controller\Signup();

$app->run();


?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>

<body>
    <form action="" method="post" id="signup">
        <p><input type="text" name="email" placeholder="email" value="<?=
                                                                            isset($app->getValues()->email) ? h($app->getValues()->email) : ''; ?>"></p>
        <p><?= h($app->getErrors('email')); ?></p>
        <p><input type="password" name="password" placeholder="password"></p>
        <p><?= h($app->getErrors('password')); ?></p>
        <div onclick="document.getElementById('signup').submit();">Sign Up</div>
        <p><a href="http://localhost:8888/everyday_coding/sns/public_html/login.php">login</a></p>
        <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
    </form>
</body>

</html>
