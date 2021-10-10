<?php

// Возвращаем массив всех пользователей
function getUsersList() {
    return include __DIR__.'/bd.php';
};

// Проверка существования пользователя
function existsUser($login) {
    $users = getUsersList();
    foreach ($users as $user) {
        if ($user['login'] === $login) {
            return true;
        }
    }
    return false;
}

// Проверка пользователя
function сheckPassword($login, $password) {
    if (true === existsUser($login)) {
        $users = getUsersList();
        foreach ($users as $user) {
            if ($user['login'] === $login) {
                if (password_verify($password, $user['password'])) {
                    return true;
                }
            }
        }
    }
    return false;
}


// Получаем имя текущего пользователя
function getCurrentUser() {
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        return $_SESSION['user'];
    } else {
        return null;
    }
}















assert(true === сheckPassword('Admin', '234'));
assert(true === сheckPassword('Igor', '123'));
assert(false === сheckPassword('Igor1', '123'));
assert(false === сheckPassword('Igor', '12345'));
