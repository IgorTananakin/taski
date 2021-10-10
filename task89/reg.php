<?php
var_dump($_POST);
require __DIR__.'/mysql.php';
//var_dump($db);

if(isset($_POST["register"])){

    if(isset($_POST['submit'])) {
        $err = [];
        if (strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30) {
            $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
        }
        $query = mysqli_query($db, "SELECT id FROM user WHERE login='" . mysqli_real_escape_string($db, $_POST['login']) . "'");
        if (mysqli_num_rows($query) > 0) {
            $err[] = "Пользователь с таким логином уже существует в базе данных";
        }
        // Если нет ошибок, то добавляем в БД нового пользователя
        if(count($err) == 0)
        {

            $login = $_POST['login'];

            // Убераем лишние пробелы и делаем двойное хеширование
            $password = md5(md5(trim($_POST['password'])));

            mysqli_query($db,"INSERT INTO user SET login='".$login."', password='".$password."'");
            header("Location: /login.php");
            exit();
        }
        else
        {
            print "<b>При регистрации произошли следующие ошибки:</b><br>";
            foreach($err AS $error)
            {
                print $error."<br>";
            }
        }
    }
}
