<?php

function name($firstName){
    $count = strlen($firstName);
    $symbol = substr($firstName, $count-2);
    switch($symbol) {
        case 'я':
            return 0;
            break;
        case 'й':
        case 'ь':
        case 'г':
        case 'а':
            return 1;
            break;
        default:
            return null;
            break;
    }
}




assert(0 == name('Аня'));
assert(1 == name('Дима'));
assert(1 == name('Сергей'));
assert(1 == name('Миша'));
assert(1 == name('Саша'));
assert(0 == name('Мария'));
assert(1 == name('Олег'));
assert(null === name('Ан'));
assert(null === name(' '));
