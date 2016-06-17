<?php
	require 'config/config.inc.php';
	require 'clasess/connect.class.php';

	// Соединение с базой данных
	DataBase::$host = $host;
	DataBase::$user = $user;
	DataBase::$pass = $pass;
	DataBase::$name = $name;
		$dbh = DataBase::getInstance()->connect();
	// Обрабатывает ряд результата запроса и возвращает ассоциативный массив
	// Закрываем соединение с базой данных
	?>
