<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once dirname(__FILE__) . '/functions.php'; ?>
    <h3>置鮎龍太郎さんのプロフィールページ</h3>
    <ul>
        <li>氏名：置鮎龍太郎</li>
        <li>年齢：<?= calcAge(19820728) ?>歳</li>
        <li>居住：東京都</li>
    </ul>
</body>

</html>
