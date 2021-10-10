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

    require __DIR__ . '/autoload.php';

    $view = new View;
    $view
        ->assing('h1', 'заголовок h1')
        ->assing('p', 'текст p')
    ;

    $view->display(__DIR__ . '/task7.php');
    $view->render(__DIR__ . '/task7.php');

    ?>


</body>
</html>
