<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>この商品をどこでお知りになりましたか？</p>
    <form action="foreach.php" method="post">
        <?php
        $devices = ['インターネット広告', 'ダイレクトメール', '中吊り', 'テレビ'];
        foreach ($devices as $item) {
            echo '<p>';
            echo '<input type="checkbox" name="devices[]" value="', $item, '" >';
            echo $item;
            echo '</p>';
        }
        ?>
        <p><input type="submit" value="submit"></p>
    </form>
</body>

</html>
