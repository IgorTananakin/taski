<?php
session_start();
include __DIR__.'/../functions.php';

$types = ['image/png', 'image/jpeg','image/jpeg'];
//var_dump(getCurrentUser());

if (isset($_FILES['myimage']) && in_array($_FILES['myimage']['type'], $types) && null !== getCurrentUser()) {
    if (0 == $_FILES['myimage']['error']) {
        $uploaded = move_uploaded_file($_FILES['myimage']['tmp_name'], __DIR__.'/img/'.$_FILES['myimage']['name']);
        if (true === $uploaded) {
            $res = fopen(__DIR__.'/logs.txt', 'a');
            fwrite($res, $_SESSION['user'].' '.date('Y-m-d H:i:s').' '.$_FILES['myimage']['name']."\n");
            fclose($res);
            header('Location: /task5/gallery/index.php');
        }
    }
} else {
    ?>Не удалось<?php
}