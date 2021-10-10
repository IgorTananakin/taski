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
    $list = scandir(__DIR__.'/img');//получаю всё из img
    $list = array_diff($list, ['.', '..']);//расхождения массивов
    foreach ($list as $img) {
?>
    <img src="/img/<?php echo $img ?>"/>

<?php } ?>

    <form method="post" action="/task4/upload.php" enctype="multipart/form-data">
        <input type="file" name="myimage">
        <button type="submit">Добавить</button>
    </form>
</body>
</html>
