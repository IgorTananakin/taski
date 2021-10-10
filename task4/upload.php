<?php

$types = ['image/png','image/jpeg','img/jpeg'];
if (isset($_FILES['myimage']) && in_array($_FILES['myimage']['type'], $types)) {
    if (0 == $_FILES['myimage']['error']) {
        var_dump(__DIR__);
        move_uploaded_file($_FILES['myimage']['tmp_name'], __DIR__.'/img/'.$_FILES['myimage']['name']);
    }

} else {
    echo "Не удалось";
}
