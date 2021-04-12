<?php

// Параметры для подключения
$db_host = "localhost";
$db_user = "mysql"; // Логин БД
$db_password = "mysql"; // Пароль БД
$db_base = 'form_bd'; // Имя БД
$db_table = "users"; // Имя Таблицы БД

try {
    // Подключение к базе данных
    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    // Устанавливаем корректную кодировку
    $db->exec("set names utf8");
    // Собираем данные для запроса

    $result = true;
}
catch (PDOException $e) {
    // Если есть ошибка соединения или выполнения запроса, выводим её
    print "Ошибка!: " . $e->getMessage() . "<br/>";
}

