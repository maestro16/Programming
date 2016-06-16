<?php
// Start inspection
session_start();
$user = $_SESSION["user"];
$stat = $_SESSION["auth"];
if ((!is_null($user))&&($stat == "ok" )) {
// аутентификация успешно проведена
$name = $user;
}
// переходим на страницу аутентификации
else header('Location: authorize.html');
// End inspection
?>
