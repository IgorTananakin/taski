<?php 
//подключение к бд
function db() {
    // $db = new PDO('mysql:host=172.22.0.4;dbname=task', 'root', 'root');
    $db= new PDO('mysql:host=localhost;dbname=taski', 'root', '');
    return $db;
    //$sql = 'SELECT * FROM user';
    //$sth = $dbh->prepare($sql);
    //$sth->execute();
    //$data = $sth->fetchAll();
    //var_dump($data);
}
//получение запроса в виде массива о наличии логина пользователя в бд
function getRequesUserBd($db,$login) {
    $sql = "SELECT * FROM user WHERE login= '". $login."'";
    $sth = $db->prepare($sql);//подготовить
    $sth->execute();//выполнить
    $data = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $data;
}