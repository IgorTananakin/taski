<?php
session_start();
include __DIR__.'/../functions.php';
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<?php
if (null !== getCurrentUser()) { ?>
    <form method="post" action="/task5/gallery/upload.php" enctype="multipart/form-data">
        <input type="file" name="myimage">
        <button type="submit">Добавить</button>
    </form>
    <?php
}

?>

<?php

$list = scandir(__DIR__.'/img');//получаю всё из директория img
$list = array_diff($list, ['.', '..']);//Вычислить расхождение массивов метод на соответвие
foreach ($list as $img) {
    ?>
    <img src="/task5/gallery/img/<?php echo $img ?>"/>
    <?php
}
?>

</body>
</html>