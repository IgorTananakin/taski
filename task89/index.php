<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Главная страница</title>
</head>
<body>
<div class="mainContect">
    <div class="header">
        <div>
            <a href="/task/task89/login.php">
                <?php 
                    if (!empty($_SESSION['user'])) {
                        echo $_SESSION['user'];
                    } else if (empty($_SESSION['user'])) {
                        echo 'Войти';
                    }
                    
                ?>
            </a>
            <a href="/task/task89/logout.php">Выйти</a>
            <a href="/task/task89/registration.php">Регистрация</a>
        </div>
    </div>
    <div class="container">
        <div>
            <a href="/task/task89/gallery/gallery.php">
                <h1>Галлерея</h1>
            </a>
        </div>
        <div>
            <a href="/task/task89/album/allalbum.php">
                <h1>Список альбомов</h1>
            </a>
        </div>
    </div>
</div>
</body>
</html>