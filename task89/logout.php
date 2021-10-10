<?php
session_start();
var_dump($_SESSION['user']);
if (isset($_SESSION['user'])) {
    session_destroy();
    header('location: /task/task89/index.php' );
    exit;

}