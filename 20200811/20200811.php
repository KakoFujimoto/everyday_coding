<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ま〜きのっ</title>
</head>

<body>
    <main>
        <h1>花沢類に言わせたい言葉を入力して下さい</h1>
        <form action="index.php" method="post">
            <p>類、これを言って：</p><input type="text" name="saying">
            <p><input type="submit" value="submit"></p>
        </form>
        <?php
        if (!empty($_POST['saying'])) {
            $saying = $_POST['saying'];
            echo '花沢類：' . '「' . $saying . '」';
        }
        ?>
    </main>
</body>

</html>
