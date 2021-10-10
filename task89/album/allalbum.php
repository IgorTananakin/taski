<?php
session_start();
require __DIR__.'/../mysql.php';
require __DIR__ . '/../autoload.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <title>Список альбомов</title>
</head>
<body>
<h2>Список альбомов</h2>

<table>
    <tr>
        <th>Альбом</th>
        <th>год</th>
    </tr>
    <!-- <tr> -->
    <?php 
        $sql = "SELECT * FROM album ";
        $sth = $db->prepare($sql);//подготовить
        $sth->execute();//выполнить
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $row) {
    ?>

    <tr>

    <?php
        echo '<td>'.$row['name'].'</td>';
        echo '<td>'.$row['date'].'</td>';
        }  
    ?>
   
    </tr>
    
</table>
</body>
</html>
