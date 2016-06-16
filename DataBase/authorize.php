<?php
  require_once 'connectBD.php';

$inpLogin = $_POST['login'];
$inpPass = $_POST['password'];
$sql = "SELECT * FROM `u516131903_proj`.`Users` WHERE `login` LIKE '%$inpLogin%' AND `password` LIKE '%$inpPass%'";
$result = $conn -> query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$login = $row["login"];
$password = $row["password"];
if (($inpLogin == $login) && ($inpPass == $password)) {
session_start();
$_SESSION["auth"] = "ok";
$_SESSION["user"] = $login;
header('Location: MySQL.php');
//echo "Логин или пароль введен ВЕРНО!";
//echo "<a href=".$main_page_url.">".$main_page_url."</a>";
} else { // echo "Логин или пароль введен неверно! ";
 //echo "Через 10 секунд мы будем возвращены на форму авторизации";
 sleep(1);
 header('Location:authorize.html');
}
?>
