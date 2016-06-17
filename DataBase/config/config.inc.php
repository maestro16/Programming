<?php
$host="mysql.hostinger.ru";       // IP адрес сервера БД или если локальный ПК localhost
$user="u516131903_ilia";         // Имя пользователя
$pass="password"; // Пароль пользователя
$name="u516131903_proj";        // Имя базы данных
if ($_SERVER['SERVER_ADDR'] == "::1") {
    $host ="localhost";
    $user ="root";
    $pass ="";
};
 ?>
