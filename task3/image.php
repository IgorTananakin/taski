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
$arr_image = include __DIR__.'/mas.php';
if (isset($arr_image[$_GET['id']])) { ?>?>
    <img src="<?php echo $arr_image[$_GET['id']];?>" alt="" >
<?php } else { ?>
<p> Изображение не найдено!</p>
<?php } ?>
</body>
</html>



















return [
1 => 'photo1.jpg',
2 => 'photo2.jpg',
3 => 'photo3.jpg'
];