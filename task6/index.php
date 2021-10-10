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
include __DIR__ . '/classes/GuestBook.php';
$guestBook = new GuestBook(__DIR__.'/bd.txt');

?>
    <h2>Гостевая книга</h2>
    <form method="post" action="/task6/add.php">
        <input type="text" placeholder="Заполните поле" name="gost">
        <button type="submit">Добавить в книгу</button>
    </form>

    <?php
        foreach ($guestBook->getData() as $data) {
            echo $data.' <br>';
        }

    ?>

<h2>Галерея</h2>

    <form method="post" action="/task6/index.php" enctype="multipart/form-data">
        <input type="file" name="myimage">
        <button type="submit">Добавить</button>
    </form>
<?php

include __DIR__.'/classes/Uploader.php';

    if (isset($_FILES['myimage'])) {
        $uploader = new Uploader('myimage');
        $uploader->upload();
    }?>
</body>
</html>
