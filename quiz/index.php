<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Quiz.php');

$quizSet = [];
$quizSet[] = [
    'q' => 'What is A?',
    'a' => ['A0', 'A1', 'A2', 'A3']
];
$quizSet[] = [
    'q' => 'What is B?',
    'a' => ['B0', 'B1', 'B2', 'B3']
];
$quizSet[] = [
    'q' => 'What is C?',
    'a' => ['C0', 'C1', 'C2', 'C3']
];
$current_num = 0;

$quiz = new MyApp\Quiz();

$data = $quiz->getCurrentQuiz();
shuffle($data['a']);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div id="container">
        <h1>Q.<?= h($data['q']); ?></h1>
    </div>
    <ul>
        <?php foreach ($data['a'] as $a) : ?>
            <li class="answer"><?= h($a); ?></li>
        <?php endforeach; ?>

        <li class="answer">2</li>
        <li class="answer">3</li>
        <li class="answer">4</li>
    </ul>
    <div id="btn" class="disabled">次の問題へ</div>
</body>

</html>
