<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    include __DIR__.'/functions.php';
    $records = ghostBook();
    foreach ($records as $record) {
        echo $record.'<br/>';
    }

?>
<form method="post" action="/task4/add.php">
    <input type="text" name="record">
    <button type="submit">Добавить</button>
</form>
</body>
</html>




