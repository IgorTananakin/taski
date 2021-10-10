<?php

require __DIR__ . '/../autoload.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <title>Галлерея</title>
</head>
<body>
<h2>Галерея</h2>

<form method="post" action="/task89/gallery/gallery.php" enctype="multipart/form-data">
    <input type="file" name="myimage">
    <button type="submit">Добавить</button>
</form>
<?php

include __DIR__.'/../classes/Uploader.php';

if (isset($_FILES['myimage'])) {
    $uploader = new Uploader('myimage');
    $uploader->upload();
}

?>


<?php
$list = scandir(__DIR__.'/../img');//получаю всё из img
$list = array_diff($list, ['.', '..']);//расхождения массивов
foreach ($list as $img) {
    ?>
    <img class="img" src="/task89/img/<?php echo $img ?>"/>

<?php } ?>
</body>
</html>
