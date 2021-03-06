<?php
session_start();
require('dbconnect.php');

//CSRF対策
function setToken(): void
{
    $token = sha1(uniqid(mt_rand(), true));
    $_SESSION['token'] = $token;
}

function isCorrectToken(): bool
{
    if (!empty($_SESSION['token']) && ($_SESSION['token'] === $_POST['token'])) {
        return true;
    } else {
        return false;
    }
}

// 取得・DBへデータ挿入
$name = $_POST['name'];
$message = $_POST['message'];

function insertPost(string $name, string $message, PDO &$db): void
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message']) && isset($_POST['name'])) {

        try {
            $sql = 'INSERT INTO messages (message,name,created) VALUES (:message, :name, NOW())';
            $stmt = $db->prepare($sql);
            $params = array(':message' => $message, ':name' => $name);
            $stmt->execute($params);
        } catch (PDOException $e) {
            echo 'データベースエラー';
        }

        if (!empty($_POST['submit'])) {
            if (isCorrectToken() === true) {
                echo 'SEND!';
            } else {
                echo '不正なアクセスです';
                header('Location: ./');
            }
        }
    } else {
        setToken();
    }
}

//htmlspecialchars短縮
function h(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

// 出力＆並び替え
function getPostList(PDO &$db): object
{
    try {
        $sql = 'SELECT message, name, created FROM messages ORDER BY created';
        if (isset($_POST['sort']) && $_POST['sort'] === 'desc') {
            $sql = $sql . ' DESC';
        }
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt;
    } catch (PDOException $e) {
        echo 'データベースエラー';
    }
}

insertPost($name, $message, $db);
$result = getPostList($db);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ひとこと掲示板</title>
</head>

<body>
    <h1>ひとこと掲示板</h1>
    <form action="" method="post">
        <p>なまえ</p><input type="text" name="name">
        <p>ひとこと</p><input type="text" name="message">
        <p>投稿する</p><input type="submit" value="submit">
        <input type="hidden" namr="token" value="<?php echo h($_SESSION['token']); ?>">
    </form>
    <!-- 並び替えボタン -->
    <form action="" method="post">
        <input type="radio" name="sort" value="asc" <?php if (!isset($_POST['sort']) || $_POST['sort'] !== 'desc') {
                                                        echo 'checked';
                                                    } ?>>古い順
        <input type="radio" name="sort" value="desc" <?php if (isset($_POST['sort']) || $_POST['sort'] === 'desc') {
                                                            echo 'checked';
                                                        } ?>>新しい順
        <input type="submit" value="並び替え">
    </form>
    <?php
    foreach ($result as $post) :
    ?>

        <p>name:<?php echo h($post['name']); ?></p>
        <p>message:<?php echo h($post['message']); ?></p>
        <p>created:<?php echo h($post['created']); ?></p>

    <?php
    endforeach;
    ?>

</body>

</html>
