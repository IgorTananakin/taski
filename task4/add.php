<?php
//var_dump(__DIR__.'/ghost.txt');
//include __DIR__.'/functions.php';
if (isset($_POST['record']) && !empty($_POST['record'])) {
    $records = ghostBook();
    $records[] = $_POST['record'];
    file_put_contents(__DIR__.'/ghost.txt', implode("\n", $records));
}

header('Location: /task4/task1.php');
exit;
