<?php
// Лаб 1.
// Пользователь приходит на сайт - если пришел в первый раз, то пишем - добро пожаловать.
// Если не первый - вы у нас уже (count) раз, последний раз были (datetime) времени назад.

if (!isset($_COOKIE['visit_count'])) {
    $was = false;
} else {
    \setcookie('visit_count', $_COOKIE['visit_count'] += 1);
    \setcookie('last_date', (string)\date('Y-m-d H:i:s'));
    $was = true;
}

if (!$was) {
    echo 'Добро пожаловать';
} else {
    echo "Вы у нас уже были {$_COOKIE['visit_count']} раз, последний раз заходили: {$_COOKIE['last_date']}";
}


