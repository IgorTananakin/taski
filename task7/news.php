<?php

require __DIR__ . '/autoload.php';

$news = new News(__DIR__ . '/data.php');

$view = new View();
$view->assing('articles', $news->getAllArticles());
$view->display(__DIR__ . '/template/news.php');