<?php

if (isset($_COOKIE['visitCounter'])) {
    $visitCounter = $_COOKIE['visitCounter'];
} else {
    $visitCounter = 0;
}

$visitCounter++;

if (isset($_COOKIE['lastVisit'])) {
    $lastVisit = \date('d-m-Y');
} else {
    $lastVisit = '';
}

\setcookie('visitCounter', $visitCounter);
\setcookie('lastVisit', $lastVisit);

if ($visitCounter === 1) {
    echo 'Добро пожаловать';
} else {
    echo "Вы уже тут были {$_COOKIE['visitCounter']} раз, последний раз {$lastVisit}";
}
