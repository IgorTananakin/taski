<?php
// $db = new PDO('mysql:host=172.22.0.4;dbname=task', 'root', 'root');
$db= new PDO('mysql:host=localhost;dbname=taski', 'root', '');
return $db;
//$sql = 'SELECT * FROM user';
//$sth = $dbh->prepare($sql);
//$sth->execute();
//$data = $sth->fetchAll();
//var_dump($data);