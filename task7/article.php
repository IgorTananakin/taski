<?php

require __DIR__ . '/autoload.php';

$news = new News(__DIR__ . '/data.php');
$view = new View();
//var_dump($_GET['id']);

if (isset($_GET['id']) ) {
    $id  = $_GET['id'];
    //
} else {
    header('location: /task7/news.php');
}


$view->assing('articleOne', $news->getOneArticle($id));
$view->display(__DIR__ . '/template/article.php');
