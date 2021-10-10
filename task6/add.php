<?php
include __DIR__ . '/classes/GuestBook.php';

if ( !empty($_POST['gost'])) {
    $guestBook = new GuestBook(__DIR__.'/bd.txt');
    $guestBook->append($_POST['gost']);
    $guestBook->save();

}

header('Location: /task6/index.php');
die;