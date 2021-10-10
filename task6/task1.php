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

// Блок работы с гостевой книгой
include __DIR__ . '/classes/GuestBook.php';
$guestBook = new GuestBook(__DIR__.'/data.txt');
$guestBook->append('Новая строка');
$guestBook->save();

var_dump($guestBook->getData());
var_dump($guestBook->methodThis());
?>

<h2>Галерея</h2>

    <form method="post" action="/6/index.php" enctype="multipart/form-data">
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
